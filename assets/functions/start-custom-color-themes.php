<?php

// Adds support for editor color palette.

// SPICE LATE / SPICE LATE DARK
if( 'spice-late' == get_field( 'color_theme', 'option') ||
	'spice-late-dark' == get_field( 'color_theme', 'option')) :
	add_theme_support( 'editor-color-palette', array(

		array(
			'name'  => __( 'Dark brown', 'start' ),
			'slug'  => 'dark-brown',
			'color'	=> '#312b28',
		),
		array(
			'name'  => __( 'Light brown', 'start' ),
			'slug'  => 'light-brown',
			'color'	=> '#8B7355',
		),
		array(
			'name'  => __( 'Peach', 'start' ),
			'slug'  => 'peach',
			'color' => '#F4A460',
		),
		array(
			'name'  => __( 'Beige', 'start' ),
			'slug'  => 'beige',
			'color' => '#CDC9A5',
		),
		array(
			'name'  => __( 'Cream', 'start' ),
			'slug'  => 'cream',
			'color' => '#FFE7BA',
		),
		array(
			'name'  => __( 'Offwhite', 'start' ),
			'slug'  => 'offwhite',
			'color' => '#F2F2F2',
		),
		array(
			'name'  => __( 'White', 'start' ),
			'slug'  => 'white',
			'color' => '#fff',
		),
	) );
endif;


// GREEN FIELD
if( 'green-field' == get_field( 'color_theme', 'option') ) :
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Dark grey', 'start' ),
			'slug'  => 'dark-grey',
			'color' => '#131212',
		),
		array(
			'name'  => __( 'Dark grey brown', 'start' ),
			'slug'  => 'dark-grey-brown',
			'color'	=> '#34322e',
		),
		array(
			'name'  => __( 'Dark green', 'start' ),
			'slug'  => 'dark-green',
			'color'	=> '#364032',
		),

		array(
			'name'  => __( 'Army green', 'start' ),
			'slug'  => 'army-green',
			'color' => '#668C4A',
		),
		array(
			'name'  => __( 'Light army green', 'start' ),
			'slug'  => 'light-army-green',
			'color' => '#A6BF4B',
		),
		array(
			'name'  => __( 'Cream yellow', 'start' ),
			'slug'  => 'cream-yellow',
			'color' => '#F2F0D5',
		),
		array(
			'name'  => __( 'Yellow orange', 'start' ),
			'slug'  => 'yellow-orange',
			'color' => '#F2C53D',
		),
		array(
			'name'  => __( 'Medium grey', 'start' ),
			'slug'  => 'medium-grey',
			'color' => '#B1B1AC',
		),
		array(
			'name'  => __( 'White', 'start' ),
			'slug'  => 'white',
			'color' => '#fff',
		),
	) );
endif;


// SALE AT THE GAP
if( 'sale-at-the-gap' == get_field( 'color_theme', 'option') ) :
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Dark grey', 'start' ),
			'slug'  => 'dark-grey',
			'color' => '#131212',
		),
		array(
			'name'  => __( 'Dark maroon', 'start' ),
			'slug'  => 'dark-maroon',
			'color'	=> '#281416',
		),
		array(
			'name'  => __( 'Maroon', 'start' ),
			'slug'  => 'maroon',
			'color'	=> '#5c1d24',
		),
		array(
			'name'  => __( 'Book cover brown', 'start' ),
			'slug'  => 'book-cover-brown',
			'color'	=> '#583F36',
		),
		array(
			'name'  => __( 'Muddy brown', 'start' ),
			'slug'  => 'muddy-brown',
			'color' => '#715337',
		),
		array(
			'name'  => __( 'Medium grey blue', 'start' ),
			'slug'  => 'medium-grey-blue',
			'color' => '#677fa5',
		),
		array(
			'name'  => __( 'Light grey blue', 'start' ),
			'slug'  => 'light-grey-blue',
			'color' => '#BFCAD8',
		),
		array(
			'name'  => __( 'Subtle blue', 'start' ),
			'slug'  => 'subtle-blue',
			'color' => '#EDF1F4',
		),
		array(
			'name'  => __( 'White', 'start' ),
			'slug'  => 'white',
			'color' => '#fff',
		),
	) );
