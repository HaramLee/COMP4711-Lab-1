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
        $this->emails[$which] = $address;
    }
    
    //Mutator methods to add grades
    function add_grade($grade){
        $this->grades[] = $grade;
    }
    
    //Calculating the average grade 
    function average(){
        $this = 0;
        foreach ($this->grades as $value){
            $total += $value;
        }
        return $total / count($this->grades);
    }
    
    function toString(){
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        foreach ($this->emails as $which => $what )
            $result .= $which . ': ' . $what . "\n";
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }
}