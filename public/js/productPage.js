$(".panel-heading").not(".active").click(function(){
    alert(this.className);
    $(".panel-heading.active").find('i').toggleClass("rotated");

    $(".panel-heading").not(this).each(function(){
        $(this).removeClass("active");
    });
    $(this).addClass('active');
    $(".rotating_arrow",this).toggleClass("rotated");
});

/*
$(".panel-heading.active").click(function(){
    alert(this.className);
    $(".panel-heading.active").find('i').toggleClass("rotated");
});*/
