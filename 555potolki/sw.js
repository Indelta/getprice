'use strict';
importScripts('sw-toolbox.js');
toolbox.precache(["index.php", "css/style.less", "js/less.min.js"]);
toolbox.router.get('/img/', toolbox.cacheFirst);
toolbox.router.get('/*', toolbox.networkFirst, {networkTimeoutSeconds: 5});