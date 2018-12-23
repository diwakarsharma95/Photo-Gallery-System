<?php

$connection = mysqli_connect('localhost','root','root','gallery_db');
if(!$connection){
    die("Database connection failed");
}
