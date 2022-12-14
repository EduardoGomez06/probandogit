<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
 
// Include config file
require_once ("../configuration.php");
 
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE registrationbbrand SET password = ? WHERE id = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("si", $param_password, $param_id);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: login.php");
                exit();
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

    <link rel="stylesheet" href="./style.css" />
    <meta name="robots" content="noindex, follow">

</head>

<body class="form-v8">
    <div class="page-content">
        <div class="form-v8-content">
            <div class="form-left">
                <img src="https://w0.peakpx.com/wallpaper/972/76/HD-wallpaper-black-red-background-abstract-design-fondo-de-pantalla-sprigamelvirus.jpg"
                    height="620px" width="480" alt="form">
            </div>
            <div class="form-right">
                <div class="tab">
                <div class="tab-inner">
                        <button class="tablinks" onclick="openCity(event, 'new_password')">Cambia tu contraseña</button>
                    </div>
                </div>
                
                <form class="form-detail" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="tabcontent" id="new_password">
                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="password" name="new_password" id="new_password" class="input-text <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>" required>
                                <span class="label">New password</span>
                                <span class="border"></span>
                                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
                            </label>
                        </div>

                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="password" name="confirm_password" id="confirm_password" class="input-text <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>" required>
                                <span class="label">Comfirm password</span>
                                <span class="border"></span>
                                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                            </label>
                        </div>

                        <div class="form-row-last">
                            <input type="submit" name="register" class="register" value="Enviar">
                            <a class="btn btn-link ml-2" href="../home.php">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </body>
</html>

