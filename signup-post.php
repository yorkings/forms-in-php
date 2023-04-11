<?php 
if(isset($_POST["submit"])){
 $pwdrepeat =$_POST["confirm"];
 $uid=$_POST["username"];
 $email=$_POST["email"];
 $first=$_POST["firstname"];
 $last=$_POST["lastname"];
 $pwd=$_POST["password"];
 require_once("signupconfig.php");
 $signup = new sign( $email,$uid,$first,$last, $pwd);
 $signup->setUsername($_POST["username"]);
 $signup->setLastname($_POST["lastname"]);
 $signup->setFirstname($_POST["firstname"]);
 $signup->setEmail($_POST["email"]);
 $signup->setPass($_POST["password"]);
 $signup->insertData();
 //insiate class 
 //include "/class/signup.class.php";
 // include "/class/signup.cont.php";
 // $signup =new signupMe($uid,$email,$pwd,$pwdrepeat,$first,$last);
}

?>