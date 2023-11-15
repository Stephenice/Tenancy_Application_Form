<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenancy Application Form</title>
    <link rel="stylesheet" href="src/css/sigin.css">
    <link rel="shortcut icon" href="src/images/icons8-house-64.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

</head>

<body>

    <div class="signinform">
        <!-- container -->
        <div class="container">
            <!-- main content -->
            <div class="w3l-form-info">
                <div class="w3l_form">
                    <div class="left_grid_info">
                        <p class="logo_sign">ToLet </p>
                        <img src="src/images/OnlineEngagement-hex2.webp" alt="" />
                    </div>
                </div>
                <div class="w3_info">
                    <h2>Log In</h2>
                    <form action="login.php" method="post">
                        <?php include 'handle_errors.php'; ?>
                        <div class="input-group">
                            <span><i class="fas fa-user" aria-hidden="true"></i></span>
                            <input type="email" placeholder="Email or Username" name="userid" value="" required>
                        </div>
                        <div class="input-group">
                            <span><i class="fas fa-key" aria-hidden="true"></i></span>
                            <input type="Password" placeholder="Password" name="password" required>
                        </div>
                        <div class="form-row bottom">
                            <div class="form-check">
                                <input type="checkbox" id="remenber" name="remenber" value="remenber">
                                <label for="remenber"> Remember me?</label>
                            </div>
                            <a href="#url" class="forgot">Forgot password?</a>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Sign In</button>
                    </form>

                </div>
            </div>

        </div>

        <!-- footer -->
        <div class="footer">
            <p>&copy; 2023 Designed and Developed by Stephen Ijeh.</p>
        </div>
    </div>


</body>

</html>