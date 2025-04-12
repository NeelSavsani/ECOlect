<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include '../dbconnect.php';

    $ewaste = "e-waste";

    $email = $_POST['email'];
    $address = $_POST['address'];
    $type = $_POST['typeE'];
    $name = $_POST['eName'];
    $weight = $_POST['weight'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    $fullname = '';
    $getUserSql = "SELECT fullname FROM login_credentials WHERE email = '$email'";
    $userResult = mysqli_query($conn, $getUserSql);

    if ($userResult && mysqli_num_rows($userResult) > 0) {
        $userRow = mysqli_fetch_assoc($userResult);
        $fullname = $userRow['fullname'];
    } else {
        echo "User not found.";
        exit;
    }

    //Insert into e-waste table
    $sql = "INSERT INTO `$ewaste` 
    (`Fullname`, `Type`, `EName`, `Quantity`, `Latitude`, `Longitude`, `Address`, `Datetime`) VALUES
    ('$fullname', '$type', '$name', '$weight', '$latitude', '$longitude', '$address', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "E-Waste registered in database";
    } else {
        echo "Error while registering e-waste in database";
    }
}

?>