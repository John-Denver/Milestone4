<?php
  $id=$_GET['id'];
  $conn=mysqli_connect("localhost", "root", "", "mle_den")or die(mysqli_error($conn));
  $query=mysqli_query($conn, "select * from product where id='$id'")or die(mysqli_error($conn));
  foreach($query as $record){
      $name=$record['name'];
      $image=$record['image'];
      $price=$record['price'];
      $description=$record['description'];
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
   
    <title>Product-Details</title>
   
    <link rel="stylesheet" href="css/responsive.css">
    
    <link rel="stylesheet" href="css/style.css">
   
    
</head>


<body>

    <div id="header_bar">
        <div id="header">
          <div class="right"></div>
          <h1><a href="index.php"> <img src="img/logo.png" alt="lang" /> <span>Denver Store</span> </a></h1>
        </div>
      
        <div id="search_box">
            <form action="#" method="get">
              <input type="text" placeholder="Enter keyword here..." name="q" size="6" id="searchfield"  />
              <input type="submit" name="Search" value="" id="searchbutton" />
            </form>
          </div>

          <div class="main-nav">
            <div class="nav-l">
                <div class="list-menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="product.php">Products</a></li>
                        <li><a href="cart.php">Cart <i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
                   
            </div> 
        </div>

    </div>

       
      
      <div class="flex">
        <div class="categ">
                <div class="desc">
                    <h2><?php echo$name?> DETAIL</h2>
                </div>
            
        
                <div class="product-thumb" style="">
                    <div class="container" style="padding-left: 15px; width: 300px;">                        
                        <div class="single-preview" style="height: 250px;">
                            <div class="preview-content">
                                <a href="#" target="_blank">
                                    <img src="./admn/product/<?php echo$record['image']?>" style="height: 190px; width: 350px; margin-left: -49px;">
                                </a>
                            </div>                                   
                        </div>
                    </div>
                </div>
        </div>

       </div>



                    <div class="product-thumb" style="margin-left: 399px; margin-top: -300px;">
                            <div class="container" style="padding-left: 15px; width: 300px;">                        
                                <div class="" style="height: 300px;">
                                
                                <div class="product-content" style="width: 600px; margin-right: -240px;">
                                    <p><?php echo$description?></p>
                                </div>

                                <p class="price">Name: <?php echo$name?>  | Price: <?php echo$price?></p>
                           
                                <a href="#" >Add to cart |</a><a href="cart.php" class="price" >My Cart<i class="fa fa-shopping-cart"></i></a>
                                  
                            </div>
                        </div>

                    </div>

    
    
<div class="footer">
    <h3> 
        A SHOP WITH THE BOGONKO'S
    </h3>
            
    Copyright &copy;2020 All rights reserved<i class="fa fa-heart-o" aria-hidden="true"></i>
    
</div>
    
</body>
</html>