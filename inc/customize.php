<?php
function mh_customize_register( $wp_customize ) {

	$wp_customize->add_panel( 'mh_settings', array(
		'title' => 'theme Settings',
		'description' => '', //Include html tags such as <p>.
		'priority' => 10, //Mixed with to-level-section hierarchy.
	) );
	//=====================================================================================================
	// /////////*********************services template settting option add**********************///////////
	//====================================================================================================
	
	$wp_customize->add_panel( 'mh_services_settings', array(
		'title' => 'services page Settings',
		'description' => '', //Include html tags such as <p>.
		'priority' => 11, //Mixed with to-level-section hierarchy.
	) );

	//=====================================================================================================
	// /////////*********************Footer Address**********************///////////
	//====================================================================================================
	
	$wp_customize->add_panel( 'mh_footer_address_settings', array(
		'title' => 'footer address Settings',
		'description' => '', //Include html tags such as <p>.
		'priority' => 13, //Mixed with to-level-section hierarchy.
	) );
	
   //=====================================================================================================
   ///************************Home Bannerpage panel ************************************************* */
   //==================================================================================================

   $wp_customize->add_panel( 'mh_home_banner_text', array(
	
	'title' => 'Home Banner',
	'description' => '', //Include html tags such as <p>.
	'priority' => 14, //Mixed with to-level-section hierarchy.

) );

	//=====================================================================================================
	// /////////*********************color manage In Theme**********************///////////
	//====================================================================================================
	
	$wp_customize->add_panel( 'mh_color_settings', array(
		'title' => 'color manage theme',
		'description' => '', //Include html tags such as <p>.
		'priority' => 13, //Mixed with to-level-section hierarchy.
	) );
	
   //=====================================================================================================
	// /////////*********************Devlop By setting option**********************///////////
	//====================================================================================================
	
	$wp_customize->add_panel( 'mh_devloper_settings', array(
		'title' => 'add devloper',
		'description' => '', //Include html tags such as <p>.
		'priority' => 13, //Mixed with to-level-section hierarchy.
	) );
	
   

	//**************************** */ add label in custmize section ****************************/////////////
	// $wp_customize->add_section( 'mh_colors', array(
	// 	'title' => 'Colors',
	// 	'panel' => 'mh_settings', //ID of the panel this section berlongs to.
	// ) );
	
	$wp_customize->add_section( 'mh_labels', array(
		'title' => 'Labels',
		'panel' => 'mh_settings', //ID of the panel this section berlongs to.
	) );
    $wp_customize->add_section( 'mh_image', array(
		'title' => 'Image',
		'panel' => 'mh_settings', //ID of the panel this section berlongs to.
    ) );
    $wp_customize->add_section( 'mh_doctorintro', array(
		'title' => 'Doctorintro section',
		'panel' => 'mh_settings', //ID of the panel this section berlongs to.
	) );
    $wp_customize->add_section( 'mh_team', array(
		'title' => 'our team',
		'panel' => 'mh_settings', //ID of the panel this section berlongs to.
	) );
	$wp_customize->add_section( 'mh_achivement', array(
		'title' => 'achivement section',
		'panel' => 'mh_settings', //ID of the panel this section berlongs to.
	) );
	$wp_customize->add_section( 'mh_subscription', array(
		'title' => 'subscription section',
		'panel' => 'mh_settings', //ID of the panel this section berlongs to.
	) );
	$wp_customize->add_section( 'mh_gallary', array(
		'title' => 'Gallary section',
		'panel' => 'mh_settings', //ID of the panel this section berlongs to.
	) );
	$wp_customize->add_section( 'mh_contact', array(
		'title' => 'contact section',
		'panel' => 'mh_settings', //ID of the panel this section berlongs to.
	) );
	$wp_customize->add_section( 'mh_pricing', array(
		'title' => 'pricing section',
		'panel' => 'mh_settings', //ID of the panel this section berlongs to.
	) );
    $wp_customize->add_section( 'mh_services_temp_header', array(
		'title' => 'Services template section',
		'panel' => 'mh_services_settings', //ID of the panel this section berlongs to.
	) );
	$wp_customize->add_section( 'mh_Footer_office_address', array(
		'title' => 'footer office address section',
		'panel' => 'mh_footer_address_settings', //ID of the panel this section berlongs to.
	) );
	$wp_customize->add_section( 'mh_home_banner_sectionpart1_text', array(
		'title' => 'Home banner part-1',
		'panel' => 'mh_home_banner_text', //ID of the panel this section berlongs to.
	) );
	$wp_customize->add_section( 'mh_home_banner_sectionpart2_text', array(
		'title' => 'Home banner part-2',
		'panel' => 'mh_home_banner_text', //ID of the panel this section berlongs to.
	) );
	$wp_customize->add_section( 'mh_homebanner_text', array(
		'title' => 'Home banner text',
		'panel' => 'mh_home_banner_text', //ID of the panel this section berlongs to.
	) );
	$wp_customize->add_section( 'mh_navheader_color', array(
		'title' => 'color Change Header',
		'panel' => 'mh_color_settings', //ID of the panel this section berlongs to.
	) );
	$wp_customize->add_section( 'mh_banner_cart_color', array(
		'title' => 'Home-Banner cart color',
		'panel' => 'mh_color_settings', //ID of the panel this section berlongs to.
	) );
	
	$wp_customize->add_section( 'mh_button_background_color', array(
		'title' => 'Button Background color',
		'panel' => 'mh_color_settings', //ID of the panel this section berlongs to.
	) );
	$wp_customize->add_section( 'devloper_theme', array(
		'title' => 'Add Devloper Name',
		'panel' => 'mh__settings', //ID of the panel this section berlongs to.
	) );
	
	

	// nav backgroun setting s ******************************************************************

	// $wp_customize->add_setting( 'mh_nav_bg_color', array(
	// 	'type' => 'theme_mod', // or 'option'.
	// 	'capability' => 'edit_theme_options',
	// 	'default' => '#2ca358',
	// 	'transport'	=> 'refresh', // or postMessage.
	// 	'sanitize_callback' => 'sanitize_hex_color',
	// ) );

	// $wp_customize->add_control( 'mh_nav_bg_color', array(
	// 	'label' => __( 'Menu Background' ),
	// 	'type' => 'color',
	// 	'section' => 'mh_colors',
	// ) );


	// bolog post heading label custmize section -1

	$wp_customize->add_setting( 'mh_home_blog_header_label-1', array(
		'type' => 'theme_mod', // or 'option'.
		'capability' => 'edit_theme_options',
		'default' => 'Our Service Keeps you Smile',
		'transport'	=> 'refresh', // or postMessage.
		'sanitize_callback' => 'esc_attr',
	) );

	$wp_customize->add_control( 'mh_home_blog_header_label-1', array(
		'label' => __( 'Fetured services Section Title' ),
		'type' => 'text',
		'section' => 'mh_labels',
	) );

	// bolog post heading label custmize section -2

	$wp_customize->add_setting( 'mh_home_blog_header_label-2', array(
		'type' => 'theme_mod', // or 'option'.
		'capability' => 'edit_theme_options',
		'default' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia.',
		'transport'	=> 'refresh', // or postMessage.
		'sanitize_callback' => 'esc_attr',
	) );

	$wp_customize->add_control( 'mh_home_blog_header_label-2', array(
		'label' => __( 'Fetured services Section expert-2' ),
		'type' => 'text',
		'section' => 'mh_labels',
    ) );
    
    ///////////////////////   image intro in doctor 
  

    $wp_customize->add_setting( 'doctorintro_image', array(
        'default' => get_theme_file_uri('/images/gallery-1.jpg'), // Add Default Image URL 
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'doctorintro_image_control', array(
        'label' => 'Upload Image',
        'priority' => 20,
        'section' => 'mh_image',
        'settings' => 'doctorintro_image',
        'button_labels' => array(// All These labels are optional
                    'select' => 'Select Image',
                    'remove' => 'Remove Image',
                    'change' => 'Change Image',
                    )
    )));
 
   ///////////////////////////////////////////////////////////////////
   ///////////post image//////////////////////////////////////////////
   // bolog post heading label custmize section -2

	$wp_customize->add_setting( 'mh_doctorintro_header_label', array(
		'type' => 'theme_mod', // or 'option'.
		'capability' => 'edit_theme_options',
		'default' => 'Dentacare with a personal touch',
		'transport'	=> 'refresh', // or postMessage.
		'sanitize_callback' => 'esc_attr',
	) );

	$wp_customize->add_control( 'mh_doctorintro_header_label', array(
		'label' => __( 'Doctor Intro Header' ),
		'type' => 'text',
		'section' => 'mh_doctorintro',
    ) );
////////////////////////////////////intro discription/////////////////////////

    $wp_customize->add_setting( 'mh_doctorintro_discription_label', array(
		'type' => 'theme_mod', // or 'option'.
		'capability' => 'edit_theme_options',
		'default' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia.',
		'transport'	=> 'refresh', // or postMessage.
		'sanitize_callback' => 'esc_attr',
	) );

	$wp_customize->add_control( 'mh_doctorintro_discription_label', array(
		'label' => __( 'Doctor Intro Discription' ),
		'type' => 'textarea',
		'section' => 'mh_doctorintro',
    ) );


    /////////////////////////////intro point-one //////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////

	$wp_customize->add_setting( 'mh_doctorintro_point1_header', array(
		'type' => 'theme_mod', // or 'option'.
		'capability' => 'edit_theme_options',
		'default' => 'Well Experience Dentist',
		'transport'	=> 'refresh', // or postMessage.
		'sanitize_callback' => 'esc_attr',
	) );

	$wp_customize->add_control( 'mh_doctorintro_point1_header', array(
		'label' => __( 'Doctor Intro Point1 header' ),
		'type' => 'text',
		'section' => 'mh_doctorintro',
    ) );
     
    /////////////////////////////////////////////////////////////////////////////
    $wp_customize->add_setting( 'mh_doctorintro_point1_discription', array(
		'type' => 'theme_mod', // or 'option'.
		'capability' => 'edit_theme_options',
		'default' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
		'transport'	=> 'refresh', // or postMessage.
		'sanitize_callback' => 'esc_attr',
	) );

	$wp_customize->add_control( 'mh_doctorintro_point1_discription', array(
		'label' => __( 'Doctor Intro point1 Discription' ),
		'type' => 'textarea',
		'section' => 'mh_doctorintro',
    ) );
    
    //////////////////////////////////intro point-2////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////

    $wp_customize->add_setting( 'mh_doctorintro_point2_header', array(
		'type' => 'theme_mod', // or 'option'.
		'capability' => 'edit_theme_options',
		'default' => 'High Technology Facilities',
		'transport'	=> 'refresh', // or postMessage.
		'sanitize_callback' => 'esc_attr',
	) );

	$wp_customize->add_control( 'mh_doctorintro_point2_header', array(
		'label' => __( 'Doctor Intro Point2 header' ),
		'type' => 'text',
		'section' => 'mh_doctorintro',
    ) );

    $wp_customize->add_setting( 'mh_doctorintro_point2_discription', array(
		'type' => 'theme_mod', // or 'option'.
		'capability' => 'edit_theme_options',
		'default' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
		'transport'	=> 'refresh', // or postMessage.
		'sanitize_callback' => 'esc_attr',
	) );

	$wp_customize->add_control( 'mh_doctorintro_point2_discription', array(
		'label' => __( 'Doctor Intro point2 Discription' ),
		'type' => 'textarea',
		'section' => 'mh_doctorintro',
    ) );
    
////////////////////////////doctor intro point 3/////////////////////////////////////////////////////////////////

$wp_customize->add_setting( 'mh_doctorintro_point3_header', array(
    'type' => 'theme_mod', // or 'option'.
    'capability' => 'edit_theme_options',
    'default' => 'Comfortable Clinics',
    'transport'	=> 'refresh', // or postMessage.
    'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'mh_doctorintro_point3_header', array(
    'label' => __( 'Doctor Intro Point3 header' ),
    'type' => 'text',
    'section' => 'mh_doctorintro',
) );

$wp_customize->add_setting( 'mh_doctorintro_point3_discription', array(
    'type' => 'theme_mod', // or 'option'.
    'capability' => 'edit_theme_options',
    'default' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
    'transport'	=> 'refresh', // or postMessage.
    'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'mh_doctorintro_point3_discription', array(
    'label' => __( 'Doctor Intro point3 Discription' ),
    'type' => 'textarea',
    'section' => 'mh_doctorintro',
) );

///////////////////////////our team//////////////////////////////
//////////////////////////////////////////////////////////////////

$wp_customize->add_setting( 'mh_ourteam_header_label', array(
    'type' => 'theme_mod', // or 'option'.
    'capability' => 'edit_theme_options',
    'default' => 'Meet Our Experience Dentist',
    'transport'	=> 'refresh', // or postMessage.
    'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'mh_ourteam_header_label', array(
    'label' => __( 'Our Team Header' ),
    'type' => 'text',
    'section' => 'mh_ourteam',
) );
////////////////////////////////////intro discription/////////////////////////

$wp_customize->add_setting( 'mh_ourteam_discription_label', array(
    'type' => 'theme_mod', // or 'option'.
    'capability' => 'edit_theme_options',
    'default' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences',
    'transport'	=> 'refresh', // or postMessage.
    'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'mh_ourteam_discription_label', array(
    'label' => __( 'Our Team Discription' ),
    'type' => 'textarea',
    'section' => 'mh_ourteam',
) );
///////////////////////////////////////////////////////////////////////////
                //    achive-ment
/////////////////////////////////////////////////////////////////////////
$wp_customize->add_setting( 'mh_ourteam_achivement_label', array(
    'type' => 'theme_mod', // or 'option'.
    'capability' => 'edit_theme_options',
    'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi vero accusantium sunt sit aliquam ipsum molestias autem perferendis, incidunt cumque necessitatibus cum amet cupiditate, ut accusamus. Animi, quo. Laboriosam, laborum.',
    'transport'	=> 'refresh', // or postMessage.
    'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'mh_ourteam_achivement_label', array(
    'label' => __( 'Our Team achive-ment' ),
    'type' => 'textarea',
    'section' => 'mh_achivement',
) );
/////////////////////achivement-2/////////////////////////////////////////

$wp_customize->add_setting( 'mh_achivement_header_label', array(
    'type' => 'theme_mod', // or 'option'.
    'capability' => 'edit_theme_options',
    'default' => 'achivement',
    'transport'	=> 'refresh', // or postMessage.
    'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'mh_achivement_header_label', array(
    'label' => __( 'achivement Header' ),
    'type' => 'text',
    'section' => 'mh_achivement',
) );
////////////////////////////////////achivement discription/////////////////////////

$wp_customize->add_setting( 'mh_achivement2_discription_label', array(
    'type' => 'theme_mod', // or 'option'.
    'capability' => 'edit_theme_options',
    'default' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia.',
    'transport'	=> 'refresh', // or postMessage.
    'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'mh_achivement2_discription_label', array(
    'label' => __( 'achivement Discription' ),
    'type' => 'textarea',
    'section' => 'mh_achivement',
) );

////////////////////////////////////achivement=====image////////////////////////////////////////////////////////////	


$wp_customize->add_setting( 'achivement_background_image', array(
	'default' => get_theme_file_uri('/images/bg_1.jpg'), // Add Default Image URL 
	'sanitize_callback' => 'esc_url_raw'
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'achivement_background_image_control', array(
	'label' => 'Upload Image',
	'priority' => 20,
	'section' => 'mh_achivement',
	'settings' => 'achivement_background_image',
	'button_labels' => array(// All These labels are optional
				'select' => 'Select Image',
				'remove' => 'Remove Image',
				'change' => 'Change Image',
				)
)));

//////////////////////////////achivement section//////////////////////////////////////////
$wp_customize->add_setting( 'mh_achivementsub_section1_label', array(
    'type' => 'theme_mod', // or 'option'.
    'capability' => 'edit_theme_options',
    'default' => '12',
    'transport'	=> 'refresh', // or postMessage.
    'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'mh_achivementsub_section1_label', array(
    'label' => __( 'Enter Number achivement part-1' ),
    'type' => 'text',
    'section' => 'mh_achivement',
) );
////////////////////////////achivemet section2///////////////////////////////////////
$wp_customize->add_setting( 'mh_achivementsub_section2_label', array(
    'type' => 'theme_mod', // or 'option'.
    'capability' => 'edit_theme_options',
    'default' => '450',
    'transport'	=> 'refresh', // or postMessage.
    'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'mh_achivementsub_section2_label', array(
    'label' => __( 'Enter Number achive ment part-2' ),
    'type' => 'text',
    'section' => 'mh_achivement',
) );

////////////////////////////achivement section3//////////////////////////////////////
$wp_customize->add_setting( 'mh_achivementsub_section3_label', array(
    'type' => 'theme_mod', // or 'option'.
    'capability' => 'edit_theme_options',
    'default' => '2500',
    'transport'	=> 'refresh', // or postMessage.
    'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'mh_achivementsub_section3_label', array(
    'label' => __( 'Enter Number achive ment part-3' ),
    'type' => 'text',
    'section' => 'mh_achivement',
) );

///////////////////////////achivement subsection4////////////////////////////
$wp_customize->add_setting( 'mh_achivementsub_section4_label', array(
    'type' => 'theme_mod', // or 'option'.
    'capability' => 'edit_theme_options',
    'default' => '25000',
    'transport'	=> 'refresh', // or postMessage.
    'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'mh_achivementsub_section4_label', array(
    'label' => __( 'Enter Number achive ment part-4' ),
    'type' => 'text',
    'section' => 'mh_achivement',
) );
///////////////////////////////////////////////////////////////////////////////
      //<<============>> //  subscription  section   //<<============>> //
////////////////////////////////////////////////////////////////////////////////

$wp_customize->add_setting( 'mh_subscription_header', array(
    'type' => 'theme_mod', // or 'option'.
    'capability' => 'edit_theme_options',
    'default' => 'Subcribe to our',
    'transport'	=> 'refresh', // or postMessage.
    'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'mh_subscription_header', array(
    'label' => __( 'subscription header header' ),
    'type' => 'text',
    'section' => 'mh_subscription',
) );

$wp_customize->add_setting( 'mh_subscription_discription', array(
    'type' => 'theme_mod', // or 'option'.
    'capability' => 'edit_theme_options',
    'default' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in',
    'transport'	=> 'refresh', // or postMessage.
    'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'mh_subscription_discription', array(
    'label' => __( 'subscription section Discription' ),
    'type' => 'textarea',
    'section' => 'mh_subscription',
) );

///////////////////////////////////////////////////////////////////////////////////////////////////////////
//=====================================Gallary====================================================
//////////////////////////////////////////////////////////////////////////////////////////////////////////
$wp_customize->add_setting( 'gallary1_image', array(
	'default' => get_theme_file_uri('/images/gallery-1.jpg'), // Add Default Image URL 
	'sanitize_callback' => 'esc_url_raw'
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'gallary1_image_control', array(
	'label' => 'Gallary Image1',
	'priority' => 20,
	'section' => 'mh_gallary',
	'settings' => 'gallary1_image',
	'button_labels' => array(// All These labels are optional
				'select' => 'Select Image',
				'remove' => 'Remove Image',
				'change' => 'Change Image',
				)
)));


//////////////////////////////
$wp_customize->add_setting( 'gallary2_image', array(
	'default' => get_theme_file_uri('/images/gallery-2.jpg'), // Add Default Image URL 
	'sanitize_callback' => 'esc_url_raw'
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'gallary2_image_control', array(
	'label' => 'Gallary Image2',
	'priority' => 20,
	'section' => 'mh_gallary',
	'settings' => 'gallary2_image',
	'button_labels' => array(// All These labels are optional
				'select' => 'Select Image',
				'remove' => 'Remove Image',
				'change' => 'Change Image',
				)
)));

///////////////////////
$wp_customize->add_setting( 'gallary3_image', array(
	'default' => get_theme_file_uri('/images/gallery-3.jpg'), // Add Default Image URL 
	'sanitize_callback' => 'esc_url_raw'
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'gallary3_image_control', array(
	'label' => 'Gallary Image3',
	'priority' => 20,
	'section' => 'mh_gallary',
	'settings' => 'gallary3_image',
	'button_labels' => array(// All These labels are optional
				'select' => 'Select Image',
				'remove' => 'Remove Image',
				'change' => 'Change Image',
				)
)));
//////////////////////////
$wp_customize->add_setting( 'gallary4_image', array(
	'default' => get_theme_file_uri('/images/gallery-4.jpg'), // Add Default Image URL 
	'sanitize_callback' => 'esc_url_raw'
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'gallary4_image_control', array(
	'label' => 'Gallary Image4',
	'priority' => 20,
	'section' => 'mh_gallary',
	'settings' => 'gallary4_image',
	'button_labels' => array(// All These labels are optional
				'select' => 'Select Image',
				'remove' => 'Remove Image',
				'change' => 'Change Image',
				)
)));

////////////////////////////////////////////////////////////////////////
//<<====================>>Blog Custmizer<<===============================>>//

//////////////////////////////////////////////////////////////////////////////

$wp_customize->add_setting( 'mh_blog_header', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' => 'edit_theme_options',
	'default' => 'Latest Blog',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'mh_blog_header', array(
	'label' => __( 'Blog Section Header' ),
	'type' => 'text',
	'section' => 'mh_doctorintro',
) );
 
/////////////////////////////////////////////////////////////////////////////
$wp_customize->add_setting( 'mh_blog_discription', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' => 'edit_theme_options',
	'default' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia.',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'mh_blog_discription', array(
	'label' => __( 'Blog section Discription' ),
	'type' => 'textarea',
	'section' => 'mh_doctorintro',
) );

