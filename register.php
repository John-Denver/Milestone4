<!doctype html>
<html lang="en">
        
        <head>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title>Denver|Register page</title>            
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/responsive.css">
        </head>

<body>
<div id="header_bar">
        <div id="header">
          <div class="right"></div>
          <h1><a href="admn"> <img src="img/logo.png" alt="lang" /> <span>Denver Store</span> </a></h1>
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
        

    <div class="container-fluid" style="margin-top: 100px;">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
                <div class="text-center custom-login">
                    <h3>Registration</h3>
                    
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="signup.php" method="POST">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Username</label>
                                    <input class="form-control" name="name">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Repeat Password</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Email Address</label>
                                    <input class="form-control" name="email">
                                </div>
                                
                                
                            </div>
                            <div class="text-center">
                            <input type="submit" name="submit" value="Register" class="btn btn-outline-success" >
                                <button class="btn btn-default">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
        </div>
        
    </div>