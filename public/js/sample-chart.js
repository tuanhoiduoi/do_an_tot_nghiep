var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line', // loại biểu đồ (line chart, bar chart, pie chart, etc.)
    data: {
        labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7'], // các nhãn trên trục x
        datasets: [{
            label: 'Doanh thu', // tên của dataset
            data: [1000, 2000, 1500, 3000, 2500, 1800, 4000], // dữ liệu tương ứng với các nhãn trên trục x
            backgroundColor: 'rgba(54, 162, 235, 0.2)', // màu nền của dataset
            borderColor: 'rgba(54, 162, 235, 1)', // màu viền của dataset
            borderWidth: 1 // độ rộng của đường viền
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true // giá trị tối thiểu trên trục y bắt đầu từ 0
                }
            }]
        }
    }
});
