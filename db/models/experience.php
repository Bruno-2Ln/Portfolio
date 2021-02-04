<?php

class Experience{
    public $id;
    public $entry_date;
    public $job;
    public $company;
    public $position;
    public $periode;
    public $description;

    public function __construct(int $id, string $entry_date, int $job, string $company, string $position, string $periode, string $description){
        $this->id = $id;
        $this->entry_date = $entry_date;
        $this->job = $job;
        $this->company = $company;
        $this->position = $position;
        $this->periode = $periode;
        $this->description = $description;
    }

    public function __toString(){
        return $this->company;
    }
}