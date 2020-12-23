
<!DOCTYPE html>
<html>
<head><title>phpMYAdmin database form</title>
  <meta charset="utf-8">
  <link rel="stylesheet"href="style.css" type="text/css">
</head>
<body>

 <?php   session_start();  ?>


<?php
      if(!isset($_SESSION['email'])) // If session is not set then redirect to Login Page
       {
           header("Location:Login.php");  
       }
?>

  
  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <a class="navbar-brand" href="#">Student Portal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

   
  <form class="form-inline my-0 my-lg-0 float-right">
     <p style="margin-left: 900px;color:white;font-style: 'Verdana';">Hi <?php echo $_SESSION['name']; ?>!</p>
     <a href='logout.php' class="btn bg-light my-0 mr-sm-0" style="margin-left: 9px;">Logout</a>
    </form>
  
</nav>


<form method="post" action ="register.php" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="registrationForm">
  <div class="container">

  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="enrollment">Enrollment Number</label>
    <input type="text" class="form-control col-md-6 " disabled name="enrollment" value= "<?php echo $_SESSION['enrollment']; ?>">
  </div>
  <div class="form-group col-md-6">
      <label for="name">Name</label>
      <input type="text" class="form-control" disabled  name="name" value= "<?php echo $_SESSION['name']; ?>">
    </div>
</div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="father">Father's Name</label>
      <input type="text" class="form-control" disabled value= "<?php echo $_SESSION['father_name']; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="mother">Mother's Name</label>
      <input type="text" class="form-control" disabled value= "<?php echo $_SESSION['mother_name']; ?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" disabled name="email" value= "<?php echo $_SESSION['email']; ?>">
    </div>

  </div>
  <div class="form-group ">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control col-md-12" disabled value= "<?php echo $_SESSION['address']; ?>">
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="mobile">Mobile</label>
      <input type="text" disabled class="form-control" id="mobile" name="mobile" value= "<?php echo $_SESSION['mobile']; ?>">

    </div>
      <div class="form-row">
    <div class="form-group col-md-6">
      <label for="mobile">Category</label>
      <input type="text" disabled class="form-control"  name="category" value= "<?php echo $_SESSION['category']; ?>">

    </div>

  </div>
    <div class="form-group col-md-2">
      <label for="date">Date of Birth</label>
      <input type="date" class="form-control" id="date" disabled value= "<?php echo $_SESSION['dob']; ?>">
    </div>
  </div>



  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="mobile">Gender</label>
      <input type="text" disabled class="form-control"  name="category" value= "<?php echo $_SESSION['gender']; ?>">

    </div>

  </div>
  
  <br>
  <center><input type="submit" value="Print" name ="submit" class="btn btn-primary" onclick="window.print()"></center>
</div>
</form>

</body>
</html>