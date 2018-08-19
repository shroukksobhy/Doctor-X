<table border="2" style="border-radius: 15px+">
	<tr class="row">
	<th class="col-xs-3" ><b style="padding-left: 100px;"> Name </b></th>
	<th class="col-xs-3"><b style="padding-left: 100px;"> Email</b></th>
	<th class="col-xs-3"> <b style="padding-left: 100px;"> Mobile phone </b></th>
	<th class="col-xs-3"><b style="padding-left: 100px;"> Image</b></th>
	</tr>

	
<?php
include("connect.php");
$stmt = $con ->prepare("SELECT * FROM users where type='0'");
$stmt -> execute();
$rows = $stmt -> fetchAll();
foreach ($rows as $row) {
	echo'<tr class="row">';
	echo '<td class="col-xs-3">'.$row['name'].'</td>';
	echo '<td class="col-xs-3">'.$row['email'].'</td>';
	echo '<td class="col-xs-3">'.$row['phone'].'</td>';
	/*echo '<td>'.<img src="$row['image']"/>.'</td>';*/
	   		   echo '<td class="col-xs-3"><img src="'.'uploads/doctors/'.$row['image'].'" alt="HTML5 Icon" style="width:128px;height:128px; width:100%;"> </td>';

	echo '</tr>';
}

?>

</table>