////////////////////////////////////////////////////////////////////////////////////
//<<=============Contact US====================>>
/////////////////////////////////////////////////////////////////////////////////////

$wp_customize->add_setting( 'mh_contact_header', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' => 'edit_theme_options',
	'default' => 'DentaCare Procedure & High Quality Services',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'mh_contact_header', array(
	'label' => __('Contact Section Header part-1'),
	'type' => 'text',
	'section' => 'mh_contact',
) );
 
/////////////////////////////////////////////////////////////////////////////
$wp_customize->add_setting( 'mh_contact_discription', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' => 'edit_theme_options',
	'default' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. Because there were thousands of bad Commas, wild Question Marks and devious Semikoli',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'mh_contact_discription', array(
	'label' => __( 'Blog section Discription' ),
	'type' => 'textarea',
	'section' => 'mh_contact',
) );
///////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////
$wp_customize->add_setting( 'mh_sub1point_contact', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' => 'edit_theme_options',
	'default' => 'Consectetur adipisicing elit',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'mh_sub1point_contact', array(
	'label' => __('contact part-1 subpoint-1'),
	'type' => 'text',
	'section' => 'mh_contact',
) );
//////////=============>
$wp_customize->add_setting( 'mh_sub2point_contact', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' => 'edit_theme_options',
	'default' => 'Adipisci repellat accusamus',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'mh_sub2point_contact', array(
	'label' => __('contact part-2 subpoint-2'),
	'type' => 'text',
	'section' => 'mh_contact',
) );
///////////////==============>
$wp_customize->add_setting( 'mh_sub3point_contact', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' => 'edit_theme_options',
	'default' => 'DentaCare Procedure & High Quality Services',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'mh_sub3point_contact', array(
	'label' => __('contact part-3 subpoint-3'),
	'type' => 'text',
	'section' => 'mh_contact',
) );
//====================================================================
//============services template //=====================================
///////////////////////////////////////////////////////////////////////
$wp_customize->add_setting( 'services_banner_header', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' => 'edit_theme_options',
	'default' => 'Our Service Keeps you Smile',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'services_banner_header', array(
	'label' => __('services template header'),
	'type' => 'text',
	'section' => 'mh_services_temp_header',
) );

