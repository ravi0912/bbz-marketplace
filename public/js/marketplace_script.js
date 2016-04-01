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
		$(".collapsible-body").slideToggle();
	});
	
	$(".collapsible-inner_header").click(function(){
		$(".collapsible-inner_body").slideToggle();
	});
	$(".item").click(function(){
		$(this).toggleClass('item_decoration');
	});
	$(".sub_item").click(function(){
		$(this).toggleClass('sub_item_decoration');
	});
	$(".sub-sub_item").click(function(){
		$(this).toggleClass('sub-sub_item_decoration');
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





