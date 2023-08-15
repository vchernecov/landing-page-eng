<?php
if (isset($_POST['name'], $_POST['email'], $_POST['phone'])) {

    //Post data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    //mail settings
    $to = "unitedlinguschool@gmail.com";
    $subject = 'Soni Repairs - Support Request';
    $body = <<<EMAIL

Hi
My name is $name.

My email is: $email
Phone Number: $phone

I want to learn English:)
EMAIL;

    if (mail($to, $subject, $body)) {
        $feedback = '*Message sent! You will receive a reply shortly!';
    } else {
        $feedback = '*Message failed to send';
    }
} else {
    $feedback = 'Missing Params';
}

echo $feedback;