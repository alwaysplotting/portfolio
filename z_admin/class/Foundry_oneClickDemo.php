<?php

class Foundry_oneClickDemo {
	/* variables */
	private $path_demoContents = '';
	private $dir_demoContents = '';
	
	private $demoContentsID = '';
	
	private $demoContents = array ();
	
	private $demoContents_postIDs = array ();
	
	private $demoContents_terms_category = array ();
	private $demoContents_terms_post_tag = array ();

	/* constructor */
	public function __construct() {
		$this->path_demoContents = get_template_directory ().'/z_usr/foundry/demoContents/';
		$this->dir_demoContents = get_template_directory_uri ().'/z_usr/foundry/demoContents/';
		$this->demoContentsID = 'udt_demo_'.PRODUCTID;
		
		if(
			isset($_POST['installDemoContents']) &&
			$_POST['installDemoContents'] == '1'
		) {
			add_action('wp_loaded',  array(&$this ,'installDemoContents') );
		}
	}
	
	public function print_ui () {
		$this->demoContents = $this->loadDemoContentsFiles ($this->path_demoContents );
		if( $this->demoContents === FALSE ) return;
		?>
		<style type="text/css">
			.foundry_oneClickDemo_wrap {
				width: 100%;
				text-align: center;
			}
			.foundry_oneClickDemo {
				margin: 1.5em auto
			}
			.foundry_oneClickDemo img {
				cursor: pointer;
			}
		</style>
		<script type="text/javascript">
			jQuery(function($){
				$('.foundry_oneClickDemo').click( function () {
					var basename = $(this).attr('data-basename');
					$('input#demoContents_basename').val(basename);
					$('input#installDemoContents').val(1);
					$('form#f_installDemoContents').submit();
				});
			});
		</script>
		<div class="module">
		<h1>One Click Demo</h1>
		<?php if(isset($_GET['demoContentsInstallation']) && $_GET['demoContentsInstallation'] === '1') : ?>
				<p>Installation Complete.</p>
		<?php endif; ?>
		<div class="foundry_oneClickDemo_wrap">
		<form action="" method="post" name="f_installDemoContents" id="f_installDemoContents">
		<?php foreach ($this->demoContents as $content) :?>
			<?php if($content['thumbnail']) : ?>
				<div class="foundry_oneClickDemo" data-basename="<?php echo $content['basename']; ?>">
					<img src="<?php echo $this->dir_demoContents.$content['thumbnail']; ?>" alt="<?php echo $content['buttonLabel']; ?>" />
				</div>
			<?php else : ?>
				<div class="foundry_buttonWithIcon foundry_oneClickDemo" data-basename="<?php echo $content['basename']; ?>">
					<span class="foundry_buttonWithIcon_label"><?php echo $content['buttonLabel']; ?></span>
				</div>	
			<?php endif; ?>
			
		<?php endforeach; ?>
			<input type="checkbox" id="importSidebarWidgetSettings" name="importSidebarWidgetSettings" value="true" /><label for="importSidebarWidgetSettings">Import sidebar widget settings. Warning: importing the settings will erase all the existing settings.</label>
			<input type="checkbox" id="importFoundrySettings" name="importFoundrySettings" value="true" /><label for="importFoundrySettings">Import Foundry settings. Warning: importing the settings will erase all the existing settings.</label>
			<?php wp_nonce_field('installDemoContents','installDemoContents_nonce'); ?>
			<input type='hidden' id='installDemoContents' name='installDemoContents' value='0' />
			<input type='hidden' id='demoContents_basename' name='demoContents_basename' value='' />
			<input type='hidden' id='demoContents_user_id' name='demoContents_user_id' value='<?php echo wp_get_current_user()->ID; ?>' />
		</form>
		</div>
		</div><?php
	}
	
	/* functions */
	
	// loading file
	private function loadDemoContentsFiles ( $path, $extension = 'json' ) {
		if(!file_exists($this->path_demoContents)) return false;
		
		$result_dir_list_array = array ();
		$demoContantButtonLabel = '';
		$thumbnail = '';
		$basename = '';
		$fileContents = '';
		
		if($extension) $extension = '.'.$extension;
		
		if ( $handle = opendir($path) ) {
			while ( false !== ($filename = readdir($handle)) ) {
				if($filename !== '.' && $filename !== '..' && $this->is_jason_file ($filename, $extension) ) {
					$basename = basename ( $filename, $extension );
					
					$fileContents = json_decode(file_get_contents($this->path_demoContents.$filename),true);
					$demoContantButtonLabel = $fileContents['buttonLabel'];
					
					if(file_exists($this->path_demoContents.$basename.'.png')) {
						$thumbnail = $basename.'.png';
					} else {
						$thumbnail = '';
					}

					array_push( $result_dir_list_array, 
						array(
							'buttonLabel' => $demoContantButtonLabel,
							'basename' => $basename,
							'thumbnail' => $thumbnail,
							'fileContent' => $fileContents,
						)
					);
				}
		    }
		    closedir($handle);
		    
			return $result_dir_list_array;
	    } else {
		    return false;
	    }
	}
	
