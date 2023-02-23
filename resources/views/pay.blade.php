<?php
    use App\Models\Category;
    use App\Models\Held;
    use App\Models\City;
    use App\Models\Place;
    use App\Models\Event;
    use App\Models\User;
    use App\Models\Language;
    use App\Models\Ticket;
?>
<!DOCTYPE html>
<html lang="en-US" >
    @include('header')
    @include('menu')
    <body class="page-template-default page page-id-507 theme-em4u woocommerce-cart woocommerce-page woocommerce-js totop wpb-js-composer js-comp-ver-6.9.0 vc_responsive">
        <div class="ovatheme_container_wide event_header_version1 bg_white">      
            <!-- Heading Version 1 -->
            <header class="ova_header ovatheme_header_v1  bg_heading fixed has_logo_scroll has_logo_mobile">
                <div class="ova-bg-heading" style="background-image: url( https://ovatheme.com/em4u/wp-content/themes/em4u/assets/img/bg_heading-compressor.jpg ); ">
                    <div class="bg_cover"></div>
                    <div class="container ova-breadcrumbs">
                        <h1 class="ova_title">{{ __('Cart') }}</h1>
                        <div id="breadcrumbs" >
                            <div class="breadcrumbs">
                                <div class="breadcrumbs-pattern">
                                    <div class="container">
                                        <div class="row">
                                            <ul class="breadcrumb"><li><a href="{{ url('/') }}">{{ __('Events') }}</a></li> 
                                            <li>{{ __('Cart') }}&nbsp;</li>
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
                            <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid vc_custom_1511492054504 vc_row-has-fill" style="position: relative; left: -6.4px; box-sizing: border-box; width: 793px; max-width: 793px; padding-left: 6.4px; padding-right: 6.6px;">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="woocommerce">
                                                <form name="checkout" method="post" class="checkout woocommerce-checkout" action="https://ovatheme.com/em4u/checkout/" enctype="multipart/form-data" novalidate="novalidate">
                                                    <h3 id="order_review_heading">{{ __('Your order') }}</h3>
                                                    <div id="order_review" class="woocommerce-checkout-review-order">
                                                        <table class="shop_table woocommerce-checkout-review-order-table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="product-name">{{ __('Events') }}</th>
                                                                    <th class="product-total">{{ __('Subtotal') }}</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                
                                                                <tr class="cart_item">
                                                                    <td class="product-name">Product One&nbsp;<strong class="product-quantity">×&nbsp;1</strong></td>
                                                                    <td class="product-total"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">£</span>15.00</bdi></span></td>
                                                                </tr>
                                                            </tbody>
	                                                        <tfoot>
                                                                <tr class="cart-subtotal">
                                                                    <th>{{ __('Subtotal') }}</th>
                                                                    <td><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">£</span>15.00</bdi></span></td>
                                                                </tr>
                                                                <tr class="order-total">
                                                                    <th>{{ __('Total') }}</th>
                                                                    <td><strong><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">£</span>15.00</bdi></span></strong> </td>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                        <div id="payment" class="woocommerce-checkout-payment">
                                                            <ul class="wc_payment_methods payment_methods methods">
                                                                <li class="wc_payment_method payment_method_bacs">
                                                                    <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked" data-order_button_text="">
                                                                    <label for="payment_method_bacs">{{ __('Direct bank transfer') }}</label>
                                                                    <div class="payment_box payment_method_bacs">
                                                                        <p>{{ __('Check your email, we have sent the required information to make a direct transfer') }}</p>
                                                                    </div>
                                                                </li>
		                                                    </ul>
                                                            <div class="form-row place-order">
                                                                <div class="woocommerce-terms-and-conditions-wrapper">
                                                                    <div class="woocommerce-privacy-policy-text"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </form>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width vc_clearfix"></div>
                        </div>
                    </div>
                </div>
            </section>				
		</div>
		@include('footer')		
    </body>
</html>