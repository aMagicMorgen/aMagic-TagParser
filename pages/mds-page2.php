html(lang="ru" class="scroll-smooth")
	head
		title Большой лендинг с MCSS
		script(src="./lib/aMagic/mds/mds-bulma.js")
	body
		header
			include ./parts/header.mds
		<!--zero-md  src='./parts/03-Phug-renderFile.md'></zero-md-->
		include ./parts/hero.mds

		section
			.box
			\\.bg-gradient-to-l.from-secondary.to-primary.shadow-xl
				.cols
					.col5.offset1
						.box
							MD/
## Важные особенности:

1. **Переменные не обязательны** - PUG прекрасно работает и без них, просто как альтернативный синтаксис для HTML.

2. **Можно смешивать статику и динамику** - даже если в файле есть переменные, но вы их не передаёте, они будут обработаны как undefined:
```pug
// template-with-vars.pug
h1= title || 'Заголовок по умолчанию'
```
							/MD
					.col5
						.box
							MD/
## Важные особенности:

1. **Переменные не обязательны** - PUG прекрасно работает и без них, просто как альтернативный синтаксис для HTML.

							/MD
				.cols
					.col6.offset3
						.box
							MD/
2. **Можно смешивать статику и динамику** - даже если в файле есть переменные, но вы их не передаёте, они будут обработаны как undefined:
```pug
// template-with-vars.pug
h1= title || 'Заголовок по умолчанию'
```
							/MD
					
			.block.bg-gradient-to-l.from-secondary.to-primary.shadow-xl.shadow-xl.p-4.rounded-xl
				.cols
					.col3.tc
						.box
							MD/
## Важные особенности:

1. **Переменные не обязательны** - PUG прекрасно работает и без них, просто как альтернативный синтаксис для HTML.

2. **Можно смешивать статику и динамику** - даже если в файле есть переменные, но вы их не передаёте, они будут обработаны как undefined:
```pug
// template-with-vars.pug
h1= title || 'Заголовок по умолчанию'
```
							/MD
					.col3.tc
						.box
							MD/
## Важные особенности:

1. **Переменные не обязательны** - PUG прекрасно работает и без них, просто как альтернативный синтаксис для HTML.

							/MD
					.col3
						.box
							MD/
2. **Можно смешивать статику и динамику** - даже если в файле есть переменные, но вы их не передаёте, они будут обработаны как undefined:
```pug
// template-with-vars.pug
h1= title || 'Заголовок по умолчанию'
```
							/MD
					.col3
						.box
							MD/
## Важные особенности:

1. **Переменные не обязательны** - PUG прекрасно работает и без них, просто как альтернативный синтаксис для HTML.

2. **Можно смешивать статику и динамику** - даже если в файле есть переменные, но вы их не передаёте, они будут обработаны как undefined:
```pug
// template-with-vars.pug
h1= title || 'Заголовок по умолчанию'
```
							/MD
		
		
		
		section.section1
			.container.bg-gradient-to-l.from-secondary.to-primary.shadow-xl.shadow-xl.p-4.rounded-xl
				\\.box
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
				
			include ./parts/include.php	
			a.btn.clr4.size2.lined.round(href="/") КНОПКА
			button.clr5.round(type="submit") КНОПКА
	section.sect1
		.box
			HTML/
			./parts/html.html
			/HTML
	include ./parts/footer.php
