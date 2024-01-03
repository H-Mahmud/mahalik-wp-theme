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


<div id="payment_process" class="col-md-9 col-sm-12" style="display: block;">
    <main class="sections-wrapper">
        <header data-v-3d645cac="" class="store-info">
            <div data-v-3d645cac="" class="d-flex">
                <div data-v-3d645cac="" class="store-info__logo">
                    <a data-v-3d645cac="" href="https://lamsah.co/ar" class=""><img data-v-3d645cac="" src="https://cdn.salla.sa/RwEnq/3E53F6zsY8FIHoozHwvMmJaDT8574RtVhcwjGmvE.png" alt="Logo" /></a>
                </div>
                <div data-v-3d645cac="" class="store-info__detail">
                    <h1 data-v-3d645cac="">مرحباً بك Mahmudul Hasan</h1>
                    <ul data-v-3d645cac="" class="breadcrumb">
                        <li data-v-3d645cac="" class="breadcrumb-item"><a data-v-3d645cac="" href="https://lamsah.co/ar" target="_blank" class="">لمسة ستور</a></li>
                        <li data-v-3d645cac="" class="breadcrumb-item">
                            <a data-v-3d645cac="" href="https://lamsah.co/ar/cart" target="_blank" class="">
                                سلة المشتريات
                            </a>
                        </li>
                        <li data-v-3d645cac="" class="breadcrumb-item">إتمام الطلب</li>
                    </ul>
                </div>
            </div>
            <!---->
            <div data-v-3d645cac="" id="message_modal" class="ui modal failed">
                <div class="ui active inverted dimmer failed">
                    <i class="sicon-cancel-circle"></i>
                    <div class="message">
                        <b>حصل خطأ غير متوقع، يرجى إعادة المحاولة</b>
                        <p>جاري تحديث الصفحة ...</p>
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
                            <h3 data-v-084109d8="">الشحن والتوصيل</h3>
                        </div>
                        <!---->
                    </div>
                    <div data-v-084109d8="" id="shipping_method_fields">
                        <span data-v-084109d8="">
                            <span data-v-084109d8="">
                                <form id="shipping_form" class="form form--options-edit">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="shipping-address-redirect">
                                                <div id="addresses">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="title title--small title--smaller">
                                                                <h2>عنوان الشحن</h2>
                                                            </div>
                                                            <!---->
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---->
                                    <span>
                                        <form id="national_address_form">
                                            <div id="shipping_fields_wrapper">
                                                <div>
                                                    <div id="address_options" class="tabs-head">
                                                        <button id="map_location_toggle" type="button" class="btn btn--default btn--round btn--with-icon" style="display: none;">
                                                            <i class="sicon-location-target"></i>
                                                            حدد عنوانك من الخريطة
                                                        </button>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <span>
                                                                <fieldset class="form-group">
                                                                    <label>اختر الدولة</label>
                                                                    <div class="ui selection find compact dropdown" tabindex="0">
                                                                        <input type="hidden" name="country" value="1473353380" /> <span class="default text">السعودية</span> <i class="dropdown icon"></i>
                                                                        <div class="menu" tabindex="-1">
                                                                            <div class="search input"><i class="sicon-search"></i> <input type="text" placeholder="ابحث عن الدولة" class="form-control" /></div>
                                                                            <div class="scrolling">
                                                                                <div data-value="1473353380" class="item active selected">السعودية</div>
                                                                                <div data-value="566146469" class="item">الامارات</div>
                                                                                <div data-value="1939592358" class="item">الكويت</div>
                                                                                <div data-value="1298199463" class="item">قطر</div>
                                                                                <div data-value="525144736" class="item">البحرين</div>
                                                                                <div data-value="1764372897" class="item">العراق</div>
                                                                                <div data-value="989286562" class="item">عمان</div>
                                                                                <div data-value="349994915" class="item">اليمن</div>
                                                                                <div data-value="1723506348" class="item">مصر</div>
                                                                                <div data-value="814202285" class="item">السودان</div>
                                                                                <div data-value="40688814" class="item">ليبيا</div>
                                                                                <div data-value="1548352431" class="item">الجزائر</div>
                                                                                <div data-value="773200552" class="item">تونس</div>
                                                                                <div data-value="2079537577" class="item">المغرب</div>
                                                                                <div data-value="1440241834" class="item">سوريا</div>
                                                                                <div data-value="665151403" class="item">فلسطين</div>
                                                                                <div data-value="1130931637" class="item">لبنان</div>
                                                                                <div data-value="490063030" class="item">اروبا</div>
                                                                                <div data-value="1863508919" class="item">استراليا</div>
                                                                                <div data-value="956236464" class="item">افغانستان</div>
                                                                                <div data-value="180625841" class="item">البانيا</div>
                                                                                <div data-value="1688289458" class="item">المانيا</div>
                                                                                <div data-value="915304371" class="item">انتيغوا وبربودا</div>
                                                                                <div data-value="5541564" class="item">اندورا</div>
                                                                                <div data-value="1378987453" class="item">انغولا</div>
                                                                                <div data-value="740215998" class="item">انغويلا</div>
                                                                                <div data-value="2046553023" class="item">اورغواي</div>
                                                                                <div data-value="1270876856" class="item">اوزبكستان</div>
                                                                                <div data-value="632105401" class="item">اوغندا</div>
                                                                                <div data-value="2005551290" class="item">اوكرانيا</div>
                                                                                <div data-value="1096243131" class="item">ايرلندا</div>
                                                                                <div data-value="322729604" class="item">ايسلندا</div>
                                                                                <div data-value="1830458757" class="item">اثيوبيا</div>
                                                                                <div data-value="1055372422" class="item">اريتريا</div>
                                                                                <div data-value="147641223" class="item">اسبانيا</div>
                                                                                <div data-value="1521087104" class="item">استونيا</div>
                                                                                <div data-value="880152961" class="item">اندونيسيا</div>
                                                                                <div data-value="106115202" class="item">ايران</div>
                                                                                <div data-value="1345871747" class="item">ايطاليا</div>
                                                                                <div data-value="570785420" class="item">فلسطين المحتلة</div>
                                                                                <div data-value="2145623437" class="item">الأرجنتين</div>
                                                                                <div data-value="1237892238" class="item">الأردن</div>
                                                                                <div data-value="462805903" class="item">الإكوادور</div>
                                                                                <div data-value="1970469512" class="item">البرازيل</div>
                                                                                <div data-value="1197414793" class="item">البرتغال</div>
                                                                                <div data-value="287586442" class="item">البهاما</div>
                                                                                <div data-value="1661028235" class="item">البوسنة والهرسك</div>
                                                                                <div data-value="1022256788" class="item">الجابون</div>
                                                                                <div data-value="246711701" class="item">الجبل الأسود</div>
                                                                                <div data-value="1485939862" class="item">الدانمرك</div>
                                                                                <div data-value="712950679" class="item">الرأس الأخضر</div>
                                                                                <div data-value="73130640" class="item">السلفادور</div>
                                                                                <div data-value="1444938129" class="item">السنغال</div>
                                                                                <div data-value="537731218" class="item">السويد</div>
                                                                                <div data-value="2112507795" class="item">الصومال</div>
                                                                                <div data-value="1337421468" class="item">الصين</div>
                                                                                <div data-value="429755805" class="item">الفلبين</div>
                                                                                <div data-value="1803201694" class="item">الكاميرون</div>
                                                                                <div data-value="1162333087" class="item">الكونغو - برازافيل</div>
                                                                                <div data-value="388819608" class="item">الكونغو - كينشاسا</div>
                                                                                <div data-value="1627982233" class="item">المكسيك</div>
                                                                                <div data-value="852895898" class="item">بريطانيا</div>
                                                                                <div data-value="213071771" class="item">النرويج</div>
                                                                                <div data-value="1587042020" class="item">النمسا</div>
                                                                                <div data-value="677737957" class="item">النيجر</div>
                                                                                <div data-value="2051249382" class="item">الهند</div>
                                                                                <div data-value="1411953639" class="item">امريكا</div>
                                                                                <div data-value="569758432" class="item">اليابان</div>
                                                                                <div data-value="1943204321" class="item">اليونان</div>
                                                                                <div data-value="1304367330" class="item">بابوا غينيا الجديدة</div>
                                                                                <div data-value="528760803" class="item">باراغواي</div>
                                                                                <div data-value="1767988972" class="item">باكستان</div>
                                                                                <div data-value="994999789" class="item">بتسوانا</div>
                                                                                <div data-value="353672430" class="item">بربادوس</div>
                                                                                <div data-value="1727118319" class="item">برمودا</div>
                                                                                <div data-value="819911400" class="item">بروناي</div>
                                                                                <div data-value="45873641" class="item">بلجيكا</div>
                                                                                <div data-value="1551898858" class="item">بلغاريا</div>
                                                                                <div data-value="778905579" class="item">بليز</div>
                                                                                <div data-value="2018133748" class="item">بنجلاديش</div>
                                                                                <div data-value="1243047413" class="item">بنما</div>
                                                                                <div data-value="670926070" class="item">بنين</div>
                                                                                <div data-value="1910154231" class="item">بوتان</div>
                                                                                <div data-value="1135067888" class="item">بورتوريكو</div>
                                                                                <div data-value="495772145" class="item">بوركينا فاسو</div>
                                                                                <div data-value="1869152498" class="item">بوروندي</div>
                                                                                <div data-value="959852531" class="item">بولندا</div>
                                                                                <div data-value="185814780" class="item">بوليفيا</div>
                                                                                <div data-value="1694002685" class="item">بولينيزيا الفرنسية</div>
                                                                                <div data-value="918981886" class="item">بيرو</div>
                                                                                <div data-value="10726399" class="item">بيلاروس</div>
                                                                                <div data-value="1384696568" class="item">تايلاند</div>
                                                                                <div data-value="743827961" class="item">تايوان</div>
                                                                                <div data-value="2117208314" class="item">تركمانستان</div>
                                                                                <div data-value="1209997307" class="item">تركيا</div>
                                                                                <div data-value="635713220" class="item">ترينيداد وتوباغو</div>
                                                                                <div data-value="2009159109" class="item">تشاد</div>
                                                                                <div data-value="1101952198" class="item">تشيلي</div>
                                                                                <div data-value="326407111" class="item">تنزانيا</div>
                                                                                <div data-value="1834070720" class="item">توغو</div>
                                                                                <div data-value="1061081537" class="item">توفالو</div>
                                                                                <div data-value="152826050" class="item">تونغا</div>
                                                                                <div data-value="1524637635" class="item">تيمور الشرقية</div>
                                                                                <div data-value="885866188" class="item">جامايكا</div>
                                                                                <div data-value="111828429" class="item">جبل طارق</div>
                                                                                <div data-value="1350008014" class="item">جزر القمر</div>
                                                                                <div data-value="576560079" class="item">جزر الكايمن</div>
                                                                                <div data-value="2084223688" class="item">جزر المالديف</div>
                                                                                <div data-value="1309137353" class="item">جزر توركس وكايكوس</div>
                                                                                <div data-value="468515018" class="item">جزر سليمان</div>
                                                                                <div data-value="1976109003" class="item">جزر فارو</div>
                                                                                <div data-value="1201022676" class="item">جزر فرجين الأمريكية</div>
                                                                                <div data-value="292767189" class="item">جزر فرجين البريطانية</div>
                                                                                <div data-value="1666737366" class="item">جزر فوكلاند</div>
                                                                                <div data-value="1025934295" class="item">جزر كوك</div>
                                                                                <div data-value="251896528" class="item">جزر ماريانا الشمالية</div>
                                                                                <div data-value="1491648977" class="item">جزيرة مان</div>
                                                                                <div data-value="716562642" class="item">جزيرة نورفوك</div>
                                                                                <div data-value="76681171" class="item">جمهورية أفريقيا الوسطى</div>
                                                                                <div data-value="1451175644" class="item">جمهورية التشيك</div>
                                                                                <div data-value="541347293" class="item">جمهورية الدومينيك</div>
                                                                                <div data-value="1914793182" class="item">جنوب أفريقيا</div>
                                                                                <div data-value="1276087263" class="item">جنوب السودان</div>
                                                                                <div data-value="433367768" class="item">جورجيا</div>
                                                                                <div data-value="1806813657" class="item">جيبوتي</div>
                                                                                <div data-value="1168042202" class="item">جيرسي</div>
                                                                                <div data-value="394000347" class="item">دومينيكا</div>
                                                                                <div data-value="1631589924" class="item">رواندا</div>
                                                                                <div data-value="858600741" class="item">روسيا</div>
                                                                                <div data-value="218780710" class="item">رومانيا</div>
                                                                                <div data-value="1591178023" class="item">روينيون</div>
                                                                                <div data-value="683512352" class="item">زامبيا</div>
                                                                                <div data-value="2056958241" class="item">زيمبابوي</div>
                                                                                <div data-value="1416089634" class="item">ساحل العاج</div>
                                                                                <div data-value="642580259" class="item">ساموا</div>
                                                                                <div data-value="1881742892" class="item">ساموا الأمريكية</div>
                                                                                <div data-value="1307983149" class="item">سان مارينو</div>
                                                                                <div data-value="533945390" class="item">سانت فنسنت وغرنادين</div>
                                                                                <div data-value="1773697839" class="item">سانت كيتس ونيفيس</div>
                                                                                <div data-value="998677032" class="item">سانت لوسيا</div>
                                                                                <div data-value="358857001" class="item">سانت مارتن</div>
                                                                                <div data-value="1732827178" class="item">ساو تومي وبرينسيبي</div>
                                                                                <div data-value="823519019" class="item">سريلانكا</div>
                                                                                <div data-value="49415732" class="item">سلوفاكيا</div>
                                                                                <div data-value="1558127925" class="item">سلوفينيا</div>
                                                                                <div data-value="782517302" class="item">سنغافورة</div>
                                                                                <div data-value="2021745463" class="item">سوازيلاند</div>
                                                                                <div data-value="1248821808" class="item">سورينام</div>
                                                                                <div data-value="607428913" class="item">سويسرا</div>
                                                                                <div data-value="1980874802" class="item">سيراليون</div>
                                                                                <div data-value="1140780851" class="item">سيشل</div>
                                                                                <div data-value="500895292" class="item">سينت مارتن</div>
                                                                                <div data-value="1872768317" class="item">صربيا</div>
                                                                                <div data-value="965561406" class="item">طاجيكستان</div>
                                                                                <div data-value="191523647" class="item">غامبيا</div>
                                                                                <div data-value="1697679928" class="item">غانا</div>
                                                                                <div data-value="924690745" class="item">غرينادا</div>
                                                                                <div data-value="16435258" class="item">غرينلاند</div>
                                                                                <div data-value="1388828475" class="item">غواتيمالا</div>
                                                                                <div data-value="749532676" class="item">غوادلوب</div>
                                                                                <div data-value="2122913029" class="item">غوام</div>
                                                                                <div data-value="1213608966" class="item">غويانا الفرنسية</div>
                                                                                <div data-value="439571207" class="item">غيانا</div>
                                                                                <div data-value="1947759104" class="item">غينيا</div>
                                                                                <div data-value="1105629441" class="item">غينيا الإستوائية</div>
                                                                                <div data-value="331591682" class="item">غينيا بيساو</div>
                                                                                <div data-value="1839783683" class="item">فانواتو</div>
                                                                                <div data-value="1064697356" class="item">فرنسا</div>
                                                                                <div data-value="156376333" class="item">فنزويلا</div>
                                                                                <div data-value="1530870798" class="item">فنلندا</div>
                                                                                <div data-value="889477903" class="item">فيتنام</div>
                                                                                <div data-value="115440136" class="item">فيجي</div>
                                                                                <div data-value="1355782409" class="item">قبرص</div>
                                                                                <div data-value="580171786" class="item">قرغيزستان</div>
                                                                                <div data-value="2087831307" class="item">كازاخستان</div>
                                                                                <div data-value="1314842132" class="item">كاليدونيا الجديدة</div>
                                                                                <div data-value="406521109" class="item">كرواتيا</div>
                                                                                <div data-value="1778394134" class="item">كمبوديا</div>
                                                                                <div data-value="1206731543" class="item">كندا</div>
                                                                                <div data-value="298476048" class="item">كوبا</div>
                                                                                <div data-value="1670414609" class="item">كوراساو</div>
                                                                                <div data-value="1031643154" class="item">كوريا الجنوبية</div>
                                                                                <div data-value="257609491" class="item">كوستاريكا</div>
                                                                                <div data-value="1495789084" class="item">كوسوفو</div>
                                                                                <div data-value="722210077" class="item">كولومبيا</div>
                                                                                <div data-value="82390046" class="item">كيريباتي</div>
                                                                                <div data-value="1454787359" class="item">كينيا</div>
                                                                                <div data-value="546531864" class="item">لاتفيا</div>
                                                                                <div data-value="1920567577" class="item">لاوس</div>
                                                                                <div data-value="505657115" class="item">لوكسمبورغ</div>
                                                                                <div data-value="1745409636" class="item">ليبيريا</div>
                                                                                <div data-value="1171649893" class="item">ليتوانيا</div>
                                                                                <div data-value="397546598" class="item">ليختنشتاين</div>
                                                                                <div data-value="1637823335" class="item">ليسوتو</div>
                                                                                <div data-value="862212704" class="item">مارتينيك</div>
                                                                                <div data-value="222392673" class="item">مالطا</div>
                                                                                <div data-value="1596952674" class="item">مالي</div>
                                                                                <div data-value="687128419" class="item">ماليزيا</div>
                                                                                <div data-value="2060574316" class="item">مايوت</div>
                                                                                <div data-value="1421802861" class="item">مدغشقر</div>
                                                                                <div data-value="647699566" class="item">مقدونيا</div>
                                                                                <div data-value="1885354863" class="item">مكاو الصينية (منطقة إدارية خاصة)</div>
                                                                                <div data-value="1112365672" class="item">ملاوي</div>
                                                                                <div data-value="472545641" class="item">منغوليا</div>
                                                                                <div data-value="1777375338" class="item">موريتانيا</div>
                                                                                <div data-value="1004382059" class="item">موريشيوس</div>
                                                                                <div data-value="364562036" class="item">موزمبيق</div>
                                                                                <div data-value="1736959349" class="item">مولدافيا</div>
                                                                                <div data-value="829162614" class="item">موناكو</div>
                                                                                <div data-value="55124855" class="item">مونتسرات</div>
                                                                                <div data-value="1561739888" class="item">ميانمار -بورما</div>
                                                                                <div data-value="787702129" class="item">ميكرونيزيا</div>
                                                                                <div data-value="2027520114" class="item">ناميبيا</div>
                                                                                <div data-value="1252437875" class="item">ناورو</div>
                                                                                <div data-value="612617852" class="item">نيبال</div>
                                                                                <div data-value="1986588029" class="item">نيجيريا</div>
                                                                                <div data-value="1077218430" class="item">نيكاراغوا</div>
                                                                                <div data-value="303180671" class="item">نيوزيلندا</div>
                                                                                <div data-value="1879001720" class="item">هايتي</div>
                                                                                <div data-value="969173369" class="item">هندوراس</div>
                                                                                <div data-value="195201146" class="item">هنغاريا</div>
                                                                                <div data-value="1703909243" class="item">هولندا</div>
                                                                                <div data-value="928298564" class="item">هولندا الكاريبية</div>
                                                                                <div data-value="20043077" class="item">هونغ كونغ الصينية</div>
                                                                                <div data-value="1394537542" class="item">GUERNSEY</div>
                                                                                <div data-value="754651975" class="item">CANARY ISLANDS, THE</div>
                                                                                <div data-value="2126524992" class="item">KOREA, THE D.P.R OF (NORTH K.)</div>
                                                                                <div data-value="1219318081" class="item">KOSOVO</div>
                                                                                <div data-value="445280322" class="item">MARSHALL ISLANDS</div>
                                                                                <div data-value="1951440707" class="item">NIUE</div>
                                                                                <div data-value="1178451532" class="item">PALAU</div>
                                                                                <div data-value="270196045" class="item">SAINT HELENA</div>
                                                                                <div data-value="1843919950" class="item">BONAIRE</div>
                                                                                <div data-value="1070340943" class="item">CURACAO</div>
                                                                                <div data-value="162085448" class="item">ST. EUSTATIUS</div>
                                                                                <div data-value="1534482761" class="item">ST. MAARTEN</div>
                                                                                <div data-value="894662730" class="item">NEVIS</div>
                                                                                <div data-value="121210699" class="item">SOMALILAND, REP OF (NORTH SOMALIA)</div>
                                                                                <div data-value="1359390292" class="item">ST. BARTHELEMY</div>
                                                                                <div data-value="585352533" class="item">أذربيجان</div>
                                                                                <div data-value="2093540438" class="item">المرموثة</div>
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
                                                                    <label>اختر المدينة</label>
                                                                    <div class="ui selection find compact dropdown" tabindex="0">
                                                                        <input type="hidden" name="city" /> <span class="default text">ابحث عن المدينة</span> <i class="dropdown icon"></i>
                                                                        <div class="menu" tabindex="-1">
                                                                            <div class="search input"><i class="sicon-search"></i> <input type="text" placeholder="ابحث عن المدينة" class="form-control" /></div>
                                                                            <div class="scrolling">
                                                                                <div data-value="1473353380" class="item">الرياض</div>
                                                                                <div data-value="566146469" class="item">جدة</div>
                                                                                <div data-value="1939592358" class="item">مكة</div>
                                                                                <div data-value="1298199463" class="item">المدينة المنورة</div>
                                                                                <div data-value="525144736" class="item">الدمام</div>
                                                                                <div data-value="1764372897" class="item">الأحساء</div>
                                                                                <div data-value="989286562" class="item">القطيف</div>
                                                                                <div data-value="349994915" class="item">خميس مشيط</div>
                                                                                <div data-value="1723506348" class="item">المظيلف</div>
                                                                                <div data-value="814202285" class="item">تبوك</div>
                                                                                <div data-value="40688814" class="item">الهفوف</div>
                                                                                <div data-value="1548352431" class="item">المبرز</div>
                                                                                <div data-value="773200552" class="item">نجران</div>
                                                                                <div data-value="2079537577" class="item">حفر الباطن</div>
                                                                                <div data-value="1440241834" class="item">الجبيل</div>
                                                                                <div data-value="665151403" class="item">الطائف</div>
                                                                                <div data-value="1904445108" class="item">ضبا</div>
                                                                                <div data-value="1130931637" class="item">الخرج</div>
                                                                                <div data-value="490063030" class="item">الثقبة</div>
                                                                                <div data-value="1863508919" class="item">ينبع</div>
                                                                                <div data-value="956236464" class="item">عرعر</div>
                                                                                <div data-value="180625841" class="item">الحوية (الطائف)</div>
                                                                                <div data-value="1688289458" class="item">عنيزة</div>
                                                                                <div data-value="915304371" class="item">الخبر</div>
                                                                                <div data-value="5541564" class="item">سكاكا</div>
                                                                                <div data-value="1378987453" class="item">جازان</div>
                                                                                <div data-value="740215998" class="item">القريات</div>
                                                                                <div data-value="2046553023" class="item">الظهران</div>
                                                                                <div data-value="1270876856" class="item">الزلفي</div>
                                                                                <div data-value="632105401" class="item">الرس</div>
                                                                                <div data-value="2005551290" class="item">وادي الدواسر</div>
                                                                                <div data-value="1096243131" class="item">الباحة</div>
                                                                                <div data-value="322729604" class="item">بيشة</div>
                                                                                <div data-value="1830458757" class="item">سيهات</div>
                                                                                <div data-value="1055372422" class="item">شرورة</div>
                                                                                <div data-value="147641223" class="item">تاروت</div>
                                                                                <div data-value="1521087104" class="item">صبيا</div>
                                                                                <div data-value="880152961" class="item">أحد رفيدة</div>
                                                                                <div data-value="106115202" class="item">الفريش</div>
                                                                                <div data-value="1345871747" class="item">الدوادمي</div>
                                                                                <div data-value="570785420" class="item">بارق</div>
                                                                                <div data-value="2145623437" class="item">الحوطة</div>
                                                                                <div data-value="1237892238" class="item">الهدا</div>
                                                                                <div data-value="462805903" class="item">بريدة</div>
                                                                                <div data-value="1970469512" class="item">المذنب</div>
                                                                                <div data-value="1197414793" class="item">البكيرية</div>
                                                                                <div data-value="287586442" class="item">البدائع</div>
                                                                                <div data-value="1661028235" class="item">الهفوف والمبرز</div>
                                                                                <div data-value="1022256788" class="item">النبهانية</div>
                                                                                <div data-value="246711701" class="item">رياض الخبراء</div>
                                                                                <div data-value="1485939862" class="item">الشماسية</div>
                                                                                <div data-value="712950679" class="item">الغاط</div>
                                                                                <div data-value="73130640" class="item">عيون الجواء</div>
                                                                                <div data-value="1444938129" class="item">سراة عبيدة</div>
                                                                                <div data-value="537731218" class="item">المجمعة</div>
                                                                                <div data-value="2112507795" class="item">عفيف</div>
                                                                                <div data-value="1337421468" class="item">الدرعية</div>
                                                                                <div data-value="429755805" class="item">شقراء</div>
                                                                                <div data-value="1803201694" class="item">حوطة بني تميم</div>
                                                                                <div data-value="1162333087" class="item">ضرما</div>
                                                                                <div data-value="388819608" class="item">حريملاء</div>
                                                                                <div data-value="1627982233" class="item">السليل</div>
                                                                                <div data-value="852895898" class="item">المزاحمية</div>
                                                                                <div data-value="213071771" class="item">رابغ</div>
                                                                                <div data-value="1587042020" class="item">ثول</div>
                                                                                <div data-value="677737957" class="item">القنفذة</div>
                                                                                <div data-value="2051249382" class="item">العلا</div>
                                                                                <div data-value="1411953639" class="item">أبها</div>
                                                                                <div data-value="569758432" class="item">الليث</div>
                                                                                <div data-value="1943204321" class="item">النماص</div>
                                                                                <div data-value="1304367330" class="item">بلجرشي</div>
                                                                                <div data-value="528760803" class="item">المخواة</div>
                                                                                <div data-value="1767988972" class="item">تربة</div>
                                                                                <div data-value="994999789" class="item">أبو عريش</div>
                                                                                <div data-value="353672430" class="item">العريش</div>
                                                                                <div data-value="1727118319" class="item">الخفجي</div>
                                                                                <div data-value="819911400" class="item">الخرمة</div>
                                                                                <div data-value="45873641" class="item">حائل</div>
                                                                                <div data-value="1551898858" class="item">خريص</div>
                                                                                <div data-value="778905579" class="item">املج</div>
                                                                                <div data-value="2018133748" class="item">بدر</div>
                                                                                <div data-value="1243047413" class="item">دومة الجندل</div>
                                                                                <div data-value="670926070" class="item">ليلى</div>
                                                                                <div data-value="1135067888" class="item">الجموم</div>
                                                                                <div data-value="495772145" class="item">المندق</div>
                                                                                <div data-value="1869152498" class="item">خليص</div>
                                                                                <div data-value="959852531" class="item">خيبر</div>
                                                                                <div data-value="185814780" class="item">رأس تنورة</div>
                                                                                <div data-value="1694002685" class="item">صامطة</div>
                                                                                <div data-value="918981886" class="item">رجال المع</div>
                                                                                <div data-value="10726399" class="item">رنية</div>
                                                                                <div data-value="1384696568" class="item">ظهران الجنوب</div>
                                                                                <div data-value="743827961" class="item">مهد الذهب</div>
                                                                                <div data-value="2117208314" class="item">جزيرة فرسان</div>
                                                                                <div data-value="1209997307" class="item">الدلم</div>
                                                                                <div data-value="635713220" class="item">صفوى</div>
                                                                                <div data-value="2009159109" class="item">البديع الشمالي</div>
                                                                                <div data-value="1101952198" class="item">البديع الجنوبي</div>
                                                                                <div data-value="326407111" class="item">الهدار</div>
                                                                                <div data-value="1834070720" class="item">الأرطاوية</div>
                                                                                <div data-value="1061081537" class="item">الحاير</div>
                                                                                <div data-value="152826050" class="item">الحريق</div>
                                                                                <div data-value="1524637635" class="item">القويعية</div>
                                                                                <div data-value="885866188" class="item">الهياثم</div>
                                                                                <div data-value="111828429" class="item">تمير</div>
                                                                                <div data-value="1350008014" class="item">ثادق</div>
                                                                                <div data-value="576560079" class="item">حوطة سدير</div>
                                                                                <div data-value="2084223688" class="item">رماح</div>
                                                                                <div data-value="1309137353" class="item">ساجر</div>
                                                                                <div data-value="468515018" class="item">مرات</div>
                                                                                <div data-value="1976109003" class="item">العقيق</div>
                                                                                <div data-value="292767189" class="item">قلوة</div>
                                                                                <div data-value="1666737366" class="item">صوير</div>
                                                                                <div data-value="1025934295" class="item">طبرجل</div>
                                                                                <div data-value="251896528" class="item">العويقيلة</div>
                                                                                <div data-value="1491648977" class="item">رفحاء</div>
                                                                                <div data-value="716562642" class="item">طريف</div>
                                                                                <div data-value="76681171" class="item">الخبراء</div>
                                                                                <div data-value="1451175644" class="item">الثمد</div>
                                                                                <div data-value="541347293" class="item">الحناكية</div>
                                                                                <div data-value="1914793182" class="item">العيص</div>
                                                                                <div data-value="1276087263" class="item">المحفر</div>
                                                                                <div data-value="433367768" class="item">البطحاء</div>
                                                                                <div data-value="1806813657" class="item">بقيق</div>
                                                                                <div data-value="1168042202" class="item">الوجه</div>
                                                                                <div data-value="394000347" class="item">تيماء</div>
                                                                                <div data-value="1631589924" class="item">حقل</div>
                                                                                <div data-value="858600741" class="item">ابو السلع</div>
                                                                                <div data-value="218780710" class="item">أحد المسارحة</div>
                                                                                <div data-value="1591178023" class="item">البديع والقرفي</div>
                                                                                <div data-value="683512352" class="item">الجرادية</div>
                                                                                <div data-value="2056958241" class="item">الحسيني</div>
                                                                                <div data-value="1416089634" class="item">الدائر</div>
                                                                                <div data-value="642580259" class="item">الدرب</div>
                                                                                <div data-value="1881742892" class="item">الشقيري</div>
                                                                                <div data-value="1307983149" class="item">الطوال</div>
                                                                                <div data-value="533945390" class="item">المضايا</div>
                                                                                <div data-value="1773697839" class="item">المطعن</div>
                                                                                <div data-value="998677032" class="item">بيش</div>
                                                                                <div data-value="358857001" class="item">ضمد</div>
                                                                                <div data-value="1732827178" class="item">مزهرة</div>
                                                                                <div data-value="823519019" class="item">مسلية</div>
                                                                                <div data-value="49415732" class="item">الحائط</div>
                                                                                <div data-value="1558127925" class="item">الشنان</div>
                                                                                <div data-value="782517302" class="item">الاثنين</div>
                                                                                <div data-value="2021745463" class="item">المجاردة</div>
                                                                                <div data-value="1248821808" class="item">تثليث</div>
                                                                                <div data-value="607428913" class="item">تنومة (عسير)</div>
                                                                                <div data-value="1980874802" class="item">طريب</div>
                                                                                <div data-value="1140780851" class="item">محايل عسير</div>
                                                                                <div data-value="500895292" class="item">القوز</div>
                                                                                <div data-value="1872768317" class="item">عشيرة</div>
                                                                                <div data-value="965561406" class="item">مستورة</div>
                                                                                <div data-value="191523647" class="item">المشعلية</div>
                                                                                <div data-value="1697679928" class="item">حبونا</div>
                                                                                <div data-value="924690745" class="item">عنك</div>
                                                                                <div data-value="16435258" class="item">النعيرية</div>
                                                                                <div data-value="1388828475" class="item">بحره</div>
                                                                                <div data-value="749532676" class="item">وادي ابن هشبل</div>
                                                                                <div data-value="2122913029" class="item">خيبر الجنوب</div>
                                                                                <div data-value="1947759104" class="item">المضة</div>
                                                                                <div data-value="1105629441" class="item">سبت العلاية</div>
                                                                                <div data-value="1839783683" class="item">دخنة</div>
                                                                                <div data-value="1064697356" class="item">شواق</div>
                                                                                <div data-value="156376333" class="item">مدائن صالح</div>
                                                                                <div data-value="1530870798" class="item">فضلا</div>
                                                                                <div data-value="889477903" class="item">حزم الجلاميد</div>
                                                                                <div data-value="115440136" class="item">ميقوع</div>
                                                                                <div data-value="1355782409" class="item">الرايس</div>
                                                                                <div data-value="580171786" class="item">أبيار علي</div>
                                                                                <div data-value="2087831307" class="item">المويه الجديدة</div>
                                                                                <div data-value="1314842132" class="item">يدمة</div>
                                                                                <div data-value="406521109" class="item">الوديعة</div>
                                                                                <div data-value="1778394134" class="item">أم الملح</div>
                                                                                <div data-value="1206731543" class="item">الخرخير</div>
                                                                                <div data-value="298476048" class="item">ذعبلوتن</div>
                                                                                <div data-value="1670414609" class="item">الشلفا</div>
                                                                                <div data-value="1031643154" class="item">الرين</div>
                                                                                <div data-value="257609491" class="item">الرويضة</div>
                                                                                <div data-value="1495789084" class="item">عقلة الصقور</div>
                                                                                <div data-value="722210077" class="item">القيصومة</div>
                                                                                <div data-value="82390046" class="item">قبه</div>
                                                                                <div data-value="1454787359" class="item">لينه</div>
                                                                                <div data-value="546531864" class="item">بقعاء</div>
                                                                                <div data-value="1920567577" class="item">القاعد</div>
                                                                                <div data-value="1279698970" class="item">الغزالة</div>
                                                                                <div data-value="505657115" class="item">أسبطر</div>
                                                                                <div data-value="1745409636" class="item">الشملي</div>
                                                                                <div data-value="1171649893" class="item">الحليفة السفلى</div>
                                                                                <div data-value="397546598" class="item">العشاش</div>
                                                                                <div data-value="1637823335" class="item">مدينة الملك عبدالله الاقتصادية</div>
                                                                                <div data-value="862212704" class="item">ذهبان</div>
                                                                                <div data-value="222392673" class="item">عين قحطان</div>
                                                                                <div data-value="1596952674" class="item">فيفاء</div>
                                                                                <div data-value="687128419" class="item">السعدية</div>
                                                                                <div data-value="2060574316" class="item">الصبيخة</div>
                                                                                <div data-value="1421802861" class="item">المرامية</div>
                                                                                <div data-value="647699566" class="item">رأس الخير</div>
                                                                                <div data-value="1885354863" class="item">سلوى</div>
                                                                                <div data-value="1112365672" class="item">الشيحية</div>
                                                                                <div data-value="472545641" class="item">رفائع الجمش</div>
                                                                                <div data-value="1777375338" class="item">جلاجل</div>
                                                                                <div data-value="1004382059" class="item">قرية العليا</div>
                                                                                <div data-value="1736959349" class="item">عشيرة سدير</div>
                                                                                <div data-value="829162614" class="item">عودة سدير</div>
                                                                                <div data-value="55124855" class="item">روضة سدير</div>
                                                                                <div data-value="1561739888" class="item">صلبوخ</div>
                                                                                <div data-value="2027520114" class="item">الذيبية</div>
                                                                                <div data-value="1252437875" class="item">العيون (الهفوف)</div>
                                                                                <div data-value="612617852" class="item">الوزية</div>
                                                                                <div data-value="1986588029" class="item">جواثا</div>
                                                                                <div data-value="1077218430" class="item">العمران</div>
                                                                                <div data-value="303180671" class="item">جليجلة</div>
                                                                                <div data-value="1879001720" class="item">الطرف</div>
                                                                                <div data-value="969173369" class="item">الجفر</div>
                                                                                <div data-value="195201146" class="item">العضيلية</div>
                                                                                <div data-value="1703909243" class="item">البجادية</div>
                                                                                <div data-value="928298564" class="item">خوعاء</div>
                                                                                <div data-value="20043077" class="item">عذفاء</div>
                                                                                <div data-value="1394537542" class="item">زلوم</div>
                                                                                <div data-value="754651975" class="item">الرفيعة</div>
                                                                                <div data-value="2126524992" class="item">هديب</div>
                                                                                <div data-value="1219318081" class="item">الجش</div>
                                                                                <div data-value="445280322" class="item">الشقيق</div>
                                                                                <div data-value="1951440707" class="item">العوامية</div>
                                                                                <div data-value="1178451532" class="item">مدينة الملك خالد العسكرية</div>
                                                                                <div data-value="270196045" class="item">أم الساهك</div>
                                                                                <div data-value="1843919950" class="item">الأحمر</div>
                                                                                <div data-value="1070340943" class="item">العارضة</div>
                                                                                <div data-value="162085448" class="item">الحديثة</div>
                                                                                <div data-value="1534482761" class="item">المباركة</div>
                                                                                <div data-value="894662730" class="item">القصب</div>
                                                                                <div data-value="121210699" class="item">العيينة</div>
                                                                                <div data-value="1359390292" class="item">عين ابن فهيد</div>
                                                                                <div data-value="585352533" class="item">غطي</div>
                                                                                <div data-value="2093540438" class="item">مدينة جازان الإقتصادية</div>
                                                                                <div data-value="1318388567" class="item">المحلة</div>
                                                                                <div data-value="410133072" class="item">ام سعد</div>
                                                                                <div data-value="1784627537" class="item">عسفان</div>
                                                                                <div data-value="1143234642" class="item">النابية</div>
                                                                                <div data-value="369266515" class="item">الجميعة</div>
                                                                                <div data-value="1676652124" class="item">الأوجام</div>
                                                                                <div data-value="1035259229" class="item">عين دار</div>
                                                                                <div data-value="261221470" class="item">الدغيمي</div>
                                                                                <div data-value="1501432671" class="item">الشفا</div>
                                                                                <div data-value="727394904" class="item">السيل الكبير</div>
                                                                                <div data-value="86002009" class="item">السيل الصغير</div>
                                                                                <div data-value="552236891" class="item">الصرّار</div>
                                                                                <div data-value="1924175268" class="item">أضم</div>
                                                                                <div data-value="1285403813" class="item">العيدابي</div>
                                                                                <div data-value="511366054" class="item">نمرة</div>
                                                                                <div data-value="1749545639" class="item">القوارة</div>
                                                                                <div data-value="975966624" class="item">ضرية</div>
                                                                                <div data-value="336146593" class="item">بئر بن هرماس</div>
                                                                                <div data-value="1641439138" class="item">تندحة</div>
                                                                                <div data-value="867401379" class="item">أبيار الماشي</div>
                                                                                <div data-value="228171180" class="item">الأسياح</div>
                                                                                <div data-value="1600568493" class="item">الدليمية</div>
                                                                                <div data-value="692313006" class="item">الصمعورية</div>
                                                                                <div data-value="2066283183" class="item">ضليع رشيد</div>
                                                                                <div data-value="1425349032" class="item">الخشيبي</div>
                                                                                <div data-value="651311273" class="item">الجعيمة</div>
                                                                                <div data-value="1891583914" class="item">مبهل</div>
                                                                                <div data-value="1115973291" class="item">الخصيبة</div>
                                                                                <div data-value="476218804" class="item">البصر</div>
                                                                                <div data-value="1850713269" class="item">المليداء</div>
                                                                                <div data-value="940884918" class="item">القضيمة</div>
                                                                                <div data-value="368173751" class="item">حداء</div>
                                                                                <div data-value="1742602672" class="item">الصمد</div>
                                                                                <div data-value="834347185" class="item">المحمدية</div>
                                                                                <div data-value="58740658" class="item">الشعراء</div>
                                                                                <div data-value="1567452851" class="item">اشيقر</div>
                                                                                <div data-value="2031135933" class="item">الحفير</div>
                                                                                <div data-value="1258146750" class="item">موقق</div>
                                                                                <div data-value="618326719" class="item">جبة</div>
                                                                                <div data-value="1990658488" class="item">الخطة</div>
                                                                                <div data-value="1082927289" class="item">الحجرة</div>
                                                                                <div data-value="308885434" class="item">الأفلاج</div>
                                                                                <div data-value="1815500475" class="item">الأطاولة</div>
                                                                                <div data-value="1041462660" class="item">القصيم</div>
                                                                                <div data-value="200905861" class="item">الماوين</div>
                                                                                <div data-value="1707520902" class="item">الأبواء</div>
                                                                                <div data-value="933483143" class="item">الكوت</div>
                                                                                <div data-value="25751936" class="item">العمران</div>
                                                                                <div data-value="1398083713" class="item">الزيمة</div>
                                                                                <div data-value="758267778" class="item">بقا</div>
                                                                                <div data-value="2132762243" class="item">جميكا</div>
                                                                                <div data-value="1222933900" class="item">غطط</div>
                                                                                <div data-value="448961677" class="item">جرهاء</div>
                                                                                <div data-value="1957673870" class="item">الحبلة</div>
                                                                                <div data-value="1182063247" class="item">حرمة</div>
                                                                                <div data-value="273807752" class="item">جبل أم الرؤوس</div>
                                                                                <div data-value="1648236681" class="item">الجوف</div>
                                                                                <div data-value="1008412554" class="item">مدينة المعرفة الإقتصادية</div>
                                                                                <div data-value="165693067" class="item">لحيان&lrm;</div>
                                                                                <div data-value="1540187540" class="item">قلعة بيشه</div>
                                                                                <div data-value="900433045" class="item">الرميلة</div>
                                                                                <div data-value="124822422" class="item">الشيبة</div>
                                                                                <div data-value="1365099159" class="item">العقير</div>
                                                                                <div data-value="591061392" class="item">الفرشة</div>
                                                                                <div data-value="1234030289" class="item">بللسمر</div>
                                                                                <div data-value="923389041" class="item">أوثال</div>
                                                                                <div data-value="457314824" class="item">ثرمداء</div>
                                                                                <div data-value="1015332117" class="item">Ahad Al Masarhah</div>
                                                                                <div data-value="241294358" class="item">Al Uraija</div>
                                                                                <div data-value="1481571095" class="item">Atawlah</div>
                                                                                <div data-value="707467792" class="item">Bad</div>
                                                                                <div data-value="133183761" class="item">جسر الملك فهد</div>
                                                                                <div data-value="1373460498" class="item">Dhalim</div>
                                                                                <div data-value="599418643" class="item">Dhuba</div>
                                                                                <div data-value="2105574940" class="item">Duwadimi</div>
                                                                                <div data-value="1332585757" class="item">Haditha</div>
                                                                                <div data-value="424330270" class="item">Halat Ammar</div>
                                                                                <div data-value="1796727583" class="item">Halit Ammar</div>
                                                                                <div data-value="1157366296" class="item">Harad</div>
                                                                                <div data-value="383328537" class="item">Harjah</div>
                                                                                <div data-value="1621508122" class="item">Jeddah Airport</div>
                                                                                <div data-value="847474459" class="item">Khamasin</div>
                                                                                <div data-value="1580641637" class="item">King Khalid City</div>
                                                                                <div data-value="672386150" class="item">Mukhwah</div>
                                                                                <div data-value="100199271" class="item">Mulaija</div>
                                                                                <div data-value="1472531040" class="item">Muwayh</div>
                                                                                <div data-value="564275553" class="item">Noweirieh</div>
                                                                                <div data-value="1938770018" class="item">Qarya Al Uliya</div>
                                                                                <div data-value="1297373027" class="item">Qaseem Airport</div>
                                                                                <div data-value="523335276" class="item">Qaysumah</div>
                                                                                <div data-value="1763677549" class="item">Quwayiyah</div>
                                                                                <div data-value="988066926" class="item">Rafayaa Al Gimsh</div>
                                                                                <div data-value="348246895" class="item">Rahima</div>
                                                                                <div data-value="814420329" class="item">Riyadh Airport</div>
                                                                                <div data-value="38809706" class="item">Sapt Al Alaya</div>
                                                                                <div data-value="1547525995" class="item">Sarrar</div>
                                                                                <div data-value="773488244" class="item">Sayirah</div>
                                                                                <div data-value="2078317941" class="item">Tanajib</div>
                                                                                <div data-value="1439546486" class="item">تنومه</div>
                                                                                <div data-value="665508727" class="item">Tathlith</div>
                                                                                <div data-value="1903688304" class="item">Thqbah</div>
                                                                                <div data-value="1130109297" class="item">Ula</div>
                                                                                <div data-value="490289266" class="item">العثمانية</div>
                                                                                <div data-value="1862682483" class="item">Wadeien</div>
                                                                                <div data-value="954427004" class="item">Aba Alworood</div>
                                                                                <div data-value="180979069" class="item">ابو عجرم</div>
                                                                                <div data-value="1687594110" class="item">Ad Dahinah</div>
                                                                                <div data-value="913556351" class="item">Ad Dubaiyah</div>
                                                                                <div data-value="5825144" class="item">Al Adari</div>
                                                                                <div data-value="1378156921" class="item">Al Ajfar</div>
                                                                                <div data-value="738336890" class="item">Al Ammarah</div>
                                                                                <div data-value="2045726587" class="item">Al Arja</div>
                                                                                <div data-value="1270115908" class="item">Al Asyah</div>
                                                                                <div data-value="630361413" class="item">Al Bada</div>
                                                                                <div data-value="2004855878" class="item">Al Batra</div>
                                                                                <div data-value="1095027527" class="item">Al Fuwaileq</div>
                                                                                <div data-value="320989760" class="item">Al hait</div>
                                                                                <div data-value="1829636417" class="item">Al Haith</div>
                                                                                <div data-value="1055598658" class="item">Al Hufayyirah</div>
                                                                                <div data-value="145766211" class="item">Al Idabi</div>
                                                                                <div data-value="1520260684" class="item">Al Khishaybi</div>
                                                                                <div data-value="880440653" class="item">Al Khitah</div>
                                                                                <div data-value="104895566" class="item">Al Laqayit</div>
                                                                                <div data-value="1345172303" class="item">Al Mada</div>
                                                                                <div data-value="571134536" class="item">Al Mahd</div>
                                                                                <div data-value="2144858441" class="item">Al Midrij</div>
                                                                                <div data-value="1237061706" class="item">Al Moya</div>
                                                                                <div data-value="463028043" class="item">Al Qarin</div>
                                                                                <div data-value="1969643092" class="item">Al Ruqi</div>
                                                                                <div data-value="1195605333" class="item">Al Wasayta</div>
                                                                                <div data-value="287939670" class="item">Al-Jsh</div>
                                                                                <div data-value="1660336983" class="item">Amaq</div>
                                                                                <div data-value="1020516944" class="item">An Nabk Abu Qasr</div>
                                                                                <div data-value="247003473" class="item">An Nafiah</div>
                                                                                <div data-value="1485117522" class="item">An Nuqrah</div>
                                                                                <div data-value="711075667" class="item">Ar Radifah</div>
                                                                                <div data-value="72304220" class="item">Ar Rishawiyah</div>
                                                                                <div data-value="1444177245" class="item">As Sulaimaniyah</div>
                                                                                <div data-value="603096158" class="item">As Sulubiayh</div>
                                                                                <div data-value="2111808351" class="item">Ash Shaara</div>
                                                                                <div data-value="1336197720" class="item">Ash Shamli</div>
                                                                                <div data-value="427942233" class="item">Ash Shananah</div>
                                                                                <div data-value="1802371162" class="item">At Tuwayr</div>
                                                                                <div data-value="1162555227" class="item">Badar Hunain</div>
                                                                                <div data-value="386944420" class="item">Badr Al Janoub</div>
                                                                                <div data-value="1627221157" class="item">Bahrat Al Moujoud</div>
                                                                                <div data-value="853248934" class="item">بللحمر</div>
                                                                                <div data-value="211856039" class="item">Balasmar</div>
                                                                                <div data-value="1586350496" class="item">Balqarn</div>
                                                                                <div data-value="678095009" class="item">Bani Malek</div>
                                                                                <div data-value="2050488226" class="item">Baqa Ash Sharqiyah</div>
                                                                                <div data-value="1411126947" class="item">Baqiq</div>
                                                                                <div data-value="569980332" class="item">Bashayer</div>
                                                                                <div data-value="1942377645" class="item">Birk</div>
                                                                                <div data-value="1302557614" class="item">Dammam Airport</div>
                                                                                <div data-value="529109679" class="item">Deraab</div>
                                                                                <div data-value="1767289256" class="item">Dere'Iyeh</div>
                                                                                <div data-value="993251497" class="item">Dukhnah</div>
                                                                                <div data-value="353959850" class="item">Dulay Rashid</div>
                                                                                <div data-value="1726291627" class="item">Hadeethah</div>
                                                                                <div data-value="818036148" class="item">Hawea/Taif</div>
                                                                                <div data-value="45046965" class="item">Hayer</div>
                                                                                <div data-value="1551137718" class="item">Hazm Al Jalamid</div>
                                                                                <div data-value="777165495" class="item">Horaimal</div>
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
                                                                    <label for="neighborhood_name">الحي</label> <input type="text" id="neighborhood_name" placeholder="اسم الحي" class="form-control" />
                                                                    <!---->
                                                                </fieldset>
                                                            </span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span>
                                                                <fieldset class="form-group">
                                                                    <label for="street_name">الشارع</label> <input type="text" id="street_name" placeholder="اسم الشارع" class="form-control" />
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
                                                                    <label for="home_address">
                                                                        وصف البيت (اختياري)
                                                                    </label>
                                                                    <input type="text" id="home_address" placeholder="وصف البيت" class="form-control" />
                                                                    <!---->
                                                                </fieldset>
                                                            </span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span>
                                                                <fieldset class="form-group">
                                                                    <label for="postal_code">الرمز البريدي (اختياري)</label> <input type="text" id="postal_code" placeholder="الرمز البريدي" class="form-control" />
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
                                                <input id="receiver_toggle" type="checkbox" name="receiver-shipping" /> <label for="receiver_toggle">استلام الطلب عبر شخص آخر ؟</label>
                                            </div>
                                        </span>
                                        <div id="receiver_address" class="panel-block" style="display: none;">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label class="section-title payment-section-title">
                                                        اضف بيانات التواصل مع المستلم
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="shipping-address">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <span>
                                                            <fieldset class="form-group">
                                                                <label for="receiver_name">اسم المستلم</label> <input type="text" id="receiver_name" class="form-control" />
                                                                <!---->
                                                            </fieldset>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <span>
                                                            <fieldset class="form-group">
                                                                <label for="receiver_mobile">رقم الجوال</label>
                                                                <div data-v-48040520="" class="form-control tel-input-wrapper">
                                                                    <div data-v-48040520="" class="vue-tel-input">
                                                                        <div tabindex="0" class="vti__dropdown">
                                                                            <span class="vti__selection">
                                                                                <div class="vti__flag sa"></div>
                                                                                <!---->
                                                                                <span class="vti__dropdown-arrow">▼</span>
                                                                            </span>
                                                                            <ul class="vti__dropdown-list below" style="display: none;">
                                                                                <li class="vti__dropdown-item preferred">
                                                                                    <div class="vti__flag sa"></div>
                                                                                    <strong>Saudi Arabia (&#x202B;المملكة العربية السعودية&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +966
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred">
                                                                                    <div class="vti__flag ae"></div>
                                                                                    <strong>United Arab Emirates (&#x202B;الإمارات العربية المتحدة&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +971
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred">
                                                                                    <div class="vti__flag kw"></div>
                                                                                    <strong>Kuwait (&#x202B;الكويت&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +965
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred">
                                                                                    <div class="vti__flag bh"></div>
                                                                                    <strong>Bahrain (&#x202B;البحرين&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +973
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred">
                                                                                    <div class="vti__flag iq"></div>
                                                                                    <strong>Iraq (&#x202B;العراق&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +964
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred">
                                                                                    <div class="vti__flag qa"></div>
                                                                                    <strong>Qatar (&#x202B;قطر&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +974
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred">
                                                                                    <div class="vti__flag om"></div>
                                                                                    <strong>Oman (&#x202B;عُمان&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +968
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred">
                                                                                    <div class="vti__flag ye"></div>
                                                                                    <strong>Yemen (&#x202B;اليمن&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +967
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item last-preferred preferred">
                                                                                    <div class="vti__flag eg"></div>
                                                                                    <strong>Egypt (&#x202B;مصر&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +20
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag af"></div>
                                                                                    <strong>Afghanistan (&#x202B;افغانستان&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +93
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag al"></div>
                                                                                    <strong>Albania (Shqipëri)</strong>
                                                                                    <span>
                                                                                        +355
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag dz"></div>
                                                                                    <strong>Algeria (&#x202B;الجزائر&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +213
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag as"></div>
                                                                                    <strong>American Samoa</strong>
                                                                                    <span>
                                                                                        +1684
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ad"></div>
                                                                                    <strong>Andorra</strong>
                                                                                    <span>
                                                                                        +376
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ao"></div>
                                                                                    <strong>Angola</strong>
                                                                                    <span>
                                                                                        +244
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ai"></div>
                                                                                    <strong>Anguilla</strong>
                                                                                    <span>
                                                                                        +1264
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ag"></div>
                                                                                    <strong>Antigua and Barbuda</strong>
                                                                                    <span>
                                                                                        +1268
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ar"></div>
                                                                                    <strong>Argentina</strong>
                                                                                    <span>
                                                                                        +54
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag am"></div>
                                                                                    <strong>Armenia (Հայաստան)</strong>
                                                                                    <span>
                                                                                        +374
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag aw"></div>
                                                                                    <strong>Aruba</strong>
                                                                                    <span>
                                                                                        +297
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag au"></div>
                                                                                    <strong>Australia</strong>
                                                                                    <span>
                                                                                        +61
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag at"></div>
                                                                                    <strong>Austria (Österreich)</strong>
                                                                                    <span>
                                                                                        +43
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag az"></div>
                                                                                    <strong>Azerbaijan (Azərbaycan)</strong>
                                                                                    <span>
                                                                                        +994
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag bs"></div>
                                                                                    <strong>Bahamas</strong>
                                                                                    <span>
                                                                                        +1242
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred">
                                                                                    <div class="vti__flag bh"></div>
                                                                                    <strong>Bahrain (&#x202B;البحرين&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +973
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag bd"></div>
                                                                                    <strong>Bangladesh (বাংলাদেশ)</strong>
                                                                                    <span>
                                                                                        +880
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag bb"></div>
                                                                                    <strong>Barbados</strong>
                                                                                    <span>
                                                                                        +1246
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag by"></div>
                                                                                    <strong>Belarus (Беларусь)</strong>
                                                                                    <span>
                                                                                        +375
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag be"></div>
                                                                                    <strong>Belgium (België)</strong>
                                                                                    <span>
                                                                                        +32
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag bz"></div>
                                                                                    <strong>Belize</strong>
                                                                                    <span>
                                                                                        +501
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag bj"></div>
                                                                                    <strong>Benin (Bénin)</strong>
                                                                                    <span>
                                                                                        +229
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag bm"></div>
                                                                                    <strong>Bermuda</strong>
                                                                                    <span>
                                                                                        +1441
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag bt"></div>
                                                                                    <strong>Bhutan (འབྲུག)</strong>
                                                                                    <span>
                                                                                        +975
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag bo"></div>
                                                                                    <strong>Bolivia</strong>
                                                                                    <span>
                                                                                        +591
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ba"></div>
                                                                                    <strong>Bosnia and Herzegovina (Босна и Херцеговина)</strong>
                                                                                    <span>
                                                                                        +387
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag bw"></div>
                                                                                    <strong>Botswana</strong>
                                                                                    <span>
                                                                                        +267
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag br"></div>
                                                                                    <strong>Brazil (Brasil)</strong>
                                                                                    <span>
                                                                                        +55
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag io"></div>
                                                                                    <strong>British Indian Ocean Territory</strong>
                                                                                    <span>
                                                                                        +246
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag vg"></div>
                                                                                    <strong>British Virgin Islands</strong>
                                                                                    <span>
                                                                                        +1284
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag bn"></div>
                                                                                    <strong>Brunei</strong>
                                                                                    <span>
                                                                                        +673
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag bg"></div>
                                                                                    <strong>Bulgaria (България)</strong>
                                                                                    <span>
                                                                                        +359
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag bf"></div>
                                                                                    <strong>Burkina Faso</strong>
                                                                                    <span>
                                                                                        +226
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag bi"></div>
                                                                                    <strong>Burundi (Uburundi)</strong>
                                                                                    <span>
                                                                                        +257
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag kh"></div>
                                                                                    <strong>Cambodia (កម្ពុជា)</strong>
                                                                                    <span>
                                                                                        +855
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag cm"></div>
                                                                                    <strong>Cameroon (Cameroun)</strong>
                                                                                    <span>
                                                                                        +237
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ca"></div>
                                                                                    <strong>Canada</strong>
                                                                                    <span>
                                                                                        +1
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag cv"></div>
                                                                                    <strong>Cape Verde (Kabu Verdi)</strong>
                                                                                    <span>
                                                                                        +238
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag bq"></div>
                                                                                    <strong>Caribbean Netherlands</strong>
                                                                                    <span>
                                                                                        +599
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ky"></div>
                                                                                    <strong>Cayman Islands</strong>
                                                                                    <span>
                                                                                        +1345
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag cf"></div>
                                                                                    <strong>Central African Republic (République centrafricaine)</strong>
                                                                                    <span>
                                                                                        +236
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag td"></div>
                                                                                    <strong>Chad (Tchad)</strong>
                                                                                    <span>
                                                                                        +235
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag cl"></div>
                                                                                    <strong>Chile</strong>
                                                                                    <span>
                                                                                        +56
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag cn"></div>
                                                                                    <strong>China (中国)</strong>
                                                                                    <span>
                                                                                        +86
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag cx"></div>
                                                                                    <strong>Christmas Island</strong>
                                                                                    <span>
                                                                                        +61
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag cc"></div>
                                                                                    <strong>Cocos (Keeling) Islands</strong>
                                                                                    <span>
                                                                                        +61
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag co"></div>
                                                                                    <strong>Colombia</strong>
                                                                                    <span>
                                                                                        +57
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag km"></div>
                                                                                    <strong>Comoros (&#x202B;جزر القمر&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +269
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag cd"></div>
                                                                                    <strong>Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)</strong>
                                                                                    <span>
                                                                                        +243
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag cg"></div>
                                                                                    <strong>Congo (Republic) (Congo-Brazzaville)</strong>
                                                                                    <span>
                                                                                        +242
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ck"></div>
                                                                                    <strong>Cook Islands</strong>
                                                                                    <span>
                                                                                        +682
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag cr"></div>
                                                                                    <strong>Costa Rica</strong>
                                                                                    <span>
                                                                                        +506
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ci"></div>
                                                                                    <strong>Côte d’Ivoire</strong>
                                                                                    <span>
                                                                                        +225
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag hr"></div>
                                                                                    <strong>Croatia (Hrvatska)</strong>
                                                                                    <span>
                                                                                        +385
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag cu"></div>
                                                                                    <strong>Cuba</strong>
                                                                                    <span>
                                                                                        +53
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag cw"></div>
                                                                                    <strong>Curaçao</strong>
                                                                                    <span>
                                                                                        +599
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag cy"></div>
                                                                                    <strong>Cyprus (Κύπρος)</strong>
                                                                                    <span>
                                                                                        +357
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag cz"></div>
                                                                                    <strong>Czech Republic (Česká republika)</strong>
                                                                                    <span>
                                                                                        +420
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag dk"></div>
                                                                                    <strong>Denmark (Danmark)</strong>
                                                                                    <span>
                                                                                        +45
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag dj"></div>
                                                                                    <strong>Djibouti</strong>
                                                                                    <span>
                                                                                        +253
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag dm"></div>
                                                                                    <strong>Dominica</strong>
                                                                                    <span>
                                                                                        +1767
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag do"></div>
                                                                                    <strong>Dominican Republic (República Dominicana)</strong>
                                                                                    <span>
                                                                                        +1
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ec"></div>
                                                                                    <strong>Ecuador</strong>
                                                                                    <span>
                                                                                        +593
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred">
                                                                                    <div class="vti__flag eg"></div>
                                                                                    <strong>Egypt (&#x202B;مصر&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +20
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag sv"></div>
                                                                                    <strong>El Salvador</strong>
                                                                                    <span>
                                                                                        +503
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag gq"></div>
                                                                                    <strong>Equatorial Guinea (Guinea Ecuatorial)</strong>
                                                                                    <span>
                                                                                        +240
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag er"></div>
                                                                                    <strong>Eritrea</strong>
                                                                                    <span>
                                                                                        +291
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ee"></div>
                                                                                    <strong>Estonia (Eesti)</strong>
                                                                                    <span>
                                                                                        +372
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag et"></div>
                                                                                    <strong>Ethiopia</strong>
                                                                                    <span>
                                                                                        +251
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag fk"></div>
                                                                                    <strong>Falkland Islands (Islas Malvinas)</strong>
                                                                                    <span>
                                                                                        +500
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag fo"></div>
                                                                                    <strong>Faroe Islands (Føroyar)</strong>
                                                                                    <span>
                                                                                        +298
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag fj"></div>
                                                                                    <strong>Fiji</strong>
                                                                                    <span>
                                                                                        +679
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag fi"></div>
                                                                                    <strong>Finland (Suomi)</strong>
                                                                                    <span>
                                                                                        +358
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag fr"></div>
                                                                                    <strong>France</strong>
                                                                                    <span>
                                                                                        +33
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag gf"></div>
                                                                                    <strong>French Guiana (Guyane française)</strong>
                                                                                    <span>
                                                                                        +594
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag pf"></div>
                                                                                    <strong>French Polynesia (Polynésie française)</strong>
                                                                                    <span>
                                                                                        +689
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ga"></div>
                                                                                    <strong>Gabon</strong>
                                                                                    <span>
                                                                                        +241
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag gm"></div>
                                                                                    <strong>Gambia</strong>
                                                                                    <span>
                                                                                        +220
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ge"></div>
                                                                                    <strong>Georgia (საქართველო)</strong>
                                                                                    <span>
                                                                                        +995
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag de"></div>
                                                                                    <strong>Germany (Deutschland)</strong>
                                                                                    <span>
                                                                                        +49
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag gh"></div>
                                                                                    <strong>Ghana (Gaana)</strong>
                                                                                    <span>
                                                                                        +233
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag gi"></div>
                                                                                    <strong>Gibraltar</strong>
                                                                                    <span>
                                                                                        +350
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag gr"></div>
                                                                                    <strong>Greece (Ελλάδα)</strong>
                                                                                    <span>
                                                                                        +30
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag gl"></div>
                                                                                    <strong>Greenland (Kalaallit Nunaat)</strong>
                                                                                    <span>
                                                                                        +299
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag gd"></div>
                                                                                    <strong>Grenada</strong>
                                                                                    <span>
                                                                                        +1473
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag gp"></div>
                                                                                    <strong>Guadeloupe</strong>
                                                                                    <span>
                                                                                        +590
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag gu"></div>
                                                                                    <strong>Guam</strong>
                                                                                    <span>
                                                                                        +1671
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag gt"></div>
                                                                                    <strong>Guatemala</strong>
                                                                                    <span>
                                                                                        +502
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag gg"></div>
                                                                                    <strong>Guernsey</strong>
                                                                                    <span>
                                                                                        +44
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag gn"></div>
                                                                                    <strong>Guinea (Guinée)</strong>
                                                                                    <span>
                                                                                        +224
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag gw"></div>
                                                                                    <strong>Guinea-Bissau (Guiné Bissau)</strong>
                                                                                    <span>
                                                                                        +245
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag gy"></div>
                                                                                    <strong>Guyana</strong>
                                                                                    <span>
                                                                                        +592
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ht"></div>
                                                                                    <strong>Haiti</strong>
                                                                                    <span>
                                                                                        +509
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag hn"></div>
                                                                                    <strong>Honduras</strong>
                                                                                    <span>
                                                                                        +504
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag hk"></div>
                                                                                    <strong>Hong Kong (香港)</strong>
                                                                                    <span>
                                                                                        +852
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag hu"></div>
                                                                                    <strong>Hungary (Magyarország)</strong>
                                                                                    <span>
                                                                                        +36
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag is"></div>
                                                                                    <strong>Iceland (Ísland)</strong>
                                                                                    <span>
                                                                                        +354
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag in"></div>
                                                                                    <strong>India (भारत)</strong>
                                                                                    <span>
                                                                                        +91
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag id"></div>
                                                                                    <strong>Indonesia</strong>
                                                                                    <span>
                                                                                        +62
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ir"></div>
                                                                                    <strong>Iran (&#x202B;ایران&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +98
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred">
                                                                                    <div class="vti__flag iq"></div>
                                                                                    <strong>Iraq (&#x202B;العراق&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +964
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ie"></div>
                                                                                    <strong>Ireland</strong>
                                                                                    <span>
                                                                                        +353
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag im"></div>
                                                                                    <strong>Isle of Man</strong>
                                                                                    <span>
                                                                                        +44
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag il"></div>
                                                                                    <strong>Israel (&#x202B;ישראל&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +972
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag it"></div>
                                                                                    <strong>Italy (Italia)</strong>
                                                                                    <span>
                                                                                        +39
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag jm"></div>
                                                                                    <strong>Jamaica</strong>
                                                                                    <span>
                                                                                        +1876
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag jp"></div>
                                                                                    <strong>Japan (日本)</strong>
                                                                                    <span>
                                                                                        +81
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag je"></div>
                                                                                    <strong>Jersey</strong>
                                                                                    <span>
                                                                                        +44
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag jo"></div>
                                                                                    <strong>Jordan (&#x202B;الأردن&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +962
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag kz"></div>
                                                                                    <strong>Kazakhstan (Казахстан)</strong>
                                                                                    <span>
                                                                                        +7
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ke"></div>
                                                                                    <strong>Kenya</strong>
                                                                                    <span>
                                                                                        +254
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ki"></div>
                                                                                    <strong>Kiribati</strong>
                                                                                    <span>
                                                                                        +686
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag xk"></div>
                                                                                    <strong>Kosovo</strong>
                                                                                    <span>
                                                                                        +383
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred">
                                                                                    <div class="vti__flag kw"></div>
                                                                                    <strong>Kuwait (&#x202B;الكويت&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +965
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag kg"></div>
                                                                                    <strong>Kyrgyzstan (Кыргызстан)</strong>
                                                                                    <span>
                                                                                        +996
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag la"></div>
                                                                                    <strong>Laos (ລາວ)</strong>
                                                                                    <span>
                                                                                        +856
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag lv"></div>
                                                                                    <strong>Latvia (Latvija)</strong>
                                                                                    <span>
                                                                                        +371
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag lb"></div>
                                                                                    <strong>Lebanon (&#x202B;لبنان&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +961
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ls"></div>
                                                                                    <strong>Lesotho</strong>
                                                                                    <span>
                                                                                        +266
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag lr"></div>
                                                                                    <strong>Liberia</strong>
                                                                                    <span>
                                                                                        +231
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ly"></div>
                                                                                    <strong>Libya (&#x202B;ليبيا&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +218
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag li"></div>
                                                                                    <strong>Liechtenstein</strong>
                                                                                    <span>
                                                                                        +423
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag lt"></div>
                                                                                    <strong>Lithuania (Lietuva)</strong>
                                                                                    <span>
                                                                                        +370
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag lu"></div>
                                                                                    <strong>Luxembourg</strong>
                                                                                    <span>
                                                                                        +352
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag mo"></div>
                                                                                    <strong>Macau (澳門)</strong>
                                                                                    <span>
                                                                                        +853
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag mk"></div>
                                                                                    <strong>Macedonia (FYROM) (Македонија)</strong>
                                                                                    <span>
                                                                                        +389
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag mg"></div>
                                                                                    <strong>Madagascar (Madagasikara)</strong>
                                                                                    <span>
                                                                                        +261
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag mw"></div>
                                                                                    <strong>Malawi</strong>
                                                                                    <span>
                                                                                        +265
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag my"></div>
                                                                                    <strong>Malaysia</strong>
                                                                                    <span>
                                                                                        +60
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag mv"></div>
                                                                                    <strong>Maldives</strong>
                                                                                    <span>
                                                                                        +960
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ml"></div>
                                                                                    <strong>Mali</strong>
                                                                                    <span>
                                                                                        +223
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag mt"></div>
                                                                                    <strong>Malta</strong>
                                                                                    <span>
                                                                                        +356
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag mh"></div>
                                                                                    <strong>Marshall Islands</strong>
                                                                                    <span>
                                                                                        +692
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag mq"></div>
                                                                                    <strong>Martinique</strong>
                                                                                    <span>
                                                                                        +596
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag mr"></div>
                                                                                    <strong>Mauritania (&#x202B;موريتانيا&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +222
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag mu"></div>
                                                                                    <strong>Mauritius (Moris)</strong>
                                                                                    <span>
                                                                                        +230
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag yt"></div>
                                                                                    <strong>Mayotte</strong>
                                                                                    <span>
                                                                                        +262
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag mx"></div>
                                                                                    <strong>Mexico (México)</strong>
                                                                                    <span>
                                                                                        +52
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag fm"></div>
                                                                                    <strong>Micronesia</strong>
                                                                                    <span>
                                                                                        +691
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag md"></div>
                                                                                    <strong>Moldova (Republica Moldova)</strong>
                                                                                    <span>
                                                                                        +373
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag mc"></div>
                                                                                    <strong>Monaco</strong>
                                                                                    <span>
                                                                                        +377
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag mn"></div>
                                                                                    <strong>Mongolia (Монгол)</strong>
                                                                                    <span>
                                                                                        +976
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag me"></div>
                                                                                    <strong>Montenegro (Crna Gora)</strong>
                                                                                    <span>
                                                                                        +382
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ms"></div>
                                                                                    <strong>Montserrat</strong>
                                                                                    <span>
                                                                                        +1664
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ma"></div>
                                                                                    <strong>Morocco (&#x202B;المغرب&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +212
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag mz"></div>
                                                                                    <strong>Mozambique (Moçambique)</strong>
                                                                                    <span>
                                                                                        +258
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag mm"></div>
                                                                                    <strong>Myanmar (Burma) (မြန်မာ)</strong>
                                                                                    <span>
                                                                                        +95
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag na"></div>
                                                                                    <strong>Namibia (Namibië)</strong>
                                                                                    <span>
                                                                                        +264
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag nr"></div>
                                                                                    <strong>Nauru</strong>
                                                                                    <span>
                                                                                        +674
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag np"></div>
                                                                                    <strong>Nepal (नेपाल)</strong>
                                                                                    <span>
                                                                                        +977
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag nl"></div>
                                                                                    <strong>Netherlands (Nederland)</strong>
                                                                                    <span>
                                                                                        +31
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag nc"></div>
                                                                                    <strong>New Caledonia (Nouvelle-Calédonie)</strong>
                                                                                    <span>
                                                                                        +687
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag nz"></div>
                                                                                    <strong>New Zealand</strong>
                                                                                    <span>
                                                                                        +64
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ni"></div>
                                                                                    <strong>Nicaragua</strong>
                                                                                    <span>
                                                                                        +505
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ne"></div>
                                                                                    <strong>Niger (Nijar)</strong>
                                                                                    <span>
                                                                                        +227
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ng"></div>
                                                                                    <strong>Nigeria</strong>
                                                                                    <span>
                                                                                        +234
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag nu"></div>
                                                                                    <strong>Niue</strong>
                                                                                    <span>
                                                                                        +683
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag nf"></div>
                                                                                    <strong>Norfolk Island</strong>
                                                                                    <span>
                                                                                        +672
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag kp"></div>
                                                                                    <strong>North Korea (조선 민주주의 인민 공화국)</strong>
                                                                                    <span>
                                                                                        +850
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag mp"></div>
                                                                                    <strong>Northern Mariana Islands</strong>
                                                                                    <span>
                                                                                        +1670
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag no"></div>
                                                                                    <strong>Norway (Norge)</strong>
                                                                                    <span>
                                                                                        +47
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred">
                                                                                    <div class="vti__flag om"></div>
                                                                                    <strong>Oman (&#x202B;عُمان&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +968
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag pk"></div>
                                                                                    <strong>Pakistan (&#x202B;پاکستان&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +92
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag pw"></div>
                                                                                    <strong>Palau</strong>
                                                                                    <span>
                                                                                        +680
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ps"></div>
                                                                                    <strong>Palestine (&#x202B;فلسطين&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +970
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag pa"></div>
                                                                                    <strong>Panama (Panamá)</strong>
                                                                                    <span>
                                                                                        +507
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag pg"></div>
                                                                                    <strong>Papua New Guinea</strong>
                                                                                    <span>
                                                                                        +675
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag py"></div>
                                                                                    <strong>Paraguay</strong>
                                                                                    <span>
                                                                                        +595
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag pe"></div>
                                                                                    <strong>Peru (Perú)</strong>
                                                                                    <span>
                                                                                        +51
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ph"></div>
                                                                                    <strong>Philippines</strong>
                                                                                    <span>
                                                                                        +63
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag pl"></div>
                                                                                    <strong>Poland (Polska)</strong>
                                                                                    <span>
                                                                                        +48
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag pt"></div>
                                                                                    <strong>Portugal</strong>
                                                                                    <span>
                                                                                        +351
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag pr"></div>
                                                                                    <strong>Puerto Rico</strong>
                                                                                    <span>
                                                                                        +1
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred">
                                                                                    <div class="vti__flag qa"></div>
                                                                                    <strong>Qatar (&#x202B;قطر&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +974
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag re"></div>
                                                                                    <strong>Réunion (La Réunion)</strong>
                                                                                    <span>
                                                                                        +262
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ro"></div>
                                                                                    <strong>Romania (România)</strong>
                                                                                    <span>
                                                                                        +40
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ru"></div>
                                                                                    <strong>Russia (Россия)</strong>
                                                                                    <span>
                                                                                        +7
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag rw"></div>
                                                                                    <strong>Rwanda</strong>
                                                                                    <span>
                                                                                        +250
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag bl"></div>
                                                                                    <strong>Saint Barthélemy</strong>
                                                                                    <span>
                                                                                        +590
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag sh"></div>
                                                                                    <strong>Saint Helena</strong>
                                                                                    <span>
                                                                                        +290
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag kn"></div>
                                                                                    <strong>Saint Kitts and Nevis</strong>
                                                                                    <span>
                                                                                        +1869
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag lc"></div>
                                                                                    <strong>Saint Lucia</strong>
                                                                                    <span>
                                                                                        +1758
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag mf"></div>
                                                                                    <strong>Saint Martin (Saint-Martin (partie française))</strong>
                                                                                    <span>
                                                                                        +590
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag pm"></div>
                                                                                    <strong>Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)</strong>
                                                                                    <span>
                                                                                        +508
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag vc"></div>
                                                                                    <strong>Saint Vincent and the Grenadines</strong>
                                                                                    <span>
                                                                                        +1784
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ws"></div>
                                                                                    <strong>Samoa</strong>
                                                                                    <span>
                                                                                        +685
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag sm"></div>
                                                                                    <strong>San Marino</strong>
                                                                                    <span>
                                                                                        +378
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag st"></div>
                                                                                    <strong>São Tomé and Príncipe (São Tomé e Príncipe)</strong>
                                                                                    <span>
                                                                                        +239
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred">
                                                                                    <div class="vti__flag sa"></div>
                                                                                    <strong>Saudi Arabia (&#x202B;المملكة العربية السعودية&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +966
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag sn"></div>
                                                                                    <strong>Senegal (Sénégal)</strong>
                                                                                    <span>
                                                                                        +221
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag rs"></div>
                                                                                    <strong>Serbia (Србија)</strong>
                                                                                    <span>
                                                                                        +381
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag sc"></div>
                                                                                    <strong>Seychelles</strong>
                                                                                    <span>
                                                                                        +248
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag sl"></div>
                                                                                    <strong>Sierra Leone</strong>
                                                                                    <span>
                                                                                        +232
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag sg"></div>
                                                                                    <strong>Singapore</strong>
                                                                                    <span>
                                                                                        +65
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag sx"></div>
                                                                                    <strong>Sint Maarten</strong>
                                                                                    <span>
                                                                                        +1721
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag sk"></div>
                                                                                    <strong>Slovakia (Slovensko)</strong>
                                                                                    <span>
                                                                                        +421
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag si"></div>
                                                                                    <strong>Slovenia (Slovenija)</strong>
                                                                                    <span>
                                                                                        +386
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag sb"></div>
                                                                                    <strong>Solomon Islands</strong>
                                                                                    <span>
                                                                                        +677
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag so"></div>
                                                                                    <strong>Somalia (Soomaaliya)</strong>
                                                                                    <span>
                                                                                        +252
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag za"></div>
                                                                                    <strong>South Africa</strong>
                                                                                    <span>
                                                                                        +27
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag kr"></div>
                                                                                    <strong>South Korea (대한민국)</strong>
                                                                                    <span>
                                                                                        +82
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ss"></div>
                                                                                    <strong>South Sudan (&#x202B;جنوب السودان&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +211
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag es"></div>
                                                                                    <strong>Spain (España)</strong>
                                                                                    <span>
                                                                                        +34
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag lk"></div>
                                                                                    <strong>Sri Lanka (ශ්&zwj;රී ලංකාව)</strong>
                                                                                    <span>
                                                                                        +94
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag sd"></div>
                                                                                    <strong>Sudan (&#x202B;السودان&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +249
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag sr"></div>
                                                                                    <strong>Suriname</strong>
                                                                                    <span>
                                                                                        +597
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag sj"></div>
                                                                                    <strong>Svalbard and Jan Mayen</strong>
                                                                                    <span>
                                                                                        +47
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag sz"></div>
                                                                                    <strong>Swaziland</strong>
                                                                                    <span>
                                                                                        +268
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag se"></div>
                                                                                    <strong>Sweden (Sverige)</strong>
                                                                                    <span>
                                                                                        +46
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ch"></div>
                                                                                    <strong>Switzerland (Schweiz)</strong>
                                                                                    <span>
                                                                                        +41
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag sy"></div>
                                                                                    <strong>Syria (&#x202B;سوريا&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +963
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag tw"></div>
                                                                                    <strong>Taiwan (台灣)</strong>
                                                                                    <span>
                                                                                        +886
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag tj"></div>
                                                                                    <strong>Tajikistan</strong>
                                                                                    <span>
                                                                                        +992
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag tz"></div>
                                                                                    <strong>Tanzania</strong>
                                                                                    <span>
                                                                                        +255
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag th"></div>
                                                                                    <strong>Thailand (ไทย)</strong>
                                                                                    <span>
                                                                                        +66
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag tl"></div>
                                                                                    <strong>Timor-Leste</strong>
                                                                                    <span>
                                                                                        +670
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag tg"></div>
                                                                                    <strong>Togo</strong>
                                                                                    <span>
                                                                                        +228
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag tk"></div>
                                                                                    <strong>Tokelau</strong>
                                                                                    <span>
                                                                                        +690
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag to"></div>
                                                                                    <strong>Tonga</strong>
                                                                                    <span>
                                                                                        +676
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag tt"></div>
                                                                                    <strong>Trinidad and Tobago</strong>
                                                                                    <span>
                                                                                        +1868
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag tn"></div>
                                                                                    <strong>Tunisia (&#x202B;تونس&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +216
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag tr"></div>
                                                                                    <strong>Turkey (Türkiye)</strong>
                                                                                    <span>
                                                                                        +90
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag tm"></div>
                                                                                    <strong>Turkmenistan</strong>
                                                                                    <span>
                                                                                        +993
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag tc"></div>
                                                                                    <strong>Turks and Caicos Islands</strong>
                                                                                    <span>
                                                                                        +1649
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag tv"></div>
                                                                                    <strong>Tuvalu</strong>
                                                                                    <span>
                                                                                        +688
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag vi"></div>
                                                                                    <strong>U.S. Virgin Islands</strong>
                                                                                    <span>
                                                                                        +1340
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ug"></div>
                                                                                    <strong>Uganda</strong>
                                                                                    <span>
                                                                                        +256
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ua"></div>
                                                                                    <strong>Ukraine (Україна)</strong>
                                                                                    <span>
                                                                                        +380
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred">
                                                                                    <div class="vti__flag ae"></div>
                                                                                    <strong>United Arab Emirates (&#x202B;الإمارات العربية المتحدة&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +971
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag gb"></div>
                                                                                    <strong>United Kingdom</strong>
                                                                                    <span>
                                                                                        +44
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag us"></div>
                                                                                    <strong>United States</strong>
                                                                                    <span>
                                                                                        +1
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag uy"></div>
                                                                                    <strong>Uruguay</strong>
                                                                                    <span>
                                                                                        +598
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag uz"></div>
                                                                                    <strong>Uzbekistan (Oʻzbekiston)</strong>
                                                                                    <span>
                                                                                        +998
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag vu"></div>
                                                                                    <strong>Vanuatu</strong>
                                                                                    <span>
                                                                                        +678
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag va"></div>
                                                                                    <strong>Vatican City (Città del Vaticano)</strong>
                                                                                    <span>
                                                                                        +39
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ve"></div>
                                                                                    <strong>Venezuela</strong>
                                                                                    <span>
                                                                                        +58
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag vn"></div>
                                                                                    <strong>Vietnam (Việt Nam)</strong>
                                                                                    <span>
                                                                                        +84
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag wf"></div>
                                                                                    <strong>Wallis and Futuna (Wallis-et-Futuna)</strong>
                                                                                    <span>
                                                                                        +681
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag eh"></div>
                                                                                    <strong>Western Sahara (&#x202B;الصحراء الغربية&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +212
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item preferred">
                                                                                    <div class="vti__flag ye"></div>
                                                                                    <strong>Yemen (&#x202B;اليمن&#x202C;&lrm;)</strong>
                                                                                    <span>
                                                                                        +967
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag zm"></div>
                                                                                    <strong>Zambia</strong>
                                                                                    <span>
                                                                                        +260
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag zw"></div>
                                                                                    <strong>Zimbabwe</strong>
                                                                                    <span>
                                                                                        +263
                                                                                    </span>
                                                                                </li>
                                                                                <li class="vti__dropdown-item">
                                                                                    <div class="vti__flag ax"></div>
                                                                                    <strong>Åland Islands</strong>
                                                                                    <span>
                                                                                        +358
                                                                                    </span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <input type="tel" autocomplete="on" id="receiver_mobile" maxlength="25" name="telephone" placeholder="+966 51 234 5678" tabindex="0" class="vti__input" />
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </span>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <span>
                                                            <fieldset class="form-group">
                                                                <label for="receiver_email">البريد الالكتروني (اختياري)</label> <input type="email" id="receiver_email" class="form-control" />
                                                                <!---->
                                                            </fieldset>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <fieldset class="form-group mb-0">
                                                            <div class="ui toggle checkbox">
                                                                <input id="receiver_notify" type="checkbox" debounce-events="change" />
                                                                <label for="receiver_notify" class="mb-0 label-light">
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
                                                <label>اختر شركة الشحن</label>
                                                <!---->
                                                <p class="text-center m-0 alert alert-info">
                                                    الرجاء تحديد العنوان لعرض خيارات الشحن والتوصيل المتوفرة لك.
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
                            <h3>الدفع</h3>
                        </div>
                        <div id="payment_methods_wrapper">
                            <ul id="payment_methods" class="list list--payment-methods">
                                <li>
                                    <button type="button" class="btn btn--round btn--payment-option active"><img src="https://cdn.assets.salla.network/stores/vendor/checkout/images/icons/pay-option-mada.svg" alt="Mada" /></button>
                                </li>
                                <li>
                                    <button type="button" class="btn btn--round btn--payment-option">
                                        <img src="https://cdn.assets.salla.network/stores/vendor/checkout/images/icons/pay-option-credit-2.svg" alt="Credit card Logo" class="large" />
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="btn btn--round btn--payment-option">
                                        <img src="https://cdn.assets.salla.network/stores/vendor/checkout/images/icons/pay-option-tabby_en.png?v=0.0.1" alt="Tabby" />
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
                                                <input data-v-2e3ca182="" type="tel" maxlength="19" pattern="[0-9]*" autocomplete="cc-number" placeholder="رقم البطاقة" class="form-control ym-disable-keys ym-hide-content" />
                                                <!---->
                                            </fieldset>
                                        </span>
                                    </div>
                                    <div data-v-2e3ca182="" class="col-md-2 col-xs-6">
                                        <span data-v-2e3ca182="">
                                            <fieldset data-v-2e3ca182="" class="form-group">
                                                <div data-v-2e3ca182="" class="input-wrapper-expiry">
                                                    <input data-v-2e3ca182="" type="tel" maxlength="2" pattern="[0-9]*" placeholder="شهر" name="cc_month" id="cc_month" autocomplete="cc-exp-month" class="form-control ym-disable-keys ym-hide-content card-month" />
                                                    <input data-v-2e3ca182="" type="text" placeholder="/" disabled="disabled" class="form-control separator" />
                                                    <input data-v-2e3ca182="" type="tel" maxlength="2" pattern="[0-9]*" placeholder="سنة" name="cc_year" id="cc_year" autocomplete="cc-exp-year" class="form-control ym-disable-keys ym-hide-content card-year" />
                                                </div>
                                                <!---->
                                                <!---->
                                            </fieldset>
                                        </span>
                                    </div>
                                    <div data-v-2e3ca182="" class="col-md-2 col-xs-6">
                                        <span data-v-2e3ca182="">
                                            <fieldset data-v-2e3ca182="" data-openreplay-masked="" class="form-group">
                                                <input data-v-2e3ca182="" type="tel" pattern="\d*" maxlength="4" autocomplete="cc-csc" placeholder="رمز التحقق (CVC)" class="form-control ym-disable-keys ym-hide-content" />
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
                    <span data-v-314a6f0a="">تأكيد الدفع</span>
                    <!---->
                    <!---->
                </button>
            </div>
        </div>
    </main>
    <ul class="list list--brands">
        <li>تسوق إلكتروني آمن 100%</li>
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
                <h4>ملخص السلة</h4>
                <span class="currency">
                    <b>286.35</b> <small>ر.س</small>
                    <!---->
                </span>
            </li>
            <li data-total-elements="4">
                <h4>الضريبة (%15)</h4>
                <span class="currency">
                    <b>+42.95</b> <small>ر.س</small>
                    <!---->
                </span>
            </li>
            <li data-total-elements="4">
                <h4>اجمالي الطلب</h4>
                <span class="currency">
                    <b>329.3</b> <small>ر.س</small>
                    <!---->
                </span>
            </li>
        </ul>
        <ul class="cart-summary cart-summary--bottom">
            <li class="column no-border">
                <div>
                    <button class="btn btn--link btn--coupon">لديك كوبون تخفيض ؟</button>
                    <!---->
                </div>
            </li>
            <li class="proceed">
                <div data-v-314a6f0a="">
                    <button data-v-314a6f0a="" id="submit-form-btn" class="btn btn--primary btn--wide btn--round btn--submit btn--fixed wide">
                        <span data-v-314a6f0a="">تأكيد الدفع</span>
                        <!---->
                        <!---->
                    </button>
                </div>
            </li>
        </ul>
    </div>
</div>


<?php get_footer('checkout'); ?>