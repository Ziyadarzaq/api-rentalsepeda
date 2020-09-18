<?php
include 'connect.php';

$id = $_POST['id'];
if (isset($id)) {
   SQ = mysqli_query("DELETE FROM sepeda WHERE id");
}
?>
