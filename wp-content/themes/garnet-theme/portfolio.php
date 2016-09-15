<?php
/**
 * Created by PhpStorm.
 * User: Руслан
 * Date: 31.08.2016
 * Time: 16:56
 * Template Name: Портфолио
 */
get_header();?>
<div class="container">
    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
</div>
<section>
    <div class="container">
        <div class="c__links --mrg">
            <h1>Портфолио</h1>
            <ul class="a1__prtf">
                <li class="active"><a data-toggle="tab" href="#All">Все</a></li>
                <li><a data-toggle="tab" href="#Web">Сайты</a></li>
                <li><a data-toggle="tab" href="#Design">Графический дизайн</a></li>
                <li><a data-toggle="tab" href="#Mobile">Мобильные приложения</a></li>
                <li> <a data-toggle="tab" href="#Logos">Логотипы</a></li>
                <li><a data-toggle="tab" href="#Animation">Моушн/анимация</a></li>
            </ul>
        </div>
        <div class="means tab-content">
<!--            all-->
            <div id="All" class="tab-pane active">
                <?php
                if ( have_posts() ) : // если имеются записи в блоге.
                    query_posts('cat=17');   // указываем ID рубрик, которые необходимо вывести.
                    while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
                        ?>
                        <div class="col-sm-4">
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
<!--            web-->
            <div id="Web" class="tab-pane">
                <?php
                if ( have_posts() ) : // если имеются записи в блоге.
                    query_posts('cat=16');   // указываем ID рубрик, которые необходимо вывести.
                    while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
                        ?>
                        <div class="col-sm-4">
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
<!--            design-->
            <div id="Design" class="tab-pane">
                <?php
                if ( have_posts() ) : // если имеются записи в блоге.
                    query_posts('cat=18');   // указываем ID рубрик, которые необходимо вывести.
                    while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
                        ?>
                        <div class="col-sm-4">
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
<!--            Mobile-->
            <div id="Mobile" class="tab-pane">
                <?php
                if ( have_posts() ) : // если имеются записи в блоге.
                    query_posts('cat=19');   // указываем ID рубрик, которые необходимо вывести.
                    while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
                        ?>
                        <div class="col-sm-4">
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
<!--            logos-->
            <div id="Logos" class="tab-pane">
                <?php
                if ( have_posts() ) : // если имеются записи в блоге.
                    query_posts('cat=20');   // указываем ID рубрик, которые необходимо вывести.
                    while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
                        ?>
                        <div class="col-sm-4">
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
<!--            Animation-->
            <div id="Animation" class="tab-pane">
                <?php
                if ( have_posts() ) : // если имеются записи в блоге.
                    query_posts('cat=21');   // указываем ID рубрик, которые необходимо вывести.
                    while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
                        ?>
                        <div class="col-sm-4">
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
<section>
    <div class="main__l">
        <div class="container text-center">
            <div class="row">
                <div class="change__t">
                    <h2>ЛУчшая награда <span>за наш труд</span></h2>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-4">
                    <div class="svg__l --sv">
                        <img class="icon__c img-responsive" src="/wp-content/themes/garnet-theme/img/company1.svg" alt="">
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-4">
                    <div class="svg__l --sv">
                        <img class="icon__c img-responsive" src="/wp-content/themes/garnet-theme/img/company4.svg" alt="">
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-4">
                    <div class="svg__l">
                        <img class="icon__c img-responsive" src="/wp-content/themes/garnet-theme/img/company9.svg" alt="">
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-4">
                    <div class="svg__l">
                        <img class="icon__c img-responsive" src="/wp-content/themes/garnet-theme/img/company10.svg" alt="">
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-4">
                    <div class="svg__l">
                        <img class="icon__c img-responsive" src="/wp-content/themes/garnet-theme/img/company11.svg" alt="">
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-4">
                    <div class="svg__l">
                        <img class="icon__c img-responsive" src="/wp-content/themes/garnet-theme/img/company12.svg" alt="">
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-4">
                    <div class="svg__l">
                        <img class="icon__c img-responsive" src="/wp-content/themes/garnet-theme/img/dostavka24-01.svg" alt="">
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-4">
                    <div class="svg__l">
                        <img class="icon__c img-responsive" src="/wp-content/themes/garnet-theme/img/kriger-01.svg" alt="">
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-4">
                    <div class="svg__l">
                        <img class="icon__c img-responsive" src="/wp-content/themes/garnet-theme/img/kvartal.svg" alt="">
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-4">
                    <div class="svg__l">
                        <img class="icon__c img-responsive" src="/wp-content/themes/garnet-theme/img/Lam_Consalt-01.svg" alt="">
                    </div>
                </div>
                <div class="col-md-2 col-sm-3  col-xs-4">
                    <div class="svg__l --sv">
                        <img class="icon__c img-responsive" src="/wp-content/themes/garnet-theme/img/lavar-01.svg" alt="">
                    </div>
                </div>
                <div class="col-md-2 col-sm-3  col-xs-4">
                    <div class="svg__l --sv">
                        <img class="icon__c img-responsive" src="/wp-content/themes/garnet-theme/img/mad_doner-01.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="deal text-center">
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

</div>
<div>
<?php get_footer();?>
