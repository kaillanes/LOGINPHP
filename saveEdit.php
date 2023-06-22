<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $doenca = $_POST['doenca'];
        $raca = $_POST['raca'];
        $tutor = $_POST['tutor'];
        $endereco = $_POST['endereco'];
        
        $sqlInsert = "UPDATE usuarios 
        SET nome='$nome',senha='$senha',telefone='$telefone',raca='$raca',doenca='$doenca',tutor= '$tutor',endereco='$endereco'
        WHERE id=$id;";
        
        $con=conectaBD();
        $stm= $con->prepare($sqlInsert);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    }
    header('Location: sistema.php');

?>