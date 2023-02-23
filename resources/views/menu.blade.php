<?php
    use App\Models\Category;
    use App\Models\Held;
    use App\Models\City;
    use App\Models\Place;
    use App\Models\Event;
    use App\Models\User;
?>
<header class="ova_header ovatheme_header_v2 bg_heading fixed has_logo_scroll has_logo_mobile ">
    <div class="scroll_fixed">
        <div class="container">
            <div class="row">
                <div class="ova-menu">
                    <nav class="navbar">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="ova-logo navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ovatheme_header_v2" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- LOGO PROPIO -->
                                <a href="{{ url('/') }}" class="navbar-brand logo">
                                    <i class="fa-solid fa-ticket"></i>
                                </a>
                                <a href="{{ url('/') }}" class="navbar-brand logo_scroll">
                                    <i class="fa-solid fa-ticket"></i>                                    
                                </a>
                                <a href="{{ url('/') }}" class="navbar-brand logo_mobile">
                                    <i class="fa-solid fa-ticket"></i>                                    
                                </a>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="ovatheme_header_v2">
                                <ul id="menu-primary-menu" class="nav navbar-nav navbar-right">
                                    <li id="menu-item-13" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-13 dropdown" style="height: ">
                                        <a title="Home" href="{{ url('/') }}">{{ __('Home') }}</a>
                                    </li>
                                    <li id="menu-item-16" class="col_shortcode_style menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-16 dropdown ova-megamenu" style="height: ">
                                        <a title="Event" href="#" class="col_shortcode_style">{{ __('Event') }}<span class="fa fa-caret-down show_dropmenu"></span></a>
                                        <button type="button" class="dropdown-toggle"><i class="arrow_carrot-down"></i></button>
                                        <ul class="ova-mega-menu three-columns  dropdown-menu"  role="menu">
                                            <li  id="menu-item-651" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-651 dropdown" style="height: 620px">
                                                <div>
                                                    <h5 class="title">{{ __('Upcomming Event') }}</h5>
                                                    <div class="ovaem_slider_events_two ">
                                                        <?php
                                                        $actualDate = date('d-m-Y');
                                                        $events = DB::table('events')
                                                                    ->join('helds', 'events.id', '=', 'helds.idEvent', )
                                                                    ->join('places', 'places.id', '=', 'helds.idPlace')
                                                                    ->join('cities', 'places.idCity', '=', 'cities.id')
                                                                    ->join('images', 'images.idEvent', '=', 'events.id')
                                                                    ->where('helds.date', '>', $actualDate)
                                                                    ->select('events.name', 'helds.date', 'places.name as place', 'cities.name as city', 'events.description', 'images.img as img')
                                                                    ->groupBy('events.name', 'helds.date')
                                                                    ->get();
                                                        ?>
                                                        @foreach ($events as $event)
                                                            <div class="item">
                                                                <div class="event_content">
                                                                    <div class="wrap_img">
                                                                        <img alt="{{ $event->name }}" src="{{asset($event->img)}}" width="1000" height="1000">
                                                                    </div>
                                                                    <h2 class="title"><a>{{ $event->name }}</a></h2>
                                                                    <?php
                                                                    list($year, $month, $day) = explode("-", date($event->date));
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
                                                                    <div class="wrap_date_venue">
                                                                        <div class="time"><i class="fa-solid fa-calendar"></i>{{ $month }} {{ $day }}, {{ $year }}</div>
                                                                        <div class="venue"><i class="fa-sharp fa-solid fa-location-dot"></i>{{ $event->place }} - {{ $event->city }}</div>
                                                                    </div>
                                                                    <div class="desc">{{ $event->description }}</div>
                                                                </div>
                                                                <div class="countdown">
                                                                    <div class="ova_countdown_menu">
                                                                        <div class="ova_countdown_event" data-day="01" data-month="02" data-year="2024" data-hour="12" data-minute="09" data-timezone="0"></div>
                                                                    </div>
                                                                </div>
                                                                <form action="{{ route('detail.index') }}" method="GET" name="detail_event">
                                                                    <input type="submit" name="button-event" class="btn_link ova-btn ova-btn-rad-30" value="{{ __('Get ticket') }} {{ $event->name }}">
                                                                </form>
                                                            </div>
                                                        @endforeach                                                
                                                    </div>
                                                </div>
                                            </li>	
                                            <li  id="menu-item-24" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-24 dropdown" style="height: 620px">
                                                <div>
                                                    <h5 class="title">{{ __('Event Archive') }}</h5>
                                                    <a title="Grid Version 1" href="{{ route('search.index') }}" class="" >{{ __('All events')}}</a>
                                                </div>
                                            </li>	
                                            <li  id="menu-item-27" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-27 dropdown" style="height: 620px">
                                                <div>
                                                    <h5 class="title">{{_('Event Pages') }}</h5>
                                                    <a title="Upcoming Events" href="{{ route('search.featured') }}" class="" >{{ __('Upcoming Events') }}</a>
                                                    <a title="Past Events" href="{{ route('search.past') }}" class="" >{{ __('Past Events') }}</a>
                                                    <a title="Featured Events" href="{{ route('search.featured') }}" class="" >{{ __('Featured Events') }}</a>
                                                    <a title="Virtual Event - Zoom" href="{{ route('search.zoom') }}" class="" >{{ __('Virtual Event') }} &#8211; Zoom</a>
                                                    <a title="Event Free Ticket" href="{{ route('search.free') }}" class="" >{{ __('Event Free Ticket') }}</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-5333" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5333 dropdown" style="height: ">
                                        <a title="Categories" href="#" >Categories<span class="fa fa-caret-down show_dropmenu"></span></a>
                                        <button type="button" class="dropdown-toggle"><i class="arrow_carrot-down"></i></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <?php
                                            $categories = Category::all();
                                            foreach ($categories as $category){
                                            ?>
                                                <form action="{{ route('search.category') }}" method="GET" name="detail_event">
                                                    <div class="container-fluid">
                                                        <li class="menu-item menu-item-type-taxonomy menu-item-object-categories menu-item-5334 dropdown" style="height: ">
                                                            <input style="background-color: transparent; border: none;" type="submit" value="{{ $category->name }}" name="menu_category" />
                                                        </li>
                                                    </div>
                                                </form>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                    <li id="menu-item-5332" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5332 dropdown" style="height: ">
                                        <a title="Locations" href="#" >{{ __('Locations') }}<span class="fa fa-caret-down show_dropmenu"></span></a>
                                        <button type="button" class="dropdown-toggle"><i class="arrow_carrot-down"></i></button>
                                        <ul class="dropdown-menu submenu" role="menu">
                                            <?php
                                            $cities = City::take(10)->get();
                                            ?>
                                            @foreach ($cities as $city)
                                                <form action="{{ route('search.category') }}" method="GET" name="detail_event">
                                                    <div class="container-fluid">
                                                        <li class="menu-item menu-item-type-taxonomy menu-item-object-categories menu-item-5334 dropdown" style="height: ">
                                                            <input style="background-color: transparent; border: none;" type="submit" value="{{ $city->name }}" name="menu_city" />
                                                        </li>
                                                    </div>
                                                </form>	
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li id="menu-item-921" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-921 dropdown" style="height: ">
                                        <a title="Pages" href="#" >{{ __('Pages') }}<span class="fa fa-caret-down show_dropmenu"></span></a>
                                        <button type="button" class="dropdown-toggle"><i class="arrow_carrot-down"></i></button>
                                        <ul class="dropdown-menu submenu" role="menu">
                                            <li id="menu-item-942" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-942 dropdown" style="height: ">
                                                <a title="About Us" href="https://ovatheme.com/em4u/about-us/" >{{ __('About Us') }}</a></li>	
                                            <li id="menu-item-5350" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5350 dropdown" style="height: ">
                                                <a title="Contact V1" href="https://ovatheme.com/em4u/contact-v1/" >{{ __('Contact') }}</a></li>		
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-13" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-13 dropdown" style="height: ">
                                            <a title="Cart" href="{{ route('cart.cart') }}">{{ __('Cart') }}</a>
                                    </li>
                                    <li id="menu-item-13" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-13 dropdown" style="height: ">
                                            <a title="Account" href="{{ url('/profile') }}">{{ __('Account') }}</a>
                                    </li>
                                    <!-- Panel administrativo -->
                                    <?php
                                    $id = Auth::id();
                                    if ($id == 1){
                                    ?>
                                        <li id="menu-item-13" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-13 dropdown" style="height: ">
                                                <a title="Home" href="{{ url('/admin') }}">{{ __('Management panel') }}</a>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                    @if (Route::has('login'))
                                        @auth
                                            <li class="li_account">
                                                <div class="ova-account">
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        <a href="{{ url('/') }}" class="ova_icon_open"><i class="fa-solid fa-right-to-bracket"></i></a>
                                                    </form>
                                                </div>
                                            </li>
                                        @else
                                            <li class="li_account">
                                                <div class="ova-account">
                                                    <a href="{{ route('login') }}" class="ova_icon_open"><i class="fa-solid fa-right-to-bracket"></i></a>
                                                    @if (Route::has('register'))
                                                        <a href="{{ route('register') }}" class="ova_icon_key"><i class="fa-solid fa-key"></i></a>
                                                    @endif
                                                </div>
                                            </li>
                                        @endauth
                                    @endif
                                </ul>	
                            </div> <!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>	 
            </div>
        </div>
        <!-- Background Heading -->
    </header>   