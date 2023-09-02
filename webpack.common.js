const path = require( 'path' );
const MiniCssExtractPlugin = require( 'mini-css-extract-plugin' );

module.exports = {
	entry: './src/js/index.js',
	output: {
		path: path.join( __dirname, 'js' ),
		filename: 'main.js',
	},
	module: {
		rules: [
			// Babel
			{
				test: /\.js$/,
				use: [
					{
						loader: 'babel-loader',
						options: {
							presets: [ '@babel/preset-env' ],
						},
					},
				],
			},

			// SCSS
			{
				test: /\.scss$/,
				use: [
					{
						loader: MiniCssExtractPlugin.loader,
					},
					{
						loader: 'css-loader',
						options: {
							// CSS内のurl()メソッドを取り込まない
							url: false,
							sourceMap: true,
							// Sass+PostCSS
							importLoaders: 2,
						},
					},
					{
						loader: 'postcss-loader',
						options: {
							sourceMap: true,
							// ベンダープレフィックスの自動付与
							postcssOptions: {
								plugins: [
									// Autoprefixerを有効化
									// ベンダープレフィックスを自動付与する
									[ 'autoprefixer', { grid: true } ],
								],
							},
						},
					},
					{
						loader: 'sass-loader',
						options: {
							sourceMap: true,
						},
					},
				],
			},
		],
	},
	plugins: [
		new MiniCssExtractPlugin( {
			filename: '../style.css',
		} ),
	],
};
