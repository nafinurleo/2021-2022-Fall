<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profile picture</title>
</head>
<body style="background-color:#add8e6;">

<?php

include 'Controller/Propicsession.php';

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

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
        <br>
    <div class="intro">
        
        <br>
    <?php  
    
    echo "Logged in as , ".$Name;

    ?>
        
    
    <br>
    <a href="Login.php" target="_self" >Log out</a>
    <img class="intro2" src="<?php if(empty($Image)){echo $oldImage;}else{echo $Image;} ?>" width="120px" height="120px"><br><br>

    </div>
    
   <table border=1 style="width:800px; border-style: none;border-collapse: collapse;">
        
          

           
          <tr>
            
        <td  style="width:250px">
            <legend>Account<hr></legend>
            <ul >
                <li><a href="Dashboard.php">Dashboard</a></li>
                <li><a href="Viewprofile.php">View Profile</a></li>
                <li><a href="Editprofile.php">Edit Profile</a></li>
                <li><a href="Profilepicture.php">Change Profile Picture</a></li>
                <li><a href="Changepassword.php">Change Password</a></li>
                <li><a href="Login.php">Log out</a></li>
            </ul>
        </td>
    <td  style="width:550px; vertical-align:top;">
            
            <br> </br>
            &nbsp; &nbsp;
            
                <h2>Change profile picture</h2>
          <img src="<?php if(!empty($filepath)){echo $filepath;}else{ echo $oldImage;} ?>" alt="" width="300px" height="300px"><br>
          <?php
                    if ($ImgErr) {
                        echo ($ImgErr);
                    }
                    ?>
                    
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <hr>
                
                    
                    
                <input type="submit" name="submit"  value="Submit">
           </td>
        
        </tr>
    </table> 
   </div>
</form>

	<div class="foot">
        <p> <b>Date: <?php echo date("Y/m/d") ; ?></b></p>
    </div>

</body>
</html>