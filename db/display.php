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

function displayWorkSkills($workSkill, $key){

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

?>