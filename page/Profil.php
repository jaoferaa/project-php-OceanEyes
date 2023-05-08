<?php require('../user/SecurityAction.php');?>
<!DOCTYPE html>
<html lang="fr">
    <?php 
    $title="Profil";
    $nav="Profil";
    include('../assets/head.php');
    include('../assets/Boostrap.php');
    include('../assets/Brand.php');
    include('../assets/Lnks.php');   
    ?>
<body>
<br>
    <div class="profile">
        <img src="../img/profile.jpg" class=" list-unstyled">
    </div>
        <div>
            <p class="nameuser lead">@<?php echo $_SESSION['pseudo'];?></p>
        </div>
    <?php 
        include('./script.php');
        include('../assets/Footer.php');
    ?>
</body>
</html>