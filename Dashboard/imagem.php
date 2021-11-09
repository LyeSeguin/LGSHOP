<?php
require ("db/conexao.php");
header("Content-type: image/jpeg", true);
$cod = $_GET[‘cod’];
$querySelecionaPorCodigo = "SELECT cod_img, imagem_img FROM imagens WHERE cod_img = $cod";
$resultado = mysqli_query($con, $querySelecionaPorCodigo);
$imagem = mysqli_fetch_object($resultado);

echo $imagem;
?>