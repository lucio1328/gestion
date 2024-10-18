<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Des Besoins</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/liste-besoin-2.css') ?>">
</head>
<body>
    <div class="besoins-container">
        <h2>Liste Des Besoins</h2>
        <table>
            <thead>
                <tr>
                    <th>Réf</th>
                    <th>Désignation</th>
                    <th>Quantité</th>
                    <th>Département</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ref001</td>
                    <td>designation001</td>
                    <td>1</td>
                    <td>dep001</td>
                    <td>16/10/2024</td>
                    <td>
                        <div class="action">
                            <button class="valider">valider</button>
                            <button class="rejeter">rejeter</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>ref002</td>
                    <td>designation002</td>
                    <td>1</td>
                    <td>dep002</td>
                    <td>16/10/2024</td>
                    <td>
                        <div class="action">
                            <button class="valider">valider</button>
                            <button class="rejeter">rejeter</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>ref003</td>
                    <td>designation003</td>
                    <td>1</td>
                    <td>dep001</td>
                    <td>16/10/2024</td>
                    <td>
                        <div class="action">
                            <button class="valider">valider</button>
                            <button class="rejeter">rejeter</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
