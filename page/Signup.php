<!DOCTYPE html>
<html lang="fr">
    <?php 
    $title="Signup";
    include('../assets/head.php');
    include('../assets/Boostrap.php');
    include('../assets/Brand.php');
    require_once('../user/SignupAction.php');
    ?>
<body>
    <form action="" method="post">
        <div class="box">
            <div class="message"><p><?php if(isset($message)){echo $message;}else{$message='';} ?></p></div>
            <input type="text" name="name" placeholder="Nom">
            <input type="text" name="lastname" placeholder="Prenom">
            <input type="text" name="pseudo" placeholder="Pseudo">
            <input type="password" name="password" placeholder="mots de passe">
            <button type="submit" class="btn btn-primary btn-lg" name="validate"><span class="small">S'inscrire</span></button>                
        </div>
        <div class="signup"><a href="./Login.php">Deja un compte?</a></div>
    </form>
</body>
</html>