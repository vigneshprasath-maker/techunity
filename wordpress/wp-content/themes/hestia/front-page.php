<?php
/**
 * The front page template file.
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hestia
 * @since Hestia 1.0
 */




if ( ! is_page_template() && ! get_theme_mod( 'disable_frontpage_sections', false ) ) {

		get_header();
		/**
		 * Hestia Header hook.
		 *
		 * @hooked hestia_slider_section
		 */
		do_action( 'hestia_header' ); ?>
	<div class="<?php echo esc_attr( hestia_layout() ); ?>">


		
		<?php
		/**
		 * Hestia Sections hook.
		 *
		 * @hooked hestia_features_section - 1
		 * @hooked hestia_about_section - 2
		 * @hooked hestia_shop_section - 3
		 * @hooked hestia_portfolio_section - 4
		 * @hooked hestia_team_section - 5
		 * @hooked hestia_pricing_section - 6
		 * @hooked hestia_testimonials_section - 7
		 * @hooked hestia_subscribe_section - 8
		 * @hooked hestia_blog_section - 9
		 * @hooked hestia_contact_section - 10
		 */
		do_action( 'hestia_sections', false );
		?>
		<b style="color: black"><h4>Contact Form	</h4></b>
				<div style="margin: auto;
  width: 60%;
  border: 3px solid #73AD21;
  padding: 10px;">
				<form  method="post">
					
					<label>name:</label>
					<input type="text"  name="name">
					<label>phone:</label>
					<input type="text"  name="phone">
					<label>email:</label>
					<input type="text"   name="email">
					<label>address:</label>
					<input type="text"   name="address">
					<button name="buttonsubmit">submit</button>

				</form>
			</div>
			<?php

		get_footer();

} else {
	include( get_page_template() );
} ?>

