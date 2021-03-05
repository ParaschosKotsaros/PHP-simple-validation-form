<?php
$errors = [];
$name = $email = $ingredients = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = $_POST["email"];
  $ingredients = htmlspecialchars($_POST["country"]);
  $about = htmlspecialchars($_POST["about"]);
}


if(!$email){
    $errors["email"] = 'Email is required </br>';
}

if(!$name){
    $errors["name"] = 'Name is required </br>';
}
if(!$ingredients){
    $errors["country"] = 'Country is required </br>';
}




?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>


<form method="post" action="/phpproject/phpburgers/index.php">
<div class="container p-5">
<h1>User Form</h1>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email Address</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">

    <?php if(isset($errors['email'])){ ?>
    <div class="alert alert-danger"> 
    <?php echo $errors["email"]; ?> </div>
     <?php };?>
  </div>

  <div class="mb-3">
    <label class="form-label">Your Name</label>
    <input type="text" class="form-control" name="name">
    <?php if(isset($errors['name'])){ ?>
    <div class="alert alert-danger"> 
    <?php echo $errors["name"]; ?> </div>
     <?php };?>
  </div>

  <div class="mb-3">
  <label type="text" class="form-label"> Country </label>
    <input type="text" class="form-control" name="country">
    <?php if(isset($errors['country'])){ ?>
    <div class="alert alert-danger"> 
    <?php echo $errors["country"]; ?> </div>
     <?php };?>
  </div>


  <div class="form-group">
    <label class="form-label">About You</label>
    <textarea class="form-control" name="about" rows="5"></textarea>
  </div>





  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<body>


</body>
</html>