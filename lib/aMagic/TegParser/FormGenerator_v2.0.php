<?php
///Для вывода ошибок на экран  ini_set('display_errors','on'); on || of
#print_r(function_exists('mb_internal_encoding')); //проверка 1-подключено, 0 - не подключено

error_reporting(E_ALL);
ini_set('display_errors', 'on');
mb_internal_encoding('UTF-8');


class FormGenerator
{
	#private GETPARAMETR = (isset($_GET)) ? $_GET : '';
	// В шаблоне разделитель строк '|' 
private const SHABLON = '
<!-- Можно писать коментарии - они удаляются -->
<section>
<form id="formid" action="./" method="POST">
	<!--section-->
	<h1>{content1}</h1>
	<h5>{content2}</h5>
	<!--/section-->
|	<details {attrs}>
		<summary>{namegroup}</summary>
|		<div class="row">
|			<div class="col">
|				<label class="form-label" for="{id}">{label}</label>
				{tag} class="form-control" {attrs}>{tagend}
				{datalist}
|			</div>
|		</div>
|	</details>
|	{content3}
	<br>
	<button type="submit" class="btn btn-primary" for="formid">Отправить</button>
</form>
</section>
<style>
section {
	margin: 2em auto;
	padding: 2em 2em;
    display: flex;
    max-width: 60em;
	background: #fff;
    border-radius: 0.75rem;
    line-height: 1.6;
    overflow: hidden;
    margin-bottom: 2rem;
    position: relative;
    font-size: .875rem;
    box-shadow: 0 10px 15px -3px rgb(0 0 0 / 10%), 0 4px 6px -2px rgb(0 0 0 / 5%);
}
summary {
    padding: 12px 16px;
    cursor: pointer;
    font-weight: 600;
    background-color: #f7f7f7;
    list-style: none;
}
</style>
';

//////////////// Блок определения type и тега для input ////////////	
// Здесь можно написать слова 
	private const FIELD_TYPES = [
		'email' => ['email', 'eml', 'mail'],
		'password' => ['pass', 'parol', 'pwd'],
		'tel' => ['phon', 'tel', 'fon'],
		'url' => ['url', 'web', 'site'],
		'date' => ['date', 'birthday', 'dob'],
		'time' => ['time', 'vrem'],
		'number' => ['num', 'age', 'quantity', 'amount', 'price', 'nom'],
		'textarea' => ['texta', 'mess', 'pism', 'soobsh'],
		'select' => ['vubor', 'sel', 'vubr', 'cheng']
	];
	
	// Определитель type по id или name усли в них есть совпадения слов
	private static function type($fieldName) :string
	{
        $fieldName = strtolower($fieldName);
        foreach (self::FIELD_TYPES as $type => $keywords) {
            foreach ($keywords as $keyword) {
                if (strpos($fieldName, $keyword) !== false) {
                    return $type;
                }
            }
        }
        
        return 'search';	
	}
	// Определитель тега по type
	private static function tag(string $type):array
	{
		$type = strtolower($type);
		$tags = ['tag' => '<input ', 'tagend' => ''];
		if ($type == 'textarea') $tags = ['tag' => '<textarea ', 'tagend' => '</textarea>'];
		if ($type == 'select') $tags = ['tag' => '<select ', 'tagend' => ''];
        return 	$tags;
	}
////////////////////////////////////////////////////	


//////////////////////БЛОК публичных методов ////////////////////////////	
	public static function head(string $template) :array 
	{
			//Получаем из шаблон  head массивом
			 return self::trimExplode('-', self::parseTemplate(self::getTemplate($template))[0]);
	}
	
	private static function getInclude(string $str):string
	{
		$arr = explode("\n", $str);
		$arrr = [];
		foreach($arr as $a){
			if(trim($a) == '' ) continue;
			if(strpos($a, 'include')){
				$a = trim(explode('include', $shablonForm)[1]);
				// Если файл существует - читаем его
				if(file_exists($a)) $arrr[] =  file_get_contents($a);
			}elseif(file_exists(trim($a))){
				// Если файл существует - читаем его
				$arrr[] =  file_get_contents($a);
			}else {
				$arrr[] = $a; 
			}
		}
		return implode("\n", $arrr);
	}
	
