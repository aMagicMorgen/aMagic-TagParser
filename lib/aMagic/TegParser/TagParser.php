<?php
//tagparser.php
// 09.04.2025 автор Алексей Нечаев, г. Москва, +7(999)003-90-23, nechaev72@list.ru


class TagParser {
   const VOID_TAGS = ['area', 'base', 'br', 'col', 'embed', 'hr', 'img', 'input', 'link', 'meta', 'param', 'source', 'track', 'wbr'];
   // HEAD вставляется после тега </head>
   const HEAD = '
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">';
	
	// ZERO_MD скрипт для обработки вставок текста MarkDown вставляется перед тегом </head>
   const ZERO_MD = "\n\t<script type='module' src='https://cdn.jsdelivr.net/gh/zerodevx/zero-md@2/dist/zero-md.min.js'></script>\n\t";
   #const ZERO_MD = "\n\t<script type='module' src='./lib/zero-md/lib/index.js?register'></script>\n\t";
   #const ZERO_MD = "\n\t<script type='module' src='https://cdn.jsdelivr.net/npm/zero-md@3?register'></script>\n\t";
   
   const ZERO_MD_START = "\n<zero-md>\n<script type='text/markdown'>\n";
   const ZERO_MD_END = "</script>\n</zero-md>";
   
   // JQUERY вставляется после тега </footer>
   const JQUERY = "\t<script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>\n";
   #const JQUERY = "\n\t<script src='./static/js/jquery-3.7.0.min.js'></script>\n\t";
   
    private $html;
	
	public function __toString(): string {
        return $this->html;
    }
	
	private function isVoidTag(string $tag): bool {
        return in_array($tag, static::VOID_TAGS);
    }
	
	// определяем это путь к файлу в котором строка или строка из переменной
	private function getTemplate(string $input)
	{
		$input = trim($input);
		 // Если файл существует - читаем его
		 if(file_exists($input)) $input =  file_get_contents($input);
			 // ОЧИЩАЕМ от коментариев в /* */
			$input = trim(preg_replace('/\/\*.*?\*\//s', '', $input));
			
		return $input;
	 }
	 
	 // Удаляем строки, которые пустые или содержат только пробелы
		private function filterEmptyLines($lines){
			return array_filter($lines, 
				function($line) {
				return trim($line) !== '';
				}
			);
		}

		// Заменяем переменные в {} и возвращаем готовый к обработке текст
	private function mdsBlock(string $input){
		[$blocks, $input] = explode('!!!!', $input);
			#print_r ($input . "\n");
			if(trim($blocks)[0] == '{'){
				$blocks = explode('{', $blocks);
				foreach ($blocks as $block){
					if(trim($block) == '') continue;
					[$key, $value] = explode("}", $block);
					$key = trim($key);
					#$value = str_replace(['/%', '%/'], ['||||', '/_'], $value);
					#$value = str_replace(['[', ']', '/%', '%/'], ['{', '}', '||||', "/_\n"], $value);//
					#print_r($value);
					$value1 = $value;
					$value2 = "\n" . trim($value);
					$value3 = trim(str_replace("\n", ' ', $value));
					#$input = str_replace(['{' . $key. '}', '[' . $key. ']', '$' . $key], $value,  $input);
					$input = str_replace(['{' . $key. '}', '[' . $key. ']', '$' . $key], [$value1, $value2, $value3],  $input);
					
				}
				#print_r($input);
			}elseif(strpos($blocks, '|')){
					$input = $blocks . "\n/%\n" . $input . "\n/_\n";
			}else {
					$blocks = explode('}', $blocks);
					foreach ($blocks as $block){
						#if(trim($block) == '') continue;
						@[$key, $value] = explode("{", $block);
						$key = trim($key);
						#$value = str_replace(['/%', '%/'], ['||||', "/_\n"], $value);
						$value1 = $value;
						$value2 = "\n" . trim($value);
						$value3 = trim(str_replace("\n", ' ', $value));
						#$input = str_replace(['{' . $key. '}', '[' . $key. ']', '$' . $key], $value,  $input);
						$input = str_replace(['{' . $key. '}', '[' . $key. ']', '$' . $key], [$value1, $value2, $value3],  $input);
					}
				}
		
			return trim($input);
	}
	