		private function is_jason_file ($filename, $extension){
		    $length = (strlen($filename) - strlen($extension));
		    if($length < 0) return FALSE;
		    return strpos($filename, $extension, $length) !== FALSE;
		}
	
	// installation 
	public function installDemoContents () {
		if( !(
			wp_verify_nonce( $_REQUEST['installDemoContents_nonce'],'installDemoContents' ) &&
			check_admin_referer('installDemoContents','installDemoContents_nonce') )
		) return;

		// prep dummy images 
		$path_dummy_png = $this->path_demoContents.'dummy.png';
		$path_dummy_jpg = $this->path_demoContents.'dummy.jpg';
		$upload_dir = wp_upload_dir();
		$path_foundry_demoContents_dir = $upload_dir['basedir'].'/udf_foundry/demoContents/';
		
		$do_importSidebarWidgetSettings = ( isset($_POST['importSidebarWidgetSettings']) ) ? TRUE : FALSE;
		$do_importFoundrySettings = ( isset($_POST['importFoundrySettings']) ) ? TRUE : FALSE;

		if(!file_exists($path_foundry_demoContents_dir)) {
			if(!mkdir($path_foundry_demoContents_dir, 0755, true) ) {
				echo "udf_foundry/demoContents could not be created.";
				die();
			}
		}
		
		if(!file_exists($path_foundry_demoContents_dir.'dummy.png')) {
			copy($path_dummy_png, $path_foundry_demoContents_dir.'dummy.png');
		}
		
		if(!file_exists($path_foundry_demoContents_dir.'dummy.jpg')) {
			copy($path_dummy_jpg, $path_foundry_demoContents_dir.'dummy.jpg');
		}
		
		$demoContents_basename = $_POST['demoContents_basename'];
		$demoContents_user_id = $_POST['demoContents_user_id'];

		$removePreviousDemoContents_result = 0;
		
		$fileContents = array();
		
		// load the demo contents
		$fileContents = $this->load_DemoContents ($demoContents_basename);
		
		// remove previously installed demo contents
		// $this->demoContentsID
		$removePreviousDemoContents_result = $this->removePreviousDemoContents ( $fileContents );

		// category
		$this->insert_DemoContents_terms('category',$fileContents['category']);
		
		// tags
		$this->insert_DemoContents_terms('post_tag',$fileContents['post_tag']);

		// contents
		$this->insert_DemoContents( $fileContents['contents'], $demoContents_user_id );
		
		// nav_menu
		$this->update_nav_menu( $fileContents['nav_menu'] );
		
		// front page settings. settings added v.3.0.1 on 19 Jul 2013
		$this->update_frontPageSettings( $fileContents['front_page_settings'] );
		
		// sidebar widget settings. added v.3.1.3 on 24 Jul 2013
		if( $do_importSidebarWidgetSettings === TRUE ) {
			$this->update_sidebarWidgetSettings( $fileContents['sidebar_settings'] );
		}
		
		// foundry settings.  added v.3.1.3 on 24 Jul 2013
		if( $do_importFoundrySettings === TRUE ) {
			$this->update_foundrySettings( $fileContents['foundry_settings'] );
		}
		
		
		// that is all
		
		// just making sure that the files are copied. someitmes they do not get copied.
		if(!file_exists($path_foundry_demoContents_dir.'dummy.png')) {
			copy($path_dummy_png, $path_foundry_demoContents_dir.'dummy.png');
		}
		
		if(!file_exists($path_foundry_demoContents_dir.'dummy.jpg')) {
			copy($path_dummy_jpg, $path_foundry_demoContents_dir.'dummy.jpg');
		}

		header("Location: ".admin_url()."admin.php?page=udff_admin&demoContentsInstallation=1" );
		
		exit;
	}
	
