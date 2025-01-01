<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
    <title>Quizita Sample Page</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1>Quiz Title</h1>
    </header>
    <main>
        <h2 id="title" style="text-align: center;">
            <?php
            if ($_POST['step'] != null) {
                if ((int)$_POST['step'] > 20) {
                    echo "Results";
                } else {
                    echo "Question " . $_POST['step'] . " of " . 20;
                }
            } ?></h2>

        <form action="./index.php" method="post">
            <?php switch ($_POST['step']) {
                case '1': ?>
                    <p>Enter your height: </p>
                    <br><input type="number" class="box" name="height" min="30" max="250" step="1" title="Enter your height (in centimeters)" oninvalid="this.setCustomValidity('Enter your height (in centimeters)')" onchange="this.setCustomValidity('')" required><br>
                    <p>Enter your weight: </p>
                    <br><input type="number" class="box" name="weight" min="1" max="300" step="1" title="Enter your weight (in kilograms)" oninvalid="this.setCustomValidity('Enter your weight (in kilograms)')" onchange="this.setCustomValidity('')" required><br>
                    <input type="hidden" name="step" value="<?= $_POST['step'] + 1 ?>">
                <?php break;
                case '2': ?>
                    <p>Question 2...</p>
                    <div class="wrapper">
                        <input type='radio' name='answer' id="option-1" value='no' required oninvalid="this.setCustomValidity('Please select an option')" onfocus="this.setCustomValidity('')">
                        <label class="option option-1" for="option-1">
                            <div class="dot"></div>
                            <span>No</span>
                        </label>
                        <input type='radio' name='answer' id="option-2" value='yes'>
                        <label class="option option-2" for="option-2">
                            <div class="dot"></div>
                            <span>Yes</span>
                        </label>
                        <input type="hidden" name="step" value="<?= $_POST['step'] + 1 ?>">
                    </div><br>
                <?php break;
                case '3': ?>
                    <p>Question 3...</p>
                    <div class="wrapper">
                        <input type='radio' name='answer' id="option-1" value='no' required oninvalid="this.setCustomValidity('Please select an option')" onfocus="this.setCustomValidity('')">
                        <label class="option option-1" for="option-1">
                            <div class="dot"></div>
                            <span>No</span>
                        </label>
                        <input type='radio' name='answer' id="option-2" value='yes'>
                        <label class="option option-2" for="option-2">
                            <div class="dot"></div>
                            <span>Yes</span>
                        </label>
                        <input type="hidden" name="step" value="<?= $_POST['step'] + 1 ?>">
                    </div><br>
                <?php break;
                case '4': ?>
                    <p>Question 4...</p>
                    <div class="wrapper">
                        <input type='radio' name='answer' id="option-1" value='no' required oninvalid="this.setCustomValidity('Please select an option')" onfocus="this.setCustomValidity('')">
                        <label class="option option-1" for="option-1">
                            <div class="dot"></div>
                            <span>No</span>
                        </label>
                        <input type='radio' name='answer' id="option-2" value='yes'>
                        <label class="option option-2" for="option-2">
                            <div class="dot"></div>
                            <span>Yes</span>
                        </label>
                        <input type="hidden" name="step" value="<?= $_POST['step'] + 1 ?>">
                    </div><br>
                <?php break;
                case '5': ?>
                    <p>Question 5...</p>
                    <div class="wrapper">
                        <input type='radio' name='answer' id="option-1" value='no' required oninvalid="this.setCustomValidity('Please select an option')" onfocus="this.setCustomValidity('')">
                        <label class="option option-1" for="option-1">
                            <div class="dot"></div>
                            <span>No</span>
                        </label>
                        <input type='radio' name='answer' id="option-2" value='yes'>
                        <label class="option option-2" for="option-2">
                            <div class="dot"></div>
                            <span>Yes</span>
                        </label>
                        <input type="hidden" name="step" value="<?= $_POST['step'] + 1 ?>">
                    </div><br>
                <?php break;
                case '6': ?>
                    <p>Question 6...</p>
                    <div class="wrapper">
                        <input type='radio' name='answer' id="option-1" value='no' required oninvalid="this.setCustomValidity('Please select an option')" onfocus="this.setCustomValidity('')">
                        <label class="option option-1" for="option-1">
                            <div class="dot"></div>
                            <span>No</span>
                        </label>
                        <input type='radio' name='answer' id="option-2" value='yes'>
                        <label class="option option-2" for="option-2">
                            <div class="dot"></div>
                            <span>Yes</span>
                        </label>
                        <input type="hidden" name="step" value="<?= $_POST['step'] + 1 ?>">
                    </div><br>
                <?php break;
                case '7': ?>
                    <p>Question 7...</p>
                    <div class="wrapper">
                        <input type='radio' name='answer' id="option-1" value='no' required oninvalid="this.setCustomValidity('Please select an option')" onfocus="this.setCustomValidity('')">
                        <label class="option option-1" for="option-1">
                            <div class="dot"></div>
                            <span>No</span>
                        </label>
                        <input type='radio' name='answer' id="option-2" value='yes'>
                        <label class="option option-2" for="option-2">
                            <div class="dot"></div>
                            <span>Yes</span>
                        </label>
                        <input type="hidden" name="step" value="<?= $_POST['step'] + 1 ?>">
                    </div><br>
                <?php break;
                case '8': ?>
                    <p>Question 8...</p>
                    <div class="wrapper">
                        <input type='radio' name='answer' id="option-1" value='no' required oninvalid="this.setCustomValidity('Please select an option')" onfocus="this.setCustomValidity('')">
                        <label class="option option-1" for="option-1">
                            <div class="dot"></div>
                            <span>No</span>
                        </label>
                        <input type='radio' name='answer' id="option-2" value='yes'>
                        <label class="option option-2" for="option-2">
                            <div class="dot"></div>
                            <span>Yes</span>
                        </label>
                        <input type="hidden" name="step" value="<?= $_POST['step'] + 1 ?>">
                    </div><br>
                <?php break;
                case '9': ?>
                    <p>Question 9...</p>
                    <div class="wrapper">
                        <input type='radio' name='answer' id="option-1" value='no' required oninvalid="this.setCustomValidity('Please select an option')" onfocus="this.setCustomValidity('')">
                        <label class="option option-1" for="option-1">
                            <div class="dot"></div>
                            <span>No</span>
                        </label>
                        <input type='radio' name='answer' id="option-2" value='yes'>
                        <label class="option option-2" for="option-2">
                            <div class="dot"></div>
                            <span>Yes</span>
                        </label>
                        <input type="hidden" name="step" value="<?= $_POST['step'] + 1 ?>">
                    </div><br>
                <?php break;
                case '10': ?>
                    <p>Question 10...</p>
                    <div class="wrapper">
                        <input type='radio' name='answer' id="option-1" value='no' required oninvalid="this.setCustomValidity('Please select an option')" onfocus="this.setCustomValidity('')">
                        <label class="option option-1" for="option-1">
                            <div class="dot"></div>
                            <span>No</span>
                        </label>
                        <input type='radio' name='answer' id="option-2" value='yes'>
                        <label class="option option-2" for="option-2">
                            <div class="dot"></div>
                            <span>Yes</span>
                        </label>
                        <input type="hidden" name="step" value="<?= $_POST['step'] + 1 ?>">
                    </div><br>
                <?php break;
                case '11': ?>
                    <p>Question 11...</p>
                    <div class="wrapper">
                        <input type='radio' name='answer' id="option-1" value='no' required oninvalid="this.setCustomValidity('Please select an option')" onfocus="this.setCustomValidity('')">
                        <label class="option option-1" for="option-1">
                            <div class="dot"></div>
                            <span>No</span>
                        </label>
                        <input type='radio' name='answer' id="option-2" value='yes'>
                        <label class="option option-2" for="option-2">
                            <div class="dot"></div>
                            <span>Yes</span>
                        </label>
                        <input type="hidden" name="step" value="<?= $_POST['step'] + 1 ?>">
                    </div><br>
                <?php break;
                case '12': ?>
                    <p>Question 12...</p>
                    <div class="wrapper">
                        <input type='radio' name='answer' id="option-1" value='no' required oninvalid="this.setCustomValidity('Please select an option')" onfocus="this.setCustomValidity('')">
                        <label class="option option-1" for="option-1">
                            <div class="dot"></div>
                            <span>No</span>
                        </label>
                        <input type='radio' name='answer' id="option-2" value='yes'>
                        <label class="option option-2" for="option-2">
                            <div class="dot"></div>
                            <span>Yes</span>
                        </label>
                        <input type="hidden" name="step" value="<?= $_POST['step'] + 1 ?>">
                    </div><br>
                <?php break;
                case '13': ?>
                    <p>Question 13...</p>
                    <div class="wrapper">
                        <input type='radio' name='answer' id="option-1" value='no' required oninvalid="this.setCustomValidity('Please select an option')" onfocus="this.setCustomValidity('')">
                        <label class="option option-1" for="option-1">
                            <div class="dot"></div>
                            <span>No</span>
                        </label>
                        <input type='radio' name='answer' id="option-2" value='yes'>
                        <label class="option option-2" for="option-2">
                            <div class="dot"></div>
                            <span>Yes</span>
                        </label>
                        <input type="hidden" name="step" value="<?= $_POST['step'] + 1 ?>">
                    </div><br>
                <?php break;
                case '14': ?>
                    <p>Question 14...</p>
                    <div class="wrapper">
                        <input type='radio' name='answer' id="option-1" value='no' required oninvalid="this.setCustomValidity('Please select an option')" onfocus="this.setCustomValidity('')">
                        <label class="option option-1" for="option-1">
                            <div class="dot"></div>
                            <span>No</span>
                        </label>
                        <input type='radio' name='answer' id="option-2" value='yes'>
                        <label class="option option-2" for="option-2">
                            <div class="dot"></div>
                            <span>Yes</span>
                        </label>
                        <input type="hidden" name="step" value="<?= $_POST['step'] + 1 ?>">
                    </div><br>
                <?php break;
                case '15': ?>
                    <p>Question 15...</p>
                    <div class="wrapper">
                        <input type='radio' name='answer' id="option-1" value='no' required oninvalid="this.setCustomValidity('Please select an option')" onfocus="this.setCustomValidity('')">
                        <label class="option option-1" for="option-1">
                            <div class="dot"></div>
                            <span>No</span>
                        </label>
                        <input type='radio' name='answer' id="option-2" value='yes'>
                        <label class="option option-2" for="option-2">
                            <div class="dot"></div>
                            <span>Yes</span>
                        </label>
                        <input type="hidden" name="step" value="<?= $_POST['step'] + 1 ?>">
                    </div><br>
                <?php break;
                case '16': ?>
                    <p>Question 16...</p>
                    <div class="wrapper">
                        <input type='radio' name='answer' id="option-1" value='no' required oninvalid="this.setCustomValidity('Please select an option')" onfocus="this.setCustomValidity('')">
                        <label class="option option-1" for="option-1">
                            <div class="dot"></div>
                            <span>No</span>
                        </label>
                        <input type='radio' name='answer' id="option-2" value='yes'>
                        <label class="option option-2" for="option-2">
                            <div class="dot"></div>
                            <span>Yes</span>
                        </label>
                        <input type="hidden" name="step" value="<?= $_POST['step'] + 1 ?>">
                    </div><br>
                <?php break;
                case '17': ?>
                    <p>Question 17...</p>
                    <div class="wrapper">
                        <input type='radio' name='answer' id="option-1" value='no' required oninvalid="this.setCustomValidity('Please select an option')" onfocus="this.setCustomValidity('')">
                        <label class="option option-1" for="option-1">
                            <div class="dot"></div>
                            <span>No</span>
                        </label>
                        <input type='radio' name='answer' id="option-2" value='yes'>
                        <label class="option option-2" for="option-2">
                            <div class="dot"></div>
                            <span>Yes</span>
                        </label>
                        <input type="hidden" name="step" value="<?= $_POST['step'] + 1 ?>">
                    </div><br>
                <?php break;
                case '18': ?>
                    <p>Question 18...</p>
                    <div class="wrapper">
                        <input type='radio' name='answer' id="option-1" value='no' required oninvalid="this.setCustomValidity('Please select an option')" onfocus="this.setCustomValidity('')">
                        <label class="option option-1" for="option-1">
                            <div class="dot"></div>
                            <span>No</span>
                        </label>
                        <input type='radio' name='answer' id="option-2" value='yes'>
                        <label class="option option-2" for="option-2">
                            <div class="dot"></div>
                            <span>Yes</span>
                        </label>
                        <input type="hidden" name="step" value="<?= $_POST['step'] + 1 ?>">
                    </div><br>
                <?php break;
                case '19': ?>
                    <p>Question 19...</p>
                    <div class="wrapper">
                        <input type='radio' name='answer' id="option-1" value='no' required oninvalid="this.setCustomValidity('Please select an option')" onfocus="this.setCustomValidity('')">
                        <label class="option option-1" for="option-1">
                            <div class="dot"></div>
                            <span>No</span>
                        </label>
                        <input type='radio' name='answer' id="option-2" value='yes'>
                        <label class="option option-2" for="option-2">
                            <div class="dot"></div>
                            <span>Yes</span>
                        </label>
                        <input type="hidden" name="step" value="<?= $_POST['step'] + 1 ?>">
                    </div><br>
                <?php break;
                case '20': ?>
                    <p>Question 20...</p>
                    <div class="wrapper">
                        <input type='radio' name='answer' id="option-1" value='no' required oninvalid="this.setCustomValidity('Please select an option')" onfocus="this.setCustomValidity('')">
                        <label class="option option-1" for="option-1">
                            <div class="dot"></div>
                            <span>No</span>
                        </label>
                        <input type='radio' name='answer' id="option-2" value='yes'>
                        <label class="option option-2" for="option-2">
                            <div class="dot"></div>
                            <span>Yes</span>
                        </label>
                        <input type="hidden" name="step" value="<?= $_POST['step'] + 1 ?>">
                    </div><br>
                <?php break;
                case '21':
                    //This is the final page
                    $data = "Name: " . $_SESSION['name'] .
                        "\nAge: " . $_SESSION['age'] .
                        "\nGender: " . $_SESSION['gender'] .
                        "\nScore: " . $_SESSION['score'] .
                        "\nPhone: " . $_SESSION['tel'];
                    writeDataToFile($data, './list/');
                    if ((int)$_SESSION['score'] <= 10) {
                        echo "<p>You scored <strong>less than 10</strong></p>";
                    } elseif ((int)$_SESSION['score'] <= 30) {
                        echo "<p>You scored <span style=\"color:orange\">above 10</span></p>";
                    } elseif ((int)$_SESSION['score'] <= 50) {
                        echo "<p>You scored <span style=\"color:red\">above 30</span></p>";
                    } elseif ((int)$_SESSION['score'] > 50) {
                        echo "<p>You scored <span style=\"color:red\">above 50</span></p>";
                    }
                    break;
                default:
                ?>
                    <!-- THE FOLLOWING IS THE FIRST PAGE SHOWN TO THE USER -->
                    <p>Please enter your ID:</p>
                    <label for="name">Name: </label><br><input class="box" type="text" name="name" title="Please enter your name..." required oninvalid="this.setCustomValidity('Please enter your name...')" onchange="this.setCustomValidity('')"><br>

                    <fieldset class="wrapper" required oninvalid="this.setCustomValidity('Please select one option');" onfocus="this.setCustomValidity('')">
                        <legend>Gender:</legend>
                        <input type="radio" id="option-1" name="gender" value="female" required>
                        <label class="option option-1" for="option-1">
                            <div class="dot"></div>
                            <span>Female</span>
                        </label>
                        <input type="radio" id="option-2" name="gender" value="male">
                        <label class="option option-2" for="option-2">
                            <div class="dot"></div>
                            <span>Male</span>
                        </label>
                    </fieldset><br>

                    <label for="age">Age: </label><br><input class="box" type="number" name="age" min="1" max="100" step="1" title="Please enter your age (in numbers)" oninvalid="this.setCustomValidity('Please enter your age (in numbers)')" onchange="this.setCustomValidity('')" required><br>
                    <input type="hidden" name="step" value="1">

                    <label for="tel">Tel: </label><br><input class="box" id="tel"
                    placeholder="09123456789" type="text" name="tel" min="1" max="100" step="1"
                    oninvalid="this.setCustomValidity('Please enter your phone number')"
                    onchange="this.setCustomValidity('')"
                    title="Please enter your phone number correctly" required><br>
            <?php
                    break;
            }
            if ((int)$_POST['step'] <= 20) {
                echo "<input type=\"submit\" value=\"Next\">";
            } ?>
        </form>
    </main>
</body>
</html>

