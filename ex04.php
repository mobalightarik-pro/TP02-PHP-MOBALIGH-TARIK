<?php
    $a = '42';
    $b = "42";
    $c = '15.8';
    $d = true;
    $e = false; 
    $f = null;  
 
    $a = (int)$a;
    $b = (int)$b;
    echo $b; 
    echo "<br>";

    $c = (float)$c;   
    echo $c; 
    echo "<br>";

    echo $d ? 'true' : 'false';
    echo "<br>";
    echo $e; 
    echo "<br>";

    var_dump($d); 
    echo "<br>";
    var_dump($e); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice4</title>
</head>
<body>
    <pre>
        <?php
        var_dump($a);
        var_dump($b);
        var_dump($c);
        var_dump($d);
        var_dump($e);
        var_dump($f);
        ?>
    </pre>
</body>
</html>