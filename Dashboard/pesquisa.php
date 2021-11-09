<?php 
require_once("header.php");
$pesquisar = $_POST['pesquisar'];
$result_pdt = "SELECT * FROM produtos WHERE nome LIKE '%$pesquisar%' order by data";
$resultado_prod = mysqli_query($con, $result_pdt);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Resultado de Pesquisa</title>
 </head>
 <body>
 	<main class="container">
 	<form action="pesquisa.php" method="POST"  class="row">
            <div class="input-field col s10">
                <input type="text" name="pesquisar" id="pesquisar" value="">
                <label for="busca">Digite para buscar</label>
            </div>
            <div class="input-field col s2">
                <button class="btn pink lighten-3"><i class="material-icons">search</i></button>
            </div>    
        </form>
        <h4 align="center">Resultado da Pesquisa</h4>
 <table class="highlight">
            <!-- thead funciona como o cabeçalho da tabela -->
            <thead>
                <tr>

                    <th>Código</th>
                    <th>Nome</th>
                    <th>Data</th>
                    <th>Categoria</th>
                    <th>Descrição</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tr>
             <?php 
             //função foreach busca os dados no BD e faz um laço de repetição para cada novo registro

             foreach($resultado_prod as $dados) { ?>  
               <!-- sempre que houver $dados['alguma coisa'] vai estar selecionando qual informação quer ser mostrada, seja código, nome, data...-->
                <td><?= $dados['cod']?></td>
                <td><a href="visualizar_tarefa.php?cod=<?= $dados['cod']?>" style="color:#f06292;">
                   <?= $dados['nome']?>
                </a></td>
                <td><?= date("d/m/Y", strtotime($dados['data']));?></td>
                <?php              
                    $cod= $dados;
                    $sql = "SELECT * FROM categoria_prod";
                    $sql2 = "SELECT * FROM produtos";
                    $result_cat = mysqli_query($con, $sql);
                ?> 
                <td> <?=  $dados['categoria'] ?> </td> 
                <? } ?>
                <td> <?= $dados['descricao']?></td>
                <td>
                    <a style="color:#f06292;" href="editar_tarefa.php?cod=<?= $dados['cod']?>"><i class="material-icons">edit</i></a>                   
                    <a style="color:#f06292;" href="db/excluir_tarefa.php?cod=<?= $dados['cod']?>"><i class="material-icons">delete</i></a>
                </td>
            </tr>
        <?php } ?>    
        </table>
        </main>
 </body>
 </html>