///////////////////////////////////////////////////////////////
//====================================================================
//============services template //=====================================
///////////////////////////////////////////////////////////////////////
$wp_customize->add_setting( 'footer_address_header_setting', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' => 'edit_theme_options',
	'default' => 'Office',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'footer_address_header_setting', array(
	'label' => __('Address Header'),
	'type' => 'text',
	'section' => 'mh_Footer_office_address',
) );

 ///////////////////////////////////////////////   // address place 
 $wp_customize->add_setting( 'footer_address_place_setting', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' => 'edit_theme_options',
	'default' => '203 Fake St. Mountain View, San Francisco, California, USA',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'footer_address_place_setting', array(
	'label' => __('Address info.'),
	'type' => 'textarea',
	'section' => 'mh_Footer_office_address',
) );
////////////////////////////////////////////mobile number/////////////
$wp_customize->add_setting( 'footer_mobile_number_setting', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' => 'edit_theme_options',
	'default' => '+2 392 3929 210',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'footer_mobile_number_setting', array(
	'label' => __('Mobile Number'),
	'type' => 'number',
	'section' => 'mh_Footer_office_address',
) );

////////////////////////////////////////////mobile number/////////////
$wp_customize->add_setting( 'footer_mail_send_setting', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' => 'edit_theme_options',
	'default' => 'info@gmail.com',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'footer_mail_send_setting', array(
	'label' => __('mail setting'),
	'type' => 'text',
	'section' => 'mh_Footer_office_address',
) );

