<?php print $messages; ?>
<?php print render($page['content']); ?>

<!-- START PRIMARY -->
<div id="primary" class="sidebar-no">
<div class="container group">
<div class="row">
<!-- START CONTENT -->
<div id="content-page" class="span12 content group">
<div id="post-390" class="post-390 page type-page status-publish hentry group instock">
<div class="woocommerce">


<p class="woocommerce_info">Have a coupon? <a href="#" class="showcoupon">Click here to enter your code</a></p>

<form class="checkout_coupon" method="post">

    <p class="form-row form-row-first">
        <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code" id="coupon_code" value="" />
    </p>

    <p class="form-row form-row-last">
        <input type="submit" class="button" name="apply_coupon" value="Apply Coupon" />
    </p>

    <div class="clear"></div>
</form>
<div id="checkout_multistep">

<div id="multistep_resume">
    <div><span class="checkout_progress"><img src="http://demo.yithemes.com/bazar/wp-content/themes/bazar/woocommerce/images/multistep_cart.png" alt="Checkout Progress" /> Checkout Progress</span></div>
    <div><a href="#" data-step="1" class="current multistep_section">Login</a></div>
    <div><a href="#" data-step="2" class="multistep_section">Billing Address</a></div>
    <div><a href="#" data-step="3" class="multistep_section">Shipping Address</a></div>
    <div><a href="#" data-step="4" class="multistep_section">Payment Method</a></div>
    <div><a href="#" data-step="5" class="multistep_section">Order Review</a></div>
</div>

<div class="clear"></div>

<div class="row">
    <div id="multistep_progress" class="span12 progress progress-striped">
        <div class="bar" style="width: 0%;"></div>
    </div>
</div>

<div id="multistep_steps" class="row">

<!-- step 1 -->
<div class="current multistep_step span12 user_not_logged_in" id="multistep_step1" data-step="1">
    <div class="box_style">

        <div class="row">

            <div class="step1_login_form span6">
                <h3>Login</h3>

                <form method="post" class="login_checkout">
                    <p class="form-row form-row-first">
                        <label for="username">Username or email <span class="required">*</span></label>
                        <input type="text" class="input-text" name="username" id="username" />
                    </p>
                    <p class="form-row form-row-last">
                        <label for="password">Password <span class="required">*</span></label>
                        <input class="input-text" type="password" name="password" id="password" />
                    </p>
                    <div class="clear"></div>

                    <p class="form-row">
                        <input type="hidden" id="_n" name="_n" value="bf0b85f632" /><input type="hidden" name="_wp_http_referer" value="/bazar/checkout/" />				<input type="hidden" name="redirect" value="http://demo.yithemes.com/bazar/checkout/" />
                        <input type="submit" class="button" name="login" value="Login" />
                        <a class="lost_password" href="http://demo.yithemes.com/bazar/my-account/lost-password/">Lost Password?</a>
                    </p>
                </form>
            </div>

            <div class="step1_create_account span6">

                <h3><span>First time on Bazar <span class="title-highlight">SHOP</span>?</span> Create an account.</h3>
                <form method="post" class="register">


                    <p class="form-row form-row-first">
                        <label for="reg_username">Username <span class="required">*</span></label>
                        <input type="text" class="input-text" name="username" id="reg_username" value="" />
                    </p>

                    <p class="form-row form-row-last">


                        <label for="reg_email">Email <span class="required">*</span></label>
                        <input type="email" class="input-text" name="email" id="reg_email" value="" />
                    </p>

                    <div class="clear"></div>

                    <p class="form-row form-row-first">
                        <label for="reg_password">Password <span class="required">*</span></label>
                        <input type="password" class="input-text" name="password" id="reg_password" value="" />
                    </p>
                    <p class="form-row form-row-last">
                        <label for="reg_password2">Re-enter password <span class="required">*</span></label>
                        <input type="password" class="input-text" name="password2" id="reg_password2" value="" />
                    </p>
                    <div class="clear"></div>

                    <!-- Spam Trap -->
                    <div style="left:-999em; position:absolute;"><label for="trap">Anti-spam</label><input type="text" name="email_2" id="trap" /></div>


                    <p class="form-row">
                        <input type="hidden" id="_n" name="_n" value="d9b9611e33" /><input type="hidden" name="_wp_http_referer" value="/bazar/checkout/" />
                        <input type="hidden" name="yit_checkout" value="true" />
                        <input type="submit" class="button" name="register" value="Register" />
                    </p>

                </form>




            </div>




















            <input type="submit" class="button next" name="next[]" value="Checkout as Guest" data-next="2" />
        </div>

        <div class="clear"></div>
    </div>
</div>


<form name="checkout" method="post" class="checkout" action="http://demo.yithemes.com/bazar/checkout/">


