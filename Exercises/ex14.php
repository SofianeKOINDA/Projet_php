<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul TVA</title>
    <link rel="stylesheet" href="exercice_style.css">
</head>
<body>
<header>
    <h1> Calcul TVA </h1>
    <p> Entrez le montant hors taxe et il vous sera afficher <br> la taxe et le prix rout taxe comprise  </p>
    <a href="../librairie.php"> Précedent </a>
</header>    

<?php

$resultat = '';
$prix_ht = '';
$taux_tva = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $prix_ht = $_POST['prix_ht'];
    $taux_tva = $_POST['taux_tva'];
    

    $montant_tva = $prix_ht * ($taux_tva / 100);
    $prix_ttc = $prix_ht + $montant_tva;
    

    $resultat = [
        'montant_tva' => round($montant_tva, 2),
        'prix_ttc' => round($prix_ttc, 2)
    ];
}
?>

<div class = "container" >
<form method="post" action="">
    <div>
        <label for="prix_ht">Prix HT :</label>
        <input type="number" step="0.01" name="prix_ht" id="prix_ht" value="<?php echo htmlspecialchars($prix_ht); ?>" required>
    </div>
    
    <div>
        <label for="taux_tva">Taux TVA (%) :</label>
        <input type="number" step="0.1" name="taux_tva" id="taux_tva" value="<?php echo htmlspecialchars($taux_tva); ?>" required>
    </div>
    
    <button type="submit">Calculer</button>
</form>
</div>

<?php if ($resultat !== ''): ?>
<div class="result">
    <h3>Résultats :</h3>
    <p>Montant TVA : <?php echo $resultat['montant_tva']; ?> €</p>
    <p>Prix TTC : <?php echo $resultat['prix_ttc']; ?> €</p>
</div>
<?php endif; ?>
</body>
<footer>
    <p>&copy; <?php echo date('Y'); ?> - Exercices de Programmation PHP</p>
</footer>
</html>
