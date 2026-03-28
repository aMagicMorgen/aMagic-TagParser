<?php
///Для вывода ошибок на экран
error_reporting(E_ALL);
ini_set('display_errors', 'on');
mb_internal_encoding('UTF-8');
header('Content-Type: text/html; charset=utf-8');
// Создать .htaccess в текущей папке
/*
.htaccess

RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index-tagparser.php [QSA,L]

*/
#require_once __DIR__ . '/lib/aMagic/renderTemplateAdvanced.php';
require_once __DIR__ . '/lib/aMagic/TegParser/TagParser.php';
$routes = [
	'vizitka' => './pages/vizitka/vizitka.mthl',
	'book1' => 'index-control11.mthl',
	'mds' => 'ОПИСАНИЕ.md',
	'demo' => 'demo.md',
	'' => 'pages/mds-page2.php',
	'home' => 'pages/mds-page2.php',
    'home1' => 'pages/mds-page2.php',
    'home2' => 'pages/mds-page3.mds',
    'forma' => 'pages/mds-page4.mds',
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
$path = ltrim($path, '/') ?: 'home1'; // 'home1' как страница по умолчанию

// Проверяем маршрут
if (!isset($routes[$path])) {
    http_response_code(404);
    die('404 - Страница не найдена');
}

// Формируем путь к файлу с проверкой безопасности
$requestedFile = __DIR__ . '/' . $routes[$path];
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