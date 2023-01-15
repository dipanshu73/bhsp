<?php 
	$gallery_images = [
		array('title'=>'','image'=>'images/gallery/image1.jpg'),
		array('title'=>'','image'=>'images/gallery/image2.jpg'),
		array('title'=>'','image'=>'images/gallery/image3.jpg'),
		array('title'=>'','image'=>'images/gallery/image4.jpg'),
		array('title'=>'','image'=>'images/gallery/image5.jpg'),
		array('title'=>'','image'=>'images/gallery/image6.jpg'),
		array('title'=>'','image'=>'images/gallery/image7.jpg'),
		array('title'=>'','image'=>'images/gallery/image8.jpg'),
	];
?>
<section class="section bg-lg-grey">
	<div class="container">
		<h2 class="text-center mb-5 title">Print Media</h2>
		<div class="row">
			<?php 
				if (sizeof($gallery_images) > 0) {
					foreach ($gallery_images as $gallery_image) { ?>
						<div class="col-md-3 mb-16">
							<a data-lightbox="gallery" href="<?php echo $gallery_image["image"]; ?>">
								<div class="hor-block">
									<div class="image rel">
										<img src="<?php echo $gallery_image["image"]; ?>">
										<div class="opac">
											<p class="text-white">View</p>
										</div>
									</div>
								</div>
							</a>
						</div>
					<?php } 
				}
			?>
		</div>
		
	</div>
</section>