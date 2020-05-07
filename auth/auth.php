<?php
session_start();

if (!isset($_SESSION['usersLogin'])) {
    header('location: auth/login.php');
}