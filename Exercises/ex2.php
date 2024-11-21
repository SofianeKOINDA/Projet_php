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
    <h1>Multiple de 3 et 5</h1>
    <p>Entrez un nombre et verifiez si c'est un multiple de 3 et 5</p>
    <a href="../librairie.php"> Précedent </a>
</header>

<?php
$resultat = '';
$nombre = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = (int)$_POST['nombre'];
    
    if ($nombre % 3 == 0 && $nombre % 5 == 0) {
        $resultat = "$nombre est un multiple de 3 et de 5";
    } else {
        $resultat = "$nombre n'est pas un multiple de 3 et de 5";
    }
}
?>

<div class= "container" >
<form method="post" action="">
    <div>
        <label for="nombre">Entrez un nombre:</label>
        <input type="number" name="nombre" id="nombre" value="<?php echo ($nombre); ?>" required>
    </div>
    
    <button type="submit">Vérifier</button>
</form>
</div>

<?php if ($resultat !== ''){ ?>
<div class="result">
    <p><?php echo ($resultat); ?></p>
</div>
<?php }; ?> 
</body>
<footer>
    <p>&copy; <?php echo date('Y'); ?> - Exercices de Programmation PHP</p>
</footer>
</html>
