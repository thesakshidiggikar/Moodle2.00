<?php
include "Include.php";
session_start();

$username=" ";
$email="";
$error=array();

$db=mysqli_connect('localhost','root','','moodle2.0');

//register
if (isset($_POST('Sign up'))){
    $username=mysqli_real_escape_string($db,$_POST['Username']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $password_1=mysqli_real_query($db,$_POST['password_1']);
    $password_2=mysqli_real_query($db,$_POST['password_2']);


    //from validation ensure that the form is correctly filled...
    //by adding (array_push()) corresponding error unto $error array....

    if(empty($username)){array_push($errors,"Username required");}
    if(empty($email)){array_push($errors,"Username required");}
    if(empty($password_1)){array_push($errors,"password required");}
    if($password_1!=$password_2){
        array_push($errors,"Passoword Doesn't  match !");}




//first check the datbase to make sure
//a user does not allready exist withh the same username and /or email d..
if($user){
    if($user['username']===$username){
        array_push($errors,"Username already exists");

    }
    if($user['email']===$email){
        array_push($errors,"Email already exists");
        
    }
}

//Finally request user if there is no error is the form
if (count($error)==0){
    $password=md5($password_1);//encry the password before saving in the database
    
    $query="insert into bca (username,email,password)
    values('$username','$email','$password')";

    mysqli_query($db,$query);
    $_SESSION["username"]=$username;
    $_SESSION["Success"]='You are  Successfully Logged in';

    header('location bca.php');

}

}

//login

if(isset($_POST['login_user'])) {
    $username=mysqli_real_query($db,$_POST['username']);
    $password=mysqli_real_query($db,$_POST['password']);

    if (empty($password)){
        array_push($errors,"Username not valid");
    }
    if (empty($password)){
        array_push($errors,"Password not valid !");
    }

    if (count($errors)==0){
        $password=md5($password);
        $query="select * from bca where username='$username' AND password='$password'";
        $result=mysqli_query($db,$query);
        if(mysqli_num_rows($result)==1){
            $_SESSION['Username']=$username;
            $_SESSION['Successfully']="you have successfully logged in";
            header('location bca.php');
        }
        else{
            array_push($errors,"Wrong Username/password Combination !");
        }
    }
    
}

?>