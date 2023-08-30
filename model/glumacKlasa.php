<?php
include_once('response.php');

class Glumac
{
    public $id;
    public $ime;
    public $prezime;
    public $godine;
    public $drzava_porekla;


    public function __construct($ime,$prezime,$godine,$drzava_porekla)
    {
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->godine = $godine;
        $this->drzava_porekla = $drzava_porekla;
    }  
}
?>