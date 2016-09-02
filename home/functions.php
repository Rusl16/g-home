<?php
/**
 * Функции шаблона (function.php)
 * @package WordPress
 * @subpackage garnet-theme
 */

function typical_title() { // функция вывода тайтла
	global $page, $paged; // переменные пагинации должны быть глобыльными
	wp_title('', true, 'right'); // вывод стандартного заголовка без разделителя
	$site_description = get_bloginfo('description', 'display'); // получаем описание сайта
	if ($site_description && (is_home() || is_front_page())) //если описание сайта есть и мы на главной
		echo " | $site_description"; // выводим описание сайта с "|" разделителем
	if ($paged >= 2 || $page >= 2) // если пагинация была использована
		echo ' | '.sprintf(__( 'Страница %s'), max($paged, $page)); // покажем номер страницы с "|" разделителем
}

register_nav_menus(array( // Регистрируем 2 меню
	'top' => 'Верхнее', // Верхнее
	'bottom' => 'Внизу' // Внизу
));

add_theme_support('post-thumbnails'); // включаем поддержку миниатюр
set_post_thumbnail_size(250, 150); // задаем размер миниатюрам 250x150
add_image_size('big-thumb', 400, 400, true); // добавляем еще один размер картинкам 400x400 с обрезкой

register_sidebar(array( // регистрируем левую колонку, этот кусок можно повторять для добавления новых областей для виджитов
	'name' => 'Сайдбар', // Название в админке
	'id' => "sidebar", // идентификатор для вызова в шаблонах
	'description' => 'Обычная колонка в сайдбаре', // Описалово в админке
	'before_widget' => '<div id="%1$s" class="widget %2$s">', // разметка до вывода каждого виджета
	'after_widget' => "</div>\n", // разметка после вывода каждого виджета
	'before_title' => '<span class="widgettitle">', //  разметка до вывода заголовка виджета
	'after_title' => "</span>\n", //  разметка после вывода заголовка виджета
));

class clean_comments_constructor extends Walker_Comment { // класс, который собирает всю структуру комментов
	public function start_lvl( &$output, $depth = 0, $args = array()) { // что выводим перед дочерними комментариями
		$output .= '<ul class="children">' . "\n";
	}
	public function end_lvl( &$output, $depth = 0, $args = array()) { // что выводим после дочерних комментариев
		$output .= "</ul><!-- .children -->\n";
	}
    protected function comment( $comment, $depth, $args ) { // разметка каждого комментария, без закрывающего </li>!
    	$classes = implode(' ', get_comment_class()).($comment->comment_author_email == get_the_author_meta('email') ? ' author-comment' : ''); // берем стандартные классы комментария и если коммент пренадлежит автору поста добавляем класс author-comment
        echo '<li id="comment-'.get_comment_ID().'" class="'.$classes.' media">'."\n"; // родительский тэг комментария с классами выше и уникальным якорным id
    	echo '<div class="media-left">'.get_avatar($comment, 64, '', get_comment_author(), array('class' => 'media-object'))."</div>\n"; // покажем аватар с размером 64х64
    	echo '<div class="media-body">';
    	echo '<span class="meta media-heading">Автор: '.get_comment_author()."\n"; // имя автора коммента
    	//echo ' '.get_comment_author_email(); // email автора коммента, плохой тон выводить почту
    	echo ' '.get_comment_author_url(); // url автора коммента
    	echo ' Добавлено '.get_comment_date('F j, Y в H:i')."\n"; // дата и время комментирования
    	if ( '0' == $comment->comment_approved ) echo '<br><em class="comment-awaiting-moderation">Ваш комментарий будет опубликован после проверки модератором.</em>'."\n"; // если комментарий должен пройти проверку
    	echo "</span>";
        comment_text()."\n"; // текст коммента
        $reply_link_args = array( // опции ссылки "ответить"
        	'depth' => $depth, // текущая вложенность
        	'reply_text' => 'Ответить', // текст
			'login_text' => 'Вы должны быть залогинены' // текст если юзер должен залогинеться
        );
        echo get_comment_reply_link(array_merge($args, $reply_link_args)); // выводим ссылку ответить
        echo '</div>'."\n"; // закрываем див
    }
    public function end_el( &$output, $comment, $depth = 0, $args = array() ) { // конец каждого коммента
		$output .= "</li><!-- #comment-## -->\n";
	}
}

