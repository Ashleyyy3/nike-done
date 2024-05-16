<?php
session_start();

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = require __DIR__ . "/database.php";
    $sql = sprintf("SELECT * FROM user WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
    
    if ($user && password_verify($_POST["password"], $user["Password_hash"])) {
        session_regenerate_id();

        $_SESSION["user_id"] = $user["id"]; // Set the user ID in the session
        header("Location: main.php");//get's redirected to main.php
        exit;
    } else {
        $is_invalid = true;//form was submitted but either the email or pass. was invalid.
    }
}
?>













<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" , initial-scale="1>">
        <title>Login Nike</title>
        <link rel="stylesheet" type="text/css" href="signup.css">

        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,700&family=Dancing+Script:wght@400;600&family=Montserrat:ital,wght@0,300;0,400;0,500;1,200&family=Open+Sans:ital,wght@0,300;0,500;0,600;1,700&display=swap" rel="stylesheet">
    </head>
    <body>



    <form method="post">
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header>Login</header>

    <?php if ($is_invalid): ?>
      <em>Invalid login</em>
   <?php endif; ?>

                <div class="field-input-field">
                    <input type="email" placeholder="Email" class="input" name="email"
                       value="<?= htmlspecialchars($_POST["email"] ?? "") ?>"> 
                    
                </div>

                <div class="field-input-field">
                    <input type="password" placeholder="Password" class="password" name="password"> <!-- Add name="password" -->
                    <i class='bx bxs-hide eye-icon'></i>
                </div>

                <div class="form-link">
                    <a href="#" class="forgot-pass">Forgot Password?</a>
                </div>

                <div class="field-button-field">
                    <button class="button-field" type="submit">Login</button> <!-- Ensure type="submit" to submit the form -->
                </div>

            </div>

            <div class="line"></div>

            <div  class="field-button-field">

            <div class="media-options">
                <a href="#" class="field facebook">
                    <i class='bx bxl-facebook-square facebook-icon'></i>
                    <span>Login with Facebook</span>
                </a>
            </div>

            <div class="media-options">
                <a href="#" class="field google">
                    <img src="Photos/google.png" alt="" class="google-img">
                    <span>Login with Google</span>
                </a>
            </div>

        </div>

        <p class="form-link">Don't have an account?</p>

        <div class="media-options">
                <a href="signup2.html" class="field facebook">
                    <span>Sign up</span>
                </a>
            </div>


    </div>

    </section>
</form>
