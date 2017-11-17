'use strict';

import 'normalize.css';
import 'ion-rangeslider';

import './styles/imports';

// load modules
// import rslider from'./js/rangeslider';
import testjs from'./js/test';
import example from'./js/example';
import swiperslider from'./js/swiperslider';
import bnav from'./js/bnav';
import catitem from'./js/catalog_item';


// Run components
document.addEventListener('DOMContentLoaded', function () {
    // Статичная загрузка модулей
    example.run();
    // rslider.run();
    testjs.run();
    swiperslider.run();
    bnav.run();
    catitem.run();

});


