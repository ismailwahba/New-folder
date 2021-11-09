<?php 
  if ($_SERVER['REQUEST_METHOD'] == "POST"){

    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $address  = $_POST['address'];
    $linked   = $_POST['linked'];


    $errors = [];

    if(empty($name)){
      $errors['Name '] = "field Requried";
    }

    if(empty($email)){
      $errors['Email '] = "field Requried";
    }

    if(empty($password)){
      $errors['password '] = "field Requried";
    }

    if(mb_strlen($password) > 6){
      $errors['password '] = "no more than 6 char";
    }

    if(empty($address)){
      $errors['address '] = "field Requried";
    }

    if(mb_strlen($address) > 10){
      $errors['address '] = "no more than 10 char";
    }

    if(empty($linked)){
      $errors['linked '] = "field Requried";
    }

      if(count($errors) > 0){
        foreach($errors as $key => $val){
          echo $key.$val.'<br>';
        }
        
      }else{
        echo $name.'<br>'.$email.'<br>'.$password.'<br>'.$address.'<br>'.$linked.'<br>';
        }
  }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
  <h2>Register</h2>
  
  
  <form   action="<?php echo $_SERVER['PHP_SELF'];?>"  method="post">


  <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" class="form-control" name="name" id="exampleInputName" aria-describedby="" placeholder="Enter Name">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail">Email address</label>
    <input type="email"   class="form-control"  name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>

  <div class="form-group">
    <label for="exampleInputPassword">New Password</label>
    <input type="password"   class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>

  <div class="form-group">
    <label for="exampleInputName">address</label>
    <input type="text" class="form-control" name="address" id="exampleInputName" aria-describedby="" placeholder=" Enter Your address">
  </div>

  <div class="form-group">
    <label for="exampleInputName">linked url</label>
    <input type="text" class="form-control" name="linked" id="exampleInputName" aria-describedby="" placeholder=" Enter Yourlinked url">
  </div>
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>