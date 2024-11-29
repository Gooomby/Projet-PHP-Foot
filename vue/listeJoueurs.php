<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Joueurs</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>Liste des Joueurs</h1>
    <table>
        <thead>
            <tr>
                <th>Numéro de Licence</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de Naissance</th>
                <th>Taille (cm)</th>
                <th>Poids (kg)</th>
                <th>Évaluation</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            <!-- Les données des joueurs seront insérées ici dynamiquement -->
            <!-- Exemple de données dynamiques (à remplacer par votre moteur de template) -->
            <!-- BEGIN players -->
            <tr>
                <td>{{numero_de_licence}}</td>
                <td>{{nom}}</td>
                <td>{{prenom}}</td>
                <td>{{data_naissance}}</td>
                <td>{{taille}}</td>
                <td>{{poids}}</td>
                <td>{{Evalutation}}</td>
                <td>{{Statut}}</td>
            </tr>
            <!-- END players -->
        </tbody>
    </table>
</body>
</html>
