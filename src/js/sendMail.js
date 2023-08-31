import bsModal from 'bootstrap/js/dist/modal';

const wpcf7Elm = document.querySelector( '.wpcf7' );

if ( wpcf7Elm !== null ) {
	const modalCenterSuccess = new bsModal( document.getElementById( 'ModalCenterSuccess' ) );
	const modalCenterFail = new bsModal( document.getElementById( 'ModalCenterFail' ) );

	wpcf7Elm.addEventListener( 'wpcf7mailsent', () => {
		modalCenterSuccess.show();
	} );

	wpcf7Elm.addEventListener( 'wpcf7mailfailed', () => {
		modalCenterFail.show();
	} );

	wpcf7Elm.addEventListener( 'wpcf7spam', () => {
		modalCenterFail.show();
	} );
}
