<?php
require_once 'C_Register.php';
$nameid=$_SESSION['name'];
if (user_mysql("pic",$nameid,"status") == 1) {
    header("Location:Register3.php");
    # code...
} 

if (user_mysql("users",$nameid,"test_data") == 1) {
    header("Location:Register3.php");
    # code...
} 
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

            <div class="col-md-12 ml-auto col-xl-12 mr-auto">
						<p class="category">กรอกข้อมูลผู้เข้าแข่งขัน</p>
            <p class="category" style="font-size:15px;">งานวิ่งเพื่อพัฒนาคุณภาพชีวิตและส่งเสริมการท่องเที่ยว อ.ปางศิลาทอง ครั้งที่ 1  ประจำปี 2562 <br>  (วันเสาร์ ที่ 9 พฤศจิการยน 2562)
            <br>   
             1th RUN FOR LIFE @PANGSILATHONG, 2019 (Saturday, November 9th, 2019) </p>
						<!-- Nav tabs -->
						<div class="card"  style="color:#000000" > 
							<div class="card-body">
                                <!-- Tab panes -->

              <form id="myform1" name="myform1" method="post" action="Register2.php" novalidate>
              <div class="form-group row">
                   <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label" >เลือกประเภท<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">รายละเอียด</button></label>
                  <div class="col-sm-8">
                    <div class="form-group" >
                      <select class="form-control" name="news" id="news" >
                        <option value="ปกติ">สมัครประเภทธรรมดา  10  กิโลเมตร  (10 KM) ค่าสมัคร 400 บาท </option>
                        <option value="VIP">สมัครประเภท VIP 10  กิโลเมตร  (10 KM) ค่าสมัคร 1000 บาท </option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label"><p class="h5">ID</p></label>
                  <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="" value="<?php echo $_SESSION['name']; ?>"  readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <input class="form-control" autocomplete="off" type="text" placeholder="ชื่อ" value=""name="first_name" id="first_name"required>
                  </div>
                  <div class="col-sm-6">
                    <input class="form-control" autocomplete="off" type="text" placeholder="นามสกุล" value=""name="last_name" id="last_name"required>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6">
                    <div class="form-group row">
                        <div class="col">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="sex" id="sex" value="ชาย" required>
                            <label class="form-check-label" for="sex1">
                                ชาย
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio"name="sex" id="sex" value="หญิง" required>
                            <label class="form-check-label" for="sex2">
                                หญิง
                            </label>              
                            </div>         
                        </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">วันเกิด</label>
                        <div class="col-sm-10">
                        <input type="date" class="form-control" name="birthdate" id="birthdate" placeholder=""required>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-1 col-form-label" ><p class="h5">ที่อยู่</p></label>
                  <div class="col-sm-11">
                    <input class="form-control" type="text" placeholder="ที่อยู่" value=""name="address" id="address" autocomplete="off" required >
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-3">
                    <input class="form-control" type="text" placeholder="สัญชาติ" value=""name="nationality" id="nationality" autocomplete="off" required>
                  </div>
                  <div class="col-sm-4">
                    <input class="form-control" type="text" placeholder="อีเมล E-mail" value=""name="e_mail"         autocomplete="off" id="e_mail" >
                  </div>
                  <div class="col-sm-4">
                    <input class="form-control" type="text" placeholder="โทรศัพท์" value=""name="phone" id="phone" pattern="^0([8|9|6])([0-9]{8}$)" autocomplete="off" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-4">
                    <input class="form-control" type="text" placeholder="โรคประจำตัว" value=""name="congenital_disease" id="congenital_disease" autocomplete="off" required>
                  </div>
                  <div class="col-sm-3">
                    <input class="form-control" type="text" placeholder="หมู่โลหิต" value=""name="blood" id="blood" autocomplete="off" required>
                  </div>
                  <div class="col-sm-4">
                    <input class="form-control" type="text" placeholder="ชมรม/ทีม" value=""name="team" id="team" autocomplete="off" >
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <input class="form-control" type="text" placeholder="ผู้ติดต่อกรณีฉุกเฉิน" value="" name="emergency_contact" id="emergency_contact" autocomplete="off" required>
                  </div>
                  <div class="col-sm-6">
                    <input class="form-control" type="text" placeholder="โทรศัพท์กรณีฉุกเฉิน" value="" name="emergency_phone" id="emergency_phone" pattern="^0([8|9|6])([0-9]{8}$)" autocomplete="off" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">ไซส์เสื้อ<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">รายละเอียด</button></label>
                      <select class="form-control" name="size" id="size">
                        <option>S(36 นิ้ว)</option>
                        <option>M(38 นิ้ว)</option>
                        <option>L(40 นิ้ว)</option>
                        <option>XL(42 นิ้ว)</option>
                        <option>2XL(44 นิ้ว)</option>
                        <option>3XL(46 นิ้ว)</option>
                        <option>4XL(50 นิ้ว)</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    
                  </div>
                </div>
                <div  style="font-size:15px" class=" text-left">
                  * กรุณากรอกเบอร์โทรปัจจุบัน เพื่อใช้ยืนยันสิทธิ์ในการสมัคร
                </div>
                <div class="form-group row" >
                  <div class="col-sm-6"style="text-align:right ">
                   <div ><br>
                      <label class="form-check-label">
                        <span class="form-check-sign"></span>
                        กดต่อไปถือว่าเป็นการยอมรับเงื่อนไขการสมัคร
                      </label> 
                    </div>
                  </div>
                  <div class="col-sm-6" style="text-align:left">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">อ่านเงื่อนไขการสมัคร</button>
                  </div>

                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                   <button type="submit" class="btn btn-success"  name="btn_submit1" id="btn_submit1" value="1"  >ต่อไป</button>
                  </div>
                </div>


                </form>
							</div>
						</div>

					</div>





      
        

 
            </div>
        </div>

    </div>

    
  <script src="https://unpkg.com/jquery@3.3.1/dist/jquery.min.js"></script>
