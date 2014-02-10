<script type="text/javascript">
<!--
jQuery(function($){
	<?php 
		if(get_filesystem_method() !== 'direct') {
			echo 'var direct_fs_mode = false;';
		} else {
			echo 'var direct_fs_mode = true;';
		}
	?>
	jQuery('.foundry_systemInfo_click').click ( function (event_browser) {
		if(jQuery('.foundry_systemInfo').css('display') == 'none') {
			if (event_browser.altKey){
				jQuery('#foundry_systemInfo_admin').show();
			}
			jQuery('.foundry_systemInfo').fadeIn();
		} else {
			jQuery('.foundry_systemInfo').fadeOut();
			jQuery('#foundry_systemInfo_admin').hide();
		}
	});

	jQuery('#downloadFoundrySettings').click ( function () {
		var that = jQuery(this);
		jQuery(this).fadeOut();
		jQuery.post(siteurl+"/wp-admin/admin-ajax.php", {
		action:"outputSettings",
			'request_data': 'all',
			'_wpnonce' : jQuery('div#fp-wrapper input#_wpnonce').val(),
			'_wp_http_referer' : jQuery('div#fp-wrapper input[name=_wp_http_referer]').val()
		},
		function(responseData)
		{
			that.fadeIn();
			jQuery('.foundry_systemInfo').val(responseData);
			window.location.href = 'data:application/octet-stream;filename=foundry.xml,'+encodeURIComponent(responseData);
		}
		);
	});

	jQuery('#downloadFoundrySettings_import').change(function(event) {
		jQuery('.foundry_systemInfo').val('Uploading ...');
		jQuery(this).upload(siteurl + "/wp-admin/admin-ajax.php", {
		    		'action' : 'importSettings',
					'key': 'downloadFoundrySettings_import',
					'_wpnonce' : jQuery('div#fp-wrapper input#_wpnonce').val(),
					'_wp_http_referer' : jQuery('div#fp-wrapper input[name=_wp_http_referer]').val()
				}, function(responseData) {
					jQuery('.foundry_systemInfo').val(responseData);
		        	try {
		        		responseData = jQuery.parseJSON(responseData);
		        	}catch( e ){
		        		//
		        	}
		        	if (responseData.result == 'ok') {
		        		// jQuery('.foundry_systemInfo').val(responseData);
		        		// location.reload();
		        	} else {
		        		// jQuery('.foundry_systemInfo').val(responseData);
		        	}
		        }, 'html');
	});
});
// -->
</script>
<div class="module">
<h1>Welcome to The Foundry for <?php echo THEMENAME; ?></h1>
<p>Take a moment to view the documentation which will breifly explain how to set up your theme and how to best use the Foundry Theme Options Panel.</p>
<p>Should you require help getting started or if you have any questions regarding the theme, please join us in our support forum and we'll be happy to help.</p>
<p>Happy Themeing!</p>
<p>PS. Don't forget to rate the product on ThemeForest, you can do so by going here: <a href="http://themeforest.net/downloads" target="_blank" style="color:#f64233;">http://themeforest.net/downloads</a></p>
</div>
<?php if(file_exists(FOUNDRY_BOX_URI) && foundry_ui_checkPermission('foundry_box') ) : ?>
<div class="module module-even">
<h1>Upload Skins</h1>
Most of our themes come with at least a couple of skins. If you have a skin file for this theme that you would like to use, you can upload it by clicking the button below.
	<div style="text-align:center;margin-top: 30px;">
		<div class="foundry_buttonWithIcon" id="foundry_box">
			<div class="buttonIcon_foundryBox"><!--- empty --></div>
			<span class="foundry_buttonWithIcon_label">Upload Skins</span>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( foundry_ui_checkPermission('demo_contents') && class_exists('Foundry_oneClickDemo')) : ?>
<?php 
	global $foundry_oneClickDemo;
	$foundry_oneClickDemo->print_ui () ;
?>
<?php endif; ?>

<?php if( defined('ENABLE_SAVEALL') && ENABLE_SAVEALL === TRUE ) : ?>
<?php 
	// button label
	if( defined('SAVEALL_BUTTON_LABEL') ) {
		$saveall_button_label = SAVEALL_BUTTON_LABEL;
	} else {
		$saveall_button_label = 'Save all the Foundry Settings';
	}
		
?>
<div class="module">
<h1><?php
	if(defined('SAVEALL_TITLE')) :
		echo SAVEALL_TITLE;
	else:
		echo 'Save all the settings at once.';
	endif;
?></h1>
<p><?php
	if(defined('SAVEALL_MESSAGE')) :
		echo SAVEALL_MESSAGE;
	else:
		echo 'Save all the settings at once.';
	endif;
?></p>
	<input type="button" class="ui-button large theme rcorners thisIsSaveAllButton" value="<?php echo $saveall_button_label; ?>" />
	<input type="hidden" id="saveall_button_label" value="<?php echo $saveall_button_label; ?>" />
	<div class="settingItemMessage_all"><!-- empty --></div>
