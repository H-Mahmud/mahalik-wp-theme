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


                <header data-v-3d645cac="" class="store-info">
                    <div data-v-3d645cac="" class="d-flex">
                        <div data-v-3d645cac="" class="store-info__logo">
                            <a data-v-3d645cac="" href="https://lamsah.co/ar" class=""><img data-v-3d645cac="" src="https://cdn.salla.sa/RwEnq/3E53F6zsY8FIHoozHwvMmJaDT8574RtVhcwjGmvE.png" alt="Logo" _mstalt="44941" _msthash="1" /></a>
                        </div>
                        <div data-v-3d645cac="" class="store-info__detail">
                            <h1 data-v-3d645cac="" _msttexthash="438685" _msthash="2">Welcome Mahmudul Hasan</h1>
                            <ul data-v-3d645cac="" class="breadcrumb">
                                <li data-v-3d645cac="" class="breadcrumb-item"><a data-v-3d645cac="" href="https://lamsah.co/ar" target="_blank" class="" _msttexthash="154570" _msthash="3">Lamsa Store</a></li>
                                <li data-v-3d645cac="" class="breadcrumb-item"><a data-v-3d645cac="" href="https://lamsah.co/ar/cart" target="_blank" class="" _msttexthash="201227" _msthash="4"> Shopping Cart </a></li>
                                <li data-v-3d645cac="" class="breadcrumb-item" _msttexthash="531765" _msthash="5">Complete the application</li>
                            </ul>
                        </div>
                    </div>
                    <!---->
                    <div data-v-3d645cac="" id="message_modal" class="ui modal failed" _msthidden="2">
                        <div class="ui active inverted dimmer failed" _msthidden="2">
                            <i class="sicon-cancel-circle"></i>
                            <div class="message" _msthidden="2">
                                <b _msttexthash="14873118" _msthidden="1" _msthash="6">حصل خطأ غير متوقع، يرجى إعادة المحاولة</b>
                                <p _msttexthash="4375267" _msthidden="1" _msthash="7">جاري تحديث الصفحة ...</p>
                            </div>
                        </div>
                    </div>
                </header>


                <div class="section section--payment">

                    <div data-v-084109d8="" class="row">
                        <div data-v-084109d8="" class="col-md-12">
                            <div data-v-084109d8="" id="shipping_step" class="payment-step">
                                <div data-v-084109d8="" data-step="1" class="title title--step">
                                    <img data-v-084109d8="" src="https://cdn.assets.salla.network/stores/vendor/checkout/images/icons/step-shipping.svg" />
                                    <h3 data-v-084109d8="" _msttexthash="337064" _msthash="8">Shipping &amp; Delivery</h3>
                                </div>
                                <!---->
                            </div>

                            <div data-v-084109d8="" id="shipping_method_fields">


                                <form id="shipping_form" class="form form--options-edit">

                                    <span>
                                        <form id="national_address_form">
                                            <div id="shipping_fields_wrapper">
                                                <div>
                                                    <div id="address_options" class="tabs-head" _msthidden="1">
                                                        <button id="map_location_toggle" type="button" class="btn btn--default btn--round btn--with-icon" style="display: none;" _msthidden="1">
                                                            <i class="sicon-location-target"></i>
                                                            حدد عنوانك من الخريطة
                                                        </button>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <span>
                                                                <fieldset class="form-group">
                                                                    <label _msttexthash="235495" _msthash="11">Select Country</label>
                                                                    <div class="ui selection find compact dropdown" tabindex="0">
                                                                        <input type="hidden" name="country" value="1473353380" /> <span class="default text" _msttexthash="168792" _msthash="12">Saudi Arabia</span>
                                                                        <i class="dropdown icon"></i>
                                                                        <div class="menu" tabindex="-1" _msthidden="242">
                                                                            <div class="search input" _msthidden="1">
                                                                                <i class="sicon-search"></i>
                                                                                <input type="text" placeholder="ابحث عن الدولة" class="form-control" _msthidden="A" _mstplaceholder="3100565" _msthash="13" />
                                                                            </div>
                                                                            <div class="scrolling" _msthidden="241">
                                                                                <div data-value="1473353380" class="item active selected" _msttexthash="1738906" _msthidden="1" _msthash="14">السعودية</div>
                                                                                <div data-value="566146469" class="item" _msttexthash="1728922" _msthidden="1" _msthash="15">الامارات</div>
                                                                                <div data-value="1939592358" class="item" _msttexthash="1183130" _msthidden="1" _msthash="16">الكويت</div>

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
                                                                    <label for="neighborhood_name" _msttexthash="204243" _msthash="658">Neighborhood</label>
                                                                    <input type="text" id="neighborhood_name" placeholder="District Name" class="form-control" _mstplaceholder="1449006" _msthash="659" />
                                                                    <!---->
                                                                </fieldset>
                                                            </span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span>
                                                                <fieldset class="form-group">
                                                                    <label for="street_name" _msttexthash="78624" _msthash="660">Street</label>
                                                                    <input type="text" id="street_name" placeholder="Street Name" class="form-control" _mstplaceholder="2043288" _msthash="661" />
                                                                    <!---->
                                                                </fieldset>
                                                            </span>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <span>
                                                                <fieldset class="form-group">
                                                                    <!---->
                                                                    <label for="home_address" _msttexthash="659269" _msthash="662"> House Description (optional) </label>
                                                                    <input type="text" id="home_address" placeholder="House description" class="form-control" _mstplaceholder="1738165" _msthash="663" />
                                                                    <!---->
                                                                </fieldset>
                                                            </span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span>
                                                                <fieldset class="form-group">
                                                                    <label for="postal_code" _msttexthash="415272" _msthash="664">Postal Code (optional)</label>
                                                                    <input type="text" id="postal_code" placeholder="Zip code" class="form-control" _mstplaceholder="3105180" _msthash="665" />
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
                                                <label for="receiver_toggle" _msttexthash="1208662" _msthash="666">Receiving the order through someone else?</label>
                                            </div>
                                        </span>
                                        <div id="receiver_address" class="panel-block" style="display: none;" _msthidden="511">
                                            <div class="row" _msthidden="1">
                                                <div class="col-sm-12" _msthidden="1">
                                                    <label class="section-title payment-section-title" _msttexthash="9832381" _msthidden="1" _msthash="667">
                                                        اضف بيانات التواصل مع المستلم
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="shipping-address" _msthidden="510">
                                                <div class="row" _msthidden="1">
                                                    <div class="col-md-12" _msthidden="1">
                                                        <span _msthidden="1">
                                                            <fieldset class="form-group" _msthidden="1">
                                                                <label for="receiver_name" _msttexthash="2382679" _msthidden="1" _msthash="668">اسم المستلم</label> <input type="text" id="receiver_name" class="form-control" />
                                                                <!---->
                                                            </fieldset>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="row" _msthidden="508">
                                                    <div class="col-md-6" _msthidden="507">
                                                        <span _msthidden="507">
                                                            <fieldset class="form-group" _msthidden="507">
                                                                <label for="receiver_mobile" _msttexthash="2050412" _msthidden="1" _msthash="669">رقم الجوال</label>
                                                                <div data-v-48040520="" class="form-control tel-input-wrapper" _msthidden="506">
                                                                    <div data-v-48040520="" class="vue-tel-input" _msthidden="506">
                                                                        <div tabindex="0" class="vti__dropdown" _msthidden="505">
                                                                            <span class="vti__selection" _msthidden="1">
                                                                                <div class="vti__flag sa"></div>
                                                                                <!---->
                                                                                <span class="vti__dropdown-arrow" _msttexthash="879060" _msthidden="1" _msthash="670">▼</span>
                                                                            </span>
                                                                            <ul class="vti__dropdown-list below" style="display: none;" _msthidden="504">
                                                                                <li class="vti__dropdown-item preferred" _msthidden="2">
                                                                                    <div class="vti__flag sa"></div>
                                                                                    <strong _msttexthash="25206831" _msthidden="1" _msthash="671">Saudi Arabia (&#x202B;المملكة العربية السعودية&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="23179" _msthidden="1" _msthash="672">
                                                                                        +966
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred" _msthidden="2">
                                                                                    <div class="vti__flag ae"></div>
                                                                                    <strong _msttexthash="30784182" _msthidden="1" _msthash="673">United Arab Emirates (&#x202B;الإمارات العربية المتحدة&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="22646" _msthidden="1" _msthash="674">
                                                                                        +971
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred" _msthidden="2">
                                                                                    <div class="vti__flag kw"></div>
                                                                                    <strong _msttexthash="8371012" _msthidden="1" _msthash="675">Kuwait (&#x202B;الكويت&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="23049" _msthidden="1" _msthash="676">
                                                                                        +965
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred" _msthidden="2">
                                                                                    <div class="vti__flag bh"></div>
                                                                                    <strong _msttexthash="9493510" _msthidden="1" _msthash="677">Bahrain (&#x202B;البحرين&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="22906" _msthidden="1" _msthash="678">
                                                                                        +973
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred" _msthidden="2">
                                                                                    <div class="vti__flag iq"></div>
                                                                                    <strong _msttexthash="7435324" _msthidden="1" _msthash="679">Iraq (&#x202B;العراق&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="22919" _msthidden="1" _msthash="680">
                                                                                        +964
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred" _msthidden="2">
                                                                                    <div class="vti__flag qa"></div>
                                                                                    <strong _msttexthash="6139874" _msthidden="1" _msthash="681">Qatar (&#x202B;قطر&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="23036" _msthidden="1" _msthash="682">
                                                                                        +974
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred" _msthidden="2">
                                                                                    <div class="vti__flag om"></div>
                                                                                    <strong _msttexthash="6857968" _msthidden="1" _msthash="683">Oman (&#x202B;عُمان&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="23439" _msthidden="1" _msthash="684">
                                                                                        +968
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred" _msthidden="2">
                                                                                    <div class="vti__flag ye"></div>
                                                                                    <strong _msttexthash="7302035" _msthidden="1" _msthash="685">Yemen (&#x202B;اليمن&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="23309" _msthidden="1" _msthash="686">
                                                                                        +967
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item last-preferred preferred" _msthidden="2">
                                                                                    <div class="vti__flag eg"></div>
                                                                                    <strong _msttexthash="6142383" _msthidden="1" _msthash="687">Egypt (&#x202B;مصر&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="14729" _msthidden="1" _msthash="688">
                                                                                        +20
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag af"></div>
                                                                                    <strong _msttexthash="13005148" _msthidden="1" _msthash="689">Afghanistan (&#x202B;افغانستان&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="15808" _msthidden="1" _msthash="690">
                                                                                        +93
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag al"></div>
                                                                                    <strong _msttexthash="346541" _msthidden="1" _msthash="691">Albania (Shqipëri)</strong>
                                                                                    <span _msttexthash="22308" _msthidden="1" _msthash="692">
                                                                                        +355
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag dz"></div>
                                                                                    <strong _msttexthash="9476727" _msthidden="1" _msthash="693">Algeria (&#x202B;الجزائر&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="21476" _msthidden="1" _msthash="694">
                                                                                        +213
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag as"></div>
                                                                                    <strong _msttexthash="221143" _msthidden="1" _msthash="695">American Samoa</strong>
                                                                                    <span _msttexthash="30043" _msthidden="1" _msthash="696">
                                                                                        +1684
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ad"></div>
                                                                                    <strong _msttexthash="93964" _msthidden="1" _msthash="697">Andorra</strong>
                                                                                    <span _msttexthash="22672" _msthidden="1" _msthash="698">
                                                                                        +376
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ao"></div>
                                                                                    <strong _msttexthash="74412" _msthidden="1" _msthash="699">Angola</strong>
                                                                                    <span _msttexthash="21957" _msthidden="1" _msthash="700">
                                                                                        +244
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ai"></div>
                                                                                    <strong _msttexthash="112385" _msthidden="1" _msthash="701">Anguilla</strong>
                                                                                    <span _msttexthash="29315" _msthidden="1" _msthash="702">
                                                                                        +1264
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ag"></div>
                                                                                    <strong _msttexthash="334321" _msthidden="1" _msthash="703">Antigua and Barbuda</strong>
                                                                                    <span _msttexthash="29887" _msthidden="1" _msthash="704">
                                                                                        +1268
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ar"></div>
                                                                                    <strong _msttexthash="133458" _msthidden="1" _msthash="705">Argentina</strong>
                                                                                    <span _msttexthash="15509" _msthidden="1" _msthash="706">
                                                                                        +54
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag am"></div>
                                                                                    <strong _msttexthash="2779751" _msthidden="1" _msthash="707">Armenia (Հայաստան)</strong>
                                                                                    <span _msttexthash="22412" _msthidden="1" _msthash="708">
                                                                                        +374
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag aw"></div>
                                                                                    <strong _msttexthash="58071" _msthidden="1" _msthash="709">Aruba</strong>
                                                                                    <span _msttexthash="22932" _msthidden="1" _msthash="710">
                                                                                        +297
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag au"></div>
                                                                                    <strong _msttexthash="134329" _msthidden="1" _msthash="711">Australia</strong>
                                                                                    <span _msttexthash="15262" _msthidden="1" _msthash="712">
                                                                                        +61
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag at"></div>
                                                                                    <strong _msttexthash="408668" _msthidden="1" _msthash="713">Austria (Österreich)</strong>
                                                                                    <span _msttexthash="15288" _msthidden="1" _msthash="714">
                                                                                        +43
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag az"></div>
                                                                                    <strong _msttexthash="608062" _msthidden="1" _msthash="715">Azerbaijan (Azərbaycan)</strong>
                                                                                    <span _msttexthash="23270" _msthidden="1" _msthash="716">
                                                                                        +994
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag bs"></div>
                                                                                    <strong _msttexthash="91026" _msthidden="1" _msthash="717">Bahamas</strong>
                                                                                    <span _msttexthash="28769" _msthidden="1" _msthash="718">
                                                                                        +1242
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred" _msthidden="2">
                                                                                    <div class="vti__flag bh"></div>
                                                                                    <strong _msttexthash="9493510" _msthidden="1" _msthash="719">Bahrain (&#x202B;البحرين&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="22906" _msthidden="1" _msthash="720">
                                                                                        +973
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag bd"></div>
                                                                                    <strong _msttexthash="5721495" _msthidden="1" _msthash="721">Bangladesh (বাংলাদেশ)</strong>
                                                                                    <span _msttexthash="22529" _msthidden="1" _msthash="722">
                                                                                        +880
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag bb"></div>
                                                                                    <strong _msttexthash="111332" _msthidden="1" _msthash="723">Barbados</strong>
                                                                                    <span _msttexthash="29341" _msthidden="1" _msthash="724">
                                                                                        +1246
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag by"></div>
                                                                                    <strong _msttexthash="2196779" _msthidden="1" _msthash="725">Belarus (Беларусь)</strong>
                                                                                    <span _msttexthash="22542" _msthidden="1" _msthash="726">
                                                                                        +375
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag be"></div>
                                                                                    <strong _msttexthash="281580" _msthidden="1" _msthash="727">Belgium (België)</strong>
                                                                                    <span _msttexthash="15067" _msthidden="1" _msthash="728">
                                                                                        +32
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag bz"></div>
                                                                                    <strong _msttexthash="75998" _msthidden="1" _msthash="729">Belize</strong>
                                                                                    <span _msttexthash="21411" _msthidden="1" _msthash="730">
                                                                                        +501
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag bj"></div>
                                                                                    <strong _msttexthash="195754" _msthidden="1" _msthash="731">Benin (Bénin)</strong>
                                                                                    <span _msttexthash="22373" _msthidden="1" _msthash="732">
                                                                                        +229
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag bm"></div>
                                                                                    <strong _msttexthash="92742" _msthidden="1" _msthash="733">Bermuda</strong>
                                                                                    <span _msttexthash="28860" _msthidden="1" _msthash="734">
                                                                                        +1441
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag bt"></div>
                                                                                    <strong _msttexthash="4199455" _msthidden="1" _msthash="735">Bhutan (འབྲུག)</strong>
                                                                                    <span _msttexthash="23166" _msthidden="1" _msthash="736">
                                                                                        +975
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag bo"></div>
                                                                                    <strong _msttexthash="93483" _msthidden="1" _msthash="737">Bolivia</strong>
                                                                                    <span _msttexthash="22464" _msthidden="1" _msthash="738">
                                                                                        +591
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ba"></div>
                                                                                    <strong _msttexthash="9063782" _msthidden="1" _msthash="739">Bosnia and Herzegovina (Босна и Херцеговина)</strong>
                                                                                    <span _msttexthash="22919" _msthidden="1" _msthash="740">
                                                                                        +387
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag bw"></div>
                                                                                    <strong _msttexthash="114465" _msthidden="1" _msthash="741">Botswana</strong>
                                                                                    <span _msttexthash="22581" _msthidden="1" _msthash="742">
                                                                                        +267
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag br"></div>
                                                                                    <strong _msttexthash="225433" _msthidden="1" _msthash="743">Brazil (Brasil)</strong>
                                                                                    <span _msttexthash="15626" _msthidden="1" _msthash="744">
                                                                                        +55
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag io"></div>
                                                                                    <strong _msttexthash="735982" _msthidden="1" _msthash="745">British Indian Ocean Territory</strong>
                                                                                    <span _msttexthash="22217" _msthidden="1" _msthash="746">
                                                                                        +246
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag vg"></div>
                                                                                    <strong _msttexthash="446056" _msthidden="1" _msthash="747">British Virgin Islands</strong>
                                                                                    <span _msttexthash="29575" _msthidden="1" _msthash="748">
                                                                                        +1284
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag bn"></div>
                                                                                    <strong _msttexthash="76674" _msthidden="1" _msthash="749">Brunei</strong>
                                                                                    <span _msttexthash="22594" _msthidden="1" _msthash="750">
                                                                                        +673
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag bg"></div>
                                                                                    <strong _msttexthash="2324400" _msthidden="1" _msthash="751">Bulgaria (България)</strong>
                                                                                    <span _msttexthash="22828" _msthidden="1" _msthash="752">
                                                                                        +359
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag bf"></div>
                                                                                    <strong _msttexthash="174096" _msthidden="1" _msthash="753">Burkina Faso</strong>
                                                                                    <span _msttexthash="21983" _msthidden="1" _msthash="754">
                                                                                        +226
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag bi"></div>
                                                                                    <strong _msttexthash="319657" _msthidden="1" _msthash="755">Burundi (Uburundi)</strong>
                                                                                    <span _msttexthash="22464" _msthidden="1" _msthash="756">
                                                                                        +257
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag kh"></div>
                                                                                    <strong _msttexthash="10592894" _msthidden="1" _msthash="757">Cambodia (កម្ពុជា)</strong>
                                                                                    <span _msttexthash="22828" _msthidden="1" _msthash="758">
                                                                                        +855
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag cm"></div>
                                                                                    <strong _msttexthash="347178" _msthidden="1" _msthash="759">Cameroon (Cameroun)</strong>
                                                                                    <span _msttexthash="22230" _msthidden="1" _msthash="760">
                                                                                        +237
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ca"></div>
                                                                                    <strong _msttexthash="71097" _msthidden="1" _msthash="761">Canada</strong>
                                                                                    <span _msttexthash="9009" _msthidden="1" _msthash="762">
                                                                                        +1
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag cv"></div>
                                                                                    <strong _msttexthash="395486" _msthidden="1" _msthash="763">Cape Verde (Kabu Verdi)</strong>
                                                                                    <span _msttexthash="22360" _msthidden="1" _msthash="764">
                                                                                        +238
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag bq"></div>
                                                                                    <strong _msttexthash="442988" _msthidden="1" _msthash="765">Caribbean Netherlands</strong>
                                                                                    <span _msttexthash="23504" _msthidden="1" _msthash="766">
                                                                                        +599
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ky"></div>
                                                                                    <strong _msttexthash="226161" _msthidden="1" _msthash="767">Cayman Islands</strong>
                                                                                    <span _msttexthash="29315" _msthidden="1" _msthash="768">
                                                                                        +1345
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag cf"></div>
                                                                                    <strong _msttexthash="1970605" _msthidden="1" _msthash="769">Central African Republic (République centrafricaine)</strong>
                                                                                    <span _msttexthash="22100" _msthidden="1" _msthash="770">
                                                                                        +236
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag td"></div>
                                                                                    <strong _msttexthash="144521" _msthidden="1" _msthash="771">Chad (Tchad)</strong>
                                                                                    <span _msttexthash="21970" _msthidden="1" _msthash="772">
                                                                                        +235
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag cl"></div>
                                                                                    <strong _msttexthash="57681" _msthidden="1" _msthash="773">Chile</strong>
                                                                                    <span _msttexthash="15743" _msthidden="1" _msthash="774">
                                                                                        +56
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag cn"></div>
                                                                                    <strong _msttexthash="7506759" _msthidden="1" _msthash="775">China (中国)</strong>
                                                                                    <span _msttexthash="16055" _msthidden="1" _msthash="776">
                                                                                        +86
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag cx"></div>
                                                                                    <strong _msttexthash="282672" _msthidden="1" _msthash="777">Christmas Island</strong>
                                                                                    <span _msttexthash="15262" _msthidden="1" _msthash="778">
                                                                                        +61
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag cc"></div>
                                                                                    <strong _msttexthash="449891" _msthidden="1" _msthash="779">Cocos (Keeling) Islands</strong>
                                                                                    <span _msttexthash="15262" _msthidden="1" _msthash="780">
                                                                                        +61
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag co"></div>
                                                                                    <strong _msttexthash="110981" _msthidden="1" _msthash="781">Colombia</strong>
                                                                                    <span _msttexthash="15860" _msthidden="1" _msthash="782">
                                                                                        +57
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag km"></div>
                                                                                    <strong _msttexthash="10187814" _msthidden="1" _msthash="783">Comoros (&#x202B;جزر القمر&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="22841" _msthidden="1" _msthash="784">
                                                                                        +269
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag cd"></div>
                                                                                    <strong _msttexthash="1339923" _msthidden="1" _msthash="785">Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)</strong>
                                                                                    <span _msttexthash="21827" _msthidden="1" _msthash="786">
                                                                                        +243
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag cg"></div>
                                                                                    <strong _msttexthash="981292" _msthidden="1" _msthash="787">Congo (Republic) (Congo-Brazzaville)</strong>
                                                                                    <span _msttexthash="21697" _msthidden="1" _msthash="788">
                                                                                        +242
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ck"></div>
                                                                                    <strong _msttexthash="176488" _msthidden="1" _msthash="789">Cook Islands</strong>
                                                                                    <span _msttexthash="22581" _msthidden="1" _msthash="790">
                                                                                        +682
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag cr"></div>
                                                                                    <strong _msttexthash="127517" _msthidden="1" _msthash="791">Costa Rica</strong>
                                                                                    <span _msttexthash="22061" _msthidden="1" _msthash="792">
                                                                                        +506
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ci"></div>
                                                                                    <strong _msttexthash="1480453" _msthidden="1" _msthash="793">Côte d’Ivoire</strong>
                                                                                    <span _msttexthash="21853" _msthidden="1" _msthash="794">
                                                                                        +225
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag hr"></div>
                                                                                    <strong _msttexthash="314483" _msthidden="1" _msthash="795">Croatia (Hrvatska)</strong>
                                                                                    <span _msttexthash="22659" _msthidden="1" _msthash="796">
                                                                                        +385
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag cu"></div>
                                                                                    <strong _msttexthash="42341" _msthidden="1" _msthash="797">Cuba</strong>
                                                                                    <span _msttexthash="15392" _msthidden="1" _msthash="798">
                                                                                        +53
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag cw"></div>
                                                                                    <strong _msttexthash="111137" _msthidden="1" _msthash="799">Curaçao</strong>
                                                                                    <span _msttexthash="23504" _msthidden="1" _msthash="800">
                                                                                        +599
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag cy"></div>
                                                                                    <strong _msttexthash="1330316" _msthidden="1" _msthash="801">Cyprus (Κύπρος)</strong>
                                                                                    <span _msttexthash="22568" _msthidden="1" _msthash="802">
                                                                                        +357
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag cz"></div>
                                                                                    <strong _msttexthash="869739" _msthidden="1" _msthash="803">Czech Republic (Česká republika)</strong>
                                                                                    <span _msttexthash="21411" _msthidden="1" _msthash="804">
                                                                                        +420
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag dk"></div>
                                                                                    <strong _msttexthash="278538" _msthidden="1" _msthash="805">Denmark (Danmark)</strong>
                                                                                    <span _msttexthash="15522" _msthidden="1" _msthash="806">
                                                                                        +45
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag dj"></div>
                                                                                    <strong _msttexthash="115076" _msthidden="1" _msthash="807">Djibouti</strong>
                                                                                    <span _msttexthash="21944" _msthidden="1" _msthash="808">
                                                                                        +253
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag dm"></div>
                                                                                    <strong _msttexthash="110630" _msthidden="1" _msthash="809">Dominica</strong>
                                                                                    <span _msttexthash="30329" _msthidden="1" _msthash="810">
                                                                                        +1767
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag do"></div>
                                                                                    <strong _msttexthash="1279486" _msthidden="1" _msthash="811">Dominican Republic (República Dominicana)</strong>
                                                                                    <span _msttexthash="9009" _msthidden="1" _msthash="812">
                                                                                        +1
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ec"></div>
                                                                                    <strong _msttexthash="93756" _msthidden="1" _msthash="813">Ecuador</strong>
                                                                                    <span _msttexthash="22724" _msthidden="1" _msthash="814">
                                                                                        +593
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred" _msthidden="2">
                                                                                    <div class="vti__flag eg"></div>
                                                                                    <strong _msttexthash="6142383" _msthidden="1" _msthash="815">Egypt (&#x202B;مصر&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="14729" _msthidden="1" _msthash="816">
                                                                                        +20
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag sv"></div>
                                                                                    <strong _msttexthash="153634" _msthidden="1" _msthash="817">El Salvador</strong>
                                                                                    <span _msttexthash="21671" _msthidden="1" _msthash="818">
                                                                                        +503
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag gq"></div>
                                                                                    <strong _msttexthash="1017198" _msthidden="1" _msthash="819">Equatorial Guinea (Guinea Ecuatorial)</strong>
                                                                                    <span _msttexthash="21437" _msthidden="1" _msthash="820">
                                                                                        +240
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag er"></div>
                                                                                    <strong _msttexthash="93951" _msthidden="1" _msthash="821">Eritrea</strong>
                                                                                    <span _msttexthash="22152" _msthidden="1" _msthash="822">
                                                                                        +291
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ee"></div>
                                                                                    <strong _msttexthash="225641" _msthidden="1" _msthash="823">Estonia (Eesti)</strong>
                                                                                    <span _msttexthash="22152" _msthidden="1" _msthash="824">
                                                                                        +372
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag et"></div>
                                                                                    <strong _msttexthash="112905" _msthidden="1" _msthash="825">Ethiopia</strong>
                                                                                    <span _msttexthash="21684" _msthidden="1" _msthash="826">
                                                                                        +251
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag fk"></div>
                                                                                    <strong _msttexthash="816582" _msthidden="1" _msthash="827">Falkland Islands (Islas Malvinas)</strong>
                                                                                    <span _msttexthash="21281" _msthidden="1" _msthash="828">
                                                                                        +500
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag fo"></div>
                                                                                    <strong _msttexthash="483730" _msthidden="1" _msthash="829">Faroe Islands (Føroyar)</strong>
                                                                                    <span _msttexthash="23062" _msthidden="1" _msthash="830">
                                                                                        +298
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag fj"></div>
                                                                                    <strong _msttexthash="43342" _msthidden="1" _msthash="831">Fiji</strong>
                                                                                    <span _msttexthash="23374" _msthidden="1" _msthash="832">
                                                                                        +679
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag fi"></div>
                                                                                    <strong _msttexthash="226564" _msthidden="1" _msthash="833">Finland (Suomi)</strong>
                                                                                    <span _msttexthash="22698" _msthidden="1" _msthash="834">
                                                                                        +358
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag fr"></div>
                                                                                    <strong _msttexthash="73788" _msthidden="1" _msthash="835">France</strong>
                                                                                    <span _msttexthash="15184" _msthidden="1" _msthash="836">
                                                                                        +33
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag gf"></div>
                                                                                    <strong _msttexthash="823472" _msthidden="1" _msthash="837">French Guiana (Guyane française)</strong>
                                                                                    <span _msttexthash="22854" _msthidden="1" _msthash="838">
                                                                                        +594
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag pf"></div>
                                                                                    <strong _msttexthash="1202799" _msthidden="1" _msthash="839">French Polynesia (Polynésie française)</strong>
                                                                                    <span _msttexthash="23491" _msthidden="1" _msthash="840">
                                                                                        +689
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ga"></div>
                                                                                    <strong _msttexthash="58175" _msthidden="1" _msthash="841">Gabon</strong>
                                                                                    <span _msttexthash="21567" _msthidden="1" _msthash="842">
                                                                                        +241
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag gm"></div>
                                                                                    <strong _msttexthash="72189" _msthidden="1" _msthash="843">Gambia</strong>
                                                                                    <span _msttexthash="21203" _msthidden="1" _msthash="844">
                                                                                        +220
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ge"></div>
                                                                                    <strong _msttexthash="11046802" _msthidden="1" _msthash="845">Georgia (საქართველო)</strong>
                                                                                    <span _msttexthash="23400" _msthidden="1" _msthash="846">
                                                                                        +995
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag de"></div>
                                                                                    <strong _msttexthash="413608" _msthidden="1" _msthash="847">Germany (Deutschland)</strong>
                                                                                    <span _msttexthash="15990" _msthidden="1" _msthash="848">
                                                                                        +49
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag gh"></div>
                                                                                    <strong _msttexthash="165516" _msthidden="1" _msthash="849">Ghana (Gaana)</strong>
                                                                                    <span _msttexthash="21710" _msthidden="1" _msthash="850">
                                                                                        +233
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag gi"></div>
                                                                                    <strong _msttexthash="133874" _msthidden="1" _msthash="851">Gibraltar</strong>
                                                                                    <span _msttexthash="21658" _msthidden="1" _msthash="852">
                                                                                        +350
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag gr"></div>
                                                                                    <strong _msttexthash="1305343" _msthidden="1" _msthash="853">Greece (Ελλάδα)</strong>
                                                                                    <span _msttexthash="14833" _msthidden="1" _msthash="854">
                                                                                        +30
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag gl"></div>
                                                                                    <strong _msttexthash="637039" _msthidden="1" _msthash="855">Greenland (Kalaallit Nunaat)</strong>
                                                                                    <span _msttexthash="23192" _msthidden="1" _msthash="856">
                                                                                        +299
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag gd"></div>
                                                                                    <strong _msttexthash="90298" _msthidden="1" _msthash="857">Grenada</strong>
                                                                                    <span _msttexthash="29536" _msthidden="1" _msthash="858">
                                                                                        +1473
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag gp"></div>
                                                                                    <strong _msttexthash="157170" _msthidden="1" _msthash="859">Guadeloupe</strong>
                                                                                    <span _msttexthash="22334" _msthidden="1" _msthash="860">
                                                                                        +590
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag gu"></div>
                                                                                    <strong _msttexthash="44148" _msthidden="1" _msthash="861">Guam</strong>
                                                                                    <span _msttexthash="29484" _msthidden="1" _msthash="862">
                                                                                        +1671
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag gt"></div>
                                                                                    <strong _msttexthash="131469" _msthidden="1" _msthash="863">Guatemala</strong>
                                                                                    <span _msttexthash="21541" _msthidden="1" _msthash="864">
                                                                                        +502
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag gg"></div>
                                                                                    <strong _msttexthash="118027" _msthidden="1" _msthash="865">Guernsey</strong>
                                                                                    <span _msttexthash="15405" _msthidden="1" _msthash="866">
                                                                                        +44
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag gn"></div>
                                                                                    <strong _msttexthash="253565" _msthidden="1" _msthash="867">Guinea (Guinée)</strong>
                                                                                    <span _msttexthash="21723" _msthidden="1" _msthash="868">
                                                                                        +224
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag gw"></div>
                                                                                    <strong _msttexthash="666913" _msthidden="1" _msthash="869">Guinea-Bissau (Guiné Bissau)</strong>
                                                                                    <span _msttexthash="22087" _msthidden="1" _msthash="870">
                                                                                        +245
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag gy"></div>
                                                                                    <strong _msttexthash="76258" _msthidden="1" _msthash="871">Guyana</strong>
                                                                                    <span _msttexthash="22594" _msthidden="1" _msthash="872">
                                                                                        +592
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ht"></div>
                                                                                    <strong _msttexthash="59020" _msthidden="1" _msthash="873">Haiti</strong>
                                                                                    <span _msttexthash="22451" _msthidden="1" _msthash="874">
                                                                                        +509
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag hn"></div>
                                                                                    <strong _msttexthash="115804" _msthidden="1" _msthash="875">Honduras</strong>
                                                                                    <span _msttexthash="21801" _msthidden="1" _msthash="876">
                                                                                        +504
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag hk"></div>
                                                                                    <strong _msttexthash="14539642" _msthidden="1" _msthash="877">Hong Kong (香港)</strong>
                                                                                    <span _msttexthash="22438" _msthidden="1" _msthash="878">
                                                                                        +852
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag hu"></div>
                                                                                    <strong _msttexthash="501917" _msthidden="1" _msthash="879">Hungary (Magyarország)</strong>
                                                                                    <span _msttexthash="15535" _msthidden="1" _msthash="880">
                                                                                        +36
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag is"></div>
                                                                                    <strong _msttexthash="272831" _msthidden="1" _msthash="881">Iceland (Ísland)</strong>
                                                                                    <span _msttexthash="22178" _msthidden="1" _msthash="882">
                                                                                        +354
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag in"></div>
                                                                                    <strong _msttexthash="1845558" _msthidden="1" _msthash="883">India (भारत)</strong>
                                                                                    <span _msttexthash="15574" _msthidden="1" _msthash="884">
                                                                                        +91
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag id"></div>
                                                                                    <strong _msttexthash="133159" _msthidden="1" _msthash="885">Indonesia</strong>
                                                                                    <span _msttexthash="15379" _msthidden="1" _msthash="886">
                                                                                        +62
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ir"></div>
                                                                                    <strong _msttexthash="6873750" _msthidden="1" _msthash="887">Iran (&#x202B;ایران&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="16393" _msthidden="1" _msthash="888">
                                                                                        +98
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred" _msthidden="2">
                                                                                    <div class="vti__flag iq"></div>
                                                                                    <strong _msttexthash="7435324" _msthidden="1" _msthash="889">Iraq (&#x202B;العراق&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="22919" _msthidden="1" _msthash="890">
                                                                                        +964
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ie"></div>
                                                                                    <strong _msttexthash="92287" _msthidden="1" _msthash="891">Ireland</strong>
                                                                                    <span _msttexthash="22048" _msthidden="1" _msthash="892">
                                                                                        +353
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag im"></div>
                                                                                    <strong _msttexthash="128271" _msthidden="1" _msthash="893">Isle of Man</strong>
                                                                                    <span _msttexthash="15405" _msthidden="1" _msthash="894">
                                                                                        +44
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag il"></div>
                                                                                    <strong _msttexthash="7634159" _msthidden="1" _msthash="895">Israel (&#x202B;ישראל&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="22776" _msthidden="1" _msthash="896">
                                                                                        +972
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag it"></div>
                                                                                    <strong _msttexthash="198497" _msthidden="1" _msthash="897">Italy (Italia)</strong>
                                                                                    <span _msttexthash="15886" _msthidden="1" _msthash="898">
                                                                                        +39
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag jm"></div>
                                                                                    <strong _msttexthash="89037" _msthidden="1" _msthash="899">Jamaica</strong>
                                                                                    <span _msttexthash="30433" _msthidden="1" _msthash="900">
                                                                                        +1876
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag jp"></div>
                                                                                    <strong _msttexthash="9287850" _msthidden="1" _msthash="901">Japan (日本)</strong>
                                                                                    <span _msttexthash="15470" _msthidden="1" _msthash="902">
                                                                                        +81
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag je"></div>
                                                                                    <strong _msttexthash="78845" _msthidden="1" _msthash="903">Jersey</strong>
                                                                                    <span _msttexthash="15405" _msthidden="1" _msthash="904">
                                                                                        +44
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag jo"></div>
                                                                                    <strong _msttexthash="8356179" _msthidden="1" _msthash="905">Jordan (&#x202B;الأردن&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="22659" _msthidden="1" _msthash="906">
                                                                                        +962
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag kz"></div>
                                                                                    <strong _msttexthash="2957994" _msthidden="1" _msthash="907">Kazakhstan (Казахстан)</strong>
                                                                                    <span _msttexthash="9633" _msthidden="1" _msthash="908">
                                                                                        +7
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ke"></div>
                                                                                    <strong _msttexthash="59800" _msthidden="1" _msthash="909">Kenya</strong>
                                                                                    <span _msttexthash="22074" _msthidden="1" _msthash="910">
                                                                                        +254
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ki"></div>
                                                                                    <strong _msttexthash="112593" _msthidden="1" _msthash="911">Kiribati</strong>
                                                                                    <span _msttexthash="23101" _msthidden="1" _msthash="912">
                                                                                        +686
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag xk"></div>
                                                                                    <strong _msttexthash="80444" _msthidden="1" _msthash="913">Kosovo</strong>
                                                                                    <span _msttexthash="22399" _msthidden="1" _msthash="914">
                                                                                        +383
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred" _msthidden="2">
                                                                                    <div class="vti__flag kw"></div>
                                                                                    <strong _msttexthash="8371012" _msthidden="1" _msthash="915">Kuwait (&#x202B;الكويت&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="23049" _msthidden="1" _msthash="916">
                                                                                        +965
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag kg"></div>
                                                                                    <strong _msttexthash="3356210" _msthidden="1" _msthash="917">Kyrgyzstan (Кыргызстан)</strong>
                                                                                    <span _msttexthash="23530" _msthidden="1" _msthash="918">
                                                                                        +996
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag la"></div>
                                                                                    <strong _msttexthash="1961960" _msthidden="1" _msthash="919">Laos (ລາວ)</strong>
                                                                                    <span _msttexthash="22958" _msthidden="1" _msthash="920">
                                                                                        +856
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag lv"></div>
                                                                                    <strong _msttexthash="252941" _msthidden="1" _msthash="921">Latvia (Latvija)</strong>
                                                                                    <span _msttexthash="22022" _msthidden="1" _msthash="922">
                                                                                        +371
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag lb"></div>
                                                                                    <strong _msttexthash="8178157" _msthidden="1" _msthash="923">Lebanon (&#x202B;لبنان&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="22529" _msthidden="1" _msthash="924">
                                                                                        +961
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ls"></div>
                                                                                    <strong _msttexthash="96876" _msthidden="1" _msthash="925">Lesotho</strong>
                                                                                    <span _msttexthash="22451" _msthidden="1" _msthash="926">
                                                                                        +266
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag lr"></div>
                                                                                    <strong _msttexthash="91507" _msthidden="1" _msthash="927">Liberia</strong>
                                                                                    <span _msttexthash="21450" _msthidden="1" _msthash="928">
                                                                                        +231
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ly"></div>
                                                                                    <strong _msttexthash="7293949" _msthidden="1" _msthash="929">Libya (&#x202B;ليبيا&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="22126" _msthidden="1" _msthash="930">
                                                                                        +218
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag li"></div>
                                                                                    <strong _msttexthash="233194" _msthidden="1" _msthash="931">Liechtenstein</strong>
                                                                                    <span _msttexthash="21801" _msthidden="1" _msthash="932">
                                                                                        +423
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag lt"></div>
                                                                                    <strong _msttexthash="345683" _msthidden="1" _msthash="933">Lithuania (Lietuva)</strong>
                                                                                    <span _msttexthash="21892" _msthidden="1" _msthash="934">
                                                                                        +370
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag lu"></div>
                                                                                    <strong _msttexthash="160836" _msthidden="1" _msthash="935">Luxembourg</strong>
                                                                                    <span _msttexthash="21918" _msthidden="1" _msthash="936">
                                                                                        +352
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag mo"></div>
                                                                                    <strong _msttexthash="11870313" _msthidden="1" _msthash="937">Macau (澳門)</strong>
                                                                                    <span _msttexthash="22568" _msthidden="1" _msthash="938">
                                                                                        +853
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag mk"></div>
                                                                                    <strong _msttexthash="4280601" _msthidden="1" _msthash="939">Macedonia (FYROM) (Македонија)</strong>
                                                                                    <span _msttexthash="23179" _msthidden="1" _msthash="940">
                                                                                        +389
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag mg"></div>
                                                                                    <strong _msttexthash="547378" _msthidden="1" _msthash="941">Madagascar (Madagasikara)</strong>
                                                                                    <span _msttexthash="21801" _msthidden="1" _msthash="942">
                                                                                        +261
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag mw"></div>
                                                                                    <strong _msttexthash="75738" _msthidden="1" _msthash="943">Malawi</strong>
                                                                                    <span _msttexthash="22321" _msthidden="1" _msthash="944">
                                                                                        +265
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag my"></div>
                                                                                    <strong _msttexthash="112983" _msthidden="1" _msthash="945">Malaysia</strong>
                                                                                    <span _msttexthash="15145" _msthidden="1" _msthash="946">
                                                                                        +60
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag mv"></div>
                                                                                    <strong _msttexthash="114153" _msthidden="1" _msthash="947">Maldives</strong>
                                                                                    <span _msttexthash="22399" _msthidden="1" _msthash="948">
                                                                                        +960
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ml"></div>
                                                                                    <strong _msttexthash="43381" _msthidden="1" _msthash="949">Mali</strong>
                                                                                    <span _msttexthash="21593" _msthidden="1" _msthash="950">
                                                                                        +223
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag mt"></div>
                                                                                    <strong _msttexthash="58682" _msthidden="1" _msthash="951">Malta</strong>
                                                                                    <span _msttexthash="22438" _msthidden="1" _msthash="952">
                                                                                        +356
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag mh"></div>
                                                                                    <strong _msttexthash="282581" _msthidden="1" _msthash="953">Marshall Islands</strong>
                                                                                    <span _msttexthash="22698" _msthidden="1" _msthash="954">
                                                                                        +692
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag mq"></div>
                                                                                    <strong _msttexthash="159822" _msthidden="1" _msthash="955">Martinique</strong>
                                                                                    <span _msttexthash="23114" _msthidden="1" _msthash="956">
                                                                                        +596
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag mr"></div>
                                                                                    <strong _msttexthash="12489022" _msthidden="1" _msthash="957">Mauritania (&#x202B;موريتانيا&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="21463" _msthidden="1" _msthash="958">
                                                                                        +222
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag mu"></div>
                                                                                    <strong _msttexthash="290069" _msthidden="1" _msthash="959">Mauritius (Moris)</strong>
                                                                                    <span _msttexthash="21320" _msthidden="1" _msthash="960">
                                                                                        +230
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag yt"></div>
                                                                                    <strong _msttexthash="97435" _msthidden="1" _msthash="961">Mayotte</strong>
                                                                                    <span _msttexthash="21931" _msthidden="1" _msthash="962">
                                                                                        +262
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag mx"></div>
                                                                                    <strong _msttexthash="252291" _msthidden="1" _msthash="963">Mexico (México)</strong>
                                                                                    <span _msttexthash="15275" _msthidden="1" _msthash="964">
                                                                                        +52
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag fm"></div>
                                                                                    <strong _msttexthash="156013" _msthidden="1" _msthash="965">Micronesia</strong>
                                                                                    <span _msttexthash="22568" _msthidden="1" _msthash="966">
                                                                                        +691
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag md"></div>
                                                                                    <strong _msttexthash="600483" _msthidden="1" _msthash="967">Moldova (Republica Moldova)</strong>
                                                                                    <span _msttexthash="22282" _msthidden="1" _msthash="968">
                                                                                        +373
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag mc"></div>
                                                                                    <strong _msttexthash="75504" _msthidden="1" _msthash="969">Monaco</strong>
                                                                                    <span _msttexthash="22802" _msthidden="1" _msthash="970">
                                                                                        +377
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag mn"></div>
                                                                                    <strong _msttexthash="1688713" _msthidden="1" _msthash="971">Mongolia (Монгол)</strong>
                                                                                    <span _msttexthash="23296" _msthidden="1" _msthash="972">
                                                                                        +976
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag me"></div>
                                                                                    <strong _msttexthash="401440" _msthidden="1" _msthash="973">Montenegro (Crna Gora)</strong>
                                                                                    <span _msttexthash="22269" _msthidden="1" _msthash="974">
                                                                                        +382
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ms"></div>
                                                                                    <strong _msttexthash="161759" _msthidden="1" _msthash="975">Montserrat</strong>
                                                                                    <span _msttexthash="29783" _msthidden="1" _msthash="976">
                                                                                        +1664
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ma"></div>
                                                                                    <strong _msttexthash="8823386" _msthidden="1" _msthash="977">Morocco (&#x202B;المغرب&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="21346" _msthidden="1" _msthash="978">
                                                                                        +212
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag mz"></div>
                                                                                    <strong _msttexthash="519142" _msthidden="1" _msthash="979">Mozambique (Moçambique)</strong>
                                                                                    <span _msttexthash="22594" _msthidden="1" _msthash="980">
                                                                                        +258
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag mm"></div>
                                                                                    <strong _msttexthash="8152404" _msthidden="1" _msthash="981">Myanmar (Burma) (မြန်မာ)</strong>
                                                                                    <span _msttexthash="16042" _msthidden="1" _msthash="982">
                                                                                        +95
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag na"></div>
                                                                                    <strong _msttexthash="309088" _msthidden="1" _msthash="983">Namibia (Namibië)</strong>
                                                                                    <span _msttexthash="22191" _msthidden="1" _msthash="984">
                                                                                        +264
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag nr"></div>
                                                                                    <strong _msttexthash="62426" _msthidden="1" _msthash="985">Nauru</strong>
                                                                                    <span _msttexthash="22724" _msthidden="1" _msthash="986">
                                                                                        +674
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag np"></div>
                                                                                    <strong _msttexthash="2372812" _msthidden="1" _msthash="987">Nepal (नेपाल)</strong>
                                                                                    <span _msttexthash="23426" _msthidden="1" _msthash="988">
                                                                                        +977
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag nl"></div>
                                                                                    <strong _msttexthash="478075" _msthidden="1" _msthash="989">Netherlands (Nederland)</strong>
                                                                                    <span _msttexthash="14950" _msthidden="1" _msthash="990">
                                                                                        +31
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag nc"></div>
                                                                                    <strong _msttexthash="944333" _msthidden="1" _msthash="991">New Caledonia (Nouvelle-Calédonie)</strong>
                                                                                    <span _msttexthash="23231" _msthidden="1" _msthash="992">
                                                                                        +687
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag nz"></div>
                                                                                    <strong _msttexthash="150956" _msthidden="1" _msthash="993">New Zealand</strong>
                                                                                    <span _msttexthash="15613" _msthidden="1" _msthash="994">
                                                                                        +64
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ni"></div>
                                                                                    <strong _msttexthash="131261" _msthidden="1" _msthash="995">Nicaragua</strong>
                                                                                    <span _msttexthash="21931" _msthidden="1" _msthash="996">
                                                                                        +505
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ne"></div>
                                                                                    <strong _msttexthash="173667" _msthidden="1" _msthash="997">Niger (Nijar)</strong>
                                                                                    <span _msttexthash="22113" _msthidden="1" _msthash="998">
                                                                                        +227
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ng"></div>
                                                                                    <strong _msttexthash="92274" _msthidden="1" _msthash="999">Nigeria</strong>
                                                                                    <span _msttexthash="21840" _msthidden="1" _msthash="1000">
                                                                                        +234
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag nu"></div>
                                                                                    <strong _msttexthash="44837" _msthidden="1" _msthash="1001">Niue</strong>
                                                                                    <span _msttexthash="22711" _msthidden="1" _msthash="1002">
                                                                                        +683
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag nf"></div>
                                                                                    <strong _msttexthash="226096" _msthidden="1" _msthash="1003">Norfolk Island</strong>
                                                                                    <span _msttexthash="22464" _msthidden="1" _msthash="1004">
                                                                                        +672
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag kp"></div>
                                                                                    <strong _msttexthash="162885541" _msthidden="1" _msthash="1005">North Korea (조선 민주주의 인민 공화국)</strong>
                                                                                    <span _msttexthash="22178" _msthidden="1" _msthash="1006">
                                                                                        +850
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag mp"></div>
                                                                                    <strong _msttexthash="515593" _msthidden="1" _msthash="1007">Northern Mariana Islands</strong>
                                                                                    <span _msttexthash="29341" _msthidden="1" _msthash="1008">
                                                                                        +1670
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag no"></div>
                                                                                    <strong _msttexthash="203034" _msthidden="1" _msthash="1009">Norway (Norge)</strong>
                                                                                    <span _msttexthash="15756" _msthidden="1" _msthash="1010">
                                                                                        +47
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred" _msthidden="2">
                                                                                    <div class="vti__flag om"></div>
                                                                                    <strong _msttexthash="6857968" _msthidden="1" _msthash="1011">Oman (&#x202B;عُمان&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="23439" _msthidden="1" _msthash="1012">
                                                                                        +968
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag pk"></div>
                                                                                    <strong _msttexthash="10016656" _msthidden="1" _msthash="1013">Pakistan (&#x202B;پاکستان&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="15691" _msthidden="1" _msthash="1014">
                                                                                        +92
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag pw"></div>
                                                                                    <strong _msttexthash="59345" _msthidden="1" _msthash="1015">Palau</strong>
                                                                                    <span _msttexthash="22321" _msthidden="1" _msthash="1016">
                                                                                        +680
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ps"></div>
                                                                                    <strong _msttexthash="9772269" _msthidden="1" _msthash="1017">Palestine (&#x202B;فلسطين&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="22516" _msthidden="1" _msthash="1018">
                                                                                        +970
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag pa"></div>
                                                                                    <strong _msttexthash="249860" _msthidden="1" _msthash="1019">Panama (Panamá)</strong>
                                                                                    <span _msttexthash="22191" _msthidden="1" _msthash="1020">
                                                                                        +507
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag pg"></div>
                                                                                    <strong _msttexthash="247741" _msthidden="1" _msthash="1021">Papua New Guinea</strong>
                                                                                    <span _msttexthash="22854" _msthidden="1" _msthash="1022">
                                                                                        +675
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag py"></div>
                                                                                    <strong _msttexthash="114712" _msthidden="1" _msthash="1023">Paraguay</strong>
                                                                                    <span _msttexthash="22984" _msthidden="1" _msthash="1024">
                                                                                        +595
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag pe"></div>
                                                                                    <strong _msttexthash="159627" _msthidden="1" _msthash="1025">Peru (Perú)</strong>
                                                                                    <span _msttexthash="15158" _msthidden="1" _msthash="1026">
                                                                                        +51
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ph"></div>
                                                                                    <strong _msttexthash="182819" _msthidden="1" _msthash="1027">Philippines</strong>
                                                                                    <span _msttexthash="15496" _msthidden="1" _msthash="1028">
                                                                                        +63
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag pl"></div>
                                                                                    <strong _msttexthash="225901" _msthidden="1" _msthash="1029">Poland (Polska)</strong>
                                                                                    <span _msttexthash="15873" _msthidden="1" _msthash="1030">
                                                                                        +48
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag pt"></div>
                                                                                    <strong _msttexthash="116090" _msthidden="1" _msthash="1031">Portugal</strong>
                                                                                    <span _msttexthash="21788" _msthidden="1" _msthash="1032">
                                                                                        +351
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag pr"></div>
                                                                                    <strong _msttexthash="155350" _msthidden="1" _msthash="1033">Puerto Rico</strong>
                                                                                    <span _msttexthash="9009" _msthidden="1" _msthash="1034">
                                                                                        +1
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred" _msthidden="2">
                                                                                    <div class="vti__flag qa"></div>
                                                                                    <strong _msttexthash="6139874" _msthidden="1" _msthash="1035">Qatar (&#x202B;قطر&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="23036" _msthidden="1" _msthash="1036">
                                                                                        +974
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag re"></div>
                                                                                    <strong _msttexthash="389116" _msthidden="1" _msthash="1037">Réunion (La Réunion)</strong>
                                                                                    <span _msttexthash="21931" _msthidden="1" _msthash="1038">
                                                                                        +262
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ro"></div>
                                                                                    <strong _msttexthash="308880" _msthidden="1" _msthash="1039">Romania (România)</strong>
                                                                                    <span _msttexthash="14937" _msthidden="1" _msthash="1040">
                                                                                        +40
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ru"></div>
                                                                                    <strong _msttexthash="1491906" _msthidden="1" _msthash="1041">Russia (Россия)</strong>
                                                                                    <span _msttexthash="9633" _msthidden="1" _msthash="1042">
                                                                                        +7
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag rw"></div>
                                                                                    <strong _msttexthash="74919" _msthidden="1" _msthash="1043">Rwanda</strong>
                                                                                    <span _msttexthash="21554" _msthidden="1" _msthash="1044">
                                                                                        +250
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag bl"></div>
                                                                                    <strong _msttexthash="315588" _msthidden="1" _msthash="1045">Saint Barthélemy</strong>
                                                                                    <span _msttexthash="22334" _msthidden="1" _msthash="1046">
                                                                                        +590
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag sh"></div>
                                                                                    <strong _msttexthash="172783" _msthidden="1" _msthash="1047">Saint Helena</strong>
                                                                                    <span _msttexthash="22022" _msthidden="1" _msthash="1048">
                                                                                        +290
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag kn"></div>
                                                                                    <strong _msttexthash="378664" _msthidden="1" _msthash="1049">Saint Kitts and Nevis</strong>
                                                                                    <span _msttexthash="30732" _msthidden="1" _msthash="1050">
                                                                                        +1869
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag lc"></div>
                                                                                    <strong _msttexthash="151112" _msthidden="1" _msthash="1051">Saint Lucia</strong>
                                                                                    <span _msttexthash="30342" _msthidden="1" _msthash="1052">
                                                                                        +1758
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag mf"></div>
                                                                                    <strong _msttexthash="1506388" _msthidden="1" _msthash="1053">Saint Martin (Saint-Martin (partie française))</strong>
                                                                                    <span _msttexthash="22334" _msthidden="1" _msthash="1054">
                                                                                        +590
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag pm"></div>
                                                                                    <strong _msttexthash="1826942" _msthidden="1" _msthash="1055">Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)</strong>
                                                                                    <span _msttexthash="22321" _msthidden="1" _msthash="1056">
                                                                                        +508
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag vc"></div>
                                                                                    <strong _msttexthash="774306" _msthidden="1" _msthash="1057">Saint Vincent and the Grenadines</strong>
                                                                                    <span _msttexthash="30160" _msthidden="1" _msthash="1058">
                                                                                        +1784
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ws"></div>
                                                                                    <strong _msttexthash="58695" _msthidden="1" _msthash="1059">Samoa</strong>
                                                                                    <span _msttexthash="22971" _msthidden="1" _msthash="1060">
                                                                                        +685
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag sm"></div>
                                                                                    <strong _msttexthash="131586" _msthidden="1" _msthash="1061">San Marino</strong>
                                                                                    <span _msttexthash="22932" _msthidden="1" _msthash="1062">
                                                                                        +378
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag st"></div>
                                                                                    <strong _msttexthash="1348711" _msthidden="1" _msthash="1063">São Tomé and Príncipe (São Tomé e Príncipe)</strong>
                                                                                    <span _msttexthash="22490" _msthidden="1" _msthash="1064">
                                                                                        +239
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred" _msthidden="2">
                                                                                    <div class="vti__flag sa"></div>
                                                                                    <strong _msttexthash="25206831" _msthidden="1" _msthash="1065">Saudi Arabia (&#x202B;المملكة العربية السعودية&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="23179" _msthidden="1" _msthash="1066">
                                                                                        +966
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag sn"></div>
                                                                                    <strong _msttexthash="334802" _msthidden="1" _msthash="1067">Senegal (Sénégal)</strong>
                                                                                    <span _msttexthash="21333" _msthidden="1" _msthash="1068">
                                                                                        +221
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag rs"></div>
                                                                                    <strong _msttexthash="1483092" _msthidden="1" _msthash="1069">Serbia (Србија)</strong>
                                                                                    <span _msttexthash="22139" _msthidden="1" _msthash="1070">
                                                                                        +381
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag sc"></div>
                                                                                    <strong _msttexthash="157235" _msthidden="1" _msthash="1071">Seychelles</strong>
                                                                                    <span _msttexthash="22477" _msthidden="1" _msthash="1072">
                                                                                        +248
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag sl"></div>
                                                                                    <strong _msttexthash="174616" _msthidden="1" _msthash="1073">Sierra Leone</strong>
                                                                                    <span _msttexthash="21580" _msthidden="1" _msthash="1074">
                                                                                        +232
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag sg"></div>
                                                                                    <strong _msttexthash="135278" _msthidden="1" _msthash="1075">Singapore</strong>
                                                                                    <span _msttexthash="15730" _msthidden="1" _msthash="1076">
                                                                                        +65
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag sx"></div>
                                                                                    <strong _msttexthash="177645" _msthidden="1" _msthash="1077">Sint Maarten</strong>
                                                                                    <span _msttexthash="28951" _msthidden="1" _msthash="1078">
                                                                                        +1721
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag sk"></div>
                                                                                    <strong _msttexthash="386256" _msthidden="1" _msthash="1079">Slovakia (Slovensko)</strong>
                                                                                    <span _msttexthash="21541" _msthidden="1" _msthash="1080">
                                                                                        +421
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag si"></div>
                                                                                    <strong _msttexthash="379769" _msthidden="1" _msthash="1081">Slovenia (Slovenija)</strong>
                                                                                    <span _msttexthash="22789" _msthidden="1" _msthash="1082">
                                                                                        +386
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag sb"></div>
                                                                                    <strong _msttexthash="257608" _msthidden="1" _msthash="1083">Solomon Islands</strong>
                                                                                    <span _msttexthash="23114" _msthidden="1" _msthash="1084">
                                                                                        +677
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag so"></div>
                                                                                    <strong _msttexthash="377728" _msthidden="1" _msthash="1085">Somalia (Soomaaliya)</strong>
                                                                                    <span _msttexthash="21814" _msthidden="1" _msthash="1086">
                                                                                        +252
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag za"></div>
                                                                                    <strong _msttexthash="173368" _msthidden="1" _msthash="1087">South Africa</strong>
                                                                                    <span _msttexthash="15548" _msthidden="1" _msthash="1088">
                                                                                        +27
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag kr"></div>
                                                                                    <strong _msttexthash="49020959" _msthidden="1" _msthash="1089">South Korea (대한민국)</strong>
                                                                                    <span _msttexthash="15587" _msthidden="1" _msthash="1090">
                                                                                        +82
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ss"></div>
                                                                                    <strong _msttexthash="14089985" _msthidden="1" _msthash="1091">South Sudan (&#x202B;جنوب السودان&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="21216" _msthidden="1" _msthash="1092">
                                                                                        +211
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag es"></div>
                                                                                    <strong _msttexthash="226863" _msthidden="1" _msthash="1093">Spain (España)</strong>
                                                                                    <span _msttexthash="15301" _msthidden="1" _msthash="1094">
                                                                                        +34
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag lk"></div>
                                                                                    <strong _msttexthash="10587980" _msthidden="1" _msthash="1095">Sri Lanka (ශ්&zwj;රී ලංකාව)</strong>
                                                                                    <span _msttexthash="15925" _msthidden="1" _msthash="1096">
                                                                                        +94
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag sd"></div>
                                                                                    <strong _msttexthash="8527220" _msthidden="1" _msthash="1097">Sudan (&#x202B;السودان&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="22607" _msthidden="1" _msthash="1098">
                                                                                        +249
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag sr"></div>
                                                                                    <strong _msttexthash="114374" _msthidden="1" _msthash="1099">Suriname</strong>
                                                                                    <span _msttexthash="23244" _msthidden="1" _msthash="1100">
                                                                                        +597
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag sj"></div>
                                                                                    <strong _msttexthash="397800" _msthidden="1" _msthash="1101">Svalbard and Jan Mayen</strong>
                                                                                    <span _msttexthash="15756" _msthidden="1" _msthash="1102">
                                                                                        +47
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag sz"></div>
                                                                                    <strong _msttexthash="134914" _msthidden="1" _msthash="1103">Swaziland</strong>
                                                                                    <span _msttexthash="22711" _msthidden="1" _msthash="1104">
                                                                                        +268
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag se"></div>
                                                                                    <strong _msttexthash="254891" _msthidden="1" _msthash="1105">Sweden (Sverige)</strong>
                                                                                    <span _msttexthash="15639" _msthidden="1" _msthash="1106">
                                                                                        +46
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ch"></div>
                                                                                    <strong _msttexthash="417807" _msthidden="1" _msthash="1107">Switzerland (Schweiz)</strong>
                                                                                    <span _msttexthash="15054" _msthidden="1" _msthash="1108">
                                                                                        +41
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag sy"></div>
                                                                                    <strong _msttexthash="7294430" _msthidden="1" _msthash="1109">Syria (&#x202B;سوريا&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="22789" _msthidden="1" _msthash="1110">
                                                                                        +963
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag tw"></div>
                                                                                    <strong _msttexthash="9612967" _msthidden="1" _msthash="1111">Taiwan (台灣)</strong>
                                                                                    <span _msttexthash="23309" _msthidden="1" _msthash="1112">
                                                                                        +886
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag tj"></div>
                                                                                    <strong _msttexthash="157807" _msthidden="1" _msthash="1113">Tajikistan</strong>
                                                                                    <span _msttexthash="23010" _msthidden="1" _msthash="1114">
                                                                                        +992
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag tz"></div>
                                                                                    <strong _msttexthash="112892" _msthidden="1" _msthash="1115">Tanzania</strong>
                                                                                    <span _msttexthash="22204" _msthidden="1" _msthash="1116">
                                                                                        +255
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag th"></div>
                                                                                    <strong _msttexthash="2532127" _msthidden="1" _msthash="1117">Thailand (ไทย)</strong>
                                                                                    <span _msttexthash="15847" _msthidden="1" _msthash="1118">
                                                                                        +66
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag tl"></div>
                                                                                    <strong _msttexthash="169169" _msthidden="1" _msthash="1119">Timor-Leste</strong>
                                                                                    <span _msttexthash="22204" _msthidden="1" _msthash="1120">
                                                                                        +670
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag tg"></div>
                                                                                    <strong _msttexthash="45669" _msthidden="1" _msthash="1121">Togo</strong>
                                                                                    <span _msttexthash="22243" _msthidden="1" _msthash="1122">
                                                                                        +228
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag tk"></div>
                                                                                    <strong _msttexthash="95186" _msthidden="1" _msthash="1123">Tokelau</strong>
                                                                                    <span _msttexthash="22438" _msthidden="1" _msthash="1124">
                                                                                        +690
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag to"></div>
                                                                                    <strong _msttexthash="59319" _msthidden="1" _msthash="1125">Tonga</strong>
                                                                                    <span _msttexthash="22984" _msthidden="1" _msthash="1126">
                                                                                        +676
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag tt"></div>
                                                                                    <strong _msttexthash="336869" _msthidden="1" _msthash="1127">Trinidad and Tobago</strong>
                                                                                    <span _msttexthash="30589" _msthidden="1" _msthash="1128">
                                                                                        +1868
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag tn"></div>
                                                                                    <strong _msttexthash="7553364" _msthidden="1" _msthash="1129">Tunisia (&#x202B;تونس&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="21866" _msthidden="1" _msthash="1130">
                                                                                        +216
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag tr"></div>
                                                                                    <strong _msttexthash="290836" _msthidden="1" _msthash="1131">Turkey (Türkiye)</strong>
                                                                                    <span _msttexthash="15457" _msthidden="1" _msthash="1132">
                                                                                        +90
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag tm"></div>
                                                                                    <strong _msttexthash="209833" _msthidden="1" _msthash="1133">Turkmenistan</strong>
                                                                                    <span _msttexthash="23140" _msthidden="1" _msthash="1134">
                                                                                        +993
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag tc"></div>
                                                                                    <strong _msttexthash="477646" _msthidden="1" _msthash="1135">Turks and Caicos Islands</strong>
                                                                                    <span _msttexthash="30238" _msthidden="1" _msthash="1136">
                                                                                        +1649
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag tv"></div>
                                                                                    <strong _msttexthash="79924" _msthidden="1" _msthash="1137">Tuvalu</strong>
                                                                                    <span _msttexthash="23361" _msthidden="1" _msthash="1138">
                                                                                        +688
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag vi"></div>
                                                                                    <strong _msttexthash="326209" _msthidden="1" _msthash="1139">U.S. Virgin Islands</strong>
                                                                                    <span _msttexthash="28600" _msthidden="1" _msthash="1140">
                                                                                        +1340
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ug"></div>
                                                                                    <strong _msttexthash="73528" _msthidden="1" _msthash="1141">Uganda</strong>
                                                                                    <span _msttexthash="22334" _msthidden="1" _msthash="1142">
                                                                                        +256
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ua"></div>
                                                                                    <strong _msttexthash="1885091" _msthidden="1" _msthash="1143">Ukraine (Україна)</strong>
                                                                                    <span _msttexthash="22009" _msthidden="1" _msthash="1144">
                                                                                        +380
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred" _msthidden="2">
                                                                                    <div class="vti__flag ae"></div>
                                                                                    <strong _msttexthash="30784182" _msthidden="1" _msthash="1145">United Arab Emirates (&#x202B;الإمارات العربية المتحدة&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="22646" _msthidden="1" _msthash="1146">
                                                                                        +971
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag gb"></div>
                                                                                    <strong _msttexthash="226239" _msthidden="1" _msthash="1147">United Kingdom</strong>
                                                                                    <span _msttexthash="15405" _msthidden="1" _msthash="1148">
                                                                                        +44
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag us"></div>
                                                                                    <strong _msttexthash="203996" _msthidden="1" _msthash="1149">United States</strong>
                                                                                    <span _msttexthash="9009" _msthidden="1" _msthash="1150">
                                                                                        +1
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag uy"></div>
                                                                                    <strong _msttexthash="98982" _msthidden="1" _msthash="1151">Uruguay</strong>
                                                                                    <span _msttexthash="23374" _msthidden="1" _msthash="1152">
                                                                                        +598
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag uz"></div>
                                                                                    <strong _msttexthash="682175" _msthidden="1" _msthash="1153">Uzbekistan (Oʻzbekiston)</strong>
                                                                                    <span _msttexthash="23790" _msthidden="1" _msthash="1154">
                                                                                        +998
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag vu"></div>
                                                                                    <strong _msttexthash="97734" _msthidden="1" _msthash="1155">Vanuatu</strong>
                                                                                    <span _msttexthash="23244" _msthidden="1" _msthash="1156">
                                                                                        +678
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag va"></div>
                                                                                    <strong _msttexthash="807443" _msthidden="1" _msthash="1157">Vatican City (Città del Vaticano)</strong>
                                                                                    <span _msttexthash="15886" _msthidden="1" _msthash="1158">
                                                                                        +39
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ve"></div>
                                                                                    <strong _msttexthash="135668" _msthidden="1" _msthash="1159">Venezuela</strong>
                                                                                    <span _msttexthash="15977" _msthidden="1" _msthash="1160">
                                                                                        +58
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag vn"></div>
                                                                                    <strong _msttexthash="1995188" _msthidden="1" _msthash="1161">Vietnam (Việt Nam)</strong>
                                                                                    <span _msttexthash="15821" _msthidden="1" _msthash="1162">
                                                                                        +84
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag wf"></div>
                                                                                    <strong _msttexthash="935844" _msthidden="1" _msthash="1163">Wallis and Futuna (Wallis-et-Futuna)</strong>
                                                                                    <span _msttexthash="22451" _msthidden="1" _msthash="1164">
                                                                                        +681
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag eh"></div>
                                                                                    <strong _msttexthash="18531487" _msthidden="1" _msthash="1165">Western Sahara (&#x202B;الصحراء الغربية&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="21346" _msthidden="1" _msthash="1166">
                                                                                        +212
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred" _msthidden="2">
                                                                                    <div class="vti__flag ye"></div>
                                                                                    <strong _msttexthash="7302035" _msthidden="1" _msthash="1167">Yemen (&#x202B;اليمن&#x202C;&lrm;)</strong>
                                                                                    <span _msttexthash="23309" _msthidden="1" _msthash="1168">
                                                                                        +967
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag zm"></div>
                                                                                    <strong _msttexthash="73918" _msthidden="1" _msthash="1169">Zambia</strong>
                                                                                    <span _msttexthash="21671" _msthidden="1" _msthash="1170">
                                                                                        +260
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag zw"></div>
                                                                                    <strong _msttexthash="112255" _msthidden="1" _msthash="1171">Zimbabwe</strong>
                                                                                    <span _msttexthash="22061" _msthidden="1" _msthash="1172">
                                                                                        +263
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item" _msthidden="2">
                                                                                    <div class="vti__flag ax"></div>
                                                                                    <strong _msttexthash="210392" _msthidden="1" _msthash="1173">Åland Islands</strong>
                                                                                    <span _msttexthash="22698" _msthidden="1" _msthash="1174">
                                                                                        +358
                                                                                    </span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <input type="tel" autocomplete="on" id="receiver_mobile" maxlength="25" name="telephone" placeholder="+966 51 234 5678" tabindex="0" class="vti__input" _msthidden="A" _mstplaceholder="115934" _msthash="1175" />
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </span>
                                                    </div>
                                                    <div class="col-md-6" _msthidden="1">
                                                        <span _msthidden="1">
                                                            <fieldset class="form-group" _msthidden="1">
                                                                <label for="receiver_email" _msttexthash="8739861" _msthidden="1" _msthash="1176">البريد الالكتروني (اختياري)</label>
                                                                <input type="email" id="receiver_email" class="form-control" />
                                                                <!---->
                                                            </fieldset>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="row" _msthidden="1">
                                                    <div class="col-sm-12" _msthidden="1">
                                                        <fieldset class="form-group mb-0" _msthidden="1">
                                                            <div class="ui toggle checkbox" _msthidden="1">
                                                                <input id="receiver_notify" type="checkbox" debounce-events="change" />
                                                                <label for="receiver_notify" class="mb-0 label-light" _msttexthash="9151363" _msthidden="1" _msthash="1177">
                                                                    استقبال رسائل اشعارات الطلب
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
                                                <label _msttexthash="484822" _msthash="1178">Select Shipping Company</label>
                                                <!---->
                                                <p class="text-center m-0 alert alert-info" _msttexthash="4239677" _msthash="1179">Please select the address to view the shipping and delivery options available to you.</p>
                                            </fieldset>
                                            <!---->
                                        </div>
                                    </div>

                                </form>
                                <!---->

                            </div>
                            <!---->
                        </div>
                    </div>
                </div>



            </main>

        </div>





    </div>

</div>








<?php get_footer('checkout'); ?>