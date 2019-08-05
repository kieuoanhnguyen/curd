<?php
//connect to my database qlemail
require "connect.php";
if(isset($_POST['save'])){
$id= $_POST['id'];
$name=$_POST['name'];
$pass=$_POST['password'];
$email=$_POST['email'];
$country=$_POST['country'];
try{
  $sql="INSERT INTO thongtintk(id,name,password,email,country) VALUES (:id,:name,:password_mail,:email,:country)";
    $statement=$conn->prepare($sql);
    $statement->execute([':id'=> $id,':name'=>$name,':password_mail'=>$pass,':email'=>$email,':country'=>$country]);
    echo "inserted successfully";
    header("location:/curd");
}
catch(PDOException $e){
    echo "Connection fail :".$e->getMessage();
}
}?>
<?php require 'header.php'?>
<div class="container">
<form  method="post">
  <div class="form-group">
    <label for="id">id:</label>
    <input name="id" type="text" class="form-control"></br>
  </div>
  <div class="form-group">
    <label for="name">Name:</label>
    <input name="name" type="text" class="form-control"></br>
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input name="password" type="text" class="form-control"></br>
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input name="email" type"text" class="form-control"></br>
  </div>
  <div class="form-group">
    <label for="country">Coutry:</label>
    <input name="country" type="text" class="form-control"></br>
  </div>
  <button type="submit" name="save" class="btn btn-success"> Add New Employee</button>
</form>
</div>
<?php require 'footer.php'?>
