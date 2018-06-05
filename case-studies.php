<?php
/*
Template Name: Case-studies Page
*/
?>


<?php get_header(); ?>

    <section class="s-inner" style="background-image: url(<? bloginfo('template_url' ); ?>/img/main-bg.jpg);">
        <div class="container">
            <div class="s-inner-content">
                <h1 class="h1">Case Studies</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div>
        </div>
    </section>
    
    <section class="s-filter">
        <div class="container">
            <nav class="s-filter-nav" id="grid-filter">
                <button class="filter mixitup-control-active" data-category="*">All Works</button>
                <button class="filter" data-category="category-one">Web Design</button>
                <button class="filter" data-category="category-two">Web Developing</button>
                <button class="filter" data-category="category-three">UI+UX</button>
                <button class="filter" data-category="category-four">Marketing</button>
            </nav>
            <div id="masonry-grid" class="grid">
                <div class="gutter-sizer"></div>
                <div class="grid-item category-one h_1">
                    <div class="s-filter-item__img">
                        <img src="<? bloginfo('template_url' ); ?>/img/case-small.jpg" alt="alt">
                    </div>
                    <div class="s-filter-item__content">
                        <h3 class="h3">Case Study number one</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        <a href="#" class="read-more">
                            <span class="text">read more</span>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="13.67" height="13" viewBox="0 0 13.67 13"><defs><path id="1vuqa" d="M749.67 5209.5c0 .37-.13.74-.37 1.04-.1.15-4.93 5-4.93 5-1.22 1.35-3.32-.6-2.14-1.92l1.97-2.37h-6.85c-.92.01-1.37-.88-1.35-1.75-.02-.87.43-1.76 1.35-1.75h6.85l-1.97-2.37c-1.18-1.31.92-3.27 2.14-1.93 0 0 4.83 4.86 4.93 5.01.24.3.37.67.37 1.04z"/></defs><g><g transform="translate(-736 -5203)"><use xlink:href="#1vuqa"/></g></g></svg>
                        </a>
                    </div>
                </div>
                <div class="grid-item category-two h_2">
                    <div class="s-filter-item__img big">
                        <img src="<? bloginfo('template_url' ); ?>/img/case-big.jpg" alt="alt">
                    </div>
                    <div class="s-filter-item__content">
                        <h3 class="h3">Case Study number one</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy ever since.</p>
                        <a href="#" class="read-more">
                            <span class="text">read more</span>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="13.67" height="13" viewBox="0 0 13.67 13"><defs><path id="1vuqa" d="M749.67 5209.5c0 .37-.13.74-.37 1.04-.1.15-4.93 5-4.93 5-1.22 1.35-3.32-.6-2.14-1.92l1.97-2.37h-6.85c-.92.01-1.37-.88-1.35-1.75-.02-.87.43-1.76 1.35-1.75h6.85l-1.97-2.37c-1.18-1.31.92-3.27 2.14-1.93 0 0 4.83 4.86 4.93 5.01.24.3.37.67.37 1.04z"/></defs><g><g transform="translate(-736 -5203)"><use xlink:href="#1vuqa"/></g></g></svg>
                        </a>
                    </div>
                </div>
                <div class="grid-item category-three h_2">
                    <div class="s-filter-item__img big">
                        <img src="<? bloginfo('template_url' ); ?>/img/case-big.jpg" alt="alt">
                    </div>
                    <div class="s-filter-item__content">
                        <h3 class="h3">Case Study number one</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy ever since.</p>
                        <a href="#" class="read-more">
                            <span class="text">read more</span>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="13.67" height="13" viewBox="0 0 13.67 13"><defs><path id="1vuqa" d="M749.67 5209.5c0 .37-.13.74-.37 1.04-.1.15-4.93 5-4.93 5-1.22 1.35-3.32-.6-2.14-1.92l1.97-2.37h-6.85c-.92.01-1.37-.88-1.35-1.75-.02-.87.43-1.76 1.35-1.75h6.85l-1.97-2.37c-1.18-1.31.92-3.27 2.14-1.93 0 0 4.83 4.86 4.93 5.01.24.3.37.67.37 1.04z"/></defs><g><g transform="translate(-736 -5203)"><use xlink:href="#1vuqa"/></g></g></svg>
                        </a>
                    </div>
                </div>
                <div class="grid-item category-four h_1">
                    <div class="s-filter-item__img">
                        <img src="<? bloginfo('template_url' ); ?>/img/case-small.jpg" alt="alt">
                    </div>
                    <div class="s-filter-item__content">
                        <h3 class="h3">Case Study number one</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        <a href="#" class="read-more">
                            <span class="text">read more</span>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="13.67" height="13" viewBox="0 0 13.67 13"><defs><path id="1vuqa" d="M749.67 5209.5c0 .37-.13.74-.37 1.04-.1.15-4.93 5-4.93 5-1.22 1.35-3.32-.6-2.14-1.92l1.97-2.37h-6.85c-.92.01-1.37-.88-1.35-1.75-.02-.87.43-1.76 1.35-1.75h6.85l-1.97-2.37c-1.18-1.31.92-3.27 2.14-1.93 0 0 4.83 4.86 4.93 5.01.24.3.37.67.37 1.04z"/></defs><g><g transform="translate(-736 -5203)"><use xlink:href="#1vuqa"/></g></g></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="s-contact s-contact--bg">
        <div class="container">
            <h2 class="h2">Contact Us</h2>
            <div class="row justify-content-center">
                <div class="col-lg-6 no-pad">
                    <div class="s-contact-black s-contact-item s-contact-item--company">
                        <img src="<? bloginfo('template_url' ); ?>/img/envelope.svg" alt="alt" class="envelope">
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
                                <a href="#" class="btn btn--blue btn--company">Submit</a>
                            </div>
                        </form>
                    </div>  
                </div>
            </div>
        </div>
    </section>

   <?php get_footer(); ?>