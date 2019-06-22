<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo()
		{
			var a = document.getElementById("dis").innerHTML;
			var b = document.getElementById("price").innerHTML;
			
			var x = parseInt(a);
			var y = parseInt(b);

			var z = (b*a)/100;
			
			z = b-z;
			document.getElementById("e_price").innerHTML=z;
		}
	</script>
</head>
<body>
Discount : <b><span id="dis">23</span>%</b>
<br />
Price : <b id="price">1000</b>
<br />
Effective Price : <b id="e_price">00</b>
<Br />
<button onclick="demo()">OK</button>
</body>
</html>