<?php

    // print_r($_POST)

    if(isset($_POST['submit'])) { 

    $data=$_POST['first_name'] . ' , ' . $_POST['last_name']. ' , ' . $_POST['email']. ' , ' . $_POST['department']. ' , '  . $_POST['message']. "\n";
    
    $filename = $_POST['first_name'].$_POST['last_name'].".txt";

    $file = fopen($filename, 'a');
    fwrite($file, $data);
    fclose($file);

    }

?>