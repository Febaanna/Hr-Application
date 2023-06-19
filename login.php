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

 if(isset($_POST["login"]))
 {
  

         $getusername= $_POST["getusername"];
         $getpassword = $_POST["getpass"];
       
         $sql1="SELECT * FROM  tbl_login WHERE logname='$getusername' and logpass ='$getpassword' " ;
          $result=mysqli_query($con, $sql1);
          $row=mysqli_fetch_array($result);
       
          if ($row ["logtype"]=="user")
          {
            header("location: userhome.php");
          }
          else if($row ["logtype"]=="admin")
          {
            header("location: adminhome.php");
          }
        
         
          else{
              
            echo "Username or password Incorrect";
             
             

              header("location: login.php");
          }

 }
 ?>




<section class="bg-light" style="padding-top: 10em;" id="home-section">
    <div class="container">
<div class="row">
   
    
    <div class="col-md-6 pt-5" >
        <h1>Create New Customer Account</h1>
        <p>If you have an account, sign in with your email address.</p>
        
        </div>

        <div class="col-md-6" >

        <form method="POST">
    
    <!-- Email input -->
    <div class="form-outline col-l-6"  style="padding-top: 3em; padding-left: 10em; ">
      <input type="text" name="getusername" class="form-control" />
      <label class="form-label" for="form2Example1">User Name</label>
    </div>
  
    <!-- Password input -->
    <div class="form-outline col-l-6"  style=" padding-left: 10em;" >
      <input type="password" id="password" name="getpass" class="form-control" />
      <label class="form-label" for="form2Example2">Password</label>
    </div>
  
    <!-- 2 column grid layout for inline styling -->
    <div class="row col-l-6"  style=" padding-left: 10em;">
      <div class="col d-flex justify-content-center">
        <!-- Checkbox -->
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
          <label class="form-check-label" for="form2Example31"> Remember me </label>
        </div>
      </div>
  
      <div class="col">
        <!-- Simple link -->
        <a href="#!">Forgot password?</a>
      </div>
    </div>
  
    <!-- Submit button -->
    <input type="submit"  name="login" value ="Login" class="btn btn-primary btn-block col-l-3 pl-5" ></input>
  
    <!-- Register buttons -->
    <div class="text-center col-l-6">
      <p>Not a member? <a href="reg.php">Register</a></p>
      <p>or sign up with:</p>
      <button type="button" class="btn btn-link btn-floating mx-1">
        <i class="fab fa-facebook-f"></i>
      </button>
  
      <button type="button" class="btn btn-link btn-floating mx-1">
        <i class="fab fa-google"></i>
      </button>
  
      <button type="button" class="btn btn-link btn-floating mx-1">
        <i class="fab fa-twitter"></i>
      </button>
  
      <button type="button" class="btn btn-link btn-floating mx-1">
        <i class="fab fa-github"></i>
      </button>
    </div>
  </div>
  </form>

    </div>

    </div>
</div>
    </div>
</section>





</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
</html>