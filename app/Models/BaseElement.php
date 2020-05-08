<?php

class BaseElement {
    protected $title;
    public $description;
    public $visible = true;
    public $months;

    public function __construct($title, $description) {
        $this->setTitle($title);
        $this->description = $description;
    }

    public function setTitle($title) {
        if($title == '') {
            $this->title = 'N/A';
        } else {
            $this->title = $title;
        }
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDurationAsString() {
        $years = floor ($this->months / 12);
        $extraMonts = $this->months % 12;
            if ($years > 0 && $extraMonts > 0) {
                return "$years years $extraMonts months";
            } if ($years == 0) {
                return "$extraMonts months";
            } else {
                return "$years years";
            }
    }
}