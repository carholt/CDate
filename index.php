<!doctype html>
<html lang="sv">
    <head>
        <meta charset="utf-8">


        <title>Date</title>

        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>

<div id="wrapper">
<?php
 
include "class.php";

echo "<hr> <br>";
echo "<h1>";
if($day==1){
	echo "4 days left!";
}
elseif ($day==2) {
	echo "3 days left!";
}
elseif ($day==3) {
	echo "2 days left!";
}
elseif ($day==4) {
	echo "1 day left!";
}
elseif ($day==5) {
	echo "it´s Friday!";
}
elseif ($day==6) {
	echo "6 days left!";
}

else{
	echo "5 days left!";
}