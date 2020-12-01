<!doctype html>
<html lang="en">
<?php
$conn = mysqli_connect("localhost","root","","mle_den")or die(mysqli_error($conn));
$query = mysqli_query($conn,"select * from product")or die(mysqli_error($conn));
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Products List</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="admin.css">
</head>

<body style="background: #152036;">
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


        

<?php include('nav.php')?>
  
    <div class="all-content-wrapper">

        <div class="admn">
                <div class="breadcomb-wp">
                    <div class="breadcomb-ctn">
                        <h2>THY ADMINISTRATION</h2>
                        <p>What's in the Store </p>
                    </div>
                </div>
            
                            
        </div>
    </div>
                            
        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="add-product">
                    <a href="add_product.php" style="margin-top: -75px;">Add Product</a>
                </div>
                       <div class="product-status-wrap">
                            <h4>Products List</h4>
                            
                            <table>
                                <tr>
                                    <th>Image</th>
                                    <th>Product ID</th>
                                    <th>Product Name</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                                <?php foreach($query as $record){?>
                                    
                                <tr>
                                    <td><img src="product/<?php echo$record['image']?>"></td>
                                    <td>Product<?php echo$record['id']?></td>
                                    <td><?php echo$record['name']?></td>
                                    <td><?php echo$record['description']?></td>
                                    <td>
                                        <button class="pd-setting"><?php echo$record['status']?></button>
                                    </td>
                                    <td><?php echo$record['price']?></td>
                                    <td>
                                        <div class="cust">
                                            <ul class="pag">
                                                <li class=""><a class="" href="product-edit.php?id=<?php echo$record['id']?>">Edit</a></li>
                                                <li class="" ><a class="" href="#" style="background: red">Delete</a></li>
                                            </ul>
                                        </div>
                                     </td>
                                </tr>
                                <?php } ?>
                               
                            </table>
                            <div class="custom-pagination">
								<ul class="pagination">
                                    <li class=""><a class="page-link" href="#">Previous</a></li>									
                                    <li class=""><a class="page-link" href="#">1</a></li>
									<li class=""><a class="page-link" href="#">2</a></li>
									<li class=""><a class="page-link" href="#">3</a></li>
									<li class=""><a class="page-link" href="#">Next</a></li>
								</ul>
                            </div>
                        </div>
                </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="footer-copy-right">
                    <p>Copyright © 2020 BogonkoAll rights reserved.</p>
                </div>
                   
            </div>
        </div>
    

</body>

</html>