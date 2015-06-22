<form method ="post" action ="add_car">
	Марка автомобил:<input type="text" name ="car_brand"></br>
	Година на производство:<input type ="text" name ="year"></br>
	Цена:<input type ="text" name ="price"></br>
	Максимална скорост:<input type ="text" name ="max_speed"></br>
	<input type ="Submit" value ="INSERT" name="send"></br>
<form/>

<?php
echo validation_errors();
?>