<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformation de Chaînes</title>
    <link rel="stylesheet" href="exercice_style.css">
</head>
<body>
<header>
    <h1>Transformation de Chaînes</h1>
    <p>Entrez un texte et obtenez une version transformée, le texte sera reécris <br> avec uniquement la première lettre en majuscule et le reste en minuscule</p>
    <a href="../librairie.php"> Précedent </a>
</header>  

<?php
function transformerTableau(&$tableau) {
    foreach ($tableau as &$element) {
        $element = ucfirst(strtolower($element));
    }
}


$resultat = '';
$texte = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texte = $_POST['chaines'];
    $tableau = explode(',', $texte);
    transformerTableau($tableau);
    $resultat = implode(', ', $tableau);
}
?>
<div class="container">
    <form method="post" action="">
        <div>
            <label for="chaines">Entrez des chaînes (séparées par des virgules) :</label>
            <input type="text" name="chaines" id="chaines" value="<?php echo htmlspecialchars($texte); ?>" 
                   placeholder="Ex : TEST,tEsT,test" required>
        </div>
        
        <button type="submit">Transformer</button>
    </form>
</div>
<?php if ($resultat !== ''): ?>
<div class="result">
    <h3>Résultat :</h3>
    <p><?php echo htmlspecialchars($resultat); ?></p>
</div>
<?php endif; ?>

<footer>
    <p>&copy; <?php echo date('Y'); ?> - Exercices de Programmation PHP</p>
</footer>
</body>
</html>
