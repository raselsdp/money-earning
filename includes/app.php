<?php
require 'functions.php';


global $nonceUtil,$title,$current;

$dotenv = Dotenv\Dotenv::createImmutable(app_dir);
$dotenv->safeLoad();
 

//connect db
require 'database.php';


use Cocur\Slugify\Slugify;

$slugify = new Slugify();
// echo $slugify->slugify("Hello World!");



$router = new AltoRouter();

$router->map('GET|POST','/', function(){ 

	if(auth()->isLoggedIn()){
		redirect('/user/dashboard');
		return;
}

	include app_dir.'/themes/index.php';
},'home');







$router->map('GET|POST','/user/register', function(){
	if(auth()->isLoggedIn()){
		redirect('/user/dashboard');
	}
	include app_dir.'/themes/register.php';
});

$router->map('GET|POST','/register', function(){
	if(auth()->isLoggedIn()){
		redirect('/user/dashboard');
	}
	include app_dir.'/themes/proccess/register.php';
});



$router->map('GET|POST','/user/login', function(){
	
	if(auth()->isLoggedIn()){
		redirect('/user/dashboard');
		return;
}
	include app_dir.'/themes/login.php';
});

$router->map('GET|POST','/login', function(){
	
	if(auth()->isLoggedIn()){
		redirect('/user/dashboard');
		return;
}
	include app_dir.'/themes/proccess/login.php';
});



if(auth()->isLoggedIn()){

$router->map('GET|POST','/user/dashboard', function(){
	include app_dir.'/themes/dashboard/index.php';
},'dashboard');


$router->map('GET|POST','/user/my-jobs', function(){
	include app_dir.'/themes/dashboard/my_jobs.php';
},'my_jobs');


$router->map('GET|POST','/user/generation', function(){
	include app_dir.'/themes/dashboard/generation.php';
},'generation');


$router->map('GET|POST','/user/promote', function(){
	include app_dir.'/themes/dashboard/promote.php';
},'promote');


$router->map('GET|POST','/user/profile', function(){
	include app_dir.'/themes/dashboard/profile.php';
},'profile');

$router->map('GET|POST','/profile', function(){
	include app_dir.'/themes/proccess/profile.php';
},'edit_profile');


$router->map('GET|POST','/user/open-tickets', function(){
	include app_dir.'/themes/dashboard/open_tickets.php';
},'open_tickets');

$router->map('GET|POST','/user/my-ticket', function(){
	include app_dir.'/themes/dashboard/my_ticket.php';
},'my_ticket');

$router->map('GET|POST','/user/transactions', function(){
	include app_dir.'/themes/dashboard/transactions.php';
},'transactions');


$router->map('GET|POST','/user/withdraw', function(){
	include app_dir.'/themes/dashboard/withdraw.php';
},'withdraw');

$router->map('GET|POST','/user/change-password', function(){
	include app_dir.'/themes/dashboard/resetPassword.php';
},'resetPassword');

 

	if(is_admin()){ 

	}

	$router->map('GET|POST','/logout', function(){
		
		auth()->logOut();
		redirect('/');
	});

}




$match = $router->match();

if (is_array($match) && is_callable($match['target'])) {
	call_user_func_array($match['target'], $match['params']);
} else {
	// no route was matched
	http_response_code(404);
	include app_dir.'/themes/404.php';
}
