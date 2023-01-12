<?php
session_start();
// Lancement de la session 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list en php</title>
</head>
<body>

<h1> TO DO LIST EN PHP </h1>

<form method="post">
    <input type="text" name="Tache">
    <input type="submit" value="Insérer une tâche">
</form>

<?php

//Je vérifie si la variable session tache existe 
if (!isset($_SESSION['Tache'])) {
    
    $_SESSION['Tache'] = array();
}

// Je regarde si le formulaire à bien été saisis 

if (isset($_POST['Tache'])) {
    
    array_push($_SESSION['Tache'], $_POST['Tache']);
}

// J'uttilise une boucle pour afficher les taches 
foreach ($_SESSION['Tache'] as $tache) {
    echo $tache . "<br>";
}




?>

<input class="card-link" name="delete" type="submit" value="supprimer">



</body>
</html>


