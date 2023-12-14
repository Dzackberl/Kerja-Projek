<?php
session_start();

// Check if the user is already logged in, redirect to admin page if true
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: admin.php");
    exit;
}

// Hardcoded username and password (replace these with your actual credentials)
$username = 'dzaky';
$password = 'hermawan';

// Check login credentials
// Check login credentials
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputUsername = $_POST["username"];
    $inputPassword = $_POST["password"];

    if ($inputUsername === $username && $inputPassword === $password) {
        // Set session variables
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $inputUsername; // Store the username in the session

        // Redirect to the admin page
        header("Location: admin.php");
        exit;
    } else {
        $error = "Invalid username or password";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            overflow: hidden;
            font-family: 'Arial', sans-serif;
            background: #222;
            color: #fff;
        }

        .animated-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .animated-background::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #3498db, #8e44ad, #3498db, #8e44ad);
            background-size: 400% 400%;
            animation: gradientAnimation 15s ease infinite;
        }

        .login-container {
            max-width: 400px;
            width: 100%;
            padding: 30px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1s;
            border: 2px solid transparent;
            background-clip: padding-box;
            transition: border-image 0.5s ease-in-out;
            border-image: linear-gradient(45deg, #3498db, #8e44ad) 1;
        }

        .login-container:hover {
            border-image: linear-gradient(45deg, #3498db, #8e44ad);
        }

        .login-header {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
            font-size: 24px;
            position: relative;
            overflow: hidden;
        }

        .login-header span {
            display: inline-block;
            transform-origin: 50% 50%;
            animation: rotateScale 1.5s infinite;
        }

        @keyframes rotateScale {
            0%, 50%, 100% {
                transform: rotate(0) scale(1);
            }

            25% {
                transform: rotate(360deg) scale(1.2);
            }
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            transition: color 0.3s, transform 0.3s;
            position: absolute;
            top: 12px;
            left: 12px;
            color: #666;
            pointer-events: none;
            transform-origin: 0 0;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s;
            box-sizing: border-box;
            font-size: 16px;
            margin-top: 8px;
        }

        input:focus {
            border-color: #3498db;
        }

        .btn-primary {
            background-color: #3498db;
            border: none;
            padding: 14px;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            font-size: 16px;
            display: block;
            width: 100%;
            box-sizing: border-box;
        }

        .btn-primary:hover {
            background-color: #2980b9;
            transform: scale(1.05);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }
    </style>
</head>

<body>
    <div class="animated-background"></div>
    <div class="login-container">
        <div class="login-header">
            <h2><span>L</span>ogin</h2>
        </div>

        <?php
        if (isset($error)) {
            echo "<div style='color: red; margin-bottom: 20px;'>$error</div>";
        }
        ?>

        <form action="login.php" method="post">
            <div class="form-group">
                <input type="text" name="username" required onfocus="addLabel(this)" onblur="removeLabel(this)">
                <label for="username">Username</label>
            </div>

            <div class="form-group">
                <input type="password" name="password" required onfocus="addLabel(this)" onblur="removeLabel(this)">
                <label for="password">Password</label>
            </div>

            <div class="form-group">
                <button type="submit" class="btn-primary">Login</button>
            </div>
        </form>
    </div>

    <script>
        function addLabel(input) {
            input.nextElementSibling.style.transform = 'scale(0.8) translateY(-120%)';
        }

        function removeLabel(input) {
            if (input.value === '') {
                input.nextElementSibling.style.transform = 'none';
            }
        }
    </script>
</body>

</html>
