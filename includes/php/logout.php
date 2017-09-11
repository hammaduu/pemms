<?php
session_start();
include("DB/connection.php");
header("Cache-Control: no-store, no-cache, must-revalidate");
if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {

    unset($_COOKIE['username']);
    unset($_COOKIE['password']);

//    setcookie('username', null, time()-3600, '/WASA/wasafsd_user_manager');  // expire with back time 1 hour
//    setcookie('password', null, time()-3600, '/WASA/wasafsd_user_manager');  // expire with back time 1 hour

    setcookie('username', null, time()-3600, '/wasafsd_user_manager');  // expire with back time 1 hour
    setcookie('password', null, time()-3600, '/wasafsd_user_manager');  // expire with back time 1 hour

    setcookie('username', null);  // browser close end
    setcookie('password', null);  // browser close end

    session_unset();
    session_destroy();
    header("location: ../index.php");
    exit;
} else {
//    header("location: ../index.php");
//    echo "Farhan";
    // return false;
}

//$show = new Connection();
//echo $show->closeConnection();

?>