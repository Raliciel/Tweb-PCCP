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
					<h5>ตรวจสอบเวลาเรียน</h5>
				</div>
			</div>
            <div class="row card">
                <div class="col-sm-12">
					<table class="table table-hover table-dark table-stripped">
						<thead class="thead-dark">
							<th>วิชา</th>
							<th>ผู้จอง</th>
							<th>ชั้น</th>
							<th>ห้องเรียน</th>
							<th>เริ่ม</th>
							<th>สิ้นสุด</th>
						</thead>
							<?php
							$room=$_POST['roomrend'];
							$pass=$_POST['password'];
							$day=$_POST['day'];
							$link=mysqli_connect("127.0.0.1","root");
							mysqli_set_charset($link,'utf8');
							mysqli_query($link,"Use projectend;");
							if($room=='1')
								$roomuse=$pass;
							else
								$roomuse=$room;
							$sql="Select * From roomtable2 Where roomrend = '$room' and day = '$day' order by timein;";
							$result=mysqli_query($link,$sql);
							?>
						<tr>
							<td><?php echo " ".$dbarr['sub']." ";?></td>
							<td><?php echo " ".$dbarr['user']." ";?></td>
							<td><?php echo " ".$dbarr['grade']." ";?></td>
							<td><?php echo " ".$dbarr['class']." ";?></td>
							<td><?php echo " ".$dbarr['timein']." ";?></td>
							<td><?php echo " ".$dbarr['timeout']." ";?></td>
							<?php echo "<p>";?>
						</tr>
					</table>
				</div>
			</div>
			<div class="row col-sm-12 btn-group-vertical">
				<a href="index-login.php" class="btn btn-primary btn-block btn-lg" type="button" role="button">กลับสู่หน้าหลัก</a>
				<a href="check.php" class="btn btn-secondary btn-block" type="button" role="button">กลับไปตรวจสอบกิจกรรม</a>
			</div>
		</div>
    </body>
</html>