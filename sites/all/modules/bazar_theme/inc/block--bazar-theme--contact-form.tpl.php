<div id="yit_quick_contact-3" class="widget-1 widget-first widget yit_quick_contact"><div><h3>QUICK CONTACT From Module</h3><p>Need a quick reply to your questions? Fill the form, we will reply in max 24h.</p>
        <form id="contact-form-get-in-touch" class="contact-form row-fluid" method="post" action="" enctype="multipart/form-data">

            <div class="usermessagea"></div>
            <fieldset>

                <ul>

                    <li class="text-field with-icon span12">
                        <div class="input-prepend"><span class="add-on"><i class="icon-contact-name"></i></span>
                            <input type="text" name="yit_contact[name]" id="name-get-in-touch" class="with-icon required" value="" placeholder="NAME" /></div>
                        <div class="msg-error"></div><div class="clear"></div>
                    </li>
                    <li class="text-field with-icon span12">
                        <div class="input-prepend"><span class="add-on"><i class="icon-contact-email"></i></span>
                            <input type="text" name="yit_contact[email]" id="email-get-in-touch" class="with-icon required email-validate" value="" placeholder="E-MAIL" /></div>
                        <div class="msg-error"></div><div class="clear"></div>
                    </li>
                    <li class="textarea-field with-icon span12">
                        <div class="input-prepend"><span class="add-on"><i class="icon-contact-text"></i></span>
                            <textarea name="yit_contact[text]" id="text-get-in-touch" rows="8" cols="30" class="with-icon" placeholder="ENTER YOUR MESSAGE"></textarea></div>
                        <div class="msg-error"></div><div class="clear"></div>
                    </li>
                    <li class="submit-button span12">
                        <input type="text" name="yit_bot" id="yit_bot" />
                        <input type="hidden" name="yit_action" value="sendemail" id="yit_action" />
                        <input type="hidden" name="yit_referer" value="http://demo.yithemes.com/bazar/home/home-iv/" />
                        <input type="hidden" name="id_form" value="683" />
                        <input type="submit" name="yit_sendemail" value="Send Message" class="sendmail alignleft" />
                        <div class="clear"></div>
                    </li>
                </ul>

            </fieldset>
            <div class="contact-form-error-messages"></div>
        </form>

        <?php echo '<script type="text/javascript" src="'.base_path().path_to_theme().'/js/contact.js"></script>';?>
    </div>
</div>