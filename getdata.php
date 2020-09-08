<?php
 include 'connect.php';
 $hasil         = mysql_query("SELECT * FROM sepeda") or die(mysql_error());
 $json_response = array();

if(mysql_num_rows($hasil)> 0){
while ($row = mysql_fetch_array($hasil)) {
$json_response[] = $row;
}
echo json_encode(array('sepeda' => $json_response));}
?>
