# Mon portfolio

* ##  Introduction
* ##  Specifications techniques du projet
* ##  Extraits de code


## Introduction :

### Dans le cadre de ma reconversion professionnelle et suite à l'obtention de titre RNCP de niveau 3 (BAC+2) j'ai mis en place en toute logique mon portfolio, présentant un peu de moi, de mon parcours et de mes projets, laissant la possibilité de me contacter depuis le site. J'ai pour ce faire pris le temps de consulter une formation udemy traitant du sujet et pris les devants des améliorations nécessaires comme la logique d'exécution du projet, l'utilisation de PHP pour le back-end, l'intégration de modales codées en HTML, JS et CSS ou encore la sécurisation via PHP du formulaire de contact.

## Specifications techniques du projet :

* ###  arborescence :

### Le projet est découpé en 7 sections, un menu fixé sur la gauche permet d'accéder à 6 d'entre elles, la 7ème étant un parallax intégrant un proverbe.

<img src="ressources/arborescence.png" alt="arborescense du portfolio" width="200">

* ###  Front-end :
### HTML pour structurer et mettre en forme le projet, l'utilisation des attributs, combinée au Javascript m'a permis la création de modales.
### Javascript m'a permis d'intervenir dans le dynamisme de la page, avec par exemple la présence d'un menu fixe qui laisse place à un bouton toggle en dessous d'une largueur d'écran de 1300px. L'utilisation de ses bibliothèques typewritter, scrollmagic ou encore greensock a permis les différentes animations.
### CSS : L'utilsation du CSS m'a évidemment permis de styliser mes pages mais aussi de créer un design responsive.

  * Vue écran large
<img src="ressources/vue_ecran_large.png" width="700" alt="vue du projet sur écran large">

  * Vue iPad Pro
<img src="ressources/vue_ipad.png" width="400" heigth="600" alt="vue du projet sur ipad pro">

   * Vue iPhone 5/SE
<img src="ressources/vue_iphone5s.png" width="150" alt="vue du projet sur iphone 5s">

   * Menu iPhone 5/SE
<img src="ressources/menu_vue_iphone5s.png" width="150" alt="vue du menu du projet sur iphone 5s">

* ###  Back-end :
### PHP, par son utilisation mettre en place la logique d'exécution du projet. Une classe databaseHandler me permet d'y implémenter toutes mes méthodes renfermant mes CRUD (PDO et requètes préparées). Les données récupérées sont ainsi converties en objets manipulables PHP et sont utilisés en paramètre de fonction propre à leur affichage. Cette convertion peut se faire par la mise en place de modèles (classes) PHP reflétant chacune d'entre elle une table de la base de données relationnelle.
### Ce langage me permet également l'implémentation d'un captcha, à partir de fonctions PHP, sur le formulaire, sa validation et l'envoi du mail par la fonction mail().

