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