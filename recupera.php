<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de Senha</title>
</head>
<body>
<div>
    <h1>Bem vindo a área de recuperação de senha</h1>
    <form action="status.php" method = "post" class="login">
   <h4>Email: <input type="email" name= "email" minlength="10" maxlength="50" placeholder="Insira o email cadastrado" required></h4> 
   <h4>Telefone: <input type="telefone" name= "tel" placeholder="(DDD)XXXXX-XXXX" required></h4>
    <input  class="botao" type="submit" name= "entrar" value = "Entrar">
    <p></p>
    </form>
    Ainda não tem cadastro? <a href="cadastro.php">Acesse Aqui</a> <br>
    Deseja retornar a tela incial?<a href="index.php"> Home</a><br>
   </div>
   <img src="logo2.jpg" alt="logomarca">

</body>
</html>
