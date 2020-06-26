
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
  

  <?php require "partials/_nav.php"; ?>

  <?php
  require "partials/_dbconnect.php";
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $desc = $_POST['desc'];

  $sql = "INSERT INTO `Contact` (`Name`, `Email`, `Phone`, `Subject`, `Description`, `Date`) VALUES ('$name','$email','$phone','$subject','$desc', current_timestamp());";

  $result = mysqli_query($conn,$sql);
  if($result)
  {
    echo '<div class="alert mb-0 alert-success alert-dismissible fade show" role="alert">
    <strong>Thanks!</strong> We contact with you as soon as possible.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }


}
?>    
    
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img" src="photos/coding-924920_1280.jpg" alt="First slide">
          </div>
         
        </div>
      </div>

      <div class="conatiner text-center my-5">
          <h1>Contact Me</h1>
      </div>
    


      <div class="container mb-5">
        <form action="/iCoder/Contact.php" method="post">
            <div class="form-group">
              <label for="Name">Name</label>
              <input type="text" class="form-control" id="Name" placeholder="Enter Your Name" name="name">
            </div>
            
            <div class="form-group">
              <label for="Email">Email</label>
              <input type="email" class="form-control" id="Email" placeholder="Enter Your Email" name="email">
            </div>
            
            <div class="form-group">
              <label for="Phone">Phone No.</label>
              <input type="text" class="form-control" id="Phone" placeholder="Enter Your Phone No." name="phone">
            </div>
            
            <div class="form-group">
                <label for="Subject">Subject</label>
                <input type="text" class="form-control" id="Subject" placeholder="Subject of the Problem" name="subject">
              </div>
              
           
            <div class="form-group">
              <label for="Description">Description</label>
              <textarea class="form-control" id="Description" rows="3" name="desc"></textarea>
            </div>
            <button type="submit" class="btn btn-outline-primary">Submit</button>
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

  </body>
</html>