<form method ="post" action ="form_submitted">
	Име:<input type="text" name ="username"></br>
	e-mail:<input type ="text" name ="email"></br>
	парола:<input type ="password" name ="password"></br>
	повторете вашата парола:<input type ="password" name ="password2"></br>
	<input type ="Submit" value ="REGISTER" name="send"></br>
<form/>

<?php
echo validation_errors();
?>