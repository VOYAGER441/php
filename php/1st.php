<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1st Excrement</title>
</head>

<body>
    <form method="post">
        <input type="text" name="one" placeholder="Enter the 1st number">
        <input type="text" name="two" placeholder="Enter the 2nd number">
        <input type="text" name="three" placeholder="Enter the 3rd number">
        <button name="su">Submit</button>
        <button type="reset">Reset</button>
    </form>
    <?php
    if (isset(($_POST['su']))) {
        $one = $_POST['one'];
        $two = $_POST['two'];
        $three = $_POST['three'];
        $max;
        if ($one > $two && $one > $three) {
            $max = $one;
        } elseif ($two > $one && $two > $three) {
            $max = $two;
        } elseif ($three > $two && $three > $one) {
            $max = $three;
        }

        echo "<h1><b>The Maximum number is $max</b></h1>";
    }
    ?>
</body>

</html>