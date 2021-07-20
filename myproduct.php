<?php
$success = $error = "";
include 'include/header.php';


if (isset($_POST['delete'])){

    $pid = $conn->real_escape_string($_POST['serial']);

    $idowner = $conn->query("SELECT * FROM products WHERE email='$email' AND serial='$pid'");
    $chk = mysqli_num_rows($idowner);   
    
    if($chk > 0 ){

        $delete = $conn->query("DELETE FROM products WHERE serial='$pid'");

        if ($delete){
            $success =  "<script type='text/javascript'>

            Swal.fire({
            title: 'Successful',
            text: 'Product Deleted Successfuly ',
            icon: 'success',
            confirmButtonText: 'Cool'
            })

                                        </script>";
        }
    }else{
        $error =			 "<script type='text/javascript'>

    Swal.fire({
    title: 'Error!',
    text: 'Sorry! you are not permited to delete this product',
    icon: 'error',
    confirmButtonText: 'Try Again'
    })

    </script>";

    }
}

?>

<div class="card col-12">

    <div class="card-header">
        <h2 class="title text-center text-primary">
            My Products
        </h2>
    </div>

    <?php 
        echo $success;
        echo $error;  
    ?>
    <div class="card-body p-5">
                    	                    	
						<table>
                        <thead class="bg bg-primary text-white" >
                            <th>Serial</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Action</th>
                        </thead>
                        <?php 
                            $qry_product = $conn->query("SELECT * FROM products WHERE email='$email' ");
                            $sn = 0;
                            while ($fetch = $qry_product->fetch_assoc()) {
                            
                                $sn++;
                        ?>
                        <tbody>
                                <tr>
                                    <td><?php echo $sn ?></td>
                                    <td><?php echo $fetch['product'] ?></td>
                                    <td>&#x20A6;<?php echo $fetch['price'] ?></td>
                                    <td><?php echo $fetch['description'] ?></td>
                                    <td class="row">
                                        <a class="btn btn-warning"  href="edit?productid=<?php echo $fetch['serial'] ?> "> Edit </a>

                                    <form action="" method="post">
                                        <input type="hidden" name="serial" value="<?php echo $fetch['serial'] ?> ">
                                        <button class="btn btn-danger " type="submit" name="delete"> Delete </button>

                                    </form>
                                   
                                 </td>
                                    
                                </tr>
                                
                                
                        </tbody>
                                <?php 
                            }
                                ?>



                        </table>
                    </div>

    </div>

</div>
<br>
<br>

<?php

include 'include/footer.php';

?>