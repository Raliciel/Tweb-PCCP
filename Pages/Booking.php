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
	<form name="form1" action="add_Booking.php" method="Post">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12" id="BookHead">
                    <h5>จองเวลาเรียน</h5>
                </div>
            </div>
        </div>
        <div class="card">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <p>รหัสวิชา</p>
                </div>
                <div class="col-sm-8">
                <input id="inputClassCode" placeholder="ก00000" name="subject">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h5>กลุ่มนักเรียนเป้าหมาย</h5>
                </div>
            <div class="col-sm-12">
                <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#group">จองเป็นห้อง</button>
            </div>
            <div class="collapse show row" id="group">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="inputClass">ระดับชั้น</label>
                            <select id="inputClass" class="form-control" name="class">
                                <option selected>เลือก...</option>
                                <option value="1">ม.1</option>
                                <option value="2">ม.2</option>
                                <option value="3">ม.3</option>
                                <option value="4">ม.4</option>
                                <option value="5">ม.5</option>
                                <option value="6">ม.6</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="inputClass">ห้องเรียน</label>
                            <select id="inputClass" class="form-control" name="room">
                                <option selected>เลือก...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#individual">จองเป็นรายบุคคล</button>
            </div>
            <div class="collapse row" id="individual">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-4">
                            <p>รหัสโครงงาน</p> 
                        </div>
                        <div class="col-sm-8">
                            <input type="String" id="inputStuName" placeholder="PJ00000" name="user2">
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <h5>สถานที่นัดจอง</h5>
                </div>
                <div class="col-sm-6" id="stra">
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
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <h5>วันที่</h5>
                </div>
                <div class="col-sm-8">
                    <input id="time" type="date" name="day">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <h5>เวลาเริ่มจอง</h5>
                </div>
                <div class="col-sm-8">
                    <input id="time" type="time" name="start">
                </div>
            </div>
            <div class="row">
                    <div class="col-sm-4">
                        <h5>เวลาสิ้นสุดจอง</h5> 
                    </div>
                    <div class="col-sm-8">
                        <input id="time" type="time" name="end">
                    </div>
                </div>
            <div class="row">
                <div class="col-sm-12">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Warning">ยืนยันการจอง</button>
                </div>
            </div>
            <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="Warning">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="overflow:hidden; background-color:rgb(255, 238, 0)">
                            <h5 class="modal-title">โปรดตรวจสอบให้ละเอียดก่อนส่ง</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>ท่านไม่สามารถกลับไปแก้ข้อมูลได้</p>
                        </div>
                        <div class="modal-footer">
                            <button type="summit" class="btn btn-outline-prima">ยืนยัน</a>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">กลับไปตรวจสอบใหม่</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
		</form>
    </body>
</html>