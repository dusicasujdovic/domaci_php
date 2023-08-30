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

    public function addNew()
    {
        include_once('dbBroker.php');
        global $mysqli;
        $query = "INSERT INTO reziser(ime,prezime,broj_filmova) VALUES 
        ('"
            . $mysqli->real_escape_string($this->ime) . "','"
            . $mysqli->real_escape_string($this->prezime) . "','"
            . $mysqli->real_escape_string( $this->broj_filmova) ."
        ')";

            if ($mysqli->query($query)) {
                return true;
            }
            else {
                return false;
            }


    }

    public static function getAll(){
        include_once('dbBroker.php');
        global $mysqli;
        $sql = "SELECT * FROM reziser";

        if(!($result = $mysqli->query($sql))) {
            echo "ERROR" . $mysqli->mysql_error;
            exit();
        }

        $arrayResult = array();
        while($row = $result->fetch_object()) {
            $reziser = new Reziser($row->ime,$row->prezime,$row->broj_filmova);
            $reziser->id = $row->id;
            array_push($arrayResult, $reziser);
        }
        return $arrayResult;
    }
}
?>