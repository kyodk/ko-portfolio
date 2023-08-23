import elements from './elements';

elements.hamburger.addEventListener( 'click', () => {
	elements.body.classList.toggle( 'is-nav-open' );
} );
