<?php
    use App\Models\Category;
    use App\Models\Held;
    use App\Models\City;
    use App\Models\Place;
    use App\Models\Event;
    use App\Models\User;
?>
<!DOCTYPE html>
<html lang="en-US" >
    @include('header')
    @include('menu')
    <body class="home page-template-default page page-id-5275 theme-em4u woocommerce-no-js totop wpb-js-composer js-comp-ver-6.9.0 vc_responsive" >
        <div class="ovatheme_container_wide event_header_version2 bg_white">
            <!-- Heading Version 2 -->	
            <div data-vc-parallax="1.5" data-vc-parallax-image="https://ovatheme.com/em4u/wp-content/uploads/2019/03/search_event.jpg" class="vc_row wpb_row vc_row-fluid vc_custom_1554393677789 vc_row-has-fill vc_row-o-full-height vc_row-o-columns-middle vc_row-flex vc_general vc_parallax vc_parallax-content-moving">
                <div class="patter_bg" style="background-color:" ></div>
                <div class="container container-new">
                    <div class="row">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="ovaem_search_banner ovaem_search_state_city ">
                                        <h2 class="search_title">{{ __('Events') }}</h2>
                                        <h3 class="search_subtitle">{{ __('Find your favorite events!') }}</h3>
                                        <form action="{{ route('search.index') }}" method="GET" name="search_event" >
                                            <div class="ovaem_name_event">
                                                <input class="form-controll selectpicker" placeholder="{{ __('What are you looking for ?') }}" name="name_event" value="" />
                                            </div>
                                            <div class="ovaem_country">
                                                <select  name='name_category' id='name_category' class='selectpicker'>
                                                    <option value="" selected="selected">{{ __('All categories') }}</option>
                                                    <?php
                                                    $categories = Category::all();
                                                    foreach ($categories as $category){
                                                    ?>
                                                        <option class="level-0"> {{ $category->name }} </option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="ovaem_country">
                                                <select  name='name_cit' id='name_cit' class='selectpicker'>
                                                    <option value="" selected='selected'>{{ __('All cities') }}</option>
                                                    <?php
                                                    $cities = City::all();
                                                    foreach ($cities as $city){
                                                    ?>
                                                        <option class="level-0"> {{ $city->name }} </option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="ovaem_cat" data-date_format="d M Y">
                                                <input id="date" class="ovaem_select_date ovaem_date_from form-controll selectpicker" placeholder="{{ __('All dates') }}" data-date_format="d M Y" data-lang="en-GB" data-first-day="0" name="date" value="">
                                            </div>
                                            <input type="hidden" name="post_type" value="event">
                                            <input type="hidden" name="search" value="search-event">
                                            <div class="ovaem_submit">
                                                <input type="submit" value="{{ __('Search') }}" />
                                            </div>
                                        </form>
                                        <div class="sub_title2">{{ __('Or browse event by feature:') }}</div>
                                        <div class="browser_featured">
                                            <a href="{{ route('search.featured') }}"><i class="fa-solid fa-lock-open"></i>{{ __('Upcoming Events') }}</a>
                                            <a href="{{ route('search.featured') }}"><i class="fa-regular fa-calendar"></i>{{ __('Featured Events') }}</a>
                                            <a href="{{ route('search.index') }}"><i class="fa-sharp fa-solid fa-pen-nib"></i>{{ __('All events') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1554353656652">
                <div class="container container-new">
                    <div class="row">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner vc_custom_1554353920950">
                                <div class="wpb_wrapper">
                                    <div class="ova_heading_v4 text-center">
                                        <h3 class="title">{{ __('Popular Categories') }}</h3>
                                        <div class="sub_title"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $i = 0;
                        $categories = DB::table('categories')
                                    ->join('events', 'events.idCategory', '=', 'categories.id')
                                    ->select('categories.name', DB::raw('COUNT(events.idCategory) as number'))
                                    ->groupBy('categories.name', 'events.idCategory')
                                    ->get();
                        ?>
                        @foreach ($categories as $category)
                            @if ($i < 6)
                                <div class="wpb_column vc_column_container vc_col-sm-2">
                                    <div class="vc_column-inner vc_custom_1552202677727">
                                        <div class="wpb_wrapper">
                                            <a name="name_category" class="cat_info "><i class="fa-solid fa-masks-theater"></i>
                                                <h2 class="name">{{ $category->name }}</h2><span class="count">{{ $category->number }}</span>
                                                 <?php $i++ ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1554353279090">
                <div class="container container-new">
                    <div class="row">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner vc_custom_1554354170505">
                                <div class="wpb_wrapper">
                                    <div class="ova_heading_v4 text-center">
                                        <h3 class="title">{{ __('Most Visited Places') }}</h3>
                                        <div class="sub_title">{{ __('Browse Popular Location') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $i = 0;
                        $cities = DB::table('helds')
                                    ->join('events', 'events.id', '=', 'helds.idEvent')
                                    ->join('places', 'places.id', '=', 'helds.idPlace')
                                    ->join('cities', 'cities.id', '=', 'places.idCity')
                                    ->select('helds.idPlace', 'cities.name', DB::raw('COUNT(helds.idPlace) as number'))
                                    ->groupBy('cities.name', 'helds.idPlace')
                                    ->orderByDesc(DB::raw('COUNT(helds.idPlace)'))
                                    ->get();
                        ?>
                        @foreach ($cities as $city)
                            @if ( $i == 0 )
                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="city-girds ">
                                                <div class="city-thumb">
                                                    <img src="https://turismoi.ec/uploads/ec/photo/photo_file/12236/2201981.jpg" class="visible hidden-xs" alt="location">
                                                    <img src="https://ovatheme.com/em4u/wp-content/uploads/2019/03/HoustonSkylineTexas_m.jpg" class="hidden visible-xs" alt="location">
                                                </div>
                                                <div class="city-title text-center">
                                                    <h3 class="lp-h3">
                                                        <a href="http://127.0.0.1:8000/search/index?name_event=&name_category=&name_cit=Quito&date=&post_type=event&search=search-event">{{ $city->name }}</a>
                                                    </h3>
                                                    <label class="lp-listing-quantity">{{ $city->number }} Events</label> <?php $i++ ?>
                                                </div>
                                                <a href="http://127.0.0.1:8000/search/index?name_event=&name_category=&name_cit=Quito&date=&post_type=event&search=search-event" class="overlay-link"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <div class="wpb_column vc_column_container vc_col-sm-6">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                        <?php $i = 0 ?>
                                        @foreach ($cities as $city)
                                            <?php $i++ ?>
                                            @if ( $i == 2 )
                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div class="city-girds ">
                                                                <div class="city-thumb">
                                                                    <img src="https://images.squarespace-cdn.com/content/v1/5ce2ea2e2214e00001ac3a1e/1571947918858-K5X8K3LXVZTYQR5RQXSS/manta.jpg" class="visible hidden-xs" alt="location">
                                                                    <img src="https://ovatheme.com/em4u/wp-content/uploads/2019/03/cali_m.jpg" class="hidden visible-xs" alt="location">
                                                                </div>
                                                                <div class="city-title text-center">
                                                                    <h3 class="lp-h3">
                                                                        <a href="http://127.0.0.1:8000/search/index?name_event=&name_category=&name_cit=Manta&date=&post_type=event&search=search-event">{{ $city->name }}</a>
                                                                    </h3>
                                                                    <label class="lp-listing-quantity">{{ $city->number }} Events</label> <?php $i++ ?>
                                                                </div>
                                                                <a href="http://127.0.0.1:8000/search/index?name_event=&name_category=&name_cit=Manta&date=&post_type=event&search=search-event" class="overlay-link"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                        <?php $i = 0 ?>
                                        @foreach ($cities as $city)
                                            <?php $i++ ?>
                                            @if ( $i == 3 )
                                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div class="city-girds ">
                                                                <div class="city-thumb">
                                                                    <img src="https://i.eldiario.com.ec/fotos-manabi-ecuador/2009/dsc_0445.jpg" class="visible hidden-xs" alt="location">
                                                                    <img src="https://ovatheme.com/em4u/wp-content/uploads/2019/03/los-angeles-california_m.jpg" class="hidden visible-xs" alt="location">
                                                                </div>
                                                                <div class="city-title text-center">
                                                                    <h3 class="lp-h3">
                                                                        <a href="http://127.0.0.1:8000/search/index?name_event=&name_category=&name_cit=Cuenca&date=&post_type=event&search=search-event">{{ $city->name }}</a>
                                                                    </h3>
                                                                    <label class="lp-listing-quantity">{{ $city->number }} Events</label>
                                                                </div>
                                                                <a href="http://127.0.0.1:8000/search/index?name_event=&name_category=&name_cit=Cuenca&date=&post_type=event&search=search-event" class="overlay-link"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                        <?php $i = 0 ?>
                                        @foreach ($cities as $city)
                                            <?php $i++ ?>
                                            @if ( $i == 4 )
                                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div class="city-girds ">
                                                                <div class="city-thumb">
                                                                    <img src="https://img.goraymi.com/2016/10/28/acdf50cbf5266d01e188bf5e539d1cc8_xl.jpg" class="visible hidden-xs" alt="location">
                                                                    <img src="https://ovatheme.com/em4u/wp-content/uploads/2019/03/frodia_m.jpg" class="hidden visible-xs" alt="location">
                                                                </div><div class="city-title text-center">
                                                                    <h3 class="lp-h3">
                                                                        <a href="http://127.0.0.1:8000/search/index?name_event=&name_category=&name_cit=Portoviejo&date=&post_type=event&search=search-event">{{ $city->name }}</a>
                                                                    </h3>
                                                                    <label class="lp-listing-quantity">{{ $city->number }} Events</label>
                                                                </div>
                                                                <a href="http://127.0.0.1:8000/search/index?name_event=&name_category=&name_cit=Portoviejo&date=&post_type=event&search=search-event" class="overlay-link"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row-full-width vc_clearfix"></div>
            <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1554353284632 vc_row-has-fill">
                <div class="container container-new">
                    <div class="row">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner vc_custom_1554354202684">
                                <div class="wpb_wrapper">
                                    <div class="ova_heading_v4 text-center">
                                        <h3 class="title">{{ __('WHY CHOOSE US') }}</h3>
                                        <div class="sub_title"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-4">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="ova_box ova-trans  styl1 ">
                                        <div class="num">01</div>
                                        <div class="wrap_content">
                                            <h3 class="title"><a href="#" class="ova-trans">{{ __('MULTIPLE EVENTS') }}</a></h3>
                                            <div class="desc">{{ __('You can find all your favorite events in one place') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-4">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="ova_box ova-trans  styl1 ">
                                        <div class="num">02</div>
                                        <div class="wrap_content">
                                            <h3 class="title"><a href="#" class="ova-trans">{{ __('LOCATION MANAGEMENT') }}</a></h3>
                                            <div class="desc">{{ __('We manage the locations to make them accessible and spacious') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-4">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="ova_box ova-trans  styl1 ">
                                        <div class="num">03</div>
                                        <div class="wrap_content">
                                            <h3 class="title"><a href="#" class="ova-trans">{{ __('CREDIT CARD PAYMENT') }}</a></h3>
                                            <div class="desc">{{ __('Pay with a credit card and pay in easy installments or in cash') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-4">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="ova_box ova-trans  styl1 ">
                                        <div class="num">04</div>
                                        <div class="wrap_content">
                                            <h3 class="title"><a href="#" class="ova-trans">{{ __('EVENT MANAGEMENT') }}</a></h3>
                                            <div class="desc">{{ __('We manage events for you to enjoy with the greatest comfort') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-4">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="ova_box ova-trans  styl1 ">
                                        <div class="num">05</div>
                                        <div class="wrap_content">
                                            <h3 class="title"><a href="#" class="ova-trans">{{ __('FREE REGISTRING') }}</a></h3>
                                            <div class="desc">{{ __('Register for free to find out about events in your city') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-4">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="ova_box ova-trans  styl1 ">
                                        <div class="num">06</div>
                                        <div class="wrap_content">
                                            <h3 class="title"><a href="#" class="ova-trans">{{ __('EASY TO USE') }}</a></h3>
                                            <div class="desc">{{ __('Intuitive platform with users, and booking tickets is an instinctive process') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row-full-width vc_clearfix"></div>
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1554353291638">
                <div class="container container-new">
                    <div class="row">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner vc_custom_1554354237470">
                                <div class="wpb_wrapper">
                                    <div class="ova_heading_v4 text-center">
                                        <h3 class="title">{{ __('FEATURED EVENTS') }}</h3>
                                        <div class="sub_title">{{ __('You can choose to display Featured, Upcoming, Past Events here') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="padding_col_mobile wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner vc_custom_1554353717414">
                                <div class="wpb_wrapper">
                                    <div class="ovaem_events_filter " data-order="DESC">
                                        <div class="row">
                                            <div class="events_filter_hide_nav">
                                                <div class="select_cat_mobile_btn">
                                                    <div class="btn_filter ova-btn ova-btn-second-color">{{ __('Select Category') }}<i class="arrow_carrot-down"></i></div>
                                                    <ul class="clearfix ovaem_events_filter_nav style2" data-tab_active ="">
                                                        <li class="all current">
                                                            <a href="#" class="ova-btn ova-btn-rad-30" data-filter="*">{{ __('All') }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ovaem_events_filter_content">
                                                <?php
                                                $featuredEvents = Event::orderByDesc('value')->take(3)->get();
                                                ?>
                                                @foreach ($featuredEvents as $featuredEvent)
                                                    <div class="col-md-4 col-sm-6 col-xs-6 ova-item isotope-item style2  festival">
                                                        <div class="ova_thumbnail">
                                                            <?php
                                                            $images = DB::table('images')->where('idEvent', '=', $featuredEvent->id)->get();
                                                            $i = 0;
                                                            foreach ($images as $img){
                                                                if($i == 0){
                                                                    ?>
                                                                    <img alt="{{ $featuredEvent->name }}" src="{{asset($img->img)}}" sizes="(max-width: 767px) 100vw, 600px">
                                                                    <?php
                                                                    $i++;
                                                                }
                                                            }
                                                            $datas = DB::table('helds')->where('idEvent', '=', $featuredEvent->id)->get();
                                                            foreach ($datas as $data){
                                                                list($day, $month, $year) = explode("-", date($data->date));
                                                                switch ($month) {
                                                                    case 01: $month = 'Ene' ; break;
                                                                    case 02: $month = 'Feb' ; break;
                                                                    case 03: $month = 'Mar' ; break;
                                                                    case 04: $month = 'Abr' ; break;
                                                                    case 05: $month = 'May' ; break;
                                                                    case 06: $month = 'Jun' ; break;
                                                                    case 07: $month = 'Jul' ; break;
                                                                    case 8: $month = 'Ago' ; break;
                                                                    case 9: $month = 'Sep' ; break;
                                                                    case 10: $month = 'Oct' ; break;
                                                                    case 11: $month = 'Nov' ; break;
                                                                    case 12: $month = 'Dic' ; break;
                                                                }
                                                                ?>
                                                                <div class="time"><span class="month">{{ $month }}</span><span class="date">{{ $day }}-{{ $year }}</span></div>
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                        <div class="wrap_content">
                                                            <h2 class="title">
                                                                <a>{{ $featuredEvent->name }}</a>
                                                            </h2>
                                                            <div class="except">{{ $featuredEvent->description }}</div>
                                                            <?php
                                                            $aux = '';
                                                            $string = '';
                                                            $cities = DB::table('helds')
                                                                    ->join('places', 'places.id', '=', 'helds.idPlace')
                                                                    ->join('cities', 'cities.id', '=', 'places.idCity')
                                                                    ->where('helds.idEvent', $featuredEvent->id)
                                                                    ->select('cities.name')
                                                                    ->get();
                                                            foreach ($cities as $city){
                                                                if ($city->name != $aux){
                                                                    $string = $string.$city->name.', ';
                                                                }
                                                                $aux = $city->name;
                                                            }
                                                            $string = substr($string, 0, -2);
                                                            ?>
                                                            <div class="venue"><i class="fa-sharp fa-solid fa-location-arrow"></i>{{ $string }}</div>
                                                            <div class="bottom">
                                                                <div class="more_detail">
                                                                    <form action="{{ route('detail.index') }}" method="GET" name="detail_event">
                                                                        <input type="submit" name="button-event" class="btn_link ova-btn ova-btn-rad-30" value="{{ __('Get ticket') }} {{ $featuredEvent->name }}">
                                                                    </form>
                                                                </div>
                                                                <span class="price"><span>$ {{ $featuredEvent->value }}</span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                <div class="row"></div>
                                            </div>
                                            <div class="read_more">
                                                <a class="ova-btn ova-btn-rad-30 ova-btn-arrow" href="{{ route('search.index') }}"><i class="fa-solid fa-clock"></i>{{ __('All events') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="1.5" data-vc-parallax-image="https://ovatheme.com/em4u/wp-content/uploads/2017/09/bg3.jpg" class="vc_row wpb_row vc_row-fluid vc_custom_1554353298112 vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving">
                <div class="patter_bg" style="background-color:rgba(0,0,0,0.56)" ></div>
                <div class="container container-new">
                    <div class="row">
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="ovaem_skill ">
                                        <div class="top">
                                            <i class="fa-solid fa-users"></i>
                                            <?php
                                            $users = User::all()->count();
                                            ?>
                                            <div class="number">{{ $users }}</div>
                                        </div>
                                        <div class="name">{{ __('PARTICIPANT') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="ovaem_skill ">
                                        <div class="top"><i class="fa-solid fa-calendar-days"></i>
                                            <?php
                                            $events = Event::all()->count();
                                            ?>
                                            <div class="number">{{ $events }}</div>
                                        </div>
                                        <div class="name">{{ __('Total Events') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="ovaem_skill ">
                                        <div class="top"><i class="fa-solid fa-earth-americas"></i>
                                            <?php
                                            $places = Place::all()->count();
                                            ?>
                                            <div class="number">{{ $places }}</div>
                                        </div>
                                        <div class="name">{{ __('VENUES') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="ovaem_skill ">
                                        <div class="top"><i class="fa-sharp fa-solid fa-user-tie"></i>
                                            <div class="number">19</div>
                                        </div>
                                        <div class="name">{{ __('Sponsors') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row-full-width vc_clearfix"></div>
            <div class="vc_row-full-width vc_clearfix"></div>
            @include('footer')
        </div>
	</body>
</html>