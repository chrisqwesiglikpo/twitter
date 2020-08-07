<?php 
 include 'database/connection.php';
 include 'classes/User.php';
 include 'classes/Tweet.php';
 include 'classes/Follow.php';
 include 'classes/Message.php';

 global $pdo;
 
 session_start();

 $getFromU=new User($pdo);
 $getFromT=new Tweet($pdo);
 $getFromF=new Follow($pdo);
 $getFromM=new Message($pdo);


define("BASE_URL","http://localhost/twitter/");
?>