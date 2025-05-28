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
				return "Luova kehittäjä, jonka tekoäly on sytyttänyt uudelleen.";
				break;

			default:
				return "A creative developer rekindled by artificial intelligence.";
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
				return "<p>Olen tekoälyn soveltamiseen erikoistunut teknologia-asiantuntija ja tiiminvetäjä, jolla on yli 10 vuoden kokemus ohjelmistokehityksestä, automaatiosta ja digitaalisten tuotteiden rakentamisesta. Olen kehittänyt ja johtanut automaatio- ja tekoälyratkaisuja, jotka on suunniteltu käsittelemään suuria datamääriä ja tukemaan laajaa verkkosivujen massaylläpitoa, varmistaen korkean saatavuuden ja toimintavarmuuden kriittisissäkin olosuhteissa. Taustani on luovilla aloilla ja startup-yrittäjyydessä. Viime vuosina olen keskittynyt tekoälyratkaisujen kehittämiseen sekä henkilöstön ja asiakkaiden tekoälyosaamisen lisäämiseen. Olen tunnettu aloitteellisuudestani, syvällisestä asiantuntemuksestani ja vaikuttavien teknologisten ratkaisujen edistämisestä.</p>";
				break;

			default:
				return "<p>I am a technology expert and team leader specializing in the application of artificial intelligence, with over 10 years of experience in software development, automation and building digital products. I have developed and led automation and artificial intelligence solutions designed to process large amounts of data and support large-scale mass website maintenance, ensuring high availability and reliability even in critical conditions. My background is in creative industries and startup entrepreneurship. In recent years, I have focused on developing artificial intelligence solutions and increasing the AI competence of staff and customers. I am known for my initiative, deep expertise and promoting impactful technological solutions.</p>";
				break;

		}

	}

	public function button_ai_popover( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Arkikäytössä tällä hetkellä ChatGPT, Gemini, Cursor, GitHub Copilot, fal.ai ja Azure OpenAI sekä hallitsen perusteet LUMI-supertietokoneella tekoälykouluttamiseen.";
				break;

			default:
				return "I currently use ChatGPT, Gemini, Cursor, GitHub Copilot, fal.ai and Azure OpenAI in my daily life, and I am also mastering the basics of artificial intelligence training with the LUMI supercomputer.";
				break;

		}

	}

	public function button_api_popover( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Olen tehnyt lukuisia API-integraatioita eri monimutkaisuusasteissa.";
				break;

			default:
				return "I have created many API integrations in various complexity levels.";
				break;

		}

	}

	public function button_fullstack_popover( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Pidän työskentelystä Linuxin terminaalissa, Python-, Bash-, PHP- ja MySQL-backendissä kuin myös frontendissä moninaisine vaihtoehtoineen.";
				break;

			default:
				return "I enjoy working in the Linux terminal, Python, Bash, PHP and MySQL backend, as well as frontend in various ways.";
				break;

		}

	}

	public function button_cdci_popover( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Olen käyttänyt CD/CI-työkaluja, mm. GitHub Actions ja Bitbucket Pipelines.";
				break;

			default:
				return "I have used CD/CI tools, such as GitHub Actions and Bitbucket Pipelines.";
				break;

		}

	}

	public function button_azure_popover( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Olen käyttänyt Azure OpenAI:n tekoälypalvelua, sekä tutustunut Azuren muihin palveluihin.";
				break;

			default:
				return "I have used Azure OpenAI's artificial intelligence service, and familiarized myself with Azure's other services.";
				break;

		}

	}

	public function button_wordpress_popover( $lang ) {

		switch ( $lang ) {

			case 'fi':
				return "Olen toteuttanut WordPressillä monipuolisia ratkaisuja, kuten kauppapaikka-alustan, useita verkkokauppoja, tavanomaisia verkkosivustoja sekä tekoälypohjaisen keskustelevan käyttöliittymän.";
				break;

			default:
				return "I have implemented a range of solutions with WordPress, including a marketplace platform, multiple e-commerce sites, conventional websites, and an AI-powered conversational interface.";
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
				return "Olen päätynyt työskentelemään PHP:n parissa pitkään, ja olen käyttänyt sitä monenlaisissa projekteissa.";
				break;

			default:
				return "I have been working with PHP for a long time, and I have used it in various projects.";
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
				return "Olen tutustunut muutamiin AWS:n palveluihin, mm. EC2- ja S3-palveluihin.";
				break;

			default:
				return "I have familiarized myself with several AWS services, including EC2 and S3.";
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
						return "Evermade Oy, AI Lead & Care Team Lead";
						break;

					default:
						return "Evermade Oy, AI Lead & Care Team Lead";
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
						return "Suunnittelin ja olen edistänyt yhtiön tekoälystrategiaa sekä kehittänyt automaatio- ja tekoälyratkaisuja, kuten <a href='https://www.evermade.fi/fi/artikkeli/autocare-automatisoitua-yllapitoa/' target='_blank'>AutoCare</a>- ja <a href='https://www.evermade.fi/story/state-of-development-at-evermade-2025/#:~:text=Fortress' target='_blank'>Fortress</a>-järjestelmät. Rakensin <a href='https://www.evermade.fi/fi/artikkeli/kun-verkkosivu-alkaa-puhua-keskusteleva-kayttoliittyma-on-taalla/' target='_blank'>keskustelevan käyttöliittymätuotteen</a> WordPressiin. Johdan 9 hengen ylläpitotiimiä, olen kouluttanut henkilöstöä ja asiakkaita tekoälyn hyödyntämisessä sekä kirjoittanut artikkeleita tekoälyn arvoista ja käytännöistä.";
						break;

					default:
						return "I have designed and advanced the company's AI strategy, and developed automation and AI solutions such as the <a href='https://www.evermade.fi/story/autocare-automated-maintenance/' target='_blank'>AutoCare</a> and <a href='https://www.evermade.fi/story/state-of-development-at-evermade-2025/#:~:text=Fortress' target='_blank'>Fortress</a> systems. I built a <a href='https://www.evermade.fi/fi/artikkeli/kun-verkkosivu-alkaa-puhua-keskusteleva-kayttoliittyma-on-taalla/' target='_blank'>conversational UI</a> product for WordPress. I lead a 9-person maintenance team, have trained staff and clients in leveraging AI, and written articles on the values and practical applications of artificial intelligence.";
						break;

				}

				break;

			case 'article_href':

				return 'https://www.evermade.fi/fi/artikkeli/tekoaly-on-parhaimmillaan-silloin-kun-se-arkistuu/';
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
						return "Evermade - Tekoäly on parhaimmillaan silloin, kun se arkistuu";
						break;

					default:
						return "Evermade - Tekoäly on parhaimmillaan silloin, kun se arkistuu (in Finnish)";
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

				return 'https://web.archive.org/web/20200228044032/https://app.superlect.com/en/';
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

			case 'work_example_popover':

				switch ( $lang ) {

					case 'fi':
						return "Arkistoitu (web.archive.org)";
						break;

					default:
						return "Archived (web.archive.org)";
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
				return "Pyöräily, elektroniikka, Raspberry Pi, Arduino ja 3D-tulostaminen. Kehitin ja konekoulutin Raspberry Pi -tietokoneella ja YOLOv8n-hahmontunnistusmallilla toimivan <a href='https://www.linkedin.com/feed/update/urn:li:activity:7199788929271619585/' target='_blank'>peurakarkottimen</a> 🦌, joka häätää puutarhastamme peurat huutamalla \"HUS, mene pois peura!\". Pidän työystäväni Jaakko Alajoen kanssa positiivista tekoälyaiheista podcastia <a href='https://aikahyvamaailma.com' target='_blank'>AIka Hyvä Maailma</a>.";
				break;

			default:
				return "Cycling, electronics, Raspberry Pi, Arduino and 3D printing. I developed and machine-trained a <a href='https://www.linkedin.com/feed/update/urn:li:activity:7199788929271619585/' target='_blank'>deer repeller</a> 🦌 using a Raspberry Pi computer and the YOLOv8n pattern recognition model that chases deer out of our garden by shouting \"HUS, mene pois peura!\". I host a positive AI podcast called <a href='https://aikahyvamaailma.com' target='_blank'>AIka Hyvä Maailma</a> with my co-worker Jaakko Alajoki.";
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
