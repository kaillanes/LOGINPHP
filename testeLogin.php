<?php
    session_start();
    // print_r($_REQUEST);
    if(!empty($_POST['nome']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        $con=conectaBD();
   
        $sql = "SELECT * FROM usuarios WHERE nome = ? AND senha = ?";
        $stm= $con->prepare($sql);
        $stm->bindParam(1,$nome);
        $stm->bindParam(2,$senha);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        
       
        if (count($result) > 0) {
            header('Location: sistema.php');
        } else {
            echo "<script>alert('Usuario invalido, verifique suas credenciais ou inscreva-se!');</script>";
            header('Location: login.php');
        }
    }
?>