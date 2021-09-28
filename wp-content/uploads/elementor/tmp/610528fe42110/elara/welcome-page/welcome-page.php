<?php
/**
 * Welcome Page
 *
 * @package Elara
 */
/**
 * Include Welcome page class
 */
require_once get_template_directory() . '/welcome-page/class.welcomepage.php';

/**
 * Welcome page config
 */
$config = array(
	'menu_label'       => esc_html__( 'Welcome to Elara', 'elara' ),
	'page_title'       => esc_html__( 'Welcome to Elara', 'elara' ),
	/* Translators: Theme name */
	'welcome_title'   => sprintf( esc_html__( 'Welcome to %s, version ', 'elara' ), 'Elara' ),
	// 'welcome_content' => '',
	/**
	 * Tabs
	 */
	'tabs' => array(
		'getting_started' => esc_html__( 'Getting Started', 'elara' ),
		'support'         => esc_html__( 'Support', 'elara' ),
		'free_vs_pro'     => esc_html__( 'Free vs Pro', 'elara' ),
	),
	/**
	 * Getting started tab
	 */
	'getting_started' => array(
		'cards' => array(
			'one' => array(
				'title'       => esc_html__( 'Required Actions', 'elara' ),
				'description' => esc_html__( 'Be sure to install and activate the Kirki plugin. It is required to make full use of the customization features of this theme.', 'elara' ),
				'btn_label'   => esc_html__( 'Install Plugins', 'elara' ),
				'btn_url'     => esc_url( admin_url( 'themes.php?page=tgmpa-install-plugins' ) ),
				'new_tab'     => false,
			),
			'two' => array(
				'title'       => esc_html__( 'Documentation', 'elara' ),
				'description' => esc_html__( 'For more information on how to fully utilize all the features of Elara, please review the full documentation.', 'elara' ),
				'btn_label'   => esc_html__( 'Documentation', 'elara' ),
				'btn_url'     => esc_url( 'https://help.lyrathemes.com/#collection-64' ),
				'new_tab'     => true,
			),
			'three' => array(
				'title'       => esc_html__( 'Customize and Set Up', 'elara' ),
				'description' => esc_html__( 'Use the WordPress Customizer to set up and customize your website. Click the button below, or go to Appearance > Customize.', 'elara' ),
				'btn_label'   => esc_html__( 'Go to the Customizer', 'elara' ),
				'btn_url'     => esc_url( admin_url( 'customize.php' ) ),
				'new_tab'     => false,
			),
		),
	),

	/**
	 * Support tab
	 */
	'support' => array(
		'cards' => array(
			'one' => array(
				'title'       => esc_html__( 'Contact Support', 'elara' ),
				'description' => esc_html__( "If you need any help with theme set up, options, enhancements, or about how a feature works, please feel free to reach out and we'd be happy to assist. LyraThemes has a world class support team, and we try our best to respond to all queries within 24-48 hours.", "elara" ),
				'btn_label'   => esc_html__( 'Contact Support', 'elara' ),
				'btn_url'     => esc_url( 'https://www.lyrathemes.com/support/' ),
				'new_tab'     => true,
			),
			'two' => array(
				'title'       => esc_html__( 'Documentation', 'elara' ),
				'description' => esc_html__( 'For more information on how to fully utilize all the features of Elara, please review the full documentation. We have tried to add as much information as possible, including screenshots and videos, to help you make the most of this theme.', 'elara' ),
				'btn_label'   => esc_html__( 'Documentation', 'elara' ),
				'btn_url'     => esc_url( 'https://help.lyrathemes.com/#collection-64' ),
				'new_tab'     => true,
			),
		),
	),

	/**
	 * Free vs Pro tab
	 */
	'free_vs_pro' => array(
		'free'         => esc_html__( 'Elara', 'elara' ),
		'pro'          => esc_html__( 'Elara Pro', 'elara' ),
		'pro_url'      => esc_url( 'https://www.lyrathemes.com/elara-pro/' ),
		'compare_url'  => esc_url( 'https://www.lyrathemes.com/elara/#comparison' ),
		'features_list' => array(
        
            //free + pro
            esc_html__( 'Front Page Without Sidebar (Full Width)', 'elara' ),
			esc_html__( 'Front Page Sidebar Below Banner', 'elara' ),
			esc_html__( 'Front Page Sidebar Besides Banner', 'elara' ),
			esc_html__( 'Front Page Without Banner/Slider', 'elara' ),
			esc_html__( 'Front Page Featured Categories', 'elara' ),
			esc_html__( 'Front Page Highlight Post', 'elara' ),
			esc_html__( 'Special Category Template', 'elara' ),
			esc_html__( 'Posts Sidebar Options', 'elara' ),
			esc_html__( 'Optional Full Width Posts and Pages', 'elara' ),
			esc_html__( 'Video Posts', 'elara' ),
			esc_html__( 'Integration with WP Instagram Widget', 'elara' ),
			esc_html__( 'Easy to Create Social Media Icon Menus', 'elara' ),
			esc_html__( 'Header and Footer Area Widgets', 'elara' ),
			esc_html__( 'Multiple Footer Widget Options', 'elara' ),
            //pro only
			esc_html__( 'Built-in Promo Box (Sidebar)', 'elara' ),
			esc_html__( 'Built-in Promo Box (Front Page)', 'elara' ),
			esc_html__( '"Shop This Post" - Product Recommendation / Affiliate System', 'elara' ),
			esc_html__( 'Floating Social Media Bar', 'elara' ),
			esc_html__( 'Optional Sticky/Fixed Main Menu', 'elara' ),
			esc_html__( 'Special Recipe Index Template', 'elara' ),
			esc_html__( 'Recipe Index with Search and Filter Integration', 'elara' ),
			esc_html__( 'Recipe Shortcode Builder', 'elara' ),
			esc_html__( 'Front Page Custom Slider', 'elara' ),
			esc_html__( 'Google Friendly Recipe Cards (Printable)', 'elara' ),
			esc_html__( 'Built-in Ads', 'elara' ),
			esc_html__( 'Built-in About Me Widget', 'elara' ),
			esc_html__( 'Built-in MailChimp Integration', 'elara' ),
			esc_html__( '600+ Google Fonts / Typography', 'elara' ),
			esc_html__( 'Unlimited Color Schemes', 'elara' ),
			
		),
		'features_free' => array(
            true,
			true,
			true,
			true,
			true,
			true,
			true,
			true,
			true,
			true,
			true,
			true,
			true,
			true,
            
			false,
			false,
			false,
			false,
			false,
			false,
			false,
			false,
			false,
			false,
			false,
			false,
			false,
			false,
			false,
			
		),
		'features_pro' => array(
			true,
			true,
			true,
			true,
			true,
			true,
			true,
			true,
			true,
			true,
			true,
			true,
			true,
			true,
			true,
			true,
			true,
			true,
			true,
			true,
			true,
			true,
			true,
			true,
			true,
			true,
			true,
			true,
			true,
		),
	),
);
/**
 * Initialize Welcome page
 */
Elara_Welcome_Page::init( apply_filters( 'elara_welcome_page_config', $config ) );
