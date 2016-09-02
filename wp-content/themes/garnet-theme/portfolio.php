<?php
/**
 * Created by PhpStorm.
 * User: Руслан
 * Date: 31.08.2016
 * Time: 16:56
 * Template Name: Портфолио
 */
get_header();?>

<section>
    mdsn ds csd c
    <div class="container">
        <div class="c__links --mrg">
            <h1>Портфолио</h1>
            <a href="">Все</a>
            <a href="">Сайты</a>
            <a href="">Графический дизайн</a>
            <a href="">Мобильные приложения</a>
            <a href="">Логотипы</a>
            <a href="">Моушн/анимация</a>
        </div>
        <div class="means">
            <div id="all">
                <?php
                if ( have_posts() ) : // если имеются записи в блоге.
                    query_posts('cat=14');   // указываем ID рубрик, которые необходимо вывести.
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
                                            <?php the_field('more');?>
                                            <?php the_field('links');?>
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
                    <div class="svg__l">
                        <img class="icon__c img-responsive" src="/wp-content/themes/garnet-theme/img/company1.svg" alt="">
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-4">
                    <div class="svg__l">
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
                    <div class="svg__l">
                        <img class="icon__c img-responsive" src="/wp-content/themes/garnet-theme/img/lavar-01.svg" alt="">
                    </div>
                </div>
                <div class="col-md-2 col-sm-3  col-xs-4">
                    <div class="svg__l">
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
               <?php echo do_shortcode('[contact-form-7 id="201" title="tel"]');?>
            </div>
        </div>
    </div>
</section>

</div>
<div>
<?php get_footer();?>
