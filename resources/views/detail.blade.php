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
                                            <ul class="breadcrumb"><li><a href="{{ url('/') }}">{{ __('Home') }}</a></li> 
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
							<?php $actualDate = date ( 'd-m-Y' ); ?>
							@foreach ( $events as $event)
								@if ($actualDate > $event->date)														
									<div class="mb-2 bg-info text-white">The event is expired</div>
									<br>	
								@endif
							@endforeach				
							<!-- Gallery, Thumbnail -->
							<div class="gallery">
								<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
									<!-- Indicators -->
									<ol class="carousel-indicators">
										<li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
										<li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
									</ol>
									<!-- Wrapper for slides -->
									<div class="carousel-inner" role="listbox">
	  			    					<div class="item">
											<img src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/event_conference_6-min.jpg" alt="0">
										</div>
	    		    					<div class="item active">
											<img src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/event_business_1-1.jpg" alt="1">
										</div>
	    	  						</div>
									<!-- Controls -->
									<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
							</div>
							<!-- Content -->
							<div class="desc">
								@foreach ( $events as $event)
									<p>{{ $event->description }}</p>
									<p>&nbsp;</p>
								@endforeach
							</div>
							<div class="row">
								<div class="col-md-7">
									<!-- Tags -->
									<div class="tags">
										<div class="ovaem_tags">
											<span><i class="fa-solid fa-tag"></i>Tags: </span>
												<ul>
													@foreach ( $events as $event)
														<li>
															<a href=" ">{{ $event->category }}</a>
														</li>
													@endforeach	
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
											<span><i class="fa-solid fa-share"></i> Share</span>
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
								<div class="wrap_nav">
									<ul class="nav">
										<li class="active">
											<a data-toggle="tab" href="#schedule">Schedule<span class="one"></span><span class="two"></span><span class="three"></span>	</a>
										</li>
										<li>
											<a data-toggle="tab" href="#speaker">Speaker<span class="one"></span><span class="two"></span><span class="three"></span></a>
										</li>
										<li>
											<a data-toggle="tab" href="#event_comments">Comments<span class="one"></span><span class="two"></span><span class="three"></span></a>
										</li>
										<li>
											<a data-toggle="tab" href="#event_contact">Contact<span class="one"></span><span class="two"></span><span class="three"></span></a>
										</li>
									</ul>
								</div>
								<div class="tab-content">
									<!-- Schedule -->
									<div id="schedule" class="tab-pane fade in active">
										<div class="ovaem_schedule">
											<ul class="nav">
												<li class="active">
													<a data-toggle="tab" href="#tab_0_event">Day 1<br> <span class="date">Nov 21, 2017</span></a>
												</li>
												<li class="">
													<a data-toggle="tab" href="#tab_1_event">Day 2<br> <span class="date">Nov 22, 2017</span></a>
												</li>
												<li class="">
													<a data-toggle="tab" href="#tab_2_event">Day 3<br> <span class="date">Nov 23, 2017</span></a>
												</li>
												<li class="">
													<a data-toggle="tab" href="#tab_3_event">Day 4<br> <span class="date">Nov 24, 2017</span></a>
												</li>
											</ul>
											<div class="tab-content">
												<div id="tab_0_event" class="tab-pane fade in active">
													<div class="wrap_content ">
														<div class="speaker_side">
															<ul>
																<li>
																	<a href="https://ovatheme.com/em4u/?post_type=speaker&amp;p=1161">
																		<img src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/speaker3-min.jpg" alt="John Doe" width="50">
																	</a>
																</li>
																<li>
																	<a href="https://ovatheme.com/em4u/?post_type=speaker&amp;p=474">
																		<img src="https://ovatheme.com/em4u/wp-content/uploads/2017/09/speaker6-min.jpg" alt="Big Smile" width="50">
																	</a>
																</li>
															</ul>
														</div>
														<div class="content_side">
															<div class="title">Welcome &amp; Registration</div>
															<div class="time">08:00 - 10:15</div>
															<p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
															<div class="speaker_info">
																<div class="speaker_title">
																	<a href="https://ovatheme.com/em4u/?post_type=speaker&amp;p=1161">John Doe</a>
																</div>
																<div class="speaker_job">CEO Mitup</div>
															</div>
															<div class="speaker_info">
																<div class="speaker_title">
																	<a href="https://ovatheme.com/em4u/?post_type=speaker&amp;p=474">Big Smile</a>
																</div>
																<div class="speaker_job">Accountant</div>
															</div>
														</div>
													</div>
													<div class="wrap_content ">
														<div class="speaker_side">
															<ul>
																<li>
																	<a href="https://ovatheme.com/em4u/?post_type=speaker&amp;p=1162">
																		<img src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/speaker5-min-2.jpg" alt="Bebe Rexha" width="50">
																	</a>
																</li>
															</ul>
														</div>
														<div class="content_side">
															<div class="title">How to organize great events</div>
															<div class="time">10:20 - 11:00</div>
															<p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting induLorem Ipsum is simply dummy text of the printing and typesetting industry</p>
															<div class="speaker_info">
																<div class="speaker_title">
																	<a href="https://ovatheme.com/em4u/?post_type=speaker&amp;p=1162">Bebe Rexha</a>
																</div>
																<div class="speaker_job">WordPress Dev</div>
															</div>
														</div>
													</div>
													<div class="wrap_content last">
														<div class="speaker_side">
															<ul>
																<li>
																	<a href="https://ovatheme.com/em4u/?post_type=speaker&amp;p=1164">
																		<img src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/speaker3-min.jpg" alt="Adam Athlee" width="50">
																	</a>
																</li>
															</ul>
														</div>
														<div class="content_side">
															<div class="title">Scaling into crowded space</div>
															<div class="time">10:15 AM - 11:30 AM</div>
															<p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting induLorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
															<div class="speaker_info">
																<div class="speaker_title">
																	<a href="https://ovatheme.com/em4u/?post_type=speaker&amp;p=1164">Adam Athlee</a>
																</div>
																<div class="speaker_job">photographer</div>
															</div>
														</div>
													</div>
												</div>
												<div id="tab_1_event" class="tab-pane fade "><div class="wrap_content ">
													<div class="speaker_side">
														<ul>
															<li>
																<a href="https://ovatheme.com/em4u/?post_type=speaker&amp;p=1164">
																	<img src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/speaker3-min.jpg" alt="Adam Athlee" width="50">
																</a>
															</li>
														</ul>
													</div>
													<div class="content_side">
														<div class="title">Checkin Ticket</div>
														<div class="time">07:00 - 08:15</div>
														<p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting induLorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
														<div class="speaker_info">
															<div class="speaker_title">
																<a href="https://ovatheme.com/em4u/?post_type=speaker&amp;p=1164">Adam Athlee</a>
															</div>
															<div class="speaker_job">photographer</div>
														</div>
													</div>
												</div>
												<div class="wrap_content last">
													<div class="speaker_side">
														<ul>
															<li>
																<a href="https://ovatheme.com/em4u/?post_type=speaker&amp;p=1163">
																	<img src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/speaker7-min.jpg" alt="Mrs Donna" width="50">
																</a>
															</li>
															<li>
																<a href="https://ovatheme.com/em4u/?post_type=speaker&amp;p=1164">
																	<img src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/speaker3-min.jpg" alt="Adam Athlee" width="50">
																</a>
															</li>
														</ul>
													</div>
													<div class="content_side">
														<div class="title">How to organize great events</div>
														<div class="time">09:00 - 10: 30</div>
														<p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting induLorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
														<div class="speaker_info">
															<div class="speaker_title">
																<a href="https://ovatheme.com/em4u/?post_type=speaker&amp;p=1163">Mrs Donna</a>
															</div>
															<div class="speaker_job">Copywriting</div>
														</div>
														<div class="speaker_info">
															<div class="speaker_title">
																<a href="https://ovatheme.com/em4u/?post_type=speaker&amp;p=1164">Adam Athlee</a>
															</div>
															<div class="speaker_job">photographer</div>
														</div>
													</div>
												</div>
											</div>
											<div id="tab_2_event" class="tab-pane fade ">
												<div class="wrap_content ">
													<div class="speaker_side">
														<ul>
															<li>
																<a href="https://ovatheme.com/em4u/?post_type=speaker&amp;p=1167">
																	<img src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/speaker5-min-2.jpg" alt="Bella Lind" width="50">
																</a>
															</li>
														</ul>
													</div>
													<div class="content_side">
														<div class="title">Checkin Ticket</div>
														<div class="time">07:10 Am - 07:30 Am</div>
														<p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting induLorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
														<div class="speaker_info">
															<div class="speaker_title">
																<a href="https://ovatheme.com/em4u/?post_type=speaker&amp;p=1167">Bella Lind</a>
															</div>
															<div class="speaker_job">Accountant</div>
														</div>
													</div>
												</div>
												<div class="wrap_content last">
													<div class="speaker_side">
														<ul>
															<li>
																<a href="https://ovatheme.com/em4u/?post_type=speaker&amp;p=1167">
																	<img src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/speaker5-min-2.jpg" alt="Bella Lind" width="50">
																</a>
															</li>
														</ul>
													</div>
													<div class="content_side">
														<div class="title">Lession 1</div>
														<div class="time">08:00 Am - 10:15 Am</div>
														<p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting induLorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
														<div class="speaker_info">
															<div class="speaker_title">
																<a href="https://ovatheme.com/em4u/?post_type=speaker&amp;p=1167">Bella Lind</a>
															</div>
															<div class="speaker_job">Accountant</div>
														</div>
													</div>
												</div>
											</div>
											<div id="tab_3_event" class="tab-pane fade ">
												<div class="wrap_content ">
													<div class="speaker_side">
														<ul>
															<li>
																<a href="https://ovatheme.com/em4u/?post_type=speaker&amp;p=1167">
																	<img src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/speaker5-min-2.jpg" alt="Bella Lind" width="50">
																</a>
															</li>
														</ul>
													</div>
													<div class="content_side">
														<div class="title">Checkin Ticket</div>
														<div class="time">07:00 Am - 08:00 Am</div>
														<p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting induLorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
														<div class="speaker_info">
															<div class="speaker_title">
																<a href="https://ovatheme.com/em4u/?post_type=speaker&amp;p=1167">Bella Lind</a>
															</div>
															<div class="speaker_job">Accountant</div>
														</div>
													</div>
												</div>
												<div class="wrap_content last">
													<div class="speaker_side">
														<ul>
															<li>
																<a href="https://ovatheme.com/em4u/?post_type=speaker&amp;p=1163">
																	<img src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/speaker7-min.jpg" alt="Mrs Donna" width="50">
																</a>
															</li>
														</ul>
													</div>
													<div class="content_side">
														<div class="title">Finish Course</div>
														<div class="time">08:10 Am - 11:00 Am</div>
														<p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting induLorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
														<div class="speaker_info">
															<div class="speaker_title">
																<a href="https://ovatheme.com/em4u/?post_type=speaker&amp;p=1163">Mrs Donna</a>
															</div>
															<div class="speaker_job">Copywriting</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>										
								</div>
								<div id="speaker" class="tab-pane fade">
									<div class="ova_speaker_list_wrap style4">
										<div class="col-md-4 col-sm-4 ova-col">
											<div class="ova_speaker_list ">
												<img src="https://ovatheme.com/em4u/wp-content/uploads/2017/09/speaker6-min.jpg" alt="Big Smile">
												<div class="content">
													<div class="wrap_info ova-trans">
														<h3 class="title">
															<a href="https://ovatheme.com/em4u/speaker/anna-young/">Big Smile</a>
														</h3>
														<div class="job">Accountant</div>
													</div>
													<ul class="social">
														<li> <a target="_blank" href="#"><i class="fa fa-facebook"></i></a> </li>	
														<li> <a target="_blank" href="#"><i class="fa fa-youtube"></i></a> </li>	
														<li> <a target="_blank" href="#"><i class="fa fa-linkedin"></i></a> </li>	
														<li> <a target="_blank" href="#"><i class="fa fa-twitter"></i></a> </li>	
													</ul>				
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-4 ova-col">
											<div class="ova_speaker_list ">
												<img src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/speaker3-min.jpg" alt="John Doe">
												<div class="content">
													<div class="wrap_info ova-trans">
														<h3 class="title">
															<a href="https://ovatheme.com/em4u/speaker/john-doe/">John Doe</a>
														</h3>
														<div class="job">CEO Mitup</div>
													</div>
													<ul class="social">
														<li> <a target="_blank" href="#"><i class="fa fa-facebook"></i></a> </li>	
														<li> <a target="_blank" href="#"><i class="fa fa-youtube"></i></a> </li>	
														<li> <a target="_blank" href="#"><i class="fa fa-linkedin"></i></a> </li>	
														<li> <a target="_blank" href="#"><i class="fa fa-twitter"></i></a> </li>	
													</ul>				
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-4 ova-col">
											<div class="ova_speaker_list ">
												<img src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/speaker5-min-2.jpg" alt="Bebe Rexha">
												<div class="content">
													<div class="wrap_info ova-trans">
														<h3 class="title">
															<a href="https://ovatheme.com/em4u/speaker/bebe-rexha/">Bebe Rexha</a>
														</h3>
														<div class="job">WordPress Dev</div>
													</div>
													<ul class="social">
														<li> <a target="_blank" href="#"><i class="fa fa-facebook"></i></a> </li>	
														<li> <a target="_blank" href="#"><i class="fa fa-youtube"></i></a> </li>	
														<li> <a target="_blank" href="#"><i class="fa fa-linkedin"></i></a> </li>	
														<li> <a target="_blank" href="#"><i class="fa fa-twitter"></i></a> </li>	
													</ul>					
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-4 ova-col">
											<div class="ova_speaker_list ">
												<img src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/speaker7-min.jpg" alt="Mrs Donna">
												<div class="content">
													<div class="wrap_info ova-trans">
														<h3 class="title">
															<a href="https://ovatheme.com/em4u/speaker/mrs-donna/">Mrs Donna</a>
														</h3>
														<div class="job">Copywriting</div>
													</div>
													<ul class="social">
														<li> <a target="_blank" href="#"><i class="fa fa-facebook"></i></a> </li>	
														<li> <a target="_blank" href="#"><i class="fa fa-youtube"></i></a> </li>	
														<li> <a target="_blank" href="#"><i class="fa fa-linkedin"></i></a> </li>	
														<li> <a target="_blank" href="#"><i class="fa fa-twitter"></i></a> </li>	
													</ul>								
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-4 ova-col">
											<div class="ova_speaker_list ">
												<img src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/speaker3-min.jpg" alt="Adam Athlee">
												<div class="content">
													<div class="wrap_info ova-trans">
														<h3 class="title">
															<a href="https://ovatheme.com/em4u/speaker/adam-athlee/">Adam Athlee</a>
														</h3>
														<div class="job">photographer</div>
													</div>
													<ul class="social">
														<li> <a target="_blank" href="#"><i class="fa fa-facebook"></i></a> </li>	
														<li> <a target="_blank" href="#"><i class="fa fa-youtube"></i></a> </li>	
														<li> <a target="_blank" href="#"><i class="fa fa-linkedin"></i></a> </li>	
														<li> <a target="_blank" href="#"><i class="fa fa-twitter"></i></a> </li>	
													</ul>							
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-4 ova-col">
											<div class="ova_speaker_list ">
												<img src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/speaker5-min-2.jpg" alt="Bella Lind">
												<div class="content">
													<div class="wrap_info ova-trans">
														<h3 class="title">
															<a href="https://ovatheme.com/em4u/speaker/bella-lind/">Bella Lind</a>
														</h3>
														<div class="job">Accountant</div>
													</div>
													<ul class="social">
														<li> <a target="_blank" href="#"><i class="fa fa-facebook"></i></a> </li>	
														<li> <a target="_blank" href="#"><i class="fa fa-youtube"></i></a> </li>	
														<li> <a target="_blank" href="#"><i class="fa fa-linkedin"></i></a> </li>	
														<li> <a target="_blank" href="#"><i class="fa fa-twitter"></i></a> </li>	
													</ul>				
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="event_comments" class="tab-pane fade ">
									<div class="row">
										<div class="container-fluid">
											<div class="row">
												<div class="content_comments">
													<div id="comments" class="comments">
                                                    	<div class="commentform">
															<div id="respond" class="comment-respond">
																<h3 id="reply-title" class="comment-reply-title"></h3>
																<h4 class="block-title">Leave a reply<span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span></h4> 
																<small><a rel="nofollow" id="cancel-comment-reply-link" href="/em4u/event/marketing-2017/#respond" style="display:none;">Cancel reply</a></small>
																<p class="must-log-in">You must be <a href="https://ovatheme.com/em4u/wp-login.php?redirect_to=https%3A%2F%2Fovatheme.com%2Fem4u%2Fevent%2Fmarketing-2017%2F">logged in</a> to post a comment.</p>	
															</div><!-- #respond -->
                    									</div><!-- end commentform -->
													</div><!-- end comments -->
												</div>
											</div>
										</div>											
									</div>
								</div>
								<div id="event_contact" class="tab-pane fade ">
									<div class="row">
										<div class="wpcf7 js" id="wpcf7-f1275-p1172-o1" lang="en-US" dir="ltr">
											<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
											<form action="/em4u/event/marketing-2017/#wpcf7-f1275-p1172-o1" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
												<div style="display: none;">
													<input type="hidden" name="_wpcf7" value="1275">
													<input type="hidden" name="_wpcf7_version" value="5.7.3">
													<input type="hidden" name="_wpcf7_locale" value="en_US">
													<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1275-p1172-o1">
													<input type="hidden" name="_wpcf7_container_post" value="1172">
													<input type="hidden" name="_wpcf7_posted_data_hash" value="">
													<input type="hidden" name="_wpcf7_recaptcha_response" value="03AFY_a8WHPM0znPLi1i1LGCrjo4SIFy_pzc6JbnMXr4ZR-InOg6hF8zP9bcgncpybrAmMaQ95aRJN82pZjoA_zk52QyoTwakPwh7Ax1dVriR0RSbGsWwJ_kJtcrDPFh_YyZUNnkgIanWcI-Znuam7m_bIXCznAJF2Wl7R1r15zXWcJvsXVrJwEZKzIhOP5aTmShcJXl4Uq8DtDKWnhIV2y_Y0-p2fjkyYU28aYZuBGVuCKFKa5Tks1m1Ck8hCow6tlwL8qy7g6bcqy9jk551Ywm89PQpRoLes9KiRBpPb4Us0aNyg4VKRd6b57BaE3QgZDxMa5HD60u5F-vlX8IvOb4fECGYKU7bVdId5phHyo4tCZMEGdjvdvuz57_nI5rzJXHxu8_G_NTJZw6UEa2vf6xC2-IM5v7chtqJMUYLsE4M-fTSB2Lk0_rWq_Wcj0Ym8rIm6Ist-WCH7kflEsAvHih-JqOHPaJKky0iTj5qvimVqoD4OuAUnTR1JGoITPURjYUS27L37ZTxnJMv4Xm9JuFlkJi3tyr4kZN6op-HbJbCBh97Or3UsAm72ByR-DPyr7WlJTSeSDSXb">
												</div>
												<div class="event_contact">
													<div class="group-form">
														<p><span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Name" value="" type="text" name="your-name"></span>
														</p>
													</div>
													<div class="group-form">
														<p><span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your Email" value="" type="email" name="your-email"></span>
														</p>
													</div>
													<div class="group-form">
														<p><span class="wpcf7-form-control-wrap" data-name="your-subject"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Subject" value="" type="text" name="your-subject"></span>
														</p>
													</div>
													<div class="group-form">
														<p><span class="wpcf7-form-control-wrap" data-name="your-message"><textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Message" name="your-message"></textarea></span>
														</p>
													</div>
													<div class="group-form">
													
													</div>
													<div class="submit">
														<p><input class="wpcf7-form-control has-spinner wpcf7-submit" type="submit" value="SEND MESSAGE"><span class="wpcf7-spinner"></span>
														</p>
													</div>
												</div>
												<div class="wpcf7-response-output" aria-hidden="true"></div>
											</form>
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
								<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary" value="{{ __('Reserve') }}">
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