<!-- step 2 -->
<div class="multistep_step span12" id="multistep_step2" data-step="2">
    <div class="box_style">



        <h3>Billing Address</h3>




        <p class="form-row form-row-first validate-required" id="billing_first_name_field"><label for="billing_first_name" class="">First Name <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text" name="billing_first_name" id="billing_first_name" placeholder=""  value=""  />
        </p>

        <p class="form-row form-row-last validate-required" id="billing_last_name_field"><label for="billing_last_name" class="">Last Name <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text" name="billing_last_name" id="billing_last_name" placeholder=""  value=""  />
        </p><div class="clear"></div>

        <p class="form-row form-row-first" id="billing_company_field"><label for="billing_company" class="">Company Name</label><input type="text" class="input-text" name="billing_company" id="billing_company" placeholder=""  value=""  />
        </p>

        <p class="form-row form-row-last" id="billing_vat_field"><label for="billing_vat" class="">VAT/SSN</label><input type="text" class="input-text" name="billing_vat" id="billing_vat" placeholder="VAT or SSN"  value=""  />
        </p><div class="clear"></div>

        <p class="form-row form-row-first address-field validate-required" id="billing_address_1_field"><label for="billing_address_1" class="">Address <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text" name="billing_address_1" id="billing_address_1" placeholder="Street address"  value=""  />
        </p>

        <p class="form-row form-row-last address-field" id="billing_address_2_field"><input type="text" class="input-text" name="billing_address_2" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)"  value=""  />
        </p>

        <p class="form-row form-row-last address-field validate-required" id="billing_city_field"><label for="billing_city" class="">Town / City <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text" name="billing_city" id="billing_city" placeholder="Town / City"  value=""  />
        </p>

        <p class="form-row form-row-first address-field update_totals_on_change validate-required" id="billing_country_field">
            <label for="billing_country" class="">Country <abbr class="required" title="required">*</abbr></label>
            <select name="billing_country" id="billing_country" class="country_to_state country_select" >
                <option value="">Select a country&hellip;</option><option value="AX" >&#197;land Islands</option><option value="AF" >Afghanistan</option><option value="AL" >Albania</option><option value="DZ" >Algeria</option><option value="AD" >Andorra</option><option value="AO" >Angola</option><option value="AI" >Anguilla</option><option value="AQ" >Antarctica</option><option value="AG" >Antigua and Barbuda</option><option value="AR" >Argentina</option><option value="AM" >Armenia</option><option value="AW" >Aruba</option><option value="AU" >Australia</option><option value="AT" >Austria</option><option value="AZ" >Azerbaijan</option><option value="BS" >Bahamas</option><option value="BH" >Bahrain</option><option value="BD" >Bangladesh</option><option value="BB" >Barbados</option><option value="BY" >Belarus</option><option value="PW" >Belau</option><option value="BE" >Belgium</option><option value="BZ" >Belize</option><option value="BJ" >Benin</option><option value="BM" >Bermuda</option><option value="BT" >Bhutan</option><option value="BO" >Bolivia</option><option value="BQ" >Bonaire, Saint Eustatius and Saba</option><option value="BA" >Bosnia and Herzegovina</option><option value="BW" >Botswana</option><option value="BV" >Bouvet Island</option><option value="BR" >Brazil</option><option value="IO" >British Indian Ocean Territory</option><option value="VG" >British Virgin Islands</option><option value="BN" >Brunei</option><option value="BG" >Bulgaria</option><option value="BF" >Burkina Faso</option><option value="BI" >Burundi</option><option value="KH" >Cambodia</option><option value="CM" >Cameroon</option><option value="CA" >Canada</option><option value="CV" >Cape Verde</option><option value="KY" >Cayman Islands</option><option value="CF" >Central African Republic</option><option value="TD" >Chad</option><option value="CL" >Chile</option><option value="CN" >China</option><option value="CX" >Christmas Island</option><option value="CC" >Cocos (Keeling) Islands</option><option value="CO" >Colombia</option><option value="KM" >Comoros</option><option value="CG" >Congo (Brazzaville)</option><option value="CD" >Congo (Kinshasa)</option><option value="CK" >Cook Islands</option><option value="CR" >Costa Rica</option><option value="HR" >Croatia</option><option value="CU" >Cuba</option><option value="CW" >Cura&Ccedil;ao</option><option value="CY" >Cyprus</option><option value="CZ" >Czech Republic</option><option value="DK" >Denmark</option><option value="DJ" >Djibouti</option><option value="DM" >Dominica</option><option value="DO" >Dominican Republic</option><option value="EC" >Ecuador</option><option value="EG" >Egypt</option><option value="SV" >El Salvador</option><option value="GQ" >Equatorial Guinea</option><option value="ER" >Eritrea</option><option value="EE" >Estonia</option><option value="ET" >Ethiopia</option><option value="FK" >Falkland Islands</option><option value="FO" >Faroe Islands</option><option value="FJ" >Fiji</option><option value="FI" >Finland</option><option value="FR" >France</option><option value="GF" >French Guiana</option><option value="PF" >French Polynesia</option><option value="TF" >French Southern Territories</option><option value="GA" >Gabon</option><option value="GM" >Gambia</option><option value="GE" >Georgia</option><option value="DE" >Germany</option><option value="GH" >Ghana</option><option value="GI" >Gibraltar</option><option value="GR" >Greece</option><option value="GL" >Greenland</option><option value="GD" >Grenada</option><option value="GP" >Guadeloupe</option><option value="GT" >Guatemala</option><option value="GG" >Guernsey</option><option value="GN" >Guinea</option><option value="GW" >Guinea-Bissau</option><option value="GY" >Guyana</option><option value="HT" >Haiti</option><option value="HM" >Heard Island and McDonald Islands</option><option value="HN" >Honduras</option><option value="HK" >Hong Kong</option><option value="HU" >Hungary</option><option value="IS" >Iceland</option><option value="IN" >India</option><option value="ID" >Indonesia</option><option value="IR" >Iran</option><option value="IQ" >Iraq</option><option value="IM" >Isle of Man</option><option value="IL" >Israel</option><option value="IT" >Italy</option><option value="CI" >Ivory Coast</option><option value="JM" >Jamaica</option><option value="JP" >Japan</option><option value="JE" >Jersey</option><option value="JO" >Jordan</option><option value="KZ" >Kazakhstan</option><option value="KE" >Kenya</option><option value="KI" >Kiribati</option><option value="KW" >Kuwait</option><option value="KG" >Kyrgyzstan</option><option value="LA" >Laos</option><option value="LV" >Latvia</option><option value="LB" >Lebanon</option><option value="LS" >Lesotho</option><option value="LR" >Liberia</option><option value="LY" >Libya</option><option value="LI" >Liechtenstein</option><option value="LT" >Lithuania</option><option value="LU" >Luxembourg</option><option value="MO" >Macao S.A.R., China</option><option value="MK" >Macedonia</option><option value="MG" >Madagascar</option><option value="MW" >Malawi</option><option value="MY" >Malaysia</option><option value="MV" >Maldives</option><option value="ML" >Mali</option><option value="MT" >Malta</option><option value="MH" >Marshall Islands</option><option value="MQ" >Martinique</option><option value="MR" >Mauritania</option><option value="MU" >Mauritius</option><option value="YT" >Mayotte</option><option value="MX" >Mexico</option><option value="FM" >Micronesia</option><option value="MD" >Moldova</option><option value="MC" >Monaco</option><option value="MN" >Mongolia</option><option value="ME" >Montenegro</option><option value="MS" >Montserrat</option><option value="MA" >Morocco</option><option value="MZ" >Mozambique</option><option value="MM" >Myanmar</option><option value="NA" >Namibia</option><option value="NR" >Nauru</option><option value="NP" >Nepal</option><option value="NL" >Netherlands</option><option value="AN" >Netherlands Antilles</option><option value="NC" >New Caledonia</option><option value="NZ" >New Zealand</option><option value="NI" >Nicaragua</option><option value="NE" >Niger</option><option value="NG" >Nigeria</option><option value="NU" >Niue</option><option value="NF" >Norfolk Island</option><option value="KP" >North Korea</option><option value="NO" >Norway</option><option value="OM" >Oman</option><option value="PK" >Pakistan</option><option value="PS" >Palestinian Territory</option><option value="PA" >Panama</option><option value="PG" >Papua New Guinea</option><option value="PY" >Paraguay</option><option value="PE" >Peru</option><option value="PH" >Philippines</option><option value="PN" >Pitcairn</option><option value="PL" >Poland</option><option value="PT" >Portugal</option><option value="QA" >Qatar</option><option value="IE" >Republic of Ireland</option><option value="RE" >Reunion</option><option value="RO" >Romania</option><option value="RU" >Russia</option><option value="RW" >Rwanda</option><option value="ST" >S&atilde;o Tom&eacute; and Pr&iacute;ncipe</option><option value="BL" >Saint Barth&eacute;lemy</option><option value="SH" >Saint Helena</option><option value="KN" >Saint Kitts and Nevis</option><option value="LC" >Saint Lucia</option><option value="SX" >Saint Martin (Dutch part)</option><option value="MF" >Saint Martin (French part)</option><option value="PM" >Saint Pierre and Miquelon</option><option value="VC" >Saint Vincent and the Grenadines</option><option value="SM" >San Marino</option><option value="SA" >Saudi Arabia</option><option value="SN" >Senegal</option><option value="RS" >Serbia</option><option value="SC" >Seychelles</option><option value="SL" >Sierra Leone</option><option value="SG" >Singapore</option><option value="SK" >Slovakia</option><option value="SI" >Slovenia</option><option value="SB" >Solomon Islands</option><option value="SO" >Somalia</option><option value="ZA" >South Africa</option><option value="GS" >South Georgia/Sandwich Islands</option><option value="KR" >South Korea</option><option value="SS" >South Sudan</option><option value="ES" >Spain</option><option value="LK" >Sri Lanka</option><option value="SD" >Sudan</option><option value="SR" >Suriname</option><option value="SJ" >Svalbard and Jan Mayen</option><option value="SZ" >Swaziland</option><option value="SE" >Sweden</option><option value="CH" >Switzerland</option><option value="SY" >Syria</option><option value="TW" >Taiwan</option><option value="TJ" >Tajikistan</option><option value="TZ" >Tanzania</option><option value="TH" >Thailand</option><option value="TL" >Timor-Leste</option><option value="TG" >Togo</option><option value="TK" >Tokelau</option><option value="TO" >Tonga</option><option value="TT" >Trinidad and Tobago</option><option value="TN" >Tunisia</option><option value="TR" >Turkey</option><option value="TM" >Turkmenistan</option><option value="TC" >Turks and Caicos Islands</option><option value="TV" >Tuvalu</option><option value="UG" >Uganda</option><option value="UA" >Ukraine</option><option value="AE" >United Arab Emirates</option><option value="GB" >United Kingdom</option><option value="US"  selected='selected'>United States</option><option value="UY" >Uruguay</option><option value="UZ" >Uzbekistan</option><option value="VU" >Vanuatu</option><option value="VA" >Vatican</option><option value="VE" >Venezuela</option><option value="VN" >Vietnam</option><option value="WF" >Wallis and Futuna</option><option value="EH" >Western Sahara</option><option value="WS" >Western Samoa</option><option value="YE" >Yemen</option><option value="ZM" >Zambia</option><option value="ZW" >Zimbabwe</option></select><noscript><input type="submit" name="woocommerce_checkout_update_totals" value="Update country" /></noscript></p>

        <p class="form-row form-row-first address-field validate-required" id="billing_state_field"><label for="billing_state" class="">State <abbr class="required" title="required">*</abbr></label><select name="billing_state" id="billing_state" class="state_select"  placeholder="State / County">
                <option value="">Select a state&hellip;</option><option value="AL" >Alabama</option><option value="AK" >Alaska</option><option value="AZ" >Arizona</option><option value="AR" >Arkansas</option><option value="CA" >California</option><option value="CO" >Colorado</option><option value="CT" >Connecticut</option><option value="DE" >Delaware</option><option value="DC" >District Of Columbia</option><option value="FL" >Florida</option><option value="GA" >Georgia</option><option value="HI" >Hawaii</option><option value="ID" >Idaho</option><option value="IL" >Illinois</option><option value="IN" >Indiana</option><option value="IA" >Iowa</option><option value="KS" >Kansas</option><option value="KY" >Kentucky</option><option value="LA" >Louisiana</option><option value="ME" >Maine</option><option value="MD" >Maryland</option><option value="MA" >Massachusetts</option><option value="MI" >Michigan</option><option value="MN" >Minnesota</option><option value="MS" >Mississippi</option><option value="MO" >Missouri</option><option value="MT" >Montana</option><option value="NE" >Nebraska</option><option value="NV" >Nevada</option><option value="NH" >New Hampshire</option><option value="NJ" >New Jersey</option><option value="NM" >New Mexico</option><option value="NY" >New York</option><option value="NC" >North Carolina</option><option value="ND" >North Dakota</option><option value="OH" >Ohio</option><option value="OK" >Oklahoma</option><option value="OR" >Oregon</option><option value="PA" >Pennsylvania</option><option value="RI" >Rhode Island</option><option value="SC" >South Carolina</option><option value="SD" >South Dakota</option><option value="TN" >Tennessee</option><option value="TX" >Texas</option><option value="UT" >Utah</option><option value="VT" >Vermont</option><option value="VA" >Virginia</option><option value="WA" >Washington</option><option value="WV" >West Virginia</option><option value="WI" >Wisconsin</option><option value="WY" >Wyoming</option><option value="AA" >Armed Forces (AA)</option><option value="AE" >Armed Forces (AE)</option><option value="AP" >Armed Forces (AP)</option><option value="AS" >American Samoa</option><option value="GU" >Guam</option><option value="MP" >Northern Mariana Islands</option><option value="PR" >Puerto Rico</option><option value="UM" >US Minor Outlying Islands</option><option value="VI" >US Virgin Islands</option></select></p>

        <p class="form-row form-row-last address-field validate-required" id="billing_postcode_field"><label for="billing_postcode" class="">Zip <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text" name="billing_postcode" id="billing_postcode" placeholder="Postcode / Zip"  value=""  />
        </p><div class="clear"></div>

        <p class="form-row form-row-first validate-required validate-email" id="billing_email_field"><label for="billing_email" class="">Email Address <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text" name="billing_email" id="billing_email" placeholder=""  value=""  />
        </p>

        <p class="form-row form-row-last validate-required" id="billing_phone_field"><label for="billing_phone" class="">Phone <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text" name="billing_phone" id="billing_phone" placeholder=""  value=""  />
        </p><div class="clear"></div>




        <p class="form-row" id="shiptobilling_bill">
            <input id="shiptobilling_bill-checkbox" class="input-checkbox"  checked='checked' type="checkbox" name="shiptobilling" value="1" />
            <label for="shiptobilling_bill-checkbox" class="checkbox">Ship to billing address?</label>
        </p>

        <input type="submit" class="button prev" name="login" value="&larr; Login" data-next="1" />

        <input type="submit" class="button next" name="login" value="Payment Method &rarr;" data-next="4" data-alternativelabel="Shipping Method &rarr;" />

        <div class="clear"></div>
    </div>
