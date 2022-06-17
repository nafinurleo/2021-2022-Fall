<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View Profile</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body style="background-color:#add8e6;">
	<?php
	session_start();
    $isset=false;

    if(isset($_SESSION['un']))
    {
        $current = file_get_contents("Model/Information.json");  
        $current = json_decode($current, true); 
        foreach($current as $key=>$value){
            if($value['Username']==$_SESSION["un"])
            {
            $Name=$value['Name']; 
            $Gender=$value['Gender'];
            $Username=$value['Username']; 
            $DOB=$value['DOB'];
            $Email=$value['Email'];
            $isset=true;
            break;
            }
        }
        if($isset){
             $Confirm_msg="";
        }else{
             $Errmsg="Something did not match";
        }

    }
	?>
	
<navbar class="menu-bar" style="float: right;">
          <span>
         <a href="Homepage.php" style="color:indianred;" > Home </a>
          <span>&nbsp;|&nbsp;</span>
         <span>&nbsp;</span>
         <a href="Login.php" style="color:indianred;" class="option">Login</a>
         <span>&nbsp;|&nbsp;</span>
         <span>&nbsp;</span>
        <a href="Signup.php" style="color:indianred;" class="option">Signup</a>
</navbar>

    <br></br>

    <div style="position: fixed;bottom:580px ;right:15px ;">
        
        <br>
    

    </div>
	<div class="container">
	<img src="Picture/jko.jpg" alt="Cinque Terre" width="1000" height="300">
	<div class="center">
    <table border=1 style="width:850px; border-style: none;border-collapse: collapse;">
        
    <tr>
            
        <td  style="width:250px">
            <legend> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Account<hr></legend>
            <ul >
                <li><a href="Dashboard.php">Dashboard</a></li>
                <li><a href="Viewprofile.php">View Profile</a></li>
                <li><a href="Editprofile.php">Edit Profile</a></li>
                <li><a href="Changepassword.php">Change Password</a></li>
                <li><a href="Login.php">Log out</a></li>
				<li><a href="Aseller.php">Add Seller</a></li>
				<li><a href="Rseller.php">Remove Seller</a></li>
				<li><a href="Vseller.php">Verify Seller</a></li>
				<li><a href="Avendor.php">Add Vendor</a></li>
				<li><a href="Rvendor.php">Remove Vendor</a></li>
				<li><a href="Vvendor.php">Verify Vendor</a></li>
				<li><a href="Vfeedback.php">View Feedback</a></li>
            </ul>
        </td>
        <td>
        <fieldset>

            <legend style="color: brown;"><b>Profile</b></legend>
               <?php

      echo "Name           : ".$Name."<br><br>";
      echo "Email           : ".$Email."<br><br>";
      echo "Username       : ".$Username."<br><br>";
      echo "Gender         : ".$Gender."<br><br>";
      echo "Date of Birth  : ".$DOB."<br><br>";
     ?>
     <br>
     <a href="Editprofile.php">Edit Profile</a>
   </fieldset>
    </td>
 </tr>
</table>
</div>
</div>

	<div class="foot">
        <p> <b>Date: <?php echo date("Y/m/d") ; ?></b></p>
    </div>

</body>
</html>