<?php



   
   if(isset($_POST['name']) && !empty($_POST['name'])){
       
       update_field('name',htmlspecialchars($_POST['name']), 'user', auth()->id());
   }
   

   
   if(isset($_POST['phone_number']) && !empty($_POST['phone_number'])){
       
       update_field('phone_number',htmlspecialchars($_POST['phone_number']), 'user', auth()->id());
   }



if(isset($_POST['address']) && !empty($_POST['address'])){
       
    update_field('address',htmlspecialchars($_POST['address']), 'user', auth()->id());
}

 if(isset($_POST['state']) && !empty($_POST['state'])){
       
    update_field('state',htmlspecialchars($_POST['state']), 'user', auth()->id());
}

if(isset($_POST['zip']) && !empty($_POST['zip'])){
       
    update_field('zip',htmlspecialchars($_POST['zip']), 'user', auth()->id());
}


if(isset($_POST['city']) && !empty($_POST['city'])){
       
    update_field('city',htmlspecialchars($_POST['city']), 'user', auth()->id());
}

redirect('/user/profile');


