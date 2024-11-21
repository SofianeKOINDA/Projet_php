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
    <h1> Diviseur </h1>
    <p>Entrez un nombre et recherchez tous ces diviseurs</p>
    <a href="../librairie.php"> Précedent </a>
</header>    

<?php
$resultat = '';
$nombre = '';

function obtenirDiviseurs($n) {
    $diviseurs = [];
    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i == 0) {
            $diviseurs[] = $i;
        }
    }
    return $diviseurs;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = (int)$_POST['nombre'];
    $diviseurs = obtenirDiviseurs($nombre);
    $resultat = implode(', ', $diviseurs);
}
?>
<div class="container"> 
<form method="post" action="">
    <div>
        <label for="nombre">Entrez un nombre :</label>
        <input type="number" name="nombre" id="nombre" value="<?php echo htmlspecialchars($nombre); ?>" required>
    </div>
    
    <button type="submit">Trouver les diviseurs</button>
</form>
</div>
<?php if ($resultat !== ''): ?>
<div class="result">
    <h3>Les diviseurs de <?php echo $nombre; ?> sont :</h3>
    <p><?php echo $resultat; ?></p>
</div>
<?php endif; ?>
</body>
<footer>
    <p>&copy; <?php echo date('Y'); ?> - Exercices de Programmation PHP</p>
</footer>
</html>
