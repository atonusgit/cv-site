<?php

/**
 *	views/testimonials
 *
 *	@author Anton Valle
 */

?>
<section id="testimonials" class="bg-info inner-top-shadow testimonials-bg parallax">
	<div class="container">
		<div class="row py-5 align-items-center">
			<div class="col-md py-3">
				<div class="appear-on-scroll">
					<div class="row">
						<div class="col-auto no-print">
							<img src="assets/img/quote-left-solid.svg" style="width: 4em;">
						</div>
						<div class="col text-light">
							<p>
								"Anton is a passionate professional and a great person to work with. We worked together on a project we produced at Boutique for YL. He created a thrilling soundscape that was spot on for the project and really helped elevate it to another level. I’m looking forward to working with him again when the opportunity arises."
							</p>
							- <strong>Ville Salervo</strong>
							<br><span class="small"><i>Design Lead | Boutique Animation</i></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md py-3">
				<div class="appear-on-scroll">
					<div class="row">
						<div class="col-auto no-print">
							<img src="assets/img/quote-left-solid.svg" style="width: 4em;">
						</div>
						<div class="col text-light">
							<p>
								"I have been working with Anton on numerous projects since 2011 and you rarely find somebody with such an interesting skillset. He is a great musician and a composer, but also highly skilled in technical related areas. Not just the ones you would expect from a moder composer (music tech., signal processing), but also in coding in general, which he manages to incorporate also in his music making workflow to improve efficiency.
							</p>
							<p>
								No matter if we worked on commercial or art projects, it has always been a smooth and inspiring cooperation that helped us create interesting results and use our resources and skills well."
							</p>
							- <strong>Jindřich Kravařík</strong>
							<br><span class="small"><i>Sound Designer, Music Composer and Recording Engineer | Sype Studios</i></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row no-print">
			<div class="col text-center text-light py-5">
				<div class="appear-on-scroll">
					<img src="assets/img/linkedin-brands.svg" style="width: 1em; margin-bottom: 4px">&nbsp
					<a href="https://www.linkedin.com/in/antonvalle/" target="_blank" class="text-light"><?php

						echo $translations->connect_on_linkedin( isset( $_GET['lang'] ) ? $_GET['lang'] : null );

						?>
					</a>
				</div>
			</div>
		</div>
	</div>				
</section>