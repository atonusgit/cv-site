/**
 *	Pseudo chat actions and content
 *
 *	@author Anton Valle
 */

var launchChatLaunched = false
var chatIndex = 0

if ( get( 'lang' ) == 'fi' ) {

	if ( get( 'friend' ) ) {

		var x = "Hei " + get( 'friend' ) + "-ystävä!"

	} else {

		var x = "Hei ystävä!"

	}

	var a = "Mitä mahdat etsiä?"
	var b = "Mukavaa. Musiikki oli pitkään päätyöni. Olen säveltänyt musiikkia mm. elokuviin, peleihin, trackereille ❤️, kuoroille, orkestereille ja teslakäämille ⚡⚡⚡ Jatketaanko juttua livenä? Kerro nimesi, yhteystietosi ja kuinka voisin olla avuksi?"
	var c = "Siistiä! Haaveilin koodaustaidosta jo varhain, mutta luulin, ettei ohjelmointi olisi tällaisen taiteilijahörhön hommaa <epic>🤦</epic>. Löysin todellisen kipinän koodaamiseen yllättäen sävellysopettajani kautta. Jatketaanko juttua livenä? Kerro nimesi, yhteystietosi ja kuinka voisin olla avuksi?"
	var d = "Selvä. Selaile rauhassa 😌 Saatoit jo huomata, että tämä sivu on täynnä JavaScriptiä, mutta tiesitkö, että se toimii myös moitteetta ilman? Mikäli sinulla herää kysyttävää, niin laita rohkeasti viesti ja kerro kuinka voisin olla avuksi?"
	var e = "Kiitos viestistäsi! Olen pian yhteydessä!"
	var textMusic = "Muusikkoa"
	var textProgramming = "Ohjelmoijaa"
	var textJustBrowsing = "Selailen vain..."
	var textTextareaPlaceholder = "Hei Anton, olen ..."
	var textSubmit = "Lähetä"

} else {

	if ( get( 'friend' ) ) {

		var x = "Hello friend from " + get( 'friend' ) + "!"

	} else {

		var x = "Hello friend!"

	}

	var a = "What are you looking for?"
	var b = "Cool. For a long time music was my main profession. I\'ve scored music for i.e. movies, games, trackers ❤️, choirs, orchestras and a tesla coil ⚡⚡⚡ Should we continue this conversation? Please, tell me your name, contact info and how could I help you?"
	var c = "Great! I was dreaming about acquiring the skills of coding at an early age, but I thought programming wouldn't be for such an artisy goof like me <epic>🤦</epic>. Surprisingly, I got the spark for coding from my composing teacher. Should we continue this conversation? Please, tell me your name, contact info and how could I help you?"
	var d = "Ok. Feel free to continue browsing 😌 You may have noticed that this site is fully packed with JavaScript, but did you know that it also works completely without it? If you have any questions, please don\'t hesitate to drop a message and tell me how can I help you."
	var e = "Thank you for your message! I\'ll be in touch with you shortly!"
	var textMusic = "A musician"
	var textProgramming = "A programmer"
	var textJustBrowsing = "I\\'m just browsing..."
	var textTextareaPlaceholder = "Hi Anton, I\'m ..."
	var textSubmit = "Send"

}

var antonMessages = {

	0: x,
	1: a,
	2: b,
	3: c,
	4: d,
	5: e

}

window.launchChat = async () => {

	if ( !$( '.chat-anton-text' ).is( ':visible' ) ) {

		let bottom_of_object = ( $( $( '#cta' ) ).position().top + $( $( '#cta' ) ).outerHeight() / 4 )
		let bottom_of_window = $( window ).scrollTop() + $( window ).height()

		if ( bottom_of_window - 200 > bottom_of_object
			&& launchChatLaunched == false ) {

			await updateChat( 0, 800 )
			await updateChat( 1 )
			$( '#chat-area' ).append(
				'<div id="chat-visitor-0" class="row justify-content-center">\
					<div class="col-md-8">\
						<div class="container">\
							<div class="row align-items-center justify-content-end form-group">\
								<div class="col text-right">\
									<a href="javascript:;" onclick="handleChatResponse( { 0: 2, 1: \'' + textMusic + '\' } )" class="btn btn-light my-1">' + textMusic + '\
									</a>\
									<a href="javascript:;" onclick="handleChatResponse( { 0: 3, 1: \'' + textProgramming + '\' } )" class="btn btn-light my-1">' + textProgramming + '\
									</a>\
									<a href="javascript:;" onclick="handleChatResponse( { 0: 4, 1: \'' + textJustBrowsing + '\' } )" class="btn btn-light my-1">' + textJustBrowsing.replace( '\\', '' ) + '\
									</a>\
								</div>\
								<div class="col-auto">\
									<img class="round-image chat-image" src="assets/img/user-circle-solid.svg">\
								</div>\
								<div class="col-lg-3">\
								</div>\
							</div>\
						</div>\
					</div>\
				</div>' )
			launchChatLaunched = true
			
		}

	}

}

