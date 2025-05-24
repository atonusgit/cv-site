<?php

/**
 *	views/cta
 *
 *	@author Anton Valle
 */

?>
<section id="cta" class="bg-dark no-print">
	<div class="container">
		<div class="row justify-content-center py-5">
			<div class="col-md-8 text-center text-light">
				<h2><?php

					echo $translations->cta_lets_talk( isset( $_GET['lang'] ) ? $_GET['lang'] : null );

					?>
				</h2>
				<p class="small">Powered by <i><strong><a href="<?php echo "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" class='text-secondary'>Antonoo</a></strong></i></p>
			</div>
		</div>
		<input type="hidden" id="csrf-token" name="postToken" value="<?php echo $token; ?>">
		<div id="chat-area">
			<noscript>
				<div id="chat-anton-1" class="row justify-content-center">
					<div class="col-md-8">
						<div class="container">
							<div class="row align-items-center form-group" style="min-height: 112px;">
								<div class="col-auto">
									<img class="round-image chat-image" src="assets/img/anton_portrait_2.jpg">
								</div>
								<div class="col-lg-auto col px-0">
									<div class="speech-bubble speech-bubble-anton text-light">
										<span class="chat-anton-text"><?php

											echo $translations->cta_hi_friend( isset( $_GET['lang'] ) ? $_GET['lang'] : null );

											?>
										</span>
									</div>
								</div>
								<div class="col-lg-3"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row justify-content-center py-5">
					<div class="col-md-8 text-center text-light">
						<form id="contact-me" action="process/post.php" method="post">
<!--							<input type="hidden" name="postToken" value="<?php echo $token; ?>">-->
							<input type="hidden" name="initChoice" value="4">
							<input type="hidden" name="lang" value="<?php

								if ( isset( $_GET['lang'] )
									&& $_GET['lang'] == 'fi' ) {

									echo "fi";

								} else {

									echo "en";

								}

								?>">
							<div class="form-group">
								<textarea
									class="form-control"
									rows="5"
									name="message"
									placeholder="<?php

										echo $translations->cta_placeholder( isset( $_GET['lang'] ) ? $_GET['lang'] : null );

										?>"></textarea>
							</div>
							<button type="submit" id="sendMessageButton" class="btn btn-light btn-block"><?php

								echo $translations->cta_send( isset( $_GET['lang'] ) ? $_GET['lang'] : null );

								?></button>
						</form>
					</div>
				</div>
			</noscript>
		</div>
	</div>
</section>