    public function __construct(string $input) {
		$this->html = '';
		 $stack = [];
		 $n = 0;
		#$inputtrim = trim($input);
		// Если это путь к файлу берем из него текст или очищаем от коментариев в /* */
		$input = $this->getTemplate($input);
		#print_r ($input);
		if(strpos(' ' . $input, 'VAR/')){
			$input = $this->extractVarBlocks($input);
			#print_r ($input);
			// Если обнаружен PHP код то выполняем  его
			if(strpos(' '. $input, '<?')){
				$input = $this -> phpParser ($input);
			}
			
			$input = $this->applyTemplate($input, $_SESSION['VAR']);
			
			#exit;
			// Удаляем только VAR из сессии
			unset($_SESSION['VAR']);
				// Проверяем результат
				#echo "\nСодержимое \$_SESSION['VAR']:\n";
				#print_r($_SESSION['VAR']);
				#exit;
		}
		// Если обнаружен PHP код то выполняем  его
		if(strpos(' '. $input, '<?')){
			$input = $this -> phpParser ($input);
		}

		// Если есть разделитель '!!!!' там заменяем переменные
		if(strpos($input, '!!!!')){
			$input = $this -> mdsBlock($input);
			#print_r ($input . "\n");
		}
		
		
		
		// Начинаем обработу готового текста MarkDoun Style
		// Все строки в массив
		$lines = $this->filterEmptyLines(explode("\n", trim($input)));
		
		#print_r (implode("\n", $lines));
		#exit;
		// Начинаем большой цикл
        foreach ($lines as $line) {
			
			$linetrim = trim($line);
			// Определяем уровень вложенности
            preg_match('/^(\s*)/', $line, $matches);
			$space = str_replace("\t", "  ", $matches[1]);
            $indent = strlen($space);
						
						
			if($linetrim == 'PHP/'   && $n !== 4  && $n !== 3 && $n !== -1){
				$n = 2;
				$phpkod = ''; // Сбрасываем содержимое для нового блока
				continue;
			}
			
			if($linetrim == '/PHP'  && $n !== 4  && $n !== 3 && $n !== -1){
				$n = 0;
				$this->html .= $this->phpParser($phpkod);
			continue;
			}
	
			if($n == 2) {
				/*if(strpos(' '.$line,'include') && !strpos(' '.$line,"\\")){
					$link = trim(explode ('include', $linetrim)[1]);
					$phpkod .= $this->getTemplate($link);//$this->phpParser($this->getTemplate($link));
				} else*/
					
				if(strpos(' '.$line, "\\")){
					$phpkod .= "\n";
				} else $phpkod .= $line . "\n";
				continue;
			}
			
			
/*		
			if(strpos($line, '<zero-md') || 
				strpos($line, '<script') || 
				strpos($line, '<style') || 
				$linetrim == 'MD/' || //$linetrim == 'MD000000' || 
				$linetrim == 'HTML/'  && $n === 0 )$n = 1;
		
		
*/			
				
			if($linetrim == '/HTML') {
				$n = 0;
				continue;
			}
				
				
		/*if($linetrim == '}') {
				$linetrim = '%/';
				#continue;
			}
			*/
		if($linetrim == '%/') {
				$n = 4;
				#continue;
			}
		
		/*
			if($linetrim == 'HTML/' || $linetrim == '/HTML' || $linetrim == 'PHP/' || $linetrim == '/PHP' && $n == 1){ 
				// Закрываем теги при снижении уровня вложенности
				while ($indent < (count($stack) * 2)) {
					$this->html .= array_pop($stack);
				}
				$this->html .= "\n";
				$n = 0;
				continue;
			}
			*/
			/*
			if($linetrim == 'MD/' //|| $linetrim == 'MD000000' 
			&& $n === 1) {
				// Закрываем теги при снижении уровня вложенности
				while ($indent < (count($stack) * 2)) {
					$this->html .= array_pop($stack);
				}
				$this->html .= static::ZERO_MD_START;
				continue;
			}
			*/
			
	/*
			if($linetrim == '/MD' //|| $linetrim == '000000MD' 
			#&& $n !== 4  && $n !== 3 
			&& $n === 1) {
				$this->html .= static::ZERO_MD_END;
				$n = 0;
				continue;
			}
	*/		
			
/*			
			if($n == 1) {
				if(file_exists($linetrim)){
					
					$shablons = $this->getTemplate($linetrim);
					$this->html .= $this->parser($shablons);
					continue;
				}
				if(strpos(' '.$line,'include') && !strpos(' '.$line,"\\")){
					$link = trim(explode ('include', $linetrim)[1]);
					$shablons = $this->getTemplate($link);
					$this->html .= $this->parser($shablons);
					
				} elseif (strpos(' '.$line,"\\")){
					$this->html .= "\n";
				}else 	$this->html .= $line . "\n";
				continue;
			}
*/			
			if(strpos(' ' . $line, "*/")){
				$n = 0;
				continue;
			}
			if(strpos(' ' . $line, "/*")){
				$n = -1;
				if (strpos(' ' . $line, "*/")) $n = 0;
				continue;
			}
			if($n == -1) continue;
			

			if($n === 3 || $n === 6 ){
				
				// Коментарии
				if(strpos(' ' . $line, "\\")) {
					#$this->html .= "\n<!-- " . trim(str_replace("\\", '', $line)) . " -->";
					continue;
				}
				if( $linetrim == '||||'){
					$replase[] = '!!!!';
					$n = 6;
					continue;
				}
				if (strpos(' '.$line,'include') && $n === 6) {
						$link = trim(explode ('include', $linetrim)[1]);
						$sablons = $this->getTemplate($link);
						if(strpos ($sablons, '!!!!')){
							$sablons = implode("\n", $replase) . explode('!!!!', $sablons)[1];
							#print_r($this->parser($sablons));
							$this->html .= $this->parser($sablons);
							$replase = [];
							$n = 0;
							continue;
						}
					}elseif($linetrim == '/_'){
						$sablons = implode("\n", $replase);
						if(!strpos($sablons, '||||')){
						$sablons = str_replace("/%", "!!!!", $sablons);	
						}
						
						#Print_r($sablons . "\n");
						$this->html .= $this->parser($sablons);
						#Print_r($this->parser($sablons));
						$n = 0;
						continue;
					}
/*					
				$replase[] = $line;
				continue;
*/
				
				if($linetrim == '/%') {
					$n = 4;
					$replase[] = '/%';
					continue;
				}elseif (strpos(' '.$line,'include')) {
					if(!in_array('/%', $replase)) $replase[] = '/%';
					$link = trim(explode ('include', $linetrim)[1]);
					#$replase[] = $this->getTemplate($link);
					$replase[] = $link;
					$sablons = str_replace(['{', '}'], ['[', ']'], implode("\n", $replase));
					$sablons = $this->parseShablon($sablons);
					$replase = [];
					$n = 0;
					$this->html .= $this->parser($sablons);
					
				}elseif(file_exists($linetrim)){
					$replase[] = $linetrim;
					$sablons = str_replace(['{', '}'], ['[', ']'], implode("\n", $replase));
					$sablons = $this->parseShablon($sablons);
					$replase = [];
					$n = 0;
					$this->html .= $this->parser($sablons);
					
					
				/*}elseif($linetrim == '}'){
					$n = 4;*/
				}else $replase[] = $line;
				continue;
			}
			
			
			if($n === 4){
					// Коментарии
				if(strpos(' ' . $line, "\\")) {
					#$this->html .= "\n<!-- " . trim(str_replace("\\", '', $line)) . " -->";
					continue;
				}
				if($linetrim == '}')$linetrim = '%/';
				if($linetrim == '%/'){
					#if(empty($replase[0]))continue;
					$sablons = trim(implode("\n", $replase));
#print_r ($sablons);
					if($sablons[0] !== '{'){
						$sablons = str_replace(['{', '}'], ['[', ']'], $sablons);
						$sablons = $this->parseShablon($sablons);
					}else{
						$sablons = str_replace('/%', '!!!!', $sablons);
					}
					
					$replase = [];
					$n = 0;
					$this->html .= $this->parser($sablons);
					
					continue;
				}elseif (strpos(' '.$line,'include')) {
					if(!in_array('/%', $replase)) $replase[] = '/%';
					$link = trim(explode ('include', $linetrim)[1]);
					#$replase[] = $this->getTemplate($link);
					$replase[] = $link;
					$sablons = str_replace(['{', '}'], ['[', ']'], implode("\n", $replase));
					#print_r($sablons);
					$sablons = $this->parseShablon($sablons);
					$replase = [];
					$n = 0;
					$this->html .= $this->parser($sablons);
					
				} else {
					$replase[] = $line;
				}
				continue;
			}
			
			
			
			
			
			
			if(strpos($line, '<zero-md') || 
				strpos($line, '<script') || 
				strpos($line, '<style') || 
				strpos($line, '<code') ||
				$linetrim == 'MD/' || 
				$linetrim == 'HTML/' || 
				$linetrim == 'PHP/' && $n === 0 ){
					$n = 1;
					// Закрываем теги при снижении уровня вложенности
					while ($indent < (count($stack) * 2)) {
						$this->html .= array_pop($stack);
					}
					if($linetrim == 'HTML/' || $linetrim == 'PHP/') {
						continue;
					}
					if($linetrim == 'MD/') {
						$this->html .= static::ZERO_MD_START;
						continue;
					}
					$this->html .= "\n";
					
				}
		/*	
			if($linetrim == 'HTML/' || $linetrim == 'PHP/' || $linetrim == 'MD/' && $n == 1){ 
				// Закрываем теги при снижении уровня вложенности
				while ($indent < (count($stack) * 2)) {
					$this->html .= array_pop($stack);
				}
				if($linetrim == 'MD/') $this->html .= array_pop($stack);
				$this->html .= "\n";
				
				continue;
			}
		*/	
		/*	
			if($linetrim == 'MD/' //|| $linetrim == 'MD000000' 
			&& $n === 1) {
				// Закрываем теги при снижении уровня вложенности
				while ($indent < (count($stack) * 2)) {
					$this->html .= array_pop($stack);
				}
				$this->html .= static::ZERO_MD_START;
				
				continue;
			}
		*/	
			if($linetrim == '/HTML' || 
				strpos($line, '</zero-md') || 
				strpos($line, '</script') || 
				strpos($line, '</style')  || 
				strpos($line, '</code')  || 
				$linetrim == '/MD' || //$linetrim == '000000MD' ||
				$linetrim == '/HTML' || 
				$linetrim == '/PHP' 
				&& $n === 1 ) {
					$n = 0;
					/*
					if($linetrim == 'HTML/' || $linetrim == 'PHP/') {
						continue;
					}
					*/
					if($linetrim == '/MD') {
						$this->html .= static::ZERO_MD_END;
						continue;
					}
					
				}
				
			
			/*	
			if($linetrim == '/MD' //|| $linetrim == '000000MD' 
			#&& $n !== 4  && $n !== 3 
			&& $n === 1) {
				$this->html .= static::ZERO_MD_END;
				$n = 0;
				continue;
			}
			*/
			if($n == 1) {
				
				
				/*
				if(file_exists($linetrim)){
					
					$shablons = $this->getTemplate($linetrim);
					$this->html .= $this->parser($shablons);
					continue;
				}
				*/
				/*elseif(strpos(' '.$line,'include') && !strpos(' '.$line,"\\")){
					$link = trim(explode ('include', $linetrim)[1]);
					print_r ($link);
					$shablons = $this->getTemplate($link);
					
					$this->html .= $this->parser($shablons);
					
				}*/ 
				if (strpos(' '.$line,'\\')){
					$this->html .= "	\n";
				}
				if(strpos(' '.$line,"/ ")){
					$line = str_replace(["/ ", " /"], "/", $line);
					#$this->html .= $line;
				}
				if(strpos(' '.$line," /")){
					$line = str_replace(" /", "/", $line);
					#$this->html .= $line;
				}
				
				if(strpos(' ' . $line, '! ')){
					$line = str_replace(' !', '!', $line);
					#$this->html .= $line;
				}
				if(strpos(' '.$line,"[ ")){
					$line = str_replace("[ ", "{", $line);
					if(strpos(' '.$line," ]")){
					$line = str_replace(" ]", "}", $line);
					}
					$this->html .= $line;
					continue;
				}
				
				if(strpos(' '.$line," ]")){
					$line = str_replace(" ]", "}", $line);
					$this->html .= $line;
				}
				
				if(strpos(' '.$line,"< ?")){
				$line = str_replace(["< ?", "? >"], ["<?", "?>"], $line);
					$this->html .= $line;
					continue;
				}
				if(strpos(' '.$line,"? >")){
				$line = str_replace("? >", "?>", $line);
					$this->html .= $line;
				}
				
				if(strpos(' '.$line,"includ e")){
				$line = str_replace("includ e", "include", $line);
					$this->html .= $line;
				}
				/*
				if(strpos(' '.$line,"| ")){
				$line = str_replace(" |", "|", $line);
					$this->html .= $line;
				}
				*/
				/*elseif(strpos(' '.$line,"MD /")){
					$line = str_replace("MD /", "MD/", $line);
					$this->html .= $line;
				}elseif(strpos(' '.$line,"/ MD")){
					$line = str_replace("/ MD", "/MD", $line);
					$this->html .= $line;
				}*/else 	$this->html .= $line . "\n";
				
				
				
				continue;
			}
			/*elseif($n == 0 && strpos(' '.$line,'include') && !strpos(' '.$line,"\\")){
				$link = trim(explode ('include', $linetrim)[1]);
					
					#$shablons = $this->getTemplate($link);
					#$n == 0;
					#print_r ($shablons);
					$this->html .= $this->parser($link);
					#print_r ($this->parser($shablons));
			}*/
			
			/*	
			if($linetrim == '/MD' //|| $linetrim == '000000MD' 
			#&& $n !== 4  && $n !== 3 
			&& $n === 1) {
				$this->html .= static::ZERO_MD_END;
				continue;
			}
			
			*/
			
			// Коментарии
			if(strpos(' ' . $line, "\\")) {
				$this->html .= "\n<!-- " . trim(str_replace("\\", '', $line)) . " -->";
				continue;
			}
			
			// Добавил правило если переменной небыло и остались Фигурные скобки
			if(strpos(' ' . $line, '{') && strpos(' ' . $line, '}')){
				$line = str_replace(['{', '}'], '', $line);
				
			}
			//strpos(' ' . $line, '{') || 
			if(strpos(' ' . $line, '_/') && $n !== -1){
				// Закрываем теги при снижении уровня вложенности
				while ($indent < (count($stack) * 2)) {
					$this->html .= array_pop($stack);
				}
				$this->html .= "\n";
				$n = 3;
				continue;
			}
			
			// Пропускаем пустые строки
            if ($linetrim === '' || strpos($line, "<!--") || strpos($line, "-->") && $n == 0) continue;
			
			
			
			
				// пропускаем HTML
				if($linetrim[0] == '<' ) {
					
					if(!strpos($line, '</')){
						$n = 5;
						// Закрываем теги при снижении уровня вложенности
						while ($indent < (count($stack) * 2)) {
							$this->html .= array_pop($stack);
						}
						$this->html .= "\n" . $line;
						continue;
					}
					// Закрываем теги при снижении уровня вложенности
						while ($indent < (count($stack) * 2)) {
							$this->html .= array_pop($stack);
						}
					

					$this->html .= "\n" . $line;
					continue;
				}
				
				if(strpos($line, '</') && $n == 5){
						$n = 0;
						$this->html .= $line;
						continue;
					}
			
			

			// Закрываем теги при снижении уровня вложенности
		if($linetrim !== '}'){	
            while ($indent < (count($stack) * 2)) {
				$tagclos = array_pop($stack);
					if(strpos($tagclos,'/head>')) $this->html .= static::ZERO_MD;					
					$this->html .= $tagclos;
            }
		}
			
			
			
			
			
			
			// Добавил правило если переменной небыло и остались Фигурные скобки
			if(strpos(' ' . $linetrim, '{') && strpos(' ' . $linetrim, '}')){
				$linetrim = str_replace(['{', '}'], '', $linetrim);
				
			}
			
			// Парсим текущую строку
            $node = $this->parseLine($linetrim);
      
			// Генерация HTML-кода
            $this->html .= "\n" . $space . $this->renderTag($node);		
		
			if (!$this->isVoidTag($node['tag']) && $node['tag'] !== 'include') {
				$tagclos = "</" . $node['tag'] . ">\n";
				if($node['tag'] == 'footer') $tagclos = $tagclos . static::JQUERY;
				array_push($stack, $tagclos);
			}
        }
		
			// Закрываем оставшиеся теги
			while (!empty($stack)) {
				$this->html .= array_pop($stack);
			}
		
    }
	
	
	private function linkShablon(string $linetrim, array $replase){
		$link = explode (' ', $linetrim)[1];
		
		$sablons = $this->getTemplate($link);
			if(strpos($sablons, '!!!!')){
				$sablons = implode("\n", $replase) . "\n!!!!" . explode('!!!!', $sablons)[1];
				$this->html .= $this->parser($sablons);
			} else{
				$sablons = implode("\n", $replase) . "\n" . $sablons;
				$this->html .= $this->parser($sablons);
			}
		#return $thishtml;
	}	
	private function parseLine(string $line): array {
        // Парсим строку с помощью регулярного выражения
					  # Тег         #ID            /name         .Классы         (Атрибуты)     пробел Текст
       	preg_match('/^(?:([a-z0-9]+))?(?:#([\w-]+))?(?:\/([\w-]+))?(?:\.([\w.-]+))?(?:\((.*?)\))?(?:\s+(.*))?$/i', $line, $matches);

		 $classes = isset($matches[4]) && !empty($matches[4]) ? trim(str_replace('.', ' ', $matches[4])) : '';
		 $tag = !empty($matches[1]) ? $matches[1] : 'div';

        return [
			'tag' => $tag, // Используем тег явно или ничего, если не указан
            'attr' => [
				'id' => $matches[2] ?? '',
				'name' => $matches[3] ?? '',
				'class' => $classes
				],
            'attrs' => $matches[5] ?? '',
            'text' => $matches[6] ?? ''
			];
    }
	private function   parser($text)
	{
		return New TagParser($text);
	}
	private function phpParser (string $phpkod): string
	{	
		ob_start();
			try {
				eval('?>' . $phpkod); // Важно: добавляем закрывающий тег PHP для переключения в режим вывода
			} catch (ParseError $e) {
				echo "Ошибка в PHP коде: " . $e->getMessage();
			}
		$text = ob_get_clean();
			#print_r ($text);
			$text = str_replace(['<\?', '?\>'], ['<?', '?>'], $text);
			if(isset($_SESSION['VAR'])){
				$text = $this -> applyTemplate($text, $_SESSION['VAR']);
				// Удаляем только VAR из сессии
				unset($_SESSION['VAR']);
			}
			
			return $text;
	}
	
