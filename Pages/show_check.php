<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ตรวจสอบเวลาเรียน: ระบบจองเวลากิจกรรม</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="../css/Script.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h5>ตรวจสอบการจองเวลากิจกรรม</h5>
                </div>
            </div>
            <div class="row card">
                <div class="col-sm-6">
                    <form action="show_check.php" method="Post">
                        <input name="room">
                        <input name="day" type="date">
                        <input type="submit" onclick="w3.removeclass('#open','sleep')">ยืนยัน</a>
					</form>
				<div class="col-sm-12">
					<tr>
						<th>ที่</th>
						<th>ผู้สอน</th>
						<th>ผู้เรียน</th>
						<th>ห้องเรียน</th>
						<th>เริ่ม</th>
						<th>สิ้นสุด</th>
					</tr>
					<tr>
<?php
$room=$_POST['room'];
$pass=$_POST['pass'];
$day=$_POST['day'];
$link=mysqli_connect("127.0.0.1","root");
mysqli_set_charset($link,'utf8');
mysqli_query($link,"Use projectend;");
if($room=='1')
	$roomuse=$pass;
else
	$roomuse=$room;
$sql="Select * From roomtable2 Where roomrend == $room and day == $day order by timein;";
$result=mysqli_query($link,$sql);
where($dbarr=mysqli_fetch_array($result))
{
	echo "<th>.$dbarr['sub'].</th>""<th>.$dbarr['user'].</th>""<th>.$dbarr['grade'].</th>""<th>.$dbarr['class'].</th>""<th>.$dbarr['timein'].</th>""<th>.$dbarr['timeout'].</th>"
}
?>
</tr>
            </div>
        </div>
    </body>
</html>