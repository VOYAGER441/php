<!-- Write a program using HTML,PHP asks user to input some text with label 
“Enter your text:” and on submit display the text after removing every 
digit and white spaces.
You may use any suitable library function to perform the task. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="math.php" method="post">
        <label>Enter the radius of the circle</label>
        <br>
        <input type="text" name="te" placeholder="Enter here">
        <br>
        <button type="submit" name="su">Submit</button>
    </form>
</body>
</html>
<?php
    $radius=$_POST["te"];

    // $output = preg_replace('/[0-9\s]+/', '', $text);
    // // $length=strlen(trim($text));
    // // $halfLength=ceil($length/2);
    // // $final=substr($text,0,$halfLength);

    // // // echo $length;
    //  echo"<br>";
    // echo $output;
    $c=round((2*pi()*$radius),3);
    $a=round((pi()*pow($radius,3)),3);
    $v=round((4/3*$a),3);
    echo "The circumference of circle is {$c}<br>";
    echo "The area of circle is {$a}<br>";
    echo "The volume of circle is {$v}<br>";

    

?>