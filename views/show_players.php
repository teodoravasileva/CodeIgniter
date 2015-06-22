<table>
	<?php

		echo"
		<th>FirstName</th>
		<th>LastName</th>";
	
	foreach($all_players as $players){
		echo"
		
		<tr>
		<td>$players[firstName]</td>
		<td>$players[lastName]</td>
		</tr>
		";
	}
	?>
</table>