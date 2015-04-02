<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["nom"]);
  $mail = test_input($_POST["email"]);
  $pass = test_input($_POST["password"]);
  $telephone = test_input($_POST["phone"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

    $mail = $_POST["email"];
    $pass = $_POST["password"];
    if($mail == "od@ile.nc"&& $pass == "fufu" ){
        echo ("Come in ".$name."!");
    }
    else {
        echo ("You stay out !!");
    }
?>