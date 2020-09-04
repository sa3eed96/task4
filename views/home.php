<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Task 4</title>
        <link rel="stylesheet" type="text/css" href="public/css/style.css">
        <script src="public/js/jquery-3.5.1.js"></script>
        <script src="public/js/logout.js" root="<?php echo $_ENV['ROOT'];?>"></script>
    </head>
    <body class="container">
        <div class="header">
            <h1>Home</h1>
            <button id="logout" class="btn error">Logout</button>
        </div>
        <p>welcome <?php echo $_SESSION['user']['name']; ?></p>
    </body>
</html>