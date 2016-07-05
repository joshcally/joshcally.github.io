<?php 
/**
 * Author: Joshua Callahan
 * u0691598
 * Spring 2016
 */
class Advisor
{
    public $name;
    public function __construct( $id )
    {
        $this->name = "undefined";
        
        if ($id==1) { 
            $this->name = 'Albus Dumbledore';
        }
        if ($id==2) { 
            $this->name = 'Professor Snape';
        }
        if ($id==3) { 
            $this->name = 'Professor Lupin';
        }
    }
}