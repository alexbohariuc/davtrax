<div class="front-products">
	<div class="grid-container">
		<div class="grid-x">
			<div class="cell small-12">
				<div class="main-title">
					<h2>Plăcile
						<mark>DAVTRAX</mark>
					</h2>
				</div>
			</div>
		</div>

		<div class="grid-x align-center">
			<div class="cell small-12 medium-7">
				<div class="front-products-description">
					<strong>
						<p>Aveti un proiect de infrastructura sau un eveniment unde trebuie sa asigurati accesul cu utilaje grele,
							autoturisme sau pietoni?</p>
						<p>Aveti un buget si un timp limitat?</p>
						<p>Aveti nevoie sa simtiti mereu pamantul sub picioare?</p>
						<p>Atunci cu siguranta DAVTRAX are o solutie pentru dumneavoastra!</p>
					</strong>
					<p>Față de soluțiile tradiționale (dale de beton, pavaje din ciment, pietriș, etc), toate panourile de
						protecție
						a solului și pardoselilor DAVTRAX reprezintă o alternativă ecologică și competitivă care protejează solul si
						totodata economiseste timp pretios de transport si manipulare adica Bani.</p>
				</div>
			</div>
			<div class="cell small-12">
				<?php
				// the query
				$args = array(
					'post_type' => 'product',
				);
				$the_query = new WP_Query($args); ?>

				<?php if ($the_query->have_posts()) : ?>
					<div class="grid-x grid-margin-x">
						<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
							<div class="cell small-12 medium-4 item">
								<div class="item-product">
									<a href="<?php the_permalink(); ?>">
										<h3 class="item-product-title"><?php the_title(); ?></h3>
										<img src="<?php the_post_thumbnail_url('featured-projects'); ?>">
									</a>
								</div>
							</div>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					</div>
				<?php else : ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
