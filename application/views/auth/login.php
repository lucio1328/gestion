<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/connexion.css'); ?>">
</head>
<body>
    <div class="form-container">
        <form action="<?php echo site_url('Auth/login_form')?>" method="post">
            <?php
                if(isset($erreur)){
                    ?><h2 style="color:red;"><?php  echo $erreur;?></h2><?php
                }
            ?>
            <h2>Connexion</h2>
            <input type="text" name="email" placeholder="email">
            <input type="password" name="password" placeholder="Mot de passe">
            <button type="submit">Connexion</button>
        </form>
    </div>
</body>
</html>
