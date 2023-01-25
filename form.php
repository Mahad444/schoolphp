

<?php
require "index.php";
require "connection.php";
?>

<?php



if(isset($_POST['submit'])){
  if(empty($_POST['username']) OR empty($_POST['email']) OR empty($_POST['password'])){
    echo "<script>alert('some inputs are empty')</script>";
  } else  {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $insertValues = $connection->prepare("INSERT INTO signup (username,email,mypassword) VALUES (:username,:email,:mypassword)"); 

    $insertValues->execute([
      ':username' => $username,
      ':email' => $email,
      ':mypassword' =>$password

    ]);
    
    echo "<script>alert('successfully added');</script>";
  }
  }
  

?>
<form method="post" >
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>

    <div class="form-group">
    <label for="exampleInputFile">username</label>
    <input type="text" name="username" class="form-control" id="exampleInputFile" placeholder="enter your username">

  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
