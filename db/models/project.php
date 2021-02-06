<?php

class Projet{

    public $id;
    public $title;
    public $shortDescription;
    public $description;
    public $href;
    public $image;
    public $vague;

    public function __construct(int $id, string $title, string $shortDescription, string $description, string $href, string $image, int $vague){
        
        $this->id = $id;
        $this->title = $title;
        $this->shortDescription = $shortDescription;
        $this->description = $description;
        $this->href = $href;
        $this->image = $image;
        $this->vague = $vague;
    }

    public function __toString(){
        return $this->title;
    }
}