<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
 <div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <a href="index.php">
              <p>Travel.SriLanka</p>
            </a>
        </div>
    </nav> 
    <form action="includes/login.inc.php" method="post">
    <div class="form-box">
        <div class="login-container" id="login">
            <div class="top">
                <span>Don't have an account? <a href="signup.php">Sign Up</a></span>
                <header>Login</header>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" name="uid" placeholder="Username or Email">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" name="pwd" placeholder="Password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Sign In">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="login-check">
                    <label for="login-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Forgot password?</a></label>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>   
</body>
</html>