<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!($_SESSION["adminid"]))
{
		header("Location: emplogin.php");
}
?>
<html>
<head>
<link href="images/favicon.ico" rel="shortcut icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MinutoFinance</title>
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" /></head>
<body>
    
    <div><img src="images/batman1.png" id="batimg1"><img src="images/batman1.png" id="batimg2"></div>
    <div id="bodycontent">

<div id="templatemo_wrapper">

    

<!-- <div  id="toptabmenu">
    <ul>
            <li><a href="admindashboard.php">Dashboard</a></li>
            <li><a href="viewbranch.php">Settings</a></li>
            <li><a href="viewcustomer.php">customers</a></li>
            <li><a href="viewtransaction.php">Transactions</a></li>
            <li><a href="mailinbox.php">Mail</a></li>
            <li><a href="logout.php">logout</a></li>
        </ul>
    
</div> --> 

<?php require_once('nav-loggedin.php') ?>

</div>

<div id="templatemo_main">
    <div id="sidecon">
        <h2>&nbsp;</h2>
     		 <div class="news_box">
                    <h2><B>Administrator Dashboard</B></h2>		
                    <div style="font-size:20px;"><p><b>This is administrator main page. Here administrator can control all customer information, employee records, bank account details, etc.</b></p></div>
                    <div class="cleaner"></div>
     		</div>
        <br/><br/><br/><br/>
    </div>
    
    <div id="sidebar">
        <h2>Dashboard</h2>
                
                <ul>
                <li><a href="admindashboard.php">Home</a></li>
                <li><a href="changepass.php">Change Password</a></li>
                </ul>
    </div>
</div>


<?php include'footer.php' ?>
    </div>
</body>
</html>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>