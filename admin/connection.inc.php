<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if($_SERVER['HTTP_HOST']=='localhost')
{
    $connection=mysqli_connect('localhost','root',"","pesante");
}
else
{
    $conn = mysqli_connect('localhost','pesanlqp_db','207.174.213.150','pesanlqp_db');
}
?>