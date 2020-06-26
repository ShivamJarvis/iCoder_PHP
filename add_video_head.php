<?php

require "partials/_dbconnect.php";
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $topic = $_POST['topic'];
    // $pathImg = $_POST['image'];
    $imgName = $_FILES['image']['name'];
    $desc = $_POST['desc'];

    $sql = "INSERT INTO `Video_Head`(`Topic`,`Description`,`Photo`,`Date`) VALUES ('$topic','$desc','$imgName',current_timestamp());";
    $result = mysqli_query($conn,$sql);
    
    $m = "photos/".$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],$m);
    if($result)
    {
        $sql = "CREATE TABLE `iCoder`.`$topic` ( `Sno` INT(4) NOT NULL AUTO_INCREMENT , `Name` VARCHAR(200) NOT NULL , `Link` VARCHAR(200) NOT NULL , `Description` TEXT NOT NULL , `code` TEXT NOT NULL , `ID` INT(4) NOT NULL , PRIMARY KEY (`Sno`)) ENGINE = InnoDB;";
        $make_table = mysqli_query($conn,$sql);

        if($make_table)
        {
          header("location: add_new_video.php");
        }
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
  


  if(!($_SESSION) && $_SESSION['username']!='admin')
  {
        header("location: index.php");
        exit;
  }
  ?>

  <div class="container mt-4 text-center">
  <h1 class="text text-info"> <u>Add New Video Series</u> </h1>
  </div>

  <div class="container d-flex justify-content-center my-4">
  
  <form action="/iCoder/add_video_head.php"  method="post" class="col-md-6" enctype="multipart/form-data">
  <div class="form-group">
    <label for="topic">Enter Topic</label>
    <input type="text" class="form-control" id="topic" placeholder="Enter Topic" name="topic">
  </div>
 
 <div class="form-group my-3">
  <div class="custom-file">
  <input type="file" class="custom-file-input" id="customFileLang fileUpload" name="image" >
  <label class="custom-file-label" for="customFileLang">Choose File</label>
 </div>
</div>

  <div class="form-group">
    <label for="desc">Mini Description</label>
    <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
  </div>

<button class="btn btn-info" type="submit">Add Now</button>

</form>
  
  
  </div>


  <div class="container mt-4">
<h3 class="text text-info">Current Video Series with ID...</h3>
<hr>




 <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">Title of Series</th>
    </tr>
  </thead>
  <tbody>
  <?php

$sql = "SELECT * FROM `Video_Head`";
$query = mysqli_query($conn,$sql);
$num = 0;
  if($query)
  {
    while($row = mysqli_fetch_assoc($query))
    {
        $num+=1;
    echo '<tr>
      <th scope="row">'.$num.'</th>
      <td>'.$row['ID'].'</td>
      <td>'.$row['Topic'].'</td>
    </tr>';
    }
  }
  ?>
     </tbody>
</table>'



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