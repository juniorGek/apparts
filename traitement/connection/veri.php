<?php
session_start();
if (isset ($_SESSION["Nom"])){
    include("/opt/lampp/htdocs/imm/traitement/connection/conn.php");
}
else{
    header('Location: http://localhost/imm/index.php');
}
?>