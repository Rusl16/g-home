<?php
/**
* WP Post Template: Portfolio tamplate
 */

get_header();
?>
</div>
<div class="portfolio-site">
    <div class="head-for-case" style="background-image: url(<?php the_field('background_header');?>)">
        <div class="container">
            <div class="main-info">
                <span class="date-case"><img class="icon__c schedule" src="/wp-content/themes/garnet-theme/img/Vector_Smart_Object.svg" alt=""><?php the_field('date');?></span>
                <h1 class="site-name"><?php the_field('header_title');?></h1>
                <p><?php the_field('header_description')    ;?></p>
                 <a class="button-to-site"  href="#"><?php the_field('web_link');?> <span>→</span></a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="case-information">
            <div class="logo-client-target-solution">
                <div class="logo">
                    <img src="<?php the_field('logo');?>" alt="logo_case">
                </div>
                <div class="client-target-solution">
                    <div class="client">
                        <span>Клиент: </span>
                        <p><?php the_field('customer');?></p>
                    </div>
                    <div class="target">
                        <span>цель проекта:</span>
                        <p><?php the_field('purpose');?></p>
                    </div>
                    <div class="solution">
                        <span>решение:</span>
                        <p><?php the_field('decision');?></p>
                    </div>
                </div>
            </div>
            <blockquote><p><?php the_field('description_1');?></p></blockquote>
            <div class="image-case-1">
                <img src="<?php the_field('page_image_1');?>" alt="">
            </div>
            <blockquote><p><?php the_field('description_2');?></p></blockquote>
            <div class="image-case-2">
                <img src="<?php the_field('page_image_2');?>" alt="">
            </div>

            <blockquote><p><?php the_field('description_3');?></p></blockquote>
            <div class="image-case-3">
                <img src="<?php the_field('page_image_3');?>" alt="">
            </div>

            <span class="results">Результаты</span>
            <div class="result clearfix">
                <div class="xp sz">
                    <span class="for__img"><img class="res__mod" src="/wp-content/themes/garnet-theme/img/shedule.png" alt="days"></span>
                    <span><?php the_field('experience');?></span><p>дней опыта</p>
                </div>
                <div class="pg sz">
                    <span class="for__img"><img class="res__mod" src="/wp-content/themes/garnet-theme/img/pages.png" alt="days"></span>
                    <span><?php the_field('pages');?></span><p>страниц</p>
                </div>
                <div class="spec sz">
                    <span class="for__img"><img class="res__mod" src="/wp-content/themes/garnet-theme/img/ppl.png" alt="days"></span>
                    <span><?php the_field('specialists');?></span><p>работало специалистов</p>
                </div>
                <div class="att sz">
                    <span class="for__img"><img class="res__mod" src="/wp-content/themes/garnet-theme/img/plane.png" alt="days"></span>
                    <span><?php the_field('attract');?></span><p>привлечено клиентов</p>
                </div>
               <div class="cup sz">
                   <span class="for__img"><img class="res__mod" src="/wp-content/themes/garnet-theme/img/cup.png" alt="days"></span>
                   <span><?php the_field('cups');?></span><p>чашек кофе выпито</p>
               </div>

            </div>
            <div class="image-case-4">
                <img src="<?php the_field('page_image_4');?>" alt="">
            </div>
            <blockquote class="last"><p><?php the_field('description_4');?></p></blockquote>
        </div>
    </div>
</div>
    <section>
        <div class="deal text-center pr__folio">
            <div class="container">
                <div class="title">
                    <h2><span>Хотите</span> сотрудничать <span>?</span></h2>
                </div>
                <div class="tel">
                    <?php echo do_shortcode('[contact-form-7 id="249" title="Без названия"]');?>
                </div>
            </div>
        </div>
    </section>
<div class="bgc__2">
    <section>
        <div class="container">
            <div class="means portf">
                <div class="title">
                    <h2>Другие работы</h2>
                </div>
                <div id="all">
                    <?php
                    if ( have_posts() ) : // если имеются записи в блоге.
                        query_posts('cat=16&orderby=rand&showposts=3');   // указываем ID рубрик, которые необходимо вывести.
                        while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
                            ?>
                            <div class="col-sm-4 col-xs-12">
                                <div class="row">
                                    <div class="cls">
                                        <?php echo the_post_thumbnail(lagre);?>
                                        <div class="m__name">
                                            <h4><?php the_title(); ?></h4>
                                            <?php the_content();?>
                                        </div>
                                        <div class="m__links">
                                            <a href="<?php echo get_the_permalink();?>">Подробнее</a>
                                            <a href="<?php the_field('web_link');?>">Перейти на сайт</a>
                                        </div>
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
    </section>
<?php
get_footer();
?>