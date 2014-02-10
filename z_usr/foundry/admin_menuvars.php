<?php
//Version : 2013-12-10_19-30-17 Updated by farid

//support menu array
$supportMenu=array (
  0 => 
  array (
    'title' => 'Documentation',
    'url' => 'http://demo.udthemes.com/cartel/wordpress/documentation/',
  ),
  1 => 
  array (
    'title' => 'Support Forum',
    'url' => 'http://support.udthemes.com',
  ),
  2 => 
  array (
    'title' => 'Video Tutorials',
    'url' => 'http://www.youtube.com/user/UDTHEMES/',
  ),
  3 => 
  array (
    'title' => 'UDTHEMES Website',
    'url' => 'http://udthemes.com',
  ),
);

// menu array
$menuArray=array (
  0 => 
  array (
    'root' => 'Welcome',
    'subnode' => 
    array (
    ),
    'icon' => 'welcome',
    'type' => 'url',
    'helptext' => 'Welcome to the Foundry Theme Options Panel. This theme panel gives you control over key aspects of your theme.',
    'defaultvalue' => 'z_admin/foundry/admin_welcome.php',
  ),
  1 => 
  array (
    'root' => 'General',
    'subnode' => 
    array (
      0 => 
      array (
        0 => 'General',
        1 => 
        array (
          'settingitem' => 'Front Page Layout',
          'id' => 'udt_cartel_front_page_layout',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Select the layout you would like to use for the front page. &lt;strong&gt;Note:&lt;/strong&gt; Only applicable if Front page displays is set to a static page under Settings -&gt; Reading.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;portfolio-grid&quot;, &quot;label&quot;:&quot;With Portfolio Grid&quot; }, { &quot;value&quot;:&quot;no-portfolio&quot;, &quot;label&quot;:&quot;Without Portfolio&quot; } ], &quot;default&quot;:&quot;portfolio-grid&quot; }',
        ),
        2 => 
        array (
          'settingitem' => 'Display Portfolio Filter',
          'id' => 'udt_cartel_display_portfolio_filter',
          'type' => 'toggle_switch',
          'icon' => '',
          'helptext' => 'Whether to display the portfolio filter or not. &lt;strong&gt;Note:&lt;/strong&gt; The portfolio filter will only display if projects are assigned to categories.',
          'showsettinghelp' => 'Hide',
          'showtooltip' => false,
          'defaultvalue' => '0',
        ),
        3 => 
        array (
          'settingitem' => 'Blog Title',
          'id' => 'udt_cartel_blog_title',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'Title that appears above the blog index &amp; posts.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'Our Blog',
        ),
        4 => 
        array (
          'settingitem' => 'Blog Index Layout',
          'id' => 'udt_cartel_blog_index_layout',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Select the layout you would like to use for your blog index.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;regular&quot;, &quot;label&quot;:&quot;Regular&quot; }, { &quot;value&quot;:&quot;grid&quot;, &quot;label&quot;:&quot;Grid&quot; } ], &quot;default&quot;:&quot;regular&quot; }',
        ),
        5 => 
        array (
          'settingitem' => 'Scroll to top speed',
          'id' => 'udt_cartel_scroll_to_top_speed',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the speed for the Back to Top button.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;slow&quot;, &quot;label&quot;:&quot;Slow&quot; }, { &quot;value&quot;:&quot;normal&quot;, &quot;label&quot;:&quot;Normal&quot; }, { &quot;value&quot;:&quot;fast&quot;, &quot;label&quot;:&quot;Fast&quot; } ], &quot;default&quot;:&quot;normal&quot; }',
        ),
      ),
      1 => 
      array (
        0 => 'Contact Form',
        1 => 
        array (
          'settingitem' => 'Contact Form',
          'id' => 'udt_cartel_contact_form_note',
          'type' => 'html',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => '',
          'showtooltip' => false,
          'defaultvalue' => '&lt;p&gt;Colors for the contact form can be set under &lt;em&gt;Colors&lt;/em&gt; -&gt; &lt;em&gt;Forms&lt;/em&gt;.&lt;/p&gt;',
        ),
        2 => 
        array (
          'settingitem' => 'Title',
          'id' => 'udt_cartel_contact_form_title',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'The title to display above the contact form.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'Send us a message',
        ),
        3 => 
        array (
          'settingitem' => 'Message',
          'id' => 'udt_cartel_contact_form_message',
          'type' => 'textarea',
          'icon' => '',
          'helptext' => 'Some content to display above the contact form.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'Send us an e-mail and we will get back to you in 24 hours.',
        ),
        4 => 
        array (
          'settingitem' => 'Required Fields',
          'id' => 'udt_cartel_contact_form_required_fields_label',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'Message to display that * indicates a required field.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '* = required field',
        ),
        5 => 
        array (
          'settingitem' => 'Required Fields on Focus',
          'id' => 'udt_cartel_contact_form_required_fields_label_ajax',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'Message to display when a required field is in focus.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'This is a required field.',
        ),
        6 => 
        array (
          'settingitem' => 'Success Message',
          'id' => 'udt_cartel_contact_form_success_message',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'The message to display when the contact form has successfully been submitted.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'Thanks, we got your mail and will get back to you in 24h!',
        ),
        7 => 
        array (
          'settingitem' => 'Invalid E-mail Message',
          'id' => 'udt_cartel_contact_form_email_warning',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'The message to display when the contact form is submitted with an invalid e-mail address.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'Please enter a valid e-mail address and try again.',
        ),
        8 => 
        array (
          'settingitem' => 'Warning Message',
          'id' => 'udt_cartel_contact_form_warning',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'The message to display when the contact form is submitted with errors.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'Please verify fields and try again.',
        ),
        9 => 
        array (
          'settingitem' => 'Error Message',
          'id' => 'udt_cartel_contact_form_error',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'The message to display when the contact form is submitted but something technical went wrong.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'There was an error sending your email. Please try again later.',
        ),
        10 => 
        array (
          'settingitem' => 'Enable Honeypot',
          'id' => 'udt_cartel_honeypot_toggle',
          'type' => 'toggle_switch',
          'icon' => '',
          'helptext' => 'Enable/disable Honeypot in the contact form. &lt;br&gt;&lt;strong&gt;Note:&lt;/strong&gt; The Honeypot will help prevent spam.',
          'showsettinghelp' => 'Hide',
          'showtooltip' => false,
          'defaultvalue' => '1',
        ),
      ),
      2 => 
      array (
        0 => 'Social Networks',
        1 => 
        array (
          'settingitem' => 'Social Network Links',
          'id' => 'udt_cartel_sns_link_note',
          'type' => 'html',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => '',
          'showtooltip' => false,
          'defaultvalue' => '&lt;p&gt;Add links to your accounts on various social networks. These links will appear in the footer throughout the site.&lt;/p&gt;',
        ),
        2 => 
        array (
          'settingitem' => 'Social Network Link 1',
          'id' => 'udt_cartel_sns_network_1',
          'type' => 'group',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => '',
          'showtooltip' => false,
          'defaultvalue' => 'Link to your account on a social network.',
        ),
        3 => 
        array (
          'settingitem' => 'Type',
          'id' => 'udt_cartel_sns_type_1',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Select network',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;0&quot;, &quot;label&quot;:&quot;Select Network&quot; }, { &quot;value&quot;:&quot;behance&quot;, &quot;label&quot;:&quot;Behance&quot; }, { &quot;value&quot;:&quot;deviantart&quot;, &quot;label&quot;:&quot;DeviantArt&quot; }, { &quot;value&quot;:&quot;dribbble&quot;, &quot;label&quot;:&quot;Dribbble&quot; }, { &quot;value&quot;:&quot;facebook&quot;, &quot;label&quot;:&quot;Facebook&quot; }, { &quot;value&quot;:&quot;flickr&quot;, &quot;label&quot;:&quot;Flickr&quot; }, { &quot;value&quot;:&quot;forrst&quot;, &quot;label&quot;:&quot;Forrst&quot; }, { &quot;value&quot;:&quot;googleplus&quot;, &quot;label&quot;:&quot;Google+&quot; }, { &quot;value&quot;:&quot;instagram&quot;, &quot;label&quot;:&quot;Instagram&quot; }, { &quot;value&quot;:&quot;linkedin&quot;, &quot;label&quot;:&quot;LinkedIn&quot; }, { &quot;value&quot;:&quot;myspace&quot;, &quot;label&quot;:&quot;Myspace&quot; }, { &quot;value&quot;:&quot;pinterest&quot;, &quot;label&quot;:&quot;Pinterest&quot; }, { &quot;value&quot;:&quot;skype&quot;, &quot;label&quot;:&quot;Skype&quot; }, { &quot;value&quot;:&quot;soundcloud&quot;, &quot;label&quot;:&quot;SoundCloud&quot; }, { &quot;value&quot;:&quot;tumblr&quot;, &quot;label&quot;:&quot;Tumblr&quot; }, { &quot;value&quot;:&quot;twitter&quot;, &quot;label&quot;:&quot;Twitter&quot; }, { &quot;value&quot;:&quot;vimeo&quot;, &quot;label&quot;:&quot;Vimeo&quot; }, { &quot;value&quot;:&quot;vine&quot;, &quot;label&quot;:&quot;Vine&quot; }, { &quot;value&quot;:&quot;rss&quot;, &quot;label&quot;:&quot;RSS&quot; }, { &quot;value&quot;:&quot;youtube&quot;, &quot;label&quot;:&quot;YouTube&quot; } ], &quot;default&quot;:&quot;0&quot; }',
        ),
        4 => 
        array (
          'settingitem' => 'URL',
          'id' => 'udt_cartel_sns_url_1',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'Enter your social network link.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '',
        ),
        5 => 
        array (
          'settingitem' => 'Social Network Link 2',
          'id' => 'udt_cartel_sns_network_2',
          'type' => 'group',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => '',
          'showtooltip' => false,
          'defaultvalue' => 'Link to your account on a social network.',
        ),
        6 => 
        array (
          'settingitem' => 'Type',
          'id' => 'udt_cartel_sns_type_2',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Select network',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;0&quot;, &quot;label&quot;:&quot;Select Network&quot; }, { &quot;value&quot;:&quot;behance&quot;, &quot;label&quot;:&quot;Behance&quot; }, { &quot;value&quot;:&quot;deviantart&quot;, &quot;label&quot;:&quot;DeviantArt&quot; }, { &quot;value&quot;:&quot;dribbble&quot;, &quot;label&quot;:&quot;Dribbble&quot; }, { &quot;value&quot;:&quot;facebook&quot;, &quot;label&quot;:&quot;Facebook&quot; }, { &quot;value&quot;:&quot;flickr&quot;, &quot;label&quot;:&quot;Flickr&quot; }, { &quot;value&quot;:&quot;forrst&quot;, &quot;label&quot;:&quot;Forrst&quot; }, { &quot;value&quot;:&quot;googleplus&quot;, &quot;label&quot;:&quot;Google+&quot; }, { &quot;value&quot;:&quot;instagram&quot;, &quot;label&quot;:&quot;Instagram&quot; }, { &quot;value&quot;:&quot;linkedin&quot;, &quot;label&quot;:&quot;LinkedIn&quot; }, { &quot;value&quot;:&quot;myspace&quot;, &quot;label&quot;:&quot;Myspace&quot; }, { &quot;value&quot;:&quot;pinterest&quot;, &quot;label&quot;:&quot;Pinterest&quot; }, { &quot;value&quot;:&quot;skype&quot;, &quot;label&quot;:&quot;Skype&quot; }, { &quot;value&quot;:&quot;soundcloud&quot;, &quot;label&quot;:&quot;SoundCloud&quot; }, { &quot;value&quot;:&quot;tumblr&quot;, &quot;label&quot;:&quot;Tumblr&quot; }, { &quot;value&quot;:&quot;twitter&quot;, &quot;label&quot;:&quot;Twitter&quot; }, { &quot;value&quot;:&quot;vimeo&quot;, &quot;label&quot;:&quot;Vimeo&quot; }, { &quot;value&quot;:&quot;vine&quot;, &quot;label&quot;:&quot;Vine&quot; }, { &quot;value&quot;:&quot;rss&quot;, &quot;label&quot;:&quot;RSS&quot; }, { &quot;value&quot;:&quot;youtube&quot;, &quot;label&quot;:&quot;YouTube&quot; } ], &quot;default&quot;:&quot;0&quot; }',
        ),
        7 => 
        array (
          'settingitem' => 'URL',
          'id' => 'udt_cartel_sns_url_2',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'Enter your social network link.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '',
        ),
        8 => 
        array (
          'settingitem' => 'Social Network Link 3',
          'id' => 'udt_cartel_sns_network_3',
          'type' => 'group',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => '',
          'showtooltip' => false,
          'defaultvalue' => 'Link to your account on a social network.',
        ),
        9 => 
        array (
          'settingitem' => 'Type',
          'id' => 'udt_cartel_sns_type_3',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Select network',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;0&quot;, &quot;label&quot;:&quot;Select Network&quot; }, { &quot;value&quot;:&quot;behance&quot;, &quot;label&quot;:&quot;Behance&quot; }, { &quot;value&quot;:&quot;deviantart&quot;, &quot;label&quot;:&quot;DeviantArt&quot; }, { &quot;value&quot;:&quot;dribbble&quot;, &quot;label&quot;:&quot;Dribbble&quot; }, { &quot;value&quot;:&quot;facebook&quot;, &quot;label&quot;:&quot;Facebook&quot; }, { &quot;value&quot;:&quot;flickr&quot;, &quot;label&quot;:&quot;Flickr&quot; }, { &quot;value&quot;:&quot;forrst&quot;, &quot;label&quot;:&quot;Forrst&quot; }, { &quot;value&quot;:&quot;googleplus&quot;, &quot;label&quot;:&quot;Google+&quot; }, { &quot;value&quot;:&quot;instagram&quot;, &quot;label&quot;:&quot;Instagram&quot; }, { &quot;value&quot;:&quot;linkedin&quot;, &quot;label&quot;:&quot;LinkedIn&quot; }, { &quot;value&quot;:&quot;myspace&quot;, &quot;label&quot;:&quot;Myspace&quot; }, { &quot;value&quot;:&quot;pinterest&quot;, &quot;label&quot;:&quot;Pinterest&quot; }, { &quot;value&quot;:&quot;skype&quot;, &quot;label&quot;:&quot;Skype&quot; }, { &quot;value&quot;:&quot;soundcloud&quot;, &quot;label&quot;:&quot;SoundCloud&quot; }, { &quot;value&quot;:&quot;tumblr&quot;, &quot;label&quot;:&quot;Tumblr&quot; }, { &quot;value&quot;:&quot;twitter&quot;, &quot;label&quot;:&quot;Twitter&quot; }, { &quot;value&quot;:&quot;vimeo&quot;, &quot;label&quot;:&quot;Vimeo&quot; }, { &quot;value&quot;:&quot;vine&quot;, &quot;label&quot;:&quot;Vine&quot; }, { &quot;value&quot;:&quot;rss&quot;, &quot;label&quot;:&quot;RSS&quot; }, { &quot;value&quot;:&quot;youtube&quot;, &quot;label&quot;:&quot;YouTube&quot; } ], &quot;default&quot;:&quot;0&quot; }',
        ),
        10 => 
        array (
          'settingitem' => 'URL',
          'id' => 'udt_cartel_sns_url_3',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'Enter your social network link.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '',
        ),
        11 => 
        array (
          'settingitem' => 'Social Network Link 4',
          'id' => 'udt_cartel_sns_network_4',
          'type' => 'group',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => '',
          'showtooltip' => false,
          'defaultvalue' => 'Link to your account on a social network.',
        ),
        12 => 
        array (
          'settingitem' => 'Type',
          'id' => 'udt_cartel_sns_type_4',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Select network',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;0&quot;, &quot;label&quot;:&quot;Select Network&quot; }, { &quot;value&quot;:&quot;behance&quot;, &quot;label&quot;:&quot;Behance&quot; }, { &quot;value&quot;:&quot;deviantart&quot;, &quot;label&quot;:&quot;DeviantArt&quot; }, { &quot;value&quot;:&quot;dribbble&quot;, &quot;label&quot;:&quot;Dribbble&quot; }, { &quot;value&quot;:&quot;facebook&quot;, &quot;label&quot;:&quot;Facebook&quot; }, { &quot;value&quot;:&quot;flickr&quot;, &quot;label&quot;:&quot;Flickr&quot; }, { &quot;value&quot;:&quot;forrst&quot;, &quot;label&quot;:&quot;Forrst&quot; }, { &quot;value&quot;:&quot;googleplus&quot;, &quot;label&quot;:&quot;Google+&quot; }, { &quot;value&quot;:&quot;instagram&quot;, &quot;label&quot;:&quot;Instagram&quot; }, { &quot;value&quot;:&quot;linkedin&quot;, &quot;label&quot;:&quot;LinkedIn&quot; }, { &quot;value&quot;:&quot;myspace&quot;, &quot;label&quot;:&quot;Myspace&quot; }, { &quot;value&quot;:&quot;pinterest&quot;, &quot;label&quot;:&quot;Pinterest&quot; }, { &quot;value&quot;:&quot;skype&quot;, &quot;label&quot;:&quot;Skype&quot; }, { &quot;value&quot;:&quot;soundcloud&quot;, &quot;label&quot;:&quot;SoundCloud&quot; }, { &quot;value&quot;:&quot;tumblr&quot;, &quot;label&quot;:&quot;Tumblr&quot; }, { &quot;value&quot;:&quot;twitter&quot;, &quot;label&quot;:&quot;Twitter&quot; }, { &quot;value&quot;:&quot;vimeo&quot;, &quot;label&quot;:&quot;Vimeo&quot; }, { &quot;value&quot;:&quot;vine&quot;, &quot;label&quot;:&quot;Vine&quot; }, { &quot;value&quot;:&quot;rss&quot;, &quot;label&quot;:&quot;RSS&quot; }, { &quot;value&quot;:&quot;youtube&quot;, &quot;label&quot;:&quot;YouTube&quot; } ], &quot;default&quot;:&quot;0&quot; }',
        ),
        13 => 
        array (
          'settingitem' => 'URL',
          'id' => 'udt_cartel_sns_url_4',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'Enter your social network link.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '',
        ),
        14 => 
        array (
          'settingitem' => 'Social Network Link 5',
          'id' => 'udt_cartel_sns_network_5',
          'type' => 'group',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => '',
          'showtooltip' => false,
          'defaultvalue' => 'Link to your account on a social network.',
        ),
        15 => 
        array (
          'settingitem' => 'Type',
          'id' => 'udt_cartel_sns_type_5',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Select network',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;0&quot;, &quot;label&quot;:&quot;Select Network&quot; }, { &quot;value&quot;:&quot;behance&quot;, &quot;label&quot;:&quot;Behance&quot; }, { &quot;value&quot;:&quot;deviantart&quot;, &quot;label&quot;:&quot;DeviantArt&quot; }, { &quot;value&quot;:&quot;dribbble&quot;, &quot;label&quot;:&quot;Dribbble&quot; }, { &quot;value&quot;:&quot;facebook&quot;, &quot;label&quot;:&quot;Facebook&quot; }, { &quot;value&quot;:&quot;flickr&quot;, &quot;label&quot;:&quot;Flickr&quot; }, { &quot;value&quot;:&quot;forrst&quot;, &quot;label&quot;:&quot;Forrst&quot; }, { &quot;value&quot;:&quot;googleplus&quot;, &quot;label&quot;:&quot;Google+&quot; }, { &quot;value&quot;:&quot;instagram&quot;, &quot;label&quot;:&quot;Instagram&quot; }, { &quot;value&quot;:&quot;linkedin&quot;, &quot;label&quot;:&quot;LinkedIn&quot; }, { &quot;value&quot;:&quot;myspace&quot;, &quot;label&quot;:&quot;Myspace&quot; }, { &quot;value&quot;:&quot;pinterest&quot;, &quot;label&quot;:&quot;Pinterest&quot; }, { &quot;value&quot;:&quot;skype&quot;, &quot;label&quot;:&quot;Skype&quot; }, { &quot;value&quot;:&quot;soundcloud&quot;, &quot;label&quot;:&quot;SoundCloud&quot; }, { &quot;value&quot;:&quot;tumblr&quot;, &quot;label&quot;:&quot;Tumblr&quot; }, { &quot;value&quot;:&quot;twitter&quot;, &quot;label&quot;:&quot;Twitter&quot; }, { &quot;value&quot;:&quot;vimeo&quot;, &quot;label&quot;:&quot;Vimeo&quot; }, { &quot;value&quot;:&quot;vine&quot;, &quot;label&quot;:&quot;Vine&quot; }, { &quot;value&quot;:&quot;rss&quot;, &quot;label&quot;:&quot;RSS&quot; }, { &quot;value&quot;:&quot;youtube&quot;, &quot;label&quot;:&quot;YouTube&quot; } ], &quot;default&quot;:&quot;0&quot; }',
        ),
        16 => 
        array (
          'settingitem' => 'URL',
          'id' => 'udt_cartel_sns_url_5',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'Enter your social network link.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '',
        ),
        17 => 
        array (
          'settingitem' => 'Social Network Link 6',
          'id' => 'udt_cartel_sns_network_6',
          'type' => 'group',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => '',
          'showtooltip' => false,
          'defaultvalue' => 'Link to your account on a social network.',
        ),
        18 => 
        array (
          'settingitem' => 'Type',
          'id' => 'udt_cartel_sns_type_6',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Select network',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;0&quot;, &quot;label&quot;:&quot;Select Network&quot; }, { &quot;value&quot;:&quot;behance&quot;, &quot;label&quot;:&quot;Behance&quot; }, { &quot;value&quot;:&quot;deviantart&quot;, &quot;label&quot;:&quot;DeviantArt&quot; }, { &quot;value&quot;:&quot;dribbble&quot;, &quot;label&quot;:&quot;Dribbble&quot; }, { &quot;value&quot;:&quot;facebook&quot;, &quot;label&quot;:&quot;Facebook&quot; }, { &quot;value&quot;:&quot;flickr&quot;, &quot;label&quot;:&quot;Flickr&quot; }, { &quot;value&quot;:&quot;forrst&quot;, &quot;label&quot;:&quot;Forrst&quot; }, { &quot;value&quot;:&quot;googleplus&quot;, &quot;label&quot;:&quot;Google+&quot; }, { &quot;value&quot;:&quot;instagram&quot;, &quot;label&quot;:&quot;Instagram&quot; }, { &quot;value&quot;:&quot;linkedin&quot;, &quot;label&quot;:&quot;LinkedIn&quot; }, { &quot;value&quot;:&quot;myspace&quot;, &quot;label&quot;:&quot;Myspace&quot; }, { &quot;value&quot;:&quot;pinterest&quot;, &quot;label&quot;:&quot;Pinterest&quot; }, { &quot;value&quot;:&quot;skype&quot;, &quot;label&quot;:&quot;Skype&quot; }, { &quot;value&quot;:&quot;soundcloud&quot;, &quot;label&quot;:&quot;SoundCloud&quot; }, { &quot;value&quot;:&quot;tumblr&quot;, &quot;label&quot;:&quot;Tumblr&quot; }, { &quot;value&quot;:&quot;twitter&quot;, &quot;label&quot;:&quot;Twitter&quot; }, { &quot;value&quot;:&quot;vimeo&quot;, &quot;label&quot;:&quot;Vimeo&quot; }, { &quot;value&quot;:&quot;vine&quot;, &quot;label&quot;:&quot;Vine&quot; }, { &quot;value&quot;:&quot;rss&quot;, &quot;label&quot;:&quot;RSS&quot; }, { &quot;value&quot;:&quot;youtube&quot;, &quot;label&quot;:&quot;YouTube&quot; } ], &quot;default&quot;:&quot;0&quot; }',
        ),
        19 => 
        array (
          'settingitem' => 'URL',
          'id' => 'udt_cartel_sns_url_6',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'Enter your social network link.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '',
        ),
        20 => 
        array (
          'settingitem' => '',
          'id' => 'udt_cartel_',
          'type' => 'group_close',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => '',
          'showtooltip' => false,
          'defaultvalue' => '',
        ),
      ),
      3 => 
      array (
        0 => 'Footer',
        1 => 
        array (
          'settingitem' => 'Copyright',
          'id' => 'udt_cartel_footer_copyright',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'Note: Use &amp;amp;copy; to get the copyright symbol.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '&amp;copy;&lt;a href=&quot;http://udthemes.com&quot; title=&quot;Premium WordPress Themes - UDTHEMES&quot;&gt;UDTHEMES&lt;/a&gt;. All Rights Reserved.',
        ),
      ),
      4 => 
      array (
        0 => 'SEO',
        1 => 
        array (
          'settingitem' => 'Google Tracking ID',
          'id' => 'udt_cartel_google_tracking_id',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'Enter your Google Analytics Tracking ID here.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '',
        ),
      ),
    ),
    'icon' => 'general',
    'type' => '',
    'helptext' => 'General site parameters, contact form settings, social networks, footer content and SEO.',
    'defaultvalue' => '',
  ),
  2 => 
  array (
    'root' => 'Logos',
    'subnode' => 
    array (
      0 => 
      array (
        0 => 'Logos',
        1 => 
        array (
          'settingitem' => 'Header Logo',
          'id' => 'udt_cartel_site_logo',
          'type' => 'input_upload',
          'icon' => '',
          'helptext' => 'Upload your main logo.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'logo.png',
        ),
        2 => 
        array (
          'settingitem' => 'Rollover Logo',
          'id' => 'udt_cartel_rollover_logo',
          'type' => 'input_upload',
          'icon' => '',
          'helptext' => 'Upload a logo that appears when a user rolls over e.g. a lighbox thumbnail.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'rollover_logo.png',
        ),
        3 => 
        array (
          'settingitem' => 'Favicon',
          'id' => 'udt_cartel_favicon',
          'type' => 'input_upload',
          'icon' => '',
          'helptext' => 'Add a custom favicon.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'favicon.png',
        ),
      ),
    ),
    'icon' => 'logos',
    'type' => '',
    'helptext' => 'Upload your logos.',
    'defaultvalue' => '',
  ),
  3 => 
  array (
    'root' => 'Colors',
    'subnode' => 
    array (
      0 => 
      array (
        0 => 'General',
        1 => 
        array (
          'settingitem' => 'Background Color',
          'id' => 'udt_cartel_background_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color you like to use for your site.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ffffff',
        ),
        2 => 
        array (
          'settingitem' => 'Title Color',
          'id' => 'udt_cartel_title_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the color for titles.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '000000',
        ),
        3 => 
        array (
          'settingitem' => 'Text Color',
          'id' => 'udt_cartel_text_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the color for text.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '999999',
        ),
        4 => 
        array (
          'settingitem' => 'Link Color',
          'id' => 'udt_cartel_link_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the color for links.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ff0000',
        ),
        5 => 
        array (
          'settingitem' => 'Link Hover Color',
          'id' => 'udt_cartel_link_hover_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the hover color for links.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ff0000',
        ),
        6 => 
        array (
          'settingitem' => 'Sidebar Title Color',
          'id' => 'udt_cartel_sidebar_title_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the color for titles in sidebars.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '999999',
        ),
        7 => 
        array (
          'settingitem' => 'Sidebar Link Color',
          'id' => 'udt_cartel_sidebar_link_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the color for links in sidebars.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '333333',
        ),
        8 => 
        array (
          'settingitem' => 'Sidebar Link Hover Color',
          'id' => 'udt_cartel_sidebar_link_hover_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the hover color for links in sidebars.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ff0000',
        ),
        9 => 
        array (
          'settingitem' => 'Use Footer Background Color',
          'id' => 'udt_cartel_footer_background_color_on_off',
          'type' => 'toggle_switch',
          'icon' => '',
          'helptext' => 'Whether to use a background color on the footer or not.',
          'showsettinghelp' => 'Hide',
          'showtooltip' => false,
          'defaultvalue' => '0',
        ),
        10 => 
        array (
          'settingitem' => 'Footer Background Color',
          'id' => 'udt_cartel_footer_background_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color of the footer. &lt;strong&gt;Note:&lt;/strong&gt; Only applicable if &quot;Use Footer Background Color&quot; is switched on.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ffffff',
        ),
        11 => 
        array (
          'settingitem' => 'Footer Text Color',
          'id' => 'udt_cartel_footer_text_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the color for text in the footer.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '999999',
        ),
        12 => 
        array (
          'settingitem' => 'Footer Link Color',
          'id' => 'udt_cartel_footer_link_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the color for links in the footer.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ff0000',
        ),
        13 => 
        array (
          'settingitem' => 'Footer Link Hover Color',
          'id' => 'udt_cartel_footer_link_hover_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the hover color for links in the footer.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ff0000',
        ),
        14 => 
        array (
          'settingitem' => 'Footer Social Network Link Color',
          'id' => 'udt_cartel_footer_social_link_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the color of social network links in the footer.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '999999',
        ),
        15 => 
        array (
          'settingitem' => 'Footer Social Network Link Hover Color',
          'id' => 'udt_cartel_footer_social_link_hover_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the hover color of social network links in the footer.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '000000',
        ),
        16 => 
        array (
          'settingitem' => 'Footer Social Network Link Icon Color',
          'id' => 'udt_cartel_social_link_icon_color',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Choose which color icons to use for the social network links.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;black&quot;, &quot;label&quot;:&quot;Black&quot; }, { &quot;value&quot;:&quot;white&quot;, &quot;label&quot;:&quot;White&quot; } ], &quot;default&quot;:&quot;black&quot; }',
        ),
        17 => 
        array (
          'settingitem' => 'Tag Cloud Link Background Color',
          'id' => 'udt_cartel_tag_cloud_link_background_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color for the tag cloud links.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'f6f6f6',
        ),
        18 => 
        array (
          'settingitem' => 'Tag Cloud Link Text Color',
          'id' => 'udt_cartel_tag_cloud_link_text_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the text color for the tag cloud links.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '999999',
        ),
        19 => 
        array (
          'settingitem' => 'Tag Cloud Link Hover Background Color',
          'id' => 'udt_cartel_tag_cloud_link_hover_background_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the hover background color for the tag cloud links.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '000000',
        ),
        20 => 
        array (
          'settingitem' => 'Tag Cloud Link Hover Text Color',
          'id' => 'udt_cartel_tag_cloud_link_hover_text_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the hover text color for the tag cloud links.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ffffff',
        ),
        21 => 
        array (
          'settingitem' => 'Calendar Date Background Color',
          'id' => 'udt_cartel_calendar_date_background_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color of dates in the calendar.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'f6f6f6',
        ),
        22 => 
        array (
          'settingitem' => 'Calendar Date Text Color',
          'id' => 'udt_cartel_calendar_date_text_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the text color of dates in the calendar.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '999999',
        ),
        23 => 
        array (
          'settingitem' => 'Calendar Date Link Color',
          'id' => 'udt_cartel_calendar_date_link_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the link color of dates in the calendar.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ff0000',
        ),
        24 => 
        array (
          'settingitem' => 'Calendar Date Hover Background Color',
          'id' => 'udt_cartel_calendar_date_hover_background_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the hover background color of dates in the calendar.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '000000',
        ),
        25 => 
        array (
          'settingitem' => 'Calendar Date Hover Text Color',
          'id' => 'udt_cartel_calendar_date_hover_text_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the hover text color of dates in the calendar.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ffffff',
        ),
        26 => 
        array (
          'settingitem' => 'Calendar Date Hover Link Color',
          'id' => 'udt_cartel_calendar_date_hover_link_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the hover link color of dates in the calendar.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ff0000',
        ),
        27 => 
        array (
          'settingitem' => 'Sticky Post Background Color',
          'id' => 'udt_cartel_sticky_post_background_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color of Sticky Posts.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'f6f6f6',
        ),
        28 => 
        array (
          'settingitem' => 'Post Date Background Color',
          'id' => 'udt_cartel_post_date_background_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color of the publish date that appears on featured images in the blog.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ffffff',
        ),
        29 => 
        array (
          'settingitem' => 'Post Date Text Color',
          'id' => 'udt_cartel_post_date_text_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the text color of the publish date that appears on featured images in the blog.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '000000',
        ),
        30 => 
        array (
          'settingitem' => 'Text Selection Color',
          'id' => 'udt_cartel_text_selection_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the text selection color.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ff0000',
        ),
      ),
      1 => 
      array (
        0 => 'Menu',
        1 => 
        array (
          'settingitem' => 'Menu Link Color',
          'id' => 'udt_cartel_menu_link_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the color of links in the site&#039;s main navigation.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '999999',
        ),
        2 => 
        array (
          'settingitem' => 'Menu Link Hover Color',
          'id' => 'udt_cartel_menu_link_hover_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the hover color of links in the site&#039;s main navigation.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ff0000',
        ),
        3 => 
        array (
          'settingitem' => 'Active Menu Link Color',
          'id' => 'udt_cartel_active_menu_link_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the color of active links in the site&#039;s main navigation.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '000000',
        ),
        4 => 
        array (
          'settingitem' => 'Sub Menu Background Color',
          'id' => 'udt_cartel_sub_menu_background_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color of the sub menu.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '000000',
        ),
        5 => 
        array (
          'settingitem' => 'Sub Menu Background Opacity',
          'id' => 'udt_cartel_sub_menu_background_opacity',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the background opacity for the sub menu.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;0.1&quot;, &quot;label&quot;:&quot;10%&quot; }, { &quot;value&quot;:&quot;0.2&quot;, &quot;label&quot;:&quot;20%&quot; }, { &quot;value&quot;:&quot;0.3&quot;, &quot;label&quot;:&quot;30%&quot; }, { &quot;value&quot;:&quot;0.4&quot;, &quot;label&quot;:&quot;40%&quot; }, { &quot;value&quot;:&quot;0.5&quot;, &quot;label&quot;:&quot;50%&quot; }, { &quot;value&quot;:&quot;0.6&quot;, &quot;label&quot;:&quot;60%&quot; }, { &quot;value&quot;:&quot;0.7&quot;, &quot;label&quot;:&quot;70%&quot; }, { &quot;value&quot;:&quot;0.8&quot;, &quot;label&quot;:&quot;80%&quot; }, { &quot;value&quot;:&quot;0.9&quot;, &quot;label&quot;:&quot;90%&quot; }, { &quot;value&quot;:&quot;1&quot;, &quot;label&quot;:&quot;100%&quot; } ], &quot;default&quot;:&quot;0.8&quot; }',
        ),
        6 => 
        array (
          'settingitem' => 'Sub Menu Link Color',
          'id' => 'udt_cartel_sub_menu_link_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the color of links in the sub menu.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '999999',
        ),
        7 => 
        array (
          'settingitem' => 'Sub Menu Link Hover Color',
          'id' => 'udt_cartel_sub_menu_link_hover_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the hover color for the sub menu links.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ffffff',
        ),
        8 => 
        array (
          'settingitem' => 'Sub Menu Active Link Color',
          'id' => 'udt_cartel_sub_menu_active_link_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the font color for the active link in the sub menu.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ffffff',
        ),
      ),
      2 => 
      array (
        0 => 'Forms',
        1 => 
        array (
          'settingitem' => 'Form Elements',
          'id' => 'udt_cartel_form_elements_note',
          'type' => 'html',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => '',
          'showtooltip' => false,
          'defaultvalue' => '&lt;p&gt;The following settings apply to the Contact form, Comments form and Search form.&lt;/p&gt;',
        ),
        2 => 
        array (
          'settingitem' => 'Form Input Background Color',
          'id' => 'udt_cartel_form_input_background_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color of form input fields.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ffffff',
        ),
        3 => 
        array (
          'settingitem' => 'Form Input Border Color',
          'id' => 'udt_cartel_form_input_border_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the border color of form input fields.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'e6e6e6',
        ),
        4 => 
        array (
          'settingitem' => 'Form Input Text Color',
          'id' => 'udt_cartel_form_input_text_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the text color of form input fields.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '999999',
        ),
        5 => 
        array (
          'settingitem' => 'Form Input Hover Background Color',
          'id' => 'udt_cartel_form_input_hover_background_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the hover background color of form input fields.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'e6e6e6',
        ),
        6 => 
        array (
          'settingitem' => 'Form Input Hover Border Color',
          'id' => 'udt_cartel_form_input_hover_border_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the hover border color of form input fields.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'e6e6e6',
        ),
        7 => 
        array (
          'settingitem' => 'Form Input Hover Text Color',
          'id' => 'udt_cartel_form_input_hover_text_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the hover text color of form input fields.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '666666',
        ),
        8 => 
        array (
          'settingitem' => 'Form Input Active Background Color',
          'id' => 'udt_cartel_form_input_active_background_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color of active form input fields.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ffffff',
        ),
        9 => 
        array (
          'settingitem' => 'Form Input Active Border Color',
          'id' => 'udt_cartel_form_input_active_border_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the border color of active form input fields.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'dddddd',
        ),
        10 => 
        array (
          'settingitem' => 'Form Input Active Text Color',
          'id' => 'udt_cartel_form_input_active_text_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the text color of active form input fields.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '999999',
        ),
        11 => 
        array (
          'settingitem' => 'Default Button Background Color',
          'id' => 'udt_cartel_default_button_background_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the default background color for buttons.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ff0000',
        ),
        12 => 
        array (
          'settingitem' => 'Default Button Text Color',
          'id' => 'udt_cartel_default_button_text_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the default font color for buttons.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ffffff',
        ),
        13 => 
        array (
          'settingitem' => 'Error Text Color',
          'id' => 'udt_cartel_error_text_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the color for error texts and outlines.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ff0000',
        ),
        14 => 
        array (
          'settingitem' => 'Loading GIF',
          'id' => 'udt_cartel_contact_loading_gif',
          'type' => 'input_upload',
          'icon' => '',
          'helptext' => 'Upload a loading GIF animation for the contact form.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'contact_loading.gif',
        ),
      ),
      3 => 
      array (
        0 => 'Shortcodes',
        1 => 
        array (
          'settingitem' => 'Accordions &amp; Tabs: Label Background Color',
          'id' => 'udt_cartel_accordions_tabs_label_background_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the label background and border colors for Accordions and Tabs.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'dddddd',
        ),
        2 => 
        array (
          'settingitem' => 'Accordions &amp; Tabs: Label Text Color',
          'id' => 'udt_cartel_accordions_tabs_label_text_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the label text color for Accordions and Tabs.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '999999',
        ),
        3 => 
        array (
          'settingitem' => 'Accordions &amp; Tabs: Active Label Background Color',
          'id' => 'udt_cartel_accordions_tabs_active_label_background_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the active label background color for Accordions and Tabs.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '666666',
        ),
        4 => 
        array (
          'settingitem' => 'Accordions &amp; Tabs: Active Label Text Color',
          'id' => 'udt_cartel_accordions_tabs_active_label_text_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the active label text color for Accordions and Tabs.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ffffff',
        ),
        5 => 
        array (
          'settingitem' => 'Accordions &amp; Tabs: Background Color',
          'id' => 'udt_cartel_accordions_tabs_background_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color for Accordions and Tabs.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'f9f9f9',
        ),
        6 => 
        array (
          'settingitem' => 'Blockquotes: Border Color for &quot;Default&quot;, &quot;Elegant&quot; &amp; &quot;Boxed&quot;',
          'id' => 'udt_cartel_blockquote_border_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the border color for &quot;Default&quot;, &quot;Elegant&quot; &amp; &quot;Boxed&quot; blockquotes.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'dddddd',
        ),
        7 => 
        array (
          'settingitem' => 'Blockquotes: Text Color for &quot;Default&quot;, &quot;Elegant&quot;, &quot;Boxed&quot; &amp; &quot;Overlayed&quot;',
          'id' => 'udt_cartel_blockquote_text_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the border color for &quot;Default&quot;, &quot;Elegant&quot;, &quot;Boxed&quot; and &quot;Overlayed&quot; blockquotes.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '666666',
        ),
        8 => 
        array (
          'settingitem' => 'Blockquotes: Background Color for &quot;Boxed Background&quot; &amp; &quot;Striped&quot;',
          'id' => 'udt_cartel_blockquote_boxed_bg_striped_background_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color for &quot;Boxed Background&quot; and &quot;Striped&quot; blockquotes.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'dddddd',
        ),
        9 => 
        array (
          'settingitem' => 'Blockquotes: Text Color for &quot;Boxed Background&quot; &amp; &quot;Striped&quot;',
          'id' => 'udt_cartel_blockquote_boxed_bg_striped_text_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the text color for &quot;Boxed Background&quot; and &quot;Striped&quot; blockquotes.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '666666',
        ),
        10 => 
        array (
          'settingitem' => 'Blockquotes: &quot;Elegant&quot; blockquote graphic',
          'id' => 'udt_cartel_blockquote_elegant_graphic',
          'type' => 'input_upload',
          'icon' => '',
          'helptext' => 'Upload a graphic for &quot;Elegant&quot; blockquotes.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'blockquote_elegant.png',
        ),
        11 => 
        array (
          'settingitem' => 'Blockquotes: &quot;Overlayed&quot; blockquote graphic',
          'id' => 'udt_cartel_blockquote_overlayed_graphic',
          'type' => 'input_upload',
          'icon' => '',
          'helptext' => 'Upload a graphic for &quot;Overlayed&quot; blockquotes.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'blockquote_overlayed.png',
        ),
        12 => 
        array (
          'settingitem' => 'Captions: Text Color',
          'id' => 'udt_cartel_caption_text_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the text color of &quot;Elegant&quot;, &quot;Single Border&quot;, and &quot;Impact&quot; captions.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ffffff',
        ),
        13 => 
        array (
          'settingitem' => 'Captions: Link Color',
          'id' => 'udt_cartel_caption_link_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the link color for &quot;Elegant&quot;, &quot;Single Border&quot;, and &quot;Impact&quot; captions.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ffffff',
        ),
        14 => 
        array (
          'settingitem' => 'Captions: Link Hover Color',
          'id' => 'udt_cartel_caption_link_hover_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the link hover color for &quot;Elegant&quot;, &quot;Single Border&quot;, and &quot;Impact&quot; captions.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ff0000',
        ),
        15 => 
        array (
          'settingitem' => 'Captions: &quot;Boxed&quot; &amp; &quot;Striped&quot; Background Color',
          'id' => 'udt_cartel_caption_boxed_striped_background_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color for &quot;Boxed&quot; and &quot;Striped&quot; captions.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '000000',
        ),
        16 => 
        array (
          'settingitem' => 'Captions: &quot;Boxed&quot; &amp; &quot;Striped&quot; Text Color',
          'id' => 'udt_cartel_caption_boxed_striped_text_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the text color for &quot;Boxed&quot; and &quot;Striped&quot; captions.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ffffff',
        ),
        17 => 
        array (
          'settingitem' => 'Captions: &quot;Boxed&quot; &amp; &quot;Striped&quot; Link Color',
          'id' => 'udt_cartel_caption_boxed_striped_link_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the link color for &quot;Boxed&quot; and &quot;Striped&quot; captions.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ffffff',
        ),
        18 => 
        array (
          'settingitem' => 'Captions: &quot;Boxed&quot; &amp; &quot;Striped&quot; Link Hover Color',
          'id' => 'udt_cartel_caption_boxed_striped_link_hover_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the link hover color for &quot;Boxed&quot; and &quot;Striped&quot; captions.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ff0000',
        ),
        19 => 
        array (
          'settingitem' => 'Charts: Bar Color',
          'id' => 'udt_cartel_chart_bar_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the bar color of charts.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ff0000',
        ),
        20 => 
        array (
          'settingitem' => 'Charts: Border Color',
          'id' => 'udt_cartel_chart_border_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the border color of charts.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ffffff',
        ),
        21 => 
        array (
          'settingitem' => 'Charts: Text Color',
          'id' => 'udt_cartel_chart_text_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the text color for charts.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ffffff',
        ),
        22 => 
        array (
          'settingitem' => 'Divider Color',
          'id' => 'udt_cartel_divider_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the color for dividers.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'e6e6e6',
        ),
        23 => 
        array (
          'settingitem' => 'Lightbox &amp; Thumbs: Rollover Color',
          'id' => 'udt_cartel_thumb_rollover_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the rollover color for lightbox thumbs and linked images.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ffffff',
        ),
        24 => 
        array (
          'settingitem' => 'Lightbox &amp; Thumbs: Rollover Opacity',
          'id' => 'udt_cartel_thumb_rollover_opacity',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the rollover opacity for lightbox thumbs and linked images. &lt;strong&gt;Note:&lt;/strong&gt; Setting opacity to 0 switches off the overlay.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;0&quot;, &quot;label&quot;:&quot;0%&quot; }, { &quot;value&quot;:&quot;0.1&quot;, &quot;label&quot;:&quot;10%&quot; }, { &quot;value&quot;:&quot;0.2&quot;, &quot;label&quot;:&quot;20%&quot; }, { &quot;value&quot;:&quot;0.3&quot;, &quot;label&quot;:&quot;30%&quot; }, { &quot;value&quot;:&quot;0.4&quot;, &quot;label&quot;:&quot;40%&quot; }, { &quot;value&quot;:&quot;0.5&quot;, &quot;label&quot;:&quot;50%&quot; }, { &quot;value&quot;:&quot;0.6&quot;, &quot;label&quot;:&quot;60%&quot; }, { &quot;value&quot;:&quot;0.7&quot;, &quot;label&quot;:&quot;70%&quot; }, { &quot;value&quot;:&quot;0.8&quot;, &quot;label&quot;:&quot;80%&quot; }, { &quot;value&quot;:&quot;0.9&quot;, &quot;label&quot;:&quot;90%&quot; }, { &quot;value&quot;:&quot;1&quot;, &quot;label&quot;:&quot;100%&quot; } ], &quot;default&quot;:&quot;0.8&quot; }',
        ),
        25 => 
        array (
          'settingitem' => 'Lightbox &amp; Thumbs: Rollover Padding',
          'id' => 'udt_cartel_thumb_rollover_padding',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the rollover padding for lightbox thumbs and linked images.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;0&quot;, &quot;label&quot;:&quot;0&quot; }, { &quot;value&quot;:&quot;1&quot;, &quot;label&quot;:&quot;1&quot; }, { &quot;value&quot;:&quot;2&quot;, &quot;label&quot;:&quot;2&quot; }, { &quot;value&quot;:&quot;3&quot;, &quot;label&quot;:&quot;3&quot; }, { &quot;value&quot;:&quot;4&quot;, &quot;label&quot;:&quot;4&quot; }, { &quot;value&quot;:&quot;5&quot;, &quot;label&quot;:&quot;5&quot; }, { &quot;value&quot;:&quot;6&quot;, &quot;label&quot;:&quot;6&quot; }, { &quot;value&quot;:&quot;7&quot;, &quot;label&quot;:&quot;7&quot; }, { &quot;value&quot;:&quot;8&quot;, &quot;label&quot;:&quot;8&quot; }, { &quot;value&quot;:&quot;9&quot;, &quot;label&quot;:&quot;9&quot; }, { &quot;value&quot;:&quot;10&quot;, &quot;label&quot;:&quot;10&quot; }, { &quot;value&quot;:&quot;11&quot;, &quot;label&quot;:&quot;11&quot; }, { &quot;value&quot;:&quot;12&quot;, &quot;label&quot;:&quot;12&quot; }, { &quot;value&quot;:&quot;13&quot;, &quot;label&quot;:&quot;13&quot; }, { &quot;value&quot;:&quot;14&quot;, &quot;label&quot;:&quot;14&quot; }, { &quot;value&quot;:&quot;15&quot;, &quot;label&quot;:&quot;15&quot; } ], &quot;default&quot;:&quot;0&quot; }',
        ),
        26 => 
        array (
          'settingitem' => 'Lightbox &amp; Thumbs: Rollover Text Color',
          'id' => 'udt_cartel_thumb_rollover_text_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the rollover text color for lightbox thumbs and linked images.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '000000',
        ),
        27 => 
        array (
          'settingitem' => 'Lightbox &amp; Thumbs: Rollover Zoom Factor',
          'id' => 'udt_cartel_thumb_rollover_zoom_factor',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the zoom factor for lightbox thumbs and linked images. &lt;strong&gt;Note:&lt;/strong&gt; Setting the zoom factor to 1 switches off the zoom effect.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;1.0&quot;, &quot;label&quot;:&quot;1.0&quot; }, { &quot;value&quot;:&quot;1.05&quot;, &quot;label&quot;:&quot;1.05&quot; }, { &quot;value&quot;:&quot;1.1&quot;, &quot;label&quot;:&quot;1.1&quot; }, { &quot;value&quot;:&quot;1.15&quot;, &quot;label&quot;:&quot;1.15&quot; }, { &quot;value&quot;:&quot;1.2&quot;, &quot;label&quot;:&quot;1.2&quot; }, { &quot;value&quot;:&quot;1.25&quot;, &quot;label&quot;:&quot;1.25&quot; }, { &quot;value&quot;:&quot;1.3&quot;, &quot;label&quot;:&quot;1.3&quot; }, { &quot;value&quot;:&quot;1.35&quot;, &quot;label&quot;:&quot;1.35&quot; }, { &quot;value&quot;:&quot;1.4&quot;, &quot;label&quot;:&quot;1.4&quot; }, { &quot;value&quot;:&quot;1.45&quot;, &quot;label&quot;:&quot;1.45&quot; }, { &quot;value&quot;:&quot;1.5&quot;, &quot;label&quot;:&quot;1.5&quot; } ], &quot;default&quot;:&quot;1.05&quot; }',
        ),
        28 => 
        array (
          'settingitem' => 'Pricing Tables: Background Color',
          'id' => 'udt_cartel_pricing_tables_background_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color for Pricing Tables.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'f9f9f9',
        ),
        29 => 
        array (
          'settingitem' => 'Pricing Tables: Hover Background Color',
          'id' => 'udt_cartel_pricing_tables_hover_background_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the hover background color for Pricing Tables.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'eeeeee',
        ),
        30 => 
        array (
          'settingitem' => 'Pricing Tables: Border Color',
          'id' => 'udt_cartel_pricing_tables_border_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the border color for Pricing Tables.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'dddddd',
        ),
        31 => 
        array (
          'settingitem' => 'Pricing Tables: Text Color',
          'id' => 'udt_cartel_pricing_tables_text_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the text color for Pricing Tables.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '999999',
        ),
        32 => 
        array (
          'settingitem' => 'Pricing Tables: Header Background Color',
          'id' => 'udt_cartel_pricing_tables_header_background_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color for the Pricing Table headers.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '666666',
        ),
        33 => 
        array (
          'settingitem' => 'Pricing Tables: Hover Header Background Color',
          'id' => 'udt_cartel_pricing_tables_hover_header_background_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the hover background color for the Pricing Table headers.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '777777',
        ),
        34 => 
        array (
          'settingitem' => 'Pricing Tables: Header Text Color',
          'id' => 'udt_cartel_pricing_tables_header_text_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the text color for the Pricing Table headers.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'eeeeee',
        ),
        35 => 
        array (
          'settingitem' => 'Pricing Tables: Price Background Color',
          'id' => 'udt_cartel_pricing_tables_price_background_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the background color for the price cell.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'f4f4f4',
        ),
        36 => 
        array (
          'settingitem' => 'Pricing Tables: Price Text Color',
          'id' => 'udt_cartel_pricing_tables_price_text_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the font color for the price cell.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '666666',
        ),
        37 => 
        array (
          'settingitem' => 'Vimeo Controls Color',
          'id' => 'udt_cartel_vimeo_controls_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the color for the Vimeo player controls.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ff0000',
        ),
      ),
      4 => 
      array (
        0 => 'Full Width Slider',
        1 => 
        array (
          'settingitem' => 'Slider Theme Color',
          'id' => 'udt_cartel_epic_slider_theme_color',
          'type' => 'colorpicker',
          'icon' => '',
          'helptext' => 'Set the theme color for the full width slider.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'ff0000',
        ),
        2 => 
        array (
          'settingitem' => 'Loading GIF',
          'id' => 'udt_cartel_epic_slider_loading_gif',
          'type' => 'input_upload',
          'icon' => '',
          'helptext' => 'Upload a loading GIF animation for the fullscreen section.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'epic_slider_loading_gif.gif',
        ),
        3 => 
        array (
          'settingitem' => 'Use Overlay Pattern',
          'id' => 'udt_cartel_epic_slider_overlay_pattern_on_off',
          'type' => 'toggle_switch',
          'icon' => '',
          'helptext' => 'Whether or not to use an overlay pattern.',
          'showsettinghelp' => 'Hide',
          'showtooltip' => false,
          'defaultvalue' => '1',
        ),
        4 => 
        array (
          'settingitem' => 'Overlay Pattern',
          'id' => 'udt_cartel_epic_slider_overlay_pattern',
          'type' => 'input_upload',
          'icon' => '',
          'helptext' => 'Upload an overlay pattern for the full with slider.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'epic_slider_overlay_pattern.png',
        ),
      ),
      5 => 
      array (
        0 => 'Background Images',
        1 => 
        array (
          'settingitem' => 'Global Background Image',
          'id' => 'udt_cartel_global_background_image',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'Enter the URL of the background image that you would like to use as the default throughout the site. This can be overridden for each individual page, post and project on their edit screens. Leave this blank if you do not wish to use a background image.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '',
        ),
        2 => 
        array (
          'settingitem' => 'Blog Index Background Image',
          'id' => 'udt_cartel_blog_index_background_image',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => 'Enter the URL of the background image that you would like to use for the blog index. Leave this blank if you wish to use the global background image.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '',
        ),
        3 => 
        array (
          'settingitem' => 'Background Image Opacity',
          'id' => 'udt_cartel_background_image_opacity',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the opacity for background images, if used.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;0.1&quot;, &quot;label&quot;:&quot;10%&quot; }, { &quot;value&quot;:&quot;0.2&quot;, &quot;label&quot;:&quot;20%&quot; }, { &quot;value&quot;:&quot;0.3&quot;, &quot;label&quot;:&quot;30%&quot; }, { &quot;value&quot;:&quot;0.4&quot;, &quot;label&quot;:&quot;40%&quot; }, { &quot;value&quot;:&quot;0.5&quot;, &quot;label&quot;:&quot;50%&quot; }, { &quot;value&quot;:&quot;0.6&quot;, &quot;label&quot;:&quot;60%&quot; }, { &quot;value&quot;:&quot;0.7&quot;, &quot;label&quot;:&quot;70%&quot; }, { &quot;value&quot;:&quot;0.8&quot;, &quot;label&quot;:&quot;80%&quot; }, { &quot;value&quot;:&quot;0.9&quot;, &quot;label&quot;:&quot;90%&quot; }, { &quot;value&quot;:&quot;1&quot;, &quot;label&quot;:&quot;100%&quot; } ], &quot;default&quot;:&quot;1&quot; }',
        ),
        4 => 
        array (
          'settingitem' => 'Use Overlay Pattern',
          'id' => 'udt_cartel_background_image_overlay_pattern_on_off',
          'type' => 'toggle_switch',
          'icon' => '',
          'helptext' => 'Whether or not to use an overlay pattern.',
          'showsettinghelp' => 'Hide',
          'showtooltip' => false,
          'defaultvalue' => '1',
        ),
        5 => 
        array (
          'settingitem' => 'Overlay Pattern',
          'id' => 'udt_cartel_background_image_overlay_pattern',
          'type' => 'input_upload',
          'icon' => '',
          'helptext' => 'Upload an overlay pattern for the fullscreen background image.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'background_image_overlay_pattern.png',
        ),
      ),
    ),
    'icon' => 'colors',
    'type' => '',
    'helptext' => 'Easily set colors for various sections of your site.',
    'defaultvalue' => '',
  ),
  4 => 
  array (
    'root' => 'Fonts',
    'subnode' => 
    array (
      0 => 
      array (
        0 => 'Content',
        1 => 
        array (
          'settingitem' => 'Title Font',
          'id' => 'udt_cartel_title_font',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Select the font you would like to use for headings.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{ &quot;values&quot;: [ { &quot;value&quot;: &quot;Abril Fatface&quot;, &quot;label&quot;: &quot;Abril Fatface&quot; }, { &quot;value&quot;: &quot;Alfa Slab One&quot;, &quot;label&quot;: &quot;Alfa Slab One&quot; }, { &quot;value&quot;: &quot;Allerta&quot;, &quot;label&quot;: &quot;Allerta&quot; }, { &quot;value&quot;: &quot;Anton&quot;, &quot;label&quot;: &quot;Anton&quot; }, { &quot;value&quot;: &quot;Armata&quot;, &quot;label&quot;: &quot;Armata&quot; }, { &quot;value&quot;: &quot;Brawler&quot;, &quot;label&quot;: &quot;Brawler&quot; }, { &quot;value&quot;: &quot;Cabin Condensed&quot;, &quot;label&quot;: &quot;Cabin Condensed&quot; }, { &quot;value&quot;: &quot;Candal&quot;, &quot;label&quot;: &quot;Candal&quot; }, { &quot;value&quot;: &quot;Cantata One&quot;, &quot;label&quot;: &quot;Cantata One&quot; }, { &quot;value&quot;: &quot;Changa One&quot;, &quot;label&quot;: &quot;Changa One&quot; }, { &quot;value&quot;: &quot;Coda&quot;, &quot;label&quot;: &quot;Coda&quot; }, { &quot;value&quot;: &quot;Coda Caption&quot;, &quot;label&quot;: &quot;Coda Caption&quot; }, { &quot;value&quot;: &quot;Comfortaa&quot;, &quot;label&quot;: &quot;Comfortaa&quot; }, { &quot;value&quot;: &quot;Contrail One&quot;, &quot;label&quot;: &quot;Contrail One&quot; }, { &quot;value&quot;: &quot;Coustard&quot;, &quot;label&quot;: &quot;Coustard&quot; }, { &quot;value&quot;: &quot;Days One&quot;, &quot;label&quot;: &quot;Days One&quot; }, { &quot;value&quot;: &quot;Diplomata&quot;, &quot;label&quot;: &quot;Diplomata&quot; }, { &quot;value&quot;: &quot;Enriqueta&quot;, &quot;label&quot;: &quot;Enriqueta&quot; }, { &quot;value&quot;: &quot;Francois One&quot;, &quot;label&quot;: &quot;Francois One&quot; }, { &quot;value&quot;: &quot;Glegoo&quot;, &quot;label&quot;: &quot;Glegoo&quot; }, { &quot;value&quot;: &quot;Hammersmith One&quot;, &quot;label&quot;: &quot;Hammersmith One&quot; }, { &quot;value&quot;: &quot;IM Fell French Canon SC&quot;, &quot;label&quot;: &quot;IM Fell French Canon SC&quot; }, { &quot;value&quot;: &quot;Istok Web&quot;, &quot;label&quot;: &quot;Istok Web&quot; }, { &quot;value&quot;: &quot;Karla&quot;, &quot;label&quot;: &quot;Karla&quot; }, { &quot;value&quot;: &quot;Lobster&quot;, &quot;label&quot;: &quot;Lobster&quot; }, { &quot;value&quot;: &quot;Mate SC&quot;, &quot;label&quot;: &quot;Mate SC&quot; }, { &quot;value&quot;: &quot;Maven Pro&quot;, &quot;label&quot;: &quot;Maven Pro&quot; }, { &quot;value&quot;: &quot;Molengo&quot;, &quot;label&quot;: &quot;Molengo&quot; }, { &quot;value&quot;: &quot;Montserrat&quot;, &quot;label&quot;: &quot;Montserrat&quot; }, { &quot;value&quot;: &quot;Noticia Text&quot;, &quot;label&quot;: &quot;Noticia Text&quot; }, { &quot;value&quot;: &quot;Oleo Script&quot;, &quot;label&quot;: &quot;Oleo Script&quot; }, { &quot;value&quot;: &quot;Open Sans&quot;, &quot;label&quot;: &quot;Open Sans&quot; }, { &quot;value&quot;: &quot;Oswald&quot;, &quot;label&quot;: &quot;Oswald&quot; }, { &quot;value&quot;: &quot;Passion One&quot;, &quot;label&quot;: &quot;Passion One&quot; }, { &quot;value&quot;: &quot;Pontano Sans&quot;, &quot;label&quot;: &quot;Pontano Sans&quot; }, { &quot;value&quot;: &quot;Prata&quot;, &quot;label&quot;: &quot;Prata&quot; }, { &quot;value&quot;: &quot;PT Mono&quot;, &quot;label&quot;: &quot;PT Mono&quot; }, { &quot;value&quot;: &quot;Questrial&quot;, &quot;label&quot;: &quot;Questrial&quot; }, { &quot;value&quot;: &quot;Quicksand&quot;, &quot;label&quot;: &quot;Quicksand&quot; }, { &quot;value&quot;: &quot;Racing Sans One&quot;, &quot;label&quot;: &quot;Racing Sans One&quot; }, { &quot;value&quot;: &quot;Source Sans Pro&quot;, &quot;label&quot;: &quot;Source Sans Pro&quot; }, { &quot;value&quot;: &quot;Telex&quot;, &quot;label&quot;: &quot;Telex&quot; }, { &quot;value&quot;: &quot;Viga&quot;, &quot;label&quot;: &quot;Viga&quot; } ], &quot;default&quot;: &quot;Oswald&quot; }',
        ),
        2 => 
        array (
          'settingitem' => 'H1 Font Size',
          'id' => 'udt_cartel_h1_font_size',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;60px&quot;
}',
        ),
        3 => 
        array (
          'settingitem' => 'H1 Line Height',
          'id' => 'udt_cartel_h1_line_height',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;55px&quot;
}',
        ),
        4 => 
        array (
          'settingitem' => 'H2 Font Size',
          'id' => 'udt_cartel_h2_font_size',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;50px&quot;
}',
        ),
        5 => 
        array (
          'settingitem' => 'H2 Line Height',
          'id' => 'udt_cartel_h2_line_height',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;47px&quot;
}',
        ),
        6 => 
        array (
          'settingitem' => 'H3 Font Size',
          'id' => 'udt_cartel_h3_font_size',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;40px&quot;
}',
        ),
        7 => 
        array (
          'settingitem' => 'H3 Line Height',
          'id' => 'udt_cartel_h3_line_height',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;38px&quot;
}',
        ),
        8 => 
        array (
          'settingitem' => 'H4 Font Size',
          'id' => 'udt_cartel_h4_font_size',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;30px&quot;
}',
        ),
        9 => 
        array (
          'settingitem' => 'H4 Line Height',
          'id' => 'udt_cartel_h4_line_height',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;29px&quot;
}',
        ),
        10 => 
        array (
          'settingitem' => 'H5 Font Size',
          'id' => 'udt_cartel_h5_font_size',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;25px&quot;
}',
        ),
        11 => 
        array (
          'settingitem' => 'H5 Line Height',
          'id' => 'udt_cartel_h5_line_height',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;25px&quot;
}',
        ),
        12 => 
        array (
          'settingitem' => 'H6 Font Size',
          'id' => 'udt_cartel_h6_font_size',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;20px&quot;
}',
        ),
        13 => 
        array (
          'settingitem' => 'H6 Line Height',
          'id' => 'udt_cartel_h6_line_height',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;20px&quot;
}',
        ),
        14 => 
        array (
          'settingitem' => 'Display Title Font Size',
          'id' => 'udt_cartel_display_title_font_size',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the font size for Display Titles.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;90px&quot;
}',
        ),
        15 => 
        array (
          'settingitem' => 'Display Title Line Height',
          'id' => 'udt_cartel_display_title_line_height',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the line-height for Display Titles.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;83px&quot;
}',
        ),
      ),
      1 => 
      array (
        0 => 'Captions',
        1 => 
        array (
          'settingitem' => 'Caption Font',
          'id' => 'udt_cartel_caption_font',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Select the font you would like to use for captions in the full width slider and images.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{ &quot;values&quot;: [ { &quot;value&quot;: &quot;Abril Fatface&quot;, &quot;label&quot;: &quot;Abril Fatface&quot; }, { &quot;value&quot;: &quot;Alfa Slab One&quot;, &quot;label&quot;: &quot;Alfa Slab One&quot; }, { &quot;value&quot;: &quot;Allerta&quot;, &quot;label&quot;: &quot;Allerta&quot; }, { &quot;value&quot;: &quot;Anton&quot;, &quot;label&quot;: &quot;Anton&quot; }, { &quot;value&quot;: &quot;Armata&quot;, &quot;label&quot;: &quot;Armata&quot; }, { &quot;value&quot;: &quot;Brawler&quot;, &quot;label&quot;: &quot;Brawler&quot; }, { &quot;value&quot;: &quot;Cabin Condensed&quot;, &quot;label&quot;: &quot;Cabin Condensed&quot; }, { &quot;value&quot;: &quot;Candal&quot;, &quot;label&quot;: &quot;Candal&quot; }, { &quot;value&quot;: &quot;Cantata One&quot;, &quot;label&quot;: &quot;Cantata One&quot; }, { &quot;value&quot;: &quot;Changa One&quot;, &quot;label&quot;: &quot;Changa One&quot; }, { &quot;value&quot;: &quot;Coda&quot;, &quot;label&quot;: &quot;Coda&quot; }, { &quot;value&quot;: &quot;Coda Caption&quot;, &quot;label&quot;: &quot;Coda Caption&quot; }, { &quot;value&quot;: &quot;Comfortaa&quot;, &quot;label&quot;: &quot;Comfortaa&quot; }, { &quot;value&quot;: &quot;Contrail One&quot;, &quot;label&quot;: &quot;Contrail One&quot; }, { &quot;value&quot;: &quot;Coustard&quot;, &quot;label&quot;: &quot;Coustard&quot; }, { &quot;value&quot;: &quot;Days One&quot;, &quot;label&quot;: &quot;Days One&quot; }, { &quot;value&quot;: &quot;Diplomata&quot;, &quot;label&quot;: &quot;Diplomata&quot; }, { &quot;value&quot;: &quot;Enriqueta&quot;, &quot;label&quot;: &quot;Enriqueta&quot; }, { &quot;value&quot;: &quot;Francois One&quot;, &quot;label&quot;: &quot;Francois One&quot; }, { &quot;value&quot;: &quot;Glegoo&quot;, &quot;label&quot;: &quot;Glegoo&quot; }, { &quot;value&quot;: &quot;Hammersmith One&quot;, &quot;label&quot;: &quot;Hammersmith One&quot; }, { &quot;value&quot;: &quot;IM Fell French Canon SC&quot;, &quot;label&quot;: &quot;IM Fell French Canon SC&quot; }, { &quot;value&quot;: &quot;Istok Web&quot;, &quot;label&quot;: &quot;Istok Web&quot; }, { &quot;value&quot;: &quot;Karla&quot;, &quot;label&quot;: &quot;Karla&quot; }, { &quot;value&quot;: &quot;Lobster&quot;, &quot;label&quot;: &quot;Lobster&quot; }, { &quot;value&quot;: &quot;Mate SC&quot;, &quot;label&quot;: &quot;Mate SC&quot; }, { &quot;value&quot;: &quot;Maven Pro&quot;, &quot;label&quot;: &quot;Maven Pro&quot; }, { &quot;value&quot;: &quot;Molengo&quot;, &quot;label&quot;: &quot;Molengo&quot; }, { &quot;value&quot;: &quot;Montserrat&quot;, &quot;label&quot;: &quot;Montserrat&quot; }, { &quot;value&quot;: &quot;Noticia Text&quot;, &quot;label&quot;: &quot;Noticia Text&quot; }, { &quot;value&quot;: &quot;Oleo Script&quot;, &quot;label&quot;: &quot;Oleo Script&quot; }, { &quot;value&quot;: &quot;Open Sans&quot;, &quot;label&quot;: &quot;Open Sans&quot; }, { &quot;value&quot;: &quot;Oswald&quot;, &quot;label&quot;: &quot;Oswald&quot; }, { &quot;value&quot;: &quot;Passion One&quot;, &quot;label&quot;: &quot;Passion One&quot; }, { &quot;value&quot;: &quot;Pontano Sans&quot;, &quot;label&quot;: &quot;Pontano Sans&quot; }, { &quot;value&quot;: &quot;Prata&quot;, &quot;label&quot;: &quot;Prata&quot; }, { &quot;value&quot;: &quot;PT Mono&quot;, &quot;label&quot;: &quot;PT Mono&quot; }, { &quot;value&quot;: &quot;Questrial&quot;, &quot;label&quot;: &quot;Questrial&quot; }, { &quot;value&quot;: &quot;Quicksand&quot;, &quot;label&quot;: &quot;Quicksand&quot; }, { &quot;value&quot;: &quot;Racing Sans One&quot;, &quot;label&quot;: &quot;Racing Sans One&quot; }, { &quot;value&quot;: &quot;Source Sans Pro&quot;, &quot;label&quot;: &quot;Source Sans Pro&quot; }, { &quot;value&quot;: &quot;Telex&quot;, &quot;label&quot;: &quot;Telex&quot; }, { &quot;value&quot;: &quot;Viga&quot;, &quot;label&quot;: &quot;Viga&quot; } ], &quot;default&quot;: &quot;Oswald&quot; }',
        ),
        2 => 
        array (
          'settingitem' => '&quot;size-1&quot; Font Size',
          'id' => 'udt_cartel_caption_size_1_font_size',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the font size for the [span class=&quot;size-1&quot;] shortcode that is used in captions.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;100px&quot;
}',
        ),
        3 => 
        array (
          'settingitem' => '&quot;size-1&quot; Line Height',
          'id' => 'udt_cartel_caption_size_1_line_height',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the line-height for the [span class=&quot;size-1&quot;] shortcode that is used in captions.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;78px&quot;
}',
        ),
        4 => 
        array (
          'settingitem' => '&quot;size-2&quot; Font Size',
          'id' => 'udt_cartel_caption_size_2_font_size',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the font size for the [span class=&quot;size-2&quot;] shortcode that is used in captions.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;80px&quot;
}',
        ),
        5 => 
        array (
          'settingitem' => '&quot;size-2&quot; Line Height',
          'id' => 'udt_cartel_caption_size_2_line_height',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the line-height for the [span class=&quot;size-2&quot;] shortcode that is used in captions.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;62px&quot;
}',
        ),
        6 => 
        array (
          'settingitem' => '&quot;size-3&quot; Font Size',
          'id' => 'udt_cartel_caption_size_3_font_size',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the font size for the [span class=&quot;size-3&quot;] shortcode that is used in captions.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;70px&quot;
}',
        ),
        7 => 
        array (
          'settingitem' => '&quot;size-3&quot; Line Height',
          'id' => 'udt_cartel_caption_size_3_line_height',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the line-height for the [span class=&quot;size-3&quot;] shortcode that is used in captions.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;55px&quot;
}',
        ),
        8 => 
        array (
          'settingitem' => '&quot;size-4&quot; Font Size',
          'id' => 'udt_cartel_caption_size_4_font_size',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the font size for the [span class=&quot;size-4&quot;] shortcode that is used in captions.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;60px&quot;
}',
        ),
        9 => 
        array (
          'settingitem' => '&quot;size-4&quot; Line Height',
          'id' => 'udt_cartel_caption_size_4_line_height',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the line-height for the [span class=&quot;size-4&quot;] shortcode that is used in captions.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;46px&quot;
}',
        ),
        10 => 
        array (
          'settingitem' => '&quot;size-5&quot; Font Size',
          'id' => 'udt_cartel_caption_size_5_font_size',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the font size for the [span class=&quot;size-5&quot;] shortcode that is used in captions.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;50px&quot;
}',
        ),
        11 => 
        array (
          'settingitem' => '&quot;size-5&quot; Line Height',
          'id' => 'udt_cartel_caption_size_5_line_height',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the line-height for the [span class=&quot;size-5&quot;] shortcode that is used in captions.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;40px&quot;
}',
        ),
        12 => 
        array (
          'settingitem' => '&quot;size-6&quot; Font Size',
          'id' => 'udt_cartel_caption_size_6_font_size',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the font size for the [span class=&quot;size-6&quot;] shortcode that is used in captions.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;40px&quot;
}',
        ),
        13 => 
        array (
          'settingitem' => '&quot;size-6&quot; Line Height',
          'id' => 'udt_cartel_caption_size_6_line_height',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the line-height for the [span class=&quot;size-6&quot;] shortcode that is used in captions.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;32px&quot;
}',
        ),
      ),
      2 => 
      array (
        0 => 'Rollover',
        1 => 
        array (
          'settingitem' => 'Rollover Font',
          'id' => 'udt_cartel_thumb_rollover_font',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the font for the rollover text of lightbox images and thumbs.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{ &quot;values&quot;: [ { &quot;value&quot;: &quot;Abril Fatface&quot;, &quot;label&quot;: &quot;Abril Fatface&quot; }, { &quot;value&quot;: &quot;Alfa Slab One&quot;, &quot;label&quot;: &quot;Alfa Slab One&quot; }, { &quot;value&quot;: &quot;Allerta&quot;, &quot;label&quot;: &quot;Allerta&quot; }, { &quot;value&quot;: &quot;Anton&quot;, &quot;label&quot;: &quot;Anton&quot; }, { &quot;value&quot;: &quot;Armata&quot;, &quot;label&quot;: &quot;Armata&quot; }, { &quot;value&quot;: &quot;Brawler&quot;, &quot;label&quot;: &quot;Brawler&quot; }, { &quot;value&quot;: &quot;Cabin Condensed&quot;, &quot;label&quot;: &quot;Cabin Condensed&quot; }, { &quot;value&quot;: &quot;Candal&quot;, &quot;label&quot;: &quot;Candal&quot; }, { &quot;value&quot;: &quot;Cantata One&quot;, &quot;label&quot;: &quot;Cantata One&quot; }, { &quot;value&quot;: &quot;Changa One&quot;, &quot;label&quot;: &quot;Changa One&quot; }, { &quot;value&quot;: &quot;Coda&quot;, &quot;label&quot;: &quot;Coda&quot; }, { &quot;value&quot;: &quot;Coda Caption&quot;, &quot;label&quot;: &quot;Coda Caption&quot; }, { &quot;value&quot;: &quot;Comfortaa&quot;, &quot;label&quot;: &quot;Comfortaa&quot; }, { &quot;value&quot;: &quot;Contrail One&quot;, &quot;label&quot;: &quot;Contrail One&quot; }, { &quot;value&quot;: &quot;Coustard&quot;, &quot;label&quot;: &quot;Coustard&quot; }, { &quot;value&quot;: &quot;Days One&quot;, &quot;label&quot;: &quot;Days One&quot; }, { &quot;value&quot;: &quot;Diplomata&quot;, &quot;label&quot;: &quot;Diplomata&quot; }, { &quot;value&quot;: &quot;Enriqueta&quot;, &quot;label&quot;: &quot;Enriqueta&quot; }, { &quot;value&quot;: &quot;Francois One&quot;, &quot;label&quot;: &quot;Francois One&quot; }, { &quot;value&quot;: &quot;Glegoo&quot;, &quot;label&quot;: &quot;Glegoo&quot; }, { &quot;value&quot;: &quot;Hammersmith One&quot;, &quot;label&quot;: &quot;Hammersmith One&quot; }, { &quot;value&quot;: &quot;IM Fell French Canon SC&quot;, &quot;label&quot;: &quot;IM Fell French Canon SC&quot; }, { &quot;value&quot;: &quot;Istok Web&quot;, &quot;label&quot;: &quot;Istok Web&quot; }, { &quot;value&quot;: &quot;Karla&quot;, &quot;label&quot;: &quot;Karla&quot; }, { &quot;value&quot;: &quot;Lobster&quot;, &quot;label&quot;: &quot;Lobster&quot; }, { &quot;value&quot;: &quot;Mate SC&quot;, &quot;label&quot;: &quot;Mate SC&quot; }, { &quot;value&quot;: &quot;Maven Pro&quot;, &quot;label&quot;: &quot;Maven Pro&quot; }, { &quot;value&quot;: &quot;Molengo&quot;, &quot;label&quot;: &quot;Molengo&quot; }, { &quot;value&quot;: &quot;Montserrat&quot;, &quot;label&quot;: &quot;Montserrat&quot; }, { &quot;value&quot;: &quot;Noticia Text&quot;, &quot;label&quot;: &quot;Noticia Text&quot; }, { &quot;value&quot;: &quot;Oleo Script&quot;, &quot;label&quot;: &quot;Oleo Script&quot; }, { &quot;value&quot;: &quot;Open Sans&quot;, &quot;label&quot;: &quot;Open Sans&quot; }, { &quot;value&quot;: &quot;Oswald&quot;, &quot;label&quot;: &quot;Oswald&quot; }, { &quot;value&quot;: &quot;Passion One&quot;, &quot;label&quot;: &quot;Passion One&quot; }, { &quot;value&quot;: &quot;Pontano Sans&quot;, &quot;label&quot;: &quot;Pontano Sans&quot; }, { &quot;value&quot;: &quot;Prata&quot;, &quot;label&quot;: &quot;Prata&quot; }, { &quot;value&quot;: &quot;PT Mono&quot;, &quot;label&quot;: &quot;PT Mono&quot; }, { &quot;value&quot;: &quot;Questrial&quot;, &quot;label&quot;: &quot;Questrial&quot; }, { &quot;value&quot;: &quot;Quicksand&quot;, &quot;label&quot;: &quot;Quicksand&quot; }, { &quot;value&quot;: &quot;Racing Sans One&quot;, &quot;label&quot;: &quot;Racing Sans One&quot; }, { &quot;value&quot;: &quot;Source Sans Pro&quot;, &quot;label&quot;: &quot;Source Sans Pro&quot; }, { &quot;value&quot;: &quot;Telex&quot;, &quot;label&quot;: &quot;Telex&quot; }, { &quot;value&quot;: &quot;Viga&quot;, &quot;label&quot;: &quot;Viga&quot; } ], &quot;default&quot;: &quot;Oswald&quot; }',
        ),
        2 => 
        array (
          'settingitem' => 'Rollover Text Font Size',
          'id' => 'udt_cartel_thumb_rollover_font_size',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the font size for the rollover text.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;16px&quot;
}',
        ),
        3 => 
        array (
          'settingitem' => 'Rollover Text Line Height',
          'id' => 'udt_cartel_thumb_rollover_line_height',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => 'Set the line-height for the rollover text.',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;16px&quot;
}',
        ),
      ),
    ),
    'icon' => 'fonts',
    'type' => '',
    'helptext' => 'Set fonts for various sections of your site.',
    'defaultvalue' => '',
  ),
  5 => 
  array (
    'root' => 'Sliders',
    'subnode' => 
    array (
      0 => 
      array (
        0 => 'Full Width Slider',
        1 => 
        array (
          'settingitem' => 'Slideshow',
          'id' => 'udt_cartel_epic_slider_slideshow',
          'type' => 'toggle_switch',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Hide',
          'showtooltip' => false,
          'defaultvalue' => '0',
        ),
        2 => 
        array (
          'settingitem' => 'Autoplay',
          'id' => 'udt_cartel_epic_slider_autoplay',
          'type' => 'toggle_switch',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Hide',
          'showtooltip' => false,
          'defaultvalue' => '1',
        ),
        3 => 
        array (
          'settingitem' => 'Navigation Style',
          'id' => 'udt_cartel_epic_slider_navigation_style',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;arrows&quot;, &quot;label&quot;:&quot;Arrows&quot; }, { &quot;value&quot;:&quot;bullets&quot;, &quot;label&quot;:&quot;Bullets&quot; } ], &quot;default&quot;:&quot;arrows&quot; }',
        ),
        4 => 
        array (
          'settingitem' => 'Slide Timer',
          'id' => 'udt_cartel_epic_slider_slide_timer',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '3000',
        ),
        5 => 
        array (
          'settingitem' => 'Slide Animation Speed',
          'id' => 'udt_cartel_epic_slider_slide_animation_speed',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '600',
        ),
        6 => 
        array (
          'settingitem' => 'Slide Animation',
          'id' => 'udt_cartel_epic_slider_slide_animation',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;none&quot;, &quot;label&quot;:&quot;None&quot; }, { &quot;value&quot;:&quot;fade&quot;, &quot;label&quot;:&quot;Fade&quot; }, { &quot;value&quot;:&quot;leftToRight&quot;, &quot;label&quot;:&quot;Left to Right&quot; }, { &quot;value&quot;:&quot;topToBottom&quot;, &quot;label&quot;:&quot;Top to Bottom&quot; } ], &quot;default&quot;:&quot;leftToRight&quot; }',
        ),
        7 => 
        array (
          'settingitem' => 'Mobile Slide Animation',
          'id' => 'udt_cartel_epic_slider_mobile_slide_animation',
          'type' => 'select_json',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;none&quot;, &quot;label&quot;:&quot;None&quot; }, { &quot;value&quot;:&quot;fade&quot;, &quot;label&quot;:&quot;Fade&quot; }, { &quot;value&quot;:&quot;leftToRight&quot;, &quot;label&quot;:&quot;Left to Right&quot; }, { &quot;value&quot;:&quot;topToBottom&quot;, &quot;label&quot;:&quot;Top to Bottom&quot; } ], &quot;default&quot;:&quot;fade&quot; }',
        ),
        8 => 
        array (
          'settingitem' => 'Easing',
          'id' => 'udt_cartel_epic_slider_easing',
          'type' => 'select',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'easeInQuad,easeInQuad,easeInOutQuad,easeInCubic,easeOutCubic,easeInOutCubic,easeInQuart,easeOutQuart,easeInOutQuart,easeInQuint,easeOutQuint,easeInOutQuint,easeInSine,easeOutSine,easeInOutSine,easeInExpo,easeOutExpo,easeInOutExpo,easeInCirc,easeOutCirc,easeInOutCirc',
        ),
      ),
      1 => 
      array (
        0 => 'Flexslider',
        1 => 
        array (
          'settingitem' => 'Autoplay',
          'id' => 'udt_cartel_flexslider_autoplay',
          'type' => 'toggle_switch',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '1',
        ),
        2 => 
        array (
          'settingitem' => 'Slide Timer',
          'id' => 'udt_cartel_flexslider_slide_timer',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '3000',
        ),
        3 => 
        array (
          'settingitem' => 'Slide Animation Speed',
          'id' => 'udt_cartel_flexslider_slide_animation_speed',
          'type' => 'input_text',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '600',
        ),
      ),
    ),
    'icon' => 'sliders',
    'type' => '',
    'helptext' => 'Settings for the sliders included with the theme.',
    'defaultvalue' => '',
  ),
  6 => 
  array (
    'root' => 'Shortcodes',
    'subnode' => 
    array (
      0 => 
      array (
        0 => 'Map',
        1 => 
        array (
          'settingitem' => 'Controls',
          'id' => 'udt_cartel_map_controls',
          'type' => 'toggle_switch',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Hide',
          'showtooltip' => false,
          'defaultvalue' => '1',
        ),
        2 => 
        array (
          'settingitem' => 'Map Marker',
          'id' => 'udt_cartel_map_marker',
          'type' => 'input_upload',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => 'map_marker.png',
        ),
      ),
    ),
    'icon' => 'shortcode',
    'type' => '',
    'helptext' => 'This section allows you to set parameters for some of the custom shortcodes included with the theme.',
    'defaultvalue' => '',
  ),
  7 => 
  array (
    'root' => 'CSS Editor',
    'subnode' => 
    array (
      0 => 
      array (
        0 => 'CSS Editor',
        1 => 
        array (
          'settingitem' => 'CSS Editor',
          'id' => 'udt_cartel_css_editor',
          'type' => 'textarea',
          'icon' => '',
          'helptext' => '',
          'showsettinghelp' => 'Always',
          'showtooltip' => false,
          'defaultvalue' => '',
        ),
      ),
    ),
    'icon' => 'css_editor',
    'type' => '',
    'helptext' => 'Use the CSS Editor to add your custom styles.',
    'defaultvalue' => '',
  ),
);

