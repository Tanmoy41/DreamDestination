<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="register.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>

<body>
    <form action="registerAction.php" method="post">
        <div class="wrapper">
            <div class="h5 font-weight-bold text-center mb-3">Signup</div>
            <div class="form-group d-flex align-items-center">
                <div class="icon"><span class="far fa-user"></span></div>
                <input autocomplete="on" type="text" name="username" class="form-control" placeholder="Username">
            </div>
            <div class="form-group d-flex align-items-center">
                <div class="icon"><span class="far fa-envelope"></span></div>
                <input autocomplete="on" type="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group d-flex align-items-center">
                <div class="icon"><span class="fas fa-phone"></span></div>
                <input autocomplete="on" type="tel" name="mobile" class="form-control" placeholder="Phone">
            </div>
            <div class="form-group d-flex align-items-center">
                <div class="icon"><span class="fas fa-key"></span></div>
                <input autocomplete="on" type="password" name="password" class="form-control" placeholder="Password">
                <div class="icon btn"><span class="fas fa-eye-slash"></span></div>
            </div>
            <div class="form-group d-flex align-items-center">
                <div class="icon"><span class="fas fa-key"></span></div>
                <input autocomplete="on" type="password" name="con_password" class="form-control"
                    placeholder="Confirm Password">
                <div class="icon btn"><span class="fas fa-eye-slash"></span></div>
            </div>
            <div class="terms mb-2">
                By clicking "Signup", you acknowledge that you have read the
                <a href="#">Privacy Policy</a> and agree to the
                <a href="#">Terms of Service</a>.
            </div>
            <button class="btn btn-primary mb-3" type="submit">Signup</button>
            <div class="terms mb-2">Already registered?<a href="login.php"> Click here</a>
            </div>
        </div>
    </form>
</body>

</html>