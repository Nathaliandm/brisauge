<form id="myForm" action="https://api.sheetmonkey.io/form/paKsY3sfVXoiYo72AcCRKc" method="post">

<!-- Seus campos do formulário aqui -->

<input type="submit" value="Confirmar marcação">
</form>

<div id="mensagem-sucesso"></div>

<script>
const form = document.getElementById("myForm");

form.addEventListener("submit", function(event) {
  event.preventDefault();
  const data = new FormData(form);
  
  fetch(form.action, {
    method: form.method,
    body: data
  })
  .then(function(response) {
    // Verifica se a resposta foi bem sucedida
    if(response.ok) {
      // Define a mensagem de sucesso
      const mensagemSucesso = document.getElementById("mensagem-sucesso");
      mensagemSucesso.innerHTML = "Dados enviados com sucesso!";
      // Limpa o formulário após o envio bem-sucedido
      form.reset();
    }
  });
});
</script>
