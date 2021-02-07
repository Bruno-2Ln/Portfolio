<?php

class Message{
    public $id;
    public $title;
    public $variable_session;
    public $text;

    public function __construct(int $id, string $title, string $variable_session, string $text){
        $this->id = $id;
        $this->title = $title;
        $this->variable_session = $variable_session;
        $this->text = $text;
    }

    public function __toString(){
        return $this->title;
    }
}