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
    $sql = "CREATE TABLE IF NOT EXISTS `$database`.`$table` (`User_ID` INT(10) NOT NULL AUTO_INCREMENT , `Fullname` VARCHAR(30) NOT NULL , `Phone` BIGINT(10) NOT NULL , `Password` VARCHAR(20) NOT NULL , `Date-Time` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`User_ID`), UNIQUE (`Phone`)) ENGINE = InnoDB;
";
    $result = mysqli_query($conn, $sql);
    if(!$result)
    {
        echo "Creation of table was failed!<br>";
    }
    $sql = "SELECT * FROM `$database`.`$table`;";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num==0)
    {
        $sql = "INSERT INTO `login_credentials` (`User_ID`, `Fullname`, `Phone`, `Password`, `Date-Time`) VALUES ('1', 'Neel Bipinbhai Savsani', '9712192640', 'Neel@123', current_timestamp());";
        $result = mysqli_query($conn, $sql);
        if(!$result)
        {
            echo "Insertion of data is failed". mysqli_connect_error();
        }
    }
}

?>
