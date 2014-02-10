<?php
/*
	The Foundry
*/
	
// other essential constants
	define("TEMPLATEURL", get_template_directory_uri());
	define("SITEURL", home_url());

// for Foundry upload
	$upload_dir = wp_upload_dir();
	
	define("WPUPLOAD_BASEDIR", trailingslashit($upload_dir['basedir']));
	define("WPUPLOAD_BASEURL", trailingslashit($upload_dir['baseurl']));
	define("WPUPLOAD_UDFF_DIR_NAME", 'udf_foundry');
	define("UDFFNONCEACTIONNAME", 'udff_ajax_nonce');

/*
	the Foundry Settings
*/

/*
	required for the Foundry
*/
	// required functions for the Foundry to operate
	include_once (get_template_directory().'/z_admin/foundry/udff_functions.php');

	// site menu setting items.
	if(get_template_directory().'/z_usr/foundry/admin_menuvars.php') {
		include_once (get_template_directory().'/z_usr/foundry/admin_menuvars.php');
	} else if(get_template_directory().'/z_admin/foundry/admin_menuvars.php') {
		include_once (get_template_directory().'/z_admin/foundry/admin_menuvars.php');
	} else {
		$supportMenu=array ();
		$menuArray=array (
		  0 => 
		  array (
		    'root' => 'Welcome',
		    'subnode' => 
		    array (
		    ),
		    'icon' => 'welcome',
		    'type' => 'url',
		    'helptext' => 'Foundry menu could not be loaded. Please make sure that admin_menuvars.php exists in the z_usr/foundry directory.',
		  ));
		 $idArray=array ();
	}

	// process menu variables - load all the Foundry option values
	// function found in common_functions.php
	udff_getOptions ();

	// the Foundry shortcode Assistant (FSA)
	// Include the Shortcode Assistant
	include_once (get_template_directory(). '/z_admin/shortcodes/shortcodes.php');

/*
	load files for The Foundry
*/

	if(is_admin()){
		/*
			The Foundry
		*/
		
		add_action ('admin_bar_init','udt_get_userInfo');
		
		// admin_ui_elements.php has functions required to loaded in advance for udff_admin.php to work properly
		include_once (get_template_directory(). '/z_admin/foundry/admin_ui_elements.php');

		// udff_admin.php takes care of the Foundry panel and the Foundry wp admin left side menu
		include_once (get_template_directory(). '/z_admin/foundry/udff_admin.php');
	}


// foundry permissions
function udt_get_userInfo () {
	$current_user = wp_get_current_user();
	$permission_settings_array = UDTF_get_permissions();
	$foundry_user_restricted = UDTF_check_role_foundry_user_restricted($current_user->ID);
}