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
    chart: {
        height: 360,
        type: "bar",
        stacked: !0,
        toolbar: {
            show: !1
        },
        zoom: {
            enabled: !0
        }
    },
    plotOptions: {
        bar: {
            horizontal: !1,
            columnWidth: "15%",
            endingShape: "rounded"
        }
    },
    dataLabels: {
        enabled: !1
    },
    series: [{
        name: "Pontuação",
        data: [44, 55, 41, 67, 22, 43, 36, 52, 24, 18, 36, 48]
    },],
    xaxis: {
        categories: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"]
    },
    colors: ["#556ee6", "#f1b44c", "#34c38f"],
    legend: {
        position: "bottom"
    },
    fill: {
        opacity: 1
    }
},
    chart = new ApexCharts(document.querySelector("#ranking-mensal"), options);
chart.render();
options = {
    chart: {
        height: 200,
        type: "radialBar",
        offsetY: -10
    },
    plotOptions: {
        radialBar: {
            startAngle: -135,
            endAngle: 135,
            dataLabels: {
                name: {
                    fontSize: "13px",
                    color: void 0,
                    offsetY: 60
                },
                value: {
                    offsetY: 22,
                    fontSize: "16px",
                    color: void 0,
                    formatter: function (e) {
                        return e + "%"
                    }
                }
            }
        }
    },
    colors: ["#556ee6"],
    fill: {
        type: "gradient",
        gradient: {
            shade: "dark",
            shadeIntensity: .15,
            inverseColors: !1,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 50, 65, 91]
        }
    },
    stroke: {
        dashArray: 4
    },
    series: [67],
    labels: ["Series A"]
};

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