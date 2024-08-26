<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check for Lower Case </title>
</head>

<body>
    <form method="post">
        <input type="text" name="text" placeholder="Enter the String">
        <button name="su">Submit</button>
    </form>
    <?php
    // if (isset($_POST['su'])) {
    //     $str = $_POST['text'];
    //     $result = lowerCase($str);
    //     echo $result . '<br>';
    //     if ($result == true) {
    //         echo 'The String is lowercase';
    //     } else {
    //         echo 'The String is not lowercase';
    //     }
    //     //
    // }
    // function lowerCase($str)
    // {
    //     $len = strlen($str);
    //     for ($i = 0; $i < $len; $i++) {
    //         if ($str[$i] == ' ') {
    //             continue;
    //         } elseif ((($str[$i] >= 'a') and ($str[$i] <= 'z'))) {
    //             return true;
    //         }
    //     }
    //     return false;
    // }
    ?>
</body>

</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lowerCase Check</title>
</head>
<body>
    <form method="post">
        <label>Enter the String</label>
        <input type="text" name="str">
        <input type="submit" value="Check">
        <input type="reset" value="Clear">
    </form>
    <?php
    if(isset($_POST["str"]))
    {
        $str=$_POST["str"];
        $result=Lowercase($str);
        if($result==true)
        {
            echo "$str This string is in lowercase";
        }
        else{
            
            echo "$str This string is not in lowercase";
        }
    }
    function Lowercase($str)
    {
        $n=strlen($str);
        for ($i=0; $i <$n ; $i++) { 
            # code...
            if($str[$i]==' ')
            {
                continue;
            }
            elseif((($str[$i]>='a')&&($str[$i]<='z')))
            {
                return true;
            }
        }

        return false;

    }
    ?>
</body>
</html>