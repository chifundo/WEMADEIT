﻿<?php
//including the database connection file
include_once("../../connections/config.php");

//fetching data in descending order (lastest entry first)
$result=mysql_query("SELECT * FROM donor ORDER BY donor_id DESC");
header ("refresh:25;url=view1.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<link rel="stylesheet" href="../../css/style1.css" type="text/css" >
<link rel="stylesheet" href="../../js/jsclass.js" >
<script type="text/javascript" src="../../js/jquery1.js" ></script>
 			<!--[if IE 6]><link rel="stylesheet" href="../../css/style.ie6.css" type="text/css" media="screen" /><![endif]-->
    		<!--[if IE 7]><link rel="stylesheet" href="../../css/style.ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="../../js/jquery.js"></script>
    <script type="text/javascript" src="../../js/script.js"></script>
<link  href="../../css/admin.css" rel="stylesheet" type="text/css" >

<script type="text/JavaScript"> 
function confirmDelete(){
   var agree = confirm("Are you sure you want to delete this record?");
   if (agree)
      return false ;
   else
      return false ;
   }
</script> 

</head>

<body>

<div style="position: absolute; width: 1229px; height: 870px; z-index: 1; left: 24px; top: 7px" id="layer8">
    <div id="main" style="height: 679px; width:1220px;">
        <div id="middle" style="height: 890px; width: 1211px;">
            <div id="center-column" style="height: 861px; width: 1211px;">
                <div class="top-bar">
                    <h1>All Donors</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Current 
						Donors<div style="position: absolute; width: 78px; height: 32px; z-index: 1; left: 1052px; top: 25px" id="layer9">
                    <a class="button" target="I1" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px; width: 59px;" title="Back to donor details" href="new.php">BACK</a>
                    	</div>
						<br>
						<br>
					</div>
					<form action="searchall.php" method="POST" target="I1">
                <div class="select-bar" style="width: 1117px">
                    <label>
                        <input type="text" name="term" >
                        <input type="submit" name="Submit" value="Search" >
                    </label>
                </div>
                </form>

                </div>
                <div class="style1" style="float: left; position: relative; width: 1099px; left: 0px; top: 0px;">
                    <table class="listing" cellpadding="0" cellspacing="0" style="width: 1127px; font-size: small;">
                     
                        <tr>
                       	<th>Title</th>
                            <th>First Name(s)</th>
                            <th>Last Name</th>
                            <th>Telephone</th>
                            <th>Mobile</th>
                            <th>Fax</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Postal Code</th>

                        </tr>
                       <?php while($res=mysql_fetch_array($result)){ ?>
                        <tr>
                            <td><?php echo $res['title']; ?>
							&nbsp;</td>
                            <td ><?php echo $res['donor_fname']; ?>&nbsp;<?php echo $res['donor_mname']; ?>
							&nbsp;</td>
                            <td><?php echo $res['donor_lname']; ?>
							&nbsp;</td>
                            <td><?php echo $res['telephone']; ?>
							&nbsp;</td>
                            <td><?php echo $res['mobile']; ?>
							&nbsp;</td>
                            <td><?php echo $res['fax']; ?>
							&nbsp;</td>
                            <td><?php echo $res['email']; ?>
							&nbsp;</td>
                            <td><?php echo $res['donor_addressline1']; ?>
							&nbsp;</td>
                            <td><?php echo $res['donor_city']; ?>
							&nbsp;</td>
                            <td><?php echo $res['donor_country']; ?>
							&nbsp;</td>
                            <td><?php echo $res['donor_postalcode']; ?>
							&nbsp;</td>
							
                        </tr>
                                               
						<?php }; ?>
                    
                    </table>
                </div>
            	<br>
				<br>
            </div>
        </div>
    </div>
</div>

</body>

</html>
