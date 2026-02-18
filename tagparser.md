# Документация класса TagParse

## Описание
Класс `TagParse` предназначен для преобразования упрощенного синтаксиса (CSS-подобных селекторов) в валидный HTML. Поддерживает вложенность, комментарии, включение файлов и различные атрибуты.

## Синтаксис

### Базовый синтаксис строки
```
тег#id/name.класс1.класс2(атрибуты) текст
```

| Часть | Описание | Пример |
|-------|----------|--------|
| `тег` | HTML-тег (если не указан, используется div) | `div`, `p`, `a` |
| `#id` | ID элемента | `#main` |
| `/name` | Атрибут name | `/username` |
| `.класс` | Класс(ы) элемента | `.menu.active` |
| `(атрибуты)` | Дополнительные атрибуты | `(href='/')`, `(type='text' placeholder='Имя')` |
| `текст` | Текстовое содержимое | `Пункт 1` |

### Отступы
Уровень вложенности определяется количеством пробелов (2 пробела = 1 уровень вложенности). Также поддерживаются табуляции.

### Комментарии
- `// текст` - видимый HTML-комментарий (`<!-- текст -->`)
- `<!-- текст -->` - игнорируемая строка (пропускается)

### Включение файлов
```
include ./путь/к/файлу.php
```
Включает содержимое указанного файла. Файл может содержать как обычный HTML, так и синтаксис TagParse.

### Прямой HTML
Любая строка, начинающаяся с `<`, вставляется как есть.

## Методы

### `__construct(string $input)`
Создает новый объект TagParse. Принимает либо строку с шаблоном, либо путь к файлу.

```php
// Из строки
$parser = new TagParse("div.container Текст");

// Из файла
$parser = new TagParse("./template.tpl");
```

### `__toString(): string`
Преобразует объект в строку HTML при выводе.

```php
echo new TagParse($input); // Автоматически вызывает __toString()
```

## Примеры использования

### Пример 1: Базовая структура
```php
$template = "
div.container
  h1 Заголовок
  p.lead Ведущий текст
  a.link(href='/') Ссылка
";

echo new TagParse($template);
```
**Результат:**
```html
<div class="container">
  <h1>Заголовок</h1>
  <p class="lead">Ведущий текст</p>
  <a class="link" href="/">Ссылка</a>
</div>
```

### Пример 2: Форма с атрибутами
```php
$template = "
form#login/contact-form(method='POST')
  input.form-control(type='text' name='username' placeholder='Логин')
  input.form-control(type='password' name='password' placeholder='Пароль')
  button.btn.btn-primary(type='submit') Войти
";

echo new TagParse($template);
```

### Пример 3: Сложная структура с комментариями
```php
$template = "
<!DOCTYPE html>
html(lang='ru')
  head
    meta(charset='utf-8')
    title Моя страница
  body
    // Это видимый комментарий
    header#header
      .logo Логотип
      nav
        ul.menu
          li.active
            a(href='/') Главная
          li
            a(href='/about') О нас
    main.container
      article
        h1 Добро пожаловать!
        p.lead Рады видеть вас на нашем сайте
    <!-- Скрытый комментарий, не попадёт в HTML -->
    footer
      p &copy; 2024 Все права защищены
";

echo new TagParse($template);
```

### Пример 4: Включение файлов

**header.php:**
```php
<header>
  <nav>
    <ul class="menu">
      <li><a href="/">Главная</a></li>
      <li><a href="/about">О нас</a></li>
    </ul>
  </nav>
</header>
```

**include.php:**
```php
div.widget
  h3 Виджет
  p Содержимое виджета
```

**main.tpl:**
```php
<!DOCTYPE html>
html
  head
    title Сайт
  body
    include ./header.php
    main.content
      h1 Главная страница
      p Текст контента
    include ./include.php
    footer
      p Подвал сайта
```

```php
echo new TagParse("./main.tpl");
```

### Пример 5: Переменная с шаблоном
```php
$footer = "
footer
  .container
    p &copy; 2024
";

$template = "
div.page
  header Шапка
  main Контент
  $footer
";

echo new TagParse($template);
```

## Особенности

1. **Самозакрывающиеся теги**: `area`, `base`, `br`, `col`, `embed`, `hr`, `img`, `input`, `link`, `meta`, `param`, `source`, `track`, `wbr` - не требуют закрывающего тега

2. **Спецсимволы**: Текст автоматически экранируется через `htmlspecialchars()`

3. **Атрибуты**: Значения атрибутов автоматически экранируются

4. **Вложенность**: Автоматически закрываются все открытые теги

5. **Гибкость**: Можно комбинировать обычный HTML и синтаксис TagParse

## Примечания
- Для работы с файлами требуется, чтобы файлы существовали и были доступны для чтения
- При использовании include, путь указывается относительно текущего файла
- Можно использовать переменные PHP внутри строки шаблона (как в примере 5)