$idArray=array (
  'udt_cartel_front_page_layout' => 
  array (
    0 => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;portfolio-grid&quot;, &quot;label&quot;:&quot;With Portfolio Grid&quot; }, { &quot;value&quot;:&quot;no-portfolio&quot;, &quot;label&quot;:&quot;Without Portfolio&quot; } ], &quot;default&quot;:&quot;portfolio-grid&quot; }',
    1 => 'select_json',
  ),
  'udt_cartel_display_portfolio_filter' => 
  array (
    0 => '0',
    1 => 'toggle_switch',
  ),
  'udt_cartel_blog_title' => 
  array (
    0 => 'Our Blog',
    1 => 'input_text',
  ),
  'udt_cartel_blog_index_layout' => 
  array (
    0 => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;regular&quot;, &quot;label&quot;:&quot;Regular&quot; }, { &quot;value&quot;:&quot;grid&quot;, &quot;label&quot;:&quot;Grid&quot; } ], &quot;default&quot;:&quot;regular&quot; }',
    1 => 'select_json',
  ),
  'udt_cartel_scroll_to_top_speed' => 
  array (
    0 => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;slow&quot;, &quot;label&quot;:&quot;Slow&quot; }, { &quot;value&quot;:&quot;normal&quot;, &quot;label&quot;:&quot;Normal&quot; }, { &quot;value&quot;:&quot;fast&quot;, &quot;label&quot;:&quot;Fast&quot; } ], &quot;default&quot;:&quot;normal&quot; }',
    1 => 'select_json',
  ),
  'udt_cartel_contact_form_note' => 
  array (
    0 => '&lt;p&gt;Colors for the contact form can be set under &lt;em&gt;Colors&lt;/em&gt; -&gt; &lt;em&gt;Forms&lt;/em&gt;.&lt;/p&gt;',
    1 => 'html',
  ),
  'udt_cartel_contact_form_title' => 
  array (
    0 => 'Send us a message',
    1 => 'input_text',
  ),
  'udt_cartel_contact_form_message' => 
  array (
    0 => 'Send us an e-mail and we will get back to you in 24 hours.',
    1 => 'textarea',
  ),
  'udt_cartel_contact_form_required_fields_label' => 
  array (
    0 => '* = required field',
    1 => 'input_text',
  ),
  'udt_cartel_contact_form_required_fields_label_ajax' => 
  array (
    0 => 'This is a required field.',
    1 => 'input_text',
  ),
  'udt_cartel_contact_form_success_message' => 
  array (
    0 => 'Thanks, we got your mail and will get back to you in 24h!',
    1 => 'input_text',
  ),
  'udt_cartel_contact_form_email_warning' => 
  array (
    0 => 'Please enter a valid e-mail address and try again.',
    1 => 'input_text',
  ),
  'udt_cartel_contact_form_warning' => 
  array (
    0 => 'Please verify fields and try again.',
    1 => 'input_text',
  ),
  'udt_cartel_contact_form_error' => 
  array (
    0 => 'There was an error sending your email. Please try again later.',
    1 => 'input_text',
  ),
  'udt_cartel_honeypot_toggle' => 
  array (
    0 => '1',
    1 => 'toggle_switch',
  ),
  'udt_cartel_sns_link_note' => 
  array (
    0 => '&lt;p&gt;Add links to your accounts on various social networks. These links will appear in the footer throughout the site.&lt;/p&gt;',
    1 => 'html',
  ),
  'udt_cartel_sns_network_1' => 
  array (
    0 => 'Link to your account on a social network.',
    1 => 'group',
  ),
  'udt_cartel_sns_type_1' => 
  array (
    0 => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;0&quot;, &quot;label&quot;:&quot;Select Network&quot; }, { &quot;value&quot;:&quot;behance&quot;, &quot;label&quot;:&quot;Behance&quot; }, { &quot;value&quot;:&quot;deviantart&quot;, &quot;label&quot;:&quot;DeviantArt&quot; }, { &quot;value&quot;:&quot;dribbble&quot;, &quot;label&quot;:&quot;Dribbble&quot; }, { &quot;value&quot;:&quot;facebook&quot;, &quot;label&quot;:&quot;Facebook&quot; }, { &quot;value&quot;:&quot;flickr&quot;, &quot;label&quot;:&quot;Flickr&quot; }, { &quot;value&quot;:&quot;forrst&quot;, &quot;label&quot;:&quot;Forrst&quot; }, { &quot;value&quot;:&quot;googleplus&quot;, &quot;label&quot;:&quot;Google+&quot; }, { &quot;value&quot;:&quot;instagram&quot;, &quot;label&quot;:&quot;Instagram&quot; }, { &quot;value&quot;:&quot;linkedin&quot;, &quot;label&quot;:&quot;LinkedIn&quot; }, { &quot;value&quot;:&quot;myspace&quot;, &quot;label&quot;:&quot;Myspace&quot; }, { &quot;value&quot;:&quot;pinterest&quot;, &quot;label&quot;:&quot;Pinterest&quot; }, { &quot;value&quot;:&quot;skype&quot;, &quot;label&quot;:&quot;Skype&quot; }, { &quot;value&quot;:&quot;soundcloud&quot;, &quot;label&quot;:&quot;SoundCloud&quot; }, { &quot;value&quot;:&quot;tumblr&quot;, &quot;label&quot;:&quot;Tumblr&quot; }, { &quot;value&quot;:&quot;twitter&quot;, &quot;label&quot;:&quot;Twitter&quot; }, { &quot;value&quot;:&quot;vimeo&quot;, &quot;label&quot;:&quot;Vimeo&quot; }, { &quot;value&quot;:&quot;vine&quot;, &quot;label&quot;:&quot;Vine&quot; }, { &quot;value&quot;:&quot;rss&quot;, &quot;label&quot;:&quot;RSS&quot; }, { &quot;value&quot;:&quot;youtube&quot;, &quot;label&quot;:&quot;YouTube&quot; } ], &quot;default&quot;:&quot;0&quot; }',
    1 => 'select_json',
  ),
  'udt_cartel_sns_url_1' => 
  array (
    0 => '',
    1 => 'input_text',
  ),
  'udt_cartel_sns_network_2' => 
  array (
    0 => 'Link to your account on a social network.',
    1 => 'group',
  ),
  'udt_cartel_sns_type_2' => 
  array (
    0 => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;0&quot;, &quot;label&quot;:&quot;Select Network&quot; }, { &quot;value&quot;:&quot;behance&quot;, &quot;label&quot;:&quot;Behance&quot; }, { &quot;value&quot;:&quot;deviantart&quot;, &quot;label&quot;:&quot;DeviantArt&quot; }, { &quot;value&quot;:&quot;dribbble&quot;, &quot;label&quot;:&quot;Dribbble&quot; }, { &quot;value&quot;:&quot;facebook&quot;, &quot;label&quot;:&quot;Facebook&quot; }, { &quot;value&quot;:&quot;flickr&quot;, &quot;label&quot;:&quot;Flickr&quot; }, { &quot;value&quot;:&quot;forrst&quot;, &quot;label&quot;:&quot;Forrst&quot; }, { &quot;value&quot;:&quot;googleplus&quot;, &quot;label&quot;:&quot;Google+&quot; }, { &quot;value&quot;:&quot;instagram&quot;, &quot;label&quot;:&quot;Instagram&quot; }, { &quot;value&quot;:&quot;linkedin&quot;, &quot;label&quot;:&quot;LinkedIn&quot; }, { &quot;value&quot;:&quot;myspace&quot;, &quot;label&quot;:&quot;Myspace&quot; }, { &quot;value&quot;:&quot;pinterest&quot;, &quot;label&quot;:&quot;Pinterest&quot; }, { &quot;value&quot;:&quot;skype&quot;, &quot;label&quot;:&quot;Skype&quot; }, { &quot;value&quot;:&quot;soundcloud&quot;, &quot;label&quot;:&quot;SoundCloud&quot; }, { &quot;value&quot;:&quot;tumblr&quot;, &quot;label&quot;:&quot;Tumblr&quot; }, { &quot;value&quot;:&quot;twitter&quot;, &quot;label&quot;:&quot;Twitter&quot; }, { &quot;value&quot;:&quot;vimeo&quot;, &quot;label&quot;:&quot;Vimeo&quot; }, { &quot;value&quot;:&quot;vine&quot;, &quot;label&quot;:&quot;Vine&quot; }, { &quot;value&quot;:&quot;rss&quot;, &quot;label&quot;:&quot;RSS&quot; }, { &quot;value&quot;:&quot;youtube&quot;, &quot;label&quot;:&quot;YouTube&quot; } ], &quot;default&quot;:&quot;0&quot; }',
    1 => 'select_json',
  ),
  'udt_cartel_sns_url_2' => 
  array (
    0 => '',
    1 => 'input_text',
  ),
  'udt_cartel_sns_network_3' => 
  array (
    0 => 'Link to your account on a social network.',
    1 => 'group',
  ),
  'udt_cartel_sns_type_3' => 
  array (
    0 => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;0&quot;, &quot;label&quot;:&quot;Select Network&quot; }, { &quot;value&quot;:&quot;behance&quot;, &quot;label&quot;:&quot;Behance&quot; }, { &quot;value&quot;:&quot;deviantart&quot;, &quot;label&quot;:&quot;DeviantArt&quot; }, { &quot;value&quot;:&quot;dribbble&quot;, &quot;label&quot;:&quot;Dribbble&quot; }, { &quot;value&quot;:&quot;facebook&quot;, &quot;label&quot;:&quot;Facebook&quot; }, { &quot;value&quot;:&quot;flickr&quot;, &quot;label&quot;:&quot;Flickr&quot; }, { &quot;value&quot;:&quot;forrst&quot;, &quot;label&quot;:&quot;Forrst&quot; }, { &quot;value&quot;:&quot;googleplus&quot;, &quot;label&quot;:&quot;Google+&quot; }, { &quot;value&quot;:&quot;instagram&quot;, &quot;label&quot;:&quot;Instagram&quot; }, { &quot;value&quot;:&quot;linkedin&quot;, &quot;label&quot;:&quot;LinkedIn&quot; }, { &quot;value&quot;:&quot;myspace&quot;, &quot;label&quot;:&quot;Myspace&quot; }, { &quot;value&quot;:&quot;pinterest&quot;, &quot;label&quot;:&quot;Pinterest&quot; }, { &quot;value&quot;:&quot;skype&quot;, &quot;label&quot;:&quot;Skype&quot; }, { &quot;value&quot;:&quot;soundcloud&quot;, &quot;label&quot;:&quot;SoundCloud&quot; }, { &quot;value&quot;:&quot;tumblr&quot;, &quot;label&quot;:&quot;Tumblr&quot; }, { &quot;value&quot;:&quot;twitter&quot;, &quot;label&quot;:&quot;Twitter&quot; }, { &quot;value&quot;:&quot;vimeo&quot;, &quot;label&quot;:&quot;Vimeo&quot; }, { &quot;value&quot;:&quot;vine&quot;, &quot;label&quot;:&quot;Vine&quot; }, { &quot;value&quot;:&quot;rss&quot;, &quot;label&quot;:&quot;RSS&quot; }, { &quot;value&quot;:&quot;youtube&quot;, &quot;label&quot;:&quot;YouTube&quot; } ], &quot;default&quot;:&quot;0&quot; }',
    1 => 'select_json',
  ),
  'udt_cartel_sns_url_3' => 
  array (
    0 => '',
    1 => 'input_text',
  ),
  'udt_cartel_sns_network_4' => 
  array (
    0 => 'Link to your account on a social network.',
    1 => 'group',
  ),
  'udt_cartel_sns_type_4' => 
  array (
    0 => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;0&quot;, &quot;label&quot;:&quot;Select Network&quot; }, { &quot;value&quot;:&quot;behance&quot;, &quot;label&quot;:&quot;Behance&quot; }, { &quot;value&quot;:&quot;deviantart&quot;, &quot;label&quot;:&quot;DeviantArt&quot; }, { &quot;value&quot;:&quot;dribbble&quot;, &quot;label&quot;:&quot;Dribbble&quot; }, { &quot;value&quot;:&quot;facebook&quot;, &quot;label&quot;:&quot;Facebook&quot; }, { &quot;value&quot;:&quot;flickr&quot;, &quot;label&quot;:&quot;Flickr&quot; }, { &quot;value&quot;:&quot;forrst&quot;, &quot;label&quot;:&quot;Forrst&quot; }, { &quot;value&quot;:&quot;googleplus&quot;, &quot;label&quot;:&quot;Google+&quot; }, { &quot;value&quot;:&quot;instagram&quot;, &quot;label&quot;:&quot;Instagram&quot; }, { &quot;value&quot;:&quot;linkedin&quot;, &quot;label&quot;:&quot;LinkedIn&quot; }, { &quot;value&quot;:&quot;myspace&quot;, &quot;label&quot;:&quot;Myspace&quot; }, { &quot;value&quot;:&quot;pinterest&quot;, &quot;label&quot;:&quot;Pinterest&quot; }, { &quot;value&quot;:&quot;skype&quot;, &quot;label&quot;:&quot;Skype&quot; }, { &quot;value&quot;:&quot;soundcloud&quot;, &quot;label&quot;:&quot;SoundCloud&quot; }, { &quot;value&quot;:&quot;tumblr&quot;, &quot;label&quot;:&quot;Tumblr&quot; }, { &quot;value&quot;:&quot;twitter&quot;, &quot;label&quot;:&quot;Twitter&quot; }, { &quot;value&quot;:&quot;vimeo&quot;, &quot;label&quot;:&quot;Vimeo&quot; }, { &quot;value&quot;:&quot;vine&quot;, &quot;label&quot;:&quot;Vine&quot; }, { &quot;value&quot;:&quot;rss&quot;, &quot;label&quot;:&quot;RSS&quot; }, { &quot;value&quot;:&quot;youtube&quot;, &quot;label&quot;:&quot;YouTube&quot; } ], &quot;default&quot;:&quot;0&quot; }',
    1 => 'select_json',
  ),
  'udt_cartel_sns_url_4' => 
  array (
    0 => '',
    1 => 'input_text',
  ),
  'udt_cartel_sns_network_5' => 
  array (
    0 => 'Link to your account on a social network.',
    1 => 'group',
  ),
  'udt_cartel_sns_type_5' => 
  array (
    0 => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;0&quot;, &quot;label&quot;:&quot;Select Network&quot; }, { &quot;value&quot;:&quot;behance&quot;, &quot;label&quot;:&quot;Behance&quot; }, { &quot;value&quot;:&quot;deviantart&quot;, &quot;label&quot;:&quot;DeviantArt&quot; }, { &quot;value&quot;:&quot;dribbble&quot;, &quot;label&quot;:&quot;Dribbble&quot; }, { &quot;value&quot;:&quot;facebook&quot;, &quot;label&quot;:&quot;Facebook&quot; }, { &quot;value&quot;:&quot;flickr&quot;, &quot;label&quot;:&quot;Flickr&quot; }, { &quot;value&quot;:&quot;forrst&quot;, &quot;label&quot;:&quot;Forrst&quot; }, { &quot;value&quot;:&quot;googleplus&quot;, &quot;label&quot;:&quot;Google+&quot; }, { &quot;value&quot;:&quot;instagram&quot;, &quot;label&quot;:&quot;Instagram&quot; }, { &quot;value&quot;:&quot;linkedin&quot;, &quot;label&quot;:&quot;LinkedIn&quot; }, { &quot;value&quot;:&quot;myspace&quot;, &quot;label&quot;:&quot;Myspace&quot; }, { &quot;value&quot;:&quot;pinterest&quot;, &quot;label&quot;:&quot;Pinterest&quot; }, { &quot;value&quot;:&quot;skype&quot;, &quot;label&quot;:&quot;Skype&quot; }, { &quot;value&quot;:&quot;soundcloud&quot;, &quot;label&quot;:&quot;SoundCloud&quot; }, { &quot;value&quot;:&quot;tumblr&quot;, &quot;label&quot;:&quot;Tumblr&quot; }, { &quot;value&quot;:&quot;twitter&quot;, &quot;label&quot;:&quot;Twitter&quot; }, { &quot;value&quot;:&quot;vimeo&quot;, &quot;label&quot;:&quot;Vimeo&quot; }, { &quot;value&quot;:&quot;vine&quot;, &quot;label&quot;:&quot;Vine&quot; }, { &quot;value&quot;:&quot;rss&quot;, &quot;label&quot;:&quot;RSS&quot; }, { &quot;value&quot;:&quot;youtube&quot;, &quot;label&quot;:&quot;YouTube&quot; } ], &quot;default&quot;:&quot;0&quot; }',
    1 => 'select_json',
  ),
  'udt_cartel_sns_url_5' => 
  array (
    0 => '',
    1 => 'input_text',
  ),
  'udt_cartel_sns_network_6' => 
  array (
    0 => 'Link to your account on a social network.',
    1 => 'group',
  ),
  'udt_cartel_sns_type_6' => 
  array (
    0 => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;0&quot;, &quot;label&quot;:&quot;Select Network&quot; }, { &quot;value&quot;:&quot;behance&quot;, &quot;label&quot;:&quot;Behance&quot; }, { &quot;value&quot;:&quot;deviantart&quot;, &quot;label&quot;:&quot;DeviantArt&quot; }, { &quot;value&quot;:&quot;dribbble&quot;, &quot;label&quot;:&quot;Dribbble&quot; }, { &quot;value&quot;:&quot;facebook&quot;, &quot;label&quot;:&quot;Facebook&quot; }, { &quot;value&quot;:&quot;flickr&quot;, &quot;label&quot;:&quot;Flickr&quot; }, { &quot;value&quot;:&quot;forrst&quot;, &quot;label&quot;:&quot;Forrst&quot; }, { &quot;value&quot;:&quot;googleplus&quot;, &quot;label&quot;:&quot;Google+&quot; }, { &quot;value&quot;:&quot;instagram&quot;, &quot;label&quot;:&quot;Instagram&quot; }, { &quot;value&quot;:&quot;linkedin&quot;, &quot;label&quot;:&quot;LinkedIn&quot; }, { &quot;value&quot;:&quot;myspace&quot;, &quot;label&quot;:&quot;Myspace&quot; }, { &quot;value&quot;:&quot;pinterest&quot;, &quot;label&quot;:&quot;Pinterest&quot; }, { &quot;value&quot;:&quot;skype&quot;, &quot;label&quot;:&quot;Skype&quot; }, { &quot;value&quot;:&quot;soundcloud&quot;, &quot;label&quot;:&quot;SoundCloud&quot; }, { &quot;value&quot;:&quot;tumblr&quot;, &quot;label&quot;:&quot;Tumblr&quot; }, { &quot;value&quot;:&quot;twitter&quot;, &quot;label&quot;:&quot;Twitter&quot; }, { &quot;value&quot;:&quot;vimeo&quot;, &quot;label&quot;:&quot;Vimeo&quot; }, { &quot;value&quot;:&quot;vine&quot;, &quot;label&quot;:&quot;Vine&quot; }, { &quot;value&quot;:&quot;rss&quot;, &quot;label&quot;:&quot;RSS&quot; }, { &quot;value&quot;:&quot;youtube&quot;, &quot;label&quot;:&quot;YouTube&quot; } ], &quot;default&quot;:&quot;0&quot; }',
    1 => 'select_json',
  ),
  'udt_cartel_sns_url_6' => 
  array (
    0 => '',
    1 => 'input_text',
  ),
  'udt_cartel_footer_copyright' => 
  array (
    0 => '&amp;copy;&lt;a href=&quot;http://udthemes.com&quot; title=&quot;Premium WordPress Themes - UDTHEMES&quot;&gt;UDTHEMES&lt;/a&gt;. All Rights Reserved.',
    1 => 'input_text',
  ),
  'udt_cartel_google_tracking_id' => 
  array (
    0 => '',
    1 => 'input_text',
  ),
  'udt_cartel_site_logo' => 
  array (
    0 => 'logo.png',
    1 => 'input_upload',
  ),
  'udt_cartel_rollover_logo' => 
  array (
    0 => 'rollover_logo.png',
    1 => 'input_upload',
  ),
  'udt_cartel_favicon' => 
  array (
    0 => 'favicon.png',
    1 => 'input_upload',
  ),
  'udt_cartel_background_color' => 
  array (
    0 => 'ffffff',
    1 => 'colorpicker',
  ),
  'udt_cartel_title_color' => 
  array (
    0 => '000000',
    1 => 'colorpicker',
  ),
  'udt_cartel_text_color' => 
  array (
    0 => '999999',
    1 => 'colorpicker',
  ),
  'udt_cartel_link_color' => 
  array (
    0 => 'ff0000',
    1 => 'colorpicker',
  ),
  'udt_cartel_link_hover_color' => 
  array (
    0 => 'ff0000',
    1 => 'colorpicker',
  ),
  'udt_cartel_sidebar_title_color' => 
  array (
    0 => '999999',
    1 => 'colorpicker',
  ),
  'udt_cartel_sidebar_link_color' => 
  array (
    0 => '333333',
    1 => 'colorpicker',
  ),
  'udt_cartel_sidebar_link_hover_color' => 
  array (
    0 => 'ff0000',
    1 => 'colorpicker',
  ),
  'udt_cartel_footer_background_color_on_off' => 
  array (
    0 => '0',
    1 => 'toggle_switch',
  ),
  'udt_cartel_footer_background_color' => 
  array (
    0 => 'ffffff',
    1 => 'colorpicker',
  ),
  'udt_cartel_footer_text_color' => 
  array (
    0 => '999999',
    1 => 'colorpicker',
  ),
  'udt_cartel_footer_link_color' => 
  array (
    0 => 'ff0000',
    1 => 'colorpicker',
  ),
  'udt_cartel_footer_link_hover_color' => 
  array (
    0 => 'ff0000',
    1 => 'colorpicker',
  ),
  'udt_cartel_footer_social_link_color' => 
  array (
    0 => '999999',
    1 => 'colorpicker',
  ),
  'udt_cartel_footer_social_link_hover_color' => 
  array (
    0 => '000000',
    1 => 'colorpicker',
  ),
  'udt_cartel_social_link_icon_color' => 
  array (
    0 => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;black&quot;, &quot;label&quot;:&quot;Black&quot; }, { &quot;value&quot;:&quot;white&quot;, &quot;label&quot;:&quot;White&quot; } ], &quot;default&quot;:&quot;black&quot; }',
    1 => 'select_json',
  ),
  'udt_cartel_tag_cloud_link_background_color' => 
  array (
    0 => 'f6f6f6',
    1 => 'colorpicker',
  ),
  'udt_cartel_tag_cloud_link_text_color' => 
  array (
    0 => '999999',
    1 => 'colorpicker',
  ),
  'udt_cartel_tag_cloud_link_hover_background_color' => 
  array (
    0 => '000000',
    1 => 'colorpicker',
  ),
  'udt_cartel_tag_cloud_link_hover_text_color' => 
  array (
    0 => 'ffffff',
    1 => 'colorpicker',
  ),
  'udt_cartel_calendar_date_background_color' => 
  array (
    0 => 'f6f6f6',
    1 => 'colorpicker',
  ),
  'udt_cartel_calendar_date_text_color' => 
  array (
    0 => '999999',
    1 => 'colorpicker',
  ),
  'udt_cartel_calendar_date_link_color' => 
  array (
    0 => 'ff0000',
    1 => 'colorpicker',
  ),
  'udt_cartel_calendar_date_hover_background_color' => 
  array (
    0 => '000000',
    1 => 'colorpicker',
  ),
  'udt_cartel_calendar_date_hover_text_color' => 
  array (
    0 => 'ffffff',
    1 => 'colorpicker',
  ),
  'udt_cartel_calendar_date_hover_link_color' => 
  array (
    0 => 'ff0000',
    1 => 'colorpicker',
  ),
  'udt_cartel_sticky_post_background_color' => 
  array (
    0 => 'f6f6f6',
    1 => 'colorpicker',
  ),
  'udt_cartel_post_date_background_color' => 
  array (
    0 => 'ffffff',
    1 => 'colorpicker',
  ),
  'udt_cartel_post_date_text_color' => 
  array (
    0 => '000000',
    1 => 'colorpicker',
  ),
  'udt_cartel_text_selection_color' => 
  array (
    0 => 'ff0000',
    1 => 'colorpicker',
  ),
  'udt_cartel_menu_link_color' => 
  array (
    0 => '999999',
    1 => 'colorpicker',
  ),
  'udt_cartel_menu_link_hover_color' => 
  array (
    0 => 'ff0000',
    1 => 'colorpicker',
  ),
  'udt_cartel_active_menu_link_color' => 
  array (
    0 => '000000',
    1 => 'colorpicker',
  ),
  'udt_cartel_sub_menu_background_color' => 
  array (
    0 => '000000',
    1 => 'colorpicker',
  ),
  'udt_cartel_sub_menu_background_opacity' => 
  array (
    0 => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;0.1&quot;, &quot;label&quot;:&quot;10%&quot; }, { &quot;value&quot;:&quot;0.2&quot;, &quot;label&quot;:&quot;20%&quot; }, { &quot;value&quot;:&quot;0.3&quot;, &quot;label&quot;:&quot;30%&quot; }, { &quot;value&quot;:&quot;0.4&quot;, &quot;label&quot;:&quot;40%&quot; }, { &quot;value&quot;:&quot;0.5&quot;, &quot;label&quot;:&quot;50%&quot; }, { &quot;value&quot;:&quot;0.6&quot;, &quot;label&quot;:&quot;60%&quot; }, { &quot;value&quot;:&quot;0.7&quot;, &quot;label&quot;:&quot;70%&quot; }, { &quot;value&quot;:&quot;0.8&quot;, &quot;label&quot;:&quot;80%&quot; }, { &quot;value&quot;:&quot;0.9&quot;, &quot;label&quot;:&quot;90%&quot; }, { &quot;value&quot;:&quot;1&quot;, &quot;label&quot;:&quot;100%&quot; } ], &quot;default&quot;:&quot;0.8&quot; }',
    1 => 'select_json',
  ),
  'udt_cartel_sub_menu_link_color' => 
  array (
    0 => '999999',
    1 => 'colorpicker',
  ),
  'udt_cartel_sub_menu_link_hover_color' => 
  array (
    0 => 'ffffff',
    1 => 'colorpicker',
  ),
  'udt_cartel_sub_menu_active_link_color' => 
  array (
    0 => 'ffffff',
    1 => 'colorpicker',
  ),
  'udt_cartel_form_elements_note' => 
  array (
    0 => '&lt;p&gt;The following settings apply to the Contact form, Comments form and Search form.&lt;/p&gt;',
    1 => 'html',
  ),
  'udt_cartel_form_input_background_color' => 
  array (
    0 => 'ffffff',
    1 => 'colorpicker',
  ),
  'udt_cartel_form_input_border_color' => 
  array (
    0 => 'e6e6e6',
    1 => 'colorpicker',
  ),
  'udt_cartel_form_input_text_color' => 
  array (
    0 => '999999',
    1 => 'colorpicker',
  ),
  'udt_cartel_form_input_hover_background_color' => 
  array (
    0 => 'e6e6e6',
    1 => 'colorpicker',
  ),
  'udt_cartel_form_input_hover_border_color' => 
  array (
    0 => 'e6e6e6',
    1 => 'colorpicker',
  ),
  'udt_cartel_form_input_hover_text_color' => 
  array (
    0 => '666666',
    1 => 'colorpicker',
  ),
  'udt_cartel_form_input_active_background_color' => 
  array (
    0 => 'ffffff',
    1 => 'colorpicker',
  ),
  'udt_cartel_form_input_active_border_color' => 
  array (
    0 => 'dddddd',
    1 => 'colorpicker',
  ),
  'udt_cartel_form_input_active_text_color' => 
  array (
    0 => '999999',
    1 => 'colorpicker',
  ),
  'udt_cartel_default_button_background_color' => 
  array (
    0 => 'ff0000',
    1 => 'colorpicker',
  ),
  'udt_cartel_default_button_text_color' => 
  array (
    0 => 'ffffff',
    1 => 'colorpicker',
  ),
  'udt_cartel_error_text_color' => 
  array (
    0 => 'ff0000',
    1 => 'colorpicker',
  ),
  'udt_cartel_contact_loading_gif' => 
  array (
    0 => 'contact_loading.gif',
    1 => 'input_upload',
  ),
  'udt_cartel_accordions_tabs_label_background_color' => 
  array (
    0 => 'dddddd',
    1 => 'colorpicker',
  ),
  'udt_cartel_accordions_tabs_label_text_color' => 
  array (
    0 => '999999',
    1 => 'colorpicker',
  ),
  'udt_cartel_accordions_tabs_active_label_background_color' => 
  array (
    0 => '666666',
    1 => 'colorpicker',
  ),
  'udt_cartel_accordions_tabs_active_label_text_color' => 
  array (
    0 => 'ffffff',
    1 => 'colorpicker',
  ),
  'udt_cartel_accordions_tabs_background_color' => 
  array (
    0 => 'f9f9f9',
    1 => 'colorpicker',
  ),
  'udt_cartel_blockquote_border_color' => 
  array (
    0 => 'dddddd',
    1 => 'colorpicker',
  ),
  'udt_cartel_blockquote_text_color' => 
  array (
    0 => '666666',
    1 => 'colorpicker',
  ),
  'udt_cartel_blockquote_boxed_bg_striped_background_color' => 
  array (
    0 => 'dddddd',
    1 => 'colorpicker',
  ),
  'udt_cartel_blockquote_boxed_bg_striped_text_color' => 
  array (
    0 => '666666',
    1 => 'colorpicker',
  ),
  'udt_cartel_blockquote_elegant_graphic' => 
  array (
    0 => 'blockquote_elegant.png',
    1 => 'input_upload',
  ),
  'udt_cartel_blockquote_overlayed_graphic' => 
  array (
    0 => 'blockquote_overlayed.png',
    1 => 'input_upload',
  ),
  'udt_cartel_caption_text_color' => 
  array (
    0 => 'ffffff',
    1 => 'colorpicker',
  ),
  'udt_cartel_caption_link_color' => 
  array (
    0 => 'ffffff',
    1 => 'colorpicker',
  ),
  'udt_cartel_caption_link_hover_color' => 
  array (
    0 => 'ff0000',
    1 => 'colorpicker',
  ),
  'udt_cartel_caption_boxed_striped_background_color' => 
  array (
    0 => '000000',
    1 => 'colorpicker',
  ),
  'udt_cartel_caption_boxed_striped_text_color' => 
  array (
    0 => 'ffffff',
    1 => 'colorpicker',
  ),
  'udt_cartel_caption_boxed_striped_link_color' => 
  array (
    0 => 'ffffff',
    1 => 'colorpicker',
  ),
  'udt_cartel_caption_boxed_striped_link_hover_color' => 
  array (
    0 => 'ff0000',
    1 => 'colorpicker',
  ),
  'udt_cartel_chart_bar_color' => 
  array (
    0 => 'ff0000',
    1 => 'colorpicker',
  ),
  'udt_cartel_chart_border_color' => 
  array (
    0 => 'ffffff',
    1 => 'colorpicker',
  ),
  'udt_cartel_chart_text_color' => 
  array (
    0 => 'ffffff',
    1 => 'colorpicker',
  ),
  'udt_cartel_divider_color' => 
  array (
    0 => 'e6e6e6',
    1 => 'colorpicker',
  ),
  'udt_cartel_thumb_rollover_color' => 
  array (
    0 => 'ffffff',
    1 => 'colorpicker',
  ),
  'udt_cartel_thumb_rollover_opacity' => 
  array (
    0 => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;0&quot;, &quot;label&quot;:&quot;0%&quot; }, { &quot;value&quot;:&quot;0.1&quot;, &quot;label&quot;:&quot;10%&quot; }, { &quot;value&quot;:&quot;0.2&quot;, &quot;label&quot;:&quot;20%&quot; }, { &quot;value&quot;:&quot;0.3&quot;, &quot;label&quot;:&quot;30%&quot; }, { &quot;value&quot;:&quot;0.4&quot;, &quot;label&quot;:&quot;40%&quot; }, { &quot;value&quot;:&quot;0.5&quot;, &quot;label&quot;:&quot;50%&quot; }, { &quot;value&quot;:&quot;0.6&quot;, &quot;label&quot;:&quot;60%&quot; }, { &quot;value&quot;:&quot;0.7&quot;, &quot;label&quot;:&quot;70%&quot; }, { &quot;value&quot;:&quot;0.8&quot;, &quot;label&quot;:&quot;80%&quot; }, { &quot;value&quot;:&quot;0.9&quot;, &quot;label&quot;:&quot;90%&quot; }, { &quot;value&quot;:&quot;1&quot;, &quot;label&quot;:&quot;100%&quot; } ], &quot;default&quot;:&quot;0.8&quot; }',
    1 => 'select_json',
  ),
  'udt_cartel_thumb_rollover_padding' => 
  array (
    0 => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;0&quot;, &quot;label&quot;:&quot;0&quot; }, { &quot;value&quot;:&quot;1&quot;, &quot;label&quot;:&quot;1&quot; }, { &quot;value&quot;:&quot;2&quot;, &quot;label&quot;:&quot;2&quot; }, { &quot;value&quot;:&quot;3&quot;, &quot;label&quot;:&quot;3&quot; }, { &quot;value&quot;:&quot;4&quot;, &quot;label&quot;:&quot;4&quot; }, { &quot;value&quot;:&quot;5&quot;, &quot;label&quot;:&quot;5&quot; }, { &quot;value&quot;:&quot;6&quot;, &quot;label&quot;:&quot;6&quot; }, { &quot;value&quot;:&quot;7&quot;, &quot;label&quot;:&quot;7&quot; }, { &quot;value&quot;:&quot;8&quot;, &quot;label&quot;:&quot;8&quot; }, { &quot;value&quot;:&quot;9&quot;, &quot;label&quot;:&quot;9&quot; }, { &quot;value&quot;:&quot;10&quot;, &quot;label&quot;:&quot;10&quot; }, { &quot;value&quot;:&quot;11&quot;, &quot;label&quot;:&quot;11&quot; }, { &quot;value&quot;:&quot;12&quot;, &quot;label&quot;:&quot;12&quot; }, { &quot;value&quot;:&quot;13&quot;, &quot;label&quot;:&quot;13&quot; }, { &quot;value&quot;:&quot;14&quot;, &quot;label&quot;:&quot;14&quot; }, { &quot;value&quot;:&quot;15&quot;, &quot;label&quot;:&quot;15&quot; } ], &quot;default&quot;:&quot;0&quot; }',
    1 => 'select_json',
  ),
  'udt_cartel_thumb_rollover_text_color' => 
  array (
    0 => '000000',
    1 => 'colorpicker',
  ),
  'udt_cartel_thumb_rollover_zoom_factor' => 
  array (
    0 => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;1.0&quot;, &quot;label&quot;:&quot;1.0&quot; }, { &quot;value&quot;:&quot;1.05&quot;, &quot;label&quot;:&quot;1.05&quot; }, { &quot;value&quot;:&quot;1.1&quot;, &quot;label&quot;:&quot;1.1&quot; }, { &quot;value&quot;:&quot;1.15&quot;, &quot;label&quot;:&quot;1.15&quot; }, { &quot;value&quot;:&quot;1.2&quot;, &quot;label&quot;:&quot;1.2&quot; }, { &quot;value&quot;:&quot;1.25&quot;, &quot;label&quot;:&quot;1.25&quot; }, { &quot;value&quot;:&quot;1.3&quot;, &quot;label&quot;:&quot;1.3&quot; }, { &quot;value&quot;:&quot;1.35&quot;, &quot;label&quot;:&quot;1.35&quot; }, { &quot;value&quot;:&quot;1.4&quot;, &quot;label&quot;:&quot;1.4&quot; }, { &quot;value&quot;:&quot;1.45&quot;, &quot;label&quot;:&quot;1.45&quot; }, { &quot;value&quot;:&quot;1.5&quot;, &quot;label&quot;:&quot;1.5&quot; } ], &quot;default&quot;:&quot;1.05&quot; }',
    1 => 'select_json',
  ),
  'udt_cartel_pricing_tables_background_color' => 
  array (
    0 => 'f9f9f9',
    1 => 'colorpicker',
  ),
  'udt_cartel_pricing_tables_hover_background_color' => 
  array (
    0 => 'eeeeee',
    1 => 'colorpicker',
  ),
  'udt_cartel_pricing_tables_border_color' => 
  array (
    0 => 'dddddd',
    1 => 'colorpicker',
  ),
  'udt_cartel_pricing_tables_text_color' => 
  array (
    0 => '999999',
    1 => 'colorpicker',
  ),
  'udt_cartel_pricing_tables_header_background_color' => 
  array (
    0 => '666666',
    1 => 'colorpicker',
  ),
  'udt_cartel_pricing_tables_hover_header_background_color' => 
  array (
    0 => '777777',
    1 => 'colorpicker',
  ),
  'udt_cartel_pricing_tables_header_text_color' => 
  array (
    0 => 'eeeeee',
    1 => 'colorpicker',
  ),
  'udt_cartel_pricing_tables_price_background_color' => 
  array (
    0 => 'f4f4f4',
    1 => 'colorpicker',
  ),
  'udt_cartel_pricing_tables_price_text_color' => 
  array (
    0 => '666666',
    1 => 'colorpicker',
  ),
  'udt_cartel_vimeo_controls_color' => 
  array (
    0 => 'ff0000',
    1 => 'colorpicker',
  ),
  'udt_cartel_epic_slider_theme_color' => 
  array (
    0 => 'ff0000',
    1 => 'colorpicker',
  ),
  'udt_cartel_epic_slider_loading_gif' => 
  array (
    0 => 'epic_slider_loading_gif.gif',
    1 => 'input_upload',
  ),
  'udt_cartel_epic_slider_overlay_pattern_on_off' => 
  array (
    0 => '1',
    1 => 'toggle_switch',
  ),
  'udt_cartel_epic_slider_overlay_pattern' => 
  array (
    0 => 'epic_slider_overlay_pattern.png',
    1 => 'input_upload',
  ),
  'udt_cartel_global_background_image' => 
  array (
    0 => '',
    1 => 'input_text',
  ),
  'udt_cartel_blog_index_background_image' => 
  array (
    0 => '',
    1 => 'input_text',
  ),
  'udt_cartel_background_image_opacity' => 
  array (
    0 => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;0.1&quot;, &quot;label&quot;:&quot;10%&quot; }, { &quot;value&quot;:&quot;0.2&quot;, &quot;label&quot;:&quot;20%&quot; }, { &quot;value&quot;:&quot;0.3&quot;, &quot;label&quot;:&quot;30%&quot; }, { &quot;value&quot;:&quot;0.4&quot;, &quot;label&quot;:&quot;40%&quot; }, { &quot;value&quot;:&quot;0.5&quot;, &quot;label&quot;:&quot;50%&quot; }, { &quot;value&quot;:&quot;0.6&quot;, &quot;label&quot;:&quot;60%&quot; }, { &quot;value&quot;:&quot;0.7&quot;, &quot;label&quot;:&quot;70%&quot; }, { &quot;value&quot;:&quot;0.8&quot;, &quot;label&quot;:&quot;80%&quot; }, { &quot;value&quot;:&quot;0.9&quot;, &quot;label&quot;:&quot;90%&quot; }, { &quot;value&quot;:&quot;1&quot;, &quot;label&quot;:&quot;100%&quot; } ], &quot;default&quot;:&quot;1&quot; }',
    1 => 'select_json',
  ),
  'udt_cartel_background_image_overlay_pattern_on_off' => 
  array (
    0 => '1',
    1 => 'toggle_switch',
  ),
  'udt_cartel_background_image_overlay_pattern' => 
  array (
    0 => 'background_image_overlay_pattern.png',
    1 => 'input_upload',
  ),
  'udt_cartel_title_font' => 
  array (
    0 => 'json{ &quot;values&quot;: [ { &quot;value&quot;: &quot;Abril Fatface&quot;, &quot;label&quot;: &quot;Abril Fatface&quot; }, { &quot;value&quot;: &quot;Alfa Slab One&quot;, &quot;label&quot;: &quot;Alfa Slab One&quot; }, { &quot;value&quot;: &quot;Allerta&quot;, &quot;label&quot;: &quot;Allerta&quot; }, { &quot;value&quot;: &quot;Anton&quot;, &quot;label&quot;: &quot;Anton&quot; }, { &quot;value&quot;: &quot;Armata&quot;, &quot;label&quot;: &quot;Armata&quot; }, { &quot;value&quot;: &quot;Brawler&quot;, &quot;label&quot;: &quot;Brawler&quot; }, { &quot;value&quot;: &quot;Cabin Condensed&quot;, &quot;label&quot;: &quot;Cabin Condensed&quot; }, { &quot;value&quot;: &quot;Candal&quot;, &quot;label&quot;: &quot;Candal&quot; }, { &quot;value&quot;: &quot;Cantata One&quot;, &quot;label&quot;: &quot;Cantata One&quot; }, { &quot;value&quot;: &quot;Changa One&quot;, &quot;label&quot;: &quot;Changa One&quot; }, { &quot;value&quot;: &quot;Coda&quot;, &quot;label&quot;: &quot;Coda&quot; }, { &quot;value&quot;: &quot;Coda Caption&quot;, &quot;label&quot;: &quot;Coda Caption&quot; }, { &quot;value&quot;: &quot;Comfortaa&quot;, &quot;label&quot;: &quot;Comfortaa&quot; }, { &quot;value&quot;: &quot;Contrail One&quot;, &quot;label&quot;: &quot;Contrail One&quot; }, { &quot;value&quot;: &quot;Coustard&quot;, &quot;label&quot;: &quot;Coustard&quot; }, { &quot;value&quot;: &quot;Days One&quot;, &quot;label&quot;: &quot;Days One&quot; }, { &quot;value&quot;: &quot;Diplomata&quot;, &quot;label&quot;: &quot;Diplomata&quot; }, { &quot;value&quot;: &quot;Enriqueta&quot;, &quot;label&quot;: &quot;Enriqueta&quot; }, { &quot;value&quot;: &quot;Francois One&quot;, &quot;label&quot;: &quot;Francois One&quot; }, { &quot;value&quot;: &quot;Glegoo&quot;, &quot;label&quot;: &quot;Glegoo&quot; }, { &quot;value&quot;: &quot;Hammersmith One&quot;, &quot;label&quot;: &quot;Hammersmith One&quot; }, { &quot;value&quot;: &quot;IM Fell French Canon SC&quot;, &quot;label&quot;: &quot;IM Fell French Canon SC&quot; }, { &quot;value&quot;: &quot;Istok Web&quot;, &quot;label&quot;: &quot;Istok Web&quot; }, { &quot;value&quot;: &quot;Karla&quot;, &quot;label&quot;: &quot;Karla&quot; }, { &quot;value&quot;: &quot;Lobster&quot;, &quot;label&quot;: &quot;Lobster&quot; }, { &quot;value&quot;: &quot;Mate SC&quot;, &quot;label&quot;: &quot;Mate SC&quot; }, { &quot;value&quot;: &quot;Maven Pro&quot;, &quot;label&quot;: &quot;Maven Pro&quot; }, { &quot;value&quot;: &quot;Molengo&quot;, &quot;label&quot;: &quot;Molengo&quot; }, { &quot;value&quot;: &quot;Montserrat&quot;, &quot;label&quot;: &quot;Montserrat&quot; }, { &quot;value&quot;: &quot;Noticia Text&quot;, &quot;label&quot;: &quot;Noticia Text&quot; }, { &quot;value&quot;: &quot;Oleo Script&quot;, &quot;label&quot;: &quot;Oleo Script&quot; }, { &quot;value&quot;: &quot;Open Sans&quot;, &quot;label&quot;: &quot;Open Sans&quot; }, { &quot;value&quot;: &quot;Oswald&quot;, &quot;label&quot;: &quot;Oswald&quot; }, { &quot;value&quot;: &quot;Passion One&quot;, &quot;label&quot;: &quot;Passion One&quot; }, { &quot;value&quot;: &quot;Pontano Sans&quot;, &quot;label&quot;: &quot;Pontano Sans&quot; }, { &quot;value&quot;: &quot;Prata&quot;, &quot;label&quot;: &quot;Prata&quot; }, { &quot;value&quot;: &quot;PT Mono&quot;, &quot;label&quot;: &quot;PT Mono&quot; }, { &quot;value&quot;: &quot;Questrial&quot;, &quot;label&quot;: &quot;Questrial&quot; }, { &quot;value&quot;: &quot;Quicksand&quot;, &quot;label&quot;: &quot;Quicksand&quot; }, { &quot;value&quot;: &quot;Racing Sans One&quot;, &quot;label&quot;: &quot;Racing Sans One&quot; }, { &quot;value&quot;: &quot;Source Sans Pro&quot;, &quot;label&quot;: &quot;Source Sans Pro&quot; }, { &quot;value&quot;: &quot;Telex&quot;, &quot;label&quot;: &quot;Telex&quot; }, { &quot;value&quot;: &quot;Viga&quot;, &quot;label&quot;: &quot;Viga&quot; } ], &quot;default&quot;: &quot;Oswald&quot; }',
    1 => 'select_json',
  ),
  'udt_cartel_h1_font_size' => 
  array (
    0 => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;60px&quot;
}',
    1 => 'select_json',
  ),
  'udt_cartel_h1_line_height' => 
  array (
    0 => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;55px&quot;
}',
    1 => 'select_json',
  ),
  'udt_cartel_h2_font_size' => 
  array (
    0 => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;50px&quot;
}',
    1 => 'select_json',
  ),
  'udt_cartel_h2_line_height' => 
  array (
    0 => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;47px&quot;
}',
    1 => 'select_json',
  ),
  'udt_cartel_h3_font_size' => 
  array (
    0 => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;40px&quot;
}',
    1 => 'select_json',
  ),
  'udt_cartel_h3_line_height' => 
  array (
    0 => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;38px&quot;
}',
    1 => 'select_json',
  ),
  'udt_cartel_h4_font_size' => 
  array (
    0 => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;30px&quot;
}',
    1 => 'select_json',
  ),
  'udt_cartel_h4_line_height' => 
  array (
    0 => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;29px&quot;
}',
    1 => 'select_json',
  ),
  'udt_cartel_h5_font_size' => 
  array (
    0 => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;25px&quot;
}',
    1 => 'select_json',
  ),
  'udt_cartel_h5_line_height' => 
  array (
    0 => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;25px&quot;
}',
    1 => 'select_json',
  ),
  'udt_cartel_h6_font_size' => 
  array (
    0 => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;20px&quot;
}',
    1 => 'select_json',
  ),
  'udt_cartel_h6_line_height' => 
  array (
    0 => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;20px&quot;
}',
    1 => 'select_json',
  ),
  'udt_cartel_display_title_font_size' => 
  array (
    0 => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;90px&quot;
}',
    1 => 'select_json',
  ),
  'udt_cartel_display_title_line_height' => 
  array (
    0 => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;83px&quot;
}',
    1 => 'select_json',
  ),
  'udt_cartel_caption_font' => 
  array (
    0 => 'json{ &quot;values&quot;: [ { &quot;value&quot;: &quot;Abril Fatface&quot;, &quot;label&quot;: &quot;Abril Fatface&quot; }, { &quot;value&quot;: &quot;Alfa Slab One&quot;, &quot;label&quot;: &quot;Alfa Slab One&quot; }, { &quot;value&quot;: &quot;Allerta&quot;, &quot;label&quot;: &quot;Allerta&quot; }, { &quot;value&quot;: &quot;Anton&quot;, &quot;label&quot;: &quot;Anton&quot; }, { &quot;value&quot;: &quot;Armata&quot;, &quot;label&quot;: &quot;Armata&quot; }, { &quot;value&quot;: &quot;Brawler&quot;, &quot;label&quot;: &quot;Brawler&quot; }, { &quot;value&quot;: &quot;Cabin Condensed&quot;, &quot;label&quot;: &quot;Cabin Condensed&quot; }, { &quot;value&quot;: &quot;Candal&quot;, &quot;label&quot;: &quot;Candal&quot; }, { &quot;value&quot;: &quot;Cantata One&quot;, &quot;label&quot;: &quot;Cantata One&quot; }, { &quot;value&quot;: &quot;Changa One&quot;, &quot;label&quot;: &quot;Changa One&quot; }, { &quot;value&quot;: &quot;Coda&quot;, &quot;label&quot;: &quot;Coda&quot; }, { &quot;value&quot;: &quot;Coda Caption&quot;, &quot;label&quot;: &quot;Coda Caption&quot; }, { &quot;value&quot;: &quot;Comfortaa&quot;, &quot;label&quot;: &quot;Comfortaa&quot; }, { &quot;value&quot;: &quot;Contrail One&quot;, &quot;label&quot;: &quot;Contrail One&quot; }, { &quot;value&quot;: &quot;Coustard&quot;, &quot;label&quot;: &quot;Coustard&quot; }, { &quot;value&quot;: &quot;Days One&quot;, &quot;label&quot;: &quot;Days One&quot; }, { &quot;value&quot;: &quot;Diplomata&quot;, &quot;label&quot;: &quot;Diplomata&quot; }, { &quot;value&quot;: &quot;Enriqueta&quot;, &quot;label&quot;: &quot;Enriqueta&quot; }, { &quot;value&quot;: &quot;Francois One&quot;, &quot;label&quot;: &quot;Francois One&quot; }, { &quot;value&quot;: &quot;Glegoo&quot;, &quot;label&quot;: &quot;Glegoo&quot; }, { &quot;value&quot;: &quot;Hammersmith One&quot;, &quot;label&quot;: &quot;Hammersmith One&quot; }, { &quot;value&quot;: &quot;IM Fell French Canon SC&quot;, &quot;label&quot;: &quot;IM Fell French Canon SC&quot; }, { &quot;value&quot;: &quot;Istok Web&quot;, &quot;label&quot;: &quot;Istok Web&quot; }, { &quot;value&quot;: &quot;Karla&quot;, &quot;label&quot;: &quot;Karla&quot; }, { &quot;value&quot;: &quot;Lobster&quot;, &quot;label&quot;: &quot;Lobster&quot; }, { &quot;value&quot;: &quot;Mate SC&quot;, &quot;label&quot;: &quot;Mate SC&quot; }, { &quot;value&quot;: &quot;Maven Pro&quot;, &quot;label&quot;: &quot;Maven Pro&quot; }, { &quot;value&quot;: &quot;Molengo&quot;, &quot;label&quot;: &quot;Molengo&quot; }, { &quot;value&quot;: &quot;Montserrat&quot;, &quot;label&quot;: &quot;Montserrat&quot; }, { &quot;value&quot;: &quot;Noticia Text&quot;, &quot;label&quot;: &quot;Noticia Text&quot; }, { &quot;value&quot;: &quot;Oleo Script&quot;, &quot;label&quot;: &quot;Oleo Script&quot; }, { &quot;value&quot;: &quot;Open Sans&quot;, &quot;label&quot;: &quot;Open Sans&quot; }, { &quot;value&quot;: &quot;Oswald&quot;, &quot;label&quot;: &quot;Oswald&quot; }, { &quot;value&quot;: &quot;Passion One&quot;, &quot;label&quot;: &quot;Passion One&quot; }, { &quot;value&quot;: &quot;Pontano Sans&quot;, &quot;label&quot;: &quot;Pontano Sans&quot; }, { &quot;value&quot;: &quot;Prata&quot;, &quot;label&quot;: &quot;Prata&quot; }, { &quot;value&quot;: &quot;PT Mono&quot;, &quot;label&quot;: &quot;PT Mono&quot; }, { &quot;value&quot;: &quot;Questrial&quot;, &quot;label&quot;: &quot;Questrial&quot; }, { &quot;value&quot;: &quot;Quicksand&quot;, &quot;label&quot;: &quot;Quicksand&quot; }, { &quot;value&quot;: &quot;Racing Sans One&quot;, &quot;label&quot;: &quot;Racing Sans One&quot; }, { &quot;value&quot;: &quot;Source Sans Pro&quot;, &quot;label&quot;: &quot;Source Sans Pro&quot; }, { &quot;value&quot;: &quot;Telex&quot;, &quot;label&quot;: &quot;Telex&quot; }, { &quot;value&quot;: &quot;Viga&quot;, &quot;label&quot;: &quot;Viga&quot; } ], &quot;default&quot;: &quot;Oswald&quot; }',
    1 => 'select_json',
  ),
  'udt_cartel_caption_size_1_font_size' => 
  array (
    0 => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;100px&quot;
}',
    1 => 'select_json',
  ),
  'udt_cartel_caption_size_1_line_height' => 
  array (
    0 => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;78px&quot;
}',
    1 => 'select_json',
  ),
  'udt_cartel_caption_size_2_font_size' => 
  array (
    0 => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;80px&quot;
}',
    1 => 'select_json',
  ),
  'udt_cartel_caption_size_2_line_height' => 
  array (
    0 => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;62px&quot;
}',
    1 => 'select_json',
  ),
  'udt_cartel_caption_size_3_font_size' => 
  array (
    0 => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;70px&quot;
}',
    1 => 'select_json',
  ),
  'udt_cartel_caption_size_3_line_height' => 
  array (
    0 => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;55px&quot;
}',
    1 => 'select_json',
  ),
  'udt_cartel_caption_size_4_font_size' => 
  array (
    0 => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;60px&quot;
}',
    1 => 'select_json',
  ),
  'udt_cartel_caption_size_4_line_height' => 
  array (
    0 => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;46px&quot;
}',
    1 => 'select_json',
  ),
  'udt_cartel_caption_size_5_font_size' => 
  array (
    0 => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;50px&quot;
}',
    1 => 'select_json',
  ),
  'udt_cartel_caption_size_5_line_height' => 
  array (
    0 => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;40px&quot;
}',
    1 => 'select_json',
  ),
  'udt_cartel_caption_size_6_font_size' => 
  array (
    0 => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;40px&quot;
}',
    1 => 'select_json',
  ),
  'udt_cartel_caption_size_6_line_height' => 
  array (
    0 => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;32px&quot;
}',
    1 => 'select_json',
  ),
  'udt_cartel_thumb_rollover_font' => 
  array (
    0 => 'json{ &quot;values&quot;: [ { &quot;value&quot;: &quot;Abril Fatface&quot;, &quot;label&quot;: &quot;Abril Fatface&quot; }, { &quot;value&quot;: &quot;Alfa Slab One&quot;, &quot;label&quot;: &quot;Alfa Slab One&quot; }, { &quot;value&quot;: &quot;Allerta&quot;, &quot;label&quot;: &quot;Allerta&quot; }, { &quot;value&quot;: &quot;Anton&quot;, &quot;label&quot;: &quot;Anton&quot; }, { &quot;value&quot;: &quot;Armata&quot;, &quot;label&quot;: &quot;Armata&quot; }, { &quot;value&quot;: &quot;Brawler&quot;, &quot;label&quot;: &quot;Brawler&quot; }, { &quot;value&quot;: &quot;Cabin Condensed&quot;, &quot;label&quot;: &quot;Cabin Condensed&quot; }, { &quot;value&quot;: &quot;Candal&quot;, &quot;label&quot;: &quot;Candal&quot; }, { &quot;value&quot;: &quot;Cantata One&quot;, &quot;label&quot;: &quot;Cantata One&quot; }, { &quot;value&quot;: &quot;Changa One&quot;, &quot;label&quot;: &quot;Changa One&quot; }, { &quot;value&quot;: &quot;Coda&quot;, &quot;label&quot;: &quot;Coda&quot; }, { &quot;value&quot;: &quot;Coda Caption&quot;, &quot;label&quot;: &quot;Coda Caption&quot; }, { &quot;value&quot;: &quot;Comfortaa&quot;, &quot;label&quot;: &quot;Comfortaa&quot; }, { &quot;value&quot;: &quot;Contrail One&quot;, &quot;label&quot;: &quot;Contrail One&quot; }, { &quot;value&quot;: &quot;Coustard&quot;, &quot;label&quot;: &quot;Coustard&quot; }, { &quot;value&quot;: &quot;Days One&quot;, &quot;label&quot;: &quot;Days One&quot; }, { &quot;value&quot;: &quot;Diplomata&quot;, &quot;label&quot;: &quot;Diplomata&quot; }, { &quot;value&quot;: &quot;Enriqueta&quot;, &quot;label&quot;: &quot;Enriqueta&quot; }, { &quot;value&quot;: &quot;Francois One&quot;, &quot;label&quot;: &quot;Francois One&quot; }, { &quot;value&quot;: &quot;Glegoo&quot;, &quot;label&quot;: &quot;Glegoo&quot; }, { &quot;value&quot;: &quot;Hammersmith One&quot;, &quot;label&quot;: &quot;Hammersmith One&quot; }, { &quot;value&quot;: &quot;IM Fell French Canon SC&quot;, &quot;label&quot;: &quot;IM Fell French Canon SC&quot; }, { &quot;value&quot;: &quot;Istok Web&quot;, &quot;label&quot;: &quot;Istok Web&quot; }, { &quot;value&quot;: &quot;Karla&quot;, &quot;label&quot;: &quot;Karla&quot; }, { &quot;value&quot;: &quot;Lobster&quot;, &quot;label&quot;: &quot;Lobster&quot; }, { &quot;value&quot;: &quot;Mate SC&quot;, &quot;label&quot;: &quot;Mate SC&quot; }, { &quot;value&quot;: &quot;Maven Pro&quot;, &quot;label&quot;: &quot;Maven Pro&quot; }, { &quot;value&quot;: &quot;Molengo&quot;, &quot;label&quot;: &quot;Molengo&quot; }, { &quot;value&quot;: &quot;Montserrat&quot;, &quot;label&quot;: &quot;Montserrat&quot; }, { &quot;value&quot;: &quot;Noticia Text&quot;, &quot;label&quot;: &quot;Noticia Text&quot; }, { &quot;value&quot;: &quot;Oleo Script&quot;, &quot;label&quot;: &quot;Oleo Script&quot; }, { &quot;value&quot;: &quot;Open Sans&quot;, &quot;label&quot;: &quot;Open Sans&quot; }, { &quot;value&quot;: &quot;Oswald&quot;, &quot;label&quot;: &quot;Oswald&quot; }, { &quot;value&quot;: &quot;Passion One&quot;, &quot;label&quot;: &quot;Passion One&quot; }, { &quot;value&quot;: &quot;Pontano Sans&quot;, &quot;label&quot;: &quot;Pontano Sans&quot; }, { &quot;value&quot;: &quot;Prata&quot;, &quot;label&quot;: &quot;Prata&quot; }, { &quot;value&quot;: &quot;PT Mono&quot;, &quot;label&quot;: &quot;PT Mono&quot; }, { &quot;value&quot;: &quot;Questrial&quot;, &quot;label&quot;: &quot;Questrial&quot; }, { &quot;value&quot;: &quot;Quicksand&quot;, &quot;label&quot;: &quot;Quicksand&quot; }, { &quot;value&quot;: &quot;Racing Sans One&quot;, &quot;label&quot;: &quot;Racing Sans One&quot; }, { &quot;value&quot;: &quot;Source Sans Pro&quot;, &quot;label&quot;: &quot;Source Sans Pro&quot; }, { &quot;value&quot;: &quot;Telex&quot;, &quot;label&quot;: &quot;Telex&quot; }, { &quot;value&quot;: &quot;Viga&quot;, &quot;label&quot;: &quot;Viga&quot; } ], &quot;default&quot;: &quot;Oswald&quot; }',
    1 => 'select_json',
  ),
  'udt_cartel_thumb_rollover_font_size' => 
  array (
    0 => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;16px&quot;
}',
    1 => 'select_json',
  ),
  'udt_cartel_thumb_rollover_line_height' => 
  array (
    0 => 'json{
&quot;values&quot;: [
{
&quot;value&quot;: &quot;10px&quot;,
&quot;label&quot;: &quot;10px&quot;
},
{
&quot;value&quot;: &quot;11px&quot;,
&quot;label&quot;: &quot;11px&quot;
},
{
&quot;value&quot;: &quot;12px&quot;,
&quot;label&quot;: &quot;12px&quot;
},
{
&quot;value&quot;: &quot;13px&quot;,
&quot;label&quot;: &quot;13px&quot;
},
{
&quot;value&quot;: &quot;14px&quot;,
&quot;label&quot;: &quot;14px&quot;
},
{
&quot;value&quot;: &quot;15px&quot;,
&quot;label&quot;: &quot;15px&quot;
},
{
&quot;value&quot;: &quot;16px&quot;,
&quot;label&quot;: &quot;16px&quot;
},
{
&quot;value&quot;: &quot;17px&quot;,
&quot;label&quot;: &quot;17px&quot;
},
{
&quot;value&quot;: &quot;18px&quot;,
&quot;label&quot;: &quot;18px&quot;
},
{
&quot;value&quot;: &quot;19px&quot;,
&quot;label&quot;: &quot;19px&quot;
},
{
&quot;value&quot;: &quot;20px&quot;,
&quot;label&quot;: &quot;20px&quot;
},
{
&quot;value&quot;: &quot;21px&quot;,
&quot;label&quot;: &quot;21px&quot;
},
{
&quot;value&quot;: &quot;22px&quot;,
&quot;label&quot;: &quot;22px&quot;
},
{
&quot;value&quot;: &quot;23px&quot;,
&quot;label&quot;: &quot;23px&quot;
},
{
&quot;value&quot;: &quot;24px&quot;,
&quot;label&quot;: &quot;24px&quot;
},
{
&quot;value&quot;: &quot;25px&quot;,
&quot;label&quot;: &quot;25px&quot;
},
{
&quot;value&quot;: &quot;26px&quot;,
&quot;label&quot;: &quot;26px&quot;
},
{
&quot;value&quot;: &quot;27px&quot;,
&quot;label&quot;: &quot;27px&quot;
},
{
&quot;value&quot;: &quot;28px&quot;,
&quot;label&quot;: &quot;28px&quot;
},
{
&quot;value&quot;: &quot;29px&quot;,
&quot;label&quot;: &quot;29px&quot;
},
{
&quot;value&quot;: &quot;30px&quot;,
&quot;label&quot;: &quot;30px&quot;
},
{
&quot;value&quot;: &quot;31px&quot;,
&quot;label&quot;: &quot;31px&quot;
},
{
&quot;value&quot;: &quot;32px&quot;,
&quot;label&quot;: &quot;32px&quot;
},
{
&quot;value&quot;: &quot;33px&quot;,
&quot;label&quot;: &quot;33px&quot;
},
{
&quot;value&quot;: &quot;34px&quot;,
&quot;label&quot;: &quot;34px&quot;
},
{
&quot;value&quot;: &quot;35px&quot;,
&quot;label&quot;: &quot;35px&quot;
},
{
&quot;value&quot;: &quot;36px&quot;,
&quot;label&quot;: &quot;36px&quot;
},
{
&quot;value&quot;: &quot;37px&quot;,
&quot;label&quot;: &quot;37px&quot;
},
{
&quot;value&quot;: &quot;38px&quot;,
&quot;label&quot;: &quot;38px&quot;
},
{
&quot;value&quot;: &quot;39px&quot;,
&quot;label&quot;: &quot;39px&quot;
},
{
&quot;value&quot;: &quot;40px&quot;,
&quot;label&quot;: &quot;40px&quot;
},
{
&quot;value&quot;: &quot;41px&quot;,
&quot;label&quot;: &quot;41px&quot;
},
{
&quot;value&quot;: &quot;42px&quot;,
&quot;label&quot;: &quot;42px&quot;
},
{
&quot;value&quot;: &quot;43px&quot;,
&quot;label&quot;: &quot;43px&quot;
},
{
&quot;value&quot;: &quot;44px&quot;,
&quot;label&quot;: &quot;44px&quot;
},
{
&quot;value&quot;: &quot;45px&quot;,
&quot;label&quot;: &quot;45px&quot;
},
{
&quot;value&quot;: &quot;46px&quot;,
&quot;label&quot;: &quot;46px&quot;
},
{
&quot;value&quot;: &quot;47px&quot;,
&quot;label&quot;: &quot;47px&quot;
},
{
&quot;value&quot;: &quot;48px&quot;,
&quot;label&quot;: &quot;48px&quot;
},
{
&quot;value&quot;: &quot;49px&quot;,
&quot;label&quot;: &quot;49px&quot;
},
{
&quot;value&quot;: &quot;50px&quot;,
&quot;label&quot;: &quot;50px&quot;
},
{
&quot;value&quot;: &quot;51px&quot;,
&quot;label&quot;: &quot;51px&quot;
},
{
&quot;value&quot;: &quot;52px&quot;,
&quot;label&quot;: &quot;52px&quot;
},
{
&quot;value&quot;: &quot;53px&quot;,
&quot;label&quot;: &quot;53px&quot;
},
{
&quot;value&quot;: &quot;54px&quot;,
&quot;label&quot;: &quot;54px&quot;
},
{
&quot;value&quot;: &quot;55px&quot;,
&quot;label&quot;: &quot;55px&quot;
},
{
&quot;value&quot;: &quot;56px&quot;,
&quot;label&quot;: &quot;56px&quot;
},
{
&quot;value&quot;: &quot;57px&quot;,
&quot;label&quot;: &quot;57px&quot;
},
{
&quot;value&quot;: &quot;58px&quot;,
&quot;label&quot;: &quot;58px&quot;
},
{
&quot;value&quot;: &quot;59px&quot;,
&quot;label&quot;: &quot;59px&quot;
},
{
&quot;value&quot;: &quot;60px&quot;,
&quot;label&quot;: &quot;60px&quot;
},
{
&quot;value&quot;: &quot;61px&quot;,
&quot;label&quot;: &quot;61px&quot;
},
{
&quot;value&quot;: &quot;62px&quot;,
&quot;label&quot;: &quot;62px&quot;
},
{
&quot;value&quot;: &quot;63px&quot;,
&quot;label&quot;: &quot;63px&quot;
},
{
&quot;value&quot;: &quot;64px&quot;,
&quot;label&quot;: &quot;64px&quot;
},
{
&quot;value&quot;: &quot;65px&quot;,
&quot;label&quot;: &quot;65px&quot;
},
{
&quot;value&quot;: &quot;66px&quot;,
&quot;label&quot;: &quot;66px&quot;
},
{
&quot;value&quot;: &quot;67px&quot;,
&quot;label&quot;: &quot;67px&quot;
},
{
&quot;value&quot;: &quot;68px&quot;,
&quot;label&quot;: &quot;68px&quot;
},
{
&quot;value&quot;: &quot;69px&quot;,
&quot;label&quot;: &quot;69px&quot;
},
{
&quot;value&quot;: &quot;70px&quot;,
&quot;label&quot;: &quot;70px&quot;
},
{
&quot;value&quot;: &quot;71px&quot;,
&quot;label&quot;: &quot;71px&quot;
},
{
&quot;value&quot;: &quot;72px&quot;,
&quot;label&quot;: &quot;72px&quot;
},
{
&quot;value&quot;: &quot;73px&quot;,
&quot;label&quot;: &quot;73px&quot;
},
{
&quot;value&quot;: &quot;74px&quot;,
&quot;label&quot;: &quot;74px&quot;
},
{
&quot;value&quot;: &quot;75px&quot;,
&quot;label&quot;: &quot;75px&quot;
},
{
&quot;value&quot;: &quot;76px&quot;,
&quot;label&quot;: &quot;76px&quot;
},
{
&quot;value&quot;: &quot;77px&quot;,
&quot;label&quot;: &quot;77px&quot;
},
{
&quot;value&quot;: &quot;78px&quot;,
&quot;label&quot;: &quot;78px&quot;
},
{
&quot;value&quot;: &quot;79px&quot;,
&quot;label&quot;: &quot;79px&quot;
},
{
&quot;value&quot;: &quot;80px&quot;,
&quot;label&quot;: &quot;80px&quot;
},
{
&quot;value&quot;: &quot;81px&quot;,
&quot;label&quot;: &quot;81px&quot;
},
{
&quot;value&quot;: &quot;82px&quot;,
&quot;label&quot;: &quot;82px&quot;
},
{
&quot;value&quot;: &quot;83px&quot;,
&quot;label&quot;: &quot;83px&quot;
},
{
&quot;value&quot;: &quot;84px&quot;,
&quot;label&quot;: &quot;84px&quot;
},
{
&quot;value&quot;: &quot;85px&quot;,
&quot;label&quot;: &quot;85px&quot;
},
{
&quot;value&quot;: &quot;86px&quot;,
&quot;label&quot;: &quot;86px&quot;
},
{
&quot;value&quot;: &quot;87px&quot;,
&quot;label&quot;: &quot;87px&quot;
},
{
&quot;value&quot;: &quot;88px&quot;,
&quot;label&quot;: &quot;88px&quot;
},
{
&quot;value&quot;: &quot;89px&quot;,
&quot;label&quot;: &quot;89px&quot;
},
{
&quot;value&quot;: &quot;90px&quot;,
&quot;label&quot;: &quot;90px&quot;
},
{
&quot;value&quot;: &quot;91px&quot;,
&quot;label&quot;: &quot;91px&quot;
},
{
&quot;value&quot;: &quot;92px&quot;,
&quot;label&quot;: &quot;92px&quot;
},
{
&quot;value&quot;: &quot;93px&quot;,
&quot;label&quot;: &quot;93px&quot;
},
{
&quot;value&quot;: &quot;94px&quot;,
&quot;label&quot;: &quot;94px&quot;
},
{
&quot;value&quot;: &quot;95px&quot;,
&quot;label&quot;: &quot;95px&quot;
},
{
&quot;value&quot;: &quot;96px&quot;,
&quot;label&quot;: &quot;96px&quot;
},
{
&quot;value&quot;: &quot;97px&quot;,
&quot;label&quot;: &quot;97px&quot;
},
{
&quot;value&quot;: &quot;98px&quot;,
&quot;label&quot;: &quot;98px&quot;
},
{
&quot;value&quot;: &quot;99px&quot;,
&quot;label&quot;: &quot;99px&quot;
},
{
&quot;value&quot;: &quot;100px&quot;,
&quot;label&quot;: &quot;100px&quot;
}
],
&quot;default&quot;: &quot;16px&quot;
}',
    1 => 'select_json',
  ),
  'udt_cartel_epic_slider_slideshow' => 
  array (
    0 => '0',
    1 => 'toggle_switch',
  ),
  'udt_cartel_epic_slider_autoplay' => 
  array (
    0 => '1',
    1 => 'toggle_switch',
  ),
  'udt_cartel_epic_slider_navigation_style' => 
  array (
    0 => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;arrows&quot;, &quot;label&quot;:&quot;Arrows&quot; }, { &quot;value&quot;:&quot;bullets&quot;, &quot;label&quot;:&quot;Bullets&quot; } ], &quot;default&quot;:&quot;arrows&quot; }',
    1 => 'select_json',
  ),
  'udt_cartel_epic_slider_slide_timer' => 
  array (
    0 => '3000',
    1 => 'input_text',
  ),
  'udt_cartel_epic_slider_slide_animation_speed' => 
  array (
    0 => '600',
    1 => 'input_text',
  ),
  'udt_cartel_epic_slider_slide_animation' => 
  array (
    0 => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;none&quot;, &quot;label&quot;:&quot;None&quot; }, { &quot;value&quot;:&quot;fade&quot;, &quot;label&quot;:&quot;Fade&quot; }, { &quot;value&quot;:&quot;leftToRight&quot;, &quot;label&quot;:&quot;Left to Right&quot; }, { &quot;value&quot;:&quot;topToBottom&quot;, &quot;label&quot;:&quot;Top to Bottom&quot; } ], &quot;default&quot;:&quot;leftToRight&quot; }',
    1 => 'select_json',
  ),
  'udt_cartel_epic_slider_mobile_slide_animation' => 
  array (
    0 => 'json{ &quot;values&quot;: [ { &quot;value&quot;:&quot;none&quot;, &quot;label&quot;:&quot;None&quot; }, { &quot;value&quot;:&quot;fade&quot;, &quot;label&quot;:&quot;Fade&quot; }, { &quot;value&quot;:&quot;leftToRight&quot;, &quot;label&quot;:&quot;Left to Right&quot; }, { &quot;value&quot;:&quot;topToBottom&quot;, &quot;label&quot;:&quot;Top to Bottom&quot; } ], &quot;default&quot;:&quot;fade&quot; }',
    1 => 'select_json',
  ),
  'udt_cartel_epic_slider_easing' => 
  array (
    0 => 'easeInQuad,easeInQuad,easeInOutQuad,easeInCubic,easeOutCubic,easeInOutCubic,easeInQuart,easeOutQuart,easeInOutQuart,easeInQuint,easeOutQuint,easeInOutQuint,easeInSine,easeOutSine,easeInOutSine,easeInExpo,easeOutExpo,easeInOutExpo,easeInCirc,easeOutCirc,easeInOutCirc',
    1 => 'select',
  ),
  'udt_cartel_flexslider_autoplay' => 
  array (
    0 => '1',
    1 => 'toggle_switch',
  ),
  'udt_cartel_flexslider_slide_timer' => 
  array (
    0 => '3000',
    1 => 'input_text',
  ),
  'udt_cartel_flexslider_slide_animation_speed' => 
  array (
    0 => '600',
    1 => 'input_text',
  ),
  'udt_cartel_map_controls' => 
  array (
    0 => '1',
    1 => 'toggle_switch',
  ),
  'udt_cartel_map_marker' => 
  array (
    0 => 'map_marker.png',
    1 => 'input_upload',
  ),
  'udt_cartel_css_editor' => 
  array (
    0 => '',
    1 => 'textarea',
  ),
);
?>