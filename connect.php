<?php

$link = mysqli_connect("localhost","root","","mydb");
if($link == false)  // Check connection
{
	//echo "Connection failed";
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else
{
    echo "Connection successfull . Host Infor: ", mysqli_get_host_info($link), "<br>";
    

}
$sql = "CREATE TABLE users (
    id INT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
)";


if(mysqli_query($link, $sql))
{
    echo "Tables created successfully";
}
else
{
    echo "Error creating database: " . mysqli_error($link);
}
    mysqli_close($link);

?>