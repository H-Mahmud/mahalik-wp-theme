<div class="row">
    <div class="col-md-6">
        <span>
            <fieldset class="form-group">
                <!---->
                <label for="home_address" style="direction: ltr; text-align: left;" _msttexthash="659269" _msthash="2052"> House Description (optional) </label>
                <input type="text" id="home_address" placeholder="وصف البيت" class="form-control" _mstplaceholder="1738165" style="direction: rtl; text-align: right;" />
                <!---->
            </fieldset>
        </span>
    </div>
    <div class="col-md-6">
        <span>
            <fieldset class="form-group">
                <label for="postal_code" style="direction: ltr; text-align: left;" _msttexthash="415272" _msthash="2053">Postal Code (optional)</label>
                <input type="text" id="postal_code" placeholder="الرمز البريدي" class="form-control" _mstplaceholder="3105180" style="direction: rtl; text-align: right;" />
                <!---->
            </fieldset>
        </span>
    </div>
</div>
</div>
</div>





<div class="ui toggle checkbox checkbox--extra-space">
    <input id="receiver_toggle" type="checkbox" name="receiver-shipping" />
    <label for="receiver_toggle" style="direction: ltr; text-align: left;" _msttexthash="1208662" _msthash="2054">Receiving the order through someone else?</label>
