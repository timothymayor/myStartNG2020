<?php 

// print_r($_POST)

if(isset($_POST['first_name'],  
    ['last_name']  
    ['email'] 
    ['department'] 
    ['gender'] 
    ['message']
)) { 
    $dataOne = $_POST['first_name'];
    $dataTwo = $_POST['last_name'];
    $dataThree = $_POST['email'];
    $dataFour = $_POST['department'];
    $dataFive = $_POST['gender'];
    $dataSix = $_POST['message'];

    $fp = fopen('contact.txt', 'a');
    fwrite($fp, $dataOne);
    fwrite($fp, $dataTwo);
    fwrite($fp, $dataThree);
    fwrite($fp, $dataFour);
    fwrite($fp, $dataFive);
    fwrite($fp, $dataSix);

    fclose($fp);
}

?>
