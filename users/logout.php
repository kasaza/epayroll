<?php
session_start();
require_once 'class.user.php';
$user = new USER();

if(!$user->is_logged_in())
{
<<<<<<< HEAD
 $user->redirect('login.php');
=======
 $user->redirect('login');
>>>>>>> 0e4cc7824f2ecd9f890c54ad5298241ed59b8ea7
}

if($user->is_logged_in()!="")
{
 $user->logout();
<<<<<<< HEAD
 $user->redirect('login.php');
=======
 $user->redirect('login');
>>>>>>> 0e4cc7824f2ecd9f890c54ad5298241ed59b8ea7
}
?>
