<?php 
$conn = mysqli_connect("127.0.0.1", "root", "","butaqrup");
$sql=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM contact WHERE id=1"));
echo mysqli_connect_error();
?>