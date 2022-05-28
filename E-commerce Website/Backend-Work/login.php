<html>
<head>
<head>
<title>Login</title>
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
<form method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <p style="text-align:center">New User?<br>Create a new account <a href="register.php">Signup here</a></p>
</form>
</body>
</html>