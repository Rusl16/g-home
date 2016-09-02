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
    <div class="top-recent">
	<ul class="nav nav-pills aside-nav">
		<li class="active"><a data-toggle="pill" href="#aside-top" class="aside-top">Топ</a></li>
		<li><a data-toggle="pill" href="#aside-recent" class="aside-recent">Недавнее</a></li>

	</ul>
	</div>
	<div class="tab-content aside-content">
	<div id="aside-top" class="tab-pane fade in active">
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
	<div id="aside-recent" class="tab-pane fade">
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

	<h3 class="last-comments">Последние комментарии</h3>


	<ul class="aside-recent-comments">
		<?php kama_recent_comments("limit=3&ex=100"); ?>
	</ul>



</aside>
<?php } ?>