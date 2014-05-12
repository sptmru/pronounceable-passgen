<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Password Generator</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Password Generator">
        <meta name="author" content="Soslan Aldatov (http://supporteam.ru)">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/jquery-ui-1.10.4.custom.css" rel="stylesheet">
		<script src="js/jquery-1.10.2.js"></script>
		<script src="js/jquery-ui-1.10.4.custom.js"></script>
        <script src="js/ajax.js"></script>
		<script>
		</script>
		<script type="text/javascript">
			$(function(){
			$("#datepicker").datepicker({ dateFormat: 'dd/mm/yy' });
			$("#datepicker").datepicker().datepicker('setDate',new Date());
			});
		</script>
	</head>
	<body>
		<div id="generate">
			<center>
				<h2>Generate Password</h2>
				<input type="text" id="datepicker" class="datepicker" name="date"><br />
				<input type="text" id="username" name="username" class="username" placeholder="Name"><br />
				<input type="text" id="password" name="password" class="password" placeholder="Password"><br /><br />

				<button type="submit" class="generate_button" onclick="generatePassword()">Generate</button>
			</center>
		</div>
	</body>
</html>

