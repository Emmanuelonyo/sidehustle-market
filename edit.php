<?php

$error = $success ="";

include 'include/header.php';


if (isset($_GET['productid'])){

    $pid = $conn->real_escape_string($_GET['productid']);

    $idowner = $conn->query("SELECT * FROM products WHERE email='$email' AND serial='$pid'");
    $chk = mysqli_num_rows($idowner); 

    if($chk < 1){
       
        $error = "<script type='text/javascript'>

        Swal.fire({
        title: 'Error!',
        text: 'Oops! you are not permited to edit this product',
        icon: 'error',
        confirmButtonText: 'Try Again'
        })
    
        </script>";

        ?>
        <script>
									setTimeout(function(){ window.location.href="myproduct" }, 3000);</script>
        <?php
    }else{

        $prodata1 = $conn->query("SELECT * FROM products WHERE serial='$pid'");
        $prodata = mysqli_fetch_array($prodata1);
        
    }
}

if (isset($_POST['save'])){

$pname = $conn->real_escape_string($_POST['name']);
$dscr = $conn->real_escape_string($_POST['description']);
$price = $conn->real_escape_string($_POST['price']);

if (!empty($pname) && !empty($dscr) && !empty($price)){

        $insert = $conn->query("UPDATE  products SET product='$pname',price='$price',description='$dscr',email='$email' WHERE serial='$pid'"); 

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
            title: 'Success',
            text: 'Product Updated Successfuly',
            icon: 'success',
            confirmButtonText: 'Cool'
            })

                                        </script>";

                                        ?>
                                        <script>
									setTimeout(function(){ window.location.href="myproduct" }, 3000);</script>
                                    <?php
            

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
								<input type="text" name="name" placeholder="Product Name" class="form-control" value="<?php echo $prodata['product'] ?>">
							</div>
							<div class="form-group">
								<label>Price</label>
								<input type="text" name="price" placeholder="&#x20A6;0.00" class="form-control" value="<?php echo $prodata['price'] ?>">
							</div>
							
							<div class="form-group">
								<label>Description</label>
								<textarea type="text" name="description" placeholder="Description goes here" class="form-control" cols="5" rows="5" spellcheck="false" value=""><?php echo $prodata['description'] ?></textarea>
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