<?php 
require 'connect.php';
$id=$_GET['id'];
if(isset($_POST['change'])){
 $name=$_POST['name'];
 $password=$_POST['password'];
 $email=$_POST['email'];
 $country=$_POST['country'];

try{
   $sql="UPDATE thongtintk SET name=:name,password=:password,email=:email,country=:country WHERE id=:id";
   $statement=$conn->prepare($sql);
   $statement->execute([':name'=>$name,':password'=>$password,':email'=>$email,':country'=>$country,':id'=>$id]);
   header("location:/curd");
}
catch(PDOException $e){
   echo "edit fail:" .$e->getMessage();
}
}
?>
<?php require 'header.php'?>
<div>
<form  method="post">
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
  <button type="submit" name="change"  class="btn btn-success"> Save change</button>
</form>
</div>
<?php require 'footer.php'?>