///////////////////////////////////////////////////////////////////////
//================== home page banner option part-1 setting =================//
///////////////////////////////////////////////////////////////////////


$wp_customize->add_setting( 'home_bannerpart1_setting_header', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' => 'edit_theme_options',
	'default' => 'Emergency Cases',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'home_bannerpart1_setting_header', array(
	'label' => __('Header change option'),
	'type' => 'text',
	'section' => 'mh_home_banner_sectionpart1_text',
) );

///////////////////////////////////////////////////////////////////////////
$wp_customize->add_setting( 'home_bannerpart1_setting_discription', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' => 'edit_theme_options',
	'default' => 'A small river named Duden flows by their place and supplies',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'home_bannerpart1_setting_discription', array(
	'label' => __('banner part one discription'),
	'type' => 'text',
	'section' => 'mh_home_banner_sectionpart1_text',
) );

/////////////////////////////////////////////////////////////////////////////////

$wp_customize->add_setting( 'home_bannerpart1_setting_phone_number', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' => 'edit_theme_options',
	'default' => '9925566233',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'home_bannerpart1_setting_phone_number', array(
	'label' => __('banner part one phone Number'),
	'type' => 'text',
	'section' => 'mh_home_banner_sectionpart1_text',
) );

///////////////////////////////////////////////////////////////////////
//================== home page banner option part-2 setting =================//
///////////////////////////////////////////////////////////////////////

