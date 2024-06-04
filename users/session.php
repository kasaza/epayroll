<?php
session_start();
require_once 'class.user.php';
$user_home = new USER();

if(!$user_home->is_logged_in())
{
<<<<<<< HEAD
 $user_home->redirect('login.php');
=======
 $user_home->redirect('login');
>>>>>>> 0e4cc7824f2ecd9f890c54ad5298241ed59b8ea7
}

$stmt = $user_home->runQuery("SELECT * FROM tbl_users WHERE id_no=:id_no");
$stmt->execute(array(":id_no"=>$_SESSION['userSession']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>