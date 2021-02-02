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
    .typeString('<strong> développeur Full-Stack</strong> !')
    .pauseFor(1000)
    .deleteChars(12)
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
    .start()

    /*
    let ico = document.getElementById("boule-ico5");
    let guidage = document.getElementById("guidage");

    if (innerWidth >= 950) {
    guidage.addEventListener("mouseenter",(event) => {

        ico.classList.add('boule-ico-anim')  
    })

    }*/


});
