<?php include 'header.php'?>
<div class="content">
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Post Jobs
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
   <form action="" method="POST">
  <div class="mb-3">
    <label for="company" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="company" name="cname">
  </div>
  <div class="mb-3">
    <label for="exampleInputposition" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPosition" name="pos">
  </div>

  <div class="mb-3">
    <label for="CTC" class="form-label">CTC number</label>
    <input type="number" class="form-control" id="CTC" name="CTC">
  </div>
  <button type="submit" class="btn btn-primary" name="job">Submit</button>
</form>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl No</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <?php $sql="SELECT 'cname',;position','CTC' FROM 'jobs'";
  $result=mysqli_query($conn,$sql);
$i=0;
if($result->num_rows>0){
while($row=$result->fetch_assoc()){
echo"
<tbody>
<tr>
<td>".++$i."</td>
<td>".$row['cname']."</td>
<td>".$row['position'."</td>
,td>".$row['CTC']."</td>
</tr>";
}}
else{
echo"";
}?>
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>