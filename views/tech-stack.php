<?php

/**
 *	views/tech-stack
 *
 *	@author Anton Valle
 */

$ts_button_popover_keys = array(
	'WordPress'			=> 'button_wordpress_popover',
	'JavaScript'		=> 'button_javascript_popover',
//	'jQuery'			=> 'button_jquery_popover',
//	'Bootstrap'			=> 'button_bootstrap_popover',
	'PHP'				=> 'button_php_popover',
	'Git'				=> 'button_git_popover',
	'AWS'				=> 'button_aws_popover',
	'Docker'			=> 'button_docker_popover',
	'Bash'				=> 'button_bash_popover',
	'Python'			=> 'button_python_popover',
	'Ansible'			=> 'button_ansible_popover',
	'Azure'				=> 'button_azure_popover',
	'CD/CI'				=> 'button_cdci_popover',
	'Full-stack'		=> 'button_fullstack_popover',
	'API'				=> 'button_api_popover',
	'AI'				=> 'button_ai_popover',
	// 'Sibelius'			=> 'button_sibelius_popover',
	// 'Cubase'			=> 'button_cubase_popover',
	// 'Renoise Tracker'	=> 'button_renoise_tracker_popover',
	// 'PureData'			=> 'button_puredata_popover',
	// 'Renoise Tracker'	=> 'button_renoise_tracker_popover',
	// 'Music theory'		=> 'button_music_theory_popover',
);

?>
<section id="<?php

	echo slugify( $translations->header_tech_stack( null ) );

	?>">
	<div class="container">
		<div class="row py-5">
			<div class="col-md-4">
				<h2 class="appear-on-scroll"><?php

					echo $translations->header_tech_stack( isset( $_GET['lang'] ) ? $_GET['lang'] : null );

					?>
				</h2>
			</div>
			<div class="col-md-8">
				<div class="appear-on-scroll"><?php

					foreach ( $ts_button_popover_keys as $key => $ts_button_popover ) {

						?>
						<button type="button" class="btn btn-lg btn-info mx-2 my-2" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="<?php

							echo $translations->$ts_button_popover( isset( $_GET['lang'] ) ? $_GET['lang'] : null );

							if ( $key == 'Git' ) {

								echo '" onclick="window.open(\'https://github.com/atonusgit/cv-site\')';

							}

							?>

							"><?php

							if ( $key == 'Music theory' ) {

								echo $translations->button_music_theory_title( isset( $_GET['lang'] ) ? $_GET['lang'] : null );

							} else {

								echo $key;

							}

							?>
						</button><?php

					}

					?>
				</div>
			</div>
		</div>
	</div>
</section>
