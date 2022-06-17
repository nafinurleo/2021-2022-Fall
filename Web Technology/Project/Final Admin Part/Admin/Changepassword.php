<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Change Password</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body style="background-color:#add8e6;">
		
<?php

include 'Controller/Cpsession.php';

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
    <table border=1 style="width:800px; border-style: none;border-collapse: collapse;">
        
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

                        <legend style="color: brown;"><b>Change Password</b></legend>
                          <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                             
                         <label><b>Enter Current Password:</b></label>
                        
              <input type="password" name="currpass" autocomplete="current-password" required="" 
              id="id_password"value="<?php echo $currpass;?>">
                         <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
                         <?php if ($currpassErr != "") 
                            {
                            echo "*";
                            echo $currpassErr;
                        }
                        ?>
                        <script > const togglePassword = document.querySelector('#togglePassword');
      const password = document.querySelector('#id_password');
      
     
      togglePassword.addEventListener('click', function (e) {
        
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        
        this.classList.toggle('fa-eye-slash');
    });
    </script>
                        
                        <br></br>


                         <label><b style="color: green;">Enter New Password:</b></label>
                                  
              <input type="password" name="newpass" autocomplete="current-password" required="" 
              id="n_password"value="<?php echo $newpass;?>">
                         
                         <?php if ($newpassErr != "") 
                            {
                            echo "*";
                            echo $newpassErr;
                        }
                        ?>
                        
                        <br></br>
                        
                            <label><b style="color: red;">Retype New Password:</b></label>
                    <input type="password" name="rnewpass" autocomplete="retype-password" required="" id="r_password"value="<?php echo $rnewpass;?>">
                    <?php if ($rnewpassErr != "") 
                            {
                            echo "*";
                            echo $rnewpassErr;
                        }
                        ?>

                           <hr>
                           <br>
                                 <input type="submit" value="Submit">

                           </fieldset>
                           <?php
            if (isset($message)) 
            {
                echo "<span style='color:brown'><b>" . $message . "</b></span><br>";
            }
            ?>

                               
           </form>
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