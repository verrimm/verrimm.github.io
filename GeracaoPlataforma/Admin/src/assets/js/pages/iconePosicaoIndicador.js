var posicao = document.querySelectorAll(".iconePosicaoRanking")
switch (posicao[0].textContent) {
    case "1º":
        posicao[0].classList.add("bg-success")
        break;

    case "2º":
        posicao[0].classList.add("bg-success")
        break;

    case "3º":
        posicao[0].classList.add("bg-success")
        break;

    default:
        posicao[0].classList.add("bg-danger")
        break;

}

//Função para esconder card de regra na página do indicador
function hideShow() {
    var card = document.getElementById("cardRegrasCalculo");
    var texto = document.getElementById("textoDescricao");
    var icone = document.getElementById("iconDescricao");

    if (card.style.display === "none") {
        card.style.display = "block";
        texto.innerHTML = "Esconder Descrição";
        icone.classList.replace("bx-show", "bx-hide")
    } else {
        card.style.display = "none";
        texto.innerHTML = "Mostrar Descrição";
        icone.classList.replace("bx-hide", "bx-show");
    }
}