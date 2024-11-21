<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analyse de Texte</title>
    <link rel="stylesheet" href="exercice_style.css">
</head>
<body>
<header>
    <h1>Compteur de voyeklles et consonnes </h1>
    <p>Entrez un mot ou une phrase et on affichera le nombre de voyelles <br> et le nombre de consonnes </p>
    <a href="../librairie.php"> Précedent </a>
</header>  
<?php

$resultat = '';
$texte = '';

// Fonction pour compter les voyelles et les consonnes
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texte = $_POST['texte'];
    $voyelles = preg_match_all('/[aeiouAEIOU]/u', $texte, $matches);
    $consonnes = preg_match_all('/[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/u', $texte, $matches);
    

    $resultat = [
        'voyelles' => $voyelles,
        'consonnes' => $consonnes
    ];
}
?>

<div class="container">
<form method="post" action="">
    <div>
        <label for="texte">Entrez une chaîne de caractères :</label>
        <input type="text" name="texte" id="texte" value="<?php echo htmlspecialchars($texte); ?>" required>
    </div>
    
    <button type="submit">Analyser</button>
</form>
</div>

<?php if ($resultat !== ''): ?>
<div class="result">
    <h3>Résultats :</h3>
    <p>Nombre de voyelles : <?php echo $resultat['voyelles']; ?></p>
    <p>Nombre de consonnes : <?php echo $resultat['consonnes']; ?></p>
</div>
<?php endif; ?>
</body>
<footer>
    <p>&copy; <?php echo date('Y'); ?> - Exercices de Programmation PHP</p>
</footer>
</html>
