<?php 
// Connect to the data base and select it.
    $db = new PDO("mysql:host=localhost;dbname=Grad_Prog_V7;charset=utf8", "root", "200337226");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    $query = "SELECT * FROM Grad_Prog_V7.advisors;";
    $statement = $db->prepare($query);
    $statement->execute();   
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    $chartdata;
    foreach ($result as $row) 
    {
        $name = $row['advisor_name'];
        $students = $row['student_uid'];
        $chartdata .="{ name: '$name', y: $students },";        
    }
echo "
$(function () {

    // Radialize the colors
    Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
        return {
            radialGradient: {
                cx: 0.5,
                cy: 0.3,
                r: 0.7
            },
            stops: [
                [0, color],
                [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    });

    // Build the chart
    $('#piechart').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Student Assignment Distribution Among Advisors'
        },
        tooltip: {
            pointFormat: '{point.percentage:.1f}% of Grad Students</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f}%',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    },
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: 'Students',
            data: [
                $chartdata
            ]
        }]
    });
});
";