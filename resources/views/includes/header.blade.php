<header class="cd-header">
	<div id="cd-logo"><a class="logo" href="/">Scoria</a></div>

	<nav class="menu">
		<ul>
			<!-- inser more links here -->
			<li class="menu__item {{ Request::is('research*') ? 'menu__item--current' : '' }}"><a class="menu__link" href="/research">Research</a></li>
			<li class="menu__item {{ Request::is('ideation*') ? 'menu__item--current' : '' }}"><a class="menu__link" href="/ideation">Ideation</a></li>
			<li class="menu__item {{ Request::is('fieldbook*') ? 'menu__item--current' : '' }}"><a class="menu__link" href="/fieldbook">Fieldbook</a></li>
		</ul>
	</nav> <!-- cd-main-nav -->
</header>