</div>


<!-- step 3 -->
<div class="multistep_step span12" id="multistep_step3" data-step="3">
    <div class="box_style">



        <div class="clear"></div>

        <h3 id="shippingaddress-title">Shipping Address</h3>

        <p class="form-row" id="shiptobilling">
            <input id="shiptobilling-checkbox" class="input-checkbox"  checked='checked' type="checkbox" name="shiptobilling" value="1" />
            <label for="shiptobilling-checkbox" class="checkbox">Ship to billing address?</label>
        </p>

        <div class="clear"></div>


        <div class="shipping_address">



            <p class="form-row form-row-first validate-required" id="shipping_first_name_field"><label for="shipping_first_name" class="">First Name <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text" name="shipping_first_name" id="shipping_first_name" placeholder=""  value=""  />
            </p>

            <p class="form-row form-row-last validate-required" id="shipping_last_name_field"><label for="shipping_last_name" class="">Last Name <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text" name="shipping_last_name" id="shipping_last_name" placeholder=""  value=""  />
            </p><div class="clear"></div>

            <p class="form-row form-row-first" id="shipping_company_field"><label for="shipping_company" class="">Company Name</label><input type="text" class="input-text" name="shipping_company" id="shipping_company" placeholder=""  value=""  />
            </p>

            <p class="form-row form-row-last" id="shipping_vat_field"><label for="shipping_vat" class="">VAT/SSN</label><input type="text" class="input-text" name="shipping_vat" id="shipping_vat" placeholder="VAT or SSN"  value=""  />
            </p><div class="clear"></div>

            <p class="form-row form-row-first address-field validate-required" id="shipping_address_1_field"><label for="shipping_address_1" class="">Address <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text" name="shipping_address_1" id="shipping_address_1" placeholder="Street address"  value=""  />
            </p>

            <p class="form-row form-row-last address-field" id="shipping_address_2_field"><input type="text" class="input-text" name="shipping_address_2" id="shipping_address_2" placeholder="Apartment, suite, unit etc. (optional)"  value=""  />
            </p>

            <p class="form-row form-row-last address-field validate-required" id="shipping_city_field"><label for="shipping_city" class="">Town / City <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text" name="shipping_city" id="shipping_city" placeholder="Town / City"  value=""  />
            </p>

            <p class="form-row form-row-first address-field update_totals_on_change validate-required" id="shipping_country_field">
                <label for="shipping_country" class="">Country <abbr class="required" title="required">*</abbr></label>
                <select name="shipping_country" id="shipping_country" class="country_to_state country_select" >
                    <option value="">Select a country&hellip;</option><option value="AX" >&#197;land Islands</option><option value="AF" >Afghanistan</option><option value="AL" >Albania</option><option value="DZ" >Algeria</option><option value="AD" >Andorra</option><option value="AO" >Angola</option><option value="AI" >Anguilla</option><option value="AQ" >Antarctica</option><option value="AG" >Antigua and Barbuda</option><option value="AR" >Argentina</option><option value="AM" >Armenia</option><option value="AW" >Aruba</option><option value="AU" >Australia</option><option value="AT" >Austria</option><option value="AZ" >Azerbaijan</option><option value="BS" >Bahamas</option><option value="BH" >Bahrain</option><option value="BD" >Bangladesh</option><option value="BB" >Barbados</option><option value="BY" >Belarus</option><option value="PW" >Belau</option><option value="BE" >Belgium</option><option value="BZ" >Belize</option><option value="BJ" >Benin</option><option value="BM" >Bermuda</option><option value="BT" >Bhutan</option><option value="BO" >Bolivia</option><option value="BQ" >Bonaire, Saint Eustatius and Saba</option><option value="BA" >Bosnia and Herzegovina</option><option value="BW" >Botswana</option><option value="BV" >Bouvet Island</option><option value="BR" >Brazil</option><option value="IO" >British Indian Ocean Territory</option><option value="VG" >British Virgin Islands</option><option value="BN" >Brunei</option><option value="BG" >Bulgaria</option><option value="BF" >Burkina Faso</option><option value="BI" >Burundi</option><option value="KH" >Cambodia</option><option value="CM" >Cameroon</option><option value="CA" >Canada</option><option value="CV" >Cape Verde</option><option value="KY" >Cayman Islands</option><option value="CF" >Central African Republic</option><option value="TD" >Chad</option><option value="CL" >Chile</option><option value="CN" >China</option><option value="CX" >Christmas Island</option><option value="CC" >Cocos (Keeling) Islands</option><option value="CO" >Colombia</option><option value="KM" >Comoros</option><option value="CG" >Congo (Brazzaville)</option><option value="CD" >Congo (Kinshasa)</option><option value="CK" >Cook Islands</option><option value="CR" >Costa Rica</option><option value="HR" >Croatia</option><option value="CU" >Cuba</option><option value="CW" >Cura&Ccedil;ao</option><option value="CY" >Cyprus</option><option value="CZ" >Czech Republic</option><option value="DK" >Denmark</option><option value="DJ" >Djibouti</option><option value="DM" >Dominica</option><option value="DO" >Dominican Republic</option><option value="EC" >Ecuador</option><option value="EG" >Egypt</option><option value="SV" >El Salvador</option><option value="GQ" >Equatorial Guinea</option><option value="ER" >Eritrea</option><option value="EE" >Estonia</option><option value="ET" >Ethiopia</option><option value="FK" >Falkland Islands</option><option value="FO" >Faroe Islands</option><option value="FJ" >Fiji</option><option value="FI" >Finland</option><option value="FR" >France</option><option value="GF" >French Guiana</option><option value="PF" >French Polynesia</option><option value="TF" >French Southern Territories</option><option value="GA" >Gabon</option><option value="GM" >Gambia</option><option value="GE" >Georgia</option><option value="DE" >Germany</option><option value="GH" >Ghana</option><option value="GI" >Gibraltar</option><option value="GR" >Greece</option><option value="GL" >Greenland</option><option value="GD" >Grenada</option><option value="GP" >Guadeloupe</option><option value="GT" >Guatemala</option><option value="GG" >Guernsey</option><option value="GN" >Guinea</option><option value="GW" >Guinea-Bissau</option><option value="GY" >Guyana</option><option value="HT" >Haiti</option><option value="HM" >Heard Island and McDonald Islands</option><option value="HN" >Honduras</option><option value="HK" >Hong Kong</option><option value="HU" >Hungary</option><option value="IS" >Iceland</option><option value="IN" >India</option><option value="ID" >Indonesia</option><option value="IR" >Iran</option><option value="IQ" >Iraq</option><option value="IM" >Isle of Man</option><option value="IL" >Israel</option><option value="IT" >Italy</option><option value="CI" >Ivory Coast</option><option value="JM" >Jamaica</option><option value="JP" >Japan</option><option value="JE" >Jersey</option><option value="JO" >Jordan</option><option value="KZ" >Kazakhstan</option><option value="KE" >Kenya</option><option value="KI" >Kiribati</option><option value="KW" >Kuwait</option><option value="KG" >Kyrgyzstan</option><option value="LA" >Laos</option><option value="LV" >Latvia</option><option value="LB" >Lebanon</option><option value="LS" >Lesotho</option><option value="LR" >Liberia</option><option value="LY" >Libya</option><option value="LI" >Liechtenstein</option><option value="LT" >Lithuania</option><option value="LU" >Luxembourg</option><option value="MO" >Macao S.A.R., China</option><option value="MK" >Macedonia</option><option value="MG" >Madagascar</option><option value="MW" >Malawi</option><option value="MY" >Malaysia</option><option value="MV" >Maldives</option><option value="ML" >Mali</option><option value="MT" >Malta</option><option value="MH" >Marshall Islands</option><option value="MQ" >Martinique</option><option value="MR" >Mauritania</option><option value="MU" >Mauritius</option><option value="YT" >Mayotte</option><option value="MX" >Mexico</option><option value="FM" >Micronesia</option><option value="MD" >Moldova</option><option value="MC" >Monaco</option><option value="MN" >Mongolia</option><option value="ME" >Montenegro</option><option value="MS" >Montserrat</option><option value="MA" >Morocco</option><option value="MZ" >Mozambique</option><option value="MM" >Myanmar</option><option value="NA" >Namibia</option><option value="NR" >Nauru</option><option value="NP" >Nepal</option><option value="NL" >Netherlands</option><option value="AN" >Netherlands Antilles</option><option value="NC" >New Caledonia</option><option value="NZ" >New Zealand</option><option value="NI" >Nicaragua</option><option value="NE" >Niger</option><option value="NG" >Nigeria</option><option value="NU" >Niue</option><option value="NF" >Norfolk Island</option><option value="KP" >North Korea</option><option value="NO" >Norway</option><option value="OM" >Oman</option><option value="PK" >Pakistan</option><option value="PS" >Palestinian Territory</option><option value="PA" >Panama</option><option value="PG" >Papua New Guinea</option><option value="PY" >Paraguay</option><option value="PE" >Peru</option><option value="PH" >Philippines</option><option value="PN" >Pitcairn</option><option value="PL" >Poland</option><option value="PT" >Portugal</option><option value="QA" >Qatar</option><option value="IE" >Republic of Ireland</option><option value="RE" >Reunion</option><option value="RO" >Romania</option><option value="RU" >Russia</option><option value="RW" >Rwanda</option><option value="ST" >S&atilde;o Tom&eacute; and Pr&iacute;ncipe</option><option value="BL" >Saint Barth&eacute;lemy</option><option value="SH" >Saint Helena</option><option value="KN" >Saint Kitts and Nevis</option><option value="LC" >Saint Lucia</option><option value="SX" >Saint Martin (Dutch part)</option><option value="MF" >Saint Martin (French part)</option><option value="PM" >Saint Pierre and Miquelon</option><option value="VC" >Saint Vincent and the Grenadines</option><option value="SM" >San Marino</option><option value="SA" >Saudi Arabia</option><option value="SN" >Senegal</option><option value="RS" >Serbia</option><option value="SC" >Seychelles</option><option value="SL" >Sierra Leone</option><option value="SG" >Singapore</option><option value="SK" >Slovakia</option><option value="SI" >Slovenia</option><option value="SB" >Solomon Islands</option><option value="SO" >Somalia</option><option value="ZA" >South Africa</option><option value="GS" >South Georgia/Sandwich Islands</option><option value="KR" >South Korea</option><option value="SS" >South Sudan</option><option value="ES" >Spain</option><option value="LK" >Sri Lanka</option><option value="SD" >Sudan</option><option value="SR" >Suriname</option><option value="SJ" >Svalbard and Jan Mayen</option><option value="SZ" >Swaziland</option><option value="SE" >Sweden</option><option value="CH" >Switzerland</option><option value="SY" >Syria</option><option value="TW" >Taiwan</option><option value="TJ" >Tajikistan</option><option value="TZ" >Tanzania</option><option value="TH" >Thailand</option><option value="TL" >Timor-Leste</option><option value="TG" >Togo</option><option value="TK" >Tokelau</option><option value="TO" >Tonga</option><option value="TT" >Trinidad and Tobago</option><option value="TN" >Tunisia</option><option value="TR" >Turkey</option><option value="TM" >Turkmenistan</option><option value="TC" >Turks and Caicos Islands</option><option value="TV" >Tuvalu</option><option value="UG" >Uganda</option><option value="UA" >Ukraine</option><option value="AE" >United Arab Emirates</option><option value="GB" >United Kingdom</option><option value="US"  selected='selected'>United States</option><option value="UY" >Uruguay</option><option value="UZ" >Uzbekistan</option><option value="VU" >Vanuatu</option><option value="VA" >Vatican</option><option value="VE" >Venezuela</option><option value="VN" >Vietnam</option><option value="WF" >Wallis and Futuna</option><option value="EH" >Western Sahara</option><option value="WS" >Western Samoa</option><option value="YE" >Yemen</option><option value="ZM" >Zambia</option><option value="ZW" >Zimbabwe</option></select><noscript><input type="submit" name="woocommerce_checkout_update_totals" value="Update country" /></noscript></p>

            <p class="form-row form-row-first address-field validate-required" id="shipping_state_field"><label for="shipping_state" class="">State <abbr class="required" title="required">*</abbr></label><select name="shipping_state" id="shipping_state" class="state_select"  placeholder="State / County">
                    <option value="">Select a state&hellip;</option><option value="AL" >Alabama</option><option value="AK" >Alaska</option><option value="AZ" >Arizona</option><option value="AR" >Arkansas</option><option value="CA" >California</option><option value="CO" >Colorado</option><option value="CT" >Connecticut</option><option value="DE" >Delaware</option><option value="DC" >District Of Columbia</option><option value="FL" >Florida</option><option value="GA" >Georgia</option><option value="HI" >Hawaii</option><option value="ID" >Idaho</option><option value="IL" >Illinois</option><option value="IN" >Indiana</option><option value="IA" >Iowa</option><option value="KS" >Kansas</option><option value="KY" >Kentucky</option><option value="LA" >Louisiana</option><option value="ME" >Maine</option><option value="MD" >Maryland</option><option value="MA" >Massachusetts</option><option value="MI" >Michigan</option><option value="MN" >Minnesota</option><option value="MS" >Mississippi</option><option value="MO" >Missouri</option><option value="MT" >Montana</option><option value="NE" >Nebraska</option><option value="NV" >Nevada</option><option value="NH" >New Hampshire</option><option value="NJ" >New Jersey</option><option value="NM" >New Mexico</option><option value="NY" >New York</option><option value="NC" >North Carolina</option><option value="ND" >North Dakota</option><option value="OH" >Ohio</option><option value="OK" >Oklahoma</option><option value="OR" >Oregon</option><option value="PA" >Pennsylvania</option><option value="RI" >Rhode Island</option><option value="SC" >South Carolina</option><option value="SD" >South Dakota</option><option value="TN" >Tennessee</option><option value="TX" >Texas</option><option value="UT" >Utah</option><option value="VT" >Vermont</option><option value="VA" >Virginia</option><option value="WA" >Washington</option><option value="WV" >West Virginia</option><option value="WI" >Wisconsin</option><option value="WY" >Wyoming</option><option value="AA" >Armed Forces (AA)</option><option value="AE" >Armed Forces (AE)</option><option value="AP" >Armed Forces (AP)</option><option value="AS" >American Samoa</option><option value="GU" >Guam</option><option value="MP" >Northern Mariana Islands</option><option value="PR" >Puerto Rico</option><option value="UM" >US Minor Outlying Islands</option><option value="VI" >US Virgin Islands</option></select></p>

            <p class="form-row form-row-last address-field validate-required" id="shipping_postcode_field"><label for="shipping_postcode" class="">Zip <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text" name="shipping_postcode" id="shipping_postcode" placeholder="Postcode / Zip"  value=""  />
            </p><div class="clear"></div>


        </div>




        <input type="submit" class="button prev" name="login" value="&larr; Billing Address" data-next="2" />
        <input type="submit" class="button next" name="login" value="Payment Method &rarr;" data-next="4" />

        <div class="clear"></div>
    </div>
