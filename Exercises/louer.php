<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Louer un Bien</title>
    <link rel="stylesheet" href="exercice_style.css">
</head>
<body>
    <header>
    <h2>Louer un Bien</h2>
    <p>Bienvenue sur la page de location de biens immobiliers. Veuillez fournir les informations nécessaires pour que nous puissions vous aider à trouver la location idéale.</p>
   
    <a href="../librairie.php"> librairie </a>
    
    
    </header>
    <div class="container">
    <form method="post" action="process_louer.php">
        <div>
            <label for="type_bien">Type de bien :</label>
            <input type="text" name="type_bien" id="type_bien" required>
        </div>
        <div>
            <label for="budget">Budget :</label>
            <input type="number" name="budget" id="budget" required>
        </div>
        <div>
            <label for="duree">Durée de location (mois) :</label>
            <input type="number" name="duree" id="duree" required>
        </div>
        <button type="submit">Soumettre</button>
    </form>
    </div>
</body>
<footer>
    <p>&copy; <?php echo date('Y'); ?> - Exercices de Programmation PHP</p>
</footer>
</html>
