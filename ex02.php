<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2 - TP PHP</title>
</head>
<body>

    <?php
    $nom = "Mobaligh";
    $prenom = "Tarik";
    $age = 20;
    $formation = "informatique";
    $presentation = "Je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age . " ans et je suis en formation de " . $formation . ".<br>";
    echo $presentation;
    $presentation .= " J'apprends PHP.";
    echo $presentation . "<br><br>";

    $note = 12;
    $Note = 16;

    echo "La valeur de $note est : " . $note . "<br>";
    echo "La valeur de $Note est : " . $Note . "<br>";
    ?>

</body>
</html>