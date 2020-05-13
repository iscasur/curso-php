<?php

require_once 'app/Models/Book.php';

$libro1 = new Book(1, 'Harry Potter', 340, 'Harry Potter y la pieda filosofal', 'ASBIN4567', 'Grupo Norma', 'J. K. Rowling', 275);

$libro2 = new Book(3, 'El sutil arte de que te importe un carajo', 250, 'Deja de preocuparte', 'ASBIN4567', 'HarperOne', 'Mark Manson', 275);

echo $libro1->getTitle() . '<br>';
echo 'La ganancia del libro es de: $ ' . $libro1->getProfit() . ' MXN<br><br>';

echo $libro2->getTitle() . '<br>';
echo 'La ganancia del libro es de: $ ' . $libro2->getProfit() . ' MXN<br><br>';

?>