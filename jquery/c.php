<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#mybtn").click(function(){
				var a = $("h1").html();
				alert(a);
				var b = $("#txt").val();
				alert(b);
			});


			
		});
	</script>
</head>
<body>
<button id="mybtn">OK</button>
<h1>hello</h1>
<input type="text" id="txt">
</body>
</html>