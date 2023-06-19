<?php
try{
    $conexao = new PDO("mysql:host=localhost; dbname=projetoweb2","root","");
}catch(PDOException $e){
    die("Ocorreu um erro inesperado " . $e->getMessage());
}


try{
    $nome = $_POST['Nome'];
    $idade =$_POST['Idade'];
    $email = $_POST['Email'];
    $senha = $_POST['Password'];
    $sexo = $_POST['sexo'];
    $dataEntrada = date('Y/m/d');
    
    $sql = "select * from pessoa where emailInstitucional = '$email'";
    $resultado = $conexao->query($sql);
    if ($resultado->rowCount() > 0) {
        $pessoa = $resultado->fetch();
        session_start();
        $_SESSION['emailExistente'] = true;
        header('Location: ../../view/cadastro/cadastro.php');
    }else{
        $sql = "insert into pessoa (nome,idade,emailInstitucional,senha, sexo,dataEntrada) values ('$nome','$idade','$email','$senha','$sexo','$dataEntrada')";
        $conexao->exec($sql);
        header('Location: ../../view/login/logar.php');
    }

    } catch (PDOException $e) {
        echo "Inserido com sucesso." . $sql . " --------- " . $e->getMessage();
    }

?>