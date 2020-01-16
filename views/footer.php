<?php

/**
 *	views/footer
 *
 *	@author Anton Valle
 */

?>
<footer>
	<div class="container-fluid bg-dark py-5 no-print">
		<div class="row">
			<div class="col text-light text-center">
				<p class="small"><?php

					echo $translations->footer_note( isset( $_GET['lang'] ) ? $_GET['lang'] : null );

					?>
				</p>
			</div>
		</div>
	</div>
</footer>