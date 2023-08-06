module.exports = {
	extends: [ 'plugin:@wordpress/eslint-plugin/recommended' ],
	globals: {
		$: false,
	},
	parser: '@babel/eslint-parser',
	parserOptions: {
		requireConfigFile: false,
	},
};
