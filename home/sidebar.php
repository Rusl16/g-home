<?php
/**
 * Шаблон сайдбара (sidebar.php)
 * @package WordPress
 * @subpackage garnet-theme
 */
?>
<?php if (is_active_sidebar( 'sidebar' )) { // если в сайдбаре есть что выводить ?>
<aside class="col-sm-4">

	<?php dynamic_sidebar('sidebar'); // выводим сайдбар, имя определено в functions.php ?>
	<div class="col-md-12 --side__mod">
			<div>
				<div class="be-with-us">
					<h3>Будь с нами!</h3>
					<ul class="aside-social-networks">
						<li class="vk-aside">
							<a href="#">
								<i class="fa fa-vk" aria-hidden="true"></i>
							</a>
						</li>
						<li class="fb-aside"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="tw-aside"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="g-aside"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="subscribe">
					<h3><span>Подписаться</span> на рассылку</h3>
					<?php echo do_shortcode( '[wysija_form id="2"]' );?>
				</div>
			</div>
			<div class="aside-rubrics">
				<h2>Рубрики</h2>
				<ul>
					<li><a href="#">Seo</a></li>
					<li><a href="#">Видео-уроки</a></li>
					<li><a href="#">Маркетинг</a></li>
					<li><a href="#">Юзабилити</a></li>
					<li><a href="#">Кейсы</a></li>
					<li><a href="#">Личный опыт</a></li>
					<li><a href="#">Веб-дизайн</a></li>
					<li><a href="#">Показать все</a></li>
				</ul>

			</div>


			<div>

			</div>

		<ul class="nav nav-pills sidebar__bt">
			<li class="active"><a data-toggle="pill" href="#aside-top">Топ</a></li>
			<li><a data-toggle="pill" href="#aside-recent">Недавнее</a></li>
		</ul>
	</div>
	<div class="tab-content">
	<div id="aside-top" class="tab-pane fade in active">
		<div class="col-md-12  --side__mod">
			<ul class="aside-top-recent">
				<?php query_posts('category_name=Блог&showposts=3'); ?>
				<?php while (have_posts()) : the_post(); ?>
					<li><a class="title-recent" href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail(large);?>
							<p><?php the_title(); ?> </p>
						</a> </li>
				<?php endwhile; ?>
			</ul>
		</div>
	</div>
	<div id="aside-recent" class="tab-pane fade">
		<div class="col-md-12 ">
			<ul class="aside-top-recent">
				<?php query_posts('category_name=Блог&showposts=3'); ?>
				<?php while (have_posts()) : the_post(); ?>
					<li><a class="title-recent" href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail(large);?>
							<p><?php the_title(); ?> </p>
						</a> </li>
				<?php endwhile; ?>
			</ul>
		</div>
	</div>
</div>
	<div class="comments__blog col-md-12  --side__mod">
		<h3>Последние комментарии</h3>
		<ul class="last__comments">
			<?php kama_recent_comments("limit=3&ex=100"); ?>
		</ul>
	</div>

</aside>
<?php } ?>