<!DOCTYPE html>
<html>
 <head>
   <title> L&G Shop </title>
    <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
   <!-- MATERIALIZE -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
            
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

 </head>
  <body>
    <!-- MENU -->
    <?php  
    require_once("headersite.php");
    require_once("Dashboard/db/conexao.php");
    $sql = "SELECT * FROM produtos WHERE categoria = 3";
    $result_prod = mysqli_query($con, $sql);
    ?>
<!-- FIM MENU -->

<body>
 <br>

<br>
<center> <h3> <img class="responsive-img" src="Imagens/colares2.png" width="5%" height="20%"> Colares <img class="responsive-img" src="Imagens/colares2.png" width="5%" height="20%"> </h3> </center>
<!-- ESTRUTURA -->
<table style="align-content: center;"> 
 <th>
  <?php 
    foreach($result_prod as $dados) { ?>
  <td width="33%">
 <div class="row">
    <div class="col s12 m6">
      <div class="card">
        <div class="card-image">
          <img src="Imagens/foto01.jpg">
          <span class="card-title" style="color:"><?= $dados['nome']?></span>
        </div>
        <div class="card-content">
          <p> <b> Descrição: </b> <?= $dados['descricao']?> </p>
        </div>
      </div>
    </div>
  </div>
</td>
<?php } ?>
</th> 
</table>
<!-- Footer -->
 <?php require_once("footersite.php"); ?>
 
    <script type="text/javascript" src="JS/materialize.min.js"> </script>
 </body>
</html>
