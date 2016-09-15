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
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NSLTHN"
				  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NSLTHN');</script>
<!-- End Google Tag Manager -->
<?php if (substr($_SERVER['REQUEST_URI'], 4 ,9) == "thank-you") { ?>
<?php } ?>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
	(function (d, w, c) {
		(w[c] = w[c] || []).push(function() {
			try {
				w.yaCounter38280855 = new Ya.Metrika({
					id:38280855,
					clickmap:true,
					trackLinks:true,
					accurateTrackBounce:true,
					webvisor:true
				});
			} catch(e) { }
		});

		var n = d.getElementsByTagName("script")[0],
			s = d.createElement("script"),
			f = function () { n.parentNode.insertBefore(s, n); };
		s.type = "text/javascript";
		s.async = true;
		s.src = "https://mc.yandex.ru/metrika/watch.js";

		if (w.opera == "[object Opera]") {
			d.addEventListener("DOMContentLoaded", f, false);
		} else { f(); }
	})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/38280855" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>