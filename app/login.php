
<?php
/**
 * Created by IntelliJ IDEA.
 * User: SACHI
 * Date: 10/9/2018
 * Time: 12:59 PM
 */

include("service.php");
include 'allURL.php';
session_start();
$error = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myEmail = mysqli_real_escape_string($connection,$_POST['emailLG']);
    $mypassword = mysqli_real_escape_string($connection,$_POST['passwordLG']);

    $sql = "SELECT Name, Previlage FROM registration WHERE Email = '$myEmail' and Password = '$mypassword'";
    $result = mysqli_query($connection,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $Prev=  $row["Previlage"];
    $Name1=  $row["Name"];
////////////
 //   echo "<script > alert('$RE1');</script>>";
    $result1 = $connection->query($sql);
    $row1 = $result1->fetch_assoc();
    if ($result1->num_rows > 0) {
        // output data of each row
        while($row2 = $result1->fetch_assoc()) {
            $RE =  $row2["Name"];
        }
    } else {
        echo "0 results";
    }
 ///////////
   // $count = mysqli_num_rows($result);

    $result2 = (bool)(($connection->affected_rows) == 1);
    if ($result2) {
        if ($Prev == 'Student' ){
     //       $message = "User has been successfully loged";
     //       echo "<script > alert('$message');</script>>";
            $_SESSION['login_user'] = $Name1;
            header("$studentHTML");
        }elseif ($Prev == 'Lecture'){
     //       $message = "User has been successfully loged";
     //       echo "<script > alert('$message');</script>>";
            $_SESSION['login_user'] = $Name1;
            header("$lectureHTML");
        }elseif ($Prev == 'Admin'){
     //       $message = "User has been successfully loged";
     //       echo "<script > alert('$message');</script>>";
            $_SESSION['login_user'] = $Name1;
            header("$adminHTML");
        }else{}

    } else {
        $error = "Your Login Name or Password is invalid";
       // echo "<script src='../appJs/logFile.js'>  alert($error);</script>";
        header("$indexHTML");
    }

    $connection->close();
}
?>

