<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
    <link rel="stylesheet" href="./CSS/sign.css"> <!-- Link to the CSS file -->
</head>
<body>
    <div class="container">
        <h1>Enter User Details</h1>
        <form id="signup" action="/aguer-main/aguer-main/processes/User_processes.php" method="POST" autocomplete="off">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
                <span id="nameError" class="error"></span>
            </div>
          
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" id="email" name="email" required>
                <span id="emailError" class="error"></span>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <span id="passwordError" class="error"></span>
            </div>
          
            <input type="submit" name="signup" class="btn btn-primary" value="Sign up">
            <a href="sign-in.php" class="btn btn-secondary">Already have an account? Sign in</a>
        </form>
    </div>
    <script src="scripts.js"></script>
</body>
</html>