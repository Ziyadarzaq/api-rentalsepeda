<?php
include "connect.php";
if (isset($_POST['updatedata'])) {

	// AMBIL ID DATA
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);

	// AMBIL NAMA FILE FOTO SEBELUMNYA
	$data = mysqli_query($mysqli, "SELECT gambarsepeda FROM sepeda WHERE id='$id'");
	$dataImage = mysqli_fetch_assoc($data);
	$oldImage = $dataImage['gambarsepeda'];

	// AMBIL DATA DATA DIDALAM INPUT
	$namasepeda = mysqli_real_escape_string($mysqli, $_POST['namasepeda']);
	$kodesepeda = mysqli_real_escape_string($mysqli, $_POST['kodesepeda']);
	$merksepeda = mysqli_real_escape_string($mysqli, $_POST['merksepeda']);
  $jenissepeda = mysqli_real_escape_string($mysqli, $_POST['jenissepeda']);
  $warnasepeda = mysqli_real_escape_string($mysqli, $_POST['warnasepeda']);
  $hargasewa = mysqli_real_escape_string($mysqli, $_POST['hargasewa']);
	$filename = $_FILES['newImage']['name'];


  // JIKA FOTO DI GANTI
  if (!empty($filename)) {
    $filetmpname = $_FILES['newImage']['tmp_name'];
    $folder = "img/";

    // GAMBAR LAMA DI DELETE
    unlink($folder . $oldImage) or die("GAGAL");

    // GAMBAR BARU DI MASUKAN KE FOLDER
    move_uploaded_file($filetmpname, $folder . $filename);

    // NAMA FILE FOTO + DATA YANG DI GANTIBARU DIMASUKAN
    $result = mysqli_query($mysqli, "UPDATE sepeda SET namasepeda='$namasepeda',kodesepeda='$kodesepeda',merksepeda='$merksepeda',jenissepeda='$jenissepeda',warnasepeda='$warnasepeda',hargasewa='$hargasewa',gambarsepeda='$filename' WHERE id=$id");
  }

  // MEMASUKAN DATA YANG DI UPDATE KECUALI GAMBAR
  $result = mysqli_query($mysqli, "UPDATE sepeda SET namasepeda='$namasepeda',kodesepeda='$kodesepeda',merksepeda='$merksepeda',jenissepeda='$jenissepeda',warnasepeda='$warnasepeda',hargasewa='$hargasewa',gambarsepeda='$filename' WHERE id=$id");

}

?>
