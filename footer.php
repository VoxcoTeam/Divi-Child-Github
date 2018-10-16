<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
				<?php get_sidebar( 'footer' ); ?>


		<?php
			if ( has_nav_menu( 'footer-menu' ) ) : ?>

				<div id="et-footer-nav">
					<div class="container">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'depth'          => '1',
								'menu_class'     => 'bottom-nav',
								'container'      => '',
								'fallback_cb'    => '',
							) );
						?>
					</div>
				</div> <!-- #et-footer-nav -->

			<?php endif; ?>

				<div id="footer-bottom">
					<div class="container clearfix">
						<p id="footer-info">
							<?php
						    $currentlang = get_bloginfo('language');
						    if($currentlang=="en-CA"):
						?>
							© 2018 Voxco.  All rights reserved.
						<?php elseif($currentlang=="fr-CA"): ?>
							© 2018 Voxco.  Tous droits réservés.
						<?php elseif($currentlang=="es-ES"): ?>
							© 2018 Voxco. Todos los derechos reservados.
						<?php elseif($currentlang=="en-US"): ?>
							© 2018 Voxco. Todos los derechos reservados.
						<?php elseif($currentlang=="de-DE"): ?>
							© 2018 Voxco. Alle Rechte vorbehalten.
						<?php endif; ?>

						</p>
				<?php
					if ( false !== et_get_option( 'show_footer_social_icons', true ) ) {
						get_template_part( 'includes/social_icons', 'footer' );
					}

					echo et_get_footer_credits();
				?>
					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->
		
	<!-- LINKEDIN SCRIPTS -->
	<script type="text/javascript">
	_linkedin_partner_id = "522650";
	window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
	window._linkedin_data_partner_ids.push(_linkedin_partner_id);
	</script><script type="text/javascript">
	(function(){var s = document.getElementsByTagName("script")[0];
	var b = document.createElement("script");
	b.type = "text/javascript";b.async = true;
	b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
	s.parentNode.insertBefore(b, s);})();
	</script>
	<noscript>
	<img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=522650&fmt=gif" />
	</noscript>

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>
</body>
</html>