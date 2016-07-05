<?php 

$pastforms;
try {
    
    // Connect to the data base and select it.
    $db = new PDO("mysql:host=localhost;dbname=Island_Cars;charset=utf8", "root", "200337226");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    $query = "SELECT * from Island_Cars.Reservations NATURAL JOIN Island_Cars.Cars order by ReservationID asc";
    $statement = $db->prepare($query);
    $statement->execute();   
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    $pastforms = "
            <table class='table table-striped' id='pastforms'>
        <thead>
                <tr>
                    <td>Reservation #</td>
                    <td>Name</td>
                    <td>Vehicle</td>
                    <td>Start Date</td>
                    <td>End Date</td>        
                    <td>Total Amount</td>
                    <td>Phone #</td>
                    <td>Email</td>
        </thead>
        
        <tbody>";
    foreach ($result as $row) 
    {
        $reservationID = $row['ReservationID'];
        $name = $row['ContactName'];
        $vehicle = $row['Make'] . " " . $row['Model'];
        $start_date = $row['Start_Date'];
        $end_date = $row['End_Date'];
        $amount = $row['TotalAmount'];
        $phone = $row['ContactPhone'];
        $email = $row['ContactEmail'];
        
        $pastforms .= " <tr>
            <th scope='row'>$reservationID</th>
            <td>$name</td>
            <td>$vehicle</td>
            <td>$start_date</td>
            <td>$end_date</td>
            <td>$amount</td>
            <td>$phone</td>
            <td>$email</td>
            </tr>";       
    }
    $pastforms .= " </tbody></table>";
}
catch (PDOException $ex)
{
    $studentslist .= "<p>oops</p>";
    $studentslist .= "<p> Code: {$ex->getCode()} </p>";
    $studentslist .=" <p> See: dev.mysql.com/doc/refman/5.0/en/error-messages-server.html#error_er_dup_key";
    $studentslist .= "<pre>$ex</pre>";
}  
?>