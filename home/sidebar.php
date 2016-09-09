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