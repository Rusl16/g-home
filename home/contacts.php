<?php
/**
 * Created by PhpStorm.
 * User: Руслан
 * Date: 30.08.2016
 * Time: 10:23
 * Template Name: Контакты
 */
get_header();?>
<?php //if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
   <section>
       <div class="container">
           <div class="c__links">
               <h1>КОнтакты</h1>
               <ul class="map__active">
                   <li class="map__li active"><a class="map__btn__od" href="#map__od" data-toggle="tab">Одесса</a></li>
                   <li class="map__li"><a class="map__btn__ki" href="#map__ki" data-toggle="tab">Киев</a></li>
               </ul>
           </div>
       </div>
   </section>
<section>
    <div class="map">
        <div class="container">
            <div class="map__l">
                <div id="map__od" class="tab-pane active">
                    <h2>Одесса</h2>
                    <p>Малая Арнаутская, 64</p>
                    <a class="numb" href="#">+ 38 (048) 703 22 89</a>
                    <a class="numb" href="#">+ 38 (048) 703 22 89</a>
                    <a class="mail"> office@garnet-soft.com</a>
                    <a class="get" href="#"><img class="icon__c" src="/wp-content/themes/garnet-theme/img/location-01.svg" alt="loc"> Как добраться</a>
                    <a class="solve" href="#">Наши решения <img class="icon__c" src="/wp-content/themes/garnet-theme/img/arrow-01.svg" alt="ar__map"></a>
                </div>
                <div id="map__ki" class="tab-pane">
                    <h2>Киев</h2>
                    <p>Малая Арнаутская, 64</p>
                    <a class="numb" href="#">+ 38 (048) 703 22 89</a>
                    <a class="numb" href="#">+ 38 (048) 70 22 89</a>
                    <a class="mail"> office@garnet-soft.com</a>
                    <a class="get" href="#"><img class="icon__c" src="/wp-content/themes/garnet-theme/img/location-01.svg" alt="loc"> Как добраться</a>
                    <a class="solve" href="#">Наши решения <img class="icon__c" src="/wp-content/themes/garnet-theme/img/arrow-01.svg" alt="ar__map"></a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 map__r">
            <div id="map-odessa" class=""></div>
            <div id="map-kiev" class=""></div>
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
                <?php echo do_shortcode( '[contact-form-7 id="248" title="Без названия"]' );?>
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
</div>
<div>


<?php get_footer();?>
<!---->
<!--    <input type="name" name="name" placeholder="ВАШЕ ИМЯ">-->
<!--    <input type="text" name="phone/mail" placeholder="ТЕЛЕФОН ИЛИ EMAIL ДЛЯ СВЯЗИ">-->
<!--    <textarea type="text" name="object"  placeholder="КОРОТКО О ВАШЕМ ПРОЕКТЕ"></textarea>-->
<!--    <div class="file-upload">-->
<!--        <label>-->
<!--            <input type="file" name="file">-->
<!--            <span><img class="fileUp" src="/wp-content/themes/garnet-theme/img/fileUP.png" alt="fileUp"></span>-->
<!--        </label>-->
<!--        <input type="text" id="filename" class="filename" placeholder="ПРИКРЕПИТЬ ФАЙЛ" disabled>-->
<!--    </div>-->
<!--    <input type="submit" class="button" value="Отправить">-->
<!---->

