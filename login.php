<?php
session_start();
$SignedinUsers = $_SESSION["users"];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <form class="w-50 m-auto mt-4 p-3 rounded shadow" action="" method="POST" >
        <?php
        if (isset($_GET['anything'])) {
            echo "<div class='text text-danger'> $_GET[anything] </div>";
        }
        ?>
        <div class="form-group">
            <label class="text-dark" for="">USERNAME:</label>
            <input  name="username" class="form-control" type="text">
        </div>
        <div class="form-group">
            <label class="text-dark" for="">PASSWORD:</label>
            <input name="Password" class="form-control" type="text">
        </div>
        <button>
            Login
        </button>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $inputusername = $_POST["username"];
$inputpassword = $_POST["Password"];
$found = false;
foreach ($SignedinUsers as $SignedinUser) {
    if ($SignedinUser["username"] === $inputusername && $SignedinUser["password"] === $inputpassword) {
      $found = true;  
    }
}
if ($found) {
    // echo "Storing user in session: " . $_SESSION["loggedinusers"]["username"];

    $_SESSION["loggedinusers"] = $SignedinUser;
    header("location:Portfolio_ass/Dashboard.php");
} else {
    header("location:login.php?anything=User not found");
}
}
?>