<?php
/**
 * ACF helper functions
 */

// change / add to the base background choices here
$background_choices_available = array (
	'none' 		=> 'No background',
	'inverse' 	=> 'Inverse',
);

$color_theme_list = array (
	'bold'	=> 'Bold',

);

$typography_theme_list = array (
	'modern'		=> 'Modern',
);


// settings on where the 'sections' are active throughout the site
$where_sections_are_active = array (
	array (
		array (
			'param' => 'post_type',
			'operator' => '==',
			'value' => 'page',
		),
	),
/*	add any additional post types here. 
	array (
		array (
			'param' => 'post_type',
			'operator' => '==',
			'value' => 'person',
		),
	),
*/
);



if( function_exists('acf_add_local_field_group') ):

	//***************************************   Extra page heading fields
	acf_add_local_field_group(array(
		'key' => 'group_619da179c7533',
		'title' => 'Page header',
		'fields' => array(
			array(
				'key' => 'field_619da184999bb',
				'label' => 'Override page title?',
				'name' => 'override_page_title',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => 'yes',
				'default_value' => 0,
				'ui' => 0,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
			array(
				'key' => 'field_619da20e999bc',
				'label' => 'Custom page title',
				'name' => 'custom_page_title',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_619da184999bb',
							'operator' => '==',
							'value' => '1',
						),
					),
				),
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_619da23e999bd',
				'label' => 'Page tagline',
				'name' => 'page_tagline',
				'type' => 'textarea',
				'instructions' => 'Short block of text under the page title. Keep this short!',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 4,
				'new_lines' => 'wpautop',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'side',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	));


	//***************************************   SITE OPTIONS
	acf_add_local_field_group(array (
		'key' => 'group_57f7c88c9aa18',
		'title' => 'Site Options',
		'fields' => array (
			array (
				'key' => 'field_57fbf3676e7e9',
				'label' => 'Display Options',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array (
				'key' => 'field_5a1f1b703a28e',
				'label' => 'Site Logo',
				'name' => 'site_logo',
				'type' => 'image',
				'instructions' => 'Add a logo image for the header. If none, the site name will show in large text.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'medium',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => 'jpg, gif, svg, png',
			),
			// advanced settings - start
			array(
				'key' => 'field_618adc333ad4b',
				'label' => 'Advanced',
				'name' => 'advanced_logo',
				'type' => 'checkbox',
				'instructions' => 'Advanced logo settings',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '100',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'advanced_yes' => 'enable',
				),
				'allow_custom' => 0,
				'default_value' => array(
				),
				'layout' => 'horizontal',
				'toggle' => 0,
				'return_format' => 'value',
				'save_custom' => 0,
			),
			array(
				'key' => 'field_618add103ad4c',
				'label' => 'SVG code embed',
				'name' => 'svg_code_embed',
				'type' => 'acfe_code_editor',
				'instructions' => 'If you want to override the logo image embed with actual embeded SVG code, this is where you put that. otherwise uncheck the option and it goes back to the default values above.',
				'required' => 0,
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_618adc333ad4b',
							'operator' => '!=empty',
						),
					),
				),
				'wrapper' => array(
					'width' => '100',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'mode' => 'text/html',
				'lines' => 1,
				'indent_unit' => 4,
				'maxlength' => '',
				'rows' => 12,
				'max_rows' => '75',
				'return_entities' => 0,
			),
			// advanced settings - end
			array (
				'key' => 'field_57f7c92167a96',
				'label' => 'Default Featured Image',
				'name' => 'default_post_thumbnail_id',
				'type' => 'image',
				'instructions' => 'If set, this image will be displayed as the featured image for any posts that don\'t have their own custom featured images.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'id',
				'preview_size' => 'thumbnail',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array (
				'key' => 'field_57fc43235c0d0',
				'label' => 'Excerpt Settings',
				'name' => '',
				'type' => 'message',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => 'Settings below determine how automatically generated post excerpts (aka blurbs) are displayed: how long they should be, and what text (if any) should be appended to the excerpt as a link to the post itself.',
				'new_lines' => 'wpautop',
				'esc_html' => 0,
			),
			array (
				'key' => 'field_57fbf44a6e7f0',
				'label' => 'Length',
				'name' => 'excerpt_length',
				'type' => 'number',
				'instructions' => 'Set to 0 to revert to WordPress\'s default (55 words), or to allow another plugin to trim excerpts.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '40',
					'class' => '',
					'id' => '',
				),
				'default_value' => 40,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_57fbf4686e7f1',
				'label' => 'Units',
				'name' => 'excerpt_length_unit',
				'type' => 'radio',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '20',
					'class' => '',
					'id' => '',
				),
				'choices' => array (
					'words' => 'Words',
					'chars' => 'Characters',
				),
				'allow_null' => 0,
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'words',
				'layout' => 'vertical',
				'return_format' => 'value',
			),
			array (
				'key' => 'field_57fc42c5a2686',
				'label' => 'Link Text',
				'name' => 'excerpt_link_text',
				'type' => 'text',
				'instructions' => 'e.g. \'Read more\'. Leave blank for no link.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '40',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'Read more',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),

			array (
				'key' => 'field_57fbf37a6e7ea',
				'label' => 'Text',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array (
				'key' => 'field_57f7ceae82de8',
				'label' => 'Contact Info',
				'name' => 'contact_info',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 0,
			),
			array (
				'key' => 'field_57fbf4cf6e7f2',
				'label' => 'Copyright Text',
				'name' => 'copyright_text',
				'type' => 'text',
				'instructions' => 'The text <code>[year]</code> will be replaced with the current year.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'Copyright © [year]. All rights reserved.',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array (
				'key' => 'field_57fbf39a6e7eb',
				'label' => 'URLs',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array (
				'key' => 'field_57f7ca2067a98',
				'label' => 'Social Media Links',
				'name' => 'social_links',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => 'field_57f7ca3567a99',
				'min' => 0,
				'max' => 0,
				'layout' => 'row',
				'button_label' => 'Add Service',
				'sub_fields' => array (
					array (
						'key' => 'field_57f7ca3567a99',
						'label' => 'Service',
						'name' => 'service',
						'type' => 'select',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '50',
							'class' => '',
							'id' => '',
						),
						'choices' => array (
							'facebook' => 'Facebook',
							'flickr' => 'Flickr',
							'googleplus' => 'Google+',
							'instagram' => 'Instagram',
							'linkedin' => 'LinkedIn',
							'pinterest' => 'Pinterest',
							'snapchat' => 'Snapchat',
							'tumblr' => 'Tumblr',
							'twitter' => 'Twitter',
							'youtube' => 'YouTube',
						),
						'default_value' => array (
						),
						'allow_null' => 0,
						'multiple' => 0,
						'ui' => 0,
						'ajax' => 0,
						'return_format' => 'value',
						'placeholder' => '',
					),
					array (
						'key' => 'field_57f7cb1267a9b',
						'label' => 'Link Text',
						'name' => 'link_text',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '50',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => 'e.g. "Like us on Facebook", or "@MyOrg"',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array (
						'key' => 'field_57f7caee67a9a',
						'label' => 'URL',
						'name' => 'url',
						'type' => 'url',
						'instructions' => '',
						'required' => 1,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '100',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
					),
				),
			),
			array (
				'key' => 'field_57fbf3ab6e7ec',
				'label' => 'Integrations/API Keys',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array (
				'key' => 'field_57f7d17269b71',
				'label' => 'Facebook App ID',
				'name' => 'facebook_app_id',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array (
				'key' => 'field_57f7ca0467a97',
				'label' => 'Google Maps API Key',
				'name' => 'google_maps_api_key',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'start-site-options',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
		'modified' => 1476826847,
	));


endif;