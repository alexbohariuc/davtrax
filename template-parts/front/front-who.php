<div class="front-who">
	<div class="grid-container">
		<div class="grid-x">
			<div class="cell small-12 large-5 large-offset-1 front-who-content">
				<div class="main-title main-title-left">
					<h2><?php the_field('front_who_title');?></h2>
				</div>
				<div class="front-who-description">
					<?php the_field('front_who_description');?>
				</div>
			</div>
			<div class="cell small-12 large-4 large-offset-1 front-who-image">
				<img src="<?php the_field('front_who_img');?>">
			</div>
		</div>
	</div>
</div>