window.handleChatResponse = async ( e ) => {

	if ( !$( '#chat-anton-' + e[0] ).is( ':visible' ) ) {

		$( '#chat-visitor-0' ).html(
			'<div class="col-md-8">\
				<div class="container">\
					<div class="row align-items-center justify-content-end form-group">\
						<div class="col-auto px-0">\
							<div class="speech-bubble speech-bubble-visitor text-light">\
								<p class="mb-0">\
									' + e[1] + '\
								</p>\
							</div>\
						</div>\
						<div class="col-auto">\
							<img class="round-image chat-image" src="assets/img/user-circle-solid.svg">\
						</div>\
						<div class="col-lg-3">\
						</div>\
					</div>\
				</div>\
			</div>' )
		await updateChat( e[0] )
		showContactForm( e[0] )

	}

}

const updateChat = async ( e, wait_time = 2500 ) => {

	$( '#chat-area' ).append( 
		'<div id="chat-anton-' + e + '" class="row justify-content-center">\
			<div class="col-md-8">\
				<div class="container">\
					<div class="row align-items-center form-group" style="min-height: 112px;">\
						<div class="col-auto">\
							<img class="round-image chat-image" style="display: none;" src="assets/img/anton_portrait.jpg">\
						</div>\
						<div class="col-lg-auto col px-0">\
							<div class="speech-bubble speech-bubble-anton text-light" style="display: none;">\
								<div class="chat-writing" style="display: none;"></div>\
								<span class="chat-anton-text"></span>\
							</div>\
						</div>\
						<div class="col-lg-3"></div>\
					</div>\
				</div>\
			</div>\
		</div>' )
	$( '#chat-anton-' + e ).find( '.chat-image' ).fadeIn()
	$( '#chat-anton-' + e ).find( '.speech-bubble' ).show()
	$( '#chat-anton-' + e ).find( '.chat-writing' ).html(
		"<lottie-player\
			class='mt-1'\
			autoplay\
			control='false'\
			loop\
			mode='normal'\
			src='assets/img/lf20_mBK8iA.json'\
			style='width: 50px; height: 40px'>\
		</lottie-player>" )
	$( '#chat-anton-' + e ).find( '.chat-writing' ).show()
	await typeAndReturnAntonMessage( e, wait_time )

}

const timeout = ( ms ) => {

    return new Promise( resolve => setTimeout( resolve, ms ) )

}

const typeAndReturnAntonMessage = async ( e, wait_time = 2500 ) => {

    await timeout( wait_time )
    return returnAntonMessage( e )

}

const returnAntonMessage = async ( e ) => {

	$( '#chat-anton-' + e ).find( '.chat-writing' ).hide()
	$( '#chat-anton-' + e ).find( '.chat-anton-text' ).text( antonMessages[e] )

}

const showContactForm = ( e ) => {

	$( '#chat-area' ).append(
		'<div id="chat-visitor-1" class="row justify-content-center">\
			<div class="col-md-8">\
				<div class="container">\
					<div class="row align-items-center justify-content-end form-group">\
						<div class="col-auto px-0">\
						</div>\
						<div class="col-lg-7">\
							<form id="contact-me">\
								<div class="form-group">\
									<textarea\
										class="form-control"\
										rows="5"\
										name="message"\
										placeholder="' + textTextareaPlaceholder + '"></textarea>\
								</div>\
								<a href="javascript:;" onclick="sendMessage( ' + e + ' )" id="sendMessageButton" class="btn btn-light btn-block">' + textSubmit + '</a>\
							</form>\
						</div>\
						<div class="col-lg-3">\
					</div>\
				</div>\
			</div>\
		</div>' )

}

window.sendMessage = ( e ) => {

	let form = document.getElementById( 'contact-me' )
	let data = {
		action: "contact_anton",
		initChoice: e,
		message: form.message.value,
		postToken: $( '#csrf-token' ).val(),
	}

	jQuery.ajax( {

		url: "process/post.php",
		type: "POST",
		data: data,
		dataType: "json",
		beforeSend: () => {

			$( '#sendMessageButton' ).removeClass( 'btn-light' )
			$( '#sendMessageButton' ).html(
				"<lottie-player\
					class='mt-1'\
					autoplay\
					control='false'\
					loop\
					mode='normal'\
					src='assets/img/lf20_mBK8iA.json'\
					style='width: 50px; height: 40px'>\
				</lottie-player>" )

		},
		success: ( e ) => {

			if ( e["response"] == "TRUE" ) {

				setTimeout( async () => {

					$( '#chat-visitor-1' ).html(
						'<div class="col-md-8">\
							<div class="container">\
								<div class="row align-items-center justify-content-end form-group">\
									<div class="col px-0 d-flex justify-content-end">\
										<div class="speech-bubble speech-bubble-visitor text-light">\
											<p class="mb-0">\
												' + form.message.value + '\
											</p>\
										</div>\
									</div>\
									<div class="col-auto">\
										<img class="round-image chat-image" src="assets/img/user-circle-solid.svg">\
									</div>\
									<div class="col-lg-3">\
									</div>\
								</div>\
							</div>\
						</div>' )
					await updateChat( 4 )

				}, 2500 )

			} else {

				$( '#sendMessageButton' ).addClass( 'btn-light' )
				$( '#sendMessageButton' ).html( textSubmit )
				console.log( e )

			}

		},
		error: ( e ) => {

			$( '#sendMessageButton' ).addClass( 'btn-light' )
			$( '#sendMessageButton' ).html( textSubmit )
			console.log( e )

		}

	} )

}

function get( name ) {

	if ( name = ( new RegExp( '[?&]' + encodeURIComponent( name ) + '=([^&]*)' ) ).exec( location.search ) ) {

		return decodeURIComponent( name[1] )

	}

}