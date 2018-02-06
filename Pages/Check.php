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
            <div class="row">
                <div class="col-sm-6">
                    <form action="show_check.php" method="Post">
                    <div class="col-sm-6">
                            <label> ห้องที่จอง </label>
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="custom-control custom-radio">
                                    <input id="radioStacked3" name="radio-stacked" type="radio" class="custom-control-input" value="1">
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
                                    <input id="radioStacked3" name="radio-stacked" type="radio" class="custom-control-input" value="2">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">ห้องบรรยายรวม </span>
                                </label>
                            </div>
                        </div>
					    <div class="row">
                            <div class="col-sm-12">
                                <label class="custom-control custom-radio">
                                    <input id="radioStacked3" name="radio-stacked" type="radio" class="custom-control-input" value="3">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">ห้องปฏิบัติการชีววิทยา </span>
                                </label>
                            </div>
                        </div>
					    <div class="row">
                            <div class="col-sm-12">
                                <label class="custom-control custom-radio">
                                    <input id="radioStacked3" name="radio-stacked" type="radio" class="custom-control-input" value="4">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">ห้องปฏิบัติการเคมี </span>
                                </label>
                            </div>
                        </div>
					    <div class="row">
                            <div class="col-sm-12">
                                <label class="custom-control custom-radio">
                                    <input id="radioStacked3" name="radio-stacked" type="radio" class="custom-control-input" value="5">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">ห้องปฏิบัติการฟิสิกส์ </span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="custom-control custom-radio">
                                    <input id="radioStacked3" name="radio-stacked" type="radio" class="custom-control-input" value="6">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">หอประชุม </span>
                                </label>
                            </div>
                        </div>
                    </div>
                        <div class="col-sm-6">
                            <input name="day" type="date">
                        </div>
                    </form>
                </div>
            </div>
            <div class="row col-sm-12 card">
                <iframe src="show_check.php">
            </div>
            <div class="row"><div class="col-sm-6"></div>
            <div class="col-sm-6 btn-group-vertical">
                <a class="btn btn-primary btn-block btn-lg" role="button" href="index-login.php">กลับสู่หน้าหลัก</a>
                <a class="btn btn-block btn-secondary" role="button" href="booking.php">กลับไปจองเพิ่ม</a>
            </div></div>
        </div>
    </body>
</html>