	// move prev demo contents into the trash bin (clean up)
	private function removePreviousDemoContents ( $fileContents ) {
		$available_post_types = array();
		$do_importSidebarWidgetSettings = ( isset($_POST['importSidebarWidgetSettings']) ) ? TRUE : FALSE;
		$do_importFoundrySettings = ( isset($_POST['importFoundrySettings']) ) ? TRUE : FALSE;
		
		$post_types = get_post_types(array('public' => true), 'objects');
		
		if($post_types) {
			foreach( $post_types as $type) {
				$available_post_types[] = $type->name;
			}
		}
		
		$previousDemoContents = get_posts (
			array (
				'post_type' => $available_post_types,
				'meta_key' => $this->demoContentsID,
				'numberposts' => -1
			)
		);
		
		foreach( $previousDemoContents as $post ) :
			$attachments = get_posts(array( 'post_type' => 'attachment', 'numberposts' => -1, 'post_status' => null, 'post_parent' => $post->ID ));
			foreach( $attachments as $post_attachments ) :
				wp_delete_post ($post_attachments->ID, true);
			endforeach;
			wp_delete_post ($post->ID, true);
		endforeach;
		
		// just in case ....
		$attachments = get_posts(
			array(
				'post_type' => 'attachment',
				'meta_key' => $this->demoContentsID,
				'numberposts' => -1
				)
			);
		foreach( $attachments as $post ) :
			wp_delete_post ($post->ID, true);
		endforeach;
		
		// delete nav menu
		$menu_exists = wp_get_nav_menu_object( THEMENAME );
		if( $menu_exists) {
			wp_delete_nav_menu(THEMENAME);
		}
		
		if ( $do_importSidebarWidgetSettings === TRUE ) :
			delete_option('sidebars_widgets');
		endif;
		
		if ( $do_importFoundrySettings === TRUE ) :
			foreach ( $fileContents['foundry_settings'] as $key => $value ) :
				delete_option($key);
			endforeach;
		endif;

		return;
	}
	
	// load a single demo contents file and returns as an array
	private function load_DemoContents ($basename) {
		return  json_decode(file_get_contents($this->path_demoContents.$basename.'.json'),true);
	}
	
	// insert demo contents
	private function insert_DemoContents ($_fileContents, $demoContents_user_id) {
		// 
		/*
			array (
				n -> postID, 'number'
					post_attachements -> 
						array (
							n -> array ->
								postID, 'number'
								...
							}
						)
			)
		*/

		$post_data = array();
		$inserted_postID = 0;
		$post_parent_postID = 0;
		$post_thumbnail_ID = 0;
		
		foreach( $_fileContents as $content_index => $content ) :
			//print_r($content);
			// 'post_parent'    => $content['post_parent'] //Sets the parent of the new post.
			
			$inserted_postID = $this->insert_DemoContents_post (
				$demoContents_user_id, 
				$content, 
				$content_index
			);
			if(!empty( $content['post_attachements'] )) :
				foreach( $content['post_attachements'] as $attachement_index => $attachement_content ) :
					$this->insert_DemoContents_post (
						$demoContents_user_id, 
						$attachement_content, 
						$content_index,
						$attachement_index,
						$inserted_postID
					);
				endforeach;
			endif;
		endforeach;

		// now set proper parent post IDs
		foreach( $_fileContents as $content_index => $content ) :
			$post_parent_postID = $this->returnTranslatedID ($content['post_parent'], $this->demoContents_postIDs) ;
			wp_update_post (
				array (
					'ID' => $this->demoContents_postIDs[$content_index], 
					'post_parent' => $post_parent_postID
				)
			);

			// featured image _thumbnail_id
			if(!empty($content['post_meta']['_thumbnail_id'])) {
				$post_thumbnail_ID = $this->returnTranslatedID  ($content['post_meta']['_thumbnail_id'][0], $this->demoContents_postIDs);
				update_post_meta( 
					$this->demoContents_postIDs[$content_index], 
					'_thumbnail_id', 
					$post_thumbnail_ID
				);
			}
			
		endforeach;

		return;
	}
	
