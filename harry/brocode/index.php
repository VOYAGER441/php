<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <!-- <div class="form">
    <form action="index.php" method="post">
        <label>Username</label><br>
        <input type="text" name="username"><br>
        <label>Password</label><br>
        <input type="password" name="password"><br>
        <button type="submit">submit</button>
        <button type="reset">reset</button>
    </form>
    </div> -->
    <div class="form">
    <form action="index.php" method="post">
        <label>Quantity</label>
        <br>
        <input type="text" name="quantity">
        <br>
        <button type="submit" name="su">Order Now</button>
    </form>
    </div>
</body>

</html>
<?php
// echo $_POST["username"] . "<br>";
// echo $_POST["password"] . "<br>";
$items="Biryani";
$prise=120;
$quantity=$_POST["quantity"];

echo "you order {$quantity} {$items} ";
echo "<h2><br>And the total bill is ".$prise*$quantity." <h2>" ;
?>