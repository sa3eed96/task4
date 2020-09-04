<?php
    include __DIR__ . '/../db/connect.php';

    if($_SERVER['REQUEST_METHOD']){

        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $number=$_POST['number'];
        $address=$_POST['address'];
        $errors = [];

        if (empty($name)) { 
            $errors['name'] = 'invalid name'; 
        }
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) { 
            $errors['email'] = "invalid email"; 
        }
        if (empty($password) || strlen($password) < 8) { 
            $errors['password']= 'must be 8 characters at least';
        }
        if (empty($number) || !preg_match('/[0-9]+/', $number)) {
            $errors['number'] = 'invalid mobile number'; 
        }
        if (empty($address)) { 
            $errors['address']='invalid address'; 
        }

        $email = mysqli_real_escape_string($db, $email);
        $user_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
        $result = mysqli_query($db, $user_query);
        $user = mysqli_fetch_assoc($result);
        
        if($user) {
            $errors['email'] = 'email is already registered';
        }

        if(count($errors) == 0){
            $name = mysqli_real_escape_string($db, $name);
            $number = mysqli_real_escape_string($db, $number);
            $address = mysqli_real_escape_string($db, $address);
            $password = md5($password);

            $query = "INSERT INTO users (name, email, password, number, address) 
                VALUES('$name', '$email', '$password', '$number', '$address')";
            mysqli_query($db, $query);
            $_SESSION['user'] = [
                'email' => $email,
                'name' => $name,
            ];
            http_response_code(201);
        }else{
            http_response_code(400);
            echo json_encode($errors);
        }
    }
?>