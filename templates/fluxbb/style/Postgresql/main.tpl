<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<pun_language>" lang="<pun_language>" dir="<pun_content_direction>">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<pun_head>
{% include 'common/pgfr_header.html.j2' %}
<pun_include "includes/settings.php">
</head>
<body class="readable dokuwiki mode_show tpl_bootstrap3 loggedIn  home dw-fluid-container" >
<div class="wrapper container-fluid">

{% include 'templates/common/pgfr_navbar.html.j2' %}

		<div id="pun<pun_page>" class="pun">

		<!-- BEGIN: Forum Content -->
		<section class="content">

			<!-- BEGIN: Board Title / Banner -->
			<header>
				<nav class="primary" id="navPrimary">
					<pun_title>
					<pun_desc>
				</nav>
			</header>
			<!-- END: Board Title / Banner -->

			<pun_navlinks>

			<pun_status>

			<pun_main>

			<pun_footer>
		</section>
		<!-- END: Forum Content -->
		</div>
	</div>
{% include 'templates/common/pgfr_footer.html.j2' %}
	<!-- END: Wrapper -->

<!-- Create select drop down for mobile browsing -->
<script src="style/Air3/js/menu.js"></script>
</body>
</html>
