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
</style>
 </head>

    <!-- MENU -->
    <?php  require_once("headersite.php");?>
<!-- FIM MENU -->

<body>
<!-- BOOTSTRAP -->  
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
<!-- MATERIALIZE --> 
<script src="https://code.jquery.com/jquery-2.1.1.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script src="assets/materialize/js/materialize.min.js"></script>

<!-- ESTRUTURA -->
<br>
<table class="resposive-table">
  <td> 
  <!-- cod do card contendo tamanho/imagem -->  
    <div class="row">
    <div class="col s12 m6">
      <div class="card">
        <div class="card-image">
          <img class="responsive-img" src="Imagens/banner1.png" width="80%" height="50%">
          <a class="btn-floating halfway-fab waves-effect waves-light pink"><i class="material-icons">add</i></a>
        </div>
      </div>
    </div>
  </div>
</td>
<td>
  <!-- Título do card -->
  <h5  style="text-align: center;"><b>Estilo, Conforto e Praticidade <b></h5>
    <br>
    <!-- Conteúdo -->
  <p align="center"> A L&G shop, foi criada pensando em trazer conforto
estilo e praticidade  para você! </p>
  <p align="center"> Com preços acessíveis
que caibam no seu bolso. </p>
</td>
<tr>
  <td></td>
  <td></td>
</tr>
<tr>    
<td>
   <h5  style="text-align: center;"><b>Promoções Semanais <b></h5>
    <br>
  <p align="center"> Aqui você encontra as melhores promoções e descontos
mensalmente, aproveite já e não fique fora dessa! </p>
</td>
<td> 
    <div class="row">
    <div class="col s12 m6">
      <div class="card">
        <div class="card-image">
          <img class="responsive-img" src="Imagens/banner2.png">
          <a class="btn-floating halfway-fab waves-effect waves-light pink"><i class="material-icons">add</i></a>
        </div>
      </div>
    </div>
  </div>
</td>
</tr>
<tr>
  <td></td>
  <td></td>
</tr>
<tr>   
<td> 
    <div class="row">
    <div class="col s12 m6">
      <div class="card">
        <div class="card-image">
          <img class="responsive-img" src="Imagens/banner3.png">
          <a class="btn-floating halfway-fab waves-effect waves-light pink"><i class="material-icons">add</i></a>
        </div>
      </div>
    </div>
  </div>
</td>
<td>
   <h5  style="text-align: center;"><b> As melhores tendências para você! <b></h5>
    <br>
  <p align="center"> Confira nosso portifólio, onde trazemos as melhores peças para você! </p>
  <p align="center"> Produtos com 100% de garantia, material hipoalergênico, para todos os momentos.  </p>
</td>
</tr>
</table>

<!-- Footer -->
<!-- função require obriga o rodapé ser implementado na página -->
 <?php require_once("footersite.php"); ?>
<!-- Footer -->
 </body>
</html>
