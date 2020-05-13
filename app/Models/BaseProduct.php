<?php

class Product {
    protected $id;
    protected $title;
    protected $price;
    protected $description;

    public function __construct($_id, $_title, $_price, $_description) {
        $this->id = $_id;
        $this->title = $_title;
        $this->price = $_price;
        $this->description = $_description;
    }

    public function getProfit() {
        return $this->price * 0.1;
    }
}