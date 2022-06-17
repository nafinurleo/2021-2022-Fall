<!DOCTYPE html>
<html>
<head>
<title>View Feedback</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
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
<div class="container">
  <img src="Picture/jko.jpg" alt="Cinque Terre" width="1000" height="300">
  <div class="center"></br>
  <p id="main"> Loading data through ajax.</p>
	<button onclick="load()">View Feedback</button>
	<script>
	function load(){
	var x=new XMLHttpRequest();
	x.onreadystatechange=function(){
	if(this.readyState==4 && this.status==200)
	{
	document.getElementById("main").innerHTML=this.responseText;
	}
	};
	x.open('GET','view.txt',true);
	x.send();
	}
	</script>
  </div>
</div>

</body>
</html>