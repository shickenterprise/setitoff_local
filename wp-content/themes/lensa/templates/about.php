<?php /*
*	Template Name: About
*/
?>
<?php get_header();?>

<div class="row">
    <header class="page-heading  block-background block-inner">
      <h3><?php the_title(); ?></h3>
	  <div class="minimize"></div>
    </header><!-- .page-heading -->
  
    <div class="main-content block-background column col12">
    
	 <?php
	  if(have_posts()) : while(have_posts()): the_post();
	 ?>
      <div class="block-inner content-page">
        <article class="entry-post">
          
          <div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages(array('before' => __('<p><strong>Pages:</strong>','colabsthemes'), 'after' => '</p>', 'next_or_number' => 'number')); ?>
		  </div><!-- .entry-content -->
          
        </article>
        
		
        
      </div><!-- .block-inner -->
	 <?php
	  endwhile;	  
	  endif;
	 ?>
     

    </div><!-- .main-content -->
         <div class="shop_sidebar">
<?php get_template_part(sidebar,shop); ?>
</div>
  </div>
<?php get_footer(); ?>

