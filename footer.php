		<footer class="footer">
        <div class="container">
            <div class="row justify-content-center justify-content-md-between">
                <div class="copyright">2018. All rights reserved. AASoftware.com</div>


                <?php // wp_nav_menu( array('footer-menu' => 'footer-menu',  'menu_class'   => 'socials' )); ?>
              
                <ul class="socials">
                    <li>
                        <a href="#" class="facebook" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10" height="20" viewBox="0 0 10 20"><defs><path id="7xqya" d="M1279.67 6754.67v-1.99c0-.9.2-1.35 1.59-1.35h1.74V6748h-2.91c-3.57 0-4.75 1.64-4.75 4.44v2.23H1273v3.33h2.34v10h4.33v-10h2.93l.4-3.33z"/></defs><g><g transform="translate(-1273 -6748)"><use xlink:href="#7xqya"/></g></g></svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="twitter" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22.26" height="18.09" viewBox="0 0 22.26 18.09"><defs><path id="xusna" d="M1320 6768.1c8.4 0 13-6.97 13-13 0-.2 0-.4-.02-.6a9.29 9.29 0 0 0 2.28-2.36 9 9 0 0 1-2.63.72 4.58 4.58 0 0 0 2.01-2.53c-.9.53-1.88.9-2.9 1.1a4.57 4.57 0 0 0-7.78 4.18 12.97 12.97 0 0 1-9.41-4.77 4.57 4.57 0 0 0 1.41 6.1 4.5 4.5 0 0 1-2.07-.58v.06a4.57 4.57 0 0 0 3.66 4.47c-.67.19-1.37.21-2.06.08a4.57 4.57 0 0 0 4.27 3.17 9.19 9.19 0 0 1-6.76 1.9 12.92 12.92 0 0 0 7 2.05"/></defs><g><g transform="translate(-1313 -6750)"><use xlink:href="#xusna"/></g></g></svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="linkedin" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22.26" height="20" viewBox="0 0 22.26 20"><defs><path id="52zma" d="M1369.57 6747.6c1.47 0 2.67 1.08 2.67 2.4 0 1.34-1.2 2.42-2.67 2.42-1.49 0-2.68-1.08-2.68-2.41s1.2-2.41 2.68-2.41zm-2.32 6.64h4.62v13.36h-4.62z"/><path id="52zmb" d="M1374.77 6754.23h4.42v1.83h.06c.62-1.05 2.12-2.15 4.37-2.15 4.66 0 5.53 2.76 5.53 6.36v7.32h-4.6v-6.5c0-1.54-.03-3.54-2.4-3.54-2.4 0-2.76 1.7-2.76 3.43v6.61h-4.61l-.01-13.36z"/></defs><g><g transform="translate(-1366.89 -6747.6)"><g><use fill="#999" xlink:href="#52zma"/></g><g><use xlink:href="#52zmb"/></g></g></g></svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- MODAL FORM START -->

    <div class="modal " >
        <div class="modal-wrap mfp-hide" id="modal">
            <div class="modal-head">Send Us a Message</div>
            <form class="modal-form">
                <div class="modal-form__row">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="modal-form-item">
                                <input type="text" placeholder="Name*">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="modal-form-item">
                                <input type="text" placeholder="Phone*">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-form__row">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="modal-form-item">
                                <input type="text" placeholder="Email*">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="modal-form-item modal-select">
                                <select class="selectize">
                                    <option value="">Subject</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-form-item">
                    <input type="text" placeholder="Message">
                </div>
                <button class="btn btn--blue">Submit</button>
            </form>
        </div>
    </div>

    <!-- MODAL FORM END -->
    <script async src="<? bloginfo('template_url' ); ?>/js/scripts.min.js"></script>
    <link rel="stylesheet" href="<? bloginfo('template_url' ); ?>/css/main.min.css">

    <?php // bloginfo('stylesheet_url'); ?>



		
	</body>
</html>
