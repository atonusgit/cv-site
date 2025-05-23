<?php

/**
 *	views/name-face
 *
 *	@author Anton Valle
 */

?>
<section id="name-face" class="pb-5" role="main">
	<div class="container">
		<div class="row py-5 align-items-center">
			<div class="col-md-5">
				<h1>Anton Valle</h1>
				<p><?php

					echo $translations->subtitle( isset( $_GET['lang'] ) ? $_GET['lang'] : null );

					?>
				</p>
				<p class="small on-print" style="display: none;"><?php

					echo $translations->contact_info( isset( $_GET['lang'] ) ? $_GET['lang'] : null );

					?>
				</p>
			</div>
			<div class="col-md-3"></div>
			<div class="col-md-4 text-center">
				<img class="round-image top-portrait" src="assets/img/anton_portrait_2.jpg">
			</div>
		</div>
	</div>
</section>