<?php
    session_start();
    require_once "db.php";
    
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);

    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    

    if(!empty($pass) && !empty($login))
    {
        $code = "";
        $stmt = $pdo->query("SELECT * FROM `users` WHERE `login` = '$login'");
        $stmt1 = $stmt->fetchAll();
        $getpass = $stmt1[0]['password'];
        for($i = 0; $i < strlen($getpass); $i++)
        {
            $sbl = ord($getpass[$i])-4;
            if($sbl > 255)
            {
            $sbl = $sbl - 255;
            }
            $code = $code.chr($sbl);
        }
        if($code == $pass){
            header("Location: index.php");
            // $_SESSION["user"]=$username;
            $_SESSION['user'] = [
                'role-id' => $stmt1[0]["role_id"],
                'user' => $stmt1
            ];
        }
        else{
            echo "<script>alert();</script>";
            header("Location: auth.php");
        }
    }
    
    //$result = $mysql->query("SELECT * FROM `tabl` WHERE `FIO` = '$login' AND `passHash` = '$pass'");
?>