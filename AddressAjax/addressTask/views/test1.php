<!DOCTYPE html>
<html>
<head>
<title>Radio Button Selection</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#radio_submit").click(function (e) {
		var checked_option_radio = $('input:radio[name=user_options]:checked').val();
		var checked_site_radio = $('input:radio[name=user_site]:checked').val();
		
		if(checked_option_radio===undefined || checked_site_radio===undefined)
			{
				alert('Please select both options!');
			}else{
				alert('Your option - "' +checked_option_radio + '", and site - "'+ checked_site_radio +'"');
			}
	});
});

</script>
</head>
<body>
<form id="myform">
<div>Choose option:</div>
<input type="radio" name="user_options" value="css" /> CSS 
<input type="radio" name="user_options" value="jquery" /> jQuery 
<input type="radio" name="user_options" value="html" /> HTML
<input type="radio" name="user_options" value="xml" /> XML

<div>Another option:</div>
<input type="radio" name="user_site" value="Google" /> Google
<input type="radio" name="user_site" value="Yahoo" /> Yahoo
<input type="radio" name="user_site" value="Facebook" /> Facebook
<input type="radio" name="user_site" value="Twitter" /> Twitter

<div><button id="radio_submit" type="button">Show Selected Radio</button></div>
</form>
</body>
</html>