<?php
if($_SERVER['HTTP_HOST']=='localhost')
{
    $conn = mysqli_connect('localhost','root','','pesante');
}
else
{
    $conn = mysqli_connect('localhost','pesanlqp_db','207.174.213.150','pesanlqp_db');
}
?>