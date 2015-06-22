<h2>List All Cars</h2>
<table border="2">
<?php
	foreach($all_cars as $car){
		echo "<tr>
			<td>$car[ID]</td>
			<td>$car[car_brand]</td>
			<td>$car[year]</td>
			<td>$car[price]</td>
			<td>$car[max_speed]</td>
		</tr>";
	}

?>
</table>