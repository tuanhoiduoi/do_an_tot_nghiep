var samplecChartClass;
(function($){
    $(document).ready(function(){
        var ctx = document.getElementById('myChart');
        samplecChartClass.ChartData(ctx)
    });
    samplecChartClass = {
        ChartData:function(ctx){
            new Chart(ctx, {
                type: 'bar',
                data: {
                  labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                  datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1
                  }]
                },
                options: {
                  scales: {
                    y: {
                      beginAtZero: true
                    }
                  }
                }
              });
        }
    }
})(jQuery);
