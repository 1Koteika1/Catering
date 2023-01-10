<?php
    session_start();
    // Подкючение к ДБ
    require_once "db.php";

    // Проверка полей на пустоту
    if(!empty($_POST['name']) && !empty($_POST['login']) && !empty($_POST['password']))
    {
        // Отправка зашифровованого пароля в ДБ
        $text = $_POST['password'];
        for($i = 0; $i < strlen($text); $i++)
        {
          $sbl = ord($text[$i])+4;
          if($sbl > 255)
          {
            $sbl = $sbl - 255;
          }
          $code = $code.chr($sbl);
        }
        // Отправка запроса на добавление в ДБ
        $stmt = $pdo->prepare("insert into users(name, login, password) values(?,?,?)");
        $stmt->execute(
            [$_POST['name'], $_POST['login'], $code
        ]);
    }
    header('Location: index.php');
?>