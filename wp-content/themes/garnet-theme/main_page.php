<?php
/**
 * Created by PhpStorm.
 * User: Руслан
 * Date: 15.08.2016
 * Time: 20:47
 * Template Name: Главная страница
 */
get_header();?>
<script src="/wp-content/themes/garnet-theme/js/onlyHome.js"></script>

<section>
    <div class="main">
        <div id="particle-slider">
            <div class="slides">
                <div id="first-slide" class="slide" data-src="data:image/png;base64,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">
                </div>
            </div>
            <canvas class="draw"></canvas>
        </div>
        <div class="z">
            <div class= "container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main__ideas">
                            <p>идеи</p>
                            <span>&</span>
                            <p>решения</p>
                            <img src="/wp-content/themes/garnet-theme/img/brain.png" alt="and">
                            <a href="#p__1" class="arrow__down"><img src="/wp-content/themes/garnet-theme/img/arrow.png" alt="arrow"></a>
                        </div>
                        <div id="p__1" class="main__block">
                            <div  class="main__l col-md-7 col-xs-12">
                                <div class="row">
                                    <div class="main__serv col-md-4 col-sm-6 col-xs-2 wow fadeInLeft" data-wow-delay="0.6s">
                                        <a href="#t_33" data-toggle="tab" class="active"><img class="img-responsive" src="/wp-content/themes/garnet-theme/img/dev-sites.png" alt="dev-sites"><p>Разработка сайтов</p></a>
                                    </div>
                                    <div class="main__serv col-md-4 col-sm-6 col-xs-2  wow fadeInLeft" data-wow-delay="0.4s">
                                        <a href="#t_35" data-toggle="tab"><img class="img-responsive" src="/wp-content/themes/garnet-theme/img/mob-dev.png" alt="mob-dev"><p>Мобильные приложения</p></a>
                                    </div>
                                    <div class="main__serv col-md-4 col-sm-6 col-xs-2  wow fadeInLeft" data-wow-delay="0.2s">
                                        <a href="#t_134" data-toggle="tab"><img class="img-responsive" src="/wp-content/themes/garnet-theme/img/branding.png" alt="branding"><p>Брендинг</p></a>
                                    </div>
                                    <div class="main__serv col-md-4 col-sm-6 col-xs-2  wow fadeInLeft" data-wow-delay="0.6s">
                                        <a href="#t_136" data-toggle="tab"><img class="img-responsive" src="/wp-content/themes/garnet-theme/img/m-design.png" alt="m-design"><p>Моушн дизайн</p></a>
                                    </div>
                                    <div class="main__serv col-md-4 col-sm-6 col-xs-2  wow fadeInLeft" data-wow-delay="0.4s">
                                        <a href="#t_138" data-toggle="tab"><img class="img-responsive" src="/wp-content/themes/garnet-theme/img/reclama.png" alt="reclama"><p>Реклама</p></a>
                                    </div>
                                    <div class="main__serv col-md-4 col-sm-6 col-xs-2  wow fadeInLeft" data-wow-delay="0.2s">
                                        <a href="#t_140" data-toggle="tab"><img class="img-responsive" src="/wp-content/themes/garnet-theme/img/move.png" alt="move"><p>Продвижения</p></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-xs-12">
                               <div  class="main__t tab-content wow fadeInRight" data-wow-delay="1s" style="color: white;">
                                   <?php
                                   if ( have_posts() ) : // если имеются записи в блоге.
                                       query_posts('cat=3');   // указываем ID рубрик, которые необходимо вывести.
                                       while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
                                           ?>
                                           <div id="t_<?php echo the_ID();?>" class="tab-pane">
                                                <h3><?php the_title(); ?></h3>
                                                <?php the_content();?>
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
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<section>
    <div class="main__a">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="calculator__subtitle">
                        <h3>Рассчитайте стоимость сайта <span class="blue">за 2 шага</span><span class="red"> бесплатно</span></h3>
                    </div>
                    <div class="calculator__steps">
                        <a href="#" class="calculator__step active-my" data-target-my="step1">Шаг 1</a>
                        <a href="#" class="calculator__step" data-target-my="step2">Шаг 2</a>
                    </div>
                    <div class="calculator__form-wrap">
                        <form action="" id="my-calculator" class="calculator__form">
                            <!-- step1 -->
                            <div class="step1 active-my stepp">
                                <div class="calculator__form-input ic1">
                                    <input type="text" placeholder="Ваше имя" name="name">
                                </div>
                                <div class="calculator__form-input ic2">
                                    <input type="text" placeholder="Ваш телефон" name="phone">
                                </div>
                                <div class="calculator__form-select">
                                    <select name="site_type" id="">
                                        <option value="1">Выберите тип сайта</option>
                                        <option value="Визитка">Визитка</option>
                                        <option value="Магазин">Магазин</option>
                                        <option value="Портал">Портал</option>
                                        <option value="Посадочная страница">Посадочная страница</option>
                                        <option value="Индивидуальное решение">Индивидуальное решение</option>
                                    </select>
                                </div>
                                <div class="popup-order__personal calculator__managers">
                                    <div class="popup-order__personal-text">
                                        <p>
                                            <span class="bold">Выберите</span> вашего<br>
                                            <span class="bold">персонального</span><br>
                                            <span class="green">менеджера:</span>
                                        </p>
                                    </div>
                                    <div class="popup-order__personal-items">
                                        <div class="popup-order__personal-item m1">
                                            <div class="checbox-custom">
                                                <input type="radio" value="Валерия" name="group2" id="lera2" checked="">
                                                <label for="lera2">Валерия</label>
                                            </div>
                                        </div>
                                        <div class="popup-order__personal-item m2">
                                            <div class="checbox-custom">
                                                <input type="radio" value="Константин" name="group2" id="kostya2">
                                                <label for="kostya2">Константин</label>
                                            </div>
                                        </div>
                                        <div class="popup-order__personal-item m3">
                                            <div class="checbox-custom">
                                                <input type="radio" value="Юлия" name="group2" id="julia2">
                                                <label for="julia2">Юлия</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="calculator__form-submit">
                                    <div class="header__want-order next-step">
                                        <a href="#" data-target-my="step2">следующий шаг<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- step2 -->
                            <div class="step2 stepp">
                                <div class="calculator__form-select">
                                    <select name="design_type" id="">
                                        <option value="1">Выберите тип дизайна</option>
                                        <option value="Простой">Простой</option>
                                        <option value="Шаблонный">Шаблонный</option>
                                        <option value="Уникальный">Уникальный</option>
                                    </select>
                                </div>
                                <div>
                                    <div class="upper">Выберите тип продвижения:</div>
                                    <div class="calculator__form-radio">
                                        <div class="radio-my">
                                            <input type="checkbox" name="promotion22" id="seo" value="Сео" checked>
                                            <label for="seo">SEO</label>
                                        </div>
                                        <div class="radio-my">
                                            <input type="checkbox" name="promotion33" id="contex" value="Контекстная реклама">
                                            <label for="contex">Контекстная реклама</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="calculator__form-input">
                                    <textarea name="message" id="" placeholder="Комментарий"></textarea>
                                </div>
                                <div class="calculator__form-submit">
                                    <div class="header__want-order send-form">
                                        <a href="#">Отправить<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="main__b">
        <div class="container-fluid">
            <div class="row">
                <?php
                if ( have_posts() ) : // если имеются записи в блоге.
                    query_posts('cat=6');   // указываем ID рубрик, которые необходимо вывести.
                    while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
                        ?>
                        <div class="col-md-3 col-sm-6 col-xs-12 wow bounceIn" data-wow-delay="0.6s" data-wow-duration="0.8s">
                            <div class="main__work row">
                                <div class="work__title">
                                    <h4><?php the_title(); ?></h4>
                                </div>
                                <div class="work__text">
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
</section>
<section>
    <div class="main__c">
        <div class="container">
            <div class="row">
                <div class="main__title wow rotateInDownLeft" data-wow-delay="0.4s">
                    <h3>Нам есть чем гордиться</h3>
                </div>
                <div class="c__p col-md-3 col-sm-6 col-xs-12"
                     data-value="0.25"
                     data-size="204"
                     data-thickness="6"
                     data-animation-start-value="0">
                    <div class="c__a --n"></div>
                    <p>Мобильных приложений</p>
                </div>
                <div class="c__p col-md-3 col-sm-6 col-xs-12"
                     data-value="0.5"
                     data-size="204"
                     data-thickness="6"
                     data-animation-start-value="0">
                    <div class="c__b --n"></div>
                    <p>Клиентов</p>
                </div>
                <div class="c__p col-md-3 col-sm-6 col-xs-12"
                     data-value="0.9"
                     data-size="204"
                     data-thickness="6"
                     data-animation-start-value="0">
                    <div class="c__c --n"></div>
                    <p>Завершенных проектов</p>
                </div>
                <div class="c__p col-md-3 col-sm-6 col-xs-12"
                     data-value="0.13"
                     data-size="204"
                     data-thickness="6"
                     data-animation-start-value="0">
                    <div class="c__d --n"></div>
                    <p>Лет опыта</p>
                </div>
                <div class="desc wow slideInLeft" data-wow-delay="0.4s" data-wow-duration="0.6s">
                    <p><span>Мы</span> &mdash; эксперты</p>
                    <p>в современных</p>
                    <p>технологиях</p>
                    <p>создания <span>сайтов</span></p>
                </div>

            </div>
        </div>
    </div>
