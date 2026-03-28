

`index.php`:
```php
<?php
require 'vendor/autoload.php';

use Phug\Phug;

// Рендерим главную страницу
echo Phug::renderFile('views/home.pug');

// Или с опциями
echo Phug::renderFile('views/home.pug', [], [
    'pretty' => true,
    'cache_dir' => 'cache',
]);
?>
```