endif;


// NEUTRAL LIGHT/DARK
if( 'neutral-light' == get_field( 'color_theme', 'option') ||
	'neutral-dark' == get_field( 'color_theme', 'option')) :
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Trendy grey', 'start' ),
			'slug'  => 'trendy-grey',
			'color' => '#666161',
		),
		array(
			'name'  => __( 'Dusty grey', 'start' ),
			'slug'  => 'dusty-grey',
			'color'	=> '#ADA5A5',
		),
		array(
			'name'  => __( 'Rusty maroon', 'start' ),
			'slug'  => 'rusty-maroon',
			'color'	=> '#322323',
		),
		array(
			'name'  => __( 'Trendy maroon', 'start' ),
			'slug'  => 'trendy-maroon',
			'color'	=> '#744140',
		),
		array(
			'name'  => __( 'Eggshell', 'start' ),
			'slug'  => 'eggshell',
			'color'	=> '#F3E9D7',
		),
		array(
			'name'  => __( 'Subtle red', 'start' ),
			'slug'  => 'subtle-red',
			'color' => '#E6DADA',
		),
		array(
			'name'  => __( 'White', 'start' ),
			'slug'  => 'white',
			'color' => '#fff',
		),
	) );
endif;

/**
 *  8=-----------------------------------------------
 */

// THEME: COUNTRY INN
if( 'country-inn' == get_field( 'color_theme', 'option') ) :
	add_theme_support( 'editor-color-palette', array(

		array(
			'name'  => __( 'Dark green', 'start' ),
			'slug'  => 'country-inn-dark-green',
			'color'	=> '#047D65',
		),
		array(
			'name'  => __( 'Light green', 'start' ),
			'slug'  => 'country-inn-lighter-green',
			'color'	=> '#01B36A',
		),
		array(
			'name'  => __( 'White', 'start' ),
			'slug'  => 'white',
			'color' => '#fff',
		),
		array(
			'name'  => __( 'Rust', 'start' ),
			'slug'  => 'country-inn-rust',
			'color'	=> '#914A3D',
		),
		array(
			'name'  => __( 'Tan', 'start' ),
			'slug'  => 'country-inn-tan',
			'color'	=> '#A88548',
		),
		array(
			'name'  => __( 'Dark grey', 'start' ),
			'slug'  => 'dark-grey',
			'color' => '#131212',
		),
		array(
			'name'  => __( 'Offwhite', 'start' ),
			'slug'  => 'country-inn-offwhite',
			'color'	=> '#F4F4D1',
		),
		array(
			'name'  => __( 'Light blue', 'start' ),
			'slug'  => 'country-inn-light-blue',
			'color'	=> '#A7CCD7',
		),
		array(
			'name'  => __( 'Darkest green', 'start' ),
			'slug'  => 'country-inn-darkest-green',
			'color' => '#012E25',
		),
		array(
			'name'  => __( 'Dark rust', 'start' ),
			'slug'  => 'country-inn-dark-rust',
			'color' => '#521B09',
		),

	) );
endif;



