<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/produtos.css">
    <link rel="stylesheet" href="css/responsive.css">
    <style>@import url('https://fonts.googleapis.com/css?family=Jura');</style>
    <title> Produtos </title>
  </head>

  <body>
    <?php
      include 'header.php';
     ?>

     <div class="produtos">
       <h1 class="title"> Camiseta Ecko Caveira Bad to the Bone </h1>
       <h2 class="subtitle"> Por apenas R$48,50 </h2>

       <form class="produto-form" action="checkout.php" method="post">
              <input type="hidden" name="nome" value="Camiseta Ecko Caveira Bad to the Bone">
              <input type="hidden" name="preco" value="R$ 48,50">
              <input type="hidden" name="cor" value="Verde">
              <input type="hidden" name="id" value="2">

          <fieldset class="colors">
            <legend> Escolha a cor: </legend>

              <input type="radio" name="cor" value="verde" id="verde" checked>
              <label for="verde">
                <img src="img/produtos/foto2-verde.png" alt="Camiseta verde">
              </label>

              <input type="radio" name="cor" value="rosa" id="rosa">
              <label for="rosa">
                <img src="img/produtos/foto2-rosa.png" alt="Camiseta rosa">
              </label>

              <input type="radio" name="cor" value="azul" id="azul">
              <label for="azul">
                <img src="img/produtos/foto2-azul.png" alt="Camiseta azul">
              </label>
          </fieldset>

          <fieldset class="tamanho">
            <legend> Escolha o tamanho: </legend>

              <input type="range" name="tamanho" value="36" min="36" max="46" step="2" id="tamanho">
              <output name="valortamanho" for="tamanho"> 36 </output>
          </fieldset>

          <input type="submit" name="comprar" value="Comprar" class="comprar">

       </form>

     </div>

     <?php
      include 'footer.php';
      ?>

      <script type="text/javascript" src="js/produtos.js">
      </script>
  </body>
</html>
