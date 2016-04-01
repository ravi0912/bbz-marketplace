<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!--Bootstrap CDN-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!--mdl CDN-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


    <!--my css file-->
    <link type="text/css" rel="stylesheet" href="marketplace_main.css" />


</head>
<body style="font-family:Raleway" style="position:relative">

<div>
    <!--nav bar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" class="navbar-brand"><img src="http://buildblockz.com/images/logo/BBZlogo/bbzlogo_white.svg" alt="0" height="50" width="50" style="margin-top: -15px"/></a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav_item">
                    <div class="nav_item_right">
                        <form action="#" class="form-group">
                            <input type="text" value="search" class="form-control"/>
                        </form>
                    </div>
                </li>
                <li class="dropdown nav_item">
                    <div class="nav_item_right">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons" id="settings" style="color:#fff;margin-top:4px">settings</i>
                        </div>
                        <ul class="dropdown-menu" role="settings_menu" aria-labelledby="menu">
                            <li role="presentation"><a href="#" role="menu-item">item1</a></li>
                            <li role="presentation"><a href="#" role="menu-item">item2</a></li>
                            <li role="presentation"><a href="#" role="menu-item">item3</a></li>
                            <li role="presentation"><a href="#" role="menu-item">item4</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav_item">
                    <div style="color:#fff;font-size:15px;font-weight:bold;margin-top:2px" class="nav_item_right">Vishwas Vyas</div>
                </li>
                <li class="dropdown nav_item">
                    <div class="nav_item_right">
                        <div data-toggle="dropdown" class="dropdown-toggle"><img src="images/baby.jpg" alt="user id" style="height:40px;width:40px;border-radius:100%;margin-top:-2px"/>
                        </div>
                        <ul class="dropdown-menu" role="logout_menu" aria-labelledby="menu">
                            <li role="presentation"><a href="#" role="menu-item">Profile</a></li>
                            <li role="presentation"><a href="#" role="menu-item">Connection</a></li>
                            <li role="presentation"><a href="#" role="menu-item">Change Password</a></li>
                            <hr>
                            <li role="presentation"><a href="#" role="menu-item">Log Out</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>

<!--toggeble button-->
<!-- <div class="menu_toggle"/>
  <img src="http://buildblockz.com/images/logo/left/sidescroll_red.svg" alt="0" height="50" width="50"/>
</div> -->
<!--hidden push sidemenu-->
<!-- <div class="pushmenu"> -->
<!--menu-->
<!-- <ul style="margin-top:14px;margin-left:-60px">

  <li><a href="#" style="color:#fff"><img src="http://buildblockz.com/images/logo/BBZlogo/bbzlogo_white.svg" alt="0" height="50" width="50"/></a></li>
  <h6 style="color:#fff;font-weight:bold">BBZ Marketplace</h6>
  <li class="list_item"><a href="#" class="sidemenu_item">ITEM 1</a></li>
  <li class="list_item"><a href="#" class="sidemenu_item">ITEM 2</a></li>
  <li class="list_item"><a href="#" class="sidemenu_item">ITEM 3</a></li>
  <li class="list_item"><a href="#" class="sidemenu_item">ITEM 4</a></li>
  <li class="list_item"><a href="#" class="sidemenu_item">ITEM 5</a></li>
</ul>
<div class="social_icons">
  <div class="icon_list"><a href="#"><i class="fa fa-twitter"></i></a></div>
  <div class="icon_list"><a href="#"><i class="fa fa-pinterest"></i></a></div>
  <div class="icon_list"><a href="#"><i class="fa fa-youtube"></i></a></div>
  <div class="icon_list"><a href="#"><i class="fa fa-facebook-official"></i></a></div>
  <div class="icon_list"><a href="#"><i class="fa fa-linkedin"></i></a></div>
</div>
</div> -->

