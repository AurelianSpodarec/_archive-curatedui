require('./bootstrap');

import * as Turbo from "@hotwired/turbo";

import {
    Dropdown, 
    SitePageModal
} from "./components/index";


Turbo.start()
Turbo.setProgressBarDelay(250)


document.addEventListener("turbo:load", function(event) {

    Dropdown();
    SitePageModal();

});