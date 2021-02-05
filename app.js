document.addEventListener("DOMContentLoaded", () => {

    const btnMenu = document.querySelector('.btn-rond-menu');
    const nav = document.querySelector('.nav-gauche');
    const allItemNav = document.querySelectorAll('.nav-menu-item');
    const ligne = document.querySelector('.cont-ligne');

    btnMenu.addEventListener('click', () => {

        ligne.classList.toggle('active')
        nav.classList.toggle('menu-visible')
    })

    if(window.matchMedia('(max-width: 1300px)')){

        allItemNav.forEach(item => {
            item.addEventListener('click', () => {
                nav.classList.toggle('menu-visible');
                ligne.classList.toggle('active');
            })
        })
    }

// Animation écriture

    const txtAnim = document.querySelector(".txt-animation");

    let typewriter = new Typewriter(txtAnim, {
        loop: false,
        deleteSpeed: 20
    })

    typewriter
    .pauseFor(1800)
    .changeDelay(30)
    .typeString('Bonjour, je suis Bruno Delaine,')
    .pauseFor(300)
    .typeString('<strong> développeur <span style="color: #323232;">Junior</strong></span> !')
    .pauseFor(1000)
    .deleteChars(8)
    .typeString('<span style="color: #27ae60;"> CSS</span> !')
    .pauseFor(1000)
    .deleteChars(5)
    .typeString('<span style="color: #EA39ff;"> PHP</span> !')
    .pauseFor(1000)
    .deleteChars(5)
    .typeString('<span style="color: #ff6910;"> JavaScript</span> !')
    .pauseFor(1000)
    .deleteChars(12)
    .typeString('<span style="color: midnightblue;"> Angular</span> !')
    .pauseFor(1000)
    .deleteChars(9)
    .typeString('<span style="color: #f0c62a;"> Full-Stack</span> !')
    .start()

    /*
    let ico = document.getElementById("boule-ico5");
    let guidage = document.getElementById("guidage");

    if (innerWidth >= 950) {
    guidage.addEventListener("mouseenter",(event) => {

        ico.classList.add('boule-ico-anim')  
    })

    }*/

    // Animation CSS

    const input_fields = document.querySelectorAll('input');
    let labels_form = document.getElementsByClassName('label-form');

    for(let i = 0; i < input_fields.length; i++) {

        let field = input_fields[i];

        //si un input n'est pas vide on donne à son parent la classe animation
        //ce qui permet de ne pas retrouver un formulaire vide si on est redirigé
        //vers celui-ci après l'avoir soumis si une erreur lors du traitement est
        //trouvée
            if (field.value == '') {
                field.parentNode.classList.remove('animation')
            } else if (field.value !== '') {
                field.parentNode.classList.add('animation')
            }

        //évenement input, s'il est vide son parent n'a pas de classe animation sinon on lui cette classe
        field.addEventListener('input', (e) => {
            if(e.target.value !== ''){
                e.target.parentNode.classList.add('animation')
            } else if (e.target.value == ''){
                e.target.parentNode.classList.remove('animation')
            }
        })
    }

    for(let i = 0; i < labels_form.length; i++){

        let label = labels_form[i];
        //Lorsque le click à lieu sur le label nom ou prénom le focus va être donné à son input et l'animation CSS aura lieu
        label.addEventListener('click', (e) => {

            for(let j = 0; j < input_fields.length; j++) {
                let field = input_fields[j];
                if (i === j) {
                    field.focus();
            }}
        })
    }


    //////////////////// Modale ////////////////////


    //const mql = window.matchMedia("(max-width: 500px)");


    const triggers = document.querySelectorAll("[aria-haspopup='dialog']");
        const doc = document.getElementById('js-document');

        //
        //let btnProjets = document.getElementsByClassName('btn-projets')
        //let modal

        const open = function (dialog) {
            dialog.setAttribute('aria-hidden', false);
            doc.setAttribute('aria-hidden', true);
            dialog.style.backgroundColor = ' rgba(0, 0, 0, 0.39)';
        };
        
        const close = function (dialog) {
            dialog.setAttribute('aria-hidden', true);
            doc.setAttribute('aria-hidden', false);
        };
        /*let width = 0
        function calculWidth() {
            console.log(window.innerWidth);
            width = window.innerWidth;
            return width;
        };

        calculWidth();*/

        triggers.forEach((trigger) => {
            const dialog = document.getElementById(trigger.getAttribute('aria-controls'));
            const dismissTriggers = dialog.querySelectorAll('[data-dismiss]');


            /*mql.addEventListener("change", (e) => {
            if (!e.matches){  
                console.log("+de500")
                calculWidth()
                console.log(width)*/


            //open dialog
            trigger.addEventListener('click', (event) => {
                event.preventDefault();

                open(dialog);
            });

            //close dialog
            dismissTriggers.forEach((dismissTrigger) =>{
                
                let y = dismissTrigger.getAttribute('modale');

                dismissTrigger.addEventListener('click', (event) => {

                    const x = document.querySelectorAll('[modale-container]');
                    event.preventDefault();
                    close(x[y]);
                });
            });

            window.addEventListener('click', (event) => {
                if (event.target === dialog) {
                    close(dialog);
                }
            });
        
    } /*else {
        close(dialog);
        console.log("-de500")
    }
});*/
);


    // Anim GSAP + ScrollMagic

    const navbar = document.querySelectorAll('.nav-gauche');
    const titre = document.querySelector('h1');
    const btn = document.querySelectorAll('.btn-acc');
    const btnMedias = document.querySelectorAll('.media');
    const btnRondAccueil = document.querySelector('.btn-rond');

    const TL1 = gsap.timeline({paused: true});

    TL1
    //.to(navbar, {left: '0px', ease: Power3.easeOut, duration: 0.4})
    .from(titre, {y: 50, opacity: 0, ease: Power3.easeOut, duration: 0.4})
    .staggerFrom(btn, 1, {opacity: 0}, 0.2, '-=0.30')
    .staggerFrom(btnMedias, 1, {opacity: 0}, 0.2, '-=0.70')
    .from(btnRondAccueil, {y: -50, opacity:0, ease: Power3.easeOut, duration: 0.4}, '-=1')


    window.addEventListener('load', () => {
        TL1.play();
    })

    // Animation ScrollMagic GSAP presentation

    const presentationContainer = document.querySelector('.presentation')
    const titrePres = document.querySelector('.titre-pres');
    const presGauche = document.querySelector('.pres-gauche');
    const listPres = document.querySelectorAll('.item-list');

    const tlpres = new TimelineMax();

    tlpres
    .from(titrePres, {y: -200, opacity: 0, duration: 0.6})
    .from(presGauche, {y:-20, opacity: 0, duration: 0.6}, '-=0.5')
    .staggerFrom(listPres, 1, {opacity: 0}, 0.2, '-=0.5')

    const controller = new ScrollMagic.Controller();

    const scene = new ScrollMagic.Scene({
        triggerElement: presentationContainer,
        triggerHook: 0.5,
        reverse: false
    })
    .setTween(tlpres)
    .addTo(controller)

    // Anim portfolio

    const portfolioContainer = document.querySelector('.portfolio')
    const titrePortfolio = document.querySelector('.titre-port')
    const itemPortfolio = document.querySelectorAll('.vague1')

    const tlPortfolio = new TimelineMax();

    tlPortfolio
    .from(titrePortfolio, {y: -50, opacity: 0, duration: 0.5})
    .staggerFrom(itemPortfolio, 1, {opacity: 0}, 0.2, '-=0.5')

    const scene2 = new ScrollMagic.Scene({
        triggerElement: portfolioContainer,
        triggerHook: 0.5,
        reverse: false,
    })
    .setTween(tlPortfolio)
    .addTo(controller)

    // Vague 2

    const itemPortfolio2 = document.querySelectorAll('.vague2')

    const tlPortfolio2 = new TimelineMax();

    tlPortfolio2
    .staggerFrom(itemPortfolio2, 1, {opacity: 0}, 0.2, '-=0.5')

    const scene3 = new ScrollMagic.Scene({
        triggerElement: itemPortfolio,
        triggerHook: 0.2,
        reverse: false,
    })
    .setTween(tlPortfolio2)
    .addTo(controller)

    // Vague 3

    const itemPortfolio3 = document.querySelectorAll('.vague3')

    const tlPortfolio3 = new TimelineMax();

    tlPortfolio3
    .staggerFrom(itemPortfolio3, 1, {opacity: 0}, 0.2, '-=0.5')

    const scene4 = new ScrollMagic.Scene({
        triggerElement: itemPortfolio2,
        triggerHook: 0.2,
        reverse: false,
    })
    .setTween(tlPortfolio3)
    .addTo(controller)

    // Animation range

    const sectionComp = document.querySelector('.section-range');
    const titreComp = document.querySelector('.titre-exp');
    const allLabel = document.querySelectorAll('.label-skill');
    const allPourcent = document.querySelectorAll('.number-skill');
    const allBarres = document.querySelectorAll('.barre-skill');
    const allShadowBarres = document.querySelectorAll('.barre-grises');

    const tlCompetences = new TimelineMax();

    tlCompetences
    .from(titreComp, {opacity: 0, duration: 0.6})
    .staggerFrom(allLabel, 0.5, {y: -50, opacity:0}, 0.1, '-=0.5')
    .staggerFrom(allPourcent, 0.5, {y: -10, opacity:0}, 0.1, '-=1')
    .staggerFrom(allShadowBarres, 0.5, {y: -10, opacity:0}, 0.1, '-=1')
    .staggerFrom(allBarres, 0.5, {y: -10, opacity:0}, 0.1, '-=1')

    const scene5 = new ScrollMagic.Scene({
        triggerElement: sectionComp,
        reverse: false,
    })
    .setTween(tlCompetences)
    .addTo(controller)

});