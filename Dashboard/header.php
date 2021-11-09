<?php
    require_once("bloqueio.php"); 
     //barra de pesquisa
    /* $pesquisar = $_POST['pesquisar'];
    $result_pdt = "SELECT * FROM produtos WHERE nome LIKE '%$pesquisar%' order by data";
    $resultado_prod = mysqli_query($con, $result_pdt);
    while($rows_prod = mysqli_fetch_array($resultado_prod)){
        echo "Nome do Produto: ".$rows_prod['nome']."<br>"; } */
    
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Dashboard </title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--MATERIALIZE-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">     
</head>

<body>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script src="assets/materialize/js/materialize.min.js"></script>
<script>
    //ativa o menu lateral
$(function(){
    $(".button-collapse").sideNav();
 });
 </script>
 <!-- dentro da nav se encontram todos os componentes do menu -->
    <nav style="background-color:#f8bbd0;">  
    <div class="nav-wrapper">
            <a href="home.php" class="brand-logo" style="color:black;">Painel do Administrador</a>
             <a href="#" data-activates="menu-mobile" class="button-collapse">
             <i class="material-icons">menu</i>
            </a>
            <ul class="right hide-on-med-and-down">
            <li><a href="http://localhost/TMD/indextest.php" target="blanc" style="color:black;">L&G Shop</a></li>
            <li><a href="cadastro_tarefa.php" style="color:black;">Cadastrar Produto</a></li>
            <li><a href="home.php" style="color:black;">Listar Produtos</a> </li>
            <li><a href="db/sair.php" style="color:black;">Sair</a></li>
            <li><a style="color:black;">Olá, <?= $_SESSION['nome']?></a></li>
            </ul>
           <ul class="side-nav" id="menu-mobile">
            <li><a href="http://localhost/TMD/indextest.php" target="blanc">L&G Shop</a></li>
            <li><a href="cadastro_tarefa.php">Cadastrar Produto</a></li>
            <li><a href="home.php">Listar Produtos</a> </li>
            <li><a href="db/sair.php">Sair</a></li>
            </ul>
        </div>    
    </nav>

</body>
    