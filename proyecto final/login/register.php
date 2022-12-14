<?php
// Include config file
require_once "configuration.php";

// Define variables and initialize with empty values

$username = $email = "";
$username = $password = $confirm_password = "";
$username_err = $email_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))) {
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM registrationbbrand WHERE username = ?";

        if ($stmt = $mysqli->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // store result
                $stmt->store_result();

                if ($stmt->num_rows == 1) {
                    $username_err = "This username is already taken.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }


    // Validate username
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter a email.";
    } elseif (!preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/', trim($_POST["email"]))) {
        $email_err = "Username can only contain letters, numbers, and underscores.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM registrationbbrand WHERE email = ?";

        if ($stmt = $mysqli->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_email);

            // Set parameters
            $param_email = trim($_POST["email"]);

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // store result
                $stmt->store_result();

                if ($stmt->num_rows == 1) {
                    $username_err = "This email is already taken.";
                } else {
                    $email = trim($_POST["email"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
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
    if (empty($username_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO registrationbbrand (username, email, password) VALUES (?, ?, ?)";

        if ($stmt = $mysqli->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("sss", $param_username, $param_email, $param_password);

            // Set parameters
            $param_username = $username;
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Redirect to login page
                header("location: login.php");
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }

    // Close connection
    $mysqli->close();
}
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="robots" content="noindex, follow">
    <title>Registration Best brand</title>
    <link rel="stylesheet" href="./style1.css" />


</head>

<body class="form-v8">
    <div class="page-content">
        <div class="form-v8-content">
            <div class="form-left">
                <img src="https://w0.peakpx.com/wallpaper/975/740/HD-wallpaper-colorful-pallets-colorful-pallets-design-background.jpg"
                    height="620px" width="480" alt="form">
            </div>
            <div class="form-right">
                <div class="tab">
                    <div class="tab-inner">
                        <button class="tablinks" onclick="openCity(event, 'sign-up')" id="defaultOpen">Sign Up</button>
                    </div>

                </div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form-detail" method="post">
                    <div class="form-group" id="sign-up">

                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="text" name="username" id="username"
                                    class="input-text <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"
                                    value="<?php echo $username; ?>" required>
                                <span class="label">Nombre de usuario</span>
                                <span class="border"></span>
                                <span class="invalid-feedback">
                                    <?php echo $username_err; ?>
                                </span>
                            </label>
                        </div>
                        <div class="form-group">
                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="text" name="email" id="email"
                                    class="input-text <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>"
                                    value="<?php echo $email; ?>" required>
                                <span class="label">Correo electronico</span>
                                <span class="border"></span>
                                <span class="invalid-feedback">
                                    <?php echo $email_err; ?>
                                </span>
                            </label>
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="password" name="password" id="password"
                                    class="input-text <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>"
                                    value="<?php echo $password; ?>" required>
                                <span class="label">Contraseña</span>
                                <span class="border"></span>
                                <span class="invalid-feedback">
                                    <?php echo $password_err; ?>
                                </span>
                            </label>
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="password" name="confirm_password" id="confirm_password"
                                    class="input-text <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>"
                                    value="<?php echo $confirm_password; ?>" required>
                                <span class="label">Comfirmar contraseña</span>
                                <span class="border"></span>
                                <span class="invalid-feedback">
                                    <?php echo $confirm_password_err; ?>
                                </span>
                            </label>
                        </div>
                        </div>
                        <div class="form-row-last">
                            <input type="submit" name="register" class="register" value="Registrarse">
                        </div>
                        
                        <p>Ya tienes una cuenta? <a href="login.php"> Entra aqui</a>.</p>
                    </div>
                </form>

    </body>
</html>