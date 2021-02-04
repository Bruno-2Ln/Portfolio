<?php
session_start();

require_once('db/db.php');
require_once('db/display.php');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins&display=swap" rel="stylesheet">
        <title>Portfolio</title>
    </head>
    <body>
     <!-- Btn flottant gauche petit menu -->

        <div class="btn-rond-menu">
            <div class="cont-ligne">
                <div class="ligne-unique"></div>
            </div>
        </div>

        <!-- Navigation verticale -->

        <nav class="nav-gauche">

            <div class="blocs-menu">
                <div class="cercle-portrait">
                    <img src="ressources/moi.png" alt="photo de Bruno Delaine">
                </div>

            </div>
            <div class="blocs-menu">
                <span class="nav-menu-item">
                    <a href="#accueil">
                        Accueil
                    </a>
                </span>
            </div>
            <div class="blocs-menu">
                <span class="nav-menu-item">
                    <a href="#pres">
                        Présentation
                    </a>
                </span>
            </div>
            <div class="blocs-menu">
                <span class="nav-menu-item">
                    <a href="#port">
                        Portfolio
                    </a>
                </span>
            </div>
            <div class="blocs-menu">
                <span class="nav-menu-item">
                    <a href="#range">
                        Compétences
                    </a>
                </span>
            </div>
            <div class="blocs-menu">
                <span class="nav-menu-item">
                    <a href="#exp">
                        Expériences
                    </a>
                </span>
            </div>
            <div class="blocs-menu">
                <span class="nav-menu-item">
                    <a href="#contact">
                        Contact
                    </a>
                </span>
            </div>



            <div class="blocs-menu">
                <div class="logo-cercle nav-menu-item">
                    <a href="#contact">
                        <img src="ressources/contact.svg" alt="logo contact">
                    </a>
                </div>
            </div>

        </nav>

        <!-- Section Accueil -->

        <section class="accueil" id="accueil">
            <h1>Bienvenue sur mon portfolio</h1>
            <p class="txt-animation"></p>
            
            <a href="#port" class="btn-acc btn-acc1">Portfolio</a>
            <a href="#exp" class="btn-acc btn-acc2">Expériences</a>

            <div class="medias">
                <a href="https://github.com" target="_blank">
                    <div class="media media1">
                        <img src="ressources/github.svg" alt="github icone" class="icone-medias">
                    </div>
                </a>
                <a href="https://linkedin.com" target="_blank">
                    <div class="media media2">
                        <img src="ressources/linkedin.svg" alt="linkedin icone" class="icone-medias">
                    </div>
                </a>
                <a href="https://instagram.com" target="_blank">
                    <div class="media media3">
                        <img src="ressources/insta.svg" alt="instagram icone" class="icone-medias">
                    </div>
                </a>

                <a href="#pres">
                    <div class="btn-rond">
                        <img src="ressources/arrowDown.svg" alt="logo fleche bas" class="logo-btn-rond-acc">
                    </div>
                </a>
            </div>
        </section>

        <!-- Section Présentation -->

        <section class="presentation" id="pres">
            <h2 class="titre-pres">Me Concernant</h2>
            <div class="container-presentation">
                <div class="fond-forme">
                    
                </div>
                <div class="pres-gauche">
                    <h3>Véritable passionné, dans la vie comme au travail, cette énergie (renouvelable) est un moteur de tous les instants </h3>
                    <hr>
                    <p>Pas tombé dans la marmite étant petit, j'ai appris à nager parmi les langages, bibliothèques, frameworks et requètes SQL en sautant la tête la première, je n'ai pas bu la tasse et me sens à présent comme un poisson dans l'eau ! </p>
                    <br>
                    <p>Aujourd'hui à la recherche d'équipes de passionnés, de projets stimulants et de toujours plus de connaissances. C'est à mes yeux la beauté de ce métier, un savoir en constante évolution. </p>
                </div>

                <div class="pres-droite">
                    <ul class="liste-presentation">

                        <?php
                        $qualities = getPortfolioDatabaseHandler()->getAllQualities();

                        foreach ($qualities as $quality){

                            echo displayQuality($quality);
                        }
                        ?>
                        
                    </ul>
                </div>

            </div>
        </section>

        <!-- Section Portfolio -->

        <section class="portfolio" id="port">

            <h2 class="titre-port">Mon Portfolio</h2>

            <div class="cont-portfolio">

                <div class="item vague1">
                    <div class="cont-img-port">
                        <img src="ressources/bootstrap.jpg" alt="img portfolio">
                    </div>
                    <h3>Mon fabuleux projet</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, reiciendis? Officia fuga nesciunt hic tempora?</p>
                    <a href="#" class="btn-projets">Découvrez le projet</a>
                </div>

                <div class="item vague1">
                    <div class="cont-img-port">
                        <img src="ressources/console.jpg" alt="img portfolio">
                    </div>
                    <h3>Mon fabuleux projet</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, reiciendis? Officia fuga nesciunt hic tempora?</p>
                    <a href="#" class="btn-projets">Découvrez le projet</a>
                </div>

                <div class="item vague1">
                    <div class="cont-img-port">
                        <img src="ressources/animcss.jpg" alt="img portfolio">
                    </div>
                    <h3>Mon fabuleux projet</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, reiciendis? Officia fuga nesciunt hic tempora?</p>
                    <a href="#" class="btn-projets">Découvrez le projet</a>
                </div>

                <div class="item vague2">
                    <div class="cont-img-port">
                        <img src="ressources/bootstrapsite.jpg" alt="img portfolio">
                    </div>
                    <h3>Mon fabuleux projet</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, reiciendis? Officia fuga nesciunt hic tempora?</p>
                    <a href="#" class="btn-projets">Découvrez le projet</a>
                </div>

                <div class="item vague2">
                    <div class="cont-img-port">
                        <img src="ressources/flex.jpg" alt="img portfolio">
                    </div>
                    <h3>Mon fabuleux projet</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, reiciendis? Officia fuga nesciunt hic tempora?</p>
                    <a href="#" class="btn-projets">Découvrez le projet</a>
                </div>

                <div class="item vague2">
                    <div class="cont-img-port">
                        <img src="ressources/d3.jpg" alt="img portfolio">
                    </div>
                    <h3>Mon fabuleux projet</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, reiciendis? Officia fuga nesciunt hic tempora?</p>
                    <a href="#" class="btn-projets">Découvrez le projet</a>
                </div>

                <div class="item vague3">
                    <div class="cont-img-port">
                        <img src="ressources/Menus.jpg" alt="img portfolio">
                    </div>
                    <h3>Mon fabuleux projet</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, reiciendis? Officia fuga nesciunt hic tempora?</p>
                    <a href="#" class="btn-projets">Découvrez le projet</a>
                </div>

                <div class="item vague3">
                    <div class="cont-img-port">
                        <img src="ressources/projetsCars.jpg" alt="img portfolio">
                    </div>
                    <h3>Mon fabuleux projet</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, reiciendis? Officia fuga nesciunt hic tempora?</p>
                    <a href="#" class="btn-projets">Découvrez le projet</a>
                </div>

                <div class="item vague3">
                    <div class="cont-img-port">
                        <img src="ressources/form.jpg" alt="img portfolio">
                    </div>
                    <h3>Mon fabuleux projet</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, reiciendis? Officia fuga nesciunt hic tempora?</p>
                    <a href="#" class="btn-projets">Découvrez le projet</a>
                </div>

            </div>

        </section>

        <!-- Section Range -->

        <section class="section-range" id="range">

            <h2 class="titre-exp">Mes Compétences</h2>

            <div class="grille-skill">

                <?php
                    $experiences = getPortfolioDatabaseHandler()->getAllWorkSkills();

                    foreach ($experiences as $key => $experience){
                        echo displayWorkSkill($experience, $key+1);
                    }

                ?>

            </div>

        </section>

        <!-- Section Expérience -->

        <section class="travail-exp" id="exp">

            <h2 class="titre-travail-exp">Mes expériences</h2>

            <div class="cont-exp-travail">

                <div class="barre-verticale">

                    <?php
                    $experiences = getPortfolioDatabaseHandler()->getAllExperiences();

                    foreach ($experiences as $experience){
                        echo displayBouleIcone($experience);
                    }

                    ?>
                    <div class="boule-ico" id="boule-ico5">
                        <img src="ressources/plane.svg" alt="icône d'avion" class="avion">
                    </div>
                </div>
        

            <div class="flex-cont-bloc-exp" id="guidage">
            
                <?php
                    $experiences = getPortfolioDatabaseHandler()->getAllExperiences();

                    foreach ($experiences as $key => $experience){
                        echo displayExperiences($experience, $key+1);
                    }

                ?>
            </div> 
        </div>
        </section>

        <!-- Section Parallax -->

        <section class="section-parallax">
            <div class="txt-par">
            <p id="proverbe">« La seule façon de faire du bon travail, c’est d’aimer ce que vous faîtes »
            </p>
            <p id="auteur">Steve Jobs</p>
            </div>
        </section>

        <!-- Section Contact -->

        <section class="section-contact" id="contact">

            <h2><strong>Rentrons</strong> en Contact</h2>

            <div class="container-form">

                <form method="POST" action="process_mail.php" class="form-bloc">

                    <div class="form-groupe">
                        <label class="label-form">Prénom</label>
                        <input type="text" name="prenom" value="<?php echo $nom = ($_SESSION['prenom']) ? $_SESSION['prenom'] : "" ?>"  required maxlength="16">
                    </div>
                    <div class="form-groupe">
                        <label class="label-form">Nom</label>
                        <input type="text" name="nom" value="<?php echo $nom = ($_SESSION['nom']) ? $_SESSION['nom'] : "" ?>"   required maxlength="16">
                    </div>
                    <div class="form-groupe">
                        <textarea name="message" id="txt" placeholder="Votre message" required><?php echo $nom = ($_SESSION['message']) ? $_SESSION['message'] : "" ?></textarea>
                    </div>

                    <div class="form-groupe">
                        <input type="submit" value="ENVOYER" class="button-sub">
                    </div>
                </form>
            </div>

        </section>

        <footer>
            Tout Droits réservés &copy;
        </footer>



        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/debug.addIndicators.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
        <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
        <script src="app.js"></script>
    </body>
</html>