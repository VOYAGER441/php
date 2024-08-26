<?php

$login = $_POST["login"];
$password = $_POST["password"];

if ($login === "Calcutta" && $password === "university") {
    header("Location: welcome.html");
    exit();
} else {
    header("Location: sorry.html");
    exit();
}

?>