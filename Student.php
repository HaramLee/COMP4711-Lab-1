<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Description of Student
 * 
 * @author Haram Lee
 */
class Student {
    
    //The constructor of the class
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    //Mutator methods to add emails
    function add_email($which, $address){
        //Email validator, only add valid email
        if (filter_var($address, FILTER_VALIDATE_EMAIL)) {
            $this->emails[$which] = $address;
        }
        
    }
    
    //Mutator methods to add grades
    function add_grade($grade){
        //if the grade input is negative, just going to set it as 0
        if($grade < 0){
            $grade = 0;
        }
        $this->grades[] = $grade;
    }
    
    //Calculating the average grade 
    function average(){
        $total = 0;
        //Adding all the grades
        foreach ($this->grades as $value){
            $total += $value;
        }
        //Divide the total by the number of grade to get the average
        return $total / count($this->grades);
    }
    
    //Method to print the user input (student) 
    function toString(){
        //Setting the name
        $result = "Name: ".$this->first_name . ' ' . $this->surname ."\n";
        //Setting the Grade average
        $result .= 'Grade Average: ' . $this->average() . "\n";
        $result .=  "Set of Emails \n";
        //Printing all the emails through the loop
        foreach ($this->emails as $which => $what )
            $result .= $which . ': ' . $what . "\n";
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }
}