<?php

$routes = [
	'' => 'mds-page2.php',
	'home' => 'mds-page2.php',
    'home1' => 'mds-page2.php',
    'home2' => 'mds-page3.mds',
    'home3' => 'mds-page4.mds',
    'home4' => 'index-control2.mds',
];

// Определяем текущий путь
$scriptName = $_SERVER['SCRIPT_NAME'];
$basePath = dirname($scriptName);
$fullPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Убираем базовый путь
if (strpos($fullPath, $basePath) === 0) {
    $path = substr($fullPath, strlen($basePath));
} else {
    $path = $fullPath;
}

$path = ltrim($path, '/') ?: 'home'; // 'home1' как страница по умолчанию

// Проверяем маршрут
if (!isset($routes[$path])) {
    http_response_code(404);
    die('404 - Страница не найдена');
}

// Формируем путь к файлу с проверкой безопасности
$requestedFile = './' . $routes[$path];
$realFile = realpath($requestedFile);
$baseDir = realpath(__DIR__);

if ($realFile === false || strpos($realFile, $baseDir) !== 0) {
    http_response_code(404);
    die('404 - Недопустимый путь к файлу');
}

// Проверяем существование файла
if (!file_exists($realFile)) {
    http_response_code(404);
    die('404 - Файл не найден');
}

// Обрабатываем файл
try {
    if (pathinfo($realFile, PATHINFO_EXTENSION) === 'php') {
        // Для PHP-файлов - выполняем и захватываем вывод
        ob_start();
        include $realFile;
        $content = ob_get_clean();
    } else {
        // Для остальных - читаем содержимое
        $content = file_get_contents($realFile);
    }
    
    // Передаём в парсер
    echo new TagParser($content);
    
} catch (Throwable $e) {
    // Очищаем буфер в случае ошибки
    if (ob_get_level()) ob_get_clean();
    http_response_code(500);
    die('500 - Ошибка обработки: ' . $e->getMessage());
}