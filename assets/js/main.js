import translations from './translations.js';
// let devtools = function () {
//     let devtoolsOpen = false;
//     // c'est la taille de la fenêtre de débogage
//     let threshold = 160;
//     let check = function () {
//         if (window.outerHeight - window.innerHeight > threshold || window.outerWidth - window.innerWidth > threshold) {
//             if (!devtoolsOpen) {
//                 // Les outils de développement ont été ouverts
//                 devtoolsOpen = true;
//                 window.location.replace("https://www.youtube.com/watch?v=dQw4w9WgXcQ");
//             }
//         } else {
//             if (devtoolsOpen) {
//                 devtoolsOpen = false;
//                 // Les outils de développement ont été fermés
//             }
//         }
//     };
//     setInterval(check, 1000);
// };

// devtools();

/*==================== CHOIX COULEUR THEME ====================*/
// import Pickr from '@simonwep/pickr'
// document.addEventListener('DOMContentLoaded', function () {
//     const pickr = Pickr.create({
//       el: '.color-picker',
//       theme: 'classic',
//       default: `hsl(var(--hue-color), 69%, 61%)`,
//       components: {
//         preview: true,
//         opacity: true,
//         hue: true,
//         interaction: {
//           hex: true,
//           rgba: true,
//           hsla: true,
//           hsva: true,
//           cmyk: true,
//           input: true,
//           save: true,
//         },
//       },
//     });

//     pickr.on('save', (color) => {
//       const selectedColor = color.toHSL().toString();
//       document.documentElement.style.setProperty('--hue-color', selectedColor);
//     })
//   })

/*==================== CHOIX COULEUR THEME ====================*/

document.addEventListener('dragstart', function (event) {
    // Empêcher le démarrage du glissement
    event.preventDefault();
});

document.addEventListener('dragover', function (event) {
    // Empêcher le glissement
    event.preventDefault();
});

/*==================== VARIABLES ====================*/
const navMenu = document.getElementById('nav-menu'),
    navToggle = document.getElementById('nav-toggle'),
    navClose = document.getElementById('nav-close'),
    navLink = document.querySelectorAll('.nav_link')
/*==================== VARIABLES ====================*/

function create(tag, parent, text = null, classs = null, id = null) {
    let element = document.createElement(tag)
    if (text)
        element.appendChild(document.createTextNode(text))
    parent.appendChild(element)
    if (classs)
        element.classList.add(classs)
    if (id)
        element.id = id
    return element
}

function removeDisplayMenu() {
    navMenu.classList.remove('show_menu')
    languageDropdown.classList.remove('hidden')
}

/*==================== MENU AFFICHAGE MOBILE ====================*/

/*===== AFFICHAGE MENU =====*/
const languageDropdown = document.getElementsByClassName('language-dropdown')[0]
/* Si navToggle existe et si event de click sur l'icon toggle :
    ajouter la classe show_menu */
if (navToggle) {
    navToggle.addEventListener('click', () => {
        navMenu.classList.add('show_menu')
        // ajouter la class hidden au dropdown après l'ouverture complète du menu
        setTimeout(() => {
            languageDropdown.classList.add('hidden')
        }, 150);
    })
}

/*===== CACHE MENU =====*/
/* Si navClose existe et si event de click sur l'icon close :
    enlève la classe show_menu */
if (navClose) {
    navClose.addEventListener('click', removeDisplayMenu)
}

/*==================== ENLEVE MENU MOBILE ====================*/

/*Lorsque nous cliquons sur chaque lien nav_link,
  cela supprime la classe show_menu.*/
navLink.forEach(x => x.addEventListener('click', removeDisplayMenu))

/*==================== OUVERTURE COMPETENCES ====================*/
const skillsContent = document.getElementsByClassName("skills_content"),
    skillsHeader = document.querySelectorAll(".skills_header")

//Ouvre ou ferme la catégorie de compétence
function toggleSkills() {
    //récupère le parent de l'élément
    let itemClass = this.parentNode
    // Si ouvert, ferme la catégorie, si fermé, ouvre la catégorie (skills_open ou skills_close)
    itemClass.classList.toggle("skills_open")
    itemClass.classList.toggle("skills_close")
}

