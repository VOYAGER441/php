<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Reverse Program </title>
</head>

<body>
    <form method="post">
        <input type="text" name="text1" placeholder="Enter the String">
        <input type="text" name="text2" placeholder="Enter the String">
        <button name="su">Submit</button>
    </form>
    <?php
    // if (isset($_POST["su"])) {
    //     $str1 = $_POST["text1"];
    //     $str2 = $_POST["text2"];
    //     $result = strrev($str1);
    //     echo $result;
    //     $len = strlen($str2);
    //     $result1 = '';
    //     for ($i = $len; $i >= 0; $i--) {
    //         $result1 .= $str2[$i];
    //     }
    //     echo $result1;
    
    // }
    ?>
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Reverse</title>
</head>

<body>
    <form method="post">
        <input type="text" name="text1" placeholder="Enter the String">
        <button name="su">Submit</button>
    </form>

    <?php
    if(isset($_POST["su"]))
    {
        $str=$_POST["text1"];
        $inBuild=strrev($str);
        echo "<h2>Using in-Build method: $inBuild<br></h2>";
        
        $n=strlen($str);
        $strrev="";
        for($i=$n-1;$i>=0;$i--)
        {
            $strrev.=$str[$i];
        }
        echo "<h2>Reverse using loop: $strrev</h2>";
    }
    ?>
</body>
</html>