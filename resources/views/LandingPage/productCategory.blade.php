@extends('app')

@section('content')

    @include ('partials.left')

    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/marketplace_main.css') }}" />


    <!--grid section catagories/catalog/trending -->
    <div class="container-fluid">
        <div class="row">


            <div class="col-md-10" style="margin-top:60px">
                <div class="row">
                    <div class="col-md-8">
                        <br>
                        <h6 style="color:#6262ff;font-weight:bold;margin-top:-12px;"><a href="{{ url('category/'.$categoryName->id) }}">{{ $categoryName->name }}</a></h6>

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
                                    <img src="../images/city.jpg" alt="city"/>
                                </div>
                                <div class="item">
                                    <img src="../images/scorpion.jpg" alt="scorpion"/>
                                </div>
                                <div class="item">
                                    <img src="../images/autumn.jpg" alt="autumn" />
                                </div>
                                <div class="item">
                                    <img src="../images/island.jpg" alt="island" />
                                </div>
                                <div class="item">
                                    <img src="../images/scotland.jpg" alt="scotland" />
                                </div>
                                <div class="item">
                                    <img src="../images/vintage.jpg" alt="vintage" />
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
                        {{--Showing 5 random products according to category--}}
                        @foreach($subcats as $subcat)
                            <div class="row" style="margin-top:40px">
                                <h6 style="margin-left:20px;color:#000;font-weight:bold;font-size:20px;margin-top:8px">{{ $subcat->name }} <small><a href="{{ url('subCategory/'.$subcat->id) }}" style="color:#FF6D5A" class="view_more">View More</a></small></h6>
                                @foreach($products[$subcat->id] as $product)
                                    <a href="{{ url('product/'.$product->id)  }}">
                                        <div class="col-md-3 column">
                                            <div id="wrapper" style="background-color: #fff;height:290px;width:190px">
                                                <div class="product_image">
                                                    @if(isset($product->thumbnailImage->image_url))
                                                        <img src="{{ URL::asset("product/".$product->thumbnailImage->image_url) }}" alt="" height="160" width="170">
                                                    @else
                                                        <img src="{{ URL::asset("images/no-image-box.png") }}" alt="" height="160" width="170">
                                                    @endif
                                                </div>
                                                <div class="product_description">
                                                    <hr>
                                                    <a style="font-size:13px;font-family:Arial">
                                                        @foreach($product->filters as $filter)
                                                            @if($filter->filterName->name == "Brand")
                                                                <span> <strong>{{ $filter->data }}  </strong></span>
                                                            @endif
                                                        @endforeach
                                                        {{ $product->name }}
                                                    </a>
                                                </div>
                                            {{--<div id="wrapper" style="background-color: #939393">
                                                <div class="demo-card-square mdl-card">
                                                    <div class="mdl-card__title mdl-card--expand">
                                                        <img src="{{ URL::asset('images/img-thing.jpg') }}" alt="">
                                                    </div>
                                                    <div class="mdl-card__actions">
                                                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                                            {{ $product->name }}
                                                        </a>
                                                    </div>
                                                    <div class="mdl-card__supporting-text">
                                                        Rs.399/-
                                                    </div>
                                                </div>--}}
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                                @if($productsCount[$subcat->id] == 0)
                                    Sorry, No product available.
                                @endif

                            </div>
                        @endforeach
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