</div>
<?php endif; ?>

<?php if( defined('ENABLE_INITALL') && ENABLE_INITALL === TRUE ) : ?>
<?php 
	// button label
	if( defined('INITALL_BUTTON_LABEL') ) {
		$initall_button_label = INITALL_BUTTON_LABEL;
	} else {
		$initall_button_label = 'Initialize Foundry Settings';
	}
		
?>
<div class="module">
<h1><?php
	if(defined('INITALL_TITLE')) :
		echo INITALL_TITLE;
	else:
		echo 'Initialize Foundry Settings';
	endif;
?></h1>
<p><?php
	if(defined('INITALL_MESSAGE')) :
		echo INITALL_MESSAGE;
	else:
		echo "If you're using a plugin that requiers access to any of the settings in Foundry, e.g. WPML String Translations, you may need to initialize all Foundry settings first to save them to the database, hence making them available to the plugins.";
	endif;
?></p>
	<input type="button" class="ui-button large theme rcorners thisIsInitAllButton" value="<?php echo $initall_button_label; ?>" />
	<input type="hidden" id="initall_button_label" value="<?php echo $initall_button_label; ?>" />
	<div class="settingItemMessage_all"><!-- empty --></div>
</div>
<?php endif; ?>

<?php if( foundry_ui_checkPermission('system_information') ) : ?>
<div class="module module-even">
<h1>System Information</h1>
<div class="settingItemMessage">Please provide system information should you require support. Simply click the textarea, right click and select "copy" or hit "ctrl+c".</div>
<p><a class="foundry_systemInfo_click" style="cursor: pointer;">Show/Hide System Information</a></p>
<?php if(defined('FOUNDRY_DIAGO') && FOUNDRY_DIAGO === TRUE) : ?>
<div id="foundry_systemInfo_admin" class="module module-odd" style="display: none; clear: both;">
	<div class="titleContainer">
		<h1>System Administration - Import / Export</h1>
	</div>
	<p>This option is hidden because users are not supposed to be using it. Therefore this option is not officially supported.</p>
	<input type="button" id="downloadFoundrySettings" class="ui-button large theme rcorners" style="margin-left: 0px; width: auto;" value="Download the Foundry Settings as an XML file"><br /><br />
	<p>This feature is closed to public.</p>
	<p>To upload an xml file of the Foundry settings, use the button below.</p>
	<form id="downloadFoundrySettings_import_form" name="downloadFoundrySettings_import_form">
		<input type="file" id="downloadFoundrySettings_import" name="downloadFoundrySettings_import" class="ui-button large theme rcorners" style="margin-left: 0px; width: auto;" value="Download the Foundry Settings as an XML file" /><br />
		<input type="reset" style="margin: 0;" value="Reset" />
	</form>
</div>
<?php endif; ?>
<textarea class="foundry_systemInfo" style="height: 300px; width : 100%; display: none;" onclick="jQuery(this).select();"><?php
echo "Server Information\n";
echo "Server software:{$_SERVER['SERVER_SOFTWARE']}\n";
echo "PHP Information\n";
echo "PHP Version: ".phpversion()."\n";

echo "PHP Safe Mode:";
echo ini_get('safe_mode') ? "PHP safe_mode is set to On" : "PHP safe_mode is set to Off";
echo "\n";

echo "file_uploads: ";
echo ini_get('file_uploads') ? 'On' : 'Off';
echo "\n";

echo "max_file_uploads: ".ini_get('max_file_uploads')."\n";

echo "upload_max_filesize: ".ini_get('upload_max_filesize')."\n";


echo "sendmail_path: ".ini_get('sendmail_path')."\n";


echo "MySQL Version: ".mysql_get_server_info()."\n";


echo "\nWordpress Information\n";
echo "WordPress Version: ";
bloginfo("version");
echo "\n";

echo "Site URL: ".home_url()."\n";

echo "WordPress URL: ".site_url()."\n";

echo "WordPress Language: ";

bloginfo("language")."\n";

echo "WordPress Character set: ";

bloginfo("charset");

echo "\n";

echo "Filesystem Method: ".get_filesystem_method()."\n";

echo "\nInstalled Plugins:\n";

$plugin_status = '';
$installedPluginsArray = get_plugins();
foreach($installedPluginsArray as $key => $value) {
	(is_plugin_active($key)) ? $plugin_status = 'Activated' : $plugin_status = 'Deactivated';
	echo  $value['Name'].' '.$value['Version'].' ('.$plugin_status.")\n";
}

echo "\nUDTHEMES Product information: ";

	echo THEMENAME." Version ";
    global $wp_version;
    if ( version_compare( $wp_version, '3.4', '<=' ) ) {
		$theme_data = get_theme_data( get_template_directory() . '/style.css' );
		echo $theme_data['Version'];
    } else {
		$theme = wp_get_theme();
		echo $theme->Version;
    }
    
echo "\n\nYour browser information: ".$_SERVER['HTTP_USER_AGENT']; ?>
</textarea>
</div>
<?php endif; ?>