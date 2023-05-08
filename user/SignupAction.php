<?php
require('../Admin/Database.php');
    if(isset($_POST['validate'])){
        if(!empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['pseudo']) && !empty($_POST['password'])){
            
            $user_name=htmlspecialchars($_POST['name']);
            $user_lastname=htmlspecialchars($_POST['lastname']);
            $user_pseudo=htmlspecialchars($_POST['pseudo']);
            $user_password=htmlspecialchars($_POST['password']);

            $checkUserExist=$connexion->prepare('SELECT PSEUDO FROM user WHERE pseudo=?');
            $checkUserExist->execute(array($user_pseudo));

            if($checkUserExist->rowCount()==0){
                //insert user into database
                $InsertUser=$connexion->prepare('INSERT INTO user(NAME,LASTNAME,PSEUDO,PASS) VALUES(?,?,?,?)');
                $InsertUser->execute(array($user_name,$user_lastname,$user_pseudo,$user_password));
                //recovery ALL user info
                $getID=$connexion->prepare('SELECT ID,NAME,LASTNAME,PSEUDO WHERE name=? AND lastname=? AND pseudo=?');
                $getID->execute(array($user_name,$user_lastname,$user_pseudo));
                //fr:inserer tous les informations recuperer ci dessous
                //dans un tableaux pour pouvoir les recuperer plustard
                $userINFO=$getID->fetch();
                //Authentifacation to the user
                
                $_SESSION['auth']=true;
                $_SESSION['id']=$userINFO['ID'];
                $_SESSION['name']=$userINFO['NAME'];
                $_SESSION['lastname']=$userINFO['LASTNAME'];
                $_SESSION['pseudo']=$userINFO['PSEUDO'];

                //redirection of the user in the homepage
                header('location:../page/login.php');

            }else {
                $message="Le pseudo est utilisé par un autre utilisateur";
            }

        }else{
            $message="veuillez remplir tous les champs!";
        }
    }
?>