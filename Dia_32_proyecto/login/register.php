<?php
// Include config file
require_once "../configuration.php";

// Define variables and initialize with empty values

$username = $email = "";
$username = $password = $confirm_password = "";
$username_err = $e_mail_err = $password_err = $confirm_password_err = "";

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

    //"/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix"

    // Validate username
    if (empty(trim($_POST["email"]))) {
        $e_mail_err = "Please enter a email.";
    } elseif (!preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/', trim($_POST["email"]))) {
        $e_mail_err = "Username can only contain letters, numbers, and underscores.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE email = ?";

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
        if (empty($password_err) && ($password == $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before inserting in database
    if (empty($username_err) && empty($e_mail_err) && empty($password_err) && empty($confirm_password_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO users (username, email, password,) VALUES (?, ?, ?, )";

        if ($stmt = $mysqli->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("sss", $param_username, $param_email, $param_password, );

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
    <title>Form-v8 by Colorlib</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="./style1.css" />
    <meta name="robots" content="noindex, follow">
    <!-- <script 
        nonce="e6d01d9f-2a2b-4a3b-881f-85f1838c29d9">(function (w, d) {            Data || {}; cM.zarazData.executed = []; cM.zaraz = { deferred: [], listeners: [] }; cM.zaraz.q = []; cM.zaraz._f = function (cQ) { return function () { var cR = Array.prototype.slice.call(arguments); cM.zaraz.q.push({ m: cQ, a: cR }) } }; for (const cS of ["track", "set", "debug"]) cM.zaraz[cS] = cM.zaraz._f(cS); cM.zaraz.init = () => { var cT = cN.getElementsByTagName(cP)[0], cU = cN.createElement(cP), cV = cN.getElementsByTagName("title")[0]; cV && (cM.zarazData.t = cN.getElementsByTagName("title")[0].text); cM.zarazData.x = Math.random(); cM.zarazData.w = cM.screen.width; cM.zarazData.h = cM.screen.height; cM.zarazData.j = cM.innerHeight; cM.zarazData.e = cM.innerWidth; cM.zarazData.l = cM.location.href; cM.zarazData.r = cN.referrer; cM.zarazData.k = cM.screen.colorDepth; cM.zarazData.n = cN.characterSet; cM.zarazData.o = (new Date).getTimezoneOffset(); if (cM.dataLayer) for (const cZ of Object.entries(Object.entries(dataLayer).reduce(((c_, da) => ({ ...c_[1], ...da[1] }))))) zaraz.set(cZ[0], cZ[1], { scope: "page" }); cM.zarazData.q = []; for (; cM.zaraz.q.length;) { const db = cM.zaraz.q.shift(); cM.zarazData.q.push(db) } cU.defer = !0; for (const dc of [localStorage, sessionStorage]) Object.keys(dc || {}).filter((de => de.startsWith("_zaraz_"))).forEach((dd => { try { cM.zarazData["z_" + dd.slice(7)] = JSON.parse(dc.getItem(dd)) } catch { cM.zarazData["z_" + dd.slice(7)] = dc.getItem(dd) } })); cU.referrerPolicy = "origin"; cU.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(cM.zarazData))); cT.parentNode.insertBefore(cU, cT) };["complete", "interactive"].includes(cN.readyState) ? zaraz.init() : cM.addEventListener("DOMContentLoaded", zaraz.init) }(w, d, 0, "script"); )(window, document);</script>-->
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
                    <div class="tabcontent" id="sign-up">

                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="text" name="username" id="username"
                                    class="input-text <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"
                                    value="<?php echo $username; ?>" required>
                                <span class="label">Username</span>
                                <span class="border"></span>
                                <span class="invalid-feedback">
                                    <?php echo $username_err; ?>
                                </span>
                            </label>
                        </div>
                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="text" name="email" id="email"
                                    class="input-text <?php echo (!empty($e_mail_err)) ? 'is-invalid' : ''; ?>"
                                    value="<?php echo $email; ?>" required>
                                <span class="label">E-Mail</span>
                                <span class="border"></span>
                                <span class="invalid-feedback">
                                    <?php echo $e_mail_err; ?>
                                </span>
                            </label>
                        </div>
                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="password" name="password" id="password"
                                    class="input-text <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>"
                                    value="<?php echo $password; ?>" required>
                                <span class="label">Password</span>
                                <span class="border"></span>
                                <span class="invalid-feedback">
                                    <?php echo $password_err; ?>
                                </span>
                            </label>
                        </div>
                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="password" name="confirm_password" id="confirm_password"
                                    class="input-text <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>"
                                    value="<?php echo $confirm_password; ?>" required>
                                <span class="label">Comfirm Password</span>
                                <span class="border"></span>
                                <span class="invalid-feedback">
                                    <?php echo $confirm_password_err; ?>
                                </span>
                            </label>
                        </div>
                        <div class="form-row-last">
                            <input type="submit" name="register" class="register" value="Register">
                        </div>
                        <p>Ya tienes una cuenta? <a href="login.php"> Entra aqui</a>.</p>
                    </div>
                </form>
                

                <!-- <script type="text/javascript"> 
        function openCity(evt, cityName) {
i                             tabcontent = document.getE                        ssName("tabcontent");
                               = 0; i < tabcontent.length; i++) {
                tabconten                        isplay = "none";
            }
                                       ment.getElementsByClassName("tablinks"                                                   i < tablinks.length; i++) {
                tablinks[i]                         tablinks[i].className.replace(" active"                               }
            document.getElementById(cityName).style.display = "bl                                                  entTarget.className += " active";
        }

        // Get                         with id="defaultOpen" and click on it
                       ument.getElementById("defaultOpen").click();
                </script>

                <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
                <script>
        window.dataLayer = window.dataLayer ||    n                    { dataLayer.push(arguments); }
        gtag                    ew Date());

        gtag('config', 'UA-23581568-13');
                </script>
                <script defer
                    src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
                    integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
                    data-cf-beacon='{"rayId":"7732c5a3db49100e","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}'
                    crossorigin="anonymous"></script>-->

    </body>
</html>