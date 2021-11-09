<?php
    require_once("bloqueio.php");

    $sql = "SELECT * FROM categoria_prod";
    $result_cat = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Produtos</title>

    <!-- MATERIALIZE --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
            
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</head>
<body>
<?php  require_once("header.php");?>

    <h4 align="center">Cadastro de Produtos</h4>
    <form enctype="multipart/form-data" action="db/cad_tarefa.php" method="POST">
        
        Nome:   
        <input type="text" name="nome" placeholder="Digite o nome">  <br>
        Data: 
        <input type="date" name="data"> <br>
        Categoria:
        <select name="categoria" id="categoria" class="categoria" style="display: flex;">
        <?php 
        foreach($result_cat as $dados)
        { ?>   
            <option value="<?php echo $dados['cod']?>"> <?php echo $dados['nome']?> </option>
        <?php } ?>
        </select> 
        <br>
        Descrição: 
        <input type="text" name="descricao" placeholder="Descrição do produto"> <br>
        <input type="file" name="imagem"> <br> <br>
        <button> Cadastrar </button>
    </form>


