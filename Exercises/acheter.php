<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acheter un Bien</title>
    <link rel="stylesheet" href="exercice_style.css">
</head>
<body>
    <header>
    <h2>Acheter un Bien</h2>
    <p>Bienvenue sur la page d'achat de biens immobiliers. Veuillez fournir les critères de recherche pour que nous puissions vous aider à trouver la propriété idéale.</p>
    <a href="../librairie.php"> librairie </a>
    
    </header>
    <div class="container">
    <form method="post" action="process_acheter.php">
        <div>
            <label for="type_bien">Type de bien :</label>
            <input type="text" name="type_bien" id="type_bien" required>
        </div>
        <div>
            <label for="budget">Budget :</label>
            <input type="number" name="budget" id="budget" required>
        </div>
        <div>
            <label for="localisation">Localisation :</label>
            <input type="text" name="localisation" id="localisation" required>
        </div>
        <button type="submit">Soumettre</button>
    </form>
    </div>

</body>
<footer>
    <p>&copy; <?php echo date('Y'); ?> - Exercices de Programmation PHP</p>
</footer>
</html>
