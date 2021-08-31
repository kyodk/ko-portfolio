import throttle from 'lodash.throttle';

$( function () {
	const $window = $( window );

	const scrollHandler = function () {
		// 発火タイミング調整用
		// 数値を大きくすると発火を遅らせる
		const adjust = 200;
		const position = $( this ).offset().top;
		const scroll = $window.scrollTop();
		const windowHeight = $window.height();
		if ( scroll > position - windowHeight + adjust ) {
			$( this ).css( {
				opacity: '1',
				transform: 'translate(0, 0) scale(1, 1)',
			} );
		}
	};

	// throttleでスクロールイベントを250ミリ秒に1回に制限
	$window.on(
		'scroll',
		throttle( function () {
			$( '.sa-fade, .sa-hop, .sa-right, .sa-left, .sa-scale' ).each(
				scrollHandler
			);
		}, 250 )
	);
} );
