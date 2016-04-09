
function skill_remove_current() {
	$anchor = $(this).parent();
	$anchor.hide();
}

function cancel_change(p) {



	$('html, body').stop().animate({
		scrollTop: $(p).offset().top - 100
	}, 1500,'easeInOutExpo');
	/*
	 if you don't want to use the easing effects:
	 $('html, body').stop().animate({
	 scrollTop: $($anchor.attr('href')).offset().top
	 }, 1000);
	 */
	$anchor.parent().children().removeClass("profile_1_active");
	$anchor.addClass("profile_1_active");
	event.preventDefault();
}
function profile_3_education (x) {


	var h = '#';
	var d = '_content_display';
	var f = '_content_form';


	if(x == 1){
		var p = 'profile_3_education';
		var di = h.concat(p,d);
		var fo = h.concat(p,f);
		$(di).hide();

		$(fo).show();
		$(fo).addClass("animated fadeIn");
	}
	if(x == 2){
		var p = 'profile_3_education';
		var di = h.concat(p,d);
		var fo = h.concat(p,f);
		$(fo).hide();
		var p_cancel_change = h.concat(p);
		$(di).show();
		$(di).addClass("animated fadeIn");
		cancel_change(p_cancel_change);

	}
	if(x == 3){
		var p = 'profile_3_experience';
		var di = h.concat(p,d);
		var fo = h.concat(p,f);
		$(di).hide();

		$(fo).show();
		$(fo).addClass("animated fadeIn");

	}
	if(x == 4){
		var p = 'profile_3_experience';
		var di = h.concat(p,d);
		var fo = h.concat(p,f);
		$(fo).hide();
		var p_cancel_change = h.concat(p);
		$(di).show();
		$(di).addClass("animated fadeIn");
		cancel_change(p_cancel_change);
	}
	if(x == 5){
		var p = 'profile_3_skill';
		var di = h.concat(p,d);
		var fo = h.concat(p,f);
		//$(di).hide();

		$(fo).show();
		$(fo).addClass("animated fadeIn");
	}
	if(x == 6){
		var p = 'profile_3_skill';
		var di = h.concat(p,d);
		var fo = h.concat(p,f);
		$(fo).hide();
		var p_cancel_change = h.concat(p);
		$(di).show();
		$(di).addClass("animated fadeIn");
		cancel_change(p_cancel_change);
	}
	if(x == 7){
		var p = 'profile_3_project';
		var di = h.concat(p,d);
		var fo = h.concat(p,f);
		$(di).hide();

		$(fo).show();
		$(fo).addClass("animated fadeIn");
	}
	if(x == 8){
		var p = 'profile_3_project';
		var di = h.concat(p,d);
		var fo = h.concat(p,f);
		$(fo).hide();
		var p_cancel_change = h.concat(p);
		$(di).show();
		$(di).addClass("animated fadeIn");
		cancel_change(p_cancel_change);
	}
}

// Left Panel

$(document).ready(function(){
	$(".item_level_1").click(function(){
		$(this).toggleClass("open");
	});

	$(document).mouseup(function (e)
	{
		var container = $(".right_ul");
		var container1 = $(".right_nav_active")

		if ((!container.is(e.target) // if the target of the click isn't the container...
			&& container.has(e.target).length === 0) && (!container1.is(e.target) && container1.has(e.target).length === 0)) // ... nor a descendant of the container
		{
			$(".right_ul").hide();
		}
	});
	//hiding right notification box
	$(".right_ul").hide();
	$(".menu_toggle").on('click',function(){
		$(".pushmenu").toggleClass('open_menu');
		$(".menu_toggle").toggleClass('move');
	});
	$(".collapsible-body").hide();
	$(".collapsible-inner_body").hide();


	$(".collapsible-header").click(function(){
		$(this).toggleClass("active",1000);
		$(this).next().slideToggle();

		$(".collapsible-header").not(this).each(function(){
			$(this).next().slideUp();
			$(this).removeClass("active");
		});

	})

	$(".collapsible-inner_header").click(function(){
		$(this).toggleClass("active_inner");
		$(this).next().slideToggle();

		$(".collapsible-inner_header").not(this).each(function(){
			$(this).next().slideUp();
			$(this).removeClass("active_inner");
		});
	});

	$(".sub-sub_item").click(function(){
		$(this).toggleClass('sub-sub_item_decoration');
		$(".sub-sub_item").not(this).each(function(){
			$(this).removeClass("sub-sub_item_decoration");
		});
	});



});