<script src="https://unpkg.com/bootstrap@4.1.0/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(function(){
     $("#myform1").on("submit",function(){
         var form = $(this)[0];
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');         
     });     
});

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



<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">เงื่อนไขการสมัคร</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <P style="font-size:17px">
      กติกาของงาน<Br><Br>
        กติกาของงานซึ่งผู้สมัครเข้าร่วมการแข่งขันต้องยอมรับและปฏิบัติตาม มีดังนี้ :<Br>

        กติกาของงานสอดคล้องกับกฎหมาย<Br>

        นอกจากกติกาของงานแล้ว ยังประกอบด้วยกติกาการแข่งขัน และกติกาในการสมัคร ผู้จัดไม่รับผิดชอบในความเสียหายที่เกิดจากสิ่งต่อไปนี้:<Br>

        2.1. ความเจ็บป่วยหรืออุบัติเหตุ (ผู้จัดจะจัดเตรียมแพทย์ พยาบาล อาสาสมัคร และเจ้าหน้าที่ เพื่อช่วยเหลือในกรณีฉุกเฉิน)<Br>

        2.2. การสูญหายหรือเสียหายของทรัพย์สินส่วนบุคคล<Br>

        2.3. การล่าช้าของการแข่งขันที่เกิดจากสิ่งที่ผู้จัดควบคุมไม่ได้<Br>

        เพื่อทำให้เกิดความมั่นใจในความปลอดภัยของการจัดงาน ผู้จัดจะจัดให้มีการจัดการและกฎระเบียบที่เหมาะสมในบริเวณจัดการแข่งขัน

        นักวิ่งต้องมาถึงบริเวณงานอย่างน้อย 1 ชั่วโมงก่อนปล่อยตัว ประตูบริเวณจุดปล่อยตัวจะปิดก่อนเวลาปล่อยตัว 15 นาทีสำหรับการแข่งขันแต่ละระยะ

        ขอให้นักวิ่งปฏิบัติตามคำแนะนำของผู้จัดและกรรมการ มิฉะนั้น อาจถูกตัดสิทธิ์ไม่ให้ร่วมการแข่งขัน

        นักวิ่งมีหน้าที่ในการตรวจสอบประกาศต่างๆ จากทางผู้จัดทั้งก่อนและระหว่างการแข่งขัน

        ภาพถ่าย ภาพเคลื่อนไหว เสียง บทความ สถิติการแข่งขัน เป็นลิขสิทธิ์ของผู้จัด และอาจถูกนำเผยแพร่ตามสื่อต่างๆ เช่น หนังสือพิมพ์ อินเตอร์เน็ต โทรทัศน์ นิตยสาร เป็นต้น นักกีฬาสามารถนำภาพถ่าย ภาพเคลื่อนไหว และเสียงของตนเองไปใช้ได้โดยไม่ต้องขออนุญาต ผู้จัดไม่อนุญาตให้นำภาพถ่ายและ ภาพเคลื่อนไหวของงานและการแข่งขันไปใช้ในทางพาณิชย์

        ผู้จัดคำนึงถึงความเป็นส่วนตัวและความปลอดภัยของข้อมูลส่วนบุคคลของผู้สมัคร และจะจัดการข้อมูลโดยคำนึงถึงประเด็นนี้

        <Br><Br>กติกาการแข่งขัน<Br>
        <Br>ผู้จัดไม่อนุญาตให้ผู้เข้าร่วมการแข่งขันเข้าวิ่งในสนามแข่งโดยละเมิดกติกา กฎหมาย และคำสั่งต่างๆ ในกรณีที่ผู้เข้าร่วมการ แข่งขันไม่ปฏิบัติตาม ผู้จัดอาจไม่อนุญาตให้ร่วมงาน หรือเข้าร่วมแข่งขัน หรือตัดสิทธิ์แข่งขัน (Disqualify)

        ต้องมาถึงจุดปล่อยตัวก่อนเวลาปล่อยตัวตามประเภทระยะทางที่สมัคร<Br>
        ต้องเข้าบริเวณปล่อยตัวตามกลุ่มเวลาที่คาดว่าจะใช้ตามที่ระบุไว้ตอนสมัคร และระบุเป็นอักษรไว้บนหมายเลขวิ่ง การไม่เข้าบริเวณปล่อยตัวตามโซนอักษรที่กำหนดไว้ถือว่าผิดกติกาการแข่งขัน<Br>
        ต้องเริ่มวิ่งไปพร้อมกับกลุ่มปล่อยตัว การเริ่มวิ่งจากจุดสตาร์ทหลังปล่อยตัวเกิน 15 นาทีจะถือว่าลงแข่งขันผิดประเภทการแข่งขัน หรือผิดกติกาการแข่งขัน และตัดสิทธิ์แข่งขัน (Disqualify)<Br>
        ต้องติดหมายเลขวิ่งไว้ที่หน้าอกให้เห็นได้อย่างชัดเจน ผู้จัดไม่อนุญาตให้นักวิ่งที่ไม่ติดหมายเลขวิ่งผ่านจุดปล่อยตัว และเข้าสู่เส้นชัย
        ต้องวิ่งตามเส้นทางที่กำหนด (ตามลูกศร ริบบิ้น และป้าย/สัญลักษณ์บอกทาง) ห้ามใช้ทางลัด
        การช่วยเหลือนักวิ่ง สามารถทำได้เฉพาะในบริเวณจุดพักเท่านั้น ไม่อนุญาตให้มีผู้ติดตามคอยช่วยเหลือนักวิ่งบนเส้นทางการแข่งขัน
        ไม่แต่งกายหรือมีอุปกรณ์ใดๆ ที่อาจเป็นอันตรายต่อนักวิ่งอื่น
        ไม่แต่งกายอย่างไม่เหมาะสมอันสร้างความไม่สบายใจแก่นักวิ่งอื่นหรือผู้เข้าชม เช่น ไม่สุภาพ โป๊ แสดงความเห็นทางการเมือง ลบหลู่ศาสนาหรือความเชื่อ โฆษณาสินค้า โฆษณาชวนเชื่อ เป็นต้น
        ไม่ใช้อุปกรณ์หรือเสียงที่จะทำให้ผู้อื่นเข้าใจผิดว่าเป็นสัญญาณปล่อยตัว
        ไม่กระทำการใดๆ ซึ่งทำให้เกิดการล่าช้าในการแข่งขัน หรือกีดขวางการเข้าเส้นชัย
        หยุดหรือหลีกทางให้ยานพาหนะหรือเจ้าหน้าที่ช่วยเหลือฉุกเฉิน
        ปฏิบัติตามคำแนะนำของเจ้าหน้าที่ควบคุมเส้นทาง หรือกรรมการจัดการแข่งขันอย่างเคร่งครัด
        การตัดสินใช้ระบบ Gun Time (เวลาจากนาฬิกากลางของการแข่งขัน) การจัดลำดับของคณะกรรมการถือเป็นที่สิ้นสุด
        นักวิ่งที่ได้รับรางวัลทุกประเภทจะต้องแสดงบัตรประชาชนหรือบัตรที่ออกโดยหน่วยงานราชการที่มีเลขบัตรประชาชนและติดรูปถ่าย หรือหนังสือเดินทางมาแสดง เพื่อขอรับรางวัลตามประกาศภายในเวลาที่กำหนด มิฉะนั้นจะถือว่าไม่สามารถรายงานตัวได้และถูกตัดสิทธิ์การรับรางวัล
        กติกาอื่นๆ ที่ไม่ได้ระบุไว้จะอ้างตามกติกาการแข่งขันของสมาคมกีฬากรีฑาแห่งประเทศไทย (ในพระบรมราชูปถัมภ์)
        คำตัดสินของผู้ชี้ขาดถือว่าสิ้นสุด
        <Br><Br>
        กติกาการสมัคร<Br><Br>
        ผู้จัดอาจปฏิเสธไม่รับสมัคร หรือยกเลิกการรับสมัครสำหรับผู้สมัครซึ่งไม่อ่านและตกลงยอมรับของงานและกติกาการ แข่งขัน โดยไม่คืนเงินค่าสมัคร นอกจากนี้ยังสงวนสิทธิ์ในการพิจารณาการรับสมัครในการแข่งขันครั้งต่อๆ ไปด้วย

        ห้ามสมัครซ้ำโดยผู้สมัครเดียวกัน หรือใช้ชื่อและข้อมูลผู้อื่นสมัครแทนตน
        ห้ามใช้ข้อมูลเท็จในการสมัคร หรือปลอมแปลงเอกสารประกอบการสมัคร
        ไม่อนุญาตให้แก้ไขข้อมูลการสมัครภายหลังยืนยันข้อมูลแล้ว ดังนั้น กรุณาตรวจสอบข้อมูลการสมัครอย่างถี่ถ้วน รวมถึงขอสงวนสิทธิ์ไม่รับเปลี่ยนแปลงการสมัคร และไม่คืนเงินค่าสมัคร<
        คอมพิวเตอร์ แล็ปท็อป แท็ปเล็ต โทรศัพท์มือถือ และระบบปฏิบัติการต่างๆ (Operating Systems) ของอุปกรณ์เหล่านั้นบางประเภท อาจทำให้การสมัครผิดพลาดได้ ผู้จัดไม่สามารถรับผิดชอบการทำงานสำหรับทุกอุปกรณ์ได้และไม่รับผิดชอบต่อการล่าช้าอันเกิดจากการเชื่อมต่ออินเทอร์เน็ตอันอาจเกิดขึ้น
        ผู้จัดไม่รับผิดชอบกรณีที่อีเมลที่แจ้งไว้ไม่ถูกต้อง หรือผู้สมัครไม่ได้รับอีเมลแจ้งข้อมูล ผู้สมัครมีหน้าที่เข้าตรวจสอบอีเมลหรือเว็บไซต์เอง
        เนื่องจากผู้สมัครมีจำนวนมาก ผู้จัดอาจไม่สามารถตอบคำถามเกี่ยวกับสถานะหรือผลการสมัครได้เป็นรายคน
        ผู้ที่มีสิทธิ์เข้าร่วมการแข่งขัน จะต้องชำระเงินค่าสมัครให้เสร็จสิ้นภายในเวลาที่กำหนด มิฉะนั้นจะถือว่าสละสิทธิ์
        ผู้สมัครที่มอบสิทธิ์ให้ผู้อื่นเข้าร่วมแข่งขันแทน จะถูกตัดสิทธิ์การสมัครในปีถัดไป นักวิ่งที่ใช้หมายเลขแข่งขันของผู้อื่น ไม่มีสิทธิ์ได้รับรางวัล
        การมอบอำนาจให้ผู้อื่นลงทะเบียนรับหมายเลขวิ่งและอุปกรณ์แทน จะต้องแสดงสำเนาบัตรประจำตัว ประชาชน /พาสปอร์ตของผู้สมัครที่ออกโดยหน่วยงานราชการซึ่งมีหมายเลขตามที่ลงทะเบียนไว้เท่านั้น
        ผู้จัดขอสงวนสิทธิ์ไม่คืนค่าสมัครในกรณีที่ต้องยกเลิกหรือเลื่อนการแข่งขันจากเหตุผลที่ไม่สามารถควบคุมได้โดยผู้จัด หรือภัยธรรมชาติ
        ผู้สมัครที่จำหน่ายสิทธิ์และหมายเลขแข่งขันให้ผู้อื่น จะถูกตัดสิทธิ์การสมัครในปีถัดไป นักวิ่งที่ซื้อหมายเลขแข่งขันของผู้อื่น ไม่มีสิทธิ์ได้รับรางวัล
        คำรับรอง
        <Br><Br>
        ข้าพเจ้าขอรับรองว่าข้อความข้างต้นเป็นความจริง ซึ่งข้าพเจ้ามีสภาพร่างกายสมบูรณ์พร้อมและสามารถลงแข่งขันในประเภทที่ลงสมัคร และจะปฏิบัติตามกฎกติกาทุกประการโดยไม่เรียกร้องค่าเสียหายใดๆ หากเกิดอันตรายหรือบาดเจ็บทั้งก่อนและระหว่างแข่งขัน อีกทั้งยินดีแสดงหลักฐานพิสูจน์ตนเองต่อผู้จัด และยินยอมให้ผู้จัดถ่ายภาพ ภาพเคลื่อนไหวเพื่อบันทึกการแข่งขัน และถือเป็นลิขสิทธิ์ของผู้จัด ในกรณีที่กิจกรรมนี้ต้องยกเลิกทั้งหมดหรือส่วนใดส่วนหนึ่ง โดยสืบเนื่องจากสาเหตุสุดวิสัยใดๆ ทางธรรมชาติหรือภาวะอื่นใดก็ตาม ข้าพเจ้ารับทราบและยินยอมว่าจะไม่มีการคืนเงินค่าสมัครให้แก่ข้าพเจ้า
         </P>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ไซส์เสื้อ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <P style="font-size:17px">
      <img src="../assets/img/new/st_s.jpg" alt="Smiley face"  width="100%">
      </P>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">เลือกประเภทการสมัคร</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <P style="font-size:17px">
      <img src="../assets/img/new/st01.jpg" alt="Smiley face"  width="100%">
      </P>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


</html>