<html>
<head>
<title>Tính năm âm lịch</title>
<meta charset="utf8">
</head>
<body>
<?php 
// Tạo ra 3 mảng là can, chi và hình ảnh tương ứng với năm
$mang_can = array("Quý" , "Giáp", "Ất", "Bính",
		"Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm");

$mang_chi = array("Hợi" , "Tý", "Sửu", "Dần", "Mão", "Thìn", 
		"Tỵ" , "Ngọ", "Mùi", "Thân", "Dậu", "Tuất", "Hợi");

$mang_hinh_anh = array();


?>
<form action="003_tinh_nam_am_lich.php" method="post" >
	<table align="center" width="450" border="0" bgcolor="#AEE4FF">
		<tr align="center" bgcolor="#005CB9">
			<td colspan="3"> Tính năm âm lịch </td>
		</tr>
		<tr>
			<td width="200"> Năm dương lịch </td>
			<td width="50"></td>
			<td width="200"> Năm âm lịch </td>
		</tr>
		<tr>
			<td width="200" align="center">
				<input type="text" name="duong_lich">
			</td>
			<td width="200" align="center">
				<input type="submit" name="submit" value="=>">
			</td>
			<td width="200" align="center">
				<input type="text" name="am_lich">
			</td>
		</tr>
		<tr>
		</tr>
	
	</table>

</form>

</body>

</html>