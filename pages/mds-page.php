html(lang="ru" class="scroll-smooth")
	head
		title Большой лендинг с MCSS
		script(src="./lib/aMagic/mds/mds-bulma.js")
	body
		header
			include ./parts/header.php
		<!--zero-md  src='./parts/03-Phug-renderFile.md'></zero-md-->
		.hero2.clr4
			MD/
**Переменные не обязательны** - PUG прекрасно работает и без них, просто как альтернативный синтаксис для HTML.			
			/MD
		section.section
			.flexr
				.tile
					.box.div-card
						PHP/
MD/
<?php
$slovo = 'кода';
?>
## Проверка PHP <?php echo $slovo; ?>
<?php
echo file_get_contents('./parts/md.md');
?>
/MD
						/PHP
					.box.div-card
						MD/
## Важные особенности:

1. **Переменные не обязательны** - PUG прекрасно работает и без них, просто как альтернативный синтаксис для HTML.

2. **Можно смешивать статику и динамику** - даже если в файле есть переменные, но вы их не передаёте, они будут обработаны как undefined:
```pug
// template-with-vars.pug
h1= title || 'Заголовок по умолчанию'
```
						/MD
				.tile
					.box.div-card
						MD/
3. **Локальные переменные в PUG** - вы можете использовать локальные переменные внутри самого PUG-файла:
```pug
- let items = ['Яблоки', 'Груши', 'Бананы']
ul
  each item in items
    li= item
```
4. **Включение других файлов** - можно разбивать шаблоны на части:
```pug
include ./header.pug
main
  h1 Контент страницы
include ./footer.pug
```
						/MD
				\\.column
					.box.div-card
						MD/
## Полный пример структуры проекта:

```
/project
  /vendor
  /views
    header.pug
    footer.pug
    home.pug
  index.php
```
						/MD
				.tile
					.box.div-card
						button.clr4.lined.round(type="submit") КНОПКА
						MD/
						./parts/md.md
						/MD
			include ./parts/include.php	
			a.btn.clr4.size2.lined.round(href="/") КНОПКА
			button.clr5.round(type="submit") КНОПКА
	section.sect1
		.box
			HTML/
			./parts/html.html
			/HTML
	include ./parts/footer.php
