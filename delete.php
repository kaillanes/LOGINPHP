<?php
    include_once("config.php");

    $id = $_GET['id'];
    if(!empty($_GET['id']))
    {

        $con=conectaBD();
        $sql="DELETE FROM usuarios WHERE id=?";
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stm=$con->prepare($sql);
        $stm->bindParam(1,$id);
        $stm->execute();

    }
    header('Location: sistema.php');
?>