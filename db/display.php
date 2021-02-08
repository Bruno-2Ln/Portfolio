<?php

function displayExperiences($experience, $key = null){

    return sprintf("
        <div class='bloc bloc%d'>
            <div class='contenu-bloc'>
                <p class='titre-section-bloc'>%s - <span class='position'>%s</span> - <span class='date_exp date%d'>  %s</span></p>
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

function displayProjectLittleWindow($project, $key){
//TODO : vague 1, 2 ect ..
    return sprintf("
        <div class='item vague%d'>
            <div class='cont-img-port'>
                <img src='ressources/%s' alt='image du projet'>
            </div>
            <div class='body-modale'>
            <h3>%s</h3>
            <p>%s</p></div>
            <div id='link-modal'>
            <a href='%s' role='button' class='btn-projets' aria-haspopup='dialog' aria-controls='dialog%d'>En savoir plus</a></div>
        </div>",
        $project->vague,
        $project->image,
        $project->title,
        $project->shortDescription,
        $project->href,
        $key);
}

function displayProjectModale($project, $key){

    return sprintf("
    <div role='dialog' modale-container='%d' id='dialog%d' aria-labelledby='dialog-title' aria-decribedby='dialog-desc' class='container-dialog' aria-modal='true' tabindex='-1' aria-hidden='true'>
        <div role='document' class='container-dialog-box'>
            <div id='dialog-header'>
                <h2 id='dialog-title'>%s</h2>
                
                <button type='button' modale='%d' id='button-x' class='buttons-x' aria-label='Fermer' title='Fermer cette fenêtre' data-dismiss='dialog'>X</button>
            </div>
            <div>
            <img id='image-modal' src='ressources/%s' alt='Image de présentation du projet'>
            </div>
            <p id='dialog-desc'>%s</p>
            <div class='container-link'>

            <a href='%s' target='_blank' class='github-link'><i class='%s'></i> %s</a>
            </div>
        </div>
    </div>",
    $key,
    $key,
    $project->title,
    $key,
    $project->image,
    $project->description,
    $project->href,
    $project->icone,
    $project->link
    );
}

function displayMessageModale($message){

    return sprintf("
    <div role='dialog' modale-container='0' id='dialog' aria-labelledby='dialog-title' aria-decribedby='dialog-desc' class='container-dialog' aria-modal='true' tabindex='-1' aria-hidden='true'>
        <div role='document' id='container-dialog-box' class='container-dialog-box'>
            <div id='dialog-header'>
                <h2 id='dialog-title'>%s</h2>
                
                <button type='button' modale='0' id='button-x' class='buttons-x' aria-label='Fermer' title='Fermer cette fenêtre' data-dismiss='dialog'>X</button>
            </div>
            <p id='dialog-desc'>%s</p>
        </div>
    </div>",
    $message->title,
    $message->text,
    );
}

?>