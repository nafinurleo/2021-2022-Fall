<?php
session_start();
      $un=$pass="";
      $Username="";
      $Confirmation="";
      $unErr=$passErr="";
      if (($_SERVER["REQUEST_METHOD"] == "POST"))
          {
         
         
         if(isset($_POST["remember"]))
          { 
            $username_count=$_POST["un"];

             

        setcookie('u_name',$_POST['un'],time()+25);
        setcookie('c_pass',$_POST['password'],time()+25);
        $_SESSION['un']=$_POST["un"];
        $_SESSION['pass']=$_POST["password"];
        $user=$_SESSION['un'];
        $passwrd=$_SESSION['pass'];


              
           if (empty($_POST["un"])) 
    {
    $unErr = "Enter user name";
    }

    else 
    {
    $un = test_input($_POST["un"]);


         if ( (str_word_count($username_count) < 2)) 
         {
                $unErr = "At least two characters and Alphabets only";
            }


          elseif (!preg_match('/^[A-Za-z0-9\s.-._]+$/', $un))
          {
            $unErr= "User Name must contain alpha numeric characters, period, dash or underscore only!";
          }

       }

     if (empty($_POST["password"])) 
    {
    $passErr = "Password is required";
    } 
    else 
    {
    $pass = test_input($_POST["password"]);

      if (strlen($_POST["password"]) < 8) {
        $passErr = "Your Password Must Contain At Least 8 Digits !"."<br>";
    }
    elseif(!preg_match("#[0-9]+#",$_POST["password"])) {
        $passErr = "Your Password Must Contain At Least 1 Number !"."<br>";
    }
    elseif(!preg_match("#[A-Z]+#",$_POST["password"])) {
        $passErr= "Your Password Must Contain At Least 1 Capital Letter !"."<br>";
    }
    elseif(!preg_match("#[a-z]+#",$_POST["password"])) {
        $passErr= "Your Password Must Contain At Least 1 Lowercase Letter !"."<br>";
    }
    elseif(!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_POST["password"])) {
        $passErr= "Your Password Must Contain At Least 1 Special Character !"."<br>";
    }
      }

         $isset=false;
    
        if($unErr=="" && $passErr=="")
        {
            $data_s = file_get_contents("Model/Information.json");  
            $data_s = json_decode($data_s, true); 
                foreach($data_s as $row)
                {
                    if($row["Username"]==$user && $row["Password"]==$passwrd){
                    $isset=true;
                    break;
                    }
                }
    
            if($isset)
            {
                 $ConfirmMessage="";
                 header("location:Dashboard.php");
            }
        

           else
           {
                 

                 echo '<span style="font-size: 20px; color:green; font-weight: bold;">Something did not match.Please try again!</span> ';
                 

            }

        }
    }


    else
    {
        $username_count=$_POST["un"];


        $_SESSION['un']=$_POST["un"];
        $_SESSION['pass']=$_POST["password"];
        $user=$_SESSION['un'];
        $passwrd=$_SESSION['pass'];


              
           if (empty($_POST["un"])) 
    {
    $unErr = "Enter user name";
    }

    else 
    {
    $un = test_input($_POST["un"]);


         if ( (str_word_count($username_count) < 2)) 
         {
                $unErr = "At least two characters and Alphabets only";
            }


          elseif (!preg_match('/^[A-Za-z0-9\s.-._]+$/', $un))
          {
            $unErr= "User Name must contain alpha numeric characters, period, dash or underscore only!";
          }

       }

     if (empty($_POST["password"])) 
    {
    $passErr = "Password is required";
    } 
    else 
    {
    $pass = test_input($_POST["password"]);

      if (strlen($_POST["password"]) < 8) {
        $passErr = "Your Password Must Contain At Least 8 Digits !"."<br>";
    }
    elseif(!preg_match("#[0-9]+#",$_POST["password"])) {
        $passErr = "Your Password Must Contain At Least 1 Number !"."<br>";
    }
    elseif(!preg_match("#[A-Z]+#",$_POST["password"])) {
        $passErr= "Your Password Must Contain At Least 1 Capital Letter !"."<br>";
    }
    elseif(!preg_match("#[a-z]+#",$_POST["password"])) {
        $passErr= "Your Password Must Contain At Least 1 Lowercase Letter !"."<br>";
    }
    elseif(!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_POST["password"])) {
        $passErr= "Your Password Must Contain At Least 1 Special Character !"."<br>";
    }
      }
          $isset=false;
    
        if($unErr=="" && $passErr=="")
        {
            $data_s = file_get_contents("Model/Information.json");  
            $data_s = json_decode($data_s, true); 
                foreach($data_s as $row)
                {
                    if($row["Username"]==$user && $row["Password"]==$passwrd)
                    {
                        
                        $_SESSION['Name'] = $row["Name"];
                        $_SESSION['Email'] = $row["Email"];
                        $_SESSION['DOB'] = $row["DOB"];
                        $_SESSION['Gender'] = $row["gender"];
                        $_SESSION['Image'] = $row["Image"];
                    $isset=true;
                    break;
                    }
                }    
            if($isset)
            {
                 $ConfirmMessage="";
                 header("location:Dashboard.php");
            }
        

           else
           {
                 

                 echo '<span style="font-size: 20px; color:green; font-weight: bold;">Something did not match.Please try again!</span> ';
                 

            }

        }
    }
}

 
    function test_Input($data)
    {
        $information = trim($data);
        $information = stripslashes($data);
        $information = htmlspecialchars($data);
        return $data;
    }

?>