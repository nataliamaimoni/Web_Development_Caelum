<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/checkout.css">
    <link rel="stylesheet" href="css/responsive.css">
    <style>@import url('https://fonts.googleapis.com/css?family=Jura');</style>
    <title> Checkout Mirror Fashion </title>
  </head>

  <body>

      <header>
        <h1> Ótima escolha </h1>
        <p> Obrigado por comprar na Mirror Fashion!
            Preencha seus dados para efetivar a compra. </p>
      </header>

      <section class="shopping-description"> <!-- DESCRIPTION SECTION -->
            <h2> Sua compra </h2>
            <img src="img/produtos/foto<?= $_POST["id"] ?>-<?= $_POST["cor"] ?>.png" alt="Produto escolhido">

            <dl class="description">
              <dt> Produto </dt>
              <dd> <?= $_POST["nome"] ?> </dd>

              <dt> Cor </dt>
              <dd> <?= $_POST["cor"] ?> </dd>

              <dt> Tamanho </dt>
              <dd> <?= $_POST["tamanho"] ?> </dd>

              <dt> Preço </dt>
              <dd id="preco-inicial"> <?= $_POST["preco"] ?> </dd>
            </dl>

            <div class="quant-total"> <!-- QUANTIDADE E TOTAL -->
                <label for="qtd"> Quantidade </label>
                <input type="number" min="1" max="99" name="quantidade" value="1" id="qtd">
            </div>

            <div class="quant-total">
                <label for="total"> Total </label>
                <output id="total" for="qtd total">  <?= $_POST["preco"] ?>  </output>
            </div> <!-- END OF QUANTIDADE E TOTAL -->

      </section> <!-- ENF OF DESCRIPTION SECTION -->


      <form action="#" method="post">
         <fieldset class="inf dados-pessoais">
              <legend> Dados Pessoais </legend>

              <div>
                <label class="dpl" for="nome"> Nome Completo </label>
                <input class="dpi" type="text" name="nome" id="nome" autofocus>
              </div>

              <div>
                <label class="dpl" for="email"> Email </label>
                <input class="dpi" type="email" name="email" id="email" placeholder="email@exemplo.com">
              </div>

              <div>
                <label class="dpl" for="cpf"> CPF </label>
                <input class="dpi" type="text" name="cpf" id="cpf" placeholder="000.000.000-00">
              </div>

              <div class="checkbox">
                <label for="checkbox">
                <input type="checkbox" name="checkbox" value="sim" checked>
                Gostaria de receber emails comerciais da Mirror Fashion
                </label>
              </div>
          </fieldset>



         <fieldset class="inf credit-card">
           <legend> Cartão de Crédito </legend>

           <div>
             <label class="ccl" for="num"> Número + CVV </label>
             <input class="cci" type="text" name="num" id="num" placeholder="0000.0000.0000.0000-000">
           </div>

           <div>
             <label class="ccl" for="bandeira"> Bandeira </label>
             <select class="cci" name="bandeira" id="bandeira">
               <option value="mastercard"> Mastercard </option>
               <option value="visa"> Visa </option>
               <option value="americanexpress"> American Express </option>
             </select>
           </div>

           <div>
            <label class="ccl" for="validade"> Validade </label>
            <input class="cci" type="month" name="validade" id="validade">
           </div>

           <div>
             <label for="gravar-cartao">
             <input type="checkbox" name="gravar-cartao" id="gravar-cartao" value="sim" checked>
             Gravar as informações do meu cartão para próxima compra.
             </label>

           </div>

         </fieldset>

         <button type="submit" name="confirmar"> Confirmar </button>

       </form>


    <?php include 'footer.php'; ?>
    <script type="text/javascript" src="js/checkout.js"> </script>
  </body>
</html>
