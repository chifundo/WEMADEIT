﻿<?php
//including the database connection file
include_once("../../connections/config.php");

$result = mysql_query( "SELECT * FROM adopter ORDER BY adopter_fname ASC" ) or die("SELECT Error: ".mysql_error());

header ("refresh:20;url= viewall.php");	
?>
	 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-us" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<title>All adopter&nbsp;&nbsp; Add adopter</title>
<link  href="../../css/admin.css" rel="stylesheet" type="text/css" >

</head>

<body>

<div style="position: absolute; width: 686px; height: 870px; z-index: 1; left: 9px; top: 22px" id="layer8">
    <div id="main" style="height: 679px; width:500px;">
        <div id="middle" style="height: 890px; width:1210px;">
            <div id="center-column" style="height: 856px; width: 1173px;">
                <div class="top-bar" style="width: 1099px">
                    <a class="button" target="I1" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px; width: 67px;" title="Back to orphan details" href="new.php">BACK 
					</a>

                    <h1>All Adopters</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Current 
						Adopters<br>
						<br>
					</div>
					<form action="searchall.php" method="POST" target="I1">
					<div class="select-bar">
                    <label>
                        <input type="text" name="term" >
                        <input type="submit" name="Submit" value="Search" >
                    </label>
                </div>
                </form>

                </div>
                <div class="style1" style="float: left; position: relative; width: 831px; left: 5px; top: -10px;">
                    <table class="listing" cellpadding="0" cellspacing="0" style="width: 1099px; font-size: small;">
                     
                        <tr>
                        	<th>Title</th>
                        	<th>Adopter name(s)</th>
                            <th>Adopter Surname</th>
                        	<th>Spouse name(s)</th>
                            <th>Mobile</th>
                            <th>Email Address</th>
                            <th>Address </th>
                            <th>City</th>
                            <th>Province </th>
                            <th>Country </th>
                            <th>Postal code </th>
                       

                        </tr>
                       <?php while($res=mysql_fetch_array($result)){ ?>
                        <tr>
                            <td><?php echo $res['title']; ?>
							&nbsp;</td>
                        	<td><?php echo $res['adopter_fname']; ?>&nbsp;&nbsp;<?php echo $res['adopter_mname']; ?>
							&nbsp;</td>
                            <td><?php echo $res['adopter_lname']; ?>
							&nbsp;</td>
                        	<td><?php echo $res['spouse_fname']; ?>&nbsp;<?php echo $res['spouse_mname']; ?>&nbsp;<?php echo $res['spouse_fname']; ?>
							&nbsp;</td>
                            <td><?php echo $res['mobile']; ?>
							&nbsp;</td>
                            <td><?php echo $res['email']; ?>
							&nbsp;</td>
                            <td><?php echo $res['adopter_addressline1']; ?>
							&nbsp;</td>
                            <td><?php echo $res['adopter_city']; ?>
							&nbsp;</td>
                            <td><?php echo $res['adopter_province']; ?>
							&nbsp;</td>
                            <td><?php echo $res['adopter_country']; ?>
							&nbsp;</td>
                            <td onclick="confirmDelete()"><?php echo $res['adopter_postalcode']; ?>
							&nbsp;</td>
                        </tr>
                                               
						<?php }; ?>
                    
                    </table>
                </div>
            	<br>
				<br>
                <div class="select-bar" style="width: 1099px">
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
