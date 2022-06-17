function isValid(login){
	const username = login.username.value;
	const password = login.password.value;

	if(username === "" || password === ""){

		if(username === ""){

			document.getElementById("errorMsgUser").innerHTML = "Please provide username!";
		}
		else{
			document.getElementById("errorMsgUser").innerHTML = "";
		}

		if(password === ""){

			document.getElementById("errorMsgPass").innerHTML = "Please provide Password!";
		}
		else{
			document.getElementById("errorMsgPass").innerHTML = "";
		}

		return false;
	}
else{
	return true;
}