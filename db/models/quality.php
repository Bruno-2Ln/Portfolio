<?php

class Quality{
    public $id;
    public $ranking;
    public $quality;

    public function __construct(int $id, int $ranking, string $quality){
        $this->id = $id;
        $this->ranking = $ranking;
        $this->quality = $quality;
    }

    public function __toString(){
        return $this->quality;
    }
}