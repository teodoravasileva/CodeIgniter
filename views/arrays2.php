<?php

asort($country);
foreach($country as $k=>$v ){
	echo"<table border=2>";
	echo"<tr><td> $k<td/><td>$v<td/><tr/>";	
	echo"<table/>";
}

?>