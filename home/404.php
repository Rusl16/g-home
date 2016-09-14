<?php
/**
 * Страница 404 ошибки (404.php)
 * @package WordPress
 * @subpackage garnet-theme
 */
get_header(); // Подключаем header.php ?>
<section>
	<div class="container">
		<div class="row">
			<div style="color: white" class="<?php content_class_by_sidebar(); // функция подставит класс в зависимости от того есть ли сайдбар, лежит в functions.php ?>">
				<h1>Ой, это 404!</h1>
				<p>Блаблабла 404 Блаблабла</p>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); // подключаем footer.php ?>