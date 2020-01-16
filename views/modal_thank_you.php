<?php

/**
 *	views/modal_thank_you
 *
 *	@author Anton Valle
 */

if ( isset( $_GET['thankyou'] )
	&& !empty( $_GET['token'] )
	&& !empty( $_SESSION['responseToken'] )
	&& hash_equals( $_SESSION['responseToken'], $_GET['token'] ) ) {

	unset( $_SESSION['responseToken'] );

	?>
	<noscript>
		<div class="modal fade bd-example-modal-sm show" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" style="display: block;">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="container py-3 px-3">
						<div class="row">
							<div class="col">
								<p><?php

									echo $translations->modal_thank_you_response( isset( $_GET['lang'] ) ? $_GET['lang'] : null );

									?>
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col text-right">
								<a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/cv/?lang=<?php

									if ( isset( $_GET['lang'] )
										&& $_GET['lang'] == 'fi' ) {

										echo "fi";

									} else {

										echo "en";

									}

									?>" class="btn btn-info"><?php

									echo $translations->close( isset( $_GET['lang'] ) ? $_GET['lang'] : null );

									?>
								</a>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-backdrop fade show"></div>
	</noscript><?php

}