$wp_customize->add_setting( 'home_bannerpart2_setting_header', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' => 'edit_theme_options',
	'default' => 'Opening Hours',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'home_bannerpart2_setting_header', array(
	'label' => __('Header change option'),
	'type' => 'text',
	'section' => 'mh_home_banner_sectionpart2_text',
));

/////////////////part2 day option ////////////////////////////////////

// line-1 
$wp_customize->add_setting( 'home_bannerpart2_dayline_1', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' => 'edit_theme_options',
	'default' => 'Monday-Friday',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'home_bannerpart2_dayline_1', array(
	'label' => __('type Day Line one'),
	'type' => 'text',
	'section' => 'mh_home_banner_sectionpart2_text',
));

// line- 2 
$wp_customize->add_setting( 'home_bannerpart2_dayline_2', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' => 'edit_theme_options',
	'default' => 'saturday',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'home_bannerpart2_dayline_2', array(
	'label' => __('type day line two'),
	'type' => 'text',
	'section' => 'mh_home_banner_sectionpart2_text',
));

// line- 3
$wp_customize->add_setting( 'home_bannerpart2_dayline_3', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' => 'edit_theme_options',
	'default' => 'sunday',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'home_bannerpart2_dayline_3', array(
	'label' => __('type day line three'),
	'type' => 'text',
	'section' => 'mh_home_banner_sectionpart2_text',
));


