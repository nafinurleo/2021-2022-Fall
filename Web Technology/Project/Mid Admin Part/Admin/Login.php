<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body style="background-color:#add8e6;">

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

<?php

include 'Controller/Loginsession.php';

?>
                   <br></br>

                    <div style="height:500px;width:440px;border:1px solid;color: brown;margin: auto;">
					<br><h1 style="text-align: center;color: blue;"><u style="color: darkred;">Login Form</u></h1><br>
					
                      <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
         


                          <label><b>User Name</b></label>
                     <input type="text" name = "un" placeholder="Username"  
                     value="<?php if(isset($_COOKIE['user'])) {echo $_COOKIE['cpass']; } ?>">


                         <?php if ($unErr != "") 
                        {
                        echo "*";
                        echo $unErr;
                    }
                    ?>
                          <br></br>

                     

                     <label><b>Enter Password</b></label>
                     <input type="password" name = "password"  id="pass"  
                      value="<?php if(isset($_COOKIE['cpass'])) {echo $_COOKIE['cpass'];} ?>" >
                     <?php if ($passErr != "") 
                        {
                        echo "*";
                        echo $passErr;
                    }
                    ?>
                    <br>

                    <script>
            function myFunction() 
            {
            var y = document.getElementById("pass");
            if (y.type === "password")
             {
            y.type = "text";
            } 
            else 
            {
            y.type = "password";
            }

            }

           </script>
                    <input type="checkbox" onclick="myFunction()">
                    <label> Show Password</label>  
                    <hr>

                    <input type="checkbox" id="remember" name="remember"> 
                   
                    <label>Remember me</label>
                    <br></br>

                      <input type="submit" value="Submit">
                 <a href="Resetpassword.php">Forgot password?</a>
                 <br>
                 <p>Not a member yet? <a href="Signup.php">Signup</a></p>

                </form>
				<div style="height:60px;width:438px;border:1px solid;color: black;margin: auto;">
				<p> <b>Date: <?php echo date("Y/m/d") ; ?></b></p>
				</div>
				</div>
   
</body>
</html>