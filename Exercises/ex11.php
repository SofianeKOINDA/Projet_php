<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul des jours restants</title>
    <link rel="stylesheet" href="exercice_style.css">
</head>
<body>
<header>
    <h1>Calculateur de Jours </h1>
    <p>Entrez une date et l'exercice vous donneras le nombre de <br> jours restants de l'année  </p>
    <a href="../librairie.php"> Précedent </a>
</header>  
<?php

$resultat = '';
$date = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $date = $_POST['date'];

    // Crée un objet DateTime pour la date saisie
    $dateSaisie = new DateTime($date);

    // Crée un objet DateTime pour la fin de l'année
    $finAnnee = new DateTime($dateSaisie->format('Y') . '-12-31');
    
    // Calcule la différence entre la date saisie et la fin de l'année
    $intervalle = $dateSaisie->diff($finAnnee);
    
    $resultat = $intervalle->days;
}
?>

<div class="container">
<form method="post" action="">
    <div>
        <label for="date">Entrez une date :</label>
        <input type="date" name="date" id="date" value="<?php echo htmlspecialchars($date); ?>" required>
    </div>
    
    <button type="submit">Calculer</button>
</form>

</div>
<?php if ($resultat !== ''): ?>
<div class="result">
    <p>Il reste <?php echo $resultat; ?> jours jusqu'à la fin de l'année.</p>
</div>
<?php endif; ?>

</body>
<footer>
    <p>&copy; <?php echo date('Y'); ?> - Exercices de Programmation PHP</p>
</footer>
</html>
