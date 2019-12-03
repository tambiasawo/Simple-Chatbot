<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Chat Box</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<script src = "https://code.jquery.com/jquery-1.9.0.js"></script> !-- <!-- link to use juqery in ur code -->

		<script>
		function submitChat(params) {
			if(form1.name.value == '' || form1.msg.value=='')
			{
				alert("All Fields are Mandatory");
				return;
			}
			form1.name.readonly = true;
			form1.name.style.border = 'none';
			

			var uname = form1.name.value;
			var msg = form1.msg.value
			var xmlhttp = new XMLHttpRequest();  // to prevent the page from loading when you click send
			
			xmlhttp.onreadystatechange = function(){ 
				if(xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					document.getElementById("chatlogs").innerHTML = xmlhttp.responseText;
				}
			} 
			xmlhttp.open('GET', 'insert.php?name='+name+'&text'=+text,true);
			xmlhttp.send();
		}
		

		$(document).ready(function(e){
			$.ajaxSetup({cache:false});   // stoops the browser from storing the page as a cache
			setInterval(function(){
				$(#chatlogs).load('logs.php'); // loads/gets data from logs.php and puts in into the div with id chatlogs every 2s
			}, 2000)
		}
		</script>
	</head>
	<body>
		<form name = "form1">
			Enter Your Chat Name: <input type= "text" name="name" style="width:200px; height:70px"/>. </br>
			Your Mesage: </br>
			<textarea name = "msg" style="width:200px; height:70px"> </textarea> </br>

			<a href = "#" onclick = "submitChat()">Send</a></br></br>	
		</form>
		<div id="chatlog">
				<p>Loading Chatlogs. Please wait...</p>
		</div>
	</body>

</html>