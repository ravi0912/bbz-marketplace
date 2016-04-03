@extends('app')

@section('content')
<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/marketplace_main.css') }}" />


<!--grid section catagories/catalog/trending -->
<div class="container-fluid">
    <div class="row">


        <div class="col-md-10" style="margin-top:60px">
            <div class="row">
                <div class="col-md-8">

                    <h6 style="color:#ff4931;font-weight:bold;font-size:20px;margin-top:8px">CATALOG</h6>
                    <hr>
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

                </div>

                <div class="col-md-4"></div>

            </div>

            <div class="row">
            <br><br><hr>


                <div class="col-md-12" style="margin-top:-40px">

                    <!--mdl card-->
                    <div class="row" style="margin-top:40px">
                        <h6 style="margin-left:20px;color:#000;font-weight:bold;font-size:20px;margin-top:8px">FAUCETS</h6>
                            <div class="col-md-3 column">
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
                            <div class="col-md-3 column" style="margin-left:10px">
                                <div id="wrapper" style="background-color: #939393">
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

                            <div class="col-md-3 column" style="margin-left:15px">
                                <div id="wrapper" style="background-color: #939393">
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

                            <div class="col-md-3 column" style="margin-left:20px">
                                <div id="wrapper" style="background-color: #939393">
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

                        <div class="col-md-3 column" style="margin-left:25px">
                            <div id="wrapper" style="background-color: #939393">
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

                    </div>
                </div>
            </div>

        </div>






    </div>

    <!--script tags-->
    <!--Bootstrap submenu library-->
    <script src="{{ URL::asset('bootstrap_files/bootstrap-submenu.js') }}"></script>

    <!-- my script file-->
    <script src="{{ URL::asset('js/marketplace_script.js') }}"></script>


@stop