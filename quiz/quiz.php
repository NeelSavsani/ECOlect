<?php
include '../dbconnect.php';
$user_email = isset($_GET['email']) ? $_GET['email'] : $_SESSION['user_email'];
$sql = "SELECT * FROM `$logintb` WHERE Email = '$user_email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['Fullname'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://kit.fontawesome.com/e05d24f6c7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="quiz.css" />
    <title>ECOLECT - Awareness Quiz</title>
</head>
<body>
    <button class="back-button" onclick="history.back()">
        <i class="fa-solid fa-arrow-left"></i> Back
    </button>
    <div class="content">
        <h1>Welcome to the <strong>ECOlect Awareness Quiz</strong></h1>
        <h3>Let's assess your knowledge about e-waste awareness! ♻️</h3>
        <form id="quizForm">
            <div class="container">
                <div class="box">
                    <div class="question">
                        <b>1. Is a Mobile Phone considered a form of e-waste?</b>
                    </div>
                    <div class="answers">
                        <div class="answer">
                            <input type="radio" class="optn" name="q1" value="ans" /> Yes
                        </div>
                        <div class="answer">
                            <input type="radio" class="optn" name="q1" /> No
                        </div>
                    </div>
                </div>
                <div class="image">
                    <img src="assets/items/mobile.png" alt="Mobile Phone" id="mobile" />
                </div>
            </div>

            <div class="container">
                <div class="box">
                    <div class="question">
                        <b>2. Is a Paper considered a form of e-waste?</b>
                    </div>
                    <div class="answers">
                        <div class="answer">
                            <input type="radio" class="optn" name="q2" /> Yes
                        </div>
                        <div class="answer">
                            <input type="radio" class="optn" name="q2" value="ans" /> No
                        </div>
                    </div>
                </div>
                <div class="image">
                    <img src="assets/items/paper.png" alt="Paper" id="paper" />
                </div>
            </div>

            <div class="container">
                <div class="box">
                    <div class="question">
                        <b>3. Is a Generator considered a form of e-waste?</b>
                    </div>
                    <div class="answers">
                        <div class="answer">
                            <input type="radio" class="optn" name="q3" value="ans" /> Yes
                        </div>
                        <div class="answer">
                            <input type="radio" class="optn" name="q3" /> No
                        </div>
                    </div>
                </div>
                <div class="image">
                    <img src="assets/items/generator.png" alt="Generator" id="generator" />
                </div>
            </div>

            <div class="container">
                <div class="box">
                    <div class="question">
                        <b>4. Is a Microscope considered a form of e-waste?</b>
                    </div>
                    <div class="answers">
                        <div class="answer">
                            <input type="radio" class="optn" name="q4" value="ans" /> Yes
                        </div>
                        <div class="answer">
                            <input type="radio" class="optn" name="q4" /> No
                        </div>
                    </div>
                </div>
                <div class="image">
                    <img src="assets/items/microscope.png" alt="Microscope" id="microscope" />
                </div>
            </div>

            <div class="container bags">
                <div class="box">
                    <div class="question">
                        <b>5. Is a Bag considered a form of e-waste?</b>
                    </div>
                    <div class="answers">
                        <div class="answer">
                            <input type="radio" class="optn" name="q5" /> Yes
                        </div>
                        <div class="answer">
                            <input type="radio" class="optn" name="q5" value="ans" /> No
                        </div>
                    </div>
                </div>
                <div class="image">
                    <img src="assets/items/bag.png" alt="Bag" id="bag" />
                </div>
            </div>

            <div class="container">
                <div class="box">
                    <div class="question">
                        <b>6. Is a Mixer considered a form of e-waste?</b>
                    </div>
                    <div class="answers">
                        <div class="answer">
                            <input type="radio" class="optn" name="q6" value="ans" /> Yes
                        </div>
                        <div class="answer">
                            <input type="radio" class="optn" name="q6" /> No
                        </div>
                    </div>
                </div>
                <div class="image">
                    <img src="assets/items/mixer.png" alt="Mixer" id="mixer" />
                </div>
            </div>

            <div class="container">
                <div class="box">
                    <div class="question">
                        <b>7. Is a Bottle considered a form of e-waste?</b>
                    </div>
                    <div class="answers">
                        <div class="answer">
                            <input type="radio" class="optn" name="q7" /> Yes
                        </div>
                        <div class="answer">
                            <input type="radio" class="optn" name="q7" value="ans" /> No
                        </div>
                    </div>
                </div>
                <div class="image">
                    <img src="assets/items/bottle.png" alt="Bottle" id="bottle" />
                </div>
            </div>

            <div class="container">
                <div class="box">
                    <div class="question">
                        <b>8. Is an ATM considered a form of e-waste?</b>
                    </div>
                    <div class="answers">
                        <div class="answer">
                            <input type="radio" class="optn" name="q8" value="ans" /> Yes
                        </div>
                        <div class="answer">
                            <input type="radio" class="optn" name="q8" /> No
                        </div>
                    </div>
                </div>
                <div class="image">
                    <img src="assets/items/atm.png" alt="ATM" id="atm" />
                </div>
            </div>

            <div class="container">
                <div class="box">
                    <div class="question">
                        <b>9. Is a USB Cable considered a form of e-waste?</b>
                    </div>
                    <div class="answers">
                        <div class="answer">
                            <input type="radio" class="optn" name="q9" value="ans" /> Yes
                        </div>
                        <div class="answer">
                            <input type="radio" class="optn" name="q9" /> No
                        </div>
                    </div>
                </div>
                <div class="image">
                    <img src="assets/items/usb.png" alt="USB Cable" id="usb" />
                </div>
            </div>

            <div class="container">
                <div class="box">
                    <div class="question">
                        <b>10. Is a Wiper considered a form of e-waste?</b>
                    </div>
                    <div class="answers">
                        <div class="answer">
                            <input type="radio" class="optn" name="q10" /> Yes
                        </div>
                        <div class="answer">
                            <input type="radio" class="optn" name="q10" value="ans" /> No
                        </div>
                    </div>
                </div>
                <div class="image">
                    <img src="assets/items/wiper.png" alt="Wiper" id="wiper" />
                </div>
            </div>
            <div class="buttons">
                <button type="reset">Reset <i class="fa-solid fa-rotate-right"></i></button>
                <button type="submit" id="seeResultBtn">See Result <i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </form>
    </div>

    <script>
        const quizForm = document.getElementById('quizForm');
        quizForm.addEventListener('submit', function(event) {
            event.preventDefault();
            const ans = document.querySelectorAll('.optn'); 
            let score = 0;
            let allans = 0;

            for(let i=0; i < ans.length; i++) {
                if(ans[i].checked) {
                    allans++;
                }
            }

            for (let i = 0; i < ans.length; i++) {
                if (ans[i].checked && ans[i].value === "ans") {
                    score++;
                }
            }

            if(allans === 10){
                alert("You have answered all questions");
                window.location.href = "generate_certificate.php?score=" + score + "&name=<?php echo urldecode($name); ?>";
            } else {
                alert("Answer more");
            }
        });

    </script>

</body>
</html>