	private function renderTag(array $node): string {

		if($node['tag'] == 'include'){
			$text = $this->getTemplate($node['text']);//$this->phpParser($this->getTemplate($node['text']));//
			#print_r($text . "\n");
			return New TagParser($text);
			
		}
        
		$htmls = '<' . $node['tag'] . ' '; // Используем реальный тег, а не дефолтный div
		if($node['tag'] == 'html') $htmls = "<!DOCTYPE html>\n" . $htmls;
		
		
        foreach ($node['attr'] as $name => $value) {
			// Пропускаем пустые
            if ($value === '') continue;
            $htmls .= htmlspecialchars($name) . '="' . htmlspecialchars($value) . '" ';
			
        }
		$htmls .= $node['attrs'] . ">" . (!$this->isVoidTag($node['tag']) ? $node['text'] : '');
		if($node['tag'] == 'head') $htmls .= static::HEAD;
        return $htmls;
    }
	
	private function parseInputToArray($input) {
			$result = [];
			$input = trim(str_replace(']', '', $input));
			
			// 1. Удаляем все лишние пробелы и переносы строк
			#$cleanInput = preg_replace('/\s+/', ' ', $input);
			
			// 2. Разделяем на массив по '{' или '['
			$parts = explode('[', $input);//(strpos(' ' . $cleanInput, '{')) ? explode('{', $cleanInput) : 
			
			
			// Первая часть содержит заголовки (если они есть)
			$firstPart = trim($parts[0]);
			
			// Определяем, есть ли заголовки
			if (strpos($firstPart, '|') !== false) {
				// Есть заголовки - разбиваем их
				$headers = array_map('trim', explode('|', $firstPart));
				// Удаляем первую часть из обработки записей
				#array_shift($parts);
			} elseif(!empty($firstPart)){
				$headers[] = trim($firstPart);
				// Удаляем первую часть из обработки записей
				#array_shift($parts);
			}else {
				// Нет заголовков - используем числовые индексы
				$headers = null;
			}
			// Удаляем первую часть из обработки записей
				array_shift($parts);
			// 3. Обрабатываем каждую запись
			foreach ($parts as $part) {
				#if(empty($part)) continue;
				// Удаляем закрывающую скобку и лишние пробелы
				#$part = trim(str_replace('}', '', $part));
				
				// Разбиваем по разделителю |
				$values = array_map('trim', explode('|', $part));
				
				// Если нет заголовков, создаем массив с числовыми ключами
				if ($headers === null) {
					$item = [];
					foreach ($values as $index => $value) {
						$item[$index] = $value;
					}
					$result[] = $item;
				} else {
					// Есть заголовки - создаем ассоциативный массив
					$item = [];
					for ($i = 0; $i < count($headers); $i++) {
						$item[$headers[$i]] = $values[$i] ?? '';
					}
					$result[] = $item;
					#print_r($result);
				}
			}
			#print_r ($result);
			return $result;
		}
	
