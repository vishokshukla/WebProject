<!DOCTYPE HTML>  
<html>
<head>
  <script src="validation.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  

</head>
<body> 


  <?php  
  include 'database.php';
  session_start();   // session starts with the help of this function 


if(isset($_SESSION['email']))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
 {
    header("Location:newpage.php"); 
 }

if(isset($_POST['submit']))   // it checks whether the user clicked login button or not 
{
     $email = $_POST['email'];
     $pass =md5( $_POST['password']);


  $sql = "SELECT * FROM student where email='$email' and password='$pass';";
  $result = mysqli_query($connect, $sql);
  $count = mysqli_num_rows($result);
  
  while($row = mysqli_fetch_array($result)){

  $emailid =  $row['email'];
     $password = $row['password'];
     $mobile=$row['mobile'];
      $enrollment=$row['enrollment'];
      $name=$row['name'];
      $father=$row['father_name'];
      $mother=$row['mother_name'];
      $dob=$row['dob'];
      $address=$row['address'];
      $category=$row['category'];
      $gender=$row['gender'];


  echo $emailid;
  
}

     if($count > 0){


      if($email == $emailid && $pass == $password)  // username is  set to "Ank"  and Password   
         {                                   // is 1234 by default     
          $_SESSION['enrollment']=$enrollment;
          $_SESSION['name'] =$name;
          $_SESSION['father_name'] =$father;
          $_SESSION['mother_name'] =$mother;
          $_SESSION['address'] =$address;
          $_SESSION['dob'] =$dob;
          $_SESSION['category'] =$category;
          $_SESSION['gender'] =$gender;
          $_SESSION['email']=$email;
          $_SESSION['mobile']=$mobile;


         echo '<script type="text/javascript"> window.open("newpage.php","_self");</script>';            //  On Successful Login redirects to home.php

        }

        else
        {
            echo "invalid UserName or Password";        
        }
}}
 ?>


	<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <a class="navbar-brand" href="home.php">Student portal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="register.php">Register</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="login.php">Login</a>
      </li>
     
    </ul>
  </div>
</nav>
		

	<center><h2>Student Login </h2>


		<form method="post" action ="login.php"  name="loginForm">

	<div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
    </div>

    <div class="form-group col-md-6">
      <label for="inputEmail4">Password</label>
      <input type="password" class="form-control" id="inputEmail4" placeholder="Password" name="password">
    </div>


    <input type="submit" value="Login" name ="submit" class="btn btn-primary" >

		</form>

  </center>

</body>
</html>
	