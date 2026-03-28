html(lang="ru" class="scroll-smooth")
	head
		title Большой лендинг без с MCSS
		script(src="./lib/aMagic/mds/mds-bulma.js")
	body
		header
			NAV_BULMA.clr2.fix
				NAV_BREND
				(href="#") aMagic
				NAV_START
				(href="#features") О НАС
				(href="#features") Возможности
				(href="#features") Цены
				NAV_END
				(href="#features") Контакты
				(href="#signup") ВОЙТИ
			
			include NAV_BULMA
		<!--zero-md  src='./parts/03-Phug-renderFile.md'></zero-md-->
		MD
		
		/MD
		include ./parts/include.php	
		include ./parts/footer.php