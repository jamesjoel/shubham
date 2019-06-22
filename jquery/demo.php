<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<style type="text/css">
		#box{
			height: 200px;
			width: 200px;
			position: absolute;
			left: 20px;
			top: 50px;
			display: none;
			box-shadow: 0 0 10px #000;
			border-radius: 10px;
			padding: 10px;
		}
		.rooms{
			border:1px solid #CCC;
			padding: 5px;
			border-radius: 3px;
			text-decoration: none;
			color: #000;
			display: inline-block;
			margin: 5px;
		}
		.rooms:hover{
			background-color: #245111;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#select-room").click(function(){
				$("#box").show();
			});

		});
	</script>
</head>
<body>
<a id="select-room" href="#">Room Booking</a>
<div id="box">
	<center><small>Select Rooms</small></center>
	<?php
	for($i=1; $i<=20; $i++)
	{ ?>
		<a class="rooms" href="#"><?php echo $i; ?></a>
	<?php 
	}
	?>
</div>
</body>
</html>