<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php include "navbar.html" ;
    $error = "";
    ?>
    <h2>Register User</h2>
   <form class="w-50 m-auto mt-4 p-3 rounded shadow" action="../auth/processForm.php" method="post">
    <?php if(isset($_GET['anything'])) {
        echo "<div class='alert alert-danger'> $_GET[anything]</div>";
    } ?>
    <div class="form-group">
        <label class="text-dark">First-name</label>
        <input name="first_name" class="form-control" type="text">
        <!-- <div><?php echo $error; ?> </div> -->
    </div>
    <div class="form-group">
        <label class="text-dark">Last-name</label>
        <input name="last_name" class="form-control" type="text">
    </div>
    <div class="form-group">
        <label class="text-dark">Email</label>
        <input name="email" class="form-control" type="email">
    </div>
    <div class="form-group">
        <label class="text-dark">password</label>
        <input name="password" class="form-control" type="text">
    </div>
    <div class="form-group">
        <label class="text-dark">confirm-password</label>
        <input name="confirmpassw" class="form-control" type="text">
    </div>
    
    <div class="form-group">
        <button class="btn btn-dark" for="">Register</button>
        
    </div>
</form>
 
</body>
</html>