# Portfolio   

Site personnel présentant mes projets, mes compétences et mon parcours en développement.  
Conçu pour être léger, responsive et facilement personnalisable.

---

## Table des matières
- [Aperçu](#aperçu)
- [Installation](#installation)
- [Utilisation](#utilisation)
- [Structure du projet](#structure-du-projet)
- [Déploiement](#déploiement)
- [Licence](#licence)

---

## Aperçu

**BlueT0m Portfolio** est un site web statique permettant de :
- Mettre en avant vos projets avec des liens GitHub ou démos.
- Présenter vos compétences techniques.
- Afficher vos informations de contact et liens professionnels.
- Servir de vitrine professionnelle pour les recruteurs ou collaborations.

---

## Installation

Clone le dépôt :
```bash
git clone https://github.com/BlueT0m/portfolio.git
cd portfolio
```

Ouvre le fichier principal :

`index.html`

---

## Utilisation

Modifie le contenu directement dans les fichiers :

- `index.html` → texte, liens et sections principales

- `style.css` → couleurs, mise en page, polices

- `script.js` → animations, interactions ou transitions

- `php`

- `stlyle.sccs` 

Visualise localement en ouvrant `index.html` dans ton navigateur.

---

## Structure du projet

Directory structure:
└── bluet0m-portfolio/
    ├── README.md
    ├── contact.html
    ├── contact_process.php
    ├── index.html
    ├── LICENSE
    ├── prepros-6.config
    ├── SECURITY.md
    ├── css/
    │   └── magnific-popup.css
    ├── img/
    │   ├── folder 1.webp
    │   ├── folder 3.webp
    │   ├── folder 4.webp
    │   └── folder 5.webp
    ├── js/
    │   ├── contact.js
    │   ├── jquery.form.js
    │   ├── mail-script.js
    │   ├── popper.js
    │   ├── stellar.js
    │   └── theme.js
    ├── scss/
    │   ├── _banner.scss
    │   ├── _blog.scss
    │   ├── _contact.scss
    │   ├── _elements.scss
    │   ├── _footer.scss
    │   ├── _header.scss
    │   ├── _home.scss
    │   ├── _mixins.scss
    │   ├── _predefine.scss
    │   ├── _reset.scss
    │   ├── _responsive.scss
    │   ├── _variables.scss
    │   ├── style.css
    │   └── style.scss
    └── vendors/
        ├── bootstrap-datepicker/
        │   ├── bootstrap-select.css
        │   └── bootstrap-select.js
        ├── flipclock/
        │   └── timer.js
        ├── isotope/
        │   └── isotope-min.js
        ├── jquery-ui/
        │   └── jquery-ui.css
        ├── lightbox/
        │   └── simpleLightbox.css
        ├── linericon/
        │   ├── style.css
        │   └── fonts/
        │       └── Linearicons-Free.woff2
        ├── nice-select/
        │   ├── css/
        │   │   ├── nice-select.css
        │   │   └── style.css
        │   └── js/
        │       └── jquery.nice-select.js
        └── owl-carousel/
            └── assets/
                └── owl.carousel.css

---

## Déploiement
Option 1 — GitHub Pages

1, Pousse ton code sur la branche main :
```bash
git add .
git commit -m "Initial commit"
git push origin main
```

2. Va dans Settings → Pages

3. Sous Source, choisis `Deploy from a branch`

4. Sélectionne la branche `main`, dossier `/root`, puis Save
→ Ton portfolio sera disponible à :
`https://BlueT0m.github.io/portfolio`

Option 2 — Hébergement manuel

Dépose le contenu du dossier sur n’importe quel hébergeur statique :
Netlify, Vercel, ou un serveur personnel.

---

## Licence

Ce projet est sous licence [MIT License](LICENSE).
Tu es libre de le modifier, réutiliser ou adapter pour ton usage personnel.
