<table border="2" style="border-radius: 15px+">
	<tr class="row">
	<th class="col-xs-4"><b style="padding-left: 150px;"> Name </b></th>
	<th class="col-xs-4"><b style="padding-left: 150px;"> Address </b> </th> 
	<th class="col-xs-4"><b style="padding-left: 150px;"> Image </b></th>
	</tr>

	
<?php
include("connect.php");
$stmt = $con ->prepare("SELECT * FROM laps");
$stmt -> execute();
$rows = $stmt -> fetchAll();
foreach ($rows as $row) {
	echo'<tr class="row">';
	echo '<td class="col-xs-4">'.$row['name'].'</td>';

	echo '<td class="col-xs-4">'.$row['address'].'</td>';
	/*echo '<td>'.<img src="$row['image']"/>.'</td>';*/
	   		   echo '<td class="col-xs-4"><img src="'.$row['image'].'" alt="HTML5 Icon" style="width:128px;height:128px;width:100%;"> </td>';

	echo '</tr>';
}

?>

</table>