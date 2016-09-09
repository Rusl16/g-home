<?php
/**
 * Шаблон отдельной записи (single.php)
 * @package WordPress
 * @subpackage garnet-theme
 */
get_header(); // подключаем header.php ?>
<section class="bgc__single">
	<div class="container">
		<div class="row">
			<div class="<?php content_class_by_sidebar(); // функция подставит класс в зависимости от того есть ли сайдбар, лежит в functions.php ?>">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>

						<div class="head-article">
							<h1 class="article-blog"><?php the_title(); // заголовок поста ?></h1>
							<span class="date-article"><?php echo get_the_date( 'j F  Y' ); ?></span>
							<span class="author">автор: <span class="author-name"><?php the_author(); ?></span></span>
							<span class="count-comments"><?php comments_number('Комментариев нет','1', '%'); ?></span>

							<?php
							$tags = wp_get_post_tags($post->ID); // находим метки у записей блога
							if ($tags) {
								foreach($tags as $tag) {
									echo '<span class="article-rubric">' . $title . '<a href="' . get_term_link( $tag, 'post_tag' ) . '" title="' . sprintf( __( "View all posts in %s" ), $tag->name ) . '" ' . '>' . $tag->name.'</a> </span> ';
								}
							}
							?>
						</div>
						<div class="clearfix"></div>
						<?php the_content();
						// контент
						?>
						<span class="author-low-section">автор:<?php the_author(); ?></span>
						<div class="rating">
							<span class="rate">Оцените материал: </span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span>
						</div>
						<span class="share-social">поделиться в соц сетях:</span>
						<ul class="aside-social-networks ch">
							<li class="vk-aside"><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
							<li class="fb-aside"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li class="tw-aside"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li class="g-aside"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						</ul>
					</article>
				<?php endwhile; // конец цикла ?>

				<?php if (comments_open() || get_comments_number()) comments_template('', true); // если комментирование открыто - мы покажем список комментариев и форму, если закрыто, но кол-во комментов > 0 - покажем только список комментариев ?>
			</div>
			<?php get_sidebar(); // подключаем sidebar.php ?>
		</div>
	</div>
</section>
<?php get_footer(); // подключаем footer.php ?>
