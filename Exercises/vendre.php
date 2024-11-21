<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendre un Bien</title>
    <link rel="stylesheet" href="exercice_style.css">
</head>
<body>
    <header>
    <h2>Vendre un Bien</h2>
    <p>Bienvenue sur la page de vente de votre bien immobilier. Veuillez fournir les informations nécessaires pour que nous puissions vous aider à vendre votre propriété.</p>
    <a href="../librairie.php"> librairie </a>
 
    </header>

    <div class="container">
    <form method="post" action="process_vendre.php">
        <div>
            <label for="type_bien">Type de bien :</label>
            <input type="text" name="type_bien" id="type_bien" required>
        </div>
        <div>
            <label for="adresse">Adresse :</label>
            <input type="text" name="adresse" id="adresse" required>
        </div>
        <div>
            <label for="prix">Prix demandé :</label>
            <input type="number" name="prix" id="prix" required>
        </div>
        <button type="submit">Soumettre</button>
    </form>
    </div>
</body>
<footer>
    <p>&copy; <?php echo date('Y'); ?> - Exercices de Programmation PHP</p>
</footer>
</html>
