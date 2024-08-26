<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove white space</title>
</head>

<body>
    <form method="post">
        <label>Enter a sting</label>
        <input type="text" name="str">
        <input type="submit" value="Submit">
        <input type="reset" value="Clear">
    </form>
    <?php
    if(isset($_POST["str"]))
    {
        $str=$_POST["str"];
        $n=strlen($str);
        $newStr="";
        for ($i=0; $i <$n ; $i++) { 
            # code...
            if($str[$i]==" ")
            {
                continue;
            }
            else{
                $newStr.=$str[$i];
            }
        }
        echo "<h2>Before remove white space: $str</h2>";
        echo "<h2>after remove white space: $newStr</h2>";
    }
    ?>
</body>

</html>