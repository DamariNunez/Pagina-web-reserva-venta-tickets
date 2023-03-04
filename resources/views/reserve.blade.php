<?php
    use App\Models\Category;
    use App\Models\Held;
    use App\Models\City;
    use App\Models\Place;
    use App\Models\Event;
    use App\Models\User;
    use App\Models\Language;
    use App\Models\Image;
    use App\Models\Location;
?>
<!DOCTYPE html>
<html lang="en-US" >
    @include('header')
    @include('menu')
    <body class="product-template-default single single-product postid-1259 theme-em4u woocommerce woocommerce-page woocommerce-js totop wpb-js-composer js-comp-ver-6.9.0 vc_responsive">
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
		        <section class="page-section ova-woo-shop">
                    <div class="container">
                        <div class="row">
                            <div class=" col-md-8">
                                <div class="woocommerce-notices-wrapper"></div>
                                @if ( $events[0]!= null )
                                    <div id="product-1259" class="product type-product post-1259 status-publish first instock product_cat-boss product_tag-boss-2018 product_tag-morder-boss has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                        <div class="woo_top">
                                            <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="opacity: 1; transition: opacity 0.25s ease-in-out 0s;">
                                                <figure class="woocommerce-product-gallery__wrapper">
                                                    <?php $images = null; ?>
                                                    @if ( $events[0] != null )
                                                        <?php 
                                                        $images = Image::where('idEvent', '=', $events[0]->id)->get();
                                                        ?>
                                                    @endif
                                                    @if ( $images )
                                                        @foreach ( $images as $img )
                                                            <div data-thumb="{{asset($img->img)}}" class="woocommerce-product-gallery__image">
                                                                <a data-gal="product[gal]" href="{{asset($img->img)}}">
                                                                    <img alt="{{ $events[0]->eventName }}" src="{{asset($img->img)}}" sizes="(max-width: 767px) 100vw, 600px">    
                                                                </a>
                                                            </div>
                                                        @endforeach
                                                    @endif	
                                                </figure>
                                            </div>
                                            <div class="summary entry-summary">
                                                <h2 class="product_title entry-title">{{ $events[0]->eventName }}</h2>
                                                <p class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>{{ $events[0]->value }}</bdi></span></p>
                                                <form class="cart" action="{{ route('cart.addToCart') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <?php
                                                    if ( count($events) > 0 ){
                                                        ?>
                                                        @foreach ( $events as $event )
                                                            <div class="woocommerce-product-details__short-description">
                                                                <p class="stock in-stock"><i class="fa-solid fa-location-dot"></i>  {{ $event->placeName }}, {{ $event->cityName }}</p>
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
                                                                <p>{{ $month }} {{ $day }}, {{ $year }}</p>
                                                                <input type="radio" name="info" value="{{ $event->date }}*{{ $event->time }}*{{ $event->placeName }}*{{ $event->cityName }}" required> {{ $hour }}:{{ $min }} {{ $period }}
                                                            </div>
                                                            <?php
                                                            $idPlace = Place::where('name', $event->placeName)->pluck('id');
                                                            $locations = Location::where('idPlace', $idPlace[0])->get();
                                                            ?>
                                                            @if ( sizeof($locations) != 0 )
                                                                <figure class="woocommerce-product-gallery__wrapper">
                                                                    <div data-thumb="{{asset($img->img)}}" class="woocommerce-product-gallery__image">
                                                                        <a data-gal="product[gal]" href="{{asset($img->img)}}">
                                                                            <img alt="{{ $events[0]->eventName }}" src="{{asset($img->img)}}" sizes="(max-width: 767px) 100vw, 600px">    
                                                                        </a>
                                                                    </div>
                                                                </figure>
                                                                <br>
                                                                @foreach ( $locations as $location )
                                                                    <p><input type="radio" name="location" value="" required> {{ $location->name }}</p>
                                                                @endforeach
                                                            @else
                                                                <div class="woocommerce-product-details__short-description">
                                                                    <p>{{ __('Seats are not available for this event') }}</p>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                        <?php
                                                    }
                                                    ?>
                                                    <br>
                                                    <div class="quantity">
                                                        <label class="screen-reader-text" for="quantity">{{ __('Quantity') }}</label>
                                                        <input type="number" id="quantity" class="input-text qty text" name="quantity" value="1" title="Qty" size="4" min="1" max="77" step="1" placeholder="" inputmode="numeric" autocomplete="off">
                                                    </div>
                                                    <button type="submit" name="add-to-cart" value="1259" class="single_add_to_cart_button button alt wp-element-button">{{ __('Reserve') }}</button>
                                                    <input type="hidden" name="name_event" value="{{ $events[0]->eventName }}">
                                                </form>
                                                <div class="product_meta">
                                                    <span class="posted_in">{{ __('Category') }}: <a href="" rel="tag">{{ $event->category }}</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="woocommerce-tabs wc-tabs-wrapper">
                                            <ul class="tabs wc-tabs" role="tablist">
                                                <li class="description_tab active" id="tab-title-description" role="tab" aria-controls="tab-description">
                                                    <a href="#tab-description">{{ __('Description') }}</a>
                                                </li>
                                            </ul>
                                            <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description" style="">
                                                <h2>{{ __('Description') }}</h2>
                                                <p>{{ $events[0]->description }}</p>                                        
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-4 right_sidebar ovaem_general_sidebar">
                                <aside id="woo-sidebar" class="sidebar woo-sidebar">
                                    <div id="woocommerce_product_search-1" class="widget  woocommerce widget_product_search">
                                        <form action="{{ route('reserve.filter') }}" method="get" class="woocommerce-product-search" action="https://ovatheme.com/em4u/">
                                            <label class="screen-reader-text" for="woocommerce-product-search-field-0">{{ __('Search for') }}:</label>
                                            <input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="{{ __('Search events…') }}" value="" name="s">
                                            <button type="submit" value="Search" class="wp-element-button">{{ __('Search') }}</button>
                                        </form>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </section>			
		</div>
		@include('footer')		
    </body>		
</html>