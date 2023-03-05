?php
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
			<section class="ova-page-section">
			    <div class="container">
			        <div class="row">
			            <div class=" ovatheme_nosidebar">
                            <div class="vc_row wpb_row vc_row-fluid ova_zindex ova_map_top vc_custom_1508929173369">
                                <script>var google_map = true;</script>
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner vc_custom_1508929146629">
                                        <div class="wpb_wrapper">
                                            <div class="event-google-map-wrap ">
                                                <div class="event-google-map" data-zoom="15" data-icon="https://ovatheme.com/em4u/wp-content/uploads/2017/09/favicon-advent-wp-1.png" data-title="Hotel 1 | Hotel 2" data-location="51.503454,-0.119562 | 51.499633,-0.124755" data-idmap="gmap-canvas">
                                                    <div id="gmap-canvas" class="iframemap" style="position: relative; overflow: hidden;">
                                                        <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.8735968094047!2d-78.48738097257943!3d-0.16233533503666492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d59aa32554784b%3A0x3418a102a7d45f10!2sPlaza%20de%20Toros!5e0!3m2!1ses-419!2sec!4v1675884950126!5m2!1ses-419!2sec" width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1508927363413">
                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="contact_info ">
                                            <div class="icon">
                                                <i class="fa-solid fa-location-pin"></i>
                                            </div>
                                            <div class="title">{{ __('Visit us') }}</div>
                                            <div class="desc">
                                                <span> Ticketspress </span> 
                                                <span> Parroquia Jipijapa, al centro-norte de la urbe, Quito </span>
                                                <span> Frente a la Plaza de Toros </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="contact_info ">
                                            <div class="icon">
                                                <i class="fa-solid fa-phone"></i>
                                            </div>
                                            <div class="title">{{ __('Phone') }}</div>
                                            <div class="desc">
                                                <span>{{ __('Phone') }}: +593 98 873 4695 </span> 
                                                <span> Fax: +400 456 123 789 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="contact_info ">
                                            <div class="icon">
                                                <i class="fa-solid fa-envelope"></i>
                                            </div>
                                            <div class="title">{{ __('Work With Us') }}</div>
                                            <div class="desc">
                                                <span> ticketspres0@gmail.com </span> 
                                                <span> inforticketspress@gmail.com </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1508929536052">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner vc_custom_1508929549912">
                                    <div class="wpb_wrapper">
                                        <div class="vc_empty_space  vc_custom_1508929585761" style="height: 1px">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-2 vc_col-md-8">
                                <div class="vc_column-inner vc_custom_1508930766421">
                                    <div class="wpb_wrapper">
                                        <div class="ova_heading ">
                                            <h3 class="title">{{ __('Contact Us') }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-2 vc_col-md-8">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wpcf7 js" id="wpcf7-f1275-p1273-o1" lang="en-US" dir="ltr">
                                            <div class="screen-reader-response">
                                                <p role="status" aria-live="polite" aria-atomic="true"></p> 
                                                <ul></ul>
                                            </div>
                                            <form action="/em4u/contact-v1/#wpcf7-f1275-p1273-o1" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
                                                <div style="display: none;">
                                                    <input type="hidden" name="_wpcf7" value="1275">
                                                    <input type="hidden" name="_wpcf7_version" value="5.7.4">
                                                    <input type="hidden" name="_wpcf7_locale" value="en_US">
                                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1275-p1273-o1">
                                                    <input type="hidden" name="_wpcf7_container_post" value="1273">
                                                    <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                                                    <input type="hidden" name="_wpcf7_recaptcha_response" value="03AFY_a8UBpCeU_eeaUjE0JHd-aAU0vdLXbBggkRzdODpde71f_hOqLubc_7k_YnJ7_T5-QLi6F-QVrTkNFXMF5ON4F4u5u3COnrQCRqpreUDgthAPNDMJjs7SRmPWeI1AyKTsKhWhgFCsriheoZqe_EERadckMd7Pj4GHlcn5mRirZX9weNfLCMcDTqdsT_jYZdJiHlAR6OeOKNjkSh8VkdSjS6LkbLlSPgvwJi5e5Ne2WqHaxQpl2y6fRZAxWdU-LrzjmZ4y8bX7R94X22ak1IzQDe4RPGXPTOiMToZ1UDxAfHbaS9GDTA59ErOWSnbiR6jIgFEWpAGunU-6Pjp7eWvMJ_knG5P47GwmRSw6S3zuMpTCA54c7kCtU7NYvjX9elGyiBQCJw6ZiZsGTM52fU8RHXv3iVe3hYMWum-NY7IrKPE1knfmMTwwjrcC28CN8UtOtjjQHOrvYzML9Vc-rGVxLlQSLC2twiaqi7DoImhJA4TUdfwjavS67clKxU4mByN3aUkZiQrj97DV8mHO1u4AdPG0uqnyBflauR7EtRXT-fFH6HRnf_M">
                                                </div>
                                                <div class="event_contact">
                                                    <div class="group-form">
                                                        <p><span class="wpcf7-form-control-wrap" data-name="your-name">
                                                            <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="{{ __('Your Name') }}" value="" type="text" name="your-name"></span>
                                                        </p>
                                                    </div>
                                                    <div class="group-form">
                                                        <p><span class="wpcf7-form-control-wrap" data-name="your-email">
                                                            <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="{{ __('Your Email') }}" value="" type="email" name="your-email"></span>
                                                        </p>
                                                    </div>
                                                    <div class="group-form">
                                                        <p><span class="wpcf7-form-control-wrap" data-name="your-subject">
                                                            <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="{{ __('Your Subject') }}" value="" type="text" name="your-subject"></span>
                                                        </p>
                                                    </div>
                                                    <div class="group-form">
                                                        <p><span class="wpcf7-form-control-wrap" data-name="your-message">
                                                            <textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="{{ __('Your Message') }}" name="your-message"></textarea></span>
                                                        </p>
                                                    </div>
                                                    <div class="group-form">
                                                    
                                                    </div>
                                                    <div class="submit">
                                                        <p><input class="wpcf7-form-control has-spinner wpcf7-submit" type="submit" value="{{ __('SEND MESSAGE') }}"><span class="wpcf7-spinner"></span>
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
                </div>
            </div>
            </section>			
		</div>
        @include('footer')		
    </body>
</html>
		