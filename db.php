<?php
require_once __DIR__ . '/models/Movie.php';


$movie1 = new Movie('Avatar', 2023, 'Avventura', 'Descrizione', 9);

$movies = [
    $movie1
];

var_dump($movie1);
