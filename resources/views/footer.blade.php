<?php
    use App\Models\Category;
    use App\Models\Held;
    use App\Models\City;
    use App\Models\Place;
    use App\Models\Event;
    use App\Models\User;
?>
<footer class="footer_v1 ova-trans" style="background: url('https://ovatheme.com/em4u/wp-content/themes/em4u/assets/img/bg_footer.jpg')">
    <div class="bg_cover"></div>
    <div class="wrap_widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 category pd_0 pd_l_0">
                    <div id="ovaem_categories_widget-1" class="widget widget_ovaem_categories_widget">
                        <h4 class="widget-title">{{ __('All Categories') }}</h4>
                        <ul class='ovaem_list_categories_widget'>
                            <?php 
                            $categories = Category::all();
                            ?>
                            @foreach($categories as $category)
                                <li><a href="https://ovatheme.com/em4u/?categories=business">{{ $category->name }}</a><span class="count">{{ $category->number }}</span></li>
                            @endforeach
                        </ul>
                    </div>					
                </div>
                <div class="col-sm-4 gallery pd_0">
                    <div id="text-3" class="widget widget_text">
                        <h4 class="widget-title">{{ __('Our Gallery') }}</h4>			
                        <div class="textwidget">
                            <ul class="gallery "><br />
                                <li><a href="https://ovatheme.com/em4u/wp-content/uploads/2017/10/event_conference_3-1.jpg" data-gal="prettyPhoto[gal]" title="gallery1"><img src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/gal1.jpg" alt="gallery1" /></a></li>
                                <li><a href="https://ovatheme.com/em4u/wp-content/uploads/2017/10/event_business_1-1.jpg" data-gal="prettyPhoto[gal]" title="gallery2"><img src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/gal2.jpg" alt="gallery2" /></a></li>
                                <li><a href="https://ovatheme.com/em4u/wp-content/uploads/2017/10/event_festival_2-1.jpg" data-gal="prettyPhoto[gal]" title="gallery3"><img src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/gal3.jpg" alt="gallery3" /></a></li>
                                <li><a href="https://ovatheme.com/em4u/wp-content/uploads/2017/10/event_conference_3-1.jpg" data-gal="prettyPhoto[gal]" title="gallery4"><img src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/gal4.jpg" alt="gallery4" /></a></li>
                                <li><a href="https://ovatheme.com/em4u/wp-content/uploads/2017/10/event_festival_2-1.jpg" data-gal="prettyPhoto[gal]" title="gallery5"><img src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/gal5.jpg" alt="gallery5" /></a></li>
                                <li><a href="https://ovatheme.com/em4u/wp-content/uploads/2017/10/event_business_1-1.jpg" data-gal="prettyPhoto[gal]" title="gallery6"><img src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/gal6.jpg" alt="gallery6" /></a></li>
                            </ul>
                            <p><a class="all_gallery" href="#">{{ __('ALL GALLERY') }}</a></p>
                        </div>
                    </div>					
                </div>
                <div class="col-sm-4 tags  pd_0 pd_r_0">
                    <div id="ovaem_tags_event_widget-2" class="widget widget_ovaem_tags_event_widget">
                        <h4 class="widget-title">{{ __('Tag Event') }}</h4>
                        <div class="ovaem_event_tags_widget">
                            <a href="https://ovatheme.com/em4u/event_tags/business/" class="tag-cloud-link tag-link-31 tag-link-position-1" style="font-size: 12.581818181818pt;" aria-label="business (2 items)">{{ __('music') }}</a>
                            <a href="https://ovatheme.com/em4u/event_tags/conference/" class="tag-cloud-link tag-link-37 tag-link-position-2" style="font-size: 22pt;" aria-label="conference (6 items)">{{ __('art and theater') }}</a>
                            <a href="https://ovatheme.com/em4u/event_tags/festival/" class="tag-cloud-link tag-link-49 tag-link-position-3" style="font-size: 12.581818181818pt;" aria-label="festival (2 items)">{{ __('festivals') }}</a>
                            <a href="https://ovatheme.com/em4u/event_tags/festival-theme/" class="tag-cloud-link tag-link-50 tag-link-position-4" style="font-size: 8pt;" aria-label="festival theme (1 item)">{{ __('Sports') }}</a>
                            <a href="https://ovatheme.com/em4u/event_tags/game/" class="tag-cloud-link tag-link-53 tag-link-position-5" style="font-size: 8pt;" aria-label="game (1 item)">{{ __('cinema') }}</a>
                            <a href="https://ovatheme.com/em4u/event_tags/happy/" class="tag-cloud-link tag-link-54 tag-link-position-6" style="font-size: 8pt;" aria-label="happy (1 item)">{{ __('weekends') }}</a>
                            <a href="https://ovatheme.com/em4u/event_tags/marketing/" class="tag-cloud-link tag-link-55 tag-link-position-7" style="font-size: 12.581818181818pt;" aria-label="marketing (2 items)">{{ __("children's parties") }}</a>
                        </div>
                    </div>					
                </div>
            </div>
        </div>
    </div>
    <div class="wrap_bellow">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 social  pd_0 pd_l_0">
                    <div id="custom_html-1" class="widget_text widget widget_custom_html">
                        <div class="textwidget custom-html-widget">
                            <ul class="social_theme ">
                                <li class=" "><a href="#" target="_blank" rel="noopener"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li class=" "><a href="#" target="_blank" rel="noopener"><i class="fa-brands fa-twitter"></i></a></li>
                                <li class=" "><a href="#" target="_blank" rel="noopener"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                <li class=" "><a href="#" target="_blank" rel="noopener"><i class="fa-brands fa-tumblr"></i></a></li>
                                <li class=" "><a href="#" target="_blank" rel="noopener"><i class="fa-solid fa-basketball"></i></a></li>
                            </ul>
                        </div>
                    </div>				
                </div>
                <div class="col-sm-4 pd_0 logo_white">
                    <div id="media_image-1" class="widget widget_media_image">
                        <i class="fa-solid fa-ticket"></i>
                    </div>			
                </div>
                <div class="col-sm-4 copyright  pd_0 pd_r_0">
                    <div id="text-2" class="widget widget_text">		
                    </div>				        
                </div>
            </div>
        </div>
    </div>
</footer>	