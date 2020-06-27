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

    

      /* width */
::-webkit-scrollbar {
  width: 5px;
}
.logimg{
  width:140px;
  height:140px;
  border-radius:100px;
  margin-left:175px!important;
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
  if($_SESSION)
  {
    header("location: index.php");
    exit;
  }
  




if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $f_name = $_POST['fname'];
    $l_name = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $sql = "SELECT * FROM `User` WHERE `Username` = '$username';";
    $search_result = mysqli_query($conn,$sql);
    $user = mysqli_num_rows($search_result);
    if($pass1 == $pass2 && $user == 0)
    {
      $pass1 = password_hash($pass2,PASSWORD_DEFAULT);
    $sql = "INSERT INTO `User` (`F_Name`, `L_Name`, `Username`, `Email`, `Password`, `Date`) VALUES ('$f_name', '$l_name', '$username', '$email', '$pass1', current_timestamp());";
    $signup_result = mysqli_query($conn,$sql);

    if($signup_result)
    {
        echo '<div class="alert mb-0 alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is created with us. Thanks for Signup...
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
      session_start();
      $_SESSION['username'] = $username;
      $_SESSION['loggedin'] = true;

  header("location: index.php");
    }
  }

    else
    {
        echo '<div class="alert mb-0 alert-success alert-dismissible fade show" role="alert">
        <strong>Sorry!</strong> There is some error in your details...
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }

}

  
  ?>

  <div class="container my-5 d-flex justify-content-center">
  
  
  <form action="/iCoder/signup.php" method="post" class="col-md-6 ">
  <img src="photos/myAvatar.png" alt="" class="logimg ">
  <h1 class="mb-3 text-info"><u>Sign Up</u></h1>
    <div class="form-group">
      <label for="First_Name" class="text-info"><strong>First Name</strong></label>
      <input type="text" class="form-control" name="fname" id="First_Name"  placeholder="Enter First Name">
    </div>
    <div class="form-group">
      <label for="Last_Name" class="text-info"><strong>Last Name</strong></label>
      <input type="text" class="form-control" name="lname" id="Last_Name" placeholder="Enter Last Name">
    </div>


    <div class="form-group">
      <label for="User_Name" class="text-info"><strong>UserName</strong></label>
      <input type="text" class="form-control" name="username" id="User_Name" placeholder="Enter UserName">
    </div>


    <div class="form-group">
      <label for="Email" class="text-info"><strong>Email</strong></label>
      <input type="email" class="form-control" name="email" id="Email" placeholder="Enter Email">
      <small id="emailHelp" class="form-text text-muted">We'.'ll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
      <label for="pass1" class="text-info"><strong>Password</strong></label>
      <input type="password" class="form-control" id="pass1" placeholder="Password" name="pass1">
    </div>

    <div class="form-group">
      <label for="pass2" class="text-info"><strong>Confirm Password</strong></label>
      <input type="password" class="form-control" id="pass2" placeholder="Re-type Password" name="pass2">
    </div>
    
    <button type="submit" class="btn btn-primary">Register Now</button>
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