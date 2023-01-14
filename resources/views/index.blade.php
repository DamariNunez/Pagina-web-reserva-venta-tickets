<?php
    use App\Models\Category;
    use App\Models\Held;
    use App\Models\City;
    use App\Models\Place;
    use App\Models\Event;
    use App\Models\User;
?>
<!DOCTYPE html>
<html lang="en-US" >

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="profile" href="//gmpg.org/xfn/11">
    <link href='//fonts.gstatic.com' rel='preconnect' crossorigin>
    <link rel="pingback" href="https://ovatheme.com/em4u/xmlrpc.php">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    
    <title>EM4U &#8211; Event Management Multipurpose WordPress Theme &#8211; event management, ticket booking, event booking, event theme</title>

<!-- Recent Posts Widget With Thumbnails: inline CSS -->
<style type='text/css'>
.rpwwt-widget ul { list-style: outside none none; margin-left: 0; margin-right: 0; padding-left: 0; padding-right: 0; }
.rpwwt-widget ul li { overflow: hidden; margin: 0 0 1.5em; }
.rpwwt-widget ul li:last-child { margin: 0; }
.rpwwt-widget .screen-reader-text {border: 0; clip: rect(1px, 1px, 1px, 1px); -webkit-clip-path: inset(50%); clip-path: inset(50%); height: 1px; margin: -1px; overflow: hidden; padding: 0; position: absolute !important; width: 1px; word-wrap: normal !important; word-break: normal; }
.rpwwt-widget .screen-reader-text:focus {background-color: #f1f1f1; border-radius: 3px; box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6); clip: auto !important; -webkit-clip-path: none; clip-path: none; color: #21759b; display: block; font-size: 0.875rem; font-weight: 700; height: auto; right: 5px; line-height: normal; padding: 15px 23px 14px; text-decoration: none; top: 5px; width: auto; z-index: 100000; }
.rpwwt-widget ul li img { display: inline; float: left; margin: .3em .75em .75em 0; }
#rpwwt-recent-posts-widget-with-thumbnails-1 img { width: 75px; height: 75px; }
</style>
<meta name='robots' content='noindex, nofollow' />
<link rel='dns-prefetch' href='//ovatheme.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel="alternate" type="application/rss+xml" title="EM4U - Event Management Multipurpose WordPress Theme &raquo; Feed" href="https://ovatheme.com/em4u/feed/" />
<link rel="alternate" type="application/rss+xml" title="EM4U - Event Management Multipurpose WordPress Theme &raquo; Comments Feed" href="https://ovatheme.com/em4u/comments/feed/" />
<script type="text/javascript">
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/ovatheme.com\/em4u\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.1.1"}};
/*! This file is auto-generated */
!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode,e=(p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0),i.toDataURL());return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(p&&p.fillText)switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([129777,127995,8205,129778,127999],[129777,127995,8203,129778,127999])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(e=t.source||{}).concatemoji?c(e.concatemoji):e.wpemoji&&e.twemoji&&(c(e.twemoji),c(e.wpemoji)))}(window,document,window._wpemojiSettings);
</script>
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 0.07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='wp-block-library-css' href='https://ovatheme.com/em4u/wp-includes/css/dist/block-library/style.min.css?ver=6.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-vendors-style-css' href='https://ovatheme.com/em4u/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style.css?ver=8.9.2' type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-css' href='https://ovatheme.com/em4u/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style.css?ver=8.9.2' type='text/css' media='all' />
<link rel='stylesheet' id='classic-theme-styles-css' href='https://ovatheme.com/em4u/wp-includes/css/classic-themes.min.css?ver=1' type='text/css' media='all' />
<style id='global-styles-inline-css' type='text/css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;}:where(.is-layout-flex){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link rel='stylesheet' id='contact-form-7-css' href='https://ovatheme.com/em4u/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='datetimepicker_css-css' href='https://ovatheme.com/em4u/wp-content/plugins/ova-events-manager/assets/libs/datetimepicker/jquery.datetimepicker.css' type='text/css' media='all' />
<link rel='stylesheet' id='ovaem_style-css' href='https://ovatheme.com/em4u/wp-content/plugins/ova-events-manager/assets/css/frontend/ovaem_style.css' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-layout-css' href='https://ovatheme.com/em4u/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=7.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css' href='https://ovatheme.com/em4u/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=7.2.2' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css' href='https://ovatheme.com/em4u/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=7.2.2' type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='parent-style-css' href='https://ovatheme.com/em4u/wp-content/themes/em4u/style.css?ver=6.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='em4u-fonts-css' href='//fonts.googleapis.com/css?family=Poppins%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%22&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css' href='https://ovatheme.com/em4u/wp-content/themes/em4u/assets/plugins/bootstrap-3.3.7-dist/css/bootstrap.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='owlcarousel-css' href='https://ovatheme.com/em4u/wp-content/themes/em4u/assets/plugins/owlcarousel2/assets/owl.carousel.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='fontawesome-css' href='https://ovatheme.com/em4u/wp-content/themes/em4u/assets/plugins/fontawesome/css/all.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='v4-shims-css' href='https://ovatheme.com/em4u/wp-content/themes/em4u/assets/plugins/fontawesome/css/v4-shims.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='eleganticons-css' href='https://ovatheme.com/em4u/wp-content/themes/em4u/assets/plugins/eleganticons/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='flaticon-css' href='https://ovatheme.com/em4u/wp-content/themes/em4u/assets/plugins/flaticon/flaticon.css' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-select-css' href='https://ovatheme.com/em4u/wp-content/themes/em4u/assets/plugins/bootstrap-select/css/bootstrap-select.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='default_theme-css' href='https://ovatheme.com/em4u/wp-content/themes/em4u/assets/css/default_theme.css' type='text/css' media='all' />
<link rel='stylesheet' id='em4u-style-css' href='https://ovatheme.com/em4u/wp-content/themes/em4u-child/style.css' type='text/css' media='all' />
<style id='em4u-style-inline-css' type='text/css'>


    body{
      font-family: Poppins, sans-serif;
    }

    /* Account Color */
    .ova-account a.ova_icon_open i{
        color: #f53f7b;
    }
    .ova-account a.ova_icon_open{
        border-color: #f53f7b;
    }
    .ova-account a.ova_icon_open:hover i{
        background-color: #f53f7b;
        color: #fff;
    }

    .ova-account a.ova_icon_key i{
        color: #4862c4;
    }
    .ova-account a.ova_icon_key{
        border-color: #4862c4;
    }
    .ova-account a.ova_icon_key:hover i{
        background-color: #4862c4;
        color: #fff;
    }


    /* Account Color Scroll */
    header.shrink .ova-account a.ova_icon_open i{
        color: #f53f7b;
    }
    header.shrink .ova-account a.ova_icon_open{
        border-color: #f53f7b;
    }
    header.shrink .ova-account a.ova_icon_open:hover i{
        background-color: #f53f7b;
        color: #fff;
    }

    header.shrink .ova-account a.ova_icon_key i{
        color: #4862c4;
    }
    header.shrink .ova-account a.ova_icon_key{
        border-color: #4862c4;
    }
    header.shrink .ova-account a.ova_icon_key:hover i{
        background-color: #4862c4;
        color: #fff;
    }

    @media( max-width: 993px ){
        header.shrink .ova-account a.ova_icon_open i,
        .ova-account a.ova_icon_open i{
            color: #f53f7b;
        }
        header.shrink .ova-account a.ova_icon_open,
        .ova-account a.ova_icon_open{
            border-color: #f53f7b;
        }
        header.shrink .ova-account a.ova_icon_open:hover i,
        .ova-account a.ova_icon_open:hover i{
            background-color: #f53f7b;
            color: #fff;
        }

        header.shrink .ova-account a.ova_icon_key i,
        .ova-account a.ova_icon_key i{
            color: #4862c4;
        }
        header.shrink .ova-account a.ova_icon_key,
        .ova-account a.ova_icon_key{
            border-color: #4862c4;
        }

        header.shrink .ova-account a.ova_icon_key:hover i,
        .ova-account a.ova_icon_key:hover i{
            background-color: #4862c4;
            color: #fff;
        }
    }

    

    /* Header Version */
    
    
    .ova_header.ovatheme_header_v3 .scroll_fixed,
    .ova_header.ovatheme_header_v2 .scroll_fixed,
    .ovatheme_header_v1 .wrap_menu_logo{
        background-color: rgba( 0,0,0, 0 );
    }

    .ova_header.ovatheme_header_v4.fixed.shrink .scroll_fixed,
    .ova_header.ovatheme_header_v3.fixed.shrink .scroll_fixed,
    .ova_header.ovatheme_header_v2.fixed.shrink .scroll_fixed,
    .ovatheme_header_v1.ova_header.fixed.shrink .wrap_menu_logo{
        background-color: rgba( 0,0,0, 1 );
    }


    header.ova_header ul.navbar-nav>li>a{
        color: #fff;
    }
    header.ova_header.fixed.shrink ul.navbar-nav>li>a{
        color: #fff;
    }

    .ovatheme_header_v4 .ova-menu #ovatheme_header_v4 ul.nav>li>a,
    .ovatheme_header_v3.bg_heading .ova-menu nav.navbar>ul>li>a,
    .ovatheme_header_v2.bg_heading .ova-menu ul.navbar-nav>li>a,
    .ovatheme_header_v1.bg_heading .ova-menu ul.navbar-nav>li>a{
        color: #fff;   
    }

    .ovatheme_header_v4.bg_heading.fixed.shrink .ova-menu #ovatheme_header_v4 ul.nav>li>a,
    .ovatheme_header_v3.bg_heading.fixed.shrink .ova-menu nav.navbar>ul>li > a,
    .ovatheme_header_v2.bg_heading.fixed.shrink .ova-menu ul.navbar-nav>li>a,
    .ovatheme_header_v1.bg_heading.fixed.shrink .ova-menu ul.navbar-nav>li>a{
        color: #fff;   
    }

    .ovatheme_header_v4 .ova-menu #ovatheme_header_v4 ul.nav > li .dropdown-menu li a:hover,
    .ova_header ul.nav > li > a:hover,
    .map-info-window h2.caption-title a{
        color: #f53f7b!important;
    }
    

    a,
    .ova_single_venue .tab_content .tab-content .ovaem_schedule .wrap_content .content_side .speaker_info .speaker_job, 
    .ova_single_event .tab_content .tab-content .ovaem_schedule .wrap_content .content_side .speaker_info .speaker_job,
    .ova-btn i
    {
     color: #4862c4;    
    }



    nav.navbar li.active>a{
      color: #f53f7b!important;
    }
    .event-calendar-sync a,
    a:hover


    {
     color: #f53f7b; 
    }

    
    .ovaem_search_event form input.ovame_submit:hover,
    .ova_search_v1.ovaem_search_event .ovaem_submit input:hover,
    .ovaem_search_event .ovaem_submit input:hover,
    .ovaem_events_filter .ovaem_events_filter_nav li.current a,
    .ovaem_events_filter .ovaem_events_filter_nav li a:hover,
    .ovaem_events_filter .ovaem_events_filter_content .ova-item:hover .wrap_content .more_detail .btn_link,
    .ovaem_events_filter .ovaem_events_filter_nav.style4 li.current a,
    footer.footer_v3 .wrap_top .subcribe .ova_mailchimp input.submit,
    .ovame_tickets .wrap_tickets .wrap_content .ovaem_register .ova-btn:hover,
    .ovaem_archives_event.list .ovaem_search .ovaem_search_event input, 
    .ovaem_archives_event.list .ovaem_search .ovaem_search_event select, 
    .ovaem_archives_event.list .ovaem_search .ovaem_search_event .btn.dropdown-toggle,
    .pagination-wrapper .pagination>li.active a, .pagination-wrapper .pagination>li>a:focus, 
    .pagination-wrapper .pagination>li>a:hover, .pagination-wrapper .pagination>li>span,
    .ova-btn.ova-btn-main-color:hover,
    .ovaem_events_pagination.clearfix ul.pagination li.active a,
    .ova-btn.ova-btn-second-color,
    .woocommerce form.login button[type='submit']:hover
    { 
      border-color: #4862c4; 
    }
    
    
    
    .ovaem_events_filter .ovaem_events_filter_content .ova-item.style2 .wrap_content .venue i,
    .venues_slider .item .address span.icon i,
    .ova_service .icon,
    .ova_speaker_list_wrap .ova_speaker_list .content .job,
    .ova_speaker_list_wrap.style2 .ova_speaker_list:hover .content .job,
    .ova_speaker_list_wrap.style4 .ova_speaker_list:hover .content .wrap_info .job,
    .ova_map1 .content .info i,
    .ovaem_schedule .wrap_content .content_side .speaker_info .speaker_job,
    ul.ovaem_list_categories_widget li a:hover,
    .ovaem_list_events_widget ul li h3.widget_title a:hover,
    .ovaem_single_speaker .content .job,
    .ovaem_general_sidebar .widget.widget_categories ul li a:hover,
    .ova_venue_item .content .address i,
    .event_gallery_v1 .item .info .date,
    .woocommerce .ovaem_general_sidebar .widget.widget_product_categories ul li a:hover,
    .event_info .icon,
    .ovaem_schedule_single_event .ovaem_schedule .wrap_content .content_side .speaker_info .speaker_job,
    .ovaem_events_list .info .venue span i,
    .ovaem_general_sidebar .widget ul li a:hover,
    .ovaem_events_filter .ovaem_events_filter_content .ova-item .wrap_content .status,
    .ovaem_events_list .ova_thumbnail .event_status
    { 
      color: #4862c4;
    }
    
    .ovaem_events_filter .ovaem_events_filter_content .ova-item.style3 .ova_thumbnail .venue span i,
    .ova_box .num,
    .ovaem_events_filter .ovaem_events_filter_content .ova-item:hover .time,
    .ova_service:hover,
    .ovaem_events_filter .ovaem_events_filter_nav li.current a,
    .ovaem_events_filter .ovaem_events_filter_nav li a:hover,
    .ovaem_search_event form input.ovame_submit:hover,
    .ova_search_v1.ovaem_search_event .ovaem_submit input:hover,
    .ovaem_search_event .ovaem_submit input:hover,
    .ova_blog .content:hover .ova_media a,
    footer.footer_v2 .subcribe .ova_mailchimp input.submit,
    .ovame_tickets .wrap_tickets .wrap_content .ovaem_register .ova-btn:hover,
    .event_single_related,
    .events_sidebar .event_widget.widget_ovaem_search_event_widget,
    .ovaem_archives_event.grid_sidebar .events_sidebar .event_widget.widget_ovaem_search_event_widget,
    .pagination-wrapper .pagination>li.active a, .pagination-wrapper .pagination>li>a:focus,
    .pagination-wrapper .pagination>li>a:hover, .pagination-wrapper .pagination>li>span,
    .ova-woo-shop .shop_archives .woocommerce-pagination li span,
    .woocommerce .coupon input.button,
    #scrollUp:hover,
    .ovaem-slider-events .item .read_more,
    .ova-btn.ova-btn-main-color:hover,
    .ovaem_events_pagination.clearfix ul.pagination li.active a,
    .ova-btn.ova-btn-second-color,
    .woocommerce form.login button[type='submit']:hover
    {
      background-color: #4862c4;
    }
    .ova-login-form-container p.login-submit #wp-submit:hover{
        background-color: #4862c4!important;   
    }

    
    


    
    .main_slider_v1 .item .caption h3.sub_title,
    .ovaem_search_event form input.ovame_submit,
    .ova_search_v1.ovaem_search_event .ovaem_submit input,
    .ovaem_search_event .ovaem_submit input,
    .ovaem-slider-events .slick-next,
    .ovaem-slider-events .slick-prev,
    .ova_speaker_list_wrap.style2 .ova_speaker_list .content ul.social li a:hover,
    .ova_speaker_list_wrap.style2 .ova_speaker_list .wrap_img ul.social li a:hover,
    footer.footer_v2 .social ul li a:hover,
    .ovaem_archives_event.list .ovaem_search .ovaem_search_event .ovaem_submit input:hover,
    .events_sidebar .event_widget.widget_ovaem_search_event_widget input.ovame_submit,
    .ovaem_event_tags_widget a:hover,
    .ovaem_archives_event.grid_sidebar .events_sidebar .event_widget .ovaem_event_tags_widget a:hover,
    .ovaem_regsiter_event form .ova_register_event:hover,
    .ovaem_blog_page .post-wrap .post-meta .right_side .post-footer a:hover,
    .widget.widget_tag_cloud .tagcloud a:hover,
    .ovaem_blog_page.list_two .post-wrap .read_more .post-readmore a:hover,
    #commentform #submit.submit,
    .widget.widget_product_tag_cloud .tagcloud a:hover,
    .ova-btn.ova-btn-main-color,
    .ova-btn.ova-btn-white:hover,
    .ova-btn:hover,
    .event_contact .submit .wpcf7-submit,
    .wrap_btn_book,
    .wrap-ovaem-slider-events .ova-slick-prev,
    .wrap-ovaem-slider-events .ova-slick-next,
    .ova-btn.ova-btn-second-color:hover,
    .ovame_tickets .wrap_tickets.featured .wrap_content .ovaem_register a,
    .woocommerce form.login button[type='submit']
    { 
      border-color: #f53f7b; 
    }
    
    

    .ova_search_v1.ovaem_search_event .ovaem_submit input,
    .ovaem_search_event .ovaem_submit input,
    .ovaem_search_event form input.ovame_submit,
    .ovatheme_header_v3.bg_heading .ova-top .item_top .ova-login,
    .ova_heading .sub_title:after,
    .ovaem_events_filter .ovaem_events_filter_content .time,
    .ovaem_events_filter .ovaem_events_filter_content .ova-item.style2:hover .ova_thumbnail .time,
    .ova_box.style2 .wrap_content .desc:after,
    .venues_slider .owl-controls .owl-dot.active,
    .ova_speaker_list_wrap .ova_speaker_list .content .trig,
    .ova_speaker_list_wrap.style2 .ova_speaker_list .content ul.social li a:hover,
    .ova_speaker_list_wrap.style2 .ova_speaker_list .wrap_img ul.social li a:hover,
    .ova_blog .content .ova_media a,
    .owl-controls .owl-dot.active,
    footer.footer_v2 .ova_mailchimp .info:after,
    footer.footer_v2 .subcribe .ova_mailchimp .info:after,
    .ova_single_event .tab_content .wrap_nav ul.nav li.active a span,
    .ova_single_event .event_widget h3.title span,
    .event_single_related .ova_heading_v2.white .sub_title span,
    .ovaem_archives_event.list .ovaem_search .ovaem_search_event .ovaem_submit input:hover,
    .ovaem_events_list .ova_thumbnail .price,
    .ovaem_events_list.sidebar .info .more_detail a span,
    .events_sidebar .event_widget.widget_ovaem_search_event_widget input.ovame_submit,
    .ovaem_regsiter_event form .ova_register_event:hover,
    .ovaem_blog_page .post-wrap .post-meta .right_side .post-footer a:hover,
    .widget.widget_tag_cloud .tagcloud a:hover,
    .ovaem_blog_page.list_two .post-wrap .read_more .post-readmore a:hover,
    #commentform #submit.submit,
    .ovaem_schedule_single_event .ovaem_schedule ul li.active a,
    li.ova-megamenu ul.ova-mega-menu li h5.title:after,
    .ova-menu li.ova-megamenu ul.ova-mega-menu .ovaem_slider_events_two a.ova-btn,
    .widget.widget_product_tag_cloud .tagcloud a:hover,
    .woocommerce .widget_price_filter .ui-slider .ui-slider-range,
    .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
    .woocommerce span.onsale,
    .woocommerce.single-product .cart .button,
    .woocommerce.single-product .woocommerce-tabs ul.tabs li.active a:after,
    #scrollUp,
    .ovaem_events_filter .ovaem_events_filter_content .ova-item .time,
    ul li.ova-megamenu ul.ova-mega-menu li h5.title:after,
    footer.footer_v1 .wrap_widget h4.widget-title:after,
    .ova_heading_v3 span,
    .ova-btn.ova-btn-main-color,
    footer.footer_v3 h4.widget-title:after,
    .ova-btn.ova-btn-white:hover,
    .ova-btn:hover,
    .events_sidebar .event_widget h3.title span,
    .event_contact .submit .wpcf7-submit,
    .contact_info .icon,
    .ovaem_general_sidebar .widget h3.title span,
    #comments h4.block-title span,
    .main_slider_v1.main_slider_two .item .caption .ova_countdown_slideshow .countdown-section:nth-child(2),
    .main_slider_v1.main_slider_two .item .caption .ova_countdown_slideshow .countdown-section:nth-child(4),
    .ova_event_countdown .ova_countdown_slideshow .countdown-section:nth-child(2),
    .ova_event_countdown .ova_countdown_slideshow .countdown-section:nth-child(4),
    .ovaem_search_banner form .ovaem_submit input,
    .cat_info:hover,
    .ova_heading_v4 .sub_title:after,
    .ova-btn.ova-btn-second-color:hover,
    .woocommerce form.login button[type='submit']
    
    {
      background-color: #f53f7b;
      
    }
    .ova-login-form-container p.login-submit #wp-submit{
        background-color: #f53f7b!important;  
    }
    


    
    .ovaem_events_filter .ovaem_events_filter_content .ova-item.style2 .wrap_content .bottom .price,
    .ovaem_events_filter .ovaem_events_filter_content .ova-item .wrap_content h2 a:hover,
    .ova_service:hover .icon,
    .ovaem_events_filter .ovaem_events_filter_content .ova-item .wrap_content .more_detail .btn_link:hover,
    .ovaem_events_filter .read_more a i,
    .ova_box .wrap_content h3 a:hover,
    .ovaem-slider-events .item h2 a:hover,
    .venues_slider .item .wrap_content h2 a:hover,
    .venues_slider .item .wrap_img .read_more a:hover,
    .ova_speaker_list_wrap .ova_speaker_list .content ul.social li a:hover,
    .ova_speaker_list_wrap .ova_speaker_list .content .title a:hover,
    .ova-btn.ova-btn-arrow:hover i,
    .ova-btn.ova-btn-arrow i,
    .ova_speaker_list_wrap.style4 .ova_speaker_list .content .wrap_info .title a:hover,
    .ova_blog .post-meta .post-date i,
    .ova_blog .post-meta .post-comment i,
    .ova_blog .content h2.title a:hover,
    footer.footer_default .social ul.social_theme li a:hover,
    footer.footer_default .copyright a:hover,
    footer.footer_v1 .wrap_bellow .social ul li a:hover,
    footer.footer_v1 .wrap_bellow .copyright a:hover,
    footer.footer_v2 .copyright a:hover,
    .ova_single_event .content .ovaem_tags span i,
    .ova_single_event .content .ovaem_tags ul li a:hover,
    .ova_single_event .content .social ul li a:hover,
    .ova_single_event .content .social span i,
    .ova_single_event .tab_content .tab-content .ovaem_schedule .wrap_content .content_side .speaker_info .speaker_title a:hover,
    .ovaem_events_filter .ovaem_events_filter_content .ova-item.style2 .wrap_content .bottom .more_detail .btn_link:hover,
    .ovaem_events_list .info .title a:hover,
    .ovaem_events_list.sidebar .info .more_detail a:hover,
    .ovaem_event_tags_widget a:hover,
    .ovaem_special_event_widget h3.widget_title a:hover,
    .ovaem_single_speaker .content .speaker_info label i,
    .ovaem_single_speaker .content .speaker_info a:hover,
    .ovaem_single_speaker .content .speaker_info.social_speaker a:hover,
    ul.breadcrumb a:hover,
    .ovaem_blog_page .post-wrap .post-media .post-categories a:hover,
    .ovaem_blog_grid_page .post-wrap .content .post-title h2 a:hover,
    .ovaem_blog_grid_page .post-wrap .content .read_more a:hover,
    .ovaem_detail_post .tags_share .tag .ovaem_tags a:hover,
    .ovaem_detail_post .tags_share .share ul.share-social-icons li a:hover,
    .ova_venue_item .content h3.title a:hover,
    li.ova-megamenu ul.ova-mega-menu li a:hover,
    .ovatheme_header_v1 .ova-menu ul.navbar-nav li .dropdown-menu li a:hover,
    .ovatheme_header_v2 .ova-menu ul.navbar-nav li .dropdown-menu li a:hover,
    .ovatheme_header_v3 .ova-menu ul.navbar-nav li .dropdown-menu li a:hover,
    .ovatheme_header_v4 .ova-menu #ovatheme_header_v4 ul.nav > li .dropdown-menu li a:hover,
    .ova-menu li.ova-megamenu ul.ova-mega-menu .ovaem_slider_events_two .event_content h2.title a:hover,
    .ovaem_slider_events_two .event_content .wrap_date_venue i,
    .ovaem_slider_events_two .owl-controls .owl-next:hover, 
    .ovaem_slider_events_two .owl-controls .owl-prev:hover,
    .ova-woo-shop .shop_archives a h2.woocommerce-loop-product__title:hover,
    .woocommerce.single-product .woocommerce-tabs .woocommerce-Tabs-panel #review_form_wrapper #review_form .comment-form-rating p.stars a,
    .woocommerce.single-product .woocommerce-tabs .woocommerce-Tabs-panel .woocommerce-Reviews ol.commentlist .star-rating span,
    .banner_one .event_icon i,
    .ovaem_blog_page .post-wrap .post-title h2 a:hover,
    .ovaem_blog_page .post-wrap .post-meta .left_side .post-date i,
    .ovaem_blog_page .post-wrap .post-meta .left_side .comment i,
    .ovaem_detail_post .post-meta .post-meta-content .comment .left i,
    .ovaem_detail_post .post-meta .post-meta-content .post-date .left i,
    .ovaem_detail_post .tags_share .tag .ovaem_tags i,
    .woocommerce .related.products .product .ova_rating .star-rating,
    .woocommerce .woocommerce-product-rating .star-rating,
    .main_slider_v1 .item .caption .slider_date .box i,
    .cat_info i,
    .ova_heading_v4 h3 span,
    .em4u_call_action .wpb_wrapper a
    { 
      color: #f53f7b; 
    }
    
    
    .ova_speaker_list_wrap .ova_speaker_list:hover .content
    {
      background-color: rgba( 72,98,196, 0.9 );
    }
    .ova_speaker_list_wrap .ova_speaker_list:hover .content:before{
      border-bottom-color: rgba( 72,98,196, 0.9 );
    }

    .dropdown-menu>li>a:hover{ color: #f53f7b!important; }
    .ovatheme_header_v3 .ova-bg-heading .bg_cover{
      background-color: rgba( 72,98,196, 0.9 )!important;
    }
    .ovatheme_header_v3.bg_heading .ova-menu{ border-bottom: 1px solid rgba(255, 255, 255, 0.15); }
    .main_slider_v1 .item .caption h3.sub_title::after{
      border-bottom-color: #f53f7b;
    }
    .ovaem_events_filter .ovaem_events_filter_content .ova-item.style3 .ova_thumbnail .venue span{
      background-color: rgba( 72,98,196, 0.5 );
    }
    .ovaem_events_filter .ovaem_events_filter_nav.style3 li a:hover,
    .ovaem_events_filter .ovaem_events_filter_nav.style3 li.current a{
      border-bottom-color: #f53f7b;
    }
    .ovaem-slider-events .item .read_more{ background-color: rgba( 72,98,196, 0.9 ); }
    .ovaem-slider-events .item .read_more:hover{ background-color: rgba( 245,63,123, 0.9 ); }

    .ovaem_schedule_single_event .ovaem_schedule ul li.active a::after{
        border-top-color: #f53f7b;
    }

    ul.ova-mega-menu li a.active,
    ul.nav li.ova_current>a{
        color: #f53f7b!important; 
    }
    .ovaem_simple_event .more_detail{
        background-color: #f53f7b;    
    }
    
    .ovaem_simple_event .more_detail:after{
        border-bottom-color: #f53f7b;
    }
    .join_event .title span,
    .wrap_btn_book{
        background-color: #f53f7b;
    }
    .woocommerce.single-product .woocommerce-tabs .woocommerce-Tabs-panel .form-submit input.submit,
    .woocommerce input.button.alt, .woocommerce input.button,
    .woocommerce .ova_cart .cart-collaterals .wc-proceed-to-checkout a,
    .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{
        background-color: #f53f7b!important;   

    }
    .woocommerce .coupon input.button.alt:hover, .woocommerce .coupon input.button:hover,
    .woocommerce .ova_cart .cart-collaterals .wc-proceed-to-checkout a:hover,
    .woocommerce .actions input.button:hover,
    .woocommerce .actions input.button:disabled[disabled]:hover{
        color: #fff;
    }
    .woocommerce div.product .stock{
        color: #f53f7b;
    }

    .fc-event{
        background-color: #4862c4;
        border-color: #4862c4;
    }

    
    @media( max-width: 767px ){
        .vc_row.search_top{
            background-color: #4862c4!important;
        }
        .ova-btn.ova-btn-second-color{
            border-color: #f53f7b;
            background-color: #f53f7b;
            color: #fff;
        }

        .ova-btn.ova-btn-second-color:hover{
            border-color: #4862c4;
            background-color: #4862c4;
        }

        .ovaem_events_filter .ovaem_events_filter_content .ova-item.style1 .ova_thumbnail .time{
            background-color: #f53f7b;
        }
        .ovaem_events_filter .ovaem_events_filter_content .ova-item.style1 .wrap_content .more_detail .btn_link{
            border-color: #f53f7b;
        }
        .ova_service.style1 .read_more a{
            color: #f53f7b;   
        }
        
        .select_cat_mobile_btn ul.ovaem_events_filter_nav li:hover a, 
        .select_cat_mobile_btn ul.ovaem_events_filter_nav li.current a{
            color: #4862c4;
        }
        .ovaem_events_filter .ovaem_events_filter_content .ova-item.style3 .wrap_content .venue_mobile span i{
            color: #f53f7b;
        }
    }
    

  
</style>
<link rel='stylesheet' id='ova_login-css' href='https://ovatheme.com/em4u/wp-content/plugins/ova-login/assets/css/login.css?ver=6.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_front-css' href='https://ovatheme.com/em4u/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=6.9.0' type='text/css' media='all' />
<link rel='stylesheet' id='ova_megamenu_css-css' href='https://ovatheme.com/em4u/wp-content/plugins/ova-megamenu/assets/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='cubeportfolio-jquery-css-css' href='https://ovatheme.com/em4u/wp-content/plugins/cubeportfolio/public/css/main.min-1.16.2.css?ver=1.16.2' type='text/css' media='all' />
<script type="text/javascript">
            window._nslDOMReady = function (callback) {
                if ( document.readyState === "complete" || document.readyState === "interactive" ) {
                    callback();
                } else {
                    document.addEventListener( "DOMContentLoaded", callback );
                }
            };
            </script><script type='text/javascript' src='https://ovatheme.com/em4u/wp-includes/js/jquery/jquery.min.js?ver=3.6.1' id='jquery-core-js'></script>
<script type='text/javascript' src='https://ovatheme.com/em4u/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
<script type='text/javascript' src='https://ovatheme.com/em4u/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.7.2.2' id='jquery-blockui-js'></script>
<script type='text/javascript' id='wc-add-to-cart-js-extra'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/em4u\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/em4u\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/ovatheme.com\/em4u\/cart\/","is_cart":"","cart_redirect_after_add":"yes"};
/* ]]> */
</script>
<script type='text/javascript' src='https://ovatheme.com/em4u/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=7.2.2' id='wc-add-to-cart-js'></script>
<script type='text/javascript' src='https://ovatheme.com/em4u/wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js?ver=6.9.0' id='vc_woocommerce-add-to-cart-js-js'></script>
<link rel="https://api.w.org/" href="https://ovatheme.com/em4u/wp-json/" /><link rel="alternate" type="application/json" href="https://ovatheme.com/em4u/wp-json/wp/v2/pages/5275" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://ovatheme.com/em4u/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://ovatheme.com/em4u/wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 6.1.1" />
<meta name="generator" content="WooCommerce 7.2.2" />
<link rel="canonical" href="https://ovatheme.com/em4u/" />
<link rel='shortlink' href='https://ovatheme.com/em4u/' />
<link rel="alternate" type="application/json+oembed" href="https://ovatheme.com/em4u/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fovatheme.com%2Fem4u%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://ovatheme.com/em4u/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fovatheme.com%2Fem4u%2F&#038;format=xml" />

    <!--[if (gte IE 9)]><!-->
    <!--script src="https://ovatheme.com/em4u/wp-content/themes/em4u/assets/plugins/iesupport/html5shiv.js"></script>
    <script src="https://ovatheme.com/em4u/wp-content/themes/em4u/assets/plugins/iesupport/respond.min.js"></script-->
    <!--<![endif]-->
  	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style><script type="text/javascript">if (typeof ajaxurl === "undefined") {var ajaxurl = "https://ovatheme.com/em4u/wp-admin/admin-ajax.php"}</script><meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/>
<link rel="icon" href="https://ovatheme.com/em4u/wp-content/uploads/2017/09/favicon-advent-wp-1.png" sizes="32x32" />
<link rel="icon" href="https://ovatheme.com/em4u/wp-content/uploads/2017/09/favicon-advent-wp-1.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://ovatheme.com/em4u/wp-content/uploads/2017/09/favicon-advent-wp-1.png" />
<meta name="msapplication-TileImage" content="https://ovatheme.com/em4u/wp-content/uploads/2017/09/favicon-advent-wp-1.png" />
<style type="text/css">div.nsl-container[data-align="left"] {
    text-align: left;
}

div.nsl-container[data-align="center"] {
    text-align: center;
}

div.nsl-container[data-align="right"] {
    text-align: right;
}


div.nsl-container div.nsl-container-buttons a[data-plugin="nsl"] {
    text-decoration: none;
    box-shadow: none;
    border: 0;
}

div.nsl-container .nsl-container-buttons {
    display: flex;
    padding: 5px 0;
}

div.nsl-container.nsl-container-block .nsl-container-buttons {
    display: inline-grid;
    grid-template-columns: minmax(145px, auto);
}

div.nsl-container-block-fullwidth .nsl-container-buttons {
    flex-flow: column;
    align-items: center;
}

div.nsl-container-block-fullwidth .nsl-container-buttons a,
div.nsl-container-block .nsl-container-buttons a {
    flex: 1 1 auto;
    display: block;
    margin: 5px 0;
    width: 100%;
}

div.nsl-container-inline {
    margin: -5px;
    text-align: left;
}

div.nsl-container-inline .nsl-container-buttons {
    justify-content: center;
    flex-wrap: wrap;
}

div.nsl-container-inline .nsl-container-buttons a {
    margin: 5px;
    display: inline-block;
}

div.nsl-container-grid .nsl-container-buttons {
    flex-flow: row;
    align-items: center;
    flex-wrap: wrap;
}

div.nsl-container-grid .nsl-container-buttons a {
    flex: 1 1 auto;
    display: block;
    margin: 5px;
    max-width: 280px;
    width: 100%;
}

@media only screen and (min-width: 650px) {
    div.nsl-container-grid .nsl-container-buttons a {
        width: auto;
    }
}

div.nsl-container .nsl-button {
    cursor: pointer;
    vertical-align: top;
    border-radius: 4px;
}

div.nsl-container .nsl-button-default {
    color: #fff;
    display: flex;
}

div.nsl-container .nsl-button-icon {
    display: inline-block;
}

div.nsl-container .nsl-button-svg-container {
    flex: 0 0 auto;
    padding: 8px;
    display: flex;
    align-items: center;
}

div.nsl-container svg {
    height: 24px;
    width: 24px;
    vertical-align: top;
}

div.nsl-container .nsl-button-default div.nsl-button-label-container {
    margin: 0 24px 0 12px;
    padding: 10px 0;
    font-family: Helvetica, Arial, sans-serif;
    font-size: 16px;
    line-height: 20px;
    letter-spacing: .25px;
    overflow: hidden;
    text-align: center;
    text-overflow: clip;
    white-space: nowrap;
    flex: 1 1 auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-transform: none;
    display: inline-block;
}

div.nsl-container .nsl-button-google[data-skin="dark"] .nsl-button-svg-container {
    margin: 1px;
    padding: 7px;
    border-radius: 3px;
    background: #fff;
}

div.nsl-container .nsl-button-google[data-skin="light"] {
    border-radius: 1px;
    box-shadow: 0 1px 5px 0 rgba(0, 0, 0, .25);
    color: RGBA(0, 0, 0, 0.54);
}

div.nsl-container .nsl-button-apple .nsl-button-svg-container {
    padding: 0 6px;
}

div.nsl-container .nsl-button-apple .nsl-button-svg-container svg {
    height: 40px;
    width: auto;
}

div.nsl-container .nsl-button-apple[data-skin="light"] {
    color: #000;
    box-shadow: 0 0 0 1px #000;
}

div.nsl-container .nsl-button-facebook[data-skin="white"] {
    color: #000;
    box-shadow: inset 0 0 0 1px #000;
}

div.nsl-container .nsl-button-facebook[data-skin="light"] {
    color: #1877F2;
    box-shadow: inset 0 0 0 1px #1877F2;
}

div.nsl-container .nsl-button-apple div.nsl-button-label-container {
    font-size: 17px;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}

div.nsl-container .nsl-button-slack div.nsl-button-label-container {
    font-size: 17px;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}

div.nsl-container .nsl-button-slack[data-skin="light"] {
    color: #000000;
    box-shadow: inset 0 0 0 1px #DDDDDD;
}

div.nsl-container .nsl-button-tiktok[data-skin="light"] {
    color: #161823;
    box-shadow: 0 0 0 1px rgba(22, 24, 35, 0.12);
}

.nsl-clear {
    clear: both;
}

.nsl-container {
    clear: both;
}

/*Button align start*/

div.nsl-container-inline[data-align="left"] .nsl-container-buttons {
    justify-content: flex-start;
}

div.nsl-container-inline[data-align="center"] .nsl-container-buttons {
    justify-content: center;
}

div.nsl-container-inline[data-align="right"] .nsl-container-buttons {
    justify-content: flex-end;
}


div.nsl-container-grid[data-align="left"] .nsl-container-buttons {
    justify-content: flex-start;
}

div.nsl-container-grid[data-align="center"] .nsl-container-buttons {
    justify-content: center;
}

div.nsl-container-grid[data-align="right"] .nsl-container-buttons {
    justify-content: flex-end;
}

div.nsl-container-grid[data-align="space-around"] .nsl-container-buttons {
    justify-content: space-around;
}

div.nsl-container-grid[data-align="space-between"] .nsl-container-buttons {
    justify-content: space-between;
}

/* Button align end*/

/* Redirect */

#nsl-redirect-overlay {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    position: fixed;
    z-index: 1000000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    backdrop-filter: blur(1px);
    background-color: RGBA(0, 0, 0, .32);;
}

