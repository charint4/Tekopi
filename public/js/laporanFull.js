var ctx = document.getElementById('ctx').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
        datasets: [{
            data: [100000, 90000, 310000, 123000, 20000, 0, 0, 0, 0, 0, 0, 0],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
				'rgba(255, 102, 204, 0.2)',
				'rgba(255, 102, 0, 0.2)',
				'rgba(102, 0, 102, 0.2)',
				'rgba(51, 51, 255, 0.2)',
				'rgba(0, 255, 0, 0.2)',
				'rgba(255, 255, 0,0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
				'rgba(255, 102, 204,1)',
				'rgba(255, 102, 0, 1)',
				'rgba(102, 0, 102, 1)',
				'rgba(51, 51, 255, 1)',
				'rgba(0, 255, 0, 1)'
				
            ],
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
            }
    }
}
});



