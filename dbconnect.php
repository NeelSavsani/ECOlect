<?php
//creating a connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "ecolect";
$logintb ="login_table";
$ewastetb = "ewaste_table";
$feedbacktb = "feedback_table";
$quiztb = "quiz_table";

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
    $sql = "CREATE TABLE IF NOT EXISTS `$database`.`$logintb` (`Sr.NO` INT(10) NOT NULL AUTO_INCREMENT , `Fullname` VARCHAR(30) NOT NULL , `Email` VARCHAR(30) NOT NULL , `Phone` BIGINT(10) NOT NULL , `Password` VARCHAR(20) NOT NULL , `Address` LONGTEXT NOT NULL , `Pincode` INT(6) NOT NULL , `DateTime` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`Sr.NO`)) ENGINE = InnoDB;";
    $result = mysqli_query($conn, $sql);
    if(!$result)
    {
        echo "Creation of table was failed!<br>";
    }
    $sql = "CREATE TABLE IF NOT EXISTS `$database`.`$ewastetb` (`Sr.No` INT(10) NOT NULL AUTO_INCREMENT , `Fullname` VARCHAR(30) NOT NULL , `Type` VARCHAR(100) NOT NULL , `EName` VARCHAR(30) NOT NULL , `Quantity` INT(10) NOT NULL , `Latitude` FLOAT(15) NOT NULL , `Longitude` FLOAT(15) NOT NULL , `Address` LONGTEXT NOT NULL , `Datetime` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`Sr.No`)) ENGINE = InnoDB;";
    $result = mysqli_query($conn, $sql);
    if(!$result)
    {
        echo "Creation of E-waste table was failed!<br>";
    }

    $sql = "CREATE TABLE IF NOT EXISTS `$database`.`$feedbacktb`(`Sr. No.` INT(10) NOT NULL AUTO_INCREMENT, `Name` VARCHAR(30) NOT NULL, `Email` VARCHAR(30) NOT NULL, `Rating` VARCHAR(20) NOT NULL, `Feedback` LONGTEXT NOT NULL, `Datetime` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`Sr. No.`)) ENGINE = InnoDB;";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo "Creation of Feedback table was failed!<br>";
    }
}

?>

