<!DOCTYPE html>
<html lang="en">
<?php
$conn = mysqli_connect("localhost","root","","mle_den")or die(mysqli_error($conn));
$query = mysqli_query($conn,"select * from product")or die(mysqli_error($conn));
?>
<head>
  
    <title>Our Product</title>
   
    <link rel="stylesheet" href="css/responsive.css">
    
    <link rel="stylesheet" href="css/style.css">
   
    
</head>


<body>

    <div id="header_bar">
        <div id="header">
          <div class="right"></div>
          <h1><a href="index.html"> <img src="img/logo.png" alt="lang" /> <span>Denver Store</span> </a></h1>
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
                            <li><a href="cart.php">Cart <i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    
                </div> 
            </div>

      </div>
 
      
    <div class="flex">
        <div class="categ">
                    <div class="desc">
                        <h2>FEATURED PRODUCTS</h2>
                    </div>
                
                    
                    <div class="product-thumb" style="">

                    <?php foreach($query as $record){?>
                        <div class="container" style="padding-left: 15px; width: 300px;">                        
                            <div class="single-preview" style="height: 250px;">
                                <div class="preview-content">
                                    <a href="#" target="_blank">
                                        <div class="thumb">
                                            <img src="./admn/product/<?php echo$record['image']?>" style="height: 190px; width: 350px; margin-left: -49px;">
                                        </div>
                                    </a>
                                </div>
                                <div style="margin-top: -66px; height: 60px;"> 
                                    <h5>Name:<?php echo$record['name']?></h5>
                                    <h5 style="margin-top: -15px;">Price: <?php echo$record['price']?></h5>
                                    <h5 style="margin-top: -15px;"><a href="details.php?id=<?php echo$record['id']?>">Detail</a></h5>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                        
                                                        
                    </div>
                        </div>

                </div>
       

<div class="footer" style="bottom: 0">
        <h3> 
            A SHOP WITH THE BOGONKO'S
        </h3>
                
        Copyright &copy;2020 All rights reserved<i class="fa fa-heart-o" aria-hidden="true"></i>
        
</div>


</body>
</html> 