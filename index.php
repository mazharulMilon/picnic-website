<?php

    $connection = mysqli_connect('localhost', 'root', '', 'picnic_list');

    if(isset($_POST['send-btn'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $request = "insert into form(name,email,subject,message) values ('$name', '$email','$subject', '$message')";

        mysqli_query($connection, $request);

    }else {
        echo "something went to wrong! please try later";
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madrasha picnic website template</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>


    <section class="contact-section">
        <div class="container">
            <h2>kalandi gonj fazil madrasha picnic addmission</h2>
            <div class="row">
                <div class="left">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <input type="text" name="name" class="form-control" placeholder="name">
                        <input type="email" name="email" class="form-control" placeholder="email">
                        <input type="text" name="subject" class="form-control" placeholder="subject">
                        <textarea name="message" class="form-control" placeholder="message"></textarea>
                        <button class="submit-btn" name="send-btn">send message</button>
                    </form>
                </div>
                <div class="right">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228482.80976670847!2d88.29491536270238!3d26.51871245840192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e45c25c6ddd0b9%3A0xf978fd14693631fc!2sTetulia%20Upazila!5e0!3m2!1sen!2sbd!4v1646829714101!5m2!1sen!2sbd"
                        style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

</body>

</html>