<?php

date_default_timezone_set('UTC');

class User{
    const STATUS_USER = 1;
    const STATUS_ADMIN = 2;
 protected $userName;    //nazwę użytkownika,
 protected $passwd;     //hasło,
 protected $fullName;    //imię i nazwisko,
 protected $email;       //adres e-mail,
 protected $date;        //data
 protected $status;      //status

 function __construct($userName1, $fullName1, $email1, $passwd1 ){
    $this->status=User::STATUS_USER;
    $this->userName=$userName1;
    $this->fullName=$fullName1;
    $this->email=$email1;
    $this->passwd=password_hash($passwd1, PASSWORD_DEFAULT);
    $this->date =  new datetime();
    $this ->date = $this->date->format('Y-m-d-h-m-s');
    
}

Public function show() {
    echo "User Name : ". $this->userName.", Password ".$this->passwd.", Full Name :".$this->fullName. ", Email :".$this->email.", Status :".$this->status.", Date :",$this->date;
}

function setUserName($userName1){
$this->userName = $userName1;
} 
function getUserName(){
return $this->userName;
}
   

function toArray(){
    $arr=[
    "userName" => $this->userName,
    "fullName" => $this->fullName,
    "email" => $this->email,
    "password" => $this->passwd,
    "date" =>$this->date
    ];
    return $arr;
   }



function getAllUsersFromDB($db) {
    echo $db->select("select * from users ", ["id", "userName", "fullName", "email", "passwd", "status", "date"]);
}

function saveDB($db){
    $query = "INSERT INTO `klienci`.`users`
    (
    `userName`,
    `fullName`,
    `email`,
    `passwd`,
    `status`,
    `date`)
    VALUES
    (";
    $query .= "'".$this->userName."',";
    $query .= "'".$this->fullName."',";
    $query .= "'".$this->email."',";
    $query .= "'".$this->passwd."',";
    $query .= "'".$this->status."',";
    $query .= "'".$this->date."');";
    //var_dump($query);
    if($db->insert($query)) {
        echo "Zarejestrowano";
    } else {
        echo "Nie zarejestrowano użytkownika";
    }

}
}
?>