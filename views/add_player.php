<form method ="post" action ="add_player">
	Име:<input type="text" name ="firsName"></br>
	Фамилия:<input type ="text" name ="lastName"></br>
	Години:<input type ="text" name ="age"></br>
	Позиция:<input type ="text" name ="position"></br>
	Държава:<input type ="text" name ="country"></br>
	Номер:<input type ="text" name ="number"></br>
	Заплата:<input type ="text" name ="salary"></br>
	Точки:<input type ="text" name ="points"></br>
	<input type ="Submit" value ="Send" name="send"></br>
<form/>

<?php
echo validation_errors();
?>