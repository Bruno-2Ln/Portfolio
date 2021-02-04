<?php

class MenuOption{
    public $id;
    public $href;
    public $name;

    public function __construct(int $id, string $href, string $name){
        $this->id = $id;
        $this->href = $href;
        $this->name = $name;
    }

    public function __toString() {
        return $this->name;
    }
}