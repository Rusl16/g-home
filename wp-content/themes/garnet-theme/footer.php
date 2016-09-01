<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage garnet-theme
 */
?>
	<footer>
		<div class="f">
			<div class="container">
				<div class="row --change">
					<div class="col-sm-4 col-xs-12 --lf">
						<div class="f__logo">
							<img class="icon__c img-responsive" src="/wp-content/themes/garnet-theme/img/garnet-foot.svg" alt="foo__logo">
							<p>&copy; 20014-2016. Garnet-Software.<br>Все права защищены.</p>
						</div>
					</div>
					<div class="col-sm-4 col-xs-12 --cnt">
						<div class="f__center">
							<p><span>Дочерняя</span> компания</p>
						</div>
					</div>
					<div class="col-sm-4 col-xs-12 --ln">
						<div class="f__links">
							<a href="https://vk.com"><i class="fa fa-vk" aria-hidden="true"></i></a>
							<a href="https://facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="https://intagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							<a href="https://youtube.com"><i class="fa fa-youtube" aria-hidden="true"></i></a>
						</div>
					</div>
					<div class="col-md-12">
						<?php $args = array( // опции для вывода нижнего меню, чтобы они работали, меню должно быть создано в админке
							'theme_location' => 'bottom', // идентификатор меню, определен в register_nav_menus() в function.php
							'container'=> false, // обертка списка, false - это ничего
							'menu_class' => 'nav nav-pills bottom-menu', // класс для ul
					  		'menu_id' => 'bottom-nav', // id для ul
					  		'fallback_cb' => false
					  	);
						wp_nav_menu($args); // выводим нижние меню
						?>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>
</body>
</html>