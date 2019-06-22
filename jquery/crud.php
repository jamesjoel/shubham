<!DOCTYPE html>
<html>
<head>
<title></title>
<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		var allData = [];

		function delete_row(a)
		{
			$.ajax({
				url : "delete.php",
				type : "post",
				data : { id : a},
				success : function(res){
					
				}
			});
		}

	$(document).ready(function(){
		getdata();
		$("#btn").click(function(){
			var a = $("#full_name").val();
			var b = $("#age").val();

			$.ajax({
			type : "post",
			url : "save_data.php",
			data : { name : a, age : b },
			dataType : "json",
			success : function(res){
			// alert(res);
					$("#full_name").val("");
					// for empty the text box
					$("#age").val("");
					var str = `
					<tr>
					<td>`+res.id+`</td>
					<td>`+res.full_name+`</td>
					<td>`+res.age+`</td>
					<td><a href='#' onclick='delete_row(`+res.id+`)'>Delete</a></td>
					</tr>
					`;
					$("#tab").append(str); // add data to table tag

					}
				});
			});
		});

	function getdata()
	{
		$.ajax({
		url : "getdata.php",
		type : "get",
		dataType : "json",
		success : function(res){
			allData=res;
			res.forEach(function(x){

			var str = `
			<tr>
			<td>`+x.id+`</td>
			<td>`+x.full_name+`</td>
			<td>`+x.age+`</td>
			<td><a href='#' onclick='delete_row(`+x.id+`)'>Delete</a></td>
			</tr>`;
			$("#tab").append(str);	

			});

		}
		});
		
	}
	



	


	</script>
</head>
<body>
<center>

Full name <input type="text" id="full_name">
<br />
<br />
Age <input type="text" id="age" />
<Br />
<Br />
<button id="btn">Save</button>
<br />
<table border="1" width="300" cellspacing="0" cellpadding="5" id="tab">
<tr>
<th>S.No.</th>
<th>Name</th>
<th>Age</th>
<th>Delete</th>
</tr>
</table>
</center>
</body>
</html>