function sendData(formData){
	if(formData.firstname.value === "" || formData.lastname.value === ""||formData.username.value === ""||formData.password.value === "" ){
		if(formData.firstname.value === ""){
			document.getElementById("errorMsgName").innerHTML = "Please fill firstname!";
		}
		else{
			document.getElementById("errorMsgName").innerHTML = "";
		}

		if(formData.lastname.value === ""){
			document.getElementById("errorMsgLast").innerHTML = "Please fill lastname!";
		}
		else{
			document.getElementById("errorMsgLast").innerHTML = "";
		}

		if(formData.userName.value === ""){
			document.getElementById("errorMsgUser").innerHTML = "Please fill username!";
		}
		else{
			document.getElementById("errorMsgUser").innerHTML = "";
		}
		}
		else{
			document.getElementById("errorMsgPass").innerHTML = "";
		}
	return false;
	}
	else{
		return true;
		
	}
}