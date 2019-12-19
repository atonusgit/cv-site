var urlParameters = window.location.search
var launchChatLaunched = false
var chatIndex = 0

if ( get( 'lang' ) == 'fi' ) {

	var a = "Hei ystävä, mikä toi sinut tänne?"
	var b = "Mukavaa. Musiikki oli pitkään päätyöni. Olen säveltänyt musiikkia mm. elokuviin, peleihin, trackereille ❤️, kuoroille, orkestereille ja teslakäämille ⚡⚡⚡ Jatketaanko juttua livenä? Kerro nimesi, yhteystietosi ja kuinka voisin olla avuksi?"
	var c = "Siistiä! Haaveilin koodaustaidosta jo varhain, mutta luulin, ettei ohjelmointi olisi tällaisen taiteilijahörhön hommaa <epic>🤦</epic>. Löysin todellisen kipinän koodaamiseen yllättäen sävellysopettajani kautta. Jatketaanko juttua livenä? Kerro nimesi, yhteystietosi ja kuinka voisin olla avuksi?"
	var d = "Kiitos viestistäsi! Olen pian yhteydessä!"
	var e = "Musiikki"
	var f = "Ohjelmointi"
	var g = "Hei Anton, olen ..."
	var h = "Lähetä"

} else {

	var a = "Hello friend, what brings you here?"
	var b = "Cool. For a long time music was my main profession. I\'ve scored music for i.e. movies, games, trackers ❤️, choirs, orchestras and a tesla coil ⚡⚡⚡ Should we continue this conversation? Please, tell me your name, contact info and how could I help you?"
	var c = "Great! I was dreaming about acquiring the skills of coding at an early age, but I thought programming wouldn't be for such an artisy goof like me <epic>🤦</epic>. Surprisingly, I got the spark for coding from my composing teacher. Should we continue this conversation? Please, tell me your name, contact info and how could I help you?"
	var d = "Thank you for your message! I\'ll be in touch with you shortly!"
	var e = "Music"
	var f = "Programming"
	var g = "Hi Anton, I\'m ..."
	var h = "Send"

}

var antonMessages = {

	0: a,
	1: b,
	2: c,
	3: d

}

window.launchChat = async () => {

	if ( !$( '.chat-anton-text' ).is( ':visible' ) ) {

		let bottom_of_object = ( $( $( '#cta' ) ).position().top + $( $( '#cta' ) ).outerHeight() / 4 )
		let bottom_of_window = $( window ).scrollTop() + $( window ).height()

		if ( bottom_of_window - 200 > bottom_of_object
			&& launchChatLaunched == false ) {

			let chatResponseText = e

			await updateChat( chatIndex )
			$( '#chat-area' ).append(
				'<div id="chat-visitor-0" class="row justify-content-center">\
					<div class="col-md-8">\
						<div class="container">\
							<div class="row align-items-center justify-content-end form-group">\
								<div class="col text-right">\
									<a href="javascript:;" onclick="handleChatResponse( { 0: 1, 1: \'' + e + '\' } )" class="btn btn-light my-1">' + e + '\
									</a>\
									<a href="javascript:;" onclick="handleChatResponse( { 0: 2, 1: \'' + f + '\' } )" class="btn btn-light my-1">' + f + '\
									</a>\
								</div>\
								<div class="col-auto">\
									<img class="round-image chat-image" src="img/user-circle-solid.svg">\
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
							<img class="round-image chat-image" src="img/user-circle-solid.svg">\
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

const updateChat = async ( e ) => {

	$( '#chat-area' ).append( 
		'<div id="chat-anton-' + e + '" class="row justify-content-center">\
			<div class="col-md-8">\
				<div class="container">\
					<div class="row align-items-center form-group" style="min-height: 112px;">\
						<div class="col-auto">\
							<img class="round-image chat-image" style="display: none;" src="img/anton_portrait.jpg">\
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
			src='img/lf20_mBK8iA.json'\
			style='width: 50px; height: 20px'>\
		</lottie-player>" )
	$( '#chat-anton-' + e ).find( '.chat-writing' ).show()
	await typeAndReturnAntonMessage( e )

}

const timeout = ( ms ) => {

    return new Promise( resolve => setTimeout( resolve, ms ) )

}

const typeAndReturnAntonMessage = async ( e ) => {

    await timeout( 2500 )
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
										placeholder="' + g + '"></textarea>\
								</div>\
								<a href="javascript:;" onclick="sendMessage( 1 )" id="sendMessageButton" class="btn btn-light btn-block">' + h + '</a>\
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
		message: form.message.value
	}

	jQuery.ajax( {

		url: "post.php",
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
					src='img/lf20_mBK8iA.json'\
					style='width: 50px; height: 20px'>\
				</lottie-player>" )

		},
		success: ( e ) => {

			if ( e["response"] == "TRUE" ) {

				setTimeout( async() => {

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
										<img class="round-image chat-image" src="img/user-circle-solid.svg">\
									</div>\
									<div class="col-lg-3">\
									</div>\
								</div>\
							</div>\
						</div>' )
					await updateChat( 3 )

				}, 2500 )

			} else {

				$( '#sendMessageButton' ).addClass( 'btn-light' )
				$( '#sendMessageButton' ).html( h )
				alert( 'error' )

			}

		},
		error: ( e ) => {

			$( '#sendMessageButton' ).addClass( 'btn-light' )
			$( '#sendMessageButton' ).html( h )
			console.log( e )

		}

	} )

}

function get( name ) {

	if ( name = ( new RegExp( '[?&]' + encodeURIComponent( name ) + '=([^&]*)' ) ).exec( location.search ) ) {

		return decodeURIComponent( name[1] )

	}

}