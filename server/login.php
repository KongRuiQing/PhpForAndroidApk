<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    if(!isset($_POST['username'],$_POST['userpwd']))
    {
        exit();
    }

    $username = $_POST['username'];
    $userpwd  = $_POST['userpwd'];

    $userxml = simplexml_load_file("./../xmlconfig/server.xml");
    
    foreach ($userxml->user as $var) {
        if ($var->username == $username and $var->userpwd == $userpwd) 
        {
            $_SESSION['login'] = [
                'username' => $username,
                'userpwd' => $userpwd
            ];
            header("Location: ../main.php"); 
            exit();
        }
    }
    echo "login failer";

?>