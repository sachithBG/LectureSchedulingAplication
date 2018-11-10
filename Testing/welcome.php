<?php
/**
 * Created by IntelliJ IDEA.
 * User: SACHI
 * Date: 10/9/2018
 * Time: 01:01 PM
 */

   include('session.php');
?>
<html">

<head>
    <title>Welcome </title>
</head>

<body>
<h1>Welcome <?php echo $login_session; ?></h1>
<h2><a href = "logout.php">Sign Out</a></h2>
</body>

</html>