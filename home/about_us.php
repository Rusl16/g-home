<?php
/**
 * Created by PhpStorm.
 * User: Руслан
 * Date: 05.09.2016
 * Time: 10:30
 * Template Name: О Нас
 */
get_header();?>
<script src="/wp-content/themes/garnet-theme/js/onlyHome.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8jDXBP52zsQclHleKItMuZMjJhZGxGOk&callback=initMap"
        async defer></script>
<script>
    function initMap() {

        // Specify features and elements to define styles.
        var odessaStyle = [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}];
        var kievStyle = [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#ff0000"}]},{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"lightness":"100"}]},{"featureType":"landscape.man_made","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"lightness":"100"}]},{"featureType":"landscape.natural","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"landscape.natural.landcover","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry","stylers":[{"lightness":"100"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry.fill","stylers":[{"visibility":"off"},{"lightness":"23"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffd900"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#ffd900"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#cccccc"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"off"}]}];

        odessa = new google.maps.Map(document.getElementById('map__l'), {
            center: {lat: 46.471610, lng: 30.736011},
            zoom: 12,
            styles: odessaStyle,
            scrollwheel: false
        });

        kiev = new google.maps.Map(document.getElementById('map__r'), {
            center: {lat: 50.3944334, lng: 30.4775495},
            zoom: 11,
            styles: kievStyle,
            scrollwheel: false
        });

        var markerOdessa = new google.maps.Marker({
            position: {lat: 46.471610, lng: 30.736011},
            map: odessa,
            icon: "/wp-content/themes/garnet-theme/img/marker.png"
        });

        var markerKiev = new google.maps.Marker({
            position: {lat: 50.3944334, lng: 30.4775495},
            map: kiev,
            icon: "/wp-content/themes/garnet-theme/img/marker.png"
        });
    }

    console.log('map');
</script>
    <section>
        <div class="about">
            <div class="container">
                <div class="title">
                    <h1><span>Garnet</span> software &mdash; веб-студия</h1>
                </div>
                <div class="main__ideas">
                    <p>идеи</p>
                    <span>&</span>
                    <p>решения</p>
                    <img src="/wp-content/themes/garnet-theme/img/brain.png" alt="and">
                    <a href="#ab__1" class="arrow__down"><img src="/wp-content/themes/garnet-theme/img/arrow.png" alt="arrow"></a>
                </div>
                <div id="ab__1" class="ab__main">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="desc">
                            <p><span>Мы</span> &mdash; эксперты</p>
                            <p>в современных</p>
                            <p>технологиях</p>
                            <p>создания <span>сайтов</span></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="cms">
                            <p><span>У нас</span></p>
                            <p>собственная</p>
                            <p><span>CMS система</span></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="offer">
                            <p><span>Мы </span> предоставляем</p>
                            <p>качественную</p>
                            <p><span>тех</span>поддержку</p>
                        </div>
                    </div>
                </div>
                <div class="text text-center">
                    <p>
                        Проснувшись однажды утром после беспокойного сна, Грегор Замза обнаружил, что он у себя в постели превратился
                        в страшное насекомое. Лежа на панцирнотвердой спине, он видел, стоило ему приподнять голову, свой
                        коричневый, выпуклый, разделенный дугообразными чешуйками живот, на верхушке которого еле
                        держалось готовое вот-вот окончательно сползти одеяло.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
    <section>
        <div class="team">
            <div class="container">
                <div class="title text-center">
                    <h2>Кто работает над Вашим проектом</h2>
                </div>
                <div class="who__works row">
                    <div class="col-md-4 col-sm-4 col-xs-12 l__side">
                        <div class="marketers photo__t">
                            <div class="owl__c">
                                <span class="pr__1"></span>
                                <span class="pr__2"></span>
                            </div>
                            <h4>marketers</h4>
                            <p>Душа озарена неземной
                                радостью, как эти чудесные
                                весенние утра, которыми я
                                наслаждаюсь</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 l__side">
                        <div class="ceo photo__t">
                                <span></span>
                            <h4>ceo</h4>
                            <p>Душа озарена неземной
                                радостью, как эти чудесные
                                весенние утра, которыми я
                                наслаждаюсь</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 l__side">
                        <div class="account photo__t">
                            <div class="owl__c">
                                <span class="pr__1"></span>
                                <span class="pr__2"></span>
                            </div>
                            <h4>Account managers</h4>
                            <p>Душа озарена неземной
                                радостью, как эти чудесные
                                весенние утра, которыми я
                                наслаждаюсь</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 l__side">
                        <div class="project photo__t">
                            <div class="owl__c">
                                <span class="pr__1"></span>
                                <span class="pr__2"></span>
                                <span class="pr__3"></span>
                            </div>  
                            <h4>Project managers</h4>
                            <p>Душа озарена неземной
                                радостью, как эти чудесные
                                весенние утра, которыми я
                                наслаждаюсь</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="request">
                            <img src="/wp-content/themes/garnet-theme/img/1-01.svg" alt="work-team_logo">
                            <a href="#" class="modal__btn"><span>Подать заявку</span></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 l__side">
                        <div class="designers photo__t">
                            <div class="owl__c">
                                <span class="pr__1"></span>
                                <span class="pr__2"></span>
                            </div>
                            <h4>designers</h4>
                            <p>Душа озарена неземной
                                радостью, как эти чудесные
                                весенние утра, которыми я
                                наслаждаюсь</p>
                        </div>
                    </div>
                    <div class="col-md-4  col-sm-4 col-xs-12 --s__1">
                        <div class="devel photo__t">
                            <h4>web developers</h4>
                            <p>Душа озарена неземной
                                радостью, как эти чудесные
                                весенние утра, которыми я
                                наслаждаюсь</p>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 --s__1">
                        <div class="row">
                            <div class="developers">
                                <span class="pr__1"></span>
                                <span class="pr__2"></span>
                                <span class="pr__3"></span>
                                <span class="pr__4"></span>
                                <span class="pr__5"></span>
                                <span class="pr__6"></span>
                                <span class="pr__7"></span>
                            </div>
                        </div>
                    </div>
                    <div class="free__l text-center">
                        <p><span>+</span> <span>50</span> удалённых разработчиков</p>
                    </div>
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
        <div class="main__l --serv__mod">
            <div class="container">
                <div class="row">
                    <div class="title">
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
        <div class="map__serv">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="row --m">
                    <div id="map__l"></div>
                    <div class="text__l">
                        <p><span>г. Одесса,</span>Малая Арнаутская 64</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="row --m">
                    <div id="map__r"></div>
                    <div class="text__r">
                        <p><span>г. Киев,</span>Ахтырский переулок 3</p>
                    </div>
                </div>
            </div>
            <div class="cont__map">
                <div class="mail">
                    <i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:office@garnet-soft.com">office@garnet-soft.com</a>
                </div>
                <div class="tel">
                    <div class="mp__tel">
                        <a href="tel:0(800)750013"><span>0 (800)</span> 75 00 13</a>
                        <a href="tel:(048)7032289"><span>(048)</span> 703 22 89</a>
                        <a href="tel:(098)5777747"><span>(098)</span> 577 77 47</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="deal text-center --about__mod">
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

<?php get_footer();?>




