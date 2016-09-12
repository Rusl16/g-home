<?php
/**
* WP Post Template: Portfolio tamplate
 */

get_header();
?>
<div class="portfolio-site">
    <div class="head-for-case" style="background-image: url(<?php the_field('background_header');?>)">
        <div class="container">
            <div class="main-info">
                <span class="date-case"><img class="icon__c schedule" src="/wp-content/themes/garnet-theme/img/Vector_Smart_Object.svg" alt=""><?php the_field('date');?></span>
                <h1 class="site-name"><?php the_field('header_title');?></h1>
                <p><?php the_field('header_description')    ;?></p>
                 <a class="button-to-site"  href="#"><?php the_field('web_link');?> →</a>
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
            <div>
                <span><?php the_field('experience');?></span>
                <span><?php the_field('pages');?></span>
                <span><?php the_field('specialists');?></span>
                <span><?php the_field('attract');?></span>
                <span><?php the_field('cups');?></span>
            </div>

            <blockquote><p><?php the_field('description_4');?></p></blockquote>
        </div>

    </div>
</div>
<?php
get_footer();
?>