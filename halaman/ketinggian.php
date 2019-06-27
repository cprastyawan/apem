<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<center>
<form action="" method="post">
<input type="date" name="ptanggal">
<input type="submit">
</form>
<div id="auto">
	<table border="3" cellspacing="2" cellpadding="2"> 
      <tr> 
          <th> <font face="Arial">ID</font> </th> 
          <th> <font face="Arial">Tanggal</font> </th> 
          <th> <font face="Arial">Waktu</font> </th> 
          <th> <font face="Arial">Ketinggian</font> </th> 
      </tr>
	<?php
	include "koneksi.php";
	if(isset($_POST["ptanggal"])){
		echo $_POST["ptanggal"];
		$sql="select ID, alt, tanggal, waktu from bmp280Data where tanggal='" . $_POST["ptanggal"] . "' order by ID desc;";
		$result = $conn->query($sql);
		if(!$result) printf("ERROR: %s", $conn->error);
		else {
			if($result->num_rows>0){
				while($row=$result->fetch_assoc()){
					echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["tanggal"] . "</td><td>" . $row["waktu"] . "</td><td>" . $row["alt"] . "</td></tr>";
			}
			echo "</table>";
			} else  echo "<br>0 Result<br>";
		}
	}
$conn->close();
?>
</div>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
$(document).ready( function(){
$('#auto');
refresh();
});

function refresh()
{
	setTimeout( function() {
	  $('#auto').fadeOut('slow').fadeIn('slow');
	  refresh();
	}, 5000);
}
</script>
</center>
</body>
</html>