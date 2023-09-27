<?php

/**
 *	Translations
 *
 *	@author Anton Valle
 */

namespace antonCV;

class Translations {

	public function console_greetings( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "<!--
					 ____  ____  ____  _  _  ____  ____  __  __  __    _____    __   
					(_  _)( ___)(  _ \( \/ )( ___)(_  _)(  )(  )(  )  (  _  )  /__\  
					  )(   )__)  )   / \  /  )__)   )(   )(__)(  )(__  )(_)(  /(__)\ 
					 (__) (____)(_)\_)  \/  (____) (__) (______)(____)(_____)(__)(__)

					antonvalle.fi/cv | Design & Ohjelmistokehitys Anton Valle
					Löydä tämän CV-sivun repo osoitteesta https://github.com/atonusgit/cv-site\n-->";
				break;

			default:
				return "<!--
					 _    _  ____  __    ___  _____  __  __  ____ 
					( \/\/ )( ___)(  )  / __)(  _  )(  \/  )( ___)
					 )    (  )__)  )(__( (__  )(_)(  )    (  )__) 
					(__/\__)(____)(____)\___)(_____)(_/\/\_)(____)

					antonvalle.fi/cv | Design & Development Anton Valle
					Find repo of this CV site at https://github.com/atonusgit/cv-site\n-->";
				break;

		}

	}

	public function meta_title( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Anton Valle - CV";
				break;

			default:
				return "Anton Valle - CV";
				break;

		}

	}

	public function meta_description( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Hei, tässä uusi CV:ni, josta löydät sekä työ- että opiskeluhistoriaani. Mikäli haluat lisätietoja, ota rohkeasti yhteyttä!";
				break;

			default:
				return "Hi, here's my new CV, where you can find my work and education history. If you wish to know more, please don't hesitate to ask!";
				break;

		}

	}

	public function subtitle( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Iki-innostunut ohjelmistokehittäjä, jolla on vahva urahistoria musiikkialalta.</p><p class='small'><a href='https://medium.com/@antonvalle/tein-uranvaihdoksen-s%C3%A4velt%C3%A4j%C3%A4st%C3%A4-koodariksi-d62ff67c6171' target='_blank' class='text-info no-print'>Lue uranvaihdostarinani</a>";
				break;

			default:
				return "Forever enthusiastic software developer with a strong career background in music.</p><p class='small'><a href='https://medium.com/@antonvalle/tein-uranvaihdoksen-s%C3%A4velt%C3%A4j%C3%A4st%C3%A4-koodariksi-d62ff67c6171' target='_blank' class='text-info no-print'>Read my career shifting story (in Finnish)</a>";
				break;

		}

	}

	public function contact_info( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Espoo, Finland<br>cv@valle.fi";
				break;

			default:
				return "Espoo, Finland<br>cv@valle.fi";
				break;

		}

	}

	public function header_personal_statement( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Vapaa sana";
				break;

			default:
				return "Personal Statement";
				break;

		}

	}

	public function header_tech_stack( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Tech Stack";
				break;

			default:
				return "Tech Stack";
				break;

		}

	}

	public function header_experience( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Kokemus";
				break;

			default:
				return "Experience";
				break;

		}

	}

	public function header_education( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Koulutus";
				break;

			default:
				return "Education";
				break;

		}

	}

	public function header_hobbies( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Harrastukset";
				break;

			default:
				return "Hobbies";
				break;

		}

	}

	public function personal_statement( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "<p>Olen kokenut ohjelmistokehittäjä ja IT-osaajien tiiminvetäjä, jolla on vahva näkemys teknologian ja liiketoiminnan yhdistämisestä. Olen erikoistunut verkkosivujen ja verkkokauppojen kehittämiseen sekä prosessien tehostamiseen automaation ja tekoälyn avulla. Yksi keskeisistä tavoitteistani on hyödyntää näitä työkaluja liiketoimintaprosessien parantamiseksi. Vaikka taustani on tekninen, olen myös luonteva esiintyjä ja kouluttaja. Yli kymmenen vuoden kokemukseni musiikkialalla, erityisesti klassisen, elokuva- ja pelimusiikin parissa, on antanut minulle arvokkaan näkökulman luovuuden ja yksityiskohtien huomioimisen merkityksestä.</p><p>Tutustu työkokemukseeni ja projekteihini tällä sivulla saadaksesi kattavan kuvan osaamisestani. Pidän rohkeista kokeiluista ja yrityksistä luoda jotain uutta. Viihdyn myös mielelläni luovien ihmisten seurassa. test2</p>";
				break;

			default:
				return "<p>I am an experienced software developer and team leader in IT, with a strong vision for integrating technology and business. I specialize in web development and e-commerce, as well as streamlining processes through automation and artificial intelligence. One of my key objectives is to leverage these tools to improve business processes. Although my background is technical, I am also a natural presenter and educator. My over ten years of experience in the music industry, particularly in classical, film, and game music, has given me a valuable perspective on the importance of creativity and attention to detail.</p><p>Explore my work history and projects on this page to get a comprehensive view of my expertise. I enjoy bold experiments and attempts to create something new. I also thrive in the company of creative individuals.</p>";
				break;

		}

	}

	public function button_wordpress_popover( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Olen toteuttanut WordPress:illä mm. kauppapaikka-alustan, verkkokauppoja ja tavanomaisia verkkosivuja.";
				break;

			default:
				return "I have implemented with WordPress e.g. marketplace platform, online stores and conventional websites.";
				break;

		}

	}

	public function button_javascript_popover( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Menin ja latasin Vanilla JS -'kirjaston' parikin kertaa, ennenkuin tajusin mitä se oikeasti tarkoittaa :)";
				break;

			default:
				return "I downloaded Vanilla JS 'library' a couple of times and it really hit me when I realised what it actually means :)";
				break;

		}

	}

	public function button_jquery_popover( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "jQuery on ollut kovassa käytössä useimmissa verkkoprojekteissani.";
				break;

			default:
				return "jQuery has been in heavy use in most of my web projects.";
				break;

		}

	}

	public function button_bootstrap_popover( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Bootstrap on oma luotto-UI-designerini <3";
				break;

			default:
				return "Bootstrap is my fellow UI designer <3";
				break;

		}

	}

	public function button_php_popover( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Suosikkiohjelmointikieleni tällä hetkellä, koska olen päätynyt työskentelemään sen parissa pitkään.";
				break;

			default:
				return "My favorite language at the moment, since I've been working with it for so long.";
				break;

		}

	}

	public function button_git_popover( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Klikkaa Git-nappia vilkaistaksesi miten tämä CV-sivu on tehty.";
				break;

			default:
				return "Click the Git-button to see how this CV-site is done.";
				break;

		}

	}

	public function button_aws_popover( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "On huvittavaa, että Rasperry Pi:n opiskelu auttoi minua suuresti ymmärtämään AWS:ää. Tällä hetkellä työstän lohkoketjuprojektia, jossa olen kytkenyt kaksi AWS EC2 -palvelinta samaan ketjuun ns. noodeina. Tämän lohkoketjun tavoite on tarjota vahva taustajärjestelmä Superlect-koulutuskrediittien hallinnointiin.";
				break;

			default:
				return "It's funny, but learning Rasbperry Pi really helped me to understand AWS. I have an ongoing blockchain project in AWS. Currently I've hooked up two EC2 servers to the blockchain as nodes. The purpose of this blockchain is to provide strong backend to Superlect education credits.";
				break;

		}

	}

	public function button_docker_popover( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Kaikkialle kontti, jos vain mahdollista.";
				break;

			default:
				return "Let's containerize everything that's possible.";
				break;

		}

	}

	public function button_bash_popover( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Minulle on vasta myöhemmin valjennut kuinka merkittävä työkalu Bash-kieli on. Yksi parhaista.";
				break;

			default:
				return "It has only dawned on me later how significant a tool the Bash language is. One of the best.";
				break;

		}

	}

	public function button_python_popover( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Kun Bash ei riitä, otetaan Python. Toki Python on oikeastaan ihan eri työkalu, ja olen tehnyt sillä monenlaisia automaatioita sekä tekoälymallin kouluttamista.";
				break;

			default:
				return "When Bash is not enough, Python comes into play. Of course, Python is actually a completely different tool, and I've used it for various types of automation as well as training artificial intelligence models.";
				break;

		}

	}

	public function button_ansible_popover( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Palvelimien massahallintaan on onneksi kehitetty Ansible sekä Ansible playbook. Olen töissä työskennellyt paljon Ansiblen parissa pitäen huolta palvelimien päivityksistä ja muista kilkkeistä.";
				break;

			default:
				return "Fortunately, Ansible and Ansible Playbook have been developed for mass management of servers. I have worked extensively with Ansible in my job, taking care of server updates and other configurations.";
				break;

		}

	}

	public function button_sibelius_popover( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Olen nuotintanut partituureja yksittäisille soittajille, kuoroille aina sinfoniaorkesterikokoonpanoon saakka.";
				break;

			default:
				return "I've created scores from single players, to choirs up to symphony orchestras with Sibelius.";
				break;

		}

	}

	public function button_cubase_popover( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Pääasiallinen musiikkityöasemani (DAW)";
				break;

			default:
				return "My main DAW";
				break;

		}

	}

	public function button_renoise_tracker_popover( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Toiseksi suosituin musiikkityöasemani (DAW). Trackereillä on erityispaikka sydämessäni ja uskon edelleen, että ne lopulta valtaavat koko maailman :)";
				break;

			default:
				return "My secondary DAW. Music trackers have a special place in my heart, and I still believe they will one day conquer the world :)";
				break;

		}

	}

	public function button_puredata_popover( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Hyvin mielenkiintoinen 'väliohjelma' varsinaisen musiikkityöaseman (DAW) sekä suoran koodaamisen välillä.";
				break;

			default:
				return "Really interesting 'middleware' between DAW and direct coding.";
				break;

		}

	}

	public function button_music_theory_title( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Länsimaisen klassisen musiikin teoria";
				break;

			default:
				return "Western classical music theory";
				break;

		}

	}

	public function button_music_theory_popover( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Lapsuuteni kului kuuntelemalla Bachia, Tchaikowskya ja Sibeliusta. Korvani virittyivät aistimaan perinteisen äänenkuljetuksen periaatteet ja myöhemmin opin nimet ja säännöt näille periaatteille Sibelius-Akatemiassa.";
				break;

			default:
				return "I spent my childhood listening to Bach, Tchaikowsky and Sibelius. My ear tuned to sense traditional voice-leading principles and later I learned the names and rules of these principles at Sibelius Academy.";
				break;

		}

	}

	public function experience_evermade( $part, $lang ) {

		switch ( $part ) {

			case 'title':

				switch ( $lang ) {

					case 'fi':
						return "Evermade Oy, Digital Agency - Care Team Lead & Automations";
						break;

					default:
						return "Evermade Oy, Digital Agency - Care Team Lead & Automations";
						break;

				}

				break;

			case 'duration':

				switch ( $lang ) {

					case 'fi':
						return "2020 - Nykyinen";
						break;

					default:
						return "2020 - Present";
						break;

				}

				break;

			case 'description':

				switch ( $lang ) {

					case 'fi':
						return "Aloitin Evermadessa projektikehittäjänä verkkokauppojen ja integraatioiden parissa. Sitten siirryin Care-tiimiin, jossa palvelin asiakkaita pienkehittämisen parissa. Myöhemmin etenin Care-tiimin johtoon ja johdin myös työprosessiemme automatisoinnin sekä tietoturvan kehitystä.";
						break;

					default:
						return "I started at Evermade as a project developer focusing on e-commerce and integrations. Later, I moved to the Care team, where I served clients in small-scale development. Eventually, I advanced to lead the Care team and also spearheaded the automation of our work processes as well as improvements in cybersecurity.";
						break;

				}

				break;

		}

	}

	public function experience_superlect( $part, $lang ) {

		switch ( $part ) {

			case 'title':

				switch ( $lang ) {

					case 'fi':
						return "Superlect Oy, ammattikouluttamisen alusta - Osa-perustaja ja CTO";
						break;

					default:
						return "Superlect Ltd., platform for professional education - Co-founder and CTO";
						break;

				}

				break;

			case 'duration':

				switch ( $lang ) {

					case 'fi':
						return "2018 - 2020";
						break;

					default:
						return "2018 - 2020";
						break;

				}

				break;

			case 'description':

				switch ( $lang ) {

					case 'fi':
						return "Olin yksi yrityksen perustajista, toimin varainhankkijana ja johdin WordPress-pohjaisen kauppapaikan ohjelmistokehitystä.";
						break;

					default:
						return "Co-founded the company, raised funding and lead software development of a WordPress-based marketplace.";
						break;

				}

				break;

			case 'work_example_href':

				return 'https://app.superlect.com';
			break;

			case 'work_example_icon':

				return 'assets/img/mouse-pointer-solid.svg';
				break;

			case 'work_example_text':

				switch ( $lang ) {

					case 'fi':
						return "Tutustu työnäytteeseen";
						break;

					default:
						return "Check out the work sample";
						break;

				}

				break;

			case 'article_href':

				return 'https://www.linkedin.com/pulse/esittelyss%C3%A4-superlect-mit%C3%A4-opin-sit%C3%A4-tehdess%C3%A4-anton-valle/';
				break;

			case 'article_icon':

				return 'assets/img/book-open-solid.svg';
				break;

			case 'article_text':

				switch ( $lang ) {

					case 'fi':
						return "Lue artikkeli";
						break;

					default:
						return "Read an article (in Finnish)";
						break;

				}

				break;

			case 'article_popover':

				switch ( $lang ) {

					case 'fi':
						return "Esittelyssä Superlect - Mitä opin sitä tehdessä?";
						break;

					default:
						return "Esittelyssä Superlect - Mitä opin sitä tehdessä? (in Finnish)";
						break;

				}

				break;

		}

	}

	public function experience_massive_helsinki( $part, $lang ) {

		switch ( $part ) {

			case 'title':

				switch ( $lang ) {

					case 'fi':
						return "MASSIVE Helsinki Oy, mainostoimisto - Osa-perustaja, Audio Director ja CEO";
						break;

					default:
						return "MASSIVE Helsinki Ltd., AD agency - Co-founder, Audio Director and CEO";
						break;

				}

				break;

			case 'duration':

				switch ( $lang ) {

					case 'fi':
						return "2005 - 2018";
						break;

					default:
						return "2005 - 2018";
						break;

				}

				break;

			case 'description':

				switch ( $lang ) {

					case 'fi':
						return "Tuotin ääntä ja musiikkia moninaisiin projekteihin (kaupallinen, kulttuuri, indie). Järjestin koulutuksia ja toimin puhujana seminaareissa. Hoidin yrityksen kirjanpidon ja vastasin yrityksen varallisuudesta. Olin yksi yrityksen perustajista ja johdin sitä sen uljaasta syntymästä aina sen arvokkaaseen loppuun saakka.";
						break;

					default:
						return "I produced audio for variety of productions (commercial, cultural, indie). I held classes and spoke at seminars. I managed accounting and finances. I co-founded and lead the company from it's glorious beginning to it’s graceful end.";
						break;

				}

				break;

		}

	}

	public function connect_on_linkedin( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Verkostoidutaan LinkedIn:issä";
				break;

			default:
				return "Connect with me on LinkedIn";
				break;

		}

	}

	public function education_intro_to_generative_ai( $part, $lang ) {

		switch ( $part ) {

			case 'title':

				switch ( $lang ) {

					case 'fi':
						return "Johdatus Generatiiviseen Tekoälyyn - Google Cloud";
						break;

					default:
						return "Introduction to Generative AI Learning Path - Google Cloud";
						break;

				}

				break;

			case 'duration':

				switch ( $lang ) {

					case 'fi':
						return "2023";
						break;

					default:
						return "2023";
						break;

				}

				break;

			case 'description':

				switch ( $lang ) {

					case 'fi':
						return "Yleiskatsaus generaattisen tekoälyn konsepteihin, suurten kielimallien perusteista vastuullisen tekoälyn periaatteisiin.";
						break;

					default:
						return "Overview of generative AI concepts, from the fundamentals of large language models to responsible AI principles.";
						break;

				}

				break;

			case 'certificate_href':

				return 'https://www.cloudskillsboost.google/public_profiles/e3540342-a42c-4250-a87c-4be298f186c1';
				break;

			case 'certificate_icon':

				return 'assets/img/graduation-cap-solid.svg';
				break;

			case 'certificate_text':

				switch ( $lang ) {

					case 'fi':
						return "Avaa todistus";
						break;

					default:
						return "Open certificate";
						break;

				}

				break;

		}

	}

	public function education_elements_of_ai( $part, $lang ) {

		switch ( $part ) {

			case 'title':

				switch ( $lang ) {

					case 'fi':
						return "Elements of AI - MinnaLearn & Helsingin yliopisto";
						break;

					default:
						return "Elements of AI - MinnaLearn & University of Helsinki";
						break;

				}

				break;

			case 'duration':

				switch ( $lang ) {

					case 'fi':
						return "2023";
						break;

					default:
						return "2023";
						break;

				}

				break;

			case 'description':

				switch ( $lang ) {

					case 'fi':
						return "Tekoälyn perusteet.";
						break;

					default:
						return "Basics of AI.";
						break;

				}

				break;

			case 'certificate_href':

				return 'https://certificates.mooc.fi/validate/8bfmrx3ujt8';
				break;

			case 'certificate_icon':

				return 'assets/img/graduation-cap-solid.svg';
				break;

			case 'certificate_text':

				switch ( $lang ) {

					case 'fi':
						return "Avaa todistus";
						break;

					default:
						return "Open certificate";
						break;

				}

				break;

		}

	}

	public function education_xedu( $part, $lang ) {

		switch ( $part ) {

			case 'title':

				switch ( $lang ) {

					case 'fi':
						return "xEdu";
						break;

					default:
						return "xEdu";
						break;

				}

				break;

			case 'duration':

				switch ( $lang ) {

					case 'fi':
						return "2018";
						break;

					default:
						return "2018";
						break;

				}

				break;

			case 'sub-description':

				switch ( $lang ) {

					case 'fi':
						return "xEdu on Euroopan johtava startup-kiihdyttämö, jonka painopisteenä on koulutusliiketoiminta. Startupeille suunnattu kuuden kuukauden mittainen koulutusohjelma toteutetaan kahdesti vuodessa yhteistyössä pedagogiikan, liiketoiminnan ja teknologian ammattilaisten kanssa. Valitut yritykset voivat luoda tärkeitä yhteyksiä niin suomalaiseen kuin kansainväliseen asiakaskuntaan ja saada vertaistukea toimintansa alkumetreillä muilta ohjelmaan valituilta startup-yrityksiltä.";
						break;

					default:
						return "xEdu is Europe's leading business accelerator for edtech startups creating transformative learning solutions with pedagogical impact. Lessons include product development to market entry and internationalization, real-life testing environments for research and development. Access to a global partner network of recognized leaders in the education business for our startups.";
						break;

				}

				break;

			case 'description':

				switch ( $lang ) {

					case 'fi':
						return "Liiketoiminnan kehittäminen, markkinointi, myynti, johtaminen, UX-UI, tiiminrakentaminen, pedagogiikka, rahoituksen hakeminen ja liikeidean esittäminen (pitching).";
						break;

					default:
						return "Business development, marketing, sales, leadership & management, design thinking UX-UI, teambuilding, pedagogy, fundraising and pitching.";
						break;

				}

				break;

		}

	}

	public function education_fsecure_cyber_mooc( $part, $lang ) {

		switch ( $part ) {

			case 'title':

				switch ( $lang ) {

					case 'fi':
						return "F-Secure Tietoturvakurssi - MOOC";
						break;

					default:
						return "F-Secure Cyber Security Base - MOOC";
						break;

				}

				break;

			case 'duration':

				switch ( $lang ) {

					case 'fi':
						return "2016";
						break;

					default:
						return "2016";
						break;

				}

				break;

			case 'description':

				switch ( $lang ) {

					case 'fi':
						return "Web-applikaatioiden suojaus.";
						break;

					default:
						return "Securing web applications.";
						break;

				}

				break;

			case 'certificate_href':

				return 'https://goo.gl/NO0H5E';
				break;

			case 'certificate_icon':

				return 'assets/img/graduation-cap-solid.svg';
				break;

			case 'certificate_text':

				switch ( $lang ) {

					case 'fi':
						return "Avaa todistus";
						break;

					default:
						return "Open certificate";
						break;

				}

				break;

		}

	}

	public function education_hku( $part, $lang ) {

		switch ( $part ) {

			case 'title':

				switch ( $lang ) {

					case 'fi':
						return "Hogeschool voor de kunsten Utrecht - Opiskelijavaihto";
						break;

					default:
						return "Hogeschool voor de kunsten Utrecht - Student exchange";
						break;

				}

				break;

			case 'duration':

				switch ( $lang ) {

					case 'fi':
						return "2011 - 2012";
						break;

					default:
						return "2011 - 2012";
						break;

				}

				break;

			case 'description':

				switch ( $lang ) {

					case 'fi':
						return "Mediasäveltämisen osasto. Elokuva-, peli- ja konserttimusiikin sävellys. Studiotyöstentely.";
						break;

					default:
						return "Department of composing for media. Composing for films, games and concerts. Working in studio.";
						break;

				}

				break;

		}

	}

	public function education_sibelius_academy( $part, $lang ) {

		switch ( $part ) {

			case 'title':

				switch ( $lang ) {

					case 'fi':
						return "Sibelius-Akatemia, Musiikin kand.";
						break;

					default:
						return "Sibelius Academy, B. Mus";
						break;

				}

				break;

			case 'duration':

				switch ( $lang ) {

					case 'fi':
						return "2009 - 2013";
						break;

					default:
						return "2009 - 2013";
						break;

				}

				break;

			case 'description':

				switch ( $lang ) {

					case 'fi':
						return "Musiikkiteknologia, elokuvamusiikin säveltäminen, musiikkiteoria. Oopperaäänittämisen mestarikurssi.";
						break;

					default:
						return "Music technology, film music composing, music theory. Opera recording master class.";
						break;

				}

				break;

			case 'certificate_href':

				return 'https://goo.gl/LInzXA';
				break;

			case 'certificate_icon':

				return 'assets/img/graduation-cap-solid.svg';
				break;

			case 'certificate_text':

				switch ( $lang ) {

					case 'fi':
						return "Avaa todistus";
						break;

					default:
						return "Open certificate";
						break;

				}

				break;

		}

	}

	public function education_pohjis( $part, $lang ) {

		switch ( $part ) {

			case 'title':

				switch ( $lang ) {

					case 'fi':
						return "Pohjois-Tapiolan lukio";
						break;

					default:
						return "Pohjois-Tapiola high school";
						break;

				}

				break;

			case 'duration':

				switch ( $lang ) {

					case 'fi':
						return "2003";
						break;

					default:
						return "2003";
						break;

				}

				break;

			case 'description':

				switch ( $lang ) {

					case 'fi':
						return "Ylioppilastodistus";
						break;

					default:
						return "Matriculation Examination";
						break;

				}

				break;

			case 'certificate_href':

				return 'https://bit.ly/38NClf0';
				break;

			case 'certificate_icon':

				return 'assets/img/graduation-cap-solid.svg';
				break;

			case 'certificate_text':

				switch ( $lang ) {

					case 'fi':
						return "Avaa todistus";
						break;

					default:
						return "Open certificate";
						break;

				}

				break;

		}

	}

	public function hobbies( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Videopelit, elektroniikka, Raspberry Pi, Arduino, sähköpyöräily ja kvanttiohjelmoinnin opiskelu.";
				break;

			default:
				return "Video games, electronics, Raspberry Pi, Arduino, electric biking and learning about quantum computing.";
				break;

		}

	}

	public function cta_lets_talk( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Jutellaan";
				break;

			default:
				return "Let's talk";
				break;

		}

	}

	public function cta_hi_friend( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Hei ystävä! Kerro nimesi ja kuinka voisin olla avuksi? Jätäthän myös yhteystietosi, kiitos!";
				break;

			default:
				return "Hi friend! Please, tell me your name and how could I help you? Remember to also leave your contact information, thank you!";
				break;

		}

	}

	public function cta_placeholder( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Hei Anton, olen ...";
				break;

			default:
				return "Hi Anton, I'm ...";
				break;

		}

	}

	public function cta_send( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Lähetä";
				break;

			default:
				return "Send";
				break;

		}

	}

	public function footer_note( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Tehty ystävien seurassa: <a href='https://getbootstrap.com/' target='_blank' class='text-light'>Bootstrap</a>, <a href='https://jquery.com/' target='_blank' class='text-light'>jQuery</a>, <a href='https://fontawesome.com/' target='_blank' class='text-light'><img class='badge-icon' src='assets/img/rocket-solid.svg'> Font Awesome</a>, <a href='https://html2canvas.hertzen.com/' target='_blank' class='text-light'>html2canvas</a> ja <a href='https://lottiefiles.com/web-player' target='_blank' class='text-light'>Lottie</a>. <br><a href='https://wordpress.org/' target='_blank' class='text-light'>WordPress</a> ei valitettavasti ehtinyt näihin bileisiin!";
				break;

			default:
				return "Powered by my friends <a href='https://getbootstrap.com/' target='_blank' class='text-light'>Bootstrap</a>, <a href='https://jquery.com/' target='_blank' class='text-light'>jQuery</a>, <a href='https://fontawesome.com/' target='_blank' class='text-light'><img class='badge-icon' src='assets/img/rocket-solid.svg'> Font Awesome</a>, <a href='https://html2canvas.hertzen.com/' target='_blank' class='text-light'>html2canvas</a> and <a href='https://lottiefiles.com/web-player' target='_blank' class='text-light'>Lottie</a>.<br>Unfortunately <a href='https://wordpress.org/' target='_blank' class='text-light'>WordPress</a> didn't make it into this party!";
				break;

		}

	}

	public function modal_thank_you_response( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Kiitos viestistäsi! Olen pian yhteydessä!";
				break;

			default:
				return "Thank you for your message! I'll be in touch with you shortly!";
				break;

		}

	}

	public function close( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Sulje";
				break;

			default:
				return "Close";
				break;

		}

	}

	public function modal_empty_response( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Hmm, viestisi sisällössä ilmeni ongelma...</p><p>Kokeile lähettää uudelleen.";
				break;

			default:
				return "Hmm, an error occurred with your message...</p><p>Please try sending again.";
				break;

		}

	}

}