// THEME: CHOCOLATE BUNNY
if( 'chocolate-bunny' == get_field( 'color_theme', 'option') ) :
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Darker brown', 'start' ),
			'slug'  => 'chocolate-bunny-darker-brown',
			'color'	=> '#523D30',
		),
		array(
			'name'  => __( 'Brown', 'start' ),
			'slug'  => 'chocolate-bunny-brown',
			'color'	=> '#663F20',
		),
		array(
			'name'  => __( 'Teal', 'start' ),
			'slug'  => 'chocolate-bunny-teal',
			'color'	=> '#2CBFB1',
		),
		array(
			'name'  => __( 'Offwhite', 'start' ),
			'slug'  => 'chocolate-bunny-offwhite',
			'color'	=> '#FFFCF5',
		),
		array(
			'name'  => __( 'Eggshell', 'start' ),
			'slug'  => 'chocolate-bunny-eggshell',
			'color'	=> '#EDE1D3',
		),
		array(
			'name'  => __( 'Barely pink', 'start' ),
			'slug'  => 'chocolate-bunny-light-pink',
			'color'	=> '#F9E9EB',
		),
		array(
			'name'  => __( 'Pink', 'start' ),
			'slug'  => 'chocolate-bunny-pink',
			'color'	=> '#E8356E',
		),

		array(
			'name'  => __( 'Dark teal', 'start' ),
			'slug'  => 'chocolate-bunny-dark-teal',
			'color'	=> '#235157',
		),

		array(
			'name'  => __( 'Dark grey', 'start' ),
			'slug'  => 'dark-grey',
			'color' => '#131212',
		),
		array(
			'name'  => __( 'White', 'start' ),
			'slug'  => 'white',
			'color' => '#fff',
		),
	) );
endif;



// THEME: BOLD
if( 'bold' == get_field( 'color_theme', 'option') ) :
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Medium grey', 'start' ),
			'slug'  => 'bold-medium-grey',
			'color'	=> '#878484',
		),
		array(
			'name'  => __( 'Red', 'start' ),
			'slug'  => 'bold-red',
			'color'	=> '#FF0601',
		),
		array(
			'name'  => __( 'Offwhite', 'start' ),
			'slug'  => 'bold-offwhite',
			'color'	=> '#E6E1E1',
		),
		array(
			'name'  => __( 'Rust', 'start' ),
			'slug'  => 'bold-rust',
			'color'	=> '#664948',
		),
		array(
			'name'  => __( 'Black', 'start' ),
			'slug'  => 'bold-black',
			'color'	=> '#000000',
		),
		array(
			'name'  => __( 'Almost black', 'start' ),
			'slug'  => 'slug',
			'color'	=> '#212121',
		),
		array(
			'name'  => __( 'White', 'start' ),
			'slug'  => 'white',
			'color' => '#fff',
		),
	) );
endif;



// THEME: EARTHY
if( 'earthy' == get_field( 'color_theme', 'option') ) :
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Teal', 'start' ),
			'slug'  => 'earthy-teal',
			'color'	=> '#247A76',
		),
		array(
			'name'  => __( 'Light green', 'start' ),
			'slug'  => 'earthy-light-green',
			'color'	=> '#9CAB16',
		),
		array(
			'name'  => __( 'Cream', 'start' ),
			'slug'  => 'earthy-cream',
			'color'	=> '#F7E7B7',
		),
		array(
			'name'  => __( 'Orange red', 'start' ),
			'slug'  => 'earthy-orange-red',
			'color'	=> '#C23A34',
		),
		array(
			'name'  => __( 'Rust brown', 'start' ),
			'slug'  => 'earthy-rust-brown',
			'color'	=> '#613F1F',
		),
		array(
			'name'  => __( 'Dark', 'start' ),
			'slug'  => 'earthy-dark',
			'color'	=> '#362D23',
		),
		array(
			'name'  => __( 'White', 'start' ),
			'slug'  => 'white',
			'color' => '#fff',
		),
		array(
			'name'  => __( 'Lighter green', 'start' ),
			'slug'  => 'earthy-lighter-green',
			'color'	=> '#C4D61C',
		),
		array(
			'name'  => __( 'Offwhite', 'start' ),
			'slug'  => 'earthy-offwhite',
			'color'	=> '#FEF6D6',
		),
		array(
			'name'  => __( 'Brick', 'start' ),
			'slug'  => 'earthy-brick',
			'color'	=> '#912D27',
		),

	) );
endif;



