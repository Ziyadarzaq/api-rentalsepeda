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
     $query="UPDATE user SET nim='$nim',nama='$nama',jurusan='$jurusan',jenis_kelamin='$jenis_kelamin',alamat='$alamat' where id_mahasiswa='$id_mahasiswa'";

       if (SQ) {
         $response = 'success';
       }else {

         $response = 'error';
       }
       echo json_encode(array('status' => $response,
     )};
   }
?>
