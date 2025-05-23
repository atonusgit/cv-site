<?php
session_start();

/**
 *	Page layout
 *
 *	@author Anton Valle
 */

require_once( 'assets/translations/translations.php' );
require_once( 'process/security.php' );
require_once( 'process/helpers.php' );

use antonCV\Translations;
use antonCV\Security;

$token = ( new Security )->getToken( 'postToken' );
$translations = new Translations;

echo $translations->console_greetings( isset( $_GET['lang'] ) ? $_GET['lang'] : null );

?>
<!doctype html>
<html lang="<?php

	if ( isset( $_GET['lang'] )
		&& $_GET['lang'] == 'fi' ) {

		echo "fi";

	} else {

		echo "en";

	}

	?>">
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="noindex, nofollow">
	<title><?php

		echo $translations->meta_title( isset( $_GET['lang'] ) ? $_GET['lang'] : null );

		?></title>
	<meta name="description" content="<?php

		echo $translations->meta_description( isset( $_GET['lang'] ) ? $_GET['lang'] : null );

		?>">
	<meta property="og:title" content="<?php

		echo $translations->meta_title( isset( $_GET['lang'] ) ? $_GET['lang'] : null );

		?>">
	<meta property="og:image" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>/cv/assets/img/anton_paja.jpg">
	<meta property="og:type" content="website">
	<meta property="og:locale" content="<?php

		if ( isset( $_GET['lang'] )
			&& $_GET['lang'] == 'fi' ) {

			echo "fi_FI";

		} else {

			echo "en_US";

		}

		?>">
	<meta property="og:description" content="<?php

		echo $translations->meta_description( isset( $_GET['lang'] ) ? $_GET['lang'] : null );

		?>">
	<meta property="og:url" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>/cv/<?php

		if ( isset( $_GET['lang'] )
			&& $_GET['lang'] == 'fi' ) {

			echo "?lang=fi";

		} else {

			echo "?lang=en";

		}

		?>">
	<meta property="og:site_name" content="<?php

		echo $translations->meta_title( isset( $_GET['lang'] ) ? $_GET['lang'] : null );

		?>">
	<meta name="author" content="Anton Valle">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="assets/js/html2canvas.min.js"></script>
	<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
	<link rel="icon" href="assets/img/anton_portrait_2.jpg" sizes="32x32">
	<link rel="icon" href="assets/img/anton_portrait_2.jpg" sizes="192x192">
	<link rel="apple-touch-icon-precomposed" href="assets/img/anton_portrait_2.jpg">
	
	<!-- Begin Inspectlet Asynchronous Code -->
	<script type="text/javascript">
	(function() {
	window.__insp = window.__insp || [];
	__insp.push(['wid', 1090028467]);
	var ldinsp = function(){
	if(typeof window.__inspld != "undefined") return; window.__inspld = 1; var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js?wid=1090028467&r=' + Math.floor(new Date().getTime()/3600000); var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); };
	setTimeout(ldinsp, 0);
	})();
	</script>
	<!-- End Inspectlet Asynchronous Code -->

	<noscript>
		<style type="text/css">
			#navbar {
				background-color: #f8f9fa!important;
				box-shadow: 0px 6px 20px 0px rgba(0,0,0,0.15);
				-webkit-transition: all 0.2s ease-in-out;
				border-bottom: 1px solid #17a2b847;
			}
			.js-content {
				display: none;
			}
			.js-content > a > div#corner-logo {
				display: none;
			}
			.js-content > a > div#corner-name {
				display: block;
			}
			@media (max-width: 991px) {
				a.js-content {
					display: block;
				}
			}
		</style>
	</noscript>
</head>
<body>
	<div id="wrapper"><?php

		include_once( 'views/header.php' );

		?>
		<div id="header-blur" class="no-print"></div>
		<div id="content-wrapper"><?php

			include_once( 'views/name-face.php' );
			include_once( 'views/personal_statement.php' );
			include_once( 'views/tech-stack.php' );
			include_once( 'views/experience.php' );
			include_once( 'views/testimonials.php' );
			include_once( 'views/education.php' );
			include_once( 'views/hobbies.php' );
			include_once( 'views/cta.php' );

			?>
		</div>
	</div><?php

	include_once( 'views/footer.php' );

	?>
	<script>
		jQuery( document ).ready( function( $ ) {

			updateCanvas()
			appearOnStartup()
			toggleNavbarShadow()

			$( window ).scroll( ( e ) => {

				appearOnScroll()
				updateNavbarActiveLink( e )
				$( "canvas" ).css( "-webkit-transform", "translatey(-" + $( window ).scrollTop() + "px)")
				toggleNavbarShadow()
				toggleNavbarCornerLogo()
				launchChat()

			} )

			$( 'button.navbar-toggler' ).on( 'click', () => {

				$( '#navbar' ).addClass( 'navbar-shadow' )
				$( '#navbar' ).addClass( 'bg-light' )

			} )
			$( '[data-toggle="popover"]' ).popover()

		} )
	</script>
	<script src="assets/js/navbar-actions.js"></script>
	<script src="assets/js/pseudo-chat.js"></script>
	<script src="assets/js/appear-on-scroll.js"></script><?php

	include_once( 'views/modal_thank_you.php' );
	include_once( 'views/modal_empty.php' );

	?>
</body>
</html>