<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!(isset($_SESSION['customerid'])))
    header('Location:login.php?error=nologin');

$results = mysql_query("SELECT * FROM accounts WHERE  customerid='$_SESSION[customerid]'");
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

    
<div id="toptabmenu">
    <ul>
            <li><a href="accountalerts.php">My accounts</a></li>
            <li><a href="transferfunds.php">Transfer funds</a></li>
            <li><a href="payloans.php">Pay loans</a></li>
            <li><a href="mailinbox.php">Mails</a></li>
            <li><a href="changetranspass.php">Personalise</a></li>
            <li><a href="logout.php">logout</a></li>
    </ul>
    
</div>
</div>

<div id="templatemo_main">
    <div id="sidecon">
        <h2 align="center">ACCOUNTS SUMMARY</h2>
     		 <table width="616" border="1">
     		   <tr>
     		     <th scope="col">ACCOUNT TYPE</th>
     		     <th scope="col">NAME</th>
     		     <th scope="col">ACCOUNT NUMBER</th>
     		     <th scope="col">BRANCH</th>
     		     <th scope="col">CURRENCY</th>
     		     <th scope="col">A/C BALANCE</th>
   		     </tr> 
             <?php
			 while($arrow = mysql_fetch_array($results))
			{
				echo "<tr><td>$arrow[accounttype]</td>
     		     <td>$_SESSION[customername]</td>
     		     <td>$arrow[accno]</td>
     		     <td>$_SESSION[ifsccode]</td>
     		     <td>INR</td>
     		     <td>$arrow[accountbalance]</td></tr>";
			}
		   ?>
     		 </table>
    </div>
    
    <div id="sidebar">
        <h2>My Accounts</h2>
               
                <ul>
                <li><a href="accountsummary.php">Accounts summary</a></li>
                <li><a href="ministatements.php">Mini statement</a></li>
                <li><a href="accdetails.php">Account details</a></li>
                <li><a href="stateacc.php">Statements of accounts</a><p>&nbsp;</p></li>
                </ul>
    </div>
</div>


<?php include'footer.php' ?>
    </div>
</body>
</html>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>