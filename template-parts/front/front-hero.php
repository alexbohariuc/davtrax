<?php if (have_rows('homepage_slider')): ?>
	<div class="orbit front-homepage-slider" role="region" aria-label="Davtrax" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
		<div class="orbit-wrapper">
			<div class="orbit-controls">
				<div class="grid-container">
					<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>
						<svg width="18" height="32" viewBox="0 0 18 32" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M0.467698 17.1421L14.858 31.5276C15.4894 32.1575 16.5125 32.1575 17.1455 31.5276C17.7769 30.8978 17.7769 29.8747 17.1455 29.2449L3.89662 16.0008L17.1439 2.75669C17.7754 2.12685 17.7754 1.10382 17.1439 0.472382C16.5125 -0.157461 15.4879 -0.157461 14.8564 0.472382L0.466104 14.8578C-0.155633 15.4811 -0.155633 16.5202 0.467698 17.1421Z"
								fill="white"/>
						</svg>
					</button>
					<button class="orbit-next"><span class="show-for-sr">Next Slide</span>
						<svg width="18" height="32" viewBox="0 0 18 32" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M17.1514 14.8579L2.76113 0.47238C2.1297 -0.157464 1.10667 -0.157465 0.473634 0.47238C-0.157804 1.10222 -0.157804 2.12525 0.473633 2.75509L13.7225 15.9992L0.475228 29.2433C-0.15621 29.8731 -0.15621 30.8962 0.475227 31.5276C1.10666 32.1575 2.13129 32.1575 2.76272 31.5276L17.153 17.1422C17.7748 16.5189 17.7748 15.4798 17.1514 14.8579Z"
								fill="white"/>
						</svg>
					</button>
				</div>
			</div>
			<ul class="orbit-container">
				<?php while (have_rows('homepage_slider')): the_row(); ?>
					<?php

					// vars
					$image = get_sub_field('homepage_slide_image');
					$title = get_sub_field('homepage_slide_title');
					$description = get_sub_field('homepage_slide_description');
					$cta = get_sub_field('homepage_slide_button');
					$cta_url = get_sub_field('homepage_slide_button_link');

					?>
					<li class="orbit-slide front-homepage-slider-slide">
						<img src="<?php echo $image ?>">
						<div class="front-homepage-slider-slide-content">
							<div class="grid-container">
								<div class="grid-x">
									<div class="cell small-12 medium-offset-1 medium-6 front-homepage-slider-slide-content-title">
										<?php echo $title; ?>
									</div>
									<div class="cell small-12 medium-offset-1 medium-6 front-homepage-slider-slide-content-description">
										<?php echo $description; ?>
									</div>
									<div class="cell small-12 medium-offset-1 medium-6 front-homepage-slider-slide-content-button">
										<a class="button button-primary" href="<?php echo $cta_url; ?>">
											<?php echo $cta; ?>
										</a>
									</div>
								</div>
							</div>
						</div>
					</li>

				<?php endwhile; ?>
			</ul>
		</div>

		<nav class="orbit-bullets">
			<?php while (have_rows('homepage_slider')): the_row(); ?>
				<button data-slide="<?php echo get_row_index() -1; ?>"></button>
			<?php endwhile; ?>
		</nav>
	</div>

<?php endif; ?>
