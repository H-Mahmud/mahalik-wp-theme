<?php get_header('checkout'); ?>

<style>
    :root {
        --color-primary: #821b52;
        --main-color: #8f285f;
        --color-primary-l: #ffa7de;
        --color-primary-t: #b54e85;
        --color-primary-d: #750e45;
        ;
        --color-text-reverse: #0f0000;
        --color-title: #444;
        --color-primary-tt: #0f0000
    }
</style>


<div id="app" class="container container--margined">
    <div class="row">
        <div id="payment_process" class="col-md-9 col-sm-12" style="display: block;">
            <main class="sections-wrapper">
                <!--  -->
                <header class="store-info">
                    <div class="d-flex">
                        <div class="store-info__logo">
                            <a href="<?php echo home_url();  ?>">
                                <?php
                                $custom_logo_id = get_theme_mod('custom_logo');
                                $logo_info = wp_get_attachment_image_src($custom_logo_id, 'full');
                                if ($logo_info) {
                                    $logo_url = $logo_info[0];
                                    echo '<img src="' . esc_url($logo_url) . '" alt="' . get_bloginfo('name') . '" />';
                                }
                                ?>
                            </a>
                        </div>
                        <div class="store-info__detail">
                            <h1><?php _e('Well Come', 'mahalik'); ?> <?php
                                                                        $user = wp_get_current_user();
                                                                        echo $user->display_name;
                                                                        ?> </h1>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>" target="_blank"><?php echo bloginfo('name'); ?></a></li>
                                <li class="breadcrumb-item">
                                    <a href="<?php
                                                $cart_id = wc_get_page_id('cart');
                                                echo get_the_permalink($cart_id);
                                                ?>" target="_blank">
                                        <?php _e('Cart', 'mahalik'); ?>
                                    </a>
                                </li>
                                <li class="breadcrumb-item"><?php _e('Complete the application', 'mahalik'); ?></li>
                            </ul>
                        </div>
                    </div>
                </header>
                <!--  -->
                <div class="section section--payment">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="shipping_step" class="payment-step">
                                <div data-step="1" class="title title--step">
                                    <img src="<?php echo get_theme_file_uri('/assets/images/checkout/step-shipping.svg'); ?>" />
                                    <h3><?php _e('Shipping & Delivery', 'mahalik'); ?></h3>
                                </div>
                            </div>
                            <!--  -->
                            <div id="shipping_method_fields">
                                <span>
                                    <span>
                                        <form id="shipping_form" class="form form--options-edit">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="shipping-address-redirect">
                                                        <div id="addresses">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="title title--small title--smaller">
                                                                        <?php if (wc_ship_to_billing_address_only() && WC()->cart->needs_shipping()) : ?>

                                                                            <h2><?php esc_html_e('Billing &amp; Shipping', 'woocommerce'); ?></h2>

                                                                        <?php else : ?>

                                                                            <h2><?php esc_html_e('Billing details', 'woocommerce'); ?></h2>

                                                                        <?php endif; ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-center alert alert-info"><?php _e('For international shipping, the shipping address must be written in English', 'mahalik'); ?></p>
                                            <span>
                                                <form id="national_address_form">
                                                    <div id="shipping_fields_wrapper">
                                                        <div>
                                                            <!-- <div id="address_options" class="tabs-head">
                                                                <button id="map_location_toggle" type="button" class="btn btn--default btn--round btn--with-icon">
                                                                    <i class="sicon-location-target"></i>
                                                                    Select your address from the map
                                                                </button>
                                                            </div> -->


                                                            <?php do_action('woocommerce_checkout_billing'); ?>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <span>
                                                                        <fieldset class="form-group">
                                                                            <label _msttexthash="235495" _msthash="11" style="direction: ltr; text-align: left;">Select Country</label>
                                                                            <div class="ui selection find compact dropdown" tabindex="0">
                                                                                <input type="hidden" name="country" value="566146469" />
                                                                                <span class="text" _msttexthash="29640" _msthash="12" style="direction: ltr; text-align: left;">Uae</span> <i class="dropdown icon"></i>
                                                                                <div class="menu transition hidden" tabindex="-1" _mstvisible="0">
                                                                                    <div class="search input" _mstvisible="1">
                                                                                        <i class="sicon-search" _mstvisible="2"></i>
                                                                                        <input type="text" placeholder="Search for Country" class="form-control" _mstplaceholder="3100565" _msthash="13" _mstvisible="2" style="direction: ltr; text-align: left;" />
                                                                                    </div>
                                                                                    <div class="scrolling" _mstvisible="1">
                                                                                        <div data-value="1473353380" class="item" _msttexthash="168792" _msthash="14" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Saudi Arabia
                                                                                        </div>
                                                                                        <div data-value="566146469" class="item active selected" _msttexthash="29640" _msthash="15" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Uae
                                                                                        </div>
                                                                                        <div data-value="1939592358" class="item" _msttexthash="78637" _msthash="16" _mstvisible="2" style="direction: ltr; text-align: left;">Kuwait</div>
                                                                                        <div data-value="1298199463" class="item" _msttexthash="59943" _msthash="17" _mstvisible="2" style="direction: ltr; text-align: left;">Qatar</div>
                                                                                        <div data-value="525144736" class="item" _msttexthash="91923" _msthash="18" _mstvisible="2" style="direction: ltr; text-align: left;">Bahrain</div>
                                                                                        <div data-value="1764372897" class="item" _msttexthash="44538" _msthash="19" _mstvisible="2" style="direction: ltr; text-align: left;">Iraq</div>
                                                                                        <div data-value="989286562" class="item" _msttexthash="44174" _msthash="20" _mstvisible="2" style="direction: ltr; text-align: left;">Oman</div>
                                                                                        <div data-value="349994915" class="item" _msttexthash="60216" _msthash="21" _mstvisible="2" style="direction: ltr; text-align: left;">Yemen</div>
                                                                                        <div data-value="1723506348" class="item" _msttexthash="62296" _msthash="22" _mstvisible="2" style="direction: ltr; text-align: left;">Egypt</div>
                                                                                        <div data-value="814202285" class="item" _msttexthash="59761" _msthash="23" _mstvisible="2" style="direction: ltr; text-align: left;">Sudan</div>
                                                                                        <div data-value="40688814" class="item" _msttexthash="58903" _msthash="24" _mstvisible="2" style="direction: ltr; text-align: left;">Libya</div>
                                                                                        <div data-value="1548352431" class="item" _msttexthash="91403" _msthash="25" _mstvisible="2" style="direction: ltr; text-align: left;">Algeria</div>
                                                                                        <div data-value="773200552" class="item" _msttexthash="95550" _msthash="26" _mstvisible="2" style="direction: ltr; text-align: left;">Tunisia</div>
                                                                                        <div data-value="2079537577" class="item" _msttexthash="94679" _msthash="27" _mstvisible="2" style="direction: ltr; text-align: left;">Morocco</div>
                                                                                        <div data-value="1440241834" class="item" _msttexthash="60996" _msthash="28" _mstvisible="2" style="direction: ltr; text-align: left;">Syria</div>
                                                                                        <div data-value="665151403" class="item" _msttexthash="135135" _msthash="29" _mstvisible="2" style="direction: ltr; text-align: left;">Palestine</div>
                                                                                        <div data-value="1130931637" class="item" _msttexthash="93132" _msthash="30" _mstvisible="2" style="direction: ltr; text-align: left;">Lebanon</div>
                                                                                        <div data-value="490063030" class="item" _msttexthash="58071" _msthash="31" _mstvisible="2" style="direction: ltr; text-align: left;">Aruba</div>
                                                                                        <div data-value="1863508919" class="item" _msttexthash="134329" _msthash="32" _mstvisible="2" style="direction: ltr; text-align: left;">Australia</div>
                                                                                        <div data-value="956236464" class="item" _msttexthash="178906" _msthash="33" _mstvisible="2" style="direction: ltr; text-align: left;">Afghanistan</div>
                                                                                        <div data-value="180625841" class="item" _msttexthash="89726" _msthash="34" _mstvisible="2" style="direction: ltr; text-align: left;">Albania</div>
                                                                                        <div data-value="1688289458" class="item" _msttexthash="95953" _msthash="35" _mstvisible="2" style="direction: ltr; text-align: left;">Germany</div>
                                                                                        <div data-value="915304371" class="item" _msttexthash="334321" _msthash="36" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Antigua and Barbuda
                                                                                        </div>
                                                                                        <div data-value="5541564" class="item" _msttexthash="93964" _msthash="37" _mstvisible="2" style="direction: ltr; text-align: left;">Andorra</div>
                                                                                        <div data-value="1378987453" class="item" _msttexthash="74412" _msthash="38" _mstvisible="2" style="direction: ltr; text-align: left;">Angola</div>
                                                                                        <div data-value="740215998" class="item" _msttexthash="112385" _msthash="39" _mstvisible="2" style="direction: ltr; text-align: left;">Anguilla</div>
                                                                                        <div data-value="2046553023" class="item" _msttexthash="98982" _msthash="40" _mstvisible="2" style="direction: ltr; text-align: left;">Uruguay</div>
                                                                                        <div data-value="1270876856" class="item" _msttexthash="159042" _msthash="41" _mstvisible="2" style="direction: ltr; text-align: left;">Uzbekistan</div>
                                                                                        <div data-value="632105401" class="item" _msttexthash="73528" _msthash="42" _mstvisible="2" style="direction: ltr; text-align: left;">Uganda</div>
                                                                                        <div data-value="2005551290" class="item" _msttexthash="94055" _msthash="43" _mstvisible="2" style="direction: ltr; text-align: left;">Ukraine</div>
                                                                                        <div data-value="1096243131" class="item" _msttexthash="92287" _msthash="44" _mstvisible="2" style="direction: ltr; text-align: left;">Ireland</div>
                                                                                        <div data-value="322729604" class="item" _msttexthash="90727" _msthash="45" _mstvisible="2" style="direction: ltr; text-align: left;">Iceland</div>
                                                                                        <div data-value="1830458757" class="item" _msttexthash="112905" _msthash="46" _mstvisible="2" style="direction: ltr; text-align: left;">Ethiopia</div>
                                                                                        <div data-value="1055372422" class="item" _msttexthash="93951" _msthash="47" _mstvisible="2" style="direction: ltr; text-align: left;">Eritrea</div>
                                                                                        <div data-value="147641223" class="item" _msttexthash="59930" _msthash="48" _mstvisible="2" style="direction: ltr; text-align: left;">Spain</div>
                                                                                        <div data-value="1521087104" class="item" _msttexthash="94744" _msthash="49" _mstvisible="2" style="direction: ltr; text-align: left;">Estonia</div>
                                                                                        <div data-value="880152961" class="item" _msttexthash="133159" _msthash="50" _mstvisible="2" style="direction: ltr; text-align: left;">Indonesia</div>
                                                                                        <div data-value="106115202" class="item" _msttexthash="44148" _msthash="51" _mstvisible="2" style="direction: ltr; text-align: left;">Iran</div>
                                                                                        <div data-value="1345871747" class="item" _msttexthash="61399" _msthash="52" _mstvisible="2" style="direction: ltr; text-align: left;">Italy</div>
                                                                                        <div data-value="570785420" class="item" _msttexthash="344110" _msthash="53" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Occupied Palestine
                                                                                        </div>
                                                                                        <div data-value="2145623437" class="item" _msttexthash="133458" _msthash="54" _mstvisible="2" style="direction: ltr; text-align: left;">Argentina</div>
                                                                                        <div data-value="1237892238" class="item" _msttexthash="75647" _msthash="55" _mstvisible="2" style="direction: ltr; text-align: left;">Jordan</div>
                                                                                        <div data-value="462805903" class="item" _msttexthash="93756" _msthash="56" _mstvisible="2" style="direction: ltr; text-align: left;">Ecuador</div>
                                                                                        <div data-value="1970469512" class="item" _msttexthash="76934" _msthash="57" _mstvisible="2" style="direction: ltr; text-align: left;">Brazil</div>
                                                                                        <div data-value="1197414793" class="item" _msttexthash="116090" _msthash="58" _mstvisible="2" style="direction: ltr; text-align: left;">Portugal</div>
                                                                                        <div data-value="287586442" class="item" _msttexthash="91026" _msthash="59" _mstvisible="2" style="direction: ltr; text-align: left;">Bahamas</div>
                                                                                        <div data-value="1661028235" class="item" _msttexthash="448175" _msthash="60" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Bosnia and Herzegovina
                                                                                        </div>
                                                                                        <div data-value="1022256788" class="item" _msttexthash="58175" _msthash="61" _mstvisible="2" style="direction: ltr; text-align: left;">Gabon</div>
                                                                                        <div data-value="246711701" class="item" _msttexthash="159237" _msthash="62" _mstvisible="2" style="direction: ltr; text-align: left;">Montenegro</div>
                                                                                        <div data-value="1485939862" class="item" _msttexthash="93470" _msthash="63" _mstvisible="2" style="direction: ltr; text-align: left;">Denmark</div>
                                                                                        <div data-value="712950679" class="item" _msttexthash="127634" _msthash="64" _mstvisible="2" style="direction: ltr; text-align: left;">Cape Verde</div>
                                                                                        <div data-value="73130640" class="item" _msttexthash="153634" _msthash="65" _mstvisible="2" style="direction: ltr; text-align: left;">El Salvador</div>
                                                                                        <div data-value="1444938129" class="item" _msttexthash="92170" _msthash="66" _mstvisible="2" style="direction: ltr; text-align: left;">Senegal</div>
                                                                                        <div data-value="537731218" class="item" _msttexthash="76349" _msthash="67" _mstvisible="2" style="direction: ltr; text-align: left;">Sweden</div>
                                                                                        <div data-value="2112507795" class="item" _msttexthash="92677" _msthash="68" _mstvisible="2" style="direction: ltr; text-align: left;">Somalia</div>
                                                                                        <div data-value="1337421468" class="item" _msttexthash="57369" _msthash="69" _mstvisible="2" style="direction: ltr; text-align: left;">China</div>
                                                                                        <div data-value="429755805" class="item" _msttexthash="182819" _msthash="70" _mstvisible="2" style="direction: ltr; text-align: left;">Philippines</div>
                                                                                        <div data-value="1803201694" class="item" _msttexthash="114465" _msthash="71" _mstvisible="2" style="direction: ltr; text-align: left;">Cameroon</div>
                                                                                        <div data-value="1162333087" class="item" _msttexthash="339664" _msthash="72" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Congo - Brazzaville
                                                                                        </div>
                                                                                        <div data-value="388819608" class="item" _msttexthash="243256" _msthash="73" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Congo - Kinshasa
                                                                                        </div>
                                                                                        <div data-value="1627982233" class="item" _msttexthash="76674" _msthash="74" _mstvisible="2" style="direction: ltr; text-align: left;">Mexico</div>
                                                                                        <div data-value="852895898" class="item" _msttexthash="94068" _msthash="75" _mstvisible="2" style="direction: ltr; text-align: left;">Britain</div>
                                                                                        <div data-value="213071771" class="item" _msttexthash="80197" _msthash="76" _mstvisible="2" style="direction: ltr; text-align: left;">Norway</div>
                                                                                        <div data-value="1587042020" class="item" _msttexthash="95693" _msthash="77" _mstvisible="2" style="direction: ltr; text-align: left;">Austria</div>
                                                                                        <div data-value="677737957" class="item" _msttexthash="59501" _msthash="78" _mstvisible="2" style="direction: ltr; text-align: left;">Niger</div>
                                                                                        <div data-value="2051249382" class="item" _msttexthash="57304" _msthash="79" _mstvisible="2" style="direction: ltr; text-align: left;">India</div>
                                                                                        <div data-value="1411953639" class="item" _msttexthash="90740" _msthash="80" _mstvisible="2" style="direction: ltr; text-align: left;">America</div>
                                                                                        <div data-value="569758432" class="item" _msttexthash="58266" _msthash="81" _mstvisible="2" style="direction: ltr; text-align: left;">Japan</div>
                                                                                        <div data-value="1943204321" class="item" _msttexthash="73177" _msthash="82" _mstvisible="2" style="direction: ltr; text-align: left;">Greece</div>
                                                                                        <div data-value="1304367330" class="item" _msttexthash="247741" _msthash="83" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Papua New Guinea
                                                                                        </div>
                                                                                        <div data-value="528760803" class="item" _msttexthash="114712" _msthash="84" _mstvisible="2" style="direction: ltr; text-align: left;">Paraguay</div>
                                                                                        <div data-value="1767988972" class="item" _msttexthash="114491" _msthash="85" _mstvisible="2" style="direction: ltr; text-align: left;">Pakistan</div>
                                                                                        <div data-value="994999789" class="item" _msttexthash="114465" _msthash="86" _mstvisible="2" style="direction: ltr; text-align: left;">Botswana</div>
                                                                                        <div data-value="353672430" class="item" _msttexthash="111332" _msthash="87" _mstvisible="2" style="direction: ltr; text-align: left;">Barbados</div>
                                                                                        <div data-value="1727118319" class="item" _msttexthash="92742" _msthash="88" _mstvisible="2" style="direction: ltr; text-align: left;">Bermuda</div>
                                                                                        <div data-value="819911400" class="item" _msttexthash="76674" _msthash="89" _mstvisible="2" style="direction: ltr; text-align: left;">Brunei</div>
                                                                                        <div data-value="45873641" class="item" _msttexthash="94224" _msthash="90" _mstvisible="2" style="direction: ltr; text-align: left;">Belgium</div>
                                                                                        <div data-value="1551898858" class="item" _msttexthash="111254" _msthash="91" _mstvisible="2" style="direction: ltr; text-align: left;">Bulgaria</div>
                                                                                        <div data-value="778905579" class="item" _msttexthash="75998" _msthash="92" _mstvisible="2" style="direction: ltr; text-align: left;">Belize</div>
                                                                                        <div data-value="2018133748" class="item" _msttexthash="152269" _msthash="93" _mstvisible="2" style="direction: ltr; text-align: left;">Bangladesh</div>
                                                                                        <div data-value="1243047413" class="item" _msttexthash="73567" _msthash="94" _mstvisible="2" style="direction: ltr; text-align: left;">Panama</div>
                                                                                        <div data-value="670926070" class="item" _msttexthash="58760" _msthash="95" _mstvisible="2" style="direction: ltr; text-align: left;">Benin</div>
                                                                                        <div data-value="1910154231" class="item" _msttexthash="76622" _msthash="96" _mstvisible="2" style="direction: ltr; text-align: left;">Bhutan</div>
                                                                                        <div data-value="1135067888" class="item" _msttexthash="155350" _msthash="97" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Puerto Rico
                                                                                        </div>
                                                                                        <div data-value="495772145" class="item" _msttexthash="174096" _msthash="98" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Burkina Faso
                                                                                        </div>
                                                                                        <div data-value="1869152498" class="item" _msttexthash="95797" _msthash="99" _mstvisible="2" style="direction: ltr; text-align: left;">Burundi</div>
                                                                                        <div data-value="959852531" class="item" _msttexthash="75400" _msthash="100" _mstvisible="2" style="direction: ltr; text-align: left;">Poland</div>
                                                                                        <div data-value="185814780" class="item" _msttexthash="93483" _msthash="101" _mstvisible="2" style="direction: ltr; text-align: left;">Bolivia</div>
                                                                                        <div data-value="1694002685" class="item" _msttexthash="284804" _msthash="102" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            French Polynesia
                                                                                        </div>
                                                                                        <div data-value="918981886" class="item" _msttexthash="46332" _msthash="103" _mstvisible="2" style="direction: ltr; text-align: left;">Peru</div>
                                                                                        <div data-value="10726399" class="item" _msttexthash="95745" _msthash="104" _mstvisible="2" style="direction: ltr; text-align: left;">Belarus</div>
                                                                                        <div data-value="1384696568" class="item" _msttexthash="110825" _msthash="105" _mstvisible="2" style="direction: ltr; text-align: left;">Thailand</div>
                                                                                        <div data-value="743827961" class="item" _msttexthash="76518" _msthash="106" _mstvisible="2" style="direction: ltr; text-align: left;">Taiwan</div>
                                                                                        <div data-value="2117208314" class="item" _msttexthash="209833" _msthash="107" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Turkmenistan
                                                                                        </div>
                                                                                        <div data-value="1209997307" class="item" _msttexthash="80379" _msthash="108" _mstvisible="2" style="direction: ltr; text-align: left;">Turkey</div>
                                                                                        <div data-value="635713220" class="item" _msttexthash="336869" _msthash="109" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Trinidad and Tobago
                                                                                        </div>
                                                                                        <div data-value="2009159109" class="item" _msttexthash="41262" _msthash="110" _mstvisible="2" style="direction: ltr; text-align: left;">Chad</div>
                                                                                        <div data-value="1101952198" class="item" _msttexthash="57681" _msthash="111" _mstvisible="2" style="direction: ltr; text-align: left;">Chile</div>
                                                                                        <div data-value="326407111" class="item" _msttexthash="112892" _msthash="112" _mstvisible="2" style="direction: ltr; text-align: left;">Tanzania</div>
                                                                                        <div data-value="1834070720" class="item" _msttexthash="45669" _msthash="113" _mstvisible="2" style="direction: ltr; text-align: left;">Togo</div>
                                                                                        <div data-value="1061081537" class="item" _msttexthash="79924" _msthash="114" _mstvisible="2" style="direction: ltr; text-align: left;">Tuvalu</div>
                                                                                        <div data-value="152826050" class="item" _msttexthash="59319" _msthash="115" _mstvisible="2" style="direction: ltr; text-align: left;">Tonga</div>
                                                                                        <div data-value="1524637635" class="item" _msttexthash="134147" _msthash="116" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            East Timor
                                                                                        </div>
                                                                                        <div data-value="885866188" class="item" _msttexthash="89037" _msthash="117" _mstvisible="2" style="direction: ltr; text-align: left;">Jamaica</div>
                                                                                        <div data-value="111828429" class="item" _msttexthash="133874" _msthash="118" _mstvisible="2" style="direction: ltr; text-align: left;">Gibraltar</div>
                                                                                        <div data-value="1350008014" class="item" _msttexthash="97877" _msthash="119" _mstvisible="2" style="direction: ltr; text-align: left;">Comoros</div>
                                                                                        <div data-value="576560079" class="item" _msttexthash="226161" _msthash="120" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Cayman Islands
                                                                                        </div>
                                                                                        <div data-value="2084223688" class="item" _msttexthash="114153" _msthash="121" _mstvisible="2" style="direction: ltr; text-align: left;">Maldives</div>
                                                                                        <div data-value="1309137353" class="item" _msttexthash="477646" _msthash="122" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Turks and Caicos Islands
                                                                                        </div>
                                                                                        <div data-value="468515018" class="item" _msttexthash="257608" _msthash="123" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Solomon Islands
                                                                                        </div>
                                                                                        <div data-value="1976109003" class="item" _msttexthash="199953" _msthash="124" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Faroe Islands
                                                                                        </div>
                                                                                        <div data-value="1201022676" class="item" _msttexthash="326209" _msthash="125" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            U.S. Virgin Islands
                                                                                        </div>
                                                                                        <div data-value="292767189" class="item" _msttexthash="446056" _msthash="126" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            British Virgin Islands
                                                                                        </div>
                                                                                        <div data-value="1666737366" class="item" _msttexthash="279656" _msthash="127" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Falkland Islands
                                                                                        </div>
                                                                                        <div data-value="1025934295" class="item" _msttexthash="176488" _msthash="128" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Cook Islands
                                                                                        </div>
                                                                                        <div data-value="251896528" class="item" _msttexthash="515593" _msthash="129" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Northern Mariana Islands
                                                                                        </div>
                                                                                        <div data-value="1491648977" class="item" _msttexthash="128271" _msthash="130" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Isle of Man
                                                                                        </div>
                                                                                        <div data-value="716562642" class="item" _msttexthash="226096" _msthash="131" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Norfolk Island
                                                                                        </div>
                                                                                        <div data-value="76681171" class="item" _msttexthash="511108" _msthash="132" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Central African Republic
                                                                                        </div>
                                                                                        <div data-value="1451175644" class="item" _msttexthash="224679" _msthash="133" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Czech Republic
                                                                                        </div>
                                                                                        <div data-value="541347293" class="item" _msttexthash="341159" _msthash="134" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Dominican Republic
                                                                                        </div>
                                                                                        <div data-value="1914793182" class="item" _msttexthash="173368" _msthash="135" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            South Africa
                                                                                        </div>
                                                                                        <div data-value="1276087263" class="item" _msttexthash="155454" _msthash="136" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            South Sudan
                                                                                        </div>
                                                                                        <div data-value="433367768" class="item" _msttexthash="92274" _msthash="137" _mstvisible="2" style="direction: ltr; text-align: left;">Georgia</div>
                                                                                        <div data-value="1806813657" class="item" _msttexthash="115076" _msthash="138" _mstvisible="2" style="direction: ltr; text-align: left;">Djibouti</div>
                                                                                        <div data-value="1168042202" class="item" _msttexthash="78845" _msthash="139" _mstvisible="2" style="direction: ltr; text-align: left;">Jersey</div>
                                                                                        <div data-value="394000347" class="item" _msttexthash="110630" _msthash="140" _mstvisible="2" style="direction: ltr; text-align: left;">Dominica</div>
                                                                                        <div data-value="1631589924" class="item" _msttexthash="74919" _msthash="141" _mstvisible="2" style="direction: ltr; text-align: left;">Rwanda</div>
                                                                                        <div data-value="858600741" class="item" _msttexthash="78182" _msthash="142" _mstvisible="2" style="direction: ltr; text-align: left;">Russia</div>
                                                                                        <div data-value="218780710" class="item" _msttexthash="92872" _msthash="143" _mstvisible="2" style="direction: ltr; text-align: left;">Romania</div>
                                                                                        <div data-value="1591178023" class="item" _msttexthash="96876" _msthash="144" _mstvisible="2" style="direction: ltr; text-align: left;">Reunion</div>
                                                                                        <div data-value="683512352" class="item" _msttexthash="73918" _msthash="145" _mstvisible="2" style="direction: ltr; text-align: left;">Zambia</div>
                                                                                        <div data-value="2056958241" class="item" _msttexthash="112255" _msthash="146" _mstvisible="2" style="direction: ltr; text-align: left;">Zimbabwe</div>
                                                                                        <div data-value="1416089634" class="item" _msttexthash="157443" _msthash="147" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Ivory Coast
                                                                                        </div>
                                                                                        <div data-value="642580259" class="item" _msttexthash="58695" _msthash="148" _mstvisible="2" style="direction: ltr; text-align: left;">Samoa</div>
                                                                                        <div data-value="1881742892" class="item" _msttexthash="221143" _msthash="149" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            American Samoa
                                                                                        </div>
                                                                                        <div data-value="1307983149" class="item" _msttexthash="131586" _msthash="150" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            San Marino
                                                                                        </div>
                                                                                        <div data-value="533945390" class="item" _msttexthash="774306" _msthash="151" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Saint Vincent and the Grenadines
                                                                                        </div>
                                                                                        <div data-value="1773697839" class="item" _msttexthash="378664" _msthash="152" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Saint Kitts and Nevis
                                                                                        </div>
                                                                                        <div data-value="998677032" class="item" _msttexthash="151112" _msthash="153" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Saint Lucia
                                                                                        </div>
                                                                                        <div data-value="358857001" class="item" _msttexthash="331669" _msthash="154" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            St Martin / St Martin
                                                                                        </div>
                                                                                        <div data-value="1732827178" class="item" _msttexthash="372346" _msthash="155" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Sao Tome and Principe
                                                                                        </div>
                                                                                        <div data-value="823519019" class="item" _msttexthash="108342" _msthash="156" _mstvisible="2" style="direction: ltr; text-align: left;">Sri Lanka</div>
                                                                                        <div data-value="49415732" class="item" _msttexthash="113074" _msthash="157" _mstvisible="2" style="direction: ltr; text-align: left;">Slovakia</div>
                                                                                        <div data-value="1558127925" class="item" _msttexthash="114114" _msthash="158" _mstvisible="2" style="direction: ltr; text-align: left;">Slovenia</div>
                                                                                        <div data-value="782517302" class="item" _msttexthash="135278" _msthash="159" _mstvisible="2" style="direction: ltr; text-align: left;">Singapore</div>
                                                                                        <div data-value="2021745463" class="item" _msttexthash="134914" _msthash="160" _mstvisible="2" style="direction: ltr; text-align: left;">Swaziland</div>
                                                                                        <div data-value="1248821808" class="item" _msttexthash="114374" _msthash="161" _mstvisible="2" style="direction: ltr; text-align: left;">Suriname</div>
                                                                                        <div data-value="607428913" class="item" _msttexthash="183313" _msthash="162" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Switzerland
                                                                                        </div>
                                                                                        <div data-value="1980874802" class="item" _msttexthash="174616" _msthash="163" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Sierra Leone
                                                                                        </div>
                                                                                        <div data-value="1140780851" class="item" _msttexthash="157235" _msthash="164" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Seychelles
                                                                                        </div>
                                                                                        <div data-value="500895292" class="item" _msttexthash="177645" _msthash="165" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Sint Maarten
                                                                                        </div>
                                                                                        <div data-value="1872768317" class="item" _msttexthash="74282" _msthash="166" _mstvisible="2" style="direction: ltr; text-align: left;">Serbia</div>
                                                                                        <div data-value="965561406" class="item" _msttexthash="157807" _msthash="167" _mstvisible="2" style="direction: ltr; text-align: left;">Tajikistan</div>
                                                                                        <div data-value="191523647" class="item" _msttexthash="72189" _msthash="168" _mstvisible="2" style="direction: ltr; text-align: left;">Gambia</div>
                                                                                        <div data-value="1697679928" class="item" _msttexthash="56797" _msthash="169" _mstvisible="2" style="direction: ltr; text-align: left;">Ghana</div>
                                                                                        <div data-value="924690745" class="item" _msttexthash="90298" _msthash="170" _mstvisible="2" style="direction: ltr; text-align: left;">Grenada</div>
                                                                                        <div data-value="16435258" class="item" _msttexthash="131755" _msthash="171" _mstvisible="2" style="direction: ltr; text-align: left;">Greenland</div>
                                                                                        <div data-value="1388828475" class="item" _msttexthash="131469" _msthash="172" _mstvisible="2" style="direction: ltr; text-align: left;">Guatemala</div>
                                                                                        <div data-value="749532676" class="item" _msttexthash="157170" _msthash="173" _mstvisible="2" style="direction: ltr; text-align: left;">Guadeloupe</div>
                                                                                        <div data-value="2122913029" class="item" _msttexthash="44148" _msthash="174" _mstvisible="2" style="direction: ltr; text-align: left;">Guam</div>
                                                                                        <div data-value="1213608966" class="item" _msttexthash="195676" _msthash="175" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            French Guiana
                                                                                        </div>
                                                                                        <div data-value="439571207" class="item" _msttexthash="76258" _msthash="176" _mstvisible="2" style="direction: ltr; text-align: left;">Guyana</div>
                                                                                        <div data-value="1947759104" class="item" _msttexthash="74789" _msthash="177" _mstvisible="2" style="direction: ltr; text-align: left;">Guinea</div>
                                                                                        <div data-value="1105629441" class="item" _msttexthash="310908" _msthash="178" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Equatorial Guinea
                                                                                        </div>
                                                                                        <div data-value="331591682" class="item" _msttexthash="215813" _msthash="179" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Guinea-Bissau
                                                                                        </div>
                                                                                        <div data-value="1839783683" class="item" _msttexthash="97734" _msthash="180" _mstvisible="2" style="direction: ltr; text-align: left;">Vanuatu</div>
                                                                                        <div data-value="1064697356" class="item" _msttexthash="73788" _msthash="181" _mstvisible="2" style="direction: ltr; text-align: left;">France</div>
                                                                                        <div data-value="156376333" class="item" _msttexthash="135668" _msthash="182" _mstvisible="2" style="direction: ltr; text-align: left;">Venezuela</div>
                                                                                        <div data-value="1530870798" class="item" _msttexthash="92131" _msthash="183" _mstvisible="2" style="direction: ltr; text-align: left;">Finland</div>
                                                                                        <div data-value="889477903" class="item" _msttexthash="90350" _msthash="184" _mstvisible="2" style="direction: ltr; text-align: left;">Viet Nam</div>
                                                                                        <div data-value="115440136" class="item" _msttexthash="43342" _msthash="185" _mstvisible="2" style="direction: ltr; text-align: left;">Fiji</div>
                                                                                        <div data-value="1355782409" class="item" _msttexthash="81276" _msthash="186" _mstvisible="2" style="direction: ltr; text-align: left;">Cyprus</div>
                                                                                        <div data-value="580171786" class="item" _msttexthash="164814" _msthash="187" _mstvisible="2" style="direction: ltr; text-align: left;">Kyrgyzstan</div>
                                                                                        <div data-value="2087831307" class="item" _msttexthash="157664" _msthash="188" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Kazakhstan
                                                                                        </div>
                                                                                        <div data-value="1314842132" class="item" _msttexthash="196651" _msthash="189" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            New Caledonia
                                                                                        </div>
                                                                                        <div data-value="406521109" class="item" _msttexthash="92911" _msthash="190" _mstvisible="2" style="direction: ltr; text-align: left;">Croatia</div>
                                                                                        <div data-value="1778394134" class="item" _msttexthash="108550" _msthash="191" _mstvisible="2" style="direction: ltr; text-align: left;">Cambodia</div>
                                                                                        <div data-value="1206731543" class="item" _msttexthash="71097" _msthash="192" _mstvisible="2" style="direction: ltr; text-align: left;">Canada</div>
                                                                                        <div data-value="298476048" class="item" _msttexthash="42341" _msthash="193" _mstvisible="2" style="direction: ltr; text-align: left;">Cuba</div>
                                                                                        <div data-value="1670414609" class="item" _msttexthash="111137" _msthash="194" _mstvisible="2" style="direction: ltr; text-align: left;">Curaçao</div>
                                                                                        <div data-value="1031643154" class="item" _msttexthash="153816" _msthash="195" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            South Korea
                                                                                        </div>
                                                                                        <div data-value="257609491" class="item" _msttexthash="127517" _msthash="196" _mstvisible="2" style="direction: ltr; text-align: left;">Costa Rica</div>
                                                                                        <div data-value="1495789084" class="item" _msttexthash="80444" _msthash="197" _mstvisible="2" style="direction: ltr; text-align: left;">Kosovo</div>
                                                                                        <div data-value="722210077" class="item" _msttexthash="110981" _msthash="198" _mstvisible="2" style="direction: ltr; text-align: left;">Colombia</div>
                                                                                        <div data-value="82390046" class="item" _msttexthash="112593" _msthash="199" _mstvisible="2" style="direction: ltr; text-align: left;">Kiribati</div>
                                                                                        <div data-value="1454787359" class="item" _msttexthash="59800" _msthash="200" _mstvisible="2" style="direction: ltr; text-align: left;">Kenya</div>
                                                                                        <div data-value="546531864" class="item" _msttexthash="76063" _msthash="201" _mstvisible="2" style="direction: ltr; text-align: left;">Latvia</div>
                                                                                        <div data-value="1920567577" class="item" _msttexthash="44941" _msthash="202" _mstvisible="2" style="direction: ltr; text-align: left;">Laos</div>
                                                                                        <div data-value="505657115" class="item" _msttexthash="160836" _msthash="203" _mstvisible="2" style="direction: ltr; text-align: left;">Luxembourg</div>
                                                                                        <div data-value="1745409636" class="item" _msttexthash="91507" _msthash="204" _mstvisible="2" style="direction: ltr; text-align: left;">Liberia</div>
                                                                                        <div data-value="1171649893" class="item" _msttexthash="133406" _msthash="205" _mstvisible="2" style="direction: ltr; text-align: left;">Lithuania</div>
                                                                                        <div data-value="397546598" class="item" _msttexthash="233194" _msthash="206" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Liechtenstein
                                                                                        </div>
                                                                                        <div data-value="1637823335" class="item" _msttexthash="96876" _msthash="207" _mstvisible="2" style="direction: ltr; text-align: left;">Lesotho</div>
                                                                                        <div data-value="862212704" class="item" _msttexthash="159822" _msthash="208" _mstvisible="2" style="direction: ltr; text-align: left;">Martinique</div>
                                                                                        <div data-value="222392673" class="item" _msttexthash="58682" _msthash="209" _mstvisible="2" style="direction: ltr; text-align: left;">Malta</div>
                                                                                        <div data-value="1596952674" class="item" _msttexthash="148395" _msthash="210" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            That's mine
                                                                                        </div>
                                                                                        <div data-value="687128419" class="item" _msttexthash="112983" _msthash="211" _mstvisible="2" style="direction: ltr; text-align: left;">Malaysia</div>
                                                                                        <div data-value="2060574316" class="item" _msttexthash="97435" _msthash="212" _mstvisible="2" style="direction: ltr; text-align: left;">Mayotte</div>
                                                                                        <div data-value="1421802861" class="item" _msttexthash="151346" _msthash="213" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Madagascar
                                                                                        </div>
                                                                                        <div data-value="647699566" class="item" _msttexthash="130039" _msthash="214" _mstvisible="2" style="direction: ltr; text-align: left;">Macedonia</div>
                                                                                        <div data-value="1885354863" class="item" _msttexthash="1312779" _msthash="215" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Macau China (Special Administrative Region)
                                                                                        </div>
                                                                                        <div data-value="1112365672" class="item" _msttexthash="75738" _msthash="216" _mstvisible="2" style="direction: ltr; text-align: left;">Malawi</div>
                                                                                        <div data-value="472545641" class="item" _msttexthash="112931" _msthash="217" _mstvisible="2" style="direction: ltr; text-align: left;">Mongolia</div>
                                                                                        <div data-value="1777375338" class="item" _msttexthash="155779" _msthash="218" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Mauritania
                                                                                        </div>
                                                                                        <div data-value="1004382059" class="item" _msttexthash="140179" _msthash="219" _mstvisible="2" style="direction: ltr; text-align: left;">Mauritius</div>
                                                                                        <div data-value="364562036" class="item" _msttexthash="158444" _msthash="220" _mstvisible="2" style="direction: ltr; text-align: left;">Mozambique</div>
                                                                                        <div data-value="1736959349" class="item" _msttexthash="94861" _msthash="221" _mstvisible="2" style="direction: ltr; text-align: left;">Moldova</div>
                                                                                        <div data-value="829162614" class="item" _msttexthash="75504" _msthash="222" _mstvisible="2" style="direction: ltr; text-align: left;">Monaco</div>
                                                                                        <div data-value="55124855" class="item" _msttexthash="161759" _msthash="223" _mstvisible="2" style="direction: ltr; text-align: left;">Montserrat</div>
                                                                                        <div data-value="1561739888" class="item" _msttexthash="215280" _msthash="224" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Myanmar - Burma
                                                                                        </div>
                                                                                        <div data-value="787702129" class="item" _msttexthash="156013" _msthash="225" _mstvisible="2" style="direction: ltr; text-align: left;">Micronesia</div>
                                                                                        <div data-value="2027520114" class="item" _msttexthash="90376" _msthash="226" _mstvisible="2" style="direction: ltr; text-align: left;">Namibia</div>
                                                                                        <div data-value="1252437875" class="item" _msttexthash="62426" _msthash="227" _mstvisible="2" style="direction: ltr; text-align: left;">Nauru</div>
                                                                                        <div data-value="612617852" class="item" _msttexthash="58760" _msthash="228" _mstvisible="2" style="direction: ltr; text-align: left;">Nepal</div>
                                                                                        <div data-value="1986588029" class="item" _msttexthash="92274" _msthash="229" _mstvisible="2" style="direction: ltr; text-align: left;">Nigeria</div>
                                                                                        <div data-value="1077218430" class="item" _msttexthash="131261" _msthash="230" _mstvisible="2" style="direction: ltr; text-align: left;">Nicaragua</div>
                                                                                        <div data-value="303180671" class="item" _msttexthash="150956" _msthash="231" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            New Zealand
                                                                                        </div>
                                                                                        <div data-value="1879001720" class="item" _msttexthash="222924" _msthash="232" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Haitian Creole
                                                                                        </div>
                                                                                        <div data-value="969173369" class="item" _msttexthash="115804" _msthash="233" _mstvisible="2" style="direction: ltr; text-align: left;">Honduras</div>
                                                                                        <div data-value="195201146" class="item" _msttexthash="97084" _msthash="234" _mstvisible="2" style="direction: ltr; text-align: left;">Hungary</div>
                                                                                        <div data-value="1703909243" class="item" _msttexthash="180492" _msthash="235" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Netherlands
                                                                                        </div>
                                                                                        <div data-value="928298564" class="item" _msttexthash="442988" _msthash="236" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Caribbean Netherlands
                                                                                        </div>
                                                                                        <div data-value="20043077" class="item" _msttexthash="275795" _msthash="237" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Hong Kong Chinese
                                                                                        </div>
                                                                                        <div data-value="1394537542" class="item" _msttexthash="85995" _msthash="238" _mstvisible="2" style="direction: ltr; text-align: left;">GUERNSEY</div>
                                                                                        <div data-value="754651975" class="item" _msttexthash="241072" _msthash="239" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            CANARY ISLANDS, THE
                                                                                        </div>
                                                                                        <div data-value="2126524992" class="item" _msttexthash="415935" _msthash="240" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            KOREA, THE D.P.R OF (NORTH K.)
                                                                                        </div>
                                                                                        <div data-value="1219318081" class="item" _msttexthash="59644" _msthash="241" _mstvisible="2" style="direction: ltr; text-align: left;">KOSOVO</div>
                                                                                        <div data-value="445280322" class="item" _msttexthash="204373" _msthash="242" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            MARSHALL ISLANDS
                                                                                        </div>
                                                                                        <div data-value="1951440707" class="item" _msttexthash="33605" _msthash="243" _mstvisible="2" style="direction: ltr; text-align: left;">NIUE</div>
                                                                                        <div data-value="1178451532" class="item" _msttexthash="43537" _msthash="244" _mstvisible="2" style="direction: ltr; text-align: left;">PALAU</div>
                                                                                        <div data-value="270196045" class="item" _msttexthash="125775" _msthash="245" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            SAINT HELENA
                                                                                        </div>
                                                                                        <div data-value="1843919950" class="item" _msttexthash="66690" _msthash="246" _mstvisible="2" style="direction: ltr; text-align: left;">BONAIRE</div>
                                                                                        <div data-value="1070340943" class="item" _msttexthash="66053" _msthash="247" _mstvisible="2" style="direction: ltr; text-align: left;">CURACAO</div>
                                                                                        <div data-value="162085448" class="item" _msttexthash="151541" _msthash="248" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            ST. EUSTATIUS
                                                                                        </div>
                                                                                        <div data-value="1534482761" class="item" _msttexthash="96460" _msthash="249" _mstvisible="2" style="direction: ltr; text-align: left;">ST. MARTIN</div>
                                                                                        <div data-value="894662730" class="item" _msttexthash="45695" _msthash="250" _mstvisible="2" style="direction: ltr; text-align: left;">NEVIS</div>
                                                                                        <div data-value="121210699" class="item" _msttexthash="597038" _msthash="251" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            SOMALILAND, REP OF (NORTH SOMALIA)
                                                                                        </div>
                                                                                        <div data-value="1359390292" class="item" _msttexthash="168311" _msthash="252" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            ST. BARTHOLOMY
                                                                                        </div>
                                                                                        <div data-value="585352533" class="item" _msttexthash="153218" _msthash="253" _mstvisible="2" style="direction: ltr; text-align: left;">Azerbaijan</div>
                                                                                        <div data-value="2093540438" class="item" _msttexthash="96148" _msthash="254" _mstvisible="2" style="direction: ltr; text-align: left;">Marmoth</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!---->
                                                                        </fieldset>
                                                                    </span>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <span>
                                                                        <fieldset class="form-group">
                                                                            <label _msttexthash="154297" _msthash="255" style="direction: ltr; text-align: left;">Select City</label>
                                                                            <div class="ui selection find compact dropdown" tabindex="0">
                                                                                <input type="hidden" name="city" value="415846035" />
                                                                                <span class="default text" _msttexthash="203554" _msthash="256" style="direction: ltr; text-align: left;">Abu Hail, Dubai</span> <i class="dropdown icon"></i>
                                                                                <div class="menu transition hidden" tabindex="-1" _mstvisible="0">
                                                                                    <div class="search input" _mstvisible="1">
                                                                                        <i class="sicon-search" _mstvisible="2"></i>
                                                                                        <input type="text" placeholder="Find the city" class="form-control" _mstplaceholder="3497286" _msthash="257" _mstvisible="2" style="direction: ltr; text-align: left;" />
                                                                                    </div>
                                                                                    <div class="scrolling" _mstvisible="1">
                                                                                        <div data-value="2097610897" class="item" _msttexthash="104312" _msthash="1496" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Abu Dhabi
                                                                                        </div>
                                                                                        <div data-value="1324101522" class="item" _msttexthash="193167" _msthash="1495" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Abu Dhabi City
                                                                                        </div>
                                                                                        <div data-value="415846035" class="item active selected" _msttexthash="203554" _msthash="1494" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Abu Hail, Dubai
                                                                                        </div>
                                                                                        <div data-value="1788243356" class="item" _msttexthash="153257" _msthash="1493" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Aflaj, Al Ain
                                                                                        </div>
                                                                                        <div data-value="1149013149" class="item" _msttexthash="58032" _msthash="1492" _mstvisible="2" style="direction: ltr; text-align: left;">Ajman</div>
                                                                                        <div data-value="374975390" class="item" _msttexthash="130936" _msthash="1491" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Ajman City
                                                                                        </div>
                                                                                        <div data-value="1613154975" class="item" _msttexthash="78338" _msthash="1490" _mstvisible="2" style="direction: ltr; text-align: left;">Sunday</div>
                                                                                        <div data-value="839117208" class="item" _msttexthash="99502" _msthash="1489" _mstvisible="2" style="direction: ltr; text-align: left;">Al , Abraq</div>
                                                                                        <div data-value="266864793" class="item" _msttexthash="30680" _msthash="1488" _mstvisible="2" style="direction: ltr; text-align: left;">Eye</div>
                                                                                        <div data-value="1505040282" class="item" _msttexthash="341588" _msthash="1487" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Ain Airport, Al Ain
                                                                                        </div>
                                                                                        <div data-value="731002523" class="item" _msttexthash="127036" _msthash="1486" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Ain City
                                                                                        </div>
                                                                                        <div data-value="92231140" class="item" _msttexthash="1073449" _msthash="1485" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Ain Farms for Animal Production, Al Ain
                                                                                        </div>
                                                                                        <div data-value="1464104165" class="item" _msttexthash="367874" _msthash="1484" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Andalus Mall, Al Ain
                                                                                        </div>
                                                                                        <div data-value="555914214" class="item" _msttexthash="69537" _msthash="1483" _mstvisible="2" style="direction: ltr; text-align: left;">Al Aqah</div>
                                                                                        <div data-value="1930408679" class="item" _msttexthash="100178" _msthash="1482" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al , Ateen
                                                                                        </div>
                                                                                        <div data-value="1289015776" class="item" _msttexthash="100750" _msthash="1481" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al 'Aweer
                                                                                        </div>
                                                                                        <div data-value="514978017" class="item" _msttexthash="93886" _msthash="1480" _mstvisible="2" style="direction: ltr; text-align: left;">Prairie</div>
                                                                                        <div data-value="1755193314" class="item" _msttexthash="92456" _msthash="1479" _mstvisible="2" style="direction: ltr; text-align: left;">Barashi</div>
                                                                                        <div data-value="981155555" class="item" _msttexthash="106951" _msthash="1478" _mstvisible="2" style="direction: ltr; text-align: left;">Al Barsha</div>
                                                                                        <div data-value="339762668" class="item" _msttexthash="224913" _msthash="1477" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Barsha South
                                                                                        </div>
                                                                                        <div data-value="1714257133" class="item" _msttexthash="154570" _msthash="1476" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Basra, Al Ain
                                                                                        </div>
                                                                                        <div data-value="806067182" class="item" _msttexthash="96200" _msthash="1475" _mstvisible="2" style="direction: ltr; text-align: left;">Burirat</div>
                                                                                        <div data-value="231783151" class="item" _msttexthash="149006" _msthash="1474" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Casablanca
                                                                                        </div>
                                                                                        <div data-value="1606277608" class="item" _msttexthash="105326" _msthash="1473" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Dhafra
                                                                                        </div>
                                                                                        <div data-value="698022121" class="item" _msttexthash="261911" _msthash="1472" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Dhafra Air Base
                                                                                        </div>
                                                                                        <div data-value="2070349802" class="item" _msttexthash="301132" _msthash="1471" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Dhafra Air Base AE
                                                                                        </div>
                                                                                        <div data-value="1431054059" class="item" _msttexthash="289692" _msthash="1470" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Dhaid, Fujairah
                                                                                        </div>
                                                                                        <div data-value="657016308" class="item" _msttexthash="88478" _msthash="1469" _mstvisible="2" style="direction: ltr; text-align: left;">Al Dhait</div>
                                                                                        <div data-value="1895195893" class="item" _msttexthash="193505" _msthash="1468" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            North Al Dhait
                                                                                        </div>
                                                                                        <div data-value="1121747958" class="item" _msttexthash="194311" _msthash="1467" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            South Al Dhait
                                                                                        </div>
                                                                                        <div data-value="481927927" class="item" _msttexthash="89635" _msthash="1466" _mstvisible="2" style="direction: ltr; text-align: left;">Degdaqa</div>
                                                                                        <div data-value="1854325232" class="item" _msttexthash="186615" _msthash="1465" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Hospitality
                                                                                        </div>
                                                                                        <div data-value="946069745" class="item" _msttexthash="76193" _msthash="1464" _mstvisible="2" style="direction: ltr; text-align: left;">Farmer</div>
                                                                                        <div data-value="172494834" class="item" _msttexthash="109798" _msthash="1463" _mstvisible="2" style="direction: ltr; text-align: left;">Al Furjan</div>
                                                                                        <div data-value="1679109875" class="item" _msttexthash="94432" _msthash="1462" _mstvisible="2" style="direction: ltr; text-align: left;">Garhoud</div>
                                                                                        <div data-value="837963260" class="item" _msttexthash="468286" _msthash="1461" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Ghail Industrial Area
                                                                                        </div>
                                                                                        <div data-value="64974077" class="item" _msttexthash="112086" _msthash="1460" _mstvisible="2" style="direction: ltr; text-align: left;">Al Qusais</div>
                                                                                        <div data-value="1571130366" class="item" _msttexthash="511511" _msthash="1459" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Qusais Industrial Area
                                                                                        </div>
                                                                                        <div data-value="797092607" class="item" _msttexthash="76843" _msthash="1458" _mstvisible="2" style="direction: ltr; text-align: left;">Modern</div>
                                                                                        <div data-value="2037369336" class="item" _msttexthash="432237" _msthash="1457" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Hail Industrial Area
                                                                                        </div>
                                                                                        <div data-value="1261758713" class="item" _msttexthash="94224" _msthash="1456" _mstvisible="2" style="direction: ltr; text-align: left;">Hawiyah</div>
                                                                                        <div data-value="621934586" class="item" _msttexthash="98150" _msthash="1455" _mstvisible="2" style="direction: ltr; text-align: left;">THE HAZZAN</div>
                                                                                        <div data-value="1996363515" class="item" _msttexthash="133627" _msthash="1454" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Hili, Al Ain
                                                                                        </div>
                                                                                        <div data-value="1088107972" class="item" _msttexthash="89726" _msthash="1453" _mstvisible="2" style="direction: ltr; text-align: left;">Hudaiba</div>
                                                                                        <div data-value="312497349" class="item" _msttexthash="99450" _msthash="1452" _mstvisible="2" style="direction: ltr; text-align: left;">Al , Hamra</div>
                                                                                        <div data-value="1821209542" class="item" _msttexthash="103272" _msthash="1451" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Jaddaf
                                                                                        </div>
                                                                                        <div data-value="1047237319" class="item" _msttexthash="222742" _msthash="1450" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Jahili, Al Ain
                                                                                        </div>
                                                                                        <div data-value="137408960" class="item" _msttexthash="174213" _msthash="1449" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Jimi, Al Ain
                                                                                        </div>
                                                                                        <div data-value="1511903425" class="item" _msttexthash="277004" _msthash="1448" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Khabaisi, Al Ain
                                                                                        </div>
                                                                                        <div data-value="939196354" class="item" _msttexthash="74841" _msthash="1447" _mstvisible="2" style="direction: ltr; text-align: left;">Kharan</div>
                                                                                        <div data-value="29826755" class="item" _msttexthash="96941" _msthash="1446" _mstvisible="2" style="direction: ltr; text-align: left;">circlet</div>
                                                                                        <div data-value="1403796940" class="item" _msttexthash="172419" _msthash="1445" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Khawaneej
                                                                                        </div>
                                                                                        <div data-value="763976909" class="item" _msttexthash="63492" _msthash="1444" _mstvisible="2" style="direction: ltr; text-align: left;">firth</div>
                                                                                        <div data-value="2136374222" class="item" _msttexthash="152113" _msthash="1443" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Alkhabaisi
                                                                                        </div>
                                                                                        <div data-value="1228708559" class="item" _msttexthash="113087" _msthash="1442" _mstvisible="2" style="direction: ltr; text-align: left;">Lavender</div>
                                                                                        <div data-value="454670792" class="item" _msttexthash="525135" _msthash="1441" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Kuwaitat، Al Ain
                                                                                        </div>
                                                                                        <div data-value="1961285833" class="item" _msttexthash="102479" _msthash="1440" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al , Liyan
                                                                                        </div>
                                                                                        <div data-value="1187243978" class="item" _msttexthash="60749" _msthash="1439" _mstvisible="2" style="direction: ltr; text-align: left;">Orbit</div>
                                                                                        <div data-value="279447243" class="item" _msttexthash="390845" _msthash="1438" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Teaching assistants
                                                                                        </div>
                                                                                        <div data-value="1651844564" class="item" _msttexthash="101816" _msthash="1437" _mstvisible="2" style="direction: ltr; text-align: left;">Alma'rid</div>
                                                                                        <div data-value="1012024533" class="item" _msttexthash="113659" _msthash="1436" _mstvisible="2" style="direction: ltr; text-align: left;">Maamoura</div>
                                                                                        <div data-value="239035350" class="item" _msttexthash="611871" _msthash="1435" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Manaseer، Al Ain
                                                                                        </div>
                                                                                        <div data-value="1476756183" class="item" _msttexthash="760903" _msthash="1434" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Industrial Center Area, Abu Dhabi
                                                                                        </div>
                                                                                        <div data-value="904045008" class="item" _msttexthash="247156" _msthash="1433" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Maryah Island
                                                                                        </div>
                                                                                        <div data-value="131055825" class="item" _msttexthash="100204" _msthash="1432" _mstvisible="2" style="direction: ltr; text-align: left;">Lamp, Eye</div>
                                                                                        <div data-value="1368715218" class="item" _msttexthash="253747" _msthash="1431" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Munizfa, Al Ain
                                                                                        </div>
                                                                                        <div data-value="594611923" class="item" _msttexthash="279019" _msthash="1430" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Manizala, Al Ain
                                                                                        </div>
                                                                                        <div data-value="2103324124" class="item" _msttexthash="248287" _msthash="1429" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Murabba, Al Ain
                                                                                        </div>
                                                                                        <div data-value="1329286365" class="item" _msttexthash="180297" _msthash="1428" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Mutawa, Al Ain
                                                                                        </div>
                                                                                        <div data-value="419458014" class="item" _msttexthash="253201" _msthash="1427" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Muwaiji, Al Ain
                                                                                        </div>
                                                                                        <div data-value="1794018015" class="item" _msttexthash="189319" _msthash="1426" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Renaissance 1
                                                                                        </div>
                                                                                        <div data-value="1154197976" class="item" _msttexthash="63531" _msthash="1425" _mstvisible="2" style="direction: ltr; text-align: left;">palms</div>
                                                                                        <div data-value="378587353" class="item" _msttexthash="63531" _msthash="1424" _mstvisible="2" style="direction: ltr; text-align: left;">palms</div>
                                                                                        <div data-value="1618859994" class="item" _msttexthash="224068" _msthash="1423" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Owaina, Al Ain
                                                                                        </div>
                                                                                        <div data-value="844822235" class="item" _msttexthash="336063" _msthash="1422" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Corniche Al Qawasim
                                                                                        </div>
                                                                                        <div data-value="203887908" class="item" _msttexthash="29107" _msthash="1421" _mstvisible="2" style="direction: ltr; text-align: left;">Cob</div>
                                                                                        <div data-value="1577858085" class="item" _msttexthash="96915" _msthash="1420" _mstvisible="2" style="direction: ltr; text-align: left;">Comfort</div>
                                                                                        <div data-value="736711462" class="item" _msttexthash="257491" _msthash="1419" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Raha Beach Area
                                                                                        </div>
                                                                                        <div data-value="95842855" class="item" _msttexthash="133601" _msthash="1418" _mstvisible="2" style="direction: ltr; text-align: left;">Rahmaniya</div>
                                                                                        <div data-value="1469878560" class="item" _msttexthash="58214" _msthash="1417" _mstvisible="2" style="direction: ltr; text-align: left;">Ramla</div>
                                                                                        <div data-value="561623073" class="item" _msttexthash="128583" _msthash="1416" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Rames Road
                                                                                        </div>
                                                                                        <div data-value="1934024482" class="item" _msttexthash="41405" _msthash="1415" _mstvisible="2" style="direction: ltr; text-align: left;">Head</div>
                                                                                        <div data-value="1294204451" class="item" _msttexthash="99944" _msthash="1414" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al , Rawda
                                                                                        </div>
                                                                                        <div data-value="520625452" class="item" _msttexthash="59332" _msthash="1413" _mstvisible="2" style="direction: ltr; text-align: left;">Raqqa</div>
                                                                                        <div data-value="1758805037" class="item" _msttexthash="59332" _msthash="1412" _mstvisible="2" style="direction: ltr; text-align: left;">Raqqa</div>
                                                                                        <div data-value="984767278" class="item" _msttexthash="476229" _msthash="1411" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Rumaila، Al Ain
                                                                                        </div>
                                                                                        <div data-value="345995823" class="item" _msttexthash="203515" _msthash="1410" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Ruwaika, Al Ain
                                                                                        </div>
                                                                                        <div data-value="1717934376" class="item" _msttexthash="56524" _msthash="1409" _mstvisible="2" style="direction: ltr; text-align: left;">Sajaa</div>
                                                                                        <div data-value="809678889" class="item" _msttexthash="78169" _msthash="1408" _mstvisible="2" style="direction: ltr; text-align: left;">Safety</div>
                                                                                        <div data-value="36685610" class="item" _msttexthash="404976" _msthash="1407" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Industrial Area, Al Ain
                                                                                        </div>
                                                                                        <div data-value="1609885227" class="item" _msttexthash="226850" _msthash="1406" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Sarooj, Al Ain
                                                                                        </div>
                                                                                        <div data-value="701564212" class="item" _msttexthash="201877" _msthash="1405" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Asharej, Al Ain
                                                                                        </div>
                                                                                        <div data-value="2076058677" class="item" _msttexthash="60437" _msthash="1404" _mstvisible="2" style="direction: ltr; text-align: left;">Goods</div>
                                                                                        <div data-value="1436238646" class="item" _msttexthash="280228" _msthash="1403" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Sufouh Gardens
                                                                                        </div>
                                                                                        <div data-value="660628023" class="item" _msttexthash="199407" _msthash="1402" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Tawam, Al Ain
                                                                                        </div>
                                                                                        <div data-value="1900970288" class="item" _msttexthash="226798" _msthash="1401" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Tawiya, Al Ain
                                                                                        </div>
                                                                                        <div data-value="1126932529" class="item" _msttexthash="84630" _msthash="1400" _mstvisible="2" style="direction: ltr; text-align: left;">Al , Twar</div>
                                                                                        <div data-value="485543730" class="item" _msttexthash="118235" _msthash="1399" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al , Araibi
                                                                                        </div>
                                                                                        <div data-value="1860038195" class="item" _msttexthash="60827" _msthash="1398" _mstvisible="2" style="direction: ltr; text-align: left;">Oasis</div>
                                                                                        <div data-value="951717180" class="item" _msttexthash="107913" _msthash="1397" _mstvisible="2" style="direction: ltr; text-align: left;">Al Warqaa</div>
                                                                                        <div data-value="176630845" class="item" _msttexthash="114335" _msthash="1396" _mstvisible="2" style="direction: ltr; text-align: left;">Alwarsan</div>
                                                                                        <div data-value="1684818750" class="item" _msttexthash="101010" _msthash="1395" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al , Zahra
                                                                                        </div>
                                                                                        <div data-value="910780991" class="item" _msttexthash="248378" _msthash="1394" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Arabian Ranches
                                                                                        </div>
                                                                                        <div data-value="1542456" class="item" _msttexthash="201877" _msthash="1393" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Asharej, Al Ain
                                                                                        </div>
                                                                                        <div data-value="1576839225" class="item" _msttexthash="204880" _msthash="1392" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Sons of Nasser
                                                                                        </div>
                                                                                        <div data-value="802797370" class="item" _msttexthash="338793" _msthash="1391" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Bida Zayed, Abu Dhabi
                                                                                        </div>
                                                                                        <div data-value="2040976955" class="item" _msttexthash="252655" _msthash="1390" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Baraka, Abu Dhabi
                                                                                        </div>
                                                                                        <div data-value="1266939140" class="item" _msttexthash="276549" _msthash="1389" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Barsha Heights
                                                                                        </div>
                                                                                        <div data-value="627577861" class="item" _msttexthash="331526" _msthash="1388" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Bawadi Mall, Al Ain
                                                                                        </div>
                                                                                        <div data-value="1999975174" class="item" _msttexthash="384267" _msthash="1387" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Zayed's innovations
                                                                                        </div>
                                                                                        <div data-value="1091719687" class="item" _msttexthash="74711" _msthash="1386" _mstvisible="2" style="direction: ltr; text-align: left;">Bidiya</div>
                                                                                        <div data-value="318730496" class="item" _msttexthash="107874" _msthash="1385" _mstvisible="2" style="direction: ltr; text-align: left;">Bur Dubai</div>
                                                                                        <div data-value="1824886785" class="item" _msttexthash="176917" _msthash="1384" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Business Bay
                                                                                        </div>
                                                                                        <div data-value="1050853122" class="item" _msttexthash="109447" _msthash="1383" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Arab City
                                                                                        </div>
                                                                                        <div data-value="143646211" class="item" _msttexthash="235703" _msthash="1382" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Downtown, Al Ain
                                                                                        </div>
                                                                                        <div data-value="1515519244" class="item" _msttexthash="678314" _msthash="1381" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Canadian Medical Center, Dubai
                                                                                        </div>
                                                                                        <div data-value="875633677" class="item" _msttexthash="678314" _msthash="1380" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Canadian Medical Center, Dubai
                                                                                        </div>
                                                                                        <div data-value="102644494" class="item" _msttexthash="57668" _msthash="1379" _mstvisible="2" style="direction: ltr; text-align: left;">Deira</div>
                                                                                        <div data-value="1408981519" class="item" _msttexthash="63453" _msthash="1378" _mstvisible="2" style="direction: ltr; text-align: left;">paint</div>
                                                                                        <div data-value="767588616" class="item" _msttexthash="57668" _msthash="1377" _mstvisible="2" style="direction: ltr; text-align: left;">Deira</div>
                                                                                        <div data-value="2142148617" class="item" _msttexthash="159809" _msthash="1376" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Deira, Dubai
                                                                                        </div>
                                                                                        <div data-value="1233889034" class="item" _msttexthash="55185" _msthash="1375" _mstvisible="2" style="direction: ltr; text-align: left;">Dibba</div>
                                                                                        <div data-value="458278411" class="item" _msttexthash="165386" _msthash="1374" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Dibba Al Hisn
                                                                                        </div>
                                                                                        <div data-value="1966990612" class="item" _msttexthash="315887" _msthash="1373" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Discovery Gardens
                                                                                        </div>
                                                                                        <div data-value="1192887317" class="item" _msttexthash="227877" _msthash="1372" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Downtown Dubai
                                                                                        </div>
                                                                                        <div data-value="283583254" class="item" _msttexthash="303810" _msthash="1371" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Downtown Jebel Ali
                                                                                        </div>
                                                                                        <div data-value="1657553431" class="item" _msttexthash="57447" _msthash="1370" _mstvisible="2" style="direction: ltr; text-align: left;">Dubai</div>
                                                                                        <div data-value="1017733392" class="item" _msttexthash="331032" _msthash="1369" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Dubai Academic City
                                                                                        </div>
                                                                                        <div data-value="242712593" class="item" _msttexthash="233103" _msthash="1368" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Free Zone, Dubai
                                                                                        </div>
                                                                                        <div data-value="1482469138" class="item" _msttexthash="237094" _msthash="1367" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Dubai Airport T2
                                                                                        </div>
                                                                                        <div data-value="708431379" class="item" _msttexthash="421252" _msthash="1366" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Design District, Dubai
                                                                                        </div>
                                                                                        <div data-value="67562780" class="item" _msttexthash="401986" _msthash="1365" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Dubai Healthcare City
                                                                                        </div>
                                                                                        <div data-value="1373834269" class="item" _msttexthash="480038" _msthash="1364" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Dubai Humanitarian City
                                                                                        </div>
                                                                                        <div data-value="600320798" class="item" _msttexthash="411385" _msthash="1363" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Dubai Industrial City
                                                                                        </div>
                                                                                        <div data-value="2106935839" class="item" _msttexthash="1010971" _msthash="1362" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Dubai International Financial Centre
                                                                                        </div>
                                                                                        <div data-value="1332898072" class="item" _msttexthash="343980" _msthash="1361" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Dubai Internet City
                                                                                        </div>
                                                                                        <div data-value="425232409" class="item" _msttexthash="521209" _msthash="1360" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Dubai Investment Park (DIP)
                                                                                        </div>
                                                                                        <div data-value="1797625626" class="item" _msttexthash="368082" _msthash="1359" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Dubai Knowledge Park
                                                                                        </div>
                                                                                        <div data-value="1157805595" class="item" _msttexthash="472316" _msthash="1358" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Dubai Knowledge Village
                                                                                        </div>
                                                                                        <div data-value="384816484" class="item" _msttexthash="130208" _msthash="1357" _mstvisible="2" style="direction: ltr; text-align: left;">Dubailand</div>
                                                                                        <div data-value="1622471781" class="item" _msttexthash="376519" _msthash="1356" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Dubai Logistics City
                                                                                        </div>
                                                                                        <div data-value="848368486" class="item" _msttexthash="171392" _msthash="1355" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Dubai Marina
                                                                                        </div>
                                                                                        <div data-value="209597031" class="item" _msttexthash="340301" _msthash="1354" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Dubai Maritime City
                                                                                        </div>
                                                                                        <div data-value="1583042912" class="item" _msttexthash="244868" _msthash="1353" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Dubai Media City
                                                                                        </div>
                                                                                        <div data-value="673214561" class="item" _msttexthash="254176" _msthash="1352" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Dubai Motor City
                                                                                        </div>
                                                                                        <div data-value="2047778658" class="item" _msttexthash="380133" _msthash="1351" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Dubai Outsource Zone
                                                                                        </div>
                                                                                        <div data-value="1475067491" class="item" _msttexthash="339677" _msthash="1350" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Dubai Silicon Oasis
                                                                                        </div>
                                                                                        <div data-value="565239148" class="item" _msttexthash="286104" _msthash="1349" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Dubai Sports City
                                                                                        </div>
                                                                                        <div data-value="1939733613" class="item" _msttexthash="281970" _msthash="1348" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Dubai Studio City
                                                                                        </div>
                                                                                        <div data-value="1299848046" class="item" _msttexthash="281762" _msthash="1347" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Dubai Water Front
                                                                                        </div>
                                                                                        <div data-value="524761711" class="item" _msttexthash="711373" _msthash="1346" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Dubai World Central - Logistics
                                                                                        </div>
                                                                                        <div data-value="1764514152" class="item" _msttexthash="506597" _msthash="1345" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Dubai, Jebel Ali - Free Zone
                                                                                        </div>
                                                                                        <div data-value="990476393" class="item" _msttexthash="228111" _msthash="1344" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Emirates Hills
                                                                                        </div>
                                                                                        <div data-value="349669226" class="item" _msttexthash="225368" _msthash="1343" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Emirates Lakes
                                                                                        </div>
                                                                                        <div data-value="1723639403" class="item" _msttexthash="279292" _msthash="1342" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Falaj Hazza, Al Ain
                                                                                        </div>
                                                                                        <div data-value="815383924" class="item" _msttexthash="227916" _msthash="1341" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            City of Falcons
                                                                                        </div>
                                                                                        <div data-value="40297589" class="item" _msttexthash="59007" _msthash="1340" _mstvisible="2" style="direction: ltr; text-align: left;">Fasil</div>
                                                                                        <div data-value="1547895670" class="item" _msttexthash="203736" _msthash="1339" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Festival City
                                                                                        </div>
                                                                                        <div data-value="774382199" class="item" _msttexthash="220363" _msthash="1338" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Fereej Al Murar
                                                                                        </div>
                                                                                        <div data-value="2079670640" class="item" _msttexthash="111670" _msthash="1337" _mstvisible="2" style="direction: ltr; text-align: left;">Fujairah</div>
                                                                                        <div data-value="1439850609" class="item" _msttexthash="286312" _msthash="1336" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Fujairah Airport
                                                                                        </div>
                                                                                        <div data-value="666406770" class="item" _msttexthash="200525" _msthash="1335" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Fujairah City
                                                                                        </div>
                                                                                        <div data-value="1904586355" class="item" _msttexthash="304993" _msthash="1334" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Fujairah Free Zone
                                                                                        </div>
                                                                                        <div data-value="1130548604" class="item" _msttexthash="253877" _msthash="1333" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Port of Fujairah
                                                                                        </div>
                                                                                        <div data-value="491777149" class="item" _msttexthash="93925" _msthash="1332" _mstvisible="2" style="direction: ltr; text-align: left;">Gardens</div>
                                                                                        <div data-value="1863584638" class="item" _msttexthash="313885" _msthash="1331" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Ghayathi, Abu Dhabi
                                                                                        </div>
                                                                                        <div data-value="955329151" class="item" _msttexthash="407394" _msthash="1330" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Ghuwaifat, Abu Dhabi
                                                                                        </div>
                                                                                        <div data-value="182339960" class="item" _msttexthash="262626" _msthash="1329" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Green Community
                                                                                        </div>
                                                                                        <div data-value="1690003577" class="item" _msttexthash="254150" _msthash="1328" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Hameem, Abu Dhabi
                                                                                        </div>
                                                                                        <div data-value="914388858" class="item" _msttexthash="94497" _msthash="1327" _mstvisible="2" style="direction: ltr; text-align: left;">Hamriya</div>
                                                                                        <div data-value="7247483" class="item" _msttexthash="614328" _msthash="1326" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Hamriyah Free Zone, Hamriyah
                                                                                        </div>
                                                                                        <div data-value="1380693316" class="item" _msttexthash="204451" _msthash="1325" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Hamriyah Port
                                                                                        </div>
                                                                                        <div data-value="739300421" class="item" _msttexthash="161304" _msthash="1324" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Hatta, Dubai
                                                                                        </div>
                                                                                        <div data-value="2046686022" class="item" _msttexthash="331513" _msthash="1323" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Hili Al Khalif, Al Ain
                                                                                        </div>
                                                                                        <div data-value="1272582727" class="item" _msttexthash="253331" _msthash="1322" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Hili Oasis, Al Ain
                                                                                        </div>
                                                                                        <div data-value="631714112" class="item" _msttexthash="412386" _msthash="1321" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Hili Industrial, Al Ain
                                                                                        </div>
                                                                                        <div data-value="2005684289" class="item" _msttexthash="118937" _msthash="1320" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Hor Al Anz A
                                                                                        </div>
                                                                                        <div data-value="1097432898" class="item" _msttexthash="665275" _msthash="1319" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Abu Dhabi Industrial City, ICAD 1
                                                                                        </div>
                                                                                        <div data-value="322412099" class="item" _msttexthash="687570" _msthash="1318" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Abu Dhabi Industrial City, ICAD 11
                                                                                        </div>
                                                                                        <div data-value="1830600012" class="item" _msttexthash="710502" _msthash="1317" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Abu Dhabi Industrial City, ICAD 111
                                                                                        </div>
                                                                                        <div data-value="1056562253" class="item" _msttexthash="250497" _msthash="1316" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Industrial Area
                                                                                        </div>
                                                                                        <div data-value="147258190" class="item" _msttexthash="255645" _msthash="1315" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Industrial Park
                                                                                        </div>
                                                                                        <div data-value="1520638543" class="item" _msttexthash="545272" _msthash="1314" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Inside the port of the port
                                                                                        </div>
                                                                                        <div data-value="881342792" class="item" _msttexthash="348439" _msthash="1313" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            International City
                                                                                        </div>
                                                                                        <div data-value="106256457" class="item" _msttexthash="562107" _msthash="1312" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Dubai Production City (IMPZ)
                                                                                        </div>
                                                                                        <div data-value="1345480522" class="item" _msttexthash="166179" _msthash="1311" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al , Jafiliya
                                                                                        </div>
                                                                                        <div data-value="572032587" class="item" _msttexthash="160628" _msthash="1310" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Jafza, Dubai
                                                                                        </div>
                                                                                        <div data-value="2145756500" class="item" _msttexthash="217997" _msthash="1309" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Hamra Island
                                                                                        </div>
                                                                                        <div data-value="1237501013" class="item" _msttexthash="104780" _msthash="1308" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Jebel Ali
                                                                                        </div>
                                                                                        <div data-value="464511830" class="item" _msttexthash="312611" _msthash="1307" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Free Zone, Jebel Ali
                                                                                        </div>
                                                                                        <div data-value="1970537047" class="item" _msttexthash="475891" _msthash="1306" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Jebel Ali Free Zone, Dubai
                                                                                        </div>
                                                                                        <div data-value="1196499280" class="item" _msttexthash="488774" _msthash="1305" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Jebel Ali Free Zone, North
                                                                                        </div>
                                                                                        <div data-value="289292369" class="item" _msttexthash="491348" _msthash="1304" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Jebel Ali Free Zone, South
                                                                                        </div>
                                                                                        <div data-value="1662742354" class="item" _msttexthash="504205" _msthash="1303" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Jebel Ali Industrial Area
                                                                                        </div>
                                                                                        <div data-value="1021414995" class="item" _msttexthash="334438" _msthash="1302" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Jebel Dana, Abu Dhabi
                                                                                        </div>
                                                                                        <div data-value="248425820" class="item" _msttexthash="112905" _msthash="1301" _mstvisible="2" style="direction: ltr; text-align: left;">Jumeirah</div>
                                                                                        <div data-value="1487653981" class="item" _msttexthash="502970" _msthash="1300" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Jumeirah Beach Residence
                                                                                        </div>
                                                                                        <div data-value="712043358" class="item" _msttexthash="282191" _msthash="1299" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Jumeirah Islands
                                                                                        </div>
                                                                                        <div data-value="73206367" class="item" _msttexthash="376129" _msthash="1298" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Jumeirah Lake Towers
                                                                                        </div>
                                                                                        <div data-value="1446652248" class="item" _msttexthash="304174" _msthash="1297" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Humaira Village
                                                                                        </div>
                                                                                        <div data-value="537348185" class="item" _msttexthash="589277" _msthash="1296" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Jumeirah Village Circle (JVC)
                                                                                        </div>
                                                                                        <div data-value="2112640858" class="item" _msttexthash="552084" _msthash="1295" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Jumeirah Village Triangle
                                                                                        </div>
                                                                                        <div data-value="1338603099" class="item" _msttexthash="56160" _msthash="1294" _mstvisible="2" style="direction: ltr; text-align: left;">Kalba</div>
                                                                                        <div data-value="429364388" class="item" _msttexthash="97019" _msthash="1293" _mstvisible="2" style="direction: ltr; text-align: left;">Dignity</div>
                                                                                        <div data-value="1803334565" class="item" _msttexthash="173888" _msthash="1292" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Khalifa City
                                                                                        </div>
                                                                                        <div data-value="1163514534" class="item" _msttexthash="189098" _msthash="1291" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Khalifa City A
                                                                                        </div>
                                                                                        <div data-value="388428199" class="item" _msttexthash="189332" _msthash="1290" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Khalifa City B
                                                                                        </div>
                                                                                        <div data-value="1627590816" class="item" _msttexthash="171184" _msthash="1289" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Khalifa Park
                                                                                        </div>
                                                                                        <div data-value="854081441" class="item" _msttexthash="130130" _msthash="1288" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Khor Khair
                                                                                        </div>
                                                                                        <div data-value="213212834" class="item" _msttexthash="179777" _msthash="1287" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Khor Khuwair
                                                                                        </div>
                                                                                        <div data-value="1586658723" class="item" _msttexthash="149942" _msthash="1286" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Khor Fakkan
                                                                                        </div>
                                                                                        <div data-value="678993068" class="item" _msttexthash="149942" _msthash="1285" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Khor Fakkan
                                                                                        </div>
                                                                                        <div data-value="2051390381" class="item" _msttexthash="202514" _msthash="1284" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Madam, Dubai
                                                                                        </div>
                                                                                        <div data-value="1411570350" class="item" _msttexthash="116389" _msthash="1283" _mstvisible="2" style="direction: ltr; text-align: left;">Junction</div>
                                                                                        <div data-value="638581167" class="item" _msttexthash="360100" _msthash="1282" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Ain Main Road, Al Ain
                                                                                        </div>
                                                                                        <div data-value="1943279784" class="item" _msttexthash="110526" _msthash="1281" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Mamzar
                                                                                        </div>
                                                                                        <div data-value="1303455657" class="item" _msttexthash="114478" _msthash="1280" _mstvisible="2" style="direction: ltr; text-align: left;">Mankhool</div>
                                                                                        <div data-value="530466474" class="item" _msttexthash="74126" _msthash="1279" _mstvisible="2" style="direction: ltr; text-align: left;">Masafi</div>
                                                                                        <div data-value="1769694635" class="item" _msttexthash="148876" _msthash="1278" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Mina Bazaar
                                                                                        </div>
                                                                                        <div data-value="994149556" class="item" _msttexthash="57447" _msthash="1277" _mstvisible="2" style="direction: ltr; text-align: left;">Field</div>
                                                                                        <div data-value="355378101" class="item" _msttexthash="129740" _msthash="1276" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Mina Zayed
                                                                                        </div>
                                                                                        <div data-value="1728823990" class="item" _msttexthash="75192" _msthash="1275" _mstvisible="2" style="direction: ltr; text-align: left;">Mirdif</div>
                                                                                        <div data-value="818995639" class="item" _msttexthash="277901" _msthash="1274" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Marfa, Abu Dhabi
                                                                                        </div>
                                                                                        <div data-value="45940912" class="item" _msttexthash="123929" _msthash="1273" _mstvisible="2" style="direction: ltr; text-align: left;">Al-Mizhar</div>
                                                                                        <div data-value="1553608625" class="item" _msttexthash="434252" _msthash="1272" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Mohammed Bin Zayed City
                                                                                        </div>
                                                                                        <div data-value="778522290" class="item" _msttexthash="152685" _msthash="1271" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            MREIFIA, AL AIN
                                                                                        </div>
                                                                                        <div data-value="2018274739" class="item" _msttexthash="76622" _msthash="1270" _mstvisible="2" style="direction: ltr; text-align: left;">Cities</div>
                                                                                        <div data-value="1244302524" class="item" _msttexthash="200343" _msthash="1269" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Muraqqabat
                                                                                        </div>
                                                                                        <div data-value="670542781" class="item" _msttexthash="80574" _msthash="1268" _mstvisible="2" style="direction: ltr; text-align: left;">square</div>
                                                                                        <div data-value="1910295230" class="item" _msttexthash="228189" _msthash="1267" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Murshid Market
                                                                                        </div>
                                                                                        <div data-value="1136257471" class="item" _msttexthash="93912" _msthash="1266" _mstvisible="2" style="direction: ltr; text-align: left;">Armored</div>
                                                                                        <div data-value="495323320" class="item" _msttexthash="93912" _msthash="1265" _mstvisible="2" style="direction: ltr; text-align: left;">Armored</div>
                                                                                        <div data-value="1868765113" class="item" _msttexthash="284648" _msthash="1264" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Popular Mussafah
                                                                                        </div>
                                                                                        <div data-value="961033914" class="item" _msttexthash="129714" _msthash="1263" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Muteena
                                                                                        </div>
                                                                                        <div data-value="185947579" class="item" _msttexthash="156091" _msthash="1262" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Nad Al , Hamar
                                                                                        </div>
                                                                                        <div data-value="1693611140" class="item" _msttexthash="140972" _msthash="1261" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Nad Al Sheba
                                                                                        </div>
                                                                                        <div data-value="920163205" class="item" _msttexthash="63531" _msthash="1260" _mstvisible="2" style="direction: ltr; text-align: left;">palms</div>
                                                                                        <div data-value="10859142" class="item" _msttexthash="256867" _msthash="1259" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            New Kuwait, Al Ain
                                                                                        </div>
                                                                                        <div data-value="1384305031" class="item" _msttexthash="255775" _msthash="1258" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            New Sarooj, Al Ain
                                                                                        </div>
                                                                                        <div data-value="745533568" class="item" _msttexthash="564538" _msthash="1257" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Niyadat، Al Ain
                                                                                        </div>
                                                                                        <div data-value="2117345153" class="item" _msttexthash="324740" _msthash="1256" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Oud Al-Tawbah, Al Ain
                                                                                        </div>
                                                                                        <div data-value="1209089666" class="item" _msttexthash="195559" _msthash="1255" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Oud Al Muteena
                                                                                        </div>
                                                                                        <div data-value="637427075" class="item" _msttexthash="219869" _msthash="1254" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            The Palm Island
                                                                                        </div>
                                                                                        <div data-value="2010872972" class="item" _msttexthash="129194" _msthash="1253" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Port Saeed
                                                                                        </div>
                                                                                        <div data-value="1101110157" class="item" _msttexthash="335231" _msthash="1252" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Qpoint, Advantages
                                                                                        </div>
                                                                                        <div data-value="328120974" class="item" _msttexthash="59670" _msthash="1251" _mstvisible="2" style="direction: ltr; text-align: left;">Shell</div>
                                                                                        <div data-value="1835784591" class="item" _msttexthash="78754" _msthash="1250" _mstvisible="2" style="direction: ltr; text-align: left;">Saints</div>
                                                                                        <div data-value="1060173960" class="item" _msttexthash="300872" _msthash="1249" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Ras Al Khaimah City
                                                                                        </div>
                                                                                        <div data-value="152897417" class="item" _msttexthash="428961" _msthash="1248" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Ras Al Khaimah Corniche
                                                                                        </div>
                                                                                        <div data-value="1526343306" class="item" _msttexthash="190749" _msthash="1247" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Ras Al Khaimah
                                                                                        </div>
                                                                                        <div data-value="885474699" class="item" _msttexthash="403715" _msthash="1246" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Ras Al Khaimah Airport
                                                                                        </div>
                                                                                        <div data-value="111961236" class="item" _msttexthash="300872" _msthash="1245" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Ras Al Khaimah City
                                                                                        </div>
                                                                                        <div data-value="1351254933" class="item" _msttexthash="502567" _msthash="1244" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Ras Al Khaimah Marine City
                                                                                        </div>
                                                                                        <div data-value="576168598" class="item" _msttexthash="126607" _msthash="1243" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Ras Al Khor
                                                                                        </div>
                                                                                        <div data-value="2084356503" class="item" _msttexthash="133822" _msthash="1242" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Rashidiya
                                                                                        </div>
                                                                                        <div data-value="1310318736" class="item" _msttexthash="193531" _msthash="1241" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Reem Island
                                                                                        </div>
                                                                                        <div data-value="468062097" class="item" _msttexthash="92963" _msthash="1240" _mstvisible="2" style="direction: ltr; text-align: left;">Remraam</div>
                                                                                        <div data-value="1975725714" class="item" _msttexthash="500760" _msthash="1239" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Ventricular tenderness
                                                                                        </div>
                                                                                        <div data-value="1202212243" class="item" _msttexthash="79118" _msthash="1238" _mstvisible="2" style="direction: ltr; text-align: left;">Ruwais</div>
                                                                                        <div data-value="292908188" class="item" _msttexthash="259298" _msthash="1237" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Ruwais, Abu Dhabi
                                                                                        </div>
                                                                                        <div data-value="1666419613" class="item" _msttexthash="60554" _msthash="1236" _mstvisible="2" style="direction: ltr; text-align: left;">Satwa</div>
                                                                                        <div data-value="1027123870" class="item" _msttexthash="352599" _msthash="1235" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Khalifa Popularity
                                                                                        </div>
                                                                                        <div data-value="252037535" class="item" _msttexthash="117208" _msthash="1234" _mstvisible="2" style="direction: ltr; text-align: left;">Nobility</div>
                                                                                        <div data-value="1491265688" class="item" _msttexthash="92404" _msthash="1233" _mstvisible="2" style="direction: ltr; text-align: left;">Sharjah</div>
                                                                                        <div data-value="718272409" class="item" _msttexthash="175942" _msthash="1232" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Sharjah City
                                                                                        </div>
                                                                                        <div data-value="76813978" class="item" _msttexthash="526981" _msthash="1231" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Sharjah Free Zone, Sharjah
                                                                                        </div>
                                                                                        <div data-value="1450259867" class="item" _msttexthash="781742" _msthash="1230" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Shaqia International Airport
                                                                                        </div>
                                                                                        <div data-value="543053028" class="item" _msttexthash="204776" _msthash="1229" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Sharjah, Al Ras
                                                                                        </div>
                                                                                        <div data-value="1916498917" class="item" _msttexthash="251264" _msthash="1228" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Sila, Abu Dhabi
                                                                                        </div>
                                                                                        <div data-value="1275171558" class="item" _msttexthash="98111" _msthash="1227" _mstvisible="2" style="direction: ltr; text-align: left;">Sonapur</div>
                                                                                        <div data-value="435073511" class="item" _msttexthash="247156" _msthash="1226" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Maryah Island
                                                                                        </div>
                                                                                        <div data-value="1808519392" class="item" _msttexthash="284518" _msthash="1225" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Sweihan, Abu Dhabi
                                                                                        </div>
                                                                                        <div data-value="1167130593" class="item" _msttexthash="256867" _msthash="1224" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Turaif, Abu Dhabi
                                                                                        </div>
                                                                                        <div data-value="394075874" class="item" _msttexthash="151957" _msthash="1223" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Techno Park
                                                                                        </div>
                                                                                        <div data-value="1633304035" class="item" _msttexthash="224419" _msthash="1222" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Green Building
                                                                                        </div>
                                                                                        <div data-value="858217708" class="item" _msttexthash="95732" _msthash="1221" _mstvisible="2" style="direction: ltr; text-align: left;">Meadows</div>
                                                                                        <div data-value="218921965" class="item" _msttexthash="97422" _msthash="1220" _mstvisible="2" style="direction: ltr; text-align: left;">Springs</div>
                                                                                        <div data-value="1592433390" class="item" _msttexthash="59293" _msthash="1219" _mstvisible="2" style="direction: ltr; text-align: left;">Villa</div>
                                                                                        <div data-value="683129327" class="item" _msttexthash="434941" _msthash="1218" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Madinah Center, Al Ain
                                                                                        </div>
                                                                                        <div data-value="2057099496" class="item" _msttexthash="199511" _msthash="1217" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Mother of Fire
                                                                                        </div>
                                                                                        <div data-value="1417275369" class="item" _msttexthash="154583" _msthash="1216" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            um Al Quwain
                                                                                        </div>
                                                                                        <div data-value="642123498" class="item" _msttexthash="115505" _msthash="1215" _mstvisible="2" style="direction: ltr; text-align: left;">um Ramool</div>
                                                                                        <div data-value="1881351659" class="item" _msttexthash="154583" _msthash="1214" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            um Al Quwain
                                                                                        </div>
                                                                                        <div data-value="1107838196" class="item" _msttexthash="106964" _msthash="1213" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Al Wathba
                                                                                        </div>
                                                                                        <div data-value="534078453" class="item" _msttexthash="221689" _msthash="1212" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Yas Island East
                                                                                        </div>
                                                                                        <div data-value="782870514" class="item" _msttexthash="186212" _msthash="1211" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Dubai - Marina
                                                                                        </div>
                                                                                        <div data-value="2021050099" class="item" _msttexthash="256191" _msthash="1210" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Dubai - Kite Beach
                                                                                        </div>
                                                                                        <div data-value="1247012348" class="item" _msttexthash="156182" _msthash="1209" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Dubai - La Mer
                                                                                        </div>
                                                                                        <div data-value="607651069" class="item" _msttexthash="251849" _msthash="1208" _mstvisible="2" style="direction: ltr; text-align: left;">
                                                                                            Dubai - Downtown
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!---->
                                                                        </fieldset>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <span>
                                                                        <fieldset class="form-group">
                                                                            <label for="neighborhood_name" _msttexthash="204243" _msthash="658" style="direction: ltr; text-align: left;">Neighborhood</label>
                                                                            <input type="text" id="neighborhood_name" placeholder="District Name" class="form-control is-invalid" _mstplaceholder="1449006" _msthash="659" style="direction: ltr; text-align: left;" />
                                                                            <div class="invalid-feedback" _msttexthash="534885" _msthash="1206" style="direction: ltr; text-align: left;">Neighborhood is required</div>
                                                                        </fieldset>
                                                                    </span>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <span>
                                                                        <fieldset class="form-group">
                                                                            <label for="street_name" _msttexthash="78624" _msthash="660" style="direction: ltr; text-align: left;">Street</label>
                                                                            <input type="text" id="street_name" placeholder="Street Name" class="form-control is-invalid" _mstplaceholder="2043288" _msthash="661" style="direction: ltr; text-align: left;" />
                                                                            <div class="invalid-feedback" _msttexthash="202280" _msthash="1205" style="direction: ltr; text-align: left;">Street Wanted</div>
                                                                        </fieldset>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <span>
                                                                        <fieldset class="form-group">
                                                                            <!---->
                                                                            <label for="home_address" _msttexthash="659269" _msthash="662" style="direction: ltr; text-align: left;"> House Description (optional) </label>
                                                                            <input type="text" id="home_address" placeholder="House description" class="form-control" _mstplaceholder="1738165" _msthash="663" style="direction: ltr; text-align: left;" />
                                                                            <!---->
                                                                        </fieldset>
                                                                    </span>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <span>
                                                                        <fieldset class="form-group">
                                                                            <label for="postal_code" _msttexthash="415272" _msthash="664" style="direction: ltr; text-align: left;">Postal Code (optional)</label>
                                                                            <input type="text" id="postal_code" placeholder="Zip code" class="form-control" _mstplaceholder="3105180" _msthash="665" style="direction: ltr; text-align: left;" />
                                                                            <!---->
                                                                        </fieldset>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12"><!----></div>
                                                    </div>
                                                </form>
                                            </span>
                                            <span>
                                                <span>
                                                    <div class="ui toggle checkbox checkbox--extra-space">
                                                        <input id="receiver_toggle" type="checkbox" name="receiver-shipping" />
                                                        <label for="receiver_toggle"><?php _e('Receiving the order through someone else?', 'mahalik'); ?></label>
                                                    </div>
                                                </span>
                                                <div id="receiver_address" class="panel-block" style="display: none;">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <label class="section-title payment-section-title">
                                                                <?php _e(' Add recipient contact details', 'mahalik'); ?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="shipping-address">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <span>
                                                                    <fieldset class="form-group">
                                                                        <label for="receiver_name">Recipient Name</label>
                                                                        <input type="text" id="receiver_name" class="form-control" />
                                                                    </fieldset>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="row" _mstvisible="2">
                                                            <div class="col-md-6" _mstvisible="3">
                                                                <span _mstvisible="4">
                                                                    <fieldset class="form-group" _mstvisible="5">
                                                                        <label for="receiver_mobile" _msttexthash="208299" _msthash="669" _mstvisible="6" style="direction: ltr; text-align: left;">mobile number</label>
                                                                        <div data-v-48040520="" class="form-control tel-input-wrapper" _mstvisible="6">
                                                                            <div data-v-48040520="" class="vue-tel-input" _mstvisible="7">
                                                                                <div tabindex="0" class="vti__dropdown" _mstvisible="8">
                                                                                    <span class="vti__selection" _mstvisible="9">
                                                                                        <div class="vti__flag sa" _mstvisible="10"></div>
                                                                                        <!---->
                                                                                        <span class="vti__dropdown-arrow" _msttexthash="879060" _msthash="670" _mstvisible="10" style="text-align: left;">▼</span>
                                                                                    </span>
                                                                                    <ul class="vti__dropdown-list below" style="display: none;" _mstvisible="9">
                                                                                        <li class="vti__dropdown-item preferred" _mstvisible="10">
                                                                                            <div class="vti__flag sa" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="531102" _msthash="671" _mstvisible="11" style="direction: ltr; text-align: left;">Saudi Arabia (Saudi Arabia)</strong>
                                                                                            <span _msttexthash="23179" _msthash="672" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +966
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item preferred" _mstvisible="10">
                                                                                            <div class="vti__flag ae" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="1224613" _msthash="673" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                United Arab Emirates (United Arab Emirates)
                                                                                            </strong>
                                                                                            <span _msttexthash="22646" _msthash="674" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +971
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item preferred" _mstvisible="10">
                                                                                            <div class="vti__flag kw" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="231933" _msthash="675" _mstvisible="11" style="direction: ltr; text-align: left;">Kuwait (Kuwait)</strong>
                                                                                            <span _msttexthash="23049" _msthash="676" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +965
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item preferred" _mstvisible="10">
                                                                                            <div class="vti__flag bh" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="274924" _msthash="677" _mstvisible="11" style="direction: ltr; text-align: left;">Bahrain (Bahrain)</strong>
                                                                                            <span _msttexthash="22906" _msthash="678" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +973
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item preferred" _mstvisible="10">
                                                                                            <div class="vti__flag iq" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="129129" _msthash="679" _mstvisible="11" style="direction: ltr; text-align: left;">Iraq (Iraq)</strong>
                                                                                            <span _msttexthash="22919" _msthash="680" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +964
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item preferred" _mstvisible="10">
                                                                                            <div class="vti__flag qa" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="175110" _msthash="681" _mstvisible="11" style="direction: ltr; text-align: left;">Qatar (Qatar)</strong>
                                                                                            <span _msttexthash="23036" _msthash="682" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +974
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item preferred" _mstvisible="10">
                                                                                            <div class="vti__flag om" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="128271" _msthash="683" _mstvisible="11" style="direction: ltr; text-align: left;">Oman (Oman)</strong>
                                                                                            <span _msttexthash="23439" _msthash="684" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +968
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item preferred" _mstvisible="10">
                                                                                            <div class="vti__flag ye" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="176046" _msthash="685" _mstvisible="11" style="direction: ltr; text-align: left;">Yemen (Yemen)</strong>
                                                                                            <span _msttexthash="23309" _msthash="686" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +967
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item last-preferred preferred" _mstvisible="10">
                                                                                            <div class="vti__flag eg" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="181064" _msthash="687" _mstvisible="11" style="direction: ltr; text-align: left;">Egypt (Egypt)</strong>
                                                                                            <span _msttexthash="14729" _msthash="688" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +20
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag af" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="558506" _msthash="689" _mstvisible="11" style="direction: ltr; text-align: left;">Afghanistan (Afghanistan)</strong>
                                                                                            <span _msttexthash="15808" _msthash="690" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +93
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag al" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="346541" _msthash="691" _mstvisible="11" style="direction: ltr; text-align: left;">Albania (Shqipëri)</strong>
                                                                                            <span _msttexthash="22308" _msthash="692" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +355
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag dz" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="273884" _msthash="693" _mstvisible="11" style="direction: ltr; text-align: left;">Algeria (Algeria)</strong>
                                                                                            <span _msttexthash="21476" _msthash="694" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +213
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag as" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="221143" _msthash="695" _mstvisible="11" style="direction: ltr; text-align: left;">American Samoa</strong>
                                                                                            <span _msttexthash="30043" _msthash="696" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +1684
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ad" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="93964" _msthash="697" _mstvisible="11" style="direction: ltr; text-align: left;">Andorra</strong>
                                                                                            <span _msttexthash="22672" _msthash="698" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +376
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ao" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="74412" _msthash="699" _mstvisible="11" style="direction: ltr; text-align: left;">Angola</strong>
                                                                                            <span _msttexthash="21957" _msthash="700" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +244
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ai" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="112385" _msthash="701" _mstvisible="11" style="direction: ltr; text-align: left;">Anguilla</strong>
                                                                                            <span _msttexthash="29315" _msthash="702" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +1264
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ag" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="334321" _msthash="703" _mstvisible="11" style="direction: ltr; text-align: left;">Antigua and Barbuda</strong>
                                                                                            <span _msttexthash="29887" _msthash="704" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +1268
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ar" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="133458" _msthash="705" _mstvisible="11" style="direction: ltr; text-align: left;">Argentina</strong>
                                                                                            <span _msttexthash="15509" _msthash="706" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +54
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag am" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="2779751" _msthash="707" _mstvisible="11" style="direction: ltr; text-align: left;">Armenia (Հայաստան)</strong>
                                                                                            <span _msttexthash="22412" _msthash="708" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +374
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag aw" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="41847" _msthash="709" _mstvisible="11" style="direction: ltr; text-align: left;">Arba</strong>
                                                                                            <span _msttexthash="22932" _msthash="710" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +297
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag au" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="134329" _msthash="711" _mstvisible="11" style="direction: ltr; text-align: left;">Australia</strong>
                                                                                            <span _msttexthash="15262" _msthash="712" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +61
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag at" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="408668" _msthash="713" _mstvisible="11" style="direction: ltr; text-align: left;">Austria (Österreich)</strong>
                                                                                            <span _msttexthash="15288" _msthash="714" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +43
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag az" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="608062" _msthash="715" _mstvisible="11" style="direction: ltr; text-align: left;">Azerbaijan (Azərbaycan)</strong>
                                                                                            <span _msttexthash="23270" _msthash="716" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +994
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag bs" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="91026" _msthash="717" _mstvisible="11" style="direction: ltr; text-align: left;">Bahamas</strong>
                                                                                            <span _msttexthash="28769" _msthash="718" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +1242
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item preferred" _mstvisible="10">
                                                                                            <div class="vti__flag bh" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="274924" _msthash="719" _mstvisible="11" style="direction: ltr; text-align: left;">Bahrain (Bahrain)</strong>
                                                                                            <span _msttexthash="22906" _msthash="720" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +973
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag bd" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="5721495" _msthash="721" _mstvisible="11" style="direction: ltr; text-align: left;">Bangladesh (বাংলাদেশ)</strong>
                                                                                            <span _msttexthash="22529" _msthash="722" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +880
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag bb" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="111332" _msthash="723" _mstvisible="11" style="direction: ltr; text-align: left;">Barbados</strong>
                                                                                            <span _msttexthash="29341" _msthash="724" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +1246
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag by" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="2196779" _msthash="725" _mstvisible="11" style="direction: ltr; text-align: left;">Belarus (Беларусь)</strong>
                                                                                            <span _msttexthash="22542" _msthash="726" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +375
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag be" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="281580" _msthash="727" _mstvisible="11" style="direction: ltr; text-align: left;">Belgium (België)</strong>
                                                                                            <span _msttexthash="15067" _msthash="728" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +32
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag bz" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="75998" _msthash="729" _mstvisible="11" style="direction: ltr; text-align: left;">Belize</strong>
                                                                                            <span _msttexthash="21411" _msthash="730" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +501
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag bj" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="195754" _msthash="731" _mstvisible="11" style="direction: ltr; text-align: left;">Benin (Bénin)</strong>
                                                                                            <span _msttexthash="22373" _msthash="732" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +229
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag bm" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="92742" _msthash="733" _mstvisible="11" style="direction: ltr; text-align: left;">Bermuda</strong>
                                                                                            <span _msttexthash="28860" _msthash="734" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +1441
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag bt" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="4199455" _msthash="735" _mstvisible="11" style="direction: ltr; text-align: left;">Bhutan (འབྲུག)</strong>
                                                                                            <span _msttexthash="23166" _msthash="736" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +975
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag bo" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="93483" _msthash="737" _mstvisible="11" style="direction: ltr; text-align: left;">Bolivia</strong>
                                                                                            <span _msttexthash="22464" _msthash="738" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +591
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ba" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="9063782" _msthash="739" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                Bosnia and Herzegovina (Босна и Херцеговина)
                                                                                            </strong>
                                                                                            <span _msttexthash="22919" _msthash="740" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +387
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag bw" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="92911" _msthash="741" _mstvisible="11" style="direction: ltr; text-align: left;">Croatia</strong>
                                                                                            <span _msttexthash="22581" _msthash="742" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +267
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag br" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="225433" _msthash="743" _mstvisible="11" style="direction: ltr; text-align: left;">Brazil (Brasil)</strong>
                                                                                            <span _msttexthash="15626" _msthash="744" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +55
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag io" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="735982" _msthash="745" _mstvisible="11" style="direction: ltr; text-align: left;">British Indian Ocean Territory</strong>
                                                                                            <span _msttexthash="22217" _msthash="746" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +246
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag vg" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="446056" _msthash="747" _mstvisible="11" style="direction: ltr; text-align: left;">British Virgin Islands</strong>
                                                                                            <span _msttexthash="29575" _msthash="748" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +1284
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag bn" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="76674" _msthash="749" _mstvisible="11" style="direction: ltr; text-align: left;">Brunei</strong>
                                                                                            <span _msttexthash="22594" _msthash="750" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +673
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag bg" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="2324400" _msthash="751" _mstvisible="11" style="direction: ltr; text-align: left;">Bulgaria (България)</strong>
                                                                                            <span _msttexthash="22828" _msthash="752" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +359
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag bf" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="174096" _msthash="753" _mstvisible="11" style="direction: ltr; text-align: left;">Burkina Faso</strong>
                                                                                            <span _msttexthash="21983" _msthash="754" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +226
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag bi" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="319657" _msthash="755" _mstvisible="11" style="direction: ltr; text-align: left;">Burundi (Uburundi)</strong>
                                                                                            <span _msttexthash="22464" _msthash="756" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +257
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag kh" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="10592894" _msthash="757" _mstvisible="11" style="direction: ltr; text-align: left;">Cambodia (កម្ពុជា)</strong>
                                                                                            <span _msttexthash="22828" _msthash="758" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +855
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag cm" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="347178" _msthash="759" _mstvisible="11" style="direction: ltr; text-align: left;">Cameroon (Cameroun)</strong>
                                                                                            <span _msttexthash="22230" _msthash="760" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +237
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ca" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="71097" _msthash="761" _mstvisible="11" style="direction: ltr; text-align: left;">Canada</strong>
                                                                                            <span _msttexthash="9009" _msthash="762" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +1
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag cv" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="395486" _msthash="763" _mstvisible="11" style="direction: ltr; text-align: left;">Cape Verde (Kabu Verdi)</strong>
                                                                                            <span _msttexthash="22360" _msthash="764" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +238
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag bq" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="442988" _msthash="765" _mstvisible="11" style="direction: ltr; text-align: left;">Caribbean Netherlands</strong>
                                                                                            <span _msttexthash="23504" _msthash="766" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +599
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ky" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="226161" _msthash="767" _mstvisible="11" style="direction: ltr; text-align: left;">Cayman Islands</strong>
                                                                                            <span _msttexthash="29315" _msthash="768" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +1345
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag cf" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="1970605" _msthash="769" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                Central African Republic (République centrafricaine)
                                                                                            </strong>
                                                                                            <span _msttexthash="22100" _msthash="770" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +236
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag td" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="120692" _msthash="771" _mstvisible="11" style="direction: ltr; text-align: left;">Chad (Chad)</strong>
                                                                                            <span _msttexthash="21970" _msthash="772" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +235
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag cl" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="57681" _msthash="773" _mstvisible="11" style="direction: ltr; text-align: left;">Chile</strong>
                                                                                            <span _msttexthash="15743" _msthash="774" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +56
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag cn" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="7506759" _msthash="775" _mstvisible="11" style="direction: ltr; text-align: left;">China (中国)</strong>
                                                                                            <span _msttexthash="16055" _msthash="776" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +86
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag cx" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="282672" _msthash="777" _mstvisible="11" style="direction: ltr; text-align: left;">Christmas Island</strong>
                                                                                            <span _msttexthash="15262" _msthash="778" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +61
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag cc" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="449891" _msthash="779" _mstvisible="11" style="direction: ltr; text-align: left;">Cocos (Keeling) Islands</strong>
                                                                                            <span _msttexthash="15262" _msthash="780" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +61
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag co" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="110981" _msthash="781" _mstvisible="11" style="direction: ltr; text-align: left;">Colombia</strong>
                                                                                            <span _msttexthash="15860" _msthash="782" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +57
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag km" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="291512" _msthash="783" _mstvisible="11" style="direction: ltr; text-align: left;">Comoros (Comoros)</strong>
                                                                                            <span _msttexthash="22841" _msthash="784" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +269
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag cd" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="1339923" _msthash="785" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)
                                                                                            </strong>
                                                                                            <span _msttexthash="21827" _msthash="786" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +243
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag cg" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="981292" _msthash="787" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                Congo (Republic) (Congo-Brazzaville)
                                                                                            </strong>
                                                                                            <span _msttexthash="21697" _msthash="788" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +242
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ck" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="176488" _msthash="789" _mstvisible="11" style="direction: ltr; text-align: left;">Cook Islands</strong>
                                                                                            <span _msttexthash="22581" _msthash="790" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +682
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag cr" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="127517" _msthash="791" _mstvisible="11" style="direction: ltr; text-align: left;">Costa Rica</strong>
                                                                                            <span _msttexthash="22061" _msthash="792" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +506
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ci" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="204685" _msthash="793" _mstvisible="11" style="direction: ltr; text-align: left;">Côte d'Ivoire</strong>
                                                                                            <span _msttexthash="21853" _msthash="794" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +225
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag hr" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="314483" _msthash="795" _mstvisible="11" style="direction: ltr; text-align: left;">Croatia (Hrvatska)</strong>
                                                                                            <span _msttexthash="22659" _msthash="796" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +385
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag cu" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="42341" _msthash="797" _mstvisible="11" style="direction: ltr; text-align: left;">Cuba</strong>
                                                                                            <span _msttexthash="15392" _msthash="798" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +53
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag cw" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="111137" _msthash="799" _mstvisible="11" style="direction: ltr; text-align: left;">Curaçao</strong>
                                                                                            <span _msttexthash="23504" _msthash="800" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +599
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag cy" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="1330316" _msthash="801" _mstvisible="11" style="direction: ltr; text-align: left;">Cyprus (Κύπρος)</strong>
                                                                                            <span _msttexthash="22568" _msthash="802" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +357
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag cz" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="869739" _msthash="803" _mstvisible="11" style="direction: ltr; text-align: left;">Czech Republic (Česká republika)</strong>
                                                                                            <span _msttexthash="21411" _msthash="804" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +420
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag dk" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="279370" _msthash="805" _mstvisible="11" style="direction: ltr; text-align: left;">Denmark (Denmark)</strong>
                                                                                            <span _msttexthash="15522" _msthash="806" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +45
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag dj" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="115076" _msthash="807" _mstvisible="11" style="direction: ltr; text-align: left;">Djibouti</strong>
                                                                                            <span _msttexthash="21944" _msthash="808" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +253
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag dm" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="110630" _msthash="809" _mstvisible="11" style="direction: ltr; text-align: left;">Dominica</strong>
                                                                                            <span _msttexthash="30329" _msthash="810" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +1767
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag do" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="1279486" _msthash="811" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                Dominican Republic (República Dominicana)
                                                                                            </strong>
                                                                                            <span _msttexthash="9009" _msthash="812" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +1
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ec" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="93756" _msthash="813" _mstvisible="11" style="direction: ltr; text-align: left;">Ecuador</strong>
                                                                                            <span _msttexthash="22724" _msthash="814" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +593
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item preferred" _mstvisible="10">
                                                                                            <div class="vti__flag eg" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="181064" _msthash="815" _mstvisible="11" style="direction: ltr; text-align: left;">Egypt (Egypt)</strong>
                                                                                            <span _msttexthash="14729" _msthash="816" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +20
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag sv" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="153634" _msthash="817" _mstvisible="11" style="direction: ltr; text-align: left;">El Salvador</strong>
                                                                                            <span _msttexthash="21671" _msthash="818" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +503
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag gq" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="1017198" _msthash="819" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                Equatorial Guinea (Guinea Ecuatorial)
                                                                                            </strong>
                                                                                            <span _msttexthash="21437" _msthash="820" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +240
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag er" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="93951" _msthash="821" _mstvisible="11" style="direction: ltr; text-align: left;">Eritrea</strong>
                                                                                            <span _msttexthash="22152" _msthash="822" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +291
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ee" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="225641" _msthash="823" _mstvisible="11" style="direction: ltr; text-align: left;">Estonia (Eesti)</strong>
                                                                                            <span _msttexthash="22152" _msthash="824" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +372
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag et" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="112905" _msthash="825" _mstvisible="11" style="direction: ltr; text-align: left;">Ethiopia</strong>
                                                                                            <span _msttexthash="21684" _msthash="826" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +251
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag fk" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="816582" _msthash="827" _mstvisible="11" style="direction: ltr; text-align: left;">Falkland Islands (Islas Malvinas)</strong>
                                                                                            <span _msttexthash="21281" _msthash="828" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +500
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag fo" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="483730" _msthash="829" _mstvisible="11" style="direction: ltr; text-align: left;">Faroe Islands (Føroyar)</strong>
                                                                                            <span _msttexthash="23062" _msthash="830" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +298
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag fj" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="43342" _msthash="831" _mstvisible="11" style="direction: ltr; text-align: left;">Fiji</strong>
                                                                                            <span _msttexthash="23374" _msthash="832" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +679
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag fi" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="226564" _msthash="833" _mstvisible="11" style="direction: ltr; text-align: left;">Finland (Suomi)</strong>
                                                                                            <span _msttexthash="22698" _msthash="834" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +358
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag fr" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="73788" _msthash="835" _mstvisible="11" style="direction: ltr; text-align: left;">France</strong>
                                                                                            <span _msttexthash="15184" _msthash="836" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +33
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag gf" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="823472" _msthash="837" _mstvisible="11" style="direction: ltr; text-align: left;">French Guiana (Guyane française)</strong>
                                                                                            <span _msttexthash="22854" _msthash="838" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +594
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag pf" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="1202799" _msthash="839" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                French Polynesia (Polynésie française)
                                                                                            </strong>
                                                                                            <span _msttexthash="23491" _msthash="840" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +689
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ga" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="58175" _msthash="841" _mstvisible="11" style="direction: ltr; text-align: left;">Gabon</strong>
                                                                                            <span _msttexthash="21567" _msthash="842" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +241
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag gm" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="155246" _msthash="843" _mstvisible="11" style="direction: ltr; text-align: left;">Side by side</strong>
                                                                                            <span _msttexthash="21203" _msthash="844" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +220
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ge" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="11046802" _msthash="845" _mstvisible="11" style="direction: ltr; text-align: left;">Georgia (საქართველო)</strong>
                                                                                            <span _msttexthash="23400" _msthash="846" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +995
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag de" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="413608" _msthash="847" _mstvisible="11" style="direction: ltr; text-align: left;">Germany (Deutschland)</strong>
                                                                                            <span _msttexthash="15990" _msthash="848" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +49
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag gh" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="165516" _msthash="849" _mstvisible="11" style="direction: ltr; text-align: left;">Ghana (Gaana)</strong>
                                                                                            <span _msttexthash="21710" _msthash="850" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +233
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag gi" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="133874" _msthash="851" _mstvisible="11" style="direction: ltr; text-align: left;">Gibraltar</strong>
                                                                                            <span _msttexthash="21658" _msthash="852" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +350
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag gr" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="1305343" _msthash="853" _mstvisible="11" style="direction: ltr; text-align: left;">Greece (Ελλάδα)</strong>
                                                                                            <span _msttexthash="14833" _msthash="854" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +30
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag gl" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="637039" _msthash="855" _mstvisible="11" style="direction: ltr; text-align: left;">Greenland (Kalaallit Nunaat)</strong>
                                                                                            <span _msttexthash="23192" _msthash="856" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +299
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag gd" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="90298" _msthash="857" _mstvisible="11" style="direction: ltr; text-align: left;">Grenada</strong>
                                                                                            <span _msttexthash="29536" _msthash="858" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +1473
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag gp" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="157170" _msthash="859" _mstvisible="11" style="direction: ltr; text-align: left;">Guadeloupe</strong>
                                                                                            <span _msttexthash="22334" _msthash="860" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +590
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag gu" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="44148" _msthash="861" _mstvisible="11" style="direction: ltr; text-align: left;">Guam</strong>
                                                                                            <span _msttexthash="29484" _msthash="862" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +1671
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag gt" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="131469" _msthash="863" _mstvisible="11" style="direction: ltr; text-align: left;">Guatemala</strong>
                                                                                            <span _msttexthash="21541" _msthash="864" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +502
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag gg" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="118027" _msthash="865" _mstvisible="11" style="direction: ltr; text-align: left;">Guernsey</strong>
                                                                                            <span _msttexthash="15405" _msthash="866" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +44
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag gn" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="253565" _msthash="867" _mstvisible="11" style="direction: ltr; text-align: left;">Guinea (Guinée)</strong>
                                                                                            <span _msttexthash="21723" _msthash="868" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +224
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag gw" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="666913" _msthash="869" _mstvisible="11" style="direction: ltr; text-align: left;">Guinea-Bissau (Guiné Bissau)</strong>
                                                                                            <span _msttexthash="22087" _msthash="870" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +245
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag gy" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="76258" _msthash="871" _mstvisible="11" style="direction: ltr; text-align: left;">Guyana</strong>
                                                                                            <span _msttexthash="22594" _msthash="872" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +592
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ht" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="59020" _msthash="873" _mstvisible="11" style="direction: ltr; text-align: left;">Haiti</strong>
                                                                                            <span _msttexthash="22451" _msthash="874" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +509
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag hn" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="115804" _msthash="875" _mstvisible="11" style="direction: ltr; text-align: left;">Honduras</strong>
                                                                                            <span _msttexthash="21801" _msthash="876" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +504
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag hk" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="14539642" _msthash="877" _mstvisible="11" style="direction: ltr; text-align: left;">Hong Kong (香港)</strong>
                                                                                            <span _msttexthash="22438" _msthash="878" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +852
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag hu" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="501917" _msthash="879" _mstvisible="11" style="direction: ltr; text-align: left;">Hungary (Magyarország)</strong>
                                                                                            <span _msttexthash="15535" _msthash="880" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +36
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag is" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="272831" _msthash="881" _mstvisible="11" style="direction: ltr; text-align: left;">Iceland (Ísland)</strong>
                                                                                            <span _msttexthash="22178" _msthash="882" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +354
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag in" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="1845558" _msthash="883" _mstvisible="11" style="direction: ltr; text-align: left;">India (भारत)</strong>
                                                                                            <span _msttexthash="15574" _msthash="884" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +91
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag id" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="182819" _msthash="885" _mstvisible="11" style="direction: ltr; text-align: left;">Philippines</strong>
                                                                                            <span _msttexthash="15379" _msthash="886" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +62
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ir" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="128154" _msthash="887" _mstvisible="11" style="direction: ltr; text-align: left;">Iran (Iran)</strong>
                                                                                            <span _msttexthash="16393" _msthash="888" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +98
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item preferred" _mstvisible="10">
                                                                                            <div class="vti__flag iq" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="129129" _msthash="889" _mstvisible="11" style="direction: ltr; text-align: left;">Iraq (Iraq)</strong>
                                                                                            <span _msttexthash="22919" _msthash="890" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +964
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ie" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="92287" _msthash="891" _mstvisible="11" style="direction: ltr; text-align: left;">Ireland</strong>
                                                                                            <span _msttexthash="22048" _msthash="892" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +353
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag im" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="128271" _msthash="893" _mstvisible="11" style="direction: ltr; text-align: left;">Isle of Man</strong>
                                                                                            <span _msttexthash="15405" _msthash="894" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +44
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag il" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="1654562" _msthash="895" _mstvisible="11" style="direction: ltr; text-align: left;">Israel (ישראל)</strong>
                                                                                            <span _msttexthash="22776" _msthash="896" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +972
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag it" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="198497" _msthash="897" _mstvisible="11" style="direction: ltr; text-align: left;">Italy (Italia)</strong>
                                                                                            <span _msttexthash="15886" _msthash="898" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +39
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag jm" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="89037" _msthash="899" _mstvisible="11" style="direction: ltr; text-align: left;">Jamaica</strong>
                                                                                            <span _msttexthash="30433" _msthash="900" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +1876
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag jp" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="9287850" _msthash="901" _mstvisible="11" style="direction: ltr; text-align: left;">Japan (日本)</strong>
                                                                                            <span _msttexthash="15470" _msthash="902" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +81
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag je" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="78845" _msthash="903" _mstvisible="11" style="direction: ltr; text-align: left;">Jersey</strong>
                                                                                            <span _msttexthash="15405" _msthash="904" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +44
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag jo" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="223860" _msthash="905" _mstvisible="11" style="direction: ltr; text-align: left;">Jordan (Jordan)</strong>
                                                                                            <span _msttexthash="22659" _msthash="906" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +962
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag kz" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="2957994" _msthash="907" _mstvisible="11" style="direction: ltr; text-align: left;">Kazakhstan (Казахстан)</strong>
                                                                                            <span _msttexthash="9633" _msthash="908" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +7
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ke" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="182819" _msthash="909" _mstvisible="11" style="direction: ltr; text-align: left;">Philippines</strong>
                                                                                            <span _msttexthash="22074" _msthash="910" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +254
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ki" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="112593" _msthash="911" _mstvisible="11" style="direction: ltr; text-align: left;">Kiribati</strong>
                                                                                            <span _msttexthash="23101" _msthash="912" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +686
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag xk" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="80444" _msthash="913" _mstvisible="11" style="direction: ltr; text-align: left;">Kosovo</strong>
                                                                                            <span _msttexthash="22399" _msthash="914" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +383
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item preferred" _mstvisible="10">
                                                                                            <div class="vti__flag kw" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="231933" _msthash="915" _mstvisible="11" style="direction: ltr; text-align: left;">Kuwait (Kuwait)</strong>
                                                                                            <span _msttexthash="23049" _msthash="916" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +965
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag kg" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="3356210" _msthash="917" _mstvisible="11" style="direction: ltr; text-align: left;">Kyrgyzstan (Кыргызстан)</strong>
                                                                                            <span _msttexthash="23530" _msthash="918" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +996
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag la" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="1961960" _msthash="919" _mstvisible="11" style="direction: ltr; text-align: left;">Laos (ລາວ)</strong>
                                                                                            <span _msttexthash="22958" _msthash="920" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +856
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag lv" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="252941" _msthash="921" _mstvisible="11" style="direction: ltr; text-align: left;">Latvia (Latvija)</strong>
                                                                                            <span _msttexthash="22022" _msthash="922" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +371
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag lb" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="278382" _msthash="923" _mstvisible="11" style="direction: ltr; text-align: left;">Lebanon (Lebanon)</strong>
                                                                                            <span _msttexthash="22529" _msthash="924" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +961
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ls" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="96876" _msthash="925" _mstvisible="11" style="direction: ltr; text-align: left;">Lesotho</strong>
                                                                                            <span _msttexthash="22451" _msthash="926" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +266
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag lr" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="91507" _msthash="927" _mstvisible="11" style="direction: ltr; text-align: left;">Liberia</strong>
                                                                                            <span _msttexthash="21450" _msthash="928" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +231
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ly" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="172406" _msthash="929" _mstvisible="11" style="direction: ltr; text-align: left;">Libya (Libya)</strong>
                                                                                            <span _msttexthash="22126" _msthash="930" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +218
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag li" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="233194" _msthash="931" _mstvisible="11" style="direction: ltr; text-align: left;">Liechtenstein</strong>
                                                                                            <span _msttexthash="21801" _msthash="932" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +423
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag lt" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="345683" _msthash="933" _mstvisible="11" style="direction: ltr; text-align: left;">Lithuania (Lietuva)</strong>
                                                                                            <span _msttexthash="21892" _msthash="934" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +370
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag lu" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="160836" _msthash="935" _mstvisible="11" style="direction: ltr; text-align: left;">Luxembourg</strong>
                                                                                            <span _msttexthash="21918" _msthash="936" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +352
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag mo" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="11870313" _msthash="937" _mstvisible="11" style="direction: ltr; text-align: left;">Macau (澳門)</strong>
                                                                                            <span _msttexthash="22568" _msthash="938" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +853
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag mk" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="4280601" _msthash="939" _mstvisible="11" style="direction: ltr; text-align: left;">Macedonia (FYROM) (Македонија)</strong>
                                                                                            <span _msttexthash="23179" _msthash="940" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +389
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag mg" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="547378" _msthash="941" _mstvisible="11" style="direction: ltr; text-align: left;">Madagascar (Madagasikara)</strong>
                                                                                            <span _msttexthash="21801" _msthash="942" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +261
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag mw" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="75738" _msthash="943" _mstvisible="11" style="direction: ltr; text-align: left;">Malawi</strong>
                                                                                            <span _msttexthash="22321" _msthash="944" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +265
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag my" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="112983" _msthash="945" _mstvisible="11" style="direction: ltr; text-align: left;">Malaysia</strong>
                                                                                            <span _msttexthash="15145" _msthash="946" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +60
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag mv" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="114153" _msthash="947" _mstvisible="11" style="direction: ltr; text-align: left;">Maldives</strong>
                                                                                            <span _msttexthash="22399" _msthash="948" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +960
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ml" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="43381" _msthash="949" _mstvisible="11" style="direction: ltr; text-align: left;">Mali</strong>
                                                                                            <span _msttexthash="21593" _msthash="950" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +223
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag mt" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="58682" _msthash="951" _mstvisible="11" style="direction: ltr; text-align: left;">Malta</strong>
                                                                                            <span _msttexthash="22438" _msthash="952" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +356
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag mh" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="282581" _msthash="953" _mstvisible="11" style="direction: ltr; text-align: left;">Marshall Islands</strong>
                                                                                            <span _msttexthash="22698" _msthash="954" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +692
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag mq" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="159822" _msthash="955" _mstvisible="11" style="direction: ltr; text-align: left;">Martinique</strong>
                                                                                            <span _msttexthash="23114" _msthash="956" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +596
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag mr" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="483327" _msthash="957" _mstvisible="11" style="direction: ltr; text-align: left;">Mauritania (Mauritania)</strong>
                                                                                            <span _msttexthash="21463" _msthash="958" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +222
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag mu" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="290069" _msthash="959" _mstvisible="11" style="direction: ltr; text-align: left;">Mauritius (Moris)</strong>
                                                                                            <span _msttexthash="21320" _msthash="960" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +230
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag yt" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="97435" _msthash="961" _mstvisible="11" style="direction: ltr; text-align: left;">Mayotte</strong>
                                                                                            <span _msttexthash="21931" _msthash="962" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +262
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag mx" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="252291" _msthash="963" _mstvisible="11" style="direction: ltr; text-align: left;">Mexico (México)</strong>
                                                                                            <span _msttexthash="15275" _msthash="964" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +52
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag fm" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="156013" _msthash="965" _mstvisible="11" style="direction: ltr; text-align: left;">Micronesia</strong>
                                                                                            <span _msttexthash="22568" _msthash="966" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +691
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag md" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="600483" _msthash="967" _mstvisible="11" style="direction: ltr; text-align: left;">Moldova (Republica Moldova)</strong>
                                                                                            <span _msttexthash="22282" _msthash="968" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +373
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag mc" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="75504" _msthash="969" _mstvisible="11" style="direction: ltr; text-align: left;">Monaco</strong>
                                                                                            <span _msttexthash="22802" _msthash="970" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +377
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag mn" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="1688713" _msthash="971" _mstvisible="11" style="direction: ltr; text-align: left;">Mongolia (Монгол)</strong>
                                                                                            <span _msttexthash="23296" _msthash="972" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +976
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag me" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="401440" _msthash="973" _mstvisible="11" style="direction: ltr; text-align: left;">Montenegro (Crna Gora)</strong>
                                                                                            <span _msttexthash="22269" _msthash="974" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +382
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ms" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="161759" _msthash="975" _mstvisible="11" style="direction: ltr; text-align: left;">Montserrat</strong>
                                                                                            <span _msttexthash="29783" _msthash="976" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +1664
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ma" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="283452" _msthash="977" _mstvisible="11" style="direction: ltr; text-align: left;">Morocco (Morocco)</strong>
                                                                                            <span _msttexthash="21346" _msthash="978" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +212
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag mz" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="519142" _msthash="979" _mstvisible="11" style="direction: ltr; text-align: left;">Mozambique (Moçambique)</strong>
                                                                                            <span _msttexthash="22594" _msthash="980" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +258
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag mm" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="8152404" _msthash="981" _mstvisible="11" style="direction: ltr; text-align: left;">Myanmar (Burma) (မြန်မာ)</strong>
                                                                                            <span _msttexthash="16042" _msthash="982" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +95
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag na" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="309088" _msthash="983" _mstvisible="11" style="direction: ltr; text-align: left;">Namibia (Namibië)</strong>
                                                                                            <span _msttexthash="22191" _msthash="984" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +264
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag nr" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="62426" _msthash="985" _mstvisible="11" style="direction: ltr; text-align: left;">Nauru</strong>
                                                                                            <span _msttexthash="22724" _msthash="986" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +674
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag np" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="2372812" _msthash="987" _mstvisible="11" style="direction: ltr; text-align: left;">Nepal (नेपाल)</strong>
                                                                                            <span _msttexthash="23426" _msthash="988" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +977
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag nl" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="478075" _msthash="989" _mstvisible="11" style="direction: ltr; text-align: left;">Netherlands (Nederland)</strong>
                                                                                            <span _msttexthash="14950" _msthash="990" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +31
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag nc" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="944333" _msthash="991" _mstvisible="11" style="direction: ltr; text-align: left;">New Caledonia (Nouvelle-Calédonie)</strong>
                                                                                            <span _msttexthash="23231" _msthash="992" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +687
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag nz" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="150956" _msthash="993" _mstvisible="11" style="direction: ltr; text-align: left;">New Zealand</strong>
                                                                                            <span _msttexthash="15613" _msthash="994" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +64
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ni" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="131261" _msthash="995" _mstvisible="11" style="direction: ltr; text-align: left;">Nicaragua</strong>
                                                                                            <span _msttexthash="21931" _msthash="996" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +505
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ne" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="173667" _msthash="997" _mstvisible="11" style="direction: ltr; text-align: left;">Niger (Nijar)</strong>
                                                                                            <span _msttexthash="22113" _msthash="998" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +227
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ng" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="92274" _msthash="999" _mstvisible="11" style="direction: ltr; text-align: left;">Nigeria</strong>
                                                                                            <span _msttexthash="21840" _msthash="1000" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +234
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag nu" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="44837" _msthash="1001" _mstvisible="11" style="direction: ltr; text-align: left;">Niue</strong>
                                                                                            <span _msttexthash="22711" _msthash="1002" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +683
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag nf" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="226096" _msthash="1003" _mstvisible="11" style="direction: ltr; text-align: left;">Norfolk Island</strong>
                                                                                            <span _msttexthash="22464" _msthash="1004" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +672
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag kp" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="162885541" _msthash="1005" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                North Korea (조선 민주주의 인민 공화국)
                                                                                            </strong>
                                                                                            <span _msttexthash="22178" _msthash="1006" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +850
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag mp" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="515593" _msthash="1007" _mstvisible="11" style="direction: ltr; text-align: left;">Northern Mariana Islands</strong>
                                                                                            <span _msttexthash="29341" _msthash="1008" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +1670
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag no" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="203034" _msthash="1009" _mstvisible="11" style="direction: ltr; text-align: left;">Norway (Norge)</strong>
                                                                                            <span _msttexthash="15756" _msthash="1010" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +47
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item preferred" _mstvisible="10">
                                                                                            <div class="vti__flag om" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="128271" _msthash="1011" _mstvisible="11" style="direction: ltr; text-align: left;">Oman (Oman)</strong>
                                                                                            <span _msttexthash="23439" _msthash="1012" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +968
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag pk" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="346333" _msthash="1013" _mstvisible="11" style="direction: ltr; text-align: left;">Pakistan (Pakistan)</strong>
                                                                                            <span _msttexthash="15691" _msthash="1014" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +92
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag pw" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="59345" _msthash="1015" _mstvisible="11" style="direction: ltr; text-align: left;">Palau</strong>
                                                                                            <span _msttexthash="22321" _msthash="1016" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +680
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ps" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="413738" _msthash="1017" _mstvisible="11" style="direction: ltr; text-align: left;">Palestine (Palestine)</strong>
                                                                                            <span _msttexthash="22516" _msthash="1018" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +970
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag pa" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="249860" _msthash="1019" _mstvisible="11" style="direction: ltr; text-align: left;">Panama (Panamá)</strong>
                                                                                            <span _msttexthash="22191" _msthash="1020" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +507
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag pg" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="247741" _msthash="1021" _mstvisible="11" style="direction: ltr; text-align: left;">Papua New Guinea</strong>
                                                                                            <span _msttexthash="22854" _msthash="1022" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +675
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag py" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="114712" _msthash="1023" _mstvisible="11" style="direction: ltr; text-align: left;">Paraguay</strong>
                                                                                            <span _msttexthash="22984" _msthash="1024" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +595
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag pe" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="159627" _msthash="1025" _mstvisible="11" style="direction: ltr; text-align: left;">Peru (Perú)</strong>
                                                                                            <span _msttexthash="15158" _msthash="1026" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +51
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ph" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="182819" _msthash="1027" _mstvisible="11" style="direction: ltr; text-align: left;">Philippines</strong>
                                                                                            <span _msttexthash="15496" _msthash="1028" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +63
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag pl" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="225901" _msthash="1029" _mstvisible="11" style="direction: ltr; text-align: left;">Poland (Polska)</strong>
                                                                                            <span _msttexthash="15873" _msthash="1030" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +48
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag pt" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="116090" _msthash="1031" _mstvisible="11" style="direction: ltr; text-align: left;">Portugal</strong>
                                                                                            <span _msttexthash="21788" _msthash="1032" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +351
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag pr" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="155350" _msthash="1033" _mstvisible="11" style="direction: ltr; text-align: left;">Puerto Rico</strong>
                                                                                            <span _msttexthash="9009" _msthash="1034" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +1
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item preferred" _mstvisible="10">
                                                                                            <div class="vti__flag qa" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="175110" _msthash="1035" _mstvisible="11" style="direction: ltr; text-align: left;">Qatar (Qatar)</strong>
                                                                                            <span _msttexthash="23036" _msthash="1036" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +974
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag re" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="389116" _msthash="1037" _mstvisible="11" style="direction: ltr; text-align: left;">Réunion (La Réunion)</strong>
                                                                                            <span _msttexthash="21931" _msthash="1038" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +262
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ro" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="308880" _msthash="1039" _mstvisible="11" style="direction: ltr; text-align: left;">Romania (România)</strong>
                                                                                            <span _msttexthash="14937" _msthash="1040" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +40
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ru" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="1491906" _msthash="1041" _mstvisible="11" style="direction: ltr; text-align: left;">Russia (Россия)</strong>
                                                                                            <span _msttexthash="9633" _msthash="1042" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +7
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag rw" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="74919" _msthash="1043" _mstvisible="11" style="direction: ltr; text-align: left;">Rwanda</strong>
                                                                                            <span _msttexthash="21554" _msthash="1044" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +250
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag bl" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="315588" _msthash="1045" _mstvisible="11" style="direction: ltr; text-align: left;">Saint Barthélemy</strong>
                                                                                            <span _msttexthash="22334" _msthash="1046" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +590
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag sh" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="172783" _msthash="1047" _mstvisible="11" style="direction: ltr; text-align: left;">Saint Helena</strong>
                                                                                            <span _msttexthash="22022" _msthash="1048" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +290
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag kn" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="378664" _msthash="1049" _mstvisible="11" style="direction: ltr; text-align: left;">Saint Kitts and Nevis</strong>
                                                                                            <span _msttexthash="30732" _msthash="1050" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +1869
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag lc" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="151112" _msthash="1051" _mstvisible="11" style="direction: ltr; text-align: left;">Saint Lucia</strong>
                                                                                            <span _msttexthash="30342" _msthash="1052" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +1758
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag mf" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="1506388" _msthash="1053" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                Saint Martin (Saint-Martin (partie française))
                                                                                            </strong>
                                                                                            <span _msttexthash="22334" _msthash="1054" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +590
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag pm" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="1826942" _msthash="1055" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)
                                                                                            </strong>
                                                                                            <span _msttexthash="22321" _msthash="1056" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +508
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag vc" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="774306" _msthash="1057" _mstvisible="11" style="direction: ltr; text-align: left;">Saint Vincent and the Grenadines</strong>
                                                                                            <span _msttexthash="30160" _msthash="1058" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +1784
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ws" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="58695" _msthash="1059" _mstvisible="11" style="direction: ltr; text-align: left;">Samoa</strong>
                                                                                            <span _msttexthash="22971" _msthash="1060" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +685
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag sm" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="131586" _msthash="1061" _mstvisible="11" style="direction: ltr; text-align: left;">San Marino</strong>
                                                                                            <span _msttexthash="22932" _msthash="1062" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +378
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag st" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="1348711" _msthash="1063" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                São Tomé and Príncipe (São Tomé e Príncipe)
                                                                                            </strong>
                                                                                            <span _msttexthash="22490" _msthash="1064" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +239
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item preferred" _mstvisible="10">
                                                                                            <div class="vti__flag sa" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="531102" _msthash="1065" _mstvisible="11" style="direction: ltr; text-align: left;">Saudi Arabia (Saudi Arabia)</strong>
                                                                                            <span _msttexthash="23179" _msthash="1066" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +966
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag sn" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="334802" _msthash="1067" _mstvisible="11" style="direction: ltr; text-align: left;">Senegal (Sénégal)</strong>
                                                                                            <span _msttexthash="21333" _msthash="1068" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +221
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag rs" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="1483092" _msthash="1069" _mstvisible="11" style="direction: ltr; text-align: left;">Serbia (Србија)</strong>
                                                                                            <span _msttexthash="22139" _msthash="1070" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +381
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag sc" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="157235" _msthash="1071" _mstvisible="11" style="direction: ltr; text-align: left;">Seychelles</strong>
                                                                                            <span _msttexthash="22477" _msthash="1072" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +248
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag sl" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="174616" _msthash="1073" _mstvisible="11" style="direction: ltr; text-align: left;">Sierra Leone</strong>
                                                                                            <span _msttexthash="21580" _msthash="1074" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +232
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag sg" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="135278" _msthash="1075" _mstvisible="11" style="direction: ltr; text-align: left;">Singapore</strong>
                                                                                            <span _msttexthash="15730" _msthash="1076" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +65
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag sx" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="204516" _msthash="1077" _mstvisible="11" style="direction: ltr; text-align: left;">Sint Maartten</strong>
                                                                                            <span _msttexthash="28951" _msthash="1078" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +1721
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag sk" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="386256" _msthash="1079" _mstvisible="11" style="direction: ltr; text-align: left;">Slovakia (Slovensko)</strong>
                                                                                            <span _msttexthash="21541" _msthash="1080" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +421
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag si" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="379769" _msthash="1081" _mstvisible="11" style="direction: ltr; text-align: left;">Slovenia (Slovenija)</strong>
                                                                                            <span _msttexthash="22789" _msthash="1082" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +386
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag sb" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="257608" _msthash="1083" _mstvisible="11" style="direction: ltr; text-align: left;">Solomon Islands</strong>
                                                                                            <span _msttexthash="23114" _msthash="1084" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +677
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag so" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="377728" _msthash="1085" _mstvisible="11" style="direction: ltr; text-align: left;">Somalia (Soomaaliya)</strong>
                                                                                            <span _msttexthash="21814" _msthash="1086" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +252
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag za" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="173368" _msthash="1087" _mstvisible="11" style="direction: ltr; text-align: left;">South Africa</strong>
                                                                                            <span _msttexthash="15548" _msthash="1088" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +27
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag kr" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="49020959" _msthash="1089" _mstvisible="11" style="direction: ltr; text-align: left;">South Korea (대한민국)</strong>
                                                                                            <span _msttexthash="15587" _msthash="1090" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +82
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ss" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="483106" _msthash="1091" _mstvisible="11" style="direction: ltr; text-align: left;">South Sudan (South Sudan)</strong>
                                                                                            <span _msttexthash="21216" _msthash="1092" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +211
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag es" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="226863" _msthash="1093" _mstvisible="11" style="direction: ltr; text-align: left;">Spain (España)</strong>
                                                                                            <span _msttexthash="15301" _msthash="1094" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +34
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag lk" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="8348119" _msthash="1095" _mstvisible="11" style="direction: ltr; text-align: left;">Sri Lanka (ශ් රී ලංකාව)</strong>
                                                                                            <span _msttexthash="15925" _msthash="1096" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +94
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag sd" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="174902" _msthash="1097" _mstvisible="11" style="direction: ltr; text-align: left;">Sudan (Sudan)</strong>
                                                                                            <span _msttexthash="22607" _msthash="1098" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +249
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag sr" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="114374" _msthash="1099" _mstvisible="11" style="direction: ltr; text-align: left;">Suriname</strong>
                                                                                            <span _msttexthash="23244" _msthash="1100" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +597
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag sj" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="397800" _msthash="1101" _mstvisible="11" style="direction: ltr; text-align: left;">Svalbard and Jan Mayen</strong>
                                                                                            <span _msttexthash="15756" _msthash="1102" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +47
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag sz" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="134914" _msthash="1103" _mstvisible="11" style="direction: ltr; text-align: left;">Swaziland</strong>
                                                                                            <span _msttexthash="22711" _msthash="1104" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +268
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag se" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="254891" _msthash="1105" _mstvisible="11" style="direction: ltr; text-align: left;">Sweden (Sverige)</strong>
                                                                                            <span _msttexthash="15639" _msthash="1106" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +46
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ch" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="417807" _msthash="1107" _mstvisible="11" style="direction: ltr; text-align: left;">Switzerland (Schweiz)</strong>
                                                                                            <span _msttexthash="15054" _msthash="1108" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +41
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag sy" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="178386" _msthash="1109" _mstvisible="11" style="direction: ltr; text-align: left;">Syria (Syria)</strong>
                                                                                            <span _msttexthash="22789" _msthash="1110" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +963
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag tw" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="9612967" _msthash="1111" _mstvisible="11" style="direction: ltr; text-align: left;">Taiwan (台灣)</strong>
                                                                                            <span _msttexthash="23309" _msthash="1112" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +886
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag tj" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="157807" _msthash="1113" _mstvisible="11" style="direction: ltr; text-align: left;">Tajikistan</strong>
                                                                                            <span _msttexthash="23010" _msthash="1114" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +992
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag tz" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="112892" _msthash="1115" _mstvisible="11" style="direction: ltr; text-align: left;">Tanzania</strong>
                                                                                            <span _msttexthash="22204" _msthash="1116" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +255
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag th" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="2532127" _msthash="1117" _mstvisible="11" style="direction: ltr; text-align: left;">Thailand (ไทย)</strong>
                                                                                            <span _msttexthash="15847" _msthash="1118" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +66
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag tl" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="169169" _msthash="1119" _mstvisible="11" style="direction: ltr; text-align: left;">Timor-Leste</strong>
                                                                                            <span _msttexthash="22204" _msthash="1120" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +670
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag tg" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="45669" _msthash="1121" _mstvisible="11" style="direction: ltr; text-align: left;">Togo</strong>
                                                                                            <span _msttexthash="22243" _msthash="1122" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +228
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag tk" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="95186" _msthash="1123" _mstvisible="11" style="direction: ltr; text-align: left;">Tokelau</strong>
                                                                                            <span _msttexthash="22438" _msthash="1124" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +690
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag to" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="59319" _msthash="1125" _mstvisible="11" style="direction: ltr; text-align: left;">Tonga</strong>
                                                                                            <span _msttexthash="22984" _msthash="1126" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +676
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag tt" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="336869" _msthash="1127" _mstvisible="11" style="direction: ltr; text-align: left;">Trinidad and Tobago</strong>
                                                                                            <span _msttexthash="30589" _msthash="1128" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +1868
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag tn" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="286338" _msthash="1129" _mstvisible="11" style="direction: ltr; text-align: left;">Tunisia (Tunisia)</strong>
                                                                                            <span _msttexthash="21866" _msthash="1130" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +216
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag tr" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="290836" _msthash="1131" _mstvisible="11" style="direction: ltr; text-align: left;">Turkey (Türkiye)</strong>
                                                                                            <span _msttexthash="15457" _msthash="1132" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +90
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag tm" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="209833" _msthash="1133" _mstvisible="11" style="direction: ltr; text-align: left;">Turkmenistan</strong>
                                                                                            <span _msttexthash="23140" _msthash="1134" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +993
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag tc" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="477646" _msthash="1135" _mstvisible="11" style="direction: ltr; text-align: left;">Turks and Caicos Islands</strong>
                                                                                            <span _msttexthash="30238" _msthash="1136" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +1649
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag tv" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="79924" _msthash="1137" _mstvisible="11" style="direction: ltr; text-align: left;">Tuvalu</strong>
                                                                                            <span _msttexthash="23361" _msthash="1138" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +688
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag vi" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="326209" _msthash="1139" _mstvisible="11" style="direction: ltr; text-align: left;">U.S. Virgin Islands</strong>
                                                                                            <span _msttexthash="28600" _msthash="1140" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +1340
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ug" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="73528" _msthash="1141" _mstvisible="11" style="direction: ltr; text-align: left;">Uganda</strong>
                                                                                            <span _msttexthash="22334" _msthash="1142" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +256
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ua" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="1885091" _msthash="1143" _mstvisible="11" style="direction: ltr; text-align: left;">Ukraine (Україна)</strong>
                                                                                            <span _msttexthash="22009" _msthash="1144" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +380
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item preferred" _mstvisible="10">
                                                                                            <div class="vti__flag ae" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="1224613" _msthash="1145" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                United Arab Emirates (United Arab Emirates)
                                                                                            </strong>
                                                                                            <span _msttexthash="22646" _msthash="1146" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +971
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag gb" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="226239" _msthash="1147" _mstvisible="11" style="direction: ltr; text-align: left;">United Kingdom</strong>
                                                                                            <span _msttexthash="15405" _msthash="1148" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +44
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag us" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="203996" _msthash="1149" _mstvisible="11" style="direction: ltr; text-align: left;">United States</strong>
                                                                                            <span _msttexthash="9009" _msthash="1150" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +1
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag uy" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="98982" _msthash="1151" _mstvisible="11" style="direction: ltr; text-align: left;">Uruguay</strong>
                                                                                            <span _msttexthash="23374" _msthash="1152" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +598
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag uz" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="682175" _msthash="1153" _mstvisible="11" style="direction: ltr; text-align: left;">Uzbekistan (Oʻzbekiston)</strong>
                                                                                            <span _msttexthash="23790" _msthash="1154" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +998
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag vu" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="97734" _msthash="1155" _mstvisible="11" style="direction: ltr; text-align: left;">Vanuatu</strong>
                                                                                            <span _msttexthash="23244" _msthash="1156" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +678
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag va" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="807443" _msthash="1157" _mstvisible="11" style="direction: ltr; text-align: left;">Vatican City (Città del Vaticano)</strong>
                                                                                            <span _msttexthash="15886" _msthash="1158" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +39
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ve" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="135668" _msthash="1159" _mstvisible="11" style="direction: ltr; text-align: left;">Venezuela</strong>
                                                                                            <span _msttexthash="15977" _msthash="1160" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +58
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag vn" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="1995188" _msthash="1161" _mstvisible="11" style="direction: ltr; text-align: left;">Vietnam (Việt Nam)</strong>
                                                                                            <span _msttexthash="15821" _msthash="1162" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +84
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag wf" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="935844" _msthash="1163" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                Wallis and Futuna (Wallis-et-Futuna)
                                                                                            </strong>
                                                                                            <span _msttexthash="22451" _msthash="1164" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +681
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag eh" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="722670" _msthash="1165" _mstvisible="11" style="direction: ltr; text-align: left;">Western Sahara (Western Sahara)</strong>
                                                                                            <span _msttexthash="21346" _msthash="1166" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +212
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item preferred" _mstvisible="10">
                                                                                            <div class="vti__flag ye" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="176046" _msthash="1167" _mstvisible="11" style="direction: ltr; text-align: left;">Yemen (Yemen)</strong>
                                                                                            <span _msttexthash="23309" _msthash="1168" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +967
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag zm" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="157664" _msthash="1169" _mstvisible="11" style="direction: ltr; text-align: left;">Kazakhstan</strong>
                                                                                            <span _msttexthash="21671" _msthash="1170" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +260
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag zw" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="112255" _msthash="1171" _mstvisible="11" style="direction: ltr; text-align: left;">Zimbabwe</strong>
                                                                                            <span _msttexthash="22061" _msthash="1172" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +263
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="vti__dropdown-item" _mstvisible="10">
                                                                                            <div class="vti__flag ax" _mstvisible="11"></div>
                                                                                            <strong _msttexthash="210392" _msthash="1173" _mstvisible="11" style="direction: ltr; text-align: left;">Åland Islands</strong>
                                                                                            <span _msttexthash="22698" _msthash="1174" _mstvisible="11" style="direction: ltr; text-align: left;">
                                                                                                +358
                                                                                            </span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <input type="tel" autocomplete="on" id="receiver_mobile" maxlength="25" name="telephone" placeholder="+966 51 234 5678" tabindex="0" class="vti__input" _mstplaceholder="115934" _msthash="1175" _mstvisible="8" />
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                </span>
                                                            </div>
                                                            <div class="col-md-6" _mstvisible="3">
                                                                <span _mstvisible="4">
                                                                    <fieldset class="form-group" _mstvisible="5">
                                                                        <label for="receiver_email" _msttexthash="261404" _msthash="1176" _mstvisible="6" style="direction: ltr; text-align: left;">Email (optional)</label>
                                                                        <input type="email" id="receiver_email" class="form-control" _mstvisible="6" />
                                                                        <!---->
                                                                    </fieldset>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="row" _mstvisible="2">
                                                            <div class="col-sm-12" _mstvisible="3">
                                                                <fieldset class="form-group mb-0" _mstvisible="4">
                                                                    <div class="ui toggle checkbox" _mstvisible="5">
                                                                        <input id="receiver_notify" type="checkbox" debounce-events="change" _mstvisible="6" value="" />
                                                                        <label for="receiver_notify" class="mb-0 label-light" _msttexthash="1114360" _msthash="1177" _mstvisible="6" style="direction: ltr; text-align: left;">
                                                                            Receive request notification messages
                                                                        </label>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </span>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <fieldset class="form-group">
                                                        <label _msttexthash="484822" _msthash="1178" style="direction: ltr; text-align: left;">Select Shipping Company</label>
                                                        <!---->
                                                        <p class="text-center m-0 alert alert-info" _msttexthash="4239677" _msthash="1179" style="direction: ltr;">
                                                            Please select the address to view the shipping and delivery options available to you.
                                                        </p>
                                                    </fieldset>
                                                    <!---->
                                                </div>
                                            </div>
                                        </form>
                                        <!---->
                                    </span>
                                </span>
                            </div>
                            <!---->
                        </div>
                    </div>
                    <!---->
                    <div class="row">
                        <div class="col-md-12">
                            <div id="payment_step" class="payment-step mb-0">
                                <div data-step="2" class="title title--step">
                                    <img src="https://cdn.assets.salla.network/stores/vendor/checkout/images/icons/step-payment.svg" />
                                    <h3 _msttexthash="166244" _msthash="1180" style="direction: ltr; text-align: left;">propulsion</h3>
                                </div>
                                <div id="payment_methods_wrapper">
                                    <ul id="payment_methods" class="list list--payment-methods">
                                        <li>
                                            <button type="button" class="btn btn--round btn--payment-option active">
                                                <img src="https://cdn.assets.salla.network/stores/vendor/checkout/images/icons/pay-option-mada.svg" alt="Material" _mstalt="41405" _msthash="1181" style="direction: ltr; text-align: left;" />
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="btn btn--round btn--payment-option">
                                                <img src="https://cdn.assets.salla.network/stores/vendor/checkout/images/icons/pay-option-credit-2.svg" alt="Credit card Logo" class="large" _mstalt="250367" _msthash="1182" style="direction: ltr; text-align: left;" />
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="btn btn--round btn--payment-option">
                                                <img src="https://cdn.assets.salla.network/stores/vendor/checkout/images/icons/pay-option-tabby_en.png?v=0.0.1" alt="Tabby" _mstalt="59241" _msthash="1183" style="direction: ltr; text-align: left;" />
                                            </button>
                                        </li>
                                        <!---->
                                    </ul>
                                </div>
                                <span>
                                    <form data-v-2e3ca182="" class="form form--payment">
                                        <!---->
                                        <div data-v-2e3ca182="" class="row">
                                            <div data-v-2e3ca182="" class="col-md-8 col-xs-12">
                                                <span data-v-2e3ca182="">
                                                    <fieldset data-v-2e3ca182="" data-openreplay-masked="" class="form-group--w-icon form-group payment-type">
                                                        <i data-v-2e3ca182="" class="sicon-debit-card-back"></i>
                                                        <input data-v-2e3ca182="" type="tel" maxlength="19" pattern="[0-9]*" autocomplete="cc-number" placeholder="Card Number" class="form-control ym-disable-keys ym-hide-content" _mstplaceholder="2374541" _msthash="1184" style="text-align: left;" />
                                                        <!---->
                                                    </fieldset>
                                                </span>
                                            </div>
                                            <div data-v-2e3ca182="" class="col-md-2 col-xs-6">
                                                <span data-v-2e3ca182="">
                                                    <fieldset data-v-2e3ca182="" class="form-group">
                                                        <div data-v-2e3ca182="" class="input-wrapper-expiry">
                                                            <input data-v-2e3ca182="" type="tel" maxlength="2" pattern="[0-9]*" placeholder="month" name="cc_month" id="cc_month" autocomplete="cc-exp-month" class="form-control ym-disable-keys ym-hide-content card-month" _mstplaceholder="497081" _msthash="1185" />
                                                            <input data-v-2e3ca182="" type="text" placeholder="/" disabled="disabled" class="form-control separator" _mstplaceholder="4277" _msthash="1186" style="direction: ltr; text-align: left;" />
                                                            <input data-v-2e3ca182="" type="tel" maxlength="2" pattern="[0-9]*" placeholder="year" name="cc_year" id="cc_year" autocomplete="cc-exp-year" class="form-control ym-disable-keys ym-hide-content card-year" _mstplaceholder="495950" _msthash="1187" />
                                                        </div>
                                                        <!---->
                                                        <!---->
                                                    </fieldset>
                                                </span>
                                            </div>
                                            <div data-v-2e3ca182="" class="col-md-2 col-xs-6">
                                                <span data-v-2e3ca182="">
                                                    <fieldset data-v-2e3ca182="" data-openreplay-masked="" class="form-group">
                                                        <input data-v-2e3ca182="" type="tel" pattern="\d*" maxlength="4" autocomplete="cc-csc" placeholder="Verification Code (CVC)" class="form-control ym-disable-keys ym-hide-content" _mstplaceholder="2118610" _msthash="1188" style="text-align: left;" />
                                                        <!---->
                                                    </fieldset>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                </span>
                            </div>
                            <!---->
                        </div>
                    </div>
                    <!---->
                    <div class="ui form">
                        <div class="field"><!----></div>
                    </div>
                    <div data-v-314a6f0a="">
                        <button data-v-314a6f0a="" id="submit-form-btn" class="btn btn--primary btn--wide btn--round btn--submit btn--fixed wide">
                            <span data-v-314a6f0a="" _msttexthash="418665" _msthash="1500" style="direction: ltr; text-align: left;">Payment Confirmation</span>
                            <!---->
                            <!---->
                        </button>
                    </div>
                </div>
            </main>
            <ul class="list list--brands">
                <li _msttexthash="596440" _msthash="1190" style="direction: ltr; text-align: left;">100% secure online shopping</li>
                <li><img src="https://cdn.assets.salla.network/stores/vendor/checkout/images/icons/secure-payment.svg" /></li>
                <li><img src="https://cdn.assets.salla.network/stores/vendor/checkout/images/icons/secure-payment-02.svg" /></li>
                <li><img src="https://cdn.assets.salla.network/stores/vendor/checkout/images/icons/secure-payment-03.svg" /></li>
            </ul>
        </div>
        <div id="cart_summary_desktop" class="col-md-3 col-sm-12">
            <div class="cart-summary-wrapper">
                <ul class="cart-summary cart-summary--top">
                    <!---->
                    <li data-total-elements="4">
                        <h4 _msttexthash="182351" _msthash="1191" style="direction: ltr; text-align: left;">Cart Summary</h4>
                        <span class="currency" style="direction: ltr; text-align: left;">
                            <b _msttexthash="38233" _msthash="1192">286.35</b> <small _msttexthash="23907" _msthash="1193" style="text-align: left;">SAR</small>
                            <!---->
                        </span>
                    </li>
                    <li data-total-elements="4">
                        <h4 _msttexthash="66326" _msthash="1194" style="direction: ltr; text-align: left;">Tax (%15)</h4>
                        <span class="currency" style="direction: ltr; text-align: left;">
                            <b _msttexthash="37570" _msthash="1195">+42.95</b> <small _msttexthash="23907" _msthash="1196" style="direction: ltr; text-align: left;">SAR</small>
                            <!---->
                        </span>
                    </li>
                    <li data-total-elements="4">
                        <h4 _msttexthash="154011" _msthash="1197" style="direction: ltr; text-align: left;">Total Order</h4>
                        <span class="currency" style="direction: ltr; text-align: left;">
                            <b _msttexthash="29783" _msthash="1198">329.3</b> <small _msttexthash="23907" _msthash="1199" style="direction: ltr; text-align: left;">SAR</small>
                            <!---->
                        </span>
                    </li>
                </ul>
                <ul class="cart-summary cart-summary--bottom">
                    <li class="column no-border">
                        <div>
                            <button class="btn btn--link btn--coupon" _msttexthash="652340" _msthash="1200" style="direction: ltr;">Do you have a discount coupon?</button>
                            <!---->
                        </div>
                    </li>
                    <li class="proceed">
                        <div data-v-314a6f0a="">
                            <button data-v-314a6f0a="" id="submit-form-btn" class="btn btn--primary btn--wide btn--round btn--submit btn--fixed wide">
                                <span data-v-314a6f0a="" _msttexthash="418665" _msthash="1499" style="direction: ltr; text-align: left;">Payment Confirmation</span>
                                <!---->
                                <!---->
                            </button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>








<?php get_footer('checkout'); ?>