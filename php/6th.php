<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Sort</title>
</head>
<body>

    <form method="post">
        <label for="size">Enter the number of elements:</label>
        <input type="number" id="size" name="size" min="1" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    // function bubbleSort(array &$arr): void {
    //     $n = count($arr);
    //     for ($i = 0; $i < $n - 1; $i++) {
    //         for ($j = 0; $j < $n - $i - 1; $j++) {
    //             if ($arr[$j] > $arr[$j + 1]) {
    //                 // Swap elements
    //                 [$arr[$j], $arr[$j + 1]] = [$arr[$j + 1], $arr[$j]];
    //             }
    //         }
    //     }
    // }
    
    // if (isset($_POST['size'])) {
    //     // Retrieve the number of elements
    //     $size = (int) $_POST['size'];
    
    //     // Generate HTML form dynamically for elements input
    //     echo '<form method="post">';
    //     echo '<input type="hidden" name="size" value="' . htmlspecialchars($size) . '">';
    //     for ($i = 0; $i < $size; $i++) {
    //         echo '<label for="element' . $i . '">Enter element ' . ($i + 1) . ':</label>';
    //         echo '<input type="number" id="element' . $i . '" name="elements[]" required><br>';
    //     }
    //     echo '<input type="submit" value="Sort">';
    //     echo '</form>';
    // } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['elements'])) {
    //     // Retrieve the elements
    //     $numbers = array_map('intval', $_POST['elements']);
    
    //     // Sort the array
    //     bubbleSort($numbers);
    

    //     // Display the sorted array
    //     echo '<h2>Sorted array:</h2>';
    //     echo '<pre>' . print_r($numbers, true) . '</pre>';
    // }
    ?>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting</title>
</head>

<body>
    <form method="post">
        <label>Enter the range of the array</label>
        <input type="text" name="range"><br>
        <label>Enter the element of the array(separated by space)</label>
        <input type="text" name="ele" required><br>
        <input type="submit" value="Submit" name="su">
        <input type="reset" value="Clear">
    </form>
    <?php
    function bubbleSort(&$array,$n)
    {
        for ($i=0; $i <$n ; $i++) { 
            # code...
            for ($j=$i+1; $j < $n; $j++) { 
                # code...
                if($array[$i]>$array[$j])
                {
                    $temp=$array[$i];
                    $array[$i]=$array[$j];
                    $array[$j]=$temp;
                }
            }
        }

    }
    function print_array($array,$n){
        for ($i=0; $i <$n ; $i++) { 
            # code...
            echo "$array[$i] ";
        }
        echo"<br>";
    }
    if(isset($_POST["su"]))
    {
        $n=$_POST["range"];
        $element=$_POST["ele"];
        // convert into array but in sting format
        $array=explode(' ',$element);
        if(count($array)==$n){
            //again convert into array but in int format
            $array=array_map('intval',$array);
            echo "The array before sorting: ";
            print_array($array,$n);
            bubbleSort($array,$n);
            echo "The array after sorting: ";
            print_array($array,$n);
        }
    }
    ?>

</body>

</html>