<?php  require_once("headersite.php");?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
 <script>
  //ativa o botão flutuante das redes sociais
   $(document).ready(function(){
    $('.fixed-action-btn').floatingActionButton();
  })
 </script>
 <!-- nav vem de navbar que significa barra de navegação -->
 <!-- dentro da nav se encontram todos os componentes do menu -->
  <nav class="col s12 m6 l3" style="background-color:#F1B5C0;">
  <div class="nav-wrapper">
  <!-- assim que a tela diminuir irá aparecer o botão mobile do menu -->  
  <a href="#" data-activates="menu-mobile" class="button-collapse">
      <i class="material-icons" style="color: black;">menu</i>
  </a>
<!-- o comando UL forma uma lista, todos os componentes da nav foram feitos em formato UL -->
    <ul id="nav-mobile" class=" left hide-on-med-and-down" style="text-align: center; display: flex;"> 
      <li>
        <a href="indextest.php" style="color: black; font-size: 20px;"><img class="responsive-img" src="Imagens/home.png" width="22%" height="50%" style="margin-right: 10px;">Home</a>
      </li>
       <li>
        <a href="aliancas.php"style="color: black; font-size: 20px;"> <img class="responsive-img" src="Imagens/ring.png" width="22%" height="50%"> Alianças </a>
      </li>
      <li>
        <a href="brincos.php" style="color: black; font-size: 20px;"> <img class="responsive-img" src="Imagens/brinco.png" width="30%" height="20%"> Brincos </a>
      </li>
       </ul>
       <!-- a função target="_blanc" faz com que ao ser clickado o usuário seja redirecionado para uma nova página -->
        <a href="Dashboard/index.php" target="_blanc" style="justify-content: center;" class="center brand-logo"> <img class="responsive-img" src="Imagens/logo.png"> </a>
       <ul id="nav-mobile" class=" right hide-on-med-and-down" style="text-align: center; display: flex;">
           <li>
        <a href="colares.php" style="color: black; font-size: 20px;"> <img class="responsive-img" src="Imagens/colares.png" width="25%" height="50%"> Colares </a>
      </li>
      <li>
        <a href="pulseiras.php" style="color: black; font-size: 20px;"> <img class="responsive-img" src="Imagens/pulseira.png" width="22%" height="50%"> Pulseiras </a>
      </li>
      <li>
        <a href="relogios.php" style="color: black; font-size: 20px;"><img class="responsive-img" src="Imagens/relogio.png" width="25%" height="50%"> Relógios </a>
      </li>
    </ul> 

    <!-- menu mobile -->
    <ul class="side-nav" id="menu-mobile">
      <li style="background-color:pink;">
        <center> <font color="black">Bem-Vindo(a)!</font></center>
      </li>
      <li class="divider"></li>
       <li>
        <a href="indextest.php"><img class="responsive-img" src="Imagens/home.png" width="10%" height="20%" style="margin-right: 10px;">Home</a>
      </li>
       <li>
        <a href="aliancas.php"> <img class="responsive-img" src="Imagens/ring.png" width="10%" height="20%"> Alianças </a>
      </li>
      <li>
        <a href="brincos.php"> <img class="responsive-img" src="Imagens/brinco.png" width="10%" height="20%"> Brincos </a>
      </li>
       <li>
        <a href="colares.php"> <img class="responsive-img" src="Imagens/colares.png" width="10%" height="20%"> Colares </a>
      </li>
      <li>
        <a href="pulseiras.php"> <img class="responsive-img" src="Imagens/pulseira.png" width="10%" height="20%"> Pulseiras </a>
      </li>
      <li>
        <a href="relogios.php"><img class="responsive-img" src="Imagens/relogio.png" width="10%" height="20%"> Relógios </a>
      </li>
      <li class="divider"></li>
      <li style="background-color:pink;">
        <center> <font color="black"> Redes Sociais: </font></center>
      </li>
      <li>
        <a href="https://api.whatsapp.com/send?phone=5541987945497&text=Gostaria%20de%20saber%20mais%20a%20respeito%20do%20seu%20trabalho!" target="_blanc"> <img class="responsive-img" src="Imagens/whatsapp.png" width="10%" height="20%" style="margin-right: 10px;">WhatsApp </a>
      </li>
      <li>
        <a href="https://www.instagram.com/lgshop_oficial/" target="_blanc"> <img class="responsive-img" src="Imagens/insta.png" width="10%" height="20%" style="margin-right: 10px;">Instagram </a>
      </li>
      <li>
        <a href="https://www.facebook.com/LGShopOficial" target="_blanc"> <img class="responsive-img" src="Imagens/face.png" width="10%" height="20%" style="margin-right: 10px;"> Facebook </a>
      </li>
            </ul>
  </div>
</nav>
<!-- essa divisão fixa o botão flutuante das redes sociais a estar na parte inferior direita -->
<div class="fixed-action-btn">
  <a class="btn-floating btn-large pink lighten-2 pulse">
    <i class="large material-icons">chat</i>
  </a>
  <ul>
    <li><a class="btn-floating green" href="https://api.whatsapp.com/send?phone=5541987945497&text=Gostaria%20de%20saber%20mais%20a%20respeito%20do%20seu%20trabalho!" target="_blanc"><i class="material-icons">whatsapp</i></a></li>
    <li><a class="btn-floating pink lighten-2" href="https://www.instagram.com/lgshop_oficial/" target="_blanc"><img src="Imagens/instagram.png" width="100%"></a></li>
    <li><a class="btn-floating blue lighten-2" href="https://www.facebook.com/LGShopOficial" target="_blanc"><img src="Imagens/facebook.png" width="110%"></a></li>
  </ul>
</div>
</body>
</html>
