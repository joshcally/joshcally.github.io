<?php 
/**
 * Author: Joshua Callahan
 * u0691598
 * Spring 2016
 */
class Employee
{
    public $userID;
    public $username;
    public $firstname;
    public $lastname;
    public function __construct( $_userID )
    {
        try {
            // Connect to the data base and select it.
            $db = new PDO("mysql:host=localhost;dbname=Island_Cars;charset=utf8", "root", "200337226");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            
            $query = "SELECT * from IslandCars.Users where UserID = " . $_userID;
            $statement = $db->prepare($query);
            $statement->execute();   
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);

            foreach ($result as $row) {
                $this->firstname = htmlspecialchars($row['First_Name']);
                $this->lastname = htmlspecialchars($row['Last_Name']);
                $this->userID = $_userID;
            }
        }
        catch (PDOException $ex)
        {
            $studentslist .= "<p>oops</p>";
            $studentslist .= "<p> Code: {$ex->getCode()} </p>";
            $studentslist .=" <p> See: dev.mysql.com/doc/refman/5.0/en/error-messages-server.html#error_er_dup_key";
            $studentslist .= "<pre>$ex</pre>";
        }  
    }
}
?>