	public static function form(string $template, array $content = [] ,$shablonForm = null): string
		{
			
			$template = self::getInclude($template);
			
			
			if(strpos($template, '||||')){
				[$blocks, $shablonForm] = explode('||||', $template);
				if(trim($blocks)[0] == '{'){
					$blocks = explode('{', $blocks);
					#print_r ($blocks);
					foreach ($blocks as $block){
						if(trim($block) == '') continue;
						[$key, $value] = explode("}", $block);
						$key = trim($key);
						#print_r ($key);
						
						$value1 = $value;
						$value2 = "\n" . trim($value);
						$value3 = trim(str_replace("\n", ' ', $value));
						if($key == 'INPUTS'){
							$template = $value;
							#print_r ($template);
						}else $content[$key] = $value;
						#$shablonForm = str_replace(['{' . $key. '}', '[' . $key. ']', '$' . $key], [$value1, $value2, $value3],  $shablonForm);
					}
				}
			}elseif(trim($template)[0] == '{'){
				$blocks = explode('{', $template);
				foreach ($blocks as $block){
					if(trim($block) == '') continue;
					[$key, $value] = explode("}", $block);
					$key = trim($key);
					if($key == 'INPUTS'){
						$template = $value;
						#print_r ($template);
					}else $content[$key] = $value;
				}
			}
			
			// Объединяем с пользовательским шаблоном
		$shablon = self::shablonForm($shablonForm);
		#print_r ($shablon);
		$form = $shablon['form'][0];
		$formend = $shablon['form'][1];
		// Заменяем переменные в шаблоне
		foreach ($content as $key => $val) {
			$value1 = $val;
			$value2 = "\n" . trim($val);
			$value3 = preg_replace('/\s+/', ' ', $val);
			$form = str_replace(['{' . $key . '}', '[' . $key . ']', '$' . $key], [$value1, $value2, $value3], $form);
			$formend = str_replace(['{' . $key . '}', '[' . $key . ']', '$' . $key], [$value1, $value2, $value3], $formend);
		}
		return $form . self::inputs($template, $shablon) . $formend;
	}	
	
	   //ФУНКЦИЯ ГЕНЕРИРУЕТ ТАБЛИЦЫ С inputs из контента
	public static function inputs(string $template, $shablonForm = null): string {			
		// отправляем в генератор inputs
		return self::buildInputs(
				// Парсим строки от коментариев  //Получаем шаблон inputs
			   self::parseTemplate(self::getTemplate($template))[1],
			  // Объединяем с пользовательским шаблоном формы
				self::shablonForm($shablonForm));
		
	}
	
	//ФУНКЦИЯ ГЕНЕРИРУЕТ одно поле input с label без обертки из массива или из строки
	public static function input($attrs = null, $shablonForm = null){
		// Объединяем с пользовательским шаблоном
		$shablonForm = self::shablonForm ($shablonForm);
		if($attrs !== null || !empty($attrs)){
			if(is_string($attrs)) $attrs = self::parseInput($attrs);
			if(empty($attrs['attrs']['id'])) return '';
			// Базовые атрибуты
			$defaultAttrs = ['type' => 'search',
							'id' => $attrs['attrs']['id'],
							'name' => $attrs['attrs']['id'],
							'placeholder' => $attrs['attrs']['id']
							];
			
			// Объединяем с пользовательскими атрибутами
			$attrsInput = ['attrs' => array_merge($defaultAttrs, $attrs['attrs'])];
			// Собираем строку атрибутов
			$attrsInput = array_merge($attrs, $attrsInput); 
		}
		$attrString = array_merge(self::buildAttributes($attrsInput), self::tag($attrsInput['attrs']['type']));
		$input = $shablonForm['input'];
		foreach ($attrString as $key => $val) {
			$input = str_replace('{' . $key . '}', $val, $input);
		}
		return $input;
	}
//////////////////////////////////////////////////////////////////////////	


////////////////// Блок объединения Шаблонов формы /////////////////////
	 public static function shablonForm($shablonForm = null) 
	 {
		// В шаблоне разделитель строк '|' 
		$shablon = self::margeShablon (self::SHABLON, $shablonForm);
		return $shablon;	
	}

	private static function margeShablon ($shablon, $shablonForm = null) 
	{
		// Преобразуем строки шаблона в массив
		$shablon = self::buildShablonForm($shablon);
		if ($shablonForm !== null && !empty($shablonForm) && is_string($shablonForm)){
			// Преобразуем строки шаблона в массив
			$shablonForm = self::buildShablonForm($shablonForm);
		}
		//Объединяем массивы шаблонов
		$shablon = (is_array($shablonForm)) ? array_merge($shablon, $shablonForm): $shablon;
		return $shablon;
	}
	
