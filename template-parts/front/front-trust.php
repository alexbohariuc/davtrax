<div class="front-trust">
	<div class="grid-container">
		<div class="grid-x">
			<div class="cell small-12 large-offset-1">
				<div class="main-title">
					<h2>Au avut încredere în noi</h2>
				</div>
			</div>
			<div class="cell small-12 medium-8 medium-offset-1">
				<div class="front-trust-testimonial">
					<div class="front-trust-testimonial-text">
						–“Acum, dupa un eveniment de success, in care aprecierile au fost unanime, colaborarea cu Davtrax pentru
						utilizarea placilor heavy-duty s-a dovedit a fi una foarte inspirata, pentru care ne-am felicitat. Putem
						confirma
						cu tarie ca sloganul “v-am scos din noroi” nu a ramas unul politicianist , ci a devenit la propriu un fapt
						foarte
						real odata cu folosirea acestui tip de placi pentru amenajarea unei locatii ideale (3000mp) pentru
						organizarea
						expozitiei.
						Multumim pentru profesionalism si pentru faptul ca o parte din succesul nostru vi se datoreaza !”
					</div>
					<div class="front-trust-testimonial-author">
						<p>Marcel Cretu</p>
						<p>TL Planning & Logistics</p>
						<p>Technical Service Center</p>
						<p>Upstream</p>
						<p>OMV Petrom S.A.</p>
					</div>
				</div>
			</div>
			<div class="cell small-12">
				<div class="front-trust-logos">
					<?php if (have_rows('front_trust_logos')): ?>

						<div class="grid-x grid-margin-x">

							<?php while (have_rows('front_trust_logos')): the_row();

								// vars
								$image = get_sub_field('front_trust_logos_logo');
								?>

								<div class="cell small-6 medium-3">
									<img src="<?php echo $image; ?>">
								</div>

							<?php endwhile; ?>

						</div>

					<?php endif; ?>
				</div>
			</div>

		</div>
	</div>
</div>
