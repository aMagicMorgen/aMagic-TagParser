<?php
///Для вывода ошибок на экран
/*
error_reporting(E_ALL);
ini_set('display_errors', 'on');
mb_internal_encoding('UTF-8');
header('Content-Type: text/html; charset=utf-8');
*/
// Создать .htaccess в текущей папке
/*
.htaccess

RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index-tagparser.php [QSA,L]

*/
#require_once __DIR__ . '/lib/aMagic/renderTemplateAdvanced.php';
#require_once __DIR__ . '/lib/aMagic/TegParser/TagParser.php';
// Конфигурация для красивых ссылок и перенаправления
require_once __DIR__ . '/config-routes.php';

/*
$parts = 'index-bulma.php';
$parts = '
PHP-
include ./mds-page.php
/PHP-
';
$parts = './mds-page2.php';
$parts = './mds-page3.mds';
#$parts = './mds-page4.mds';
#$parts = './index-control2.mds';
$parts = './ОПИСАНИЕ.md';

echo New TagParser($parts);

*/



