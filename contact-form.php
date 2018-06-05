<?php
 /*
 Template Name: Contact Form
 Template post type: post
 */
 ?>

<?php get_header(); ?>
<style>

 
.ok {
 background: #00B5B5;
 margin-bottom: 15px;
 padding: 10px;
 color: white;
 text-align: center;
}

</style>

<script>
jQuery(document).ready(function($) {
    $("#contact").submit(function() {
        var str = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "<?php bloginfo('template_url'); ?>/sendmail.php",      // здесь указываем путь ко второму файлу
            data: str,
            success: function(msg) {
                if(msg == 'OK') {
                    result = '<div class="ok">Message successfully sent </div>';   // текст, если сообщение отправлено
                    $("#fields").show();
                }
                else {result = msg;}
                $('#note').html(result);
                 $('.input', '#contact')       // очищаем поля после того, как сообщение отправилось
             .not(':button, :submit, :reset, :hidden')
             .val('')            
            }
        });
        return false;
    });
});
</script>

<section class="s-contact s-contact--bg">
        <div class="container">
            <h2 class="h2">Contact Us</h2>
            <div class="row justify-content-center">
                <div class="col-lg-6 no-pad">
                    <div class="s-contact-black s-contact-item s-contact-item--company">
                        <img src="<? bloginfo('template_url' ); ?>/img/envelope.svg" alt="alt" class="envelope">
                        <form id="contact"  class="form-c" action="<? bloginfo('template_url' ); ?>/sendmail.php" method="post">
                            <div id="note"></div>
                            <div class="form-c__row">
                                <input type="text" name="name" placeholder="Name*" required>
                            </div>
                            <div class="form-c__row">
                                <input type="text" name="email" placeholder="Email*" required>
                            </div>
                            <div class="form-c__row">
                                <input type="text" name="phone" placeholder="Phone*" required>
                            </div>
                            <div class="form-c__row">
                                <input type="text" name="message" placeholder="Message*" required>
                            </div>
                            <div class="centered">
                            <!--  <a href="<? bloginfo('template_url' ); ?>/sendmail.php" class="btn btn--blue btn--company">Submit</a>-->
                            <input  id="submitinput" type="submit"  class="btn btn--blue btn--company" value="Submit" />
                            </div>
                        </form>
                    </div>  
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>