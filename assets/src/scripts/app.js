/**
 * Manage global libraries like jQuery or THREE from the webpack.mix.js file
 */

// Import custom modules
import App from './modules/app.js';
import signature from 'console-signature';

signature();

new App();

// console.log($('body'));
