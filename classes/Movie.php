<?php
class Movie{
    private $titolo;
    private $genere;
    private $durata;

    function __construct($_titolo, $_genere){
        $this -> titolo = $_titolo;
        $this -> genere = $_genere;
    }

    public function setDurata($_durata){
        $this -> durata = $_durata;
    }

    public function getDurata(){
        return $this -> durata;
    }

    
}