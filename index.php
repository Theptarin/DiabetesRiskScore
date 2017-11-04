<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQuery Mobile: Theme Download</title>
	<link rel="stylesheet" href="themes/diabetes_risk_score.min.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

	<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
	<div data-role="page" data-theme="a">
		<div data-role="header" data-position="inline">
			<h3>ปัจจัยเสี่ยงของโรคเบาหวานชนิดที่ 2 และคะแนนความเสี่ยง</h3>
		</div>
		<div data-role="content" data-theme="a">
		

<form>
		<legend><h4>อายุ</h4></legend>
		<div id = "group_radio_age">
			<input type="radio" name="radio_age" id="radio-age-text-1" value="0" onclick="Check_age()">
			<input type="radio" name="radio_age" id="radio-age-text-2" value="1" onclick="Check_age()">
			<input type="radio" name="radio_age" id="radio-age-text-3" value="2" onclick="Check_age()">
		</div>
		<fieldset data-mini="true">
        	<label for="radio-age-text-1">น้อยกว่าหรือเท่ากับ 44 ปี</label>    
        	<label for="radio-age-text-2">45 - 49 ปี</label>
        	<label for="radio-age-text-3">ตั้งแต่ 50 ปีขึ้นไป</label>
    	</fieldset>
	</form>
    
<form>
        <legend><h4>เพศ</h4></legend>
      	<div id = "group_radio_sex">
      		<input type="radio" name="radio_sex" id="radio-sex-text-1" value="0" onclick="Check_sex()">
      		<input type="radio" name="radio_sex" id="radio-sex-text-2" value="2" onclick="Check_sex()">
      	</div>  
      	<fieldset data-mini="true">
        	<label for="radio-sex-text-1">หญิง</label>
        	<label for="radio-sex-text-2">ชาย</label>
    	</fieldset>
	</form>

<form>
    
        <legend><h4>ดัชนีมวลกาย</h4></legend>
        <div id = "group_radio_body_mass_index">
        	<input type="radio" name="radio_body_mass_index" id="radio-body-mass-index-text-1" value="0" onclick="Check_body_mass_index()">
        	<input type="radio" name="radio_body_mass_index" id="radio-body-mass-index-text-2" value="3" onclick="Check_body_mass_index()">
        	<input type="radio" name="radio_body_mass_index" id="radio-body-mass-index-text-3" value="5" onclick="Check_body_mass_index()">
        </div>
        <fieldset data-mini="true">
        	<label for="radio-body-mass-index-text-1">ต่ำกว่า 23 กก./ม.<sup>2</sup></label>
        	<label for="radio-body-mass-index-text-2">ตั้งแต่ 23 ขึ้นไปแต่ต่ำกว่า 27.5 กก./ม.<sup>2</sup></label>
        	<label for="radio-body-mass-index-text-3">ตั้งแต่ 27.5 กก./ม.<sup>2</sup> ขึ้นไป</label>
    	</fieldset>
	</form>

<form>
        <legend><h4>รอบเอว</h4></legend>
        <div id = "group_radio_waistline">
        	<input type="radio" name="radio_waistline" id="radio-waistline-text-1" value="0" onclick="Check_waistline()">
        	<input type="radio" name="radio_waistline" id="radio-waistline-text-2" value="2" onclick="Check_waistline()">
        </div>
        <fieldset data-mini="true">
        	<label for="radio-waistline-text-1">ผู้ชายต่ำกว่า 90 ซม. ,ผู้หญิงต่ำกว่า 80 ซม.</label>
        	<label for="radio-waistline-text-2">ผู้ชายตั้งแต่ 90 ซม. ขึ้นไป ,ผู้หญิงตั้งแต่ 80 ซม. ขึ้นไป</label>
    	</fieldset>
	</form>

<form>
        <legend><h4>ความดันโลหิตสูง</h4></legend>
        <div id = "group_radio_blood_pressure">
        	<input type="radio" name="radio_blood_pressure" id="radio-blood-pressure-text-1" value="0" onclick="Check_blood_pressure()">
        	<input type="radio" name="radio_blood_pressure" id="radio-blood-pressure-text-2" value="2" onclick="Check_blood_pressure()">
        </div>
        <fieldset data-mini="true">
        	<label for="radio-blood-pressure-text-1">ไม่มี</label>
        	<label for="radio-blood-pressure-text-2">มี</label>
    	</fieldset>
	</form>

<form>
        <legend><h4>ประวัติโรคเบาหวานในญาติสายตรง(พ่อ แม่ พี่ หรือ น้อง)</h4></legend>
        <div id = "group_radio_diabetes_history">
        	<input type="radio" name="radio_diabetes_history" id="radio-diabetes-history-text-1" value="0" onclick="Check_diabetes_history()">
        	<input type="radio" name="radio_diabetes_history" id="radio-diabetes-history-text-2" value="4" onclick="Check_diabetes_history()">
        </div>
        <fieldset data-mini="true">
        	<label for="radio-diabetes-history-text-1">ไม่มี</label>
        	<label for="radio-diabetes-history-text-2">มี</label>
    	</fieldset>
	</form>
	
	
               
		</div>
	<form name="myForm" action="proscess.php"
onsubmit="return Check_sum()" method="get">
<input type="hidden" name="send_data">
<input type="submit" value="บันทึก">
</form>
		
	</div>
	
	
	<script language="javascript">
	var sum = 0;
	var age = 0;
	var sex = 0;
	var body_mass_index = 0;
    var waistline = 0;
    var blood_pressure = 0;
    var diabetes_history = 0;
            function Check_age() {
            var group_radio_age = $('input[name="radio_age"]:checked').val();
            	
            	if (group_radio_age == "0") { 
            		age = 0;   
            	} 
				else if (group_radio_age == "1") {
					age = 1;
				}
            	else {
                	age = 2;
            	}
        	}
        	function Check_sex() {
            var group_radio_sex = $('input[name="radio_sex"]:checked').val();
            	
            	if (group_radio_age == "0") {
            		sex = 0;   
            	} 

            	else {
                	sex = 2;
            	}
        	}
        	function Check_body_mass_index() {
            var group_radio_body_mass_index = $('input[name="radio_body_mass_index"]:checked').val();
            	
            	if (group_radio_body_mass_index == "0") { 
            		body_mass_index = 0;   
            	} 
				else if (group_radio_body_mass_index == "3") {
					body_mass_index = 3;
				}
            	else {
                	body_mass_index = 5;
            	}
        	}
        	function Check_waistline() {
            var group_radio_waistline = $('input[name="radio_waistline"]:checked').val();
            	
            	if (group_radio_waistline == "0") {
            		waistline = 0;   
            	} 

            	else {
                	waistline = 2;
            	}
        	}
        	function Check_blood_pressure() {
            var group_radio_blood_pressure = $('input[name="radio_blood_pressure"]:checked').val();
            	
            	if (group_radio_blood_pressure == "0") {
            		blood_pressure = 0;   
            	} 

            	else {
                	blood_pressure = 2;
            	}
        	}
        	function Check_diabetes_history() {
            var group_radio_diabetes_history = $('input[name="radio_diabetes_history"]:checked').val();
            	
            	if (group_radio_diabetes_history == "0") {
            		diabetes_history = 0;   
            	} 

            	else {
                	diabetes_history = 4;
            	}
        	}
        	function Check_sum() {
            	
            	sum = age+sex+body_mass_index+waistline+blood_pressure+diabetes_history;
            	window.document.myForm.send_data.value=sum;
        	}
	</script>
	
	
	
	
</body>
</html>
