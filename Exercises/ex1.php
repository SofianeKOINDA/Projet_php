<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome</title>
    <link rel="stylesheet" href="exercice_style.css">
</head>
<body>
<header>
    <h1>Palindrome</h1>
    <p>Vérifiez si un mot ou une phrase est un palindrome</p>
    <ul>
        <li><a href="../librairie.php">Précédent</a></li>
    </ul>
</header>

<?php
$resultat = '';
$mot = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mot = $_POST['mot'];
    $vrai = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $mot));
    $faux = strrev($vrai);

    if ($vrai === $faux) {
        $resultat = "\" $mot \" est un palindrome!";
    } else {
        $resultat = "\" $mot \" n'est pas un palindrome.";
    }
}
?>

<div class="container">
    <form method="post" action="">
        <div>
            <label for="mot">Entrez un mot ou une phrase :</label>
            <input type="text" name="mot" id="mot" value="<?php echo htmlspecialchars($mot); ?>" required>
        </div>
        
        <button type="submit">Vérifier</button>
    </form>

    <?php if ($resultat !== ''): ?>
    <div class="result">
        <p><?php echo htmlspecialchars($resultat); ?></p>
    </div>
    <?php endif; ?>
</div>

<footer>
    <p>&copy; <?php echo date('Y'); ?> - Exercices de Programmation PHP</p>
</footer>
</body>
</html>
