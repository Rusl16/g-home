<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage garnet-theme
 */
//if (is_home()) {
//	echo "<div class='header' style='background-color: red;'>";
//}
?>
<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php /* RSS и всякое */ ?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php /* Все скрипты и стили теперь подключаются в functions.php */ ?>
<!--	<script url="http://cdnjs.cloudflare.com/ajax/libs/dat-gui/0.5/dat.gui.min.js"></script>-->

<!--	--><?php //if (is_home()){
//		wp_enqueue_script('home', get_template_directory_uri().'/js/onlyHome.js');
//	}  ?>
	
	 <!--[if lt IE 9]>
	 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	 <![endif]-->
	<title><?php typical_title(); // выводи тайтл, функция лежит в functions.php ?></title>
	<?php wp_head(); // необходимо для работы плагинов и функционала ?>
</head>
<body <?php body_class(); // все классы для body ?> style="background-color: black;">
<div class="bgc__1">
	<header class="main__top">
		<div class="header">
			<div class="container-fluid">
				<div class="row">
					<div class="btn__panel  menu-trigger"><i class="fa fa-bars" aria-hidden="true"></i></div>
					<div class="col-md-12">
						<nav class="navbar navbar-default">
							<img src="/wp-content/themes/garnet-theme/img/1-01.svg" class="header__logo page img-responsive">
							<img src="/wp-content/themes/garnet-theme/img/2-01.svg" class="header__logo home img-responsive">
<!--							<div class="navbar-header"  >-->
<!--								<button type="button" class="navbar-toggle collapsed menu-trigger" data-toggle="collapse" aria-expanded="false">-->
<!--									<span class="sr-only">Меню</span>-->
<!--									<span class="icon-bar"></span>-->
<!--									<span class="icon-bar"></span>-->
<!--									<span class="icon-bar"></span>-->
<!--								</button>-->
<!--							</div>-->
							<div class="collapse navbar-collapse" id="topnav">
								<?php $args = array( // опции для вывода верхнего меню, чтобы они работали, меню должно быть создано в админке
									'theme_location' => 'top', // идентификатор меню, определен в register_nav_menus() в functions.php
									'container'=> false, // обертка списка, тут не нужна
							  		'menu_id' => 'menu', // id для ul
							  		'items_wrap' => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
									'menu_class' => 'top-menu', // класс для ul, первые 2 обязательны
							  		'walker' => new bootstrap_menu(true) // верхнее меню выводится по разметке бутсрапа, см класс в functions.php, если по наведению субменю не раскрывать то передайте false
						  			);
									wp_nav_menu($args); // выводим верхнее меню
								?>
							</div>
							<div class="header__search">
								<a href="#"><img src="/wp-content/themes/garnet-theme/img/search.png" alt="header_search"></a>
							</div>
							<div class="header__phone">
								<a class="n__1" href="tel:+38(048)7032289">+38(048) 703 22 89</a>
								<a class="n__2" href="tel:+38(098)5777747">+38(098) 577 77 47</a>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>