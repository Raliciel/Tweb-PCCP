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
                        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <h5>สถานที่นัดจอง</h5>
                </div>
                <div class="col-sm-6" id="stra">
                    <div class="row">
                        <div class="col-sm-4">
                            <label class="custom-control custom-radio">
                                <input id="radioStacked3" name="roomrend" type="radio" class="custom-control-input" value="1">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">ห้องเรียน </span>
                            </label>
                        </div>
                        <div class="col-sm-6">    
                            <input type="text" name="password" id="inputRoomCode" placeholder="รหัสห้องเรียน 4 ตัว">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="custom-control custom-radio">
                                    <input id="radioStacked3" name="roomrend" type="radio" class="custom-control-input" value="2">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">ห้องบรรยายรวม </span>
                            </label>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-sm-12">
                            <label class="custom-control custom-radio">
                                    <input id="radioStacked3" name="roomrend" type="radio" class="custom-control-input" value="3">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">ห้องปฏิบัติการชีววิทยา </span>
                            </label>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-sm-12">
                            <label class="custom-control custom-radio">
                                    <input id="radioStacked3" name="roomrend" type="radio" class="custom-control-input" value="4">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">ห้องปฏิบัติการเคมี </span>
                            </label>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-sm-12">
                            <label class="custom-control custom-radio">
                                    <input id="radioStacked3" name="roomrend" type="radio" class="custom-control-input" value="5">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">ห้องปฏิบัติการฟิสิกส์ </span>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="custom-control custom-radio">
                                <input id="radioStacked3" name="roomrend" type="radio" class="custom-control-input" value="6">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">หอประชุม </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                        <input name="day" type="date">
                        <input type="submit" onclick="w3.removeclass('#open','sleep')">ยืนยัน</a>
                    </form>

            </div>
        </div>
		<div class="col-sm-4">
	</div>
    </body>
</html>