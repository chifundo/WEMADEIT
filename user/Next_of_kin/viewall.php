﻿<?php
//including the database connection file
include_once("../../connections/config.php");

$result = mysql_query( "SELECT * FROM next_of_kin" ) or die("SELECT Error: ".mysql_error());
header ("refresh:30;url=viewall.php");
	
?>
	 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-us" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<title>All Orphans&nbsp;&nbsp; Add Orphan</title>
<link  href="../../css/admin.css" rel="stylesheet" type="text/css" >

</head>

<body>

<div style="position: absolute; width: 1303px; height: 870px; z-index: 1; left: 7px; top: 8px" id="layer8">
    <div id="main" style="height: 679px; width:1295px;">
        <div id="middle" style="height: 890px; width:650px;">
            <div id="center-column" style="height: 856px; width: 1292px;">
                <div class="top-bar" style="width: 1173px">
                    <a class="button" target="I1" style="float: right; height: 15px; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px; width: 68px;" title="Back to relation view" href="view1.php">BACK</a>
                    &nbsp;<h1>All Relations</h1>
                    <div class="breadcrumbs"><a href="#">Homepage</a> /Current 
						Next of kin<br>
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
                <div class="style1" style="float: left; position: relative; width: 1022px; left: 0px; top: 0px;">
                    <table class="listing" cellpadding="0" cellspacing="0" style="width: 1187px">
                     
                        <tr>
                            <th>title</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Relation</th>
                            <th>Mobile</th>
                            <th>fax</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Province</th>
                            <th>Country</th>
                            <th>Postal code</th>
                        

                        </tr>
                       <?php while($res=mysql_fetch_array($result)){ ?>
                        <tr>
                            <td><?php echo $res['title']; ?>
							&nbsp;</td>
                            <td><?php echo $res['kin_fname']; ?>
							&nbsp;</td>
                            <td><?php echo $res['kin_mname']; ?>
							&nbsp;</td>
                            <td><?php echo $res['kin_lname']; ?>
							&nbsp;</td>
                            <td><?php echo $res['gender']; ?>
							&nbsp;</td>
                            <td><?php echo $res['relation']; ?>
							&nbsp;</td>
                            <td><?php echo $res['mobile']; ?>
							&nbsp;</td>
                            <td><?php echo $res['fax']; ?>
							&nbsp;</td>
                            <td><?php echo $res['email']; ?>
							&nbsp;</td>
                            <td ><?php echo $res['kin_addressline1']; ?>
							&nbsp;</td>
							<td><?php echo $res['kin_city']; ?>
							&nbsp;</td>
                            <td ><?php echo $res['kin_province']; ?>
							&nbsp;</td>
                            <td ><?php echo $res['kin_country']; ?>
							&nbsp;</td>
                            <td ><?php echo $res['kin_postalcode']; ?>
							&nbsp;</td>
                            
					       
                        </tr>
                                               
						<?php }; ?>
                    
                    </table>
                </div>
            	<br>
				<br>
                <div class="select-bar" style="width: 1186px">
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
