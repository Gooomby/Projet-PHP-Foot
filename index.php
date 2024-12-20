<?php
// Spécifie le dossier contenant les vues
$vueDir = __DIR__ . '/vue';

// Vérifie si le dossier existe
if (is_dir($vueDir)) {
    $vues = array_diff(scandir($vueDir), ['.', '..', 'css']);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index temporaire</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            margin: 10px 0;
            padding: 10px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        ul li a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
        }

        ul li:hover {
            background-color: #eaf6ff;
        }

        ul li a:hover {
            color: #2c3e50;
        }
    </style>
</head>
<body>
    <h1>Liste des vues disponibles</h1>
    <ul>
        <?php
        if (!empty($vues)) {
            foreach ($vues as $vue) {
                if (pathinfo($vue, PATHINFO_EXTENSION) === 'php') {
                    echo "<li><a href='vue/$vue'>$vue</a></li>";
                }
            }
        } else {
            echo "<li>Aucune vue disponible.</li>";
        }
        ?>
    </ul>
</body>
</html>
