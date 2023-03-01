import Alpine from 'alpinejs'
import domReady from '@roots/sage/client/dom-ready';

window.Alpine = Alpine
Alpine.start()

/**
 * Application entrypoint
 */
domReady(async () => {

});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
