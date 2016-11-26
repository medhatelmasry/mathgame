<?php
session_start();
extract($_POST);
if (strcmp($email, "a@a.a")==0 && strcmp($password, "aaa")==0) {
    $_SESSION["authenticated"] = 1;
    header("Location: index.php");
} else {
    $msg = "Invalid login credentials.";
    header("Location: login.php?msg=$msg");
}
?>