<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <h1>table de multiplication</h1>
        <?php
            $nomber=7;
            for($i=1;$i<=10;$i++){
                echo $nomber . "X" . $i . "=" . $nomber*$i . "<br>";
            }
        ?>
    </section>
    <section>
        <h2>triangle de stars</h2>
        <?php
            for($i=0 ; $i<7; $i++){
                echo "<br>";
                for($j=0 ; $j<$i; $j++){
                    echo "*";
                }
            }
        ?>
    </section>
</body>
</html>