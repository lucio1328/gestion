<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bon De Commande</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bon-commande.css') ?>">
</head>
<body>
    <div class="bon-commande-container">
        <form>
            <h2>Bon De Commande</h2>

            <div class="caracteristique-container">
                <div>
                    <span class="align">
                        <label>Numéro</label>
                        <p> : ?</p>
                    </span>
                    <span class="align">
                        <label>Date De Commande</label>
                        <p> : ?</p>
                    </span>
                    <span class="align">
                        <label>Date De Livraison</label>
                        <p> : ?</p>
                    </span>
                </div>
                <div>
                    <span class="align">
                        <label>Adresse De Livraison</label>
                        <p> : ?</p>
                    </span>
                    <span class="align">
                        <label>Émetteur</label>
                        <p> : ?</p>
                    </span>
                    <span class="align">
                        <label>Récepteur</label>
                        <p> : ?</p>
                    </span>
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>Réf</th>
                        <th>Désignation</th>
                        <th>PU HT</th>
                        <th>Quantité</th>
                        <th>Total HT</th>
                        <th>TVA</th>
                        <th>Total TTC</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="corps">?</td>
                        <td class="corps">?</td>
                        <td class="corps">?</td>
                        <td class="corps">?</td>
                        <td class="corps">?</td>
                        <td class="corps">?</td>
                        <td class="corps">?</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="close1"></td>
                        <td class="close"></td>
                        <td class="close">Total</td>
                        <td class="close"></td>
                        <td class="close2"></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

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
