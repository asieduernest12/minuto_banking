<?php
session_start();
include("dbconnection.php");

if(!(isset($_SESSION['customerid'])))
    header('Location:login.php?error=nologin');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MinutoFinance</title>
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" /><link href="images/favicon.ico" rel="shortcut icon">
</head>
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
       <h2> Transactions made</h2>
        	  <table border="1">
        	    <tr>
        	      <td height="27"><strong>Transaction No.</strong></td>
                  <td><strong>Transaction date</strong></td>
                  <td><strong>Payee ID</strong></td>
                  <td><strong>Receiver ID</strong></td>
        	      <td><strong>Amount</strong></td>
            	  <td><strong>Status</strong></td>
      	      </tr>
<?php
$query="SELECT * FROM transactions where (payeeid=".$_SESSION['customerid'].") or (receiveid=".$_SESSION['customerid'].") ORDER BY  paymentdate DESC";
$rectrans=mysql_query($query);
while($recs = mysql_fetch_array($rectrans))
{	
$transid=$recs['transactionid'];
$transdate=$recs['paymentdate'];
$payeeid=$recs['payeeid'];
$receiveid=$recs['receiveid'];
    $amount=$recs['amount'];
    $status=$recs['paymentstat'];	
		echo "<tr>
        	      <td>$transid</td>
        	      <td>$transdate</td>
        	      <td>$payeeid</td>
        	      <td>$receiveid</td>
                      <td>$amount</td>
        	      <td>$status</td></tr>";
}
?>
      	    </table>
        	  <p><input type="button" value="Print Transaction detail" onClick="window.print()"></p>
    </div>
    
    <div id="sidebar">
         <h2>Transfer Funds</h2>
                <ul>
                <li><a href="addexternalpayee.php">Add External Payee</a></li>
                <li><a href="viewexternalpayee.php">View registered Payee</a></li>
                <li><a href="Makepayment.php">Make a Payement</a></li>
                <li><a href="Transactionmade.php?pst=Complete">Payements Made</a></li>
                </ul>
    </div>
</div>


<?php include'footer.php' ?>
    </div>
</body>
</html>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>