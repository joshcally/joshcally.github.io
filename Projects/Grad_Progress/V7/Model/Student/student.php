<?php 
/**
 * Author: Joshua Callahan
 * u0691598
 * Spring 2016
 */
class User
{
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $uid;
    
    public $name;
    public function __construct( $_uid )
    {
        try {
            // Connect to the data base and select it.
            $db = new PDO("mysql:host=localhost;dbname=Grad_Prog_V7;charset=utf8", "root", "200337226");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            
            $query = "SELECT * from Grad_Prog_V7.users where uid = " . $_uid;
            $statement = $db->prepare($query);
            $statement->execute();   
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);

            foreach ($result as $row) {
                $this->firstname = htmlspecialchars($row['first_name']);
                $this->lastname = htmlspecialchars($row['last_name']);
                $this->email = htmlspecialchars($row['email']);
                $this->phone = htmlspecialchars($row['phone_number']);
                $this->uid = $_uid;
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