<?php
	$Public_Key = "6LdNRD4UAAAAAO0dyrpoEEkT99lQxsRwA2EvpUR0";
	$Private_Key = "6LdNRD4UAAAAAPr0DkC5eU81nATzTn_li5yuz2Dv";
	$url = "https://www.google.com/recaptcha/api/siteverify";

	if(array_key_exists('submit',$_POST)){
//		print_r($_POST);
		$response_key = $_POST['g-recaptcha-response'];
		$response = file_get_contents($url.'?secret='.$Private_Key.'&response='.$response_key.'&remoteip='.$_SERVER['REMOTE_ADDR']);
		print_r($response);
	}

?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script src='https://www.google.com/recaptcha/api.js'></script>
	<style>
/*	.grecaptcha-badge {display: none;}*/
	</style>
	<script type="text/javascript">
	
	</script>
</head>

<body>
	<div>
		<form method="post" id="contact">
			<label>Name : </label><input type="text" name="Name" placeholder="Name"><br>
<!--
			<label>Email : </label><input type="text" name="Email"><br>
			<label>Subject : </label><input type="text" name="Subject"><br>
			<label>Message : </label><textarea name="Message"></textarea><br>
-->
			
			<div class="g-recaptcha" data-sitekey="<?php print $Public_Key; ?>"></div>
			
			<input type="submit" name="submit" value="Send !">
		</form>
		
	</div>
</body>

</html>