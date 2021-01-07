"use strict";

//Document ready
jQuery(document).ready(function() {

	/********************************
	    - Hide loader on mobile -
	********************************/
	if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
		jQuery(".player").hide();
    	jQuery(".player-controls").hide();
	}
	
	/********************
		- Countdown -
	********************/
	jQuery('.countdown').countdown({
		date:launchDay,
		render:function(data) {
			jQuery(this.el).html(
				"<div>"+this.leadingZeros(data.days, 3)+"<span>"+days_label+"</span></div>"+
				"<div>"+this.leadingZeros(data.hours, 2)+"<span>"+hours_label+"</span></div>"+
				"<div>"+this.leadingZeros(data.min, 2)+"<span>"+minutes_label+"</span></div>"+
				"<div>"+this.leadingZeros(data.sec, 2)+"<span>"+seconds_label+"</span></div>"
			);
		}
	});
	
	/********************
		- Up button -
	********************/
	jQuery('.up-btn').on("click", function() {
		jQuery(window).scrollTo(jQuery('body'), 1500, {offset:{top:0, left:0}});
	});
	
	/**************************
	    - Newsletter form -
	**************************/
	jQuery('<div class="success"></div>').hide().appendTo('.subscribe');
	
	jQuery("#newsletter-form").validate({
		rules:{
			email:{
				required:true, 
				email:true
			}
		},
		messages:{
			email:{
				required:"Email address is required",
				email:"Email address is not valid"
			}
		},
		errorElement:"p",
		errorPlacement:function(error, element) {
			error.appendTo(element.parent());
		},
		submitHandler:function(form) {
			var frm = jQuery(form),
				url = frm.attr("action");
			
			//Show loader
			jQuery(".page-loader").addClass("overlay").css({opacity:0}).show().animate({opacity:1});
			
			//Form fields
			var arrField = {};
			
			jQuery.each(frm.serializeArray(), function(index, value) {
				arrField[value.name] = value.value;
			});
			
			//Submit form
			jQuery.ajax({
				url:url,
				type:"POST",
				data:arrField,
				dataType:"json",
				crossDomain:true,
				success:function(data) {
					jQuery(".page-loader").animate({opacity:0}, function() {
						//Hide loader
						jQuery(this).hide();
						
						//Hide form
						if (data.result!=="error") {
							frm.hide();
						}
						
						//Result message
						jQuery("#newsletter .success").show().html(data.msg).animate({opacity:1});
					});
				}
			});
			
			return false;
		}
	});
	
	/***********************
	    - Contact form -
	***********************/
	jQuery("#submit").on("click", function(e) {
		var frm = jQuery("#ajax-contact-form");
		
		//Validate and process form 
    	jQuery("#ajax-contact-form").validate({             
			rules:{			
				name:{
					required:true,
				},
							
				email:{
					required:true,
					email:true,
				},
							
				message:{
					required:true,
				},
			},
			
			messages:{			
				name:{
					required:"<i class='fa fa-exclamation-triangle name'></i>",
				},
			
				email:{
					required:"<i class='fa fa-exclamation-triangle email'></i>",
					email:"<i class='fa fa-exclamation-triangle email'></i>",
				},
			
				message:{
					required:"<i class='fa fa-exclamation-triangle message'></i>",
				},
			
			},

            //Submit form
           	submitHandler:function(form) {
		 		//Create variables from the form
		 		var name = frm.find('input#name').val();
		 		var email = frm.find('input#email').val();
				var phone = frm.find('input#phone').val();
		 		var message = frm.find('textarea#message').val();

               	//Create variables that will be sent in a URL string to contact.php
              	var dataString = '&name='+name+'&email='+email+'&phone='+phone+'&message='+message;
        		
				jQuery.ajax({
                	type:"POST",
                   	url:frm.attr("action"),
                    data:dataString,
                    success:function(data) {
						var result = "";
						
                    	if(data==="ok") { 
							frm.find('input[type=text], input[type=email], textarea').val(""); 
							result = '<div class="notification_ok"><i class="fa fa-check"></i> Your email was sent. Thanks!</div>';
                       	} else {
                        	result = data;
                        }
                        
						jQuery("#note").html(result);
           			}                         
              	});
					  
				return false;
        	}
		});
    });
	
	/*************************
	    - Youtube player -
	*************************/
    jQuery(".player").mb_YTPlayer();
    
   	//Player controls
    jQuery('#play').on("click", function(){
    	jQuery('.player').playYTP();
	});

  	jQuery('#pause').on("click", function(){
    	jQuery('.player').pauseYTP();
	});
	
	//Google Maps
	googleMaps();
	
});

