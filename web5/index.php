<?php

session_start();
    if(!isset($_SESSION['views'])){
        $_SESSION['views'] = 1;
    }else {
        $_SESSION['views']++;
    }
    if($_SESSION['views'] == 10)
    {
    header("Location:congratulations.php");
    }
    $num_visits = $_SESSION['views'];
?>
   
<h1>Hello</h1>
<p>You have visited this page <?= $num_visits ?> times</p>
 <?php if($_SESSION['views'] == 5){
    echo 'Thank you for visiting the page a lot.';}?>
<p><a href="?reset=true">Reset</a></p>



