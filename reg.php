<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<?php

require 'connect.php';

//print_r($_POST);

 if(isset($_POST["submit"]))
 {

    $Name= $_POST['regname'];
     $email= $_POST['email'];
     $password= $_POST['pass'];
     $passwordRepeat= $_POST['repeatpwd'];

     $passwordHash = password_hash($password, PASSWORD_DEFAULT);


//      $errors = array();
//      if(empty ($Name) OR empty($email) OR empty($password) OR empty($passwordRepeat) ){

//          array_push($errors,"All fields are required");

//      }
//      if (!filter_var($email, FILTER_VALIDATE_EMAIL)){

//         array_push($errors,"Email is not valid");

//      }

//      if(strlen($password)<4){
       
//       array_push($errors, "password must be alest 4 character long");
//      }

     

//      if(($password!==$passwordRepeat)){
            
//           array_push($errors,"Password doesn't match");
//         }


       
            

        
//       //Email Already Exit code

 
//       // include 'connect.php';

//       //   $sql= "SELECT * FROM tbl_reg WHERE email = '$email' " ;

//       //   $result = mysqli_query($con, $sql);
//       //   $rowCount = mysqli_num_rows($result);

//       //   if($rowCount>0 ){

//       //     array_push($errors, " Email Already Exit!");
//       //   }


      

// $sql="select * from tbl_reg where (regname='$Name' or email='$email');";

//       $res=mysqli_query($con,$sql);

//       if (mysqli_num_rows($res) > 0) {
        
//         $row = mysqli_fetch_assoc($res);
//         if($email==isset($row['email']))
//         {
//             	echo "email already exists";
//         }
// 		// if($Name==isset($row['name']))
// 		// {
// 		// 	echo "username  already exists";
// 		// }
// 		}
// else{
	


//do your insert code here or do something (run your code)




$sql = "INSERT INTO tbl_reg (regname,email,pass,repeatpwd) VALUES(?, ?, ?)" ;

$stmt = mysqli_stmt_init($con);

$prepareStmt = mysqli_stmt_prepare($stmt, $sql);

if($prepareStmt){
  
   mysqli_stmt_bind_param($stmt, "sss",$Name,$email, $passwordHash);
   mysqli_stmt_execute($stmt);
   echo " <div class= 'alert alert-success'>You are registered successfully</div>";


}


if(count($errors)>0){

     foreach ($errors as $error){

       echo " <div class= 'alert alert-danger'>$error</div>";
     }
    }
// else{
//     die("Something went wrong");
// }




}
// }


        // if(count($errors)>0){

        //   foreach ($errors as $error){

        //     echo " <div class= 'alert alert-danger'>$error</div>";
        //   }
        // }else{
          // include 'connect.php';

          // $sql = "INSERT INTO tbl_reg (regname,email,pass) VALUES(?, ?, ?)" ;

          // $stmt = mysqli_stmt_init($con);

          // $prepareStmt = mysqli_stmt_prepare($stmt, $sql);

          // if($prepareStmt){
            
          //    mysqli_stmt_bind_param($stmt, "sss",$Name,$email, $passwordHash);
          //    mysqli_stmt_execute($stmt);
          //    echo " <div class= 'alert alert-success'>You are registered successfully</div>";
         

          // } else{
          //     die("Something went wrong");
          // }

          // }
 

    
    ?>

<!-- //     $query = "INSERT INTO tbl_reg(regname,email,pass,repeatpwd) VALUES ('$name', '$email','$pass','$repeatpass')";

// if( mysqli_query($con,$query))
//  {
//   echo "insert successfully";
//  }
//  header("location:reg.php"); -->
 

<body>
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form method="post">

                <div class="form-outline mb-4">
                  <input type="text" id="name" name="Name" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" id="email" name="email" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="password" name="pass" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="repeatpass" name="passwordRepeat" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <input type="submit" id="submit" name="submit" value="REGISTER"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
</body>
</html>