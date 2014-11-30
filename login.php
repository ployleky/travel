<?php

session_start();

// var_dump($_GET);
// var_dump($_SESSION);

if (isset($_POST)) {

    // var_dump($_POST);

    include 'include/connect.php';

    $sql = 'SELECT * FROM user_admin 
            WHERE username = "'.$_POST['username'].'"
            AND password = "'.$_POST['password'].'"';
    $resule = mysql_query($sql);
    // var_dump($resule);
    $rows = mysql_num_rows($resule);
    $data = mysql_fetch_assoc($resule);
    // var_dump($data);

    if ($rows == 0) {
        echo 'Incorrect username/password.';
    } else {
        $_SESSION['user'] = $data;
        // var_dump($_SESSION);
        header('location: dashboard.php');
    }
}