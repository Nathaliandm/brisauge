function adicionarFilme() {
    var campoFilmeFavorito = document.querySelector('#filme')
    var filmeFavorito = campoFilmeFavorito.value
    if (filmeFavorito.endsWith('.jpg')) {
        listarFilmesNaTela(filmeFavorito)
    } else {
        alert("Imagem inválida")
    }
    campoFilmeFavorito.value = ""
}

function listarFilmesNaTela(filme) {
    var listaFilmes = document.querySelector('#listaFilmes')
    var elementoFilme = "<img src=" + filme + ">"
    listaFilmes.innerHTML = listaFilmes.innerHTML + elementoFilme
}

function enviarResposta() {
  const resposta = document.getElementById('resposta').value;
  fetch('https://nathaliandm.github.io/brisauge/', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ resposta: resposta })
  })
    .then(response => {
      if (response.ok) {
        alert('Resposta enviada com sucesso!');
        document.getElementById('resposta').value = '';
      } else {
        alert('Erro ao enviar resposta.');
      }
    })
    .catch(error => {
      alert('Erro ao enviar resposta.');
      console.error(error);
    });
}
