<!DOCTYPE html>
<html>
  <head>
    <title>codeBuddies</title>
    <!-- Obtain Bootstrap style sheet from CDN (online service) so it doesn't have to be on my machine -->
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet" media="screen">    

    <link rel="stylesheet" type="text/css" href="css/main.css">

  </head>
  <body>
    <div class="navbar-wrapper">
        <div class="container">
        
            <div class="logo">
                <a href="#"> <img src="imgs/logo.png" height="120" width="300"></a>
            </div>

            <div class="login">
                <div id="sign"> 
                    <a href="#signupForm">Sign Up</a>
                </div>

                <form action="?action=process" method="post">
                    <input type="text" name="user" id="username" placeholder="Email">
                    <input type="password" name="pass" id="pass" placeholder="Password">
                    <input type="submit" value="LOGIN" />
                </form>
            </div>  <!-- Close login -->
        
        </div> <!-- Close container -->
    </div> <!-- Close navbar-wrapper -->