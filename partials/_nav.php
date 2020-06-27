<?php

session_start();
if(($_SESSION) && ($_SESSION['username']!="admin"))
{
  echo '<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="index.php">iCoder</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Blog.php?blogNo=1">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="videos.php">Videos</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="Contact.php">Contact Me</a>
        </li>
      </ul>
 
      <ul class="navbar-nav mr-right ml-2">
      <li class="nav-item">
      <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Welcome '.$_SESSION['username'].'
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="edit-profile.php">Edit Details</a>
      <a class="dropdown-item" href="logout.php">LogOut</a>
    </div>
  </div>
      </li>
     
      </ul>
    </div>
    </nav>';
}

elseif(($_SESSION) && ($_SESSION['username']=="admin"))
{
  echo '<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="index.php">iCoder</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Blog.php?blogNo=1">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="videos.php">Videos</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="Contact.php">Contact Me</a>
        </li>
      </ul>
      
      <ul class="navbar-nav mr-right ml-2">
      
      <li class="nav-item">
      <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Welcome '.$_SESSION['username'].'
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="edit-profile.php">Edit Details</a>
      <a class="dropdown-item" href="dashboard.php">DashBoard</a>
      <a class="dropdown-item" href="logout.php">LogOut</a>
    </div>
  </div>
      </li>
     
      </ul>
    </div>
    </nav>';
}




else
{

  echo '<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <a class="navbar-brand" href="index.php">iCoder</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Blog.php?blogNo=1">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="videos.php">Videos</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="Contact.php">Contact Me</a>
      </li>
    </ul>
    
    <ul class="navbar-nav mr-right ml-2">
    <li class="nav-item">
    <a href="signup.php" class="nav-link btn btn-outline-warning ml-2">
    Signup
    </a>
    </li>
    
    <li class="nav-item">
    <a href="login.php" class="nav-link  btn btn-outline-warning ml-2">
    LogIn
    </a>
    </li>
    </ul>
  </div>
  </nav>';  

}  







?>