// THEME: FARMSTEAD
if( 'farmstead' == get_field( 'color_theme', 'option') ) :
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Teal', 'start' ),
			'slug'  => 'farmstead-teal',
			'color'	=> '#007A62',
		),
		array(
			'name'  => __( 'Green', 'start' ),
			'slug'  => 'farmstead-green',
			'color'	=> '#7BB35D',
		),
		array(
			'name'  => __( 'Cream', 'start' ),
			'slug'  => 'farmstead-cream',
			'color'	=> '#F0EBDF',
		),
		array(
			'name'  => __( 'Tan', 'start' ),
			'slug'  => 'farmstead-tan',
			'color'	=> '#C4B18D',
		),
		array(
			'name'  => __( 'Medium brown', 'start' ),
			'slug'  => 'farmstead-medium-brown',
			'color'	=> '#A85745',
		),
		array(
			'name'  => __( 'Dirt brown', 'start' ),
			'slug'  => 'farmstead-dirt-brown',
			'color'	=> '#4F4739',
		),
		array(
			'name'  => __( 'Yellow green', 'start' ),
			'slug'  => 'farmstead-yellow-green',
			'color'	=> '#99B32B',
		),
		array(
			'name'  => __( 'Mint', 'start' ),
			'slug'  => 'farmstead-mint',
			'color'	=> '#DFFACF',
		),
		array(
			'name'  => __( 'Darker teal', 'start' ),
			'slug'  => 'farmstead-darker-teal',
			'color'	=> '#004537',
		),
		array(
			'name'  => __( 'Dark grey', 'start' ),
			'slug'  => 'dark-grey',
			'color' => '#131212',
		),
		array(
			'name'  => __( 'White', 'start' ),
			'slug'  => 'white',
			'color' => '#fff',
		),
	) );
endif;



// THEME: HARVEST
if( 'harvest' == get_field( 'color_theme', 'option') ) :
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Army green', 'start' ),
			'slug'  => 'harvest-army-green',
			'color'	=> '#555C47',
		),
		array(
			'name'  => __( 'Light green', 'start' ),
			'slug'  => 'harvest-light-green',
			'color'	=> '#A19F43',
		),
		array(
			'name'  => __( 'Cream', 'start' ),
			'slug'  => 'harvest-cream',
			'color'	=> '#FEF2D8',
		),
		array(
			'name'  => __( 'Orange red', 'start' ),
			'slug'  => 'harvest-orange-red',
			'color'	=> '#D15401',
		),
		array(
			'name'  => __( 'Light orange', 'start' ),
			'slug'  => 'harvest-light-orange',
			'color'	=> '#FFA256',
		),
		array(
			'name'  => __( 'Yellow orange', 'start' ),
			'slug'  => 'harvest-yellow-orange',
			'color'	=> '#FFC34F',
		),
		array(
			'name'  => __( 'Maroon', 'start' ),
			'slug'  => 'harvest-maroon',
			'color'	=> '#591507',
		),
		array(
			'name'  => __( 'Dark grey', 'start' ),
			'slug'  => 'dark-grey',
			'color' => '#131212',
		),
		array(
			'name'  => __( 'White', 'start' ),
			'slug'  => 'white',
			'color' => '#fff',
		),
	) );
endif;



// THEME: NEUTRAL TREND
if( 'neutral-trend' == get_field( 'color_theme', 'option') ) :
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Dark blue', 'start' ),
			'slug'  => 'neutral-trend-dark-blue',
			'color'	=> '#4B4B5E',
		),
		array(
			'name'  => __( 'Medium grey', 'start' ),
			'slug'  => 'neutral-trend-medium-grey',
			'color'	=> '#676782',
		),
		array(
			'name'  => __( 'Light grey', 'start' ),
			'slug'  => 'neutral-trend-light-grey',
			'color'	=> '#C5C6C9',
		),
		array(
			'name'  => __( 'Ligher grey', 'start' ),
			'slug'  => 'neutral-trend-lighter-grey',
			'color'	=> '#D2D3D6',
		),
		array(
			'name'  => __( 'Cream', 'start' ),
			'slug'  => 'neutral-trend-cream',
			'color'	=> '#FAF9ED',
		),
		array(
			'name'  => __( 'Pink', 'start' ),
			'slug'  => 'neutral-trend-pink',
			'color'	=> '#FF9391',
		),
		array(
			'name'  => __( 'Rose', 'start' ),
			'slug'  => 'neutral-trend-rose',
			'color'	=> '#CC4545',
		),
		array(
			'name'  => __( 'Dark grey', 'start' ),
			'slug'  => 'neutral-trend-dark-grey',
			'color'	=> '#4E5563',
		),
		array(
			'name'  => __( 'White', 'start' ),
			'slug'  => 'white',
			'color' => '#fff',
		),
	) );
