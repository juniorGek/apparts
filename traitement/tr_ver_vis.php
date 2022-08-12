<?php
    include ("/opt/lampp/htdocs/imm/traitement/connection/conn.php");
    session_start();
    $decision=$_SESSION['deci'];
    $im=$_SESSION['imm'];
    if ($decision=='desiré'){
        
        $sql="SELECT prixPrev FROM Appartement WHERE nomI= '$im'";
        $result=mysqli_query($link,$sql);
        while ($rows=mysqli_fetch_array($result)){
            $pri=$rows['prixPrev'];
        }
        $_SESSION['prix']=$pri;
        header('location: http://localhost/imm/formulaire/frm_prom.php');
        exit();

    }else
    {
        header('location: http://localhost/imm/formulaire/frm_cont.php?error=Impossible de faire une promesse');
        exit();
    }
?>