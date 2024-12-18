<?php
if (isset($_POST['login'])) {
    include '../config.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM `reginfo` WHERE username='$username' AND pass='$password'");

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row['is_verified'] == 1) {
            session_start();
            $_SESSION["user_id"] = $row["id"];
            echo "<script>location.href='../Home/homepage/home.php'</script>";
        } else {
            echo "<script>alert('You are not verified yet!! " . mysqli_error($conn) . " ')</script>";
            echo "<script>location.href='login.php'</script>";
        }
    } else {
        echo "<script>alert('Invalid Username and Password!!')</script>";
        echo "<script>location.href='login.php'</script>";
    }
}
?>