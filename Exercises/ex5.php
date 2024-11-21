<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="exercice_style.css">
</head>
<body>
<header>
    <h1>Cercle </h1>
    <p>Cet exercice calcule les dimensions d'un cercle a l'aide du rayon <br> que vous alliez saisir</p>
    <a href="../librairie.php"> Précedent </a>
</header>    

<?php
$resultat = '';
$rayon = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rayon = (float)$_POST['rayon'];
    $diametre = 2 * $rayon; // Correction de l'accent dans le nom de la variable
    $perimetre = 2 * M_PI * $rayon; // Correction de l'accent dans le nom de la variable
    $aire = M_PI * $rayon * $rayon; // Correction de la majuscule dans le nom de la variable
    
    $resultat = [
        'diametre' => round($diametre, 2),
        'perimetre' => round($perimetre, 2),
        'aire' => round($aire, 2)
    ];
}
?>
<div class="container"> 
<form method="post" action="">
    <div>
        <label for="rayon">Rayon du cercle :</label>
        <input type="number" step="0.01" name="rayon" id="rayon" value="<?php echo htmlspecialchars($rayon); ?>" required>
    </div>
    
    <button type="submit">Calculer</button>
</form>
</div>

<?php if ($resultat !== '') : ?>
<div class="result">
    <h3>Résultats :</h3>
    <p>Diamètre : <?php echo $resultat['diametre']; ?></p>
    <p>Périmètre : <?php echo $resultat['perimetre']; ?></p>
    <p>Surface : <?php echo $resultat['aire']; ?></p>
</div>
<?php endif; ?> 
</body>
<footer>
    <p>&copy; <?php echo date('Y'); ?> - Exercices de Programmation PHP</p>
</footer>
</html>
