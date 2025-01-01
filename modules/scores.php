<?php
# Each case validates and processes the last steps' things:
    switch ($_POST['step']) {
        case '1':
            if (mb_strlen($_POST['name']) < 50) {
                $_SESSION['name'] = $_POST['name'];
            } else {
                die();
            }
            if (mb_strlen($_POST['tel']) < 15) {
                $_SESSION['tel'] = $_POST['tel'];
            } else {
                die();
            }
            if ($_POST['gender'] == 'male' || $_POST['gender'] == 'female') {
                $_SESSION['gender'] = $_POST['gender'];
            } else {
                die();
            }
            $_SESSION['age'] = $_POST['age'];
            if (ctype_digit($_SESSION['age'])) {
                if ($_SESSION['age'] > 45) {
                    add_score(5);
                }
            } else {
                die();
            }
        break;
        case '2':
            $height = $_POST['height'];
            $weight = $_POST['weight'];
            ## In this sample quiz if BMI is above 27, 5 points are added to the score
            if (
                ctype_digit($height) && ctype_digit($weight)
                && $height > 30 && $height < 250 && $weight < 300 && $weight > 1
            ) {
                if ($weight / (($height / 100) * ($height / 100)) > 27) {
                    add_score(5);
                }
            } else {
                die();
            }
        break;
        case '3':
            yes_no_validate();
            if ($_POST['answer'] == 'yes') {
                add_score(5);
            }
            break;

        case '4':
            yes_no_validate();
            if ($_POST['answer'] == 'yes') {
                add_score(5);
            }
            break;
        case '5':
            yes_no_validate();
            if ($_POST['answer'] == 'yes') {
                add_score(5);
            }
            break;
        case '6':
            yes_no_validate();
            if ($_POST['answer'] == 'yes') {
                add_score(5);
            }
            break;
        case '7':
            yes_no_validate();
            if ($_POST['answer'] == 'yes') {
                add_score(5);
            }
            break;
        case '8':
            yes_no_validate();
            if ($_POST['answer'] == 'yes') {
                add_score(5);
            }
            break;
        case '9':
            yes_no_validate();
            if ($_POST['answer'] == 'yes') {
                add_score(5);
            }
            break;
        case '10':
            yes_no_validate();
            if ($_POST['answer'] == 'yes') {
                add_score(5);
            }
            break;
        case '11':
            yes_no_validate();
            if ($_POST['answer'] == 'yes') {
                add_score(5);
            }
            break;
        case '12':
            yes_no_validate();
            if ($_POST['answer'] == 'yes') {
                add_score(5);
            }
            break;
        case '13':
            yes_no_validate();
            if ($_POST['answer'] == 'yes') {
                add_score(5);
            }
            break;
        case '14':
            yes_no_validate();
            if ($_POST['answer'] == 'yes') {
                add_score(5);
            }
            break;
        case '15':
            yes_no_validate();
            if ($_POST['answer'] == 'yes') {
                add_score(5);
            }
            break;
        case '16':
            yes_no_validate();
            if ($_POST['answer'] == 'yes') {
                add_score(5);
            }
            break;
        case '17':
            yes_no_validate();
            if ($_POST['answer'] == 'yes') {
                add_score(5);
            }
            break;
        case '18':
            yes_no_validate();
            if ($_POST['answer'] == 'yes') {
                add_score(5);
            }
            break;
        case '19':
            yes_no_validate();
            if ($_POST['answer'] == 'yes') {
                add_score(5);
            }
            break;
        case '20':
            yes_no_validate();
            if ($_POST['answer'] == 'yes') {
                add_score(5);
            }
            break;

        default:
            session_unset();
            break;
}

