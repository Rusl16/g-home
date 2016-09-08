<?php
/**
 * Created by PhpStorm.
 * User: Руслан
 * Date: 15.08.2016
 * Time: 20:47
 * Template Name: Блог
 */
get_header(); ?>
</div>
<div class="bg">
<div class="container test-bg">
    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
    <h1>Блог</h1>
    <div class="col-sm-8">
        <div class="row">
            <?php
            if ( have_posts() ) : // если имеются записи в блоге.
                query_posts('cat=10');   // указываем ID рубрик, которые необходимо вывести.
                while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
                    ?>
                    <div class="col-md-6 blog-article">
                        <?php echo the_post_thumbnail(large);?>
                        <?php
                        $tags = wp_get_post_tags($post->ID); // находим метки у записей блога
                        if ($tags) {
                            foreach($tags as $tag) {
                                echo '<span class="rubric">' . $title . '<a href="' . get_term_link( $tag, 'post_tag' ) . '" title="' . sprintf( __( "View all posts in %s" ), $tag->name ) . '" ' . '>' . $tag->name.'</a> </span> ';
                            }
                        }
                        ?>
                        <!--                <span>--><?php //echo wp_get_post_tags($post_id, $taxonomies) ?><!--</span>-->
                        <span class="date"><?php echo get_the_date( 'j F  Y' ); ?></span>
                        <h3><?php the_title(); ?></h3>
                        <a class="read-more" href="<?php the_permalink(); ?>">Читать далее</a>
                    </div>
                <?php endwhile;  // завершаем цикл.
            endif;
            //    / Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. /
            wp_reset_query();
            ?>
            <?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
        </div>
    </div>
    <?php get_sidebar();?>

</div>
</div>



<div>
<?php get_footer();?>