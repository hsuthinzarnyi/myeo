<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- <table border="1">
	<?php
	// foreach ($query as  $row) {
	// 	echo "<tr>";
	// 	echo"<td>". $row->fullname ."</td>" ;
	// 	echo"<td>".  $row->country  ."</td>" ;
	// 	echo"<td>".  $row->color ."</td>"  ;
	// 	echo "</tr>";
	// }

?>
</table> -->
 <p>Hello,<?= $query['fullname']?>.How is <font color='<?= $query['color'] ?>'><?= $query['country'] ?></font></p>

</body>
</html>
