<?php

/**
 *	views/hobbies
 *
 *	@author Anton Valle
 */

?>
<section id="<?php

	echo slugify( $translations->header_hobbies( null ) );

	?>">
	<div class="container">
		<div class="row py-5">
			<div class="col-md-4">
				<h2 class="appear-on-scroll"><?php

					echo $translations->header_hobbies( isset( $_GET['lang'] ) ? $_GET['lang'] : null );

					?>
				</h2>
			</div>
			<div class="col-md-8">
				<p class="appear-on-scroll"><?php

					echo $translations->hobbies( isset( $_GET['lang'] ) ? $_GET['lang'] : null );

					?>
				</p>
			</div>
		</div>
	</div>
</section>