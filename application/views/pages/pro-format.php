<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande Pro-Format</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/pro-format.css') ?>">
</head>
<body>
    <div class="pro-format-container">
        <form>
            <h2>Demande Pro-Format</h2>
            <span class="align">
                <label>Besoin</label>
                <p> : ?</p>
            </span>
            <span class="align">
                <label>Quantité</label>
                <p> : ?</p>
            </span>
            <span class="date">
                <label>Date limite de livraison</label>
                <input type="date" required>
            </span>
            <span class="btn">
                <button type="submit">OK</button>
            </span>
            <ul>
                <li>Question de contrôle interne 1</li>
                <li>Question de contrôle interne 2</li>
                <li>Question de contrôle interne 3</li>
            </ul>
        </form>
    </div>
</body>
</html>
