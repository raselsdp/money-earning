<?php
use Illuminate\Database\Capsule\Manager as Capsule;



function get_header(){
	include app_dir.'/themes/header.php';
}

function get_footer(){
	include app_dir.'/themes/footer.php';
}
function get_dashboard_header(){
	include app_dir.'/themes/dashboard/header.php';
}

function get_dashboard_footer(){
	include app_dir.'/themes/dashboard/footer.php';
}

function get_user_info(){
	include app_dir.'/themes/dashboard/user_info.php';
}

// function create_nonce($name){
// 	global $nonceUtil;
// 	$nonce = $nonceUtil->create( $name );
// 	return $nonce;
// }

// function verify_nonce($name,$value){
// 	global $nonceUtil;
// 	return $nonceUtil->verify( $value, $name );
// }

function redirect($path){
	header("Location: $path");
	exit();
}
function auth(){
	global $auth;
	return $auth;
}
function db(){
	return Capsule::class;
}




/**
 * Check if a string is serialized.
 *
 * @param string $data The string to check.
 *
 * @return bool True if serialized, false otherwise.
 */
function is_serialized($data)
{
    // If it's not a string, it's not serialized
    if (!is_string($data)) {
        return false;
    }

    // Trim whitespaces
    $data = trim($data);

    // If it starts with 'a:', 's:', 'i:', or 'O:', it might be serialized
    if (in_array(substr($data, 0, 2), ['a:', 's:', 'i:', 'O:'], true)) {
        return true;
    }

    // If it starts with 'N;' or 'b:', it might be serialized
    if (in_array(substr($data, 0, 2), ['N;', 'b:'], true) && unserialize($data) !== false) {
        return true;
    }

    return false;
}
function is_page($now=''){
    global $current;
    if($current == $now){
        return true;
    }
    return false;
}
function get_title(){
    global $title,$current;
    $name  = get_option('siteName',$_ENV['app_name']);
    $homeTitle  = get_option('homeTitle','Tickets');
    switch($current){
        case 'home':
            $title = 'Home';
        break;
        case 'login':
            $title = 'Login';
        default:
            $title = ucfirst(str_replace('-',' ',$current));
    }
    $title = $title.' - '.$name;
 
    return $title;
}

function get_site_logo(){
    $logo = get_option('siteLogo','https://via.placeholder.com/200x60');
    return $logo;
}
function get_user_profile_picture(){
    return get_field('profile_pic',auth()->id(),'user','https://via.placeholder.com/200x200');

}

function get_sitename(){
    $name  = get_option('siteName',$_ENV['app_name']);
    return $name;
}

function get_option($name, $def=''){
    $data = db()::table('srz_options')->where('name', $name)->get('value')->first();
    if($data == NULL){
        return $def;
    }
    return is_serialized($data->value) ? unserialize($data->value) : $data->value;
}

function update_option($name,$value){
    $data = db()::table('srz_options')->updateOrInsert([
        'name' => $name
    ],
    [
        'name' => $name,
        'value' => serializeIfNeeded($value)
    ]
);
return $data;
}



function random_username($string) {
    $pattern = " ";
    $firstPart = strstr(strtolower($string), $pattern, true);
    $secondPart = substr(strstr(strtolower($string), $pattern, false), 0,3);
    $nrRand = rand(0, 100);
    
    $username = trim($firstPart).trim($secondPart).trim($nrRand);
    $user =  get_user('username',$username);
    if($user !== false){
        $username = $username.rand(10,99);
        return random_username($username);
    }
    
    return $username;
}

function get_user($by,$value){
    
    $valueX = db()::table('users')->where($by, $value)->first();
    if(!$valueX){
        return false;
    }
    return $valueX;
      
}





function serializeIfNeeded($variable) {
    // Check if the variable is an array or an object
    if (is_array($variable) || is_object($variable)) {
        // Serialize arrays and objects
        return serialize($variable);
    } else {
        // Return the variable as it is
        return $variable;
    }
}


function get_field($name,$id, $type='', $def=''){
	$data = db()::table('srz_fields')->where([
		'name' => $name,
		'obj_id' => $id,
		'type' => $type
		 ])->get('value')->first();
		 if($data == NULL){
			return $def;
		 }
	return is_serialized($data->value) ? unserialize($data->value) : $data->value;
}

function update_field($name,$value,$type='', $obj_id){
	$data = db()::table('srz_fields')->updateOrInsert([
		'name' => $name,
		'obj_id' =>$obj_id,
		'type' => $type
	],
	[
		'name' => $name,
		'value' => serializeIfNeeded($value),
		'type' => $type,
		'obj_id' =>$obj_id
	]
);
return $data;
}

function insert_order($data){
    // $data = db()::table('srz_cpt')->insertGetId([
    //     'title' => generateRandomPNR(),
    //     'description' => '',
    //     'post_type' => 'order',
    //     'status' => '3',
    //     'user_id' => auth()->id(),
    //     'pub_date' => date('Y-m-d H:i:s'),
    //     'mod_date' => date('Y-m-d H:i:s'),
    // ]);
    // return $data;
}
function get_order($id){
    $data = db()::table('srz_cpt')->where([
        'id' => $id,
        'post_type' => 'order',
        'user_id' => auth()->id(),
    ])->get()->first();
    return $data;
}

function get_user_by_id($id){
    $data = db()::table('srz_users')->where([
        'id' => $id,
    ])->get()->first();
    return $data;
}
function is_admin(){
	try {
		if (auth()->admin()->doesUserHaveRole(auth()->id(), \Delight\Auth\Role::ADMIN)) {
			return true;
		}
		else {
			return false;
		}
	}
	catch (Exception $e) { 
	}

	return false;
}




function calculateDurationInHours($startDate, $endDate)
{
    // Create DateTime objects from the string representations of the dates
    $startDateTime = new DateTime($startDate);
    $endDateTime = new DateTime($endDate);

    // Calculate the difference between the two dates
    $interval = $startDateTime->diff($endDateTime);

    // Format the duration as hours, minutes, and seconds
    $duration = sprintf(
        '%02d:%02d:%02d',
        $interval->h + $interval->days * 24,  // Total hours, considering days
        $interval->i,
        $interval->s
    );

    return $duration;
}


function generateRandomPNR($length = 6)
{
    // Define characters that can be used in the PNR
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

    // Get the total number of characters
    $characterCount = strlen($characters);

    // Initialize the PNR variable
    $pnr = '';

    // Build the random PNR
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, $characterCount - 1);
        $pnr .= $characters[$randomIndex];
    }

    return $pnr;
}
