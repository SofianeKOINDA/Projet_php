<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices PHP - BIG2</title>
    <link rel="stylesheet" href="style.css">
    
    
</head>
<body>
    <header>
        <box-icon name='book-open'></box-icon>
        <h1>Bibliothèque d'exercices PHP</h1>
        <p>Bachelor en Informatique de Gestion (BIG2)</p>
    </header>

    <main>
        <div class="exercises-grid">
        
            <?php
            $exercises = [
                ["Palindrome", "Vérification de palindrome"],
                ["Multiple", "Test de multiple de 3 et 5"],
                ["Nombre Aléatoire", "Jeu de génération de nombres"],
                ["PPCM", "Calculateur de PPCM"],
                ["Cercle", "Calculs sur un cercle"],
                ["Diviseurs", "Recherche de diviseurs"],
                ["Nombre Parfait", "Test de nombre parfait"],
                ["Statistiques Tableau", "Calcul de moyenne, max, min"],
                ["Tableau Multidimensionnel", "Gestion de données personnelles"],
                ["Compteur Caractères", "Comptage voyelles/consonnes"],
                ["Calculateur Jours", "Jours restants dans l'année"],
                ["Formulaire Client", "Traitement données client"],
                ["Analyse Tableau", "Analyse statistique"],
                ["Calculateur TVA", "Calcul TVA et prix TTC"],
                ["Immobilier", "Routeur immobilier"],
                ["Formatage Texte", "Formatage de chaînes"],
                ["Calculateur Angle", "Calcul de sinus"]
            ];

            foreach($exercises as $index => $exercise) {
                $num = $index + 1;
                
                echo "<div class='exercise-card'>
                        <div class='exercise-number'>Exercice $num</div>
                        <h3>{$exercise[0]}</h3>
                        <p>{$exercise[1]}</p>
                        <a href='Exercises/ex$num.php' class='btn'>Voir l'exercice -> </a>
                        
                    </div>";
            }
            ?>
        </div>
        <box-icon name='expand-horizontal' rotate='180' color='#4f46e5' ></box-icon>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> - Exercices de Programmation PHP</p>
    </footer>
</body>
</html>