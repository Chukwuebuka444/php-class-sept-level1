<?php

session_start();
if(!isset($_SESSION["users"])){
    $_SESSION["users"] =[];
}

$ps = $_POST['password'];
$Username = $_POST['first_name'];
$ln = $_POST['last_name'];
$email = $_POST["email"];
$cps = $_POST['confirmpassw'];
function content($message){
    header("location:../portfolio_ass/register.php?anything=$message");
echo $message;
exit();
}
if (empty($Username)) {
    // echo "Your first name is required"."<br/>";
    // header("location:../Portfolio_ass/register.php?anything=");
    content("First name is required");
    // exit();
};
if (empty($ln)) {
    // echo "Your last name is required"."<br/>";
    // header("location:../Portfolio_ass/register.php?anything=");
    // exit();
    content("Last name is required");
}
if(empty($email)){
    // header("location:../Portfolio_ass/register.php?anything=The email field is required");
    // exit();
    content("The email field is required");
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    // header("location:../Portfolio_ass/register.php?anything=Your email is invalid");
    // exit();
    content("Your email is invalid");
}
if (empty($ps)) {
    echo "Your password is required"."<br/>";
    // header("location:../Portfolio_ass/register.php?anything=Your password field is required");
    // exit();
    content("Your password field is required");
}
else if (strlen($ps) < 8){
// echo "Password must be 8 or more.<br/>";
// header("location:../Portfolio_ass/register.php?anything=Your password has to be 8 characters above");
// exit();
content("Your password has to be 8 characters above");
}
else if ($ps[strlen($ps)-1] != "#" ){
echo ".<br/>";
// header("location:../Portfolio_ass/register.php?anything=The last letter of your paasword has to be a special character");
content("The last letter of your paasword has to be a special character");
}


if (empty($cps)) {
    // echo "please confirm your password"."<br/>";
    header("location:../Portfolio_ass/register.php?anything=Please confirm your password");
    content("Please confirm your password");
}
else if($ps != $cps){
// echo "";
// header("location:../Portfolio_ass/register.php?anything=Your confirmpasword should match your password");
content("Your confirmpasword should match your password");
}
$SignedUpUsersObj = ["username" => $Username." ".$ln,
                    "email" => $email,
                      "password" => $ps];
array_push($_SESSION["users"],$SignedUpUsersObj);
header("location:../login.php");
                                        


//   $_SESSION['email'] = $email;
//   $_SESSION['Username'] = $Username
  
// EMAIL_FILTER_VAR => validate your email
// confirm your password
// password_hash =>hash your passwordwhats
?>