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
		        <section class="page-section ova-woo-shop">
                    <div class="container">
                        <div class="row">
                            <div class=" col-md-8">
                                <div class="woocommerce-notices-wrapper"></div>
                                <div id="product-1259" class="product type-product post-1259 status-publish first instock product_cat-boss product_tag-boss-2018 product_tag-morder-boss has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                    @if ( $events )
                                        <div class="woo_top">
                                            <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="opacity: 1; transition: opacity 0.25s ease-in-out 0s;">
                                                <figure class="woocommerce-product-gallery__wrapper">
                                                    <div data-thumb="https://ovatheme.com/em4u/wp-content/uploads/2017/10/product2-100x100.jpeg" class="woocommerce-product-gallery__image">
                                                        <a data-gal="product[gal]" href="https://ovatheme.com/em4u/wp-content/uploads/2017/10/product2.jpeg">
                                                            <img width="513" height="600" src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/product2-513x600.jpeg" class="attachment-shop_single size-shop_single" alt="" decoding="async" loading="lazy" title="product2" data-caption="" data-src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/product2.jpeg" data-large_image="https://ovatheme.com/em4u/wp-content/uploads/2017/10/product2.jpeg" data-large_image_width="513" data-large_image_height="655">
                                                        </a>
                                                    </div>
                                                    <div data-thumb="https://ovatheme.com/em4u/wp-content/uploads/2017/10/product6-100x100.jpeg" class="woocommerce-product-gallery__image">
                                                        <a data-gal="product[gal]" href="https://ovatheme.com/em4u/wp-content/uploads/2017/10/product6.jpeg">
                                                            <img width="513" height="600" src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/product6-513x600.jpeg" class="attachment-shop_single size-shop_single" alt="" decoding="async" loading="lazy" title="product6" data-caption="" data-src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/product6.jpeg" data-large_image="https://ovatheme.com/em4u/wp-content/uploads/2017/10/product6.jpeg" data-large_image_width="513" data-large_image_height="655">
                                                        </a>
                                                    </div>
                                                    <div data-thumb="https://ovatheme.com/em4u/wp-content/uploads/2017/10/product5-100x100.jpeg" class="woocommerce-product-gallery__image">
                                                        <a data-gal="product[gal]" href="https://ovatheme.com/em4u/wp-content/uploads/2017/10/product5.jpeg">
                                                            <img width="513" height="600" src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/product5-513x600.jpeg" class="attachment-shop_single size-shop_single" alt="" decoding="async" loading="lazy" title="product5" data-caption="" data-src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/product5.jpeg" data-large_image="https://ovatheme.com/em4u/wp-content/uploads/2017/10/product5.jpeg" data-large_image_width="513" data-large_image_height="655">
                                                        </a>
                                                    </div>
                                                    <div data-thumb="https://ovatheme.com/em4u/wp-content/uploads/2017/10/product4-100x100.jpeg" class="woocommerce-product-gallery__image">
                                                        <a data-gal="product[gal]" href="https://ovatheme.com/em4u/wp-content/uploads/2017/10/product4.jpeg">
                                                            <img width="513" height="600" src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/product4-513x600.jpeg" class="attachment-shop_single size-shop_single" alt="" decoding="async" loading="lazy" title="product4" data-caption="" data-src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/product4.jpeg" data-large_image="https://ovatheme.com/em4u/wp-content/uploads/2017/10/product4.jpeg" data-large_image_width="513" data-large_image_height="655">
                                                        </a>
                                                    </div>
                                                    <div data-thumb="https://ovatheme.com/em4u/wp-content/uploads/2017/10/product2-100x100.jpeg" class="woocommerce-product-gallery__image">
                                                        <a data-gal="product[gal]" href="https://ovatheme.com/em4u/wp-content/uploads/2017/10/product2.jpeg">
                                                            <img width="513" height="600" src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/product2-513x600.jpeg" class="attachment-shop_single size-shop_single" alt="" decoding="async" loading="lazy" title="product2" data-caption="" data-src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/product2.jpeg" data-large_image="https://ovatheme.com/em4u/wp-content/uploads/2017/10/product2.jpeg" data-large_image_width="513" data-large_image_height="655">
                                                        </a>
                                                    </div>	
                                                </figure>
                                            </div>
                                            <div class="summary entry-summary">
                                                <h2 class="product_title entry-title">{{ $name_event }}</h2>
                                                <p class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>{{ $events[0]->value }}</bdi></span></p>
                                                <div class="woocommerce-product-details__short-description">
                                                    <p>{{ $events[0]->description }}</p>
                                                </div>
                                                <p class="stock in-stock">{{ __('Purchase your tickets') }}</p>
                                                <form class="cart" action="https://ovatheme.com/em4u/product/product-one/" method="post" enctype="multipart/form-data">
                                                    <div class="quantity">
                                                        <label class="screen-reader-text" for="quantity_63e40363f3ff3">{{ __('Quantity') }}</label>
                                                        <input type="number" id="quantity_63e40363f3ff3" class="input-text qty text" name="quantity" value="1" title="Qty" size="4" min="1" max="77" step="1" placeholder="" inputmode="numeric" autocomplete="off">
                                                    </div>
                                                    <button type="submit" name="add-to-cart" value="1259" class="single_add_to_cart_button button alt wp-element-button">{{ __('Add to cart') }}</button>
                                                </form>
                                                <div class="product_meta">
                                                    <span class="posted_in">{{ __('Category') }}: <a href="https://ovatheme.com/em4u/product-category/boss/" rel="tag">{{ $events[0]->category }}</a></span>
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
                                    @endif
                                </div>
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
                                    <div id="woocommerce_product_categories-1" class="widget  woocommerce widget_product_categories">
                                        <h3 class="title">Product categories<span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span></h3>
                                        <ul class="product-categories">
                                            <li class="cat-item cat-item-75"><a href="https://ovatheme.com/em4u/product-category/adidas-skateboarding/">Adidas Skateboarding</a></li>
                                            <li class="cat-item cat-item-76"><a href="https://ovatheme.com/em4u/product-category/aquascutum/">Aquascutum</a></li>
                                            <li class="cat-item cat-item-77"><a href="https://ovatheme.com/em4u/product-category/armani-jeans/">Armani Jeans</a></li>
                                            <li class="cat-item cat-item-78"><a href="https://ovatheme.com/em4u/product-category/bershka/">Bershka</a></li>
                                            <li class="cat-item cat-item-79 current-cat"><a href="https://ovatheme.com/em4u/product-category/boss/">Boss</a></li>
                                            <li class="cat-item cat-item-80"><a href="https://ovatheme.com/em4u/product-category/event/">Event</a></li>
                                            <li class="cat-item cat-item-86"><a href="https://ovatheme.com/em4u/product-category/uncategorized/">Uncategorized</a></li>
                                        </ul>
                                    </div>
                                    <div id="woocommerce_product_tag_cloud-1" class="widget  woocommerce widget_product_tag_cloud">
                                        <h3 class="title">Product tags<span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span></h3>
                                        <div class="tagcloud">
                                            <a href="https://ovatheme.com/em4u/product-tag/adidas-fashion/" class="tag-cloud-link tag-link-26 tag-link-position-1" style="font-size: 8pt;" aria-label="adidas fashion (1 product)">adidas fashion</a>
                                            <a href="https://ovatheme.com/em4u/product-tag/boss-2018/" class="tag-cloud-link tag-link-29 tag-link-position-2" style="font-size: 16.75pt;" aria-label="Boss 2018 (3 products)">Boss 2018</a>
                                            <a href="https://ovatheme.com/em4u/product-tag/event/" class="tag-cloud-link tag-link-43 tag-link-position-3" style="font-size: 8pt;" aria-label="event (1 product)">event</a>
                                            <a href="https://ovatheme.com/em4u/product-tag/fashion-2018/" class="tag-cloud-link tag-link-47 tag-link-position-4" style="font-size: 22pt;" aria-label="fashion 2018 (5 products)">fashion 2018</a>
                                            <a href="https://ovatheme.com/em4u/product-tag/morder-boss/" class="tag-cloud-link tag-link-57 tag-link-position-5" style="font-size: 13.25pt;" aria-label="Morder Boss (2 products)">Morder Boss</a>
                                            <a href="https://ovatheme.com/em4u/product-tag/new-hand/" class="tag-cloud-link tag-link-58 tag-link-position-6" style="font-size: 8pt;" aria-label="new hand (1 product)">new hand</a>
                                            <a href="https://ovatheme.com/em4u/product-tag/new-phone-2018/" class="tag-cloud-link tag-link-59 tag-link-position-7" style="font-size: 8pt;" aria-label="new phone 2018 (1 product)">new phone 2018</a>
                                            <a href="https://ovatheme.com/em4u/product-tag/nice-bershka/" class="tag-cloud-link tag-link-60 tag-link-position-8" style="font-size: 16.75pt;" aria-label="nice bershka (3 products)">nice bershka</a>
                                        </div>
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