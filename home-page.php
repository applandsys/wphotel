<?php
/**
 * Template Name: Home Page
 */
?>
<?php get_header();?>
<main class="flex-shrink-1">
	<div>
		<div class="row">
			<div class="col-12">
				<div class="image-slider">
					<!-- slider start-->
					<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-indicators">
							<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
							<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
							<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
						</div>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="https://fakeimg.pl/1024x400?text=First+Slider" class="d-block w-100" alt="..." style="width: 100%; border: 1px solid mediumvioletred">
								<div class="carousel-caption d-none d-md-block">
									<h5>First slide label</h5>
									<p>Some representative placeholder content for the first slide.</p>
								</div>
							</div>
							<div class="carousel-item">
								<img src="https://fakeimg.pl/1024x400?text=2nd+Slider" class="d-block w-100" alt="..."  style="width: 100%">
								<div class="carousel-caption d-none d-md-block">
									<h5>Second slide label</h5>
									<p>Some representative placeholder content for the second slide.</p>
								</div>
							</div>
							<div class="carousel-item">
								<img src="https://fakeimg.pl/1024x400" class="d-block w-100" alt="..."  style="width: 100%">
								<div class="carousel-caption d-none d-md-block">
									<h5>Third slide label</h5>
									<p>Some representative placeholder content for the third slide.</p>
								</div>
							</div>
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
					<!-- slider end-->
				</div>
			</div>
		</div>
	</div>
	<div class="container" style="border: 1px solid blue">
		<div class="row">
			<div class="col-12">
				<div class="image-slider">
					conente will go here
				</div>
			</div>
		</div>
	</div>
</main>
<?php get_footer();?>
