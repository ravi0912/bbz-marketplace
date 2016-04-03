$(document).ready(function(){
	$(".item_level_1").click(function(){
		$(this).toggleClass("open");
	});
	$(".menu_toggle").on('click',function(){
		$(".pushmenu").toggleClass('open_menu');
		$(".menu_toggle").toggleClass('move');
	});
	$(".collapsible-body").hide();
	$(".collapsible-inner_body").hide();

	$(".collapsible-header").click(function(){
		$(this).toggleClass("active");
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
	$("#trending_lists").show();
	$("#messages_lists").hide();
	$("#notification_lists").hide();
	$("#border_bottom1", this).click(function(){
		$("#trending_lists").slideToggle();
		$("#messages_lists").hide();
		$("#notification_lists").hide();
	});
	$("#border_bottom2", this).click(function(){
		$("#messages_lists").slideToggle();
		$("#trending_lists").hide();
		$("#notification_lists").hide();
	});
	$("#border_bottom3", this).click(function(){
		$("#notification_lists").slideToggle();
		$("#messages_lists").hide();
		$("#trending_lists").hide();
	});
});





