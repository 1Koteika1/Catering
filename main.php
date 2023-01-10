<?php
    session_start();
    require_once 'db2.php';

    $sql="SELECT * FROM `products` ";
    $result=$connect->query($sql);
    $out=$result->fetch_all(MYSQLI_ASSOC);

    $count=count($out);

    $random= rand(0,$count);

    $array_title = array();
    $array_img = array();

    while (count($array_img)<3 && count($array_title)<3)
	{
        $random= rand(0,$count);
        
        $result_title=$out[$random]['name'];
        if (!in_array($result_title, $array_title) && $result_title!=NULL) 
        {
            array_push($array_title, $result_title);
        }
        $result_img=$out[$random]['image'];
        if(!in_array($result_img, $array_img) && $result_img!=NULL)
        {
            array_push($array_img, $result_img);
        }
    }
    for ($i = 0; $i<count($array_title); $i++) {
        $array[$array_title[$i]] = $array_img[$i];
    }
    if(isset($_GET['id']) ){
        $id=$_GET['id'];
        $sql = "SELECT * FROM `products` WHERE id=".$id;
        
        $result=$connect->query($sql);
        $out=$result->fetch_all(MYSQLI_ASSOC);
    }
?>