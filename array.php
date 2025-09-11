<?php
$courses = ["Html","Javascript","Php"];
echo $courses[1]."<br/>";
echo $courses[2]."<br/>";
// html
// javascript
// php
$courses[2] = "Bootstrap";
// to avoid repitition,we use the for loop
// array_push()
array_push($courses,"firebase","react");
for ($i=0; $i < count($courses); $i++) { 
    $element = $courses[$i];
    echo "<h1>my class is $element<h1/>";
};
// using for loop,echo all the courses using this format => my favourite course is .... &it must be in an hi tag
// write a function that adds an element to array
//  addCourse("node")
//  addCourse("laravel")
// 
// 
$interesting_course = "$courses[2] is interesting";
$interesting_course = '$courses[2] is interesting';
// a single quote string does not allow us to pass values into it dynamically unlike the double quoted string
foreach ($courses as $element) {
    echo "<h3>my class is $element<h3/>";
}
$a = 0;
while ($a <= 10) {
    if ($a == 5){
        $a++;
        continue;
    }
    echo $a;
    $a++."<br/>";
}
$b = 0;
while ($b <= 10) {
    if ($b == 5) {
     break;   
    }
 $b++."<br/>";
}

// while (true) {
 
// }
$myList = [];
$age = 12;
function addToArray($item){
    global $myList;
    global $age;
    $loc = "local varaible";
    echo $age;
    array_push($myList,$item);
}
addToArray("tre"); //0,1
addToArray("sleeep");//1,1
addToArray("code");//2,1
addToArray("MEMEE");//2,1
print_r($myList);
array_splice($myList, 0, 1);
unset($myList[0]);
print_r($myList);
$dark_mode = true
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if ($dark_mode) {
        echo "<div style='width:200px; height:200px; background-color:black'><div/>";
     } else {
            echo "<div style='width:200px; height:200px; background-color:blue'><div/>";
        }
    ?> 
    <h1><?php echo $myList[2] ?></h1>
    <h1><?php echo $myList[1] ?></h1>
    <!-- <!__create an empty list of hubbies -->
     <!-- $hobbies = [] -->
      <!--function addhobbies{
      
      } -->

</body>
</html>