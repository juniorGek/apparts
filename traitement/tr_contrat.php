<?php
include ("/opt/lampp/htdocs/imm/traitement/connection/conn.php");
session_start();
$numa=$_SESSION['avoc'];
$prix=$_SESSION['pttc'];
$name=$_SESSION['name'];
$app=$_SESSION['ap'];
 if (empty($_POST['pay']) || empty($_POST['dat'])){
        echo ('Remplir tous les champs');
 }else{
    $pri=$_POST['pri'];
    $pay=$_POST['pay'];
    $_SESSION['paye']=$pay;
    $date=$_POST['dat'];
    $e=rand(25, 90);
    $i=rand(100, 355);
    $numv=$e.''.$i +$e ;
    $id=$numv-$i;
 }
 $sql="SELECT * FROM Appartement WHERE numAppart= '$app'";
 $result=mysqli_query($link,$sql);
 while ($rows=mysqli_fetch_array($result)){
     $sup=$rows['superficie'];
     $porte=$rows['numerP'];
     $imm=$rows['nomI'];
 }
 $_SESSION['ib']=$imm;
 $_SESSION['paye']=$pay;
 $_SESSION['dats']=$date;
 $descr="superfie=$sup m2".'  '."numero_Porte=$porte";
    
 $enreg="INSERT INTO Vente VALUES('$numv','$app','$name')";
 $sql_enreg="INSERT INTO Contrat VALUES('$id','$descr','$prix','$pay','$date','$numv','$numa')";
    if( mysqli_query($link,$enreg)){
        mysqli_query($link,$sql_enreg);
        header('location: http://localhost/imm/formulaire/frm_reçu.php');
        exit();
    }else{
        header('location: http://localhost/imm/formulaire/frm_contrat.php?error=Verifier bien les infos');
        exit();
    }
?>