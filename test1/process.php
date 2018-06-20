<?php include 'database.php';?>
<?php

$rating=$_POST['rating'];

mysqli_query($connect,"INSERT INTO testdata(rating)
				VALUES('$rating')");

?>


