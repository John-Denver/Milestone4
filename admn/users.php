<!DOCTYPE html>
<html lang="en">
<head>
        <title>My_Doc</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <link rel="stylesheet" href="css/admn.css" type="text/css">
        <link rel="stylesheet" href="css/responsive.css" type="text/css">
         
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


        <link rel="stylesheet" href="css/bootstrap.min.css">
       
          

</head>

<?php
$conn = mysqli_connect("localhost","root","","mle_den")or die(mysqli_error($conn));
$query = mysqli_query($conn,"select * from users")or die(mysqli_error($conn));
?>


<body style="overflow-x: hidden;">
   <?php include('nav.php')?>
  


    <div class="content" style="padding-left: 260px; padding-top: 100px;">
        <div class="container-fluid">
        <div class="row">
        <h4 class="title" style="padding-left: 400px;">Registered users</h4>

            <div class="col-md-12">
            <div class="card card-plain">
                    
                            <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-bordered">
                                    <thead>
                                    <th>ID</th>
                                    <th>Date Joined</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>User Type</th>
                                    
                                    
                                    </thead>
                                    <tbody>
                                    <?php foreach($query as $record){?>
                                    <tr>
                                        <td><?php echo$record['id']?></td>
                                        <td><?php echo$record['date_t']?></td>
                                        <td><?php echo$record['name']?></td>
                                        <td><?php echo$record['email']?></td>
                                        <td><?php echo$record['user_type']?></td>
                                        
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                            </table>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
    </div>


</body>
</html>
