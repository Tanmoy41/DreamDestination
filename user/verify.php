<?php
require '../config.php';

if (isset($_GET['email']) && isset($_GET['v_code'])) {
    $email = mysqli_real_escape_string($conn, $_GET['email']);
    $v_code = mysqli_real_escape_string($conn, $_GET['v_code']);

    $query = "SELECT * FROM `reginfo` WHERE `email` = '$email' AND `verification_code` = '$v_code'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $result_fetch = mysqli_fetch_assoc($result);
            if ($result_fetch['is_verified'] == 0) {
                $update = "UPDATE `reginfo` SET `is_verified` = '1' WHERE `email` = '$email'";
                if (mysqli_query($conn, $update)) {
                    echo "
                        <script>
                        alert('Email verification successful');
                        location.href='login.php';
                        </script>
                    ";
                } else {
                    echo "
                        <script>
                        alert('Cannot run update query: " . mysqli_error($conn) . "');
                        location.href='register.php';
                        </script>
                    ";
                }
            } else {
                echo "
                    <script>
                    alert('Email already registered');
                    location.href='register.php';
                    </script>
                ";
            }
        } else {
            echo "
                <script>
                alert('Email or verification code is incorrect.');
                location.href='register.php';
                </script>
            ";
        }
    } else {
        echo "
            <script>
            alert('Cannot run select query: " . mysqli_error($conn) . "');
            location.href='register.php';
            </script>
        ";
    }
}
?>