<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))) {
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";


        /* Attempt to connect to MySQL database */
        $mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
        if ($stmt = mysqli_prepare($mysqli, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is already taken.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must have atleast 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before inserting in database
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

        if ($stmt = mysqli_prepare($mysqli, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to login page
                header("location: login.php");
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($mysqli);
}
?>
<!---->
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>Sign Up</title>-->
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
<!--    <style>-->
<!--        body {-->
<!--            font: 14px sans-serif;-->
<!--        }-->
<!---->
<!--        .wrapper {-->
<!--            width: 360px;-->
<!--            padding: 20px;-->
<!--        }-->
<!--    </style>-->
<!--</head>-->
<!--<body>-->
<!--<div class="wrapper">-->
<!--    <h2>Sign Up</h2>-->
<!--    <p>Please fill this form to create an account.</p>-->
<!--    <form action="--><?php //echo htmlspecialchars($_SERVER["PHP_SELF"]); ?><!--" method="post">-->
<!--        <div class="form-group">-->
<!--            <label>Username</label>-->
<!--            <input type="text" name="username"-->
<!--                   class="form-control --><?php //echo (!empty($username_err)) ? 'is-invalid' : ''; ?><!--"-->
<!--                   value="--><?php //echo $username; ?><!--">-->
<!--            <span class="invalid-feedback">--><?php //echo $username_err; ?><!--</span>-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label>Password</label>-->
<!--            <input type="password" name="password"-->
<!--                   class="form-control --><?php //echo (!empty($password_err)) ? 'is-invalid' : ''; ?><!--"-->
<!--                   value="--><?php //echo $password; ?><!--">-->
<!--            <span class="invalid-feedback">--><?php //echo $password_err; ?><!--</span>-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label>Confirm Password</label>-->
<!--            <input type="password" name="confirm_password"-->
<!--                   class="form-control --><?php //echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?><!--"-->
<!--                   value="--><?php //echo $confirm_password; ?><!--">-->
<!--            <span class="invalid-feedback">--><?php //echo $confirm_password_err; ?><!--</span>-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <input type="submit" class="btn btn-primary" value="Submit">-->
<!--            <input type="reset" class="btn btn-secondary ml-2" value="Reset">-->
<!--        </div>-->
<!--        <p>Already have an account? <a href="login.php">Login here</a>.</p>-->
<!--    </form>-->
<!--</div>-->
<!--</body>-->
<!--</html>-->
<!---->

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- Custom Theme files -->
    <link href="login.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
</head>
<body>
<!-- main -->
<div class="main-w3layouts wrapper">
    <h1>Creative SignUp Form</h1>
    <div class="main-agileinfo">
        <div class="agileits-top">

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <input type="text" name="username"
                           class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"
                           value="<?php echo $username; ?>" placeholder="Username">
                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
                </div>
                <div class="form-group" style="margin-top: 20px">
                    <input type="password" name="password"
                           class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>"
                           value="<?php echo $password; ?>" placeholder="Password">
                    <span class="invalid-feedback"><?php echo $password_err; ?></span>
                </div>
                <div class="form-group" style="margin-top: 20px">

                    <input type="password" name="confirm_password"
                           class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>"
                           value="<?php echo $confirm_password; ?>" placeholder="Confirm your password">
                    <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                </div>

                <div class="form-group" style="margin-top: 20px">

                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
                <p>Already have an account? <a href="login.php">Login here</a>.</p>
            </form>
        </div>
    </div>
    <!-- copyright -->

    <!-- //copyright -->
    <ul class="colorlib-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<!-- //main -->
</body>
</html>