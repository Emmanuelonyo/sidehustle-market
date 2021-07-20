<?php

$error = $success ="";

include 'include/header.php';


if (isset($_POST['update'])){

$oldpass = $conn->real_escape_string($_POST['oldpass']);
$newpass = $conn->real_escape_string($_POST['newpass']);
$cpass = $conn->real_escape_string($_POST['cpass']);
$md5passold =  md5($oldpass);
if (!empty($oldpass) && !empty($newpass) && !empty($cpass)){

    $qrypass = $conn->query("SELECT * FROM users WHERE pass = '$md5passold'")   ;

    $chkpass = mysqli_num_rows($qrypass);

    if($chkpass < 1){
        
        $error = "<script type='text/javascript'>

        Swal.fire({
        title: 'Error!',
        text: 'Your Old Password is Incorrect',
        icon: 'error',
        confirmButtonText: 'Try Again'
        })
    
        </script>";

    }elseif($newpass !== $cpass){

        $error = "<script type='text/javascript'>

    Swal.fire({
    title: 'Error!',
    text: 'Password does not match',
    icon: 'error',
    confirmButtonText: 'Try Again'
    })

    </script>";
    }else{

     $md5pass =  md5($newpass);
       
    $insert = $conn->query("UPDATE users SET pass='$md5pass' WHERE email='$email'"); 

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
            text: 'Password Changed Successfuly',
            icon: 'success',
            confirmButtonText: 'Cool'
            })

                                        </script>";

                                        ?>
                                        <script>
									setTimeout(function(){ window.location.href="myproduct" }, 3000);</script>
                                    <?php
            

        }
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
            Change Your Password
        </h2>
    </div>

    <div class="card-body p-5">
                    	                    	
						<form action="" method="POST">
							<div class="form-group">
								<label>Old Password</label>
								<input type="password" name="oldpass"  class="form-control" >
							</div>
							<div class="form-group">
								<label>New Password</label>
								<input type="password" name="newpass"  class="form-control" >
							</div>
							<div class="form-group">
								<label>Confirm Password</label>
								<input type="password" name="cpass"  class="form-control" >
							</div>
						
							<div class="form-group">
								<button type="submit" name="update" class="btn btn-primary btn-lg">Change Password</button>
								<a href="index" class="btn btn-danger btn-lg">Back</a>
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