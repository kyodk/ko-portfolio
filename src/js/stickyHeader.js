import throttle from 'lodash.throttle';

$( function () {
	// throttleでスクロールイベントを250ミリ秒に1回に制限
	$( window ).on(
		'load scroll',
		throttle( function () {
			const body = $( 'body' );
			const scroll = $( this ).scrollTop();
			if ( scroll > 300 ) {
				body.addClass( 'is-scrolled' );
				body.removeClass( 'is-nav-open' );
			} else {
				body.removeClass( 'is-scrolled' );
			}
		}, 250 )
	);
} );
