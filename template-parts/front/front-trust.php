<div class="front-trust">
	<div class="grid-container">
		<div class="grid-x">
			<div class="cell small-12">
				<div class="main-title">
					<h2>Au avut </br>
						<mark>încredere</mark>
						în noi
					</h2>
				</div>
			</div>
		</div>
		<div class="grid-x">
			<div class="cell small-12">
				<div class="front-trust-logos">
					<?php if (have_rows('front_trust_logos')): ?>
						<?php while (have_rows('front_trust_logos')): the_row();
							$image = get_sub_field('front_trust_logos_logo');
							?>
							<div>
								<img src="<?php echo $image; ?>">
							</div>
						<?php endwhile; ?>

					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="grid-x front-trust-testimonials">
			<div class="cell small-12 medium-offset-2 medium-1">
				<div class="front-trust-testimonial-icon">
					<svg width="88" height="61" viewBox="0 0 88 61" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M30.2 26.3C35.8 29.9 38.6 34.8 38.6 41C38.6 47 36.8 51.8 33.2 55.4C29.6 58.8 25.1 60.5 19.7 60.5C14.3 60.5 9.7 58.8 5.9 55.4C2.3 52 0.5 47.6 0.5 42.2C0.5 36.6 2.3 31.2 5.9 26L23.6 0.499987H41.9L30.2 26.3ZM76.1 26.3C81.7 29.9 84.5 34.8 84.5 41C84.5 47 82.7 51.8 79.1 55.4C75.5 58.8 71 60.5 65.6 60.5C60.2 60.5 55.6 58.8 51.8 55.4C48.2 52 46.4 47.6 46.4 42.2C46.4 36.6 48.2 31.2 51.8 26L69.5 0.499987H87.8L76.1 26.3Z" fill="#EBEDE8"/>
					</svg>
				</div>
			</div>
			<div class="cell small-12 medium-7">
				<div class="front-trust-testimonial">
					<div class="front-trust-testimonial-text">
						–“Acum, dupa un eveniment de success, in care aprecierile au fost unanime, colaborarea cu DAVTRAX pentru
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
		</div>
	</div>
</div>
