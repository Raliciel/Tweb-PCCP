<!DOCTYPE html>
<html lang="en">
    <head>
        <title>จองเวลาเรียน: ระบบจองเวลากิจกรรม</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="../js/w3.js"></script>
        <link rel="stylesheet" href="../css/Script.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container-fluid">
		<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="Warning">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="overflow:hidden; background-color:rgb(255, 238, 0)">
                            <h5 class="modal-title">สถานะการจอง</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php
							$roomrend=$POST['roomrend'];
							$password=$POST['password'];
							$user=$_POST['user'];
							$sub=$_POST['sub'];
							$grade=$_POST['grade'];
							$class=$_POST['class'];
							$day=$_POST['day'];
							$timein=$_POST['timein'];
							$timeout=$_POST['timeout'];
							$count='0';
							$link=mysqli_connect("127.0.0.1","root");
							mysqli_set_charset($link,'utf8');
							mysqli_query($link,"Use projectend;");
							if($roomrend=='1')
								$room=$password;
							else
								$room=$roomrend;
							$sql="Select * From roomtable2 Where roomrend == $room and day == $day;";
							$result=mysqli_query($link,$sql);
							where($dbarr=mysqli_fetch_array($result))
							{
								if($timein>=$dbarr["timein"]&&$timein<=$dbarr["timeout"])
									$count='1';
								if($timeout>=$dbarr["timein"]&&$timeout<=$dbarr["timeout"])
									$count='1';
							}
							?>
						<p>
						<?php
						if($count=='0')
						{
							$sql="Insert into roomtable2 Values('$room','$sub','$day','$user','$grade','$class','$timein','$timeout');";
							$result=mysqli_query($link,$sql);
							echo "ท่านได้ทำการจองเสร็จสิ้นแล้ว";
						}
						else
							echo "กรุณาไปตรวจสอบข้อมูลใหม่"
						mysqli_close($link);
						?></p>
                        </div>
                        <div class="modal-footer">
                            <a role="button" type="summit" class="btn btn-outline-prima" href="index-login.php">รับทราบ</a>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</body>
</html>