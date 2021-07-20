<?php

$error = $success ="";

include 'include/header.php';

if (isset($_POST['save'])){

$pname = $conn->real_escape_string($_POST['name']);
$dscr = $conn->real_escape_string($_POST['description']);
$price = $conn->real_escape_string($_POST['price']);

if (!empty($pname) && !empty($dscr) && !empty($price)){

        $insert = $conn->query("INSERT INTO products (product,price,description,email) VALUES ('$pname','$price','$dscr','$email')"); 

        if(!$insert){

            $error = "<script type='text/javascript'>

    Swal.fire({
    title: 'Error!',
    text: 'Oops! Somthing Went Wrong',
    icon: 'error',
    confirmButtonText: 'Try Again'
    })

    </script>";

        }else{


            $success =  "<script type='text/javascript'>

            Swal.fire({
            title: 'Login Successful',
            text: 'preparing your account in secs... ',
            icon: 'success',
            confirmButtonText: 'Cool'
            })

                                        </script>";
            

        }
   
}else{

     $error =			 "<script type='text/javascript'>

    Swal.fire({
    title: 'Error!',
    text: 'All Fields are mandatory',
    icon: 'error',
    confirmButtonText: 'Try Again'
    })

    </script>";
}

}

?>

     <?php
     echo $success;
     echo $error;
     ?>
<div class="card col-12">

    <div class="card-header">
        <h2 class="title text-center text-primary">
            Add a Product
        </h2>
    </div>

    <div class="card-body p-5">
                    	                    	
						<form action="" method="POST">
							<div class="form-group">
								<label>Product Name</label>
								<input type="text" name="name" placeholder="Product Name" class="form-control">
							</div>
							<div class="form-group">
								<label>Price</label>
								<input type="text" name="price" placeholder="&#x20A6;0.00" class="form-control">
							</div>
							
							<div class="form-group">
								<label>Description</label>
								<textarea type="text" name="description" placeholder="Description goes here" class="form-control" cols="5" rows="5" spellcheck="false"></textarea>
							</div>
							<div class="form-group">
								<button type="submit" name="save" class="btn btn-primary btn-lg">Save</button>
								<a href="index.php" class="btn btn-danger btn-lg">Back</a>
							</div>
						</form>
                    </div>

    </div>

</div>
<br>
<br>


<?php


include 'include/footer.php';

?>