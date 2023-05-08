<?php
session_start();
try{
    $connexion=new PDO('mysql:host=localhost;dbname=oceaneyes','root','roots');
    
}catch(Exception $e){
    die('une erreur' .$e->getMessage());

}