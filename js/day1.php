<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		var a = 0;
		function demo()
		{
			// alert("Welcome Shubham");
			// setTimeout("demo()", 1000);
			// document.getElementById("mybody").style.backgroundColor="red";
			a++;
			document.getElementById("box").style.marginLeft=a+"px";
			setTimeout("demo()", 10);
		}
		// setTimeout("demo()", 1000);

	</script>
	<style type="text/css">
		#box{
			height: 200px;
			width: 200px;
			background-color: #2451AB;
		}
	</style>
</head>
<body>
<div id="box"></div>
</body>
</html>