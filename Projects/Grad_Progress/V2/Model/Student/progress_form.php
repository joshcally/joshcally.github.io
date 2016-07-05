<?php 
/**
 * Author: Joshua Callahan
 * u0691598
 * Spring 2016
 */
class Form
{
    public $date;
    public function __construct( $id )
    {
        $this->date = "undefined";
        
        if ($id==1) { 
            $this->date = 'December 25, 2015';
        }
        if ($id==2) { 
            $this->date = 'January 12, 2016';
        }
    }
}