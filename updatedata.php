<?php
include "connect.php";

   $id = $_POST['id'];
   $namasepeda = $_POST['namasepeda'];
   $kodesepeda = $_POST['kodesepeda'];
   $merksepeda = $_POST['merksepeda'];
   $jenissepeda = $_POST['jenissepeda'];
   $warnasepeda = $_POST['warnasepeda'];
   $hargasewa  = $_POST['hargasewa'];
   $gambarsepeda = $_POST['gambarsepeda'];

   if (isset($id) &&isset($namasepeda) && isset($kodesepeda) && isset($merksepeda) && isset($jenissepeda) && isset($warnasepeda) && isset($hargasewa) && isset($gambarsepeda)) {
     SQ = mysqli_query("UPDATE sepeda  WHERE id = '$id',
       namasepeda = '$namasepeda',
       kodesepeda = '$kodesepeda',
       merksepeda = '$merksepeda',
       jenissepeda = '$jenissepeda',
      warnasepeda = '$warnasepeda',
      hargasewa = '$hargasewa',
       gambarsepeda = '$gambarsepeda'");

       if (SQ) {
         $response = 'success';
       }else {

         $response = 'error';
       }
       echo json_encode(array('status' => $response,
     )};
   }
?>
