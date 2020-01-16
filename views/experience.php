<?php

/**
 *	views/experience
 *
 *	@author Anton Valle
 */

$experience_keys = array(
	'experience_superlect' => array(
		'work_example',
		'article'
	),
	'experience_massive_helsinki' => array()
);

?>
<section id="<?php

	echo slugify( $translations->header_experience( null ) );

	?>">
	<div class="container">
		<div class="row py-5">
			<div class="col-md-4">
				<h2 class="appear-on-scroll"><?php

					echo $translations->header_experience( isset( $_GET['lang'] ) ? $_GET['lang'] : null );

					?>
				</h2>
			</div>
			<div class="col-md-8">
				<div class="appear-on-scroll">
					<ul><?php

						foreach ( $experience_keys as $experience => $value ) {

							?>
							<li class="bg-light rounded mx-3 my-3 px-3 py-3">
								<p>
									<strong><?php

									echo $translations->$experience( 'title', isset( $_GET['lang'] ) ? $_GET['lang'] : null );

									?>
									</strong>
									<br>
									<span class="text-secondary"><i><?php

									echo $translations->$experience( 'duration', isset( $_GET['lang'] ) ? $_GET['lang'] : null );

									?></i></span>
								</p>
								<p><?php

									echo $translations->$experience( 'description', isset( $_GET['lang'] ) ? $_GET['lang'] : null );

									?>
								</p>
								<p class="mb-0 no-print"><?php

									foreach ( $experience_keys[$experience] as $key => $experience_link ) {

										?>
										<a href="<?php

											echo $translations->$experience( $experience_link . '_href', null );

											?>" <?php

											if ( !empty( $translations->$experience( $experience_link . '_popover', null ) ) ) {

												?>
												data-toggle="popover" data-trigger="hover" data-placement="top" <?php

												echo 'data-content="' . $translations->$experience( $experience_link . '_popover', isset( $_GET['lang'] ) ? $_GET['lang'] : null ) . '"';

											}

											?> class="badge badge-light mr-2" target="_blank">
											<img class="badge-icon mr-1" src="<?php

											echo $translations->$experience( $experience_link . '_icon', null );

											?>"><?php

											echo $translations->$experience( $experience_link . '_text', isset( $_GET['lang'] ) ? $_GET['lang'] : null );

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