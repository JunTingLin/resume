<section data-id="contact" class="animated-section">
    <div class="page-title">
        <h2>聯絡我</h2>
    </div>

    <div class="section-content">

        <div class="row">
            <!-- Contact Info -->
            <div class="col-xs-12 col-sm-4">
                <div class="lm-info-block gray-default">
                    <i class="lnr lnr-map-marker"></i>
                    <h4>台北</h4>
                    <span class="lm-info-block-value"></span>
                    <span class="lm-info-block-text"></span>
                </div>

                <div class="lm-info-block gray-default">
                    <i class="lnr lnr-phone-handset"></i>
                    <h4>0966777000</h4>
                    <span class="lm-info-block-value"></span>
                    <span class="lm-info-block-text"></span>
                </div>

                <div class="lm-info-block gray-default">
                    <i class="lnr lnr-envelope"></i>
                    <h4>109403537@cc.ncu.edu.tw</h4>
                    <span class="lm-info-block-value"></span>
                    <span class="lm-info-block-text"></span>
                </div>

                <div class="lm-info-block gray-default">
                    <i class="lnr lnr-checkmark-circle"></i>
                    <h4>預約請來信</h4>
                    <span class="lm-info-block-value"></span>
                    <span class="lm-info-block-text"></span>
                </div>


            </div>
            <!-- End of Contact Info -->

            <!-- Contact Form -->
            <div class="col-xs-12 col-sm-8">
                <!-- <div id="map" class="map"></div> -->
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3616.9400044799204!2d121.19311011508908!3d24.968155784003258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346823c1ec904dcb%3A0xcdc129d4455ce456!2z5ZyL56uL5Lit5aSu5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1643112776396!5m2!1szh-TW!2stw">
                </iframe>
                <div class="block-title">
                    <h3>想要寫信 <span>給我嗎?</span></h3>
                </div>

                <form id="contact_form" class="contact-form" action="contact_form/contact_form.php" method="post">

                    <div class="messages"></div>

                    <div class="controls two-columns">
                        <div class="fields clearfix">
                            <div class="left-column">
                                <div class="form-group form-group-with-icon">
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="" required="required" data-error="姓名不可空白">
                                    <label>全名</label>
                                    <div class="form-control-border"></div>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group form-group-with-icon">
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="" required="required" data-error="必須輸入有效的email">
                                    <label>Email地址</label>
                                    <div class="form-control-border"></div>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group form-group-with-icon">
                                    <input id="form_subject" type="text" name="subject" class="form-control" placeholder="" required="required" data-error="主旨不可為空白">
                                    <label>主旨</label>
                                    <div class="form-control-border"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="right-column">
                                <div class="form-group form-group-with-icon">
                                    <textarea id="form_message" name="message" class="form-control" placeholder="" rows="7" required="required" data-error="請輸入訊息內文"></textarea>
                                    <label>訊息內容</label>
                                    <div class="form-control-border"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <div class="g-recaptcha" data-sitekey="6Ld03eMgAAAAACgSE857zVHjrpLP0KcEa--t9wv1" data-theme="dark"></div>

                        <button class="button btn-send">
                            <!-- <i class="fa fa-spinner fa-spin fa-1x fa-fw"></i> -->
                            確定
                        </button>

                    </div>
                </form>
            </div>
            <!-- End of Contact Form -->
        </div>
    </div>
</section>