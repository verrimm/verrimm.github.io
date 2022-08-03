/*
Template Name: Skote - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Dashboard Init Js File
*/

//  subscribe modal

setTimeout(function () {
    $('#subscribeModal').modal('show');
}, 2000);

//line chart datalabel - Ranking Mensal
   
var options = {
    chart: {
      height: 380,
      type: 'line',
      zoom: {
        enabled: false
      },
      toolbar: {
        show: false
      }
    },
    colors: ['#556ee6', '#34c38f', '#e83e8c', '#f1b44c'],
    dataLabels: {
      enabled: false,
    },
    stroke: {
      width: 4,
      curve: 'smooth'
    },
    series: [{
      name: "Capão da Canoa",
      data: [280, 400, 503, 590, 670, 720, 780, 812]
    },
    {
      name: "Natal",
      data: [230, 420, 477, 600, 773, 810, 840, 926]
    },
    {
        name: "Caruaru",
        data: [117, 199, 277, 370, 490, 555, 678, 740]
    },
    {
        name: "Canoas",
        data: [190, 300, 450, 523, 690, 770, 850, 956]
    }
    ],
    grid: {
      row: {
        colors: ['transparent', 'transparent'], // takes an array which will be repeated on columns
        opacity: 0.2
      },
      borderColor: '#f1f1f1'
    },
    markers: {
      style: 'inverted',
      size: 4,
    },
    xaxis: {
      categories: ['Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro']
    },
    yaxis: {
      title: {
        text: 'Pontos'
      },
      min: 0,
      max: 1000
    },
    legend: {
      position: 'bottom',
      horizontalAlign: 'right',
      floating: false,
      offsetY: 10
    },
    responsive: [{
      breakpoint: 600,
      options: {
        chart: {
          toolbar: {
            show: false
          }
        },
        legend: {
          show: false
        },
      }
    }]
  }

var chart = new ApexCharts(
    document.querySelector("#ranking-mensal"),
    options
);

chart.render();

// Radial chart

var options = {
    chart: {
        height: 200,
        type: 'radialBar',
        offsetY: -10
    },
    series: [67],
    colors: ["#6f42c1"],
    plotOptions: {
        radialBar: {
            startAngle: -135,
            endAngle: 135,
            dataLabels: {
                name: {
                    fontSize: '13px',
                    offsetY: 60
                },
                value: {
                    offsetY: 22,
                    fontSize: '16px',
                    formatter: function (val) {
                        return val + "%";
                    }
                }
            }
        }
    },
    stroke: {
        lineCap: "round"
    },
    fill: {
        type: "gradient",
        gradient: {
          shade: "dark",
          type: "vertical",
          gradientToColors: ["#34c38f"],
          stops: [0, 100]
        }
      },
    labels: ['Objetivo'],

}

var chart = new ApexCharts(
    document.querySelector("#radialBar-chart"),
    options
);

chart.render();


