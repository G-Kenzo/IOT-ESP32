<?php
$fichier = "valeur.txt";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["valeur"])) {
        $valeur = $_POST["valeur"];
        
        
        file_put_contents($fichier, $valeur);
    }
}

$valeurAffichee = "Aucune donnée";
if (file_exists($fichier)) {
    $valeurAffichee = file_get_contents($fichier);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Données ESP32</title>

    <meta http-equiv="refresh" content="2">

    <style>
        body {
            font-family: Arial;
            text-align: center;
            margin-top: 50px;
        }
        .box {
            font-size: 30px;
            padding: 20px;
            border: 2px solid black;
            display: inline-block;
            border-radius: 10px;
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>

    <h1>Valeur reçu depuis l’ESP32</h1>

    <div class="box">
        <?php echo htmlspecialchars($valeurAffichee); ?>
    </div>
	
    <h2>Commande ESP32</h2>

    <button onclick="fetch('http://IP_ESP32/son')">
        Allumer
    </button>

</body>
</html>
