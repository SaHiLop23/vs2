<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="forgot-box">
        <form method ="POST">
        
            <h2>Sign Up</h2>
            <div class="container">
                <div class="input-box">
                    <input type="text" name="uname" id="username" required>
                    <label for="username">Username</label>
                </div>
                <div class="input-box">
                    <input type="email" name="email" id="email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-box">
                    <input type="password" name="pass" id="password" required>
                    <label for="password">Password</label>
                </div>
                <div class="input-box">
                    <input type="password" name="confirm-password" id="confirm-password" required>
                    <label for="confirm-password">Confirm Password</label>
                </div>
                <button type="submit" class="btn">Sign Up</button>
            </div>
            <div class="back-link">
                <a href="index.html">Back to Login</a>
            </div>
        </form>
    </div>
</body>
</html>