	private function insert_DemoContents_post ($demoContents_user_id, $content, $content_index, $is_attachement = -1 , $post_parent = 0){
		$inserted_postID = 0;
		$post_mime_type = '';
		
		$post_data = array(
			'menu_order'     => $content['menu_order'], 
			'post_parent'     => $post_parent, 
			'comment_status' => $content['comment_status'], // 'closed' means no comments.
			'post_author'    => $demoContents_user_id, //The user ID number of the author.
			'post_content'   => $content['post_content'], //The full text of the post.
			'post_date'      => $content['post_date'], //The time post was made.
			'post_date_gmt'  => $content['post_date_gmt'], //The time post was made, in GMT.
			'post_excerpt'   => $content['post_excerpt'], //For all your post excerpt needs.
			'post_name'      => $content['post_name'], // The name (slug) for your post
			'post_status'    => $content['post_status'], //Set the status of the new post.
			'post_title'     => $content['post_title'], //The title of your post.
			'post_type'      => $content['post_type'], //
			'post_content_filtered' => $content['post_content_filtered'],
			'filter' => $content['filter'],
			'post_mime_type' => $content['post_mime_type']
		);
		$inserted_postID = wp_insert_post ($post_data);

		if($inserted_postID === 0 ) {
			echo "ERROR";
		} else {
			// save post id once
			// if($is_attachement !== -1) {
				$this->demoContents_postIDs[($is_attachement !== -1) ? $is_attachement : $content_index ] = $inserted_postID;
/*
			} else {
				$this->demoContents_postIDs[$content_index] = $inserted_postID;
			}
*/
			
			// Now add up post meta
			if(!empty($content['post_meta'])) {
				foreach( $content['post_meta'] as $post_meta_key=>$post_meta_value ) :
					update_post_meta( 
						$inserted_postID, 
						$post_meta_key, 
						$post_meta_value[0] 
					);
				endforeach;
			}
			
			// for attached images
			$_meta_value = '';
			if($is_attachement !== -1) {
				if( $content['post_mime_type'] === 'image/png' ) $_meta_value = 'udf_foundry/demoContents/dummy.png';
				if ( $content['post_mime_type'] === 'image/jpeg' ) $_meta_value = 'udf_foundry/demoContents/dummy.jpg';
				
				if($_meta_value !== '') {
					update_post_meta( 
						$inserted_postID, 
						'_wp_attached_file', 
						$_meta_value
					);
				}
			}
			
			// proof that the post was created by this script
			update_post_meta( $inserted_postID, $this->demoContentsID, time() );

			if(!empty($content['post_category'])) $this->addTermsToPost( 'category' , $inserted_postID , $content['post_category']);
			if(!empty($content['post_tag'])) $this->addTermsToPost( 'post_tag' , $inserted_postID , $content['post_tag']);
		}
		return $inserted_postID;
	}
	
	private function insert_DemoContents_terms ($taxonomy, $termData){
		$demoContents_terms = 'demoContents_terms_'.$taxonomy;
		$wp_insert_term_result = array();
		$term_exists_result = '';
		// $this->{$demoContents_terms};
		
		foreach($termData as $value) :
			if(!empty($value)):
				$term_exists_result = term_exists($value['name'], $taxonomy);
				if(is_array($term_exists_result) && array_key_exists('term_id', $term_exists_result)) {
					$this->{$demoContents_terms}[$value['term_id']] = $term_exists_result['term_id'];
				} else if ($term_exists_result === NULL ) {
					$wp_insert_term_result = wp_insert_term (
						$value['name'],
						$taxonomy,
						array(
							'description'=>$this->demoContentsID,
							'slug' => $value['slug'],
						)
					);
	
					if(array_key_exists('term_id', $wp_insert_term_result)) {
						$this->{$demoContents_terms}[$value['term_id']] = $wp_insert_term_result['term_id'];
					} else {
						$this->{$demoContents_terms}[$value['term_id']] = false;
					}
				} else {
					$this->{$demoContents_terms}[$value['term_id']] = false;
				}
			endif;
		endforeach ;

		return;
	}
	
	private function addTermsToPost ($taxonomy, $postID, $termsList) {
		$demoContents_terms = 'demoContents_terms_'.$taxonomy;
		$termsList = explode(',',$termsList);
		
		foreach ($termsList as $value) {
			if(array_key_exists($value, $this->{$demoContents_terms})) {
				wp_set_object_terms ( $postID, (int) $this->{$demoContents_terms}[$value], $taxonomy );
			}
		}
		return;
	}
	
