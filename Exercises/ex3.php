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
    <h1>Nombre aleatoire</h1>
    <p>Entrez un nombre et verifiez a combien de tentatives ce nombre sera trouvé</p>
    <a href="../librairie.php"> Précedent </a>
</header>  
<?php
$resultat = '';
$cible = '';
$methode = '';
$tentatives = 0;

// Vérifie si le formulaire a été soumis via la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $cible = (int)$_POST['cible'];
    
    $methode = $_POST['methode'];
    
    // Si la méthode choisie est 'while'
    if ($methode === 'while') {
        $trouve = false; 
        $tentatives = 0; 
        while (!$trouve) {
            $aleatoire = rand(100, 999); // Génère un nombre aléatoire entre 100 et 999
            $tentatives++; // Incrémente le compteur de tentatives
            if ($aleatoire == $cible) {
                $trouve = true; 
            }
        }
    } else { // Si la méthode choisie est 'for'
        for ($tentatives = 1; ; $tentatives++) {
            $aleatoire = rand(100, 999);
            if ($aleatoire == $cible) {
                break; 
            }
        }
    }
    
   
    $resultat = "Nombre trouvé en $tentatives tentatives!";
}
?>
<div class="container">
<form method="post" action="">
    <div>
        <label for="cible">Entrez un nombre de trois chiffres:</label>
        <input type="number" name="cible" id="cible" min="100" max="999" value="<?php echo htmlspecialchars($cible); ?>" required>
    </div>
    
    <div>
        <label for="methode">Méthode:</label>
        <select name="methode" id="methode">
            <option value="while" <?php if($methode == 'while') echo 'selected'; ?>>While</option>
            <option value="for" <?php if($methode == 'for') echo 'selected'; ?>>For</option>
        </select>
    </div>
    
    <button type="submit">Lancer la recherche</button>
</form>
</div>

<?php if ($resultat !== ''){?>
<div class="result">
    <p><?php echo htmlspecialchars($resultat); ?></p>
</div>
<?php }; ?>
</body>
<footer>
    <p>&copy; <?php echo date('Y'); ?> - Exercices de Programmation PHP</p>
</footer>
</html>
