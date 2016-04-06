$(".panel-heading").click(function(){
    if($(this).hasClass('active')) {
        //alert(this.className + "2");
        $(this).find('i').toggleClass("rotated");
    }
});

$(".panel-heading").not(".active").click(function(){
    if(!$(this).hasClass('active')){
        //alert(this.className+"1");
        $(".panel-heading.active").find('i').toggleClass("rotated");

        $(".panel-heading").not(this).each(function(){
            $(this).removeClass("active");
        });
        $(this).addClass('active');
        $(".rotating_arrow",this).toggleClass("rotated");
    }

});


