<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2nd Experiment: Prime Check</title>
</head>

<body>
    <form method="post">
        <input type="text" name="text" placeholder="Enter the number">
        <button type="submit" name="su">Submit</button>
    </form>
    <?php
    // if (isset($_POST['su'])) {
    //     $n = $_POST['text'];
    //     $u = (int) sqrt($n);
    //     for ($i = 2; $i <= $u; $i++) {
    //         if ($n % $i == 0) {
    //             break;
    //         }
    //     }
    //     if ($i > $u) {
    //         echo "$n is prime number";
    //     } else {
    //         echo "$n is non-prime number";
    //     }
    // }
    ?>
</body>

</html> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2nd Experiment:Prime Check</title>
</head>

<body>
    <form method="get">
        <label>Enter the number:</label>
        <input type="text" name="n1">
        <input type="submit" value="Submit">
        <input type="reset" value="Clear">
    </form>
    <?php
    if (isset($_GET["n1"])) {
        $n=$_GET["n1"];
        $root=(int)sqrt($n);
        // $n1=$n;
        for($i=2;$i<=$root;$i++)
        {
            if($n%$i==0)
            {
                break;
            }
        }
        if($i>$root)
        {
            echo "<h1>Entered Number $n is prime </h1>";
        }
        else{
            echo "<h1>Entered Number $n is not prime </h1>";
        }
    }
    ?>
</body>

</html>