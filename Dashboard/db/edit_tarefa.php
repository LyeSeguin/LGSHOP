<?php

require_once ("conexao.php");
session_start();
$cod = $_POST ['cod'];
$nome = $_POST['nome'];
$data = $_POST['data'];
$categoria = $_POST['categoria'];
$descricao = $_POST['descricao'];

$sql = "UPDATE produtos SET 
            nome = '$nome', 
            data = '$data',  
            categoria = '$categoria',
            descricao = '$descricao'
        WHERE cod=$cod             
        ";
echo $sql;
$resultado = mysqli_query($con, $sql);

if($resultado == true){
    header("Location:../home.php");
} else {
   echo "Error: " . $resultado . "<br>" . mysqli_error($con);
}



