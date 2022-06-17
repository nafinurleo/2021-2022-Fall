<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Profile</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body style="background-color:#add8e6;">

<?php

include 'Controller/Epsession.php';

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

            <legend style="color: brown;"><b>Edit Profile</b></legend>
          <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
          	<label ><b> Name</b>&nbsp;</label>
                <input type="text" id="name" name="name"  placeholder="Your name" size="10" value="<?php echo $name;?>">
               
                    <?php 
                    if ($nameErr != "") 
                    {
                        echo "* ";
                        echo $nameErr;
                    }
                    ?>
                    <hr>
                    <br>
                
                 <label><b>Email</b>&nbsp; </label>
                <input type="text" id="email" name="email" value="<?php echo $email;?>" placeholder="Your email">
                    <?php if ($emailErr != "") 
                        {
                        echo "*";
                        echo $emailErr;
                    }
                    ?>
                    <hr>
                    <br>
                     <label><b>Gender</b>&nbsp;</label>
                <input type="radio" id="gender" name="gender"<?php if (isset($gender) && $gender=="Male") echo "checked";?> value="Male">
                <label for="">Male</label> 

                <input type="radio" id="gender" name="gender"<?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"> 
                <label for=" ">Female</label> 
                <input type="radio" id="gender" name="gender"<?php if (isset($gender) && $gender=="other") echo "checked";?> value="other"> 
                <label for="">Other</label> 
                <?php 
               if($genderErr)
               {  
                echo "* ";
                echo $genderErr;

                    }
                ?>
                <hr>
                <br>


                    <label><b>DOB</b>&nbsp;</label>
                    <input type="date" name="dob" value="<?php echo $dob;?>">

                    <?php 
               if($dobErr)
               {  
                echo "* ";
                echo $dobErr;

                    }
                ?>
                <hr>



            <input type="submit" value="Submit">
        </fieldset>
        <?php
            if (isset($message)) 
            {
                echo "<span style='color:brown'><b>" . $message . "</b></span><br>";
            }
            ?>
         
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