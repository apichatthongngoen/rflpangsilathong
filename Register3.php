<?php
require_once 'C_Register.php';
$nameid=$_SESSION['name'];

if (user_mysql("pic",$nameid,"status") >= 1 ) {
    header("Location:Register4.php");
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
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
  <title>
    RUN FOR LIFE @pangsilathong
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.3.1/dist/css/bootstrap.min.css" >


</head>

<div class="login-page sidebar-collapse">
  <!-- Navbar -->

  <!-- End Navbar -->

  <div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image" style="background-image:url(../assets/img/105762.jpg)"></div>
        <div class="content">
            <div class="container">
            <div class="card text-center" style="font-size:15px;color:#000000;">
            <div class="card-header mt-2">
            <h4 class="card-title">ขั้นตอนการชำระเงินโดยการโอนเงินผ่านบัญชีธนาคาร</h4>
            </div>
            <div class="card-body  text-left">
                <h5>
                1.โอนเงินไปยัง บัญชีด้านล่าง เต็มจำนวน โดยไม่หักค่าธรรมเนียมการโอน <br>
                2.เก็บหลักฐานการโอนเงิน / ถ่ายภาพหลักฐานการจ่ายเงินไว้ <br>
                3.ดำเนินการโอนเงิน ตามขั้นตอนการชำระเงินผ่านธนาคาร ตามรายละเอียดเลขบัญชีด้านล่าง <br>
                4.รอรับ SMS  ยืนยันการสมัครวิ่ง โดยเจ้าหน้าที่จะใช้เวลาตรวจสอบ แล้วแจ้งให้ท่านทราบ ภายใน 1-2 วัน ตามเบอร์โทรศัพท์ที่ท่านได้ลงทะเบียนไว้ข้างต้น <br>
                </h5>
                <blockquote class="blockquote blockquote-primary mb-0">
                    <p>ข้อมูลบัญชีธนาคารสำหรับโอนเงิน</p>
                    <input class="form-control" type="text" placeholder="ชื่อธนาคาร : ธนาคารไทยพาณิชย์" readonly><br>
                    <input class="form-control" type="text" placeholder="ประเภทบัญชี : ออมทรัพย์" readonly><br>
                    <input class="form-control" type="text" placeholder="เลขที่บัญชี : 698-228846-1" readonly><br>
                    <input class="form-control" type="text" placeholder="ชื่อบัญชี : นายอนุชา น้อมนวล" readonly>

                <br>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">ค่าสมัครรวมทั้งหมด : <?php echo user_mysql("users",$nameid,"price") ; ?> บาท</li>
                    </ol>
                </nav>

                <?php
                if($_GET["mintra"]=="true"){
                    echo"ID ของคนที่แนบ $nameid";
                    echo'
                
                    <form id="myform1" name="form1" method="post" action="" class="needs-validation2" enctype="multipart/form-data" novalidate>
                    <div class="form-group row">
                        <legend class="col-form-label col-sm-3 pt-0 text-right">ไฟล์อัพโหลด</legend>
                        <div class="col col-9">   
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" name="customFile" id="customFile"  required  >
                            <label class="custom-file-label" for="customFile">เลือกไฟล์</label>          
                            <input type="text" id="_customFile" class="form-control d-none" value="" required>
                                <div class="invalid-feedback">
                                กรุณาเลือกไฟล์
                                </div>                   
                            </div>                         
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-5 offset-sm-3 text-right pt-3">     
                            <button type="submit" name="bt_upload" id="bt_upload" value="1" class="btn btn-primary btn-block">ส่งข้อมูลการชำระเงิน</button>
                        <br>
                        <a href="https://rflpangsilathong.com" class="btn btn-info">กลับหน้าแรก</a>
                        </div>
                    </div> 
                    </form>
                    ';
                }
                
                ?>
                
                <h4><br>
                ระบบปิดรับสมัครเรียบร้อยแล้ว <br>
ท่านที่ประสงค์จะสมัครเพิ่มเติม สามารถโอนเงิน ตามเลขบัญชีเดิม พร้อมส่งสลิป มาที่ ไลน์ ID Sugarmintra<br>
<a href="https://line.me/ti/p/iRVKa_sZG5"> add LINE คลิก </a><br>
หรือสามารถ ชำระเงินสดได้ที่ ที่ว่าการอำเภอปางศิลาทอง ภายในวันที่ 6 พ.ย 62 นี้เท่านั้น<br>

<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPoAAAD6AQAAAACgl2eQAAABpklEQVR42u2Z0YnEMAxEBSkgJbl1lZQCDDppRgnJstzHcR8ZcPCC47wfYWlG9lr8/rgtYAEL+Bvgls/uc484Rk62w2YtmRaQv5mAWTJWAzDWhQB8qtcMsAC82q4IxBY94hAGat0y5YpRBDrl8tMxsnaaDzHgLP/b+K4PbwZadBnaliOD/aLVbwe6/LFNeEaOeQtTAYB81XDMM9IS5I+cfD1AE2HtZLDG/cpIpYBap6FPYLlb0LGQAkqEq/xtoGSqdqLUzKQAegcLH8Fm1ezMQCEA+VYJ5qz6iS6FUqYDOIq9G8Wr13o4jgDALteZY0i2zL0MUwtwRFQpRx1gxxX3zdIAqksMhHZ1XNPEAGoXbf3u71JAsDk5RWyc5hhSgCPBjG5Il7fPI60CUKo14IatwOCHFsDmCpPBpuvSZyEA/VWbYxU+eq27iCkAfWBijjHqbreUAB5p29mj1di3p+O8H8D1QnCDeNVzeqUScF274RhbPTDaRUmgNij6PLJRnxUB4y30oK08bVEAYMph3Y2CxtZLCmD58xh4KkCYDSlg/Ru1gAX8N/AD19mgeDTyLhIAAAAASUVORK5CYII=" alt="HTML tutorial" style="width:300px;height:300px;border:0;">

                <button type="button" class="btn btn-warning btn-round btn-lg btn-block" data-toggle="modal" data-target="#t001">รายละเอียดงาน</button>
                <br><br>
 
                </h4>
                <h5>
                ติดต่อสอบถามเพิ่มเติม <br>
                    โทร 0856068261 คุณอนุชา     ติดต่อ การเงิน<br>
                    โทร 0625565924 คุณมินตรา    ติดต่อ การแก้ไขข้อมูล<br>
                    โทร 0938489918 คุณนิสา      ติดต่อ สอบถามข้อมูล<br>
                </h5>
                <?php 
                    if(isset($_POST["bt_upload"])){
                    //  อัพโหลดรูปในโฟลเดอร์ชื่อ picup
                    //  ตัวอย่างการใช้งานแบบปกติ อัพรูปภาพขนาดไม่เกิน 2 MB
                        $dataUpPic=uppic_only($_FILES["customFile"],"picup/");
                        if(!is_null($dataUpPic)){ // ถ้ามีชื่อรูป และอัพโหลดสำเร็จ
                            //echo $dataUpPic; // ชื่อไฟล์รูป สามารถเอาไปบันทึกลงฐานข้อมูลได้ ส่วนไฟล์จะอพัไปที่โฟลเดอร์ picup
                            $data = array(
                                "name_id"=>$nameid,
                                "url"=>$dataUpPic,
                                "u_date"=>date("Y-m-d"),
                                "u_time"=>date("H:i:s"),
                                "status"=>"1",
                            );
                            // insert ข้อมูลลงในตาราง province_tmp โดยฃื่อฟิลด์ และค่าตามตัวแปร array ชื่อ $data
                            insert("pic",$data); // province_tmp คือชื่อตาราง
                            echo '
                            <div class="alert alert-danger" role="alert">
                            แจ้งชำระเงินเรียบร้อยแล้ว 
                            </div>
                            ';
                            echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=https://rflpangsilathong.com/Register4.php">';
                            
                        }
                        
                    //  ตัวอย่างการใช้งานแบบปกติ อัพรูปภาพขนาดไม่เกิน 1 MB กว้างไม่เกิน 700 
                    //    $dataUpPic=uppic_only($_FILES["pic_upload"],"picup/",1000000,700);
                        
                    //  ตัวอย่างการใช้งานแบบปกติ อัพรูปภาพขนาดไม่เกิน 1 MB กว้างไม่เกิน 700 สูงไม่เกิน 500
                    //    $dataUpPic=uppic_only($_FILES["pic_upload"],"picup/",1000000,700,500);
                        
                    //  ตัวอย่างการใช้งานแบบปกติ อัพรูปภาพขนาดไม่เกิน 1 MB  สูงไม่เกิน 500
                    //    $dataUpPic=uppic_only($_FILES["pic_upload"],"picup/",1000000,0,500);    
                        
                    //   echo $dataUpPic; // แสดงชื่อไฟล์รูป 
                        
                    //  print_r($dataUpPic);

                    }
                ?>
                



               
            </div>
            <div class="card-footer text-muted mb-2">
                <div class="form-group row">
                  <div class="col-sm-6">
                  </div>
                  <div class="col-sm-6">
                   
                  </div>
                  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                 </blockquote>
                </div>
            </div>
            </div>


            </div>
        </div>
    </div>

    
<script src="https://unpkg.com/jquery@3.3.1/dist/jquery.min.js"></script>
<script src="https://unpkg.com/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(function(){
	
	$("#customFile").on("change",function(){
		var _fileName;
		var _maxFileSize = 2000000; // ไม่เกิน 2 MB
		var _allowFileType = ["image/jpeg","image/jpg","image/gif","image/png","image/JPG"]; // กำหนดชนิดไฟลที่อนุญาต
		// กำหนดข้อความ อ้างอิงค่าจาก key index ของตัวแปร _statusFileCode
		var _waringTextValue = ["กรุณาเลือกไฟล์","ขนาดไฟล์ไม่เกิน 2 MB","อนุญาตเฉพาะไฟล์  JPG"];
		
		if(window.FileReader && window.Blob) {
			// All the File APIs are supported.
			var files = $(this)[0].files;
			var _fileNameArr = [];
			var _statusFile = true;
			var _statusFileCode = 0;
			
			for (var i = 0; i < files.length; i++) {
				_fileNameArr.push(files[i].name);
				if(files[i].size > _maxFileSize){
					_statusFile = false;
					_statusFileCode = 1;
				}
				if($.inArray(files[i].type, _allowFileType) === -1 ){
					_statusFile = false;
					_statusFileCode = 2;
				}				
			}		
			_fileName = 	_fileNameArr.join(",");	
			if(_fileName==""){
				_statusFile = false;
			}
			// ส่วนของเงื่อนไข 
			if(_statusFile==false){ // ไม่ผ่านเงื่อนไข
				$("#_customFile").val("");
				$("#_customFile").next("div.invalid-feedback").text(_waringTextValue[_statusFileCode]);
			}else{ // ผ่านเงื่อนไข
				$("#_customFile").val("ok");
			}
		}else{
			var _filePath = $(this).val();
			var _fileName = _filePath.split("\\");
			_fileName = _fileName.pop();						
		}	
		$(this).next("label").text(_fileName);	
	});
	
     $("#myform1").on("submit",function(){
         var form = $(this)[0];
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');         
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

<div class="modal fade" id="t001" tabindex="-1" role="dialog" aria-labelledby="t001" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">รายละเอียดงาน</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <P style="font-size:17px">
      <a href="../assets/img/new/banner.jpg"><img src="../assets/img/new/banner.jpg" alt="Smiley face"  width="100%"></a> 
      <a href="../assets/img/new/map1.jpg"><img src="../assets/img/new/map1.jpg" alt="Smiley face"  width="100%"></a> 
      <img src="../assets/img/new/home1.jpg" alt="Smiley face"  width="100%">
      <img src="../assets/img/new/rang.jpg" alt="Smiley face"  width="100%">
      <img src="../assets/img/new/st01.jpg" alt="Smiley face"  width="100%">
      <img src="../assets/img/new/st_s.jpg" alt="Smiley face"  width="100%">
      </P>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


</html>