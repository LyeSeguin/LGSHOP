<?php
    require_once("bloqueio.php");
    $sql = "SELECT * FROM categoria_prod";
    $result_cat = mysqli_query($con, $sql);
    $cod = $_GET['cod'];
    $sql2 = "SELECT * FROM produtos WHERE cod=$cod";
    $result_prod = mysqli_query($con, $sql2);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
</head>
<body>
    <?php  require_once("header.php");?>
<center>
    <h4>Visualização de Produto</h4> 

       <?php 
             foreach($result_prod as $dados) {  
    ?> 
<br><br>
<table class="centered">
        <thead>
          <tr>
              <th>Nome do Produto </th>
              <th>Data de Cadastro </th>
              <th>Categoria</th>
              <th>Detalhes do Produto </th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td> <?= $dados['nome']?> </td>
            <td>  <?= date("d/m/Y", strtotime($dados['data']));?>
            <td>  <?= $dados['categoria']?>  </td>
            <td>  <?= $dados['descricao']?> </td>
          </tr>         
        </tbody>
      </table>
<?php } ?>  
</center>
</body>
</html>