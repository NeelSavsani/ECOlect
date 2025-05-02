<?php
$name = $_GET['name'] ?? 'Neel Savsani';
$score = $_GET['score'] ?? '0';
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="template.css">
</head>
<body>
    <div class="certificate">
        <img src="assets/rmc.png" alt="RMC" id="rmc">
        <img src="assets/ssip.png" alt="ssip" id="ssip">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <!-- <br> -->
        <h1>CERTIFICATE OF AWARENESS</h1>
        <p id="one"> Rajkot Municipal Corporation & Collector Office - Rajkot, hereby certify that this
        certificate is awarded to</p>
        <h2 id="name"><?php echo htmlspecialchars($name); ?></h2>
        <p id="one"> for actively participating in the E-waste awareness quiz and showing commitment to
        a cleaner, greener future.</p>
        <h2>E-Waste Awareness Quiz</h2>
        <h3> "Let's break the chain of E-waste pollution - every action counts!"</h3>
        <p id="two"> For successfully completing the quiz with a score of <strong><?php echo htmlspecialchars($score); ?>/10 Points</strong></p>
        <br>
        <img src="assets/ECOlect_rm.png" alt="ECOLECT" id="ecolect">
        <img src="assets/eco.png" alt="eco" id="eco">
        <img src="assets/ie.png" alt="Indian Emblem" id="ie">

    </div>
</body>
</html>