skillsHeader.forEach((eL) => {
    eL.addEventListener('click', toggleSkills)
})

/*==================== PARCOURS NAV ====================*/
const tabs = document.querySelectorAll('[data-target]'),
    navContents = document.querySelectorAll('[data-content]')

tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        const target = document.querySelector(tab.dataset.target)

        navContents.forEach(navContent => {
            navContent.classList.remove('parcours_active')
        })
        target.classList.add('parcours_active')

        tabs.forEach(tab => {
            tab.classList.remove('parcours_active', 'parcours_active_button')
        })
        tab.classList.add('parcours_active', 'parcours_active_button')
    })
})

/*==================== PORTFOLIO SWIPER  ====================*/
let swiper = new Swiper(".projects_container", {
    cssMode: true,

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    mousewheel: true,
    keyboard: true,
});

/*==================== SECTION SCROLL ACTIVE MENU ====================*/
const sections = document.querySelectorAll('section[id]');

function scrollActive() {
    const scrollY = document.documentElement.scrollTop;

    sections.forEach(current => {
        const sectionHeight = current.offsetHeight;
        const sectionTop = current.offsetTop - 20;
        const sectionId = current.getAttribute('id');

        const targetLink = document.querySelector('.nav_menu a[href*=' + sectionId + ']');

        if (targetLink) {
            if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                targetLink.classList.add('active-link');
                targetLink.setAttribute('aria-current', 'page');
            } else {
                targetLink.classList.remove('active-link');
                targetLink.removeAttribute('aria-current');
            }
        }
    });
}

// Call the function once on page load
document.addEventListener('DOMContentLoaded', scrollActive);
window.addEventListener('scroll', scrollActive);

/*==================== CHANGE BACKGROUND HEADER ====================*/
function scrollHeader() {
    const nav = document.getElementById('header')

    if (this.scrollY >= 80)
        nav.classList.add('scroll-header')
    else
        nav.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)

/*==================== MONTRER SCROLL UP ====================*/
function scrollUp() {
    const scrollUp = document.getElementById('scroll-up')

    if (this.scrollY >= 560)
        scrollUp.classList.add('show-scroll')
    else
        scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)


/*==================== DARK LIGHT THEME ====================*/
const themeBtn = document.getElementById('theme-btn')
//inialise en theme sombre
const darkTheme = 'dark-theme'
const iconTheme = 'uil-sun' //icon de soleil

// Avant la selection du mode (si l'utilisateur sélectionne)
const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

//Récupère le theme et l'icon actuel de l'interface avec des conditions
const getCurrentTheme = () =>
    document.body.classList.contains(darkTheme) ? 'dark' : 'light'
const getCurrentIcon = () =>
    document.body.classList.contains(iconTheme) ? 'uil-moon' : 'uil-sun'

// Si tentative de l'utilisateur d'un mode ajoute/enlève,
// ils alternent les classes sur le bouton theme 
if (selectedTheme) {
    document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
    themeBtn.classList[selectedIcon === 'uil-moon' ? 'add' : 'remove'](iconTheme)
}

// Active / désactive le thème avec le bouton
themeBtn.addEventListener('click', () => {
    //Ajoute / enlève le dark / icon theme
    document.body.classList.toggle(darkTheme)
    themeBtn.classList.toggle(iconTheme)

    //Sauvegarde le thème et l'icon actuel de l'utilisateur
    localStorage.setItem('selected-theme', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon())
})

/*==================== REVELATION SCROLL ANIMATION ====================*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '20px',
    duration: 2000,
    delay: 400
})

sr.reveal('.about_img', {
    origin: 'left',
    reset: true,
    easing: 'ease'
})
sr.reveal('.about_data', {
    origin: 'right',
    reset: true
})
sr.reveal('.skills_content', { interval: 150 })
sr.reveal('#scolaire', { origin: 'bottom' })
sr.reveal('.contact_content', { interval: 150 })
sr.reveal('.contact_information', { interval: 150 })