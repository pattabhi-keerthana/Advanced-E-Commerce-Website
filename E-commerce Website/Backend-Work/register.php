<?php
$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn = mysqli_connect($server,$username,$password,$database);
if($conn->connect error){
die("Connection failed:".$conn->connect_error);
}
echo"";

if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['phone_no'];
$password=$_POST['password'];

$sql="INSERT INTO 'users'('Name','email','password','phone_no') VALUES ('$name','$email','$password','$number')";
if(mysqli query($conn,$sql){
echo "Records inserted successfully.";
}
else{
 echo "ERROR: Could not able to execute $sql.".mysqli_error($conn);
}
}
?>
<!doctype html>
<html>
<head>
<title>Register</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<style>
body{
background-image:url('back.jpg');
background-size:cover;
}
form{
margin-top:3em;
margin-left:30em;
margin-right:10em;
padding:30px;
box-shadow:10px 10px 8px 10px #bdbcb9;
background-color:white;
}
</style>
</head>
<body>
<form action="" method="POST">
   <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name of the Candidate</label>
    <input type="text" class="form-control" id="exampleInputName" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputNumber" class="form-label">Contact</label>
    <input type="number" class="form-control" id="exampleInputNumber" name="phone_no">
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
 <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2">
  </div>
  <input type="submit" class="btn btn-primary" name="submit" value="submit">
  Already Registered? <a href="login.php">Login here</a>
</form>
</div>
</body>
</html>