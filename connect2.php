<?php

$link = new PDO("mysql:host = localhost; dbname = ","root", "");
if($link == false)  // Check connection
{
    //echo "Connection failed";
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else
{
    echo "Connection successfull . Host Infor: ".  "<br>";
}

$sql = "CREATE DATABASE newdb";
if($link->exec($sql) === TRUE)
{
    echo "Database created successfully";
}
else
{
    echo "Error creating database: " . $link->errorInfo();
}