	// Функция для замены плейсхолдеров в шаблоне
	private function applyTemplate($template, $record) {
			
			
			if(strpos($template, '!!!!')){
				$template = explode('!!!!', $template)[1];
			} elseif(strpos($template, '/%')){
				$template = str_replace('%/', '', explode('/%', $template)[1]);
			} 
				$template = $this -> getTemplate($template);
			
			#$result = $template;
			// Заменяем все плейсхолдеры вида {KEY} на соответствующие значения
			foreach ($record as $key => $value) {
				$key = trim($key);
				$value1 = $value;
				$value2 = "\n" . $value;
				$value3 = str_replace("\n", ' ', $value1);
				#$input = str_replace(['{' . $key. '}', '[' . $key. ']', '$' . $key], $value,  $input);
				#$template = str_replace(['{' . $key. '}', '[' . $key. ']', '$' . $key], [$value, $value2, $value3],  $template);
				$template = str_replace(['{' . $key . '}', '[' . $key . ']', '$' . $key], [$value1, $value2, $value3], $template);//, '$' . $key
			}
			#print_r ($result);
			return $template;
		}
	
	private function parseShablon($input) {
		#print_r($input);
		if(strpos($input, '/%') == false) $input = $this->parseSablonOne($input);
		
		/*if(!strpos($dataPart, '[')){
			$dataPart = $this->parseSablonOne($input);
			print_r($dataPart);
		}
		*/
		#print_r ($input);
		#$input = str_replace ('/', '000000', $input);
		// Разделяем входную строку на данные и шаблон
		$parts = explode('/%', $input, 2);
		#print_r ($input);
		#$dataPart = trim($parts[0]);
		#$dataPart = $this->parseSablonOne($dataPart);
/*		
		if(!strpos($dataPart, '[')){
			$dataPart = $this->parseSablonOne($dataPart);
			#print_r ($dataPart);
		} 
*/		
		/*else{
			$dataPart = preg_replace('/\s+/', ' ', $dataPart);
			$dataPart = str_replace ("[", "\n[", $dataPart);
			#$dataPart = $this->parseSablonOne($dataPart);
		}*/
		
		$templatePart = $parts[1] ?? ''; // Сохраняем все пробелы и переносы
		#$link = (strpos(' ' . $templatePart, '000000')) ? str_replace('000000', '/', $templatePart) : $templatePart;
		if(file_exists(trim($templatePart))){
			$templatePart = $this->getTemplate(trim($templatePart));
			#print_r ($templatePart);
		}
		$dataPart = trim($parts[0]);
		#print_r ($dataPart);
		if(!strpos($dataPart, '[')){
			$dataPart = $this->parseSablonOne($dataPart);
			#print_r ($dataPart);
		} 
		// Получаем массив с данными
		$data = $this->parseInputToArray($dataPart);
		#print_r ($data);	
		// Применяем шаблон к каждой записи
		$output = '';
		foreach ($data as $index => $record) {
			$output .= $this->applyTemplate($templatePart, $record);
			
			// Добавляем разделитель между блоками (опционально)
			
			if ($index < count($data)) {
				$output .= "\n";
			}
			
		}
		return $output;
	}
	
