<?php

function displayExperiences($experience, $key = null){

    return sprintf("
        <div class='bloc bloc%d'>
            <div class='contenu-bloc'>
                <p class='titre-section-bloc'>%s - %s - <span class='date_exp date%d'>  %s</span></p>
                <p class='txt-section'>%s</p>
            </div>
        </div>",
        $key,
        $experience->company,
        $experience->position,
        $key,
        $experience->periode,
        $experience->description);

}

function displayBouleIcone($experience){

    if($experience->job){
        $icone = "fa-laptop";
    } else {
        $icone = "fa-user-graduate";
    }
    return sprintf("
        <div class='boule-ico'>
            <i class='fas %s'></i>
        </div>
    
    ",
    $icone);
}

function displayWorkSkill($workSkill, $key){

    $signe = '%';

    return sprintf(" 
    <div class='range-cont'>
        <p class='label-skill'>%s</p>
        <p class='number-skill'>%d%s</p>
        <div class='barre-skill b%d'></div>
        <div class='barre-grises'></div>
    </div>",
    $workSkill->language,
    $workSkill->percentage,
    $signe,
    $key);
}

function displayQuality($quality){

    return sprintf(" 
        <li class='item-list i%d'>
            <span class='chiffre-style'>%d.</span>
            <p class='txt-liste'>%s</p>
        </li>",
        $quality->ranking,
        $quality->ranking,
        $quality->quality,
    );
}

function displayMenuOption($menuOption){

    return sprintf("
        <div class='blocs-menu'>
            <span class='nav-menu-item'>
            <a href='#%s'>
                %s
            </a>
            </span>
        </div>",
        $menuOption->href,
        $menuOption->name
    );
}

?>