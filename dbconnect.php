<?php
//creating a connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "ecolect";
$table ="login_credentials";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn)
{
    die("Error".mysqli_connect_error());
}
else
{
    $sql = "CREATE DATABASE IF NOT EXISTS `$database`";
    $result = mysqli_query($conn, $sql);
    if(!$result)
    {
        echo "Creation of Database of Failed!<br>";
    }
    $sql = "CREATE TABLE IF NOT EXISTS `$database`.`$table` (`Sr.NO` INT(10) NOT NULL AUTO_INCREMENT , `Fullname` VARCHAR(30) NOT NULL, `Email` VARCHAR(30) NOT NULL , `Phone` BIGINT(10) NOT NULL , `Password` VARCHAR(20) NOT NULL , `DateTime` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`Sr.NO`)) ENGINE = InnoDB;";
    $result = mysqli_query($conn, $sql);
    if(!$result)
    {
        echo "Creation of table was failed!<br>";
    }
}

?>
