<?php

    require "partials/_dbconnect.php";
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $title = $_POST['title'];
        $link = $_POST['link'];
        $desc = $_POST['desc'];
        $code = $_POST['code'];
        $id = $_POST['id'];

        $sql = "SELECT * FROM `Video_Head` WHERE `ID`='$id';";
        $id_query = mysqli_query($conn,$sql);
        if($id_query)
        {
        $db_name = mysqli_fetch_assoc($id_query);
        $db_name = $db_name['Topic'];
        if($db_name)
        {
            
        $sql = "INSERT INTO `$db_name`(`Name`,`Link`,`Description`,`code`,`ID`) VALUES('$title','$link','$desc','$code','$id');";
        $insert_video = mysqli_query($conn,$sql);
    
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
   if(!($_SESSION) || $_SESSION['username']!='admin')
   {
         header("location: index.php");
         exit;
   }
?>

<div class="container mt-4">
<h3 class="text text-info">Contacters...</h3>
<hr>




 <table class="table table-hover">
  <thead>
    <tr>
      
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Subject</th>
      <th scope="col">Description</th>
      <th scope="col">Date</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  
  <?php
$sql = "SELECT * FROM `Contact`";
$query = mysqli_query($conn,$sql);
$num = 0;
  if($query)
  {
    while($row = mysqli_fetch_assoc($query))
    {
        $num+=1;
    echo '<tr>
      <th scope="row">'.$num.'</th>
      <td>'.$row['Name'].'</td>
      <td>'.$row['Email'].'</td>
      <td>'.$row['Phone'].'</td>
      <td>'.$row['Subject'].'</td>
      <td>'.$row['Description'].'</td>
      <td>'.$row['Date'].'</td>
      <td><a href=remove_contact.php?id='.$row['Sno'].' class="btn btn-danger">Remove</a></td>
    </tr>';
}
}
?>
</tbody>
</table>
  


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