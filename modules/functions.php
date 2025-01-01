<?php
## If the output of radiobuttons was anything but 'yes' or 'no', the program will die
function yes_no_validate(){
    if ($_POST['answer'] != 'yes' && $_POST['answer'] != 'no') {
        die();
    }
}

function add_score($addition){
    $_SESSION['score'] = (int)$_SESSION['score'] + (int)$addition;
}

## USEFUL FUNCTIONS FOR PERSIAN/ARABIC WEBSITES
function faTOen($string){
    return strtr($string, array('۰' => '0', '۱' => '1', '۲' => '2', '۳' => '3', '۴' => '4', '۵' => '5', '۶' => '6', '۷' => '7', '۸' => '8', '۹' => '9', '٠' => '0', '١' => '1', '٢' => '2', '٣' => '3', '٤' => '4', '٥' => '5', '٦' => '6', '٧' => '7', '٨' => '8', '٩' => '9'));
}
function enTOfa($string){
    return strtr($string, array('0' => '۰', '1' => '۱', '2' => '۲', '3' => '۳', '4' => '۴', '5' => '۵', '6' => '۶', '7' => '۷', '8' => '۸', '9' => '۹'));
}

function writeDataToFile($data, $filePath){
    // Check if the directory exists, if not, create it
    if (!file_exists($filePath)) {
        mkdir($filePath, 0770, true);
    }

    $fileName = $_SESSION['name'];
    $i = 2;
    while (file_exists($filePath . $fileName . '.php')) {
        $fileName = $_SESSION['name'] . " ($i)";
        $i++;
    }
    $file = fopen($filePath . $fileName . '.php', 'w');
    // Write data to a php file so that it's not accessible from the browser
    fwrite($file, "<?php \n" . $data . "\n?>");
    fclose($file);
    chmod($filePath . $fileName . '.php', 0640);
}