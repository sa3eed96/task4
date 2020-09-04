<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Task 4</title>
        <link rel="stylesheet" type="text/css" href="public/css/style.css">
        <script src="public/js/jquery-3.5.1.js"></script>
        <script src="public/js/register.js" root="<?php echo $_ENV['ROOT'];?>"></script>
    </head>
    <body class="container">
        <div class="header">
            <h1>Register</h1>
        </div>
        <div class="form-container">
            <form id="registerForm">
                    <div class="input">
                        <label for="name">Name</label>
                        <input name="name" id="name" type="text">
                        <p><small id="nameError" class="error"></small></p>
                    </div>
                    <div class="input">
                        <label for="email">Email</label>
                        <input name="email" id="email" type="text">
                        <p><small id="emailError" class="error"></small></p>
                    </div>
                    <div class="input">
                        <label for="password">Password</label>
                        <input name="password" id="password" type="password">
                        <p><small id="passwordError" class="error"></small></p>
                    </div>
                    <div class="input">
                        <label for="number">Phone Number</label>
                        <input name="number" id="number" type="text">
                        <p><small id="numberError" class="error"></small></p>
                    </div>
                    <div class="input">
                        <label for="address">Address</label>
                        <input name="address" id="address" type="text">
                        <p><small id="addressError" class="error"></small></p>
                    </div>
                    <div class="input">
                        <button class="btn success" type="submit">Register</button>
                    </div>
                    <p id="successMsg" class="success"></p>
                    <p>
                        <a href="<?php echo $_ENV['ROOT']; ?>login.php">Have an account? login</a>
                    </p>
            </form>
        </div>
    </body>
</html>