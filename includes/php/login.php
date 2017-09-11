<?php
session_start();
include("Connection.php");
header("Cache-Control: no-store, no-cache, must-revalidate");

    $myusername=addslashes($_REQUEST['username']);
    $mypassword=addslashes($_REQUEST['password']);


        $sql = "SELECT * FROM tbl_user_login WHERE username = '".$myusername."' AND password = '".$mypassword."'";

        $result = pg_query($sql);
        $count = pg_num_rows($result);
        if($count == 1)
        {
            $row = pg_fetch_array($result);
            setcookie('username', md5($myusername), time() + 60 * 60 * 24 , '/pemms', '', 0);  // 60*60*24= 1 day
            setcookie('password', md5($mypassword), time() + 60 * 60 * 24 , '/pemms', '', 0);  // 60*60*24= 1 day

            $paswrd = $row['password'];
            $user = $row['username'];

            $time = time();

            $_SESSION['start'] = $time;

            $_SESSION['password'] = $paswrd;
            $_SESSION['username'] = $user;

            if($user == 'adeel'){
                header("Location:../../pemms.php");
            }elseif($user == 'client'){
                header("Location:../../consultant.php");
            }

        }
        else
        {
            header("location:../../index.php");
        }
?>