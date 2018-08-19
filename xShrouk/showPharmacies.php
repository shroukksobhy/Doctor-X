<table border="2" style="border-radius: 15px">
	<tr class="row">
	<th class="col-xs-3" ><b style="padding-left: 200px;"> Name </b></th>
	<th class="col-xs-3"><b style="padding-left: 200px;"> Address</b></th>
	
	</tr>

	
<?php
include("connect.php");
$stmt = $con ->prepare("SELECT * FROM pharmacies");
$stmt -> execute();
$rows = $stmt -> fetchAll();
foreach ($rows as $row) {
	echo'<tr class="row">';
	echo '<td class="col-xs-6">'.$row['name'].'</td>';
	echo '<td class="col-xs-6">'.$row['address'].'</td>';
	


	echo '</tr>';
}

?>

</table>