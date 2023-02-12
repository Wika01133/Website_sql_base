<?php

date_default_timezone_set('UTC');

class Rezerwacja{

 protected $nrtel;
 protected $zajecia;
 protected $data; 
 protected $godzina;

 function __construct($nrtel, $zajecia, $data, $godzina ){
    $this->nrtel=$nrtel;
    $this->zajecia=$zajecia;
    $this->data=$data;
    $this->godzina=$godzina;

}

Public function show() {
    echo "Numer telefonu : ". $this->nrtel.", Zajecia ".$this->zajecia.", Data :".$this->data. ", Godzina :".$this->godzina;
}

function setnrtel($nrtel){
$this->nrtel = $nrtel;
} 
function getnrtel(){
return $this->nrtel;
}
   

function toArray(){
    $arr=[
    "nrtel" => $this->nrtel,
    "zajecia" => $this->zajecia,
    "data" => $this->data,
    "godzina" => $this->godzina
    ];
    return $arr;
   }


function getAllReservationsFromDB($db) {
    echo $db->select("select * from rezerwacje ", ["id", "nrtel", "zajecia", "data", "godzina"]);
}

function saveDB($db){
    $query = "INSERT INTO `klienci`.`rezerwacje`
    (
    `nrtel`,
    `zajecia`,
    `data`,
    `godzina`)
    VALUES
    (";
    $query .= "'".$this->nrtel."',";
    $query .= "'".$this->zajecia."',";
    $query .= "'".$this->data."',";
    $query .= "'".$this->godzina."');";

    //var_dump($query);
    if($db->insert($query)) {
        echo "Zapisano";
    } else {
        echo "Nie zapisano";
    }

}
}
?>