//=====================================================================
/////////////////part2 time option ////////////////////////////////////
//=====================================================================


// option first 
$wp_customize->add_setting( 'home_bannerpart2_timeline_1', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' => 'edit_theme_options',
	'default' => '8:00-19:00',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'home_bannerpart2_timeline_1', array(
	'label' => __('type Time line three'),
	'type' => 'text',
	'section' => 'mh_home_banner_sectionpart2_text',
));

// option second 
$wp_customize->add_setting( 'home_bannerpart2_timeline_2', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' => 'edit_theme_options',
	'default' => '10:00-17:00',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'home_bannerpart2_timeline_2', array(
	'label' => __('type Time line three'),
	'type' => 'text',
	'section' => 'mh_home_banner_sectionpart2_text',
));


// option third 

$wp_customize->add_setting( 'home_bannerpart2_timeline_3', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' => 'edit_theme_options',
	'default' => '10:00-16:00',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'home_bannerpart2_timeline_3', array(
	'label' => __('type Time line three'),
	'type' => 'text',
	'section' => 'mh_home_banner_sectionpart2_text',
));


//=====================================================================
/////////////////Banner tex in Home ////////////////////////////////////
//=====================================================================
// header 
$wp_customize->add_setting( 'home_bannertext_header', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' => 'edit_theme_options',
	'default' => 'Modern Dentistry in a Calm and Relaxed Environment',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'home_bannertext_header', array(
	'label' => __('type banner Header'),
	'type' => 'text',
	'section' => 'mh_homebanner_text',
));

