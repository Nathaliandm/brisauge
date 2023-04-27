<?php
// Recupera os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];

// Valida os dados do formulário
if (empty($nome) || empty($email)) {
  // Se algum campo estiver vazio, exibe uma mensagem de erro
  echo 'Por favor, preencha todos os campos.';
} else {
  // Se os dados estiverem corretos, envia o formulário e redireciona o usuário
  mail('seuemail@example.com', 'Novo formulário enviado', "Nome: $nome\nEmail: $email");
  header('Location: confirmacao.html');
}
?>
