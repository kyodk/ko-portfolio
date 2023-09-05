import throttle from 'lodash.throttle';

const createScrollHandler = ( target ) => () => {
	const adjust = 200; // 発火タイミング調整用 数値が大きいほど遅くなる
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
	window.addEventListener( 'scroll', throttle( createScrollHandler( target ), 250 ) );
} );
