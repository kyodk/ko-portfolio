import throttle from 'lodash.throttle';
import elements from './elements';

window.addEventListener(
	'scroll',
	throttle( () => {
		const scroll =
      document.documentElement.scrollTop || document.body.scrollTop;
		if ( scroll > 300 ) {
			elements.body.classList.add( 'is-scrolled' );
			elements.body.classList.remove( 'is-nav-open' );
		} else {
			elements.body.classList.remove( 'is-scrolled' );
		}
	}, 250 )
);
