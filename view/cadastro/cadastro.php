
<?php
$path = 'http://' . $_SERVER["HTTP_HOST"] . '/projetoWeb2';
session_start();
if(isset($_SESSION['status'])==true){
    header('Location: ../../index.php');
}
if(isset($_SESSION['emailExistente']) ==true){
    echo "<script>alert('Email ja cadastrado!');</script>";
    unset($_SESSION['emailExistente']);
}
?>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo $path; ?>/arquivos/imagens/ifmscb.png">

    <title>Criar Conta</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="<?php echo $path; ?>/repositorio/cadastro/cadastro.php" method="POST">
      <img class="mb-4" src="<?php echo $path; ?>/arquivos/imagens/ifmscb.png" alt="" width="250" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Criar Conta</h1>
      <label for="inputNome" class="sr-only">Nome</label>
      <input type="name" name="Nome" id="Nome" class="form-control" placeholder="Nome" required="" autofocus="">
      <label for="inputIdade" class="sr-only">Data de Nasc</label>
      <input type="date" name="Idade" id="Idade" class="form-control" placeholder="Data de Nasc" required="" autofocus="">
      
      
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" name="Email" id="Email" class="form-control" placeholder="Email" required="" autofocus="">
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" name="Password" id="Password" class="form-control" placeholder="Senha" required="">
      <label for="sexo" >Sexo: </label>
        <select id="sexo" name="sexo">
        <option value="Feminino">Feminino</option>
        <option value="Masculino" selected>Masculino</option>
        <option value="Outro">Prefiro não identificar</option>
        </select>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button>
      <p class="mt-5 mb-3 text-muted">© 2023</p>
    </form>
  

</body></html>