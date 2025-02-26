(()=>{"use strict";var e={},t=localStorage.getItem("lang")||"fr";function n(t){var n=e[t];if(n){document.querySelectorAll("[data-lang]").forEach((function(e){var t=e.dataset.lang;n.text[t]&&("INPUT"===e.tagName||"TEXTAREA"===e.tagName?e.placeholder=n.text[t]:e.innerText=n.text[t])})),document.querySelectorAll("[data-aria]").forEach((function(e){var t=e.dataset.aria;n.aria[t]&&e.setAttribute("aria-label",n.aria[t])}));var a=document.getElementById("CV"),o=document.querySelectorAll(".skills_bar, .skills_number");"fr"===t?function(e,t){var n="assets/pdf/CV Mathéo Da Silva.pdf";e.setAttribute("href",n);for(var a=0;a<t.length;a++)t[a].classList.add("hidden")}(a,o):function(e,t){var n="assets/pdf/CV Matheo Da Silva international.pdf";e.setAttribute("href",n);for(var a=0;a<t.length;a++)t[a].classList.remove("hidden")}(a,o),localStorage.setItem("lang",t)}}Promise.all(["fr","en"].map((function(t){return function(t){return fetch("assets/translations/".concat(t,".json")).then((function(e){return e.json()})).then((function(n){e[t]=n})).catch((function(e){return console.error("Error loading translations:",e)}))}(t)}))).then((function(){var e=document.getElementById("languageSelector");e.value=t,e.addEventListener("change",(function(e){n(t=e.target.value)})),n(t)})).catch((function(e){return console.error("Error initializing translations:",e)}));document.addEventListener("dragstart",(function(e){e.preventDefault()})),document.addEventListener("dragover",(function(e){e.preventDefault()}));var a=document.getElementById("nav-menu"),o=document.getElementById("nav-toggle"),r=document.getElementById("nav-close"),s=document.querySelectorAll(".nav_link");function c(){a.classList.remove("show_menu"),l.classList.remove("hidden")}var l=document.getElementsByClassName("language-dropdown")[0];o&&o.addEventListener("click",(function(){a.classList.add("show_menu"),setTimeout((function(){l.classList.add("hidden")}),150)})),r&&r.addEventListener("click",c),s.forEach((function(e){return e.addEventListener("click",c)}));document.getElementsByClassName("skills_content");function i(){var e=this.parentNode;e.classList.toggle("skills_open"),e.classList.toggle("skills_close")}document.querySelectorAll(".skills_header").forEach((function(e){e.addEventListener("click",i)}));var d=document.querySelectorAll("[data-target]"),u=document.querySelectorAll("[data-content]");d.forEach((function(e){e.addEventListener("click",(function(){var t=document.querySelector(e.dataset.target);u.forEach((function(e){e.classList.remove("parcours_active")})),t.classList.add("parcours_active"),d.forEach((function(e){e.classList.remove("parcours_active","parcours_active_button")})),e.classList.add("parcours_active","parcours_active_button")}))}));new Swiper(".projects_container",{cssMode:!0,navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{el:".swiper-pagination",clickable:!0},mousewheel:!0,keyboard:!0});var m=document.querySelectorAll("section[id]");function v(){var e=document.documentElement.scrollTop;m.forEach((function(t){var n=t.offsetHeight,a=t.offsetTop-20,o=t.getAttribute("id"),r=document.querySelector(".nav_menu a[href*="+o+"]");r&&(e>a&&e<=a+n?(r.classList.add("active-link"),r.setAttribute("aria-current","page")):(r.classList.remove("active-link"),r.removeAttribute("aria-current")))}))}document.addEventListener("DOMContentLoaded",v),window.addEventListener("scroll",v),window.addEventListener("scroll",(function(){var e=document.getElementById("header");this.scrollY>=80?e.classList.add("scroll-header"):e.classList.remove("scroll-header")})),window.addEventListener("scroll",(function(){var e=document.getElementById("scroll-up");this.scrollY>=560?e.classList.add("show-scroll"):e.classList.remove("show-scroll")}));var g=document.getElementById("theme-btn"),f="dark-theme",h="uil-sun",E=localStorage.getItem("selected-theme"),L=localStorage.getItem("selected-icon");E&&(document.body.classList["dark"===E?"add":"remove"](f),g.classList["uil-moon"===L?"add":"remove"](h)),g.addEventListener("click",(function(){document.body.classList.toggle(f),g.classList.toggle(h),localStorage.setItem("selected-theme",document.body.classList.contains(f)?"dark":"light"),localStorage.setItem("selected-icon",document.body.classList.contains(h)?"uil-moon":"uil-sun")}));var p=ScrollReveal({origin:"top",distance:"20px",duration:2e3,delay:400});p.reveal(".about_img",{origin:"left",reset:!0,easing:"ease"}),p.reveal(".about_data",{origin:"right",reset:!0}),p.reveal(".skills_content",{interval:150}),p.reveal("#scolaire",{origin:"bottom"}),p.reveal(".contact_content",{interval:150}),p.reveal(".contact_information",{interval:150})})();