</div>


<!-- step 4 -->
<div class="multistep_step span12" id="multistep_step4" data-step="4">
    <div class="box_style">



        <h3>Payment method</h3>
        <div class="clear"></div>

        <div id="payment">
            <ul class="payment_methods methods">
                <li>
                    <input type="radio" id="payment_method_bacs" class="input-radio" name="payment_method" value="bacs"  checked='checked' />
                    <label for="payment_method_bacs">Direct Bank Transfer </label>
                    <div class="payment_box payment_method_bacs" ><p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order wont be shipped until the funds have cleared in our account.</p>
                    </div>						</li>
                <li>
                    <input type="radio" id="payment_method_cheque" class="input-radio" name="payment_method" value="cheque"  />
                    <label for="payment_method_cheque">Cheque Payment </label>
                    <div class="payment_box payment_method_cheque" style="display:none;"><p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                    </div>						</li>
                <li>
                    <input type="radio" id="payment_method_cod" class="input-radio" name="payment_method" value="cod"  />
                    <label for="payment_method_cod">Cash on Delivery </label>
                    <div class="payment_box payment_method_cod" style="display:none;"><p>Pay with cash upon delivery.</p>
                    </div>						</li>
                <li>
                    <input type="radio" id="payment_method_paypal" class="input-radio" name="payment_method" value="paypal"  />
                    <label for="payment_method_paypal">PayPal <img src="http://demo.yithemes.com/bazar/wp-content/plugins/woocommerce-2/assets/images/icons/paypal.png" alt="PayPal" /></label>
                    <div class="payment_box payment_method_paypal" style="display:none;"><p>Pay via PayPal; you can pay with your credit card if you don&#8217;t have a PayPal account</p>
                    </div>						</li>
            </ul>



            <div class="clear"></div>

        </div>
        <input type="submit" class="button prev" name="login" value="&larr; Billing Address" data-next="2" data-alternativelabel="&larr; Shipping Method" />
        <input type="submit" class="button next" name="login" value="Order Review &rarr;" data-next="5" />

        <div class="clear"></div>
    </div>
