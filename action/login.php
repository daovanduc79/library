<?php
session_start();

//lay du lieu tu form

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    //ket noi csdl
    include_once 'connectDB.php';

    $sql = "SELECT * FROM users WHERE email = ? AND password = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $email);
    $stmt->bindParam(2, $password);
    $stmt->execute();
    $result = $stmt->fetch();

    if ($result) {
        //cho phep di tiep
        $_SESSION['usersLogin'] = $result;
        header('location: ../index.php');
    } else {
        //quay lai trang login va dua ra thong bao
        $_SESSION['errorLogin'] = 'email or password incorrect';
        header('location: ../auth/login.php');
    }
}