<?php
    include '../config.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    function sendEmail($email, $v_code){
        require '../PHPMailer/PHPMailer.php';
        require '../PHPMailer/SMTP.php';
        require '../PHPMailer/Exception.php';

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();                                            
            $mail->Host       = 'smtp.gmail.com';                     
            $mail->SMTPAuth   = true;                                  
            $mail->Username   = 'tanmoytalukder104@gmail.com';
            $mail->Password   = 'kljhexmqxddbfhdz';                               
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
            $mail->Port       = 465;                                     
        
            $mail->setFrom('tanmoytalukder104@gmail.com', 'Tanmoy');
            $mail->addAddress($email);
        
            $mail->isHTML(true);
            $mail->Subject = 'Email verification from Tanmoy';
            $mail->Body    = "Thanks for registration!
            Click the link below to verify the email address.
            <a href='http://localhost/php/DreamDestination/user/verify.php?email=" . urlencode($email) . "&v_code=" . urlencode($v_code) . "'> Verify your Email.</a>";
        
            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    $username = $_POST['username'];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];
    $con_password = $_POST["con_password"];
    $address = $_POST["address"];
    $dob = $_POST['dob'];


    $_mobile_pattern = "/(\+88)?-?01[3-9]\d{8}/";
    $_email_pattern = "/[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}/";

    $v_code = bin2hex(random_bytes(16));
    $insert_query ="INSERT INTO `reginfo`(`username`, `email`, `mobile`, `pass`, `addressline`, `country`, `verification_code`, `is_verified`) VALUES ('$username','$email', '$mobile', '$password', '$address', '$dob', '$v_code', '0')";
    $duplicate_username = mysqli_query($conn,"SELECT * FROM `reginfo` WHERE username='$username'");
    $duplicate_email = mysqli_query($conn,"SELECT * FROM `reginfo` WHERE email='$email'");

    if(strlen($username)<3 || strlen($username)>20){
        echo "<script>alert('User Name should be 3-20 char!!!!')</script>";
        echo "<script>location.href='register.php'</script>";
    }
    else if(!preg_match($_email_pattern,$email)){
        echo "<script>alert('Invalid Email!!')</script>";
        echo "<script>location.href='register.php'</script>";
    }
    else if(!preg_match($_mobile_pattern,$mobile)){
        echo "<script>alert('Invalid Mobile Number!!')</script>";
        echo "<script>location.href='register.php'</script>";
    }

    else if($password !== $con_password){
        echo "<script>alert('Pass and con-pass is not matching!!')</script>";
        echo "<script>location.href='register.php'</script>";
    }
    else if(mysqli_num_rows($duplicate_username)>0){
        echo "<script>alert('username already taken!!')</script>";
        echo "<script>location.href='register.php'</script>";
    }
    else if(mysqli_num_rows($duplicate_email)>0){
        echo "<script>alert('email already taken!!')</script>";
        echo "<script>location.href='register.php'</script>";
    }
    else{
        if(mysqli_query($conn,$insert_query) && sendEmail($_POST['email'],$v_code)){
            echo "<script>alert('Inserted!!')</script>";
            echo "<script>location.href='login.php'</script>";
        }
        else{
            echo "
                <script>
                    alert('Cannot run update query: " . mysqli_error($conn) . "');
                    location.href='register.php';
                </script>
                ";
        }  
    }