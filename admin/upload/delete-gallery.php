<?php

include '../conn.php';

if(isset($_GET['rem'])) {
    $did=$_GET['rem'];

    $sql="DELETE FROM gallery WHERE id=$did";
    $result=mysqli_query($conn,$sql);

    if($result) {
        header("location: ../gallery-list.php");
    } else {
        die(mysqli_error($conn));
    }
}