<!DOCTYPE html>
<!-- 
  To change this license header, choose License Headers in Project Properties.
  To change this template file, choose Tools | Templates
  and open the template in the editor.
-->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    
    <body>
        <?php
            include('Student.php');
            
            //Setting the students into array
            $students = array();
            
            //First student and their input
            $first = new Student();
            $first->surname = "Doe";
            $first->first_name = "John";
            $first->add_email('home','john@doe.com');
            $first->add_email('work','jdoe@mcdonalds.com');
            $first->add_grade(65);
            $first->add_grade(75);
            $first->add_grade(55);
            $students['j123'] = $first;
            
            //Second student and their input
            $second = new Student();
            $second->surname = "Einstein";
            $second->first_name = "Albert";
            $second->add_email('home','albert@braniacs.com');
            $second->add_email('work1','a_einstein@bcit.ca');
            $second->add_email('work2','albert@physics.mit.edu');
            $second->add_grade(95);
            $second->add_grade(80);
            $second->add_grade(50);
            $students['a456'] = $second;
            
            //Third student and their input
            $third = new Student();
            $third->surname = "Lee";
            $third->first_name = "Hara";
            $third->add_email('home','haram.lee@bcit.ca');
            $third->add_email('work1','hlee@bcit.ca');
            $third->add_email('work2','h.lee@gmail.com');
            $third->add_grade(95);
            $third->add_grade(80);
            $third->add_grade(99);
            $third->add_grade(88);
            $third->add_grade(67);
            $students['b123'] = $third;
            
            //Sort the student 
            ksort($students);
            
            //PRint all the student by calling toString method.
            foreach ($students as $student)
                echo $student->toString();
        ?>
    </body>
</html>
