<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style1.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<style>.error {color: #FF0000;}</style>
</head>
<body>

<!-- Sidenav (hidden by default) -->
<nav class="w3-sidenav w3-card-2 w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:20%;min-width:300px;background-color:#20A4F3;" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-closenav">Close Menu</a>
  <a href="index.php" onclick="w3_close()">Recipe Me</a>
  <a href="login.php" onclick="w3_close()">Login</a>
  <a href="signup.php" onclick="w3_close()">Sign Up</a>
</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-#C1CFDA w3-xlarge w3-padding-xlarge" style="max-width:1200px;margin:auto;background-color:#C1CFDA;">
    <div class="w3-opennav w3-left w3-hover-text-grey" onclick="w3_open()">&#9776;</div>
    <div class="w3-center"><a href="index.php"><img src="logo2.png" width="150" height="90"></a></div>
  </div>
</div>
<hr>
<form action="postprocess.php" enctype='multipart/form-data' method="post">
  <div class="imgcontainer">
    <img src="https://cdn4.iconfinder.com/data/icons/people-of-service/512/People_Services_chef_woman-512.png" alt="Avatar" class="avatar">
  </div>
  <center>
  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
<div></div>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
<div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" style="margin-left:auto;margin-right:auto;display:block;background-color: #2084f3">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>
  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" style="margin-left:auto;margin-right:auto;display:block;">Cancel</button>
    
    <span class="psw">Forgot <a href="lookup.php">password?</a></span>

  </div>
  </center>
</form>


<!-- Footer -->
  <footer class="w3-center w3-#C1CFDA w3-padding-64" style="background-color:#C1CFDA">
  <div class="w3-xlarge" style="background-color:#C1CFDA;">
    <a href="https://www.facebook.com/" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
    <a href="https://www.pinterest.com/" class="w3-hover-text-red"><i class="fa fa-pinterest-p"></i></a>
    <a href="#" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
    <a href="https://twitter.com/" class="w3-hover-text-grey"><i class="fa fa-flickr"></i></a>
    <a href="https://www.linkedin.com/" class="w3-hover-text-indigo"><i class="fa fa-linkedin"></i></a>
    <a href="login.php" class="w3-hover-text-red" title="Go to top"><i class="fa fa-arrow-up"></i></a>
  </div>
  
</footer>

<script src="js/calc1.js"></script>

</body>
</html>