endif;


// THEME: NEUTRAL YELLOW
if( 'neutral-yellow' == get_field( 'color_theme', 'option') ) :
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Dark grey', 'start' ),
			'slug'  => 'neutral-yellow-dark-grey',
			'color'	=> '#545247',
		),
		array(
			'name'  => __( 'Medium grey', 'start' ),
			'slug'  => 'neutral-yellow-medium-grey',
			'color'	=> '#918F86',
		),
		array(
			'name'  => __( 'Light grey', 'start' ),
			'slug'  => 'neutral-yellow-light-grey',
			'color'	=> '#D1CEC0',
		),
		array(
			'name'  => __( 'Cream', 'start' ),
			'slug'  => 'neutral-yellow-cream',
			'color'	=> '#FDF6DD',
		),
		array(
			'name'  => __( 'Yellow', 'start' ),
			'slug'  => 'neutral-yellow-yellow',
			'color'	=> '#FACC52',
		),
		array(
			'name'  => __( 'Yellow orange', 'start' ),
			'slug'  => 'neutral-yellow-yellow-orange',
			'color'	=> '#e89d2f',
		),
		array(
			'name'  => __( 'White', 'start' ),
			'slug'  => 'white',
			'color' => '#fff',
		),
	) );
endif;



// THEME: TRENDY RAINBOW
if( 'trendy-rainbow' == get_field( 'color_theme', 'option') ) :
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Purple', 'start' ),
			'slug'  => 'trendy-rainbow---bold-purple',
			'color'	=> '#49415C',
		),
		array(
			'name'  => __( 'Blue', 'start' ),
			'slug'  => 'trendy-rainbow---bold-blue',
			'color'	=> '#4F5FC7',
		),
		array(
			'name'  => __( 'Green', 'start' ),
			'slug'  => 'trendy-rainbow---bold-green',
			'color'	=> '#8EB52A',
		),
		array(
			'name'  => __( 'Yellow', 'start' ),
			'slug'  => 'trendy-rainbow---bold-yellow',
			'color'	=> '#FFD154',
		),
		array(
			'name'  => __( 'Pink', 'start' ),
			'slug'  => 'trendy-rainbow---bold-pink',
			'color'	=> '#F02874',
		),
		array(
			'name'  => __( 'Dark grey', 'start' ),
			'slug'  => 'dark-grey',
			'color' => '#131212',
		),
		array(
			'name'  => __( 'White', 'start' ),
			'slug'  => 'white',
			'color' => '#fff',
		),
	) );
endif;


// THEME: VINTAGE ROCKET
if( 'vintage-rocket' == get_field( 'color_theme', 'option') ) :
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Light blue', 'start' ),
			'slug'  => 'vintage-rocket-light-blue',
			'color'	=> '#B1D3D1',
		),
		array(
			'name'  => __( 'Cream', 'start' ),
			'slug'  => 'vintage-rocket-cream',
			'color'	=> '#F4F3E3',
		),
		array(
			'name'  => __( 'Tan', 'start' ),
			'slug'  => 'vintage-rocket-tan',
			'color'	=> '#F0CE86',
		),
		array(
			'name'  => __( 'Orange', 'start' ),
			'slug'  => 'vintage-rocket-orange',
			'color'	=> '#E43604',
		),
		array(
			'name'  => __( 'Deep red', 'start' ),
			'slug'  => 'vintage-rocket-deep-red',
			'color'	=> '#230800',
		),
		array(
			'name'  => __( 'Dark grey', 'start' ),
			'slug'  => 'dark-grey',
			'color' => '#131212',
		),
		array(
			'name'  => __( 'White', 'start' ),
			'slug'  => 'white',
			'color' => '#fff',
		),
	) );
endif;