	private static function buildShablonForm(string $shablonForm)
	{
		//Получаем строку из переменной или по пути из файла
		$shablonForm = self::getTemplate($shablonForm);
		// Очищаем от коментариев
		$shablonForm = preg_replace('/<!--(.|\s)*?-->/', '', $shablonForm);
		$arr = explode('|', $shablonForm);
		#echo '<pre>';
		#print_r ($arr);
		#echo '</pre>';
		$shablonForm = [];
		$shablonForm['form'] = [$arr[0], $arr[8]];
		$shablonForm['group'] = [$arr[1], $arr[7]];
		$shablonForm['row'] = [$arr[2], $arr[6]];
		$shablonForm['col'] = [$arr[3], $arr[5]];
		$shablonForm['input'] = $arr[4];
		return $shablonForm;
	}
//////////////////////////////////////////////////////////////////////	
	

//////////////БЛОК получения строки из файла или из переменной ////////////////
	// определяем это путь к файлу в котором строка или строка из переменной
	private static function getTemplate(string $shablonForm)
	{
		 
		 // Если файл существует - читаем его
		 return (file_exists($shablonForm)) ? file_get_contents($shablonForm) : $shablonForm;
	 }

/////////////////// БЛОК очистки от коментариев   //////////////////////////////	
	private static function parseTemplate($str)
	{
		//очистка от коментариев
		$str = trim(preg_replace(['/(#.*|\/\*[\s\S]*?\*\/)/', '/\s+/'],['', ' '], $str));
		return (strpos ($str, '!')) ? explode ('!', $str) : ["Добавьте в шаблон!", $str];
	}

/////////////// БЛОК разделения строки на массив ///////////////////////////////	
	private static function trimExplode (string $separator, string $str) :array 
	{
		$trimmed = trim($str);
		if ($trimmed === '') return [];
		return (strpos($trimmed, $separator) !== false) 
				? array_map('trim', explode($separator, $trimmed)) 
				: [$trimmed];			
	}
/////////////////////////////////////////////////////////////////////////////////

		
	

	
//////////////////// БЛОК строительных методов ////////////////////	
	private static function row(string $str, $shablonForm = null){
	 //Открываем таблицу
	 $html = $shablonForm['row'][0];
		// Генерируем количество inputs
		if(strpos($str,'&') !== false){
			$arr = explode('&', $str);
			#$count = count($arr);
				foreach ($arr as $a){
				$html .= self::col($a, $shablonForm);
				}
			} else {
		$html .= self::col($str, $shablonForm);
		}
		//Закрываем таблицу
	 $html .= $shablonForm['row'][1];
	return 	$html;
	} 

	private static function col(string $str, array $shablon){
	 //делаем обертку для input
		return $shablon['col'][0] . self::input($str, $shablon) . $shablon['col'][1];		
	}
	
	private static function buildAttributes($attrs){	
	if(is_string($attrs['attrs'])){
		$attributes = ' ' . $attrs;
	} else 		$attributes = [];
			
			// Определяем и назначаем отсутствующие переменные
			if(isset($attrs['attrs']['id'])) $id = $attrs['attrs']['id'];
			if(isset($attrs['label'])) $label = $attrs['label'];

		if(isset($attrs['datalist'])){ 
			if(isset ($attrs['attrs']['list'])){
			$list = $attrs['attrs']['list'] ;
			} else {
			$list = ($attrs['attrs']['type'] !== 'select') ? 'list_'.$id : null;
			$attrss = array_merge($attrs['attrs'], ['list' => $list]);
			$attrs = array_merge($attrs, ['attrs' => $attrss]);
			}
			
			$datalist = self::datalist($attrs['datalist'], $attrs['attrs']['list']);
			
		}else $datalist = '';
			
			foreach ($attrs['attrs'] as $key => $value) {
				if ($value === null || $value === false) {
					continue; // Пропускаем null и false
				}
				
				if ($value === true) {
					$attributes[] = $key; // Булевые атрибуты без значения
				} else {
					// Экранируем специальные символы
					$escapedValue = htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
					$attributes[] = "$key=\"$escapedValue\"";
				}
			}

			$attributes = ' ' . implode(' ', $attributes);
			return  ['id' => $id, 'label' => $label, 'attrs' => $attributes, 'datalist' => $datalist];
	}
		
	private static function buildInputs($str, array $shablonForm = []){
		
		$arr = (is_string($str)) ? explode('|', $str) : $str;
		$inputs = '';
		$n = 0;
		foreach ($arr as $a){
			 if (trim($a) === '') continue; // Пропускаем пустые строки
			
			$a = ' '.$a.' |';
			$n++;
			//Обертка для Аккардиона 
			$inputs .= (strpos($a,'<') !== false || strpos($a ,'>') !== false)? self::accordeon($a, $shablonForm, $n): '';
			//сейчас таблица для колонок
			$inputs .= (strpos($a ,'<') == false)? self::row($a, $shablonForm) : '';
		}
		return $inputs;
	}

