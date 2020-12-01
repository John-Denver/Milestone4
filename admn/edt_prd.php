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


<?php include('nav.php')?>
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Product</h4>
                            </div>
                            <div class="content">
                                <form name="product-form" action="" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                         <div class="col-md-5">
                                             <div class="form-group">
                                                 <label>Product Id</label>
                                                 <input type="text" name="pid" value="<?php echo$id?>" readonly>

                                              </div>
                                        
                                          </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Product name</label>
                                                <input type="text" class="form-control"  name="product" value="<?php echo$pname;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Cost</label>
                                                <input type="text" class="form-control"  name="cost" value="<?php echo$pcost?>">
                                            </div>
                                        </div>
                                        
                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea rows="5" class="form-control" name="description"><?php echo$pdescription?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <input type="submit" name="submit" value="update"class="btn btn-info btn-fill pull-right" >
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="uploads/<?php echo$pimage;?>" style="width:400px;height:200px;">
                    
                    </div>
                </div>
            </div>
</div>

<?php include('footer.php')?>
<?php
if(isset($_POST['submit'])){
    $upname=$_POST['product'];
    $upcost=$_POST['cost'];
    $update=mysqli_query($conn,"update product set name='$upname',cost='$upcost' where id='$id' ")or
     die(mysqli_error($conn));
     if($update){
        ?>
        <script>
        window.alert("success");
        window.location.href="product.php";
        </script>
        <?php
        
     }else{
        ?>
        <script>
        window.alert("failed");
        window.location.href="product.php";
        </script>
        <?php
     }

}



?>