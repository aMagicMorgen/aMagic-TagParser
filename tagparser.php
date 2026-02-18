<?php
//tagparser.php
// 18.02.2026 автор Алексей Нечаев, г. Москва, +7(999)003-90-23, nechaev72@list.ru

class TagParse {
   const VOID_TAGS = ['area', 'base', 'br', 'col', 'embed', 'hr', 'img', 'input', 'link', 'meta', 'param', 'source', 'track', 'wbr'];
    private $html;
	
	public function __toString(): string {
        return $this->html;
    }
	
	private function isVoidTag(string $tag): bool {
        return in_array($tag, static::VOID_TAGS);
    }
	
	// определяем это путь к файлу в котором строка или строка из переменной
	private function getTemplate(string $shablon)
	{
		 // Если файл существует - читаем его
		 if(file_exists($shablon)) $shablon = file_get_contents($shablon);
		return $shablon;
	 }

    public function __construct(string $input) {
		$input = $this->getTemplate($input);
        $lines = explode("\n", trim($input));
        $stack = [];
        $this->html = '';

        foreach ($lines as $line) {
			 #$line = trim($line);
			// Пропускаем пустые строки
            if (trim($line) === '' || strpos($line, "<!--") || strpos($line, "-->")) continue;
			// Коментарии
			if(strpos(' ' . $line, '//')) {
				$this->html .= "\n<!-- " . trim(str_replace('//', '', $line)) . " -->";
				continue;
			}
			// пропускаем HTML
			if(trim($line)[0] == '<') {
				$this->html .= "\n" . $line;
				continue;
			}
			
            // Определяем уровень вложенности
            preg_match('/^(\s*)/', $line, $matches);
			$space = str_replace("\t", "  ", $matches[1]);
            $indent = strlen($space);

			// Закрываем теги при снижении уровня вложенности
            while ($indent < (count($stack) * 2)) {
                $this->html .= '</' . array_pop($stack) . '>';
            }
			
			// Парсим текущую строку
            $node = $this->parseLine(trim($line));
      
			// Генерация HTML-кода
            $this->html .= "\n" . $space . $this->renderTag($node);		
		
			if (!$this->isVoidTag($node['tag']) && $node['tag'] !== 'include') {
				array_push($stack, $node['tag']);
			}
        }

        // Закрываем оставшиеся теги
        while (!empty($stack)) {
            $this->html .= "</" . array_pop($stack) . ">\n";
        }
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
	
	private function renderTag(array $node): string {

		if($node['tag'] == 'include'){
			$text = $this->getTemplate($node['text']);
			return New TagParse($text);
		}
        
		$htmls = '<' . $node['tag'] . ' '; // Используем реальный тег, а не дефолтный div
		if($node['tag'] == 'html') $htmls = "<!DOCTYPE html>\n" . $htmls;
		
        foreach ($node['attr'] as $name => $value) {
			// Пропускаем пустые
            if ($value === '') continue;
            $htmls .= htmlspecialchars($name) . '="' . htmlspecialchars($value) . '" ';
			
        }
		$htmls .= $node['attrs'] . ">" . (!$this->isVoidTag($node['tag']) ? $node['text'] : '');
		
        return $htmls;
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
