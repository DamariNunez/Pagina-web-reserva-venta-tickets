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
                            <form action="https://ovatheme.com/em4u/" method="GET" name="search_event">
                                <div class="ovaem_name_event">
                                    <input class="form-controll selectpicker" placeholder="Enter Name ..." name="name_event" value="">
                                </div><div class="ovaem_cat">
                                    <div class="btn-group bootstrap-select">
                                        <select name="cat" id="cat" class="selectpicker" tabindex="-98">
                                            <option value="">All Categories</option>
                                            <option class="level-0" value="business">Business</option>
                                            <option class="level-0" value="concert" selected="selected">Concert</option>
                                            <option class="level-0" value="conference">Conference</option>
                                            <option class="level-0" value="festival">Festival</option>
                                            <option class="level-0" value="sport">Sport</option>
                                            <option class="level-0" value="travel">Travel</option>
                                        </select>
                                    </div>
                                </div><div class="ovaem_country">
                                    <div class="btn-group bootstrap-select postform">
                                        <select name="name_country" id="name_country" class="selectpicker postform" tabindex="-98">
                                            <option value="">All States</option>
                                            <option class="level-0" value="california" selected="selected">California</option>
                                            <option class="level-0" value="texas">Texas</option>
                                            <option class="level-0" value="washington">Washington</option>
                                        </select>
                                    </div>
                                </div><div class="ovaem_city">
                                    <div class="btn-group bootstrap-select postform">
                                        <select name="name_city" id="name_city" class="selectpicker postform" tabindex="-98">
                                            <option value="" selected="selected">All Cities</option>
                                            <option class="level-0" value="los-angeles">Los Angeles</option>
                                            <option class="level-0" value="sacramento">Sacramento</option>
                                        </select>
                                    </div>
                                </div><div class="ovaem_venue">
                                    <div class="btn-group bootstrap-select">
                                        <select name="name_venue" class="selectpicker" tabindex="-98">
                                            <option value="">All Venue</option>
                                            <option value="225-liberty-street-new-york">225 Liberty Street, New York</option>
                                            <option value="732-macdougal-street" selected="">732 Macdougal Street</option>
                                            <option value="beekman-street-new-york">Beekman Street, New York</option>
                                            <option value="pace-university">Pace University</option>
                                            <option value="park-row-new-york">Park Row, New York</option>
                                            <option value="seamores-broome-street-new-york">Seamore’s, Broome Street, New York</option>
                                        </select>
                                    </div>
                                </div><div class="ovaem_time">
                                    <div class="btn-group bootstrap-select select_alltime">
                                        <select name="time" class="selectpicker select_alltime" style="z-index: 9999" tabindex="-98">
                                            <option value="">All Time</option><option value="today">Today</option>
                                            <option value="tomorrow" selected="">Tomorrow</option>
                                            <option value="this_week">This Week</option>
                                            <option value="this_week_end">This Weekend</option>
                                            <option value="next_week">Next Week</option>
                                            <option value="next_month">Next Month</option>
                                            <option value="past">Past Events</option>
                                            <option value="future">Future Events</option>
                                        </select>
                                    </div>
                                </div><div class="ovaem_date">
                                    <input id="from" class="ovaem_select_date ovaem_date_from form-controll selectpicker" placeholder="From ..." data-date_format="d M Y" data-lang="en-GB" data-first-day="0" name="ovaem_date_from" value=""><input id="to" class="ovaem_select_date ovaem_date_to form-controll selectpicker" placeholder="To ..." data-date_format="d M Y" data-lang="en-GB" data-first-day="0" name="ovaem_date_to" value="">
                                </div><input type="hidden" name="post_type" value="event"><input type="hidden" name="search" value="search-event"><div class="ovaem_submit"><input type="submit" value="Find Event">
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
                        <div class="col-md-4 col-sm-6 ova-item style1 ">
                            <a href="https://ovatheme.com/em4u/event/marketing-2017/">
                                <div class="ova_thumbnail">
                                    <img alt="Marketing 2017" src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/event_conference_6-min-370x222.jpg" srcset="https://ovatheme.com/em4u/wp-content/uploads/2017/10/event_conference_6-min-370x222.jpg 1200w,
                                                https://ovatheme.com/em4u/wp-content/uploads/2017/10/event_conference_6-min-640x384.jpg 767w" sizes="(max-width: 767px) 100vw, 600px">
                                    <div class="venue">
                                        <span><i class="icon_pin_alt"></i></span>Park Row, New York														
                                    </div>
                                    <div class="time">
                                        <span class="month">Nov</span>
                                        <span class="date">20-2017</span>
                                        <span class="price"><span><span>$0-$15</span></span></span>
                                    </div>
                                </div>
                            </a>
                            <div class="wrap_content">
                                <h2 class="title">
                                    <a href="https://ovatheme.com/em4u/event/marketing-2017/">Marketing 2017</a>
                                </h2>
                                <div class="status"><span class="past">Past</span></div>
                                <div class="except">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mae...</div>
                                <div class="more_detail">
                                    <a class="btn_link ova-btn ova-btn-rad-30" href="https://ovatheme.com/em4u/event/marketing-2017/">Get ticket													</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 ova-item style1 ">
                            <a href="https://ovatheme.com/em4u/event/adobe-wants-to-let-you-draw-data/">
                                <div class="ova_thumbnail">
                                    <img alt="Adobe wants to let you draw data" src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/event_conference_1-3-370x222.jpg" srcset="https://ovatheme.com/em4u/wp-content/uploads/2017/10/event_conference_1-3-370x222.jpg 1200w,
                                                https://ovatheme.com/em4u/wp-content/uploads/2017/10/event_conference_1-3-640x384.jpg 767w" sizes="(max-width: 767px) 100vw, 600px">
                                    <div class="venue">
                                        <span><i class="icon_pin_alt"></i></span>Pace University														
                                    </div>
                                    <div class="time">
                                        <span class="month">Feb</span>
                                        <span class="date">1-2024</span>
                                        <span class="price"><span><span>$0-$15</span></span></span>
                                    </div>
                                </div>
                            </a>
                            <div class="wrap_content">
                                <h2 class="title">
                                    <a href="https://ovatheme.com/em4u/event/adobe-wants-to-let-you-draw-data/">Adobe wants to let you draw da...</a>
                                </h2>
                                <div class="status">
                                    <span class="upcoming">Upcoming</span>													
                                </div>
                                <div class="except">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mae...</div>
                                <div class="more_detail">
                                    <a class="btn_link ova-btn ova-btn-rad-30" href="https://ovatheme.com/em4u/event/adobe-wants-to-let-you-draw-data/">Get ticket													</a>
                                </div>
                            </div>
                        </div>
                        <div class="mobile_row"></div>	
                        <div class="col-md-4 col-sm-6 ova-item style1 ">
                            <a href="https://ovatheme.com/em4u/event/happy-wedding/">
                                <div class="ova_thumbnail">
                                    <img alt="Happy wedding" src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/event_festival_2-1-370x222.jpg" srcset="https://ovatheme.com/em4u/wp-content/uploads/2017/10/event_festival_2-1-370x222.jpg 1200w,
                                                https://ovatheme.com/em4u/wp-content/uploads/2017/10/event_festival_2-1-640x384.jpg 767w" sizes="(max-width: 767px) 100vw, 600px">
                                    <div class="venue">
                                        <span><i class="icon_pin_alt"></i></span>Seamore's, Broome St...														
                                    </div>
                                    <div class="time">
                                        <span class="month">Feb</span>
                                        <span class="date">15-2024</span>
                                        <span class="price"><span><span>$0-$15</span></span></span>
                                    </div>
                                </div>
                            </a>
                            <div class="wrap_content">
                                <h2 class="title">
                                    <a href="https://ovatheme.com/em4u/event/happy-wedding/">Happy wedding</a>
                                </h2>
                                <div class="status">
                                    <span class="upcoming">Upcoming</span>												
                                </div>
                                <div class="except">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mae...</div>
                                <div class="more_detail">
                                    <a class="btn_link ova-btn ova-btn-rad-30" href="https://ovatheme.com/em4u/event/happy-wedding/">Get ticket</a>
                                </div>
                            </div>
                        </div>
                        <div class="row"></div>
                        <div class="col-md-4 col-sm-6 ova-item style1 ">
                            <a href="https://ovatheme.com/em4u/event/conference-about-bitcoin-2017/">
                                <div class="ova_thumbnail">
                                    <img alt="Conference about Bitcoin 2020" src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/event_conference_2-2-370x222.jpg" srcset="https://ovatheme.com/em4u/wp-content/uploads/2017/10/event_conference_2-2-370x222.jpg 1200w,
                                                https://ovatheme.com/em4u/wp-content/uploads/2017/10/event_conference_2-2-640x384.jpg 767w" sizes="(max-width: 767px) 100vw, 600px">
                                    <div class="venue">
                                        <span><i class="icon_pin_alt"></i></span>Pace University														
                                    </div>
                                    <div class="time">
                                        <span class="month">Feb</span>
                                        <span class="date">22-2024</span>
                                        <span class="price"><span><span>$10</span></span></span>
                                    </div>
                                </div>
                            </a>
                            <div class="wrap_content">
                                <h2 class="title">
                                    <a href="https://ovatheme.com/em4u/event/conference-about-bitcoin-2017/">Conference about Bitcoin 2020</a>
                                </h2>
                                <div class="status">
                                    <span class="upcoming">Upcoming</span>													
                                </div>
                                <div class="except">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mae...</div>
                                <div class="more_detail">
                                    <a class="btn_link ova-btn ova-btn-rad-30" href="https://ovatheme.com/em4u/event/conference-about-bitcoin-2017/">Get ticket</a>
                                </div>
                            </div>
                        </div>
                        <div class="mobile_row"></div>
                        <div class="row"></div>	
                        <div class="ovaem_events_pagination clearfix">
                            <div class="ovaem_pagination">
                                <ul class="pagination">
                                    <li class="active">
                                        <a href="https://ovatheme.com/em4u/?name_event&amp;name_country&amp;name_city&amp;name_venue&amp;time&amp;post_type=event&amp;search=search-event">1</a>
                                    </li>
                                    <li>
                                        <a href="https://ovatheme.com/em4u/page/2/?name_event&amp;name_country&amp;name_city&amp;name_venue&amp;time&amp;post_type=event&amp;search=search-event">2</a>
                                    </li>
                                    <li>
                                        <a href="https://ovatheme.com/em4u/page/3/?name_event&amp;name_country&amp;name_city&amp;name_venue&amp;time&amp;post_type=event&amp;search=search-event">3</a>
                                    </li>
                                    <li class="next page-numbers">
                                        <a href="https://ovatheme.com/em4u/page/2/?name_event&amp;name_country&amp;name_city&amp;name_venue&amp;time&amp;post_type=event&amp;search=search-event"><i class="arrow_carrot-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--
			<div class="container">
				 Content 
				<div class="row">
					<div class="ovaem_events_filter">
						<div class="ovaem_events_filter_content">
                            <div class="container search_not_found">Not Found Events</div>
                            <div class="ovaem_events_pagination clearfix"></div>
						</div>
					</div>
				</div>
            </div>
            -->
        </div>
        @include('footer')		
    </body>
</html>