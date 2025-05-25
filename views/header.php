<?php

/**
 *	views/header
 *
 *	@author Anton Valle
 */

$header_keys = array(
	'header_personal_statement',
	'header_tech_stack',
	'header_experience',
	'header_education',
	'header_hobbies',
);

?>
<header id="header" role="banner" class="sticky-top no-print">
	<nav id="navbar" class="navbar navbar-expand-lg navbar-light">
		<div class="container py-3">
			<div id="corder-thingie" class="d-flex align-items-center js-content">
				<a href="#name-face" class="navbar-brand custom-logo-link" rel="home">
					<div id="corner-logo">
						<img src="assets/img/signature-solid.svg">
					</div>
					<div id="corner-name">
						<h5 class="mb-0">Anton Valle</h5>
						<p class="mb-0 small text-secondary">Curriculum vitae</p>
					</div>
				</a>
			</div>
			<button class="navbar-toggler js-content" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div id="navbarNavDropdown" class="collapse navbar-collapse js-content">
				<ul id="main-menu" class="navbar-nav ml-auto"><?php

					foreach ( $header_keys as $key => $header ) {

						?>
						<li id="menu-item-<?php

							echo slugify( $translations->$header( null ) );

							?>" class="nav-item">
							<a title="<?php

								echo $translations->$header( isset( $_GET['lang'] ) ? $_GET['lang'] : null );

								?>" href="#<?php

								echo slugify( $translations->$header( null ) );

								?>" class="nav-link"><?php

								echo $translations->$header( isset( $_GET['lang'] ) ? $_GET['lang'] : null );

								?>
							</a>
						</li><?php

					}

					?>
					<li id="menu-item-language" class="nav-item"><?php

						if ( isset( $_GET['lang'] )
							&& $_GET['lang'] == 'fi' ) {

							echo "<a href='?lang=en' class='language-toggle btn btn-secondary'>ENG</a>";

						} else {

							echo "<a href='?lang=fi' class='language-toggle btn btn-secondary'>FI</a>";

						}

						?>
					</li>
				</ul>
			</div>
			<noscript>
				<a href="?lang=<?php

					if ( isset( $_GET['lang'] )
						&& $_GET['lang'] == 'fi' ) {

						echo 'en';

					} else {

						echo 'fi';

					}

					?>" class="btn btn-secondary js-content"><?php

					if ( isset( $_GET['lang'] )
						&& $_GET['lang'] == 'fi' ) {

						echo 'ENG';

					} else {

						echo 'FI';

					}

					?>
				</a>
			</noscript>
		</div>
	</nav>
</header>