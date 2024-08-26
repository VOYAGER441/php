<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        div{
            max-width: 80%;
            background-color: aquamarine;
            margin: auto;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>this is my first php website</h1>
    <?php
       $age=13;
       if($age<18){
        echo "your are not invited in the party";
       }
       else{
        echo " you are invited in the party";
       }
       echo "<br>";
       $array=array("mainak","ram","sam");
       echo $array[1];
       echo "<br>";
       $length=count($array);
       for ($i=0; $i <$length ; $i++) { 
        # code...
        echo $array[$i]."<br>";
       }
     
    ?>
    </div>


</body>

</html>