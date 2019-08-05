<?php 
require "connect.php";
$id=$_GET["id"];
$sql="DELETE FROM thongtintk WHERE id=:id;";
$statement=$conn->prepare($sql);
if($statement->execute([':id'=> $id,])){
    header("location:/curd");
}