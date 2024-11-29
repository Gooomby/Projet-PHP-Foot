<?php
// controleur/joueurControleur.php

require_once '../modele/joueurModel.php';

function afficherListeJoueurs() {
    // Récupère les données depuis le modèle
    $joueurs = getJoueurs();

    // Génère le HTML pour chaque joueur
    $joueursHTML = '';
    foreach ($joueurs as $joueur) {
        $joueursHTML .= '<tr>';
        $joueursHTML .= '<td>' . htmlspecialchars($joueur['numero_de_licence']) . '</td>';
        $joueursHTML .= '<td>' . htmlspecialchars($joueur['nom']) . '</td>';
        $joueursHTML .= '<td>' . htmlspecialchars($joueur['prenom']) . '</td>';
        $joueursHTML .= '<td>' . htmlspecialchars($joueur['data_naissance']) . '</td>';
        $joueursHTML .= '<td>' . htmlspecialchars($joueur['taille']) . '</td>';
        $joueursHTML .= '<td>' . htmlspecialchars($joueur['poids']) . '</td>';
        $joueursHTML .= '<td>' . htmlspecialchars($joueur['Evalutation']) . '</td>';
        $joueursHTML .= '<td>' . htmlspecialchars($joueur['Statut']) . '</td>';
        $joueursHTML .= '</tr>';
    }

    // Charge le fichier HTML
    $html = file_get_contents('../vue/listeJoueurs.html');

    // Remplace le placeholder {{joueurs}} par le contenu généré
    $html = str_replace('{{joueurs}}', $joueursHTML, $html);

    // Affiche le HTML complet
    echo $html;
}
