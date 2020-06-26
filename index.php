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

      .jumb-pic{
        width:150px;
        height: 150px;
        border-radius: 100px;
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
  
 
  ?>  

    <?php require "partials/_nav.php"; 
      require "partials/_dbconnect.php";
      if($_SERVER['REQUEST_METHOD'] == 'POST')
      {
          $f_name = $_POST['fname'];
          $l_name = $_POST['lname'];
          $username = $_POST['username'];
          $email = $_POST['email'];
          $pass1 = $_POST['pass1'];
          $pass2 = $_POST['pass2'];
          $sql = "SELECT * FROM `User` WHERE `Username` = $username;";
          $search_result = mysqli_query($conn,$sql);
          $user = mysqli_num_rows($search_result);
          if($pass1 == $pass2 && $user == 0)
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

    <div class="jumbotron text-center">
      <img src="photos/myAvatar.png" class="jumb-pic mb-4" alt="">
      <h1 class="typed text-success jumbotron-heading mb-5"><span id="typed"></span></h1>
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="Blog.php" role="button">Browse Blogs</a>
        <a class="btn btn-success btn-lg" href="videos.php" role="button">Browse Videos</a>
      </p>
    </div>

    <div class="container mb-5 mt-5">



      <div class="card-deck">
        <div class="card">
          
          <div class="card-body">
            <h5 class="card-title">Blog Title</h5>
            <p class="card-text">Blog data.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary bt-lg">Read More...</a>
          </div>
        </div>
        <div class="card">
          
          <div class="card-body">
            <h5 class="card-title">Blog title</h5>
            <p class="card-text">Blog Data.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary bt-lg">Read More...</a>
          </div>
        </div>
        <div class="card">
          
          <div class="card-body">
            <h5 class="card-title">Blog title</h5>
            <p class="card-text">Blog data.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary bt-lg">Read More...</a>
          </div>
        </div>
      </div>





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
    <script>
        window.onload = function () {
            console.log("loaded")
            var typed = new Typed('#typed', {
                strings: ["Welcome to iCoder Blogs ","Explore Free videos of Programming", "Contact Me For any query!"],
                backSpeed: 15,
                smartBackspace: true,
                backDelay: 1200,
                startDelay: 1000,
                typeSpeed: 25,
                loop: true,
            });
        };
    </script>
  </body>
</html>