<!--grid section catagories/catalog/trending -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <!--left static sidebar-->
            <div class="left" id="left">
                <ul style="width:200px;margin-left: -30px;">
                    <li class="item_level_1"><a href="#" class="collapsible-header item">Categories</a>
                        <ul class="collapsible-body" style="margin-left:-30px">
                            <li><a href="#" class="sub_item">Furniture</a></li>
                            <li><a href="#" class="collapsible-inner_header sub_item">Lighting</a>
                                <div class="collapsible-inner_body">
                                    <ul style="margin-left:-30px">
                                        <li><a href="#" class="sub-sub_item">Ceiling lighting</a></li>
                                        <li><a href="#" class="sub-sub_item">Lamps</a></li>
                                        <li><a href="#" class="sub-sub_item">Wall Lighting</a></li>
                                        <li><a href="#" class="sub-sub_item">Ceing Fans</a></li>
                                        <li><a href="#" class="sub-sub_item">Bath</a></li>
                                        <li><a href="#" class="sub-sub_item">Kitchen & Cabinet</a></li>
                                        <li><a href="#" class="sub-sub_item">Kids</a></li>
                                        <li><a href="#" class="sub-sub_item">Outdoor Lighting</a></li>
                                        <li><a href="#" class="sub-sub_item">Holiday Lighting</a></li>
                                        <li><a href="#" class="sub-sub_item">Accessories</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#" class="sub_item">Kitchen & Dining</a></li>
                            <li><a href="#" class="sub_item">Bath Products</a></li>
                            <li><a href="#" class="sub_item">Home Decor</a></li>
                            <li><a href="#" class="sub_item">Bedroom Products</a></li>
                            <li><a href="#" class="sub_item">Outdoor Products</a></li>
                            <li><a href="#" class="sub_item">Baby & Kids</a></li>
                            <li><a href="#" class="sub_item">Others</a></li>
                        </ul>
                    </li>
                    <li class="item_level_1"><a href="#" class="collapsible-header_2 item">Item2</a></li>
                    <li class="item_level_1"><a href="#" class="collapsible-header_3 item">Item3</a></li>
                    <li class="item_level_1"><a href="#" class="collapsible-header_4 item">Item4</a></li>
                    <li class="item_level_1"><a href="#" class="collapsible-header_5 item">Item5</a></li>
                    <li class="item_level_1"><a href="#" class="collapsible-header_6 item">Item6</a></li>
                    <li class="item_level_1"><a href="#" class="collapsible-header_5 item">Item5</a></li>
                    <li class="item_level_1"><a href="#" class="collapsible-header_6 item">Item6</a></li>
                    <li class="item_level_1"><a href="#" class="collapsible-header_5 item">Item5</a></li>
                    <li class="item_level_1"><a href="#" class="collapsible-header_6 item">Item6</a></li>
                    <li class="item_level_1"><a href="#" class="collapsible-header_5 item">Item5</a></li>
                    <li class="item_level_1"><a href="#" class="collapsible-header_6 item">Item6</a></li>
                    <li class="item_level_1"><a href="#" class="collapsible-header_5 item">Item5</a></li>
                    <li class="item_level_1"><a href="#" class="collapsible-header_6 item">Item6</a></li>
                    <li class="item_level_1"><a href="#" class="collapsible-header_5 item">Item5</a></li>
                    <li class="item_level_1"><a href="#" class="collapsible-header_6 item">Item6</a></li>

                </ul>
            </div>
        </div>

        <div class="col-md-6">

            <h6 style="color:#ff4931;font-weight:bold;margin-top:8px">CATALOG</h6>

            <!-- carousel-->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!--carousel indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                </ol>
                <!--wrapper to slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/city.jpg" alt="city"/>
                    </div>
                    <div class="item">
                        <img src="images/scorpion.jpg" alt="scorpion"/>
                    </div>
                    <div class="item">
                        <img src="images/autumn.jpg" alt="autumn" />
                    </div>
                    <div class="item">
                        <img src="images/island.jpg" alt="island" />
                    </div>
                    <div class="item">
                        <img src="images/scotland.jpg" alt="scotland" />
                    </div>
                    <div class="item">
                        <img src="images/vintage.jpg" alt="vintage" />
                    </div>
                </div>

                <!--left and right controllers-->
                <a href="#myCarousel" class="left carousel-control" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">previous</span>
                </a>
                <a href="#myCarousel" class="right carousel-control" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">previous</span>
                </a>
            </div>
            <br>
            <!--mdl card-->
            <div class="row" style="margin-top:40px">

                <div class="col-md-4 column">
                    <div id="wrapper" style="background-color: #939393">
                        <div class="demo-card-square mdl-card">
                            <div class="mdl-card__title mdl-card--expand"></div>
                            <div class="mdl-card__actions">
                                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                    Lamp
                                </a>
                            </div>
                            <div class="mdl-card__supporting-text">
                                Rs.399/-
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 column">
                    <div id="wrapper" style="background-color: #939393;margin-left: 30px">
                        <div class="demo-card-square mdl-card">
                            <div class="mdl-card__title mdl-card--expand"></div>
                            <div class="mdl-card__actions">
                                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                    View Updates
                                </a>
                            </div>
                            <div class="mdl-card__supporting-text">
                                Rs.399/-
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 column">
                    <div id="wrapper" style="background-color: #939393;margin-left: 60px">
                        <div class="demo-card-square mdl-card">
                            <div class="mdl-card__title mdl-card--expand"></div>
                            <div class="mdl-card__actions">
                                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                    View Updates
                                </a>
                            </div>
                            <div class="mdl-card__supporting-text">
                                Rs.399/-
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <div style="padding:10px;text-align:center"><a href="#">View more</a></div>
                </div>
            </div>

        </div>

        <div class="col-md-4">
            <div class="row">
                <div class="col-md-11">
                    <div id="outer_wrapper">
                        <div id="trending_lists">

                            <h6 style="color:#ff4931;font-weight:bold;margin-top:8px">TRENDING</h6>

                            <div id="trending">
                                <div class="trending_wrapper" style="border-left:2px solid #444;padding-left:5px;">
                                    <div class="trending_notifications" style="background-color:#cfcfcf">
                                        <div id="trending_image1" class="image_icon" style="background: url('images/mumbai.jpg') no-repeat;background-size:90% 90%;background-position:50% 50%">
                                        </div>
                                        <div id="trending_text1" class="trending_text">
                                            <p class="size">Mumbai,not Bangaluru is preferred real estate in India say experts keeping in mind recent changes in Govt policies.</p>
                                        </div>
                                        <div class="bottom_ info">
                                            <small style="float:left" class="left_bottom">Source The Fiancial Times</small>
                                            <small style="float:right" class="right_bottom">17 min ago</small>
                                        </div>
                                    </div>

                                    <div class="trending_notifications" style="background-color:#e8e8e8">
                                        <div id="trending_image2" class="image_icon" style="background:url('images/underconstruction.png') no-repeat;background-size:90% 90%;background-position:50% 50%">
                                        </div>
                                        <div id="trending_text2" class="trending_text">
                                            <p class="size">The words in bold type were those added by Regorco.</p>
                                        </div>
                                        <div class="bottom_info">
                                            <small style="float:left" class="left_bottom">Source Civil Constructor</small>
                                            <small style="float:right" class="right_bottom">1 hour ago</small>
                                        </div>
                                    </div>

                                    <div class="trending_notifications" style="background-color:#cfcfcf">
                                        <div id="trending_image1" class="image_icon" style="background: url('images/mumbai.jpg') no-repeat;background-size:90% 90%;background-position:50% 50%">
                                        </div>
                                        <div id="trending_text1" class="trending_text">
                                            <p class="size">Mumbai,not Bangaluru is preferred real estate in India say experts keeping in mind recent changes in Govt policies.</p>
                                        </div>
                                        <div class="bottom_ info">
                                            <small style="float:left" class="left_bottom">Source The Fiancial Times</small>
                                            <small style="float:right" class="right_bottom">17 min ago</small>
                                        </div>
                                    </div>
                                    <div style="text-align:right"><a href="#">See All</a></div>
                                </div>
                            </div>

                        </div>

                        <div id="messages_lists">

                            <h6 style="color:#ff4931;font-weight:bold;margin-top:8px">MESSAGES</h6>

                            <div id="trending">
                                <div class="trending_wrapper" style="border-left:2px solid #444;padding-left:5px;">
                                    <div class="trending_notifications" style="background-color:#cfcfcf">
                                        <div id="trending_image1" class="image_icon" style="background: url('images/mumbai.jpg') no-repeat;background-size:90% 90%;background-position:50% 50%">
                                        </div>
                                        <div id="trending_text1" class="trending_text">
                                            <p class="size">Mumbai,not Bangaluru is preferred real estate in India say experts keeping in mind recent changes in Govt policies.</p>
                                        </div>
                                        <div class="bottom_ info">
                                            <small style="float:left" class="left_bottom">Source The Fiancial Times</small>
                                            <small style="float:right" class="right_bottom">17 min ago</small>
                                        </div>
                                    </div>

                                    <div class="trending_notifications" style="background-color:#e8e8e8">
                                        <div id="trending_image2" class="image_icon" style="background:url('images/underconstruction.png') no-repeat;background-size:90% 90%;background-position:50% 50%">
                                        </div>
                                        <div id="trending_text2" class="trending_text">
                                            <p class="size">The words in bold type were those added by Regorco.</p>
                                        </div>
                                        <div class="bottom_info">
                                            <small style="float:left" class="left_bottom">Source Civil Constructor</small>
                                            <small style="float:right" class="right_bottom">1 hour ago</small>
                                        </div>
                                    </div>

                                    <div class="trending_notifications" style="background-color:#cfcfcf">
                                        <div id="trending_image1" class="image_icon" style="background: url('images/mumbai.jpg') no-repeat;background-size:90% 90%;background-position:50% 50%">
                                        </div>
                                        <div id="trending_text1" class="trending_text">
                                            <p class="size">Mumbai,not Bangaluru is preferred real estate in India say experts keeping in mind recent changes in Govt policies.</p>
                                        </div>
                                        <div class="bottom_ info">
                                            <small style="float:left" class="left_bottom">Source The Fiancial Times</small>
                                            <small style="float:right" class="right_bottom">17 min ago</small>
                                        </div>
                                    </div>
                                    <div style="text-align:right"><a href="#">See All</a></div>
                                </div>
                            </div>

                        </div>

                        <div id="notification_lists">

                            <h6 style="color:#ff4931;font-weight:bold;margin-top:8px">NOTIFICATIONS</h6>

                            <div id="trending">
                                <div class="trending_wrapper" style="border-left:2px solid #444;padding-left:5px;">
                                    <div class="trending_notifications" style="background-color:#cfcfcf">
                                        <div id="trending_image1" class="image_icon" style="background: url('images/mumbai.jpg') no-repeat;background-size:90% 90%;background-position:50% 50%">
                                        </div>
                                        <div id="trending_text1" class="trending_text">
                                            <p class="size">Mumbai,not Bangaluru is preferred real estate in India say experts keeping in mind recent changes in Govt policies.</p>
                                        </div>
                                        <div class="bottom_ info">
                                            <small style="float:left" class="left_bottom">Source The Fiancial Times</small>
                                            <small style="float:right" class="right_bottom">17 min ago</small>
                                        </div>
                                    </div>

                                    <div class="trending_notifications" style="background-color:#e8e8e8">
                                        <div id="trending_image2" class="image_icon" style="background:url('images/underconstruction.png') no-repeat;background-size:90% 90%;background-position:50% 50%">
                                        </div>
                                        <div id="trending_text2" class="trending_text">
                                            <p class="size">The words in bold type were those added by Regorco.</p>
                                        </div>
                                        <div class="bottom_info">
                                            <small style="float:left" class="left_bottom">Source Civil Constructor</small>
                                            <small style="float:right" class="right_bottom">1 hour ago</small>
                                        </div>
                                    </div>

                                    <div class="trending_notifications" style="background-color:#cfcfcf">
                                        <div id="trending_image1" class="image_icon" style="background: url('images/mumbai.jpg') no-repeat;background-size:90% 90%;background-position:50% 50%">
                                        </div>
                                        <div id="trending_text1" class="trending_text">
                                            <p class="size">Mumbai,not Bangaluru is preferred real estate in India say experts keeping in mind recent changes in Govt policies.</p>
                                        </div>
                                        <div class="bottom_ info">
                                            <small style="float:left" class="left_bottom">Source The Fiancial Times</small>
                                            <small style="float:right" class="right_bottom">17 min ago</small>
                                        </div>
                                    </div>
                                    <div style="text-align:right"><a href="#">See All</a></div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-md-1" style="margin-top:50px;margin-right:0px">

                    <div class="linking_icons">
                        <div id="border_bottom1" style="cursor:pointer"><i class="material-icons side_icon">priority_high</i></div>
                    </div>
                    <div class="linking_icons" class="border_bottom">
                        <div id="border_bottom2" style="cursor:pointer"><i class="material-icons side_icon">message</i></div>
                    </div>
                    <div class="linking_icons">
                        <div id="border_bottom3" style="cursor:pointer"><i class="material-icons side_icon">laptop_mac</i></div>
                    </div>

                </div>
            </div>
        </div>



        <!--script tags-->
        <!--Bootstrap submenu library-->
        <script src="bootstrap_files/bootstrap-submenu.js"></script>

        <!-- my script file-->
        <script src="marketplace_script.js"></script>



    </div>
</body>
</html>