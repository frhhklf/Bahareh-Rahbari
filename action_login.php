<?php
$link = mysqli_connect("localhost", "root", "", "shop_db");


if (
    isset($_POST['username']) &&
    isset($_POST['password']) &&
    !empty($_POST['username']) &&
    !empty($_POST['password'])
) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    if ($row) {
        echo "<p style='color: green;'>{$row['username']} به فروشگاه ایرانیان خوش امدید</p>";
    } else {
        echo "رمز عبور یا نام کاربری اشتباه است";
    }}
else{
    echo("وارد کردن فیلد ها الزامی است");
}



?>