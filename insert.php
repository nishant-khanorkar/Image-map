<?php
header('Content-Type: application/json; charset=UTF-8');
 include 'connection.php';
 include 'user.php';
$con_obj = new connection();
$user_obj = new user($con_obj);

 $name=$_POST['name'];
 $email=$_POST['email'];
 $user_obj->insertUser($name,$email); 
 $result=array();
 $result['status'] = 'success';
// $result['lab_id'] = $lab_id;
 echo json_encode($result);

 ?>