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
    <h1> Immobilier </h1>
    <p> choisissez l'option souhaitez et remplissez le formulaire </p>
    <a href="../librairie.php"> Précedent </a>
</header>  
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'vendre':
                header('Location: vendre.php');
                break;
            case 'acheter':
                header('Location: acheter.php');
                break;
            case 'louer':
                header('Location: louer.php');
                break;
        }
        exit;
    }
}
?>
 <div class="container">
<form method="post" action="">
    <div class="button-group">
        <button type="submit" name="action" value="vendre">Vendre</button>
        <button type="submit" name="action" value="acheter">Acheter</button>
        <button type="submit" name="action" value="louer">Louer</button>
    </div>
</form>
   </div>
</body>
<footer>
    <p>&copy; <?php echo date('Y'); ?> - Exercices de Programmation PHP</p>
</footer>
</html>