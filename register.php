<!DOCTYPE HTML>  
<html>
<head>
  <script src="validation.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  

</head>
<body>  
<?php include 'database.php';

$name = $email = $gender = $mobile = $enrollment = $father = $mother = $password = $address = $category = $dob=$image="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["enrollment"])) {
    echo "Enrollment is required";
  } else {
    $enrollment = test_input($_POST["enrollment"]);
    
  }


  if (empty($_POST["name"])) {
    echo "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    
  }


    if (empty($_POST["father"])) {
    echo "Name is required";
  } else {
    $father = test_input($_POST["father"]);
    
  }


    if (empty($_POST["mother"])) {
    echo "Name is required";
  } else {
    $mother = test_input($_POST["mother"]);
    
  }
  
  if (empty($_POST["email"])) {
    echo "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    
  }
    
  if (empty($_POST["mobile"])) {
    echo "Mobile number is required";
  } else {
    $mobile = test_input($_POST["mobile"]);
  }

  if (empty($_POST["password"])) {
    echo "Password is required";
  } else {
    $password = md5(test_input($_POST["password"]));
  }



    if (empty($_POST["address"])) {
    echo "Name is required";
  } else {
    $address = test_input($_POST["address"]);
    
  }



  if (empty($_POST["category"])) {
    echo "Name is required";
  } else {
    $category = test_input($_POST["category"]);
    
  }




    if (empty($_POST["dob"])) {
    echo "Name is required";
  } else {
    $dob = test_input($_POST["dob"]);
    
  }

  if (empty($_POST["gender"])) {
    echo "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

  $sql="INSERT INTO student(enrollment,name,father_name,mother_name,email,password,address,mobile,category,dob,gender,image)
        VALUES('$enrollment','$name','$father','$mother','$email','$password','$address','$mobile','$category','$dob','$gender','$image')";
  if(mysqli_query($connect,$sql))
    $success= "records inserted successfully";
  else $success= "Not inserted in database";
?>


<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <a class="navbar-brand" href="home.php">Student Portal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link"  href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      
    </ul>
  </div>
</nav>

<h2><center>Student Registration </center></h2>

<form method="post" action ="register.php" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="registrationForm">
  <div class="container">

  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="enrollment">Enrollment Number</label>
    <input type="text" class="form-control col-md-6 " id="enrollment" placeholder="Enter Enrollment Number" name="enrollment">
  </div>
  <div class="form-group col-md-6">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter your Name" name="name">
    </div>
</div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="father">Father's Name</label>
      <input type="name" class="form-control" id="father" placeholder="Enter Father's Name" name="father">
    </div>
    <div class="form-group col-md-6">
      <label for="mother">Mother's Name</label>
      <input type="text" class="form-control" id="mother" placeholder="Enter Mother's Name" name="mother">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
    </div>
  </div>
  <div class="form-group ">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control col-md-12" id="inputAddress" placeholder="1234 Main St" name="address">
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="mobile">Mobile</label>
      <input type="text" class="form-control" id="mobile" name="mobile">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Category</label>
      <select id="category" class="form-control" name="category">
        <option selected>General</option>
        <option>OBC</option>
        <option>SC</option>
        <option>ST</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="date">Date of Birth</label>
      <input type="date" class="form-control" id="date" name="dob">
    </div>
  </div>
 <div class="">
    <label>Gender</label>
  <div class="radio form-group form-check-inline"  >
      <label class="radio-inline"><input type="radio" name="gender" value="male">Male  </label>
    </div>
    <div class="radio form-group form-check-inline">
      <label><input type="radio" name="gender" value="female">Female  </label>
    </div>
    <div class="radio form-group form-check-inline">
      <label><input type="radio" name="gender" value="others">Others</label>
    </div>

  </div>
  
  <br>
  <center><input type="submit" value="Sign up" name ="submit" class="btn btn-primary" onclick="return validate()"></center>
</div>
</form>


<?php
echo "<h2>$success</h2>";
?>
<script>
  window.alert(<?php echo' $success'?>);
</script>


</body>
</html>