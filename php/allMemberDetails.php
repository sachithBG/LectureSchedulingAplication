<?php
/**
 * Created by IntelliJ IDEA.
 * User: SACHI
 * Date: 9/23/2018
 * Time: 04:59 PM
 */

$id = $_GET['cid'];
$name = $_GET['cname'];
$address = $_GET['caddress'];
$contact = $_GET['ctel'];
$dat = $_GET['datepicker'];


$connection = mysqli_connect("127.0.0.1", "root", "1234", "efaclecture", "3306");

if (!$connection) {
    echo "Could not able to establish the connection", "<br>";
    echo mysqli_connect_error();
    die;
}

$resultset = $connection->query("SELECT * FROM customer");

$rows = $resultset->fetch_all();
echo json_encode($rows);

?>