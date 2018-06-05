<?php
/*
Template Name: Contacts
*/
?>
<?php get_header('contacts'); ?>

    <section class="s-map s-map--contacts" style="background-image: url(<? bloginfo('template_url' ); ?>/img/map.jpg);">
        <img src="<? bloginfo('template_url' ); ?>/img/map-marker.svg" alt="alt" class="s-map-marker">
    </section>

    <section class="s-contact s-contact--contacts s-contact--bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 no-pad">
                    <div class="s-contact-black s-contact-item">
                        <div class="s-contact-black__head">Get a free quote now</div>
                        <form class="form-c">
                            <div class="form-c__row">
                                <input type="text" placeholder="Name*">
                            </div>
                            <div class="form-c__row">
                                <input type="text" placeholder="Email*">
                            </div>
                            <div class="form-c__row">
                                <input type="text" placeholder="Phone*">
                            </div>
                            <div class="form-c__row">
                                <input type="text" placeholder="Message*">
                            </div>
                            <div class="centered">
                                <a href="#" class="btn btn--white">Submit</a>
                            </div>
                        </form>
                    </div>  
                </div>
                <div class="col-lg-6 no-pad">
                    <div class="s-contact-blue s-contact-item">
                        <img src="<? bloginfo('template_url' ); ?>/img/envelope.svg" alt="alt">
                        <div class="s-contact-blue__head">Adderss & Contact Details</div>
                        <div class="s-contact-blue__adress">1 Yoinge St. Toronto ON M5M 5M5 Phone: 416 555 1234 (Whatsapp)</div>
                        <div class="s-contact-blue__contact">Email:
                            <a href="mailto:info@aasoftware.com" class="mail">info@aasoftware.com</a>
                        </div>
                        <div class="s-contact-blue__contact">Skype:
                            <a href="skype:software?call" class="mail">software</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php get_footer(); ?>