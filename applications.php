<?php
    require_once "db.php";
    if(!empty($_POST['name']) && !empty($_POST['phone']))
    {
        // Отправка запроса на добавление в ДБ
        $stmt = $pdo->prepare("insert into applications(name, phone) values(?,?)");
        $stmt->execute(
            [$_POST['name'], $_POST['phone']
        ]);
    }
    header('Location: index.php');
?>