<?php

    $connection = mysqli_connect('localhost', 'root', '', 'picnic_list');

    if(isset($_POST['send-btn'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $request = "insert into form(name,email,subject,message) values ('$name', '$email','$subject', '$message')";

        mysqli_query($connection, $request);

        header('localhost:index.php');
    }else {
        echo "something went to wrong! please try later";
    }

?>