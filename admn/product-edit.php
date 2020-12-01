<?php
  $id=$_GET['id'];
  $conn=mysqli_connect("localhost", "root", "", "mle_den")or die(mysqli_error($conn));
  $query=mysqli_query($conn, "select * from product where id='$id'")or die(mysqli_error($conn));
  foreach($query as $record){
      $name=$record['name'];
      $status=$record['status'];
      $image=$record['image'];
      $price=$record['price'];
      $description=$record['description'];
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

<body style="background: #152036;">
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
          
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
               
                                <div class="admn">
                                        <div class="breadcomb-wp">
                                            <div class="breadcomb-ctn">
												<h2>THY ADMINISTRATION</h2>
												<p>Edit A Product</p>
											</div>
										</div>
                                    
                                </div>

       
            <div class="single-pro-review-area" style="margin-left: 103px;">
                <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#"> Product Edit</a></li>
                                    <li><a href="product-list.php"> Products</a></li>
                                    <li><a href="#"> Review</a></li>
                                </ul>
                                <div class="tab-content custom-product-edit">
                                                <div class="input-group">
                                                        <input type="text" class="p_d" value="<?php echo$id?>" readonly>
                                                    </div>
                                                  
                                                    <div class="input-group col-md-10>
                                                        <input type="text" class="form-control" value="<?php echo$name?>" >
                                                    </div>

                                                    <div class="input-group col-md-10">
                                                        <select name="status" class="form-control" required>
                                                            <option value=""><?php echo$status?></option>
                                                            <option value="new">New</option>
                                                            <option value="stock">Stock</option>
                                                            
                                                        </select>
                                                        
                                                    </div>    

                                                    <div class="input-group col-md-10">
                                                        <input type="text" class="form-control" value="<?php echo$price?>">
                                                    </div>

                                                    <div class="input-group col-md-10 ">
                                                        <input type="text" class="form-control" value="<?php echo$description?>" style="width: 300px; height: 190px;">
                                                    </div>

                                                    <select name="select" class="form-control col-md-9 pl-5 pro-edt-select input-g form-control-primary">
															<option value="opt1">Product Description</option>
															<option value="opt2">Featured Product</option>
															<option value="opt3">New Product</option>
															<option value="opt4">Stock Product</option>
                                                    </select>
                                                    <br>
                                                    <div class="">
                                                    <input type="submit" name="submit" value="Update Product" class="btn btn-outline-info" >
                                                        <div class="clearfix"></div>
                                                    &nbsp;
                                                    </div>

                                                    
                                    </div>
                                    <div class="edt">
                                        <pre>Image of Product</pre>
                                        <img src="product/<?php echo$record['image']?>" style="width: 350px; height: 300px;"> 
                                    </div> 
                                  
                                </div>
                            </div>

            </div>

        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="footer-copy-right">
                    <p>Copyright © 2020 Bogonko All rights reserved.</p>
                </div>
                   
            </div>
        </div>
</body>

</html>