<?php

if ($_SERVER['REQUEST_METHOD'] =='POST'){
    $id = $_POST['id'];
    $namasepeda = $_POST['namasepeda'];
    $kodesepeda = $_POST['kodesepeda'];
    $merksepeda = $_POST['merksepeda'];
    $jenissepeda = $_POST['jenissepeda'];
    $warnasepeda = $_POST['warnasepeda'];
		$hargasewa = $_POST['hargasewa'];


    require_once 'connect.php';

    $sql = "UPDATE sepeda SET namasepeda='$namasepeda',kodesepeda='$kodesepeda',jenissepeda='$jenissepeda',merksepeda='$merksepeda', warnasepeda='$warnasepeda',hargasewa='$hargasewa' WHERE id = '$id'";


    if( mysqli_query($conn, $sql) ) {
        $result["success"] = "1";
        $result["message"] = "success";

        echo json_encode($result);
        mysqli_close($conn);

    } else {

        $result["success"] = "0";
        $result["message"] = "error";

        echo json_encode($result);
        mysqli_close($conn);
    }
}

?>
