<?php
include "header.php";
$id=$_GET['id'];

?>
<div class="form">
    <h2>Edit Your Product</h2>
<form method="POST" action="includes/update.inc.php?id=$id">
    <input type="text" name="name" placeholder="New Name">
    <input type="submit">
</form>

</div>
</body>
</html>

