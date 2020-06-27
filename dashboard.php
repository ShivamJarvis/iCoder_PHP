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

.adminLogo{
    width:150px;
    border-radius:100px
}

    </style>

  </head>


  <body>
  

  <?php require "partials/_nav.php"; 
  
  if(!($_SESSION) || $_SESSION['username']!='admin')
  {
        header("location: index.php");
        exit;
  }
  ?>

<div class="container mt-5 text-center">
<img src="photos/myAvatar.png" alt="" class="mb-2 adminLogo">
<h1 class="text-info"><u>Welcome to Admin DashBoard</u></h1>

</div>
<div class="container mt-4">

<div class="row">
<div class="col">
  <div class="col mb-3">
  <div class="card border border-info" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Add New Video Series</h5>
    <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
    <p class="card-text">Here Add New Head of the new video series.</p>

    <a href="add_video_head.php" class="card-link btn btn-info">Add Now</a>
  </div>
</div>
</div>
  </div>
  <div class="col">
  <div class="col mb-3">
  <div class="card border border-info" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Add New Video on existing Series</h5>
    <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
    <p class="card-text">Here Add New Video in existing video series.</p>

    <a href="add_new_video.php" class="card-link btn btn-info">Add Video</a>
  </div>
</div>
  </div>
  </div>
  <div class="col">
  
  <div class="col mb-3">
  <div class="card border border-info" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Show Contacts Info</h5>
    <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
    <p class="card-text">Here Add New Head of the new video series.</p>

    <a href="show_contacts.php" class="card-link btn btn-info">Show Contacts</a>
  </div>
</div>
  </div>
</div>


<div class="col">
  <div class="col mb-3">
  <div class="card border border-info" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Add New Blog</h5>
    <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
    <p class="card-text">Here Add New Blog for Python.</p>

    <a href="add_blogs.php" class="card-link btn btn-info">Add Blog</a>
  </div>
</div>
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

  </body>
</html>