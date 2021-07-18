require('./bootstrap');

require('alpinejs');

window.LazyLoad = require("vanilla-lazyload");

window.lazyLoadInstance = new LazyLoad({
    elements_selector: ".lazy",
});

import Tagify from '@yaireo/tagify'

window.tagify = new Tagify(document.querySelector('.tagify'));
