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
    <h1> PPCM </h1>
    <p>Entrez 2 nombres et rechercher leur PPCM</p>
    <a href="../librairie.php"> Précedent </a>
</header>   

<?php
function pgcd($a, $b) {
    while ($b != 0) {
        $t = $b;
        $b = $a % $b;
        $a = $t;
    }
    return $a;
}

function ppcm($a, $b) {
    return abs($a * $b) / pgcd($a, $b);
}

$resultat = '';
$nombre1 = '';
$nombre2 = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre1 = (int)$_POST['nombre1'];
    $nombre2 = (int)$_POST['nombre2'];
    $resultat = ppcm($nombre1, $nombre2);
}
?>
<div class="container">
<form method="post" action="">
    <div>
        <label for="nombre1">Premier nombre:</label>
        <input type="number" name="nombre1" id="nombre1" value="<?php echo htmlspecialchars($nombre1); ?>" required>
    </div>
    
    <div>
        <label for="nombre2">Deuxième nombre:</label>
        <input type="number" name="nombre2" id="nombre2" value="<?php echo htmlspecialchars($nombre2); ?>" required>
    </div>
    
    <button type="submit">Calculer le PPCM</button>
</form>
</div>

<?php if ($resultat !== ''){ ?>
<div class="result">
    <p>Le PPCM de <?php echo $nombre1; ?> et <?php echo $nombre2; ?> est: <?php echo $resultat; ?></p>
</div>
<?php }; ?>
</body>
<footer>
    <p>&copy; <?php echo date('Y'); ?> - Exercices de Programmation PHP</p>
</footer>
</html>