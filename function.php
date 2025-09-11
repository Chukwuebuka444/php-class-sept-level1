<?php
function greet()
{
    // word_count => return the number of words in a string
    // echo "Good afternoon Ebuka";
    $greet = "Good afternoon Ebuka";
    echo str_word_count($greet);
}
greet();

function fullName($fn,$ln){
  $username = $fn." ".$ln;
  if(str_word_count($username) > 2 || str_word_count($username) < 2){
    echo "Username must be of two words";
    
  }
  return $username;
};
echo fullName("Dev  ","dan");

$savedUser = fullName("Saved", "User");
print_r(explode(" ",$savedUser));

print_r(explode(",","gorilla,is,an,animal"));

// trim
$text = "ebuka";
echo $text[strlen($text)-1];
// echo strlen($text)-1;
echo strlen($text). "before trim<br/>";
echo strlen(trim($text))."after trim<br/>";
$ttext = "boy king,fred";
echo str_word_count($ttext);

// assignment
// write a function that validates a password
// =>password length (must be more than 8 characters)
// =>first letter must be uppercase
// =>last character must be a symbol of your choice
// => second to the last character must be a number(optional)
// =>expected password => Password12# -> correct password
// =>expected password => password12# -> wrong password

// function passwordChecker(){
// your code goes here
// }
// additional assignment
// write a function that checks for vulgar words in a sentence
// function checkHateword(){
// your code goes here
// }
// 
