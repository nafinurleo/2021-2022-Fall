<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Reset Password</title>
	<link rel="stylesheet" href="styles.css">
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
	$email="";
	$emailErr=$Confirm_msg=$Errmsg="";
	 if (($_SERVER["REQUEST_METHOD"] == "POST"))
	 	
	 {
	 	$Email= $_POST['email'];
	 	if (empty($_POST["email"])) 
        {
            $emailErr = "Email is required";
        } 


        else 
        {
            $email = test_Input($_POST["email"]);
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
         {
            $emailErr= "Invalid Email !";
        }
    }

    $isset=false;

    if($emailErr==""){
        $c_content = file_get_contents("Model/Information.json");  
        $c_content= json_decode($c_content, true); 
        foreach($c_content as $key=>$value){
            if($value['Email']==$Email){
            $isset=true;
            break;
            }
        }
        if($isset){
             $Confirm_msg="A verification code sent to your email";
        }
        else{
             $Errmsg="Email address did not match";
        }
    }
    
  }
     function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


?>
        <br></br>
		<div class="container">
		<img src="Picture/jko.jpg" alt="Cinque Terre" width="1000" height="300">
		<div class="center">
		<div style="height:500px;width:440px;border:1px solid;color: brown;margin: auto;">
		<br><h1 style="text-align: center;color: blue;"><u style="color: darkred;">Reset Password</u></h1><br>
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
              	 <label><b>Enter  email</b>&nbsp; </label>
                <input type="text" id="email" name="email" >
                 <?php
                     if($emailErr!="")
                     {
                        echo "*";
                        echo  $emailErr;
                     }
                     else if($Errmsg!=""){
                         echo "*";
                         echo $Errmsg;
                     }
                     ?>

                <hr>
                 <input type="submit" value="Submit"name="submit"class="button1">
                 <br>
                  <?php
                 if($Confirm_msg!=""){
                     echo $Confirm_msg;
                 }
                 ?>
	             
		</form>
		<br>
		<div style="height:60px;width:438px;border:1px solid;color: black;margin: auto;">
				<p> <b>Date: <?php echo date("Y/m/d") ; ?></b></p>
		</div>
		</div>
		</div>
		</div>

</body>
</html>