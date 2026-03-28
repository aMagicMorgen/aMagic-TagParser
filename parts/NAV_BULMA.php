NAV_BULMA(role="navigation" aria-label="main navigation")
	div.navbar-brand
	/%
		a.navbar-item{NAV_BREND}
	%/
		a.navbar-burger(role="button" aria-label="menu" aria-expanded="false" data-target="navbar")
			span(aria-hidden="true")
			span(aria-hidden="true")
			span(aria-hidden="true")
			span(aria-hidden="true")
	div#navbar.navbar-menu
		div.navbar-start
		/%
			a.navbar-item{NAV_START}
		%/
		div.navbar-end
		/%
			a.navbar-item{NAV_END}
		%/
script(src="./lib/aMagic/mds/nav.js")