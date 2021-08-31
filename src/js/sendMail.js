const wpcf7Elm = document.querySelector( '.wpcf7' );

wpcf7Elm.addEventListener( 'wpcf7mailsent', () => {
	$( '#ModalCenterSuccess' ).modal( 'show' );
} );

wpcf7Elm.addEventListener( 'wpcf7mailfailed', () => {
	$( '#ModalCenterFail' ).modal( 'show' );
} );

wpcf7Elm.addEventListener( 'wpcf7spam', () => {
	$( '#ModalCenterFail' ).modal( 'show' );
} );
