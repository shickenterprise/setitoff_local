<?php get_header(); ?>
<div class="row">
    <div class="slide-info-wrapper col10">
      <ul class="slide-nav">
        <li><a class="slide-prev" href="#"><i class="icon-chevron-left"></i></a></li>
        <li><a class="slide-next" href="#"><i class="icon-chevron-right"></i></a></li>
      </ul>
      <div class="slide-info">
        <h2 class="slide-title"><a href="#"></a></h2>
        <div class="slide-caption"></div>
      </div>
    </div><!-- .slide-info-wraper -->
  </div>
  
   <script type="text/javascript">
     
		<?php query_posts(array('post_type' => 'photograph', 'meta_key'	=> 'colabs_feature_photograph', 'meta_value'=> 'true'));		
					$slide='';
					while (have_posts()) : the_post();																	
						$slide .= "{
							    image 	:'".colabs_image('link=url&return=true')."',
								title 	:'".get_the_title()."',
								url 	:'".get_permalink()."',
								caption :'".get_the_excerpt()."'
								},";
					endwhile; wp_reset_query();
					if($slide!='')
						echo 'slides = ['.rtrim($slide, ",").']';
			?>;
  </script>
<?php get_footer(); ?>
