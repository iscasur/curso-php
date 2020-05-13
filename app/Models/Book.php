<?php

require_once 'BaseProduct.php';

class Book extends Product {
    private $isbn;
    private $publisher;
    private $author;
    private $pages;
    private $profitBonus = 0.05;

    public function __constuct($_id, $_title, $_price, $_description, $_isbn, $_publisher, $_autor, $_pages, $_profitBonus) {
        parent::__constuct($_id, $_title, $_price, $_description);
        $this->isbn = $_isbn;
        $this->publisher = $_publisher;
        $this->author = $_autor;
        $this->pages = $_pages;
        $this->profitBonus = $_profitBonus;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getProfit() {
        return round($this->price * (0.1 + $this->profitBonus), 2);
    }
}