</div>

<!-- step 5 -->
<div class="multistep_step span12" id="multistep_step5" data-step="5">
    <div class="box_style">

        <h3 id="order_review_heading">Your order</h3>
        <div id="order_review">

            <table class="shop_table">
                <thead>
                <tr>
                    <th class="product-name">Product</th>
                    <th class="product-quantity">Qty</th>
                    <th class="product-total">Totals</th>
                </tr>
                </thead>
                <tfoot>

                <tr class="cart-subtotal">
                    <th colspan="2">Cart Subtotal</th>
                    <td><span class="amount">&#36;39</span></td>
                </tr>




                <tr class="shipping">
                    <th colspan="2">Shipping</th>
                    <td>Free Shipping<input type="hidden" name="shipping_method" id="shipping_method" value="free_shipping" /></td>

                </tr>







                <tr class="total">
                    <th colspan="2">Order Total</th>
                    <td><strong><span class="amount">&#36;39</span></strong></td>
                </tr>


                </tfoot>
                <tbody>

                <tr class = "checkout_table_item">
                    <td class="product-name">Woman glasses</td>
                    <td class="product-quantity">1</td>
                    <td class="product-total"><span class="amount">&#36;39</span></td>
                </tr>		</tbody>
            </table>



            <h3>Additional Information</h3>


            <p class="form-row notes" id="order_comments_field"><label for="order_comments" class="">Order Notes</label><textarea name="order_comments" class="input-text" id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." cols="5" rows="2" ></textarea>
            </p>





            <div class="form-row place-order">

                <noscript>Since your browser does not support JavaScript, or it is disabled, please ensure you click the <em>Update Totals</em> button before placing your order. You may be charged more than the amount stated above if you fail to do so.<br/><input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Update totals" /></noscript>

                <input type="hidden" id="_n" name="_n" value="ca61a5a408" /><input type="hidden" name="_wp_http_referer" value="/bazar/checkout/" />

                <input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order" />



            </div>

        </div>
        <input type="submit" class="button prev" name="login" value="&larr; Payment Method" data-next="4" />

        <div class="clear"></div>
    </div>
</div>

</form>
</div>


</div>



<script type="text/javascript" charset="utf-8">
    jQuery(document).ready(function(){
        jQuery('#checkout_multistep').yit_checkout();
    });
</script></div>
</div>
<!-- START COMMENTS -->
<div id="comments">
</div>
<!-- END COMMENTS -->
</div>
<!-- END CONTENT -->



<!-- START EXTRA CONTENT -->
<!-- END EXTRA CONTENT -->
</div>
</div>
</div>
<!-- END PRIMARY -->
<script type="text/javascript">
    jQuery(document).ready(function($){
        woo_update_total_compare_list = function(){
            var data = {
                action: 		"woocp_update_total_compare",
                security: 		"a04e29e67c"
            };
            $.post( ajax_url, data, function(response) {
                total_compare = $.parseJSON( response );
                $("#total_compare_product").html("("+total_compare+")");
                $(".woo_compare_button_go").trigger("click");
            });
        };

    });
</script>
