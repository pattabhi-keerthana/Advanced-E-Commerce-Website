<?php
$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn = mysqli_connect($server,$username,$password,$database);

if($conn->connect_error){
die("Connection Failed : ".$conn->connect_error);
}
echo"";
session_start();

if(isset($_POST['Login'])){
$email=$_POST['email'];
$password=$_POST['password'];
$query="SELECT * FROM users WHERE 'email'='$email' AND 'password'='$password';
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_arr($result,MYSQLI_ASSOC);
if(mysqli_num_row($result)==1){
 header("location:index.php");
}
else{
error="email ID or password is incorrect");
}
}
if(isset($POST['job'])){
$cname=$_POST['cname'];
$pos=$_POST['pos'];
$jdesc=$_POST['jdesc'];
$CTC = $_POST['CTC'];

$sql="INSERT INTO 'jobs'('cname','pos','jdesc','CTC')VALUES('$cname','$pos','$jdesc','$CTC');
if(mysqli_query($conn,$sql)){
echo "New Job Posted";
}
else{
echo "ERROR: Failed to post the job $sql.".mysqli_error($conn);;
}
}
mysqli_close($conn);
?>
