<?php
session_start();
session_destroy()
?>
<!--

=========================================================
* Now UI Kit - v1.3.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-kit
* Copyright 2019 Creative Tim (http://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
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

<body class="login-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">


      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
          <li class="nav-item">
            
          </li>
          <li class="nav-item">
           
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="#" target="_blank">
              <i class="fab fa-facebook-square"></i>
              <p class="d-lg-none d-xl-none">Facebook</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="#" target="_blank">
              <i class="fab fa-instagram"></i>
              <p class="d-lg-none d-xl-none">Instagram</p>
            </a>
          </li>
        </ul>
      </div>
      
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image" style="background-image:url(../assets/img/105762.jpg)"></div>
    <div class="content">
      <div class="container">





      
        <div class="col-md-6 ml-auto mr-auto">
          <div class="card card-login card-plain">
            <form id="myform1" name="myform1" method="post" action="C_Register.php" novalidate>
              <div class="card-header text-center">
              <a href="#">
              งานวิ่งเพื่อพัฒนาคุณภาพชีวิตและส่งเสริมการท่องเที่ยว อ.ปางศิลาทอง ครั้งที่ 1  ประจำปี 2562 
              </a>
                <img src="../assets/img/new/logo.png" alt="" height="100%" width="100%">
                <div class="logo-container">
                </div>
              </div>

                <div class="input-group no-border input-xl">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons users_circle-08"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="เลขที่บัตรประชาชน หรือ เลขที่หนังสือเดินทาง"  name="name_id" id="name_id" autocomplete="off" value=""  required >
                  <div class="invalid-feedback">
                      กรุณากรอกเลขที่บัตรประชาชน หรือ เลขหนังสือเดินทาง
                  </div>   
                </div>
              <div class="card-footer text-center">
                <button type="submit" name="btn_submit" id="btn_submit" value="1" class="btn btn-info btn-round btn-lg btn-block">สมัครวิ่ง</button>
                <button type="button" class="btn btn-warning btn-round btn-lg btn-block" data-toggle="modal" data-target="#t001">รายละเอียดงาน</button>
                <!--
                <a href="../assets/files/001.pdf" download="ใบสมัครสำหรับผู้ที่ต้องการสมัครแบบ ออฟไลน์" class="btn btn-default" >Download ใบสมัครสำหรับผู้ที่ต้องการสมัครแบบ ออฟไลน์</a>
                -->
            </form>
            </div>
          </div>
          <h6>
                ติดต่อสอบถามเพิ่มเติม <br>
                    โทร 0856068261 คุณอนุชา     ติดต่อ การเงิน<br>
                    โทร 0625565924 คุณมินตรา    ติดต่อ การแก้ไขข้อมูล<br>
                    โทร 0938489918 คุณนิสา      ติดต่อ สอบถามข้อมูล<br>
            </h6>

        </div>
      </div>
    </div>
    <footer class="footer">
      <div class=" container ">

        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>, Designed by
          <a href="https://www.facebook.com/MeIdeabyMintra/" target="_blank">me idea</a>. Coded by
          <a href="https://www.facebook.com/apichat.thongngoen" target="_blank">apichat</a>.
        </div>
      </div>
    </footer>
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