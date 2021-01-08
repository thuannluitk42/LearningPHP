<?php 
include "inc/header.php"; 
include "config.php"; 
include "Database.php"; 
?>

<?php 
$db = new Database();
$query = "select * from php_user";
$read = $db->select($query);
?> 
 
<table class="tmain">
<tr>
<th>Name</th>
<th>Email</th>
<th>Skill</th>
<th>Action</th>
</tr>

<?php  if ($read) { ?>
<?php while($row = $read->fetch_assoc()) {?>    

<tr>
<th><?php echo $row['name'];?></th>
<th><?php echo $row['email'];?></th>
<th><?php echo $row['skill'];?></th>
<th><a href="update.php?id=<?php echo $row['id'];?>">Edit</a></th>
</tr>

<?php }?>

<?php } else {?>
<p>There are no data</p>
<?php }?>
</table>


<?php include "inc/footer.php"; ?>