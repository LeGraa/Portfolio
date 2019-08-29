<?php
/**
 * Display all webart functions and definitions
 *
 * @package Theme Freesia
 * @subpackage Webart
 * @since Webart 1.0
 */

add_action( 'wp_enqueue_scripts', 'webart_enqueue_styles' );

function webart_enqueue_styles() {

	wp_enqueue_style( 'webart-parent-style', trailingslashit(get_template_directory_uri() ) . '/style.css' );

}

function webart_admin_css (){

  wp_enqueue_style( 'webart-admin-css', get_stylesheet_directory_uri() . '/css/admin/admin.css' );

}

add_action( 'admin_enqueue_scripts', 'webart_admin_css' );

require get_stylesheet_directory() . '/inc/welcome-notice.php';

function webart_customize_register( $wp_customize ) {
	if(!class_exists('Photograph_Plus_Features')){
		class Webart_Customize_upgrade extends WP_Customize_Control {
			public function render_content() { ?>
				<a title="<?php esc_attr_e( 'Review Webart', 'webart' ); ?>" href="<?php echo esc_url( 'https://wordpress.org/support/view/theme-reviews/webart/' ); ?>" target="_blank" id="about_webart">
				<?php esc_html_e( 'Review Webart', 'webart' ); ?>
				</a><br/>
				<a href="<?php echo esc_url( 'https://themefreesia.com/theme-instruction/webart/' ); ?>" title="<?php esc_attr_e( 'Theme Instructions', 'webart' ); ?>" target="_blank" id="about_webart">
				<?php esc_html_e( 'Theme Instructions', 'webart' ); ?>
				</a><br/>
				<a href="<?php echo esc_url( 'https://tickets.themefreesia.com' ); ?>" title="<?php esc_attr_e( 'Support Ticket', 'webart' ); ?>" target="_blank" id="about_webart">
				<?php esc_html_e( 'Tickets', 'webart' ); ?>
				</a><br/>
			<?php
			}
		}

		$wp_customize->add_section('webart_upgrade_links', array(
			'title'					=> __('About Webart', 'webart'),
			'priority'				=> 1000,
		));
		$wp_customize->add_setting( 'webart_upgrade_links', array(
			'default'				=> false,
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
		));
		$wp_customize->add_control(
			new Webart_Customize_upgrade(
			$wp_customize,
			'webart_upgrade_links',
				array(
					'section'				=> 'webart_upgrade_links',
					'settings'				=> 'webart_upgrade_links',
				)
			)
		);
	}
}
	add_action( 'customize_register', 'webart_customize_register' );

if(!class_exists('Photograph_Plus_Features')){
	// Add Upgrade to Plus Button.
	require_once( trailingslashit( get_stylesheet_directory() ) . 'inc/upgrade-plus/class-customize.php' );
}