/**********************
	- Magic mouse -
**********************/
var magicMouse = function() {
	var mouseOpacity = 1-jQuery(document).scrollTop()/400;
	if (mouseOpacity<0) mouseOpacity = 0;
	jQuery(document).find(".mouse").css({opacity:mouseOpacity});
};

/**********************
	- Window load -
**********************/
jQuery(window).on("load", function() {
    jQuery(".page-loader").delay(700).fadeOut("slow");
 
	setTimeout(function() {
		jQuery(".logo").delay(1000).css({display:'none'}).fadeIn(1000);
		jQuery("h1").delay(1000).css({display:'none'}).fadeIn(1000);
		jQuery("p").delay(1000).css({display:'none'}).fadeIn(1000);
		jQuery(".countdown").delay(1000).css({display:'none'}).fadeIn(1000);
		jQuery(".mouse").delay(1000).css({display:'none'}).fadeIn(1000);
    });
	
	magicMouse();
});

jQuery(window).on("scroll", function() {
	 magicMouse();
});

/**********************
	- Google Maps -
**********************/
function googleMaps() {
	if (jQuery('#google-container').length===0) {
		return;
	}
	
	//Variables
	var title = arrMap.title;
	var latitude = arrMap.latitude;
	var longitude = arrMap.longitude;
	var zoom = arrMap.zoom;
	
	//Marker icon
	var marker_url = arrMap.marker;
	
	//Main color
	var main_color = arrMap.color;
	
	//Saturation and brightness
	var saturation_value = -20;
	var brightness_value = 5;

	//Map style
	var style= [ 
		{//Set saturation for the labels on the map
			elementType:"labels",
			stylers:[
				{saturation:saturation_value},
			]
		}, 
		
		{//Poi stands for point of interest - don't show these labels on the map 
			featureType:"poi",
			elementType:"labels",
			stylers:[
				{visibility:"off"},
			]
		},
		
		{//Hide highways labels on the map
			featureType:'road.highway',
			elementType:'labels',
			stylers:[
				{visibility:"off"},
			]
		}, 
	
		{//Hide local road labels on the map
			featureType:"road.local", 
			elementType:"labels.icon", 
			stylers:[
				{visibility:"off"}, 
			] 
		},
		
		{//Hide arterial road labels on the map
			featureType:"road.arterial", 
			elementType:"labels.icon", 
			stylers:[
				{visibility:"off"},
			] 
		},
	
		{//Hide road labels on the map
			featureType:"road",
			elementType:"geometry.stroke",
			stylers:[
				{visibility:"off"},
			]
		},
		
		{//Style different elements on the map
			featureType:"transit", 
			elementType:"geometry.fill", 
			stylers:[
				{hue:main_color},
				{visibility:"on"}, 
				{lightness:brightness_value}, 
				{saturation:saturation_value},
			]
		}, 
		
		{
			featureType:"poi",
			elementType:"geometry.fill",
			stylers:[
				{hue:main_color},
				{visibility:"on"}, 
				{lightness:brightness_value}, 
				{saturation:saturation_value},
			]
		},
		
		{
			featureType:"poi.government",
			elementType:"geometry.fill",
			stylers:[
				{hue:main_color},
				{visibility:"on"}, 
				{lightness:brightness_value}, 
				{saturation:saturation_value},
			]
		},
		
		{
			featureType:"poi.sport_complex",
			elementType:"geometry.fill",
			stylers:[
				{hue:main_color},
				{visibility:"on"}, 
				{lightness:brightness_value}, 
				{saturation:saturation_value},
			]
		},
		
		{
			featureType:"poi.attraction",
			elementType:"geometry.fill",
			stylers:[
				{hue:main_color},
				{visibility:"on"}, 
				{lightness:brightness_value}, 
				{saturation:saturation_value},
			]
		},
		
		{
			featureType:"poi.business",
			elementType:"geometry.fill",
			stylers:[
				{hue:main_color},
				{visibility:"on"}, 
				{lightness:brightness_value}, 
				{saturation:saturation_value},
			]
		},
		
		{
			featureType:"transit",
			elementType:"geometry.fill",
			stylers:[
				{hue:main_color},
				{visibility:"on"}, 
				{lightness:brightness_value}, 
				{saturation:saturation_value},
			]
		},
		
		{
			featureType:"transit.station",
			elementType:"geometry.fill",
			stylers:[
				{hue:main_color},
				{visibility:"on"}, 
				{lightness:brightness_value}, 
				{saturation:saturation_value},
			]
		},
		
		{
			featureType:"landscape",
			stylers:[
				{hue:main_color},
				{visibility:"on"}, 
				{lightness:brightness_value}, 
				{saturation:saturation_value},
			]	
		},
		
		{
			featureType:"road",
			elementType:"geometry.fill",
			stylers:[
				{hue:main_color},
				{visibility:"on"}, 
				{lightness:brightness_value}, 
				{saturation:saturation_value},
			]
		},
	
		{
			featureType:"road.highway",
			elementType:"geometry.fill",
			stylers:[
				{hue:main_color},
				{visibility:"on"}, 
				{lightness:brightness_value}, 
				{saturation:saturation_value},
			]
		},
		
		{
			featureType:"water",
			elementType:"geometry",
			stylers:[
				{hue:main_color},
				{visibility:"on"}, 
				{lightness:brightness_value}, 
				{saturation:saturation_value},
			]
		}
	];
	
	//Set google map options
	var map_options = {
		center:new google.maps.LatLng(latitude, longitude),
		zoom:zoom,
		panControl:false,
		zoomControl:false,
		mapTypeControl:false,
		streetViewControl:false,
		mapTypeId:google.maps.MapTypeId.ROADMAP,
		scrollwheel:false,
		styles:style
	}
	
	//Inizialize the map
	var map = new google.maps.Map(document.getElementById('google-container'), map_options);
 
	//Add a custom marker to the map        
	var marker = new google.maps.Marker({
		position:new google.maps.LatLng(latitude, longitude),
		map:map,
		title:title,
		visible:true,
		icon:marker_url
	});

	google.maps.event.addDomListener(window, "resize", function() {
		var center = map.getCenter();
		google.maps.event.trigger(map, "resize");
		map.setCenter(center); 
	});

	//Add custom buttons for the zoom-in/zoom-out on the map
	if (arrMap.zoomControlDiv==undefined) {		
		function customZoomControl(controlDiv, map) {
			//Grap the zoom elements from the DOM and insert them in the map 
			var controlUIzoomIn = document.getElementById('zoom-in'),
			controlUIzoomOut = document.getElementById('zoom-out');
		  
			controlDiv.appendChild(controlUIzoomIn);
			controlDiv.appendChild(controlUIzoomOut);
	
			//Setup the click event listeners and zoom-in or out according to the clicked element
			google.maps.event.addDomListener(controlUIzoomIn, 'click', function() {
				map.setZoom(map.getZoom()+1);
			});
			
			google.maps.event.addDomListener(controlUIzoomOut, 'click', function() {
				map.setZoom(map.getZoom()-1);
			});
		}
	
		var zoomControlDiv = document.createElement('div');		
		var zoomControl = new customZoomControl(zoomControlDiv, map);
		arrMap.zoomControlDiv = zoomControlDiv;
	}
		
	//Insert the zoom div on the top left of the map
	map.controls[google.maps.ControlPosition.LEFT_TOP].push(arrMap.zoomControlDiv);
}

