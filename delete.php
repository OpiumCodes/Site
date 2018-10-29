<?php
$mysqli = new mysqli('127.0.0.1', 'root', '', 'login_information');
if(isset($_GET['id']));
 {
     $id=$_GET['id'];
     $sql="DELETE from characters where Id=$id";
     $query=mysqli_query($mysqli,$sql);
 }
?>
<script type="text/javascript">
window.location ="characters.php";
</script>