<?php
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Admin Panel</title>
    <link rel='shortcut icon' href='../assets/favicon_io/favicon.ico' type='image/x-icon'>
    <link rel='stylesheet' href='admin.css'>
</head>
<body>
    <div class='container'>
        <h1>Welcome, Admin</h1>";

include '../dbconnect.php';
$sql = "SELECT * FROM `$table`"; 
$result = mysqli_query($conn, $sql); 

$nor = mysqli_num_rows($result); 
echo "<p><strong>$nor</strong> users have registered in our portal!</p>"; 

if ($nor > 0) {
    echo "<div class='table-wrapper'>";
    echo "<table>";
    echo "<tr>
            <th>Sr.No</th>
            <th>Fullname</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Password</th>
            <th>Address</th>
            <th>Pincode</th>
            <th>Registration Date</th>
        </tr>";

    for ($i = 0; $i < $nor; $i++) {
        $row = mysqli_fetch_assoc($result);
        echo "<tr>
                <td>".$row['Sr.NO']."</td>
                <td>".$row['Fullname']."</td>
                <td>".$row['Email']."</td>
                <td>".$row['Phone']."</td>
                <td>".$row['Password']."</td>
                <td>".$row['Address']."</td>
                <td>".$row['Pincode']."</td>
                <td>".$row['DateTime']."</td>
              </tr>";
    }

    echo "</table>";
    echo "</div>";
}

echo "</div>
</body>
</html>";
?>
