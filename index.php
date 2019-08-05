<?php require "connect.php"?>
<?php $sql="SELECT * FROM thongtintk;";
$statement=$conn->prepare($sql);
$statement->execute();
$people=$statement->fetchAll(PDO::FETCH_OBJ);
//echo $people;
?>
<?php require "header.php"?>
<aside>
    <div>
        <table class="table  table-striped table-bordered">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Password</th>
                <th>Email</th>
                <th>Country</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php foreach($people as $person):?>
            <tr>
                <td><?=$person->id;?></td>
                <td><?=$person->name;?></td>
                <td><?=$person->password;?></td>
                <td><?=$person->email;?></td>
                <td><?=$person->country;?></td>
                <td>
                  <a href="edit.php?id=<?=$person->id;?>" name="edit">
                    <button class="btn btn-primary">edit</button>
                  </a>
                </td>
                <td>
                  <a href="delete.php?id=<?=$person->id;?>" name="delete">
                    <button class="btn btn-primary">delete</button>
                  </a>
                </td>
            </tr>
            <?php endforeach;?>
            <tr>
            <a href="insert.php">Add new employee</a>
            </tr>
        </table>
    </div>
</aside>
<?php require "footer.php"?>
