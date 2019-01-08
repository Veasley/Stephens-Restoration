<?php

// =============================================================================
// VIEWS/INTEGRITY/WP-FOOTER.PHP
// -----------------------------------------------------------------------------
// Footer output for Integrity.
// =============================================================================

?>

  <?php x_get_view( 'global', '_footer', 'widget-areas' ); ?>

  <?php if ( x_get_option( 'x_footer_bottom_display' ) == '1' ) : ?>

    <footer class="x-colophon bottom" role="contentinfo">
      <div class="x-container max width">

        <?php if ( x_get_option( 'x_footer_menu_display' ) == '1' ) : ?>
          <?php x_get_view( 'global', '_nav', 'footer' ); ?>
        <?php endif; ?>
        
        <div id="footer-text">
	        <div class="x-column x-sm x-1-2 copyrights">
		        <?php if ( x_get_option( 'x_footer_content_display' ) == '1' ) : ?>
		          <div class="x-colophon-content">
		            <?php echo do_shortcode( x_get_option( 'x_footer_content' ) ); ?>
		            <?php $copyrights = get_field('footer_copyrights', 'options'); ?>
		            Copyright &copy; <? echo date(Y);?> <?php echo $copyrights ?>. All Rights Reserved
		          </div>
		        <?php endif; ?>
			</div>

		
			<div class="x-column x-sm x-1-2 connect-social last">
				<div class="connect">
		        <?php if ( x_get_option( 'x_footer_social_display' ) == '1' ) : ?>
		        
		        	<?php $phone = get_field('phone_number', 'options'); ?>
		        	
		        	<p><a href="tel:<?php echo $phone ?>"><?php echo $phone ?></a></p> <span>&#124;</span> <?php x_social_global(); ?></div>
		        	
		        <?php endif; ?>
				</div>
			</div>
        </div>

      </div>
    </footer>

  <?php endif; ?>

<?php x_get_view( 'global', '_footer' ); ?>