<html>
<head>
<title>Calendar</title>
<style>
	.shift{
		margin-left:120px;
	}
</style>
</head>
<body>
<h1>Current month/year calendar</h1>
 
<p class="shift"><?php echo $this->calendar->generate(2015,5);?></p>
</body>
</html>