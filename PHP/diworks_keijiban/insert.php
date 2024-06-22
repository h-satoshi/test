<?php

mb_internal_encoding("utf8");

if($_POST["hondlename"]=="" || $_POST["taitle"]=="" || $_POST['comments'] == "") {

    header("Location:http://localhost/diworks_keijiban/index.php");

}else{

    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");

    $pdo ->exec("insert into diworks_keijiban(hondlename,taitle,comments)
        values('".$_POST['hondlename']."','".$_POST['taitle']."','".$_POST['comments']."');");
    
    header("Location:http://localhost/diworks_keijiban/index.php");

}

?>