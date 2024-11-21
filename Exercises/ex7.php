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
    <h1>Nombre Parfait </h1>
    <p>Entrez un nombre et verifiez si c'est un nombre parfait pas</p>
    <a href="../librairie.php"> Précedent </a>
</header>    

<?php
$resultat = '';
$nombre = '';

function estParfait($n) {
    $somme = 0;
    for ($i = 1; $i < $n; $i++) {
        if ($n % $i == 0) {
            $somme += $i;
        }
    }
    return $somme == $n;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = (int)$_POST['nombre'];
    $resultat = estParfait($nombre) ? 
        "$nombre est un nombre parfait!" : 
        "$nombre n'est pas un nombre parfait.";
}
?>
<div class="container"> 
<form method="post" action="">
    <div>
        <label for="nombre">Entrez un nombre :</label>
        <input type="number" name="nombre" id="nombre" value="<?php echo htmlspecialchars($nombre); ?>" required>
    </div>
    
    <button type="submit">Vérifier</button>
</form>
</div>
<?php if ($resultat !== ''): ?>
<div class="result">
    <p><?php echo htmlspecialchars($resultat); ?></p>
</div>
<?php endif; ?>
</body>
<footer>
    <p>&copy; <?php echo date('Y'); ?> - Exercices de Programmation PHP</p>
</footer>
</html>
