<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage titan-event-management
 * @since titan-event-management 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function titan_event_management_customize_register( $wp_customize ) {
    // Check for existence of WP_Customize_Manager before proceeding
	if ( ! class_exists( 'WP_Customize_Manager' ) ) {
        return;
    }
    
    // Add the "Go to Premium" upsell section
	$wp_customize->add_section( new Titan_Event_Management_Upsell_Section( $wp_customize, 'upsell_premium_section', array(
		'title'       => __( 'Titan Event Management Pro', 'titan-event-management' ),
		'button_text' => __( 'GO TO PREMIUM', 'titan-event-management' ),
		'url'         => esc_url( TITAN_EVENT_MANAGEMENT_BUY_NOW ),
		'priority'    => 0,
	)));

	// Add the "Bundle" upsell section
	$wp_customize->add_section( new Titan_Event_Management_Upsell_Section( $wp_customize, 'upsell_bundle_section', array(
		'title'       => __( 'All themes in Single Package', 'titan-event-management' ),
		'button_text' => __( 'GET BUNDLE', 'titan-event-management' ),
		'url'         => esc_url( TITAN_EVENT_MANAGEMENT_BUNDLE ),
		'priority'    => 1,
	)));
}
add_action( 'customize_register', 'titan_event_management_customize_register' );

if ( class_exists( 'WP_Customize_Section' ) ) {
	class Titan_Event_Management_Upsell_Section extends WP_Customize_Section {
		public $type = 'titan-event-management-upsell';
		public $button_text = '';
		public $url = '';

		protected function render() {
			?>
			<li id="accordion-section-<?php echo esc_attr( $this->id ); ?>" class="titan_event_management_upsell_section accordion-section control-section control-section-<?php echo esc_attr( $this->id ); ?> cannot-expand">
				<h3 class="accordion-section-title premium-details">
					<?php echo esc_html( $this->title ); ?>
					<a href="<?php echo esc_url( $this->url ); ?>" class="button button-secondary alignright" target="_blank"><?php echo esc_html( $this->button_text ); ?></a>
				</h3>
			</li>
			<?php
		}
	}
}

/**
 * Enqueue script for custom customize control.
 */
function titan_event_management_custom_control_scripts() {
	wp_enqueue_script( 'titan-event-management-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );

    wp_enqueue_style( 'titan-event-management-customizer-css', get_template_directory_uri() . '/assets/css/customizer.css', array(), '1.0' );
}
add_action( 'customize_controls_enqueue_scripts', 'titan_event_management_custom_control_scripts' );
