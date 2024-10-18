<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion Besoin</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/besoin.css') ?>">
</head>
<body>
    <div class="besoin-container">
        <form>
            <h2>Insertion Besoin</h2>
            <input type="hidden" name="departement" value="#">
            
            <span class="align">
                <label>Date</label>
                <input type="date">
            </span>

            <span class="align">
                <label>Besoin</label>
                <select name="besoin">
                <option value="" disabled>besoin</option>
                    <?php

                        foreach ($besoins as $besoin) {
                            ?>
                            <option value="<?php echo $besoin['id'] ?>"><?php echo $besoin['designation'] ?></option>
                            <?php
                        }
                    
                    ?>
                </select>
            </span>

            <span class="align">
                <label>Quantité</label>
                <input type="number" name="quantite">
            </span>


            <span class="btn">
                <button type="submit">OK</button>
            </span>

            <ul>
                <li>question de contrôle interne 1</li>
                <li>question de contrôle interne 2</li>
                <li>question de contrôle interne 3</li>
            </ul>
        </form>
    </div>
</body>
</html>