	private static function datalist($datalist, $id = null) {
		#$id = ($datalist['attrs']['list'] !== '') ? $datalist['id'] : $id;
		if(is_string($datalist)){
			if (strpos(' ' . $datalist, '<datalist') || strpos(' ' . $datalist, '<option')){
			return $datalist;
			}else {
				$values = explode (',', $datalist);
			}
		} else {
			if(is_string($datalist['option'])){
				if (strpos(' ' . $datalist['option'], '<option')){
					return "<datalist id='$id' >\n" . $datalist['option'] . "\n</datalist>";
				} else {
					$values = explode (',', $datalist['option']);
				}
			}
		}
		$option = "<option value=''>-- Выберите --</option>";
		foreach ($values as $val){
			$value = [$val, ''];
			if(strpos($val, ':')){
				$value = explode (':', $val);
			}
			$option .= "<option value='".$value[0]."'>".$value[1]."</option>";
		}
		
		return (!empty($id)) ? "<datalist id='$id' >\n" . $option . "\n</datalist>" : $option . "\n</select>";
	}    

	private static function accordeon(string $namegroup, array $shablon, $n){	
		if(strpos($namegroup,'<') !== false && strpos($namegroup,'>') !== false) return str_replace ('|', '', $namegroup);
		//Закрываем Аккордеон
		$accordeon = $shablon['group'][1];
		if(strpos($namegroup,'<') !== false){
			if ($n == 1){
			//Открываем Аккордеон
			$accordeon = str_replace(['{namegroup}', '{attrs}'],[$namegroup, 'open'], $shablon['group'][0]);
			} else{
			//Закрываем Аккордеон           //Открываем Аккордеон
			$accordeon = $accordeon . str_replace(['{namegroup}', '{attrs}'],[$namegroup, ''], $shablon['group'][0]);
			} 
		}
		return $accordeon;
	 }
	 
private static function parseInput(string $str){
		$attrs = [];
		$a = [];
		$str = str_replace(['>', '|', '&'], '', $str);
		$attrs['attrs']['required'] = false;
		$attrs['attrs']['title'] = $str;
		
		if (!empty($str) && !strpos(' '.$str, '-')) {
			$a = self::trimExplode(' ', $str);
			$attrs['attrs']['id'] =  array_pop($a);
			#if(isset(self::GETPARAMETR['r']) && self::GETPARAMETR['r'] == 1){
			#	$attrs['attrs']['type'] =  'textarea';
			#	$attrs['attrs']['value'] =  $str;
			#}else{
				$attrs['attrs']['type'] =  self::type($attrs['attrs']['id']);
			#}
			$attrs['label'] =  (!empty($a )) ? array_pop($a) : $attrs['attrs']['id'];
			$attrs['attrs']['placeholder'] =  (!empty($a )) ? implode(' ', $a) : $attrs['attrs']['id'];
		}else{		
			$a = self::trimExplode('-', $str);
			
			//Определяем required
			#$attrs['attrs']['required'] = if($a[0] == '') ? true : array_unshift($a, '');

			if($a[0] == '') {
				$attrs['attrs']['required'] = true;
			}else {
				array_unshift($a, ' ');
			}
			
			$c = count($a);

			if($c <= 3){
				$b = [];
				$b = self::trimExplode(' ', $a[1]);
				$attrs['attrs']['id'] =  array_pop($b);
				$attrs['attrs']['type'] =  self::type($attrs['attrs']['id']);
				$attrs['label'] = (!empty($b )) ? array_pop($b) : $attrs['attrs']['id'];
				$attrs['attrs']['placeholder'] =  (!empty($b )) ? implode(' ', $b) : $attrs['attrs']['id'];
			}
			
			if($c > 3 ){
				$attrs['label'] = $a[1];
				$attrs['attrs']['id'] =  $a[2];
				$attrs['attrs']['type'] =  self::type($attrs['attrs']['id']);				
				$attrs['attrs']['type'] =  $a[3];
			}
			#$attrs['attrs']['type'] =  self::type($attrs['attrs']['id']);
			
			if($c == 3 || $c == 5){
				$attrs['attrs']['list'] =  'list_' . $attrs['attrs']['id'];
			}
			if($c == 3 ){
				$attrs['datalist'] = self::datalist($a[2], $attrs['attrs']['list']);
			}
			if($c == 5 ){
				$attrs['datalist'] = self::datalist($a[4], $attrs['attrs']['list']);
			}
		
		}
		return $attrs;
	}


}

