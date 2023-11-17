const lupa = document.getElementById("lupa");
const caixaDePesquisa = document.getElementById("caixa-de-pesquisa");

document.addEventListener('DOMContentLoaded', function () {
  // Referências aos elementos HTML
  const searchInput = document.getElementById('search-container-input');
  const searchButton = document.getElementById('search-btn');
  const content = document.getElementById('caixa-de-pesquisa');

  // Adiciona um ouvinte de eventos ao botão de pesquisa
  searchButton.addEventListener('click', (e) => {
      e.preventDefault()
      searchHighlight(searchInput.value);
  });

  // Função para destacar o termo de pesquisa na página
  function searchHighlight(term) {
      // Remove qualquer destaque existente
      removeHighlight();

      if (term) {
          // Cria uma expressão regular com a opção de ignorar maiúsculas e minúsculas
          var regex = new RegExp(term, 'gi');

          // Substitui o termo de pesquisa pelo mesmo termo envolto em uma tag <span> com uma classe de destaque
          content.innerHTML = content.innerHTML.replace(regex, function (match) {
              return '<span class="highlight">' + match + '</span>';
          });
      }
  }

  // Função para remover destaque da pesquisa anterior
  function removeHighlight() {
      var highlightedElements = content.querySelectorAll('.highlight');
      highlightedElements.forEach(function (el) {
          el.outerHTMLinnerHTML = el.innerHTML; // Remove a tag <span> mantendo o texto original
      });
  }
});


lupa.addEventListener("click", function () {
  caixaDePesquisa.classList.toggle("invisivel");
});



function mostrarDiv(id, btnId) {
  const divs = ['segunda', 'terca', 'quarta', 'quinta', 'sexta', 'sabado', 'domingo'];
  const btns = ['bt-segunda', 'bt-terca', 'bt-quarta', 'bt-quinta', 'bt-sexta', 'bt-sabado', 'bt-domingo'];

  for (var i = 0; i < divs.length; i++) {
    document.getElementById(divs[i]).style.display = 'none';
    document.getElementById(btns[i]).classList.remove('focus');
  }
  document.getElementById(id).style.display = 'flex';
  document.getElementById(btnId).classList.add('focus');
}

const diaDaSemana = new Date().getDay();

if (diaDaSemana == 0) mostrarDiv('domingo', 'bt-domingo');
else if (diaDaSemana == 1) mostrarDiv('segunda', 'bt-segunda');
else if (diaDaSemana == 2) mostrarDiv('terca', 'bt-terca');
else if (diaDaSemana == 3) mostrarDiv('quarta', 'bt-quarta');
else if (diaDaSemana == 4) mostrarDiv('quinta', 'bt-quinta');
else if (diaDaSemana == 5) mostrarDiv('sexta', 'bt-sexta');
else mostrarDiv('sabado', 'bt-sabado');