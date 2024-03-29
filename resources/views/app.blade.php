<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="icon" type="image/ico" href="/images/logo/BBZlogo/bbzlogo_blue.svg"/>
    <title>BBz-MarketPlace</title>



    <!-- Normal Meta -->
    <meta charset="utf-8">
    <meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" name="viewport">
    <meta content="email=no" name="format-detection"><meta content="follow,index" name="robots"><meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="Boosting professional network among Real Estate's wild cards i.e. Architect, Builder, Contractor " name="description">
    <meta name="robots" content="noodp,noydir" />
    <meta name="keywords" content="b, bbz, buildblockz, buildblockz.com, real estate, professional network, builder, contractors, architects, interior designer, tenders, byelaws, bylaws, connection ">



    <!-- Facebook opengraph meta -->
    <meta property="og:title" content="Real Estate-Professional Network" />
    <meta property="og:url" content="<?php echo $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Create an account or log in to Bbz workstation.Bbz workstation is an online targeted professional network for real-estate industry executives, such as, builders, architects, interior designers, structural engineers etc. It’s an innovative way to collaborate, meet people and stay updated with the market trends." />
    <meta property="og:image" content="http://buildblockz.com/images/logo/BBZlogo/bbzlogo_blue.svg" />
    <meta property="og:locale" content="en_US" />



    <!-- Twitter opengraph meta-->
    <meta name="twitter:card" content="product" />
    <meta name="twitter:title" content="Real Estate-Professional Network" />
    <meta name="twitter:description" content="Bbz workstation is an online targeted professional network for real-estate industry executives, such as, builders, architects, interior designers, contractors, structural engineers etc. It’s an innovative way to collaborate, meet people and stay updated with the market trends." />
    <meta name="twitter:url" content="<?php echo $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>" />
    <meta name="twitter:image" content="http://buildblockz.com/images/logo/BBZlogo/bbzlogo_blue.svg" />
    <meta name="twitter:site" content="@BuildBlockz" />



    <!-- Fonts -->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ URL::asset('css/lightbox.css') }}" rel="stylesheet">


    <!--Bootstrap CDN-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">



    <!--mdl CDN-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="https://code.getmdl.io/1.1.1/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.1.1/material.min.js"></script>


    <!-- css defined by us -->
    <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet">




</head>
<body style="font-family:Raleway" style="position:relative">
@include ('partials.nav')


@yield('content')

@include ('partials.right')



<script src="//code.jquery.com/jquery.js"></script>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<script type="text/javascript" src="{{ URL::asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ URL::asset('js/lightbox.js') }}"></script>
<script type="text/javascript">
    $(function() {
        $('.profile_1 a').bind('click',function(event){
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 100
            }, 700,'easeInOutExpo');
            /*
             if you don't want to use the easing effects:
             $('html, body').stop().animate({
             scrollTop: $($anchor.attr('href')).offset().top
             }, 1000);
             */
            $anchor.parent().children().removeClass("profile_1_active");
            $anchor.addClass("profile_1_active");
            event.preventDefault();
        });
//		$('.search-results-list').bind('click',function(){
//			alert("ee");
//			var anchor = $(this).html();
//			$('#search-input').val(anchor);
//		});
    });
</script>

<script type="text/javascript" src = "{{ URL::asset('js/main.js') }}" ></script>

<script type="text/javascript" src="{{ URL::asset('js/productPage.js') }}"></script>
</body>


</html>