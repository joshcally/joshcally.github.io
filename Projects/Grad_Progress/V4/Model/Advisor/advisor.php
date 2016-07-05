<?php 
/**
 * Author: Joshua Callahan
 * u0691598
 * Spring 2016
 */
class Advisor
{
    public $firstname, $lastname, $phonenumber, $email;
    
    public function __construct( $id )
    {
             //Connect to the data base and select it.
        $db = new PDO("mysql:host=localhost;dbname=test;charset=utf8", "root", "200337226");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        $query = "select * from users where faculty = " . $uid;
        $statement = $db->prepare($query);
        $statement->execute();   

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            $this->firstname = $row[first_name];
            $this->lastname = $row[last_name];
            $this->phonenumber = $row[phone_number];
            $this->email = $row[email];
        }
    }
}