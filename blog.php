<?php
/*
Template Name: Blog template
*/
?>


<?php get_header(); ?>

    <section class="s-inner" style="background-image: url(<? bloginfo('template_url' ); ?>/img/expertise-bg.jpg);">
        <div class="container">
            <div class="s-inner-content">
                <h1 class="h1"><? the_title();?></h1>
            </div>
        </div>
    </section>

<?                
            
$args = array(
    'posts_per_page' => 6,
    'orderby' => 'comment_count',
    'paged' => $paged,
    'cat' => -4,
);

$q = new WP_Query($args);

if($q->have_posts()) {
?>

    
    <section class="m-blog">
        <div class="container">
            <div class="row justify-content-center">

 <?      

    while($q->have_posts()){ $q->the_post();  ?>
                <div class="col-lg-4 col-md-6">
                    <div class="s-blog-item">
                        <div class="s-blog-item__img">
                           <? the_post_thumbnail(); ?> 
                        </div>
                        <div class="s-blog-item__content">
                            <span class="s-blog-item__date"><?= get_the_date('j F , Y'); ?></span>
                            <a href="<?php the_permalink(); ?>" class="s-blog-item__head"><?= get_the_title()?></a>
                            <?php  the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="read-more">
                                <span class="text">read more</span>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="13.67" height="13" viewBox="0 0 13.67 13"><defs><path id="1vuqa" d="M749.67 5209.5c0 .37-.13.74-.37 1.04-.1.15-4.93 5-4.93 5-1.22 1.35-3.32-.6-2.14-1.92l1.97-2.37h-6.85c-.92.01-1.37-.88-1.35-1.75-.02-.87.43-1.76 1.35-1.75h6.85l-1.97-2.37c-1.18-1.31.92-3.27 2.14-1.93 0 0 4.83 4.86 4.93 5.01.24.3.37.67.37 1.04z"/></defs><g><g transform="translate(-736 -5203)"><use xlink:href="#1vuqa"/></g></g></svg>
                            </a>
                        </div>
                    </div>
                </div>


    <? }  // end while ?>            
            </div>
         
    <?php 
            $pagination_args = array(
             'show_all' => true,
             'prev_next'    => false,
         
        );

        $GLOBALS['wp_query'] = $q;
        
     the_posts_pagination( $pagination_args );
    
    ?>
           
   

        </div>
    </section>

     <? }  // end if ?> 




<? get_template_part( 'contact-form', 'index' ); ?>

    <?php get_footer(); ?>