<?php print $messages; ?>
<?php print render($page['content']); ?>
<div id="primary" class="sidebar-no">
    <div class="container group">
        <div class="row">
            <!-- START CONTENT -->
            <div id="content-page" class="span12 content group">
                <div id="post-389" class="post-389 page type-page status-publish hentry group instock">
                    <div class="woocommerce">

                        <form id="cart-table" action="http://demo.yithemes.com/bazar/cart/" method="post">
                            <table class="shop_table cart" cellspacing="0">
                                <thead>
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr class = "cart_table_item">
                                    <!-- Remove from cart link -->
                                    <td class="product-remove">
                                        <a href="http://demo.yithemes.com/bazar/cart/?remove_item=01f78be6f7cad02658508fe4616098a9&#038;_n=7b0f567d55" class="remove" title="Remove this item">&times;</a>						</td>

                                    <!-- The thumbnail -->
                                    <td class="product-thumbnail">
                                        <a href="http://demo.yithemes.com/bazar/shop/woman-glasses/">
                                           <?php print '<img width="100" height="80" src="'. base_path().path_to_theme().'/img/products/oc2-100x80.jpg" class="attachment-shop_thumbnail wp-post-image" alt="oc2" />';?>
                                        </a>
                                    </td>

                                    <!-- Product Name -->
                                    <td class="product-name">
                                        <a href="http://demo.yithemes.com/bazar/shop/woman-glasses/">Woman glasses</a>						</td>

                                    <!-- Product price -->
                                    <td class="product-price">
                                        <span class="amount">&#36;39</span>						</td>

                                    <!-- Quantity inputs -->
                                    <td class="product-quantity">
                                        <div class="quantity"><input type="number" name="cart[01f78be6f7cad02658508fe4616098a9][qty]" step="1" min="" max="" value="1" size="4" title="Qty" class="input-text qty text" maxlength="12" /></div>						</td>

                                    <!-- Product subtotal -->
                                    <td class="product-subtotal">
                                        <span class="amount">&#36;39</span>						</td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="actions">

                                        <div class="coupon">

                                            <label for="coupon_code">Coupon:</label> <input name="coupon_code" class="input-text" id="coupon_code" value="" /> <input type="submit" class="button" name="apply_coupon" value="Apply Coupon" />


                                        </div>

                                        <input type="submit" class="button" name="update_cart" value="Update Cart" /> <input type="submit" class="checkout-button button alt" name="proceed" value="Proceed to Checkout &rarr;" />


                                        <input type="hidden" id="_n" name="_n" value="7b0f567d55" /><input type="hidden" name="_wp_http_referer" value="/bazar/cart/" />			</td>
                                </tr>

                                </tbody>
                            </table>
                        </form>
                        <div class="cart-collaterals row-fluid">


                            <div class="span6 cart_totals ">
                                <div class="border-1 border">
                                    <div class="border-2 border">



                                        <h2>Cart Totals</h2>
                                        <table align="right" cellspacing="0" cellpadding="0">
                                            <tbody>

                                            <tr class="cart-subtotal">
                                                <th><strong>Cart Subtotal</strong></th>
                                                <td><strong><span class="amount">&#36;39</span></strong></td>
                                            </tr>



                                            <tr class="shipping">
                                                <th>Shipping</th>
                                                <td>Free Shipping<input type="hidden" name="shipping_method" id="shipping_method" value="free_shipping" /></td>
                                            </tr>




                                            <tr class="total">
                                                <th><strong>Order Total</strong></th>
                                                <td><strong><span class="amount">&#36;39</span></strong></td>
                                            </tr>

                                            </tbody>
                                        </table>




                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>


                            <form class="span6 shipping_calculator" action="http://demo.yithemes.com/bazar/cart/" method="post">
                                <h2><a href="#" class="shipping-calculator-button">Calculate Shipping <span>&darr;</span></a></h2>
                                <section class="shipping-calculator-form">
                                    <p class="form-row form-row-first">
                                        <select name="calc_shipping_country" id="calc_shipping_country" class="country_to_state" rel="calc_shipping_state">
                                            <option value="">Select a country&hellip;</option>
                                            <option value="AX">&#197;land Islands</option><option value="AF">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="PW">Belau</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BQ">Bonaire, Saint Eustatius and Saba</option><option value="BA">Bosnia and Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="VG">British Virgin Islands</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo (Brazzaville)</option><option value="CD">Congo (Kinshasa)</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CW">Cura&Ccedil;ao</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard Island and McDonald Islands</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IM">Isle of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="CI">Ivory Coast</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao S.A.R., China</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="KP">North Korea</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PS">Palestinian Territory</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="QA">Qatar</option><option value="IE">Republic of Ireland</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="ST">S&atilde;o Tom&eacute; and Pr&iacute;ncipe</option><option value="BL">Saint Barth&eacute;lemy</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option value="SX">Saint Martin (Dutch part)</option><option value="MF">Saint Martin (French part)</option><option value="PM">Saint Pierre and Miquelon</option><option value="VC">Saint Vincent and the Grenadines</option><option value="SM">San Marino</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia/Sandwich Islands</option><option value="KR">South Korea</option><option value="SS">South Sudan</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syria</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US" selected='selected'>United States</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatican</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis and Futuna</option><option value="EH">Western Sahara</option><option value="WS">Western Samoa</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option>			</select>
                                    </p>
                                    <p class="form-row form-row-last">
								<span>
						<select name="calc_shipping_state" id="calc_shipping_state" placeholder="State / county"><option value="">Select a state&hellip;</option><option value="AL" >Alabama</option><option value="AK" >Alaska</option><option value="AZ" >Arizona</option><option value="AR" >Arkansas</option><option value="CA" >California</option><option value="CO" >Colorado</option><option value="CT" >Connecticut</option><option value="DE" >Delaware</option><option value="DC" >District Of Columbia</option><option value="FL" >Florida</option><option value="GA" >Georgia</option><option value="HI" >Hawaii</option><option value="ID" >Idaho</option><option value="IL" >Illinois</option><option value="IN" >Indiana</option><option value="IA" >Iowa</option><option value="KS" >Kansas</option><option value="KY" >Kentucky</option><option value="LA" >Louisiana</option><option value="ME" >Maine</option><option value="MD" >Maryland</option><option value="MA" >Massachusetts</option><option value="MI" >Michigan</option><option value="MN" >Minnesota</option><option value="MS" >Mississippi</option><option value="MO" >Missouri</option><option value="MT" >Montana</option><option value="NE" >Nebraska</option><option value="NV" >Nevada</option><option value="NH" >New Hampshire</option><option value="NJ" >New Jersey</option><option value="NM" >New Mexico</option><option value="NY" >New York</option><option value="NC" >North Carolina</option><option value="ND" >North Dakota</option><option value="OH" >Ohio</option><option value="OK" >Oklahoma</option><option value="OR" >Oregon</option><option value="PA" >Pennsylvania</option><option value="RI" >Rhode Island</option><option value="SC" >South Carolina</option><option value="SD" >South Dakota</option><option value="TN" >Tennessee</option><option value="TX" >Texas</option><option value="UT" >Utah</option><option value="VT" >Vermont</option><option value="VA" >Virginia</option><option value="WA" >Washington</option><option value="WV" >West Virginia</option><option value="WI" >Wisconsin</option><option value="WY" >Wyoming</option><option value="AA" >Armed Forces (AA)</option><option value="AE" >Armed Forces (AE)</option><option value="AP" >Armed Forces (AP)</option><option value="AS" >American Samoa</option><option value="GU" >Guam</option><option value="MP" >Northern Mariana Islands</option><option value="PR" >Puerto Rico</option><option value="UM" >US Minor Outlying Islands</option><option value="VI" >US Virgin Islands</option></select>
					</span>
                                    </p>
                                    <div class="clear"></div>
                                    <p class="form-row form-row-wide">
                                        <input type="text" class="input-text" value="" placeholder="Postcode/Zip" title="Postcode" name="calc_shipping_postcode" id="calc_shipping_postcode" />
                                    </p>
                                    <div class="clear"></div>
                                    <p><button type="submit" name="calc_shipping" value="1" class="button">Update Totals</button></p>
                                    <input type="hidden" id="_n" name="_n" value="7b0f567d55" /><input type="hidden" name="_wp_http_referer" value="/bazar/cart/" />	</section>
                            </form>


                        </div></div>
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
                security: 		"626f78a597"
            };
            $.post( ajax_url, data, function(response) {
                total_compare = $.parseJSON( response );
                $("#total_compare_product").html("("+total_compare+")");
                $(".woo_compare_button_go").trigger("click");
            });
        };

    });
</script>