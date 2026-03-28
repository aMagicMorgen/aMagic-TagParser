<!doctype html>
<html lang="ru" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Большой лендинг без class с MCSS</title>
    <!--link rel="stylesheet" href="https://unpkg.com/mvp.css"-->
    <script src="./lib/aMagic/mds/mds-bulma.js"></script>

    <script>
      <!--?php echo $script; ? -->
    </script>
    <!-- link rel="stylesheet" href="style.css" /-->
  </head>
  <body>
    <header>
		<nav class="clr5" role="navigation" aria-label="main navigation">
			<div class="navbar-brand">
				<a class="navbar-item" href="#">MagicBrand</a>
				<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbar">
				  <span aria-hidden="true"></span>
				  <span aria-hidden="true"></span>
				  <span aria-hidden="true"></span>
				  <span aria-hidden="true"></span>
				</a>
			</div>
			<div id="navbar" class="navbar-menu">
				<div class="navbar-start">
					  <a class="navbar-item" href="#features">Возможности</a>
					  <a class="navbar-item" href="#pricing">Цены</a>
					  <a class="navbar-item" href="#contact">Контакты</a>
				</div>
				<div class="navbar-end">
						<a class="navbar-item" href="#signup">Начать</a>
				</div>
			</div>						
		</nav>
    </header>

    <section class="hero size1 clr5">
		<div class="hero1 center">
		  <h1>Создавайте красивые сайты быстро и легко</h1>
		  <p>Используйте мощь Tailwind CSS и MCSS для динамической стилизации без лишних усилий.</p>
		  <a href="#signup">Попробовать бесплатно</a>
		</div>
    </section>

    <section>
      <h2>Наши возможности</h2>
      <div class="div9">
        <div class="div8">
          <div class="div2">
            <svg></svg>
            <h3>Легкая интеграция</h3>
            <p>Просто подключите Tailwind и MCSS, и ваши стили применяются автоматически.</p>
          </div>
          <div class="div2">
            <svg></svg>
            <h3>Динамическая стилизация</h3>
            <p>Меняйте классы на лету через MCSS, не трогая HTML вручную.</p>
          </div>
          <div class="div2">
            <svg></svg>
            <h3>Кастомизация</h3>
            <p>Настраивайте цвета, шрифты и эффекты через Tailwind config и MCSS.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="div2">
      <h2>Цены</h2>
      <div class="div8">
        <div class="div1">
          <h3>Бесплатно</h3>
          <p>0 ₽</p>
          <ul>
            <li>Доступ к базовым функциям</li>
            <li>Ограниченная кастомизация</li>
            <li>Поддержка сообщества</li>
          </ul>
          <a href="#signup">Выбрать</a>
        </div>
        <div class="div1">
          <h3>Профессионал</h3>
          <p>1490 ₽/мес</p>
          <ul>
            <li>Все функции бесплатно</li>
            <li>Полная кастомизация MCSS</li>
            <li>Приоритетная поддержка</li>
          </ul>
          <a href="#signup">Выбрать</a>
        </div>
        <div class="div1">
          <h3>Корпоративный</h3>
          <p>Свяжитесь с нами</p>
          <ul>
            <li>Персональный менеджер</li>
            <li>Интеграция и обучение</li>
            <li>Индивидуальные решения</li>
          </ul>
          <a href="#contact">Связаться</a>
        </div>
      </div>
    </section>

    <section class="div13">
      <h2>Начните сейчас</h2>
      <form action="#" method="POST">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required placeholder="you@example.com" />
        <label for="password">Пароль</label>
        <input type="password" id="password" name="password" required placeholder="••••••••" />
        <button class="btn-primary" type="submit">Создать аккаунт</button>
      </form>
    </section>

    <footer class="div9">
      <p>© 2025 MagicBrand. Все права защищены.</p>
    </footer>
  </body>
</html>