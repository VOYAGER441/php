<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome</title>
</head>

<body>
    <form method="post">
        <input type="text" name="text" placeholder="Enter the string">
        <button name="bt">Submit</button>

    </form>
    <?php
    // if (isset($_POST['bt'])) {
    //     $st = $_POST['te'];
    //     if ($st === strrev($st)) {
    //         echo '<br>palindrome';
    //     } else {
    //         echo '<br>not palindrome';
    //     }
    // }
    // if(isset(($_POST['bt'])))
    // {
    //     $str=$_POST['text'];
    //     $len=strlen($str);
    //     $revStr='';
    //     for($i=$len;$i>=0; $i--)
    //     {
    //         $revStr.=$str[$i];
    //     }
    //     if($str==$revStr)
    //     {
    //         echo 'palindrome';
    //     }
    //     else{
    //         echo 'not palindrome';
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
    <title>Palindrome Check</title>
</head>

<body>
    <form method="post">
        <label>Enter the string</label>
        <input type="text" name="str">
        <input type="submit" value="Submit">
        <input type="submit" value="Clear">
    </form>
    <?php
    if (isset($_POST["str"])) {
        $str = $_POST["str"];
        $strrev = "";
        $n = strlen($str);
        for ($i = $n - 1; $i >= 0; $i--) {
            # code...
            $strrev.=$str[$i];
        }
        // echo "$strrev";
        // echo "$str";
        if($strrev==$str){
            echo "<h2>$str is a palindrome</h2>";
        }
        else{
            echo "<h2>$str is not a palindrome</h2>";

        }
    }
    ?>
</body>

</html>