<div id = "right" class = "right_notification">
    <div id = "right_nav" class = "right_nav">
        <div  onmousedown = "load_right_ul_li_1(event);" class = "right_nav_active"><img  id = "right_nav_1" src = "{{ URL::asset('images/logo/right/SVG/notification_off.svg') }}"></div>
        <div onmousedown = "load_right_ul_li_2(event);"><a  ><img id = "right_nav_2" src = "{{ URL::asset('images/logo/right/SVG/message_off.svg') }}"></a>
            <!--<span class="badge badge-notify">3</span>--></div>
        <div onmousedown = "load_right_ul_li_3(event);"><img id = "right_nav_3" src = "{{ URL::asset('images/logo/right/SVG/request_off.svg') }}"></div>
    </div>
    <div id = "right_ul" class = "right_ul">
        <div class = "right_ul_li">
            {{--<div id = "notification" class = "notification">--}}{{--
            --}}{{--<div id = "notification_header" class = "notification_header" >NOTIFICATION</div>--}}{{--
            --}}{{--<div id = "notification_content" class = "notification_content">--}}{{--
            --}}{{--<div id = "notification_content_1" class = "notification_content_1">--}}{{--
            --}}{{--heading--}}{{--
            --}}{{--</div>--}}{{--
            --}}{{--<div id = "notification_content_2" class = "notification_content_2">--}}{{--
            --}}{{--content--}}{{--
            --}}{{--</div>--}}{{--
            --}}{{--<div id = "notification_content_3" class = "notification_content_3">--}}{{--
            --}}{{--time--}}{{--
            --}}{{--</div>--}}{{--
            --}}{{--</div>--}}{{--
            --}}{{--</div>--}}{{--
            --}}{{--<div id = "notification_more" class = "notification_more">more</div>--}}
        </div>



    </div>
</div>

<script>
    function load_right_ul_li_1(e){
        if (e.which == 1) {
            $(".right_ul").show();
        }
    }


</script>