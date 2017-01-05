
var quantidade = document.querySelector("#qtd");
var total = document.querySelector("#total");

quantidade.oninput = function () {

  var preco = document.querySelector("#preco-inicial").textContent;
    preco = preco.replace(",",".");
    preco = preco.replace("R$ ","");
    preco = parseFloat(preco);

  var qtd = quantidade.value;
  var precoFinal = qtd * preco;
    precoFinal = "R$ " + precoFinal.toFixed(2);
    precoFinal = precoFinal.replace(".",",");

  total.value = precoFinal;
}