	private function update_nav_menu ($nav_menu_data) {
		$_menuName = THEMENAME;
		$navMenu_objID = 0;
		$originalNavMenuObjID = 0;
		$navMenuUrl = '';
		$demoContents_navMenu_objIDs = array();
		
		// Check if the menu exists
		$menu_exists = wp_get_nav_menu_object( $_menuName );
		if(!$menu_exists) {
			// var_dump($nav_menu_data);
			$menu_id = wp_create_nav_menu($_menuName);
			$menu = get_term_by( 'name', $_menuName, 'nav_menu' );
			
			foreach ( $nav_menu_data as $originalNavMenuObjID => $navMenuData ) :
				if($navMenuData['object'] === 'custom') {
					$navMenuUrl = $navMenuData['url'];
				} else {
					$navMenuUrl = get_permalink($this->returnTranslatedID($originalNavMenuObjID,$this->demoContents_postIDs));
				}
				
				$navMenu_objID = wp_update_nav_menu_item($menu->term_id, 0, array(
			        'menu-item-title' =>  $navMenuData['title'],
			        'menu-item-object' => $navMenuData['object'],
			        'menu-item-classes' => sanitize_title($navMenuData['title']),
			        'menu-item-url' => $navMenuUrl, 
			        'menu-item-status' => 'publish')
		        );
		        
		        $demoContents_navMenu_objIDs[$originalNavMenuObjID] = $navMenu_objID;
/*
		        echo $originalNavMenuObjID."<br />";
		        echo $navMenu_objID."<br />";
		        echo $this->returnTranslatedPostID($navMenuData['menu_item_parent'])."<br />";
		        echo $navMenuData['menu_item_parent']."<br /><br />";
*/
			endforeach;
			
			// translate parent-id
			foreach ( $nav_menu_data as $originalNavMenuObjID => $navMenuData ) :
				if( $navMenuData['menu_item_parent'] !== 0 ) :
					wp_update_nav_menu_item ($menu->term_id, $demoContents_navMenu_objIDs[$originalNavMenuObjID] ,
						array(
							'menu-item-title' =>  $navMenuData['title'],
					        'menu-item-object' => $navMenuData['object'],
					        'menu-item-classes' => sanitize_title($navMenuData['title']),
					        'menu-item-url' => $navMenuUrl, 
					        'menu-item-status' => 'publish',
					        'menu-item-position' => $navMenuData['menu_order'],
							'menu-item-parent-id' => $this->returnTranslatedID ($navMenuData['menu_item_parent'], $demoContents_navMenu_objIDs)
						)
					);
				endif;
			endforeach;

			//then you set the wanted theme location
		    $locations = get_theme_mod('nav_menu_locations');
		    $locations['main-menu'] = $menu->term_id;
		    set_theme_mod( 'nav_menu_locations', $locations );
		}

		return;
	}
	
	// update_frontPageSettings
	private function update_frontPageSettings ($frontPageSettings) {
		if(!empty($frontPageSettings['show_on_front'])) {
			update_option( 'show_on_front', $frontPageSettings['show_on_front'] ); // page or post
		}
		
		if(!empty($frontPageSettings['page_on_front'])) {
			update_option( 
				'page_on_front', 
				$this->returnTranslatedID($frontPageSettings['page_on_front'],$this->demoContents_postIDs)
			); // set ID
		}

		if(!empty($frontPageSettings['page_for_posts'])) {
			update_option( 
				'page_for_posts', 
				$this->returnTranslatedID($frontPageSettings['page_for_posts'],$this->demoContents_postIDs)
			); // set ID
		}

		return;
	}
	
	// sidebar widgets settings
	// $this->update_sidebarWidgetSettings( $fileContents['sidebar_settings'] );
	private function update_sidebarWidgetSettings ( $sidebarWidgetSettings ) {
		// overwrite sidebars_widgets
		update_option ( 'sidebars_widgets',$sidebarWidgetSettings['sidebars_widgets'] );
		
		// overwrite sidebars_widgets_options
		foreach ( $sidebarWidgetSettings['sidebars_widgets_options'] as $key => $value ) :
			delete_option ( $key );
			update_option ( $key, $value );
		endforeach;

		return;
	}
		
	// foundry settings.  added v.3.1.3 on 24 Jul 2013
	// $this->update_foundrySettings( $fileContents['foundry_settings'] );
	private function update_foundrySettings ( $foundrySettings ) {
		foreach ($foundrySettings as $key => $value):
			update_option($key , $value);
		endforeach;
		
		return;
	}
	
	private function returnTranslatedID ($originalID, $translationTable) {
		return (array_key_exists($originalID, $translationTable)) ? $translationTable[$originalID] : 0 ;
	}
	
}

/*
	written by Shu Miyao July 2013.
*/