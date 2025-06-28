<?php

/**
 *	views/education
 *
 *	@author Anton Valle
 */

$education_keys = array(
	'education_ai_liability' => array(
		'certificate'
	),
	'education_intro_to_generative_ai' => array(
		'certificate'
	),
	'education_elements_of_ai' => array(
		'certificate'
	),
	'education_xedu' => array(),
	'education_fsecure_cyber_mooc' => array(
		'certificate'
	),
	'education_hku' => array(),
	'education_sibelius_academy' => array(
		'certificate'
	),
	// 'education_pohjis' => array(
	// 	'certificate'
	// ),
);

?>
<section id="<?php

	echo slugify( $translations->header_education( null ) );

	?>" class="inner-top-shadow">
	<div class="container">
		<div class="row py-5">
			<div class="col-md-4">
				<h2 class="appear-on-scroll"><?php

					echo $translations->header_education( isset( $_GET['lang'] ) ? $_GET['lang'] : null );

					?>
				</h2>
			</div>
			<div class="col-md-8">
				<div class="appear-on-scroll">
					<ul><?php

						foreach ( $education_keys as $education => $value ) {

							?>
							<li class="bg-light rounded mx-3 my-3 px-3 py-3">
								<p>
									<strong><?php

										echo $translations->$education( 'title', isset( $_GET['lang'] ) ? $_GET['lang'] : null );

										?>
									</strong>
									<br>
									<span class="text-secondary"><i><?php

										echo $translations->$education( 'duration', isset( $_GET['lang'] ) ? $_GET['lang'] : null );

										?></i></span>
								</p><?php

								if ( !empty( $translations->$education( 'sub-description', isset( $_GET['lang'] ) ? $_GET['lang'] : null ) ) ) {

									?>
									<p class="small text-secondary no-print"><?php

										echo $translations->$education( 'sub-description', isset( $_GET['lang'] ) ? $_GET['lang'] : null );

										?>
									</p><?php

								}

								?>
								<p><?php

									echo $translations->$education( 'description', isset( $_GET['lang'] ) ? $_GET['lang'] : null );

									?>
								</p>
								<p class="mb-0 no-print"><?php

									foreach ( $education_keys[$education] as $key => $education_link ) {

										?>
										<a href="<?php

											echo $translations->$education( $education_link . '_href', null );

											?>" <?php

											if ( !empty( $translations->$education( $education_link . '_popover', null ) ) ) {

												?>
												data-toggle="popover" data-trigger="hover" data-placement="top" <?php

												echo 'data-content="' . $translations->$education( $education_link . '_popover', null ) . '"';

											}

											?> class="badge badge-light mr-2" target="_blank">
											<img class="badge-icon mr-1" src="<?php

											echo $translations->$education( $education_link . '_icon', null );

											?>"><?php

											echo $translations->$education( $education_link . '_text', isset( $_GET['lang'] ) ? $_GET['lang'] : null );

											?>
										</a><?php

									}

									?>
								</p>
							</li><?php

						}

						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
