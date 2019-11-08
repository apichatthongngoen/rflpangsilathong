<?php
require_once 'C_Register.php';
$nameid=$_SESSION['name'];
$textr01=$_SESSION['textr01'];
$textr02=$_SESSION['textr02'];
if (user_mysql("users",$nameid,"test_data") == 1) {
    header("Location:Register3.php");
    # code...
} 

//echo $nameid ;

$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$sex=$_POST["sex"];
$birthdate=$_POST["birthdate"];
$address=$_POST["address"];
$nationality=$_POST["nationality"];
$e_mail=$_POST["e_mail"];
$phone=$_POST["phone"];
$congenital_disease=$_POST["congenital_disease"];
$blood=$_POST["blood"];
$team=$_POST["team"];
$emergency_contact=$_POST["emergency_contact"];
$emergency_phone=$_POST["emergency_phone"];
$size=$_POST["size"];
$news=$_POST["news"];
$num=user_mysql("users",$nameid,"id");

if ($news=="VIP") {
    $price=1000;
    # code...
} else {
    $price=400;
}
if ($size=="2XL(44 นิ้ว)") {
    $price+=50;
} else if ($size=="3XL(46 นิ้ว)") {
    $price+=50;
}else if ($size=="4XL(50 นิ้ว)") {
    $price+=50;
}
    
$_SESSION['textr01']="RUN FOR LIFE สมัครเรียบร้อยแล้วแจ้งการชำระที่ www.rflpangsilathong.com";
     
$_SESSION['textr02']="ลำดับ $num  \n คุณ $first_name $last_name \n ID $nameid \n ประเภทการสมัคร $news ระยะทางในการวิ่ง: 10 KM \n ขนาดเสื้อ $size \n ค่าสมัคร $price บาท \n ดำเนินการลงทะเบียนเรียบร้อยแล้ว  ";
 


if ((isset($_POST["btn_submit1"])) && ($_POST["btn_submit1"] == "1")) {
    $data=array(
        "first_name"=>$_POST["first_name"],
        "last_name"=>$_POST["last_name"],
        "sex"=>$_POST["sex"],
        "birthdate"=>$_POST["birthdate"],
        "address"=>$_POST["address"],
        "nationality"=>$_POST["nationality"],
        "e_mail"=>$_POST["e_mail"],
        "phone"=>$_POST["phone"],
        "congenital_disease"=>$_POST["congenital_disease"],
        "blood"=>$_POST["blood"],
        "team"=>$_POST["team"],
        "emergency_contact"=>$_POST["emergency_contact"],
        "emergency_phone"=>$_POST["emergency_phone"],
        "size"=>$_POST["size"],
        "news"=>$_POST["news"],
        "price"=>$price,
        "u_date"=>date("Y-m-d"),
        "u_time"=>date("H:i:s"),
    );
    update("users",$data,"name_id=".$nameid);
    //echo"00";
};

if ((isset($_POST["btn_submit2"])) && ($_POST["btn_submit2"] == "1")) {
 


    $sql="SELECT * FROM users WHERE test_data = '1' and name_id = '$nameid' ORDER BY id DESC ";
    $qr=select($sql); 
    $total=count($qr);
    if ($total <= 0) {
        
        //sen_sms(user_mysql("users",$nameid,"phone"),$textr01);
        sen_notify($textr02);
    }

    $data=array(
        "test_data"=>1,
        "u_date"=>date("Y-m-d"),
        "u_time"=>date("H:i:s"),

    );
    update("users",$data,"name_id=".$nameid);
    header("Location:Register3.php");
};

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

            <p class="category">ยืนยันความถูกต้อง</p>
            <div class="card text-center" style="font-size:15px;color:#000000;">
            <div class="card-header mt-2">
            <h4 class="card-title">กรุณาตรวจสอบและยืนยันความถูกต้องของข้อมูลอีกครั้ง</h4>
            </div>
            <div class="card-body  text-left">
                <h5>ระยะทางในการวิ่ง: 10 KM</h5>
                <h5>ประเภทการสมัคร: <?php echo $news; ?></h5>
                <h5>เลขที่บัตรประชาชน หรือ เลขที่หนังสือเดินทาง: <?php echo $nameid; ?></h5>
                <h5>ชื่อ: <?php echo $first_name." ".$last_name; ?></h5>
                <h5>เพศ        : <?php echo $sex ; ?></h5>
                <h5>วันเกิด        : <?php echo $birthdate ; ?></h5>
                <h5>ที่อยู่        : <?php echo $address ; ?></h5>
                <h5>สัญชาติ        : <?php echo $nationality ; ?></h5>
                <h5>อีเมล        : <?php echo $e_mail ; ?></h5>
                <h5>โทรศัพท์        : <?php echo $phone ; ?></h5>
                <h5>โรคประจำตัว        : <?php echo $congenital_disease ; ?></h5>
                <h5>หมู่โลหิต        : <?php echo $blood ; ?></h5>
                <h5>ชมรม/ทีม        : <?php echo $team ; ?></h5>
                <h5>ผู้ติดต่อกรณีฉุกเฉิน        : <?php echo $emergency_contact ; ?></h5>
                <h5>โทรศัพท์กรณีฉุกเฉิน        : <?php echo $emergency_phone ; ?></h5>
                <h5>ไซส์เสื้อ        : <?php echo $size ; ?></h5>
                <h5>ค่าสมัครรวมทั้งหมด        : <?php echo $price ; ?> บาท</h5>
                
                



            </div>
            <div class="card-footer text-muted mb-2">
                <div class="form-group row">
                  <div class="col-sm-6">
                    <form id="myform1" name="myform1" method="post" action="#" novalidate>
                        <button type="submit" class="btn btn-success"  name="btn_submit2" id="btn_submit2" value="1"  >ยืนยัน</button>
                    </form>
                  </div>
                  <div class="col-sm-6">
                    <a href="Register.php" class="btn btn-primary">แก้ไขข้อมูล</a>
                  </div>
                </div>
                

            </div>
            </div>





            </div>
        </div>
    </div>

    
<script src="https://unpkg.com/jquery@3.3.1/dist/jquery.min.js"></script>
<script src="https://unpkg.com/bootstrap@4.1.0/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">

$('.date-picker').each(function(){
    $(this).datepicker({
        templates:{
            leftArrow: '<i class="now-ui-icons arrows-1_minimal-left"></i>',
            rightArrow: '<i class="now-ui-icons arrows-1_minimal-right"></i>'
        }
    }).on('show', function() {
            $('.datepicker').addClass('open');

            datepicker_color = $(this).data('datepicker-color');
            if( datepicker_color.length != 0){
                $('.datepicker').addClass('datepicker-'+ datepicker_color +'');
            }
        }).on('hide', function() {
            $('.datepicker').removeClass('open');
        });
});
</script>

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