	#private function 
	
	private function parseSablonOne($input) {
		$result = '';
		$n = 0;
		
		
		#print_r ($input);
		$inputarr = explode("\n", $input);
			foreach($inputarr as $i){
				$i = trim($i);
				if($i == '') continue;
				$n++;
				if(file_exists($i)){
					#print_r ($i ."\n");
					$result .= "/%\n";
					$result .= $this->getTemplate($i);
					#$result .= "\n%/";
					$n = 0;
					#print_r ($result);
					return $result;
					continue;
				}elseif(strpos(' ' . $i, 'include')){ 
					$result .= "/%\n";
					$i = trim(explode('include', $i)[1]);
					$result .= $this->getTemplate($i);
					#$result .= "\n%/";
					return $result;
					$n = 0;
					return $result;
					continue;
				}elseif(!strpos(' ' . $i, '[') && $n !== 1){
					$result .= '[' . $i . ']'. "\n";
				}else $result .= $i . "\n";
		}
		return $result;
		#print_r ($result);
	}
	
	
	// Парсим текст и извлекаем блоки между разделителями VAR/ и /VAR
	private function extractVarBlocks($text) {
		$blocks = [];
		
		// Паттерн для поиска блоков с разными типами комментариев
		// Ищет: #VAR/ ... #/VAR или VAR/ ... /VAR
		$pattern = '/(?:#)?VAR\/(.*?)\/(?:#)?VAR/s';
		
		preg_match_all($pattern, $text, $matches, PREG_SET_ORDER);
		
		foreach ($matches as $match) {
			// $match[1] содержит содержимое между разделителями
			$blocks[] = trim($match[1]);
		}
		
		// 3. Объединяем блоки и добавляем строку с сохранением в сессию
		$phpkod = "<?php\n"; // Начинаем с открывающего тега
		#$phpkod .= "session_start();\n";
		// Добавляем все найденные блоки
		$phpkod .= "\$keysToRemove = get_defined_vars();";
		/*
		$code .= "// Ключи, которые нужно исключить\n";
        $code .= "\$excludeKeys = [\n";
        $code .= "    'allVars',      // служебная переменная\n";
        $code .= "    'excludeKeys',  // служебная переменная\n";
        $code .= "    'GLOBALS',      // суперглобальная\n";
        $code .= "    '_SERVER',      // суперглобальная\n";
        $code .= "    '_GET',         // суперглобальная\n";
        $code .= "    '_POST',        // суперглобальная\n";
        $code .= "    '_FILES',       // суперглобальная\n";
        $code .= "    '_COOKIE',      // суперглобальная\n";
        $code .= "    '_SESSION',     // суперглобальная\n";
        $code .= "    '_REQUEST',     // суперглобальная\n";
        $code .= "    '_ENV',         // суперглобальная\n";
        $code .= "];\n\n";
		// Исключаем ключи
        $code .= "// Исключаем служебные ключи\n";
        $code .= "\$result = array_diff_key(\$keysToRemove, array_flip(\$excludeKeys));\n\n";
		*/
		foreach ($blocks as $block) {
			$phpkod .= $block . "\n";
		}

		// Добавляем строку для сохранения переменных в сессию
		// ВАЖНО: Используем двойные кавычки для экранирования или конкатенацию
		// Используем array_diff_key() - сравнивает только ключи
					
		$phpkod .= "\$array = get_defined_vars();\n";
		$phpkod .= "\$result = array_diff_key(\$array, \$keysToRemove);\n";
		$phpkod .= "unset(\$result['keysToRemove']);";
		$phpkod .= "\$_SESSION['VAR'] = \$result;\n";
		$phpkod .= "?>\n"; // Закрывающий тег

		#echo "\nСгенерированный PHP код:\n";
		#echo $phpkod;
		
		// 4. Запускаем код в буфере
		session_start(); // Убедимся, что сессия стартовала

		ob_start();
			try {
				// Выполняем код
				eval('?>' . $phpkod);
				#echo "Код успешно выполнен!\n";
			} catch (ParseError $e) {
				echo "Ошибка в PHP коде: " . $e->getMessage() . "\n";
			} catch (Throwable $e) {
				echo "Ошибка выполнения: " . $e->getMessage() . "\n";
			}
		ob_get_clean();
		
		// Удаляем все блоки вместе с разделителями
		$pattern = '/(?:#)?VAR\/.*?\/(?:#)?VAR/s';
		$cleanText = preg_replace($pattern, '', $text);
		#print_r($cleanText);
		return $cleanText;
	}
	
}

/*

// Пример использования
$text = "
		ul#main2/maig.menu
			li.item Пункт 3
			li.item.active Пункт 4
";
$inputs = "
<!DOCTYPE html>
html(lang='ru')
  head
    meta(charset='utf-8')
    title Селекторное письмо
	<!-- Невидимый коментарий -->
  include ./header.php
  body
  <p>Этот текст будет в теге </p>
		p.paragraph
			img.image(src='picture.jpg' alt='Изображение')
		a(href='/') ссылка
 // Коментарий будет видимым в html
		<!-- div class='class'>Этот элемент пропускается</div-->
    div.class
      ul#main1/mai.menu.menu2 ТЕКСТ
        li.item 
          a.link(href='/') Пункт 1
        li.item.active Пункт 2
        input.form-control(type='text' placeholder='Введите имя' value='поле')
		include ./include.php
		$text
";
$input = "
include ./head.php
";
$input1 = "./head.php";

echo New TagParse($inputs);
*/
