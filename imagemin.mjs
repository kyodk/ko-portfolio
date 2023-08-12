import imagemin from 'imagemin-keep-folder';
import imageminMozjpeg from 'imagemin-mozjpeg';
import imageminPngquant from 'imagemin-pngquant';
import imageminGifsicle from 'imagemin-gifsicle';
import imageminSvgo from 'imagemin-svgo';

imagemin( [ './src/images/**/*.{jpg,png,gif,svg}' ], {
	plugins: [
		imageminMozjpeg( { quality: 80 } ),
		imageminPngquant( { quality: [ 0.65, 0.8 ] } ),
		imageminGifsicle(),
		imageminSvgo(),
	],
	replaceOutputDir: ( output ) => {
		return output.replace( /images\//, '../images/' );
	},
} ).then( () => {
	console.log( 'Images optimized' );
} );