</section>
<div class="bgc__2">
<section>
    <div class="main__d">
        <div class="container">
            <div class="row --rlc">
                <div class="col-md-6 col-sm-12 col-xs-12 --rolling wow bounceInDown" data-wow-delay="0.6s">
                    <canvas id="c" width="600" height="600"></canvas>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 wow bounceInUp" data-wow-delay="0.8s">
                    <div class="days">
                        <h2>Наши <span>будни</span></h2>
                        <?php
                        if ( have_posts() ) : // если имеются записи в блоге.
                            query_posts('cat=7');   // указываем ID рубрик, которые необходимо вывести.
                            while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
                                ?>
                                    <div class="our__days">
                                        <h4><?php the_title(); ?></h4>
                                        <?php the_content();?>
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
    </div>
</section>
<section>
    <div class="main__e">
        <div class="container">
                <div class="title">
                    <h2>ЛУчшая награда <span>за наш труд</span></h2>
                </div>
                <div class="e__text">
                    <?php
                    if ( have_posts() ) : // если имеются записи в блоге.
                    query_posts('cat=8');   // указываем ID рубрик, которые необходимо вывести.
                    while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
                        ?>
                        <div class="main__p">
                            <?php the_content();?>
                            <div class="main__photo">
                                <a href=""><?php echo get_the_post_thumbnail();?></a>
                                <h4><?php the_title(); ?></h4>
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
        <div class="container">
            <div class="row">
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
    <div class="main__g">
        <div class="container">
            <div class="row">
                <div class="lamp__g">
                    <img class="icon__c" src="/wp-content/themes/garnet-theme/img/llamp.svg" alt="">
                    <a href="#p__113" class="arrow__down"><img src="/wp-content/themes/garnet-theme/img/arrow.png" alt="arrow"></a>
                </div>
                    <?php
                    if ( have_posts() ) : // если имеются записи в блоге.
                        query_posts('cat=9');   // указываем ID рубрик, которые необходимо вывести.
                        while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
                            ?>
                            <div id="p__<?php echo the_ID();?>" class="m col-md-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="g">
                                    <?php the_content();?>
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
    <div class="main__q">
        <div class="container">
            <div class="title wow bounceInRight" data-wow-delay="0.5s">
                <h2>Остались <span>вопросы ?</span></h2>
                <p><span>Оставьте заявку</span> и мы перезвоним вам в ближайшее время.</p>
            </div>
           <div class="c__form">
               <?php echo do_shortcode( '[contact-form-7 id="183" title="Без названия"]' );?>
               <div class="down__l text-center wow bounceInLeft" data-wow-delay="0.5">
                   <a href="garnet.docx" download>
                       <img src="/wp-content/themes/garnet-theme/img/book-b.svg" alt="book" class="icon__c">
                       <p><span>Скачать</span> презентацию</p>
                   </a>
               </div>
           </div>
        </div>
    </div>
</section>
<?php get_footer();?>




