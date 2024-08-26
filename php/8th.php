<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sub string</title>
</head>

<body>
    <form method="post">
        <table>
            <tr>
                <td>Enter the string:</td>
                <td><input type="text" name="str"></td>
            </tr>
            <tr>
                <td>Enter the sub-string:</td>
                <td><input type="text" name="subStr"></td>
            </tr>
            <tr>
                <td><input type="submit" name="su"></td>
                <td><input type="reset" name="cl"></td>
            </tr>
        </table>
    </form>
    <?php
    function subString($str, $subStr)
    {
        $n1 = strlen($str);
        $n2 = strlen($subStr);
        for ($i = 0; $i <= $n1 - $n2; $i++) {
            $flag = true;
            for ($j = $i; $j < $i + $n2; $j++) {
                if ($str[$j] != $subStr[$j - $i]) {
                    $flag = false;
                    break;
                }
            }
            if ($flag == true) {
                break;
            }
        }
        return $flag;
    }
    if (isset($_POST["su"])) {
        $str = $_POST["str"];
        $subStr = $_POST["subStr"];
        echo "<br>This is using build-in method<br>";
        if (strpos($str, $subStr) !== false) {
            echo "$str is the sub string of $subStr";
        } else {
            echo "$str is not the sub string of $subStr";

        }
        echo "<br><br>This is using custom function method<br>";
        if (subString($str, $subStr) == true) {
            echo "$str is the sub string of $subStr";

        } else {
            echo "$str is not the sub string of $subStr";

        }

    }
    ?>

</body>

</html>