<html>
<head>
<title>Tính tổng dãy số</title>
<meta charset="utf8">
</head>
<body>
<?php 
	if (isset($_POST["day_so"])) {
		$day_so = $_POST["day_so"];
		$mang = explode(";" , $day_so);
		
		$n = count($mang);
		$tong = 0;
		for ($i = 0; $i < $n; $i++) {
			$tong = $tong + $mang[$i];
		}
	}
?>
<form action="001_tinh_tong_day_so.php" method="post" >
<table width="450" border="0" align="center" cellpadding="2" cellspacing="2">
	<tr algin="center" bgcolor="#3399999">
		<td colspan="2" bgcolor="#3399999">Nhập và tính trên dãy số</td>
	</tr>
	<tr>
		<td width="125">Nhập dãy số</td>
		<td width="325">
			<input name="day_so" type="text" id="day_so" size="30"
			value="<?php echo $_POST["day_so"] ?>">
			(*)
		</td>
	</tr>
	<tr>
		<td width="125"></td>
		<td width="325">
			<input type="submit" name="submit" id="submit" value="Submit">
		</td>
	</tr>
	<tr>
		<td width="125">Tổng  dãy số: </td>
		<td width="325">
			<input type="text" value="<?php echo $tong; ?>" >
	</tr>
	<tr>
		<td colspan="2" align="center"> (*)Các số được nhập cách nhau dấu ";" </td>
	</td>
</table>

</form>

</body>
</html>