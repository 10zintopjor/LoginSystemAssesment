<?php
include_once 'header.php';

?>
<div class="form">
    <h2>Add a Product</h2>
<form method="POST" action="addProduct.php">
    <input type="text" name="product" placeholder="Product Name"><br>
    <input type="submit" name="submit">
</form>
<?php
if(isset($_GET['error'])){
    if($_GET["error"] == "stmtfailed"){
        echo "<p>Something went wrong</p>";
    }
    else if($_GET["error"] == "none"){
        echo "<p>Product added successfully</p>";
    }
}

?>
</div>

</body>
</html>