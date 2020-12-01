<?php
    $conn=mysqli_connect("localhost","root","","mle_den")or die(mysqli_error($conn));
   
    if(isset($_POST['submit'])){
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $salt = "encrypt";
    $password_encrypted = sha1($password.$salt);

        //inserting to the database
        $query = mysqli_query($conn,"INSERT INTO users(id , name, email, password)
        VALUES(null, '$name', '$email', '$password_encrypted')") or die(mysqli_error($conn));

        if($query){
            ?>
        <script>
            alert('Your Details have been recorded!....Shop Now');
        </script>
    <?php
            header('refresh:1;url=login.php');
        }else{
            ?>
            <script>
                alert('Sign up error!!....Retry');
            </script>
            <?php
            header('refresh:url=register.php');
        }
        
    }  
?>
