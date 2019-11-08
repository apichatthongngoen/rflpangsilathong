<?php
require_once 'C_Register.php';
$nameid=$_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    RUN FOR LIFE @pangsilathong
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />


</head>

<div class="login-page sidebar-collapse">
  <!-- Navbar -->

  <!-- End Navbar -->

  <div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image" style="background-image:url(../assets/img/105762.jpg)"></div>
        <div class="content">
            <div class="container">

            <p class="category">สถานะการสมัคร</p>
            <div class="card text-center" style="font-size:15px;color:#000000;">
            <div class="card-header mt-2">
            <h4 class="card-title">ตรวจสอบสถานะการสมัคร</h4>
            </div>
            <div class="card-body  text-left">
                <h5>ระยะทางในการวิ่ง: 10 KM</h5>
                <h5>ประเภทการสมัคร: <?php echo user_mysql("users",$nameid,"news")." ".user_mysql("users",$nameid,"sex")." ช่วงอายุ ".age_type($nameid)." ปี"; ?></h5>
                <h5>เลขที่บัตรประชาชน หรือ เลขที่หนังสือเดินทาง: <?php echo user_mysql("users",$nameid,"name_id"); ?></h5>
               
                <h5>ชื่อ: <?php echo user_mysql("users",$nameid,"first_name")." ".user_mysql("users",$nameid,"last_name"); ?></h5>
                <h5>โทรศัพท์        : <?php echo user_mysql("users",$nameid,"phone") ; ?></h5>
                <h5>ไซส์เสื้อ        : <?php echo user_mysql("users",$nameid,"size") ; ?></h5>
                <h5>สถานะการชำระเงิน        : <?php 
                
                if (user_mysql("pic",$nameid,"status")==1) {
                   echo "แจ้งชำระเงินแล้ว";
                } else if(user_mysql("pic",$nameid,"status")==2) {
                    echo '
                    <div class="alert alert-success" role="alert">
                         ชำระเงินแล้ว หมายเลข BIB ของท่านคือ '. user_mysql("bib",$idname,"num_bib").'
                    </div>';
                    echo'';
                } else {
                    echo "ข้อมูลผิดพลาดโปรติดต่อ 0625565924 ";
                }
                
                
                
                
                
                
                ?></h5>
                <h5>
                ติดต่อสอบถามเพิ่มเติม <br>
                    โทร 0856068261 คุณอนุชา     ติดต่อ การเงิน<br>
                    โทร 0625565924 คุณมินตรา    ติดต่อ การแก้ไขข้อมูล<br>
                    โทร 0938489918 คุณนิสา      ติดต่อ สอบถามข้อมูล<br>
                </h5>
                <h6> 
                    งานเดิน-วิ่ง ชื่นชมธรรมชาติ ส่งเสริมการท่องเที่ยว อำเภอปางศิลาทอง จ.กำแพงเพชร ครั้งที่ 1 <br>
รายได้เพื่อสนับสนุน กองทุนพัฒนาคุณภาพชีวิตอำเภอ (พชอ.) ปางศิลาทอง🙏<br>

เส้นทางวิ่ง ที่ผ่าน สถานที่สำคัญให้ได้ชื่นชมและเก็บภาพ<br>
1. วัดป่าธรรมธารา <br>
2.สกายวอล์ค โครงการบ้านเล็กในป่าใหญ่<br>
3.ไร่ชาบูยิ้มละมัย<br>
4.เส้นทางธรรมชาติ ที่มีทิวเขาและสายหมอก</h6>
            </div>
            <div class="card-footer text-muted mb-2">
                <div class="form-group row">
                  <div class="col-sm-12">
                    <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
                  </div>
                </div>
                

            </div>
            </div>





            </div>
        </div>
    </div>

    
<script src="https://unpkg.com/jquery@3.3.1/dist/jquery.min.js"></script>
<script src="https://unpkg.com/bootstrap@4.1.0/dist/js/bootstrap.min.js"></script>


<!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
</body>
</html>