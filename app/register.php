<?php
/**
 * Created by IntelliJ IDEA.
 * User: SACHI
 * Date: 9/20/2018
 * Time: 11:37 PM
 */


////////////////////////////////////////////////////////
include 'allURL.php';
include 'service.php';
include 'register_data.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $result = $connection->query("INSERT INTO registration VALUES ('$NID','$Name','$Email','$Password','$Previlage')");
    $result = (bool)(($connection->affected_rows) > 0);

    if ($result) {
       // $message = "User has been successfully saved";
       // echo "<script> alert('$message') </script>>";
        echo "<script>window.location.replace('$registreLogURL')</script>";
    } else {
        //$message = "Customer has not been saved";
        //echo "<script> alert('Not saved')</script>";
        echo "<script>window.location.replace('$registreRegURL')</script>";
    }
}
?>