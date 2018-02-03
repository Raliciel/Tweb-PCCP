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

            </div>
        </div>
    </body>
</html>