<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="exercice_style.css">
</head>
<body>
<header>
    <h1> Tableau Multidimensionelle</h1>
    <p>Cet exercice affiche un tableau qui a été saisie </p>
    <a href="../librairie.php"> Précedent </a>
</header>     
<?php
$personnes = array(
    "Ouedraogo" => array(
        "prenom" => "Issouf",
        "ville" => "Ouagadougou",
        "age" => 29
    ),
    "Zongo" => array(
        "prenom" => "Fatimata",
        "ville" => "Bobo-Dioulasso",
        "age" => 34
    ),
    "Sawadogo" => array(
        "prenom" => "Moussa",
        "ville" => "Koudougou",
        "age" => 27
    ),
    "Kaboré" => array(
        "prenom" => "Aminata",
        "ville" => "Kaya",
        "age" => 22
    ),
    "Sanou" => array(
        "prenom" => "Blaise",
        "ville" => "Banfora",
        "age" => 31
    )
);
?>
  <div class="result">
<h3>Liste des personnes :</h3>
<table border="1">
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Ville</th>
        <th>Âge</th>
    </tr>
  
    <?php foreach ($personnes as $nom => $details) : ?>
    <tr>
        <td><?php echo $nom; ?></td>
        <td><?php echo $details["prenom"]; ?></td>
        <td><?php echo $details["ville"]; ?></td>
        <td><?php echo $details["age"]; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</div>
</body>
<footer>
    <p>&copy; <?php echo date('Y'); ?> - Exercices de Programmation PHP</p>
</footer>
</html>
