<form method="get" action="form_action">
	<select name="phone">
		<option value='nokia'>nokia<option/>
		<option value='samsung'>samsung<option/>
		<option value='htc'>htc<option/>
		<option value='abv'>abv<option/>	
	<select/>


	model:<input type="text" name="model"><br>
	Submit:<input type="submit" value="Submit">
</form>

<?php
echo"<h1>$phone</h1>";
echo"<h1>$model</h1>";
?>