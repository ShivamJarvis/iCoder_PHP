
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
 require "partials/_nav.php"; ?>
    <div class="row no-gutters">
        <div class="col-6 col-md-4">
            <div class="side-nav1" id="side-nav1">
                <div class="list1">
                    <ol>
                    
                    
    
                 
                       <li class=" mb-2 activehover">
                            <a href="?catID='.$cat.'&catName='.$catName.'&videoID='.$row['Sno'].'">'.$row['Name'].'</a>
                        </li>
                    
                      
                    </ol>
                </div>

            </div>
        </div>

                   
                    
                    $video = $_GET['videoID'];
                    $sql = "SELECT * FROM `$catName` WHERE Sno = '$video';";
                    $vid_result = mysqli_query($conn,$sql);
                    $vidDetails = mysqli_fetch_assoc($vid_result);
                    

       <div class=" col-md-8 main-content">
            <h1 class="video-title text text-info">'.$vidDetails['Sno'].'. '.$vidDetails['Name'].'</h1>

            <div class="video-frame">
                <iframe width="560" height="315" src="'.$vidDetails['Link'].'" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>

            <div class="desc-code-area mt-3">

                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#desc"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    Description
                                </button>
                            </h5>
                        </div>

                        <div id="desc" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">'.
                               $vidDetails['Description'].'
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#code"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                Code
                                </button>
                            </h5>
                        </div>
                        <div id="code" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                               '.$vidDetails['code'].'
                            </div>
                        </div>
                    </div>

                </div>


                </div>
            </div>
            </div>

    <div class="container d-flex justify-content-center" style="margin-left:215px;">
        
            


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