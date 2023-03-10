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
                            <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid vc_custom_1511492015373 vc_row-has-fill" style="position: relative; left: -86.4px; box-sizing: border-box; width: 953px; max-width: 953px; padding-left: 86.4px; padding-right: 86.6px;">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="woocommerce">
                                                <div class="woocommerce-notices-wrapper">
                                                </div>
                                                <div class="ova_cart">
                                                    <div class="col-md-8">
                                                        <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                                                            <thead>
                                                                 <tr>
                                                                    <th class="product-remove">{{ __('Remove') }}</th>
                                                                    <th class="product-name">{{ __('Event') }}</th>
                                                                    <th class="product-name">{{ __('Place') }}</th>
                                                                    <th class="product-name">{{ __('Location') }}</th>
                                                                    <th class="product-name">{{ __('Date') }}</th>
                                                                    <th class="product-price">{{ __('Price') }}</th>
                                                                    <th class="product-quantity">{{ __('Quantity') }}</th>
                                                                    <th class="product-subtotal">{{ __('Total') }}</th>
                                                                    <th class="product-subtotal">{{ __('Status') }}</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php 
                                                                $sum = 0; 
                                                                $update = null;
                                                                ?>
                                                                @if ( $tickets )
                                                                    @foreach ( $tickets as $ticket )
                                                                        <tr class="woocommerce-cart-form__cart-item cart_item">
                                                                            <form action="{{ route('cart.remove') }}" method="POST" name="reserve_event">
                                                                            @csrf
                                                                                <td class="product-remove">	
                                                                                    <input type="submit" aria-label="Remove this item" class="button" name="update_cart" value="x">
                                                                                    <input type="hidden" name="idTicket" value="{{ $ticket->id }}">
                                                                                </td>
                                                                            </form>
                                                                            <td class="product-name" data-title="Product">
                                                                                {{ $ticket->eventName }} 							
                                                                            </td>
                                                                            <td class="product-name" data-title="Product">
                                                                                {{ $ticket->placeName }}, {{ $ticket->cityName }}							
                                                                            </td>
                                                                            <td>
                                                                                {{ $ticket->locationName }}
                                                                            </td>
                                                                            <?php
                                                                            list($year, $month, $day) = explode("-", date($ticket->date));
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
                                                                            list($hour, $min, $sec) = explode(":", date($ticket->time));
                                                                            if ( $hour > 12){
                                                                                $period = 'pm';
                                                                            } else {
                                                                                $period = 'am';
                                                                            }
                                                                            ?>
                                                                            <td class="product-name" data-title="Product">
                                                                            {{ $month }} {{ $day }}, {{ $year }} {{ $hour }}:{{ $min }} {{ $period }}				
                                                                            </td>
                                                                            <td class="product-price" data-title="Price">
                                                                                <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>{{ $ticket->price }}</bdi></span>								
                                                                            </td>
                                                                            <td class="product-quantity" data-title="Quantity">
                                                                                <div class="quantity">
                                                                                    <label class="screen-reader-text" for="quantity_63ee4e96435d0">{{ __('Product One quantity') }}</label>
                                                                                    <input type="number" id="quantity" class="input-text qty text" name="quantity" value="{{ $ticket->quantity }}" title="Qty" size="4" min="1" max="77" step="1" placeholder="" inputmode="numeric" autocomplete="off">
                                                                                    <?php $update = $update.' '.$ticket->id.' '.$ticket->quantity; ?>
                                                                                </div>
                                                                            </td>
                                                                            <td class="product-subtotal" data-title="Total">
                                                                                <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>{{ $ticket->total }}</bdi></span>								
                                                                            </td>
                                                                            <td class="product-name" data-title="Product">
                                                                                @if ( $ticket->status == 'approved' )
                                                                                    {{ __('approved') }} 
                                                                                @elseif ( $ticket->status == 'pending' )
                                                                                    {{ __('pending') }} 
                                                                                @elseif ( $ticket->status == 'denied' )
                                                                                    {{ __('denied') }} 
                                                                                @endif							
                                                                            </td>
                                                                            <?php if ( $ticket->status == 'approved' ) {$sum = $sum + $ticket->total;} ?>
                                                                        </tr>
                                                                    @endforeach
                                                                @endif
                                                                <tr>
                                                                    <form action="{{ route('cart.updateCart') }}" method="POST" name="reserve_event">
                                                                    @csrf
                                                                        <td colspan="6" class="actions">
                                                                            <input type="submit" class="button" name="update_cart" value="{{ __('Update cart') }}">	
                                                                            <input type="hidden" name="update" value="{{ $update }}">		
                                                                        </td>
                                                                    </form> 
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="cart-collaterals">
								                            <div class="cart_totals">
                                                                <h2>{{ __('Cart totals') }}<span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span></h2>
                                                                <table cellspacing="0" class="shop_table shop_table_responsive">
                                                                    <tbody>
                                                                        <tr class="cart-subtotal">
                                                                            <th>{{ __('Subtotal') }}</th>
                                                                            <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>{{ $sum }}</bdi></span></td>
                                                                        </tr>
                                                                        <tr class="order-total">
                                                                            <th>{{ __('Total') }}</th>
                                                                            <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>{{ $sum }}</bdi></span></strong> </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <form action="{{ route('pay.index') }}" method="GET" name="reserve_event">
                                                                    <div class="wc-proceed-to-checkout">
                                                                        <input type="submit" class="checkout-button button alt wc-forward wp-element-button" value="{{ __('Proceed to pay') }}">
                                                                    </div>
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
                            <div class="vc_row-full-width vc_clearfix"></div>
                        </div>
                    </div>
                </div>
            </section>			
		</div>
        @include('footer')		
	</body>
</html>