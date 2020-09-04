<?php 
include __DIR__ . '/../db/connect.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email= $_POST['email'];
    $password=$_POST['password'];
    $errors = [];

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) { 
        $errors['email'] = "invalid email"; 
    }
    if (empty($password)) { 
        $errors['password']= 'password is required';
    }

    if (count($errors) == 0) {
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = md5($password);

        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $user = $results->fetch_assoc();
            $_SESSION['user'] = [
                'email'=> $email,
                'name' => $user['name'],
            ];
            http_response_code(200);
        }else {    
            http_response_code(400);
            $errors['server'] = 'wrong email or password';
            echo json_encode($errors);
        }
    }else{
        http_response_code(400);
        echo json_encode($errors);
    }
}

?>