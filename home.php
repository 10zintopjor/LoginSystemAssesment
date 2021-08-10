<?php
include_once 'header.php';
?>
<div class="form">
        <h1>Display Table Data</h1>
        
 </div>
        <table class="center">
            <tr>
                <th>Id</th>
                <th>Product</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
<?php
require_once 'includes/dbh.inc.php';

$sql = "select * from products";
$query = mysqli_query($conn,$sql);
while($res = mysqli_fetch_array($query)){
?>
             <tr>
                <td><?php echo $res['p_id']; ?></td>
                <td><?php echo $res['p_name']; ?></td>
                <td><button><a href="delete.php?id=<?php echo $res['p_id']; ?>">Delete</a></button></td>
                <td><button><a href="update.php?id=<?php echo $res['p_id']; ?>">Update</a></button></td>
            </tr>
<?php
 }
?>
</table>

    
    
</body>
</html>

