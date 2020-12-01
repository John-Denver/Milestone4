<!doctype html>

<html lang="en">
        
        <head>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title>Denver|Login page</title>            
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/responsive.css">
           
<body>

    <div id="header_bar">
        <div id="header">
          <div class="right"></div>
          <h1><a href="admn"> <img src="img/logo.png" alt="lang" /> <span>Denver Store</span> </a></h1>
        </div>

        <div id="search_box">
            <form action="#" method="get">
              <input type="text" placeholder="Enter keyword here..." name="q" size="6" id="searchfield"  />
              <input type="submit" name="Search" value=""  id="searchbutton" />
            </form>
          </div>
          
          
        <div class="main-nav">
            <div class="nav-l">
                
                        <div class="list-menu">
                            <ul>
                                <li><a href="#">Contact</a></li>
                                
                            </ul>
                        </div>
                    </div> 
               
        </div> 
     </div>
        

    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
       
                   
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                <div class="text-center m-b-md custom-login">
                    <h3>PLEASE LOGIN TO SHOP</h3>
                    
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form method="POST">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" title="Please enter you username" name="name" class="form-control">
                                <span class="help-block small">Your unique username to app</span>
                            </div>
                            <strong>OR</strong>
                            <div class="form-group">
                                <label class="control-label" for="username">Email</label>
                                <input type="text" title="Please enter you registration" name="email" class="form-control">
                                <span class="help-block small">Your unique username to app</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required value="" name="password" class="form-control">
                                
                            </div>
                            <div class="checkbox login-checkbox">
                                <label>
										<input type="checkbox" class="i-checks"> Remember me </label>
                            </div>
                            <button class="btn btn-success btn-block loginbtn">Login</button>
                            <a class="btn btn-warning btn-block" href="register.php">Register</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
        
    </div>
                            
                                </div>
                                </div>
    </body>
</html>


<?php
$conn=mysqli_connect("localhost","root","","mle_den")or die(mysqli_error($conn));
 
  if($_SERVER['REQUEST_METHOD']=='POST'){
 
     $name = $_POST['name'];
     $email = $_POST["email"];
    $password =  $_POST['password'];
    $salt = "encrypt";
    $password_encrypted = sha1($password.$salt);
 
	 $sql = mysqli_query($conn, "SELECT count(*) as total FROM users WHERE email = '".$email."' OR  name = '".$name."' AND password = '".$password_encrypted."'");
     
     $row = mysqli_fetch_array($sql);

     if($row["total"]>0){
         ?>
         <script>
             alert("Login Successful.");
         </script>
     <?php
        header('refresh:1;url=product.php');
     }else{
         ?>
         <script>
            alert("Login Failed");
         </script>
         <?php
          header('refresh:1;url=login.php');
     }
     }
     
     ?>
 	