function pagination() { // функция вывода пагинации
	global $wp_query; // текущая выборка должна быть глобальной
	$big = 999999999; // число для замены
	$links = paginate_links(array( // вывод пагинации с опциями ниже
		'base' => str_replace($big,'%#%',esc_url(get_pagenum_link($big))), // что заменяем в формате ниже
		'format' => '?paged=%#%', // формат, %#% будет заменено
		'current' => max(1, get_query_var('paged')), // текущая страница, 1, если $_GET['page'] не определено
		'type' => 'array', // нам надо получить массив
		'prev_text'    => 'Назад', // текст назад
    	'next_text'    => 'Вперед', // текст вперед
		'total' => $wp_query->max_num_pages, // общие кол-во страниц в пагинации
		'show_all'     => false, // не показывать ссылки на все страницы, иначе end_size и mid_size будут проигнорированны
		'end_size'     => 15, //  сколько страниц показать в начале и конце списка (12 ... 4 ... 89)
		'mid_size'     => 15, // сколько страниц показать вокруг текущей страницы (... 123 5 678 ...).
		'add_args'     => false, // массив GET параметров для добавления в ссылку страницы
		'add_fragment' => '',	// строка для добавления в конец ссылки на страницу
		'before_page_number' => '', // строка перед цифрой
		'after_page_number' => '' // строка после цифры
	));
 	if( is_array( $links ) ) { // если пагинация есть
	    echo '<ul class="pagination">';
	    foreach ( $links as $link ) {
	    	if ( strpos( $link, 'current' ) !== false ) echo "<li class='active'>$link</li>"; // если это активная страница
	        else echo "<li>$link</li>"; 
	    }
	   	echo '</ul>';
	 }
}




add_action('wp_footer', 'add_scripts'); // приклеем ф-ю на добавление скриптов в футер
function add_scripts() { // добавление скриптов
    if(is_admin()) return false; // если мы в админке - ничего не делаем
    wp_deregister_script('jquery'); // выключаем стандартный jquery
    wp_enqueue_script('jq', get_template_directory_uri().'/js/jquery-2.2.3.min.js','','',true); // jquery
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js','','',true); // бутстрап
    wp_enqueue_script('owl', get_template_directory_uri().'/js/owl.carousel.min.js','','',true); // и скрипты шаблона
    wp_enqueue_script('progr', get_template_directory_uri().'/js/circle-progress.js','','',true); // и скрипты шаблона
    wp_enqueue_script('wow', get_template_directory_uri().'/js/wow.min.js','','',true); // и скрипты шаблона
    wp_enqueue_script('jp', get_template_directory_uri().'/js/jquery.jpanelmenu.min.js','','',true); // и скрипты шаблона
    wp_enqueue_script('mp', get_template_directory_uri().'/js/map.js','','',true); // и скрипты шаблона
	wp_enqueue_script('main', get_template_directory_uri().'/js/main.js','','',true); // и скрипты шаблона
}

add_action('wp_enqueue_scripts', 'wpmidia_enqueue_masked_input');
function wpmidia_enqueue_masked_input(){
	wp_enqueue_script('masked-input', get_template_directory_uri().'/js/jquery.maskedinput.min.js', array('jquery'));
}

add_action('wp_print_styles', 'add_styles'); // приклеем ф-ю на добавление стилей в хедер
function add_styles() { // добавление стилей
    if(is_admin()) return false; // если мы в админке - ничего не делаем
    wp_enqueue_style( 'owl', get_template_directory_uri().'/css/owl.carousel.css' ); // бутстрап
    wp_enqueue_style( 'bs', get_template_directory_uri().'/css/bootstrap.min.css' ); // бутстрап
    wp_enqueue_style( 'an', get_template_directory_uri().'/css/animate.css' ); // бутстрап
//    wp_enqueue_style( 'st_1', get_template_directory_uri().'/style_1.css' ); // бутстрап
//    wp_enqueue_style( 'st_2', get_template_directory_uri().'/style_2.css' ); // бутстрап
	wp_enqueue_style( 'main', get_template_directory_uri().'/style.css' ); // основные стили шаблона
}


class bootstrap_menu extends Walker_Nav_Menu { // внутри вывод 
	private $open_submenu_on_hover; // параметр который будет определять раскрывать субменю при наведении или оставить по клику как в стандартном бутстрапе

	function __construct($open_submenu_on_hover = true) { // в конструкторе
        $this->open_submenu_on_hover = $open_submenu_on_hover; // запишем параметр раскрывания субменю
    }

