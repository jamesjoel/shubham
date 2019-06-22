<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function show()
		{
			var a = document.getElementById("txt").value;
			document.getElementById("ans").innerHTML=a.length;
		}
		function check()
		{
			var a = document.getElementById("contact").value;
			if(a.length>=13)
			{
				//alert("Insert Only 12 Charactor");
				document.getElementById("show_msg").innerHTML="Insert Onyl 12 Char";
				return false;
			}

		}


		function demo()
		{
			alert();
			return false;
		}
	</script>
</head>
<body>
Message : 
<Br />
<textarea rows="5" cols="40" id="txt" onkeyup="show()"></textarea>
<Br />
Total Charactor : <b id='ans'>0</b>
<Br />
Number <input type="text" id="contact" onkeydown="return check()" />
<p id="show_msg"></p>



<a href="http://google.com" onclick="return demo()">Click</a>
</body>
</html>