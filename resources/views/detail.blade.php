<?php
    use App\Models\Category;
    use App\Models\Held;
    use App\Models\City;
    use App\Models\Place;
    use App\Models\Event;
    use App\Models\User;
    use App\Models\Language;
	use App\Models\Image;
?>
<!DOCTYPE html>
<html lang="en-US" >
    @include('header')
    @include('menu')
    <body class="event-template-default single single-event postid-1172 theme-em4u woocommerce-js totop wpb-js-composer js-comp-ver-6.9.0 vc_responsive">  
		<div class="ovatheme_container_wide event_header_version1 bg_white">
    		<!-- Heading Version 1 -->
			<header class="ova_header ovatheme_header_v1  bg_heading fixed has_logo_scroll has_logo_mobile">
                <div class="ova-bg-heading" style="background-image: url( https://ovatheme.com/em4u/wp-content/themes/em4u/assets/img/bg_heading-compressor.jpg ); ">
                    <div class="bg_cover"></div>
                    <div class="container ova-breadcrumbs">
                        <h1 class="ova_title">{{ $name_event }}</h1>
                        <div id="breadcrumbs" >
                            <div class="breadcrumbs">
                                <div class="breadcrumbs-pattern">
                                    <div class="container">
                                        <div class="row">
                                            <ul class="breadcrumb"><li><a href="{{ url('/') }}">{{ __('Events') }}</a></li> 
                                            <li>{{ $name_event }}&nbsp;</li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>      
      		<script>var google_map = true;</script>
			<div class="grey_bg ova_single_event">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<div class="content">
							<!-- Message -->
							<?php 
							$actualDate = date ( 'Y-m-d' ); 
							$i = 0; $count = 0;
							?>
							@foreach ( $events as $event )
								<?php $count++; ?>
								@if ($actualDate > $event->date)	
									<?php $i++ ?>
								@endif
							@endforeach	
							@if ($i == $count)
								<div class="mb-2 bg-info text-white">{{ __('The event is expired') }}</div>	
								<br>
							@endif	
							<!-- Gallery, Thumbnail -->
							<div class="gallery">
								<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
									<!-- Indicators -->
									<ol class="carousel-indicators">
										<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
										<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
										<li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
										<li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
									</ol>
									<!-- Wrapper for slides -->
									<div class="carousel-inner" role="listbox">
										<?php
										$images = Image::where('idEvent', '=', $events[0]->id)->get();
										?>
										@if ($images)
											@if ($images[0]->img)
												<div class="item active">
													<img alt="{{ $event->eventName }}" src="{{asset($images[0]->img)}}" width="1000" height="1000">
												</div>
											@endif
											@if ($images[1]->img)
											<div class="item ">
												<img type="hidden" alt="{{ $event->eventName }}" src="{{asset($images[1]->img)}}" width="1000" height="1000">
											</div>
											@endif
											@if ($images[2]->img)
											<div class="item ">
												<img type="hidden" alt="{{ $event->eventName }}" src="{{asset($images[2]->img)}}" width="1000" height="1000">
											</div>
											@endif
											@if ($images[3]->img)
											<div class="item">
												<img type="hidden" alt="{{ $event->eventName }}" src="{{asset($images[3]->img)}}" width="1000" height="1000">
											</div>
											@endif
										@endif
	    	  						</div>
									<!-- Controls -->
									<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
										<span class="sr-only">{{ __('Previous') }}</span>
									</a>
									<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
										<span class="sr-only">{{ __('Next') }}</span>
									</a>
								</div>
							</div>
							<!-- Content -->
							<div class="desc">
								<p>{{ $events[0]->description }}</p>
							</div>
							<div class="desc">
								<p><i class="fa-solid fa-user-tag"></i>   <b>{{  __('Category') }}:</b> {{ $events[0]->category }}</p>
								<p><i class="fa-solid fa-users"></i>      <b>{{  __('Audience') }}:</b> {{ $events[0]->type }} -  {{ $events[0]->audienceDescription }}</p>
								<p><i class="fa-solid fa-language"></i>   <b>{{  __('Language') }}:</b> 
									@foreach ($events as $event)
										{{ $event->languageName }}-{{ $event->isoCode }}      
									@endforeach
								</p>
								<p>&nbsp;</p>
							</div>
							<div class="row">
								<div class="col-md-7">
									<!-- Tags -->
									<div class="tags">
										<div class="ovaem_tags">
											<span><i class="fa-solid fa-tag"></i>Tags: </span>
												<ul>
													<li>
														<a href=" ">{{ $events[0]->category }}</a>
													</li>
													<li>
														<a href="">Diversión</a>
													</li>	
													<li>
														<a href="">Estreno</a>
													</li>	
												</ul>
											</div>
										</div>	
									</div>
									<div class="col-md-5">
										<!-- Socials -->
										<div class="social">
											<span><i class="fa-solid fa-share"></i>{{ __('Share') }}</span>
											<ul class="share-social-icons clearfix">
												<li><a class="share-ico ico-facebook" target="_blank" href="//www.facebook.com/sharer.php?u=https://ovatheme.com/em4u/event/marketing-2017/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
												<li><a class="share-ico ico-twitter" target="_blank" href="//twitter.com/share?url=https://ovatheme.com/em4u/event/marketing-2017/&amp;text=Marketing+2017"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
												<li><a class="share-ico ico-pinterest" target="_blank" href="//www.pinterest.com/pin/create/button/?url=https://ovatheme.com/em4u/event/marketing-2017/"><i class="fab fa-pinterest-p"></i></a></li>
											</ul>
 										</div>
									</div>
								</div>
							</div>
							<!-- Tabs -->
							<div class="tab_content" id="event_tab">
								<div class="wrap_nav"></div>
								<div class="tab-content">
									<!-- Schedule -->
									<div id="schedule" class="tab-pane fade in active">
										<div class="ovaem_schedule">
											<div class="tab-content">
												<div id="tab_1_event" class="tab-pane fade ">
											</div>
										</div>
									</div>										
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single_event_right_info has_btn_book">
						<form action="{{ route('reserve.index') }}" method="GET" name="reserve_event">
							<!-- wrap_btn_book -->
							<input type="hidden" name="name_event" value="{{ $name_event }}">
							<div class="ovaem_submit">
								@if ($actualDate < $event->date)
									<input type="submit" name="button-event" class="btn_link ova-btn ova-btn-rad-30" value="{{ __('Reserve') }}">
								@endif
							</div>
							<!-- Event Detail -->
							<div class="event_widget event_info">
								<h3 class="title">{{ __('Event Detail') }}<span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
									<i class="icon_document_alt"></i>
								</h3>
								<div class="wrap_event_widget">
									<!-- time -->
									<div class="time">
										@foreach ( $events as $event )
											<?php
											$actualDate = date ( 'Y-m-d' ); 
											?>
											@if ($actualDate < $event->date)
												<div class="clearfix event_row">
													<label>{{ __('Date') }}: </label>
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
														list($hour, $min, $sec) = explode(":", date($event->time));
														if ( $hour > 12){
															$period = 'pm';
														} else {
															$period = 'am';
														}
													?>
													<span>{{ $month }} {{ $day }}, {{ $year }} {{ $hour }}:{{ $min }} {{ $period }}</span>
												</div>
												<div class="clearfix event_row">
													<label>{{ __('City') }}: </label>
													<span>{{ $event->cityName }}</span>
												</div>
												<div class="clearfix event_row">
													<label>{{ __('Address') }}: </label>
													<span>{{ $event->placeName }}</span>
												</div>
												<div class="event-calendar-sync">
													<span class="sync">
														<a href="http://addtocalendar.com/atc/google?utz=420&amp;uln=en-US&amp;vjs=1.5&amp;e[0][date_start]={{ $event->date}} {{ $hour }}:{{ $min }}&amp;e[0][date_end]={{ $event->date}} {{ $hour }}:{{ $min }}&amp;e[0][timezone]=&amp;e[0][title]={{ $event->eventName }}&amp;e[0][description]={{ $event->description }}&amp;e[0][location]={{ $event->placeName }} {{ $event->cityName }}&amp;e[0][organizer]=Ovatheme&amp;e[0][organizer_email]=ovatheme@gmail.com" target="_blank" rel="nofollow">+ Google Calendar</a>
														<a href="http://addtocalendar.com/atc/ical?utz=420&amp;uln=en-US&amp;vjs=1.5&amp;e[0][date_start]={{ $event->date}} {{ $hour }}:{{ $min }}&amp;e[0][date_end]={{ $event->date}} {{ $hour }}:{{ $min }}&amp;e[0][timezone]=&amp;e[0][title]={{ $event->eventName }}&amp;e[0][description]={{ $event->description }}&amp;e[0][location]={{ $event->placeName }} {{ $event->cityName }}&amp;e[0][organizer]=Ovatheme&amp;e[0][organizer_email]=ovatheme@gmail.com" target="_blank" rel="nofollow">+ Ical Export</a>
													</span>
												</div>
											@endif
											<div class="event-calendar-sync"></div>
										@endforeach   
										<div class="clearfix">
											<label>{{ __('Map') }}: </label>
											<div id="ovaem_map" class="ovaem_map" style="position: relative; overflow: hidden;">
												<div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
													<div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
														<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.8735968094047!2d-78.48738097257943!3d-0.16233533503666492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d59aa32554784b%3A0x3418a102a7d45f10!2sPlaza%20de%20Toros!5e0!3m2!1ses-419!2sec!4v1675884950126!5m2!1ses-419!2sec" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
													</div>
												</div>
											</div>
											<div class="get_direction_map">
												<a class="btn ova-btn text-center" href="https://maps.google.com?saddr=Current+Location&amp;daddr=-0.1633283,-78.4868987" target="_blank"><i class="fa fa-location-arrow"></i>Get Direction </a>
											</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
			<div class="event_single_related">
				
			</div>
			<script type="application/ld+json">
				{
				"@context": "http://schema.org",
				"@type": "Event",
				"name": "Marketing 2017",
				"startDate": "Nov 20, 2017 7:00 pm",
				"endDate": "Dec 29, 2017 7:00 pm",
				"location": {
					"@type": "Place",
					"name": "Room 02",
					"address": {
					"@type": "PostalAddress",
					"addressLocality": "park-row-new-york"
					}
				},
				"image": "https://ovatheme.com/em4u/wp-content/uploads/2017/10/event_conference_6-min.jpg",
				"description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas et ultrices massa",
				
				"offers": [{"@type":"Offer","name":"Free Ticket","validFrom":"Oct 20, 2017 T 6:25 am","availability":"http:\/\/schema.org\/InStock","url":"https:\/\/ovatheme.com\/em4u\/event\/marketing-2017\/","price":"","priceCurrency":""},{"@type":"Offer","name":"Silver Ticket","validFrom":"Oct 20, 2017 T 6:25 am","availability":"http:\/\/schema.org\/InStock","url":"https:\/\/ovatheme.com\/em4u\/event\/marketing-2017\/","price":"10","priceCurrency":"$"},{"@type":"Offer","name":"Gold Ticket","validFrom":"Oct 20, 2017 T 6:25 am","availability":"http:\/\/schema.org\/InStock","url":"https:\/\/ovatheme.com\/em4u\/event\/marketing-2017\/","price":"15","priceCurrency":"$"}],
				"performer": {
					"@type": "PerformingGroup",
					"name": "Ovatheme"
					}
				}
			</script>
		</div>
		@include('footer')		
    </body>		
</html>