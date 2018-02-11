<?php
if(!isset($_POST["email"]) || !isset($_POST["lozinka"])){
    exit;
}
if($_POST["email"]==="leon@osijek.hr" && $_POST["lozinka"]==="leon")
{ session_start();
$_SESSION["autoriziran"]="Leon admin";
header("location: prijavadogadaja.php");
}
else{
    header("location: login.php?neuspjelo&email=" . $_POST["email"]);

}

