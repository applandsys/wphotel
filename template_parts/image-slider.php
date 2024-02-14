<div class="image-slider">
	<?php
	$sliders = new WP_Query(array('post_type'=>'sliders'));
	?>
	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<?php
			$slider_index = 0;
			while($sliders->have_posts()):
				$sliders->the_post();
				?>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $slider_index; ?>" class="<?php echo  $slider_index==0?'active':'';?>" aria-current="<?php echo  $slider_index==0?'true':'';?>" aria-label="<?php echo get_the_title(); ?>"></button>
				<?php
				$slider_index++;
			endwhile; ?>
		</div>
		<div class="carousel-inner">
			<?php
			$slider_index = 0;
			while($sliders->have_posts()):
				$sliders->the_post();
				?>
				<div class="carousel-item <?php echo  $slider_index==0?'active':'';?>">
					<img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="d-block w-100" alt="<?php echo get_the_title(); ?>">
					<div class="carousel-caption d-none d-md-block">
						<h5><?php echo get_the_title(); ?></h5>
						<p><?php echo get_the_content(); ?></p>
					</div>
				</div>
				<?php
				$slider_index++;
			endwhile; ?>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
</div>