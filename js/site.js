$(function() {

	$(".slider_fader").fader();

	$(".select-ui").selectmenu({
		position : {
			my: "left top"
		}
	});

	//Map Settings
    ymaps.ready(function() {
    	var placeMarkDefault, placeMarkMobile, mapDefault, mapMobile;
    	
    	mapDefault = new ymaps.Map('map-default', {
	    	center: [59.926467, 30.567208],
	    	zoom: 12
	    });

	    mapMobile = new ymaps.Map('map-mobile', {
	    	center: [59.926467, 30.567208],
	    	zoom: 12
	    });

	    placeMarkDefault = new ymaps.Placemark(
	    	[59.926467, 30.567208], {},
	    	{
		    	iconLayout: 'default#image',
		    	iconImageHref: '../images/content/pin.png',
		    	iconImageSize: [45, 58],
		    	iconImageOffset: [-3, -58]
	    	}
	    );

	    placeMarkMobile = new ymaps.Placemark(
	    	[59.926467, 30.567208], {},
	    	{
		    	iconLayout: 'default#image',
		    	iconImageHref: '../images/content/pin.png',
		    	iconImageSize: [45, 58],
		    	iconImageOffset: [-3, -58]
	    	}
	    );

	    mapDefault.geoObjects.add(placeMarkDefault);
	    mapMobile.geoObjects.add(placeMarkMobile);
    });


    //Category News
    var viewport = $('#wrap > .inner').width();
    // console.log(viewport);

    // if(viewport >= 980) {
    // 	fadeNews($(".category_news"));
    // }
    
    $(".js-icheck input").iCheck();	

    $(".SlectBox").SumoSelect({
    	csvDispCount: 5
    });
});

function fadeNews(obj) {
	obj.each(function() {
		var description = $(this).find('.category__descr'),
		offset = description.css('top');

    	var flag = false,
    		timer;

    	$(this).on('mouseenter', function() {
    		timer = setTimeout(function() {
    			description.addClass("news-fade");

		    	flag = true;

		    	description.animate(
	    			{
	    				'top': 0
	    			},
	    			{
	    				duration: 400,
	    				easing: "linear"
	    			}
	    		);
		    }, 500);
    	});

	    $(this).on('mouseleave', function() {
	    	clearTimeout(timer);

	    	if(flag) {
	    		description.animate(
	    			{
	    				"top": offset
	    			},
	    			{
	    				duration: 400,
	    				easing: "linear",
	    				complete: function() {
	    					setTimeout(function() {
	    						description.removeClass("news-fade");
	    					}, 400)
	    				}
	    			}
	    		);

	    		flag = false;
	    	}
	    });
	});
};