<?php
 require "partials/_dbconnect.php";
 
 


?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>iCoder</title>
    <link rel="icon" href="/photos/myAvatar.png" type="image/icon type">

    <style>
        
        

        .comment-section h2
        {
            overflow-y: hidden;
        }

        .side-nav1 {
            background-color: rgb(5, 112, 145);
            width: 300px;
            height: 100vh;
            overflow-x: hidden;
            overflow-y: scroll;

        }

        .comment-box{
            height:300px;
            width:730px;
            overflow-y:scroll;
        }
    
        .list1 {
            margin-top: 40px;
            font-weight: bold;
            font-size: 18px;
            color: #ffffff;
            text-decoration: none;
        }


        a {
            color: white;
        }

        a:hover {
            text-decoration: none;
            color: rgb(15, 150, 204);
        }

        

       
        .video-title {
            margin-top: 60px;
            overflow-y: hidden;
        }
        body{
            overflow-x:hidden;
        }
        iframe {
            width: 800px;
            height: 450px;
            margin-top: 15px;
        }

        .desc-code-area {
            margin-right: 100px;
            margin-bottom: 30px;
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
 require "partials/_nav.php"; 
 
 
 ?>
    <div class="row no-gutters">
        <div class="col-6 col-md-4">
            <div class="side-nav1" id="side-nav1">
                <div class="list1">
                    <ol>
                    
                    
    <?php
        
        $blog = $_GET['blogNo'];
        // $blog_no = $_GET['bno'];
        $sql = "SELECT * FROM `Python_Blogs`;";
                 $search_blogid = mysqli_query($conn,$sql);
                 while(($row=mysqli_fetch_assoc($search_blogid)))
                 {
                echo '<li class=" mb-2 activehover">
                            <a href="?blogNo='.$row['Sno'].'">'.$row['Title'].'</a>
                        </li>';
                 }
                      ?>
                    </ol>
                </div>

            </div>
        </div>

                   
                    <?php
                    $blog = $_GET['blogNo'];
                 
                    $sql = "SELECT * FROM `Python_Blogs` WHERE `Sno` = '$blog';";
                    $blog_result = mysqli_query($conn,$sql);
                    $blogDetails = mysqli_fetch_assoc($blog_result);
                    

     echo  '<div class=" col-md-8 main-content">
            <h1 class="video-title text text-info mb-3"><u>'.$blogDetails['Title'].'</u></h1>
                 <img src="photos/python.jpg" class="my-4"  style="width:400px; margin-left:190px">
            <div class="video-frame" style="margin-right:50px;">
                 '.$blogDetails['Content'].'
                 <br>
                 <h5 class="text-right mt-3"><u>By iCoder on '.$blogDetails['Date'].'</u></h5>
            </div>';
            ?>
                </div>
            </div>
            <div class="container d-flex justify-content-center" style="margin-left:215px; ">
            <?php
            require "partials/_dbconnect.php";

            $blog = $_GET['blogNo'];
           
           

                 if($_SERVER['REQUEST_METHOD']=='POST')
                 {
                    if($_SESSION)
                    {
                    
                        $user = $_SESSION['username'];
                        $content = $_POST['comment'];
                        $sql = "INSERT INTO `Blog-Comments` (`User`, `Content`,`Blog_No`, `Date`) VALUES ('$user', '$content','$blog', current_timestamp());";
                        $insert_data = mysqli_query($conn,$sql);
                    }
                    else
                    {
                        echo '<script>alert("You must be logged in on this website");</script>';

                    }
           

                 }



        echo '
        <form class="col-md-8" action="/iCoder/Blog.php?blogNo='.$blog.'"  method="post">'
            ?>
                <h2>Post Your Comment</h2>
                <hr>
        <div class="form-group">
        <label for="comment">Type your comment here:</label>
        <textarea class="form-control" id="comment"
    rows="3" name="comment"></textarea>
    </div>
    <button type='submit' class="btn btn-info" >Post</button>
    </form>
  </div>
    <div class="container mt-3 comment-box border border-info" style="margin-left:425px">
<?php 
    $blog = $_GET['blogNo'];
 
    $sql = "SELECT * FROM `Blog-Comments` WHERE `Blog_No`=$blog ORDER BY `Sno` DESC;";
    $fetch_comment = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($fetch_comment);
    if($num>0)
    {
        while(($row=mysqli_fetch_assoc($fetch_comment)))
        {
         echo '<div class="media col-md-8 my-3">
            <img class="mr-3" src="photos/user-png.png" style="width:50px;" alt="Generic placeholder image">
            <div class="media-body">
<h5 class="mt-0">'.$row['User'].'</h5><pre>'.$row['Content'].' <br><small>comment date : '.$row['Date'].'</small></pre>
            </div>
        </div>
   ';
        }
    }
    else
    {
        echo '<h2 class="mt-3 text text-danger text-center"><u>No comments to show</u></h2>';
    }
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