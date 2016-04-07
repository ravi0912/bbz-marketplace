<div class="col-md-2" style="background-color:#fff">
    <!--left static sidebar-->
    <div class="left" id="left">
        <ul style="width:200px;margin-left: -30px;">
            @foreach($categories as $category)
                <li class="item_level_1"><a href="#" class="collapsible-header item">{{ $category->name }}</a>
                    <ul class="collapsible-body" style="margin-left:-30px">
                        @foreach($subcategories as $subcategory)
                            @if($subcategory->category_id == $category->id)
                                <li><a href="#" class="sub_item collapsible-inner_header">{{$subcategory->name}}</a>
                                    {{--<div class="collapsible-inner_body">
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
                                    </div>--}}
                                </li>
                            @endif
                        @endforeach
                        {{--<li><a href="#" class="collapsible-inner_header sub_item">Lighting</a>
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
                        </li>--}}

                    </ul>
                </li>
            @endforeach

        </ul>
    </div>
</div>