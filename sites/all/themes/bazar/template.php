<?php
function bazar_preprocess_html(&$vars, $hook) {

    if(arg(0)=='node' && is_numeric(arg(1))) {
        $node = node_load(arg(1));
        $currentType = $node->type;
    }
    $bazarClassList = array();
    $bazarJsList = array();
    $bazarJsButtom = array();
    $menu_selector = array();

    if($vars['is_front']){$menu_selector['front']='current-menu-ancestor';}
    switch($currentType){
        case 'shop':/********Shop**********/
            $bazarClassList['language-selector']['url']='/css/language-selector.css';
            $bazarClassList['language-selector']['external']=false;
//            $bazarClassList['reset-bootstrap']['url']='/css/reset-bootstrap.css';
//            $bazarClassList['reset-bootstrap']['external']=false;
            $bazarClassList['style']['url']='/css/style.css';
            $bazarClassList['style']['external']=false;
            $bazarClassList['thickbox-css']['url']='/css/thickbox/thickbox.css';
            $bazarClassList['thickbox-css']['external']=false;
            $bazarClassList['google-fonts-css']['url']="http://fonts.googleapis.com/css?family=Playfair+Display%7COpen+Sans+Condensed%3A300%7COpen+Sans%7CShadows+Into+Light%7COswald%7CPlay%7CMuli%7CArbutus+Slab%7CAbel&#038;ver=3.5.2";
            $bazarClassList['google-fonts-css']['external']=true;
            $bazarClassList['jquery-colorbox-css']['url']='/css/colorbox.css';
            $bazarClassList['jquery-colorbox-css']['external']=false;
            $bazarClassList['yith-magnifier-css']['url']='/css/yith_magnifier.css';
            $bazarClassList['yith-magnifier-css']['external']=false;
            $bazarClassList['yith_wcmg_frontend-css']['url']='/css/assets-frontend.css';
            $bazarClassList['yith_wcmg_frontend-css']['external']=false;
            $bazarClassList['yith-wcwl-user-main-css']['url']='/css/woocommerce/wishlist.css';
            $bazarClassList['yith-wcwl-user-main-css']['external']=false;
            $bazarClassList['woocommerce_prettyPhoto_css-css']['url']='/css/prettyPhoto.css';
            $bazarClassList['woocommerce_prettyPhoto_css-css']['external']=false;
            $bazarClassList['woocommerce_frontend_styles-css']['url']='/css/woocommerce/style.css';
            $bazarClassList['woocommerce_frontend_styles-css']['external']=false;
            $bazarClassList['styles-minified-css']['url']='/css/cache/style-28.css';
            $bazarClassList['styles-minified-css']['external']=false;
            $bazarClassList['custom-css']['url']='/css/custom.css';
            $bazarClassList['custom-css']['external']=false;
            $bazarClassList['cache-custom-css']['url']='/css/cache/custom-28.css';
            $bazarClassList['cache-custom-css']['external']=false;
            $bazarClassList['style-changer-css']['url']='/css/picker-celestino.css';
            $bazarClassList['style-changer-css']['external']=false;
            $bazarClassList['colorpicker-css']['url']='/css/colorpicker.css';
            $bazarClassList['colorpicker-css']['external']=false;

            $bazarJsList['comment-reply']['url']='/js/comment-reply.min.js';
            $bazarJsList['comment-reply']['external']=false;
            $bazarJsList['jquery-cookie']['url']='/js/jquery/jquery.cookie.js';
            $bazarJsList['jquery-cookie']['external']=false;
            $bazarJsList['colorpicker']['url']='/js/colorpicker.js';
            $bazarJsList['colorpicker']['external']=false;
            $bazarJsList['sitepress']['url']='/js/sitepress.js';
            $bazarJsList['sitepress']['external']=false;

            //$bazarJsButtom['wp-includes-thickbox']['url']='/js/wp-includes/thickbox.js';
            //$bazarJsButtom['wp-includes-thickbox']['external']=false;
            $bazarJsButtom['wp-includes-underscore']['url']='/js/wp-includes/underscore.min.js';
            $bazarJsButtom['wp-includes-underscore']['external']=false;
            $bazarJsButtom['wp-includes-shortcode']['url']='/js/wp-includes/shortcode.min.js';
            $bazarJsButtom['wp-includes-shortcode']['external']=false;
            $bazarJsButtom['media-upload']['url']='/js/media.upload.min.js';
            $bazarJsButtom['media-upload']['external']=false;
            $bazarJsButtom['jquery-commonlibraries']['url']='/js/jquery/jquery.commonlibraries.js';
            $bazarJsButtom['jquery-commonlibraries']['external']=false;
            $bazarJsButtom['jquery-layout']['url']='/js/jquery/jquery.layout.js';
            $bazarJsButtom['jquery-layout']['external']=false;
            $bazarJsButtom['jquery-custom']['url']='/js/jquery/jquery.custom.js';
            $bazarJsButtom['jquery-custom']['external']=false;
            $bazarJsButtom['jq-cookie']['url']='/js/jq-cookie.js';
            $bazarJsButtom['jq-cookie']['external']=false;
            $bazarJsButtom['woocompare']['url']='/js/woocompare.js';
            $bazarJsButtom['woocompare']['external']=false;
            $bazarJsButtom['jquery-colorbox']['url']='/js/jquery/jquery.colorbox-min.js';
            $bazarJsButtom['jquery-colorbox']['external']=false;
            $bazarJsButtom['responsive']['url']='/js/responsive.js';
            $bazarJsButtom['responsive']['external']=false;
            $bazarJsButtom['jquery-yith-wcwl']['url']='/js/jquery/jquery.yith-wcwl.js';
            $bazarJsButtom['jquery-yith-wcwl']['external']=false;
            $bazarJsButtom['twitter-text']['url']='/js/twitter-text.js';
            $bazarJsButtom['twitter-text']['external']=false;
            $bazarJsButtom['jquery-cycle']['url']='/js/jquery/jquery.cycle.min.js';
            $bazarJsButtom['jquery-cycle']['external']=false;
            $bazarJsButtom['core-shortcodes']['url']='/js/core/shortcodes.js';
            $bazarJsButtom['core-shortcodes']['external']=false;
            $bazarJsButtom['shortcodes']['url']='/js/shortcodes.js';
            $bazarJsButtom['shortcodes']['external']=false;
            $bazarJsButtom['widgets']['url']='/js/widgets.js';
            $bazarJsButtom['widgets']['external']=false;
            $bazarJsButtom['woocommerce2']['url']='/js/woocommerce.js';
            $bazarJsButtom['woocommerce2']['external']=false;
            $bazarJsButtom['add-to-cart']['url']='/js/add-to-cart.min.js';
            $bazarJsButtom['add-to-cart']['external']=false;
            $bazarJsButtom['jquery-blockUI']['url']='/js/woocommerce/jquery.blockUI.min.js';
            $bazarJsButtom['jquery-blockUI']['external']=false;
            $bazarJsButtom['woocommerce']['url']='/js/woocommerce.min.js';
            $bazarJsButtom['woocommerce']['external']=false;
//            $bazarJsButtom['cart-fragments']['url']='/js/cart-fragments.min.js';
//            $bazarJsButtom['cart-fragments']['external']=false;
            $bazarJsButtom['jquery-placeholder']['url']='/js/jquery/jquery.placeholder.min.js';
            $bazarJsButtom['jquery-placeholder']['external']=false;
            $bazarJsButtom['changer-bazar']['url']='/js/changer-bazar.js';
            $bazarJsButtom['changer-bazar']['external']=false;
            $bazarJsButtom['yith-wcan-frontend']['url']='/js/yith-wcan-frontend.min.js';
            $bazarJsButtom['yith-wcan-frontend']['external']=false;
            $bazarJsButtom['jquery-ui-core']['url']='/js/jquery/jquery.ui.core.min.js';
            $bazarJsButtom['jquery-ui-core']['external']=false;
            $bazarJsButtom['jquery-ui-widget']['url']='/js/jquery/jquery.ui.widget.min.js';
            $bazarJsButtom['jquery-ui-widget']['external']=false;
            $bazarJsButtom['jquery-ui-mouse']['url']='/js/jquery/jquery.ui.mouse.min.js';
            $bazarJsButtom['jquery-ui-mouse']['external']=false;
            $bazarJsButtom['jquery-ui-slider']['url']='/js/jquery/jquery.ui.slider.min.js';
            $bazarJsButtom['jquery-ui-slider']['external']=false;
            $bazarJsButtom['price-slider']['url']='/js/price-slider.min.js';
            $bazarJsButtom['price-slider']['external']=false;

            $bazarJsConfigButtom = 'var woocommerce_price_slider_params = {"currency_symbol":"$","currency_pos":"left","min_price":"","max_price":""};'."\n"
            . 'var thickboxL10n = {"next":"Next >","prev":"< Prev","image":"Image","of":"of","close":"Close","noiframes":"This feature requires inline frames. You have iframes disabled or your browser does not support them.","loadingAnimation":" ","closeImage":" "};'."\n"
            . 'var l10n_handler = {"map_close":"[x] Close","map_open":"[x] Open"};'."\n"
            . 'var yith_woocompare = {"nonceadd":"2ff540915e","nonceremove":"e0a22b5f3d","ajaxurl":"","actionadd":"yith-woocompare-add-product","actionremove":"yith-woocompare-remove-product","actionview":"yith-woocompare-view-table","added_label":"Added","table_title":"Product Comparison","auto_open":"yes"};'."\n"
            . 'var yith_wcwl_l10n = {"out_of_stock":"Cannot add to the cart as product is Out of Stock!"};'."\n"
            . 'var yith_wcan = {"container":".products","pagination":".general-pagination","result_count":".woocommerce-result-count"};'."\n"
            . 'var woocommerce_params = {"countries":"{\"AF\":[],\"AT\":[],\"BE\":[],\"BI\":[],\"CZ\":[],\"DE\":[],\"DK\":[],\"FI\":[],\"FR\":[],\"HU\":[],\"IS\":[],\"IL\":[],\"KR\":[],\"NL\":[],\"NO\":[],\"PL\":[],\"PT\":[],\"SG\":[],\"SK\":[],\"SI\":[],\"LK\":[],\"SE\":[],\"VN\":[],\"AU\":{\"ACT\":\"Australian Capital Territory\",\"NSW\":\"New South Wales\",\"NT\":\"Northern Territory\",\"QLD\":\"Queensland\",\"SA\":\"South Australia\",\"TAS\":\"Tasmania\",\"VIC\":\"Victoria\",\"WA\":\"Western Australia\"},\"BR\":{\"AC\":\"Acre\",\"AL\":\"Alagoas\",\"AP\":\"Amap\u00e1\",\"AM\":\"Amazonas\",\"BH\":\"Bahia\",\"CE\":\"Cear\u00e1\",\"DF\":\"Distrito Federal\",\"ES\":\"Esp\u00edrito Santo\",\"GO\":\"Goi\u00e1s\",\"MA\":\"Maranh\u00e3o\",\"MT\":\"Mato Grosso\",\"MS\":\"Mato Grosso do Sul\",\"MG\":\"Minas Gerais\",\"PA\":\"Par\u00e1\",\"PB\":\"Para\u00edba\",\"PR\":\"Paran\u00e1\",\"PE\":\"Pernambuco\",\"PI\":\"Piau\u00ed\",\"RJ\":\"Rio de Janeiro\",\"RN\":\"Rio Grande do Norte\",\"RS\":\"Rio Grande do Sul\",\"RO\":\"Rond\u00f4nia\",\"RR\":\"Roraima\",\"SC\":\"Santa Catarina\",\"SP\":\"S\u00e3o Paulo\",\"SE\":\"Sergipe\",\"TO\":\"Tocantins\"},\"CA\":{\"AB\":\"Alberta\",\"BC\":\"British Columbia\",\"MB\":\"Manitoba\",\"NB\":\"New Brunswick\",\"NF\":\"Newfoundland\",\"NT\":\"Northwest Territories\",\"NS\":\"Nova Scotia\",\"NU\":\"Nunavut\",\"ON\":\"Ontario\",\"PE\":\"Prince Edward Island\",\"QC\":\"Quebec\",\"SK\":\"Saskatchewan\",\"YT\":\"Yukon Territory\"},\"CN\":{\"CN1\":\"Yunnan \\\/ \u4e91\u5357\",\"CN2\":\"Beijing \\\/ \u5317\u4eac\",\"CN3\":\"Tianjin \\\/ \u5929\u6d25\",\"CN4\":\"Hebei \\\/ \u6cb3\u5317\",\"CN5\":\"Shanxi \\\/ \u5c71\u897f\",\"CN6\":\"Inner Mongolia \\\/ \u5167\u8499\u53e4\",\"CN7\":\"Liaoning \\\/ \u8fbd\u5b81\",\"CN8\":\"Jilin \\\/ \u5409\u6797\",\"CN9\":\"Heilongjiang \\\/ \u9ed1\u9f99\u6c5f\",\"CN10\":\"Shanghai \\\/ \u4e0a\u6d77\",\"CN11\":\"Jiangsu \\\/ \u6c5f\u82cf\",\"CN12\":\"Zhejiang \\\/ \u6d59\u6c5f\",\"CN13\":\"Anhui \\\/ \u5b89\u5fbd\",\"CN14\":\"Fujian \\\/ \u798f\u5efa\",\"CN15\":\"Jiangxi \\\/ \u6c5f\u897f\",\"CN16\":\"Shandong \\\/ \u5c71\u4e1c\",\"CN17\":\"Henan \\\/ \u6cb3\u5357\",\"CN18\":\"Hubei \\\/ \u6e56\u5317\",\"CN19\":\"Hunan \\\/ \u6e56\u5357\",\"CN20\":\"Guangdong \\\/ \u5e7f\u4e1c\",\"CN21\":\"Guangxi Zhuang \\\/ \u5e7f\u897f\u58ee\u65cf\",\"CN22\":\"Hainan \\\/ \u6d77\u5357\",\"CN23\":\"Chongqing \\\/ \u91cd\u5e86\",\"CN24\":\"Sichuan \\\/ \u56db\u5ddd\",\"CN25\":\"Guizhou \\\/ \u8d35\u5dde\",\"CN26\":\"Shaanxi \\\/ \u9655\u897f\",\"CN27\":\"Gansu \\\/ \u7518\u8083\",\"CN28\":\"Qinghai \\\/ \u9752\u6d77\",\"CN29\":\"Ningxia Hui \\\/ \u5b81\u590f\",\"CN30\":\"Macau \\\/ \u6fb3\u95e8\",\"CN31\":\"Tibet \\\/ \u897f\u85cf\",\"CN32\":\"Xinjiang \\\/ \u65b0\u7586\"},\"HK\":{\"HONG KONG\":\"Hong Kong Island\",\"KOWLOON\":\"Kowloon\",\"NEW TERRITORIES\":\"New Territories\"},\"IN\":{\"AP\":\"Andra Pradesh\",\"AR\":\"Arunachal Pradesh\",\"AS\":\"Assam\",\"BR\":\"Bihar\",\"CT\":\"Chhattisgarh\",\"GA\":\"Goa\",\"GJ\":\"Gujarat\",\"HR\":\"Haryana\",\"HP\":\"Himachal Pradesh\",\"JK\":\"Jammu and Kashmir\",\"JH\":\"Jharkhand\",\"KA\":\"Karnataka\",\"KL\":\"Kerala\",\"MP\":\"Madhya Pradesh\",\"MH\":\"Maharashtra\",\"MN\":\"Manipur\",\"ML\":\"Meghalaya\",\"MZ\":\"Mizoram\",\"NL\":\"Nagaland\",\"OR\":\"Orissa\",\"PB\":\"Punjab\",\"RJ\":\"Rajasthan\",\"SK\":\"Sikkim\",\"TN\":\"Tamil Nadu\",\"TR\":\"Tripura\",\"UT\":\"Uttaranchal\",\"UP\":\"Uttar Pradesh\",\"WB\":\"West Bengal\",\"AN\":\"Andaman and Nicobar Islands\",\"CH\":\"Chandigarh\",\"DN\":\"Dadar and Nagar Haveli\",\"DD\":\"Daman and Diu\",\"DL\":\"Delhi\",\"LD\":\"Lakshadeep\",\"PY\":\"Pondicherry (Puducherry)\"},\"ID\":{\"AC\":\"Daerah Istimewa Aceh\",\"SU\":\"Sumatera Utara\",\"SB\":\"Sumatera Barat\",\"RI\":\"Riau\",\"KR\":\"Kepulauan Riau\",\"JA\":\"Jambi\",\"SS\":\"Sumatera Selatan\",\"BB\":\"Bangka Belitung\",\"BE\":\"Bengkulu\",\"LA\":\"Lampung\",\"JK\":\"DKI Jakarta\",\"JB\":\"Jawa Barat\",\"BT\":\"Banten\",\"JT\":\"Jawa Tengah\",\"JI\":\"Jawa Timur\",\"YO\":\"Daerah Istimewa Yogyakarta\",\"BA\":\"Bali\",\"NB\":\"Nusa Tenggara Barat\",\"NT\":\"Nusa Tenggara Timur\",\"KB\":\"Kalimantan Barat\",\"KT\":\"Kalimantan Tengah\",\"KI\":\"Kalimantan Timur\",\"KS\":\"Kalimantan Selatan\",\"KU\":\"Kalimantan Utara\",\"SA\":\"Sulawesi Utara\",\"ST\":\"Sulawesi Tengah\",\"SG\":\"Sulawesi Tenggara\",\"SR\":\"Sulawesi Barat\",\"SN\":\"Sulawesi Selatan\",\"GO\":\"Gorontalo\",\"MA\":\"Maluku\",\"MU\":\"Maluku Utara\",\"PA\":\"Papua\",\"PB\":\"Papua Barat\"},\"MY\":{\"JHR\":\"Johor\",\"KDH\":\"Kedah\",\"KTN\":\"Kelantan\",\"MLK\":\"Melaka\",\"NSN\":\"Negeri Sembilan\",\"PHG\":\"Pahang\",\"PRK\":\"Perak\",\"PLS\":\"Perlis\",\"PNG\":\"Pulau Pinang\",\"SBH\":\"Sabah\",\"SWK\":\"Sarawak\",\"SGR\":\"Selangor\",\"TRG\":\"Terengganu\",\"KUL\":\"W.P. Kuala Lumpur\",\"LBN\":\"W.P. Labuan\",\"PJY\":\"W.P. Putrajaya\"},\"NZ\":{\"NL\":\"Northland\",\"AK\":\"Auckland\",\"WA\":\"Waikato\",\"BP\":\"Bay of Plenty\",\"TK\":\"Taranaki\",\"HB\":\"Hawke\u2019s Bay\",\"MW\":\"Manawatu-Wanganui\",\"WE\":\"Wellington\",\"NS\":\"Nelson\",\"MB\":\"Marlborough\",\"TM\":\"Tasman\",\"WC\":\"West Coast\",\"CT\":\"Canterbury\",\"OT\":\"Otago\",\"SL\":\"Southland\"},\"ZA\":{\"EC\":\"Eastern Cape\",\"FS\":\"Free State\",\"GP\":\"Gauteng\",\"KZN\":\"KwaZulu-Natal\",\"LP\":\"Limpopo\",\"MP\":\"Mpumalanga\",\"NC\":\"Northern Cape\",\"NW\":\"North West\",\"WC\":\"Western Cape\"},\"TH\":{\"TH-37\":\"Amnat Charoen (\u0e2d\u0e33\u0e19\u0e32\u0e08\u0e40\u0e08\u0e23\u0e34\u0e0d)\",\"TH-15\":\"Ang Thong (\u0e2d\u0e48\u0e32\u0e07\u0e17\u0e2d\u0e07)\",\"TH-14\":\"Ayutthaya (\u0e1e\u0e23\u0e30\u0e19\u0e04\u0e23\u0e28\u0e23\u0e35\u0e2d\u0e22\u0e38\u0e18\u0e22\u0e32)\",\"TH-10\":\"Bangkok (\u0e01\u0e23\u0e38\u0e07\u0e40\u0e17\u0e1e\u0e21\u0e2b\u0e32\u0e19\u0e04\u0e23)\",\"TH-38\":\"Bueng Kan (\u0e1a\u0e36\u0e07\u0e01\u0e32\u0e2c)\",\"TH-31\":\"Buri Ram (\u0e1a\u0e38\u0e23\u0e35\u0e23\u0e31\u0e21\u0e22\u0e4c)\",\"TH-24\":\"Chachoengsao (\u0e09\u0e30\u0e40\u0e0a\u0e34\u0e07\u0e40\u0e17\u0e23\u0e32)\",\"TH-18\":\"Chai Nat (\u0e0a\u0e31\u0e22\u0e19\u0e32\u0e17)\",\"TH-36\":\"Chaiyaphum (\u0e0a\u0e31\u0e22\u0e20\u0e39\u0e21\u0e34)\",\"TH-22\":\"Chanthaburi (\u0e08\u0e31\u0e19\u0e17\u0e1a\u0e38\u0e23\u0e35)\",\"TH-50\":\"Chiang Mai (\u0e40\u0e0a\u0e35\u0e22\u0e07\u0e43\u0e2b\u0e21\u0e48)\",\"TH-57\":\"Chiang Rai (\u0e40\u0e0a\u0e35\u0e22\u0e07\u0e23\u0e32\u0e22)\",\"TH-20\":\"Chonburi (\u0e0a\u0e25\u0e1a\u0e38\u0e23\u0e35)\",\"TH-86\":\"Chumphon (\u0e0a\u0e38\u0e21\u0e1e\u0e23)\",\"TH-46\":\"Kalasin (\u0e01\u0e32\u0e2c\u0e2a\u0e34\u0e19\u0e18\u0e38\u0e4c)\",\"TH-62\":\"Kamphaeng Phet (\u0e01\u0e33\u0e41\u0e1e\u0e07\u0e40\u0e1e\u0e0a\u0e23)\",\"TH-71\":\"Kanchanaburi (\u0e01\u0e32\u0e0d\u0e08\u0e19\u0e1a\u0e38\u0e23\u0e35)\",\"TH-40\":\"Khon Kaen (\u0e02\u0e2d\u0e19\u0e41\u0e01\u0e48\u0e19)\",\"TH-81\":\"Krabi (\u0e01\u0e23\u0e30\u0e1a\u0e35\u0e48)\",\"TH-52\":\"Lampang (\u0e25\u0e33\u0e1b\u0e32\u0e07)\",\"TH-51\":\"Lamphun (\u0e25\u0e33\u0e1e\u0e39\u0e19)\",\"TH-42\":\"Loei (\u0e40\u0e25\u0e22)\",\"TH-16\":\"Lopburi (\u0e25\u0e1e\u0e1a\u0e38\u0e23\u0e35)\",\"TH-58\":\"Mae Hong Son (\u0e41\u0e21\u0e48\u0e2e\u0e48\u0e2d\u0e07\u0e2a\u0e2d\u0e19)\",\"TH-44\":\"Maha Sarakham (\u0e21\u0e2b\u0e32\u0e2a\u0e32\u0e23\u0e04\u0e32\u0e21)\",\"TH-49\":\"Mukdahan (\u0e21\u0e38\u0e01\u0e14\u0e32\u0e2b\u0e32\u0e23)\",\"TH-26\":\"Nakhon Nayok (\u0e19\u0e04\u0e23\u0e19\u0e32\u0e22\u0e01)\",\"TH-73\":\"Nakhon Pathom (\u0e19\u0e04\u0e23\u0e1b\u0e10\u0e21)\",\"TH-48\":\"Nakhon Phanom (\u0e19\u0e04\u0e23\u0e1e\u0e19\u0e21)\",\"TH-30\":\"Nakhon Ratchasima (\u0e19\u0e04\u0e23\u0e23\u0e32\u0e0a\u0e2a\u0e35\u0e21\u0e32)\",\"TH-60\":\"Nakhon Sawan (\u0e19\u0e04\u0e23\u0e2a\u0e27\u0e23\u0e23\u0e04\u0e4c)\",\"TH-80\":\"Nakhon Si Thammarat (\u0e19\u0e04\u0e23\u0e28\u0e23\u0e35\u0e18\u0e23\u0e23\u0e21\u0e23\u0e32\u0e0a)\",\"TH-55\":\"Nan (\u0e19\u0e48\u0e32\u0e19)\",\"TH-96\":\"Narathiwat (\u0e19\u0e23\u0e32\u0e18\u0e34\u0e27\u0e32\u0e2a)\",\"TH-39\":\"Nong Bua Lam Phu (\u0e2b\u0e19\u0e2d\u0e07\u0e1a\u0e31\u0e27\u0e25\u0e33\u0e20\u0e39)\",\"TH-43\":\"Nong Khai (\u0e2b\u0e19\u0e2d\u0e07\u0e04\u0e32\u0e22)\",\"TH-12\":\"Nonthaburi (\u0e19\u0e19\u0e17\u0e1a\u0e38\u0e23\u0e35)\",\"TH-13\":\"Pathum Thani (\u0e1b\u0e17\u0e38\u0e21\u0e18\u0e32\u0e19\u0e35)\",\"TH-94\":\"Pattani (\u0e1b\u0e31\u0e15\u0e15\u0e32\u0e19\u0e35)\",\"TH-82\":\"Phang Nga (\u0e1e\u0e31\u0e07\u0e07\u0e32)\",\"TH-93\":\"Phatthalung (\u0e1e\u0e31\u0e17\u0e25\u0e38\u0e07)\",\"TH-56\":\"Phayao (\u0e1e\u0e30\u0e40\u0e22\u0e32)\",\"TH-67\":\"Phetchabun (\u0e40\u0e1e\u0e0a\u0e23\u0e1a\u0e39\u0e23\u0e13\u0e4c)\",\"TH-76\":\"Phetchaburi (\u0e40\u0e1e\u0e0a\u0e23\u0e1a\u0e38\u0e23\u0e35)\",\"TH-66\":\"Phichit (\u0e1e\u0e34\u0e08\u0e34\u0e15\u0e23)\",\"TH-65\":\"Phitsanulok (\u0e1e\u0e34\u0e29\u0e13\u0e38\u0e42\u0e25\u0e01)\",\"TH-54\":\"Phrae (\u0e41\u0e1e\u0e23\u0e48)\",\"TH-83\":\"Phuket (\u0e20\u0e39\u0e40\u0e01\u0e47\u0e15)\",\"TH-25\":\"Prachin Buri (\u0e1b\u0e23\u0e32\u0e08\u0e35\u0e19\u0e1a\u0e38\u0e23\u0e35)\",\"TH-77\":\"Prachuap Khiri Khan (\u0e1b\u0e23\u0e30\u0e08\u0e27\u0e1a\u0e04\u0e35\u0e23\u0e35\u0e02\u0e31\u0e19\u0e18\u0e4c)\",\"TH-85\":\"Ranong (\u0e23\u0e30\u0e19\u0e2d\u0e07)\",\"TH-70\":\"Ratchaburi (\u0e23\u0e32\u0e0a\u0e1a\u0e38\u0e23\u0e35)\",\"TH-21\":\"Rayong (\u0e23\u0e30\u0e22\u0e2d\u0e07)\",\"TH-45\":\"Roi Et (\u0e23\u0e49\u0e2d\u0e22\u0e40\u0e2d\u0e47\u0e14)\",\"TH-27\":\"Sa Kaeo (\u0e2a\u0e23\u0e30\u0e41\u0e01\u0e49\u0e27)\",\"TH-47\":\"Sakon Nakhon (\u0e2a\u0e01\u0e25\u0e19\u0e04\u0e23)\",\"TH-11\":\"Samut Prakan (\u0e2a\u0e21\u0e38\u0e17\u0e23\u0e1b\u0e23\u0e32\u0e01\u0e32\u0e23)\",\"TH-74\":\"Samut Sakhon (\u0e2a\u0e21\u0e38\u0e17\u0e23\u0e2a\u0e32\u0e04\u0e23)\",\"TH-75\":\"Samut Songkhram (\u0e2a\u0e21\u0e38\u0e17\u0e23\u0e2a\u0e07\u0e04\u0e23\u0e32\u0e21)\",\"TH-19\":\"Saraburi (\u0e2a\u0e23\u0e30\u0e1a\u0e38\u0e23\u0e35)\",\"TH-91\":\"Satun (\u0e2a\u0e15\u0e39\u0e25)\",\"TH-17\":\"Sing Buri (\u0e2a\u0e34\u0e07\u0e2b\u0e4c\u0e1a\u0e38\u0e23\u0e35)\",\"TH-33\":\"Sisaket (\u0e28\u0e23\u0e35\u0e2a\u0e30\u0e40\u0e01\u0e29)\",\"TH-90\":\"Songkhla (\u0e2a\u0e07\u0e02\u0e25\u0e32)\",\"TH-64\":\"Sukhothai (\u0e2a\u0e38\u0e42\u0e02\u0e17\u0e31\u0e22)\",\"TH-72\":\"Suphan Buri (\u0e2a\u0e38\u0e1e\u0e23\u0e23\u0e13\u0e1a\u0e38\u0e23\u0e35)\",\"TH-84\":\"Surat Thani (\u0e2a\u0e38\u0e23\u0e32\u0e29\u0e0e\u0e23\u0e4c\u0e18\u0e32\u0e19\u0e35)\",\"TH-32\":\"Surin (\u0e2a\u0e38\u0e23\u0e34\u0e19\u0e17\u0e23\u0e4c)\",\"TH-63\":\"Tak (\u0e15\u0e32\u0e01)\",\"TH-92\":\"Trang (\u0e15\u0e23\u0e31\u0e07)\",\"TH-23\":\"Trat (\u0e15\u0e23\u0e32\u0e14)\",\"TH-34\":\"Ubon Ratchathani (\u0e2d\u0e38\u0e1a\u0e25\u0e23\u0e32\u0e0a\u0e18\u0e32\u0e19\u0e35)\",\"TH-41\":\"Udon Thani (\u0e2d\u0e38\u0e14\u0e23\u0e18\u0e32\u0e19\u0e35)\",\"TH-61\":\"Uthai Thani (\u0e2d\u0e38\u0e17\u0e31\u0e22\u0e18\u0e32\u0e19\u0e35)\",\"TH-53\":\"Uttaradit (\u0e2d\u0e38\u0e15\u0e23\u0e14\u0e34\u0e15\u0e16\u0e4c)\",\"TH-95\":\"Yala (\u0e22\u0e30\u0e25\u0e32)\",\"TH-35\":\"Yasothon (\u0e22\u0e42\u0e2a\u0e18\u0e23)\"},\"US\":{\"AL\":\"Alabama\",\"AK\":\"Alaska\",\"AZ\":\"Arizona\",\"AR\":\"Arkansas\",\"CA\":\"California\",\"CO\":\"Colorado\",\"CT\":\"Connecticut\",\"DE\":\"Delaware\",\"DC\":\"District Of Columbia\",\"FL\":\"Florida\",\"GA\":\"Georgia\",\"HI\":\"Hawaii\",\"ID\":\"Idaho\",\"IL\":\"Illinois\",\"IN\":\"Indiana\",\"IA\":\"Iowa\",\"KS\":\"Kansas\",\"KY\":\"Kentucky\",\"LA\":\"Louisiana\",\"ME\":\"Maine\",\"MD\":\"Maryland\",\"MA\":\"Massachusetts\",\"MI\":\"Michigan\",\"MN\":\"Minnesota\",\"MS\":\"Mississippi\",\"MO\":\"Missouri\",\"MT\":\"Montana\",\"NE\":\"Nebraska\",\"NV\":\"Nevada\",\"NH\":\"New Hampshire\",\"NJ\":\"New Jersey\",\"NM\":\"New Mexico\",\"NY\":\"New York\",\"NC\":\"North Carolina\",\"ND\":\"North Dakota\",\"OH\":\"Ohio\",\"OK\":\"Oklahoma\",\"OR\":\"Oregon\",\"PA\":\"Pennsylvania\",\"RI\":\"Rhode Island\",\"SC\":\"South Carolina\",\"SD\":\"South Dakota\",\"TN\":\"Tennessee\",\"TX\":\"Texas\",\"UT\":\"Utah\",\"VT\":\"Vermont\",\"VA\":\"Virginia\",\"WA\":\"Washington\",\"WV\":\"West Virginia\",\"WI\":\"Wisconsin\",\"WY\":\"Wyoming\",\"AA\":\"Armed Forces (AA)\",\"AE\":\"Armed Forces (AE)\",\"AP\":\"Armed Forces (AP)\",\"AS\":\"American Samoa\",\"GU\":\"Guam\",\"MP\":\"Northern Mariana Islands\",\"PR\":\"Puerto Rico\",\"UM\":\"US Minor Outlying Islands\",\"VI\":\"US Virgin Islands\"}}","plugin_url":" ","ajax_url":"","ajax_loader_url":" \/assets\/images\/ajax-loader@2x.gif","i18n_select_state_text":"Select an option\u2026","i18n_required_rating_text":"Please select a rating","i18n_no_matching_variations_text":"Sorry, no products matched your selection. Please choose a different combination.","i18n_required_text":"required","i18n_view_cart":"View Cart \u2192","review_rating_required":"yes","update_order_review_nonce":"403b9a1684","apply_coupon_nonce":"7722106a96","option_guest_checkout":"yes","checkout_url":"","is_checkout":"0","update_shipping_method_nonce":"48fe5739ab","add_to_cart_nonce":"3c6a61f089","cart_url":" ","cart_redirect_after_add":"no"};';
            $bazarCssBodyTag = 'archive paged post-type-archive post-type-archive-product paged-2 post-type-paged-2 no_js responsive woocommerce woocommerce-page';
            break;
        case 'single_product':/**********Single Product***********/
            $bazarClassList['language-selector']['url']='/css/language-selector.css';
            $bazarClassList['language-selector']['external']=false;
//            $bazarClassList['reset-bootstrap']['url']='/css/reset-bootstrap.css';
//            $bazarClassList['reset-bootstrap']['external']=false;
            $bazarClassList['style']['url']='/css/style.css';
            $bazarClassList['style']['external']=false;
            $bazarClassList['thickbox-css']['url']='/css/thickbox/thickbox.css';
            $bazarClassList['thickbox-css']['external']=false;
            $bazarClassList['google-fonts-css']['url']="http://fonts.googleapis.com/css?family=Playfair+Display%7COpen+Sans+Condensed%3A300%7COpen+Sans%7CShadows+Into+Light%7COswald%7CPlay%7CMuli%7CArbutus+Slab%7CAbel&#038;ver=3.5.2";
            $bazarClassList['google-fonts-css']['external']=true;
            $bazarClassList['jquery-colorbox-css']['url']='/css/colorbox.css';
            $bazarClassList['jquery-colorbox-css']['external']=false;
            $bazarClassList['yith-magnifier-css']['url']='/css/yith_magnifier.css';
            $bazarClassList['yith-magnifier-css']['external']=false;
            $bazarClassList['yith_wcmg_frontend-css']['url']='/css/assets-frontend.css';
            $bazarClassList['yith_wcmg_frontend-css']['external']=false;
            $bazarClassList['yith-wcwl-user-main-css']['url']='/css/woocommerce/wishlist.css';
            $bazarClassList['yith-wcwl-user-main-css']['external']=false;
            $bazarClassList['woocommerce_prettyPhoto_css-css']['url']='/css/prettyPhoto.css';
            $bazarClassList['woocommerce_prettyPhoto_css-css']['external']=false;
            $bazarClassList['woocommerce_frontend_styles-css']['url']='/css/woocommerce/style.css';
            $bazarClassList['woocommerce_frontend_styles-css']['external']=false;
            $bazarClassList['styles-minified-css']['url']='/css/cache/style-28.css';
            $bazarClassList['styles-minified-css']['external']=false;
            $bazarClassList['custom-css']['url']='/css/custom.css';
            $bazarClassList['custom-css']['external']=false;
            $bazarClassList['cache-custom-css']['url']='/css/cache/custom-28.css';
            $bazarClassList['cache-custom-css']['external']=false;
            $bazarClassList['style-changer-css']['url']='/css/picker-celestino.css';
            $bazarClassList['style-changer-css']['external']=false;
            $bazarClassList['colorpicker-css']['url']='/css/colorpicker.css';
            $bazarClassList['colorpicker-css']['external']=false;

            $bazarJsList['comment-reply']['url']='/js/comment-reply.min.js';
            $bazarJsList['comment-reply']['external']=false;
            $bazarJsList['jquery-cookie']['url']='/js/jquery/jquery.cookie.js';
            $bazarJsList['jquery-cookie']['external']=false;
            $bazarJsList['colorpicker']['url']='/js/colorpicker.js';
            $bazarJsList['colorpicker']['external']=false;
            $bazarJsList['sitepress']['url']='/js/sitepress.js';
            $bazarJsList['sitepress']['external']=false;

            //$bazarJsButtom['wp-includes-thickbox']['url']='/js/wp-includes/thickbox.js';
            //$bazarJsButtom['wp-includes-thickbox']['external']=false;
            $bazarJsButtom['wp-includes-underscore']['url']='/js/wp-includes/underscore.min.js';
            $bazarJsButtom['wp-includes-underscore']['external']=false;
            $bazarJsButtom['wp-includes-shortcode']['url']='/js/wp-includes/shortcode.min.js';
            $bazarJsButtom['wp-includes-shortcode']['external']=false;
            $bazarJsButtom['media-upload']['url']='/js/media.upload.min.js';
            $bazarJsButtom['media-upload']['external']=false;
            $bazarJsButtom['jquery-commonlibraries']['url']='/js/jquery/jquery.commonlibraries.js';
            $bazarJsButtom['jquery-commonlibraries']['external']=false;
            $bazarJsButtom['jquery-layout']['url']='/js/jquery/jquery.layout.js';
            $bazarJsButtom['jquery-layout']['external']=false;
            $bazarJsButtom['jquery-custom']['url']='/js/jquery/jquery.custom.js';
            $bazarJsButtom['jquery-custom']['external']=false;
            $bazarJsButtom['woocompare']['url']='/js/woocompare.js';
            $bazarJsButtom['woocompare']['external']=false;
            $bazarJsButtom['jquery-colorbox']['url']='/js/jquery/jquery.colorbox-min.js';
            $bazarJsButtom['jquery-colorbox']['external']=false;
            $bazarJsButtom['responsive']['url']='/js/responsive.js';
            $bazarJsButtom['responsive']['external']=false;
            $bazarJsButtom['carouFredSel']['url']='/js/carouFredSel.js';
            $bazarJsButtom['carouFredSel']['external']=false;
            $bazarJsButtom['yith_magnifier']['url']='/js/yith_magnifier.js';
            $bazarJsButtom['yith_magnifier']['external']=false;
            $bazarJsButtom['frontend']['url']='/js/frontend.js';
            $bazarJsButtom['frontend']['external']=false;

            $bazarJsButtom['jquery-yith-wcwl']['url']='/js/jquery/jquery.yith-wcwl.js';
            $bazarJsButtom['jquery-yith-wcwl']['external']=false;
            $bazarJsButtom['twitter-text']['url']='/js/twitter-text.js';
            $bazarJsButtom['twitter-text']['external']=false;
            $bazarJsButtom['jquery-cycle']['url']='/js/jquery/jquery.cycle.min.js';
            $bazarJsButtom['jquery-cycle']['external']=false;
            $bazarJsButtom['core-shortcodes']['url']='/js/core/shortcodes.js';
            $bazarJsButtom['core-shortcodes']['external']=false;
            $bazarJsButtom['shortcodes']['url']='/js/shortcodes.js';
            $bazarJsButtom['shortcodes']['external']=false;
            $bazarJsButtom['widgets']['url']='/js/widgets.js';
            $bazarJsButtom['widgets']['external']=false;
            $bazarJsButtom['jq-cookie']['url']='/js/jq-cookie.js';
            $bazarJsButtom['jq-cookie']['external']=false;
            $bazarJsButtom['woocommerce2']['url']='/js/woocommerce.js';
            $bazarJsButtom['woocommerce2']['external']=false;
            $bazarJsButtom['add-to-cart']['url']='/js/add-to-cart.min.js';
            $bazarJsButtom['add-to-cart']['external']=false;
            $bazarJsButtom['jquery-prettyPhoto']['url']='/js/jquery/jquery.prettyPhoto.min.js';
            $bazarJsButtom['jquery-prettyPhoto-init']['external']=false;
            $bazarJsButtom['jquery-prettyPhoto-init']['url']='/js/jquery/jquery.prettyPhoto.init.min.js';
            $bazarJsButtom['jquery-prettyPhoto']['external']=false;
            $bazarJsButtom['single-product']['url']='/js/single-product.min.js';
            $bazarJsButtom['single-product']['external']=false;
            $bazarJsButtom['jquery-blockUI']['url']='/js/woocommerce/jquery.blockUI.min.js';
            $bazarJsButtom['jquery-blockUI']['external']=false;
            $bazarJsButtom['woocommerce']['url']='/js/woocommerce.min.js';
            $bazarJsButtom['woocommerce']['external']=false;
//            $bazarJsButtom['cart-fragments']['url']='/js/cart-fragments.min.js';
//            $bazarJsButtom['cart-fragments']['external']=false;
            $bazarJsButtom['jquery-placeholder']['url']='/js/jquery/jquery.placeholder.min.js';
            $bazarJsButtom['jquery-placeholder']['external']=false;
            $bazarJsButtom['changer-bazar']['url']='/js/changer-bazar.js';
            $bazarJsButtom['changer-bazar']['external']=false;
            $bazarJsButtom['yith-wcan-frontend']['url']='/js/yith-wcan-frontend.min.js';
            $bazarJsButtom['yith-wcan-frontend']['external']=false;
            $bazarJsButtom['jquery-elastislide']['url']='/js/jquery/jquery.elastislide.js';
            $bazarJsButtom['jquery-elastislide']['external']=false;
            $bazarJsButtom['jquery-selectbox']['url']='/js/jquery/jquery.selectbox.js';
            $bazarJsButtom['jquery-selectbox']['external']=false;

            $bazarCssBodyTag = 'single single-product no_js responsive woocommerce woocommerce-page';

            $bazarJsConfigButtom = 'var thickboxL10n = {"next":"Next >","prev":"< Prev","image":"Image","of":"of","close":"Close","noiframes":"This feature requires inline frames. You have iframes disabled or your browser does not support them.","loadingAnimation":" ","closeImage":" "};'."\n"
                . 'var l10n_handler = {"map_close":"[x] Close","map_open":"[x] Open"};'."\n"
                . 'var yith_woocompare = {"nonceadd":"2ff540915e","nonceremove":"e0a22b5f3d","ajaxurl":"","actionadd":"yith-woocompare-add-product","actionremove":"yith-woocompare-remove-product","actionview":"yith-woocompare-view-table","added_label":"Added","table_title":"Product Comparison","auto_open":"yes"};'."\n"
                . 'var yith_wcwl_l10n = {"out_of_stock":"Cannot add to the cart as product is Out of Stock!"};'."\n"
                . 'var yith_wcan = {"container":".products","pagination":".general-pagination","result_count":".woocommerce-result-count"};'."\n"
                . 'var woocommerce_params = {"countries":"{\"AF\":[],\"AT\":[],\"BE\":[],\"BI\":[],\"CZ\":[],\"DE\":[],\"DK\":[],\"FI\":[],\"FR\":[],\"HU\":[],\"IS\":[],\"IL\":[],\"KR\":[],\"NL\":[],\"NO\":[],\"PL\":[],\"PT\":[],\"SG\":[],\"SK\":[],\"SI\":[],\"LK\":[],\"SE\":[],\"VN\":[],\"AU\":{\"ACT\":\"Australian Capital Territory\",\"NSW\":\"New South Wales\",\"NT\":\"Northern Territory\",\"QLD\":\"Queensland\",\"SA\":\"South Australia\",\"TAS\":\"Tasmania\",\"VIC\":\"Victoria\",\"WA\":\"Western Australia\"},\"BR\":{\"AC\":\"Acre\",\"AL\":\"Alagoas\",\"AP\":\"Amap\u00e1\",\"AM\":\"Amazonas\",\"BH\":\"Bahia\",\"CE\":\"Cear\u00e1\",\"DF\":\"Distrito Federal\",\"ES\":\"Esp\u00edrito Santo\",\"GO\":\"Goi\u00e1s\",\"MA\":\"Maranh\u00e3o\",\"MT\":\"Mato Grosso\",\"MS\":\"Mato Grosso do Sul\",\"MG\":\"Minas Gerais\",\"PA\":\"Par\u00e1\",\"PB\":\"Para\u00edba\",\"PR\":\"Paran\u00e1\",\"PE\":\"Pernambuco\",\"PI\":\"Piau\u00ed\",\"RJ\":\"Rio de Janeiro\",\"RN\":\"Rio Grande do Norte\",\"RS\":\"Rio Grande do Sul\",\"RO\":\"Rond\u00f4nia\",\"RR\":\"Roraima\",\"SC\":\"Santa Catarina\",\"SP\":\"S\u00e3o Paulo\",\"SE\":\"Sergipe\",\"TO\":\"Tocantins\"},\"CA\":{\"AB\":\"Alberta\",\"BC\":\"British Columbia\",\"MB\":\"Manitoba\",\"NB\":\"New Brunswick\",\"NF\":\"Newfoundland\",\"NT\":\"Northwest Territories\",\"NS\":\"Nova Scotia\",\"NU\":\"Nunavut\",\"ON\":\"Ontario\",\"PE\":\"Prince Edward Island\",\"QC\":\"Quebec\",\"SK\":\"Saskatchewan\",\"YT\":\"Yukon Territory\"},\"CN\":{\"CN1\":\"Yunnan \\\/ \u4e91\u5357\",\"CN2\":\"Beijing \\\/ \u5317\u4eac\",\"CN3\":\"Tianjin \\\/ \u5929\u6d25\",\"CN4\":\"Hebei \\\/ \u6cb3\u5317\",\"CN5\":\"Shanxi \\\/ \u5c71\u897f\",\"CN6\":\"Inner Mongolia \\\/ \u5167\u8499\u53e4\",\"CN7\":\"Liaoning \\\/ \u8fbd\u5b81\",\"CN8\":\"Jilin \\\/ \u5409\u6797\",\"CN9\":\"Heilongjiang \\\/ \u9ed1\u9f99\u6c5f\",\"CN10\":\"Shanghai \\\/ \u4e0a\u6d77\",\"CN11\":\"Jiangsu \\\/ \u6c5f\u82cf\",\"CN12\":\"Zhejiang \\\/ \u6d59\u6c5f\",\"CN13\":\"Anhui \\\/ \u5b89\u5fbd\",\"CN14\":\"Fujian \\\/ \u798f\u5efa\",\"CN15\":\"Jiangxi \\\/ \u6c5f\u897f\",\"CN16\":\"Shandong \\\/ \u5c71\u4e1c\",\"CN17\":\"Henan \\\/ \u6cb3\u5357\",\"CN18\":\"Hubei \\\/ \u6e56\u5317\",\"CN19\":\"Hunan \\\/ \u6e56\u5357\",\"CN20\":\"Guangdong \\\/ \u5e7f\u4e1c\",\"CN21\":\"Guangxi Zhuang \\\/ \u5e7f\u897f\u58ee\u65cf\",\"CN22\":\"Hainan \\\/ \u6d77\u5357\",\"CN23\":\"Chongqing \\\/ \u91cd\u5e86\",\"CN24\":\"Sichuan \\\/ \u56db\u5ddd\",\"CN25\":\"Guizhou \\\/ \u8d35\u5dde\",\"CN26\":\"Shaanxi \\\/ \u9655\u897f\",\"CN27\":\"Gansu \\\/ \u7518\u8083\",\"CN28\":\"Qinghai \\\/ \u9752\u6d77\",\"CN29\":\"Ningxia Hui \\\/ \u5b81\u590f\",\"CN30\":\"Macau \\\/ \u6fb3\u95e8\",\"CN31\":\"Tibet \\\/ \u897f\u85cf\",\"CN32\":\"Xinjiang \\\/ \u65b0\u7586\"},\"HK\":{\"HONG KONG\":\"Hong Kong Island\",\"KOWLOON\":\"Kowloon\",\"NEW TERRITORIES\":\"New Territories\"},\"IN\":{\"AP\":\"Andra Pradesh\",\"AR\":\"Arunachal Pradesh\",\"AS\":\"Assam\",\"BR\":\"Bihar\",\"CT\":\"Chhattisgarh\",\"GA\":\"Goa\",\"GJ\":\"Gujarat\",\"HR\":\"Haryana\",\"HP\":\"Himachal Pradesh\",\"JK\":\"Jammu and Kashmir\",\"JH\":\"Jharkhand\",\"KA\":\"Karnataka\",\"KL\":\"Kerala\",\"MP\":\"Madhya Pradesh\",\"MH\":\"Maharashtra\",\"MN\":\"Manipur\",\"ML\":\"Meghalaya\",\"MZ\":\"Mizoram\",\"NL\":\"Nagaland\",\"OR\":\"Orissa\",\"PB\":\"Punjab\",\"RJ\":\"Rajasthan\",\"SK\":\"Sikkim\",\"TN\":\"Tamil Nadu\",\"TR\":\"Tripura\",\"UT\":\"Uttaranchal\",\"UP\":\"Uttar Pradesh\",\"WB\":\"West Bengal\",\"AN\":\"Andaman and Nicobar Islands\",\"CH\":\"Chandigarh\",\"DN\":\"Dadar and Nagar Haveli\",\"DD\":\"Daman and Diu\",\"DL\":\"Delhi\",\"LD\":\"Lakshadeep\",\"PY\":\"Pondicherry (Puducherry)\"},\"ID\":{\"AC\":\"Daerah Istimewa Aceh\",\"SU\":\"Sumatera Utara\",\"SB\":\"Sumatera Barat\",\"RI\":\"Riau\",\"KR\":\"Kepulauan Riau\",\"JA\":\"Jambi\",\"SS\":\"Sumatera Selatan\",\"BB\":\"Bangka Belitung\",\"BE\":\"Bengkulu\",\"LA\":\"Lampung\",\"JK\":\"DKI Jakarta\",\"JB\":\"Jawa Barat\",\"BT\":\"Banten\",\"JT\":\"Jawa Tengah\",\"JI\":\"Jawa Timur\",\"YO\":\"Daerah Istimewa Yogyakarta\",\"BA\":\"Bali\",\"NB\":\"Nusa Tenggara Barat\",\"NT\":\"Nusa Tenggara Timur\",\"KB\":\"Kalimantan Barat\",\"KT\":\"Kalimantan Tengah\",\"KI\":\"Kalimantan Timur\",\"KS\":\"Kalimantan Selatan\",\"KU\":\"Kalimantan Utara\",\"SA\":\"Sulawesi Utara\",\"ST\":\"Sulawesi Tengah\",\"SG\":\"Sulawesi Tenggara\",\"SR\":\"Sulawesi Barat\",\"SN\":\"Sulawesi Selatan\",\"GO\":\"Gorontalo\",\"MA\":\"Maluku\",\"MU\":\"Maluku Utara\",\"PA\":\"Papua\",\"PB\":\"Papua Barat\"},\"MY\":{\"JHR\":\"Johor\",\"KDH\":\"Kedah\",\"KTN\":\"Kelantan\",\"MLK\":\"Melaka\",\"NSN\":\"Negeri Sembilan\",\"PHG\":\"Pahang\",\"PRK\":\"Perak\",\"PLS\":\"Perlis\",\"PNG\":\"Pulau Pinang\",\"SBH\":\"Sabah\",\"SWK\":\"Sarawak\",\"SGR\":\"Selangor\",\"TRG\":\"Terengganu\",\"KUL\":\"W.P. Kuala Lumpur\",\"LBN\":\"W.P. Labuan\",\"PJY\":\"W.P. Putrajaya\"},\"NZ\":{\"NL\":\"Northland\",\"AK\":\"Auckland\",\"WA\":\"Waikato\",\"BP\":\"Bay of Plenty\",\"TK\":\"Taranaki\",\"HB\":\"Hawke\u2019s Bay\",\"MW\":\"Manawatu-Wanganui\",\"WE\":\"Wellington\",\"NS\":\"Nelson\",\"MB\":\"Marlborough\",\"TM\":\"Tasman\",\"WC\":\"West Coast\",\"CT\":\"Canterbury\",\"OT\":\"Otago\",\"SL\":\"Southland\"},\"ZA\":{\"EC\":\"Eastern Cape\",\"FS\":\"Free State\",\"GP\":\"Gauteng\",\"KZN\":\"KwaZulu-Natal\",\"LP\":\"Limpopo\",\"MP\":\"Mpumalanga\",\"NC\":\"Northern Cape\",\"NW\":\"North West\",\"WC\":\"Western Cape\"},\"TH\":{\"TH-37\":\"Amnat Charoen (\u0e2d\u0e33\u0e19\u0e32\u0e08\u0e40\u0e08\u0e23\u0e34\u0e0d)\",\"TH-15\":\"Ang Thong (\u0e2d\u0e48\u0e32\u0e07\u0e17\u0e2d\u0e07)\",\"TH-14\":\"Ayutthaya (\u0e1e\u0e23\u0e30\u0e19\u0e04\u0e23\u0e28\u0e23\u0e35\u0e2d\u0e22\u0e38\u0e18\u0e22\u0e32)\",\"TH-10\":\"Bangkok (\u0e01\u0e23\u0e38\u0e07\u0e40\u0e17\u0e1e\u0e21\u0e2b\u0e32\u0e19\u0e04\u0e23)\",\"TH-38\":\"Bueng Kan (\u0e1a\u0e36\u0e07\u0e01\u0e32\u0e2c)\",\"TH-31\":\"Buri Ram (\u0e1a\u0e38\u0e23\u0e35\u0e23\u0e31\u0e21\u0e22\u0e4c)\",\"TH-24\":\"Chachoengsao (\u0e09\u0e30\u0e40\u0e0a\u0e34\u0e07\u0e40\u0e17\u0e23\u0e32)\",\"TH-18\":\"Chai Nat (\u0e0a\u0e31\u0e22\u0e19\u0e32\u0e17)\",\"TH-36\":\"Chaiyaphum (\u0e0a\u0e31\u0e22\u0e20\u0e39\u0e21\u0e34)\",\"TH-22\":\"Chanthaburi (\u0e08\u0e31\u0e19\u0e17\u0e1a\u0e38\u0e23\u0e35)\",\"TH-50\":\"Chiang Mai (\u0e40\u0e0a\u0e35\u0e22\u0e07\u0e43\u0e2b\u0e21\u0e48)\",\"TH-57\":\"Chiang Rai (\u0e40\u0e0a\u0e35\u0e22\u0e07\u0e23\u0e32\u0e22)\",\"TH-20\":\"Chonburi (\u0e0a\u0e25\u0e1a\u0e38\u0e23\u0e35)\",\"TH-86\":\"Chumphon (\u0e0a\u0e38\u0e21\u0e1e\u0e23)\",\"TH-46\":\"Kalasin (\u0e01\u0e32\u0e2c\u0e2a\u0e34\u0e19\u0e18\u0e38\u0e4c)\",\"TH-62\":\"Kamphaeng Phet (\u0e01\u0e33\u0e41\u0e1e\u0e07\u0e40\u0e1e\u0e0a\u0e23)\",\"TH-71\":\"Kanchanaburi (\u0e01\u0e32\u0e0d\u0e08\u0e19\u0e1a\u0e38\u0e23\u0e35)\",\"TH-40\":\"Khon Kaen (\u0e02\u0e2d\u0e19\u0e41\u0e01\u0e48\u0e19)\",\"TH-81\":\"Krabi (\u0e01\u0e23\u0e30\u0e1a\u0e35\u0e48)\",\"TH-52\":\"Lampang (\u0e25\u0e33\u0e1b\u0e32\u0e07)\",\"TH-51\":\"Lamphun (\u0e25\u0e33\u0e1e\u0e39\u0e19)\",\"TH-42\":\"Loei (\u0e40\u0e25\u0e22)\",\"TH-16\":\"Lopburi (\u0e25\u0e1e\u0e1a\u0e38\u0e23\u0e35)\",\"TH-58\":\"Mae Hong Son (\u0e41\u0e21\u0e48\u0e2e\u0e48\u0e2d\u0e07\u0e2a\u0e2d\u0e19)\",\"TH-44\":\"Maha Sarakham (\u0e21\u0e2b\u0e32\u0e2a\u0e32\u0e23\u0e04\u0e32\u0e21)\",\"TH-49\":\"Mukdahan (\u0e21\u0e38\u0e01\u0e14\u0e32\u0e2b\u0e32\u0e23)\",\"TH-26\":\"Nakhon Nayok (\u0e19\u0e04\u0e23\u0e19\u0e32\u0e22\u0e01)\",\"TH-73\":\"Nakhon Pathom (\u0e19\u0e04\u0e23\u0e1b\u0e10\u0e21)\",\"TH-48\":\"Nakhon Phanom (\u0e19\u0e04\u0e23\u0e1e\u0e19\u0e21)\",\"TH-30\":\"Nakhon Ratchasima (\u0e19\u0e04\u0e23\u0e23\u0e32\u0e0a\u0e2a\u0e35\u0e21\u0e32)\",\"TH-60\":\"Nakhon Sawan (\u0e19\u0e04\u0e23\u0e2a\u0e27\u0e23\u0e23\u0e04\u0e4c)\",\"TH-80\":\"Nakhon Si Thammarat (\u0e19\u0e04\u0e23\u0e28\u0e23\u0e35\u0e18\u0e23\u0e23\u0e21\u0e23\u0e32\u0e0a)\",\"TH-55\":\"Nan (\u0e19\u0e48\u0e32\u0e19)\",\"TH-96\":\"Narathiwat (\u0e19\u0e23\u0e32\u0e18\u0e34\u0e27\u0e32\u0e2a)\",\"TH-39\":\"Nong Bua Lam Phu (\u0e2b\u0e19\u0e2d\u0e07\u0e1a\u0e31\u0e27\u0e25\u0e33\u0e20\u0e39)\",\"TH-43\":\"Nong Khai (\u0e2b\u0e19\u0e2d\u0e07\u0e04\u0e32\u0e22)\",\"TH-12\":\"Nonthaburi (\u0e19\u0e19\u0e17\u0e1a\u0e38\u0e23\u0e35)\",\"TH-13\":\"Pathum Thani (\u0e1b\u0e17\u0e38\u0e21\u0e18\u0e32\u0e19\u0e35)\",\"TH-94\":\"Pattani (\u0e1b\u0e31\u0e15\u0e15\u0e32\u0e19\u0e35)\",\"TH-82\":\"Phang Nga (\u0e1e\u0e31\u0e07\u0e07\u0e32)\",\"TH-93\":\"Phatthalung (\u0e1e\u0e31\u0e17\u0e25\u0e38\u0e07)\",\"TH-56\":\"Phayao (\u0e1e\u0e30\u0e40\u0e22\u0e32)\",\"TH-67\":\"Phetchabun (\u0e40\u0e1e\u0e0a\u0e23\u0e1a\u0e39\u0e23\u0e13\u0e4c)\",\"TH-76\":\"Phetchaburi (\u0e40\u0e1e\u0e0a\u0e23\u0e1a\u0e38\u0e23\u0e35)\",\"TH-66\":\"Phichit (\u0e1e\u0e34\u0e08\u0e34\u0e15\u0e23)\",\"TH-65\":\"Phitsanulok (\u0e1e\u0e34\u0e29\u0e13\u0e38\u0e42\u0e25\u0e01)\",\"TH-54\":\"Phrae (\u0e41\u0e1e\u0e23\u0e48)\",\"TH-83\":\"Phuket (\u0e20\u0e39\u0e40\u0e01\u0e47\u0e15)\",\"TH-25\":\"Prachin Buri (\u0e1b\u0e23\u0e32\u0e08\u0e35\u0e19\u0e1a\u0e38\u0e23\u0e35)\",\"TH-77\":\"Prachuap Khiri Khan (\u0e1b\u0e23\u0e30\u0e08\u0e27\u0e1a\u0e04\u0e35\u0e23\u0e35\u0e02\u0e31\u0e19\u0e18\u0e4c)\",\"TH-85\":\"Ranong (\u0e23\u0e30\u0e19\u0e2d\u0e07)\",\"TH-70\":\"Ratchaburi (\u0e23\u0e32\u0e0a\u0e1a\u0e38\u0e23\u0e35)\",\"TH-21\":\"Rayong (\u0e23\u0e30\u0e22\u0e2d\u0e07)\",\"TH-45\":\"Roi Et (\u0e23\u0e49\u0e2d\u0e22\u0e40\u0e2d\u0e47\u0e14)\",\"TH-27\":\"Sa Kaeo (\u0e2a\u0e23\u0e30\u0e41\u0e01\u0e49\u0e27)\",\"TH-47\":\"Sakon Nakhon (\u0e2a\u0e01\u0e25\u0e19\u0e04\u0e23)\",\"TH-11\":\"Samut Prakan (\u0e2a\u0e21\u0e38\u0e17\u0e23\u0e1b\u0e23\u0e32\u0e01\u0e32\u0e23)\",\"TH-74\":\"Samut Sakhon (\u0e2a\u0e21\u0e38\u0e17\u0e23\u0e2a\u0e32\u0e04\u0e23)\",\"TH-75\":\"Samut Songkhram (\u0e2a\u0e21\u0e38\u0e17\u0e23\u0e2a\u0e07\u0e04\u0e23\u0e32\u0e21)\",\"TH-19\":\"Saraburi (\u0e2a\u0e23\u0e30\u0e1a\u0e38\u0e23\u0e35)\",\"TH-91\":\"Satun (\u0e2a\u0e15\u0e39\u0e25)\",\"TH-17\":\"Sing Buri (\u0e2a\u0e34\u0e07\u0e2b\u0e4c\u0e1a\u0e38\u0e23\u0e35)\",\"TH-33\":\"Sisaket (\u0e28\u0e23\u0e35\u0e2a\u0e30\u0e40\u0e01\u0e29)\",\"TH-90\":\"Songkhla (\u0e2a\u0e07\u0e02\u0e25\u0e32)\",\"TH-64\":\"Sukhothai (\u0e2a\u0e38\u0e42\u0e02\u0e17\u0e31\u0e22)\",\"TH-72\":\"Suphan Buri (\u0e2a\u0e38\u0e1e\u0e23\u0e23\u0e13\u0e1a\u0e38\u0e23\u0e35)\",\"TH-84\":\"Surat Thani (\u0e2a\u0e38\u0e23\u0e32\u0e29\u0e0e\u0e23\u0e4c\u0e18\u0e32\u0e19\u0e35)\",\"TH-32\":\"Surin (\u0e2a\u0e38\u0e23\u0e34\u0e19\u0e17\u0e23\u0e4c)\",\"TH-63\":\"Tak (\u0e15\u0e32\u0e01)\",\"TH-92\":\"Trang (\u0e15\u0e23\u0e31\u0e07)\",\"TH-23\":\"Trat (\u0e15\u0e23\u0e32\u0e14)\",\"TH-34\":\"Ubon Ratchathani (\u0e2d\u0e38\u0e1a\u0e25\u0e23\u0e32\u0e0a\u0e18\u0e32\u0e19\u0e35)\",\"TH-41\":\"Udon Thani (\u0e2d\u0e38\u0e14\u0e23\u0e18\u0e32\u0e19\u0e35)\",\"TH-61\":\"Uthai Thani (\u0e2d\u0e38\u0e17\u0e31\u0e22\u0e18\u0e32\u0e19\u0e35)\",\"TH-53\":\"Uttaradit (\u0e2d\u0e38\u0e15\u0e23\u0e14\u0e34\u0e15\u0e16\u0e4c)\",\"TH-95\":\"Yala (\u0e22\u0e30\u0e25\u0e32)\",\"TH-35\":\"Yasothon (\u0e22\u0e42\u0e2a\u0e18\u0e23)\"},\"US\":{\"AL\":\"Alabama\",\"AK\":\"Alaska\",\"AZ\":\"Arizona\",\"AR\":\"Arkansas\",\"CA\":\"California\",\"CO\":\"Colorado\",\"CT\":\"Connecticut\",\"DE\":\"Delaware\",\"DC\":\"District Of Columbia\",\"FL\":\"Florida\",\"GA\":\"Georgia\",\"HI\":\"Hawaii\",\"ID\":\"Idaho\",\"IL\":\"Illinois\",\"IN\":\"Indiana\",\"IA\":\"Iowa\",\"KS\":\"Kansas\",\"KY\":\"Kentucky\",\"LA\":\"Louisiana\",\"ME\":\"Maine\",\"MD\":\"Maryland\",\"MA\":\"Massachusetts\",\"MI\":\"Michigan\",\"MN\":\"Minnesota\",\"MS\":\"Mississippi\",\"MO\":\"Missouri\",\"MT\":\"Montana\",\"NE\":\"Nebraska\",\"NV\":\"Nevada\",\"NH\":\"New Hampshire\",\"NJ\":\"New Jersey\",\"NM\":\"New Mexico\",\"NY\":\"New York\",\"NC\":\"North Carolina\",\"ND\":\"North Dakota\",\"OH\":\"Ohio\",\"OK\":\"Oklahoma\",\"OR\":\"Oregon\",\"PA\":\"Pennsylvania\",\"RI\":\"Rhode Island\",\"SC\":\"South Carolina\",\"SD\":\"South Dakota\",\"TN\":\"Tennessee\",\"TX\":\"Texas\",\"UT\":\"Utah\",\"VT\":\"Vermont\",\"VA\":\"Virginia\",\"WA\":\"Washington\",\"WV\":\"West Virginia\",\"WI\":\"Wisconsin\",\"WY\":\"Wyoming\",\"AA\":\"Armed Forces (AA)\",\"AE\":\"Armed Forces (AE)\",\"AP\":\"Armed Forces (AP)\",\"AS\":\"American Samoa\",\"GU\":\"Guam\",\"MP\":\"Northern Mariana Islands\",\"PR\":\"Puerto Rico\",\"UM\":\"US Minor Outlying Islands\",\"VI\":\"US Virgin Islands\"}}","plugin_url":" ","ajax_url":"","ajax_loader_url":" \/assets\/images\/ajax-loader@2x.gif","i18n_select_state_text":"Select an option\u2026","i18n_required_rating_text":"Please select a rating","i18n_no_matching_variations_text":"Sorry, no products matched your selection. Please choose a different combination.","i18n_required_text":"required","i18n_view_cart":"View Cart \u2192","review_rating_required":"yes","update_order_review_nonce":"403b9a1684","apply_coupon_nonce":"7722106a96","option_guest_checkout":"yes","checkout_url":"","is_checkout":"0","update_shipping_method_nonce":"48fe5739ab","add_to_cart_nonce":"3c6a61f089","cart_url":" ","cart_redirect_after_add":"no"};';

            break;
        case 'template_display':/**********Template Display***********/
            $bazarClassList['language-selector']['url']='/css/language-selector.css';
            $bazarClassList['language-selector']['external']=false;
//            $bazarClassList['reset-bootstrap']['url']='/css/reset-bootstrap.css';
//            $bazarClassList['reset-bootstrap']['external']=false;
            $bazarClassList['style']['url']='/css/style.css';
            $bazarClassList['style']['external']=false;
            $bazarClassList['thickbox-css']['url']='/css/thickbox/thickbox.css';
            $bazarClassList['thickbox-css']['external']=false;
            $bazarClassList['google-fonts-css']['url']="http://fonts.googleapis.com/css?family=Playfair+Display%7COpen+Sans+Condensed%3A300%7COpen+Sans%7CShadows+Into+Light%7COswald%7CPlay%7CMuli%7CArbutus+Slab%7CAbel&#038;ver=3.5.2";
            $bazarClassList['google-fonts-css']['external']=true;
            $bazarClassList['jquery-colorbox-css']['url']='/css/colorbox.css';
            $bazarClassList['jquery-colorbox-css']['external']=false;
            $bazarClassList['yith-magnifier-css']['url']='/css/yith_magnifier.css';
            $bazarClassList['yith-magnifier-css']['external']=false;
            $bazarClassList['yith_wcmg_frontend-css']['url']='/css/assets-frontend.css';
            $bazarClassList['yith_wcmg_frontend-css']['external']=false;
            $bazarClassList['yith-wcwl-user-main-css']['url']='/css/woocommerce/wishlist.css';
            $bazarClassList['yith-wcwl-user-main-css']['external']=false;
            $bazarClassList['woocommerce_prettyPhoto_css-css']['url']='/css/prettyPhoto.css';
            $bazarClassList['woocommerce_prettyPhoto_css-css']['external']=false;
            $bazarClassList['woocommerce_frontend_styles-css']['url']='/css/woocommerce/style.css';
            $bazarClassList['woocommerce_frontend_styles-css']['external']=false;
            $bazarClassList['styles-minified-css']['url']='/css/cache/style-28.css';
            $bazarClassList['styles-minified-css']['external']=false;
            $bazarClassList['custom-css']['url']='/css/custom.css';
            $bazarClassList['custom-css']['external']=false;
            $bazarClassList['cache-custom-css']['url']='/css/cache/custom-28.css';
            $bazarClassList['cache-custom-css']['external']=false;
            $bazarClassList['style-changer-css']['url']='/css/picker-celestino.css';
            $bazarClassList['style-changer-css']['external']=false;
            $bazarClassList['colorpicker-css']['url']='/css/colorpicker.css';
            $bazarClassList['colorpicker-css']['external']=false;

            $bazarJsList['comment-reply']['url']='/js/comment-reply.min.js';
            $bazarJsList['comment-reply']['external']=false;
            $bazarJsList['jquery-cookie']['url']='/js/jquery/jquery.cookie.js';
            $bazarJsList['jquery-cookie']['external']=false;
            $bazarJsList['colorpicker']['url']='/js/colorpicker.js';
            $bazarJsList['colorpicker']['external']=false;
            $bazarJsList['sitepress']['url']='/js/sitepress.js';
            $bazarJsList['sitepress']['external']=false;

            //$bazarJsButtom['wp-includes-thickbox']['url']='/js/wp-includes/thickbox.js';
            //$bazarJsButtom['wp-includes-thickbox']['external']=false;
            $bazarJsButtom['wp-includes-underscore']['url']='/js/wp-includes/underscore.min.js';
            $bazarJsButtom['wp-includes-underscore']['external']=false;
            $bazarJsButtom['wp-includes-shortcode']['url']='/js/wp-includes/shortcode.min.js';
            $bazarJsButtom['wp-includes-shortcode']['external']=false;
            $bazarJsButtom['media-upload']['url']='/js/media.upload.min.js';
            $bazarJsButtom['media-upload']['external']=false;
            $bazarJsButtom['jquery-commonlibraries']['url']='/js/jquery/jquery.commonlibraries.js';
            $bazarJsButtom['jquery-commonlibraries']['external']=false;
            $bazarJsButtom['jquery-layout']['url']='/js/jquery/jquery.layout.js';
            $bazarJsButtom['jquery-layout']['external']=false;
            $bazarJsButtom['jquery-custom']['url']='/js/jquery/jquery.custom.js';
            $bazarJsButtom['jquery-custom']['external']=false;
            $bazarJsButtom['woocompare']['url']='/js/woocompare.js';
            $bazarJsButtom['woocompare']['external']=false;
            $bazarJsButtom['jquery-colorbox']['url']='/js/jquery/jquery.colorbox-min.js';
            $bazarJsButtom['jquery-colorbox']['external']=false;
            $bazarJsButtom['responsive']['url']='/js/responsive.js';
            $bazarJsButtom['responsive']['external']=false;
            $bazarJsButtom['carouFredSel']['url']='/js/carouFredSel.js';
            $bazarJsButtom['carouFredSel']['external']=false;
            $bazarJsButtom['yith_magnifier']['url']='/js/yith_magnifier.js';
            $bazarJsButtom['yith_magnifier']['external']=false;
            $bazarJsButtom['frontend']['url']='/js/frontend.js';
            $bazarJsButtom['frontend']['external']=false;

            $bazarJsButtom['jquery-yith-wcwl']['url']='/js/jquery/jquery.yith-wcwl.js';
            $bazarJsButtom['jquery-yith-wcwl']['external']=false;
            $bazarJsButtom['twitter-text']['url']='/js/twitter-text.js';
            $bazarJsButtom['twitter-text']['external']=false;
            $bazarJsButtom['jquery-cycle']['url']='/js/jquery/jquery.cycle.min.js';
            $bazarJsButtom['jquery-cycle']['external']=false;
            $bazarJsButtom['core-shortcodes']['url']='/js/core/shortcodes.js';
            $bazarJsButtom['core-shortcodes']['external']=false;
            $bazarJsButtom['shortcodes']['url']='/js/shortcodes.js';
            $bazarJsButtom['shortcodes']['external']=false;
            $bazarJsButtom['widgets']['url']='/js/widgets.js';
            $bazarJsButtom['widgets']['external']=false;
            $bazarJsButtom['jq-cookie']['url']='/js/jq-cookie.js';
            $bazarJsButtom['jq-cookie']['external']=false;
            $bazarJsButtom['woocommerce2']['url']='/js/woocommerce.js';
            $bazarJsButtom['woocommerce2']['external']=false;
            $bazarJsButtom['add-to-cart']['url']='/js/add-to-cart.min.js';
            $bazarJsButtom['add-to-cart']['external']=false;
            $bazarJsButtom['jquery-prettyPhoto']['url']='/js/jquery/jquery.prettyPhoto.min.js';
            $bazarJsButtom['jquery-prettyPhoto-init']['external']=false;
            $bazarJsButtom['jquery-prettyPhoto-init']['url']='/js/jquery/jquery.prettyPhoto.init.min.js';
            $bazarJsButtom['jquery-prettyPhoto']['external']=false;
            $bazarJsButtom['single-product']['url']='/js/single-product.min.js';
            $bazarJsButtom['single-product']['external']=false;
            $bazarJsButtom['jquery-blockUI']['url']='/js/woocommerce/jquery.blockUI.min.js';
            $bazarJsButtom['jquery-blockUI']['external']=false;
            $bazarJsButtom['woocommerce']['url']='/js/woocommerce.min.js';
            $bazarJsButtom['woocommerce']['external']=false;
//            $bazarJsButtom['cart-fragments']['url']='/js/cart-fragments.min.js';
//            $bazarJsButtom['cart-fragments']['external']=false;
            $bazarJsButtom['jquery-placeholder']['url']='/js/jquery/jquery.placeholder.min.js';
            $bazarJsButtom['jquery-placeholder']['external']=false;
            $bazarJsButtom['changer-bazar']['url']='/js/changer-bazar.js';
            $bazarJsButtom['changer-bazar']['external']=false;
            $bazarJsButtom['yith-wcan-frontend']['url']='/js/yith-wcan-frontend.min.js';
            $bazarJsButtom['yith-wcan-frontend']['external']=false;
            $bazarJsButtom['jquery-elastislide']['url']='/js/jquery/jquery.elastislide.js';
            $bazarJsButtom['jquery-elastislide']['external']=false;
            $bazarJsButtom['jquery-selectbox']['url']='/js/jquery/jquery.selectbox.js';
            $bazarJsButtom['jquery-selectbox']['external']=false;

            $bazarCssBodyTag = 'single single-product no_js responsive woocommerce woocommerce-page';

            $bazarJsConfigButtom = 'var thickboxL10n = {"next":"Next >","prev":"< Prev","image":"Image","of":"of","close":"Close","noiframes":"This feature requires inline frames. You have iframes disabled or your browser does not support them.","loadingAnimation":" ","closeImage":" "};'."\n"
                . 'var l10n_handler = {"map_close":"[x] Close","map_open":"[x] Open"};'."\n"
                . 'var yith_woocompare = {"nonceadd":"2ff540915e","nonceremove":"e0a22b5f3d","ajaxurl":"","actionadd":"yith-woocompare-add-product","actionremove":"yith-woocompare-remove-product","actionview":"yith-woocompare-view-table","added_label":"Added","table_title":"Product Comparison","auto_open":"yes"};'."\n"
                . 'var yith_wcwl_l10n = {"out_of_stock":"Cannot add to the cart as product is Out of Stock!"};'."\n"
                . 'var yith_wcan = {"container":".products","pagination":".general-pagination","result_count":".woocommerce-result-count"};'."\n"
                . 'var woocommerce_params = {"countries":"{\"AF\":[],\"AT\":[],\"BE\":[],\"BI\":[],\"CZ\":[],\"DE\":[],\"DK\":[],\"FI\":[],\"FR\":[],\"HU\":[],\"IS\":[],\"IL\":[],\"KR\":[],\"NL\":[],\"NO\":[],\"PL\":[],\"PT\":[],\"SG\":[],\"SK\":[],\"SI\":[],\"LK\":[],\"SE\":[],\"VN\":[],\"AU\":{\"ACT\":\"Australian Capital Territory\",\"NSW\":\"New South Wales\",\"NT\":\"Northern Territory\",\"QLD\":\"Queensland\",\"SA\":\"South Australia\",\"TAS\":\"Tasmania\",\"VIC\":\"Victoria\",\"WA\":\"Western Australia\"},\"BR\":{\"AC\":\"Acre\",\"AL\":\"Alagoas\",\"AP\":\"Amap\u00e1\",\"AM\":\"Amazonas\",\"BH\":\"Bahia\",\"CE\":\"Cear\u00e1\",\"DF\":\"Distrito Federal\",\"ES\":\"Esp\u00edrito Santo\",\"GO\":\"Goi\u00e1s\",\"MA\":\"Maranh\u00e3o\",\"MT\":\"Mato Grosso\",\"MS\":\"Mato Grosso do Sul\",\"MG\":\"Minas Gerais\",\"PA\":\"Par\u00e1\",\"PB\":\"Para\u00edba\",\"PR\":\"Paran\u00e1\",\"PE\":\"Pernambuco\",\"PI\":\"Piau\u00ed\",\"RJ\":\"Rio de Janeiro\",\"RN\":\"Rio Grande do Norte\",\"RS\":\"Rio Grande do Sul\",\"RO\":\"Rond\u00f4nia\",\"RR\":\"Roraima\",\"SC\":\"Santa Catarina\",\"SP\":\"S\u00e3o Paulo\",\"SE\":\"Sergipe\",\"TO\":\"Tocantins\"},\"CA\":{\"AB\":\"Alberta\",\"BC\":\"British Columbia\",\"MB\":\"Manitoba\",\"NB\":\"New Brunswick\",\"NF\":\"Newfoundland\",\"NT\":\"Northwest Territories\",\"NS\":\"Nova Scotia\",\"NU\":\"Nunavut\",\"ON\":\"Ontario\",\"PE\":\"Prince Edward Island\",\"QC\":\"Quebec\",\"SK\":\"Saskatchewan\",\"YT\":\"Yukon Territory\"},\"CN\":{\"CN1\":\"Yunnan \\\/ \u4e91\u5357\",\"CN2\":\"Beijing \\\/ \u5317\u4eac\",\"CN3\":\"Tianjin \\\/ \u5929\u6d25\",\"CN4\":\"Hebei \\\/ \u6cb3\u5317\",\"CN5\":\"Shanxi \\\/ \u5c71\u897f\",\"CN6\":\"Inner Mongolia \\\/ \u5167\u8499\u53e4\",\"CN7\":\"Liaoning \\\/ \u8fbd\u5b81\",\"CN8\":\"Jilin \\\/ \u5409\u6797\",\"CN9\":\"Heilongjiang \\\/ \u9ed1\u9f99\u6c5f\",\"CN10\":\"Shanghai \\\/ \u4e0a\u6d77\",\"CN11\":\"Jiangsu \\\/ \u6c5f\u82cf\",\"CN12\":\"Zhejiang \\\/ \u6d59\u6c5f\",\"CN13\":\"Anhui \\\/ \u5b89\u5fbd\",\"CN14\":\"Fujian \\\/ \u798f\u5efa\",\"CN15\":\"Jiangxi \\\/ \u6c5f\u897f\",\"CN16\":\"Shandong \\\/ \u5c71\u4e1c\",\"CN17\":\"Henan \\\/ \u6cb3\u5357\",\"CN18\":\"Hubei \\\/ \u6e56\u5317\",\"CN19\":\"Hunan \\\/ \u6e56\u5357\",\"CN20\":\"Guangdong \\\/ \u5e7f\u4e1c\",\"CN21\":\"Guangxi Zhuang \\\/ \u5e7f\u897f\u58ee\u65cf\",\"CN22\":\"Hainan \\\/ \u6d77\u5357\",\"CN23\":\"Chongqing \\\/ \u91cd\u5e86\",\"CN24\":\"Sichuan \\\/ \u56db\u5ddd\",\"CN25\":\"Guizhou \\\/ \u8d35\u5dde\",\"CN26\":\"Shaanxi \\\/ \u9655\u897f\",\"CN27\":\"Gansu \\\/ \u7518\u8083\",\"CN28\":\"Qinghai \\\/ \u9752\u6d77\",\"CN29\":\"Ningxia Hui \\\/ \u5b81\u590f\",\"CN30\":\"Macau \\\/ \u6fb3\u95e8\",\"CN31\":\"Tibet \\\/ \u897f\u85cf\",\"CN32\":\"Xinjiang \\\/ \u65b0\u7586\"},\"HK\":{\"HONG KONG\":\"Hong Kong Island\",\"KOWLOON\":\"Kowloon\",\"NEW TERRITORIES\":\"New Territories\"},\"IN\":{\"AP\":\"Andra Pradesh\",\"AR\":\"Arunachal Pradesh\",\"AS\":\"Assam\",\"BR\":\"Bihar\",\"CT\":\"Chhattisgarh\",\"GA\":\"Goa\",\"GJ\":\"Gujarat\",\"HR\":\"Haryana\",\"HP\":\"Himachal Pradesh\",\"JK\":\"Jammu and Kashmir\",\"JH\":\"Jharkhand\",\"KA\":\"Karnataka\",\"KL\":\"Kerala\",\"MP\":\"Madhya Pradesh\",\"MH\":\"Maharashtra\",\"MN\":\"Manipur\",\"ML\":\"Meghalaya\",\"MZ\":\"Mizoram\",\"NL\":\"Nagaland\",\"OR\":\"Orissa\",\"PB\":\"Punjab\",\"RJ\":\"Rajasthan\",\"SK\":\"Sikkim\",\"TN\":\"Tamil Nadu\",\"TR\":\"Tripura\",\"UT\":\"Uttaranchal\",\"UP\":\"Uttar Pradesh\",\"WB\":\"West Bengal\",\"AN\":\"Andaman and Nicobar Islands\",\"CH\":\"Chandigarh\",\"DN\":\"Dadar and Nagar Haveli\",\"DD\":\"Daman and Diu\",\"DL\":\"Delhi\",\"LD\":\"Lakshadeep\",\"PY\":\"Pondicherry (Puducherry)\"},\"ID\":{\"AC\":\"Daerah Istimewa Aceh\",\"SU\":\"Sumatera Utara\",\"SB\":\"Sumatera Barat\",\"RI\":\"Riau\",\"KR\":\"Kepulauan Riau\",\"JA\":\"Jambi\",\"SS\":\"Sumatera Selatan\",\"BB\":\"Bangka Belitung\",\"BE\":\"Bengkulu\",\"LA\":\"Lampung\",\"JK\":\"DKI Jakarta\",\"JB\":\"Jawa Barat\",\"BT\":\"Banten\",\"JT\":\"Jawa Tengah\",\"JI\":\"Jawa Timur\",\"YO\":\"Daerah Istimewa Yogyakarta\",\"BA\":\"Bali\",\"NB\":\"Nusa Tenggara Barat\",\"NT\":\"Nusa Tenggara Timur\",\"KB\":\"Kalimantan Barat\",\"KT\":\"Kalimantan Tengah\",\"KI\":\"Kalimantan Timur\",\"KS\":\"Kalimantan Selatan\",\"KU\":\"Kalimantan Utara\",\"SA\":\"Sulawesi Utara\",\"ST\":\"Sulawesi Tengah\",\"SG\":\"Sulawesi Tenggara\",\"SR\":\"Sulawesi Barat\",\"SN\":\"Sulawesi Selatan\",\"GO\":\"Gorontalo\",\"MA\":\"Maluku\",\"MU\":\"Maluku Utara\",\"PA\":\"Papua\",\"PB\":\"Papua Barat\"},\"MY\":{\"JHR\":\"Johor\",\"KDH\":\"Kedah\",\"KTN\":\"Kelantan\",\"MLK\":\"Melaka\",\"NSN\":\"Negeri Sembilan\",\"PHG\":\"Pahang\",\"PRK\":\"Perak\",\"PLS\":\"Perlis\",\"PNG\":\"Pulau Pinang\",\"SBH\":\"Sabah\",\"SWK\":\"Sarawak\",\"SGR\":\"Selangor\",\"TRG\":\"Terengganu\",\"KUL\":\"W.P. Kuala Lumpur\",\"LBN\":\"W.P. Labuan\",\"PJY\":\"W.P. Putrajaya\"},\"NZ\":{\"NL\":\"Northland\",\"AK\":\"Auckland\",\"WA\":\"Waikato\",\"BP\":\"Bay of Plenty\",\"TK\":\"Taranaki\",\"HB\":\"Hawke\u2019s Bay\",\"MW\":\"Manawatu-Wanganui\",\"WE\":\"Wellington\",\"NS\":\"Nelson\",\"MB\":\"Marlborough\",\"TM\":\"Tasman\",\"WC\":\"West Coast\",\"CT\":\"Canterbury\",\"OT\":\"Otago\",\"SL\":\"Southland\"},\"ZA\":{\"EC\":\"Eastern Cape\",\"FS\":\"Free State\",\"GP\":\"Gauteng\",\"KZN\":\"KwaZulu-Natal\",\"LP\":\"Limpopo\",\"MP\":\"Mpumalanga\",\"NC\":\"Northern Cape\",\"NW\":\"North West\",\"WC\":\"Western Cape\"},\"TH\":{\"TH-37\":\"Amnat Charoen (\u0e2d\u0e33\u0e19\u0e32\u0e08\u0e40\u0e08\u0e23\u0e34\u0e0d)\",\"TH-15\":\"Ang Thong (\u0e2d\u0e48\u0e32\u0e07\u0e17\u0e2d\u0e07)\",\"TH-14\":\"Ayutthaya (\u0e1e\u0e23\u0e30\u0e19\u0e04\u0e23\u0e28\u0e23\u0e35\u0e2d\u0e22\u0e38\u0e18\u0e22\u0e32)\",\"TH-10\":\"Bangkok (\u0e01\u0e23\u0e38\u0e07\u0e40\u0e17\u0e1e\u0e21\u0e2b\u0e32\u0e19\u0e04\u0e23)\",\"TH-38\":\"Bueng Kan (\u0e1a\u0e36\u0e07\u0e01\u0e32\u0e2c)\",\"TH-31\":\"Buri Ram (\u0e1a\u0e38\u0e23\u0e35\u0e23\u0e31\u0e21\u0e22\u0e4c)\",\"TH-24\":\"Chachoengsao (\u0e09\u0e30\u0e40\u0e0a\u0e34\u0e07\u0e40\u0e17\u0e23\u0e32)\",\"TH-18\":\"Chai Nat (\u0e0a\u0e31\u0e22\u0e19\u0e32\u0e17)\",\"TH-36\":\"Chaiyaphum (\u0e0a\u0e31\u0e22\u0e20\u0e39\u0e21\u0e34)\",\"TH-22\":\"Chanthaburi (\u0e08\u0e31\u0e19\u0e17\u0e1a\u0e38\u0e23\u0e35)\",\"TH-50\":\"Chiang Mai (\u0e40\u0e0a\u0e35\u0e22\u0e07\u0e43\u0e2b\u0e21\u0e48)\",\"TH-57\":\"Chiang Rai (\u0e40\u0e0a\u0e35\u0e22\u0e07\u0e23\u0e32\u0e22)\",\"TH-20\":\"Chonburi (\u0e0a\u0e25\u0e1a\u0e38\u0e23\u0e35)\",\"TH-86\":\"Chumphon (\u0e0a\u0e38\u0e21\u0e1e\u0e23)\",\"TH-46\":\"Kalasin (\u0e01\u0e32\u0e2c\u0e2a\u0e34\u0e19\u0e18\u0e38\u0e4c)\",\"TH-62\":\"Kamphaeng Phet (\u0e01\u0e33\u0e41\u0e1e\u0e07\u0e40\u0e1e\u0e0a\u0e23)\",\"TH-71\":\"Kanchanaburi (\u0e01\u0e32\u0e0d\u0e08\u0e19\u0e1a\u0e38\u0e23\u0e35)\",\"TH-40\":\"Khon Kaen (\u0e02\u0e2d\u0e19\u0e41\u0e01\u0e48\u0e19)\",\"TH-81\":\"Krabi (\u0e01\u0e23\u0e30\u0e1a\u0e35\u0e48)\",\"TH-52\":\"Lampang (\u0e25\u0e33\u0e1b\u0e32\u0e07)\",\"TH-51\":\"Lamphun (\u0e25\u0e33\u0e1e\u0e39\u0e19)\",\"TH-42\":\"Loei (\u0e40\u0e25\u0e22)\",\"TH-16\":\"Lopburi (\u0e25\u0e1e\u0e1a\u0e38\u0e23\u0e35)\",\"TH-58\":\"Mae Hong Son (\u0e41\u0e21\u0e48\u0e2e\u0e48\u0e2d\u0e07\u0e2a\u0e2d\u0e19)\",\"TH-44\":\"Maha Sarakham (\u0e21\u0e2b\u0e32\u0e2a\u0e32\u0e23\u0e04\u0e32\u0e21)\",\"TH-49\":\"Mukdahan (\u0e21\u0e38\u0e01\u0e14\u0e32\u0e2b\u0e32\u0e23)\",\"TH-26\":\"Nakhon Nayok (\u0e19\u0e04\u0e23\u0e19\u0e32\u0e22\u0e01)\",\"TH-73\":\"Nakhon Pathom (\u0e19\u0e04\u0e23\u0e1b\u0e10\u0e21)\",\"TH-48\":\"Nakhon Phanom (\u0e19\u0e04\u0e23\u0e1e\u0e19\u0e21)\",\"TH-30\":\"Nakhon Ratchasima (\u0e19\u0e04\u0e23\u0e23\u0e32\u0e0a\u0e2a\u0e35\u0e21\u0e32)\",\"TH-60\":\"Nakhon Sawan (\u0e19\u0e04\u0e23\u0e2a\u0e27\u0e23\u0e23\u0e04\u0e4c)\",\"TH-80\":\"Nakhon Si Thammarat (\u0e19\u0e04\u0e23\u0e28\u0e23\u0e35\u0e18\u0e23\u0e23\u0e21\u0e23\u0e32\u0e0a)\",\"TH-55\":\"Nan (\u0e19\u0e48\u0e32\u0e19)\",\"TH-96\":\"Narathiwat (\u0e19\u0e23\u0e32\u0e18\u0e34\u0e27\u0e32\u0e2a)\",\"TH-39\":\"Nong Bua Lam Phu (\u0e2b\u0e19\u0e2d\u0e07\u0e1a\u0e31\u0e27\u0e25\u0e33\u0e20\u0e39)\",\"TH-43\":\"Nong Khai (\u0e2b\u0e19\u0e2d\u0e07\u0e04\u0e32\u0e22)\",\"TH-12\":\"Nonthaburi (\u0e19\u0e19\u0e17\u0e1a\u0e38\u0e23\u0e35)\",\"TH-13\":\"Pathum Thani (\u0e1b\u0e17\u0e38\u0e21\u0e18\u0e32\u0e19\u0e35)\",\"TH-94\":\"Pattani (\u0e1b\u0e31\u0e15\u0e15\u0e32\u0e19\u0e35)\",\"TH-82\":\"Phang Nga (\u0e1e\u0e31\u0e07\u0e07\u0e32)\",\"TH-93\":\"Phatthalung (\u0e1e\u0e31\u0e17\u0e25\u0e38\u0e07)\",\"TH-56\":\"Phayao (\u0e1e\u0e30\u0e40\u0e22\u0e32)\",\"TH-67\":\"Phetchabun (\u0e40\u0e1e\u0e0a\u0e23\u0e1a\u0e39\u0e23\u0e13\u0e4c)\",\"TH-76\":\"Phetchaburi (\u0e40\u0e1e\u0e0a\u0e23\u0e1a\u0e38\u0e23\u0e35)\",\"TH-66\":\"Phichit (\u0e1e\u0e34\u0e08\u0e34\u0e15\u0e23)\",\"TH-65\":\"Phitsanulok (\u0e1e\u0e34\u0e29\u0e13\u0e38\u0e42\u0e25\u0e01)\",\"TH-54\":\"Phrae (\u0e41\u0e1e\u0e23\u0e48)\",\"TH-83\":\"Phuket (\u0e20\u0e39\u0e40\u0e01\u0e47\u0e15)\",\"TH-25\":\"Prachin Buri (\u0e1b\u0e23\u0e32\u0e08\u0e35\u0e19\u0e1a\u0e38\u0e23\u0e35)\",\"TH-77\":\"Prachuap Khiri Khan (\u0e1b\u0e23\u0e30\u0e08\u0e27\u0e1a\u0e04\u0e35\u0e23\u0e35\u0e02\u0e31\u0e19\u0e18\u0e4c)\",\"TH-85\":\"Ranong (\u0e23\u0e30\u0e19\u0e2d\u0e07)\",\"TH-70\":\"Ratchaburi (\u0e23\u0e32\u0e0a\u0e1a\u0e38\u0e23\u0e35)\",\"TH-21\":\"Rayong (\u0e23\u0e30\u0e22\u0e2d\u0e07)\",\"TH-45\":\"Roi Et (\u0e23\u0e49\u0e2d\u0e22\u0e40\u0e2d\u0e47\u0e14)\",\"TH-27\":\"Sa Kaeo (\u0e2a\u0e23\u0e30\u0e41\u0e01\u0e49\u0e27)\",\"TH-47\":\"Sakon Nakhon (\u0e2a\u0e01\u0e25\u0e19\u0e04\u0e23)\",\"TH-11\":\"Samut Prakan (\u0e2a\u0e21\u0e38\u0e17\u0e23\u0e1b\u0e23\u0e32\u0e01\u0e32\u0e23)\",\"TH-74\":\"Samut Sakhon (\u0e2a\u0e21\u0e38\u0e17\u0e23\u0e2a\u0e32\u0e04\u0e23)\",\"TH-75\":\"Samut Songkhram (\u0e2a\u0e21\u0e38\u0e17\u0e23\u0e2a\u0e07\u0e04\u0e23\u0e32\u0e21)\",\"TH-19\":\"Saraburi (\u0e2a\u0e23\u0e30\u0e1a\u0e38\u0e23\u0e35)\",\"TH-91\":\"Satun (\u0e2a\u0e15\u0e39\u0e25)\",\"TH-17\":\"Sing Buri (\u0e2a\u0e34\u0e07\u0e2b\u0e4c\u0e1a\u0e38\u0e23\u0e35)\",\"TH-33\":\"Sisaket (\u0e28\u0e23\u0e35\u0e2a\u0e30\u0e40\u0e01\u0e29)\",\"TH-90\":\"Songkhla (\u0e2a\u0e07\u0e02\u0e25\u0e32)\",\"TH-64\":\"Sukhothai (\u0e2a\u0e38\u0e42\u0e02\u0e17\u0e31\u0e22)\",\"TH-72\":\"Suphan Buri (\u0e2a\u0e38\u0e1e\u0e23\u0e23\u0e13\u0e1a\u0e38\u0e23\u0e35)\",\"TH-84\":\"Surat Thani (\u0e2a\u0e38\u0e23\u0e32\u0e29\u0e0e\u0e23\u0e4c\u0e18\u0e32\u0e19\u0e35)\",\"TH-32\":\"Surin (\u0e2a\u0e38\u0e23\u0e34\u0e19\u0e17\u0e23\u0e4c)\",\"TH-63\":\"Tak (\u0e15\u0e32\u0e01)\",\"TH-92\":\"Trang (\u0e15\u0e23\u0e31\u0e07)\",\"TH-23\":\"Trat (\u0e15\u0e23\u0e32\u0e14)\",\"TH-34\":\"Ubon Ratchathani (\u0e2d\u0e38\u0e1a\u0e25\u0e23\u0e32\u0e0a\u0e18\u0e32\u0e19\u0e35)\",\"TH-41\":\"Udon Thani (\u0e2d\u0e38\u0e14\u0e23\u0e18\u0e32\u0e19\u0e35)\",\"TH-61\":\"Uthai Thani (\u0e2d\u0e38\u0e17\u0e31\u0e22\u0e18\u0e32\u0e19\u0e35)\",\"TH-53\":\"Uttaradit (\u0e2d\u0e38\u0e15\u0e23\u0e14\u0e34\u0e15\u0e16\u0e4c)\",\"TH-95\":\"Yala (\u0e22\u0e30\u0e25\u0e32)\",\"TH-35\":\"Yasothon (\u0e22\u0e42\u0e2a\u0e18\u0e23)\"},\"US\":{\"AL\":\"Alabama\",\"AK\":\"Alaska\",\"AZ\":\"Arizona\",\"AR\":\"Arkansas\",\"CA\":\"California\",\"CO\":\"Colorado\",\"CT\":\"Connecticut\",\"DE\":\"Delaware\",\"DC\":\"District Of Columbia\",\"FL\":\"Florida\",\"GA\":\"Georgia\",\"HI\":\"Hawaii\",\"ID\":\"Idaho\",\"IL\":\"Illinois\",\"IN\":\"Indiana\",\"IA\":\"Iowa\",\"KS\":\"Kansas\",\"KY\":\"Kentucky\",\"LA\":\"Louisiana\",\"ME\":\"Maine\",\"MD\":\"Maryland\",\"MA\":\"Massachusetts\",\"MI\":\"Michigan\",\"MN\":\"Minnesota\",\"MS\":\"Mississippi\",\"MO\":\"Missouri\",\"MT\":\"Montana\",\"NE\":\"Nebraska\",\"NV\":\"Nevada\",\"NH\":\"New Hampshire\",\"NJ\":\"New Jersey\",\"NM\":\"New Mexico\",\"NY\":\"New York\",\"NC\":\"North Carolina\",\"ND\":\"North Dakota\",\"OH\":\"Ohio\",\"OK\":\"Oklahoma\",\"OR\":\"Oregon\",\"PA\":\"Pennsylvania\",\"RI\":\"Rhode Island\",\"SC\":\"South Carolina\",\"SD\":\"South Dakota\",\"TN\":\"Tennessee\",\"TX\":\"Texas\",\"UT\":\"Utah\",\"VT\":\"Vermont\",\"VA\":\"Virginia\",\"WA\":\"Washington\",\"WV\":\"West Virginia\",\"WI\":\"Wisconsin\",\"WY\":\"Wyoming\",\"AA\":\"Armed Forces (AA)\",\"AE\":\"Armed Forces (AE)\",\"AP\":\"Armed Forces (AP)\",\"AS\":\"American Samoa\",\"GU\":\"Guam\",\"MP\":\"Northern Mariana Islands\",\"PR\":\"Puerto Rico\",\"UM\":\"US Minor Outlying Islands\",\"VI\":\"US Virgin Islands\"}}","plugin_url":" ","ajax_url":"","ajax_loader_url":" \/assets\/images\/ajax-loader@2x.gif","i18n_select_state_text":"Select an option\u2026","i18n_required_rating_text":"Please select a rating","i18n_no_matching_variations_text":"Sorry, no products matched your selection. Please choose a different combination.","i18n_required_text":"required","i18n_view_cart":"View Cart \u2192","review_rating_required":"yes","update_order_review_nonce":"403b9a1684","apply_coupon_nonce":"7722106a96","option_guest_checkout":"yes","checkout_url":"","is_checkout":"0","update_shipping_method_nonce":"48fe5739ab","add_to_cart_nonce":"3c6a61f089","cart_url":" ","cart_redirect_after_add":"no"};';

            break;
        case 'wid':/**********Template Display***********/
            $bazarClassList['language-selector']['url']='/css/language-selector.css';
            $bazarClassList['language-selector']['external']=false;
//            $bazarClassList['reset-bootstrap']['url']='/css/reset-bootstrap.css';
//            $bazarClassList['reset-bootstrap']['external']=false;
            $bazarClassList['style']['url']='/css/style.css';
            $bazarClassList['style']['external']=false;
            $bazarClassList['thickbox-css']['url']='/css/thickbox/thickbox.css';
            $bazarClassList['thickbox-css']['external']=false;
            $bazarClassList['google-fonts-css']['url']="http://fonts.googleapis.com/css?family=Playfair+Display%7COpen+Sans+Condensed%3A300%7COpen+Sans%7CShadows+Into+Light%7COswald%7CPlay%7CMuli%7CArbutus+Slab%7CAbel&#038;ver=3.5.2";
            $bazarClassList['google-fonts-css']['external']=true;
            $bazarClassList['jquery-colorbox-css']['url']='/css/colorbox.css';
            $bazarClassList['jquery-colorbox-css']['external']=false;
            $bazarClassList['yith-magnifier-css']['url']='/css/yith_magnifier.css';
            $bazarClassList['yith-magnifier-css']['external']=false;
            $bazarClassList['yith_wcmg_frontend-css']['url']='/css/assets-frontend.css';
            $bazarClassList['yith_wcmg_frontend-css']['external']=false;
            $bazarClassList['yith-wcwl-user-main-css']['url']='/css/woocommerce/wishlist.css';
            $bazarClassList['yith-wcwl-user-main-css']['external']=false;
            $bazarClassList['woocommerce_prettyPhoto_css-css']['url']='/css/prettyPhoto.css';
            $bazarClassList['woocommerce_prettyPhoto_css-css']['external']=false;
            $bazarClassList['woocommerce_frontend_styles-css']['url']='/css/woocommerce/style.css';
            $bazarClassList['woocommerce_frontend_styles-css']['external']=false;
            $bazarClassList['styles-minified-css']['url']='/css/cache/style-28.css';
            $bazarClassList['styles-minified-css']['external']=false;
            $bazarClassList['custom-css']['url']='/css/custom.css';
            $bazarClassList['custom-css']['external']=false;
            $bazarClassList['cache-custom-css']['url']='/css/cache/custom-28.css';
            $bazarClassList['cache-custom-css']['external']=false;
            $bazarClassList['style-changer-css']['url']='/css/picker-celestino.css';
            $bazarClassList['style-changer-css']['external']=false;
            $bazarClassList['colorpicker-css']['url']='/css/colorpicker.css';
            $bazarClassList['colorpicker-css']['external']=false;

            $bazarJsList['comment-reply']['url']='/js/comment-reply.min.js';
            $bazarJsList['comment-reply']['external']=false;
            $bazarJsList['jquery-cookie']['url']='/js/jquery/jquery.cookie.js';
            $bazarJsList['jquery-cookie']['external']=false;
            $bazarJsList['colorpicker']['url']='/js/colorpicker.js';
            $bazarJsList['colorpicker']['external']=false;
            $bazarJsList['sitepress']['url']='/js/sitepress.js';
            $bazarJsList['sitepress']['external']=false;

            //$bazarJsButtom['wp-includes-thickbox']['url']='/js/wp-includes/thickbox.js';
            //$bazarJsButtom['wp-includes-thickbox']['external']=false;
            $bazarJsButtom['wp-includes-underscore']['url']='/js/wp-includes/underscore.min.js';
            $bazarJsButtom['wp-includes-underscore']['external']=false;
            $bazarJsButtom['wp-includes-shortcode']['url']='/js/wp-includes/shortcode.min.js';
            $bazarJsButtom['wp-includes-shortcode']['external']=false;
            $bazarJsButtom['media-upload']['url']='/js/media.upload.min.js';
            $bazarJsButtom['media-upload']['external']=false;
            $bazarJsButtom['jquery-commonlibraries']['url']='/js/jquery/jquery.commonlibraries.js';
            $bazarJsButtom['jquery-commonlibraries']['external']=false;
            $bazarJsButtom['jquery-layout']['url']='/js/jquery/jquery.layout.js';
            $bazarJsButtom['jquery-layout']['external']=false;
            $bazarJsButtom['jquery-custom']['url']='/js/jquery/jquery.custom.js';
            $bazarJsButtom['jquery-custom']['external']=false;
            $bazarJsButtom['woocompare']['url']='/js/woocompare.js';
            $bazarJsButtom['woocompare']['external']=false;
            $bazarJsButtom['jquery-colorbox']['url']='/js/jquery/jquery.colorbox-min.js';
            $bazarJsButtom['jquery-colorbox']['external']=false;
            $bazarJsButtom['responsive']['url']='/js/responsive.js';
            $bazarJsButtom['responsive']['external']=false;
            $bazarJsButtom['carouFredSel']['url']='/js/carouFredSel.js';
            $bazarJsButtom['carouFredSel']['external']=false;
            $bazarJsButtom['yith_magnifier']['url']='/js/yith_magnifier.js';
            $bazarJsButtom['yith_magnifier']['external']=false;
            $bazarJsButtom['frontend']['url']='/js/frontend.js';
            $bazarJsButtom['frontend']['external']=false;

            $bazarJsButtom['jquery-yith-wcwl']['url']='/js/jquery/jquery.yith-wcwl.js';
            $bazarJsButtom['jquery-yith-wcwl']['external']=false;
            $bazarJsButtom['twitter-text']['url']='/js/twitter-text.js';
            $bazarJsButtom['twitter-text']['external']=false;
            $bazarJsButtom['jquery-cycle']['url']='/js/jquery/jquery.cycle.min.js';
            $bazarJsButtom['jquery-cycle']['external']=false;
            $bazarJsButtom['core-shortcodes']['url']='/js/core/shortcodes.js';
            $bazarJsButtom['core-shortcodes']['external']=false;
            $bazarJsButtom['shortcodes']['url']='/js/shortcodes.js';
            $bazarJsButtom['shortcodes']['external']=false;
            $bazarJsButtom['widgets']['url']='/js/widgets.js';
            $bazarJsButtom['widgets']['external']=false;
            $bazarJsButtom['jq-cookie']['url']='/js/jq-cookie.js';
            $bazarJsButtom['jq-cookie']['external']=false;
            $bazarJsButtom['woocommerce2']['url']='/js/woocommerce.js';
            $bazarJsButtom['woocommerce2']['external']=false;
            $bazarJsButtom['add-to-cart']['url']='/js/add-to-cart.min.js';
            $bazarJsButtom['add-to-cart']['external']=false;
            $bazarJsButtom['jquery-prettyPhoto']['url']='/js/jquery/jquery.prettyPhoto.min.js';
            $bazarJsButtom['jquery-prettyPhoto-init']['external']=false;
            $bazarJsButtom['jquery-prettyPhoto-init']['url']='/js/jquery/jquery.prettyPhoto.init.min.js';
            $bazarJsButtom['jquery-prettyPhoto']['external']=false;
            $bazarJsButtom['single-product']['url']='/js/single-product.min.js';
            $bazarJsButtom['single-product']['external']=false;
            $bazarJsButtom['jquery-blockUI']['url']='/js/woocommerce/jquery.blockUI.min.js';
            $bazarJsButtom['jquery-blockUI']['external']=false;
            $bazarJsButtom['woocommerce']['url']='/js/woocommerce.min.js';
            $bazarJsButtom['woocommerce']['external']=false;
//            $bazarJsButtom['cart-fragments']['url']='/js/cart-fragments.min.js';
//            $bazarJsButtom['cart-fragments']['external']=false;
            $bazarJsButtom['jquery-placeholder']['url']='/js/jquery/jquery.placeholder.min.js';
            $bazarJsButtom['jquery-placeholder']['external']=false;
            $bazarJsButtom['changer-bazar']['url']='/js/changer-bazar.js';
            $bazarJsButtom['changer-bazar']['external']=false;
            $bazarJsButtom['yith-wcan-frontend']['url']='/js/yith-wcan-frontend.min.js';
            $bazarJsButtom['yith-wcan-frontend']['external']=false;
            $bazarJsButtom['jquery-elastislide']['url']='/js/jquery/jquery.elastislide.js';
            $bazarJsButtom['jquery-elastislide']['external']=false;
            $bazarJsButtom['jquery-selectbox']['url']='/js/jquery/jquery.selectbox.js';
            $bazarJsButtom['jquery-selectbox']['external']=false;

            $bazarCssBodyTag = 'single single-product no_js responsive woocommerce woocommerce-page';

            $bazarJsConfigButtom = 'var thickboxL10n = {"next":"Next >","prev":"< Prev","image":"Image","of":"of","close":"Close","noiframes":"This feature requires inline frames. You have iframes disabled or your browser does not support them.","loadingAnimation":" ","closeImage":" "};'."\n"
                . 'var l10n_handler = {"map_close":"[x] Close","map_open":"[x] Open"};'."\n"
                . 'var yith_woocompare = {"nonceadd":"2ff540915e","nonceremove":"e0a22b5f3d","ajaxurl":"","actionadd":"yith-woocompare-add-product","actionremove":"yith-woocompare-remove-product","actionview":"yith-woocompare-view-table","added_label":"Added","table_title":"Product Comparison","auto_open":"yes"};'."\n"
                . 'var yith_wcwl_l10n = {"out_of_stock":"Cannot add to the cart as product is Out of Stock!"};'."\n"
                . 'var yith_wcan = {"container":".products","pagination":".general-pagination","result_count":".woocommerce-result-count"};'."\n"
                . 'var woocommerce_params = {"countries":"{\"AF\":[],\"AT\":[],\"BE\":[],\"BI\":[],\"CZ\":[],\"DE\":[],\"DK\":[],\"FI\":[],\"FR\":[],\"HU\":[],\"IS\":[],\"IL\":[],\"KR\":[],\"NL\":[],\"NO\":[],\"PL\":[],\"PT\":[],\"SG\":[],\"SK\":[],\"SI\":[],\"LK\":[],\"SE\":[],\"VN\":[],\"AU\":{\"ACT\":\"Australian Capital Territory\",\"NSW\":\"New South Wales\",\"NT\":\"Northern Territory\",\"QLD\":\"Queensland\",\"SA\":\"South Australia\",\"TAS\":\"Tasmania\",\"VIC\":\"Victoria\",\"WA\":\"Western Australia\"},\"BR\":{\"AC\":\"Acre\",\"AL\":\"Alagoas\",\"AP\":\"Amap\u00e1\",\"AM\":\"Amazonas\",\"BH\":\"Bahia\",\"CE\":\"Cear\u00e1\",\"DF\":\"Distrito Federal\",\"ES\":\"Esp\u00edrito Santo\",\"GO\":\"Goi\u00e1s\",\"MA\":\"Maranh\u00e3o\",\"MT\":\"Mato Grosso\",\"MS\":\"Mato Grosso do Sul\",\"MG\":\"Minas Gerais\",\"PA\":\"Par\u00e1\",\"PB\":\"Para\u00edba\",\"PR\":\"Paran\u00e1\",\"PE\":\"Pernambuco\",\"PI\":\"Piau\u00ed\",\"RJ\":\"Rio de Janeiro\",\"RN\":\"Rio Grande do Norte\",\"RS\":\"Rio Grande do Sul\",\"RO\":\"Rond\u00f4nia\",\"RR\":\"Roraima\",\"SC\":\"Santa Catarina\",\"SP\":\"S\u00e3o Paulo\",\"SE\":\"Sergipe\",\"TO\":\"Tocantins\"},\"CA\":{\"AB\":\"Alberta\",\"BC\":\"British Columbia\",\"MB\":\"Manitoba\",\"NB\":\"New Brunswick\",\"NF\":\"Newfoundland\",\"NT\":\"Northwest Territories\",\"NS\":\"Nova Scotia\",\"NU\":\"Nunavut\",\"ON\":\"Ontario\",\"PE\":\"Prince Edward Island\",\"QC\":\"Quebec\",\"SK\":\"Saskatchewan\",\"YT\":\"Yukon Territory\"},\"CN\":{\"CN1\":\"Yunnan \\\/ \u4e91\u5357\",\"CN2\":\"Beijing \\\/ \u5317\u4eac\",\"CN3\":\"Tianjin \\\/ \u5929\u6d25\",\"CN4\":\"Hebei \\\/ \u6cb3\u5317\",\"CN5\":\"Shanxi \\\/ \u5c71\u897f\",\"CN6\":\"Inner Mongolia \\\/ \u5167\u8499\u53e4\",\"CN7\":\"Liaoning \\\/ \u8fbd\u5b81\",\"CN8\":\"Jilin \\\/ \u5409\u6797\",\"CN9\":\"Heilongjiang \\\/ \u9ed1\u9f99\u6c5f\",\"CN10\":\"Shanghai \\\/ \u4e0a\u6d77\",\"CN11\":\"Jiangsu \\\/ \u6c5f\u82cf\",\"CN12\":\"Zhejiang \\\/ \u6d59\u6c5f\",\"CN13\":\"Anhui \\\/ \u5b89\u5fbd\",\"CN14\":\"Fujian \\\/ \u798f\u5efa\",\"CN15\":\"Jiangxi \\\/ \u6c5f\u897f\",\"CN16\":\"Shandong \\\/ \u5c71\u4e1c\",\"CN17\":\"Henan \\\/ \u6cb3\u5357\",\"CN18\":\"Hubei \\\/ \u6e56\u5317\",\"CN19\":\"Hunan \\\/ \u6e56\u5357\",\"CN20\":\"Guangdong \\\/ \u5e7f\u4e1c\",\"CN21\":\"Guangxi Zhuang \\\/ \u5e7f\u897f\u58ee\u65cf\",\"CN22\":\"Hainan \\\/ \u6d77\u5357\",\"CN23\":\"Chongqing \\\/ \u91cd\u5e86\",\"CN24\":\"Sichuan \\\/ \u56db\u5ddd\",\"CN25\":\"Guizhou \\\/ \u8d35\u5dde\",\"CN26\":\"Shaanxi \\\/ \u9655\u897f\",\"CN27\":\"Gansu \\\/ \u7518\u8083\",\"CN28\":\"Qinghai \\\/ \u9752\u6d77\",\"CN29\":\"Ningxia Hui \\\/ \u5b81\u590f\",\"CN30\":\"Macau \\\/ \u6fb3\u95e8\",\"CN31\":\"Tibet \\\/ \u897f\u85cf\",\"CN32\":\"Xinjiang \\\/ \u65b0\u7586\"},\"HK\":{\"HONG KONG\":\"Hong Kong Island\",\"KOWLOON\":\"Kowloon\",\"NEW TERRITORIES\":\"New Territories\"},\"IN\":{\"AP\":\"Andra Pradesh\",\"AR\":\"Arunachal Pradesh\",\"AS\":\"Assam\",\"BR\":\"Bihar\",\"CT\":\"Chhattisgarh\",\"GA\":\"Goa\",\"GJ\":\"Gujarat\",\"HR\":\"Haryana\",\"HP\":\"Himachal Pradesh\",\"JK\":\"Jammu and Kashmir\",\"JH\":\"Jharkhand\",\"KA\":\"Karnataka\",\"KL\":\"Kerala\",\"MP\":\"Madhya Pradesh\",\"MH\":\"Maharashtra\",\"MN\":\"Manipur\",\"ML\":\"Meghalaya\",\"MZ\":\"Mizoram\",\"NL\":\"Nagaland\",\"OR\":\"Orissa\",\"PB\":\"Punjab\",\"RJ\":\"Rajasthan\",\"SK\":\"Sikkim\",\"TN\":\"Tamil Nadu\",\"TR\":\"Tripura\",\"UT\":\"Uttaranchal\",\"UP\":\"Uttar Pradesh\",\"WB\":\"West Bengal\",\"AN\":\"Andaman and Nicobar Islands\",\"CH\":\"Chandigarh\",\"DN\":\"Dadar and Nagar Haveli\",\"DD\":\"Daman and Diu\",\"DL\":\"Delhi\",\"LD\":\"Lakshadeep\",\"PY\":\"Pondicherry (Puducherry)\"},\"ID\":{\"AC\":\"Daerah Istimewa Aceh\",\"SU\":\"Sumatera Utara\",\"SB\":\"Sumatera Barat\",\"RI\":\"Riau\",\"KR\":\"Kepulauan Riau\",\"JA\":\"Jambi\",\"SS\":\"Sumatera Selatan\",\"BB\":\"Bangka Belitung\",\"BE\":\"Bengkulu\",\"LA\":\"Lampung\",\"JK\":\"DKI Jakarta\",\"JB\":\"Jawa Barat\",\"BT\":\"Banten\",\"JT\":\"Jawa Tengah\",\"JI\":\"Jawa Timur\",\"YO\":\"Daerah Istimewa Yogyakarta\",\"BA\":\"Bali\",\"NB\":\"Nusa Tenggara Barat\",\"NT\":\"Nusa Tenggara Timur\",\"KB\":\"Kalimantan Barat\",\"KT\":\"Kalimantan Tengah\",\"KI\":\"Kalimantan Timur\",\"KS\":\"Kalimantan Selatan\",\"KU\":\"Kalimantan Utara\",\"SA\":\"Sulawesi Utara\",\"ST\":\"Sulawesi Tengah\",\"SG\":\"Sulawesi Tenggara\",\"SR\":\"Sulawesi Barat\",\"SN\":\"Sulawesi Selatan\",\"GO\":\"Gorontalo\",\"MA\":\"Maluku\",\"MU\":\"Maluku Utara\",\"PA\":\"Papua\",\"PB\":\"Papua Barat\"},\"MY\":{\"JHR\":\"Johor\",\"KDH\":\"Kedah\",\"KTN\":\"Kelantan\",\"MLK\":\"Melaka\",\"NSN\":\"Negeri Sembilan\",\"PHG\":\"Pahang\",\"PRK\":\"Perak\",\"PLS\":\"Perlis\",\"PNG\":\"Pulau Pinang\",\"SBH\":\"Sabah\",\"SWK\":\"Sarawak\",\"SGR\":\"Selangor\",\"TRG\":\"Terengganu\",\"KUL\":\"W.P. Kuala Lumpur\",\"LBN\":\"W.P. Labuan\",\"PJY\":\"W.P. Putrajaya\"},\"NZ\":{\"NL\":\"Northland\",\"AK\":\"Auckland\",\"WA\":\"Waikato\",\"BP\":\"Bay of Plenty\",\"TK\":\"Taranaki\",\"HB\":\"Hawke\u2019s Bay\",\"MW\":\"Manawatu-Wanganui\",\"WE\":\"Wellington\",\"NS\":\"Nelson\",\"MB\":\"Marlborough\",\"TM\":\"Tasman\",\"WC\":\"West Coast\",\"CT\":\"Canterbury\",\"OT\":\"Otago\",\"SL\":\"Southland\"},\"ZA\":{\"EC\":\"Eastern Cape\",\"FS\":\"Free State\",\"GP\":\"Gauteng\",\"KZN\":\"KwaZulu-Natal\",\"LP\":\"Limpopo\",\"MP\":\"Mpumalanga\",\"NC\":\"Northern Cape\",\"NW\":\"North West\",\"WC\":\"Western Cape\"},\"TH\":{\"TH-37\":\"Amnat Charoen (\u0e2d\u0e33\u0e19\u0e32\u0e08\u0e40\u0e08\u0e23\u0e34\u0e0d)\",\"TH-15\":\"Ang Thong (\u0e2d\u0e48\u0e32\u0e07\u0e17\u0e2d\u0e07)\",\"TH-14\":\"Ayutthaya (\u0e1e\u0e23\u0e30\u0e19\u0e04\u0e23\u0e28\u0e23\u0e35\u0e2d\u0e22\u0e38\u0e18\u0e22\u0e32)\",\"TH-10\":\"Bangkok (\u0e01\u0e23\u0e38\u0e07\u0e40\u0e17\u0e1e\u0e21\u0e2b\u0e32\u0e19\u0e04\u0e23)\",\"TH-38\":\"Bueng Kan (\u0e1a\u0e36\u0e07\u0e01\u0e32\u0e2c)\",\"TH-31\":\"Buri Ram (\u0e1a\u0e38\u0e23\u0e35\u0e23\u0e31\u0e21\u0e22\u0e4c)\",\"TH-24\":\"Chachoengsao (\u0e09\u0e30\u0e40\u0e0a\u0e34\u0e07\u0e40\u0e17\u0e23\u0e32)\",\"TH-18\":\"Chai Nat (\u0e0a\u0e31\u0e22\u0e19\u0e32\u0e17)\",\"TH-36\":\"Chaiyaphum (\u0e0a\u0e31\u0e22\u0e20\u0e39\u0e21\u0e34)\",\"TH-22\":\"Chanthaburi (\u0e08\u0e31\u0e19\u0e17\u0e1a\u0e38\u0e23\u0e35)\",\"TH-50\":\"Chiang Mai (\u0e40\u0e0a\u0e35\u0e22\u0e07\u0e43\u0e2b\u0e21\u0e48)\",\"TH-57\":\"Chiang Rai (\u0e40\u0e0a\u0e35\u0e22\u0e07\u0e23\u0e32\u0e22)\",\"TH-20\":\"Chonburi (\u0e0a\u0e25\u0e1a\u0e38\u0e23\u0e35)\",\"TH-86\":\"Chumphon (\u0e0a\u0e38\u0e21\u0e1e\u0e23)\",\"TH-46\":\"Kalasin (\u0e01\u0e32\u0e2c\u0e2a\u0e34\u0e19\u0e18\u0e38\u0e4c)\",\"TH-62\":\"Kamphaeng Phet (\u0e01\u0e33\u0e41\u0e1e\u0e07\u0e40\u0e1e\u0e0a\u0e23)\",\"TH-71\":\"Kanchanaburi (\u0e01\u0e32\u0e0d\u0e08\u0e19\u0e1a\u0e38\u0e23\u0e35)\",\"TH-40\":\"Khon Kaen (\u0e02\u0e2d\u0e19\u0e41\u0e01\u0e48\u0e19)\",\"TH-81\":\"Krabi (\u0e01\u0e23\u0e30\u0e1a\u0e35\u0e48)\",\"TH-52\":\"Lampang (\u0e25\u0e33\u0e1b\u0e32\u0e07)\",\"TH-51\":\"Lamphun (\u0e25\u0e33\u0e1e\u0e39\u0e19)\",\"TH-42\":\"Loei (\u0e40\u0e25\u0e22)\",\"TH-16\":\"Lopburi (\u0e25\u0e1e\u0e1a\u0e38\u0e23\u0e35)\",\"TH-58\":\"Mae Hong Son (\u0e41\u0e21\u0e48\u0e2e\u0e48\u0e2d\u0e07\u0e2a\u0e2d\u0e19)\",\"TH-44\":\"Maha Sarakham (\u0e21\u0e2b\u0e32\u0e2a\u0e32\u0e23\u0e04\u0e32\u0e21)\",\"TH-49\":\"Mukdahan (\u0e21\u0e38\u0e01\u0e14\u0e32\u0e2b\u0e32\u0e23)\",\"TH-26\":\"Nakhon Nayok (\u0e19\u0e04\u0e23\u0e19\u0e32\u0e22\u0e01)\",\"TH-73\":\"Nakhon Pathom (\u0e19\u0e04\u0e23\u0e1b\u0e10\u0e21)\",\"TH-48\":\"Nakhon Phanom (\u0e19\u0e04\u0e23\u0e1e\u0e19\u0e21)\",\"TH-30\":\"Nakhon Ratchasima (\u0e19\u0e04\u0e23\u0e23\u0e32\u0e0a\u0e2a\u0e35\u0e21\u0e32)\",\"TH-60\":\"Nakhon Sawan (\u0e19\u0e04\u0e23\u0e2a\u0e27\u0e23\u0e23\u0e04\u0e4c)\",\"TH-80\":\"Nakhon Si Thammarat (\u0e19\u0e04\u0e23\u0e28\u0e23\u0e35\u0e18\u0e23\u0e23\u0e21\u0e23\u0e32\u0e0a)\",\"TH-55\":\"Nan (\u0e19\u0e48\u0e32\u0e19)\",\"TH-96\":\"Narathiwat (\u0e19\u0e23\u0e32\u0e18\u0e34\u0e27\u0e32\u0e2a)\",\"TH-39\":\"Nong Bua Lam Phu (\u0e2b\u0e19\u0e2d\u0e07\u0e1a\u0e31\u0e27\u0e25\u0e33\u0e20\u0e39)\",\"TH-43\":\"Nong Khai (\u0e2b\u0e19\u0e2d\u0e07\u0e04\u0e32\u0e22)\",\"TH-12\":\"Nonthaburi (\u0e19\u0e19\u0e17\u0e1a\u0e38\u0e23\u0e35)\",\"TH-13\":\"Pathum Thani (\u0e1b\u0e17\u0e38\u0e21\u0e18\u0e32\u0e19\u0e35)\",\"TH-94\":\"Pattani (\u0e1b\u0e31\u0e15\u0e15\u0e32\u0e19\u0e35)\",\"TH-82\":\"Phang Nga (\u0e1e\u0e31\u0e07\u0e07\u0e32)\",\"TH-93\":\"Phatthalung (\u0e1e\u0e31\u0e17\u0e25\u0e38\u0e07)\",\"TH-56\":\"Phayao (\u0e1e\u0e30\u0e40\u0e22\u0e32)\",\"TH-67\":\"Phetchabun (\u0e40\u0e1e\u0e0a\u0e23\u0e1a\u0e39\u0e23\u0e13\u0e4c)\",\"TH-76\":\"Phetchaburi (\u0e40\u0e1e\u0e0a\u0e23\u0e1a\u0e38\u0e23\u0e35)\",\"TH-66\":\"Phichit (\u0e1e\u0e34\u0e08\u0e34\u0e15\u0e23)\",\"TH-65\":\"Phitsanulok (\u0e1e\u0e34\u0e29\u0e13\u0e38\u0e42\u0e25\u0e01)\",\"TH-54\":\"Phrae (\u0e41\u0e1e\u0e23\u0e48)\",\"TH-83\":\"Phuket (\u0e20\u0e39\u0e40\u0e01\u0e47\u0e15)\",\"TH-25\":\"Prachin Buri (\u0e1b\u0e23\u0e32\u0e08\u0e35\u0e19\u0e1a\u0e38\u0e23\u0e35)\",\"TH-77\":\"Prachuap Khiri Khan (\u0e1b\u0e23\u0e30\u0e08\u0e27\u0e1a\u0e04\u0e35\u0e23\u0e35\u0e02\u0e31\u0e19\u0e18\u0e4c)\",\"TH-85\":\"Ranong (\u0e23\u0e30\u0e19\u0e2d\u0e07)\",\"TH-70\":\"Ratchaburi (\u0e23\u0e32\u0e0a\u0e1a\u0e38\u0e23\u0e35)\",\"TH-21\":\"Rayong (\u0e23\u0e30\u0e22\u0e2d\u0e07)\",\"TH-45\":\"Roi Et (\u0e23\u0e49\u0e2d\u0e22\u0e40\u0e2d\u0e47\u0e14)\",\"TH-27\":\"Sa Kaeo (\u0e2a\u0e23\u0e30\u0e41\u0e01\u0e49\u0e27)\",\"TH-47\":\"Sakon Nakhon (\u0e2a\u0e01\u0e25\u0e19\u0e04\u0e23)\",\"TH-11\":\"Samut Prakan (\u0e2a\u0e21\u0e38\u0e17\u0e23\u0e1b\u0e23\u0e32\u0e01\u0e32\u0e23)\",\"TH-74\":\"Samut Sakhon (\u0e2a\u0e21\u0e38\u0e17\u0e23\u0e2a\u0e32\u0e04\u0e23)\",\"TH-75\":\"Samut Songkhram (\u0e2a\u0e21\u0e38\u0e17\u0e23\u0e2a\u0e07\u0e04\u0e23\u0e32\u0e21)\",\"TH-19\":\"Saraburi (\u0e2a\u0e23\u0e30\u0e1a\u0e38\u0e23\u0e35)\",\"TH-91\":\"Satun (\u0e2a\u0e15\u0e39\u0e25)\",\"TH-17\":\"Sing Buri (\u0e2a\u0e34\u0e07\u0e2b\u0e4c\u0e1a\u0e38\u0e23\u0e35)\",\"TH-33\":\"Sisaket (\u0e28\u0e23\u0e35\u0e2a\u0e30\u0e40\u0e01\u0e29)\",\"TH-90\":\"Songkhla (\u0e2a\u0e07\u0e02\u0e25\u0e32)\",\"TH-64\":\"Sukhothai (\u0e2a\u0e38\u0e42\u0e02\u0e17\u0e31\u0e22)\",\"TH-72\":\"Suphan Buri (\u0e2a\u0e38\u0e1e\u0e23\u0e23\u0e13\u0e1a\u0e38\u0e23\u0e35)\",\"TH-84\":\"Surat Thani (\u0e2a\u0e38\u0e23\u0e32\u0e29\u0e0e\u0e23\u0e4c\u0e18\u0e32\u0e19\u0e35)\",\"TH-32\":\"Surin (\u0e2a\u0e38\u0e23\u0e34\u0e19\u0e17\u0e23\u0e4c)\",\"TH-63\":\"Tak (\u0e15\u0e32\u0e01)\",\"TH-92\":\"Trang (\u0e15\u0e23\u0e31\u0e07)\",\"TH-23\":\"Trat (\u0e15\u0e23\u0e32\u0e14)\",\"TH-34\":\"Ubon Ratchathani (\u0e2d\u0e38\u0e1a\u0e25\u0e23\u0e32\u0e0a\u0e18\u0e32\u0e19\u0e35)\",\"TH-41\":\"Udon Thani (\u0e2d\u0e38\u0e14\u0e23\u0e18\u0e32\u0e19\u0e35)\",\"TH-61\":\"Uthai Thani (\u0e2d\u0e38\u0e17\u0e31\u0e22\u0e18\u0e32\u0e19\u0e35)\",\"TH-53\":\"Uttaradit (\u0e2d\u0e38\u0e15\u0e23\u0e14\u0e34\u0e15\u0e16\u0e4c)\",\"TH-95\":\"Yala (\u0e22\u0e30\u0e25\u0e32)\",\"TH-35\":\"Yasothon (\u0e22\u0e42\u0e2a\u0e18\u0e23)\"},\"US\":{\"AL\":\"Alabama\",\"AK\":\"Alaska\",\"AZ\":\"Arizona\",\"AR\":\"Arkansas\",\"CA\":\"California\",\"CO\":\"Colorado\",\"CT\":\"Connecticut\",\"DE\":\"Delaware\",\"DC\":\"District Of Columbia\",\"FL\":\"Florida\",\"GA\":\"Georgia\",\"HI\":\"Hawaii\",\"ID\":\"Idaho\",\"IL\":\"Illinois\",\"IN\":\"Indiana\",\"IA\":\"Iowa\",\"KS\":\"Kansas\",\"KY\":\"Kentucky\",\"LA\":\"Louisiana\",\"ME\":\"Maine\",\"MD\":\"Maryland\",\"MA\":\"Massachusetts\",\"MI\":\"Michigan\",\"MN\":\"Minnesota\",\"MS\":\"Mississippi\",\"MO\":\"Missouri\",\"MT\":\"Montana\",\"NE\":\"Nebraska\",\"NV\":\"Nevada\",\"NH\":\"New Hampshire\",\"NJ\":\"New Jersey\",\"NM\":\"New Mexico\",\"NY\":\"New York\",\"NC\":\"North Carolina\",\"ND\":\"North Dakota\",\"OH\":\"Ohio\",\"OK\":\"Oklahoma\",\"OR\":\"Oregon\",\"PA\":\"Pennsylvania\",\"RI\":\"Rhode Island\",\"SC\":\"South Carolina\",\"SD\":\"South Dakota\",\"TN\":\"Tennessee\",\"TX\":\"Texas\",\"UT\":\"Utah\",\"VT\":\"Vermont\",\"VA\":\"Virginia\",\"WA\":\"Washington\",\"WV\":\"West Virginia\",\"WI\":\"Wisconsin\",\"WY\":\"Wyoming\",\"AA\":\"Armed Forces (AA)\",\"AE\":\"Armed Forces (AE)\",\"AP\":\"Armed Forces (AP)\",\"AS\":\"American Samoa\",\"GU\":\"Guam\",\"MP\":\"Northern Mariana Islands\",\"PR\":\"Puerto Rico\",\"UM\":\"US Minor Outlying Islands\",\"VI\":\"US Virgin Islands\"}}","plugin_url":" ","ajax_url":"","ajax_loader_url":" \/assets\/images\/ajax-loader@2x.gif","i18n_select_state_text":"Select an option\u2026","i18n_required_rating_text":"Please select a rating","i18n_no_matching_variations_text":"Sorry, no products matched your selection. Please choose a different combination.","i18n_required_text":"required","i18n_view_cart":"View Cart \u2192","review_rating_required":"yes","update_order_review_nonce":"403b9a1684","apply_coupon_nonce":"7722106a96","option_guest_checkout":"yes","checkout_url":"","is_checkout":"0","update_shipping_method_nonce":"48fe5739ab","add_to_cart_nonce":"3c6a61f089","cart_url":" ","cart_redirect_after_add":"no"};';

            break;
        case 'cart':/**********Cart***********/
            $bazarClassList['language-selector']['url']='/css/language-selector.css';
            $bazarClassList['language-selector']['external']=false;
//            $bazarClassList['reset-bootstrap']['url']='/css/reset-bootstrap.css';
//            $bazarClassList['reset-bootstrap']['external']=false;
            $bazarClassList['style']['url']='/css/style.css';
            $bazarClassList['style']['external']=false;
            $bazarClassList['thickbox-css']['url']='/css/thickbox/thickbox.css';
            $bazarClassList['thickbox-css']['external']=false;
            $bazarClassList['google-fonts-css']['url']="http://fonts.googleapis.com/css?family=Playfair+Display%7COpen+Sans+Condensed%3A300%7COpen+Sans%7CShadows+Into+Light%7COswald%7CPlay%7CMuli%7CArbutus+Slab%7CAbel&#038;ver=3.5.2";
            $bazarClassList['google-fonts-css']['external']=true;
            $bazarClassList['open-sans-font-css']['url']="//fonts.googleapis.com/css?family=Open+Sans%3A400%2C700%2C600&#038;ver=3.5.2";
            $bazarClassList['open-sans-font-css']['external']=true;
            $bazarClassList['yith-theme-banner-css']['url']='/css/yit.css';
            $bazarClassList['yith-theme-banner-css']['external']=false;
            $bazarClassList['poshytip-css']['url']='/css/poshytip.css';
            $bazarClassList['poshytip-css']['external']=false;
            $bazarClassList['jquery-colorbox-css']['url']='/css/colorbox.css';
            $bazarClassList['jquery-colorbox-css']['external']=false;
            $bazarClassList['yith-wcwl-user-main-css']['url']='/css/woocommerce/wishlist.css';
            $bazarClassList['yith-wcwl-user-main-css']['external']=false;
            $bazarClassList['woocommerce_frontend_styles-css']['url']='/css/woocommerce/style.css';
            $bazarClassList['woocommerce_frontend_styles-css']['external']=false;
            $bazarClassList['styles-minified-css']['url']='/css/cache/style-28.css';
            $bazarClassList['styles-minified-css']['external']=false;
            $bazarClassList['custom-css']['url']='/css/custom.css';
            $bazarClassList['custom-css']['external']=false;
            $bazarClassList['cache-custom-css']['url']='/css/cache/custom-28.css';
            $bazarClassList['cache-custom-css']['external']=false;
            $bazarClassList['style-changer-css']['url']='/css/picker-celestino.css';
            $bazarClassList['style-changer-css']['external']=false;
            $bazarClassList['colorpicker-css']['url']='/css/colorpicker.css';
            $bazarClassList['colorpicker-css']['external']=false;

            $bazarJsList['comment-reply']['url']='/js/comment-reply.min.js';
            $bazarJsList['comment-reply']['external']=false;
            $bazarJsList['jquery-poshytip']['url']='/js/jquery/jquery.poshytip.min.js';
            $bazarJsList['jquery-poshytip']['external']=false;
            $bazarJsList['jquery-cookie']['url']='/js/jquery/jquery.cookie.js';
            $bazarJsList['jquery-cookie']['external']=false;
            $bazarJsList['colorpicker']['url']='/js/colorpicker.js';
            $bazarJsList['colorpicker']['external']=false;
            $bazarJsList['sitepress']['url']='/js/sitepress.js';
            $bazarJsList['sitepress']['external']=false;

            //$bazarJsButtom['wp-includes-thickbox']['url']='/js/wp-includes/thickbox.js';
            //$bazarJsButtom['wp-includes-thickbox']['external']=false;
            $bazarJsButtom['wp-includes-underscore']['url']='/js/wp-includes/underscore.min.js';
            $bazarJsButtom['wp-includes-underscore']['external']=false;
            $bazarJsButtom['wp-includes-shortcode']['url']='/js/wp-includes/shortcode.min.js';
            $bazarJsButtom['wp-includes-shortcode']['external']=false;
            $bazarJsButtom['media-upload']['url']='/js/media.upload.min.js';
            $bazarJsButtom['media-upload']['external']=false;
            $bazarJsButtom['jquery-commonlibraries']['url']='/js/jquery/jquery.commonlibraries.js';
            $bazarJsButtom['jquery-commonlibraries']['external']=false;
            $bazarJsButtom['jquery-layout']['url']='/js/jquery/jquery.layout.js';
            $bazarJsButtom['jquery-layout']['external']=false;
            $bazarJsButtom['jquery-custom']['url']='/js/jquery/jquery.custom.js';
            $bazarJsButtom['jquery-custom']['external']=false;
            $bazarJsButtom['jq-cookie']['url']='/js/jq-cookie.js';
            $bazarJsButtom['jq-cookie']['external']=false;
            $bazarJsButtom['woocompare']['url']='/js/woocompare.js';
            $bazarJsButtom['woocompare']['external']=false;
            $bazarJsButtom['jquery-colorbox']['url']='/js/jquery/jquery.colorbox-min.js';
            $bazarJsButtom['jquery-colorbox']['external']=false;
            $bazarJsButtom['responsive']['url']='/js/responsive.js';
            $bazarJsButtom['responsive']['external']=false;

            $bazarJsButtom['jquery-yith-wcwl']['url']='/js/jquery/jquery.yith-wcwl.js';
            $bazarJsButtom['jquery-yith-wcwl']['external']=false;
            $bazarJsButtom['twitter-text']['url']='/js/twitter-text.js';
            $bazarJsButtom['twitter-text']['external']=false;
            $bazarJsButtom['jquery-cycle']['url']='/js/jquery/jquery.cycle.min.js';
            $bazarJsButtom['jquery-cycle']['external']=false;
            $bazarJsButtom['core-shortcodes']['url']='/js/core/shortcodes.js';
            $bazarJsButtom['core-shortcodes']['external']=false;
            $bazarJsButtom['shortcodes']['url']='/js/shortcodes.js';
            $bazarJsButtom['shortcodes']['external']=false;
            $bazarJsButtom['widgets']['url']='/js/widgets.js';
            $bazarJsButtom['widgets']['external']=false;

            $bazarJsButtom['woocommerce2']['url']='/js/woocommerce.js';
            $bazarJsButtom['woocommerce2']['external']=false;
            $bazarJsButtom['add-to-cart']['url']='/js/add-to-cart.min.js';
            $bazarJsButtom['add-to-cart']['external']=false;
            $bazarJsButtom['cart']['url']='/js/cart.min.js';
            $bazarJsButtom['add-to-cart']['external']=false;

            $bazarJsButtom['jquery-blockUI']['url']='/js/woocommerce/jquery.blockUI.min.js';
            $bazarJsButtom['jquery-blockUI']['external']=false;
            $bazarJsButtom['woocommerce']['url']='/js/woocommerce.min.js';
            $bazarJsButtom['woocommerce']['external']=false;
//            $bazarJsButtom['cart-fragments']['url']='/js/cart-fragments.min.js';
//            $bazarJsButtom['cart-fragments']['external']=false;
            $bazarJsButtom['jquery-placeholder']['url']='/js/jquery/jquery.placeholder.min.js';
            $bazarJsButtom['jquery-placeholder']['external']=false;
            $bazarJsButtom['changer-bazar']['url']='/js/changer-bazar.js';
            $bazarJsButtom['changer-bazar']['external']=false;
            $bazarJsButtom['yith-wcan-frontend']['url']='/js/yith-wcan-frontend.min.js';
            $bazarJsButtom['yith-wcan-frontend']['external']=false;

            $bazarCssBodyTag = 'page page-template-default no_js responsive stretched woocommerce-cart woocommerce-page';

            $bazarJsConfigButtom = 'var thickboxL10n = {"next":"Next >","prev":"< Prev","image":"Image","of":"of","close":"Close","noiframes":"This feature requires inline frames. You have iframes disabled or your browser does not support them.","loadingAnimation":" ","closeImage":" "};'."\n"
                . 'var l10n_handler = {"map_close":"[x] Close","map_open":"[x] Open"};'."\n"
                . 'var yith_woocompare = {"nonceadd":"2ff540915e","nonceremove":"e0a22b5f3d","ajaxurl":"","actionadd":"yith-woocompare-add-product","actionremove":"yith-woocompare-remove-product","actionview":"yith-woocompare-view-table","added_label":"Added","table_title":"Product Comparison","auto_open":"yes"};'."\n"
                . 'var yith_wcwl_l10n = {"out_of_stock":"Cannot add to the cart as product is Out of Stock!"};'."\n"
                . 'var yith_wcan = {"container":".products","pagination":".general-pagination","result_count":".woocommerce-result-count"};'."\n"
                . 'var woocommerce_params = {"countries":"{\"AF\":[],\"AT\":[],\"BE\":[],\"BI\":[],\"CZ\":[],\"DE\":[],\"DK\":[],\"FI\":[],\"FR\":[],\"HU\":[],\"IS\":[],\"IL\":[],\"KR\":[],\"NL\":[],\"NO\":[],\"PL\":[],\"PT\":[],\"SG\":[],\"SK\":[],\"SI\":[],\"LK\":[],\"SE\":[],\"VN\":[],\"AU\":{\"ACT\":\"Australian Capital Territory\",\"NSW\":\"New South Wales\",\"NT\":\"Northern Territory\",\"QLD\":\"Queensland\",\"SA\":\"South Australia\",\"TAS\":\"Tasmania\",\"VIC\":\"Victoria\",\"WA\":\"Western Australia\"},\"BR\":{\"AC\":\"Acre\",\"AL\":\"Alagoas\",\"AP\":\"Amap\u00e1\",\"AM\":\"Amazonas\",\"BH\":\"Bahia\",\"CE\":\"Cear\u00e1\",\"DF\":\"Distrito Federal\",\"ES\":\"Esp\u00edrito Santo\",\"GO\":\"Goi\u00e1s\",\"MA\":\"Maranh\u00e3o\",\"MT\":\"Mato Grosso\",\"MS\":\"Mato Grosso do Sul\",\"MG\":\"Minas Gerais\",\"PA\":\"Par\u00e1\",\"PB\":\"Para\u00edba\",\"PR\":\"Paran\u00e1\",\"PE\":\"Pernambuco\",\"PI\":\"Piau\u00ed\",\"RJ\":\"Rio de Janeiro\",\"RN\":\"Rio Grande do Norte\",\"RS\":\"Rio Grande do Sul\",\"RO\":\"Rond\u00f4nia\",\"RR\":\"Roraima\",\"SC\":\"Santa Catarina\",\"SP\":\"S\u00e3o Paulo\",\"SE\":\"Sergipe\",\"TO\":\"Tocantins\"},\"CA\":{\"AB\":\"Alberta\",\"BC\":\"British Columbia\",\"MB\":\"Manitoba\",\"NB\":\"New Brunswick\",\"NF\":\"Newfoundland\",\"NT\":\"Northwest Territories\",\"NS\":\"Nova Scotia\",\"NU\":\"Nunavut\",\"ON\":\"Ontario\",\"PE\":\"Prince Edward Island\",\"QC\":\"Quebec\",\"SK\":\"Saskatchewan\",\"YT\":\"Yukon Territory\"},\"CN\":{\"CN1\":\"Yunnan \\\/ \u4e91\u5357\",\"CN2\":\"Beijing \\\/ \u5317\u4eac\",\"CN3\":\"Tianjin \\\/ \u5929\u6d25\",\"CN4\":\"Hebei \\\/ \u6cb3\u5317\",\"CN5\":\"Shanxi \\\/ \u5c71\u897f\",\"CN6\":\"Inner Mongolia \\\/ \u5167\u8499\u53e4\",\"CN7\":\"Liaoning \\\/ \u8fbd\u5b81\",\"CN8\":\"Jilin \\\/ \u5409\u6797\",\"CN9\":\"Heilongjiang \\\/ \u9ed1\u9f99\u6c5f\",\"CN10\":\"Shanghai \\\/ \u4e0a\u6d77\",\"CN11\":\"Jiangsu \\\/ \u6c5f\u82cf\",\"CN12\":\"Zhejiang \\\/ \u6d59\u6c5f\",\"CN13\":\"Anhui \\\/ \u5b89\u5fbd\",\"CN14\":\"Fujian \\\/ \u798f\u5efa\",\"CN15\":\"Jiangxi \\\/ \u6c5f\u897f\",\"CN16\":\"Shandong \\\/ \u5c71\u4e1c\",\"CN17\":\"Henan \\\/ \u6cb3\u5357\",\"CN18\":\"Hubei \\\/ \u6e56\u5317\",\"CN19\":\"Hunan \\\/ \u6e56\u5357\",\"CN20\":\"Guangdong \\\/ \u5e7f\u4e1c\",\"CN21\":\"Guangxi Zhuang \\\/ \u5e7f\u897f\u58ee\u65cf\",\"CN22\":\"Hainan \\\/ \u6d77\u5357\",\"CN23\":\"Chongqing \\\/ \u91cd\u5e86\",\"CN24\":\"Sichuan \\\/ \u56db\u5ddd\",\"CN25\":\"Guizhou \\\/ \u8d35\u5dde\",\"CN26\":\"Shaanxi \\\/ \u9655\u897f\",\"CN27\":\"Gansu \\\/ \u7518\u8083\",\"CN28\":\"Qinghai \\\/ \u9752\u6d77\",\"CN29\":\"Ningxia Hui \\\/ \u5b81\u590f\",\"CN30\":\"Macau \\\/ \u6fb3\u95e8\",\"CN31\":\"Tibet \\\/ \u897f\u85cf\",\"CN32\":\"Xinjiang \\\/ \u65b0\u7586\"},\"HK\":{\"HONG KONG\":\"Hong Kong Island\",\"KOWLOON\":\"Kowloon\",\"NEW TERRITORIES\":\"New Territories\"},\"IN\":{\"AP\":\"Andra Pradesh\",\"AR\":\"Arunachal Pradesh\",\"AS\":\"Assam\",\"BR\":\"Bihar\",\"CT\":\"Chhattisgarh\",\"GA\":\"Goa\",\"GJ\":\"Gujarat\",\"HR\":\"Haryana\",\"HP\":\"Himachal Pradesh\",\"JK\":\"Jammu and Kashmir\",\"JH\":\"Jharkhand\",\"KA\":\"Karnataka\",\"KL\":\"Kerala\",\"MP\":\"Madhya Pradesh\",\"MH\":\"Maharashtra\",\"MN\":\"Manipur\",\"ML\":\"Meghalaya\",\"MZ\":\"Mizoram\",\"NL\":\"Nagaland\",\"OR\":\"Orissa\",\"PB\":\"Punjab\",\"RJ\":\"Rajasthan\",\"SK\":\"Sikkim\",\"TN\":\"Tamil Nadu\",\"TR\":\"Tripura\",\"UT\":\"Uttaranchal\",\"UP\":\"Uttar Pradesh\",\"WB\":\"West Bengal\",\"AN\":\"Andaman and Nicobar Islands\",\"CH\":\"Chandigarh\",\"DN\":\"Dadar and Nagar Haveli\",\"DD\":\"Daman and Diu\",\"DL\":\"Delhi\",\"LD\":\"Lakshadeep\",\"PY\":\"Pondicherry (Puducherry)\"},\"ID\":{\"AC\":\"Daerah Istimewa Aceh\",\"SU\":\"Sumatera Utara\",\"SB\":\"Sumatera Barat\",\"RI\":\"Riau\",\"KR\":\"Kepulauan Riau\",\"JA\":\"Jambi\",\"SS\":\"Sumatera Selatan\",\"BB\":\"Bangka Belitung\",\"BE\":\"Bengkulu\",\"LA\":\"Lampung\",\"JK\":\"DKI Jakarta\",\"JB\":\"Jawa Barat\",\"BT\":\"Banten\",\"JT\":\"Jawa Tengah\",\"JI\":\"Jawa Timur\",\"YO\":\"Daerah Istimewa Yogyakarta\",\"BA\":\"Bali\",\"NB\":\"Nusa Tenggara Barat\",\"NT\":\"Nusa Tenggara Timur\",\"KB\":\"Kalimantan Barat\",\"KT\":\"Kalimantan Tengah\",\"KI\":\"Kalimantan Timur\",\"KS\":\"Kalimantan Selatan\",\"KU\":\"Kalimantan Utara\",\"SA\":\"Sulawesi Utara\",\"ST\":\"Sulawesi Tengah\",\"SG\":\"Sulawesi Tenggara\",\"SR\":\"Sulawesi Barat\",\"SN\":\"Sulawesi Selatan\",\"GO\":\"Gorontalo\",\"MA\":\"Maluku\",\"MU\":\"Maluku Utara\",\"PA\":\"Papua\",\"PB\":\"Papua Barat\"},\"MY\":{\"JHR\":\"Johor\",\"KDH\":\"Kedah\",\"KTN\":\"Kelantan\",\"MLK\":\"Melaka\",\"NSN\":\"Negeri Sembilan\",\"PHG\":\"Pahang\",\"PRK\":\"Perak\",\"PLS\":\"Perlis\",\"PNG\":\"Pulau Pinang\",\"SBH\":\"Sabah\",\"SWK\":\"Sarawak\",\"SGR\":\"Selangor\",\"TRG\":\"Terengganu\",\"KUL\":\"W.P. Kuala Lumpur\",\"LBN\":\"W.P. Labuan\",\"PJY\":\"W.P. Putrajaya\"},\"NZ\":{\"NL\":\"Northland\",\"AK\":\"Auckland\",\"WA\":\"Waikato\",\"BP\":\"Bay of Plenty\",\"TK\":\"Taranaki\",\"HB\":\"Hawke\u2019s Bay\",\"MW\":\"Manawatu-Wanganui\",\"WE\":\"Wellington\",\"NS\":\"Nelson\",\"MB\":\"Marlborough\",\"TM\":\"Tasman\",\"WC\":\"West Coast\",\"CT\":\"Canterbury\",\"OT\":\"Otago\",\"SL\":\"Southland\"},\"ZA\":{\"EC\":\"Eastern Cape\",\"FS\":\"Free State\",\"GP\":\"Gauteng\",\"KZN\":\"KwaZulu-Natal\",\"LP\":\"Limpopo\",\"MP\":\"Mpumalanga\",\"NC\":\"Northern Cape\",\"NW\":\"North West\",\"WC\":\"Western Cape\"},\"TH\":{\"TH-37\":\"Amnat Charoen (\u0e2d\u0e33\u0e19\u0e32\u0e08\u0e40\u0e08\u0e23\u0e34\u0e0d)\",\"TH-15\":\"Ang Thong (\u0e2d\u0e48\u0e32\u0e07\u0e17\u0e2d\u0e07)\",\"TH-14\":\"Ayutthaya (\u0e1e\u0e23\u0e30\u0e19\u0e04\u0e23\u0e28\u0e23\u0e35\u0e2d\u0e22\u0e38\u0e18\u0e22\u0e32)\",\"TH-10\":\"Bangkok (\u0e01\u0e23\u0e38\u0e07\u0e40\u0e17\u0e1e\u0e21\u0e2b\u0e32\u0e19\u0e04\u0e23)\",\"TH-38\":\"Bueng Kan (\u0e1a\u0e36\u0e07\u0e01\u0e32\u0e2c)\",\"TH-31\":\"Buri Ram (\u0e1a\u0e38\u0e23\u0e35\u0e23\u0e31\u0e21\u0e22\u0e4c)\",\"TH-24\":\"Chachoengsao (\u0e09\u0e30\u0e40\u0e0a\u0e34\u0e07\u0e40\u0e17\u0e23\u0e32)\",\"TH-18\":\"Chai Nat (\u0e0a\u0e31\u0e22\u0e19\u0e32\u0e17)\",\"TH-36\":\"Chaiyaphum (\u0e0a\u0e31\u0e22\u0e20\u0e39\u0e21\u0e34)\",\"TH-22\":\"Chanthaburi (\u0e08\u0e31\u0e19\u0e17\u0e1a\u0e38\u0e23\u0e35)\",\"TH-50\":\"Chiang Mai (\u0e40\u0e0a\u0e35\u0e22\u0e07\u0e43\u0e2b\u0e21\u0e48)\",\"TH-57\":\"Chiang Rai (\u0e40\u0e0a\u0e35\u0e22\u0e07\u0e23\u0e32\u0e22)\",\"TH-20\":\"Chonburi (\u0e0a\u0e25\u0e1a\u0e38\u0e23\u0e35)\",\"TH-86\":\"Chumphon (\u0e0a\u0e38\u0e21\u0e1e\u0e23)\",\"TH-46\":\"Kalasin (\u0e01\u0e32\u0e2c\u0e2a\u0e34\u0e19\u0e18\u0e38\u0e4c)\",\"TH-62\":\"Kamphaeng Phet (\u0e01\u0e33\u0e41\u0e1e\u0e07\u0e40\u0e1e\u0e0a\u0e23)\",\"TH-71\":\"Kanchanaburi (\u0e01\u0e32\u0e0d\u0e08\u0e19\u0e1a\u0e38\u0e23\u0e35)\",\"TH-40\":\"Khon Kaen (\u0e02\u0e2d\u0e19\u0e41\u0e01\u0e48\u0e19)\",\"TH-81\":\"Krabi (\u0e01\u0e23\u0e30\u0e1a\u0e35\u0e48)\",\"TH-52\":\"Lampang (\u0e25\u0e33\u0e1b\u0e32\u0e07)\",\"TH-51\":\"Lamphun (\u0e25\u0e33\u0e1e\u0e39\u0e19)\",\"TH-42\":\"Loei (\u0e40\u0e25\u0e22)\",\"TH-16\":\"Lopburi (\u0e25\u0e1e\u0e1a\u0e38\u0e23\u0e35)\",\"TH-58\":\"Mae Hong Son (\u0e41\u0e21\u0e48\u0e2e\u0e48\u0e2d\u0e07\u0e2a\u0e2d\u0e19)\",\"TH-44\":\"Maha Sarakham (\u0e21\u0e2b\u0e32\u0e2a\u0e32\u0e23\u0e04\u0e32\u0e21)\",\"TH-49\":\"Mukdahan (\u0e21\u0e38\u0e01\u0e14\u0e32\u0e2b\u0e32\u0e23)\",\"TH-26\":\"Nakhon Nayok (\u0e19\u0e04\u0e23\u0e19\u0e32\u0e22\u0e01)\",\"TH-73\":\"Nakhon Pathom (\u0e19\u0e04\u0e23\u0e1b\u0e10\u0e21)\",\"TH-48\":\"Nakhon Phanom (\u0e19\u0e04\u0e23\u0e1e\u0e19\u0e21)\",\"TH-30\":\"Nakhon Ratchasima (\u0e19\u0e04\u0e23\u0e23\u0e32\u0e0a\u0e2a\u0e35\u0e21\u0e32)\",\"TH-60\":\"Nakhon Sawan (\u0e19\u0e04\u0e23\u0e2a\u0e27\u0e23\u0e23\u0e04\u0e4c)\",\"TH-80\":\"Nakhon Si Thammarat (\u0e19\u0e04\u0e23\u0e28\u0e23\u0e35\u0e18\u0e23\u0e23\u0e21\u0e23\u0e32\u0e0a)\",\"TH-55\":\"Nan (\u0e19\u0e48\u0e32\u0e19)\",\"TH-96\":\"Narathiwat (\u0e19\u0e23\u0e32\u0e18\u0e34\u0e27\u0e32\u0e2a)\",\"TH-39\":\"Nong Bua Lam Phu (\u0e2b\u0e19\u0e2d\u0e07\u0e1a\u0e31\u0e27\u0e25\u0e33\u0e20\u0e39)\",\"TH-43\":\"Nong Khai (\u0e2b\u0e19\u0e2d\u0e07\u0e04\u0e32\u0e22)\",\"TH-12\":\"Nonthaburi (\u0e19\u0e19\u0e17\u0e1a\u0e38\u0e23\u0e35)\",\"TH-13\":\"Pathum Thani (\u0e1b\u0e17\u0e38\u0e21\u0e18\u0e32\u0e19\u0e35)\",\"TH-94\":\"Pattani (\u0e1b\u0e31\u0e15\u0e15\u0e32\u0e19\u0e35)\",\"TH-82\":\"Phang Nga (\u0e1e\u0e31\u0e07\u0e07\u0e32)\",\"TH-93\":\"Phatthalung (\u0e1e\u0e31\u0e17\u0e25\u0e38\u0e07)\",\"TH-56\":\"Phayao (\u0e1e\u0e30\u0e40\u0e22\u0e32)\",\"TH-67\":\"Phetchabun (\u0e40\u0e1e\u0e0a\u0e23\u0e1a\u0e39\u0e23\u0e13\u0e4c)\",\"TH-76\":\"Phetchaburi (\u0e40\u0e1e\u0e0a\u0e23\u0e1a\u0e38\u0e23\u0e35)\",\"TH-66\":\"Phichit (\u0e1e\u0e34\u0e08\u0e34\u0e15\u0e23)\",\"TH-65\":\"Phitsanulok (\u0e1e\u0e34\u0e29\u0e13\u0e38\u0e42\u0e25\u0e01)\",\"TH-54\":\"Phrae (\u0e41\u0e1e\u0e23\u0e48)\",\"TH-83\":\"Phuket (\u0e20\u0e39\u0e40\u0e01\u0e47\u0e15)\",\"TH-25\":\"Prachin Buri (\u0e1b\u0e23\u0e32\u0e08\u0e35\u0e19\u0e1a\u0e38\u0e23\u0e35)\",\"TH-77\":\"Prachuap Khiri Khan (\u0e1b\u0e23\u0e30\u0e08\u0e27\u0e1a\u0e04\u0e35\u0e23\u0e35\u0e02\u0e31\u0e19\u0e18\u0e4c)\",\"TH-85\":\"Ranong (\u0e23\u0e30\u0e19\u0e2d\u0e07)\",\"TH-70\":\"Ratchaburi (\u0e23\u0e32\u0e0a\u0e1a\u0e38\u0e23\u0e35)\",\"TH-21\":\"Rayong (\u0e23\u0e30\u0e22\u0e2d\u0e07)\",\"TH-45\":\"Roi Et (\u0e23\u0e49\u0e2d\u0e22\u0e40\u0e2d\u0e47\u0e14)\",\"TH-27\":\"Sa Kaeo (\u0e2a\u0e23\u0e30\u0e41\u0e01\u0e49\u0e27)\",\"TH-47\":\"Sakon Nakhon (\u0e2a\u0e01\u0e25\u0e19\u0e04\u0e23)\",\"TH-11\":\"Samut Prakan (\u0e2a\u0e21\u0e38\u0e17\u0e23\u0e1b\u0e23\u0e32\u0e01\u0e32\u0e23)\",\"TH-74\":\"Samut Sakhon (\u0e2a\u0e21\u0e38\u0e17\u0e23\u0e2a\u0e32\u0e04\u0e23)\",\"TH-75\":\"Samut Songkhram (\u0e2a\u0e21\u0e38\u0e17\u0e23\u0e2a\u0e07\u0e04\u0e23\u0e32\u0e21)\",\"TH-19\":\"Saraburi (\u0e2a\u0e23\u0e30\u0e1a\u0e38\u0e23\u0e35)\",\"TH-91\":\"Satun (\u0e2a\u0e15\u0e39\u0e25)\",\"TH-17\":\"Sing Buri (\u0e2a\u0e34\u0e07\u0e2b\u0e4c\u0e1a\u0e38\u0e23\u0e35)\",\"TH-33\":\"Sisaket (\u0e28\u0e23\u0e35\u0e2a\u0e30\u0e40\u0e01\u0e29)\",\"TH-90\":\"Songkhla (\u0e2a\u0e07\u0e02\u0e25\u0e32)\",\"TH-64\":\"Sukhothai (\u0e2a\u0e38\u0e42\u0e02\u0e17\u0e31\u0e22)\",\"TH-72\":\"Suphan Buri (\u0e2a\u0e38\u0e1e\u0e23\u0e23\u0e13\u0e1a\u0e38\u0e23\u0e35)\",\"TH-84\":\"Surat Thani (\u0e2a\u0e38\u0e23\u0e32\u0e29\u0e0e\u0e23\u0e4c\u0e18\u0e32\u0e19\u0e35)\",\"TH-32\":\"Surin (\u0e2a\u0e38\u0e23\u0e34\u0e19\u0e17\u0e23\u0e4c)\",\"TH-63\":\"Tak (\u0e15\u0e32\u0e01)\",\"TH-92\":\"Trang (\u0e15\u0e23\u0e31\u0e07)\",\"TH-23\":\"Trat (\u0e15\u0e23\u0e32\u0e14)\",\"TH-34\":\"Ubon Ratchathani (\u0e2d\u0e38\u0e1a\u0e25\u0e23\u0e32\u0e0a\u0e18\u0e32\u0e19\u0e35)\",\"TH-41\":\"Udon Thani (\u0e2d\u0e38\u0e14\u0e23\u0e18\u0e32\u0e19\u0e35)\",\"TH-61\":\"Uthai Thani (\u0e2d\u0e38\u0e17\u0e31\u0e22\u0e18\u0e32\u0e19\u0e35)\",\"TH-53\":\"Uttaradit (\u0e2d\u0e38\u0e15\u0e23\u0e14\u0e34\u0e15\u0e16\u0e4c)\",\"TH-95\":\"Yala (\u0e22\u0e30\u0e25\u0e32)\",\"TH-35\":\"Yasothon (\u0e22\u0e42\u0e2a\u0e18\u0e23)\"},\"US\":{\"AL\":\"Alabama\",\"AK\":\"Alaska\",\"AZ\":\"Arizona\",\"AR\":\"Arkansas\",\"CA\":\"California\",\"CO\":\"Colorado\",\"CT\":\"Connecticut\",\"DE\":\"Delaware\",\"DC\":\"District Of Columbia\",\"FL\":\"Florida\",\"GA\":\"Georgia\",\"HI\":\"Hawaii\",\"ID\":\"Idaho\",\"IL\":\"Illinois\",\"IN\":\"Indiana\",\"IA\":\"Iowa\",\"KS\":\"Kansas\",\"KY\":\"Kentucky\",\"LA\":\"Louisiana\",\"ME\":\"Maine\",\"MD\":\"Maryland\",\"MA\":\"Massachusetts\",\"MI\":\"Michigan\",\"MN\":\"Minnesota\",\"MS\":\"Mississippi\",\"MO\":\"Missouri\",\"MT\":\"Montana\",\"NE\":\"Nebraska\",\"NV\":\"Nevada\",\"NH\":\"New Hampshire\",\"NJ\":\"New Jersey\",\"NM\":\"New Mexico\",\"NY\":\"New York\",\"NC\":\"North Carolina\",\"ND\":\"North Dakota\",\"OH\":\"Ohio\",\"OK\":\"Oklahoma\",\"OR\":\"Oregon\",\"PA\":\"Pennsylvania\",\"RI\":\"Rhode Island\",\"SC\":\"South Carolina\",\"SD\":\"South Dakota\",\"TN\":\"Tennessee\",\"TX\":\"Texas\",\"UT\":\"Utah\",\"VT\":\"Vermont\",\"VA\":\"Virginia\",\"WA\":\"Washington\",\"WV\":\"West Virginia\",\"WI\":\"Wisconsin\",\"WY\":\"Wyoming\",\"AA\":\"Armed Forces (AA)\",\"AE\":\"Armed Forces (AE)\",\"AP\":\"Armed Forces (AP)\",\"AS\":\"American Samoa\",\"GU\":\"Guam\",\"MP\":\"Northern Mariana Islands\",\"PR\":\"Puerto Rico\",\"UM\":\"US Minor Outlying Islands\",\"VI\":\"US Virgin Islands\"}}","plugin_url":" ","ajax_url":"","ajax_loader_url":" \/assets\/images\/ajax-loader@2x.gif","i18n_select_state_text":"Select an option\u2026","i18n_required_rating_text":"Please select a rating","i18n_no_matching_variations_text":"Sorry, no products matched your selection. Please choose a different combination.","i18n_required_text":"required","i18n_view_cart":"View Cart \u2192","review_rating_required":"yes","update_order_review_nonce":"403b9a1684","apply_coupon_nonce":"7722106a96","option_guest_checkout":"yes","checkout_url":"","is_checkout":"0","update_shipping_method_nonce":"48fe5739ab","add_to_cart_nonce":"3c6a61f089","cart_url":" ","cart_redirect_after_add":"no"};';

            break;
        case 'contact':/**********Contact***********/
            $menu_selector['contact'] = 'current-menu-ancestor';
            $bazarClassList['language-selector']['url']='/css/language-selector.css';
            $bazarClassList['language-selector']['external']=false;
//            $bazarClassList['reset-bootstrap']['url']='/css/reset-bootstrap.css';
//            $bazarClassList['reset-bootstrap']['external']=false;
            $bazarClassList['style']['url']='/css/style.css';
            $bazarClassList['style']['external']=false;
            $bazarClassList['thickbox-css']['url']='/css/thickbox/thickbox.css';
            $bazarClassList['thickbox-css']['external']=false;
            $bazarClassList['google-fonts-css']['url']="http://fonts.googleapis.com/css?family=Playfair+Display%7COpen+Sans+Condensed%3A300%7COpen+Sans%7CShadows+Into+Light%7COswald%7CPlay%7CMuli%7CArbutus+Slab%7CAbel&#038;ver=3.5.2";
            $bazarClassList['google-fonts-css']['external']=true;
            $bazarClassList['open-sans-font-css']['url']="//fonts.googleapis.com/css?family=Open+Sans%3A400%2C700%2C600&#038;ver=3.5.2";
            $bazarClassList['open-sans-font-css']['external']=true;
            $bazarClassList['yith-theme-banner-css']['url']='/css/yit.css';
            $bazarClassList['yith-theme-banner-css']['external']=false;
            $bazarClassList['poshytip-css']['url']='/css/poshytip.css';
            $bazarClassList['poshytip-css']['external']=false;
            $bazarClassList['jquery-colorbox-css']['url']='/css/colorbox.css';
            $bazarClassList['jquery-colorbox-css']['external']=false;
            $bazarClassList['yith-wcwl-user-main-css']['url']='/css/woocommerce/wishlist.css';
            $bazarClassList['yith-wcwl-user-main-css']['external']=false;
            $bazarClassList['woocommerce_frontend_styles-css']['url']='/css/woocommerce/style.css';
            $bazarClassList['woocommerce_frontend_styles-css']['external']=false;
            $bazarClassList['styles-minified-css']['url']='/css/cache/style-28.css';
            $bazarClassList['styles-minified-css']['external']=false;
            $bazarClassList['custom-css']['url']='/css/custom.css';
            $bazarClassList['custom-css']['external']=false;
            $bazarClassList['cache-custom-css']['url']='/css/cache/custom-28.css';
            $bazarClassList['cache-custom-css']['external']=false;
            $bazarClassList['style-changer-css']['url']='/css/picker-celestino.css';
            $bazarClassList['style-changer-css']['external']=false;
            $bazarClassList['colorpicker-css']['url']='/css/colorpicker.css';
            $bazarClassList['colorpicker-css']['external']=false;

            $bazarJsList['comment-reply']['url']='/js/comment-reply.min.js';
            $bazarJsList['comment-reply']['external']=false;
            $bazarJsList['jquery-poshytip']['url']='/js/jquery/jquery.poshytip.min.js';
            $bazarJsList['jquery-poshytip']['external']=false;
            $bazarJsList['jquery-cookie']['url']='/js/jquery/jquery.cookie.js';
            $bazarJsList['jquery-cookie']['external']=false;
            $bazarJsList['colorpicker']['url']='/js/colorpicker.js';
            $bazarJsList['colorpicker']['external']=false;
            $bazarJsList['sitepress']['url']='/js/sitepress.js';
            $bazarJsList['sitepress']['external']=false;

            //$bazarJsButtom['wp-includes-thickbox']['url']='/js/wp-includes/thickbox.js';
            //$bazarJsButtom['wp-includes-thickbox']['external']=false;
            $bazarJsButtom['wp-includes-underscore']['url']='/js/wp-includes/underscore.min.js';
            $bazarJsButtom['wp-includes-underscore']['external']=false;
            $bazarJsButtom['wp-includes-shortcode']['url']='/js/wp-includes/shortcode.min.js';
            $bazarJsButtom['wp-includes-shortcode']['external']=false;
            $bazarJsButtom['media-upload']['url']='/js/media.upload.min.js';
            $bazarJsButtom['media-upload']['external']=false;
            $bazarJsButtom['jquery-commonlibraries']['url']='/js/jquery/jquery.commonlibraries.js';
            $bazarJsButtom['jquery-commonlibraries']['external']=false;
            $bazarJsButtom['jquery-layout']['url']='/js/jquery/jquery.layout.js';
            $bazarJsButtom['jquery-layout']['external']=false;
            $bazarJsButtom['jquery-custom']['url']='/js/jquery/jquery.custom.js';
            $bazarJsButtom['jquery-custom']['external']=false;
            $bazarJsButtom['jq-cookie']['url']='/js/jq-cookie.js';
            $bazarJsButtom['jq-cookie']['external']=false;
            $bazarJsButtom['woocompare']['url']='/js/woocompare.js';
            $bazarJsButtom['woocompare']['external']=false;
            $bazarJsButtom['jquery-colorbox']['url']='/js/jquery/jquery.colorbox-min.js';
            $bazarJsButtom['jquery-colorbox']['external']=false;
            $bazarJsButtom['responsive']['url']='/js/responsive.js';
            $bazarJsButtom['responsive']['external']=false;

            $bazarJsButtom['jquery-yith-wcwl']['url']='/js/jquery/jquery.yith-wcwl.js';
            $bazarJsButtom['jquery-yith-wcwl']['external']=false;
            $bazarJsButtom['twitter-text']['url']='/js/twitter-text.js';
            $bazarJsButtom['twitter-text']['external']=false;
            $bazarJsButtom['jquery-cycle']['url']='/js/jquery/jquery.cycle.min.js';
            $bazarJsButtom['jquery-cycle']['external']=false;
            $bazarJsButtom['core-shortcodes']['url']='/js/core/shortcodes.js';
            $bazarJsButtom['core-shortcodes']['external']=false;
            $bazarJsButtom['shortcodes']['url']='/js/shortcodes.js';
            $bazarJsButtom['shortcodes']['external']=false;
            $bazarJsButtom['widgets']['url']='/js/widgets.js';
            $bazarJsButtom['widgets']['external']=false;

            $bazarJsButtom['woocommerce2']['url']='/js/woocommerce.js';
            $bazarJsButtom['woocommerce2']['external']=false;
            $bazarJsButtom['add-to-cart']['url']='/js/add-to-cart.min.js';
            $bazarJsButtom['add-to-cart']['external']=false;
            $bazarJsButtom['cart']['url']='/js/cart.min.js';
            $bazarJsButtom['add-to-cart']['external']=false;

            $bazarJsButtom['jquery-blockUI']['url']='/js/woocommerce/jquery.blockUI.min.js';
            $bazarJsButtom['jquery-blockUI']['external']=false;
            $bazarJsButtom['woocommerce']['url']='/js/woocommerce.min.js';
            $bazarJsButtom['woocommerce']['external']=false;
//            $bazarJsButtom['cart-fragments']['url']='/js/cart-fragments.min.js';
//            $bazarJsButtom['cart-fragments']['external']=false;
            $bazarJsButtom['jquery-placeholder']['url']='/js/jquery/jquery.placeholder.min.js';
            $bazarJsButtom['jquery-placeholder']['external']=false;
            $bazarJsButtom['changer-bazar']['url']='/js/changer-bazar.js';
            $bazarJsButtom['changer-bazar']['external']=false;
            $bazarJsButtom['yith-wcan-frontend']['url']='/js/yith-wcan-frontend.min.js';
            $bazarJsButtom['yith-wcan-frontend']['external']=false;

            //$bazarCssBodyTag = 'page page-template-default no_js responsive stretched';
            $bazarCssBodyTag = 'no_js responsive';

            $bazarJsConfigButtom = 'var thickboxL10n = {"next":"Next >","prev":"< Prev","image":"Image","of":"of","close":"Close","noiframes":"This feature requires inline frames. You have iframes disabled or your browser does not support them.","loadingAnimation":" ","closeImage":" "};'."\n"
                . 'var l10n_handler = {"map_close":"[x] Close","map_open":"[x] Open"};'."\n"
                . 'var yith_woocompare = {"nonceadd":"2ff540915e","nonceremove":"e0a22b5f3d","ajaxurl":"","actionadd":"yith-woocompare-add-product","actionremove":"yith-woocompare-remove-product","actionview":"yith-woocompare-view-table","added_label":"Added","table_title":"Product Comparison","auto_open":"yes"};'."\n"
                . 'var yith_wcwl_l10n = {"out_of_stock":"Cannot add to the cart as product is Out of Stock!"};'."\n"
                . 'var yith_wcan = {"container":".products","pagination":".general-pagination","result_count":".woocommerce-result-count"};'."\n"
                . 'var woocommerce_params = {"countries":"{\"AF\":[],\"AT\":[],\"BE\":[],\"BI\":[],\"CZ\":[],\"DE\":[],\"DK\":[],\"FI\":[],\"FR\":[],\"HU\":[],\"IS\":[],\"IL\":[],\"KR\":[],\"NL\":[],\"NO\":[],\"PL\":[],\"PT\":[],\"SG\":[],\"SK\":[],\"SI\":[],\"LK\":[],\"SE\":[],\"VN\":[],\"AU\":{\"ACT\":\"Australian Capital Territory\",\"NSW\":\"New South Wales\",\"NT\":\"Northern Territory\",\"QLD\":\"Queensland\",\"SA\":\"South Australia\",\"TAS\":\"Tasmania\",\"VIC\":\"Victoria\",\"WA\":\"Western Australia\"},\"BR\":{\"AC\":\"Acre\",\"AL\":\"Alagoas\",\"AP\":\"Amap\u00e1\",\"AM\":\"Amazonas\",\"BH\":\"Bahia\",\"CE\":\"Cear\u00e1\",\"DF\":\"Distrito Federal\",\"ES\":\"Esp\u00edrito Santo\",\"GO\":\"Goi\u00e1s\",\"MA\":\"Maranh\u00e3o\",\"MT\":\"Mato Grosso\",\"MS\":\"Mato Grosso do Sul\",\"MG\":\"Minas Gerais\",\"PA\":\"Par\u00e1\",\"PB\":\"Para\u00edba\",\"PR\":\"Paran\u00e1\",\"PE\":\"Pernambuco\",\"PI\":\"Piau\u00ed\",\"RJ\":\"Rio de Janeiro\",\"RN\":\"Rio Grande do Norte\",\"RS\":\"Rio Grande do Sul\",\"RO\":\"Rond\u00f4nia\",\"RR\":\"Roraima\",\"SC\":\"Santa Catarina\",\"SP\":\"S\u00e3o Paulo\",\"SE\":\"Sergipe\",\"TO\":\"Tocantins\"},\"CA\":{\"AB\":\"Alberta\",\"BC\":\"British Columbia\",\"MB\":\"Manitoba\",\"NB\":\"New Brunswick\",\"NF\":\"Newfoundland\",\"NT\":\"Northwest Territories\",\"NS\":\"Nova Scotia\",\"NU\":\"Nunavut\",\"ON\":\"Ontario\",\"PE\":\"Prince Edward Island\",\"QC\":\"Quebec\",\"SK\":\"Saskatchewan\",\"YT\":\"Yukon Territory\"},\"CN\":{\"CN1\":\"Yunnan \\\/ \u4e91\u5357\",\"CN2\":\"Beijing \\\/ \u5317\u4eac\",\"CN3\":\"Tianjin \\\/ \u5929\u6d25\",\"CN4\":\"Hebei \\\/ \u6cb3\u5317\",\"CN5\":\"Shanxi \\\/ \u5c71\u897f\",\"CN6\":\"Inner Mongolia \\\/ \u5167\u8499\u53e4\",\"CN7\":\"Liaoning \\\/ \u8fbd\u5b81\",\"CN8\":\"Jilin \\\/ \u5409\u6797\",\"CN9\":\"Heilongjiang \\\/ \u9ed1\u9f99\u6c5f\",\"CN10\":\"Shanghai \\\/ \u4e0a\u6d77\",\"CN11\":\"Jiangsu \\\/ \u6c5f\u82cf\",\"CN12\":\"Zhejiang \\\/ \u6d59\u6c5f\",\"CN13\":\"Anhui \\\/ \u5b89\u5fbd\",\"CN14\":\"Fujian \\\/ \u798f\u5efa\",\"CN15\":\"Jiangxi \\\/ \u6c5f\u897f\",\"CN16\":\"Shandong \\\/ \u5c71\u4e1c\",\"CN17\":\"Henan \\\/ \u6cb3\u5357\",\"CN18\":\"Hubei \\\/ \u6e56\u5317\",\"CN19\":\"Hunan \\\/ \u6e56\u5357\",\"CN20\":\"Guangdong \\\/ \u5e7f\u4e1c\",\"CN21\":\"Guangxi Zhuang \\\/ \u5e7f\u897f\u58ee\u65cf\",\"CN22\":\"Hainan \\\/ \u6d77\u5357\",\"CN23\":\"Chongqing \\\/ \u91cd\u5e86\",\"CN24\":\"Sichuan \\\/ \u56db\u5ddd\",\"CN25\":\"Guizhou \\\/ \u8d35\u5dde\",\"CN26\":\"Shaanxi \\\/ \u9655\u897f\",\"CN27\":\"Gansu \\\/ \u7518\u8083\",\"CN28\":\"Qinghai \\\/ \u9752\u6d77\",\"CN29\":\"Ningxia Hui \\\/ \u5b81\u590f\",\"CN30\":\"Macau \\\/ \u6fb3\u95e8\",\"CN31\":\"Tibet \\\/ \u897f\u85cf\",\"CN32\":\"Xinjiang \\\/ \u65b0\u7586\"},\"HK\":{\"HONG KONG\":\"Hong Kong Island\",\"KOWLOON\":\"Kowloon\",\"NEW TERRITORIES\":\"New Territories\"},\"IN\":{\"AP\":\"Andra Pradesh\",\"AR\":\"Arunachal Pradesh\",\"AS\":\"Assam\",\"BR\":\"Bihar\",\"CT\":\"Chhattisgarh\",\"GA\":\"Goa\",\"GJ\":\"Gujarat\",\"HR\":\"Haryana\",\"HP\":\"Himachal Pradesh\",\"JK\":\"Jammu and Kashmir\",\"JH\":\"Jharkhand\",\"KA\":\"Karnataka\",\"KL\":\"Kerala\",\"MP\":\"Madhya Pradesh\",\"MH\":\"Maharashtra\",\"MN\":\"Manipur\",\"ML\":\"Meghalaya\",\"MZ\":\"Mizoram\",\"NL\":\"Nagaland\",\"OR\":\"Orissa\",\"PB\":\"Punjab\",\"RJ\":\"Rajasthan\",\"SK\":\"Sikkim\",\"TN\":\"Tamil Nadu\",\"TR\":\"Tripura\",\"UT\":\"Uttaranchal\",\"UP\":\"Uttar Pradesh\",\"WB\":\"West Bengal\",\"AN\":\"Andaman and Nicobar Islands\",\"CH\":\"Chandigarh\",\"DN\":\"Dadar and Nagar Haveli\",\"DD\":\"Daman and Diu\",\"DL\":\"Delhi\",\"LD\":\"Lakshadeep\",\"PY\":\"Pondicherry (Puducherry)\"},\"ID\":{\"AC\":\"Daerah Istimewa Aceh\",\"SU\":\"Sumatera Utara\",\"SB\":\"Sumatera Barat\",\"RI\":\"Riau\",\"KR\":\"Kepulauan Riau\",\"JA\":\"Jambi\",\"SS\":\"Sumatera Selatan\",\"BB\":\"Bangka Belitung\",\"BE\":\"Bengkulu\",\"LA\":\"Lampung\",\"JK\":\"DKI Jakarta\",\"JB\":\"Jawa Barat\",\"BT\":\"Banten\",\"JT\":\"Jawa Tengah\",\"JI\":\"Jawa Timur\",\"YO\":\"Daerah Istimewa Yogyakarta\",\"BA\":\"Bali\",\"NB\":\"Nusa Tenggara Barat\",\"NT\":\"Nusa Tenggara Timur\",\"KB\":\"Kalimantan Barat\",\"KT\":\"Kalimantan Tengah\",\"KI\":\"Kalimantan Timur\",\"KS\":\"Kalimantan Selatan\",\"KU\":\"Kalimantan Utara\",\"SA\":\"Sulawesi Utara\",\"ST\":\"Sulawesi Tengah\",\"SG\":\"Sulawesi Tenggara\",\"SR\":\"Sulawesi Barat\",\"SN\":\"Sulawesi Selatan\",\"GO\":\"Gorontalo\",\"MA\":\"Maluku\",\"MU\":\"Maluku Utara\",\"PA\":\"Papua\",\"PB\":\"Papua Barat\"},\"MY\":{\"JHR\":\"Johor\",\"KDH\":\"Kedah\",\"KTN\":\"Kelantan\",\"MLK\":\"Melaka\",\"NSN\":\"Negeri Sembilan\",\"PHG\":\"Pahang\",\"PRK\":\"Perak\",\"PLS\":\"Perlis\",\"PNG\":\"Pulau Pinang\",\"SBH\":\"Sabah\",\"SWK\":\"Sarawak\",\"SGR\":\"Selangor\",\"TRG\":\"Terengganu\",\"KUL\":\"W.P. Kuala Lumpur\",\"LBN\":\"W.P. Labuan\",\"PJY\":\"W.P. Putrajaya\"},\"NZ\":{\"NL\":\"Northland\",\"AK\":\"Auckland\",\"WA\":\"Waikato\",\"BP\":\"Bay of Plenty\",\"TK\":\"Taranaki\",\"HB\":\"Hawke\u2019s Bay\",\"MW\":\"Manawatu-Wanganui\",\"WE\":\"Wellington\",\"NS\":\"Nelson\",\"MB\":\"Marlborough\",\"TM\":\"Tasman\",\"WC\":\"West Coast\",\"CT\":\"Canterbury\",\"OT\":\"Otago\",\"SL\":\"Southland\"},\"ZA\":{\"EC\":\"Eastern Cape\",\"FS\":\"Free State\",\"GP\":\"Gauteng\",\"KZN\":\"KwaZulu-Natal\",\"LP\":\"Limpopo\",\"MP\":\"Mpumalanga\",\"NC\":\"Northern Cape\",\"NW\":\"North West\",\"WC\":\"Western Cape\"},\"TH\":{\"TH-37\":\"Amnat Charoen (\u0e2d\u0e33\u0e19\u0e32\u0e08\u0e40\u0e08\u0e23\u0e34\u0e0d)\",\"TH-15\":\"Ang Thong (\u0e2d\u0e48\u0e32\u0e07\u0e17\u0e2d\u0e07)\",\"TH-14\":\"Ayutthaya (\u0e1e\u0e23\u0e30\u0e19\u0e04\u0e23\u0e28\u0e23\u0e35\u0e2d\u0e22\u0e38\u0e18\u0e22\u0e32)\",\"TH-10\":\"Bangkok (\u0e01\u0e23\u0e38\u0e07\u0e40\u0e17\u0e1e\u0e21\u0e2b\u0e32\u0e19\u0e04\u0e23)\",\"TH-38\":\"Bueng Kan (\u0e1a\u0e36\u0e07\u0e01\u0e32\u0e2c)\",\"TH-31\":\"Buri Ram (\u0e1a\u0e38\u0e23\u0e35\u0e23\u0e31\u0e21\u0e22\u0e4c)\",\"TH-24\":\"Chachoengsao (\u0e09\u0e30\u0e40\u0e0a\u0e34\u0e07\u0e40\u0e17\u0e23\u0e32)\",\"TH-18\":\"Chai Nat (\u0e0a\u0e31\u0e22\u0e19\u0e32\u0e17)\",\"TH-36\":\"Chaiyaphum (\u0e0a\u0e31\u0e22\u0e20\u0e39\u0e21\u0e34)\",\"TH-22\":\"Chanthaburi (\u0e08\u0e31\u0e19\u0e17\u0e1a\u0e38\u0e23\u0e35)\",\"TH-50\":\"Chiang Mai (\u0e40\u0e0a\u0e35\u0e22\u0e07\u0e43\u0e2b\u0e21\u0e48)\",\"TH-57\":\"Chiang Rai (\u0e40\u0e0a\u0e35\u0e22\u0e07\u0e23\u0e32\u0e22)\",\"TH-20\":\"Chonburi (\u0e0a\u0e25\u0e1a\u0e38\u0e23\u0e35)\",\"TH-86\":\"Chumphon (\u0e0a\u0e38\u0e21\u0e1e\u0e23)\",\"TH-46\":\"Kalasin (\u0e01\u0e32\u0e2c\u0e2a\u0e34\u0e19\u0e18\u0e38\u0e4c)\",\"TH-62\":\"Kamphaeng Phet (\u0e01\u0e33\u0e41\u0e1e\u0e07\u0e40\u0e1e\u0e0a\u0e23)\",\"TH-71\":\"Kanchanaburi (\u0e01\u0e32\u0e0d\u0e08\u0e19\u0e1a\u0e38\u0e23\u0e35)\",\"TH-40\":\"Khon Kaen (\u0e02\u0e2d\u0e19\u0e41\u0e01\u0e48\u0e19)\",\"TH-81\":\"Krabi (\u0e01\u0e23\u0e30\u0e1a\u0e35\u0e48)\",\"TH-52\":\"Lampang (\u0e25\u0e33\u0e1b\u0e32\u0e07)\",\"TH-51\":\"Lamphun (\u0e25\u0e33\u0e1e\u0e39\u0e19)\",\"TH-42\":\"Loei (\u0e40\u0e25\u0e22)\",\"TH-16\":\"Lopburi (\u0e25\u0e1e\u0e1a\u0e38\u0e23\u0e35)\",\"TH-58\":\"Mae Hong Son (\u0e41\u0e21\u0e48\u0e2e\u0e48\u0e2d\u0e07\u0e2a\u0e2d\u0e19)\",\"TH-44\":\"Maha Sarakham (\u0e21\u0e2b\u0e32\u0e2a\u0e32\u0e23\u0e04\u0e32\u0e21)\",\"TH-49\":\"Mukdahan (\u0e21\u0e38\u0e01\u0e14\u0e32\u0e2b\u0e32\u0e23)\",\"TH-26\":\"Nakhon Nayok (\u0e19\u0e04\u0e23\u0e19\u0e32\u0e22\u0e01)\",\"TH-73\":\"Nakhon Pathom (\u0e19\u0e04\u0e23\u0e1b\u0e10\u0e21)\",\"TH-48\":\"Nakhon Phanom (\u0e19\u0e04\u0e23\u0e1e\u0e19\u0e21)\",\"TH-30\":\"Nakhon Ratchasima (\u0e19\u0e04\u0e23\u0e23\u0e32\u0e0a\u0e2a\u0e35\u0e21\u0e32)\",\"TH-60\":\"Nakhon Sawan (\u0e19\u0e04\u0e23\u0e2a\u0e27\u0e23\u0e23\u0e04\u0e4c)\",\"TH-80\":\"Nakhon Si Thammarat (\u0e19\u0e04\u0e23\u0e28\u0e23\u0e35\u0e18\u0e23\u0e23\u0e21\u0e23\u0e32\u0e0a)\",\"TH-55\":\"Nan (\u0e19\u0e48\u0e32\u0e19)\",\"TH-96\":\"Narathiwat (\u0e19\u0e23\u0e32\u0e18\u0e34\u0e27\u0e32\u0e2a)\",\"TH-39\":\"Nong Bua Lam Phu (\u0e2b\u0e19\u0e2d\u0e07\u0e1a\u0e31\u0e27\u0e25\u0e33\u0e20\u0e39)\",\"TH-43\":\"Nong Khai (\u0e2b\u0e19\u0e2d\u0e07\u0e04\u0e32\u0e22)\",\"TH-12\":\"Nonthaburi (\u0e19\u0e19\u0e17\u0e1a\u0e38\u0e23\u0e35)\",\"TH-13\":\"Pathum Thani (\u0e1b\u0e17\u0e38\u0e21\u0e18\u0e32\u0e19\u0e35)\",\"TH-94\":\"Pattani (\u0e1b\u0e31\u0e15\u0e15\u0e32\u0e19\u0e35)\",\"TH-82\":\"Phang Nga (\u0e1e\u0e31\u0e07\u0e07\u0e32)\",\"TH-93\":\"Phatthalung (\u0e1e\u0e31\u0e17\u0e25\u0e38\u0e07)\",\"TH-56\":\"Phayao (\u0e1e\u0e30\u0e40\u0e22\u0e32)\",\"TH-67\":\"Phetchabun (\u0e40\u0e1e\u0e0a\u0e23\u0e1a\u0e39\u0e23\u0e13\u0e4c)\",\"TH-76\":\"Phetchaburi (\u0e40\u0e1e\u0e0a\u0e23\u0e1a\u0e38\u0e23\u0e35)\",\"TH-66\":\"Phichit (\u0e1e\u0e34\u0e08\u0e34\u0e15\u0e23)\",\"TH-65\":\"Phitsanulok (\u0e1e\u0e34\u0e29\u0e13\u0e38\u0e42\u0e25\u0e01)\",\"TH-54\":\"Phrae (\u0e41\u0e1e\u0e23\u0e48)\",\"TH-83\":\"Phuket (\u0e20\u0e39\u0e40\u0e01\u0e47\u0e15)\",\"TH-25\":\"Prachin Buri (\u0e1b\u0e23\u0e32\u0e08\u0e35\u0e19\u0e1a\u0e38\u0e23\u0e35)\",\"TH-77\":\"Prachuap Khiri Khan (\u0e1b\u0e23\u0e30\u0e08\u0e27\u0e1a\u0e04\u0e35\u0e23\u0e35\u0e02\u0e31\u0e19\u0e18\u0e4c)\",\"TH-85\":\"Ranong (\u0e23\u0e30\u0e19\u0e2d\u0e07)\",\"TH-70\":\"Ratchaburi (\u0e23\u0e32\u0e0a\u0e1a\u0e38\u0e23\u0e35)\",\"TH-21\":\"Rayong (\u0e23\u0e30\u0e22\u0e2d\u0e07)\",\"TH-45\":\"Roi Et (\u0e23\u0e49\u0e2d\u0e22\u0e40\u0e2d\u0e47\u0e14)\",\"TH-27\":\"Sa Kaeo (\u0e2a\u0e23\u0e30\u0e41\u0e01\u0e49\u0e27)\",\"TH-47\":\"Sakon Nakhon (\u0e2a\u0e01\u0e25\u0e19\u0e04\u0e23)\",\"TH-11\":\"Samut Prakan (\u0e2a\u0e21\u0e38\u0e17\u0e23\u0e1b\u0e23\u0e32\u0e01\u0e32\u0e23)\",\"TH-74\":\"Samut Sakhon (\u0e2a\u0e21\u0e38\u0e17\u0e23\u0e2a\u0e32\u0e04\u0e23)\",\"TH-75\":\"Samut Songkhram (\u0e2a\u0e21\u0e38\u0e17\u0e23\u0e2a\u0e07\u0e04\u0e23\u0e32\u0e21)\",\"TH-19\":\"Saraburi (\u0e2a\u0e23\u0e30\u0e1a\u0e38\u0e23\u0e35)\",\"TH-91\":\"Satun (\u0e2a\u0e15\u0e39\u0e25)\",\"TH-17\":\"Sing Buri (\u0e2a\u0e34\u0e07\u0e2b\u0e4c\u0e1a\u0e38\u0e23\u0e35)\",\"TH-33\":\"Sisaket (\u0e28\u0e23\u0e35\u0e2a\u0e30\u0e40\u0e01\u0e29)\",\"TH-90\":\"Songkhla (\u0e2a\u0e07\u0e02\u0e25\u0e32)\",\"TH-64\":\"Sukhothai (\u0e2a\u0e38\u0e42\u0e02\u0e17\u0e31\u0e22)\",\"TH-72\":\"Suphan Buri (\u0e2a\u0e38\u0e1e\u0e23\u0e23\u0e13\u0e1a\u0e38\u0e23\u0e35)\",\"TH-84\":\"Surat Thani (\u0e2a\u0e38\u0e23\u0e32\u0e29\u0e0e\u0e23\u0e4c\u0e18\u0e32\u0e19\u0e35)\",\"TH-32\":\"Surin (\u0e2a\u0e38\u0e23\u0e34\u0e19\u0e17\u0e23\u0e4c)\",\"TH-63\":\"Tak (\u0e15\u0e32\u0e01)\",\"TH-92\":\"Trang (\u0e15\u0e23\u0e31\u0e07)\",\"TH-23\":\"Trat (\u0e15\u0e23\u0e32\u0e14)\",\"TH-34\":\"Ubon Ratchathani (\u0e2d\u0e38\u0e1a\u0e25\u0e23\u0e32\u0e0a\u0e18\u0e32\u0e19\u0e35)\",\"TH-41\":\"Udon Thani (\u0e2d\u0e38\u0e14\u0e23\u0e18\u0e32\u0e19\u0e35)\",\"TH-61\":\"Uthai Thani (\u0e2d\u0e38\u0e17\u0e31\u0e22\u0e18\u0e32\u0e19\u0e35)\",\"TH-53\":\"Uttaradit (\u0e2d\u0e38\u0e15\u0e23\u0e14\u0e34\u0e15\u0e16\u0e4c)\",\"TH-95\":\"Yala (\u0e22\u0e30\u0e25\u0e32)\",\"TH-35\":\"Yasothon (\u0e22\u0e42\u0e2a\u0e18\u0e23)\"},\"US\":{\"AL\":\"Alabama\",\"AK\":\"Alaska\",\"AZ\":\"Arizona\",\"AR\":\"Arkansas\",\"CA\":\"California\",\"CO\":\"Colorado\",\"CT\":\"Connecticut\",\"DE\":\"Delaware\",\"DC\":\"District Of Columbia\",\"FL\":\"Florida\",\"GA\":\"Georgia\",\"HI\":\"Hawaii\",\"ID\":\"Idaho\",\"IL\":\"Illinois\",\"IN\":\"Indiana\",\"IA\":\"Iowa\",\"KS\":\"Kansas\",\"KY\":\"Kentucky\",\"LA\":\"Louisiana\",\"ME\":\"Maine\",\"MD\":\"Maryland\",\"MA\":\"Massachusetts\",\"MI\":\"Michigan\",\"MN\":\"Minnesota\",\"MS\":\"Mississippi\",\"MO\":\"Missouri\",\"MT\":\"Montana\",\"NE\":\"Nebraska\",\"NV\":\"Nevada\",\"NH\":\"New Hampshire\",\"NJ\":\"New Jersey\",\"NM\":\"New Mexico\",\"NY\":\"New York\",\"NC\":\"North Carolina\",\"ND\":\"North Dakota\",\"OH\":\"Ohio\",\"OK\":\"Oklahoma\",\"OR\":\"Oregon\",\"PA\":\"Pennsylvania\",\"RI\":\"Rhode Island\",\"SC\":\"South Carolina\",\"SD\":\"South Dakota\",\"TN\":\"Tennessee\",\"TX\":\"Texas\",\"UT\":\"Utah\",\"VT\":\"Vermont\",\"VA\":\"Virginia\",\"WA\":\"Washington\",\"WV\":\"West Virginia\",\"WI\":\"Wisconsin\",\"WY\":\"Wyoming\",\"AA\":\"Armed Forces (AA)\",\"AE\":\"Armed Forces (AE)\",\"AP\":\"Armed Forces (AP)\",\"AS\":\"American Samoa\",\"GU\":\"Guam\",\"MP\":\"Northern Mariana Islands\",\"PR\":\"Puerto Rico\",\"UM\":\"US Minor Outlying Islands\",\"VI\":\"US Virgin Islands\"}}","plugin_url":" ","ajax_url":"","ajax_loader_url":" \/assets\/images\/ajax-loader@2x.gif","i18n_select_state_text":"Select an option\u2026","i18n_required_rating_text":"Please select a rating","i18n_no_matching_variations_text":"Sorry, no products matched your selection. Please choose a different combination.","i18n_required_text":"required","i18n_view_cart":"View Cart \u2192","review_rating_required":"yes","update_order_review_nonce":"403b9a1684","apply_coupon_nonce":"7722106a96","option_guest_checkout":"yes","checkout_url":"","is_checkout":"0","update_shipping_method_nonce":"48fe5739ab","add_to_cart_nonce":"3c6a61f089","cart_url":" ","cart_redirect_after_add":"no"};';

            break;
        case 'checkout':/**********Checkout***********/
            $bazarClassList['language-selector']['url']='/css/language-selector.css';
            $bazarClassList['language-selector']['external']=false;
//            $bazarClassList['reset-bootstrap']['url']='/css/reset-bootstrap.css';
//            $bazarClassList['reset-bootstrap']['external']=false;
            $bazarClassList['style']['url']='/css/style.css';
            $bazarClassList['style']['external']=false;
            $bazarClassList['thickbox-css']['url']='/css/thickbox/thickbox.css';
            $bazarClassList['thickbox-css']['external']=false;
            $bazarClassList['google-fonts-css']['url']="http://fonts.googleapis.com/css?family=Playfair+Display%7COpen+Sans+Condensed%3A300%7COpen+Sans%7CShadows+Into+Light%7COswald%7CPlay%7CMuli%7CArbutus+Slab%7CAbel&#038;ver=3.5.2";
            $bazarClassList['google-fonts-css']['external']=true;
            $bazarClassList['open-sans-font-css']['url']="//fonts.googleapis.com/css?family=Open+Sans%3A400%2C700%2C600&#038;ver=3.5.2";
            $bazarClassList['open-sans-font-css']['external']=true;
            $bazarClassList['yith-theme-banner-css']['url']='/css/yit.css';
            $bazarClassList['yith-theme-banner-css']['external']=false;
            $bazarClassList['poshytip-css']['url']='/css/poshytip.css';
            $bazarClassList['poshytip-css']['external']=false;
            $bazarClassList['jquery-colorbox-css']['url']='/css/colorbox.css';
            $bazarClassList['jquery-colorbox-css']['external']=false;
            $bazarClassList['yith-wcwl-user-main-css']['url']='/css/woocommerce/wishlist.css';
            $bazarClassList['yith-wcwl-user-main-css']['external']=false;
            $bazarClassList['woocommerce_chosen_styles-css']['url']='/css/chosen.css';
            $bazarClassList['woocommerce_chosen_styles-css']['external']=false;
            $bazarClassList['woocommerce_frontend_styles-css']['url']='/css/woocommerce/style.css';
            $bazarClassList['woocommerce_frontend_styles-css']['external']=false;
            $bazarClassList['styles-minified-css']['url']='/css/cache/style-28.css';
            $bazarClassList['styles-minified-css']['external']=false;
            $bazarClassList['custom-css']['url']='/css/custom.css';
            $bazarClassList['custom-css']['external']=false;
            $bazarClassList['cache-custom-css']['url']='/css/cache/custom-28.css';
            $bazarClassList['cache-custom-css']['external']=false;
            $bazarClassList['style-changer-css']['url']='/css/picker-celestino.css';
            $bazarClassList['style-changer-css']['external']=false;
            $bazarClassList['colorpicker-css']['url']='/css/colorpicker.css';
            $bazarClassList['colorpicker-css']['external']=false;

            $bazarJsList['comment-reply']['url']='/js/comment-reply.min.js';
            $bazarJsList['comment-reply']['external']=false;
            $bazarJsList['jquery-poshytip']['url']='/js/jquery/jquery.poshytip.min.js';
            $bazarJsList['jquery-poshytip']['external']=false;
            $bazarJsList['jquery-cookie']['url']='/js/jquery/jquery.cookie.js';
            $bazarJsList['jquery-cookie']['external']=false;
            $bazarJsList['colorpicker']['url']='/js/colorpicker.js';
            $bazarJsList['colorpicker']['external']=false;
            $bazarJsList['sitepress']['url']='/js/sitepress.js';
            $bazarJsList['sitepress']['external']=false;

            //$bazarJsButtom['wp-includes-thickbox']['url']='/js/wp-includes/thickbox.js';
            //$bazarJsButtom['wp-includes-thickbox']['external']=false;
            $bazarJsButtom['wp-includes-underscore']['url']='/js/wp-includes/underscore.min.js';
            $bazarJsButtom['wp-includes-underscore']['external']=false;
            $bazarJsButtom['wp-includes-shortcode']['url']='/js/wp-includes/shortcode.min.js';
            $bazarJsButtom['wp-includes-shortcode']['external']=false;
            $bazarJsButtom['media-upload']['url']='/js/media.upload.min.js';
            $bazarJsButtom['media-upload']['external']=false;
            $bazarJsButtom['jquery-commonlibraries']['url']='/js/jquery/jquery.commonlibraries.js';
            $bazarJsButtom['jquery-commonlibraries']['external']=false;
            $bazarJsButtom['jquery-layout']['url']='/js/jquery/jquery.layout.js';
            $bazarJsButtom['jquery-layout']['external']=false;
            $bazarJsButtom['jquery-custom']['url']='/js/jquery/jquery.custom.js';
            $bazarJsButtom['jquery-custom']['external']=false;
            $bazarJsButtom['jq-cookie']['url']='/js/jq-cookie.js';
            $bazarJsButtom['jq-cookie']['external']=false;
            $bazarJsButtom['woocompare']['url']='/js/woocompare.js';
            $bazarJsButtom['woocompare']['external']=false;
            $bazarJsButtom['jquery-colorbox']['url']='/js/jquery/jquery.colorbox-min.js';
            $bazarJsButtom['jquery-colorbox']['external']=false;
            $bazarJsButtom['responsive']['url']='/js/responsive.js';
            $bazarJsButtom['responsive']['external']=false;

            $bazarJsButtom['jquery-yith-wcwl']['url']='/js/jquery/jquery.yith-wcwl.js';
            $bazarJsButtom['jquery-yith-wcwl']['external']=false;
            $bazarJsButtom['twitter-text']['url']='/js/twitter-text.js';
            $bazarJsButtom['twitter-text']['external']=false;
            $bazarJsButtom['jquery-cycle']['url']='/js/jquery/jquery.cycle.min.js';
            $bazarJsButtom['jquery-cycle']['external']=false;
            $bazarJsButtom['core-shortcodes']['url']='/js/core/shortcodes.js';
            $bazarJsButtom['core-shortcodes']['external']=false;
            $bazarJsButtom['shortcodes']['url']='/js/shortcodes.js';
            $bazarJsButtom['shortcodes']['external']=false;
            $bazarJsButtom['widgets']['url']='/js/widgets.js';
            $bazarJsButtom['widgets']['external']=false;

            $bazarJsButtom['woocommerce2']['url']='/js/woocommerce.js';
            $bazarJsButtom['woocommerce2']['external']=false;
            $bazarJsButtom['add-to-cart']['url']='/js/add-to-cart.min.js';
            $bazarJsButtom['add-to-cart']['external']=false;
            $bazarJsButtom['chosen-jquery']['url']='/js/chosen.jquery.min.js';
            $bazarJsButtom['chosen-jquery']['external']=false;
            $bazarJsButtom['hosen-frontend']['url']='/js/chosen-frontend.min.js';
            $bazarJsButtom['hosen-frontend']['external']=false;

            $bazarJsButtom['jquery-blockUI']['url']='/js/woocommerce/jquery.blockUI.min.js';
            $bazarJsButtom['jquery-blockUI']['external']=false;
            $bazarJsButtom['woocommerce']['url']='/js/woocommerce.min.js';
            $bazarJsButtom['woocommerce']['external']=false;
            $bazarJsButtom['checkout']['url']='/js/checkout.min.js';
            $bazarJsButtom['checkout']['external']=false;
//            $bazarJsButtom['cart-fragments']['url']='/js/cart-fragments.min.js';
//            $bazarJsButtom['cart-fragments']['external']=false;
            $bazarJsButtom['jquery-placeholder']['url']='/js/jquery/jquery.placeholder.min.js';
            $bazarJsButtom['jquery-placeholder']['external']=false;
            $bazarJsButtom['changer-bazar']['url']='/js/changer-bazar.js';
            $bazarJsButtom['changer-bazar']['external']=false;
            $bazarJsButtom['yith-wcan-frontend']['url']='/js/yith-wcan-frontend.min.js';
            $bazarJsButtom['yith-wcan-frontend']['external']=false;
            $bazarJsButtom['jquery-yit-checkout']['url']='/js/jquery/jquery.yit_checkout.js';
            $bazarJsButtom['jquery-yit-checkout']['external']=false;

            $bazarCssBodyTag = 'page page-parent page-template-default no_js responsive woocommerce-checkout woocommerce-page';

            $bazarJsConfigButtom = 'var thickboxL10n = {"next":"Next >","prev":"< Prev","image":"Image","of":"of","close":"Close","noiframes":"This feature requires inline frames. You have iframes disabled or your browser does not support them.","loadingAnimation":" ","closeImage":" "};'."\n"
                . 'var l10n_handler = {"map_close":"[x] Close","map_open":"[x] Open"};'."\n"
                . 'var yith_woocompare = {"nonceadd":"2ff540915e","nonceremove":"e0a22b5f3d","ajaxurl":"","actionadd":"yith-woocompare-add-product","actionremove":"yith-woocompare-remove-product","actionview":"yith-woocompare-view-table","added_label":"Added","table_title":"Product Comparison","auto_open":"yes"};'."\n"
                . 'var yith_wcwl_l10n = {"out_of_stock":"Cannot add to the cart as product is Out of Stock!"};'."\n"
                . 'var yith_wcan = {"container":".products","pagination":".general-pagination","result_count":".woocommerce-result-count"};'."\n"
                . 'var woocommerce_params = {"countries":"{\"AF\":[],\"AT\":[],\"BE\":[],\"BI\":[],\"CZ\":[],\"DE\":[],\"DK\":[],\"FI\":[],\"FR\":[],\"HU\":[],\"IS\":[],\"IL\":[],\"KR\":[],\"NL\":[],\"NO\":[],\"PL\":[],\"PT\":[],\"SG\":[],\"SK\":[],\"SI\":[],\"LK\":[],\"SE\":[],\"VN\":[],\"AU\":{\"ACT\":\"Australian Capital Territory\",\"NSW\":\"New South Wales\",\"NT\":\"Northern Territory\",\"QLD\":\"Queensland\",\"SA\":\"South Australia\",\"TAS\":\"Tasmania\",\"VIC\":\"Victoria\",\"WA\":\"Western Australia\"},\"BR\":{\"AC\":\"Acre\",\"AL\":\"Alagoas\",\"AP\":\"Amap\u00e1\",\"AM\":\"Amazonas\",\"BH\":\"Bahia\",\"CE\":\"Cear\u00e1\",\"DF\":\"Distrito Federal\",\"ES\":\"Esp\u00edrito Santo\",\"GO\":\"Goi\u00e1s\",\"MA\":\"Maranh\u00e3o\",\"MT\":\"Mato Grosso\",\"MS\":\"Mato Grosso do Sul\",\"MG\":\"Minas Gerais\",\"PA\":\"Par\u00e1\",\"PB\":\"Para\u00edba\",\"PR\":\"Paran\u00e1\",\"PE\":\"Pernambuco\",\"PI\":\"Piau\u00ed\",\"RJ\":\"Rio de Janeiro\",\"RN\":\"Rio Grande do Norte\",\"RS\":\"Rio Grande do Sul\",\"RO\":\"Rond\u00f4nia\",\"RR\":\"Roraima\",\"SC\":\"Santa Catarina\",\"SP\":\"S\u00e3o Paulo\",\"SE\":\"Sergipe\",\"TO\":\"Tocantins\"},\"CA\":{\"AB\":\"Alberta\",\"BC\":\"British Columbia\",\"MB\":\"Manitoba\",\"NB\":\"New Brunswick\",\"NF\":\"Newfoundland\",\"NT\":\"Northwest Territories\",\"NS\":\"Nova Scotia\",\"NU\":\"Nunavut\",\"ON\":\"Ontario\",\"PE\":\"Prince Edward Island\",\"QC\":\"Quebec\",\"SK\":\"Saskatchewan\",\"YT\":\"Yukon Territory\"},\"CN\":{\"CN1\":\"Yunnan \\\/ \u4e91\u5357\",\"CN2\":\"Beijing \\\/ \u5317\u4eac\",\"CN3\":\"Tianjin \\\/ \u5929\u6d25\",\"CN4\":\"Hebei \\\/ \u6cb3\u5317\",\"CN5\":\"Shanxi \\\/ \u5c71\u897f\",\"CN6\":\"Inner Mongolia \\\/ \u5167\u8499\u53e4\",\"CN7\":\"Liaoning \\\/ \u8fbd\u5b81\",\"CN8\":\"Jilin \\\/ \u5409\u6797\",\"CN9\":\"Heilongjiang \\\/ \u9ed1\u9f99\u6c5f\",\"CN10\":\"Shanghai \\\/ \u4e0a\u6d77\",\"CN11\":\"Jiangsu \\\/ \u6c5f\u82cf\",\"CN12\":\"Zhejiang \\\/ \u6d59\u6c5f\",\"CN13\":\"Anhui \\\/ \u5b89\u5fbd\",\"CN14\":\"Fujian \\\/ \u798f\u5efa\",\"CN15\":\"Jiangxi \\\/ \u6c5f\u897f\",\"CN16\":\"Shandong \\\/ \u5c71\u4e1c\",\"CN17\":\"Henan \\\/ \u6cb3\u5357\",\"CN18\":\"Hubei \\\/ \u6e56\u5317\",\"CN19\":\"Hunan \\\/ \u6e56\u5357\",\"CN20\":\"Guangdong \\\/ \u5e7f\u4e1c\",\"CN21\":\"Guangxi Zhuang \\\/ \u5e7f\u897f\u58ee\u65cf\",\"CN22\":\"Hainan \\\/ \u6d77\u5357\",\"CN23\":\"Chongqing \\\/ \u91cd\u5e86\",\"CN24\":\"Sichuan \\\/ \u56db\u5ddd\",\"CN25\":\"Guizhou \\\/ \u8d35\u5dde\",\"CN26\":\"Shaanxi \\\/ \u9655\u897f\",\"CN27\":\"Gansu \\\/ \u7518\u8083\",\"CN28\":\"Qinghai \\\/ \u9752\u6d77\",\"CN29\":\"Ningxia Hui \\\/ \u5b81\u590f\",\"CN30\":\"Macau \\\/ \u6fb3\u95e8\",\"CN31\":\"Tibet \\\/ \u897f\u85cf\",\"CN32\":\"Xinjiang \\\/ \u65b0\u7586\"},\"HK\":{\"HONG KONG\":\"Hong Kong Island\",\"KOWLOON\":\"Kowloon\",\"NEW TERRITORIES\":\"New Territories\"},\"IN\":{\"AP\":\"Andra Pradesh\",\"AR\":\"Arunachal Pradesh\",\"AS\":\"Assam\",\"BR\":\"Bihar\",\"CT\":\"Chhattisgarh\",\"GA\":\"Goa\",\"GJ\":\"Gujarat\",\"HR\":\"Haryana\",\"HP\":\"Himachal Pradesh\",\"JK\":\"Jammu and Kashmir\",\"JH\":\"Jharkhand\",\"KA\":\"Karnataka\",\"KL\":\"Kerala\",\"MP\":\"Madhya Pradesh\",\"MH\":\"Maharashtra\",\"MN\":\"Manipur\",\"ML\":\"Meghalaya\",\"MZ\":\"Mizoram\",\"NL\":\"Nagaland\",\"OR\":\"Orissa\",\"PB\":\"Punjab\",\"RJ\":\"Rajasthan\",\"SK\":\"Sikkim\",\"TN\":\"Tamil Nadu\",\"TR\":\"Tripura\",\"UT\":\"Uttaranchal\",\"UP\":\"Uttar Pradesh\",\"WB\":\"West Bengal\",\"AN\":\"Andaman and Nicobar Islands\",\"CH\":\"Chandigarh\",\"DN\":\"Dadar and Nagar Haveli\",\"DD\":\"Daman and Diu\",\"DL\":\"Delhi\",\"LD\":\"Lakshadeep\",\"PY\":\"Pondicherry (Puducherry)\"},\"ID\":{\"AC\":\"Daerah Istimewa Aceh\",\"SU\":\"Sumatera Utara\",\"SB\":\"Sumatera Barat\",\"RI\":\"Riau\",\"KR\":\"Kepulauan Riau\",\"JA\":\"Jambi\",\"SS\":\"Sumatera Selatan\",\"BB\":\"Bangka Belitung\",\"BE\":\"Bengkulu\",\"LA\":\"Lampung\",\"JK\":\"DKI Jakarta\",\"JB\":\"Jawa Barat\",\"BT\":\"Banten\",\"JT\":\"Jawa Tengah\",\"JI\":\"Jawa Timur\",\"YO\":\"Daerah Istimewa Yogyakarta\",\"BA\":\"Bali\",\"NB\":\"Nusa Tenggara Barat\",\"NT\":\"Nusa Tenggara Timur\",\"KB\":\"Kalimantan Barat\",\"KT\":\"Kalimantan Tengah\",\"KI\":\"Kalimantan Timur\",\"KS\":\"Kalimantan Selatan\",\"KU\":\"Kalimantan Utara\",\"SA\":\"Sulawesi Utara\",\"ST\":\"Sulawesi Tengah\",\"SG\":\"Sulawesi Tenggara\",\"SR\":\"Sulawesi Barat\",\"SN\":\"Sulawesi Selatan\",\"GO\":\"Gorontalo\",\"MA\":\"Maluku\",\"MU\":\"Maluku Utara\",\"PA\":\"Papua\",\"PB\":\"Papua Barat\"},\"MY\":{\"JHR\":\"Johor\",\"KDH\":\"Kedah\",\"KTN\":\"Kelantan\",\"MLK\":\"Melaka\",\"NSN\":\"Negeri Sembilan\",\"PHG\":\"Pahang\",\"PRK\":\"Perak\",\"PLS\":\"Perlis\",\"PNG\":\"Pulau Pinang\",\"SBH\":\"Sabah\",\"SWK\":\"Sarawak\",\"SGR\":\"Selangor\",\"TRG\":\"Terengganu\",\"KUL\":\"W.P. Kuala Lumpur\",\"LBN\":\"W.P. Labuan\",\"PJY\":\"W.P. Putrajaya\"},\"NZ\":{\"NL\":\"Northland\",\"AK\":\"Auckland\",\"WA\":\"Waikato\",\"BP\":\"Bay of Plenty\",\"TK\":\"Taranaki\",\"HB\":\"Hawke\u2019s Bay\",\"MW\":\"Manawatu-Wanganui\",\"WE\":\"Wellington\",\"NS\":\"Nelson\",\"MB\":\"Marlborough\",\"TM\":\"Tasman\",\"WC\":\"West Coast\",\"CT\":\"Canterbury\",\"OT\":\"Otago\",\"SL\":\"Southland\"},\"ZA\":{\"EC\":\"Eastern Cape\",\"FS\":\"Free State\",\"GP\":\"Gauteng\",\"KZN\":\"KwaZulu-Natal\",\"LP\":\"Limpopo\",\"MP\":\"Mpumalanga\",\"NC\":\"Northern Cape\",\"NW\":\"North West\",\"WC\":\"Western Cape\"},\"TH\":{\"TH-37\":\"Amnat Charoen (\u0e2d\u0e33\u0e19\u0e32\u0e08\u0e40\u0e08\u0e23\u0e34\u0e0d)\",\"TH-15\":\"Ang Thong (\u0e2d\u0e48\u0e32\u0e07\u0e17\u0e2d\u0e07)\",\"TH-14\":\"Ayutthaya (\u0e1e\u0e23\u0e30\u0e19\u0e04\u0e23\u0e28\u0e23\u0e35\u0e2d\u0e22\u0e38\u0e18\u0e22\u0e32)\",\"TH-10\":\"Bangkok (\u0e01\u0e23\u0e38\u0e07\u0e40\u0e17\u0e1e\u0e21\u0e2b\u0e32\u0e19\u0e04\u0e23)\",\"TH-38\":\"Bueng Kan (\u0e1a\u0e36\u0e07\u0e01\u0e32\u0e2c)\",\"TH-31\":\"Buri Ram (\u0e1a\u0e38\u0e23\u0e35\u0e23\u0e31\u0e21\u0e22\u0e4c)\",\"TH-24\":\"Chachoengsao (\u0e09\u0e30\u0e40\u0e0a\u0e34\u0e07\u0e40\u0e17\u0e23\u0e32)\",\"TH-18\":\"Chai Nat (\u0e0a\u0e31\u0e22\u0e19\u0e32\u0e17)\",\"TH-36\":\"Chaiyaphum (\u0e0a\u0e31\u0e22\u0e20\u0e39\u0e21\u0e34)\",\"TH-22\":\"Chanthaburi (\u0e08\u0e31\u0e19\u0e17\u0e1a\u0e38\u0e23\u0e35)\",\"TH-50\":\"Chiang Mai (\u0e40\u0e0a\u0e35\u0e22\u0e07\u0e43\u0e2b\u0e21\u0e48)\",\"TH-57\":\"Chiang Rai (\u0e40\u0e0a\u0e35\u0e22\u0e07\u0e23\u0e32\u0e22)\",\"TH-20\":\"Chonburi (\u0e0a\u0e25\u0e1a\u0e38\u0e23\u0e35)\",\"TH-86\":\"Chumphon (\u0e0a\u0e38\u0e21\u0e1e\u0e23)\",\"TH-46\":\"Kalasin (\u0e01\u0e32\u0e2c\u0e2a\u0e34\u0e19\u0e18\u0e38\u0e4c)\",\"TH-62\":\"Kamphaeng Phet (\u0e01\u0e33\u0e41\u0e1e\u0e07\u0e40\u0e1e\u0e0a\u0e23)\",\"TH-71\":\"Kanchanaburi (\u0e01\u0e32\u0e0d\u0e08\u0e19\u0e1a\u0e38\u0e23\u0e35)\",\"TH-40\":\"Khon Kaen (\u0e02\u0e2d\u0e19\u0e41\u0e01\u0e48\u0e19)\",\"TH-81\":\"Krabi (\u0e01\u0e23\u0e30\u0e1a\u0e35\u0e48)\",\"TH-52\":\"Lampang (\u0e25\u0e33\u0e1b\u0e32\u0e07)\",\"TH-51\":\"Lamphun (\u0e25\u0e33\u0e1e\u0e39\u0e19)\",\"TH-42\":\"Loei (\u0e40\u0e25\u0e22)\",\"TH-16\":\"Lopburi (\u0e25\u0e1e\u0e1a\u0e38\u0e23\u0e35)\",\"TH-58\":\"Mae Hong Son (\u0e41\u0e21\u0e48\u0e2e\u0e48\u0e2d\u0e07\u0e2a\u0e2d\u0e19)\",\"TH-44\":\"Maha Sarakham (\u0e21\u0e2b\u0e32\u0e2a\u0e32\u0e23\u0e04\u0e32\u0e21)\",\"TH-49\":\"Mukdahan (\u0e21\u0e38\u0e01\u0e14\u0e32\u0e2b\u0e32\u0e23)\",\"TH-26\":\"Nakhon Nayok (\u0e19\u0e04\u0e23\u0e19\u0e32\u0e22\u0e01)\",\"TH-73\":\"Nakhon Pathom (\u0e19\u0e04\u0e23\u0e1b\u0e10\u0e21)\",\"TH-48\":\"Nakhon Phanom (\u0e19\u0e04\u0e23\u0e1e\u0e19\u0e21)\",\"TH-30\":\"Nakhon Ratchasima (\u0e19\u0e04\u0e23\u0e23\u0e32\u0e0a\u0e2a\u0e35\u0e21\u0e32)\",\"TH-60\":\"Nakhon Sawan (\u0e19\u0e04\u0e23\u0e2a\u0e27\u0e23\u0e23\u0e04\u0e4c)\",\"TH-80\":\"Nakhon Si Thammarat (\u0e19\u0e04\u0e23\u0e28\u0e23\u0e35\u0e18\u0e23\u0e23\u0e21\u0e23\u0e32\u0e0a)\",\"TH-55\":\"Nan (\u0e19\u0e48\u0e32\u0e19)\",\"TH-96\":\"Narathiwat (\u0e19\u0e23\u0e32\u0e18\u0e34\u0e27\u0e32\u0e2a)\",\"TH-39\":\"Nong Bua Lam Phu (\u0e2b\u0e19\u0e2d\u0e07\u0e1a\u0e31\u0e27\u0e25\u0e33\u0e20\u0e39)\",\"TH-43\":\"Nong Khai (\u0e2b\u0e19\u0e2d\u0e07\u0e04\u0e32\u0e22)\",\"TH-12\":\"Nonthaburi (\u0e19\u0e19\u0e17\u0e1a\u0e38\u0e23\u0e35)\",\"TH-13\":\"Pathum Thani (\u0e1b\u0e17\u0e38\u0e21\u0e18\u0e32\u0e19\u0e35)\",\"TH-94\":\"Pattani (\u0e1b\u0e31\u0e15\u0e15\u0e32\u0e19\u0e35)\",\"TH-82\":\"Phang Nga (\u0e1e\u0e31\u0e07\u0e07\u0e32)\",\"TH-93\":\"Phatthalung (\u0e1e\u0e31\u0e17\u0e25\u0e38\u0e07)\",\"TH-56\":\"Phayao (\u0e1e\u0e30\u0e40\u0e22\u0e32)\",\"TH-67\":\"Phetchabun (\u0e40\u0e1e\u0e0a\u0e23\u0e1a\u0e39\u0e23\u0e13\u0e4c)\",\"TH-76\":\"Phetchaburi (\u0e40\u0e1e\u0e0a\u0e23\u0e1a\u0e38\u0e23\u0e35)\",\"TH-66\":\"Phichit (\u0e1e\u0e34\u0e08\u0e34\u0e15\u0e23)\",\"TH-65\":\"Phitsanulok (\u0e1e\u0e34\u0e29\u0e13\u0e38\u0e42\u0e25\u0e01)\",\"TH-54\":\"Phrae (\u0e41\u0e1e\u0e23\u0e48)\",\"TH-83\":\"Phuket (\u0e20\u0e39\u0e40\u0e01\u0e47\u0e15)\",\"TH-25\":\"Prachin Buri (\u0e1b\u0e23\u0e32\u0e08\u0e35\u0e19\u0e1a\u0e38\u0e23\u0e35)\",\"TH-77\":\"Prachuap Khiri Khan (\u0e1b\u0e23\u0e30\u0e08\u0e27\u0e1a\u0e04\u0e35\u0e23\u0e35\u0e02\u0e31\u0e19\u0e18\u0e4c)\",\"TH-85\":\"Ranong (\u0e23\u0e30\u0e19\u0e2d\u0e07)\",\"TH-70\":\"Ratchaburi (\u0e23\u0e32\u0e0a\u0e1a\u0e38\u0e23\u0e35)\",\"TH-21\":\"Rayong (\u0e23\u0e30\u0e22\u0e2d\u0e07)\",\"TH-45\":\"Roi Et (\u0e23\u0e49\u0e2d\u0e22\u0e40\u0e2d\u0e47\u0e14)\",\"TH-27\":\"Sa Kaeo (\u0e2a\u0e23\u0e30\u0e41\u0e01\u0e49\u0e27)\",\"TH-47\":\"Sakon Nakhon (\u0e2a\u0e01\u0e25\u0e19\u0e04\u0e23)\",\"TH-11\":\"Samut Prakan (\u0e2a\u0e21\u0e38\u0e17\u0e23\u0e1b\u0e23\u0e32\u0e01\u0e32\u0e23)\",\"TH-74\":\"Samut Sakhon (\u0e2a\u0e21\u0e38\u0e17\u0e23\u0e2a\u0e32\u0e04\u0e23)\",\"TH-75\":\"Samut Songkhram (\u0e2a\u0e21\u0e38\u0e17\u0e23\u0e2a\u0e07\u0e04\u0e23\u0e32\u0e21)\",\"TH-19\":\"Saraburi (\u0e2a\u0e23\u0e30\u0e1a\u0e38\u0e23\u0e35)\",\"TH-91\":\"Satun (\u0e2a\u0e15\u0e39\u0e25)\",\"TH-17\":\"Sing Buri (\u0e2a\u0e34\u0e07\u0e2b\u0e4c\u0e1a\u0e38\u0e23\u0e35)\",\"TH-33\":\"Sisaket (\u0e28\u0e23\u0e35\u0e2a\u0e30\u0e40\u0e01\u0e29)\",\"TH-90\":\"Songkhla (\u0e2a\u0e07\u0e02\u0e25\u0e32)\",\"TH-64\":\"Sukhothai (\u0e2a\u0e38\u0e42\u0e02\u0e17\u0e31\u0e22)\",\"TH-72\":\"Suphan Buri (\u0e2a\u0e38\u0e1e\u0e23\u0e23\u0e13\u0e1a\u0e38\u0e23\u0e35)\",\"TH-84\":\"Surat Thani (\u0e2a\u0e38\u0e23\u0e32\u0e29\u0e0e\u0e23\u0e4c\u0e18\u0e32\u0e19\u0e35)\",\"TH-32\":\"Surin (\u0e2a\u0e38\u0e23\u0e34\u0e19\u0e17\u0e23\u0e4c)\",\"TH-63\":\"Tak (\u0e15\u0e32\u0e01)\",\"TH-92\":\"Trang (\u0e15\u0e23\u0e31\u0e07)\",\"TH-23\":\"Trat (\u0e15\u0e23\u0e32\u0e14)\",\"TH-34\":\"Ubon Ratchathani (\u0e2d\u0e38\u0e1a\u0e25\u0e23\u0e32\u0e0a\u0e18\u0e32\u0e19\u0e35)\",\"TH-41\":\"Udon Thani (\u0e2d\u0e38\u0e14\u0e23\u0e18\u0e32\u0e19\u0e35)\",\"TH-61\":\"Uthai Thani (\u0e2d\u0e38\u0e17\u0e31\u0e22\u0e18\u0e32\u0e19\u0e35)\",\"TH-53\":\"Uttaradit (\u0e2d\u0e38\u0e15\u0e23\u0e14\u0e34\u0e15\u0e16\u0e4c)\",\"TH-95\":\"Yala (\u0e22\u0e30\u0e25\u0e32)\",\"TH-35\":\"Yasothon (\u0e22\u0e42\u0e2a\u0e18\u0e23)\"},\"US\":{\"AL\":\"Alabama\",\"AK\":\"Alaska\",\"AZ\":\"Arizona\",\"AR\":\"Arkansas\",\"CA\":\"California\",\"CO\":\"Colorado\",\"CT\":\"Connecticut\",\"DE\":\"Delaware\",\"DC\":\"District Of Columbia\",\"FL\":\"Florida\",\"GA\":\"Georgia\",\"HI\":\"Hawaii\",\"ID\":\"Idaho\",\"IL\":\"Illinois\",\"IN\":\"Indiana\",\"IA\":\"Iowa\",\"KS\":\"Kansas\",\"KY\":\"Kentucky\",\"LA\":\"Louisiana\",\"ME\":\"Maine\",\"MD\":\"Maryland\",\"MA\":\"Massachusetts\",\"MI\":\"Michigan\",\"MN\":\"Minnesota\",\"MS\":\"Mississippi\",\"MO\":\"Missouri\",\"MT\":\"Montana\",\"NE\":\"Nebraska\",\"NV\":\"Nevada\",\"NH\":\"New Hampshire\",\"NJ\":\"New Jersey\",\"NM\":\"New Mexico\",\"NY\":\"New York\",\"NC\":\"North Carolina\",\"ND\":\"North Dakota\",\"OH\":\"Ohio\",\"OK\":\"Oklahoma\",\"OR\":\"Oregon\",\"PA\":\"Pennsylvania\",\"RI\":\"Rhode Island\",\"SC\":\"South Carolina\",\"SD\":\"South Dakota\",\"TN\":\"Tennessee\",\"TX\":\"Texas\",\"UT\":\"Utah\",\"VT\":\"Vermont\",\"VA\":\"Virginia\",\"WA\":\"Washington\",\"WV\":\"West Virginia\",\"WI\":\"Wisconsin\",\"WY\":\"Wyoming\",\"AA\":\"Armed Forces (AA)\",\"AE\":\"Armed Forces (AE)\",\"AP\":\"Armed Forces (AP)\",\"AS\":\"American Samoa\",\"GU\":\"Guam\",\"MP\":\"Northern Mariana Islands\",\"PR\":\"Puerto Rico\",\"UM\":\"US Minor Outlying Islands\",\"VI\":\"US Virgin Islands\"}}","plugin_url":" ","ajax_url":"","ajax_loader_url":" \/assets\/images\/ajax-loader@2x.gif","i18n_select_state_text":"Select an option\u2026","i18n_required_rating_text":"Please select a rating","i18n_no_matching_variations_text":"Sorry, no products matched your selection. Please choose a different combination.","i18n_required_text":"required","i18n_view_cart":"View Cart \u2192","review_rating_required":"yes","update_order_review_nonce":"a78e52b6a3","apply_coupon_nonce":"8f0edd60db","option_guest_checkout":"yes","checkout_url":"","is_checkout":"1","update_shipping_method_nonce":"6a05f18b77","add_to_cart_nonce":"20221f8ca4","cart_url":" ","cart_redirect_after_add":"no","locale":"{\"AF\":{\"state\":{\"required\":false}},\"AT\":{\"postcode_before_city\":true,\"state\":{\"required\":false}},\"BE\":{\"postcode_before_city\":true,\"state\":{\"required\":false,\"label\":\"Province\"}},\"BI\":{\"state\":{\"required\":false}},\"CA\":{\"state\":{\"label\":\"Province\"}},\"CH\":{\"postcode_before_city\":true,\"state\":{\"label\":\"Canton\",\"required\":false}},\"CL\":{\"city\":{\"required\":false},\"state\":{\"label\":\"Municipality\"}},\"CN\":{\"state\":{\"label\":\"Province\"}},\"CO\":{\"postcode\":{\"required\":false}},\"CZ\":{\"state\":{\"required\":false}},\"DE\":{\"postcode_before_city\":true,\"state\":{\"required\":false}},\"DK\":{\"postcode_before_city\":true,\"state\":{\"required\":false}},\"FI\":{\"postcode_before_city\":true,\"state\":{\"required\":false}},\"FR\":{\"postcode_before_city\":true,\"state\":{\"required\":false}},\"HK\":{\"postcode\":{\"required\":false},\"city\":{\"label\":\"Town \\\/ District\"},\"state\":{\"label\":\"Region\"}},\"HU\":{\"state\":{\"required\":false}},\"ID\":{\"state\":{\"label\":\"Province\"}},\"IS\":{\"postcode_before_city\":true,\"state\":{\"required\":false}},\"IL\":{\"postcode_before_city\":true,\"state\":{\"required\":false}},\"KR\":{\"state\":{\"required\":false}},\"NL\":{\"postcode_before_city\":true,\"state\":{\"required\":false,\"label\":\"Province\"}},\"NZ\":{\"state\":{\"required\":false}},\"NO\":{\"postcode_before_city\":true,\"state\":{\"required\":false}},\"PL\":{\"postcode_before_city\":true,\"state\":{\"required\":false}},\"PT\":{\"state\":{\"required\":false}},\"RO\":{\"state\":{\"required\":false}},\"SG\":{\"state\":{\"required\":false}},\"SK\":{\"postcode_before_city\":true,\"state\":{\"required\":false}},\"SI\":{\"postcode_before_city\":true,\"state\":{\"required\":false}},\"ES\":{\"postcode_before_city\":true,\"state\":{\"label\":\"Province\"}},\"LI\":{\"postcode_before_city\":true,\"state\":{\"label\":\"Municipality\",\"required\":false}},\"LK\":{\"state\":{\"required\":false}},\"SE\":{\"postcode_before_city\":true,\"state\":{\"required\":false}},\"TR\":{\"postcode_before_city\":true,\"state\":{\"label\":\"Province\"}},\"US\":{\"postcode\":{\"label\":\"Zip\"},\"state\":{\"label\":\"State\"}},\"GB\":{\"postcode\":{\"label\":\"Postcode\"},\"state\":{\"label\":\"County\",\"required\":false}},\"VN\":{\"state\":{\"required\":false},\"postcode\":{\"required\":false,\"hidden\":true},\"address_2\":{\"required\":false,\"hidden\":true}},\"WS\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"ZA\":{\"state\":{\"label\":\"Province\"}},\"ZW\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"default\":{\"country\":{\"type\":\"country\",\"label\":\"Country\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\",\"update_totals_on_change\"]},\"first_name\":{\"label\":\"First Name\",\"required\":true,\"class\":[\"form-row-first\"]},\"last_name\":{\"label\":\"Last Name\",\"required\":true,\"class\":[\"form-row-last\"],\"clear\":true},\"company\":{\"label\":\"Company Name\",\"class\":[\"form-row-wide\"]},\"address_1\":{\"label\":\"Address\",\"placeholder\":\"Street address\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"]},\"address_2\":{\"placeholder\":\"Apartment, suite, unit etc. (optional)\",\"class\":[\"form-row-wide\",\"address-field\"],\"required\":false},\"city\":{\"label\":\"Town \\\/ City\",\"placeholder\":\"Town \\\/ City\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"]},\"state\":{\"type\":\"state\",\"label\":\"State \\\/ County\",\"placeholder\":\"State \\\/ County\",\"required\":true,\"class\":[\"form-row-first\",\"address-field\"]},\"postcode\":{\"label\":\"Postcode \\\/ Zip\",\"placeholder\":\"Postcode \\\/ Zip\",\"required\":true,\"class\":[\"form-row-last\",\"address-field\"],\"clear\":true}}}"};';
            break;
        case 'all_designs':
            $menu_selector['all_designs'] = 'current-menu-ancestor';
            default_css_js_init($bazarClassList, $bazarJsList, $bazarJsButtom, $bazarCssBodyTag, $bazarJsConfigButtom);
            break;
        case 'all_widgets':
            $menu_selector['all_widgets'] = 'current-menu-ancestor';
            default_css_js_init($bazarClassList, $bazarJsList, $bazarJsButtom, $bazarCssBodyTag, $bazarJsConfigButtom);
            break;
        case 'front':
            $menu_selector['front'] = 'current-menu-ancestor';
            default_css_js_init($bazarClassList, $bazarJsList, $bazarJsButtom, $bazarCssBodyTag, $bazarJsConfigButtom);
            break;
        default:
//            $bazarClassList['reset-bootstrap']['url']='/css/reset-bootstrap.css';
//            $bazarClassList['reset-bootstrap']['external']=false;
            $bazarClassList['language-selector']['url']='/css/language-selector.css';
            $bazarClassList['language-selector']['external']=false;
            $bazarClassList['style']['url']='/css/style.css';
            $bazarClassList['style']['external']=false;
            $bazarClassList['thickbox-css']['url']='/css/thickbox/thickbox.css';
            $bazarClassList['thickbox-css']['external']=false;
            $bazarClassList['google-fonts-css']['url']="http://fonts.googleapis.com/css?family=Playfair+Display%7COpen+Sans+Condensed%3A300%7COpen+Sans%7CShadows+Into+Light%7COswald%7CPlay%7CMuli%7CArbutus+Slab%7CAbel&#038;ver=3.5.2";
            $bazarClassList['google-fonts-css']['external']=true;
            $bazarClassList['jquery-colorbox-css']['url']='/css/colorbox.css';
            $bazarClassList['jquery-colorbox-css']['external']=false;
            $bazarClassList['yith-wcwl-user-main-css']['url']='/css/wishlist.css';
            $bazarClassList['yith-wcwl-user-main-css']['external']=false;
            $bazarClassList['woocommerce_frontend_styles-css']['url']='/css/woocommerce/style.css';
            $bazarClassList['woocommerce_frontend_styles-css']['external']=false;
            $bazarClassList['styles-minified-css']['url']='/css/cache/style-28.css';
            $bazarClassList['styles-minified-css']['external']=false;
            $bazarClassList['custom-css']['url']='/css/custom.css';
            $bazarClassList['custom-css']['external']=false;
            $bazarClassList['cache-custom-css']['url']='/css/cache/custom-28.css';
            $bazarClassList['cache-custom-css']['external']=false;
            $bazarClassList['style-changer-css']['url']='/css/picker-celestino.css';
            $bazarClassList['style-changer-css']['external']=false;
            $bazarClassList['colorpicker-css']['url']='/css/colorpicker.css';
            $bazarClassList['colorpicker-css']['external']=false;

            $bazarJsList['comment-reply']['url']='/js/comment-reply.min.js';
            $bazarJsList['comment-reply']['external']=false;
            $bazarJsList['jquery-cookie']['url']='/js/jquery/jquery.cookie.js';
            $bazarJsList['jquery-cookie']['external']=false;
            $bazarJsList['colorpicker']['url']='/js/colorpicker.js';
            $bazarJsList['colorpicker']['external']=false;
            $bazarJsList['sitepress']['url']='/js/sitepress.js';
            $bazarJsList['sitepress']['external']=false;


//            $bazarJsButtom['yit_browser']['url']='/core/assets/js/yit/yit_browser.js';
//            $bazarJsButtom['yit_browser']['external']=false;
            //$bazarJsButtom['wp-includes-thickbox']['url']='/js/wp-includes/thickbox.js';
            //$bazarJsButtom['wp-includes-thickbox']['external']=false;
            $bazarJsButtom['wp-includes-underscore']['url']='/js/wp-includes/underscore.min.js';
            $bazarJsButtom['wp-includes-underscore']['external']=false;
            $bazarJsButtom['wp-includes-shortcode']['url']='/js/wp-includes/shortcode.min.js';
            $bazarJsButtom['wp-includes-shortcode']['external']=false;
            $bazarJsButtom['media-upload']['url']='/js/media.upload.min.js';
            $bazarJsButtom['media-upload']['external']=false;
            $bazarJsButtom['jquery-commonlibraries']['url']='/js/jquery/jquery.commonlibraries.js';
            $bazarJsButtom['jquery-commonlibraries']['external']=false;
            $bazarJsButtom['jquery-layout']['url']='/js/jquery/jquery.layout.js';
            $bazarJsButtom['jquery-layout']['external']=false;
            $bazarJsButtom['jquery-custom']['url']='/js/jquery/jquery.custom.js';
            $bazarJsButtom['jquery-custom']['external']=false;
            $bazarJsButtom['woocompare']['url']='/js/woocompare.js';
            $bazarJsButtom['woocompare']['external']=false;
            $bazarJsButtom['jquery-colorbox']['url']='/js/jquery/jquery.colorbox-min.js';
            $bazarJsButtom['jquery-colorbox']['external']=false;
            $bazarJsButtom['responsive']['url']='/js/responsive.js';
            $bazarJsButtom['responsive']['external']=false;
            $bazarJsButtom['jquery-yith-wcwl']['url']='/js/jquery/jquery.yith-wcwl.js';
            $bazarJsButtom['jquery-yith-wcwl']['external']=false;
            $bazarJsButtom['twitter-text']['url']='/js/twitter-text.js';
            $bazarJsButtom['twitter-text']['external']=false;
            $bazarJsButtom['jquery-cycle']['url']='/js/jquery/jquery.cycle.min.js';
            $bazarJsButtom['jquery-cycle']['external']=false;
            $bazarJsButtom['core-shortcodes']['url']='/js/core/shortcodes.js';
            $bazarJsButtom['core-shortcodes']['external']=false;
            $bazarJsButtom['shortcodes']['url']='/js/shortcodes.js';
            $bazarJsButtom['shortcodes']['external']=false;
            $bazarJsButtom['widgets']['url']='/js/widgets.js';
            $bazarJsButtom['widgets']['external']=false;
            $bazarJsButtom['jq-cookie']['url']='/js/jq-cookie.js';
            $bazarJsButtom['jq-cookie']['external']=false;
            $bazarJsButtom['woocommerce2']['url']='/js/woocommerce.js';
            $bazarJsButtom['woocommerce2']['external']=false;
            $bazarJsButtom['add-to-cart']['url']='/js/add-to-cart.min.js';
            $bazarJsButtom['add-to-cart']['external']=false;
            $bazarJsButtom['jquery-blockUI']['url']='/js/woocommerce/jquery.blockUI.min.js';
            $bazarJsButtom['jquery-blockUI']['external']=false;
            $bazarJsButtom['woocommerce']['url']='/js/woocommerce.min.js';
            $bazarJsButtom['woocommerce']['external']=false;
//            $bazarJsButtom['cart-fragments']['url']='/js/cart-fragments.min.js';
//            $bazarJsButtom['cart-fragments']['external']=false;
            $bazarJsButtom['jquery-placeholder']['url']='/js/jquery/jquery.placeholder.min.js';
            $bazarJsButtom['jquery-placeholder']['external']=false;
            $bazarJsButtom['changer-bazar']['url']='/js/changer-bazar.js';
            $bazarJsButtom['changer-bazar']['external']=false;
            $bazarJsButtom['yith-wcan-frontend']['url']='/js/yith-wcan-frontend.min.js';
            $bazarJsButtom['yith-wcan-frontend']['external']=false;
            $bazarJsButtom['jquery-eislideshow']['url']='/js/jquery/jquery.eislideshow.js';
            $bazarJsButtom['jquery-eislideshow']['external']=false;
            $bazarJsButtom['jquery-carouFredSel']['url']='//js/jquery/jquery.carouFredSel-6.1.0-packed.js';
            $bazarJsButtom['jquery-carouFredSel']['external']=false;
            $bazarJsButtom['jquery-touchSwipe']['url']='/js/jquery/jquery.touchSwipe.min.js';
            $bazarJsButtom['jquery-touchSwipe']['external']=false;
            $bazarJsButtom['jquery-mousewheel']['url']='/js/jquery/jquery.mousewheel.min.js';
            $bazarJsButtom['jquery-mousewheel']['external']=false;

            $bazarCssBodyTag = 'no_js responsive';
//            $bazarCssBodyTag = 'page page-child page-template-default no_js stretched responsive';

            $bazarJsConfigButtom = 'var thickboxL10n = {"next":"Next >","prev":"< Prev","image":"Image","of":"of","close":"Close","noiframes":"This feature requires inline frames. You have iframes disabled or your browser does not support them.","loadingAnimation":" ","closeImage":" "};'."\n"
                . 'var l10n_handler = {"map_close":"[x] Close","map_open":"[x] Open"};'."\n"
                . 'var yith_woocompare = {"nonceadd":"2ff540915e","nonceremove":"e0a22b5f3d","ajaxurl":"","actionadd":"yith-woocompare-add-product","actionremove":"yith-woocompare-remove-product","actionview":"yith-woocompare-view-table","added_label":"Added","table_title":"Product Comparison","auto_open":"yes"};'."\n"
                . 'var yith_wcwl_l10n = {"out_of_stock":"Cannot add to the cart as product is Out of Stock!"};'."\n"
                . 'var yith_wcan = {"container":".products","pagination":".general-pagination","result_count":".woocommerce-result-count"};'."\n"
                . 'var woocommerce_params = {"countries":"{\"AF\":[],\"AT\":[],\"BE\":[],\"BI\":[],\"CZ\":[],\"DE\":[],\"DK\":[],\"FI\":[],\"FR\":[],\"HU\":[],\"IS\":[],\"IL\":[],\"KR\":[],\"NL\":[],\"NO\":[],\"PL\":[],\"PT\":[],\"SG\":[],\"SK\":[],\"SI\":[],\"LK\":[],\"SE\":[],\"VN\":[],\"AU\":{\"ACT\":\"Australian Capital Territory\",\"NSW\":\"New South Wales\",\"NT\":\"Northern Territory\",\"QLD\":\"Queensland\",\"SA\":\"South Australia\",\"TAS\":\"Tasmania\",\"VIC\":\"Victoria\",\"WA\":\"Western Australia\"},\"BR\":{\"AC\":\"Acre\",\"AL\":\"Alagoas\",\"AP\":\"Amap\u00e1\",\"AM\":\"Amazonas\",\"BH\":\"Bahia\",\"CE\":\"Cear\u00e1\",\"DF\":\"Distrito Federal\",\"ES\":\"Esp\u00edrito Santo\",\"GO\":\"Goi\u00e1s\",\"MA\":\"Maranh\u00e3o\",\"MT\":\"Mato Grosso\",\"MS\":\"Mato Grosso do Sul\",\"MG\":\"Minas Gerais\",\"PA\":\"Par\u00e1\",\"PB\":\"Para\u00edba\",\"PR\":\"Paran\u00e1\",\"PE\":\"Pernambuco\",\"PI\":\"Piau\u00ed\",\"RJ\":\"Rio de Janeiro\",\"RN\":\"Rio Grande do Norte\",\"RS\":\"Rio Grande do Sul\",\"RO\":\"Rond\u00f4nia\",\"RR\":\"Roraima\",\"SC\":\"Santa Catarina\",\"SP\":\"S\u00e3o Paulo\",\"SE\":\"Sergipe\",\"TO\":\"Tocantins\"},\"CA\":{\"AB\":\"Alberta\",\"BC\":\"British Columbia\",\"MB\":\"Manitoba\",\"NB\":\"New Brunswick\",\"NF\":\"Newfoundland\",\"NT\":\"Northwest Territories\",\"NS\":\"Nova Scotia\",\"NU\":\"Nunavut\",\"ON\":\"Ontario\",\"PE\":\"Prince Edward Island\",\"QC\":\"Quebec\",\"SK\":\"Saskatchewan\",\"YT\":\"Yukon Territory\"},\"CN\":{\"CN1\":\"Yunnan \\\/ \u4e91\u5357\",\"CN2\":\"Beijing \\\/ \u5317\u4eac\",\"CN3\":\"Tianjin \\\/ \u5929\u6d25\",\"CN4\":\"Hebei \\\/ \u6cb3\u5317\",\"CN5\":\"Shanxi \\\/ \u5c71\u897f\",\"CN6\":\"Inner Mongolia \\\/ \u5167\u8499\u53e4\",\"CN7\":\"Liaoning \\\/ \u8fbd\u5b81\",\"CN8\":\"Jilin \\\/ \u5409\u6797\",\"CN9\":\"Heilongjiang \\\/ \u9ed1\u9f99\u6c5f\",\"CN10\":\"Shanghai \\\/ \u4e0a\u6d77\",\"CN11\":\"Jiangsu \\\/ \u6c5f\u82cf\",\"CN12\":\"Zhejiang \\\/ \u6d59\u6c5f\",\"CN13\":\"Anhui \\\/ \u5b89\u5fbd\",\"CN14\":\"Fujian \\\/ \u798f\u5efa\",\"CN15\":\"Jiangxi \\\/ \u6c5f\u897f\",\"CN16\":\"Shandong \\\/ \u5c71\u4e1c\",\"CN17\":\"Henan \\\/ \u6cb3\u5357\",\"CN18\":\"Hubei \\\/ \u6e56\u5317\",\"CN19\":\"Hunan \\\/ \u6e56\u5357\",\"CN20\":\"Guangdong \\\/ \u5e7f\u4e1c\",\"CN21\":\"Guangxi Zhuang \\\/ \u5e7f\u897f\u58ee\u65cf\",\"CN22\":\"Hainan \\\/ \u6d77\u5357\",\"CN23\":\"Chongqing \\\/ \u91cd\u5e86\",\"CN24\":\"Sichuan \\\/ \u56db\u5ddd\",\"CN25\":\"Guizhou \\\/ \u8d35\u5dde\",\"CN26\":\"Shaanxi \\\/ \u9655\u897f\",\"CN27\":\"Gansu \\\/ \u7518\u8083\",\"CN28\":\"Qinghai \\\/ \u9752\u6d77\",\"CN29\":\"Ningxia Hui \\\/ \u5b81\u590f\",\"CN30\":\"Macau \\\/ \u6fb3\u95e8\",\"CN31\":\"Tibet \\\/ \u897f\u85cf\",\"CN32\":\"Xinjiang \\\/ \u65b0\u7586\"},\"HK\":{\"HONG KONG\":\"Hong Kong Island\",\"KOWLOON\":\"Kowloon\",\"NEW TERRITORIES\":\"New Territories\"},\"IN\":{\"AP\":\"Andra Pradesh\",\"AR\":\"Arunachal Pradesh\",\"AS\":\"Assam\",\"BR\":\"Bihar\",\"CT\":\"Chhattisgarh\",\"GA\":\"Goa\",\"GJ\":\"Gujarat\",\"HR\":\"Haryana\",\"HP\":\"Himachal Pradesh\",\"JK\":\"Jammu and Kashmir\",\"JH\":\"Jharkhand\",\"KA\":\"Karnataka\",\"KL\":\"Kerala\",\"MP\":\"Madhya Pradesh\",\"MH\":\"Maharashtra\",\"MN\":\"Manipur\",\"ML\":\"Meghalaya\",\"MZ\":\"Mizoram\",\"NL\":\"Nagaland\",\"OR\":\"Orissa\",\"PB\":\"Punjab\",\"RJ\":\"Rajasthan\",\"SK\":\"Sikkim\",\"TN\":\"Tamil Nadu\",\"TR\":\"Tripura\",\"UT\":\"Uttaranchal\",\"UP\":\"Uttar Pradesh\",\"WB\":\"West Bengal\",\"AN\":\"Andaman and Nicobar Islands\",\"CH\":\"Chandigarh\",\"DN\":\"Dadar and Nagar Haveli\",\"DD\":\"Daman and Diu\",\"DL\":\"Delhi\",\"LD\":\"Lakshadeep\",\"PY\":\"Pondicherry (Puducherry)\"},\"ID\":{\"AC\":\"Daerah Istimewa Aceh\",\"SU\":\"Sumatera Utara\",\"SB\":\"Sumatera Barat\",\"RI\":\"Riau\",\"KR\":\"Kepulauan Riau\",\"JA\":\"Jambi\",\"SS\":\"Sumatera Selatan\",\"BB\":\"Bangka Belitung\",\"BE\":\"Bengkulu\",\"LA\":\"Lampung\",\"JK\":\"DKI Jakarta\",\"JB\":\"Jawa Barat\",\"BT\":\"Banten\",\"JT\":\"Jawa Tengah\",\"JI\":\"Jawa Timur\",\"YO\":\"Daerah Istimewa Yogyakarta\",\"BA\":\"Bali\",\"NB\":\"Nusa Tenggara Barat\",\"NT\":\"Nusa Tenggara Timur\",\"KB\":\"Kalimantan Barat\",\"KT\":\"Kalimantan Tengah\",\"KI\":\"Kalimantan Timur\",\"KS\":\"Kalimantan Selatan\",\"KU\":\"Kalimantan Utara\",\"SA\":\"Sulawesi Utara\",\"ST\":\"Sulawesi Tengah\",\"SG\":\"Sulawesi Tenggara\",\"SR\":\"Sulawesi Barat\",\"SN\":\"Sulawesi Selatan\",\"GO\":\"Gorontalo\",\"MA\":\"Maluku\",\"MU\":\"Maluku Utara\",\"PA\":\"Papua\",\"PB\":\"Papua Barat\"},\"MY\":{\"JHR\":\"Johor\",\"KDH\":\"Kedah\",\"KTN\":\"Kelantan\",\"MLK\":\"Melaka\",\"NSN\":\"Negeri Sembilan\",\"PHG\":\"Pahang\",\"PRK\":\"Perak\",\"PLS\":\"Perlis\",\"PNG\":\"Pulau Pinang\",\"SBH\":\"Sabah\",\"SWK\":\"Sarawak\",\"SGR\":\"Selangor\",\"TRG\":\"Terengganu\",\"KUL\":\"W.P. Kuala Lumpur\",\"LBN\":\"W.P. Labuan\",\"PJY\":\"W.P. Putrajaya\"},\"NZ\":{\"NL\":\"Northland\",\"AK\":\"Auckland\",\"WA\":\"Waikato\",\"BP\":\"Bay of Plenty\",\"TK\":\"Taranaki\",\"HB\":\"Hawke\u2019s Bay\",\"MW\":\"Manawatu-Wanganui\",\"WE\":\"Wellington\",\"NS\":\"Nelson\",\"MB\":\"Marlborough\",\"TM\":\"Tasman\",\"WC\":\"West Coast\",\"CT\":\"Canterbury\",\"OT\":\"Otago\",\"SL\":\"Southland\"},\"ZA\":{\"EC\":\"Eastern Cape\",\"FS\":\"Free State\",\"GP\":\"Gauteng\",\"KZN\":\"KwaZulu-Natal\",\"LP\":\"Limpopo\",\"MP\":\"Mpumalanga\",\"NC\":\"Northern Cape\",\"NW\":\"North West\",\"WC\":\"Western Cape\"},\"TH\":{\"TH-37\":\"Amnat Charoen (\u0e2d\u0e33\u0e19\u0e32\u0e08\u0e40\u0e08\u0e23\u0e34\u0e0d)\",\"TH-15\":\"Ang Thong (\u0e2d\u0e48\u0e32\u0e07\u0e17\u0e2d\u0e07)\",\"TH-14\":\"Ayutthaya (\u0e1e\u0e23\u0e30\u0e19\u0e04\u0e23\u0e28\u0e23\u0e35\u0e2d\u0e22\u0e38\u0e18\u0e22\u0e32)\",\"TH-10\":\"Bangkok (\u0e01\u0e23\u0e38\u0e07\u0e40\u0e17\u0e1e\u0e21\u0e2b\u0e32\u0e19\u0e04\u0e23)\",\"TH-38\":\"Bueng Kan (\u0e1a\u0e36\u0e07\u0e01\u0e32\u0e2c)\",\"TH-31\":\"Buri Ram (\u0e1a\u0e38\u0e23\u0e35\u0e23\u0e31\u0e21\u0e22\u0e4c)\",\"TH-24\":\"Chachoengsao (\u0e09\u0e30\u0e40\u0e0a\u0e34\u0e07\u0e40\u0e17\u0e23\u0e32)\",\"TH-18\":\"Chai Nat (\u0e0a\u0e31\u0e22\u0e19\u0e32\u0e17)\",\"TH-36\":\"Chaiyaphum (\u0e0a\u0e31\u0e22\u0e20\u0e39\u0e21\u0e34)\",\"TH-22\":\"Chanthaburi (\u0e08\u0e31\u0e19\u0e17\u0e1a\u0e38\u0e23\u0e35)\",\"TH-50\":\"Chiang Mai (\u0e40\u0e0a\u0e35\u0e22\u0e07\u0e43\u0e2b\u0e21\u0e48)\",\"TH-57\":\"Chiang Rai (\u0e40\u0e0a\u0e35\u0e22\u0e07\u0e23\u0e32\u0e22)\",\"TH-20\":\"Chonburi (\u0e0a\u0e25\u0e1a\u0e38\u0e23\u0e35)\",\"TH-86\":\"Chumphon (\u0e0a\u0e38\u0e21\u0e1e\u0e23)\",\"TH-46\":\"Kalasin (\u0e01\u0e32\u0e2c\u0e2a\u0e34\u0e19\u0e18\u0e38\u0e4c)\",\"TH-62\":\"Kamphaeng Phet (\u0e01\u0e33\u0e41\u0e1e\u0e07\u0e40\u0e1e\u0e0a\u0e23)\",\"TH-71\":\"Kanchanaburi (\u0e01\u0e32\u0e0d\u0e08\u0e19\u0e1a\u0e38\u0e23\u0e35)\",\"TH-40\":\"Khon Kaen (\u0e02\u0e2d\u0e19\u0e41\u0e01\u0e48\u0e19)\",\"TH-81\":\"Krabi (\u0e01\u0e23\u0e30\u0e1a\u0e35\u0e48)\",\"TH-52\":\"Lampang (\u0e25\u0e33\u0e1b\u0e32\u0e07)\",\"TH-51\":\"Lamphun (\u0e25\u0e33\u0e1e\u0e39\u0e19)\",\"TH-42\":\"Loei (\u0e40\u0e25\u0e22)\",\"TH-16\":\"Lopburi (\u0e25\u0e1e\u0e1a\u0e38\u0e23\u0e35)\",\"TH-58\":\"Mae Hong Son (\u0e41\u0e21\u0e48\u0e2e\u0e48\u0e2d\u0e07\u0e2a\u0e2d\u0e19)\",\"TH-44\":\"Maha Sarakham (\u0e21\u0e2b\u0e32\u0e2a\u0e32\u0e23\u0e04\u0e32\u0e21)\",\"TH-49\":\"Mukdahan (\u0e21\u0e38\u0e01\u0e14\u0e32\u0e2b\u0e32\u0e23)\",\"TH-26\":\"Nakhon Nayok (\u0e19\u0e04\u0e23\u0e19\u0e32\u0e22\u0e01)\",\"TH-73\":\"Nakhon Pathom (\u0e19\u0e04\u0e23\u0e1b\u0e10\u0e21)\",\"TH-48\":\"Nakhon Phanom (\u0e19\u0e04\u0e23\u0e1e\u0e19\u0e21)\",\"TH-30\":\"Nakhon Ratchasima (\u0e19\u0e04\u0e23\u0e23\u0e32\u0e0a\u0e2a\u0e35\u0e21\u0e32)\",\"TH-60\":\"Nakhon Sawan (\u0e19\u0e04\u0e23\u0e2a\u0e27\u0e23\u0e23\u0e04\u0e4c)\",\"TH-80\":\"Nakhon Si Thammarat (\u0e19\u0e04\u0e23\u0e28\u0e23\u0e35\u0e18\u0e23\u0e23\u0e21\u0e23\u0e32\u0e0a)\",\"TH-55\":\"Nan (\u0e19\u0e48\u0e32\u0e19)\",\"TH-96\":\"Narathiwat (\u0e19\u0e23\u0e32\u0e18\u0e34\u0e27\u0e32\u0e2a)\",\"TH-39\":\"Nong Bua Lam Phu (\u0e2b\u0e19\u0e2d\u0e07\u0e1a\u0e31\u0e27\u0e25\u0e33\u0e20\u0e39)\",\"TH-43\":\"Nong Khai (\u0e2b\u0e19\u0e2d\u0e07\u0e04\u0e32\u0e22)\",\"TH-12\":\"Nonthaburi (\u0e19\u0e19\u0e17\u0e1a\u0e38\u0e23\u0e35)\",\"TH-13\":\"Pathum Thani (\u0e1b\u0e17\u0e38\u0e21\u0e18\u0e32\u0e19\u0e35)\",\"TH-94\":\"Pattani (\u0e1b\u0e31\u0e15\u0e15\u0e32\u0e19\u0e35)\",\"TH-82\":\"Phang Nga (\u0e1e\u0e31\u0e07\u0e07\u0e32)\",\"TH-93\":\"Phatthalung (\u0e1e\u0e31\u0e17\u0e25\u0e38\u0e07)\",\"TH-56\":\"Phayao (\u0e1e\u0e30\u0e40\u0e22\u0e32)\",\"TH-67\":\"Phetchabun (\u0e40\u0e1e\u0e0a\u0e23\u0e1a\u0e39\u0e23\u0e13\u0e4c)\",\"TH-76\":\"Phetchaburi (\u0e40\u0e1e\u0e0a\u0e23\u0e1a\u0e38\u0e23\u0e35)\",\"TH-66\":\"Phichit (\u0e1e\u0e34\u0e08\u0e34\u0e15\u0e23)\",\"TH-65\":\"Phitsanulok (\u0e1e\u0e34\u0e29\u0e13\u0e38\u0e42\u0e25\u0e01)\",\"TH-54\":\"Phrae (\u0e41\u0e1e\u0e23\u0e48)\",\"TH-83\":\"Phuket (\u0e20\u0e39\u0e40\u0e01\u0e47\u0e15)\",\"TH-25\":\"Prachin Buri (\u0e1b\u0e23\u0e32\u0e08\u0e35\u0e19\u0e1a\u0e38\u0e23\u0e35)\",\"TH-77\":\"Prachuap Khiri Khan (\u0e1b\u0e23\u0e30\u0e08\u0e27\u0e1a\u0e04\u0e35\u0e23\u0e35\u0e02\u0e31\u0e19\u0e18\u0e4c)\",\"TH-85\":\"Ranong (\u0e23\u0e30\u0e19\u0e2d\u0e07)\",\"TH-70\":\"Ratchaburi (\u0e23\u0e32\u0e0a\u0e1a\u0e38\u0e23\u0e35)\",\"TH-21\":\"Rayong (\u0e23\u0e30\u0e22\u0e2d\u0e07)\",\"TH-45\":\"Roi Et (\u0e23\u0e49\u0e2d\u0e22\u0e40\u0e2d\u0e47\u0e14)\",\"TH-27\":\"Sa Kaeo (\u0e2a\u0e23\u0e30\u0e41\u0e01\u0e49\u0e27)\",\"TH-47\":\"Sakon Nakhon (\u0e2a\u0e01\u0e25\u0e19\u0e04\u0e23)\",\"TH-11\":\"Samut Prakan (\u0e2a\u0e21\u0e38\u0e17\u0e23\u0e1b\u0e23\u0e32\u0e01\u0e32\u0e23)\",\"TH-74\":\"Samut Sakhon (\u0e2a\u0e21\u0e38\u0e17\u0e23\u0e2a\u0e32\u0e04\u0e23)\",\"TH-75\":\"Samut Songkhram (\u0e2a\u0e21\u0e38\u0e17\u0e23\u0e2a\u0e07\u0e04\u0e23\u0e32\u0e21)\",\"TH-19\":\"Saraburi (\u0e2a\u0e23\u0e30\u0e1a\u0e38\u0e23\u0e35)\",\"TH-91\":\"Satun (\u0e2a\u0e15\u0e39\u0e25)\",\"TH-17\":\"Sing Buri (\u0e2a\u0e34\u0e07\u0e2b\u0e4c\u0e1a\u0e38\u0e23\u0e35)\",\"TH-33\":\"Sisaket (\u0e28\u0e23\u0e35\u0e2a\u0e30\u0e40\u0e01\u0e29)\",\"TH-90\":\"Songkhla (\u0e2a\u0e07\u0e02\u0e25\u0e32)\",\"TH-64\":\"Sukhothai (\u0e2a\u0e38\u0e42\u0e02\u0e17\u0e31\u0e22)\",\"TH-72\":\"Suphan Buri (\u0e2a\u0e38\u0e1e\u0e23\u0e23\u0e13\u0e1a\u0e38\u0e23\u0e35)\",\"TH-84\":\"Surat Thani (\u0e2a\u0e38\u0e23\u0e32\u0e29\u0e0e\u0e23\u0e4c\u0e18\u0e32\u0e19\u0e35)\",\"TH-32\":\"Surin (\u0e2a\u0e38\u0e23\u0e34\u0e19\u0e17\u0e23\u0e4c)\",\"TH-63\":\"Tak (\u0e15\u0e32\u0e01)\",\"TH-92\":\"Trang (\u0e15\u0e23\u0e31\u0e07)\",\"TH-23\":\"Trat (\u0e15\u0e23\u0e32\u0e14)\",\"TH-34\":\"Ubon Ratchathani (\u0e2d\u0e38\u0e1a\u0e25\u0e23\u0e32\u0e0a\u0e18\u0e32\u0e19\u0e35)\",\"TH-41\":\"Udon Thani (\u0e2d\u0e38\u0e14\u0e23\u0e18\u0e32\u0e19\u0e35)\",\"TH-61\":\"Uthai Thani (\u0e2d\u0e38\u0e17\u0e31\u0e22\u0e18\u0e32\u0e19\u0e35)\",\"TH-53\":\"Uttaradit (\u0e2d\u0e38\u0e15\u0e23\u0e14\u0e34\u0e15\u0e16\u0e4c)\",\"TH-95\":\"Yala (\u0e22\u0e30\u0e25\u0e32)\",\"TH-35\":\"Yasothon (\u0e22\u0e42\u0e2a\u0e18\u0e23)\"},\"US\":{\"AL\":\"Alabama\",\"AK\":\"Alaska\",\"AZ\":\"Arizona\",\"AR\":\"Arkansas\",\"CA\":\"California\",\"CO\":\"Colorado\",\"CT\":\"Connecticut\",\"DE\":\"Delaware\",\"DC\":\"District Of Columbia\",\"FL\":\"Florida\",\"GA\":\"Georgia\",\"HI\":\"Hawaii\",\"ID\":\"Idaho\",\"IL\":\"Illinois\",\"IN\":\"Indiana\",\"IA\":\"Iowa\",\"KS\":\"Kansas\",\"KY\":\"Kentucky\",\"LA\":\"Louisiana\",\"ME\":\"Maine\",\"MD\":\"Maryland\",\"MA\":\"Massachusetts\",\"MI\":\"Michigan\",\"MN\":\"Minnesota\",\"MS\":\"Mississippi\",\"MO\":\"Missouri\",\"MT\":\"Montana\",\"NE\":\"Nebraska\",\"NV\":\"Nevada\",\"NH\":\"New Hampshire\",\"NJ\":\"New Jersey\",\"NM\":\"New Mexico\",\"NY\":\"New York\",\"NC\":\"North Carolina\",\"ND\":\"North Dakota\",\"OH\":\"Ohio\",\"OK\":\"Oklahoma\",\"OR\":\"Oregon\",\"PA\":\"Pennsylvania\",\"RI\":\"Rhode Island\",\"SC\":\"South Carolina\",\"SD\":\"South Dakota\",\"TN\":\"Tennessee\",\"TX\":\"Texas\",\"UT\":\"Utah\",\"VT\":\"Vermont\",\"VA\":\"Virginia\",\"WA\":\"Washington\",\"WV\":\"West Virginia\",\"WI\":\"Wisconsin\",\"WY\":\"Wyoming\",\"AA\":\"Armed Forces (AA)\",\"AE\":\"Armed Forces (AE)\",\"AP\":\"Armed Forces (AP)\",\"AS\":\"American Samoa\",\"GU\":\"Guam\",\"MP\":\"Northern Mariana Islands\",\"PR\":\"Puerto Rico\",\"UM\":\"US Minor Outlying Islands\",\"VI\":\"US Virgin Islands\"}}","plugin_url":" ","ajax_url":"","ajax_loader_url":" \/assets\/images\/ajax-loader@2x.gif","i18n_select_state_text":"Select an option\u2026","i18n_required_rating_text":"Please select a rating","i18n_no_matching_variations_text":"Sorry, no products matched your selection. Please choose a different combination.","i18n_required_text":"required","i18n_view_cart":"View Cart \u2192","review_rating_required":"yes","update_order_review_nonce":"403b9a1684","apply_coupon_nonce":"7722106a96","option_guest_checkout":"yes","checkout_url":"","is_checkout":"0","update_shipping_method_nonce":"48fe5739ab","add_to_cart_nonce":"3c6a61f089","cart_url":" ","cart_redirect_after_add":"no"};';
            break;
    }
    $vars['bazarCssClass'] = $bazarClassList;
    $vars['bazarJsClass'] = $bazarJsList;
    $vars['bazarJsButtom'] = $bazarJsButtom;
    $vars['bazarCssBodyTag'] = $bazarCssBodyTag;
    $vars['bazarJsConfigButtom'] = $bazarJsConfigButtom;
    $vars['menu_selector'] = $menu_selector;

    foreach (system_region_list($GLOBALS['theme']) as $region_key => $region_name) {

        // Get the content for each region and add it to the $region variable
        if ($blocks = block_get_blocks_by_region($region_key)) {
            $vars['region'][$region_key] = $blocks;
        }
        else {
            $vars['region'][$region_key] = array();
        }
    }
//    var_dump($vars['node']->type);
//    global $conf;
//    // Return nid of nodes of type "interface_configuraitons".
//    $nid_config = db_select('node', 'n')
//        ->fields('n', array('nid'))
//        ->fields('n', array('type'))
//        ->condition('n.type', 'interface_configurations')
//        ->execute()
//        ->fetchCol();
//    //load the configurations
//    $configurationNode = node_load($nid_config);
//    $interfaceConfig = array();
//
//    if(!empty($configurationNode->field_driver_url['und'][0]['value'])){
//        //if set by user
//        $interfaceConfig['driver_url'] = $configurationNode->field_driver_url['und'][0]['value'];
//    }else{
//        //hard coded in default/settings.php
//        $interfaceConfig['driver_url'] = $conf['global_driver_url'];
//    }
//    if(!empty($configurationNode->field_driver_port['und'][0]['value'])){
//        //if set by user
//        $interfaceConfig['driver_port'] = $configurationNode->field_driver_port['und'][0]['value'];
//    }else{
//        //hard coded in default/settings.php
//        $interfaceConfig['driver_port'] = $conf['global_driver_port'];
//    }
//
//        $vars['interfaceConfig'] = $interfaceConfig;
}


function default_css_js_init(&$bazarClassList, &$bazarJsList, &$bazarJsButtom, &$bazarCssBodyTag, &$bazarJsConfigButtom){
    //            $bazarClassList['reset-bootstrap']['url']='/css/reset-bootstrap.css';
//            $bazarClassList['reset-bootstrap']['external']=false;
    $bazarClassList['language-selector']['url']='/css/language-selector.css';
    $bazarClassList['language-selector']['external']=false;
    $bazarClassList['style']['url']='/css/style.css';
    $bazarClassList['style']['external']=false;
    $bazarClassList['thickbox-css']['url']='/css/thickbox/thickbox.css';
    $bazarClassList['thickbox-css']['external']=false;
    $bazarClassList['google-fonts-css']['url']="http://fonts.googleapis.com/css?family=Playfair+Display%7COpen+Sans+Condensed%3A300%7COpen+Sans%7CShadows+Into+Light%7COswald%7CPlay%7CMuli%7CArbutus+Slab%7CAbel&#038;ver=3.5.2";
    $bazarClassList['google-fonts-css']['external']=true;
    $bazarClassList['jquery-colorbox-css']['url']='/css/colorbox.css';
    $bazarClassList['jquery-colorbox-css']['external']=false;
    $bazarClassList['yith-wcwl-user-main-css']['url']='/css/wishlist.css';
    $bazarClassList['yith-wcwl-user-main-css']['external']=false;
    $bazarClassList['woocommerce_frontend_styles-css']['url']='/css/woocommerce/style.css';
    $bazarClassList['woocommerce_frontend_styles-css']['external']=false;
    $bazarClassList['styles-minified-css']['url']='/css/cache/style-28.css';
    $bazarClassList['styles-minified-css']['external']=false;
    $bazarClassList['custom-css']['url']='/css/custom.css';
    $bazarClassList['custom-css']['external']=false;
    $bazarClassList['cache-custom-css']['url']='/css/cache/custom-28.css';
    $bazarClassList['cache-custom-css']['external']=false;
    $bazarClassList['style-changer-css']['url']='/css/picker-celestino.css';
    $bazarClassList['style-changer-css']['external']=false;
    $bazarClassList['colorpicker-css']['url']='/css/colorpicker.css';
    $bazarClassList['colorpicker-css']['external']=false;

    $bazarJsList['comment-reply']['url']='/js/comment-reply.min.js';
    $bazarJsList['comment-reply']['external']=false;
    $bazarJsList['jquery-cookie']['url']='/js/jquery/jquery.cookie.js';
    $bazarJsList['jquery-cookie']['external']=false;
    $bazarJsList['colorpicker']['url']='/js/colorpicker.js';
    $bazarJsList['colorpicker']['external']=false;
    $bazarJsList['sitepress']['url']='/js/sitepress.js';
    $bazarJsList['sitepress']['external']=false;


//    $bazarJsButtom['wp-includes-thickbox']['url']='/js/wp-includes/thickbox.js';
//    $bazarJsButtom['wp-includes-thickbox']['external']=false;
    $bazarJsButtom['wp-includes-underscore']['url']='/js/wp-includes/underscore.min.js';
    $bazarJsButtom['wp-includes-underscore']['external']=false;
    $bazarJsButtom['wp-includes-shortcode']['url']='/js/wp-includes/shortcode.min.js';
    $bazarJsButtom['wp-includes-shortcode']['external']=false;
    $bazarJsButtom['media-upload']['url']='/js/media.upload.min.js';
    $bazarJsButtom['media-upload']['external']=false;
    $bazarJsButtom['jquery-commonlibraries']['url']='/js/jquery/jquery.commonlibraries.js';
    $bazarJsButtom['jquery-commonlibraries']['external']=false;
    $bazarJsButtom['jquery-layout']['url']='/js/jquery/jquery.layout.js';
    $bazarJsButtom['jquery-layout']['external']=false;
    $bazarJsButtom['jquery-custom']['url']='/js/jquery/jquery.custom.js';
    $bazarJsButtom['jquery-custom']['external']=false;
    $bazarJsButtom['woocompare']['url']='/js/woocompare.js';
    $bazarJsButtom['woocompare']['external']=false;
    $bazarJsButtom['jquery-colorbox']['url']='/js/jquery/jquery.colorbox-min.js';
    $bazarJsButtom['jquery-colorbox']['external']=false;

    $bazarJsButtom['responsive']['url']='/js/responsive.js';
    $bazarJsButtom['responsive']['external']=false;
    $bazarJsButtom['jquery-yith-wcwl']['url']='/js/jquery/jquery.yith-wcwl.js';
    $bazarJsButtom['jquery-yith-wcwl']['external']=false;
    $bazarJsButtom['twitter-text']['url']='/js/twitter-text.js';
    $bazarJsButtom['twitter-text']['external']=false;
    $bazarJsButtom['jquery-cycle']['url']='/js/jquery/jquery.cycle.min.js';
    $bazarJsButtom['jquery-cycle']['external']=false;
    $bazarJsButtom['core-shortcodes']['url']='/js/core/shortcodes.js';
    $bazarJsButtom['core-shortcodes']['external']=false;
    $bazarJsButtom['shortcodes']['url']='/js/shortcodes.js';
    $bazarJsButtom['shortcodes']['external']=false;
    $bazarJsButtom['widgets']['url']='/js/widgets.js';
    $bazarJsButtom['widgets']['external']=false;
    $bazarJsButtom['jq-cookie']['url']='/js/jq-cookie.js';
    $bazarJsButtom['jq-cookie']['external']=false;
    $bazarJsButtom['woocommerce2']['url']='/js/woocommerce.js';
    $bazarJsButtom['woocommerce2']['external']=false;

    $bazarJsButtom['add-to-cart']['url']='/js/add-to-cart.min.js';
    $bazarJsButtom['add-to-cart']['external']=false;
    $bazarJsButtom['jquery-blockUI']['url']='/js/woocommerce/jquery.blockUI.min.js';
    $bazarJsButtom['jquery-blockUI']['external']=false;
    $bazarJsButtom['woocommerce']['url']='/js/woocommerce.min.js';
    $bazarJsButtom['woocommerce']['external']=false;
//    $bazarJsButtom['cart-fragments']['url']='/js/cart-fragments.min.js';
//    $bazarJsButtom['cart-fragments']['external']=false;
    $bazarJsButtom['jquery-placeholder']['url']='/js/jquery/jquery.placeholder.min.js';
    $bazarJsButtom['jquery-placeholder']['external']=false;

    $bazarJsButtom['changer-bazar']['url']='/js/changer-bazar.js';
    $bazarJsButtom['changer-bazar']['external']=false;
    $bazarJsButtom['yith-wcan-frontend']['url']='/js/yith-wcan-frontend.min.js';
    $bazarJsButtom['yith-wcan-frontend']['external']=false;
    $bazarJsButtom['jquery-eislideshow']['url']='/js/jquery/jquery.eislideshow.js';
    $bazarJsButtom['jquery-eislideshow']['external']=false;
    $bazarJsButtom['jquery-carouFredSel']['url']='//js/jquery/jquery.carouFredSel-6.1.0-packed.js';
    $bazarJsButtom['jquery-carouFredSel']['external']=false;
    $bazarJsButtom['jquery-touchSwipe']['url']='/js/jquery/jquery.touchSwipe.min.js';
    $bazarJsButtom['jquery-touchSwipe']['external']=false;
    $bazarJsButtom['jquery-mousewheel']['url']='/js/jquery/jquery.mousewheel.min.js';
    $bazarJsButtom['jquery-mousewheel']['external']=false;


    $bazarCssBodyTag = 'no_js responsive';
    $bazarJsConfigButtom = 'var thickboxL10n = {"next":"Next >","prev":"< Prev","image":"Image","of":"of","close":"Close","noiframes":"This feature requires inline frames. You have iframes disabled or your browser does not support them.","loadingAnimation":" ","closeImage":" "};'."\n"
        . 'var l10n_handler = {"map_close":"[x] Close","map_open":"[x] Open"};'."\n"
        . 'var yith_woocompare = {"nonceadd":"2ff540915e","nonceremove":"e0a22b5f3d","ajaxurl":"","actionadd":"yith-woocompare-add-product","actionremove":"yith-woocompare-remove-product","actionview":"yith-woocompare-view-table","added_label":"Added","table_title":"Product Comparison","auto_open":"yes"};'."\n"
        . 'var yith_wcwl_l10n = {"out_of_stock":"Cannot add to the cart as product is Out of Stock!"};'."\n"
        . 'var yith_wcan = {"container":".products","pagination":".general-pagination","result_count":".woocommerce-result-count"};'."\n"
        . 'var woocommerce_params = {"countries":"{\"AF\":[],\"AT\":[],\"BE\":[],\"BI\":[],\"CZ\":[],\"DE\":[],\"DK\":[],\"FI\":[],\"FR\":[],\"HU\":[],\"IS\":[],\"IL\":[],\"KR\":[],\"NL\":[],\"NO\":[],\"PL\":[],\"PT\":[],\"SG\":[],\"SK\":[],\"SI\":[],\"LK\":[],\"SE\":[],\"VN\":[],\"AU\":{\"ACT\":\"Australian Capital Territory\",\"NSW\":\"New South Wales\",\"NT\":\"Northern Territory\",\"QLD\":\"Queensland\",\"SA\":\"South Australia\",\"TAS\":\"Tasmania\",\"VIC\":\"Victoria\",\"WA\":\"Western Australia\"},\"BR\":{\"AC\":\"Acre\",\"AL\":\"Alagoas\",\"AP\":\"Amap\u00e1\",\"AM\":\"Amazonas\",\"BH\":\"Bahia\",\"CE\":\"Cear\u00e1\",\"DF\":\"Distrito Federal\",\"ES\":\"Esp\u00edrito Santo\",\"GO\":\"Goi\u00e1s\",\"MA\":\"Maranh\u00e3o\",\"MT\":\"Mato Grosso\",\"MS\":\"Mato Grosso do Sul\",\"MG\":\"Minas Gerais\",\"PA\":\"Par\u00e1\",\"PB\":\"Para\u00edba\",\"PR\":\"Paran\u00e1\",\"PE\":\"Pernambuco\",\"PI\":\"Piau\u00ed\",\"RJ\":\"Rio de Janeiro\",\"RN\":\"Rio Grande do Norte\",\"RS\":\"Rio Grande do Sul\",\"RO\":\"Rond\u00f4nia\",\"RR\":\"Roraima\",\"SC\":\"Santa Catarina\",\"SP\":\"S\u00e3o Paulo\",\"SE\":\"Sergipe\",\"TO\":\"Tocantins\"},\"CA\":{\"AB\":\"Alberta\",\"BC\":\"British Columbia\",\"MB\":\"Manitoba\",\"NB\":\"New Brunswick\",\"NF\":\"Newfoundland\",\"NT\":\"Northwest Territories\",\"NS\":\"Nova Scotia\",\"NU\":\"Nunavut\",\"ON\":\"Ontario\",\"PE\":\"Prince Edward Island\",\"QC\":\"Quebec\",\"SK\":\"Saskatchewan\",\"YT\":\"Yukon Territory\"},\"CN\":{\"CN1\":\"Yunnan \\\/ \u4e91\u5357\",\"CN2\":\"Beijing \\\/ \u5317\u4eac\",\"CN3\":\"Tianjin \\\/ \u5929\u6d25\",\"CN4\":\"Hebei \\\/ \u6cb3\u5317\",\"CN5\":\"Shanxi \\\/ \u5c71\u897f\",\"CN6\":\"Inner Mongolia \\\/ \u5167\u8499\u53e4\",\"CN7\":\"Liaoning \\\/ \u8fbd\u5b81\",\"CN8\":\"Jilin \\\/ \u5409\u6797\",\"CN9\":\"Heilongjiang \\\/ \u9ed1\u9f99\u6c5f\",\"CN10\":\"Shanghai \\\/ \u4e0a\u6d77\",\"CN11\":\"Jiangsu \\\/ \u6c5f\u82cf\",\"CN12\":\"Zhejiang \\\/ \u6d59\u6c5f\",\"CN13\":\"Anhui \\\/ \u5b89\u5fbd\",\"CN14\":\"Fujian \\\/ \u798f\u5efa\",\"CN15\":\"Jiangxi \\\/ \u6c5f\u897f\",\"CN16\":\"Shandong \\\/ \u5c71\u4e1c\",\"CN17\":\"Henan \\\/ \u6cb3\u5357\",\"CN18\":\"Hubei \\\/ \u6e56\u5317\",\"CN19\":\"Hunan \\\/ \u6e56\u5357\",\"CN20\":\"Guangdong \\\/ \u5e7f\u4e1c\",\"CN21\":\"Guangxi Zhuang \\\/ \u5e7f\u897f\u58ee\u65cf\",\"CN22\":\"Hainan \\\/ \u6d77\u5357\",\"CN23\":\"Chongqing \\\/ \u91cd\u5e86\",\"CN24\":\"Sichuan \\\/ \u56db\u5ddd\",\"CN25\":\"Guizhou \\\/ \u8d35\u5dde\",\"CN26\":\"Shaanxi \\\/ \u9655\u897f\",\"CN27\":\"Gansu \\\/ \u7518\u8083\",\"CN28\":\"Qinghai \\\/ \u9752\u6d77\",\"CN29\":\"Ningxia Hui \\\/ \u5b81\u590f\",\"CN30\":\"Macau \\\/ \u6fb3\u95e8\",\"CN31\":\"Tibet \\\/ \u897f\u85cf\",\"CN32\":\"Xinjiang \\\/ \u65b0\u7586\"},\"HK\":{\"HONG KONG\":\"Hong Kong Island\",\"KOWLOON\":\"Kowloon\",\"NEW TERRITORIES\":\"New Territories\"},\"IN\":{\"AP\":\"Andra Pradesh\",\"AR\":\"Arunachal Pradesh\",\"AS\":\"Assam\",\"BR\":\"Bihar\",\"CT\":\"Chhattisgarh\",\"GA\":\"Goa\",\"GJ\":\"Gujarat\",\"HR\":\"Haryana\",\"HP\":\"Himachal Pradesh\",\"JK\":\"Jammu and Kashmir\",\"JH\":\"Jharkhand\",\"KA\":\"Karnataka\",\"KL\":\"Kerala\",\"MP\":\"Madhya Pradesh\",\"MH\":\"Maharashtra\",\"MN\":\"Manipur\",\"ML\":\"Meghalaya\",\"MZ\":\"Mizoram\",\"NL\":\"Nagaland\",\"OR\":\"Orissa\",\"PB\":\"Punjab\",\"RJ\":\"Rajasthan\",\"SK\":\"Sikkim\",\"TN\":\"Tamil Nadu\",\"TR\":\"Tripura\",\"UT\":\"Uttaranchal\",\"UP\":\"Uttar Pradesh\",\"WB\":\"West Bengal\",\"AN\":\"Andaman and Nicobar Islands\",\"CH\":\"Chandigarh\",\"DN\":\"Dadar and Nagar Haveli\",\"DD\":\"Daman and Diu\",\"DL\":\"Delhi\",\"LD\":\"Lakshadeep\",\"PY\":\"Pondicherry (Puducherry)\"},\"ID\":{\"AC\":\"Daerah Istimewa Aceh\",\"SU\":\"Sumatera Utara\",\"SB\":\"Sumatera Barat\",\"RI\":\"Riau\",\"KR\":\"Kepulauan Riau\",\"JA\":\"Jambi\",\"SS\":\"Sumatera Selatan\",\"BB\":\"Bangka Belitung\",\"BE\":\"Bengkulu\",\"LA\":\"Lampung\",\"JK\":\"DKI Jakarta\",\"JB\":\"Jawa Barat\",\"BT\":\"Banten\",\"JT\":\"Jawa Tengah\",\"JI\":\"Jawa Timur\",\"YO\":\"Daerah Istimewa Yogyakarta\",\"BA\":\"Bali\",\"NB\":\"Nusa Tenggara Barat\",\"NT\":\"Nusa Tenggara Timur\",\"KB\":\"Kalimantan Barat\",\"KT\":\"Kalimantan Tengah\",\"KI\":\"Kalimantan Timur\",\"KS\":\"Kalimantan Selatan\",\"KU\":\"Kalimantan Utara\",\"SA\":\"Sulawesi Utara\",\"ST\":\"Sulawesi Tengah\",\"SG\":\"Sulawesi Tenggara\",\"SR\":\"Sulawesi Barat\",\"SN\":\"Sulawesi Selatan\",\"GO\":\"Gorontalo\",\"MA\":\"Maluku\",\"MU\":\"Maluku Utara\",\"PA\":\"Papua\",\"PB\":\"Papua Barat\"},\"MY\":{\"JHR\":\"Johor\",\"KDH\":\"Kedah\",\"KTN\":\"Kelantan\",\"MLK\":\"Melaka\",\"NSN\":\"Negeri Sembilan\",\"PHG\":\"Pahang\",\"PRK\":\"Perak\",\"PLS\":\"Perlis\",\"PNG\":\"Pulau Pinang\",\"SBH\":\"Sabah\",\"SWK\":\"Sarawak\",\"SGR\":\"Selangor\",\"TRG\":\"Terengganu\",\"KUL\":\"W.P. Kuala Lumpur\",\"LBN\":\"W.P. Labuan\",\"PJY\":\"W.P. Putrajaya\"},\"NZ\":{\"NL\":\"Northland\",\"AK\":\"Auckland\",\"WA\":\"Waikato\",\"BP\":\"Bay of Plenty\",\"TK\":\"Taranaki\",\"HB\":\"Hawke\u2019s Bay\",\"MW\":\"Manawatu-Wanganui\",\"WE\":\"Wellington\",\"NS\":\"Nelson\",\"MB\":\"Marlborough\",\"TM\":\"Tasman\",\"WC\":\"West Coast\",\"CT\":\"Canterbury\",\"OT\":\"Otago\",\"SL\":\"Southland\"},\"ZA\":{\"EC\":\"Eastern Cape\",\"FS\":\"Free State\",\"GP\":\"Gauteng\",\"KZN\":\"KwaZulu-Natal\",\"LP\":\"Limpopo\",\"MP\":\"Mpumalanga\",\"NC\":\"Northern Cape\",\"NW\":\"North West\",\"WC\":\"Western Cape\"},\"TH\":{\"TH-37\":\"Amnat Charoen (\u0e2d\u0e33\u0e19\u0e32\u0e08\u0e40\u0e08\u0e23\u0e34\u0e0d)\",\"TH-15\":\"Ang Thong (\u0e2d\u0e48\u0e32\u0e07\u0e17\u0e2d\u0e07)\",\"TH-14\":\"Ayutthaya (\u0e1e\u0e23\u0e30\u0e19\u0e04\u0e23\u0e28\u0e23\u0e35\u0e2d\u0e22\u0e38\u0e18\u0e22\u0e32)\",\"TH-10\":\"Bangkok (\u0e01\u0e23\u0e38\u0e07\u0e40\u0e17\u0e1e\u0e21\u0e2b\u0e32\u0e19\u0e04\u0e23)\",\"TH-38\":\"Bueng Kan (\u0e1a\u0e36\u0e07\u0e01\u0e32\u0e2c)\",\"TH-31\":\"Buri Ram (\u0e1a\u0e38\u0e23\u0e35\u0e23\u0e31\u0e21\u0e22\u0e4c)\",\"TH-24\":\"Chachoengsao (\u0e09\u0e30\u0e40\u0e0a\u0e34\u0e07\u0e40\u0e17\u0e23\u0e32)\",\"TH-18\":\"Chai Nat (\u0e0a\u0e31\u0e22\u0e19\u0e32\u0e17)\",\"TH-36\":\"Chaiyaphum (\u0e0a\u0e31\u0e22\u0e20\u0e39\u0e21\u0e34)\",\"TH-22\":\"Chanthaburi (\u0e08\u0e31\u0e19\u0e17\u0e1a\u0e38\u0e23\u0e35)\",\"TH-50\":\"Chiang Mai (\u0e40\u0e0a\u0e35\u0e22\u0e07\u0e43\u0e2b\u0e21\u0e48)\",\"TH-57\":\"Chiang Rai (\u0e40\u0e0a\u0e35\u0e22\u0e07\u0e23\u0e32\u0e22)\",\"TH-20\":\"Chonburi (\u0e0a\u0e25\u0e1a\u0e38\u0e23\u0e35)\",\"TH-86\":\"Chumphon (\u0e0a\u0e38\u0e21\u0e1e\u0e23)\",\"TH-46\":\"Kalasin (\u0e01\u0e32\u0e2c\u0e2a\u0e34\u0e19\u0e18\u0e38\u0e4c)\",\"TH-62\":\"Kamphaeng Phet (\u0e01\u0e33\u0e41\u0e1e\u0e07\u0e40\u0e1e\u0e0a\u0e23)\",\"TH-71\":\"Kanchanaburi (\u0e01\u0e32\u0e0d\u0e08\u0e19\u0e1a\u0e38\u0e23\u0e35)\",\"TH-40\":\"Khon Kaen (\u0e02\u0e2d\u0e19\u0e41\u0e01\u0e48\u0e19)\",\"TH-81\":\"Krabi (\u0e01\u0e23\u0e30\u0e1a\u0e35\u0e48)\",\"TH-52\":\"Lampang (\u0e25\u0e33\u0e1b\u0e32\u0e07)\",\"TH-51\":\"Lamphun (\u0e25\u0e33\u0e1e\u0e39\u0e19)\",\"TH-42\":\"Loei (\u0e40\u0e25\u0e22)\",\"TH-16\":\"Lopburi (\u0e25\u0e1e\u0e1a\u0e38\u0e23\u0e35)\",\"TH-58\":\"Mae Hong Son (\u0e41\u0e21\u0e48\u0e2e\u0e48\u0e2d\u0e07\u0e2a\u0e2d\u0e19)\",\"TH-44\":\"Maha Sarakham (\u0e21\u0e2b\u0e32\u0e2a\u0e32\u0e23\u0e04\u0e32\u0e21)\",\"TH-49\":\"Mukdahan (\u0e21\u0e38\u0e01\u0e14\u0e32\u0e2b\u0e32\u0e23)\",\"TH-26\":\"Nakhon Nayok (\u0e19\u0e04\u0e23\u0e19\u0e32\u0e22\u0e01)\",\"TH-73\":\"Nakhon Pathom (\u0e19\u0e04\u0e23\u0e1b\u0e10\u0e21)\",\"TH-48\":\"Nakhon Phanom (\u0e19\u0e04\u0e23\u0e1e\u0e19\u0e21)\",\"TH-30\":\"Nakhon Ratchasima (\u0e19\u0e04\u0e23\u0e23\u0e32\u0e0a\u0e2a\u0e35\u0e21\u0e32)\",\"TH-60\":\"Nakhon Sawan (\u0e19\u0e04\u0e23\u0e2a\u0e27\u0e23\u0e23\u0e04\u0e4c)\",\"TH-80\":\"Nakhon Si Thammarat (\u0e19\u0e04\u0e23\u0e28\u0e23\u0e35\u0e18\u0e23\u0e23\u0e21\u0e23\u0e32\u0e0a)\",\"TH-55\":\"Nan (\u0e19\u0e48\u0e32\u0e19)\",\"TH-96\":\"Narathiwat (\u0e19\u0e23\u0e32\u0e18\u0e34\u0e27\u0e32\u0e2a)\",\"TH-39\":\"Nong Bua Lam Phu (\u0e2b\u0e19\u0e2d\u0e07\u0e1a\u0e31\u0e27\u0e25\u0e33\u0e20\u0e39)\",\"TH-43\":\"Nong Khai (\u0e2b\u0e19\u0e2d\u0e07\u0e04\u0e32\u0e22)\",\"TH-12\":\"Nonthaburi (\u0e19\u0e19\u0e17\u0e1a\u0e38\u0e23\u0e35)\",\"TH-13\":\"Pathum Thani (\u0e1b\u0e17\u0e38\u0e21\u0e18\u0e32\u0e19\u0e35)\",\"TH-94\":\"Pattani (\u0e1b\u0e31\u0e15\u0e15\u0e32\u0e19\u0e35)\",\"TH-82\":\"Phang Nga (\u0e1e\u0e31\u0e07\u0e07\u0e32)\",\"TH-93\":\"Phatthalung (\u0e1e\u0e31\u0e17\u0e25\u0e38\u0e07)\",\"TH-56\":\"Phayao (\u0e1e\u0e30\u0e40\u0e22\u0e32)\",\"TH-67\":\"Phetchabun (\u0e40\u0e1e\u0e0a\u0e23\u0e1a\u0e39\u0e23\u0e13\u0e4c)\",\"TH-76\":\"Phetchaburi (\u0e40\u0e1e\u0e0a\u0e23\u0e1a\u0e38\u0e23\u0e35)\",\"TH-66\":\"Phichit (\u0e1e\u0e34\u0e08\u0e34\u0e15\u0e23)\",\"TH-65\":\"Phitsanulok (\u0e1e\u0e34\u0e29\u0e13\u0e38\u0e42\u0e25\u0e01)\",\"TH-54\":\"Phrae (\u0e41\u0e1e\u0e23\u0e48)\",\"TH-83\":\"Phuket (\u0e20\u0e39\u0e40\u0e01\u0e47\u0e15)\",\"TH-25\":\"Prachin Buri (\u0e1b\u0e23\u0e32\u0e08\u0e35\u0e19\u0e1a\u0e38\u0e23\u0e35)\",\"TH-77\":\"Prachuap Khiri Khan (\u0e1b\u0e23\u0e30\u0e08\u0e27\u0e1a\u0e04\u0e35\u0e23\u0e35\u0e02\u0e31\u0e19\u0e18\u0e4c)\",\"TH-85\":\"Ranong (\u0e23\u0e30\u0e19\u0e2d\u0e07)\",\"TH-70\":\"Ratchaburi (\u0e23\u0e32\u0e0a\u0e1a\u0e38\u0e23\u0e35)\",\"TH-21\":\"Rayong (\u0e23\u0e30\u0e22\u0e2d\u0e07)\",\"TH-45\":\"Roi Et (\u0e23\u0e49\u0e2d\u0e22\u0e40\u0e2d\u0e47\u0e14)\",\"TH-27\":\"Sa Kaeo (\u0e2a\u0e23\u0e30\u0e41\u0e01\u0e49\u0e27)\",\"TH-47\":\"Sakon Nakhon (\u0e2a\u0e01\u0e25\u0e19\u0e04\u0e23)\",\"TH-11\":\"Samut Prakan (\u0e2a\u0e21\u0e38\u0e17\u0e23\u0e1b\u0e23\u0e32\u0e01\u0e32\u0e23)\",\"TH-74\":\"Samut Sakhon (\u0e2a\u0e21\u0e38\u0e17\u0e23\u0e2a\u0e32\u0e04\u0e23)\",\"TH-75\":\"Samut Songkhram (\u0e2a\u0e21\u0e38\u0e17\u0e23\u0e2a\u0e07\u0e04\u0e23\u0e32\u0e21)\",\"TH-19\":\"Saraburi (\u0e2a\u0e23\u0e30\u0e1a\u0e38\u0e23\u0e35)\",\"TH-91\":\"Satun (\u0e2a\u0e15\u0e39\u0e25)\",\"TH-17\":\"Sing Buri (\u0e2a\u0e34\u0e07\u0e2b\u0e4c\u0e1a\u0e38\u0e23\u0e35)\",\"TH-33\":\"Sisaket (\u0e28\u0e23\u0e35\u0e2a\u0e30\u0e40\u0e01\u0e29)\",\"TH-90\":\"Songkhla (\u0e2a\u0e07\u0e02\u0e25\u0e32)\",\"TH-64\":\"Sukhothai (\u0e2a\u0e38\u0e42\u0e02\u0e17\u0e31\u0e22)\",\"TH-72\":\"Suphan Buri (\u0e2a\u0e38\u0e1e\u0e23\u0e23\u0e13\u0e1a\u0e38\u0e23\u0e35)\",\"TH-84\":\"Surat Thani (\u0e2a\u0e38\u0e23\u0e32\u0e29\u0e0e\u0e23\u0e4c\u0e18\u0e32\u0e19\u0e35)\",\"TH-32\":\"Surin (\u0e2a\u0e38\u0e23\u0e34\u0e19\u0e17\u0e23\u0e4c)\",\"TH-63\":\"Tak (\u0e15\u0e32\u0e01)\",\"TH-92\":\"Trang (\u0e15\u0e23\u0e31\u0e07)\",\"TH-23\":\"Trat (\u0e15\u0e23\u0e32\u0e14)\",\"TH-34\":\"Ubon Ratchathani (\u0e2d\u0e38\u0e1a\u0e25\u0e23\u0e32\u0e0a\u0e18\u0e32\u0e19\u0e35)\",\"TH-41\":\"Udon Thani (\u0e2d\u0e38\u0e14\u0e23\u0e18\u0e32\u0e19\u0e35)\",\"TH-61\":\"Uthai Thani (\u0e2d\u0e38\u0e17\u0e31\u0e22\u0e18\u0e32\u0e19\u0e35)\",\"TH-53\":\"Uttaradit (\u0e2d\u0e38\u0e15\u0e23\u0e14\u0e34\u0e15\u0e16\u0e4c)\",\"TH-95\":\"Yala (\u0e22\u0e30\u0e25\u0e32)\",\"TH-35\":\"Yasothon (\u0e22\u0e42\u0e2a\u0e18\u0e23)\"},\"US\":{\"AL\":\"Alabama\",\"AK\":\"Alaska\",\"AZ\":\"Arizona\",\"AR\":\"Arkansas\",\"CA\":\"California\",\"CO\":\"Colorado\",\"CT\":\"Connecticut\",\"DE\":\"Delaware\",\"DC\":\"District Of Columbia\",\"FL\":\"Florida\",\"GA\":\"Georgia\",\"HI\":\"Hawaii\",\"ID\":\"Idaho\",\"IL\":\"Illinois\",\"IN\":\"Indiana\",\"IA\":\"Iowa\",\"KS\":\"Kansas\",\"KY\":\"Kentucky\",\"LA\":\"Louisiana\",\"ME\":\"Maine\",\"MD\":\"Maryland\",\"MA\":\"Massachusetts\",\"MI\":\"Michigan\",\"MN\":\"Minnesota\",\"MS\":\"Mississippi\",\"MO\":\"Missouri\",\"MT\":\"Montana\",\"NE\":\"Nebraska\",\"NV\":\"Nevada\",\"NH\":\"New Hampshire\",\"NJ\":\"New Jersey\",\"NM\":\"New Mexico\",\"NY\":\"New York\",\"NC\":\"North Carolina\",\"ND\":\"North Dakota\",\"OH\":\"Ohio\",\"OK\":\"Oklahoma\",\"OR\":\"Oregon\",\"PA\":\"Pennsylvania\",\"RI\":\"Rhode Island\",\"SC\":\"South Carolina\",\"SD\":\"South Dakota\",\"TN\":\"Tennessee\",\"TX\":\"Texas\",\"UT\":\"Utah\",\"VT\":\"Vermont\",\"VA\":\"Virginia\",\"WA\":\"Washington\",\"WV\":\"West Virginia\",\"WI\":\"Wisconsin\",\"WY\":\"Wyoming\",\"AA\":\"Armed Forces (AA)\",\"AE\":\"Armed Forces (AE)\",\"AP\":\"Armed Forces (AP)\",\"AS\":\"American Samoa\",\"GU\":\"Guam\",\"MP\":\"Northern Mariana Islands\",\"PR\":\"Puerto Rico\",\"UM\":\"US Minor Outlying Islands\",\"VI\":\"US Virgin Islands\"}}","plugin_url":" ","ajax_url":"","ajax_loader_url":" \/assets\/images\/ajax-loader@2x.gif","i18n_select_state_text":"Select an option\u2026","i18n_required_rating_text":"Please select a rating","i18n_no_matching_variations_text":"Sorry, no products matched your selection. Please choose a different combination.","i18n_required_text":"required","i18n_view_cart":"View Cart \u2192","review_rating_required":"yes","update_order_review_nonce":"403b9a1684","apply_coupon_nonce":"7722106a96","option_guest_checkout":"yes","checkout_url":"","is_checkout":"0","update_shipping_method_nonce":"48fe5739ab","add_to_cart_nonce":"3c6a61f089","cart_url":"  ","cart_redirect_after_add":"no"};';

}

function bazar_preprocess_page(&$vars, $hook) {
    //$default_product_ref = commerce_product_reference_default_product($vars['node']->field_product['und']);
    //$default_product = commerce_product_load($default_product_ref['product_id']);
   // $price = field_view_field('commerce_product', $default_product, 'commerce_price')[0]['#markup'];
   // $vars['default_product_price']=$price;
//    $for_region = array(
//        'test1' => $price
//    );
//    $vars['page']['sidebar_second']['default_product_price']=$price;
//    drupal_add_region_content('sidebar_second', $for_region);


    $var['bazar_background'] = theme_get_setting('bazar_background');
    //var_dump($var['bazar_background']);
//
////    $testimonialId = db_select('node', 'n')
////        ->fields('n', array('nid'))
////        ->fields('n', array('type'))
////        ->condition('n.type', 'testimonials')
////        ->execute()
////        ->fetchCol();
////    $testimonialUrl = drupal_get_path_alias("node/$testimonialId[0]");
////    $vars['testimonialUrl'] = $testimonialUrl;
//
//
    if (isset($vars['node'])) {

        /**
         * Get default product
         */

        $default_product = commerce_product_reference_default_product($vars['node']->field_product);
        $vars['default_product'] = commerce_product_load($default_product[0]['product_id']);

        $vars['theme_hook_suggestions'][] = 'page__'. $vars['node']->type;
        switch($vars['node']->type){
            case "property":
//                rental_preprocess_property($vars, $hook, $propertyMap);
                break;
            case "template_display":
                //rental_preprocess_template_display($vars, $hook);
                break;
            default:
                //rental_preprocess_template_display($vars, $hook);
                break;
        }
    }
}

//function bazar_preprocess_region(&$vars, $hook){
//
//    //$default_product_ref = commerce_product_reference_default_product($vars['elements']['system_main']['nodes'][0]->field_product['und']);
//    //$default_product = commerce_product_load($default_product_ref['product_id']);
//    //$price = field_view_field('commerce_product', $default_product, 'commerce_price')[0]['#markup'];
//
//}

function bazar_process_region(&$vars, $hook){

}

function bazar_commerce_cart_empty_block() {
    return '<div class="cart-empty-block"></div>';
}

function bazar_preprocess_block(&$vars, $hook){

    //$default_product_ref = commerce_product_reference_default_product($vars['elements']['system_main']['nodes'][0]->field_product['und']);
    //$default_product = commerce_product_load($default_product_ref['product_id']);
    //$price = field_view_field('commerce_product', $default_product, 'commerce_price')[0]['#markup'];

    if ($vars['block_html_id'] == 'block-system-main') {
        //$nodes = $vars['elements']['nodes'];
        //$content_type_id = max(array_keys($nodes));
        //$default_product_price = $nodes[$content_type_id ]['product:commerce_price'][0]['#markup'];
        //$vars['default_product_price'] = $default_product_price;

    }

    if ($vars['block_html_id'] == 'block-bazar-theme-add-to-cart') {
        //$nodes2 = drupal_set_page_content();
        //$default_product_price = $vars['bazar_theme']['default_product_price'];
        $vars['default_product_price'] = $vars['block']->default_product_price;
        //$content_type_id = max(array_keys($nodes));
        //$default_product_price = $nodes[$content_type_id ]['product:commerce_price'][0]['#markup'];
        //$vars['default_product_price'] = $default_product_price;
        //$vars['theme_hook_suggestions'][] = 'block__no_wrapper';
    }
    $bazar_cart = array();
    if ($vars['block']->region == 'cart_in_header') {
        if ($order = commerce_cart_order_load($vars['user']->uid)) {
            $wrapper = entity_metadata_wrapper('commerce_order', $order);


            $bazar_cart['total-qty'] = commerce_line_items_quantity($wrapper->commerce_line_items, commerce_product_line_item_types());
            $price_raw= commerce_line_items_total($wrapper->commerce_line_items, commerce_product_line_item_types())['amount'];

            if($bazar_cart['total-qty']>0){
                $bazar_cart['total-price'] = substr($price_raw,0,-2);
                $bazar_cart['total-price-cents'] = substr($price_raw,-2);
               $bazar_cart['is-empty'] = false;
            }else{
                $bazar_cart['total-price'] = 0;
                $bazar_cart['total-price-cents'] = '00';
               $bazar_cart['is-empty'] = true;
            }

        }else{
            $bazar_cart['total-price'] = 0;
            $bazar_cart['total-price-cents'] = '00';
            $bazar_cart['is-empty'] = true;
            $bazar_cart['total-qty'] = 0;
        }
        $vars['bazar_cart'] = $bazar_cart;
        //$nodes2 = drupal_set_page_content();
        //$default_product_price = $vars['bazar_theme']['default_product_price'];
       // $vars['default_product_price'] = $vars['block']->default_product_price;
        //$content_type_id = max(array_keys($nodes));
        //$default_product_price = $nodes[$content_type_id ]['product:commerce_price'][0]['#markup'];
        //$vars['default_product_price'] = $default_product_price;
        //$vars['theme_hook_suggestions'][] = 'block__no_wrapper';
    }


    //var_dump('region-preprocessor2: '.$default_product_price);
}

function bazar_views_pre_render(&$view){
    if($view->current_display == 'header_block'){
       // $view->result = '<div>hello</div>';
        //$view->attachment_before = "<h2>Hello BEfore</h2>";
        //$view->attachment_after = "<h2>Hello After</h2>";
        //var_dump('got in pre view');

    }
}


function bazar_process_block(&$vars, $hook){
    //var_dump('process_block');
}

//function rental_preprocess_template_display(&$vars, $hooks){
//    $node = $vars['node'];
//    //var_dump($vars['page']['content']["system_main"]["nodes"][19]['field_product'][0]["attributes"]);
//    //var_dump($node);
//
//    $vars['product_title'] = $node->title;
//    //$fieldHeaderBkIma = field_get_items('node', $node, 'field_header_background_image');
//
//}

//function bazar_preprocess_select(&$vars){
//    $vars['element']['#options'][5] .= '2';
//}


//function bazar_preprocess_field(&$vars){
//    $vars['default_product_price'] = $vars['price'];
//}

//function bazar_preprocess(&$vars){
//    $vars['default_product_price'] = $vars['elements']['product:commerce_price']['und'][0]['amount'];
//}

//function bazar_field__commerce_price(&$vars){
//    $vars['default_product_price'] = $vars['price'];
//}

function bazar_preprocess_node(&$vars , $hook) {

    switch($vars['type']){
        case 'template_display':{
            $default_product = $vars['content']['product:commerce_price']['#object'];
            $prod_default = array();
            $prod_default['img'] = array();
            $prod_default['img']['url'] = url('sites/default/files/'.file_uri_target($default_product->field_featured_image[LANGUAGE_NONE][0]['uri']), array('absolute'=>true));
            $prod_default['img']['alt'] = $default_product->field_featured_image[LANGUAGE_NONE][0]['alt'];
            $prod_default['img-magnified']['url'] = url('sites/default/files/'.file_uri_target($default_product->field_featured_image_magnified[LANGUAGE_NONE][0]['uri']), array('absolute'=>true));
            $prod_default['img-magnified']['alt'] = $default_product->field_featured_image_magnified[LANGUAGE_NONE][0]['alt'];

            if($default_product->field_is_on_sale[LANGUAGE_NONE][0]['taxonomy_term']->name == "True"){
                $prod_default['is-on-sale'] = true;
            }else{
                $prod_default['is-on-sale'] = false;
            }

            if($default_product->field_is_new_product[LANGUAGE_NONE][0]['taxonomy_term']->name == "True"){
                $prod_default['is-new-product'] = true;
            }else{
                $prod_default['is-new-product'] = false;
            }


            $prod_default['description'] = $default_product->field_description[LANGUAGE_NONE][0]['value'];
            if(empty($prod_default['description'])){
                $prod_default['description'] = t('Please, contact us for product description');
            }
            $prod_default['title'] = $vars['title'];

            if($default_product->field_mobile_support[LANGUAGE_NONE][0]['taxonomy_term']->name == 'Responsive'){
                $prod_default['mobile_support'] = 'yes';
            }else{
                $prod_default['mobile_support'] = 'no';
            }

            $prod_default['design_framework'] = $default_product->field_design_framework[LANGUAGE_NONE][0]['taxonomy_term']->name;

            $prod_default['category']=array();
            foreach($default_product->field_category[LANGUAGE_NONE] as $key=>$val){
                $prod_default['category'][] = $val['taxonomy_term']->name;
            }

            $prod_default['demo_url'] = $default_product->field_demo_url[LANGUAGE_NONE][0]['value'];

            if($default_product->field_hide_demo_header[LANGUAGE_NONE][0]['taxonomy_term']->name == 'yes'){
               $prod_default['hide_demo_header'] = 'hide-demo-header';
            }else{
                $prod_default['hide_demo_header'] = '';
            }

            $prod_default['demo_url'] = $default_product->field_demo_url[LANGUAGE_NONE][0]['value'];


            $without_space_category = preg_replace('/\s|&+/','',$prod_default['category'][0]);
            $prod_default['relative-products'] = strtolower(str_replace('-', '_', $without_space_category));
            $vars['bazar_product'] = $prod_default;
            break;
        }
        case 'wid':{
            $default_product = $vars['content']['product:commerce_price']['#object'];
            $prod_default = array();
            $prod_default['img'] = array();
            $prod_default['img']['url'] = url('sites/default/files/'.file_uri_target($default_product->field_featured_image[LANGUAGE_NONE][0]['uri']), array('absolute'=>true));
            $prod_default['img']['alt'] = $default_product->field_featured_image[LANGUAGE_NONE][0]['alt'];
            $prod_default['img-magnified']['url'] = url('sites/default/files/'.file_uri_target($default_product->field_featured_image_magnified[LANGUAGE_NONE][0]['uri']), array('absolute'=>true));
            $prod_default['img-magnified']['alt'] = $default_product->field_featured_image_magnified[LANGUAGE_NONE][0]['alt'];

            $prod_default['other-img'] = array();
            $other_images = $default_product->field_other_images[LANGUAGE_NONE];
            foreach($other_images as $key=>$value){
                $prod_default['other-img'][$key] = array();
                $prod_default['other-img'][$key]['url'] = url('sites/default/files/'.file_uri_target($value['uri']), array('absolute'=>true));
                $prod_default['other-img'][$key]['alt'] = $value['alt'];
            }


            if($default_product->field_is_on_sale[LANGUAGE_NONE][0]['taxonomy_term']->name == "True"){
                $prod_default['is-on-sale'] = true;
            }else{
                $prod_default['is-on-sale'] = false;
            }

            if($default_product->field_is_new_product[LANGUAGE_NONE][0]['taxonomy_term']->name == "True"){
                $prod_default['is-new-product'] = true;
            }else{
                $prod_default['is-new-product'] = false;
            }

            $prod_default['description'] = $default_product->field_description[LANGUAGE_NONE][0]['value'];
            if(empty($prod_default['description'])){
                $prod_default['description'] = t('Please, contact us for product description');
            }
            $prod_default['title'] = $vars['title'];

            $vars['bazar_product'] = $prod_default;
            break;
        }
        default:{
            break;
        }
    }




    //$price_formater = $vars['elements']['product:commerce_price']['#formatter'];
    //$display = array('type' => $price_formater);
  //  $output = field_view_field('node', $vars['node'], 'product:commerce_price', $display);
   // $price_unformated = $vars['elements']['product:commerce_price']['#object']->commerce_price['und'][0]['amount'];
    //$vars['page']['default_product_price'] = $vars['elements']['product:commerce_price'][0]['#markup'];
    //var_dump($vars['default_product_price']);

    // Get a list of all the regions for this theme
    foreach (system_region_list($GLOBALS['theme']) as $region_key => $region_name) {

        // Get the content for each region and add it to the $region variable
        if ($blocks = block_get_blocks_by_region($region_key)) {
            $vars['region'][$region_key] = $blocks;
        }
        else {
            $vars['region'][$region_key] = array();
        }
    }
}



/**
 * Returns HTML for a select form element.
 *
 * It is possible to group options together; to do this, change the format of
 * $options to an associative array in which the keys are group labels, and the
 * values are associative arrays in the normal $options format.
 *
 * @param $variables
 *   An associative array containing:
 *   - element: An associative array containing the properties of the element.
 *     Properties used: #title, #value, #options, #description, #extra,
 *     #multiple, #required, #name, #attributes, #size.
 *
 * @ingroup themeable
 */
function bazar_select(&$variables) {
    $element = $variables['element'];
    element_set_attributes($element, array('id', 'name', 'size'));
    _form_set_class($element, array('form-select'));
//    _form_set_class($element, array('ajax-processed'));
    $variables['select_type_widget'] = '<select' . drupal_attributes($element['#attributes']) . '>' . form_select_options($element) . ' GotHere!</select>';
    return '<select' . drupal_attributes($element['#attributes']) . '>' . form_select_options($element) . ' GotHere!</select>';
}

function bazar_breadcrumb($variables) {

    $breadcrumb = $variables['breadcrumb'];

    if ((arg(0) == 'node') && is_numeric(arg(1)) && ($node = node_load(arg(1)))) {

        switch($node->type){
            case 'template_display':
                $breadcrumb[] = l(t('Design Themes'), 'drupal-templates-for-sale');
                $breadcrumb[] = $node->title;
                break;
            case 'wid':
                $breadcrumb[] = l(t('Widgets'), 'web-widgets-for-sale');
                $breadcrumb[] = $node->title;
                break;
            default:
                break;
        }
    }

    if (!empty($breadcrumb)) {
       $breadcrumbs = '<nav class="woocommerce-breadcrumb" itemprop="breadcrumb">';
        $count = count($breadcrumb) - 1;
        foreach ($breadcrumb as $key => $value) {
            if ($count != $key) {
                $breadcrumbs .=  $value . ' / ';
            }
            else{
                $breadcrumbs .= $value;
            }
        }
        $breadcrumbs .= '</nav>';
        return $breadcrumbs;
    }
}

function bazar_button($variables) {
    $element = $variables['element'];
    $label = $element['#value'];
    element_set_attributes($element, array('id', 'name', 'value', 'type'));

    $element['#attributes']['class'][] = 'form-' . $element['#button_type'];
    if (!empty($element['#attributes']['disabled'])) {
        $element['#attributes']['class'][] = 'form-button-disabled';
    }

    unset($element['#attributes']['class']);
    $element['#attributes']['class'][] = 'single_add_to_cart_button';
    $element['#attributes']['class'][] = 'button';
    $element['#attributes']['class'][] = 'alt';
    // Prepare input whitelist - added to ensure ajax functions don't break
    $whitelist = _bazar_element_whitelist();

    if (in_array($element['#id'], $whitelist)) {
        return '<input' . drupal_attributes($element['#attributes']) . ">\n"; // This line break adds inherent margin between multiple buttons
    }
    else {
        return '<button' . drupal_attributes($element['#attributes']) . '>'. $label ."</button>\n"; // This line break adds inherent margin between multiple buttons
    }
}

/**
 * Returns an array containing ids of any whitelisted drupal elements
 */
function _bazar_element_whitelist() {
    /**
     * Why whitelist an element?
     * The reason is to provide a list of elements we wish to exclude
     * from certain modifications made by the bootstrap theme which
     * break core functionality - e.g. ajax.
     */
    return array(
        'edit-refresh',
        'edit-pass-pass1',
        'edit-pass-pass2',
        'panels-ipe-cancel',
        'panels-ipe-customize-page',
        'panels-ipe-save',
    );
}

function bazar_form($variables) {
    $element = $variables['element'];
    if (isset($element['#action'])) {
        $element['#attributes']['action'] = drupal_strip_dangerous_protocols($element['#action']);
    }
    element_set_attributes($element, array('method', 'id'));
    if (empty($element['#attributes']['accept-charset'])) {
        $element['#attributes']['accept-charset'] = "UTF-8";
    }
    // Anonymous DIV to satisfy XHTML compliance.
    return '<form' . drupal_attributes($element['#attributes']) . '><div>' . $element['#children'] . '</div></form>';
}

//function bazar_block_info_alter(&$blocks, $theme, $code_blocks) {
//    var_dump('in block alter');
//}

function bazar_block_view_alter(&$data, $block){
//var_dump('in blokc hook');
}