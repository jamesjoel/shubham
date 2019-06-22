<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.small_img{
			border:1px solid #000;
			padding: 5px;
			border-radius: 5px;
			height: 100px;
			width: 100px;
		}
		#body{
			background-repeat: no-repeat;
			background-size: 100% 100%;
			height: 700px;
		}
	</style>
	<script type="text/javascript">

		function show(a)
		{
			// alert("'"+a+"'")
			document.getElementById("body").style.backgroundImage="url('"+a+"')";
		}
	</script>
</head>
<body>
<body id="body">
	<img src="1.png" onclick="show('1.png')" class="small_img">
	<img src="2.jpg" onclick="show('2.jpg')" class="small_img">
	<img src="3.jpg" onclick="show('3.jpg')" class="small_img">
	<img src="4.jpeg" onclick="show('4.jpeg')" class="small_img">
</body>
</body>
</html>

<!-- 
	1. onclick
	2. ondblclick
	3. onmouseover
	4. onmousemove
	5. onmouseout
	6. onkeydown
	7. onkeypress
	8. onkeyup
	9. onfouse
	10. onblur
	11. onchange
	12. onsubmit
	13. onload
	14. onunload
	15. onwheel
	
 -->