<?php

require_once 'BaseElement.php';

class Job extends BaseElement {
    public function __construct($title, $description){
        $newTitle = 'Job: ' . $title;
        $this->title = $newTitle;
    }
    
    public function getDurationAsString() {
        $years = floor ($this->months / 12);
        $extraMonts = $this->months % 12;
            if ($years > 0 && $extraMonts > 0) {
                return "Job duration: $years years $extraMonts months";
            } if ($years == 0) {
                return "Job duration: $extraMonts months";
            } else {
                return "Job duration: $years years";
            }
    }
}