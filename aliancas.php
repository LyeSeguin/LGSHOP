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
<!-- script para definir proporção de tabela -->
   <style type="text/css">
        .table{
            width: 100%;
            table-layout: fixed;
            border-collapse: collapse;
        }
    </style>
 </head>
  <body>
    <!-- MENU -->
    <?php 
    //require obriga a página a conter o cabeçalho e a conexão com o BD 
    require_once("headersite.php");
    require_once("Dashboard/db/conexao.php");
    //a função SQL busca no BD todos os campos da tabela produtos
    //contendo o filtro para categoria
    $sql = "SELECT DISTINCT * FROM produtos WHERE categoria = 1";
    //a variável result_prod armazena a váriavel SQL 
    $result_prod = mysqli_query($con, $sql);
    ?>
   <!-- FIM MENU -->
 <br>
<br>
<center> <h3 style="color: #FA7485;"> <img class="responsive-img" src="Imagens/ring2.png" width="5%" height="20%"> Alianças <img class="responsive-img" src="Imagens/ring2.png" width="5%" height="20%"> </h3> </center>
<!-- ESTRUTURA -->
<table class="table">
  <tr style="WORD-BREAK:BREAK-ALL;">
  <?php
 $cont = 0;
    foreach($result_prod as $dados) { 
      ?> 
  <td style="WORD-BREAK:BREAK-ALL; width: 300px;">
 <div class="row">
    <div class="col s12 m1 l4">
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
<?php 
//if (++$cont > 2)
  //break;
}
 ?>
<!-- </tr>
  <tr style="WORD-BREAK:BREAK-ALL;">
  <?php
 if (++$cont > 2){
    foreach($result_prod as $dados) { 
      ?>  
  <td style="WORD-BREAK:BREAK-ALL; width: 300px;">
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
<?php 
if (++$cont > 6)
  break;
}}
 ?>-->
</tr> 
</table>

<!-- continuação do loop -->

<!-- Footer -->
  <?php require_once("footersite.php"); ?>
<!-- Footer -->

    <script type="text/javascript" src="JS/materialize.min.js"> </script>
 </body>
</html>
