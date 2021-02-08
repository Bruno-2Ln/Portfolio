<?php

class Projet{

    public $id;
    public $title;
    public $shortDescription;
    public $description;
    public $href;
    public $image;
    public $vague;
    public $link;
    public $icone;

    public function __construct(int $id, string $title, string $shortDescription, string $description, string $href, string $image, int $vague, string $link, string $icone){
        
        $this->id = $id;
        $this->title = $title;
        $this->shortDescription = $shortDescription;
        $this->description = $description;
        $this->href = $href;
        $this->image = $image;
        $this->vague = $vague;
        $this->link = $link;
        $this->icone = $icone;
    }

    public function __toString(){
        return $this->title;
    }
}