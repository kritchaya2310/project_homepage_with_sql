<!DOCTYPE html>
<html lang="eng">

<head>
  <meta cahrset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Add Match</title>
  <link rel="stylesheet" href="styleadmin.css">
  <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-css-only@4.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="admineditor">
    <p><a href="admin.php"> Admin Editor </a></p>
  </div>
  <div class="formbody">
    <div class="row"> <br>
      <!-- <div class="col-md-4"> <br> -->
        <form action="addMatch_db.php" method="post">
          <div class="mb-1">
            <h4 class="formheader">FORM ADD DATA</h4>
            <label for="Time" class="col-sm-7 col-form-label"> เวลาเริ่มการแข่งขัน : </label>
            <div class="col-sm-10">
              <input type="time" name="Time" min="09:00" max="18:00" class="form-control">
            </div>

            <div class="mb-1">
              <label for="Date" class="col-sm-5 col-form-label"> วันที่แข่งขัน : </label>
              <div class="col-sm-10">
                <input type="date" name="Date" data-date-format="YYYY-MM-DD" min="2023-04-01" max="2023-04-07" class="form-control" value="2023-04-01">
              </div>
            </div>

            <div class="mb-1">
              <label for="Event" class="col-sm-5 col-form-label"> ประเภทกีฬา : </label>
              <div class="col-sm-10">
                <input type="radio" name="Event" value="ฟุตบอล" checked> ฟุตบอล <br>
                <input type="radio" name="Event" value="วอลเลย์บอล"> Volleyball <br>
                <input type="radio" name="Event" value="บาสเก็ตบอล"> Basketball <br>
              </div>
            </div>

            <div class="mb-1">
              <label for="Round" class="col-sm-5 col-form-label"> รอบ : </label>
              <div class="col-sm-10">
                <input type="radio" name="Round" value="รอบแรก" checked> รอบแรก <br>
                <input type="radio" name="Round" value="รองชนะเลิศ"> รองชนะเลิศ <br>
                <input type="radio" name="Round" value="ชิงชนะเลิศ"> ชิงชนะเลิศ <br>
              </div>
            </div>

            <div class="mb-1">
              <label for="Place" class="col-sm-5 col-form-label"> สถาณที่ : </label>
              <div class="col-sm-10">
                <input type="radio" name="Place" value="สนามกีฬากลาง" checked> สนามกีฬากลาง <br>
                <input type="radio" name="Place" value="โรงยิม1"> โรงยิม1 <br>
                <input type="radio" name="Place" value="โรงยิม2"> โรงยิม2 <br>
              </div>
            </div>

            <div class="mb-1">
              <label for="ColorGroup1" class="col-sm-5 col-form-label"> ทีมที่หนึ่ง : </label>
              <div class="col-sm-10">
                <input type="radio" name="ColorGroup1" value="แดง" checked> แดง <br>
                <input type="radio" name="ColorGroup1" value="ฟ้า"> ฟ้า <br>
                <input type="radio" name="ColorGroup1" value="เขียว"> เขียว <br>
                <input type="radio" name="ColorGroup1" value="ชมพู"> ชมพู <br>
              </div>
            </div>
            <div class="mb-1">
              <label for="ColorGroup2" class="col-sm-5 col-form-label"> ทีมที่สอง : </label>
              <div class="col-sm-10">
                <input type="radio" name="ColorGroup2" value="แดง" checked> แดง <br>
                <input type="radio" name="ColorGroup2" value="ฟ้า"> ฟ้า <br>
                <input type="radio" name="ColorGroup2" value="เขียว"> เขียว <br>
                <input type="radio" name="ColorGroup2" value="ชมพู"> ชมพู <br>
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