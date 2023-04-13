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
                <form action="addData_db.php" method="post">
                    <div class="mb-1">
                        <h4 class="formheader">FORM ADD DATA</h4>
                        <label for="title" class="col-sm-5 col-form-label"> คำนำหน้า : </label>
                        <div class="col-sm-10">
                            <input type="radio" name="title" value="นาย" checked> นาย <br>
                            <input type="radio" name="title" value="นาง" checked> นาง <br>
                            <input type="radio" name="title" value="นางสาว" checked> นางสาว <br>
                        </div>
                    </div>
                    <div class="txt_field">
                        <input type="text" name="name" class="form-control" required minlength="3">
                        <label for="name" class="col-sm-5 col-form-label"> ชื่อ : </label>
                    </div>
                    <div class="txt_field">
                        <input type="text" name="lastname" class="form-control" required minlength="3">
                        <label for="lastname" class="col-sm-5 col-form-label"> นามสกุล : </label>
                    </div>
                    <div class="mb-1">
                        <label for="color" class="col-sm-5 col-form-label"> สี : </label>
                        <div class="col-sm-10">
                            <input type="radio" name="color" value="แดง" checked> แดง <br>
                            <input type="radio" name="color" value="ฟ้า"> ฟ้า <br>
                            <input type="radio" name="color" value="เขียว"> เขียว <br>
                            <input type="radio" name="color" value="ชมพู"> ชมพู <br>
                        </div>
                    </div>
                    <div class="mb-1">
                        <label for="sport" class="col-sm-5 col-form-label"> กีฬา : </label>
                        <div class="col-sm-10">
                            <input type="radio" name="sport" value="ฟุตบอล" checked> ฟุตบอล <br>
                            <input type="radio" name="sport" value="วอลเลย์บอล"> วอลเลย์บอล <br>
                            <input type="radio" name="sport" value="บาสเก็ตบอล"> บาสเก็ตบอล <br>
                        </div>
                    </div>
                    <div class="mb-1">
                        <div class="col-sm-5">
                            <button type="submit" class="formbtn">เพิ่มข้อมูล</button>
                        </div>
                    </div>
                </form>
            <!-- </div> -->
        </div>
    </div>


</body>

</html>