<!DOCTYPE html>
<html lang="eng">

<head>
    <meta cahrset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Forum</title>
    <link rel="stylesheet" href="styleadmin.css">
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-css-only@4.4.1/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="admineditor">
        <p><a href="admin.php"> Admin Editor </a></p>
    </div>

    <div class="formbody">
        <div class="row">
            <!-- <div class="col-md-4"> -->
            <form action="addMedal_db.php" method="post">
                <div class="mb-1">
                    <h4 class="formheader">Add Medal</h4>
                    <label for="team" class="col-sm-5 col-form-label"> ทีม : </label>
                    <div class="col-sm-10">
                        <input type="radio" name="team" value="แดง" checked> แดง <br>
                        <input type="radio" name="team" value="ฟ้า" checked> ฟ้า <br>
                        <input type="radio" name="team" value="เขียว" checked> เขียว <br>
                        <input type="radio" name="team" value="ชมพู" checked> ชมพู <br>
                    </div>
                </div>
                <div class="txt_field">
                    <input type="number" name="gold" required>
                    <label for="gold" class="col-sm-5 col-form-label"> เหรียญทอง : </label>
                    <div class="col-sm-10">
                    </div>
                </div>
                <div class="txt_field">
                    <input type="number" name="silver" required>
                    <label for="silver" class="col-sm-5 col-form-label"> เหรียญเงิน : </label>
                    <div class="col-sm-10">
                    </div>
                </div>
                <div class="txt_field">
                    <input type="number" name="bronze" required>
                    <label for="bronze" class="col-sm-5 col-form-label"> เหรียญทองแดง : </label>
                    <div class="col-sm-10">
                    </div>
                </div>
                <div class="mb-1">
                    <div class="col-sm-5">
                        <button type="submit" name="submit" class="formbtn">เพิ่มข้อมูล</button>
                    </div>
                </div>
            </form>
            <!-- </div> -->
        </div>
    </div>


</body>

</html>