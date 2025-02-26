# 🌐 Portfolio

Bienvenue sur mon portfolio ! Ce projet est une vitrine de mes compétences et de mes réalisations, conçu **sans framework** en utilisant uniquement les langages natives.

## 🛠 les Technologies utilisées

Ce portfolio a été développé avec les technologies suivantes :

- **HTML** → Structure des pages
- **CSS** → Mise en forme et animations (utilisation de PostCSS pour l'optimisation)
- **JavaScript** → Dynamique et interactions (sections interactives avec JavaScript vanilla)
- **PHP** → Utilisé uniquement pour organiser et inclure des composants communs (comme le header, le footer...)
- **Webpack** → Compilation et minification des fichiers CSS et JavaScript
- **GitHub Actions** → Automatisation du déploiement
- **PostCSS** → Optimisation des fichiers CSS (minification et nettoyage)
- **Babel** → Transpilation du JavaScript pour garantir la compatibilité avec tous les navigateurs
- **Swiper JS** → Bibliothèque pour la création de carrousels (sliders) interactifs et responsives
- **ScrollReveal** → Bibliothèque pour ajouter des animations d'apparition au défilement de la page

## 📌 Objectif du projet

L'idée était de réaliser un **portfolio simple et optimisé** en **vanilla HTML/CSS/JS**, avec un peu de PHP pour éviter la duplication du code.
Je voulais mettre à l'épreuve mes compétences en revenant aux sources.
Cependant, comme **GitHub Pages ne supporte pas PHP**, un script convertit les fichiers PHP en **pages HTML statiques** avant le déploiement.

**Important :**  
Ce petit projet a été réalisé il y a quelques années, et bien qu'il reflète une partie de mes compétences à l'époque, il ne représente pas l'état actuel de mes connaissances. Si je devais le refaire aujourd'hui, je choisirais probablement un framework moderne comme **React** avec du **Tailwind** ou **Bootstrap**, pour plus de flexibilité et une meilleure compatibilité avec des plateformes comme **GitHub Pages**.

### 🔄 **Contenu des réalisations en cours de mise à jour :**  
Actuellement, la section **Projets** n'est pas à jour.
Je suis en train de réfléchir à un projet plus pratique et flexible pour gérer cette section, et il est possible que je migre vers une solution mieux adaptée dans un avenir proche

## 🚀 Déploiement
Le site est généré en **HTML statique** à l'aide d'un script PHP. Il est ensuite déployé automatiquement grâce à **GitHub Actions** qui gère la compilation et le déploiement.

### **Étapes de déploiement :**
1. Le code est écrit en PHP pour inclure les composants communs.
2. **GitHub Actions** exécute le script pour convertir le contenu PHP en **pages HTML statiques**.
3. Le code est ensuite déployé sur **GitHub Pages**.

📌 **Lien vers le site** : [Mon Portfolio](https://dasmathe.github.io/portfolio-natif/)

## 🏗️ Fonctionnalités

✔️ Design **responsive** (adapté à tous les appareils)  
✔️ **Chargement rapide** grâce à l'optimisation des fichiers CSS et JavaScript  
✔️ **Code propre** et bien structuré, respectant les bonnes pratiques  
✔️ Sections dynamiques avec JavaScript pour des interactions plus fluides  

## 📂 Organisation du projet
│── .github/workflows/ # Automatisation du déploiement avec GitHub Actions
│── inc/ # Fichiers inclus (header, footer...)
│── assets/ # Images, icônes, styles...
│── index.php # Page d'accueil (convertie en HTML via actions)
│── generate_static.php # Script de conversion en HTML statique
│── README.md # Ce fichier !

## 📜 Licence

Ce projet est sous la licence [Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License](https://creativecommons.org/licenses/by-nc-nd/4.0/).  
Cela signifie que vous pouvez visualiser ce portfolio, mais vous n'êtes pas autorisé à l'utiliser à des fins commerciales, à le modifier ou à le distribuer.
