<?php
class Movie{
    private $titolo;
    private $genere;

    function __construct($_titolo, $_genere){
        $this -> titolo = $_titolo;
        $this -> genere = $_genere;

    }
}