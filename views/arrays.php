<?php
echo"<ol>";
asort($country);
foreach($country as $k=>$v ){
	echo"<li> $k-$v</li>";	
}
echo"</ol>";
?>