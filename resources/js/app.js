require('./bootstrap');

require('alpinejs');

window.LazyLoad = require("vanilla-lazyload");

window.lazyLoadInstance = new LazyLoad({
    elements_selector: ".lazy",
});

