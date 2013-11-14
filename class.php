<?php
/*
class date { 

     private $month = date("F");

     private $day;
     private $year;


     public function __construct ();
     
     public function getDate() { 

        print 'date()'; 
    } 
} 

print_r($today);
echo "<br><hr>";
*/

$today = date("j F, Y");


echo "Today it is $today";


$day = date("N");

