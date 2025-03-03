const translations = {};
let selectedLanguage = localStorage.getItem('lang') || 'fr';

function loadTranslations(language) {
    return fetch(`assets/translations/${language}.json`)
        .then(response => response.json())
        .then(data => {
            translations[language] = data;
        })
        .catch(error => console.error('Error loading translations:', error));
}

function translatePage(language) {
    const translationData = translations[language];

    if (!translationData) return;

    document.querySelectorAll('[data-lang]').forEach(element => {
        const key = element.dataset.lang;
        if (translationData.text[key]) {
            if (element.tagName === 'INPUT' || element.tagName === 'TEXTAREA') {
                element.placeholder = translationData.text[key];
            } else {
                element.innerText = translationData.text[key];
            }
        }
    });

    document.querySelectorAll('[data-aria]').forEach(element => {
        const key = element.dataset.aria;
        if (translationData.aria[key]) {
            element.setAttribute('aria-label', translationData.aria[key]);
        }
    });

    var cvElement = document.getElementById("CV")
    var skillsBar = document.querySelectorAll(".skills_bar, .skills_number")

    if (language === 'fr') {
        adaptElementToLanguageFr(cvElement, skillsBar)
    }
    else {
        adaptElementToOtherLanguage(cvElement, skillsBar)
    }
    localStorage.setItem('lang', language);
}

function adaptElementToLanguageFr(elementCV, skills) {
    var cvFile = 'assets/pdf/CV fr.pdf'
    elementCV.setAttribute("href", cvFile)
    for (var i = 0; i < skills.length; i++) {
        skills[i].classList.add("hidden")
    }
}

function adaptElementToOtherLanguage(elementCV, skills) {
    var cvFile = 'assets/pdf/CV Matheo Da Silva international.pdf'
    elementCV.setAttribute("href", cvFile)
    for (var i = 0; i < skills.length; i++) {
        skills[i].classList.remove("hidden")
    }
}

function init() {
    // Assuming you have a list of available languages
    const availableLanguages = ['fr', 'en'];

    // Load translations for all available languages
    Promise.all(availableLanguages.map(language => loadTranslations(language)))
        .then(() => {
            const languageSelector = document.getElementById('languageSelector');
            languageSelector.value = selectedLanguage;
            
            languageSelector.addEventListener('change', (event) => {
                selectedLanguage = event.target.value;
                translatePage(selectedLanguage);
            });

            // Initial translation
            translatePage(selectedLanguage);
        })
        .catch(error => console.error('Error initializing translations:', error));
}

init();

export default translations;