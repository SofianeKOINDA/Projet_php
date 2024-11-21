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
    <h1> Analyse tableau </h1>
    <p> Remplissez le tableau et il vous sera retourné le minimum <br> le maximum et la moyenne du Tableau </p>
    <a href="../librairie.php"> Précedent </a>
</header>    

<?php
$resultat = '';
$nombre = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $Tab = array_map('trim', explode(',', $nombre));
    $Tab = array_map('floatval', $Tab);
    
    $moyenne = array_sum($Tab) / count($Tab);
    $max = max($Tab);
    $min = min($Tab);
    
    $resultat = [
        'moyenne' => round($moyenne, 2),
        'max' => $max,
        'min' => $min
    ];
}
?>
<div class="container">

<form method="post" action="">
    <div>
        <label for="nombre">Entrez des nombres (séparés par des virgules):</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo htmlspecialchars($nombre); ?>" 
               placeholder="Ex: 1,2,3,4,5" required>
    </div>
    
    <button type="submit">Calculer</button>
</form>
</div>
<?php if ($resultat !== ''){ ?>
<div class="result">
    <h3>Résultats:</h3>
    <p>Moyenne: <?php echo $resultat['moyenne']; ?></p>
    <p>Maximum: <?php echo $resultat['max']; ?></p>
    <p>Minimum: <?php echo $resultat['min']; ?></p>
</div>
<?php }; ?>
</body>
<footer>
    <p>&copy; <?php echo date('Y'); ?> - Exercices de Programmation PHP</p>
</footer>
</html>