
    @include('../header')
    @include('../menu')
    <body class="page-template-default page page-id-5 theme-em4u woocommerce-no-js totop wpb-js-composer js-comp-ver-6.9.0 vc_responsive" >
        <div class="ovatheme_container_wide event_header_version1 bg_white">     
            <!-- Heading Version 1 -->
            <header class="ova_header ovatheme_header_v1  bg_heading fixed has_logo_scroll has_logo_mobile">
                <div class="wrap_menu_logo ova-menu"></div>
                <div class="ova-bg-heading" style="background-image: url( https://ovatheme.com/em4u/wp-content/themes/em4u/assets/img/bg_heading-compressor.jpg ); ">
                    <div class="bg_cover"></div>
                    <div class="container ova-breadcrumbs">
                        <h1 class="ova_title">{{ __('Sign In') }}</h1>
                        <div id="breadcrumbs" >
                            <div class="breadcrumbs">
                                <div class="breadcrumbs-pattern">
                                    <div class="container">
                                        <div class="row">
                                            <ul class="breadcrumb"><li><a href="https://ovatheme.com/em4u/">{{ __('Home') }}</a></li>  <li>{{ __('Sign In') }}</li></ul>
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
                                                        <!-- Show logged out message if user just logged out -->
                                                        <!-- Show errors if there are any -->
                                                        <h3 class="title">{{ __('Sign In') }}</h3>
                                                        <div class="login-form-container">
                                                            <!-- Session Status -->
                                                            <x-auth-session-status class="mb-4" :status="session('status')" />
                                                            <form name="loginform" id="loginform" method="POST" action="{{ route('login') }}">
                                                                @csrf
                                                                <!-- Email Address -->
                                                                <p class="login-username">
                                                                    <x-input-label for="email" :value="__('Email')" />
                                                                    <x-text-input type="email" name="email" id="user_login" autocomplete="username" class="input"/>
                                                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                                                </p>
                                                                <!-- Password -->
                                                                <div class="mt-4">
                                                                    <p class="login-password">
                                                                        <x-input-label for="password" :value="__('Clave')" />
                                                                        <x-text-input type="password" name="password" id="user_pass" autocomplete="current-password" class="input" value="" size="20"/>
                                                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                                                    </p>
                                                                </div>
                                                                <!-- Remember Me -->
                                                                <div class="block mt-4">
                                                                    <p class="login-remember">
                                                                        <label for="remember_me" class="inline-flex items-center">
                                                                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                                                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                                                        </label>
                                                                    </p>    
                                                                </div>
                                                                <p class="login-submit">
                                                                    @if (Route::has('password.request'))
                                                                        <p class="login-submit">
                                                                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                                                                {{ __('Forgot your password?') }}
                                                                            </a>
                                                                        </p>
                                                                    @endif
                                                                    <p class="login-submit">
                                                                        <x-primary-button type="submit" name="wp-submit" id="wp-submit" class="button button-primary" value="Log In">
                                                                            {{ __('Log in') }}
                                                                        </x-primary-button>
                                                                    </p>
                                                                </p>
                                                            </form>
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
    </body>
