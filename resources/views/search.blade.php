<?php
    use App\Models\Category;
    use App\Models\Held;
    use App\Models\City;
    use App\Models\Place;
    use App\Models\Event;
    use App\Models\User;
    use App\Models\Language;
?>
<!DOCTYPE html>
<html lang="en-US" >
    @include('header')
    @include('menu')
    <body class="error404 theme-em4u woocommerce-no-js totop wpb-js-composer js-comp-ver-6.9.0 vc_responsive" >   
        <div class="ovatheme_container_wide event_header_version1 bg_white">   
            <!-- Heading Version 1 -->
            <header class="ova_header ovatheme_header_v1  bg_heading fixed has_logo_scroll has_logo_mobile">
                <div class="ova-bg-heading" style="background-image: url( https://ovatheme.com/em4u/wp-content/themes/em4u/assets/img/bg_heading-compressor.jpg ); ">
                    <div class="bg_cover"></div>
                    <div class="container ova-breadcrumbs">
                        <h1 class="ova_title">{{ __('Events') }}</h1>
                        <div id="breadcrumbs" >
                            <div class="breadcrumbs">
                                <div class="breadcrumbs-pattern">
                                    <div class="container">
                                        <div class="row">
                                            <ul class="breadcrumb"><li><a href="{{ url('/') }}">{{ __('Home') }}</a></li> 
                                            <li>{{ __('Event') }}&nbsp;</li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header> 
            <!-- search -->
            <div class="ovaem_archives_event grid">
                <div class="ovaem_search">
                    <div class="container">
                        <div class="ovaem_search_event ovaem_search_state_city">
                            <form action="{{ route('search.filter') }}" method="GET" name="search_event">
                                <div class="ovaem_name_event">
                                    <input class="form-controll selectpicker" placeholder="{{ __('Enter Name ...') }}" name="name_event" value="{{ $name_event }}">
                                </div><div class="ovaem_cat">
                                    <div class="btn-group bootstrap-select">
                                        <select name="name_category" id="name_category" class="selectpicker" tabindex="-98">
                                            <?php
                                            $i = 0;
                                            $categories = Category::all();
                                            foreach ($categories as $category){
                                                ?> 
                                                @if ($name_category == $category->name)
                                                    <option selected="Selected">{{ $name_category }}</option>
                                                @else
                                                    @if ($name_category == null && $i == 0)
                                                        <option value="" selected="Selected">{{ __('All Categories') }}</option>
                                                        <?php $i = 1;?>
                                                    @endif
                                                    <option> {{ $category->name }} </option>
                                                @endif
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div><div class="ovaem_cat">
                                    <div class="btn-group bootstrap-select">
                                        <select name="name_city" id="name_city" class="selectpicker" tabindex="-98">
                                            <?php
                                            $i = 0;
                                            $cities = City::all();
                                            foreach ($cities as $city){
                                                ?> 
                                                @if ($name_city == $city->name)
                                                    <option selected="Selected">{{ $name_city }}</option>
                                                @else
                                                    @if ($name_city == null && $i == 0)
                                                        <option value="" selected="Selected">{{ __('All cities') }}</option>
                                                        <?php $i = 1;?>
                                                    @endif
                                                    <option> {{ $city->name }} </option>
                                                @endif
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div><div class="ovaem_city">
                                    <div class="btn-group bootstrap-select">
                                        <select name="name_place" id="name_place" class="selectpicker" tabindex="-98">
                                            <option value="" selected="Selected">{{ __('All places') }}</option>
                                            <?php
                                            $places = Place::all();
                                            foreach ($places as $place){
                                                ?> 
                                                @if ($name_place)
                                                    @if ($name_place == $place->name)
                                                        <option selected="Selected">{{ $name_place }}</option>
                                                    @endif
                                                @endif
                                                <option>{{ $place->name }}</option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div><div class="ovaem_venue">
                                    <div class="btn-group bootstrap-select">
                                        <select name="price" class="selectpicker" tabindex="-98">
                                            <option value="" selected="Selected">{{ __('All values') }}</option>
                                            <?php
                                            for ($i = 1; $i <= 10; $i++){
                                                ?> 
                                                @if ($price)
                                                    <?php
                                                    $val = $price[0].' - '.$price[1];
                                                    $cal = ($i*10).' - '.($i*10+10);
                                                    echo 'type'.gettype($val).' '.gettype($cal);
                                                    echo 'damari*'.$val.'*'.$cal.'*';
                                                    ?>
                                                    @if ($val == $cal)
                                                        <?php echo 'puerco'; ?>
                                                        <option selected="Selected">{{ $price[0] }}-{{ $price[1] }}</option>
                                                    @endif
                                                @endif
                                                <option>{{ ($i*10) }} - {{ ($i*10+10)  }}</option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div><div class="ovaem_venue">
                                <div class="btn-group bootstrap-select">
                                        <select name="name_language" class="selectpicker" tabindex="-98">
                                        <option value="" selected="Selected">{{ __('All languages') }}</option>
                                            <?php
                                            $languages = Language::all();
                                            foreach ($languages as $language){
                                                ?> 
                                                @if ($name_language)
                                                    @if ($name_language == $language->name)
                                                        <option selected="Selected">{{ $name_language }}</option>
                                                    @endif
                                                @endif
                                                <option>{{ $language->name }}</option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div><div class="ovaem_date">
                                    <input id="from" class="ovaem_select_date ovaem_date_from form-controll selectpicker" placeholder="{{ __('From ...') }}" data-date_format="d M Y" data-lang="en-GB" data-first-day="0" name="ovaem_date_from" value="{{ $dateFrom }}"><input id="to" class="ovaem_select_date ovaem_date_to form-controll selectpicker" placeholder="{{ __('To ...') }}" data-date_format="d M Y" data-lang="en-GB" data-first-day="0" name="ovaem_date_to" value="{{ $dateTo }}">
                                </div><input type="hidden" name="post_type" value="event"><input type="hidden" name="search" value="search-event"><div class="ovaem_submit"><input type="submit" value="{{ __('Find Event') }}">
                                </div>
                            </form>
                        </div>				
                    </div>
                </div>
            </div>
            <div class="container">
            <!-- Content -->
            <div class="row">
                <div class="ovaem_events_filter">
                    <div class="ovaem_events_filter_content">
                        <form action="{{ route('detail.index') }}" method="GET" name="detail_event">
                            @if ($events)
                                @foreach ($events as $event)
                                    <div class="col-md-4 col-sm-6 ova-item style1">
                                        <div class="ova_thumbnail">
                                            <img alt="{{ $event->eventName }}" src="{{asset($event->img)}}" sizes="(max-width: 767px) 100vw, 600px">
                                            <div class="venue">
                                                <span><i class="fa-solid fa-location-dot"></i></span>{{ $event->placeName }}, {{ $event->cityName }}													
                                            </div>
                                                <?php
                                                list($day, $month, $year) = explode("-", date($event->date));
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
                                                }?>
                                            <div class="time">
                                                <span name="month" id="month" value="{{ $month }}" class="month">{{ $month }}</span>
                                                <span name="day" value="{{ $day }}-{{ $year }}" class="date">{{ $day }}-{{ $year }}</span>
                                                <span name="price" value="{{ $event->value }}" class="price"><span><span>${{ $event->value }}</span></span></span>
                                            </div>
                                        </div>
                                        <div class="wrap_content">
                                            <h2 class="title">
                                                <a name="name_event" value="{{ $event->eventName }}">{{ $event->eventName }}</a>
                                            </h2>
                                            <?php $actualDate = date ( 'Y-m-d' ); ?>
                                            @if ($actualDate > $event->date)
                                                <div class="status"><span class="past">{{ __('Past') }}</span></div>
                                            @else
                                                <div class="status"><span class="past">{{ __('Upcoming') }}</span></div>
                                            @endif
                                            <div class="except">{{ $event->description }}</div>
                                            <div class="more_detail">
                                                <?php $cadena =  $event->eventName?>
                                                <!-- <a class="btn_link ova-btn ova-btn-rad-30">{{ __('Get ticket') }}</a> -->
                                                <input type="submit" name="button-event" class="btn_link ova-btn ova-btn-rad-30" value="{{ __('Get ticket') }} {{ $cadena }}">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </form>
                        <div class="ovaem_events_pagination clearfix">
                            <div class="ovaem_pagination">
                                <ul class="pagination">
                                    <div class="col">
                                        <div class="float-right">
                                                {{$events->links()}}
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('footer')		
    </body>
</html>