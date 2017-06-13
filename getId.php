<?php
    include'admin/db.php';

	$sl=mysqli_query($con,"select * from movies where id='".$_REQUEST['bookId']."'") or die(mysqli_error($con));
		$rw=mysqli_fetch_array($sl,MYSQLI_ASSOC);
		$name = $rw['name'];
        $preview = $rw['preview']; 
        echo $name.",".$preview;
 ?>