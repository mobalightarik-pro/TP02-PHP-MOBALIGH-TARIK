<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $notes = [
        "Amine" => 12,
        "Sara" => 16,
        "Youssef" => 8,
        "Lina" => 14,
        "Adam" => 10
    ];

    $somme_notes = 0;
    $nombre_etudiants = count($notes);
    $etudiants_valides = 0;
    
    $meilleure_note = -1;
    $meilleur_etudiant = "";
    ?>

    <table>
        <thead>
            <tr>
                <th>Étudiant</th>
                <th>Note (/20)</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($notes as $etudiant => $note) {

                $somme_notes += $note;
                if ($note >= 10) {
                    $statut = "Validé";
                    $classe_css = "valide";
                    $etudiants_valides++;
                } else {
                    $statut = "Non validé";
                    $classe_css = "non-valide";
                }
                if ($note > $meilleure_note) {
                    $meilleure_note = $note;
                    $meilleur_etudiant = $etudiant;
                }

                echo "<tr>";
                echo "<td>$etudiant</td>";
                echo "<td>$note</td>";
                echo "<td class='$classe_css'>$statut</td>";
                echo "</tr>";
            }

            $moyenne = $somme_notes / $nombre_etudiants;
            ?>
        </tbody>
    </table>
</body>
</html>