// discription 

$wp_customize->add_setting( 'home_bannertext_discription', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' => 'edit_theme_options',
	'default' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia.',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'home_bannertext_discription', array(
	'label' => __('type Banner Discriotion'),
	'type' => 'text',
	'section' => 'mh_homebanner_text',
));

//=====================================================================
/////////////////pricing section ////////////////////////////////////
//=====================================================================
//pricing header 
$wp_customize->add_setting( 'pricing_section_header', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' => 'edit_theme_options',
	'default' => 'Our Best Pricing',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'pricing_section_header', array(
	'label' => __('pricing Section Header'),
	'type' => 'text',
	'section' => 'mh_pricing',
));

//pricing discription

$wp_customize->add_setting( 'pricing_section_discription', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' => 'edit_theme_options',
	'default' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia.',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'pricing_section_discription', array(
	'label' => __('pricing Section Discriotion'),
	'type' => 'text',
	'section' => 'mh_pricing',
));

//=====================================================================
/////////////////color Manage Custmize API ////////////////////////////////////
//=====================================================================

// nav color 
$wp_customize->add_setting( 'mh_nav_bg_color1', array(
		'type' => 'theme_mod', // or 'option'.
		'capability' => 'edit_theme_options',
		'default' => '#000',
		'transport'	=> 'refresh', // or postMessage.
		'sanitize_callback' => 'sanitize_hex_color',
	) );

