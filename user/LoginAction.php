<?php
require('../Admin/Database.php');
    if(isset($_POST['validate'])){
        if(!empty($_POST['pseudo']) && !empty($_POST['password'])){
            //AUTHENTIFICATION USER
            $user_pseudo=htmlspecialchars($_POST['pseudo']);
            $user_password=htmlspecialchars($_POST['password']);

                                                                        //valeur pseudo entrer par l'utilisateur
            $checkUserExist=$connexion->prepare('SELECT * FROM user WHERE pseudo=?');
            $checkUserExist->execute(array($user_pseudo));

                if($checkUserExist->rowCount() > 0){
                    $userINFO=$checkUserExist->fetch();
                        if($user_password===$userINFO['PASS']){
                                    //COOKIE
                                    if(isset($_POST['memory'])){
                                        setcookie('memory',$_POST['memory'],time()*3600*24*365,'/OceanEyes');
                                        setcookie('name',$_POST['pseudo'],time()*3600*24*365,'/OceanEyes');
                                        $_COOKIE['memory']=$_POST['memory'];
                                        $_COOKIE['name']=$_POST['pseudo'];
                                    }else{
                                        setcookie('memory','',time()-1,'/OceanEyes');
                                        setcookie('name','',time()-1,'/OceanEyes');
                                    }
                                    //Authentifacation to the user
                                    $_SESSION['auth']=true;
                                    $_SESSION['id']=$userINFO['ID'];
                                    $_SESSION['name']=$userINFO['NAME'];
                                    $_SESSION['lastname']=$userINFO['LASTNAME'];
                                    $_SESSION['pseudo']=$userINFO['PSEUDO'];
                                    
                                    header('Location:../Home.php'); 
                        }else{
                            $message='Mots de passe incorrect';
                        }

                }else{
                    $message='Pseudo introuvable';
                }

        }else{
            $message='Veuillez remplir tous les champs!';
        }
    }
        
?>