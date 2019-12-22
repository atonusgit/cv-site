<?php

$portrait = 'img/anton_portrait.jpg';

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
	<title>Anton Valle - CV</title>
	<meta name="description" content="<?php

		if ( isset( $_GET['lang'] )
			&& $_GET['lang'] == 'fi' ) {

			echo "Hei, tässä uusi CV:ni, josta löydät sekä työ- että opiskeluhistoriaani. Mikäli haluat lisätietoja, ota rohkeasti yhteyttä!";

		} else {

			echo "Hi, here's my new CV, where you can find my work and education history. If you wish to know more, please don't hesitate to ask!";

		}

		?>">
	<meta property="og:title" content="Anton Valle - CV">
	<meta property="og:image" content="http://www.antonvalle.fi/cv/img/anton_paja.jpg">
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

		if ( isset( $_GET['lang'] )
			&& $_GET['lang'] == 'fi' ) {

			echo "Hei, tässä uusi CV:ni, josta löydät sekä työ- että opiskeluhistoriaani. Mikäli haluat lisätietoja, ota rohkeasti yhteyttä!";

		} else {

			echo "Hi, here's my new CV, where you can find my work and education history. If you wish to know more, please don't hesitate to ask!";

		}

		?>">
	<meta property="og:url" content="http://www.antonvalle.fi/cv/<?php

		if ( isset( $_GET['lang'] )
			&& $_GET['lang'] == 'fi' ) {

			echo "?lang=fi";

		} else {

			echo "?lang=en";

		}

		?>">
	<meta property="og:site_name" content="Anton Valle - CV">
	<meta name="author" content="Anton Valle">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="js/html2canvas.min.js"></script>
	<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
	<link rel="icon" href="<?php echo $portrait; ?>" sizes="32x32">
	<link rel="icon" href="<?php echo $portrait; ?>" sizes="192x192">
	<link rel="apple-touch-icon-precomposed" href="<?php echo $portrait; ?>">
	
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
	<div id="wrapper">
		<header id="header" role="banner" class="sticky-top">
			<nav id="navbar" class="navbar navbar-expand-lg navbar-light">
				<div class="container py-3">
					<div id="corder-thingie" class="d-flex align-items-center js-content">
						<a href="http://www.antonvalle.fi/cv" class="navbar-brand custom-logo-link" rel="home">
							<div id="corner-logo">
								<img src="img/signature-solid.svg">
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
						<ul id="main-menu" class="navbar-nav ml-auto">
							<li id="menu-item-personal-statement" class="nav-item">
								<a title="Personal statement" href="#personal-statement" class="nav-link"><?php

									if ( isset( $_GET['lang'] )
										&& $_GET['lang'] == 'fi' ) {

										echo "Vapaa sana";

									} else {

										echo "Personal Statement";

									}

									?>
								</a>
							</li>
							<li id="menu-item-tech-stack" class="nav-item">
								<a title="Tech Stack" href="#tech-stack" class="nav-link"><?php

									if ( isset( $_GET['lang'] )
										&& $_GET['lang'] == 'fi' ) {

										echo "Tech Stack";

									} else {

										echo "Tech Stack";

									}

									?>
								</a>
							</li>
							<li id="menu-item-experience" class="nav-item">
								<a title="Experience" href="#experience" class="nav-link"><?php

									if ( isset( $_GET['lang'] )
										&& $_GET['lang'] == 'fi' ) {

										echo "Kokemus";

									} else {

										echo "Experience";

									}

									?>
								</a>
							</li>
							<li id="menu-item-education" class="nav-item">
								<a title="Education" href="#education" class="nav-link"><?php

									if ( isset( $_GET['lang'] )
										&& $_GET['lang'] == 'fi' ) {

										echo "Koulutus";

									} else {

										echo "Education";

									}

									?>
								</a>
							</li>
							<li id="menu-item-hobbies" class="nav-item">
								<a title="Hobbies" href="#hobbies" class="nav-link mr-2"><?php

									if ( isset( $_GET['lang'] )
										&& $_GET['lang'] == 'fi' ) {

										echo "Harrastukset";

									} else {

										echo "Hobbies";

									}

									?>
								</a>
							</li>
							<li id="menu-item-language" class="nav-item"><?php

								if ( isset( $_GET['lang'] )
									&& $_GET['lang'] == 'fi' ) {

									echo "<a href='?lang=en' class='btn btn-secondary'>ENG</a>";

								} else {

									echo "<a href='?lang=fi' class='btn btn-secondary'>FI</a>";

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
		<div id="header-blur"></div>
		<div id="content-wrapper">
			<section id="name-face" class="pb-5" role="main">
				<div class="container">
					<div class="row py-5 align-items-center">
						<div class="col-md-5">
							<h1>Anton Valle</h1>
							<p><?php

								if ( isset( $_GET['lang'] )
									&& $_GET['lang'] == 'fi' ) {

									echo "Iki-innostunut ohjelmistokehittäjä, jolla on vahva urahistoria musiikkialalta.</p><p class='small'><a href='https://medium.com/@antonvalle/tein-uranvaihdoksen-s%C3%A4velt%C3%A4j%C3%A4st%C3%A4-koodariksi-d62ff67c6171' target='_blank' class='text-info'>Lue uranvaihdostarinani</a>";

								} else {

									echo "Forever enthusiastic software developer with a strong career background in music.</p><p class='small'><a href='https://medium.com/@antonvalle/tein-uranvaihdoksen-s%C3%A4velt%C3%A4j%C3%A4st%C3%A4-koodariksi-d62ff67c6171' target='_blank' class='text-info'>Read my career shifting story (in Finnish)</a>";

								}

								?>
							</p>
						</div>
						<div class="col-md-3"></div>
						<div class="col-md-4 text-center">
							<img class="round-image" src="<?php echo $portrait; ?>">
						</div>
					</div>
				</div>
			</section>
			<section id="personal-statement" class="margin-top-0-mobile">
				<div class="container">
					<div class="row py-5">
						<div class="col-md-4">
							<h2 class="appear-on-scroll"><?php

								if ( isset( $_GET['lang'] )
									&& $_GET['lang'] == 'fi' ) {

									echo "Vapaa sana";

								} else {

									echo "Personal Statement";

								}

								?>
							</h2>
						</div>
						<div class="col-md-8">
							<p class="appear-on-scroll"><?php

								if ( isset( $_GET['lang'] )
									&& $_GET['lang'] == 'fi' ) {

									echo "Olen toimittanut musiikkia ja ääntä alansa johtaville toimijoille ml. Kesko, Fujitsu Finland, Bacardi-Martini Finland, Talentum, The Showhouse ja Suomen Puolustusvoimat. Olen myös työskennellyt kulttuuritoimijoiden kanssa kuten UN Women Finland, Kansainvälinen Kulttuurikeskus Caisa sekä muutamien peliyhtiöiden kanssa: Playforia ja Timbermint Games. Portfolioni sisältää elokuva-, animaatio- ja pelimusiikkia sekä audio brändejä, konserttiesityksiä ja äänituotantoja monenlaisiin mainoskampanjoihin (TV, radio, internet).
									</p>
									<p class='appear-on-scroll'>
										Ohjelmistokehittäjänä olen työskennellyt verkkosivujen ja verkkosovellusten parissa. Viimeisin verkkosovellukseni on tehty omalle Superlect startup-yritykselleni, joka on ammattikoulutusalan alusta sekä markkinapaikka. Alusta tekee tiedon jakamisesta, uran rakentamisesta sekä verkostoitumisesta jännittävää ja hauskaa.";

								} else {

									echo "I've delivered audio and music for companies that are their industry leaders e.g. Kesko, Fujitsu Finland, Bacardi-Martini Finland, Talentum, The Showhouse and The Finnish Defense Forces. I've also worked with cultural entities like UN Women Finland, Int'l Cultural Centre Caisa as well as with some game companies: Playforia and Timbermint Games. My portfolio contains film and animation music, game soundtracks, audio brands, live performances and audio for a variety of ad campaigns (TV, radio, internet).
									</p>
									<p class='appear-on-scroll'>
										As a software developer I've worked with websites and web applications. My latest web application is done for my own startup Superlect, which is a platform and a marketplace for professional education. The platform makes knowledge sharing, career building and networking fun and exciting.";

								}

								?>
							</p>
						</div>
					</div>
				</div>
			</section>
			<section id="tech-stack">
				<div class="container">
					<div class="row py-5">
						<div class="col-md-4">
							<h2 class="appear-on-scroll"><?php

								if ( isset( $_GET['lang'] )
									&& $_GET['lang'] == 'fi' ) {

									echo "Tech Stack";

								} else {

									echo "Tech Stack";

								}

								?>
							</h2>
						</div>
						<div class="col-md-8">
							<div class="appear-on-scroll">
								<button type="button" class="btn btn-lg btn-info mx-2 my-2" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="<?php

									if ( isset( $_GET['lang'] )
										&& $_GET['lang'] == 'fi' ) {

										echo "Olen työskennellyt WordPressin kanssa vuosia, mutta Superlect (app.superlect.com) on ensimmäinen alusta asti rakennettu WordPress-sovellukseni.";

									} else {

										echo "I've worked with WordPress for many years, but Superlect (app.superlect.com) is my first WordPress build from ground up.";

									}

									?>">WordPress</button>
								<button type="button" class="btn btn-lg btn-info mx-2 my-2" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="<?php

									if ( isset( $_GET['lang'] )
										&& $_GET['lang'] == 'fi' ) {

										echo "Menin ja latasin Vanilla JS -'kirjaston' parikin kertaa, ennenkuin tajusin mitä se oikeasti tarkoittaa :)";

									} else {

										echo "I downloaded Vanilla JS 'library' a couple of times and it really hit me when I realised what it actually means :)";

									}

									?>">JavaScript</button>
								<button type="button" class="btn btn-lg btn-info mx-2 my-2" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="<?php

									if ( isset( $_GET['lang'] )
										&& $_GET['lang'] == 'fi' ) {

										echo "jQuery on ollut kovassa käytössä useimmissa verkkoprojekteissani.";

									} else {

										echo "jQuery has been in heavy use in most of my web projects.";

									}

									?>">jQuery</button>
								<button type="button" class="btn btn-lg btn-info mx-2 my-2" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="<?php

									if ( isset( $_GET['lang'] )
										&& $_GET['lang'] == 'fi' ) {

										echo "Bootstrap on oma luotto-UI-designerini <3";

									} else {

										echo "Bootstrap is my fellow UI designer <3";

									}

									?>">Bootstrap</button>
								<button type="button" class="btn btn-lg btn-info mx-2 my-2" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="<?php

									if ( isset( $_GET['lang'] )
										&& $_GET['lang'] == 'fi' ) {

										echo "Suosikkiohjelmointikieleni tällä hetkellä, koska olen päätynyt työskentelemään sen parissa pitkään.";

									} else {

										echo "My favorite language at the moment, since I've been working with it for so long.";

									}

									?>">PHP</button>
								<button type="button" class="btn btn-lg btn-info mx-2 my-2" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="<?php

									if ( isset( $_GET['lang'] )
										&& $_GET['lang'] == 'fi' ) {

										echo "Pidin Githubia pitkään vain pilvivarmuuskopiona. Kun projektien koko sekä monimutkaisuus kasvoivat aloin pikkuhiljaa ottamaan käyttöön versoilun (branching), uusioalustamisen (rebasing) ja sulauttamisen (merging).";

									} else {

										echo "For a long time I used Github as a cloud backup only. When projects expanded and complexity grew I started gradually utiliatize branching, rebasing and merging.";

									}

									?>">Git</button>
								<button type="button" class="btn btn-lg btn-info mx-2 my-2" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="<?php

									if ( isset( $_GET['lang'] )
										&& $_GET['lang'] == 'fi' ) {

										echo "On huvittavaa, että Rasperry Pi:n opiskelu auttoi minua suuresti ymmärtämään AWS:ää. Tällä hetkellä työstän lohkoketjuprojektia, jossa olen kytkenyt kaksi AWS EC2 -palvelinta samaan ketjuun ns. noodeina. Tämän lohkoketjun tavoite on tarjota vahva taustajärjestelmä Superlect-koulutuskrediittien hallinnointiin.";

									} else {

										echo "It's funny, but learning Rasbperry Pi really helped me to understand AWS. I have an ongoing blockchain project in AWS. Currently I've hooked up two EC2 servers to the blockchain as nodes. The purpose of this blockchain is to provide strong backend to Superlect education credits.";

									}

									?>">AWS</button>
								<button type="button" class="btn btn-lg btn-info mx-2 my-2" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="<?php

									if ( isset( $_GET['lang'] )
										&& $_GET['lang'] == 'fi' ) {

										echo "Olen nuotintanut partituureja yksittäisille soittajille, kuoroille aina sinfoniaorkesterikokoonpanoon saakka.";

									} else {

										echo "I've created scores from single players, to choirs up to symphony orchestras with Sibelius";

									}

									?>">Sibelius</button>
								<button type="button" class="btn btn-lg btn-info mx-2 my-2" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="<?php

									if ( isset( $_GET['lang'] )
										&& $_GET['lang'] == 'fi' ) {

										echo "Pääasiallinen musiikkityöasemani (DAW)";

									} else {

										echo "My main DAW";

									}

									?>">Cubase</button>
								<button type="button" class="btn btn-lg btn-info mx-2 my-2" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="<?php

									if ( isset( $_GET['lang'] )
										&& $_GET['lang'] == 'fi' ) {

										echo "Toiseksi suosituin musiikkityöasemani (DAW). Trackereillä on erityispaikka sydämessäni ja uskon edelleen, että ne lopulta valtaavat koko maailman :)";

									} else {

										echo "My secondary DAW. Music trackers have a special place in my heart, and I still believe they will one day conquer the world :)";

									}

									?>">Renoise Tracker</button>
								<button type="button" class="btn btn-lg btn-info mx-2 my-2" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="<?php

									if ( isset( $_GET['lang'] )
										&& $_GET['lang'] == 'fi' ) {

										echo "Hyvin mielenkiintoinen 'väliohjelma' varsinaisen musiikkityöaseman (DAW) sekä suoran koodaamisen välillä.";

									} else {

										echo "Really interesting 'middleware' between DAW and direct coding.";

									}

									?>">PureData</button>
								<button type="button" class="btn btn-lg btn-info mx-2 my-2" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="<?php

								if ( isset( $_GET['lang'] )
									&& $_GET['lang'] == 'fi' ) {

									echo "Lapsuuteni kului kuuntelemalla Bachia, Tchaikowskya ja Sibeliusta. Korvani virittyivät aistimaan perinteisen äänenkuljetuksen periaatteet ja myöhemmin opin nimet ja säännöt näille periaatteille Sibelius-Akatemiassa.";

								} else {

									echo "I spent my childhood listening to Bach, Tchaikowsky and Sibelius. My ear tuned to sense traditional voice-leading principles and later I learned the names and rules of these principles at Sibelius Academy.";

								}

								?>"><?php

								if ( isset( $_GET['lang'] )
									&& $_GET['lang'] == 'fi' ) {

									echo "Länsimaisen klassisen musiikin teoria";

								} else {

									echo "Western classical music theory";

								}

								?></button>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="experience">
				<div class="container">
					<div class="row py-5">
						<div class="col-md-4">
							<h2 class="appear-on-scroll"><?php

								if ( isset( $_GET['lang'] )
									&& $_GET['lang'] == 'fi' ) {

									echo "Kokemus";

								} else {

									echo "Experience";

								}

								?>
							</h2>
						</div>
						<div class="col-md-8">
							<div class="appear-on-scroll">
								<ul>
									<li class="bg-light rounded mx-3 my-3 px-3 py-3">
										<p>
											<strong><?php

											if ( isset( $_GET['lang'] )
												&& $_GET['lang'] == 'fi' ) {

												echo "Superlect Oy, edtech-alusta - Osa-perustaja ja CTO";

											} else {

												echo "Superlect Ltd., edtech platform - Co-founder and CTO";

											}

											?>
											</strong>
											<br>
											<span class="text-secondary"><i><?php

											if ( isset( $_GET['lang'] )
												&& $_GET['lang'] == 'fi' ) {

												echo "2018 - Nykyinen";

											} else {

												echo "2018 - Present";

											}

											?></i></span>
										</p>
										<p><?php

											if ( isset( $_GET['lang'] )
												&& $_GET['lang'] == 'fi' ) {

												echo "Olen yksi yrityksen perustajista, toimin varainhankkijana ja johdan WordPress-pohjaisen kauppapaikan ohjelmistokehitystä.";

											} else {

												echo "Co-founded the company, raised funding and lead software development of a WordPress-based marketplace.";

											}

											?>
										</p>
										<p class="mb-0">
											<a href="https://app.superlect.com" class="badge badge-light" target="_blank">
												<img class="badge-icon" src="img/mouse-pointer-solid.svg"> <?php

												if ( isset( $_GET['lang'] )
													&& $_GET['lang'] == 'fi' ) {

													echo "Vieraile alustassa";

												} else {

													echo "Visit the platform";

												}

												?>
											</a> <a href="https://www.linkedin.com/pulse/esittelyss%C3%A4-superlect-mit%C3%A4-opin-sit%C3%A4-tehdess%C3%A4-anton-valle/" class="badge badge-light" target="_blank">
												<img class="badge-icon" src="img/book-open-solid.svg"> <?php

												if ( isset( $_GET['lang'] )
													&& $_GET['lang'] == 'fi' ) {

													echo "Lue lisää";

												} else {

													echo "Read more (in Finnish)";

												}

												?>
											</a>
										</p>
									</li>
									<li class="bg-light rounded mx-3 my-3 px-3 py-3">
										<p>
											<strong><?php

											if ( isset( $_GET['lang'] )
												&& $_GET['lang'] == 'fi' ) {

												echo "MASSIVE Helsinki Oy, mainostoimisto - Osa-perustaja, Audio Director ja CEO";

											} else {

												echo "MASSIVE Helsinki Ltd., AD agency - Co-founder, Audio Director and CEO";

											}

											?>
											</strong>
											<br>
											<span class="text-secondary"><i><?php

											if ( isset( $_GET['lang'] )
												&& $_GET['lang'] == 'fi' ) {

												echo "2005 - 2018";

											} else {

												echo "2005 - 2018";

											}

											?></i></span>
										</p>
										<p class="mb-0"><?php

											if ( isset( $_GET['lang'] )
												&& $_GET['lang'] == 'fi' ) {

												echo "Tuotin ääntä ja musiikkia moninaisiin projekteihin (kaupallinen, kulttuuri, indie). Järjestin koulutuksia ja toimin puhujana seminaareissa. Hoidin yrityksen kirjanpidon ja vastasin yrityksen varallisuudesta. Olin yksi yrityksen perustajista ja johdin sitä sen hienosta syntymästä aina sen armolliseen loppuun saakka.";

											} else {

												echo "I produced audio for variety of productions (commercial, cultural, indie). I held classes and spoke at seminars. I managed accounting and finances. I co-founded and lead the company from it's glorious beginning to it’s graceful end.";

											}

											?>
										</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="testimonials" class="bg-info inner-top-shadow testimonials-bg parallax">
				<div class="container">
					<div class="row py-5 align-items-center">
						<div class="col-md py-3">
							<div class="appear-on-scroll">
								<div class="row">
									<div class="col-auto">
										<img src="img/quote-left-solid.svg" style="width: 4em;">
									</div>
									<div class="col text-light">
										<p>
											"Anton is a passionate professional and a great person to work with. We worked together on a project we produced at Boutique for YL. He created a thrilling soundscape that was spot on for the project and really helped elevate it to another level. I’m looking forward to working with him again when the opportunity arises."
										</p>
										- <strong>Ville Salervo</strong>
										<br><span class="small"><i>Design Lead | Boutique Animation</i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md py-3">
							<div class="appear-on-scroll">
								<div class="row">
									<div class="col-auto">
										<img src="img/quote-left-solid.svg" style="width: 4em;">
									</div>
									<div class="col text-light">
										<p>
											"I have been working with Anton on numerous projects since 2011 and you rarely find somebody with such an interesting skillset. He is a great musician and a composer, but also highly skilled in technical related areas. Not just the ones you would expect from a moder composer (music tech., signal processing), but also in coding in general, which he manages to incorporate also in his music making workflow to improve efficiency.
										</p>
										<p>
											No matter if we worked on commercial or art projects, it has always been a smooth and inspiring cooperation that helped us create interesting results and use our resources and skills well."
										</p>
										- <strong>Jindřich Kravařík</strong>
										<br><span class="small"><i>Sound Designer, Music Composer and Recording Engineer | Sype Studios</i></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col text-center text-light py-5">
							<div class="appear-on-scroll">
								<img src="img/linkedin-brands.svg" style="width: 1em; margin-bottom: 4px">&nbsp
								<a href="https://www.linkedin.com/in/antonvalle/" target="_blank" class="text-light"><?php
																											
									if ( isset( $_GET['lang'] )
										&& $_GET['lang'] == 'fi' ) {

										echo "Verkostoidutaan LinkedIn:issä";

									} else {

										echo "Connect with me on LinkedIn";

									}

									?>
								</a>
							</div>
						</div>
					</div>
				</div>				
			</section>
			<section id="education" class="inner-top-shadow">
				<div class="container">
					<div class="row py-5">
						<div class="col-md-4">
							<h2 class="appear-on-scroll"><?php

								if ( isset( $_GET['lang'] )
									&& $_GET['lang'] == 'fi' ) {

									echo "Koulutus";

								} else {

									echo "Education";

								}

								?>
							</h2>
						</div>
						<div class="col-md-8">
							<div class="appear-on-scroll">
								<ul>
									<li class="bg-light rounded mx-3 my-3 px-3 py-3">
										<p>
											<strong><?php

											if ( isset( $_GET['lang'] )
												&& $_GET['lang'] == 'fi' ) {

												echo "xEdu";

											} else {

												echo "xEdu";

											}

											?></strong>
											<br>
											<span class="text-secondary"><i><?php

											if ( isset( $_GET['lang'] )
												&& $_GET['lang'] == 'fi' ) {

												echo "2018 - 2018";

											} else {

												echo "2018 - 2018";

											}

											?></i></span>
										</p>
										<p class="small text-secondary"><?php

											if ( isset( $_GET['lang'] )
												&& $_GET['lang'] == 'fi' ) {

												echo "xEdu on Euroopan johtava startup-kiihdyttämö, jonka painopisteenä on koulutusliiketoiminta. Startupeille suunnattu kuuden kuukauden mittainen koulutusohjelma toteutetaan kahdesti vuodessa yhteistyössä pedagogiikan, liiketoiminnan ja teknologian ammattilaisten kanssa. Valitut yritykset voivat luoda tärkeitä yhteyksiä niin suomalaiseen kuin kansainväliseen asiakaskuntaan ja saada vertaistukea toimintansa alkumetreillä muilta ohjelmaan valituilta startup-yrityksiltä.";

											} else {

												echo "xEdu is Europe's leading business accelerator for edtech startups creating transformative learning solutions with pedagogical impact. Lessons include product development to market entry and internationalization, real-life testing environments for research and development. Access to a global partner network of recognized leaders in the education business for our startups.";

											}

											?>
										</p>
										<p class="mb-0"><?php

											if ( isset( $_GET['lang'] )
												&& $_GET['lang'] == 'fi' ) {

												echo "Liiketoiminnan kehittäminen, markkinointi, myynti, johtaminen, de, tiiminrakentaminen, pedagogiikka, rahoituksen hakeminen ja liikeidean esittäminen (pitching).";

											} else {

												echo "Business development, marketing, sales, leadership & management, design thinking UX-UI, teambuilding, pedagogy, fundraising and pitching.";

											}

											?>
										</p>
									</li>
									<li class="bg-light rounded mx-3 my-3 px-3 py-3">
										<p>
											<strong><?php

											if ( isset( $_GET['lang'] )
												&& $_GET['lang'] == 'fi' ) {

												echo "F-Secure Tietoturvakurssi - MOOC";

											} else {

												echo "F-Secure Cyber Security Base - MOOC";

											}

											?></strong>
											<br>
											<span class="text-secondary"><i><?php

											if ( isset( $_GET['lang'] )
												&& $_GET['lang'] == 'fi' ) {

												echo "2016";

											} else {

												echo "2016";

											}

											?></i></span>
										</p>
										<p class="mb-0">
											<a href="https://goo.gl/NO0H5E" class="badge badge-light" target="_blank">
												<img class="badge-icon" src="img/graduation-cap-solid.svg"> <?php

												if ( isset( $_GET['lang'] )
													&& $_GET['lang'] == 'fi' ) {

													echo "Avaa todistus";

												} else {

													echo "Open certificate";

												}

												?>
											</a>
										</p>
									</li>
									<li class="bg-light rounded mx-3 my-3 px-3 py-3">
										<p>
											<strong><?php

											if ( isset( $_GET['lang'] )
												&& $_GET['lang'] == 'fi' ) {

												echo "Hogeschool voor de kunsten Utrecht - Opiskelijavaihto";

											} else {

												echo "Hogeschool voor de kunsten Utrecht - Student exchange";

											}

											?></strong>
											<br>
											<span class="text-secondary"><i><?php

											if ( isset( $_GET['lang'] )
												&& $_GET['lang'] == 'fi' ) {

												echo "2011 - 2012";

											} else {

												echo "2011 - 2012";

											}

											?></i></span>
										</p>
										<p class="mb-0"><?php

											if ( isset( $_GET['lang'] )
												&& $_GET['lang'] == 'fi' ) {

												echo "Mediasäveltämisen osasto. Elokuva-, peli- ja konserttimusiikin sävellys. Studiotyöstentely.";

											} else {

												echo "Department of composing for media. Composing for films, games and concerts. Working in studio.";

											}

											?>
										</p>
									</li>
									<li class="bg-light rounded mx-3 my-3 px-3 py-3">
										<p>
											<strong><?php

											if ( isset( $_GET['lang'] )
												&& $_GET['lang'] == 'fi' ) {

												echo "Sibelius-Akatemia, Musiikin kand.";

											} else {

												echo "Sibelius Academy, B. Mus";

											}

											?></strong>
											<br>
											<span class="text-secondary"><i><?php

											if ( isset( $_GET['lang'] )
												&& $_GET['lang'] == 'fi' ) {

												echo "2009 - 2013";

											} else {

												echo "2009 - 2013";

											}

											?></i></span>
										</p>
										<p><?php

											if ( isset( $_GET['lang'] )
												&& $_GET['lang'] == 'fi' ) {

												echo "Musiikkiteknologia, elokuvamusiikin säveltäminen, musiikkiteoria. Oopperaäänittämisen mestarikurssi.";

											} else {

												echo "Music technology, film music composing, music theory. Opera recording master class.";

											}

											?>
										</p>
										<p class="mb-0">
											<a href="https://goo.gl/LInzXA" class="badge badge-light" target="_blank">
												<img class="badge-icon" src="img/graduation-cap-solid.svg"> <?php

												if ( isset( $_GET['lang'] )
													&& $_GET['lang'] == 'fi' ) {

													echo "Avaa todistus";

												} else {

													echo "Open certificate";

												}

												?>
											</a>
										</p>
									</li>
									<li class="bg-light rounded mx-3 my-3 px-3 py-3">
										<p>
											<strong><?php

											if ( isset( $_GET['lang'] )
												&& $_GET['lang'] == 'fi' ) {

												echo "Pohjois-Tapiolan lukio";

											} else {

												echo "Pohjois-Tapiola high school";

											}

											?></strong>
											<br>
											<span class="text-secondary"><i><?php

											if ( isset( $_GET['lang'] )
												&& $_GET['lang'] == 'fi' ) {

												echo "2003";

											} else {

												echo "2003";

											}

											?></i></span>
										</p>
										<p><?php

											if ( isset( $_GET['lang'] )
												&& $_GET['lang'] == 'fi' ) {

												echo "Ylioppilastodistus";

											} else {

												echo "Matriculation Examination";

											}

											?>
										</p>
										<p class="mb-0">
											<a href="https://bit.ly/38NClf0" class="badge badge-light" target="_blank">
												<img class="badge-icon" src="img/graduation-cap-solid.svg"> <?php

												if ( isset( $_GET['lang'] )
													&& $_GET['lang'] == 'fi' ) {

													echo "Avaa todistus";

												} else {

													echo "Open certificate";

												}

												?>
											</a>
										</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="hobbies">
				<div class="container">
					<div class="row py-5">
						<div class="col-md-4">
							<h2 class="appear-on-scroll"><?php

								if ( isset( $_GET['lang'] )
									&& $_GET['lang'] == 'fi' ) {

									echo "Harrastukset";

								} else {

									echo "Hobbies";

								}

								?>
							</h2>
						</div>
						<div class="col-md-8">
							<p class="appear-on-scroll"><?php

								if ( isset( $_GET['lang'] )
									&& $_GET['lang'] == 'fi' ) {

									echo "Videopelit, elektroniikka, Raspberry Pi, Arduino, sähköpyöräily ja kvanttiohjelmoinnin opiskelu.";

								} else {

									echo "Video games, electronics, Raspberry Pi, Arduino, electric biking and learning about quantum computing.";

								}

								?>
							</p>
						</div>
					</div>
				</div>
			</section>
			<section id="cta" class="bg-dark">
				<div class="container">
					<div class="row justify-content-center py-5">
						<div class="col-md-8 text-center text-light">
							<h2><?php

								if ( isset( $_GET['lang'] )
									&& $_GET['lang'] == 'fi' ) {

									echo "Jutellaan";

								} else {

									echo "Let's talk";

								}

								?>
							</h2>
						</div>
					</div>
					<div id="chat-area">
						<noscript>
							<div id="chat-anton-1" class="row justify-content-center">
								<div class="col-md-8">
									<div class="container">
										<div class="row align-items-center form-group" style="min-height: 112px;">
											<div class="col-auto">
												<img class="round-image chat-image" src="img/anton_portrait.jpg">
											</div>
											<div class="col-lg-auto col px-0">
												<div class="speech-bubble speech-bubble-anton text-light">
													<span class="chat-anton-text"><?php

														if ( isset( $_GET['lang'] )
															&& $_GET['lang'] == 'fi' ) {

															echo "Hei ystävä! Kerro nimesi ja kuinka voisin olla avuksi? Jätäthän myös yhteystietosi, kiitos!";

														} else {

															echo "Hi friend! Please, tell me your name and how could I help you? Remember to leave also your contact information, thank you!";

														}

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
									<form id="contact-me" action="post.php" method="post">
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

													if ( isset( $_GET['lang'] )
														&& $_GET['lang'] == 'fi' ) {

														echo "Hei Anton, olen ...";

													} else {

														echo "Hi Anton, I'm ...";

													}

													?>"></textarea>
										</div>
										<button type="submit" id="sendMessageButton" class="btn btn-light btn-block"><?php

											if ( isset( $_GET['lang'] )
												&& $_GET['lang'] == 'fi' ) {

												echo "Lähetä";

											} else {

												echo "Send";

											}

											?></button>
									</form>
								</div>
							</div>
						</noscript>
					</div>
				</div>
			</section>
		</div>
	</div>
	<footer>
		<div class="container-fluid bg-dark py-5">
			<div class="row">
				<div class="col text-light text-center">
					<p class="small"><?php

						if ( isset( $_GET['lang'] )
							&& $_GET['lang'] == 'fi' ) {

							echo "Tehty ystävien seurassa: <a href='https://getbootstrap.com/' target='_blank' class='text-light'>Bootstrap</a>, <a href='https://jquery.com/' target='_blank' class='text-light'>jQuery</a>, <a href='https://fontawesome.com/' target='_blank' class='text-light'><img class='badge-icon' src='img/rocket-solid.svg'> Font Awesome</a>, <a href='https://html2canvas.hertzen.com/' target='_blank' class='text-light'>html2canvas</a> ja <a href='https://lottiefiles.com/web-player' target='_blank' class='text-light'>Lottie</a>. <br><a href='https://wordpress.org/' target='_blank' class='text-light'>WordPress</a> ei valitettavasti ehtinyt näihin bileisiin!";

						} else {

							echo "Powered by my friends <a href='https://getbootstrap.com/' target='_blank' class='text-light'>Bootstrap</a>, <a href='https://jquery.com/' target='_blank' class='text-light'>jQuery</a>, <a href='https://fontawesome.com/' target='_blank' class='text-light'><img class='badge-icon' src='img/rocket-solid.svg'> Font Awesome</a>, <a href='https://html2canvas.hertzen.com/' target='_blank' class='text-light'>html2canvas</a> and <a href='https://lottiefiles.com/web-player' target='_blank' class='text-light'>Lottie</a>.<br>Unfortunately <a href='https://wordpress.org/' target='_blank' class='text-light'>WordPress</a> didn't make it into this party!";

						}

						?>
					</p>
				</div>
			</div>
		</div>
	</footer>
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
	<script src="js/navbar-actions.js"></script>
	<script src="js/pseudo-chat.js"></script>
	<script src="js/appear-on-scroll.js"></script><?php

	if ( isset( $_GET['thankyou'] ) ) {

		?>
		<noscript>
			<div class="modal fade bd-example-modal-sm show" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" style="display: block;">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="container py-3 px-3">
							<div class="row">
								<div class="col"><?php

									if ( isset( $_GET['lang'] )
										&& $_GET['lang'] == 'fi' ) {

										echo "Kiitos viestistäsi! Olen pian yhteydessä!";

									} else {

										echo "Thank you for your message! I'll be in touch with you shortly!";

									}

									?>
								</div>
							</div>
							<div class="row">
								<div class="col text-right">
									<a href="http://www.antonvalle.fi/cv/?lang=<?php

										if ( isset( $_GET['lang'] )
											&& $_GET['lang'] == 'fi' ) {

											echo "fi";

										} else {

											echo "en";

										}

										?>" class="btn btn-info"><?php

										if ( isset( $_GET['lang'] )
											&& $_GET['lang'] == 'fi' ) {

											echo "Sulje";

										} else {

											echo "Close";

										}

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

	if ( isset( $_GET['empty'] ) ) {

		?>
		<noscript>
			<div class="modal fade bd-example-modal-sm show" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" style="display: block;">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="container py-3 px-3">
							<div class="row">
								<div class="col">
									<p><?php

									if ( isset( $_GET['lang'] )
										&& $_GET['lang'] == 'fi' ) {

										echo "Hmm, viestisi sisällössä ilmeni ongelma...</p><p>Kokeile lähettää uudelleen.";

									} else {

										echo "Hmm, an error occurred with your message...</p><p>Please try sending again.";

									}

									?>
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col text-right">
									<a href="http://www.antonvalle.fi/cv/?lang=<?php

										if ( isset( $_GET['lang'] )
											&& $_GET['lang'] == 'fi' ) {

											echo "fi";

										} else {

											echo "en";

										}

										?>" class="btn btn-info"><?php

										if ( isset( $_GET['lang'] )
											&& $_GET['lang'] == 'fi' ) {

											echo "Sulje";

										} else {

											echo "Close";

										}

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

	?>
</body>
</html>