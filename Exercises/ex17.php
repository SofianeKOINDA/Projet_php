<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul du Sinus</title>
    <link rel="stylesheet" href="exercice_style.css">
</head>
<body>
<header>
    <h1>Calcul du Sinus</h1>
    <p>Entrez la valeur de l'angle et il vous sera affiché la valeur du sinus</p>
    <a href="../librairie.php"> Précedent </a>
</header>     

<?php

function calculerSinus($angle, $unite = 'r') {
    switch (strtolower($unite)) {
        case 'd': // degrés
            return sin(deg2rad($angle));
        case 'g': // grades
            return sin($angle * M_PI / 200);
        default: // radians
            return sin($angle);
    }
}


$resultat = '';
$angle = '';
$unite = 'r';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angle = $_POST['angle'];
    $unite = $_POST['unite'];
    $resultat = round(calculerSinus($angle, $unite), 4);
}
?>

<div class="container">
    <form method="post" action="">
        <div>
            <label for="angle">Angle :</label>
            <input type="number" step="any" name="angle" id="angle" value="<?php echo htmlspecialchars($angle); ?>" required>
        </div>
        
        <div>
            <label for="unite">Unité :</label>
            <select name="unite" id="unite">
                <option value="r" <?php if($unite == 'r') echo 'selected'; ?>>Radians</option>
                <option value="d" <?php if($unite == 'd') echo 'selected'; ?>>Degrés</option>
                <option value="g" <?php if($unite == 'g') echo 'selected'; ?>>Grades</option>
            </select>
        </div>
        
        <button type="submit">Calculer</button>
    </form>
</div>

<?php if ($resultat !== ''): ?>
<div class="result">
    <h3>Sinus :</h3>
    <p><?php echo $resultat; ?></p>
</div>
<?php endif; ?>

<footer>
    <p>&copy; <?php echo date('Y'); ?> - Exercices de Programmation PHP</p>
</footer>
</body>
</html>
