<?php

$link = mysqli_connect("localhost", "root", "", "shop_db");

if (
    isset($_POST['username']) &&
    isset($_POST['email']) &&
    !empty($_POST['email']) &&
    isset($_POST['repassword']) &&
    !empty($_POST['repassword']) &&
    isset($_POST['password']) &&
    !empty($_POST['username']) &&
    !empty($_POST['password'])
) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];
    $email = $_POST["email"];
} else {
    exit("برخی از فیلد ها مقدار دهی نشده اند");
}

if ($password != $repassword) {
    exit("کلمه عبور و تکرار آن مشابه نیست");
}

if (filter_var($email, FILTER_VALIDATE_EMAIL) === false)
    exit("ایمیل اشتباه است");

// Check if the user already exists
$check_query = "SELECT * FROM users WHERE username = '$username' AND email = '$email'";
$check_result = mysqli_query($link, $check_query);

if (mysqli_fetch_array($check_result)) {
    echo("<p style='color:red;'>شما قبلا وارد شده اید</p>");
    exit();
}

// Insert the new user if they don't already exist
$query = "INSERT INTO users (username, email, password, repassword) VALUES ('$username', '$email', '$password', '$repassword')";
$result = mysqli_query($link, $query);

if ($result) {
    echo("<p style='color:green;'>$username عضو جدید با موفقیت ثبت شد</p>");
} else {
    echo("<p style='color:red;'>خطایی در ثبت عضویت رخ داده است</p>");
}

mysqli_close($link);

?>