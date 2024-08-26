<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>
</head>
<body>
    <?php
    $x="mainak";
    var_dump($x );
    echo "<br>";
    $y=984379237;
    var_dump(($y));
    echo "<br>";
    $z=3.14;
    var_dump(($z));
    echo "<br>";
    $a=$b=$c=' mainak ';
    echo $a;
    echo $b;
    echo $c;
    echo "<br>";
    echo "<br>";
    echo "<br>";
    function myFun(){
        $xr=10;
        echo $xr;
    }
    myFun();

    echo "<br>";
    echo "<br>";
    echo "<br>";
    $xr=5;
    $rx=10;
    function myFun1(){
       global $xr,$rx;
        $xr=$xr+$rx;
    }
    myFun1();
    echo $xr;
    // echo $xr;

    ?>
</body>
</html>