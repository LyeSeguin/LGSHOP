<?php
session_start();
if(!isset($_SESSION['email']))
{
    header("Location:index.php?erro=1");
}
require_once("db/conexao.php");

?>