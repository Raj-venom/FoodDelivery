<?php

$conn = mysqli_connect('localhost', "root", "", "food");

if (!$conn) {
    die("Sorry, we failed to connect: " . mysqli_connect_error());
} else {
    // echo "Successfully connected";
    echo "<br>";
}

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_num = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `contact_us` (`sn`, `name`, `email`, `phone_number`, `message`) VALUES ( NULL, '$name', '$email', '$phone_num', '$message' )";

    if ($conn->query($sql) == true) {
        echo "Thanks for Contacting Us";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Form not submitted. Please fill out the form and submit it." .  "<br>" ;
    echo "Error:" , $sql . "<br>" . $conn->error;

}

?>
<!-- 
} else {
} -->

<!-- INSERT INTO `contact_us` (`sn`, `name`, `email`, `phone_number`, `message`) VALUES (NULL, 'test', 'fh@hk.com', '234', 'gdfsg'); -->