<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * Shortcode: us_cform
 *
 * @var $shortcode string Current shortcode name
 * @var $config array Shortcode's config
 *
 * @param $config ['atts'] array Shortcode's attributes and default values
 */
vc_map( array(
	'base' => 'us_cform',
	'name' => __( 'Contact Form', 'us' ),
	'icon' => 'icon-wpb-ui-separator',
	'category' => us_translate_with_external_domain( 'Content', 'js_composer' ),
	'weight' => 180,
	'params' => array(
		array(
			'param_name' => 'receiver_email',
			'heading' => __( 'Receiver Email', 'us' ),
			'description' => sprintf( __( 'Requests will be sent to this Email. You can insert multiple comma-separated emails as well.', 'us' ) ),
			'type' => 'textfield',
			'std' => $config['atts']['receiver_email'],
			'weight' => 130,
		),
		array(
			'param_name' => 'name_field',
			'heading' => __( 'Name field', 'us' ),
			'type' => 'dropdown',
			'value' => array(
				__( 'Shown, required', 'us' ) => 'required',
				__( 'Shown, not required', 'us' ) => 'shown',
				__( 'Hidden', 'us' ) => 'hidden',
			),
			'std' => $config['atts']['name_field'],
			'edit_field_class' => 'vc_col-sm-6',
			'weight' => 120,
		),
		array(
			'param_name' => 'email_field',
			'heading' => __( 'Email field', 'us' ),
			'type' => 'dropdown',
			'value' => array(
				__( 'Shown, required', 'us' ) => 'required',
				__( 'Shown, not required', 'us' ) => 'shown',
				__( 'Hidden', 'us' ) => 'hidden',
			),
			'std' => $config['atts']['email_field'],
			'edit_field_class' => 'vc_col-sm-6',
			'weight' => 110,
		),
		array(
			'param_name' => 'phone_field',
			'heading' => __( 'Phone field', 'us' ),
			'type' => 'dropdown',
			'value' => array(
				__( 'Shown, required', 'us' ) => 'required',
				__( 'Shown, not required', 'us' ) => 'shown',
				__( 'Hidden', 'us' ) => 'hidden',
			),
			'std' => $config['atts']['phone_field'],
			'edit_field_class' => 'vc_col-sm-6',
			'weight' => 100,
		),
		array(
			'param_name' => 'message_field',
			'heading' => __( 'Message field', 'us' ),
			'type' => 'dropdown',
			'value' => array(
				__( 'Shown, required', 'us' ) => 'required',
				__( 'Shown, not required', 'us' ) => 'shown',
				__( 'Hidden', 'us' ) => 'hidden',
			),
			'std' => $config['atts']['message_field'],
			'edit_field_class' => 'vc_col-sm-6',
			'weight' => 90,
		),
		array(
			'param_name' => 'captcha_field',
			'heading' => __( 'Captcha field', 'us' ),
			'type' => 'dropdown',
			'value' => array(
				__( 'Hidden', 'us' ) => 'hidden',
				__( 'Shown, required', 'us' ) => 'required',
			),
			'std' => $config['atts']['captcha_field'],
			'weight' => 80,
		),
		array(
			'param_name' => 'button_text',
			'heading' => __( 'Button Label', 'us' ),
			'type' => 'textfield',
			'std' => $config['atts']['button_text'],
			'group' => __( 'Button', 'us' ),
			'weight' => 75,
		),
		array(
			'param_name' => 'button_style',
			'heading' => __( 'Button Style', 'us' ),
			'type' => 'dropdown',
			'value' => array(
				__( 'Raised', 'us' ) => 'raised',
				__( 'Flat', 'us' ) => 'flat',
			),
			'std' => $config['atts']['button_style'],
			'edit_field_class' => 'vc_col-sm-6',
			'group' => __( 'Button', 'us' ),
			'weight' => 70,
		),
		array(
			'param_name' => 'button_color',
			'heading' => __( 'Button Color', 'us' ),
			'type' => 'dropdown',
			'value' => array(
				__( 'Primary (theme color)', 'us' ) => 'primary',
				__( 'Secondary (theme color)', 'us' ) => 'secondary',
				__( 'Light (theme color)', 'us' ) => 'light',
				__( 'Contrast (theme color)', 'us' ) => 'contrast',
				__( 'Black', 'us' ) => 'black',
				__( 'White', 'us' ) => 'white',
				__( 'Custom colors', 'us' ) => 'custom',
			),
			'std' => $config['atts']['button_color'],
			'edit_field_class' => 'vc_col-sm-6',
			'group' => __( 'Button', 'us' ),
			'weight' => 60,
		),
		array(
			'param_name' => 'button_bg_color',
			'heading' => __( 'Button Background Color', 'us' ),
			'type' => 'colorpicker',
			'std' => $config['atts']['button_bg_color'],
			'class' => '',
			'dependency' => array( 'element' => 'button_color', 'value' => 'custom' ),
			'group' => __( 'Button', 'us' ),
			'weight' => 50,
		),
		array(
			'param_name' => 'button_text_color',
			'heading' => __( 'Button Text Color', 'us' ),
			'type' => 'colorpicker',
			'std' => $config['atts']['button_text_color'],
			'class' => '',
			'dependency' => array( 'element' => 'button_color', 'value' => 'custom' ),
			'group' => __( 'Button', 'us' ),
			'weight' => 40,
		),
		array(
			'param_name' => 'button_size',
			'heading' => __( 'Button Size', 'us' ),
			'type' => 'textfield',
			'std' => $config['atts']['button_size'],
			'edit_field_class' => 'vc_col-sm-6',
			'group' => __( 'Button', 'us' ),
			'weight' => 30,
		),
		array(
			'param_name' => 'button_align',
			'heading' => __( 'Button Alignment', 'us' ),
			'type' => 'dropdown',
			'value' => array(
				__( 'Left', 'us' ) => 'left',
				__( 'Center', 'us' ) => 'center',
				__( 'Right', 'us' ) => 'right',
			),
			'std' => $config['atts']['button_align'],
			'edit_field_class' => 'vc_col-sm-6',
			'group' => __( 'Button', 'us' ),
			'weight' => 20,
		),
		array(
			'param_name' => 'el_class',
			'heading' => us_translate_with_external_domain( 'Extra class name', 'js_composer' ),
			'description' => us_translate_with_external_domain( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'js_composer' ),
			'type' => 'textfield',
			'std' => $config['atts']['el_class'],
			'weight' => 10,
		),
	),
) );
