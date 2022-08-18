/*
Template Name: Skote - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Dashboard Init Js File
*/

//  subscribe modal


//line chart datalabel - Ranking Mensal
var options = {
    series: [{
        name: 'Volume (R$)',
        type: 'column',
        data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160]
    }, {
        name: 'Posição',
        type: 'line',
        data: [5, 1, 2, 2, 3, 4, 1, 1, 2, 3, 5, 5]
    }],
    colors: ['#34c38f', '#556ee6'],
    chart: {
        height: 300,
        type: 'line',
        opposite: true,
    },
    colors: ['#34c38f', '#556ee6', '#fff'],
    stroke: {
        curve: 'smooth',
        width: [0, 4]
    },
    title: {
        text: 'Pontos'
    },
    dataLabels: {
        style: {
            colors: ['#fff']
        },
        enabled: true,
        enabledOnSeries: [1]
    },
    labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dezembro'],
    xaxis: {
        type: 'date'
    },
    yaxis: [{
        title: {
            text: 'Volume (R$)',
        }
    }, {
        reversed: true,
        opposite: true,
        title: {
            text: 'Posição',
        }
    }]
};

var chart = new ApexCharts(document.querySelector("#ranking-mensal"), options);
chart.render();

//Função para esconder card de regra na página do indicador
function hideShow() {
    var botao = document.getElementById("botaoDescricao");
    var card = document.getElementById("cardRegrasCalculo");
    var texto = document.getElementById("textoDescricao");
    var icone = document.getElementById("iconDescricao");

    if (card.style.display === "none") {
        card.style.display = "block";
        texto.innerHTML = "Esconder Descrição";
        icone.classList.replace("fa-angle-right", "fa-angle-down")
        botao.classList.replace("shrink", "expand");
    } else {
        card.style.display = "none";
        texto.innerHTML = "Ver Mais";
        icone.classList.replace("fa-angle-down", "fa-angle-right");
        botao.classList.replace("expand", "shrink");
    }
}