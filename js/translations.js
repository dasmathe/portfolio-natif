const translations = {};
const selectedLanguage = 'fr';

function loadTranslations(language) {
    return fetch(`assets/translations/${language}.json`)
        .then(response => response.json())
        .then(data => {
            translations[language] = data;
        })
        .catch(error => console.error('Error loading translations:', error));
}

function translatePage(language) {
    document.querySelectorAll('[data-lang]').forEach(element => {
        const key = element.dataset.lang;
        element.innerText = translations[language][key];
    });
    var cvElement = document.getElementById("CV")
    var skillsBar = document.querySelectorAll(".skills_bar, .skills_number")

    if (language === 'fr') {
        adaptElementToLanguageFr(cvElement, skillsBar)
    }
    else if (language === 'en') {
        adaptElementToLanguageEn(cvElement, skillsBar)
    }
}

function adaptElementToLanguageFr(elementCV, skills) {
    var cvFile = 'assets/pdf/CV Mathéo Da Silva.pdf'
    elementCV.setAttribute("href", cvFile)
    for (var i = 0; i < skills.length; i++) {
        skills[i].classList.add("hidden")
    }
}

function adaptElementToLanguageEn(elementCV, skills) {
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
            document.getElementById('languageSelector').addEventListener('change', (event) => {
                const selectedLanguage = event.target.value;
                translatePage(selectedLanguage);
            });

            // Initial translation
            translatePage(selectedLanguage);
        })
        .catch(error => console.error('Error initializing translations:', error));
}

init();

export default translations;