	function start_lvl(&$output, $depth = 0, $args = array()) { // старт вывода подменюшек
		$output .= "\n<ul class=\"dropdown-menu\">\n"; // ул с классом
	}
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) { // старт вывода элементов
		$item_html = ''; // то что будет добавлять
		parent::start_el($item_html, $item, $depth, $args); // вызываем стандартный метод родителя
		if ( $item->is_dropdown && $depth === 0 ) { // если элемент содержит подменю и это элемент первого уровня
		   if (!$this->open_submenu_on_hover) $item_html = str_replace('<a', '<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"', $item_html); // если подменю не будет раскрывать при наведении надо добавить стандартные атрибуты бутстрапа для раскрытия по клику
		   $item_html = str_replace('</a>', ' <b class="caret"></b></a>', $item_html); // ну это стрелочка вниз
		}
		$output .= $item_html; // приклеиваем теперь
	}
	function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) { // вывод элемента
		if ( $element->current ) $element->classes[] = 'active'; // если элемент активный надо добавить бутстрап класс для подсветки
		$element->is_dropdown = !empty( $children_elements[$element->ID] ); // если у элемента подменю
		if ( $element->is_dropdown ) { // если да
		    if ( $depth === 0 ) { // если li содержит субменю 1 уровня
		        $element->classes[] = 'dropdown'; // то добавим этот класс
		        if ($this->open_submenu_on_hover) $element->classes[] = 'show-on-hover'; // если нужно показывать субменю по хуверу
		    } elseif ( $depth === 1 ) { // если li содержит субменю 2 уровня
		        $element->classes[] = 'dropdown-submenu'; // то добавим этот класс, стандартный бутстрап не поддерживает подменю больше 2 уровня по этому эту ситуацию надо будет разрешать отдельно
		    }
		}
		parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output); // вызываем стандартный метод родителя
	}
}

function content_class_by_sidebar() { // функция для вывода класса в зависимости от существования виджетов в сайдбаре
	if (is_active_sidebar( 'sidebar' )) { // если есть
		echo 'col-sm-9'; // пишем класс на 80% ширины
	} else { // если нет
		echo 'col-sm-12'; // контент на всю ширину
	}
}