$wp_customize->add_control( 'mh_nav_bg_color1', array(
		'label' => __( 'Navbar Background' ),
		'type' => 'color',
		'section' => 'mh_navheader_color',
) );

// banner cart col1 
$wp_customize->add_setting( 'mh_banner_cart_color_col1', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' => 'edit_theme_options',
	'default' => '#2cbcbc',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'sanitize_hex_color',
) );

$wp_customize->add_control( 'mh_banner_cart_color_col1', array(
	'label' => __( 'banner cart col-1' ),
	'type' => 'color',
	'section' => 'mh_banner_cart_color',
) );

// banner cart col-2
$wp_customize->add_setting( 'mh_banner_cart_color_col2', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' => 'edit_theme_options',
	'default' => '#21aac4',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'sanitize_hex_color',
) );

$wp_customize->add_control( 'mh_banner_cart_color_col2', array(
	'label' => __( 'banner cart col-2' ),
	'type' => 'color',
	'section' => 'mh_banner_cart_color',
) );


// banner cart col-3
$wp_customize->add_setting( 'mh_banner_cart_color_col3', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' => 'edit_theme_options',
	'default' => '#2f89fc',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'sanitize_hex_color',
) );

$wp_customize->add_control( 'mh_banner_cart_color_col3', array(
	'label' => __( 'banner cart col-3' ),
	'type' => 'color',
	'section' => 'mh_banner_cart_color',
) );

// button Background color Home
$wp_customize->add_setting( 'mh_home_button_background_color', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' => 'edit_theme_options',
	'default' => '#2f89fc',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'sanitize_hex_color',
) );

$wp_customize->add_control( 'mh_home_button_background_color', array(
	'label' => __( 'Home Button color' ),
	'type' => 'color',
	'section' => 'mh_button_background_color',
) );
//common custmizer color
$wp_customize->add_setting( 'mh_themecommon_color', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' =>'edit_theme_options',
	'default' => '#2f89fc',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'sanitize_hex_color',
) );

$wp_customize->add_control( 'mh_themecommon_color', array(
	'label' => __( 'common backgroun All Section' ),
	'type' => 'color',
	'section' => 'mh_common_background_color',
) );

//add devloper name

$wp_customize->add_setting( 'devlop_by_theme', array(
	'type' => 'theme_mod', // or 'option'.
	'capability' => 'edit_theme_options',
	'default' => 'MH Theme',
	'transport'	=> 'refresh', // or postMessage.
	'sanitize_callback' => 'esc_attr',
) );

$wp_customize->add_control( 'devlop_by_theme', array(
	'label' => __('Add Devloper Name'),
	'type' => 'text',
	'section' => 'devloper_theme',
));


}
add_action( 'customize_register', 'mh_customize_register' );



