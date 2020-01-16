<?php

/**
 *	views/header
 *
 *	@author Anton Valle
 */

?>
<section id="<?php

	echo slugify( $translations->header_personal_statement( null ) );

	?>" class="margin-top-0-mobile">
	<div class="container">
		<div class="row py-5">
			<div class="col-md-4">
				<h2 class="appear-on-scroll"><?php

					echo $translations->header_personal_statement( isset( $_GET['lang'] ) ? $_GET['lang'] : null );

					?>
				</h2>
			</div>
			<div class="col-md-8">
				<div class="appear-on-scroll"><?php

					echo $translations->personal_statement( isset( $_GET['lang'] ) ? $_GET['lang'] : null );

					?>
				</div>
			</div>
		</div>
	</div>
</section>