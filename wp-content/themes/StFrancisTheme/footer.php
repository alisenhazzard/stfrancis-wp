<?php 
/**
 * Theme Footer Section for our theme.
 * 
 * Displays all of the footer section and closing of the #main div.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */
?>

		</div><!-- .inner-wrap -->
	</div><!-- #main -->	
	<?php do_action( 'spacious_before_footer' ); ?>
		<footer id="colophon" class="clearfix">	
			<?php get_sidebar( 'footer' ); ?>

			<div class="mobile-footer">
				<h4>St. Francis of Assisi</h4>
				<p>PHONE: 
					<a href="tel:813.681.9115">813.681.9115</a>
				</p>
				<p>FAX: 813.689.4148</p>
				<p>EMAIL: 
					<a href="mailto:sfaseffner@tampabay.rr.com">sfaseffner@tampabay.rr.com</a>
				</p>
				<p>ADDRESS: <a href="https://www.google.com/maps/preview?ie=UTF-8&fb=1&gl=us&cid=17512669239884125301&q=St+Francis+of+Assisi+Catholic+Church&ei=Xu30U7SXO6GziwL60YGwBw&sqi=2&ved=0CIgBEPwSMAo" target="blank">
					4450 County Road 579 | Seffner, FL 33584
					</a>
				</p>
				<p>MAILING ADDRESS: PO Box 1218 | Seffner, FL 33583</p>
			</div>

			<div class="footer-socket-wrapper clearfix">
				<div class="inner-wrap">
					<div class="footer-socket-area">
						
						<nav class="small-menu" class="clearfix">
							<?php
								if ( has_nav_menu( 'footer' ) ) {									
										wp_nav_menu( array( 'theme_location' => 'footer',
																 'depth'           => -1
																 ) );
								}
							?>
		    			</nav>
					</div>
				</div>
			</div>			
		</footer>
		<a href="#masthead" id="scroll-up"></a>	
	</div><!-- #page -->
	<?php wp_footer(); ?>

	<div id="fb-root"></div>
<div id="fb-root"></div>
</body>
</html>