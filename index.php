<?php

require_once __DIR__. '/classes/Movie.php';

$film = [
    new Movie("Avatar", "Fantascienza"),
    new Movie("Titanic", "storico-drammatico"),
];

$film[0] -> setDurata("2:45");
$film[1] -> setDurata("3:14");

var_dump($film);
?>
</body>
</html>


