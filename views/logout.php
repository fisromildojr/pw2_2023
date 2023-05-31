<?php
session_start();

unset($_SESSION["usuario"]);
unset($_SESSION["login"]);
header("Location: views/form_login.php");
