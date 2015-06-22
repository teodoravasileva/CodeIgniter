<form method ="post" action ="updated_car">
	Марка автомобил:<input type="text" name ="car_brand" value = "<?php echo set_value ('car_brand');?>" </br>
	Година на производство:<input type ="text" name ="year" value ="<?php echo set_value ('year');?>" </br>
	Цена:<input type ="text" name ="price" value ="<?php echo set_value ('price');?>" </br>
	Максимална скорост:<input type ="text" name ="<?php echo set_value ('max_speed');?>" </br>
	<input type ="Submit" value ="UPDATE RECORD" name="send"></br>
<form/>

<?php
echo validation_errors();
?>