#nsl-redirect-overlay-container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: white;
    padding: 30px;
    border-radius: 10px;
}

#nsl-redirect-overlay-spinner {
    content: '';
    display: block;
    margin: 20px;
    border: 9px solid RGBA(0, 0, 0, .6);
    border-top: 9px solid #fff;
    border-radius: 50%;
    box-shadow: inset 0 0 0 1px RGBA(0, 0, 0, .6), 0 0 0 1px RGBA(0, 0, 0, .6);
    width: 40px;
    height: 40px;
    animation: nsl-loader-spin 2s linear infinite;
}

@keyframes nsl-loader-spin {
    0% {
        transform: rotate(0deg)
    }
    to {
        transform: rotate(360deg)
    }
}

#nsl-redirect-overlay-title {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
    font-size: 18px;
    font-weight: bold;
    color: #3C434A;
}

#nsl-redirect-overlay-text {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
    text-align: center;
    font-size: 14px;
    color: #3C434A;
}

/* Redirect END*/</style>		<style type="text/css" id="wp-custom-css">
			.ova_header.ovatheme_header_v3 .scroll_fixed{
background-color: transparent;
}

.ova-woo-shop .shop_archives .ova_content_shop li.product-category.product{
	display: none;
}
.ova_search_v1.ovaem_search_event .ovaem_date{
	border-radius: 30px;
}
.ova_search_v1.ovaem_search_event .ovaem_name_event, .ova_search_v1.ovaem_search_event .ovaem_cat, .ova_search_v1.ovaem_search_event .ovaem_time, .ova_search_v1.ovaem_search_event .ovaem_venue, .ova_search_v1.ovaem_search_event .ovaem_date, .ova_search_v1.ovaem_search_event .ovaem_submit, .ova_search_v1.ovaem_search_event .ovaem_country, .ova_search_v1.ovaem_search_event .ovaem_city{
	margin-bottom: 0;
}

