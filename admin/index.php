<?php require 'controller/login.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Place des cliches</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="../views/lib/bootstrap/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="app.js"></script>
    </head>
    <body>
        <!-- si elle est tojours dans le cookie on la redirige automatiquement vers
        la page atelier.php-->
        <?php // if(isset($_COOKIE['identifiant'], $_COOKIE['password'])){
        // header('Location: http://localhost/place-des-cliches/admin/ateliers.php');
        //} else {?>
            <form class="formAdmin" action="" method="post">
            <img class="logo" src="../views/img/logo.png" width="150px" alt="">
            <label for="identifiant">Identifiant :</label>
            <input id="identifiant" type="text" name="identifiant" value="">
            <label for="password">Mot de passe :</label>
            <input id="password" type="password" name="password" value="" placeholder="password">
            <label for="hope">Se souvenir de moi</label>
            <input type="checkbox" name="remember">
            <input type="submit" name="submit" value="Connexion">
        </form>

        <?php // } ?>
    

    </body>
</html>
