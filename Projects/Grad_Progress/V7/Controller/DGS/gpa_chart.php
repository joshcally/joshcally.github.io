<?php 
// Connect to the data base and select it.
    $db = new PDO("mysql:host=localhost;dbname=Grad_Prog_V7;charset=utf8", "root", "200337226");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    $query = "SELECT gpa, credit_hours FROM Grad_Prog_V7.student;";
    $statement = $db->prepare($query);
    $statement->execute();   
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    $chartdata;
    foreach ($result as $row) 
    {
        $gpa = $row['gpa'];
        $credithours = $row['credit_hours'];
        $chartdata .="[$credithours, $gpa],";        
    }
echo "
		$(function () {
    $('#gpachart').highcharts({
        chart: {
            type: 'scatter',
            zoomType: 'xy'
        },
        title: {
            text: 'Student GPAs by Credit Hours'
        },
        subtitle: {
            text: 'School of Computing Graduate Program'
        },
        xAxis: {
            title: {
                enabled: true,
                text: 'Total Credit Hours'
            },
            startOnTick: true,
            endOnTick: true,
            showLastLabel: true
        },
        yAxis: {
            title: {
                text: 'Overall GPA'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            verticalAlign: 'top',
            x: 100,
            y: 70,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF',
            borderWidth: 1
        },
        plotOptions: {
            scatter: {
                marker: {
                    radius: 5,
                    states: {
                        hover: {
                            enabled: true,
                            lineColor: 'rgb(100,100,100)'
                        }
                    }
                },
                states: {
                    hover: {
                        marker: {
                            enabled: false
                        }
                    }
                },
                tooltip: {
                    headerFormat: '<b>{series.name}<br>',
                    pointFormat: '{point.x} Credit hours, {point.y} GPA'
                }
            }
        },
        series: [{
            name: 'Student',
            color: 'rgba(223, 83, 83, .5)',
            data: [$chartdata]
        }]
    });
});
";