.single-event-modern .ovatheme_header_v1.bg_heading .ova-bg-heading{
	display: none!important;
}
.single-event-modern .ovatheme_header_v1 .wrap_menu_logo{
 background: #343434;
 }
.single-event-modern .event_room_row,
.single-event-modern  .event_venue_row{
	display: none;
}
		</style>
		<style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1554393677789{margin-top: -80px !important;padding-top: 60px !important;background-color: #343434 !important;}.vc_custom_1554353656652{margin-right: 0px !important;margin-left: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}.vc_custom_1554353279090{margin-top: 50px !important;}.vc_custom_1554353284632{margin-top: 100px !important;padding-bottom: 100px !important;background-color: #fafafa !important;}.vc_custom_1554353291638{margin-top: 20px !important;}.vc_custom_1554353298112{margin-top: 100px !important;padding-top: 70px !important;padding-bottom: 90px !important;}.vc_custom_1554353305210{padding-top: 30px !important;padding-bottom: 100px !important;background-color: #fafafa !important;}.vc_custom_1554353920950{padding-top: 50px !important;}.vc_custom_1552202677727{padding-top: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}.vc_custom_1552202682990{padding-top: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}.vc_custom_1552202688180{padding-top: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}.vc_custom_1552202698153{padding-top: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}.vc_custom_1552202702847{padding-top: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}.vc_custom_1552202707678{padding-top: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}.vc_custom_1554354170505{padding-bottom: 15px !important;}.vc_custom_1554354202684{padding-top: 50px !important;padding-bottom: 20px !important;}.vc_custom_1552203945250{padding-top: 20px !important;}.vc_custom_1552203936532{padding-top: 20px !important;}.vc_custom_1552203940382{padding-top: 20px !important;}.vc_custom_1554354237470{padding-top: 40px !important;padding-bottom: 25px !important;}.vc_custom_1554353717414{margin-top: -120px !important;}.vc_custom_1554354271959{padding-top: 40px !important;padding-bottom: 20px !important;}</style><noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>

<body class="home page-template-default page page-id-5275 theme-em4u woocommerce-no-js totop wpb-js-composer js-comp-ver-6.9.0 vc_responsive" >

    

        
    <div class="ovatheme_container_wide event_header_version2 bg_white">
    	
        <!-- Heading Version 2 -->
    <header class="ova_header ovatheme_header_v2 bg_heading fixed has_logo_scroll has_logo_mobile ">
        <div class="scroll_fixed">
            <div class="container">
                <div class="row">
                    <div class="ova-menu">
                        <nav class="navbar">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="ova-logo navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ovatheme_header_v2" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <!-- LOGO PROPIO -->
                                    <a href="https://ovatheme.com/em4u/" class="navbar-brand logo">
                                        <img src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/logo_white.png" alt="EM4U &#8211; Event Management Multipurpose WordPress Theme" style=" " >
                                    </a>
                                    <a href="https://ovatheme.com/em4u/" class="navbar-brand logo_scroll">
                                        <img src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/logo_white.png" alt="EM4U &#8211; Event Management Multipurpose WordPress Theme" style=" ">
                                    </a>
                                    <a href="https://ovatheme.com/em4u/" class="navbar-brand logo_mobile">
                                        <img src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/logo_dark.png" alt="EM4U &#8211; Event Management Multipurpose WordPress Theme" style=" ">
                                    </a>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="ovatheme_header_v2">
                                    <ul id="menu-primary-menu" class="nav navbar-nav navbar-right">
                                        <li id="menu-item-13" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-13 dropdown" style="height: ">
                                            <a title="Home" href="{{ url('/index') }}">{{ __('Home') }}</a>
                                        </li>
                                        <li id="menu-item-16" class="col_shortcode_style menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-16 dropdown ova-megamenu" style="height: ">
                                            <a title="Event" href="#" class="col_shortcode_style">{{ __('Event') }}<span class="fa fa-caret-down show_dropmenu"></span></a>
                                            <button type="button" class="dropdown-toggle"><i class="arrow_carrot-down"></i></button>
                                            <ul class="ova-mega-menu three-columns  dropdown-menu"  role="menu">
                                                <li  id="menu-item-651" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-651 dropdown" style="height: 620px">
                                                    <div>
                                                        <h5 class="title">{{ __('Upcomming Event') }}</h5>
                                                        <div class="ovaem_slider_events_two ">
                                                            <?php
                                                            $actualDate = date('d-m-Y');
                                                            $events = DB::table('events')
                                                                        ->join('helds', 'events.id', '=', 'helds.idEvent', )
                                                                        ->join('places', 'places.id', '=', 'helds.idPlace')
                                                                        ->join('cities', 'places.idCity', '=', 'cities.id')
                                                                        ->where('helds.date', '>', $actualDate)
                                                                        ->select('events.name', 'helds.date', 'places.name as place', 'cities.name as city', 'events.description')
                                                                        ->get();
                                                            ?>
                                                            @foreach ($events as $event)
                                                                <div class="item">
                                                                    <div class="event_content">
                                                                        <a href="https://ovatheme.com/em4u/event/adobe-wants-to-let-you-draw-data/">
                                                                            <div class="wrap_img" style="background: url(https://ovatheme.com/em4u/wp-content/uploads/2017/10/event_conference_1-3.jpg);"></div>
                                                                            <h2 class="title"><a href="https://ovatheme.com/em4u/event/adobe-wants-to-let-you-draw-data/">{{ $event->name }}</a></h2>
                                                                            <div class="wrap_date_venue">
                                                                                <div class="time"><i class="icon_calendar"></i>{{ $event->date }}</div>
                                                                                <div class="venue"><i class="icon_pin_alt"></i>{{ $event->place }} - {{ $event->city }}</div>
                                                                            </div>
                                                                            <div class="desc">{{ $event->description }}</div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="countdown">
                                                                        <div class="ova_countdown_menu">
                                                                            <div class="ova_countdown_event" data-day="01" data-month="02" data-year="2024" data-hour="12" data-minute="09" data-timezone="0"></div>
                                                                        </div>
                                                                    </div>
                                                                    <a class="ova-btn" href="https://ovatheme.com/em4u/event/adobe-wants-to-let-you-draw-data/">{{ __('Get ticket') }}</a>
                                                                </div>
                                                            @endforeach                                                
                                                        </div>
                                                    </div>
                                                </li>	
                                                <li  id="menu-item-24" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-24 dropdown" style="height: 620px">
                                                    <div>
                                                        <h5 class="title">{{ __('Event Archive') }}</h5>
                                                        <a title="Grid Version 1" href="https://ovatheme.com/em4u/event/" class="" >{{ __('All events')}}</a>
                                                        <!-- <a title="Grid Version 2" href="https://ovatheme.com/em4u/event/?type=grid&#038;style_grid=style2" class="" >Grid Version 2</a> -->
                                                        <!-- <a title="Grid Version 3" href="https://ovatheme.com/em4u/event/?type=grid&#038;style_grid=style3" class="" >Grid Version 3</a> -->
                                                        <!-- <a title="Grid Version 4" href="https://ovatheme.com/em4u/event/?type=grid&#038;style_grid=style4" class="" >Grid Version 4</a> -->
                                                        <!-- <a title="List without Sidebar" href="https://ovatheme.com/em4u/event/?type=list" class="" >List without Sidebar</a> -->
                                                        <!-- <a title="List with Sidebar" href="https://ovatheme.com/em4u/event/?type=list_sidebar" class="" >List with Sidebar</a> -->
                                                        <!-- <a title="Grid Sidebar V1" href="https://ovatheme.com/em4u/event/?type=grid_sidebar&#038;style_grid=style1" class="" >Grid Sidebar V1</a> -->
                                                        <!-- <a title="Grid Sidebar V2" href="https://ovatheme.com/em4u/event/?type=grid_sidebar&#038;style_grid=style2" class="" >Grid Sidebar V2</a> -->
                                                        <!-- <a title="Grid Sidebar V3" href="https://ovatheme.com/em4u/event/?type=grid_sidebar&#038;style_grid=style3" class="" >Grid Sidebar V3</a> -->
                                                        <!-- <a title="Grid Sidebar V4" href="https://ovatheme.com/em4u/event/?type=grid_sidebar&#038;style_grid=style4" class="" >Grid Sidebar V4</a> -->
                                                    </div>
                                                </li>	
                                                <li  id="menu-item-27" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-27 dropdown" style="height: 620px">
                                                    <div>
                                                        <h5 class="title">{{_('Event Pages') }}</h5>
                                                        <a title="Upcoming Events" href="https://ovatheme.com/em4u/upcoming-event/" class="" >{{ __('Upcoming Events') }}</a>
                                                        <a title="Past Events" href="https://ovatheme.com/em4u/past-event/" class="" >{{ __('Past Events') }}</a>
                                                        <a title="Featured Events" href="https://ovatheme.com/em4u/featured-event/" class="" >{{ __('Featured Events') }}</a>
                                                        <a title="Virtual Event - Zoom" href="https://ovatheme.com/em4u/event/online-yoga-class/" class="" >{{ __('Virtual Event') }} &#8211; Zoom</a>
                                                        <a title="Event Free Ticket" href="https://ovatheme.com/em4u/event/christmas-event-in-the-city/" class="" >{{ __('Event Free Ticket') }}</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-5333" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5333 dropdown" style="height: ">
                                            <a title="Categories" href="#" >Categories<span class="fa fa-caret-down show_dropmenu"></span></a>
                                            <button type="button" class="dropdown-toggle"><i class="arrow_carrot-down"></i></button>
                                            <ul class="dropdown-menu submenu" role="menu">
                                                <?php
                                                $categories = Category::all();
                                                foreach ($categories as $category){
                                                ?>
                                                <li id="menu-item-5334" class="menu-item menu-item-type-taxonomy menu-item-object-categories menu-item-5334 dropdown" style="height: ">
                                                <a title="Conference" href="https://ovatheme.com/em4u/categories/conference/" >{{ $category->name }}</a></li>	
                                                <?php
                                                }
                                                ?>
                                            </ul>
                                        </li>
                                    <li id="menu-item-5332" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5332 dropdown" style="height: ">
                                        <a title="Locations" href="#" >{{ __('Locations') }}<span class="fa fa-caret-down show_dropmenu"></span></a>
                                        <button type="button" class="dropdown-toggle"><i class="arrow_carrot-down"></i></button>
                                        <ul class="dropdown-menu submenu" role="menu">
                                            <?php
                                            $cities = City::take(10)->get();
                                            ?>
                                            @foreach ($cities as $city)
                                                <li id="menu-item-5340" class="menu-item menu-item-type-taxonomy menu-item-object-location menu-item-has-children menu-item-5340 dropdown" style="height: ">
                                                    <a title="Texas" href="https://ovatheme.com/em4u/location/texas/" >{{ $city-> name }} <span class="fa fa-caret-down show_dropmenu"></span></a>
                                                    <button type="button" class="dropdown-toggle"><i class="arrow_carrot-down"></i></button>
                                                    <ul class="dropdown-menu submenu" role="menu">
                                                        <?php
                                                        $places = Place::where('idCity', $city->id)->get();
                                                        ?>
                                                        @foreach ($places as $place)
                                                            <li id="menu-item-5341" class="menu-item menu-item-type-taxonomy menu-item-object-location menu-item-5341 dropdown" style="height: ">
                                                                <a title="Austin" href="https://ovatheme.com/em4u/location/austin/" >{{ $place->name }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>	
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li id="menu-item-921" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-921 dropdown" style="height: ">
                                        <a title="Pages" href="#" >{{ __('Pages') }}<span class="fa fa-caret-down show_dropmenu"></span></a>
                                        <button type="button" class="dropdown-toggle"><i class="arrow_carrot-down"></i></button>
                                        <ul class="dropdown-menu submenu" role="menu">
                                            <li id="menu-item-942" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-942 dropdown" style="height: ">
                                                <a title="About Us" href="https://ovatheme.com/em4u/about-us/" >{{ __('About Us') }}</a></li>	
                                            <li id="menu-item-5350" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5350 dropdown" style="height: ">
                                                <a title="Contact Us" href="#" >{{ __('Contact Us') }}<span class="fa fa-caret-down show_dropmenu"></span></a>
                                                <button type="button" class="dropdown-toggle"><i class="arrow_carrot-down"></i></button>
                                                <ul class="dropdown-menu submenu" role="menu">
                                                    <li id="menu-item-1281" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1281 dropdown" style="height: ">
                                                        <a title="Contact V1" href="https://ovatheme.com/em4u/contact-v1/" >{{ __('Contact') }}</a></li>		
                                                    <li id="menu-item-1330" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1330 dropdown" style="height: ">
                                                </ul>
                                            </li>
                                            <li id="menu-item-2444" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2444 dropdown" style="height: ">
                                                <a title="Checkout Event" href="https://ovatheme.com/em4u/checkout-event/" >{{ __('Checkout') }}</a>
                                            </li>	
                                        </ul>
                                    </li>
                                    <li id="menu-item-13" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-13 dropdown" style="height: ">
                                            <a title="Home" href="https://ovatheme.com/em4u/blog/">{{ __('Blog') }}</a>
                                    </li>
                                    <li id="menu-item-13" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-13 dropdown" style="height: ">
                                            <a title="Home" href="https://ovatheme.com/em4u/cart-event/">{{ __('Cart') }}</a>
                                    </li>
                                    <li id="menu-item-13" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-13 dropdown" style="height: ">
                                            <a title="Home" href="https://ovatheme.com/em4u/my-account/">{{ __('Account') }}</a>
                                    </li>
                                    <li class="li_account">
                                        <div class="ova-account">
                                            <a href="https://ovatheme.com/em4u/member-login/" class="ova_icon_open"><i class=" icon_lock-open_alt"></i></a>
                                            <a href="https://ovatheme.com/em4u/member-register/" class="ova_icon_key"><i class="icon_key_alt"></i></a>
                                        </div>
                                    </li>
                                </ul>					      
                                </div><!-- /.navbar-collapse -->
                                <div class="ova-account">
                                    <a href="https://ovatheme.com/em4u/member-login/" class="ova_icon_open"><i class=" icon_lock-open_alt"></i></a>
                                    <a href="https://ovatheme.com/em4u/member-register/" class="ova_icon_key"><i class="icon_key_alt"></i></a>
                                </div>\
                            </div> <!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>	 
            </div>
        </div>
        <!-- Background Heading -->
    </header>        
      			
    <div data-vc-parallax="1.5" data-vc-parallax-image="https://ovatheme.com/em4u/wp-content/uploads/2019/03/search_event.jpg" class="vc_row wpb_row vc_row-fluid vc_custom_1554393677789 vc_row-has-fill vc_row-o-full-height vc_row-o-columns-middle vc_row-flex vc_general vc_parallax vc_parallax-content-moving">
        <div class="patter_bg" style="background-color:" ></div>
        <div class="container container-new">
            <div class="row">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="ovaem_search_banner ovaem_search_state_city ">
                                <h2 class="search_title">{{ __('Events') }}</h2>
                                <h3 class="search_subtitle">{{ __('Find your favorite events!') }}</h3>
                                <form action="https://ovatheme.com/em4u/" method="GET" name="search_event" >
                                    <div class="ovaem_name_event">
                                        <input class="form-controll selectpicker" placeholder="{{ __('What are you looking for ?') }}" name="name_event" value="" />
                                    </div>
                                    <div class="ovaem_country">
                                        <select  name='name_country' id='name_country' class='selectpicker  postform '>
                                            <option value="" selected="selected">Todas las categorías</option>
                                            <?php
                                            $categories = Category::all();
                                            foreach ($categories as $category){
                                            ?>
                                                <option class="level-0"> {{ $category->name }} </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="ovaem_city">
                                        <select  name='name_city' id='name_city' class='selectpicker  postform '>
                                            <option value='' selected='selected'>Todas las ciudades</option>
                                            <?php
                                            $cities = City::all();
                                            foreach ($cities as $city){
                                            ?>
                                                <option class="level-0"> {{ $city->name }} </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="ovaem_cat">
                                        <select  name='cat' id='cat' class='selectpicker '>
                                            <option value='' selected='selected'>Todas las fechas</option>
                                            <?php
                                            $helds = Held::all();
                                            foreach ($helds as $held){
                                            ?>
                                                <option class="level-0"> {{ $held->date }} </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <input type="hidden" name="post_type" value="event">
                                    <input type="hidden" name="search" value="search-event">
                                    <div class="ovaem_submit">
                                        <input type="submit" value="{{ __('Search') }}" />
                                    </div>
                                </form>
                                <div class="sub_title2">{{ __('Or browse event by feature:') }}</div>
                                <div class="browser_featured">
                                    <a href="https://ovatheme.com/em4u/upcoming-event/"><i class="icon_loading"></i>{{ __('Upcoming Events') }}</a>
                                    <a href="https://ovatheme.com/em4u/featured-event/"><i class="icon_lightbulb_alt"></i>{{ __('Featured Events') }}</a>
                                    <a href="https://ovatheme.com/em4u/event/"><i class="icon_archive_alt"></i>{{ __('All events') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row wpb_row vc_row-fluid vc_custom_1554353656652">
        <div class="container container-new">
            <div class="row">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner vc_custom_1554353920950">
                        <div class="wpb_wrapper">
                            <div class="ova_heading_v4 text-center">
                                <h3 class="title">{{ __('Popular Categories') }}</h3>
                                <div class="sub_title"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $i = 0;
                $categories = DB::table('categories')
                              ->join('events', 'events.idCategory', '=', 'categories.id')
                              ->select('categories.name', DB::raw('COUNT(events.idCategory) as number'))
                              ->groupBy('categories.name', 'events.idCategory')
                              ->get();
                ?>
                @foreach ($categories as $category)
                    @if ($i < 6)
                        <div class="wpb_column vc_column_container vc_col-sm-2">
                            <div class="vc_column-inner vc_custom_1552202677727">
                                <div class="wpb_wrapper">
                                    <a href="https://ovatheme.com/em4u/?categories=business" class="cat_info "><i class="icon_bag_alt"></i>
                                        <h2 class="name">{{ $category->name }}</h2><span class="count">{{ $category->number }}</span>
                                        <?php $i++ ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1554353279090">
        <div class="container container-new">
            <div class="row">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner vc_custom_1554354170505">
                        <div class="wpb_wrapper">
                            <div class="ova_heading_v4 text-center">
                                <h3 class="title">{{ __('Most Visited Places') }}</h3>
                                <div class="sub_title">{{ __('Browse Popular Location') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $i = 0;
                $cities = DB::table('helds')
                              ->join('events', 'events.id', '=', 'helds.idEvent')
                              ->join('places', 'places.id', '=', 'helds.idPlace')
                              ->join('cities', 'cities.id', '=', 'places.idCity')
                              ->select('helds.idPlace', 'cities.name', DB::raw('COUNT(helds.idPlace) as number'))
                              ->groupBy('cities.name', 'helds.idPlace')
                              ->orderByDesc(DB::raw('COUNT(helds.idPlace)'))
                              ->get();
                ?>
                @foreach ($cities as $city)
                    @if ( $i == 0 )
                        <div class="wpb_column vc_column_container vc_col-sm-6">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="city-girds ">
                                        <div class="city-thumb">
                                            <img src="https://ovatheme.com/em4u/wp-content/uploads/2019/03/t11.jpg" class="visible hidden-xs" alt="location">
                                            <img src="https://ovatheme.com/em4u/wp-content/uploads/2019/03/HoustonSkylineTexas_m.jpg" class="hidden visible-xs" alt="location">
                                        </div>
                                        <div class="city-title text-center">
                                            <h3 class="lp-h3">
                                                <a href="https://ovatheme.com/em4u/?location=texas">{{ $city->name }}</a>
                                            </h3>
                                            <label class="lp-listing-quantity">{{ $city->number }} Events</label> <?php $i++ ?>
                                        </div>
                                        <a href="https://ovatheme.com/em4u/?location=texas" class="overlay-link"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="wpb_column vc_column_container vc_col-sm-6">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                <?php $i = 0 ?>
                                @foreach ($cities as $city)
                                    <?php $i++ ?>
                                    @if ( $i == 2 )
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="city-girds ">
                                                        <div class="city-thumb">
                                                            <img src="https://ovatheme.com/em4u/wp-content/uploads/2019/03/t22_new.jpg" class="visible hidden-xs" alt="location">
                                                            <img src="https://ovatheme.com/em4u/wp-content/uploads/2019/03/cali_m.jpg" class="hidden visible-xs" alt="location">
                                                        </div>
                                                        <div class="city-title text-center">
                                                            <h3 class="lp-h3">
                                                                <a href="https://ovatheme.com/em4u/?location=california">{{ $city->name }}</a>
                                                            </h3>
                                                            <label class="lp-listing-quantity">{{ $city->number }} Events</label> <?php $i++ ?>
                                                        </div>
                                                        <a href="https://ovatheme.com/em4u/?location=california" class="overlay-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                <?php $i = 0 ?>
                                @foreach ($cities as $city)
                                    <?php $i++ ?>
                                    @if ( $i == 3 )
                                        <div class="wpb_column vc_column_container vc_col-sm-6">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="city-girds ">
                                                        <div class="city-thumb">
                                                            <img src="https://ovatheme.com/em4u/wp-content/uploads/2019/03/t33.jpg" class="visible hidden-xs" alt="location">
                                                            <img src="https://ovatheme.com/em4u/wp-content/uploads/2019/03/los-angeles-california_m.jpg" class="hidden visible-xs" alt="location">
                                                        </div>
                                                        <div class="city-title text-center">
                                                            <h3 class="lp-h3">
                                                                <a href="https://ovatheme.com/em4u/?location=washington">{{ $city->name }}</a>
                                                            </h3>
                                                            <label class="lp-listing-quantity">{{ $city->number }} Events</label>
                                                        </div>
                                                        <a href="https://ovatheme.com/em4u/?location=washington" class="overlay-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                <?php $i = 0 ?>
                                @foreach ($cities as $city)
                                    <?php $i++ ?>
                                    @if ( $i == 4 )
                                        <div class="wpb_column vc_column_container vc_col-sm-6">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="city-girds ">
                                                        <div class="city-thumb">
                                                            <img src="https://ovatheme.com/em4u/wp-content/uploads/2019/03/t44.jpg" class="visible hidden-xs" alt="location">
                                                            <img src="https://ovatheme.com/em4u/wp-content/uploads/2019/03/frodia_m.jpg" class="hidden visible-xs" alt="location">
                                                        </div><div class="city-title text-center">
                                                            <h3 class="lp-h3">
                                                                <a href="https://ovatheme.com/em4u/?location=los-angeles">{{ $city->name }}</a>
                                                            </h3>
                                                            <label class="lp-listing-quantity">{{ $city->number }} Events</label>
                                                        </div>
                                                        <a href="https://ovatheme.com/em4u/?location=los-angeles" class="overlay-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row-full-width vc_clearfix"></div>
    <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1554353284632 vc_row-has-fill">
        <div class="container container-new">
            <div class="row">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner vc_custom_1554354202684">
                        <div class="wpb_wrapper">
                            <div class="ova_heading_v4 text-center">
                                <h3 class="title">{{ __('WHY CHOOSE US') }}</h3>
                                <div class="sub_title"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-4">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="ova_box ova-trans  styl1 ">
                                <div class="num">01</div>
                                <div class="wrap_content">
                                    <h3 class="title"><a href="#" class="ova-trans">{{ __('MULTIPLE EVENTS') }}</a></h3>
                                    <div class="desc">{{ __('You can find all your favorite events in one place') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-4">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="ova_box ova-trans  styl1 ">
                                <div class="num">02</div>
                                <div class="wrap_content">
                                    <h3 class="title"><a href="#" class="ova-trans">{{ __('LOCATION MANAGEMENT') }}</a></h3>
                                    <div class="desc">{{ __('We manage the locations to make them accessible and spacious') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-4">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="ova_box ova-trans  styl1 ">
                                <div class="num">03</div>
                                <div class="wrap_content">
                                    <h3 class="title"><a href="#" class="ova-trans">{{ __('CREDIT CARD PAYMENT') }}</a></h3>
                                    <div class="desc">{{ __('Pay with a credit card and pay in easy installments or in cash') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-4">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="ova_box ova-trans  styl1 ">
                                <div class="num">04</div>
                                <div class="wrap_content">
                                    <h3 class="title"><a href="#" class="ova-trans">{{ __('EVENT MANAGEMENT') }}</a></h3>
                                    <div class="desc">{{ __('We manage events for you to enjoy with the greatest comfort') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-4">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="ova_box ova-trans  styl1 ">
                                <div class="num">05</div>
                                <div class="wrap_content">
                                    <h3 class="title"><a href="#" class="ova-trans">{{ __('FREE REGISTRING') }}</a></h3>
                                    <div class="desc">{{ __('Register for free to find out about events in your city') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-4">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="ova_box ova-trans  styl1 ">
                                <div class="num">06</div>
                                <div class="wrap_content">
                                    <h3 class="title"><a href="#" class="ova-trans">{{ __('EASY TO USE') }}</a></h3>
                                    <div class="desc">{{ __('Intuitive platform with users, and booking tickets is an instinctive process') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row-full-width vc_clearfix"></div>
    <div class="vc_row wpb_row vc_row-fluid vc_custom_1554353291638">
        <div class="container container-new">
            <div class="row">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner vc_custom_1554354237470">
                        <div class="wpb_wrapper">
                            <div class="ova_heading_v4 text-center">
                                <h3 class="title">{{ __('FEATURED EVENTS') }}</h3>
                                <div class="sub_title">{{ __('You can choose to display Featured, Upcoming, Past Events here') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="padding_col_mobile wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner vc_custom_1554353717414">
                        <div class="wpb_wrapper">
                            <div class="ovaem_events_filter " data-order="DESC">
                                <div class="row">
                                    <div class="events_filter_hide_nav">
                                        <div class="select_cat_mobile_btn">
                                            <div class="btn_filter ova-btn ova-btn-second-color">{{ __('Select Category') }}<i class="arrow_carrot-down"></i></div>
                                            <ul class="clearfix ovaem_events_filter_nav style2" data-tab_active ="">
			                                    <li class="all current">
                                                    <a href="#" class="ova-btn ova-btn-rad-30" data-filter="*">{{ __('All') }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ovaem_events_filter_content">
                                        <?php
                                        $featuredEvents = Event::orderByDesc('value')->take(3)->get();
                                        ?>
                                        @foreach ($featuredEvents as $featuredEvent)
                                            <div class="col-md-4 col-sm-6 col-xs-6 ova-item isotope-item style2  festival">
                                                <a href="https://ovatheme.com/em4u/event/christmas-event-in-the-city/">
                                                    <div class="ova_thumbnail">
                                                        <img alt="Christmas event in the city" src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/event_festival_3-min-370x222.jpg" srcset=" https://ovatheme.com/em4u/wp-content/uploads/2017/10/event_festival_3-min-370x222.jpg 370w, https://ovatheme.com/em4u/wp-content/uploads/2017/10/event_festival_3-min-640x384.jpg 640w" sizes="(max-width: 640px) 100vw, 370px" />
                                                        <?php
                                                        $datas = DB::table('helds')->where('idEvent', '=', $featuredEvent->id)
                                                                    ->get();
                                                        foreach ($datas as $data){
                                                            list($day, $month, $year) = explode("-", date($data->date));
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
                                                            ?>
                                                            <div class="time"><span class="month">{{ $month }}</span><span class="date">{{ $day }}-{{ $year }}</span></div>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </a>
                                                <div class="wrap_content">
                                                    <h2 class="title">
                                                        <a href="https://ovatheme.com/em4u/event/christmas-event-in-the-city/">{{ $featuredEvent->name }}</a>
                                                    </h2>
                                                    <div class="except">{{ $featuredEvent->description }}</div>
                                                    <?php
                                                    $aux = '';
                                                    $string = '';
                                                    $cities = DB::table('helds')
                                                              ->join('places', 'places.id', '=', 'helds.idPlace')
                                                              ->join('cities', 'cities.id', '=', 'places.idCity')
                                                              ->where('helds.idEvent', $featuredEvent->id)
                                                              ->select('cities.name')
                                                              ->get();
                                                    foreach ($cities as $city){
                                                        if ($city->name != $aux){
                                                            $string = $string.$city->name.', ';
                                                        }
                                                        $aux = $city->name;
                                                    }
                                                    $string = substr($string, 0, -2);
                                                    ?>
                                                    <div class="venue"><span><i class="icon_pin_alt"></i></span>{{ $string }}</div>
                                                    <div class="bottom">
                                                        <div class="more_detail">
                                                            <a class="btn_link" href="https://ovatheme.com/em4u/event/christmas-event-in-the-city/"><span>{{ __('Get ticket') }}</span></a>
                                                        </div>
                                                        <span class="price"><span>{{ $featuredEvent->value }}</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="row"></div>
                                    </div>
                                    <div class="read_more">
                                        <a class="ova-btn ova-btn-rad-30 ova-btn-arrow" href="https://ovatheme.com/em4u/event/"><i class="arrow_carrot-right_alt"></i>{{ __('All events') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="1.5" data-vc-parallax-image="https://ovatheme.com/em4u/wp-content/uploads/2017/09/bg3.jpg" class="vc_row wpb_row vc_row-fluid vc_custom_1554353298112 vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving">
        <div class="patter_bg" style="background-color:rgba(0,0,0,0.56)" ></div>
        <div class="container container-new">
            <div class="row">
                <div class="wpb_column vc_column_container vc_col-sm-3">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="ovaem_skill ">
                                <div class="top">
                                    <i class="icon_group"></i>
                                    <?php
                                    $users = User::all()->count();
                                    ?>
                                    <div class="number">{{ $users }}</div>
                                </div>
                                <div class="name">{{ __('PARTICIPANT') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-3">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="ovaem_skill ">
                                <div class="top"><i class="icon_pin_alt"></i>
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
                            <div class="ovaem_skill ">
                                <div class="top"><i class="icon_globe"></i>
                                    <?php
                                    $places = Place::all()->count();
                                    ?>
                                    <div class="number">{{ $places }}</div>
                                </div>
                                <div class="name">{{ __('VENUES') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-3">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="ovaem_skill ">
                                <div class="top"><i class="icon_currency"></i>
                                    <div class="number">19</div>
                                </div>
                                <div class="name">{{ __('Sponsors') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row-full-width vc_clearfix"></div>
    <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1554353305210 vc_row-has-fill">
        <div class="container container-new">
            <div class="row">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner vc_custom_1554354271959">
                        <div class="wpb_wrapper">
                            <div class="ova_heading_v4 text-center">
                                <h3 class="title">Latest News</h3>
                                <div class="sub_title"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div  class="owl-carousel ova_blog " data-loop="true" data-auto_slider="true" data-duration="3000" data-dots="true">
                                <div class="content ova-trans">
                                    <div class="ova_media">
                                        <a href="https://ovatheme.com/em4u/how-to-make-website/" class="img_media">
                                            <img  src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/6-370x222.jpg" alt="How to make website ?" class="img-responsive" srcset=" https://ovatheme.com/em4u/wp-content/uploads/2017/10/6-370x222.jpg 1200w ,https://ovatheme.com/em4u/wp-content/uploads/2017/10/6-640x384.jpg 767w" sizes="(max-width: 600px) 100vw, 600px"  >
                                        </a>
                                        <a class="blog_link" href="https://ovatheme.com/em4u/how-to-make-website/"><i class="ova_icon icon_image"></i><i class="arrow_right"></i></a>
                                    </div>
                                    <h2 class="title"><a href="https://ovatheme.com/em4u/how-to-make-website/">How to make website ?</a></h2>
                                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodincididunt ut labore et dolore Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodincididunt</div>
                                    <div class="post-meta">
                                        <div class="post-date"><i class="icon_calendar"></i>&nbsp;<span class="day"> Oct 20, 2017</span></div>
                                        <div class="post-comment"><i class="icon_comment_alt "></i>&nbsp;0 comments</div>
                                    </div>
                                </div>
                                <div class="content ova-trans">
                                    <div class="ova_media">
                                        <a href="https://ovatheme.com/em4u/course-about-virual-video/" class="img_media">
                                            <img  src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/7-1-370x222.jpg" alt="Course about virual video" class="img-responsive" srcset=" https://ovatheme.com/em4u/wp-content/uploads/2017/10/7-1-370x222.jpg 1200w ,https://ovatheme.com/em4u/wp-content/uploads/2017/10/7-1-640x384.jpg 767w" sizes="(max-width: 600px) 100vw, 600px"  >
                                        </a>
                                        <a class="blog_link" href="https://ovatheme.com/em4u/course-about-virual-video/"><i class="ova_icon icon_image"></i><i class="arrow_right"></i></a>
                                    </div>
                                    <h2 class="title"><a href="https://ovatheme.com/em4u/course-about-virual-video/">Course about virual video</a></h2>
                                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodincididunt ut labore et dolore Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodincididunt</div>
                                    <div class="post-meta">
                                        <div class="post-date"><i class="icon_calendar"></i>&nbsp;<span class="day"> Oct 20, 2017</span></div>
                                        <div class="post-comment"><i class="icon_comment_alt "></i>&nbsp;0 comments</div>
                                    </div>
                                </div>
                                <div class="content ova-trans">
                                    <div class="ova_media">
                                        <a href="https://ovatheme.com/em4u/learn-something-new-4/" class="img_media">
                                            <img  src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/16-1-370x222.jpg" alt="How to make success business ?" class="img-responsive" srcset=" https://ovatheme.com/em4u/wp-content/uploads/2017/10/16-1-370x222.jpg 1200w ,https://ovatheme.com/em4u/wp-content/uploads/2017/10/16-1-640x384.jpg 767w" sizes="(max-width: 600px) 100vw, 600px"  >
                                        </a>
                                        <a class="blog_link" href="https://ovatheme.com/em4u/learn-something-new-4/"><i class="ova_icon icon_image"></i><i class="arrow_right"></i></a>
                                    </div>
                                    <h2 class="title"><a href="https://ovatheme.com/em4u/learn-something-new-4/">How to make success business ?</a></h2>
                                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodincididunt ut labore et dolore Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodincididunt</div>
                                    <div class="post-meta">
                                        <div class="post-date"><i class="icon_calendar"></i>&nbsp;<span class="day"> Aug 15, 2017</span></div>
                                        <div class="post-comment"><i class="icon_comment_alt "></i>&nbsp;0 comments</div>
                                    </div>
                                </div>
                                <div class="content ova-trans">
                                    <div class="ova_media">
                                        <a href="https://ovatheme.com/em4u/learn-something-new-2/" class="img_media">
                                            <img  src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/13-370x222.jpg" alt="Learn something new" class="img-responsive" srcset=" https://ovatheme.com/em4u/wp-content/uploads/2017/10/13-370x222.jpg 1200w ,https://ovatheme.com/em4u/wp-content/uploads/2017/10/13-640x384.jpg 767w" sizes="(max-width: 600px) 100vw, 600px"  >
                                        </a>
                                        <a class="blog_link" href="https://ovatheme.com/em4u/learn-something-new-2/"><i class="ova_icon icon_image"></i><i class="arrow_right"></i></a>
                                    </div>
                                    <h2 class="title"><a href="https://ovatheme.com/em4u/learn-something-new-2/">Learn something new</a></h2>
                                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodincididunt ut labore et dolore Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodincididunt</div>
                                    <div class="post-meta">
                                        <div class="post-date"><i class="icon_calendar"></i>&nbsp;<span class="day"> Jul 15, 2017</span></div>
                                        <div class="post-comment"><i class="icon_comment_alt "></i>&nbsp;0 comments</div>
                                    </div>
                                </div>
                                <div class="content ova-trans">
                                    <div class="ova_media">
                                        <a href="https://ovatheme.com/em4u/em4u-event-management/" class="img_media">
                                            <img  src="https://ovatheme.com/em4u/wp-content/uploads/2017/09/18-370x222.jpg" alt="EM4U &#8211; Event Management" class="img-responsive" srcset=" https://ovatheme.com/em4u/wp-content/uploads/2017/09/18-370x222.jpg 1200w ,https://ovatheme.com/em4u/wp-content/uploads/2017/09/18-640x384.jpg 767w" sizes="(max-width: 600px) 100vw, 600px"  >
                                        </a>
                                        <a class="blog_link" href="https://ovatheme.com/em4u/em4u-event-management/"><i class="ova_icon icon_image"></i><i class="arrow_right"></i></a>
                                    </div>
                                    <h2 class="title"><a href="https://ovatheme.com/em4u/em4u-event-management/">EM4U &#8211; Event Management</a></h2>
                                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodincididunt ut labore et dolore Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodincididunt</div>
                                    <div class="post-meta">
                                        <div class="post-date"><i class="icon_calendar"></i>&nbsp;<span class="day"> May 15, 2017</span></div>
                                        <div class="post-comment"><i class="icon_comment_alt "></i>&nbsp;0 comments</div>
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
	<footer class="footer_v1 ova-trans" style="background: url('https://ovatheme.com/em4u/wp-content/themes/em4u/assets/img/bg_footer.jpg')">
	    <div class="bg_cover"></div>
        <div class="wrap_widget">
            <div class="container">
                <div class="row">
					<div class="col-sm-4 category pd_0 pd_l_0">
						<div id="ovaem_categories_widget-1" class="widget widget_ovaem_categories_widget">
                            <h4 class="widget-title">{{ __('All Categories') }}</h4>
                            <ul class='ovaem_list_categories_widget'>
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
                                    <li class=" "><a href="#" target="_blank" rel="noopener"><i class="social_facebook"></i></a></li>
                                    <li class=" "><a href="#" target="_blank" rel="noopener"><i class="social_twitter"></i></a></li>
                                    <li class=" "><a href="#" target="_blank" rel="noopener"><i class="social_pinterest"></i></a></li>
                                    <li class=" "><a href="#" target="_blank" rel="noopener"><i class="social_tumblr"></i></a></li>
                                    <li class=" "><a href="#" target="_blank" rel="noopener"><i class="social_dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>				
                    </div>
                    <div class="col-sm-4 pd_0 logo_white">
                        <div id="media_image-1" class="widget widget_media_image">
                            <img width="127" height="45" src="https://ovatheme.com/em4u/wp-content/uploads/2017/10/logo_white.png" class="image wp-image-1852  attachment-full size-full" alt="" decoding="async" loading="lazy" style="max-width: 100%; height: auto;" />
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
</div>
		<script type="text/html" id="wpb-modifications"></script>	<script type="text/javascript">
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
	<link rel='stylesheet' id='prettyphoto-css' href='https://ovatheme.com/em4u/wp-content/plugins/js_composer/assets/lib/prettyphoto/css/prettyPhoto.min.css?ver=6.9.0' type='text/css' media='all' />
<script type='text/javascript' src='https://ovatheme.com/em4u/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.7.2' id='swv-js'></script>
<script type='text/javascript' id='contact-form-7-js-extra'>
/* <![CDATA[ */
var wpcf7 = {"api":{"root":"https:\/\/ovatheme.com\/em4u\/wp-json\/","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://ovatheme.com/em4u/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.7.2' id='contact-form-7-js'></script>
<script type='text/javascript' src='https://ovatheme.com/em4u/wp-content/plugins/ova-events-manager/assets/libs/datetimepicker/jquery.datetimepicker.full.min.js' id='datetimepicker_js-js'></script>
<script type='text/javascript' src='https://ovatheme.com/em4u/wp-content/plugins/ova-events-manager/assets/libs/validate/jquery.validate.min.js' id='validate-js'></script>
<script type='text/javascript' id='ajax-script-js-extra'>
/* <![CDATA[ */
var ajax_object = {"ajax_url":"https:\/\/ovatheme.com\/em4u\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='https://ovatheme.com/em4u/wp-content/plugins/ova-events-manager/assets/js/frontend/checkout_event.js' id='ajax-script-js'></script>
<script type='text/javascript' src='https://ovatheme.com/em4u/wp-content/plugins/ova-events-manager/assets/js/frontend/ovaem_script.js' id='ovaem_script-js'></script>
<script type='text/javascript' src='https://ovatheme.com/em4u/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.7.2.2' id='js-cookie-js'></script>
<script type='text/javascript' id='woocommerce-js-extra'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/em4u\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/em4u\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='https://ovatheme.com/em4u/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=7.2.2' id='woocommerce-js'></script>
<script type='text/javascript' id='wc-cart-fragments-js-extra'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/em4u\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/em4u\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_712c2ed180b3a56b151a834dd4a22b0e","fragment_name":"wc_fragments_712c2ed180b3a56b151a834dd4a22b0e","request_timeout":"5000"};
/* ]]> */
</script>
<script type='text/javascript' src='https://ovatheme.com/em4u/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=7.2.2' id='wc-cart-fragments-js'></script>
<script type='text/javascript' src='https://ovatheme.com/em4u/wp-content/themes/em4u/assets/plugins/bootstrap-3.3.7-dist/js/bootstrap.min.js' id='bootstrap-js'></script>
<script type='text/javascript' src='https://ovatheme.com/em4u/wp-content/themes/em4u/assets/plugins/owlcarousel2/owl.carousel.min.js' id='owlcarousel-js'></script>
<script type='text/javascript' src='https://ovatheme.com/em4u/wp-content/themes/em4u/assets/plugins/bootstrap-select/js/bootstrap-select.min.js' id='bootstrap-select-js'></script>
<script type='text/javascript' src='https://ovatheme.com/em4u/wp-content/themes/em4u/assets/plugins/jquery.nav.js' id='nav-js'></script>
<script type='text/javascript' src='https://ovatheme.com/em4u/wp-content/themes/em4u/assets/plugins/scrollto.js' id='scrollto-js'></script>
<script type='text/javascript' src='https://ovatheme.com/em4u/wp-content/themes/em4u/assets/plugins/placeholders.jquery.min.js' id='placeholders-js'></script>
<script type='text/javascript' src='https://ovatheme.com/em4u/wp-content/themes/em4u/assets/js/theme.js' id='em4u-theme-js-js'></script>
<script type='text/javascript' src='https://ovatheme.com/em4u/wp-content/plugins/ova-megamenu/assets/script.min.js' id='ova_megamenu_script-js'></script>
<script type='text/javascript' src='https://www.google.com/recaptcha/api.js?render=6LfGN7sUAAAAADiDCzM0obzuSoDLqEA-CI-owtfw&#038;ver=3.0' id='google-recaptcha-js'></script>
<script type='text/javascript' src='https://ovatheme.com/em4u/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9' id='regenerator-runtime-js'></script>
<script type='text/javascript' src='https://ovatheme.com/em4u/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script>
<script type='text/javascript' id='wpcf7-recaptcha-js-extra'>
/* <![CDATA[ */
var wpcf7_recaptcha = {"sitekey":"6LfGN7sUAAAAADiDCzM0obzuSoDLqEA-CI-owtfw","actions":{"homepage":"homepage","contactform":"contactform"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://ovatheme.com/em4u/wp-content/plugins/contact-form-7/modules/recaptcha/index.js?ver=5.7.2' id='wpcf7-recaptcha-js'></script>
<script type='text/javascript' src='https://ovatheme.com/em4u/wp-content/plugins/cubeportfolio/public/js/main.min-1.16.2.js?ver=1.16.2' id='cubeportfolio-jquery-js-js'></script>
<script type='text/javascript' id='wpb_composer_front_js-js-extra'>
/* <![CDATA[ */
var vcData = {"currentTheme":{"slug":"em4u"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://ovatheme.com/em4u/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=6.9.0' id='wpb_composer_front_js-js'></script>
<script type='text/javascript' src='https://ovatheme.com/em4u/wp-content/themes/em4u/assets/plugins/countdown/jquery.plugin.min.js' id='jquery-countdown-js'></script>
<script type='text/javascript' src='https://ovatheme.com/em4u/wp-content/themes/em4u/assets/plugins/countdown/jquery.countdown.min.js' id='countdown-js'></script>
<script type='text/javascript' src='https://ovatheme.com/em4u/wp-content/plugins/js_composer/assets/lib/bower/skrollr/dist/skrollr.min.js?ver=6.9.0' id='vc_jquery_skrollr_js-js'></script>
<script type='text/javascript' src='https://ovatheme.com/em4u/wp-content/plugins/ova-events-manager/assets/libs/isotope.pkgd.min.js' id='isotope_pkgd_min-js'></script>
<script type='text/javascript' src='https://ovatheme.com/em4u/wp-content/plugins/js_composer/assets/lib/prettyphoto/js/jquery.prettyPhoto.min.js?ver=6.9.0' id='prettyphoto-js'></script>
<script type="text/javascript">(function (undefined) {var _localizedStrings={"redirect_overlay_title":"Hold On","redirect_overlay_text":"You are being redirected to another page,<br>it may take a few seconds."};var _targetWindow="prefer-popup";var _redirectOverlay="overlay-with-spinner-and-message";
window.NSLPopup = function (url, title, w, h) {
    var userAgent = navigator.userAgent,
        mobile = function () {
            return /\b(iPhone|iP[ao]d)/.test(userAgent) ||
                /\b(iP[ao]d)/.test(userAgent) ||
                /Android/i.test(userAgent) ||
                /Mobile/i.test(userAgent);
        },
        screenX = window.screenX !== undefined ? window.screenX : window.screenLeft,
        screenY = window.screenY !== undefined ? window.screenY : window.screenTop,
        outerWidth = window.outerWidth !== undefined ? window.outerWidth : document.documentElement.clientWidth,
        outerHeight = window.outerHeight !== undefined ? window.outerHeight : document.documentElement.clientHeight - 22,
        targetWidth = mobile() ? null : w,
        targetHeight = mobile() ? null : h,
        V = screenX < 0 ? window.screen.width + screenX : screenX,
        left = parseInt(V + (outerWidth - targetWidth) / 2, 10),
        right = parseInt(screenY + (outerHeight - targetHeight) / 2.5, 10),
        features = [];
    if (targetWidth !== null) {
        features.push('width=' + targetWidth);
    }
    if (targetHeight !== null) {
        features.push('height=' + targetHeight);
    }
    features.push('left=' + left);
    features.push('top=' + right);
    features.push('scrollbars=1');

    var newWindow = window.open(url, title, features.join(','));

    if (window.focus) {
        newWindow.focus();
    }

    return newWindow;
};

var isWebView = null;

function checkWebView() {
    if (isWebView === null) {
        function _detectOS(ua) {
            if (/Android/.test(ua)) {
                return "Android";
            } else if (/iPhone|iPad|iPod/.test(ua)) {
                return "iOS";
            } else if (/Windows/.test(ua)) {
                return "Windows";
            } else if (/Mac OS X/.test(ua)) {
                return "Mac";
            } else if (/CrOS/.test(ua)) {
                return "Chrome OS";
            } else if (/Firefox/.test(ua)) {
                return "Firefox OS";
            }
            return "";
        }

        function _detectBrowser(ua) {
            var android = /Android/.test(ua);

            if (/Opera Mini/.test(ua) || / OPR/.test(ua) || / OPT/.test(ua)) {
                return "Opera";
            } else if (/CriOS/.test(ua)) {
                return "Chrome for iOS";
            } else if (/Edge/.test(ua)) {
                return "Edge";
            } else if (android && /Silk\//.test(ua)) {
                return "Silk";
            } else if (/Chrome/.test(ua)) {
                return "Chrome";
            } else if (/Firefox/.test(ua)) {
                return "Firefox";
            } else if (android) {
                return "AOSP";
            } else if (/MSIE|Trident/.test(ua)) {
                return "IE";
            } else if (/Safari\//.test(ua)) {
                return "Safari";
            } else if (/AppleWebKit/.test(ua)) {
                return "WebKit";
            }
            return "";
        }

        function _detectBrowserVersion(ua, browser) {
            if (browser === "Opera") {
                return /Opera Mini/.test(ua) ? _getVersion(ua, "Opera Mini/") :
                    / OPR/.test(ua) ? _getVersion(ua, " OPR/") :
                        _getVersion(ua, " OPT/");
            } else if (browser === "Chrome for iOS") {
                return _getVersion(ua, "CriOS/");
            } else if (browser === "Edge") {
                return _getVersion(ua, "Edge/");
            } else if (browser === "Chrome") {
                return _getVersion(ua, "Chrome/");
            } else if (browser === "Firefox") {
                return _getVersion(ua, "Firefox/");
            } else if (browser === "Silk") {
                return _getVersion(ua, "Silk/");
            } else if (browser === "AOSP") {
                return _getVersion(ua, "Version/");
            } else if (browser === "IE") {
                return /IEMobile/.test(ua) ? _getVersion(ua, "IEMobile/") :
                    /MSIE/.test(ua) ? _getVersion(ua, "MSIE ")
                        :
                        _getVersion(ua, "rv:");
            } else if (browser === "Safari") {
                return _getVersion(ua, "Version/");
            } else if (browser === "WebKit") {
                return _getVersion(ua, "WebKit/");
            }
            return "0.0.0";
        }

        function _getVersion(ua, token) {
            try {
                return _normalizeSemverString(ua.split(token)[1].trim().split(/[^\w\.]/)[0]);
            } catch (o_O) {
            }
            return "0.0.0";
        }

        function _normalizeSemverString(version) {
            var ary = version.split(/[\._]/);
            return (parseInt(ary[0], 10) || 0) + "." +
                (parseInt(ary[1], 10) || 0) + "." +
                (parseInt(ary[2], 10) || 0);
        }

        function _isWebView(ua, os, browser, version, options) {
            switch (os + browser) {
                case "iOSSafari":
                    return false;
                case "iOSWebKit":
                    return _isWebView_iOS(options);
                case "AndroidAOSP":
                    return false;
                case "AndroidChrome":
                    return parseFloat(version) >= 42 ? /; wv/.test(ua) : /\d{2}\.0\.0/.test(version) ? true : _isWebView_Android(options);
            }
            return false;
        }

        function _isWebView_iOS(options) {
            var document = (window["document"] || {});

            if ("WEB_VIEW" in options) {
                return options["WEB_VIEW"];
            }
            return !("fullscreenEnabled" in document || "webkitFullscreenEnabled" in document || false);
        }

        function _isWebView_Android(options) {
            if ("WEB_VIEW" in options) {
                return options["WEB_VIEW"];
            }
            return !("requestFileSystem" in window || "webkitRequestFileSystem" in window || false);
        }

        var options = {};
        var nav = window.navigator || {};
        var ua = nav.userAgent || "";
        var os = _detectOS(ua);
        var browser = _detectBrowser(ua);
        var browserVersion = _detectBrowserVersion(ua, browser);

        isWebView = _isWebView(ua, os, browser, browserVersion, options);
    }

    return isWebView;
}

function isAllowedWebViewForUserAgent(provider) {
    var facebookAllowedWebViews = [
        'Instagram',
        'FBAV',
        'FBAN'
    ], whitelist = [];

    if (provider && provider === 'facebook') {
        whitelist = facebookAllowedWebViews;
    }

    var nav = window.navigator || {};
    var ua = nav.userAgent || "";

    if (whitelist.length && ua.match(new RegExp(whitelist.join('|')))) {
        return true;
    }

    return false;
}

window._nslDOMReady(function () {

    window.nslRedirect = function (url) {
        if (_redirectOverlay) {
            var overlay = document.createElement('div');
            overlay.id = "nsl-redirect-overlay";
            var overlayHTML = '',
                overlayContainer = "<div id='nsl-redirect-overlay-container'>",
                overlayContainerClose = "</div>",
                overlaySpinner = "<div id='nsl-redirect-overlay-spinner'></div>",
                overlayTitle = "<p id='nsl-redirect-overlay-title'>" + _localizedStrings.redirect_overlay_title + "</p>",
                overlayText = "<p id='nsl-redirect-overlay-text'>" + _localizedStrings.redirect_overlay_text + "</p>";

            switch (_redirectOverlay) {
                case "overlay-only":
                    break;
                case "overlay-with-spinner":
                    overlayHTML = overlayContainer + overlaySpinner + overlayContainerClose;
                    break;
                default:
                    overlayHTML = overlayContainer + overlaySpinner + overlayTitle + overlayText + overlayContainerClose;
                    break;
            }

            overlay.insertAdjacentHTML("afterbegin", overlayHTML);
            document.body.appendChild(overlay);
        }

        window.location = url;
    };

    var targetWindow = _targetWindow || 'prefer-popup',
        lastPopup = false;


    var buttonLinks = document.querySelectorAll(' a[data-plugin="nsl"][data-action="connect"], a[data-plugin="nsl"][data-action="link"]');
    buttonLinks.forEach(function (buttonLink) {
        buttonLink.addEventListener('click', function (e) {
            if (lastPopup && !lastPopup.closed) {
                e.preventDefault();
                lastPopup.focus();
            } else {

                var href = this.href,
                    success = false;
                if (href.indexOf('?') !== -1) {
                    href += '&';
                } else {
                    href += '?';
                }

                var redirectTo = this.dataset.redirect;
                if (redirectTo === 'current') {
                    href += 'redirect=' + encodeURIComponent(window.location.href) + '&';
                } else if (redirectTo && redirectTo !== '') {
                    href += 'redirect=' + encodeURIComponent(redirectTo) + '&';
                }

                if (targetWindow !== 'prefer-same-window' && checkWebView()) {
                    targetWindow = 'prefer-same-window';
                }

                if (targetWindow === 'prefer-popup') {
                    lastPopup = NSLPopup(href + 'display=popup', 'nsl-social-connect', this.dataset.popupwidth, this.dataset.popupheight);
                    if (lastPopup) {
                        success = true;
                        e.preventDefault();
                    }
                } else if (targetWindow === 'prefer-new-tab') {
                    var newTab = window.open(href + 'display=popup', '_blank');
                    if (newTab) {
                        if (window.focus) {
                            newTab.focus();
                        }
                        success = true;
                        e.preventDefault();
                    }
                }

                if (!success) {
                    window.location = href;
                    e.preventDefault();
                }
            }
        });
    });

    let hasWebViewLimitation = false;

    var googleLoginButtons = document.querySelectorAll(' a[data-plugin="nsl"][data-provider="google"]');
    if (googleLoginButtons.length && checkWebView()) {
        googleLoginButtons.forEach(function (googleLoginButton) {
            googleLoginButton.remove();
            hasWebViewLimitation = true;
        });
    }

    var facebookLoginButtons = document.querySelectorAll(' a[data-plugin="nsl"][data-provider="facebook"]');
    if (facebookLoginButtons.length && checkWebView() && /Android/.test(window.navigator.userAgent) && !isAllowedWebViewForUserAgent('facebook')) {
        facebookLoginButtons.forEach(function (facebookLoginButton) {
            facebookLoginButton.remove();
            hasWebViewLimitation = true;
        });
    }


    const separators = document.querySelectorAll('div.nsl-separator');
    if (hasWebViewLimitation && separators.length) {
        separators.forEach(function (separator) {
            let separatorParentNode = separator.parentNode;
            if (separatorParentNode) {
                const separatorButtonContainer = separatorParentNode.querySelector('div.nsl-container-buttons');
                if (separatorButtonContainer && !separatorButtonContainer.hasChildNodes()) {
                    separator.remove();
                }
            }
        })
    }
});})();</script>	</body>
</html>