<?php

use Core\App;
use Core\Authenticator;
use Core\Validator;
use Core\Database;

$db = App::resolve(Database::class);

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

//check if account already exists
$user = $db->query('select * from users where email = :email',[
    'email' => $email
])->find();

if ($user){
    // "This User Already Exists, try logging in"
    //redirect to login page
        redirect('/login');

}
//if not, save to the database and log the user in and redirect
else {
    $db->query('INSERT INTO users(email, password) VALUES(:email, :password)', [
        'email'=> $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    //mark that the user has logged in
    (new Authenticator)->login(['email' => $email]);

    redirect('/');
}

