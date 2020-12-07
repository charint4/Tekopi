var ctx = document.getElementById('ctx').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31'],
        datasets: [{
            data: [ '10000', 20000, 0, 30000, 0, 0,10000, 20000, 0, 30000, 0, 0, 10000, 20000, 0, 30000, 0, 0,10000, 20000, 0, 30000, 0, 0,10000, 20000, 0, 30000, 0, 0, 10000,],
            backgroundColor: 'rgba(255, 206, 86, 0.2)'
            ,
            borderColor: 'rgba(255, 206, 86, 1)'
            ,
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
		legend: {
      display: false
    },
		tooltips: {
            callbacks: {
                label: function(tooltipItem, data) {
                    return "Profits this month is Rp" + tooltipItem.yLabel;
                }
            },

    }
}
});