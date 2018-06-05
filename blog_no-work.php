<?php
/*
Template Name: Blog 
*/
?>


<?php get_header(); ?>

    <section class="s-inner" style="background-image: url(<? bloginfo('template_url' ); ?>/img/expertise-bg.jpg);">
        <div class="container">
            <div class="s-inner-content">
                <h1 class="h1">Our Blog</h1>
            </div>
        </div>
    </section>
    
    <?
    /*
 * в массиве задаем все необходимые параметры (более подробно о параметрах чуть ниже)
 */
$args = array(
	'posts_per_page' => 5,
	'orderby' => 'comment_count'
);
/*
 * создаем новый объект
 */
$q = new WP_Query($args);
$GLOBALS['wp_query'] = $q; 
/*
 * проверяем, существуют ли посты по заданным параметрам(необязательно)
 */
if($q->have_posts()) {
	/*
	 * затем запускаем цикл
	 */
   ?> 
<section class="m-blog">
        <div class="container">
            <div class="row justify-content-center">    
 <?   
	while($q->have_posts()){ $q->the_post();
		/*
		 * выводим например ссылку на каждый пост
      <img src="/img/blog-3.jpg" alt="alt">
		 */
		//echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>';
      
?>
                <div class="col-lg-4 col-md-6">
                    <div class="s-blog-item">
                        <div class="s-blog-item__img">
                            <?=the_post_thumbnail()?>
                        </div>
                    </div>
                        <div class="s-blog-item__content">
                            <span class="s-blog-item__date"><?= get_the_date('j F , Y'); ?></span>
                            <a href="blog-inner.html" class="s-blog-item__head"><?= get_the_title()?></a>
                            <?= get_the_content( $more_link_text, $strip_teaser );?>
                            <a href="<?= get_permalink()?>" class="read-more">
                                <span class="text">read more</span>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="13.67" height="13" viewBox="0 0 13.67 13"><defs><path id="1vuqa" d="M749.67 5209.5c0 .37-.13.74-.37 1.04-.1.15-4.93 5-4.93 5-1.22 1.35-3.32-.6-2.14-1.92l1.97-2.37h-6.85c-.92.01-1.37-.88-1.35-1.75-.02-.87.43-1.76 1.35-1.75h6.85l-1.97-2.37c-1.18-1.31.92-3.27 2.14-1.93 0 0 4.83 4.86 4.93 5.01.24.3.37.67.37 1.04z"/></defs><g><g transform="translate(-736 -5203)"><use xlink:href="#1vuqa"/></g></g></svg>
                            </a>
                        </div>
                    </div>
               
      <?      
   	}
  ?>
      </div>  
        <?   the_posts_pagination( 
                array(
                'show_all'     => true
               
        ) ); 
        ?>    
            <ul class="pagination">
                <li class="active">
                    <a href="#">1</a>
                </li>
                <li>
                    <a href="#">2</a>
                </li>
                <li>
                    <a href="#">3</a>
                </li>
            </ul>
        </div>
    </section>  
 <? 
}
/*
 * восстанавливаем глобальную переменную $post
 */
wp_reset_postdata();
    ?>
    
    

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