/* udff_saveSetteingItemsAll.js */

jQuery(document).ready(function(){
	jQuery('.thisIsSaveAllButton').click(function(){
		if(!settingItemButtonActiveState (this)) return;

		var that = this;
		var data_array = [];
		var settingValue_string;
		var error_check = [];
		
		var targetPanels = jQuery('#content-wrapper');
		
		// change scope
		var allRevertButtons = targetPanels.find('div.module form input[id^="settingItem_revert_"]');
		var allSaveButtons = targetPanels.find('div.module form input[id^="settingItem_save_"]');
		
		jQuery(allSaveButtons).each(function(i){
			settingValue_string = '';
			var targetSettingItemMessage = jQuery(this).parent().find('.settingItemMessage');
			var targetSettingItemMessage_error = targetSettingItemMessage.hasClass('settingItemErrorMessage');
			var targetSettingItemMessage_showHelpAlways = targetSettingItemMessage.hasClass('showHelpAlways');
			if(jQuery(this).hasClass('thisIsCheckbox')) {
				if(jQuery(this).parent().find('.toggleSwitch').prop('checked')) {
					settingValue_string = 1;
				} else {
					settingValue_string = 0;
				} 
			} else if (targetSettingItemMessage_error) {
				error_check.push(jQuery(this).parent().find('div.titleContainer h1').text());
			} else {
				if(jQuery(this).hasClass('thisIsTextarea')) {
					settingValue_string = jQuery(this).parent().find('textarea:first').val();
				} else if (jQuery(this).hasClass('thisIsSelect')) {
					jQuery(this).parent().find('select:first').fadeOut();
					settingValue_string = jQuery(this).parent().find('select:first').val();
				} else if (jQuery(this).hasClass('thisIsSelect_json')) {
					// thisIsSelect_json
					jQuery(this).parent().find('select:first').fadeOut();
					settingValue_string = jQuery(this).parent().find('select:first').val();
				} else {
					settingValue_string = jQuery(this).parent().find('input:first').prop('value');
				}
				data_array.push({id: jQuery(this).prop('id').replace('settingItem_save_',''), value: settingValue_string});
			}
			
			if(!targetSettingItemMessage_error && !targetSettingItemMessage_showHelpAlways) {
				targetSettingItemMessage.fadeOut();
			}			
		});
		
		if(error_check.length != 0) {
			jQuery(this).parent().find('div.settingItemMessage_all').css('display','block').text('Please verify: '+error_check);
			return;
		} else {
			jQuery(this).parent().find('div.settingItemMessage_all').fadeOut();
		}
		
		prepareForPosting_all (allSaveButtons, allRevertButtons, 0, that);
		
		sendDataToServer_all (that, data_array, 0);
	});
	
	jQuery('.thisIsInitAllButton').click(function(){
		if(!settingItemButtonActiveState (this)) return;
		var that = this;
		var data_array = [];
		var settingValue_string;
		
		var targetPanels = jQuery('#content-wrapper');
		
		// change scope
		var allRevertButtons = targetPanels.find('div.module form input[id^="settingItem_revert_"]');
		var allSaveButtons = targetPanels.find('div.module form input[id^="settingItem_save_"]');
		
		jQuery(allSaveButtons).each(function(i){
			settingValue_string = '';
			var targetSettingItemMessage = jQuery(this).parent().parent().find('.settingItemMessage');
			if(jQuery(this).hasClass('thisIsTextarea')) {
				settingValue_string = '';
			} else if (jQuery(this).hasClass('thisIsSelect')) {
				jQuery(this).parent().find('select:first').fadeOut();
				settingValue_string = '0';
			} else if (jQuery(this).hasClass('thisIsSelect_json')) {
				jQuery(this).parent().find('select:first').fadeOut();
				settingValue_string = 'select_json';
			} else if(jQuery(this).hasClass('thisIsCheckbox')) {
				settingValue_string = jQuery(this).parent().find('.toggleSwitch_initValue').val();
			} else {
				settingValue_string = '';
			}
			// targetSettingItemMessage.fadeOut();
			data_array.push({id: jQuery(this).prop('id').replace('settingItem_save_',''), value: settingValue_string});
		});
		
		prepareForPosting_all (allSaveButtons, allRevertButtons, 1, that);
		sendDataToServer_all (that, data_array, 1)
	});
	
	function sendDataToServer_all (that, data_array, init_switch) {
		var targetPanels = jQuery('#content-wrapper');
		
		var allRevertButtons = targetPanels.find('div.module form input[id^="settingItem_revert_"]');
		var allSaveButtons = targetPanels.find('div.module form input[id^="settingItem_save_"]');
		var encoded_data_array = jQuery.toJSON(data_array);
		/* handlings for save / init section buttons*/
		jQuery.post(foundry_ajaxurl, {
			action:"saveOptionSection",
				'json_data': encoded_data_array,
				'init_switch': init_switch,
				'_wpnonce' : jQuery('div#fp-wrapper input#_wpnonce').val(),
				'_wp_http_referer' : jQuery('div#fp-wrapper input[name=_wp_http_referer]').val()				
			},
		function(responseData)
		{
			var updateTarget;
			try {
				responseData = jQuery.parseJSON(responseData);
        	}catch( e ){
        		//
        	}
			if (responseData.result == 'ok') {
				for (var settingItem in responseData){
					if(settingItem !== 'result') {
						var resultTextDecoded = stripslashes(Encoder.htmlDecode(responseData[settingItem]));
						updateTarget = jQuery('#content-wrapper').find('input#settingItem_save_' + settingItem);
						if(updateTarget.hasClass('thisIsTextarea')) {	updateTarget.parent().find('textarea:first').prop('defaultValue',resultTextDecoded).val(Encoder.htmlDecode(resultTextDecoded));
						} else if (updateTarget.hasClass('thisIsSelect')) {
							updateTarget.parent().find('select:first').val(resultTextDecoded);
							updateTarget.parent().find('input:hidden.select_initValue').val(resultTextDecoded);
							updateTarget.parent().find('select:first').fadeIn();
						} else if (updateTarget.hasClass('thisIsCheckbox')) {
							// when any value is true make it checked otherwise set to unchecked
							if(resultTextDecoded == 0) {
								updateTarget.parent().find('.toggleSwitch').removeAttr('checked');
							} else {
								updateTarget.parent().find('.toggleSwitch').prop('checked','checked');
							}
							updateTarget.parent().find('.toggleSwitch').iphoneStyle("refresh");
						} else if (updateTarget.hasClass('thisIsSelect_json')) {
							updateTarget.parent().find('select:first').val(resultTextDecoded);
							updateTarget.parent().find('input:hidden.select_initValue').val(resultTextDecoded);
							updateTarget.parent().find('select:first').fadeIn();
						} else if (updateTarget.parent().parent().find('div.colorSelect').length) {
							updateTarget.parent().parent().find('div.colorSelect').css('backgroundColor','#'+resultTextDecoded );
							updateTarget.parent().find('input:first').prop('defaultValue',resultTextDecoded).prop('value',resultTextDecoded);
						} else {
							if (jQuery(this).hasClass('input_url')) {
								if(!resultTextDecoded.match('/^(http|https|ftp)/')) jQuery(this).val('http://'+resultTextDecoded);
							}
							updateTarget.parent().find('input:first').prop('defaultValue',resultTextDecoded).prop('value',resultTextDecoded);
						}
						var targetSettingItemMessage = updateTarget.parent().parent().find('.settingItemMessage');
						var targetSettingItemMessage_showHelpAlways = targetSettingItemMessage.hasClass('showHelpAlways');
						targetSettingItemMessage.removeClass('settingItemErrorMessage');
						if(!targetSettingItemMessage_showHelpAlways) {
							targetSettingItemMessage.hide();
						} else {
								targetSettingItemMessage.html(targetSettingItemMessage.parent().find('.settingItemMessage_helptext').html());
							targetSettingItemMessage.fadeIn();
						}
					}
				}
				jQuery(that).removeClass('saveProgress').addClass('saveSuccess').val('SUCCESS');
				setTimeout(function(){
            		saveReset_all(allSaveButtons, allRevertButtons);
            	},2000);
            	
			} else {
				jQuery(that).removeClass('saveProgress').addClass('saveError').val('ERROR');
				jQuery(this).parent().find('div.settingItemMessage_all').css('display','block').text('Error log: '+responseData);
				setTimeout(function(){
            		saveReset_all(allSaveButtons, allRevertButtons);
            	},2000);
			}
		});
	};
	
	function prepareForPosting_all (allSaveButtons, allRevertButtons, init_switch, that) {
		jQuery(allSaveButtons).removeClass('saveDisabled').removeClass('saveSuccess').removeClass('saveError').removeClass('saveProgress').prop('value','');
		jQuery(allRevertButtons).removeClass('saveDisabled').removeClass('saveSuccess').removeClass('saveError').removeClass('saveProgress').prop('value','');
		jQuery(allRevertButtons).fadeOut();
		jQuery(allSaveButtons).addClass('saveProgress');
		jQuery(that).removeClass('saveDisabled').removeClass('saveSuccess').removeClass('saveError').removeClass('saveProgress').addClass('saveProgress').val('Processing ...');
		jQuery(that).parent().find('.iPhoneCheckContainer').fadeOut();
		if(init_switch === 0) {
			jQuery(that).parent().parent().find('.thisIsInitSectionButton').addClass('saveDisabled');
			jQuery(that).parent().parent().find('.thisIsInitAllButton').addClass('saveDisabled');
		} else {
			jQuery(that).parent().parent().find('.thisIsSaveSectionButton').addClass('saveDisabled');
			jQuery(that).parent().parent().find('.thisIsSaveAllButton').addClass('saveDisabled');
		}
	}
	
	function saveReset_all (allSaveButtons, allRevertButtons) {
		var targetPanels = jQuery('#content-wrapper');
		var initall_button_label = jQuery('#initall_button_label').val();
		var saveall_button_label = jQuery('#saveall_button_label').val();
		
		targetPanels.find('.iPhoneCheckContainer').fadeIn();
		jQuery(allRevertButtons).prop('value','Revert').addClass('revertDisabled').fadeIn();
		jQuery(allSaveButtons).prop('value','Save').addClass('saveDisabled').removeClass('saveSuccess').removeClass('saveError').removeClass('saveProgress');
		targetPanels.find('.thisIsSaveSectionButton').removeClass('saveDisabled').removeClass('saveSuccess').removeClass('saveError').removeClass('saveProgress')
		targetPanels.find('.thisIsSaveSectionButton').val('SAVE');
		targetPanels.find('.thisIsSaveAllButton').removeClass('saveDisabled').removeClass('saveSuccess').removeClass('saveError').removeClass('saveProgress').val(saveall_button_label);
		targetPanels.find('.thisIsInitAllButton').removeClass('saveDisabled').removeClass('saveSuccess').removeClass('saveError').removeClass('saveProgress').val(initall_button_label);
		targetPanels.find('.thisIsInitSectionButton').removeClass('saveDisabled').removeClass('saveSuccess').removeClass('saveError').removeClass('saveProgress');
		targetPanels.find('.thisIsInitSectionButton').val('INITIALIZE');
	}
});
