<?php

session_start();
//$_POST["username"]=="Davide"

if ($_POST["password"]=="a")
  {
    $_SESSION["utente"]=htmlspecialchars($_POST["username"]);
    header("Location: /index.php");
    die();
  }
else {
  header("Location: /login.php");
}



?>
