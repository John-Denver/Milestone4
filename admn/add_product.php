<?php
$conn = mysqli_connect("localhost","root","","mle_den") or die(mysqli_error($conn));
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $cost = $_POST['price'];
    $status = $_POST['status'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];

    if($_FILES['image']['name']!=''){
        $path='product/';
        $location = $path.$image;
        if(move_uploaded_file($_FILES['image']['tmp_name'],$location)){
          //insert into database
          $query = mysqli_query($conn,"insert into product(id, name, description,  status, image, price) 
          values(null,'$name','$description', '$status', '$image', '$price')")or die(mysqli_error($conn));
          if($query){
              ?>
              <script>
                  window.alert("success");
                  window.location.href="product-list.php";
              </script>
              <?php

          }else{
              ?>
              <script>
                  window.alert("failed");
                  window.location.href="add_product.php";
              </script>
              <?php
              
          }

        }


    }
    
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ADMN DENVER</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="admn.css">
</head>
<?php include('nav.php')?>
<div class="left-sidebar-pro">
        <nav id="sidebar" class="">
          <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu">
                        <li class="active">
                            <a class="has-arrow" href="index.html">
                                <span class="">THY SHOP</span>
                                </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Product List" href="product-list.php"><span class="mini-sub-pro">Product List</span></a></li>
                                <li><a title="Product Edit" href="product-edit.php"><span class="mini-sub-pro">Product Edit</span></a></li>
                                <li><a title="Product Detail" href="product-detail.php"><span class="mini-sub-pro">Product Detail</span></a></li>
                       
                        <li id="removable">
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="">Pages</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Login" href="login.php"><span class="mini-sub-pro">LogOut</span></a></li>
                                <li><a title="Register" href="register.php"><span class="mini-sub-pro">Register</span></a></li>
                            </ul>
                        </li>
                    </ul>
                    </li>
                </ul>
                </nav>
        </nav>
    </div>
<body style="background: #152036;">
    <div class="content" style="margin-top: 150px; margin-left: 300px;">

            <div class="container-fluid pb-5">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Product</h4>
                            </div>
                            <hr>
                            <div class="content">
                                <form name="product-form" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-7 pl-4">
                                            <div class="form-group">
                                                <label>Upload file</label>
                                                <input type="file" name="image" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-6 pl-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Product name" name="name">
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-5">
                                            <select name="status" class="form-control" required>
                                                <option value="">Status....</option>
                                                <option value="new">New</option>
                                                <option value="stock">Stock</option>
                                                
                                            </select>
                                        </div>
                                        <div class="col-md-6 pl-4">
                                            <div class="form-group">                                                
                                                <input type="text" class="form-control"  placeholder="Price" name="price">
                                            </div>
                                        </div>
                                        
                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10 pl-4">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea rows="5" class="form-control" name="description"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="submit" name="submit" value="Add Product" class="btn btn-outline-info" >
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

</body>
