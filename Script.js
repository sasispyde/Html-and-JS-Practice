	<script type="text/javascript">
		function validator(){
			alert("hello")
			var name=document.getElementById("Name").value;
			var re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
			var r = /^(\([0-9]{3}\) |[0-9]{3}-)[0-9]{3}-[0-9]{4}/;
			var mail=document.getElementById("Mail").value;
			var phone=document.getElementById("Phno").value;
			var regex = /^[a-zA-Z ]{2,30}$/;
			if(regex.test(name)){
				alert(Name);
				if(re.test(mail)){
					if(r.test(phone)){
						// return true;
					}
					else{
						alert("Please Enter Valid Phone Number");
					}
					// return true;
				}
				else{
					alert("Enter Valid Email");
				}
				// return true;
			}
			else{
				alert("Please Enter valid name");
			}
		}
	</script>