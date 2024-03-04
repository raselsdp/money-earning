<?php

    
try {
    if(!isset($_POST['email'])){
        throw new Exception('Email is empty');
    }
    if(!isset($_POST['password'])){
        throw new Exception('Password is empty');
    }
 
    auth()->login($_POST['email'], $_POST['password'], isset($_POST['remember']));

    redirect('/user/dashboard');
}
catch (\Delight\Auth\InvalidEmailException $e) {
    $_SESSION['error']='Wrong email address'; 
    
    redirect('/user/login');
}
catch (\Delight\Auth\InvalidPasswordException $e) { 
    $_SESSION['error']='Wrong password'; 
    
    redirect('/user/login');
}
catch (\Delight\Auth\EmailNotVerifiedException $e) { 
    $_SESSION['error']='Email not verified'; 
    
    redirect('/user/login');
}
catch (\Delight\Auth\TooManyRequestsException $e) { 
    $_SESSION['error']='Too many requests';
    
    redirect('/user/login');
}
catch(Exception $e){
    $_SESSION['error']=$e->getMessage();
    
    redirect('/user/login');
}


