<?php

$error = $success ="";

include 'include/header.php';

$getproduct = $conn->query("SELECT * FROM products WHERE email='$email' ");
$count = mysqli_num_rows($getproduct);

$getuser = $conn->query("SELECT * FROM users WHERE email='$email' ");
$username = mysqli_fetch_array($getuser);

$getproduct2 = $conn->query("SELECT * FROM products  ");
$count2 = mysqli_num_rows($getproduct2);

?>

     <?php
     echo $success;
     echo $error;
     ?>
<div class="card col-12">

    <div class="card-header">
        <h2 class="title text-center text-primary">
          User Dashboard
        </h2>
    </div>

    <div class="card-body row col-12 p-5">
                    	                    	
						<div class="card col-4">
                            <div class="card-header">
                                <h3>Your Products</h3>
                            </div>
                            <div class="card-body">
                                <h4><?php echo $count ?></h4>
                                <p></p>
                            </div>

                        </div>
                        <div class="card col-4">
                            <div class="card-header">
                                <h3>All users Products</h3>
                            </div>
                            <div class="card-body">
                                <h4><?php echo $count2 ?></h4>
                                <p></p>
                            </div>

                        </div>
                        <div class="card col-4">
                            <div class="card-header">
                                <h3>Your Username</h3>
                            </div>
                            <div class="card-body">
                                <h4><?php echo $username['username'];?></h4>
                                <p></p>
                            </div>

                        </div>
                        <br>
                        <br>
                        
                        
                        
                    </div>

    </div>

</div>
<br>
<br>


<?php


include 'include/footer.php';

?>