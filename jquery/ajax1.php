<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#btn").click(function(){
				$.ajax({
					url : , // URL call behind the scene
					type : , // post or get
					data : , // data which can send to server(optinal)
					success:function(data){ // when data recevied

					}
				});
			});
		});
	</script>
</head>
<body>
<button id="btn">OK</button>
</body>
</html>