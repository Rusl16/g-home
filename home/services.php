<?php
/**
 * Created by PhpStorm.
 * User: Руслан
 * Date: 02.09.2016
 * Time: 12:37
 * Template Name: Услуги
 */
get_header();?>
<div class="container">
        <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
    <div class="service clearfix">
        <div class="title">
            <h1>Услуги</h1>
        </div>
        <?php
        if ( have_posts() ) : // если имеются записи в блоге.
            query_posts('cat=15');   // указываем ID рубрик, которые необходимо вывести.
            while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
                ?>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="row --serv">
                        <?php echo the_post_thumbnail();?>
                        <div class="s__serv">
                            <h2><?php the_title();?></h2>
                            <?php the_content();?>
                        </div>
                    </div>
                </div>

            <?php endwhile;  // завершаем цикл.
        endif;
        /* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
        wp_reset_query();
        ?>
        </div>
    </div>
</div>


</div>
<div>
    <?php get_footer();?>
