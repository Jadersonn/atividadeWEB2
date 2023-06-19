<?php
try{
    $conexao = new PDO("mysql:host=localhost; dbname=projetoweb2","root","");
}catch(PDOException $e){
    die("Ocorreu um erro inesperado " . $e->getMessage());
}


session_start();

try{
    $email = $_POST['Email'];
    $senha = $_POST['Password'];

    $sql = "select * from pessoa where emailInstitucional = '" . $email . "'";
    $resultado = $conexao->query($sql);
    if ($resultado->rowCount() > 0) {
        $pessoa = $resultado->fetch();
        if ($pessoa['senha'] == $senha) {
            $_SESSION["login"] = $login;
            $_SESSION["nome"] = $pessoa['nome'];
            $_SESSION["status"] = true;
        }else{
            $logado = false;
            $_SESSION["tentativa"] = true;
        }
    } else {
    $logado = false;
    $_SESSION["tentativa"] = true;
    }
    } catch (PDOException $e) {
    echo "Inserido com sucesso." . $sql . " --------- " . $e->getMessage();
    }
    if($logado){
        
        header('Location: ../../index.php');
    }else{
        header('Location: ../../view/login/logar.php');
    }   

?>