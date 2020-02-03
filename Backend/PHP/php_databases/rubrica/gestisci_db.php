<?php
    include_once 'db_config.php';
    include_once 'query.php';

    if(isset($_POST['SubmitButton'])){ //check if form was submitted
        $input = $_POST['inputText']; //get input text
        $message = "Success! You entered: ".$input;
    }
?>
