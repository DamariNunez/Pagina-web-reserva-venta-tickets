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
    <body class="error404 theme-em4u woocommerce-no-js totop wpb-js-composer js-comp-ver-6.9.0 vc_responsive" >   
        <div class="ovatheme_container_wide event_header_version1 bg_white">   
            <!-- Heading Version 1 -->
            <header class="ova_header ovatheme_header_v1  bg_heading fixed has_logo_scroll has_logo_mobile">
                <div class="ova-bg-heading" style="background-image: url( https://ovatheme.com/em4u/wp-content/themes/em4u/assets/img/bg_heading-compressor.jpg ); ">
                    <div class="bg_cover"></div>
                    <div class="container ova-breadcrumbs">
                        <h1 class="ova_title">{{ __('About Us') }}</h1>
                        <div id="breadcrumbs" >
                            <div class="breadcrumbs">
                                <div class="breadcrumbs-pattern">
                                    <div class="container">
                                        <div class="row">
                                            <ul class="breadcrumb"><li><a href="{{ url('/') }}">{{ __('Home') }}</a></li> 
                                            <li>{{ __('About Us') }}&nbsp;</li>
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
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <p>
                                                        Somos una empresa con objetivos claros para brindar el mejor servicio a nuestros clientes que desean ahorrarse largas filas para
                                                        adquirir entradas a sus eventos favoritos.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row wpb_row vc_row-fluid vc_row-o-content-middle vc_row-flex">
                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_left">
                                                <figure class="wpb_wrapper vc_figure">
			                                        <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                        <img width="592" height="444" src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/about.jpg" class="vc_single_image-img attachment-full" alt="" decoding="async" loading="lazy" title="about" srcset="https://ovatheme.com/em4u/wp-content/uploads/2017/10/about.jpg 592w, https://ovatheme.com/em4u/wp-content/uploads/2017/10/about-300x225.jpg 300w" sizes="(max-width: 592px) 100vw, 592px">
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <p>
                                                        Me inclino por este tema de TFM, porque considero que para todo concierto o evento que se necesite adquirir pases es fundamental 
                                                        que exista una plataforma web, ya que, tomando en cuenta el ritmo de vida actual, la sociedad no tiene el tiempo suficiente para 
                                                        ir personalmente a un lugar para comprarlos, por tal motivo, sería de mi total agrado aportar con el desarrollo de un software web 
                                                        en donde los usuarios podrán ingresar para reservar y comprar entradas, dicho sistema deberá ser desarrollado en el framework Laravel, 
                                                        será utilizada esta herramienta, porque además se haber sido el instrumento de estudio del curso, se considera que tiene una sintaxis 
                                                        fácil de comprender y permite centrarse en escribir código.   
                                                    </p> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1508147642626">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner vc_custom_1508147955538">
                                        <div class="wpb_wrapper">
                                            <div class="ova_heading ">
                                                <h3 class="title">{{ __('Our Services') }}</h3>
                                                <div class="sub_title">{{ __('What you will learn and the benefits ?') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br><br><br><br><br><br>
                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="ovaem_skill bg_white no_border">
                                                <div class="top">
                                                <i class="fa-solid fa-users"></i>
                                                    <div class="number">9</div>
                                                </div>
                                                <div class="name">{{ __('PARTICIPANT') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="ovaem_skill bg_white">
                                                <div class="top">
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                    <?php
                                                    $events = Event::all()->count();
                                                    ?>
                                                    <div class="number">{{ $events }}</div>
                                                </div>
                                                <div class="name">{{ __('Total Events') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="ovaem_skill bg_white">
                                                <div class="top">
                                                    <i class="fa-solid fa-earth-americas"></i>
                                                    <?php
                                                    $places = Place::all()->count();
                                                    ?>
                                                    <div class="number">{{ $places }}</div>
                                                </div>
                                                <div class="name">{{ __('venues') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="ovaem_skill bg_white">
                                                <div class="top">
                                                    <i class="fa-sharp fa-solid fa-user-tie"></i>
                                                    <div class="number">19</div>
                                                </div>
                                                <div class="name">{{ __('Sponsors') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1508148318848">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <p>
                                                        Puedes encontrar todos tus eventos favoritos en un solo lugar. 
                                                        Gestionamos las localidades para que sean accesibles y espaciosas. 
                                                        Paga con transferencia bancaria desde tu celular y evita ingresar tarjetas de crédito. 
                                                        Gestionamos eventos par que disfrutes con la mayor comodidad. 
                                                        Registrarse de forma gratuita para conocer los eventos de tu ciudad. 
                                                        Plataforma intuitiva con los usuarios, además, reservar las entradas es un proceso instintivo.
                                                    </p>
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