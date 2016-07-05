<?php 

$db = new PDO("mysql:host=localhost;dbname=Island_Cars", "root", "200337226");
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

				$pieces = explode(" ", $_POST["datefilter"]);
				$TotalAmount = "237.44";
				$name = $_POST["name"];
				$phone = $_POST["contactPhone"];
				$email = $_POST["contactEmail"];
				$startDate = $pieces[0];
				$endDate = $pieces[2];
				$car_Type = $_POST["carType"];



                    $stmt = $db->prepare("INSERT INTO Reservations (TotalAmount, Car_Type_ID, Start_Date, End_Date, ContactPhone, ContactEmail, ContactName) VALUES (?,?,?,?,?,?,?)");
    				$stmt->bindValue(1, $TotalAmount);
    				$stmt->bindValue(2, $car_Type);
    				$stmt->bindValue(3, $startDate);
    				$stmt->bindValue(4, $endDate);
    				$stmt->bindValue(5, $phone);
    				$stmt->bindValue(6, $email);
    				$stmt->bindValue(7, $name);
    				$stmt->execute();

    				 $query =  "SELECT * FROM Reservations ORDER BY ReservationID DESC LIMIT 1 ";
  					$statement = $db->prepare( $query );
  					$statement->execute(  );
  					$result = $statement->fetchAll(PDO::FETCH_ASSOC);  

  					foreach($result as $row)
  					{
  						$confirmationNum = $row['ReservationID'];	
  					}


                $carType = $_POST["carType"];
                
                 $query = "SELECT * FROM Cars WHERE Car_Type_ID = '$carType'";
                 $statement = $db->prepare($query);
                 $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);  
echo' 
<div class="container marketing">

<div>
<div>
<label>Reservation Confirmation Number: ' . $confirmationNum . '</label>
</div>

<div>
      <label>Name: ' . htmlspecialchars($_POST["name"]) . ' </label>
</div>
      <div>

      <label>Contact Phone Number: ' . htmlspecialchars($_POST["contactPhone"]) . '</label>
      </div>
      <div>

      <label>Contact Email: ' . htmlspecialchars($_POST["contactEmail"]) . '</label>
      </div>
<div>
<label>Date Range for Car Rental: ' . htmlspecialchars($_POST["datefilter"]) . '</label>

</div>

</div>
<br>
<label>Car Type: ';
 foreach($result as $row)
{
	echo ' ' . $row['Make'] . ' ' . $row['Model'] . ' , Rate: $' . $row['Rate'] . ' a day';
}

echo'</label>

<br>
<div>

</div>
</div>
';



?>