/*
 * "Хлебные крошки" для WordPress
 * автор: Dimox
 * версия: 2015.09.14
 * лицензия: MIT
*/
function dimox_breadcrumbs() {

	/* === ОПЦИИ === */
	$text['home'] = 'Главная'; // текст ссылки "Главная"
	$text['category'] = 'Архив рубрики "%s"'; // текст для страницы рубрики
	$text['search'] = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
	$text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
	$text['author'] = 'Статьи автора %s'; // текст для страницы автора
	$text['404'] = 'Ошибка 404'; // текст для страницы 404
	$text['page'] = 'Страница %s'; // текст 'Страница N'
	$text['cpage'] = 'Страница комментариев %s'; // текст 'Страница комментариев N'

	$wrap_before = '<div class="breadcrumbs">'; // открывающий тег обертки
	$wrap_after = '</div><!-- .breadcrumbs -->'; // закрывающий тег обертки
	$sep = '›'; // разделитель между "крошками"
	$sep_before = '<span class="sep">'; // тег перед разделителем
	$sep_after = '</span>'; // тег после разделителя
	$show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
	$show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
	$show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
	$before = '<span class="current">'; // тег перед текущей "крошкой"
	$after = '</span>'; // тег после текущей "крошки"
	/* === КОНЕЦ ОПЦИЙ === */

	global $post;
	$home_link = home_url('/');
	$link_before = '<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">';
	$link_after = '</span>';
	$link_attr = ' itemprop="url"';
	$link_in_before = '<span itemprop="title">';
	$link_in_after = '</span>';
	$link = $link_before . '<a href="%1$s"' . $link_attr . '>' . $link_in_before . '%2$s' . $link_in_after . '</a>' . $link_after;
	$frontpage_id = get_option('page_on_front');
	$parent_id = $post->post_parent;
	$sep = ' ' . $sep_before . $sep . $sep_after . ' ';

	if (is_home() || is_front_page()) {

		if ($show_on_home) echo $wrap_before . '<a href="' . $home_link . '">' . $text['home'] . '</a>' . $wrap_after;

	} else {

		echo $wrap_before;
		if ($show_home_link) echo sprintf($link, $home_link, $text['home']);

		if ( is_category() ) {
			$cat = get_category(get_query_var('cat'), false);
			if ($cat->parent != 0) {
				$cats = get_category_parents($cat->parent, TRUE, $sep);
				$cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
				$cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
				if ($show_home_link) echo $sep;
				echo $cats;
			}
			if ( get_query_var('paged') ) {
				$cat = $cat->cat_ID;
				echo $sep . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
			} else {
				if ($show_current) echo $sep . $before . sprintf($text['category'], single_cat_title('', false)) . $after;
			}

		} elseif ( is_search() ) {
			if (have_posts()) {
				if ($show_home_link && $show_current) echo $sep;
				if ($show_current) echo $before . sprintf($text['search'], get_search_query()) . $after;
			} else {
				if ($show_home_link) echo $sep;
				echo $before . sprintf($text['search'], get_search_query()) . $after;
			}

		} elseif ( is_day() ) {
			if ($show_home_link) echo $sep;
			echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $sep;
			echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F'));
			if ($show_current) echo $sep . $before . get_the_time('d') . $after;

		} elseif ( is_month() ) {
			if ($show_home_link) echo $sep;
			echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y'));
			if ($show_current) echo $sep . $before . get_the_time('F') . $after;

		} elseif ( is_year() ) {
			if ($show_home_link && $show_current) echo $sep;
			if ($show_current) echo $before . get_the_time('Y') . $after;

		} elseif ( is_single() && !is_attachment() ) {
			if ($show_home_link) echo $sep;
			if ( get_post_type() != 'post' ) {
				$post_type = get_post_type_object(get_post_type());
				$slug = $post_type->rewrite;
				printf($link, $home_link . '/' . $slug['slug'] . '/', $post_type->labels->singular_name);
				if ($show_current) echo $sep . $before . get_the_title() . $after;
			} else {
				$cat = get_the_category(); $cat = $cat[0];
				$cats = get_category_parents($cat, TRUE, $sep);
				if (!$show_current || get_query_var('cpage')) $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
				$cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
				echo $cats;
				if ( get_query_var('cpage') ) {
					echo $sep . sprintf($link, get_permalink(), get_the_title()) . $sep . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
				} else {
					if ($show_current) echo $before . get_the_title() . $after;
				}
			}

			// custom post type
		} elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
			$post_type = get_post_type_object(get_post_type());
			if ( get_query_var('paged') ) {
				echo $sep . sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
			} else {
				if ($show_current) echo $sep . $before . $post_type->label . $after;
			}

		} elseif ( is_attachment() ) {
			if ($show_home_link) echo $sep;
			$parent = get_post($parent_id);
			$cat = get_the_category($parent->ID); $cat = $cat[0];
			if ($cat) {
				$cats = get_category_parents($cat, TRUE, $sep);
				$cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
				echo $cats;
			}
			printf($link, get_permalink($parent), $parent->post_title);
			if ($show_current) echo $sep . $before . get_the_title() . $after;

		} elseif ( is_page() && !$parent_id ) {
			if ($show_current) echo $sep . $before . get_the_title() . $after;

		} elseif ( is_page() && $parent_id ) {
			if ($show_home_link) echo $sep;
			if ($parent_id != $frontpage_id) {
				$breadcrumbs = array();
				while ($parent_id) {
					$page = get_page($parent_id);
					if ($parent_id != $frontpage_id) {
						$breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
					}
					$parent_id = $page->post_parent;
				}
				$breadcrumbs = array_reverse($breadcrumbs);
				for ($i = 0; $i < count($breadcrumbs); $i++) {
					echo $breadcrumbs[$i];
					if ($i != count($breadcrumbs)-1) echo $sep;
				}
			}
			if ($show_current) echo $sep . $before . get_the_title() . $after;

		} elseif ( is_tag() ) {
			if ( get_query_var('paged') ) {
				$tag_id = get_queried_object_id();
				$tag = get_tag($tag_id);
				echo $sep . sprintf($link, get_tag_link($tag_id), $tag->name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
			} else {
				if ($show_current) echo $sep . $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
			}

		} elseif ( is_author() ) {
			global $author;
			$author = get_userdata($author);
			if ( get_query_var('paged') ) {
				if ($show_home_link) echo $sep;
				echo sprintf($link, get_author_posts_url($author->ID), $author->display_name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
			} else {
				if ($show_home_link && $show_current) echo $sep;
				if ($show_current) echo $before . sprintf($text['author'], $author->display_name) . $after;
			}

		} elseif ( is_404() ) {
			if ($show_home_link && $show_current) echo $sep;
			if ($show_current) echo $before . $text['404'] . $after;

		} elseif ( has_post_format() && !is_singular() ) {
			if ($show_home_link) echo $sep;
			echo get_post_format_string( get_post_format() );
		}

		echo $wrap_after;

	}
} // end of dimox_breadcrumbs()


function kama_recent_comments( $args = array() ){
	global $wpdb;

	$def = array(
		'limit'      => 3, // сколько комментов выводить.
		'ex'         => 45, // n символов. Обрезка текста комментария.
		'term'       => '', // id категорий/меток. Включить(5,12,35) или исключить(-5,-12,-35) категории. По дефолту - из всех категорий.
		'gravatar'   => '', // Размер иконки в px. Показывать иконку gravatar. '' - не показывать.
		'user'       => '', // id юзеров. Включить(5,12,35) или исключить(-5,-12,-35) комменты юзеров. По дефолту - все юзеры.
		'echo'       => 1,  // выводить на экран (1) или возвращать (0).
		'comm_type'  => '', // название типа комментария
		'meta_query' => '', // WP_Meta_Query
		'meta_key'   => '', // WP_Meta_Query
		'meta_value' => '', // WP_Meta_Query
		'url_patt'   => '', // оптимизация ссылки на коммент. Пр: '%s?all_comments#comment-%d' плейсхолдеры будут заменены на $post->guid и $comment->comment_ID
	);

	$args = wp_parse_args( $args, $def );
	extract( $args );

	$AND = '';

	// ЗАПИСИ
	if( $term ){
		$cats = explode(',', $term );
		$cats = array_map('intval', $cats );

		$CAT_IN = ( $cats[ key($cats) ] > 0 ); // из категорий или нет

		$cats = array_map('absint', $cats ); // уберем минусы
		$AND_term_id = 'AND term_id IN ('. implode(',', $cats) .')';

		$posts_sql = "SELECT object_id FROM $wpdb->term_relationships rel LEFT JOIN $wpdb->term_taxonomy tax ON (rel.term_taxonomy_id = tax.term_taxonomy_id) WHERE 1 $AND_term_id ";

		$AND .= ' AND comment_post_ID '. ($CAT_IN ? 'IN' : 'NOT IN') .' ('. $posts_sql .')';
	}

	// ЮЗЕРЫ
	if( $user ){
		$users = explode(',', $user );
		$users = array_map('intval', $users );

		$USER_IN = ( $users[ key($users) ] > 0 );

		$users = array_map('absint', $users );

		$AND .= ' AND user_id '. ($USER_IN ? 'IN' : 'NOT IN') .' ('. implode(',', $users) .')';
	}

	// WP_Meta_Query
	$META_JOIN = '';
	if( $meta_query || $meta_key || $meta_value ){
		$mq = new WP_Meta_Query( $args );
		$mq->parse_query_vars( $args );
		if( $mq->queries ){
			$mq_sql = $mq->get_sql('comment', $wpdb->comments, 'comment_ID' );
			$META_JOIN = $mq_sql['join'];
			$AND .= $mq_sql['where'];
		}
	}

	$sql = $wpdb->prepare("SELECT * FROM $wpdb->comments LEFT JOIN $wpdb->posts ON (ID = comment_post_ID ) $META_JOIN
 WHERE comment_approved = '1' AND comment_type = %s $AND ORDER BY comment_date DESC LIMIT %d", $comm_type, $limit );

	//die( $sql );
	$results = $wpdb->get_results( $sql );

	if( ! $results ) return 'Комментариев нет.';

	// HTML
	$out = $grava = '';
	foreach ( $results as  $key => $comm ){
		if( $gravatar )
			$grava = get_avatar( $comm->comment_author_email, $gravatar );

		$comtext = strip_tags( $comm->comment_content );
		$com_url = $url_patt ? sprintf( $url_patt, $comm->guid, $comm->comment_ID ) : get_comment_link( $comm->comment_ID );

		$leight = (int) mb_strlen( $comtext );
		if( $leight > $ex )
			$comtext = mb_substr( $comtext, 0, $ex ) .' …';
		//var_dump($comm);
		$author = $comm -> {'comment_author'};
		$date = $comm -> {'comment_date'};
		$comment = $comm -> {'comment_content'};

		$out .= '<span class="comment-name">'.$author.'</span><span class="comment-date">'.$date.'</span><p class="comment"><a href="'. $com_url .'" title="к записи: '. esc_attr( $comm->post_title ) .'">'. $comtext .'</a></p>';


	}

	if( $echo )
		return print $out;
	return $out;
}


//NUMBER_MASK
add_action('wp_footer', 'wpmidia_activate_masked_input');
function wpmidia_activate_masked_input(){
	?>
	<script type="text/javascript">
		jQuery( function($){
			$(".data").mask("99/99/9999");
			$(".tel").mask("+38(999) 999-99-99");
			$(".cpf").mask("999.999.999-99");
			$(".cnpj").mask("99.999.999/9999-99");
		});
	</script>
	<?php
}
?>
