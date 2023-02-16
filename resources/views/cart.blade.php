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
    <body class="page-template-default page page-id-507 theme-em4u woocommerce-cart woocommerce-page woocommerce-js totop wpb-js-composer js-comp-ver-6.9.0 vc_responsive">
        <div class="ovatheme_container_wide event_header_version1 bg_white">      
            <!-- Heading Version 1 -->
            <header class="ova_header ovatheme_header_v1  bg_heading fixed has_logo_scroll has_logo_mobile">
                    <div class="ova-bg-heading" style="background-image: url( https://ovatheme.com/em4u/wp-content/themes/em4u/assets/img/bg_heading-compressor.jpg ); ">
                        <div class="bg_cover"></div>
                        <div class="container ova-breadcrumbs">
                            <h1 class="ova_title">DDD</h1>
                            <div id="breadcrumbs" >
                                <div class="breadcrumbs">
                                    <div class="breadcrumbs-pattern">
                                        <div class="container">
                                            <div class="row">
                                                <ul class="breadcrumb"><li><a href="{{ url('/') }}">{{ __('Home') }}</a></li> 
                                                <li>DDD&nbsp;</li>
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
                            <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid vc_custom_1511492015373 vc_row-has-fill" style="position: relative; left: -86.4px; box-sizing: border-box; width: 953px; max-width: 953px; padding-left: 86.4px; padding-right: 86.6px;">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="woocommerce">
                                                <div class="woocommerce-notices-wrapper">
                                                    <div class="woocommerce-message" role="alert">
                                                        <a href="" tabindex="1" class="button wc-forward wp-element-button">Continue shopping</a> “Product One” has been added to your cart.	
                                                    </div>
                                                </div>
                                                <div class="ova_cart">
                                                    <form class="woocommerce-cart-form" action="https://ovatheme.com/em4u/cart/" method="post">
                                                        <div class="col-md-8">
                                                            <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="product-remove">Remove</th>
                                                                        <th class="product-name">Product</th>
                                                                        <th class="product-price">Price</th>
                                                                        <th class="product-quantity">Quantity</th>
                                                                        <th class="product-subtotal">Total</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="woocommerce-cart-form__cart-item cart_item">
                                                                        <td class="product-remove">
                                                                            <a href="https://ovatheme.com/em4u/cart/?remove_item=68a83eeb494a308fe5295da69428a507&amp;_wpnonce=f235c3eaca" class="remove" aria-label="Remove this item" data-product_id="1259" data-product_sku="">×</a>								
                                                                        </td>
                                                                        <td class="product-name" data-title="Product">
                                                                            <a href="https://ovatheme.com/em4u/product/product-one/">Product One</a>								
                                                                        </td>
                                                                        <td class="product-price" data-title="Price">
                                                                            <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">£</span>15.00</bdi></span>								
                                                                        </td>
                                                                        <td class="product-quantity" data-title="Quantity">
                                                                            <div class="quantity">
                                                                                <label class="screen-reader-text" for="quantity_63ee4e96435d0">Product One quantity</label>
                                                                                <input type="number" id="quantity_63ee4e96435d0" class="input-text qty text" name="cart[68a83eeb494a308fe5295da69428a507][qty]" value="1" title="Qty" size="4" min="0" max="77" step="1" placeholder="" inputmode="numeric" autocomplete="off">
                                                                            </div>
                                                                        </td>
                                                                        <td class="product-subtotal" data-title="Total">
                                                                            <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">£</span>15.00</bdi></span>								
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="6" class="actions">
                                                                            <button type="submit" class="button" name="update_cart" value="Update cart" disabled="" aria-disabled="true">Update cart</button>
														                    <input type="hidden" id="woocommerce-cart-nonce" name="woocommerce-cart-nonce" value="f235c3eaca">
                                                                            <input type="hidden" name="_wp_http_referer" value="/em4u/cart/">						
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="cart-collaterals">
                                                                <div class="coupon">
                                                                    <label for="coupon_code">
                                                                        Discount code<span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
                                                                    </label>
                                                                    <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code">
                                                                    <input type="submit" class="button" name="apply_coupon" value="Apply coupon">
                                                                </div>
								                                <div class="cart_totals ">
                                                                    <h2>Cart totals<span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span></h2>
                                                                    <table cellspacing="0" class="shop_table shop_table_responsive">
                                                                        <tbody>
                                                                            <tr class="cart-subtotal">
                                                                                <th>Subtotal</th>
                                                                                <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">£</span>15.00</bdi></span></td>
                                                                            </tr>
                                                                            <tr class="order-total">
                                                                                <th>Total</th>
                                                                                <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">£</span>15.00</bdi></span></strong> </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <div class="wc-proceed-to-checkout">
                                                                        <a href="https://ovatheme.com/em4u/checkout/" class="checkout-button button alt wc-forward wp-element-button">Proceed to checkout</a>
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