/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		'./assets/src/scripts/**/*.js',
		'./views/**/*.php',
		'./page-templates/**/*.php',
		'./inc/**/*.php',
		'./404.php',
		'./archive.php',
		'./comments.php',
		'./footer.php',
		'./functions.php',
		'./header.php',
		'./index.php',
		'./page.php',
		'./search.php',
		'./sidebar.php',
		'./single.php',
	],
	theme: {
		extend: {},
	},
	plugins: [],
};

// './assets/src/**/*.{html,js,php}',
// './inc/**/*.{html,js,php}',
// './page-templates/**/*.{php}',
// './**/*.php',
