<?php
include_once('response.php');

class Reziser
{
    public $id;
    public $ime;
    public $prezime;
    public $broj_filmova;
  


    public function __construct($ime,$prezime,$broj_filmova)
    {
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->broj_filmova = $broj_filmova;
        
    }   
}
?>