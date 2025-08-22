<?php

use Core\App;
use Core\Validator;
use Core\Database;

$email = $_POST["email"];
$password = $_POST["password"];

$errors = [];

//validate form inputs
if (!Validator::email($email)){
    $errors['email'] = "Please provide a valid e-mail address";
}

if (!Validator::string($password,7,255)){
    $errors['password'] = "Please provide a password of at least 7 characters";
}

if (!empty($errors)){
    return view('registration/create.view.php',[
        'errors' => $errors
    ]);
}

$db = App::resolve(Database::class);
//check if account already exists
$user = $db->query('select * from users where email = :email',[
    'email' => $email
])->find();

if ($user){
    // "This User Already Exists, try logging in"
    //redirect to login page
    header('location: /');
        exit();
}
//if not, save to the database and log the user in and redirect
else {
    $db->query('INSERT INTO users(email, password) VALUES(:email, :password)', [
        'email'=> $email,
        'password' => $password
    ]);

    //mark that the user has logged in
    $_SESSION['user'] = [
        'email' => $email
    ];
    
    header('location: /');
    exit();
}

