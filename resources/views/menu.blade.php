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
                            <form action="{{ route('search.category') }}" method="GET" name="">
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
                                                                    ->where('helds.date', '>', $actualDate)
                                                                    ->select('events.name', 'helds.date', 'places.name as place', 'cities.name as city', 'events.description')
                                                                    ->get();
                                                        ?>
                                                        @foreach ($events as $event)
                                                            <div class="item">
                                                                <div class="event_content">
                                                                    <a href="https://ovatheme.com/em4u/event/adobe-wants-to-let-you-draw-data/">
                                                                        <div class="wrap_img" style="background: url(https://ovatheme.com/em4u/wp-content/uploads/2017/10/event_conference_1-3.jpg);"></div>
                                                                        <h2 class="title"><a href="https://ovatheme.com/em4u/event/adobe-wants-to-let-you-draw-data/">{{ $event->name }}</a></h2>
                                                                        <div class="wrap_date_venue">
                                                                            <div class="time"><i class="fa-solid fa-calendar"></i>{{ $event->date }}</div>
                                                                            <div class="venue"><i class="fa-sharp fa-solid fa-location-dot"></i>{{ $event->place }} - {{ $event->city }}</div>
                                                                        </div>
                                                                        <div class="desc">{{ $event->description }}</div>
                                                                    </a>
                                                                </div>
                                                                <div class="countdown">
                                                                    <div class="ova_countdown_menu">
                                                                        <div class="ova_countdown_event" data-day="01" data-month="02" data-year="2024" data-hour="12" data-minute="09" data-timezone="0"></div>
                                                                    </div>
                                                                </div>
                                                                <a class="ova-btn" href="https://ovatheme.com/em4u/event/adobe-wants-to-let-you-draw-data/">{{ __('Get ticket') }}</a>
                                                            </div>
                                                        @endforeach                                                
                                                    </div>
                                                </div>
                                            </li>	
                                            <li  id="menu-item-24" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-24 dropdown" style="height: 620px">
                                                <div>
                                                    <h5 class="title">{{ __('Event Archive') }}</h5>
                                                    <a title="Grid Version 1" href="{{ route('search.all') }}" class="" >{{ __('All events')}}</a>
                                                                <!-- <a title="Grid Version 2" href="https://ovatheme.com/em4u/event/?type=grid&#038;style_grid=style2" class="" >Grid Version 2</a> -->
                                                                <!-- <a title="Grid Version 3" href="https://ovatheme.com/em4u/event/?type=grid&#038;style_grid=style3" class="" >Grid Version 3</a> -->
                                                                <!-- <a title="Grid Version 4" href="https://ovatheme.com/em4u/event/?type=grid&#038;style_grid=style4" class="" >Grid Version 4</a> -->
                                                                <!-- <a title="List without Sidebar" href="https://ovatheme.com/em4u/event/?type=list" class="" >List without Sidebar</a> -->
                                                                <!-- <a title="List with Sidebar" href="https://ovatheme.com/em4u/event/?type=list_sidebar" class="" >List with Sidebar</a> -->
                                                                <!-- <a title="Grid Sidebar V1" href="https://ovatheme.com/em4u/event/?type=grid_sidebar&#038;style_grid=style1" class="" >Grid Sidebar V1</a> -->
                                                                <!-- <a title="Grid Sidebar V2" href="https://ovatheme.com/em4u/event/?type=grid_sidebar&#038;style_grid=style2" class="" >Grid Sidebar V2</a> -->
                                                                <!-- <a title="Grid Sidebar V3" href="https://ovatheme.com/em4u/event/?type=grid_sidebar&#038;style_grid=style3" class="" >Grid Sidebar V3</a> -->
                                                                <!-- <a title="Grid Sidebar V4" href="https://ovatheme.com/em4u/event/?type=grid_sidebar&#038;style_grid=style4" class="" >Grid Sidebar V4</a> -->
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
                                                <li id="menu-item-5334"  class="menu-item menu-item-type-taxonomy menu-item-object-categories menu-item-5334 dropdown" style="height: ">
                                                    <a type="submit" title="{{ $category->name }}">{{ $category->name }}</a>
                                                </li>
                                                <li class="menu-item menu-item-type-taxonomy menu-item-object-categories menu-item-5334 dropdown" style="height: ">
                                                    <input type="submit" value="{{ $category->name }}" name="menu_category" />
                                                </li>
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
                                                <li id="menu-item-5340" class="menu-item menu-item-type-taxonomy menu-item-object-location menu-item-has-children menu-item-5340 dropdown" style="height: ">
                                                    <a title="Texas" href="https://ovatheme.com/em4u/location/texas/" >{{ $city-> name }} <span class="fa fa-caret-down show_dropmenu"></span></a>
                                                    <button type="button" class="dropdown-toggle"><i class="arrow_carrot-down"></i></button>
                                                    <ul class="dropdown-menu submenu" role="menu">
                                                        <?php
                                                        $places = Place::where('idCity', $city->id)->get();
                                                        ?>
                                                        @foreach ($places as $place)
                                                            <li id="menu-item-5341" class="menu-item menu-item-type-taxonomy menu-item-object-location menu-item-5341 dropdown" style="height: ">
                                                                <a title="Austin" href="https://ovatheme.com/em4u/location/austin/" >{{ $place->name }}</a>
                                                            </li>
                                                            <li class="menu-item menu-item-type-taxonomy menu-item-object-categories menu-item-5334 dropdown" style="height: ">
                                                                <input type="submit" value="{{ $place->name }}" name="{{ $place->name }}" />
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>	
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
                                                <a title="Contact Us" href="#" >{{ __('Contact Us') }}<span class="fa fa-caret-down show_dropmenu"></span></a>
                                                <button type="button" class="dropdown-toggle"><i class="arrow_carrot-down"></i></button>
                                                <ul class="dropdown-menu submenu" role="menu">
                                                    <li id="menu-item-1281" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1281 dropdown" style="height: ">
                                                        <a title="Contact V1" href="https://ovatheme.com/em4u/contact-v1/" >{{ __('Contact') }}</a></li>		
                                                </ul>
                                            </li>
                                            <li id="menu-item-2444" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2444 dropdown" style="height: ">
                                                <a title="Checkout Event" href="https://ovatheme.com/em4u/checkout-event/" >{{ __('Checkout') }}</a>
                                            </li>	
                                        </ul>
                                    </li>
                                    <li id="menu-item-13" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-13 dropdown" style="height: ">
                                        <a title="Home" href="https://ovatheme.com/em4u/blog/">{{ __('Blog') }}</a>
                                    </li>
                                    <li id="menu-item-13" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-13 dropdown" style="height: ">
                                            <a title="Home" href="https://ovatheme.com/em4u/cart-event/">{{ __('Cart') }}</a>
                                    </li>
                                    <li id="menu-item-13" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-13 dropdown" style="height: ">
                                            <a title="Home" href="https://ovatheme.com/em4u/my-account/">{{ __('Account') }}</a>
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
                                            <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">logout</a>
                                            <li class="li_account">
                                                <div class="ova-account">
                                                    @include('layouts.navigation')
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
                            </form>
                        </nav>
                    </div>
                </div>	 
            </div>
        </div>
        <!-- Background Heading -->
    </header>   