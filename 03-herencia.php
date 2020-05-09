<?php

require_once 'app/Models/Book.php';

$libro1 = new Book(1, 'Harry Potter', 1000, 'Harry Potter y la pieda filosofal', 'ASBIN4567', 'Grupo Norma', 'J. K. Rowling', 275, 0.1);

echo 'La ganancia del libro es de: $ ' . $libro1->getProfit();

?>