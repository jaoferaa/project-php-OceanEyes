<!DOCTYPE html>
<html lang="fr">
    <?php 
    $title="Login";
    $alert="";
    include('../assets/head.php');
    include('../assets/Boostrap.php');
    include('../assets/Brand.php');
    ?>
<body>
    <?php
    include('../user/LoginAction.php');
    ?>
    <form action="" method="post">
        <div class="box">
            <div class="message">
                <div class="alert alert-<?php if(isset($message)){$alert="danger";echo $alert;}else{$alert="";} ?>">
                    <p class="text-danger"><?php if(isset($message)){echo $message;}else{$message='';} ?></p>
                </div>
            </div>
            <input type="text" name="pseudo" placeholder="pseudo" value="<?php if(isset($_COOKIE['memory'])){echo $_COOKIE['name'];}else{echo '';}?>" pattern="[A-Z,a-z,0-9]*">
            <input type="password" name="password" placeholder="mots de passe">
            <button type="submit" name="validate" class="btn btn-primary btn-lg"><span class="small">Connexion</span></button>                
                <?php if(isset($_COOKIE['memory'])){?>
                    <div class="cgv">
                        <label for="oui"><input id="oui" type="checkbox" checked name="memory">Se souvenir de moi</label>
                    </div>
                <?php }else{?>
                    <div class="cgv">
                        <label for="oui"><input id="oui" type="checkbox" name="memory">Se souvenir de moi</label>
                    </div>               
                <?php } ?>
        </div>
        <div class="signup"><a href="./Signup.php">Pas de compte?</a></div>
    </form>
</body>
</html>