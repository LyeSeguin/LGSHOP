<?php
if(isset($_GET['erro'])){
    if($_GET['erro'] == 1){
        $erro = "Acesso Negado!";
    }else if($_GET['erro'] == 2){
        $erro = "E-mail ou senha inválidos!";
    }else if($_GET['erro'] == 3){
        $erro = "Logout realizado com sucesso!";
    }
}else{
    $erro = "";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Dashboard </title>

   <!-- MATERIALIZE --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
            
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</head>
<body>
    <main class="container">
    
    <form action="db/verifica_login.php" method="post" class="row">
        <div class="col m12 s10" style="padding-left: 180px; margin-top: 50px;">
            <h3 class="pink-text text-lighten-3">Bem-Vindo(a) Administrador(a)!</h3>
        </div>

        <div class="input-field col offset-m3 m6 s12" style="margin-top: 70px;">
            <input type="text" name="login" id="login">
            <label for="login">E-mail</label>            
        </div>
        <div class="input-field col offset-m3 m6 s12">
            <input type="password" name="senha" id="senha">
            <label for="senha">Senha</label>   
        </div>
        <div class="input-field col offset-m3 m6 s12">
            <span id="error"><?php echo $erro; ?></span> <br>
            <button class="waves-effect waves-light btn pink lighten-2">Enviar</button>       
    </form>
    
    </main>
    <script src="assets/materialize/js/materialize.min.js"></script>
</body>
</html>