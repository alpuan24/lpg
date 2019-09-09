<script type="text/javascript">
        $(function () {
            var chart;
            $(document).ready(function() {
                $.getJSON("dataline.php", function(json) {
                
                    chart = new Highcharts.Chart({
                        chart: {
                            renderTo: 'mygraph',
                            type: 'line'
                            
                        },
                        title: {
                            text: 'Comparison of Sugar, Rice and Wheat Flour'
                            
                        },
                        subtitle: {
                            text: '(Price In 2008)'
                        
                        },
                        xAxis: {
                            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                        },
                        yAxis: {
                            title: {
                                text: 'Price (Rp)'
                            },
                            plotLines: [{
                                value: 0,
                                width: 1,
                                color: '#808080'
                            }]
                        },
                        tooltip: {
                            formatter: function() {
                                    return '<b>'+ this.series.name +'</b><br/>'+
                                    this.x +': '+ this.y;
                            }
                        },
                        legend: {
                            layout: 'vertical',
                            align: 'right',
                            verticalAlign: 'top',
                            x: -10,
                            y: 120,
                            borderWidth: 0
                        },
                        series: json
                    });
                });
            
            });
            
        });
</script>
<script src="assets/js/highcharts.js"></script>
<script src="assets/js/exporting.js"></script>