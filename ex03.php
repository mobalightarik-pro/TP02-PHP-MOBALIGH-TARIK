<?php
    const TAUX_TVA = 20;
    const DEVISE ="MAD";
    $HT = 60;
    $quantity = 3;
    $total = $HT * $quantity;
    $TVA = $total * TAUX_TVA / 100;
    $TTC = $total + $TVA;
    $TTC += 15;
    $a=defined(TAUX_TVA);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice3</title>
</head>
<body>
    <p>HT: <?php echo $HT; ?></p>
    <p>Quantity: <?php echo $quantity; ?></p>
    <p>Total: <?php echo $total; ?></p>
    <p>TVA: <?php echo $TVA; ?></p>
    <p>TTC: <?php echo $TTC; ?></p>
</body>
</html>