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
                        <h1 class="ova_title">{{ __('Profile') }}</h1>
                        <div id="breadcrumbs" >
                            <div class="breadcrumbs">
                                <div class="breadcrumbs-pattern">
                                    <div class="container">
                                        <div class="row">
                                            <ul class="breadcrumb"><li><a href="{{ url('/') }}">{{ __('Home') }}</a></li> 
                                            <li>{{ __('Profile') }}&nbsp;</li>
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
			            <div class=" ovatheme_nosidebar" >
                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1511255322215">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element " >
                                                <div class="wpb_wrapper">
                                                    <div class="ova-login-form-container">
                                                        <div class="login-form-container">
                                                            <!-- Session Status -->
                                                            <x-auth-session-status class="mb-4" :status="session('status')" />
                                                            <div class="py-12">
                                                                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                                                                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                                                                        <div class="max-w-xl">
                                                                            @include('profile.partials.update-profile-information-form')
                                                                        </div>
                                                                    </div>

                                                                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                                                                        <div class="max-w-xl">
                                                                            @include('profile.partials.update-password-form')
                                                                        </div>
                                                                    </div>

                                                                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                                                                        <div class="max-w-xl">
                                                                            @include('profile.partials.delete-user-form')
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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