


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

        .img{
            height: 500px;
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
  

  <?php require "partials/_nav.php";
  
  if(!($_SESSION))
{
    header("location: login.php");
    exit;
}
  
  ?>
  <div class="container mt-4">
      
      <h2>Edit Profile Details</h2>
      <hr>
      
      <?php 


    require "partials/_dbconnect.php";
    $name = $_SESSION['username'];
    $sql = "SELECT * FROM `User` WHERE `Username`='$name';";
    $result = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($result);

 
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        // $username = $_POST['username'];
        $sql = "UPDATE `User`
                SET `F_Name` = '$fname', `L_Name` = '$lname',`Email` = '$email' WHERE `User`.`Username`='$name';";
        $result_update = mysqli_query($conn,$sql); 
        if($result_update)
        {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your account details successfully updated.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
    
    }
    
    
    



   echo '<form action="/iCoder/edit-profile.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="fname">First Name</label>
      <input type="text" class="form-control" id="fname" placeholder="First Name" name = "fname" value='.$data['F_Name'].'>
    </div>
    <div class="form-group col-md-6">
      <label for="lname">Last Name</label>
      <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname" value='.$data['L_Name'].'>
    </div>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Email" name="email" value='.$data['Email'].'>
  </div>
  <fieldset disabled>
  <div class="form-group">
    <label for="Username">UserName</label>
    <input type="text" class="form-control" id="Username" placeholder="Username" name="username" value='.$data['Username'].'>
  </div>
  </fieldset>
  
  
  <button type="submit" class="btn btn-info">Update Profile</button>
</form>'
?>

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

  </body>
</html>