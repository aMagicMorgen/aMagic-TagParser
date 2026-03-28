<?php
function renderTemplateAdvanced($shablon, $tema) {
    $lines = explode("\n", $shablon);
    $result = [];
    $cycleStack = [];
    $currentCycleIndex = -1;
    $currentCycleData = [];
    
    foreach ($lines as $originalLine) {
        // Определяем отступ (табы или пробелы)
        preg_match('/^(\s*)/', $originalLine, $matches);
        $indent = $matches[1];
        $content = substr($originalLine, strlen($indent));
        
        // Проверяем маркеры циклов
        if (trim($content) === '/%') {
            $currentCycleIndex++;
            $cycleStack[$currentCycleIndex] = [
                'indent' => $indent,
                'lines' => []
            ];
            continue;
        }
        
        if (trim($content) === '%/') {
            if ($currentCycleIndex >= 0) {
                // Обрабатываем цикл
                $cycleInfo = $cycleStack[$currentCycleIndex];
                
                // Получаем данные для этого цикла
                $cycleData = isset($tema[$currentCycleIndex]) && is_array($tema[$currentCycleIndex]) 
                    ? $tema[$currentCycleIndex] 
                    : [];
                
                // Генерируем строки цикла
                foreach ($cycleData as $dataItem) {
                    foreach ($cycleInfo['lines'] as $cycleLine) {
                        $replacedLine = preg_replace_callback(
                            '/\{(\w+)\}/',
                            function($matches) use ($dataItem) {
                                return $dataItem[$matches[1]] ?? $matches[0];
                            },
                            $cycleLine['content']
                        );
                        $result[] = $cycleLine['indent'] . $replacedLine;
                    }
                }
                
                unset($cycleStack[$currentCycleIndex]);
                $currentCycleIndex--;
            }
            continue;
        }
        
        // Если мы внутри цикла
        if ($currentCycleIndex >= 0) {
            $cycleStack[$currentCycleIndex]['lines'][] = [
                'indent' => $indent,
                'content' => $content
            ];
        } else {
            // Заменяем одиночные плейсхолдеры
            if (is_array($tema) && count($tema) > 0) {
                // Ищем последний массив с одиночными значениями
                $singleData = [];
                for ($i = count($tema) - 1; $i >= 0; $i--) {
                    if (is_array($tema[$i]) && isset($tema[$i][key($tema[$i])])) {
                        $singleData = array_merge($singleData, $tema[$i]);
                    }
                }
                
                $content = preg_replace_callback(
                    '/\{(\w+)\}/',
                    function($matches) use ($singleData) {
                        return $singleData[$matches[1]] ?? $matches[0];
                    },
                    $content
                );
            }
            
            $result[] = $indent . $content;
        }
    }
    
    return implode("\n", $result);
}

/*
// Пример с более сложным шаблоном
$shablon = "
div.container
  h1 {title}
/%
    p.item {item}
	/%
    span.detail {detail}
	%/
%/
footer {copyright}
";

$tema = [
    [ // Первый цикл
        ['item' => 'Item 1'],
        ['item' => 'Item 2'],
        ['item' => 'Item 3']
    ],
	[
		['detail' => 'Detail A'],
		['detail' => 'Detail B']
	],	
    [ // Одиночные замены
        'title' => 'My Page',
        'copyright' => '© 2024'
    ]
];

echo "<pre>";
echo htmlspecialchars(renderTemplateAdvanced($shablon, $tema));
echo "</pre>";
?>
*/