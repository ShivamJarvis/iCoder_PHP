<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>iCoder</title>
    <link rel="icon" href="/photos/myAvatar.png" type="image/icon type">

    <style>

.logimg{
  width:140px;
  height:140px;
  border-radius:100px;
  margin-left:75px!important;
}    

      /* width */
::-webkit-scrollbar {
  width: 5px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #ffffff;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: rgb(0, 150, 219);
  border-radius: 20px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: rgb(2, 37, 82);
}
</style>

  </head>
  <body>
  


  <?php 
  require "partials/_nav.php" ;
  require "partials/_dbconnect.php";
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
   
    $username = $_POST['username'];
 
    $pass1 = $_POST['pass1'];

 

    $sql = "SELECT * FROM `User` WHERE `Username` = '$username'";
    $search_result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($search_result);
    $pass  = $row['Password'];
    if(password_verify($pass1,$pass))
    {
      session_start();
      $_SESSION['username'] = $username;
      $_SESSION['loggedin'] = true;
      header("location: index.php");
    }

  
  }
  
  ?>

  <div class="container d-flex justify-content-center my-5">
  
  
  <form action="/iCoder/login.php" class="col-md-4 " method="post">
  <h2 class="text-info mt-3"><u>Log In</u></h2>
  <img src="photos/myAvatar.png" alt="" class="logimg ">
  
    <div class="form-group">
      <label for="User_Name" class="text-info"><u>UserName</u></label>
      <input type="text" class="form-control" name="username" id="User_Name" placeholder="Enter UserName">
    </div>


    <div class="form-group">
      <label for="pass1" class="text-info"><u>Password</u></label>
      <input type="password" class="form-control" id="pass1" placeholder="Password" name="pass1">
    </div>
    
    <button type="submit" class="btn btn-primary">LogIn</button>
  </form>



  </div>

  <?php require "partials/_footer.php"; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    
  </body>
</html>