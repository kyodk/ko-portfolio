module.exports = {
	extends: [
		'@wordpress/stylelint-config/scss',
		'stylelint-config-recess-order'
	],
	plugins: [
		'stylelint-order',
	],
	ignoreFiles: [
		'**/node_modules/**'
	],
	rules: {
		'font-family-no-missing-generic-family-keyword': null,
	}
};