</div>
</span>
<div id="receiver_address" class="panel-block" style="">
    <div class="row">
        <div class="col-sm-12">
            <label class="section-title payment-section-title" style="direction: ltr; text-align: left;" _msttexthash="698256" _msthash="2055"> Add recipient contact details </label>
        </div>
    </div>
    <div class="shipping-address">
        <div class="row">
            <div class="col-md-12">
                <span>
                    <fieldset class="form-group">
                        <label for="receiver_name" style="direction: ltr; text-align: left;" _msttexthash="223418" _msthash="2056">Recipient Name</label>
                        <input type="text" id="receiver_name" class="form-control" />
                        <!---->
                    </fieldset>
                </span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <span>
                    <fieldset class="form-group">
                        <label for="receiver_mobile" style="direction: ltr; text-align: left;" _msttexthash="208299" _msthash="2057">mobile number</label>
                        <div data-v-48040520="" class="form-control tel-input-wrapper">
                            <div data-v-48040520="" class="vue-tel-input">
                                <div tabindex="0" class="vti__dropdown" _msthidden="505">
                                    <span class="vti__selection" _msthidden="1">
                                        <div class="vti__flag sa"></div>
                                        <!---->
                                        <span class="vti__dropdown-arrow" style="text-align: right;" _msttexthash="879060" _msthidden="1" _msthash="2058">▼</span>
                                    </span>
                                    <ul class="vti__dropdown-list below" style="display: none;" _msthidden="504">
                                        <li class="vti__dropdown-item preferred" _msthidden="2">
                                            <div class="vti__flag sa"></div>
                                            <strong style="direction: rtl; text-align: right;" _msttexthash="25206831" _msthidden="1" _msthash="2059">
                                                Saudi Arabia (&#x202B;المملكة العربية السعودية&#x202C;&lrm;)
                                            </strong>
                                            <span style="direction: rtl; text-align: right;" _msttexthash="23179" _msthidden="1" _msthash="2060">
                                                +966
                                            </span>
                                        </li>
                                        <li class="vti__dropdown-item preferred" _msthidden="2">
                                            <div class="vti__flag ae"></div>
                                            <strong style="direction: rtl; text-align: right;" _msttexthash="30784182" _msthidden="1" _msthash="2061">
                                                United Arab Emirates (&#x202B;الإمارات العربية المتحدة&#x202C;&lrm;)
                                            </strong>
                                            <span style="direction: rtl; text-align: right;" _msttexthash="22646" _msthidden="1" _msthash="2062">
                                                +971
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <input type="tel" autocomplete="on" id="receiver_mobile" maxlength="25" name="telephone" placeholder="+966 51 234 5678" tabindex="0" class="vti__input" _mstplaceholder="115934" />
                            </div>
                        </div>
                    </fieldset>
                </span>
            </div>
            <div class="col-md-6">
                <span>
                    <fieldset class="form-group">
                        <label for="receiver_email" style="direction: ltr; text-align: left;" _msttexthash="261404" _msthash="2563">Email (optional)</label>
                        <input type="email" id="receiver_email" class="form-control" />
                        <!---->
                    </fieldset>
                </span>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <fieldset class="form-group mb-0">
                    <div class="ui toggle checkbox">
                        <input id="receiver_notify" type="checkbox" debounce-events="change" value="" />
                        <label for="receiver_notify" class="mb-0 label-light" style="direction: ltr; text-align: left;" _msttexthash="1114360" _msthash="2564">
                            Receive request notification messages
                        </label>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</div>






<div class="row">
    <div class="col-md-12">
        <fieldset class="form-group">
            <label style="direction: ltr; text-align: left;" _msttexthash="484822" _msthash="2565">Select Shipping Company</label>
            <!---->
            <p class="text-center m-0 alert alert-info" style="direction: ltr;" _msttexthash="4239677" _msthash="2566">
                Please select the address to view the shipping and delivery options available to you.
            </p>
        </fieldset>
        <!---->
    </div>
</div>

</form>




<div class="col-md-12">
    <div id="payment_step" class="payment-step mb-0">
        <div data-step="2" class="title title--step">
            <img src="https://cdn.assets.salla.network/stores/vendor/checkout/images/icons/step-payment.svg" />
            <h3 style="direction: ltr; text-align: left;" _msttexthash="166244" _msthash="2567">propulsion</h3>
        </div>
        <div id="payment_methods_wrapper">
            <ul id="payment_methods" class="list list--payment-methods">
                <li>
                    <button type="button" class="btn btn--round btn--payment-option active">
                        <img src="https://cdn.assets.salla.network/stores/vendor/checkout/images/icons/pay-option-mada.svg" alt="Mada" _mstalt="41405" style="direction: rtl; text-align: right;" />
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn--round btn--payment-option">
                        <img src="https://cdn.assets.salla.network/stores/vendor/checkout/images/icons/pay-option-credit-2.svg" alt="Credit card Logo" class="large" _mstalt="250367" style="direction: rtl; text-align: right;" />
                    </button>
                </li>
                <li>
                    <button type="button" class="btn btn--round btn--payment-option">
                        <img src="https://cdn.assets.salla.network/stores/vendor/checkout/images/icons/pay-option-tabby_en.png?v=0.0.1" alt="Tabby" _mstalt="59241" style="direction: rtl; text-align: right;" />
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
                                <input data-v-2e3ca182="" type="tel" maxlength="19" pattern="[0-9]*" autocomplete="cc-number" placeholder="رقم البطاقة" class="form-control ym-disable-keys ym-hide-content" _mstplaceholder="2374541" style="text-align: right;" />
                                <!---->
                            </fieldset>
                        </span>
                    </div>
                    <div data-v-2e3ca182="" class="col-md-2 col-xs-6">
                        <span data-v-2e3ca182="">
                            <fieldset data-v-2e3ca182="" class="form-group">
                                <div data-v-2e3ca182="" class="input-wrapper-expiry">
                                    <input data-v-2e3ca182="" type="tel" maxlength="2" pattern="[0-9]*" placeholder="شهر" name="cc_month" id="cc_month" autocomplete="cc-exp-month" class="form-control ym-disable-keys ym-hide-content card-month" _mstplaceholder="497081" />
                                    <input data-v-2e3ca182="" type="text" placeholder="/" disabled="disabled" class="form-control separator" _mstplaceholder="4277" style="direction: rtl; text-align: right;" />
                                    <input data-v-2e3ca182="" type="tel" maxlength="2" pattern="[0-9]*" placeholder="سنة" name="cc_year" id="cc_year" autocomplete="cc-exp-year" class="form-control ym-disable-keys ym-hide-content card-year" _mstplaceholder="495950" />
                                </div>
                                <!---->
                                <!---->
                            </fieldset>
                        </span>
                    </div>
                    <div data-v-2e3ca182="" class="col-md-2 col-xs-6">
                        <span data-v-2e3ca182="">
                            <fieldset data-v-2e3ca182="" data-openreplay-masked="" class="form-group">
                                <input data-v-2e3ca182="" type="tel" pattern="\d*" maxlength="4" autocomplete="cc-csc" placeholder="رمز التحقق (CVC)" class="form-control ym-disable-keys ym-hide-content" _mstplaceholder="2118610" style="text-align: right;" />
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
        <span data-v-314a6f0a="" style="direction: ltr; text-align: left;" _msttexthash="418665" _msthash="2568">Payment Confirmation</span>
        <!---->
        <!---->
    </button>
</div>
</div>


<ul class="list list--brands">
    <li style="direction: ltr; text-align: left;" _msttexthash="596440" _msthash="2569">100% secure online shopping</li>
    <li><img src="https://cdn.assets.salla.network/stores/vendor/checkout/images/icons/secure-payment.svg" /></li>
    <li><img src="https://cdn.assets.salla.network/stores/vendor/checkout/images/icons/secure-payment-02.svg" /></li>
    <li><img src="https://cdn.assets.salla.network/stores/vendor/checkout/images/icons/secure-payment-03.svg" /></li>
</ul>