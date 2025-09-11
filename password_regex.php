<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
   <input type="password"> 
</body>
</html>


<?php
function passwordChecker($password){

    $regex = "/^(?=.{9,})([A-Z][A-Za-z0-9]*\d?[#%@])$/";
    if (preg_match($regex, $password)) {
        echo "strong password<br/>";
    } else {
        echo "weak password<br/>";
    }
}
passwordChecker("P6assword6#"); 
function  checkPassword(){
    $password = "P6asswor6$";
    $lastchar = $password[strlen($password)-1];
if (strlen($password) < 8 ) {
   echo "Password must be 8 characters or more";
}
elseif (!ctype_digit($password[strlen($password)-2])) {
echo "There has to be a number before the last character";
} elseif (!str_contains($lastchar,"$")) {
echo "the last char needs a special character<br/>";
}
else {
 echo  "valid password<br/>";
}

};
checkPassword();
function wordCensor(){
    $mytext = "I hate repitition";
    $hate = "hate";
    if (str_contains($mytext,"hate")) {
      echo str_replace( "hate","****",$mytext);
       
    } else {
        echo $mytext;
    }
}
wordCensor();