jQuery(document).ready(function ($) {

	"use strict";

	/** Ajax Plugin Installation **/
	$(".install").on('click', function (e) {
		e.preventDefault();
		var el = $(this);

		var is_loading = true;
    	el.addClass('installing');
    	var plugin = $(el).attr('data-slug');
    	var plugin_file = $(el).attr('data-file');
    	var ajaxurl = CWWWelcomeObject.ajaxurl;

		$.ajax({
			type: 'POST',
			url: ajaxurl,
			data: {
				action: 'plugin_installer',
				plugin: plugin,
				plugin_file: plugin_file,
				nonce: CWWWelcomeObject.admin_nonce,
			},
			success: function(response) {

		   		if(response == 'success'){

				   		el.attr('class', 'installed button');
				   		el.html(CWWWelcomeObject.installed_btn);

		   		}

		   		el.removeClass('installing');
		   		is_loading = false;
		   		location.reload();
			},
			error: function(xhr, status, error) {
	  		el.removeClass('installing');
	  		is_loading = false;
			}
		});
	});

	

	/** Ajax Plugin Activation **/
	$(".plugin-action-btn .activate").on('click', function (e) {
		e.preventDefault();
		var el = $(this);
		el.addClass('installing');
		var el = $(this);
		var plugin = $(el).attr('data-slug');
		var plugin_file = $(el).attr('data-file');

    	var ajaxurl = CWWWelcomeObject.ajaxurl;

		$.ajax({
	   		type: 'POST',
	   		url: ajaxurl,
	   		data: {
	   			action: 'plugin_activation',
	   			plugin: plugin,
	   			plugin_file: plugin_file,
	   			nonce: CWWWelcomeObject.activate_nonce,
	   			dataType: 'json'
	   		},
	   		success: function(response) {
	   			el.removeClass('installing');
		   		if(response == 'success'){
			   		el.attr('class', 'installed button');
			   		el.html(CWWWelcomeObject.installed_btn);
		   		}
		   		location.reload();
	   		},
	   	});
	});

	/** Ajax Plugin Deactivation **/
	$(".plugin-action-btn .deactivate").on('click', function (e) {
		e.preventDefault();
		var el = $(this);
		el.addClass('installing');
		var el = $(this);
		var plugin = $(el).attr('data-slug');
		var plugin_file = $(el).attr('data-file');

    	var ajaxurl = CWWWelcomeObject.ajaxurl;

		$.ajax({
	   		type: 'POST',
	   		url: ajaxurl,
	   		data: {
	   			action: 'plugin_deactivation',
	   			plugin: plugin,
	   			plugin_file: plugin_file,
	   			nonce: CWWWelcomeObject.deactivate_nonce,
	   			dataType: 'json'
	   		},
	   		success: function(response) {
	   			el.removeClass('installing');
		   		if(response == 'success'){
			   		el.attr('class', 'installed button');
			   		el.html(CWWWelcomeObject.installed_btn);
		   		}
		   		location.reload();
	   		},
	   	});
	});


	/** Install companion plugin on clicking get started button **/
	$(".btn-companion-install").on('click', function (e) {
		e.preventDefault();
		var el = $(this);

		var is_loading = true;
    	el.addClass('installing');
    	var plugin = $(el).attr('data-slug');
    	var plugin_file = $(el).attr('data-file');
    	var ajaxurl = CWWWelcomeObject.ajaxurl;

		$.ajax({
			type: 'POST',
			url: ajaxurl,
			data: {
				action: 'plugin_installer',
				plugin: plugin,
				plugin_file: plugin_file,
				nonce: CWWWelcomeObject.admin_nonce,
			},
			success: function(response) {

		   		if(response == 'success'){


		   		}

		   		el.removeClass('installing');
		   		is_loading = false;
		   		location.reload();
			},
			error: function(xhr, status, error) {
	  		
	  		el.removeClass('installing');
	  		is_loading = false;
			}
		});
	});

});