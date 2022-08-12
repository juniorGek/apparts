<?php
include ("/opt/lampp/htdocs/imm/traitement/connection/conn.php");
session_start();
$aut=$_SESSION['avoc'];
$name=$_SESSION['name'];
    $e=rand(2 , 9);
    $i=rand(25, 55);
    $u=rand(10, 10);
    $numi=$e.''.$i.''.$u;
    $id=$numi - $e;
    $dates=gmdate("y-m-d");
    $cau=$_POST['cause'];

    $sql_enreg="INSERT INTO Desistement VALUES('$numi','$dates','$name','$cau')";
    $sql="INSERT INTO etre_present VALUES('$id','$aut','$numi')";
     mysqli_query($link,$sql_enreg);
     mysqli_query($link,$sql);
     mysqli_close($link);
     header('location: http://localhost/imm/accueil.php');
     exit();

?>