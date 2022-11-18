<?php

session_start();

if (!isset($_SESSION['status_login'])) {
    header("Location:login.php");
}
