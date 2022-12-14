<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ../home.php");
    exit;
}
 
// Include config file
require_once "configuration.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM registrationbbrand WHERE username = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                
                // Check if username exists, if yes then verify password
                if($stmt->num_rows == 1){                    
                    // Bind result variables
                    $stmt->bind_result($id, $username, $hashed_password);
                    if($stmt->fetch()){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: ../home.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
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
    <title>Log-in Best brand</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="./style1.css" />
    <meta name="robots" content="noindex, follow">

</head>

<body class="form-v8">
    <div class="page-content">
        <div class="form-v8-content">
            <div class="form-left">
                <img src="https://www.kibrispdr.org/data/866/vertical-wallpaper-hd-9.jpg"
                    height="620px" width="480" alt="form">
            </div>
            <div class="form-right">
                <div class="tab">
                <div class="tab-inner">
                        <button class="tablinks" onclick="openCity(event, 'sign-in')">Sign In</button>
                    </div>
                </div>
                
                <form class="form-detail" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="tabcontent" id="sign-in">
                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="text" name="username" id="username" class="input-text <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>" required>
                                <span class="label">Nombre de usuario</span>
                                <span class="border"></span>
                                <span class="invalid-feedback"><?php echo $username_err; ?></span>
                            </label>
                        </div>

                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="password" name="password" id="password" class="input-text <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" required>
                                <span class="label">Contraseña</span>
                                <span class="border"></span>
                                <span class="invalid-feedback"><?php echo $password_err; ?></span>
                            </label>
                        </div>

                        
        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

                        <div class="form-row-last">
                            <input type="submit" name="register" class="register" value="Entrar">
                        </div>
                    </div>
                    <p>No tienes una cuenta? <a href="register.php"> Registrate aqui</a>.</p>
                </form>
            </div>
        </div>
    </div>

    </body>
</html>

body {
  background-image: linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)), url("../assets/img/bg.jpg");
  background-attachment: fixed;
  background-position: center;
  background-size: cover;
