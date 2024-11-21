<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau statistique</title>
    <link rel="stylesheet" href="exercice_style.css">
</head>
<body>
<header>
    <h1>Tableau statistique</h1>
    <p>Remplissez le tableau et il vous sera retourné le minimum <br> le maximum et la moyenne du Tableau</p>
    <a href="../librairie.php"> Précedent </a>
</header>  
<div class="container"> 
    <form method="post" action="">
         <div>
            <label for="nombre">Entrez des nombres (séparés par des virgules) :</label>
            <input type="text" name="nombre" id="nombre" value="<?php echo isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : ''; ?>" 
               placeholder="Ex: 1,2,3,4,5" required>
         </div>
    
        <button type="submit">Calculer</button>
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['nombre'];
    $tableau = array_map('floatval', explode(',', $input));
    
    $moyenne = array_sum($tableau) / count($tableau);
    $maximum = max($tableau);
    $minimum = min($tableau);
?>

<div class="result">
    <h3>Résultats :</h3>
    <p>Moyenne : <?php echo round($moyenne, 2); ?></p>
    <p>Maximum : <?php echo $maximum; ?></p>
    <p>Minimum : <?php echo $minimum; ?></p>
</div>

<?php
}
?>

<footer>
    <p>&copy; <?php echo date('Y'); ?> - Exercices de Programmation PHP</p>
</footer>
</body>
</html>
