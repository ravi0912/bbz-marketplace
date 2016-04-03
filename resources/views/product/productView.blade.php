@extends('app')

@section('content')
    @include('partials.productPageLeft')
    <link rel="stylesheet" href="{{ URL::asset('css/productPage.css') }}">

    <div class="container-fluid">


        <div class="col-md-6">

            <div id="outer_container">
                <div id="inner_container">
                    <h6 style="color:#6262ff;font-weight:bold;margin-top:-12px;">CATALOG</h6>
                    <div class="upper">
                        <div class="upper_left">
                            <a href="#"><div class="box1 alignment"></div></a>
                            <a href="#"><div class="box2 alignment"></div></a>
                            <a href="#"><div class="box3 alignment"></div></a>
                        </div>

                        <div class="upper_right">
                            <div>
                                <p ><span style="font-size:25px;color:#6262ff">Top Lamp-panel</span><br><span style="font-weight:bold;font-size:25px">Rs. 1899/-</span><br><br>
                                    <span style="font-weight:bold">Rating</span>  <span style="word-spacing:20px;font-weight:bold"><a href="#" style="color:#6262ff;font-weight:bold">4.1/5</a> Reviews</span>  <a href="#" style="color:#6262ff;font-weight:bold">52</a>
                                    <br>
                                    <span style="font-weight:bold;font-size:1.2em">Seller details:</span><br>
                                    AMG Home <span style="word-spacing:20px">Styling Ph:041-2323567</span><br>A-42,Bapu <span style="word-spacing:20px">Bazar, Mob:8011240690</span><br>Jaipur-302012
                                    <br>
                                    <strong>Available with</strong> <span style="font-weight:bold;color:#6262ff">8 sellers</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="lower">

                        <div class="lower_left">
                            <div style="padding-left:7px">
                                <h6 style="color:#6262ff;font-weight:bold;margin-top:10px;">Product Specifications</h6>
                                <ul style="margin-top:-10px;margin-left:-40px">
                                    <li><span style="color:#6262ff">Manufacturer:</span><strong>A.N.P.Home Decor</strong></li>
                                    <li><span style="color:#6262ff">Product dimensions:</span>
                                        <ul style="border-right:2px solid #6262ff">
                                            <li><span style="color:#6262ff">Height:</span> 14.5 cm</li>
                                            <li><span style="color:#6262ff">Length:</span> 62.3 cm</li>
                                            <li><span style="color:#6262ff">Width:</span> 15.1 cm</li>
                                        </ul>
                                    </li>
                                    <li><span style="color:#6262ff">Number of bulbs:</span><span>4</span></li>
                                    <li><span style="color:#6262ff">Voltage:</span><span>220V</span></li>
                                    <li><div class="outer"><span style="color:#6262ff">Contains:</span> <span class="inner">4bulbs,1 stand,2 connecting cables,installation manual</span></div></li>
                                </ul><br>
                                <div style="padding:auto;text-align:center;font-style:italic"><a href="#" style="color:#858585">View More</a></div>
                                <h6 style="color:#6262ff;font-weight:bold;margin-top:10px;">Features</h6>
                            </div>
                        </div>

                        <div class="lower_right">

                            <div style="position:relative;padding-left:7px">
                                <h6 style="color:#6262ff;font-weight:bold;margin-top:10px;">Q&A</h6>
                                <div style="position:absolute;z-index:5;left:70%;top:2px"><small style="color:#6262ff">Ask a</small> <span style="color:#000;font-weight:bold">question!</span></div>

                                <div>
                                    <div style="border-right:2px solid #6262ff">
                                        <strong><span style="color:#6262ff">Q.</span>Can this be used as a full-proof light for bathroom interiors?</strong><br>
                                        <span style="color:#6262ff">A.</span>The illumination is comparitively low compared to CFL and other light bulbs.
                                    </div>
                                    <div>
                                        <strong><span style="color:#6262ff">Q.</span>Suggestions for any similar products?</strong><br>
                                        <span style="color:#6262ff">A.</span>Checkout products from Philips in the same category.
                                    </div>
                                    <div style="padding:auto;text-align:center;font-style:italic;"><a href="#" style="color:#858585">View More</a></div>
                                </div>

                                <div style="position:relative">
                                    <h6 style="color:#6262ff;font-weight:bold;margin-top:10px;">User Reviews</h6>
                                    <div style="position:absolute;z-index:5;left:70%;top:2px"><small style="color:#6262ff">Write a</small> <span style="color:#000;font-weight:bold">Review!</span></div>
                                    <div style="position:rabsolute">
                                        <img src="images/baby.jpg" alt="0" height="50" width="50" style="border-radius:100%"/>
                                    </div>
                                    <div style="position:absolute;float:right;z-index:5;width:80%;left:20%;top:40px">
                                        <h6 style="color:#6262ff;font-weight:bold;margin-top:2px;margin-bottom:0px">Vishwas Vyas</h6>
                                        I've been using it for the past 5 months.Can be used in arelatively open bathroom design.
                                    </div>
                                    <div style="padding:auto;position:absolute;top:130px;left:20px">
                                        <ul>
                                            <li style="display:inline;padding:10px"><strong><span style="font-size:15px">11</span><i class="material-icons">thumb_up</i></strong></li>
                                            <li style="display:inline;padding:10px"><strong><span style="font-size:15px">8</span><i class="material-icons">reply</i></strong></li>
                                        </ul>
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



<!-- my script file-->


@stop