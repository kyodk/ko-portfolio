import throttle from 'lodash.throttle';

const createScrollHandler = ( target ) => () => {
	// 数値が大きいほど発火タイミングが遅くなる
	const adjust = 200;
	const { top } = target.getBoundingClientRect();
	const scroll = window.scrollY;
	const position = top + scroll;
	const windowHeight = window.innerHeight;
	if ( scroll > position - windowHeight + adjust ) {
		target.classList.add( 'sa-animate' );
	}
};

const targets = document.querySelectorAll( '.sa-target' );

targets.forEach( ( target ) => {
	// throttleでスクロールイベントを250ミリ秒に1回に制限
	window.addEventListener( 'scroll', throttle( createScrollHandler( target ), 250 ) );
} );
