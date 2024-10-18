<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire De Réception</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/reception.css') ?>">
</head>
<body>
    <div class="reception-container">
        <form>
            <h2>Formulaire De Réception</h2>
            <div class="caracteristique-container">
                <span class="align">
                    <label>Numéro</label>
                    <p> : ?</p>
                </span>
                <span class="align">
                    <label>Date limite</label>
                    <p> : ?</p>
                </span>
                <span class="align">
                    <label>Réference bon-commande</label>
                    <p> : ?</p>
                </span>
                <span class="align">
                    <label>Fournisseur</label>
                    <p> : ?</p>
                </span>
                <span class="align">
                    <label>Date de livraison</label>
                    <input type="date" required>
                </span>
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
                <li>Question de contrôle interne 1</li>
                <li>Question de contrôle interne 2</li>
                <li>Question de contrôle interne 3</li>
            </ul>
        </form>
    </div>

    <script>
        function send(event) {
            event.preventDefault();  // Empêche le rechargement de la page
            alert("Formulaire envoyé !");
        }
    </script>
</body>
</html>
