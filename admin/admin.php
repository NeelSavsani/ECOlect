<?php
echo "welcome admin";
include '../dbconnect.php';
$sql = "SELECT * FROM `$table`"; 
$result = mysqli_query($conn, $sql); 
 
//finding the number of records returned 
$nor = mysqli_num_rows($result); 
echo "$nor"; 
echo " Uers have registered in out portal!<br><br>"; 
if($nor > 0) 
{ 
    echo "<center>"; 
    echo "<table border=1>"; 
    echo "<tr>"; 
    echo "<th>Sr.No</th>"; 
    echo "<th>Fullname</th>"; 
    echo "<th>Email</th>"; 
    echo "<th>Phone</th>"; 
    echo "<th>Password</th>"; 
    echo "<th>Address</th>"; 
    echo "<th>Pincode</th>"; 
    echo "<th>Date Of Registeration</th>"; 
    echo "</tr>"; 
    for ($i = 0; $i<$nor; $i++) 
    { 
        $row = mysqli_fetch_assoc($result); 
        echo "<tr>"; 
        echo "<td>".$row['Sr.NO']."</td>"; 
        echo "<td>".$row['Fullname']."</td>"; 
        echo "<td>".$row['Email']."</td>"; 
        echo "<td>".$row['Phone']."</td>"; 
        echo "<td>".$row['Password']."</td>"; 
        echo "<td>".$row['Address']."</td>"; 
        echo "<td>".$row['Pincode']."</td>"; 
        echo "<td>".$row['DateTime']."</td>"; 
        echo "</tr>"; 
    }
    echo "</table>"; 
    echo "</center>"; 
} 
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="shortcut icon" href="../assets/favicon_io/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    
</body>
</html>