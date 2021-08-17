<?php

session_start();
unset($_SESSION['status']);
unset($_SESSION['nama']);
unset($_SESSION['cp']);
unset($_SESSION['level']);
unset($_SESSION['id']);
unset($_SESSION['psw']);
session_destroy();

header("location:../../adminpanel");
?>