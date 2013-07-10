<?php
global $last_class;
global $page_last;

   $thumb_class = of_get_option('w45_client_thumbs_per_row');

   if (is_front_page()) {
  		$thumb_mobile_x = 'm2';
	} else {
		$thumb_mobile_x = 'm2';

	}

   
   $thumb_class = of_get_option('w45_client_thumbs_per_row');

   $thumbs_per_row = $thumb_class;
	switch ($thumbs_per_row)
	{
	case "one_half":
	  $thumbs_per_row = 2;
	  break;
	case "one_third":
	  $thumbs_per_row = 3;
	  break;
	case "one_fourth":
	  $thumbs_per_row = 4;
	  break;
	case "one_fifth":
	  $thumbs_per_row = 5;
	  break;
	case "one_sixth":
	  $thumbs_per_row = 6;
	  break;
	default:
	  $thumbs_per_row = 3;
	}

	$page_last++;

	if ($page_last == $thumbs_per_row ){
		$last_class = "last one_to_one"." ". $thumb_mobile_x ." ". $thumb_class;
		$page_last = 0;
	} else{
		$last_class = $thumb_class ." ". $thumb_mobile_x ." "."one_to_one";
	}
	$classes[] = $last_class;
?>

<li <?php post_class($classes); ?>>
	<a href="<?php the_permalink(); ?>">
		<?php if(has_post_thumbnail()) : ?>
		<div class="info <?php echo $thumb_class; ?> one_to_one <?php echo $thumb_mobile_x; ?>" style="background-image:url(<?php echo w45_thumb_url($post->ID); ?>);">
		<?php else : ?>
		<div class="info <?php echo $thumb_class; ?> one_to_one <?php echo $thumb_mobile_x; ?>" style="background-image:url(<?php echo w45_placeholder_url(); ?>);">
		<?php endif; ?>
			<h5 class="hide"><?php the_title(); ?></h5>    
		</div>
	</a>
</li>