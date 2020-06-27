


    
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



    </style>

  </head>


  <body>
  

  <?php require "partials/_nav.php"; 
  


  if(!($_SESSION) && $_SESSION['username']!='admin')
  {
        header("location: index.php");
        exit;
  }
  ?>

  <div class="container mt-4 text-center">
  <h1 class="text text-info"> <u>Add New Blog</u> </h1>
  </div>

  <div class="container d-flex justify-content-center my-4">
  <?php

require "partials/_dbconnect.php";
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $tit = $_POST['topic'];
    $desc = $_POST['desc'];
    
    $sql = "INSERT INTO `Python_Blogs` (`Title`, `Content`, `Date`) VALUES ('$tit','$desc',current_timestamp());";
    $add_blog = mysqli_query($conn,$sql);
    if($add_blog)
    {
        echo '<script>alert("Succesfully uploaded")</script>';
    }
}
?>
  <form action="/iCoder/add_blogs.php"  method="post" class="col-md-6">
  <div class="form-group">
    <label for="title">Enter Title</label>
    <input type="text" class="form-control" id="title" placeholder="Enter Title" name="topic">
  </div>
 
  <div class="form-group">
    <label for="desc">Content</label>
    <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
  </div>

<button class="btn btn-info" type="submit">Add New Blog</button>

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