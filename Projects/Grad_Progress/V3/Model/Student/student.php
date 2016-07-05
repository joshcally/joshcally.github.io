<?php 
/**
 * Author: Joshua Callahan
 * u0691598
 * Spring 2016
 */
class Student
{
    public $name;
    public function __construct( $id )
    {
        $this->name = "undefined";
        
        if ($id==1) { 
            $this->name = 'Hermoine Granger';
        }
        if ($id==2) { 
            $this->name = 'Neville Longbottom';
        }
        if ($id==3) { 
            $this->name = 'Draco Malfoy';
        }
        if ($id==4) { 
            $this->name = 'Harry Potter';
        }
        if ($id==5) { 
            $this->name = 'Ginny Weasley';
        }
        if ($id==6) { 
            $this->name = 'Ron Weasley';
        }
    }
}