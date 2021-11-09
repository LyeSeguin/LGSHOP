<?php
    require_once("bloqueio.php");
    $cod = $_GET['cod'];
    $sql = "SELECT * FROM categoria_prod";
    $result_cat = mysqli_query($con, $sql);    
    $sql2 = "SELECT * FROM produtos WHERE cod = $cod";
    $result_produtos = mysqli_query($con, $sql2); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edição de produto</title>
</head>
<body>
<?php  require_once("header.php");?>
    <center><h3>Editar Produto</h3></center>
    <?php  foreach ($result_produtos as $prod) { ?>
    <form action="db/edit_tarefa.php" method="POST">
        <input type="hidden" value="<?php echo $prod["cod"];?>" name="cod">
        Nome:
        <input type="text" value="<?php echo $prod['nome']?>" name="nome" placeholder="Renomeie o Item aqui">
        <br> 
        Data: 
        <input type="date" value="<?php echo $prod['data']?>" name="data" value=""> <br>
        Categoria: 
        <select value="" name="categoria" id="categoria" class="categoria" style="display: flex;">
        <?php 
        foreach($result_cat as $dados)
        { ?>   
            <option value="<?php echo $dados['cod']?>"> <?php echo $dados['nome']?> 

                    </option>
        <?php } ?>
        </select>  <br>
        Descrição: 
        <input type="text" value="<?php echo $prod['descricao']?>" name="descricao" placeholder="Descrição do produto" > <br>
        <button>Salvar</button>
    </form>
    <?php } ?>
