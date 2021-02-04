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

?>