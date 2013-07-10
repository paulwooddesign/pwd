<?php $recent_posts_count = intval(of_get_option('w45_client_logos_count')); ?>
<?php $recent_posts_title = of_get_option('w45_client_logos_title'); ?>
<?php if($recent_posts_count > 0) : ?>
<!-- client-thumbs -->
<section id="clients" class="clearfix">
	<div class="site-width">
		<div class="copy-width">			
			<?php if($recent_posts_title):?>
			<div class="section-head">		
				<h3><span><?php echo $recent_posts_title; ?></span></h3>	
				<p class="zeta"><span><?php echo of_get_option('w45_client_logos_description'); ?></span></p>	
			</div>
			<?php endif; ?>		
	
			<?php
				query_posts( array(
				'order'    => 'ASC',
				'ignore_sticky_posts' => 1,  
				'posts_per_page' => $recent_posts_count,
				'post_type' => array('client')
				)); 
			?>

			<ul class="thumbs clearfix">	
				<?php while (have_posts()) : the_post(); ?>			    
				<?php get_template_part( 'part-client-thumb'); ?>
				<?php endwhile; ?>
				<?php wp_reset_query();	?>
				<?php global $page_last; ?>
				<?php $page_last = 0; ?>	
			</ul>
		</div>
	</div>
</section>
<!-- /client-thumbs -->
<?php endif; ?>