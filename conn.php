<?php

session_start();
$servername="localhost";
$emailid="root";
$password="";
$firstname="";
$lastname="";
$gender="";
$bday="";
$country="";
$address="";
$phoneno="";
$status="";
$hobbies="";
$single="";
$about="";
$skills="";
$think="";
$feedback="";
$terms="";
$dbname="registration";



//connect to database
$db = mysqli_connect('localhost','root','','registration');

