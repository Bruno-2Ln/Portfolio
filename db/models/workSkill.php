<?php

class WorkSkill{
    public $id;
    public $language;
    public $percentage;

    public function __construct(int $id, string $language, int $percentage){
        $this->id = $id;
        $this->language = $language;
        $this->percentage = $percentage;
    }

    public function __toString(){
        return $this->language;
    }
}