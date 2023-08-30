<?php
include_once('response.php');

class Film
{
    public $id;
    public $naziv;
    public $datum_premijere;
    public $zanr;
    public $id_reziser;
    public $id_glavni_glumac;


    public function __construct($naziv,$datum_premijere,$zanr,$id_reziser,$id_glavni_glumac)
    {
        $this->naziv = $naziv;
        $this->datum_premijere = $datum_premijere;
        $this->zanr = $zanr;
        $this->id_reziser = $id_reziser;
        $this->id_glavni_glumac = $id_glavni_glumac;
    }   
}
?>