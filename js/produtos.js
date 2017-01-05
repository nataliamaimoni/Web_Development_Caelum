
var input = document.querySelector("#tamanho");
var output = document.querySelector("[name=valortamanho]");

  input.oninput = sizeChange

  function sizeChange() {
    output.value = input.value;
  }
