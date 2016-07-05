<?php 
// Connect to the data base and select it.
    $db = new PDO("mysql:host=localhost;dbname=Grad_Prog_V7;charset=utf8", "root", "200337226");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    $query = "SELECT * FROM Grad_Prog_V7.advisors;";
    $statement = $db->prepare($query);
    $statement->execute();   
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    $catagories;
    $ahead;
    $ontime;
    $behind;
    foreach ($result as $row) 
    {
        $advisor = $row['advisor_name'];
        $aheadrow = $row['ahead_of_schedule'];
        $ontimerow = $row['on_time'];
        $behindrow = $row['behind_schedule'];
        
        $catagories .= "'$advisor',";
        $ahead .= "$aheadrow,";
        $ontime .= "$ontimerow,";   
        $behind .= "$behindrow,";       
    }
echo "
$(function () {
    $('#barchart').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Student Success by Advisor'
        },
        xAxis: {
            categories: [$catagories]
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Status of Students Assigned to Advisor'
            }
        },
        legend: {
            reversed: true
        },
        plotOptions: {
            series: {
                stacking: 'normal'
            }
        },
        series: [{
            name: 'Ahead of Schedule',
            data: [$ahead]
        }, {
            name: 'On Time',
            data: [$ontime]
        }, {
            name: 'Behind Schedule',
            data: [$behind]
        }]
    });
});";