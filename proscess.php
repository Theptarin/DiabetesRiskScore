<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Diabetes Risk Score: Theme Download</title>
	<link rel="stylesheet" href="themes/diabetes_risk_score.min.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>

</style>
</head>
<body>
	<div data-role="page" data-theme="a">
		<div data-role="header" data-position="inline"> 
			<!--<H3><a href="http://10.1.99.6/diabetes_risk_score/"><img src="/image/dog01.gif")></a></h3> -->
			<h3>การแปลผลคะแนนความเสี่ยงของโรคเบาหวานชนิดที่ 2 และข้อเสนอแนะ </h3>
		</div>
		<div data-role="content" data-theme="a">
 <?php 
        $data_Receive = $_GET["send_data"]; 
		echo "<font color=#0033FF><font size=4><center><B>ผลคะแนนรวม</B> = " .$data_Receive . "</center></font></font>";  
		if($data_Receive <=2 ){
		echo '
		<center>
		<table style="width:60%">
		<tbody>
			<tr>
				<th colspan = "2" style="background:#ffffff"><font size=4><center><font color=green><B>ผลคะแนนรวม</B></font></center></th>
			</tr>
			<tr>
				<td> <p align = "right">ความเสี่ยงเบาหวานใน 12 ปี </p></td>
				<td>น้อยกว่าร้อยละ 5</td>
			</tr>
			<tr>
				<td><p align = "right">ระดับความเสี่ยง</p></td>
				<td>น้อย</td>
			</tr>
			<tr>
				<td><p align = "right">โอกาสเกิดเบาหวาน</p></td>
				<td>1/20</td>
			</tr>
			<tr>
				<td><p align = "right" valign ="top">ข้อเสนอแนะ</p></td>
				<td>- ออกกำลังกายสม่ำเสมอ<br>- ควบคุมน้ำหนักตัวให้อยู่ในเกณฑ์ที่เหมาะสม<br>- ตรวจความดันโลหิต<br>- ควรประเมินความเสี่ยงซ้ำทุก 3 ปี</td>
			</tr>
		</tbody>
		</table>
		</center>';
  			}
		else if($data_Receive >=3 && $data_Receive <=5) {
			echo  '
		<center>
		<table style="width:60%">
		<tbody>
			<tr>
				<td>ความเสี่ยงเบาหวานใน 12 ปี </td>
				<td>ร้อยละ 5-10</td>
			</tr>
			<tr>
				<td>ระดับความเสี่ยง</td>
				<td>ปานกลาง</td>
			</tr>
			<tr>
				<td>โอกาสเกิดเบาหวาน</td>
				<td>1/12</td>
			</tr>
			<tr>
				<td>ข้อเสนอแนะ</td>
				<td>- ออกกำลังกายสม่ำเสมอ<br>- ควบคุมน้ำหนักตัวให้อยู่ในเกณฑ์ที่เหมาะสม<br>- ตรวจความดันโลหิต<br>- ควรประเมินความเสี่ยงซ้ำทุก 1-3 ปี</td>
			</tr>
		</tbody>
		</table>
		</center>';
			}
		else if($data_Receive >=6 && $data_Receive <=8){
			echo  '
		<center>
		<table style="width:60%">
		<tbody>
			<tr>
				<td>ความเสี่ยงเบาหวานใน 12 ปี </td>
				<td>ร้อยละ 11-20</td>
			</tr>
			<tr>
				<td>ระดับความเสี่ยง</td>
				<td>สูง</td>
			</tr>
			<tr>
				<td>โอกาสเกิดเบาหวาน</td>
				<td>1/7</td>
			</tr>
			<tr>
				<td>ข้อเสนอแนะ</td>
				<td>- ออกกำลังกายสม่ำเสมอ<br>- ควบคุมน้ำหนักตัวให้อยู่ในเกณฑ์ที่เหมาะสม<br>- ตรวจความดันโลหิต<br>- <b>ตรวจระดับน้ำตาลในเลือด</b><br>- ควรประเมินความเสี่ยงซ้ำทุก 1-3 ปี</td>
			</tr>
		</tbody>
		</table>
		</center>';
			}
		else if($data_Receive >=9 && $data_Receive <=10){
			echo  '
		<center>
		<table style="width:60%">
		<tbody>
			<tr>
				<td>ความเสี่ยงเบาหวานใน 12 ปี </td>
				<td>ร้อยละ 21-30</td>
			</tr>
			<tr>
				<td>ระดับความเสี่ยง</td>
				<td>สูงมาก</td>
			</tr>
			<tr>
				<td>โอกาสเกิดเบาหวาน</td>
				<td>1/4</td>
			</tr>
			<tr>
				<td>ข้อเสนอแนะ</td>
				<td>- ควบคุมอาหารและออกกำลังกายสม่ำเสมอ<br>- ควบคุมน้ำหนักตัวให้อยู่ในเกณฑ์ที่เหมาะสม<br>- ตรวจความดันโลหิต<br>- <b><font size=4>ตรวจระดับน้ำตาลในเลือด</font></b><br>- ควรประเมินความเสี่ยงซ้ำทุก 1-3 ปี</td>
			</tr>
		</tbody>
		</table>
		</center>';
			}
		else if($data_Receive >10 ){
			echo  '
		<center>
		<table style="width:60%">
		<tbody>
			<tr>
				<td>ความเสี่ยงเบาหวานใน 12 ปี </td>
				<td>มากกว่าร้อยละ 30</td>
			</tr>
			<tr>
				<td>ระดับความเสี่ยง</td>
				<td>สูงมาก</td>
			</tr>
			<tr>
				<td>โอกาสเกิดเบาหวาน</td>
				<td>1/3</td>
			</tr>
			<tr>
				<td>ข้อเสนอแนะ</td>
				<td>- ควบคุมอาหารและออกกำลังกายสม่ำเสมอ<br>- ควบคุมน้ำหนักตัวให้อยู่ในเกณฑ์ที่เหมาะสม<br>- ตรวจความดันโลหิต<br>- <b><font size=4>ตรวจระดับน้ำตาลในเลือด</font></b><br>- ควรประเมินความเสี่ยงซ้ำทุก 1-3 ปี</td>
			</tr>
		</tbody>
		</table>
		</center>';
			 }
		?>                                                
       
		</div>
		 
		<div data-role="footer" data-position="inline">
			<h2><font size=2>** ดัดแปลงจากรายงานการศึกษาพัฒนาดัชนีความเสี่ยงต่อเบาหวานโดย นพ.วิชัย เอกพลากร (15 ตุลาคม 2548) </font></h2>
		</div>
		<div data-role="footer" data-position="inline">
			<center>
			<input name="btnButton" type="button" value="Print" onClick="JavaScript:window.print();" >
			<input name="btnButton" type="button" value= '<a href ="index.php">Home</a>';>
			</center>
		</div>
				
	</div>
</body>
</html>
