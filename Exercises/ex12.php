<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'adresse client</title>
    <link rel="stylesheet" href="exercice_style.css">
</head>
<body>
<header>
    <h1> Adresse de client</h1>
    <p> Remplissez le formulaire et il vous sera affiché sous forme de tableau</p>
    <a href="../librairie.php"> Précedent </a>
</header>    

<?php

$resultat = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $resultat = [
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'adresse' => $_POST['adresse'],
        'ville' => $_POST['ville'],
        'code_postal' => $_POST['code_postal']
    ];
}
?>

<div class= "container">
<form method="post" action="">
    <fieldset>
        <legend>Adresse client</legend>
        
        <div>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" required>
        </div>
        
        <div>
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" required>
        </div>
        
        <div>
            <label for="adresse">Adresse :</label>
            <input type="text" name="adresse" id="adresse" required>
        </div>
        
        <div>
            <label for="ville">Ville :</label>
            <input type="text" name="ville" id="ville" required>
        </div>
        
        <div>
            <label for="code_postal">Code Postal :</label>
            <input type="text" name="code_postal" id="code_postal" required>
        </div>
        
        <button type="submit">Envoyer</button>
    </fieldset>
</form>
</div>

<?php if ($resultat !== ''): ?>
<div class="result">
    <table border="1">
        <tr>
            <th>Champ</th>
            <th>Valeur</th>
        </tr>
       
        <?php foreach ($resultat as $key => $value): ?>
        <tr>
            <td><?php echo ucfirst(str_replace('_', ' ', $key)); ?></td>
            <td><?php echo htmlspecialchars($value); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
<?php endif; ?>
</body>
<footer>
    <p>&copy; <?php echo date('Y'); ?> - Exercices de Programmation PHP</p>
</footer>
</html>
