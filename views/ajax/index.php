<head>
<style>
	.username-ok{color:#2FC332;}
	.username-taken{color:#D60202;}

</style>

<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
	function checkAvailability()
	{
		jQuery.ajax(
		{
			url:"check_availability.php",
			data:'username='+$("#username").val(),
			type:"POST",
			success:function(data)
			{
				$("#msg").html(data);
			}
		});
	}
	
	function getResult()
	{
		jQuery.ajax(
		{
		url:"backend-search.php",
			data:'term='+$("#term").val(),
			type:"POST",
			success:function(data2)
			{
				$("#result").html(data2);
			}
		});
	}
</script>
</head>

<body>
<label> Check Username:</label>
<input name="username" type="text" id="username" onBlur="checkAvailability()">
<div id="msg"></div>

<br>

<input name="term" type="text" id="term" onkeyup="getResult()" placeholder="search here">
<div id="result"></div>
</body>