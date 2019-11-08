<?php
session_start();
require_once '../fn.php';

function TB_s()
{
    
    //$sql="SELECT users.name_id,pic.name_id    FROM users    INNER JOIN pic ON users.name_id=pic.name_id";
    $sql="SELECT users.*,pic.* FROM users,pic
    WHERE users.name_id = pic.name_id AND pic.status = '1'";
    $qr=select($sql); // select ข้อมูลในฐานข้อมูลมาแสดง
    $total=count($qr);  // จำนวนรายการทั้งหมด ที่ select
    $i=0; // จำเป็นต้องกำหนด
    while($i<count($qr)) // วนลูปแสดงข้อมูล 
    {
        $rs=$qr[$i]; // จำเป็นต้องกำหนด
        $i++;
        echo '<tr>';
        echo     '<td class="center">'.$i.'</td>';
        echo     '<td class="center">'.$rs['name_id'].'</td>';
        echo     '<td class="center">'.$rs['first_name'].' '.$rs['last_name'].'</td>';
        echo     '<td class="center">'.$rs['news'].'</td>';
        echo     '<td class="center">'.$rs['price'].'</td>';
        echo     '<td class="center">
                        <ul class="ace-thumbnails clearfix">
                        <li>
                            <a href="../picup/'.$rs['url'].'" title="Photo Title" data-rel="colorbox" class="cboxElement">
                                <img width="150" height="150" alt="150x150" src="../picup/'.$rs['url'].'">
                            </a>

                            
                        </li>
                        </ul>
                                            
                                       
                </td>';
        echo     '<td class="center">'.$rs['phone'].'</td>';
        echo     '<td class="center">
            
            <div class="hidden-sm hidden-xs btn-group">
            <form id="myform1" name="myform1" method="post" action="" novalidate>
            <input type="hidden"  value="'.$rs['name_id'].'"name="name_id" id="name_id"  >
                <button class="btn btn-xl btn-success" name="btn_submit_m" id="btn_submit_m" value="1" >
                    <i class="ace-icon fa fa-check bigger-120"></i>
                </button>
                </form>

            </div>

            <div class="hidden-md hidden-lg">
                <div class="inline pos-rel">
                    <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                        <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                    </button>

                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                        <li>
                            <a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
                                <span class="blue">
                                    <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
                                <span class="green">
                                    <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
                                <span class="red">
                                    <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
             
        </td>';
        echo '</tr>';
 // จำเป็นต้องกำหนด
    }
    //print_r($qr);
    
}

function TB_home_all()
{
        //$sql="SELECT users.name_id,pic.name_id    FROM users    INNER JOIN pic ON users.name_id=pic.name_id";
        $sql="SELECT * FROM users WHERE test_data = '1' ORDER BY id DESC ";
        $qr=select($sql); // select ข้อมูลในฐานข้อมูลมาแสดง
        $total=count($qr);  // จำนวนรายการทั้งหมด ที่ select
        $i=0; // จำเป็นต้องกำหนด
        while($i<count($qr)) // วนลูปแสดงข้อมูล 
        {
            $rs=$qr[$i]; // จำเป็นต้องกำหนด
            $i++;
            echo '<tr>';
            echo ' 
            <td class="center">
                <label class="pos-rel">
                    <input type="checkbox" class="ace" />
                    <span class="lbl">'.$i.'</span>
                </label>
            </td>';
            echo '<td>'.$rs['name_id'].'</td>';
            echo '<td>'.$rs['first_name'].' '.$rs['last_name'].'</td>';
            echo '<td> ,โทร '.$rs['phone'].' ,เลือด '.$rs['blood'].' ,โรคประจำตัว '.$rs['congenital_disease'].', เสื้อ '.$rs['size'].' ,<br>ที่อยู่ '.$rs['address'].'</td>';
                    $strNewDate = date ("Y",  strtotime($rs['birthdate']));
                    if (($strNewDate-2000)>400) {
                        $strNewDate=date ("Y-m-d", strtotime("-543 year", strtotime($rs['birthdate'])));
                    }
                    $age=getAge($strNewDate);
                    if ($age<20) {
                        $retu="Under 20 ";
                    } else if ($age<=30) {
                        $retu="21-30";
                    } else if ($age<=40) {
                        $retu="30-40";
                    } else if ($age<=50) {
                        $retu="41-50";
                    }else if ($age<=60) {
                        $retu="51-60";
                    } else if ($age>=60) {
                        $retu="Over 60";
                    } 
            echo '<td>'.$rs['news'].' '.$rs['sex'].' '.$retu.'</td>';
            echo '<td class="hidden-480">'.$rs['emergency_contact'].' โทร '.$rs['emergency_phone'].'</td>';
            echo '<td>
            <div class="hidden-sm hidden-xs action-buttons">
                <a class="blue" href="#">
                    <i class="ace-icon fa fa-search-plus bigger-130"></i>
                </a>

                <a class="green" href="#">
                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                </a>

                <a class="red" href="#">
                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                </a>
            </div>
            </td>';            



            echo '</tr>';
        }
}

function TB_home_nos()
{
        //$sql="SELECT users.name_id,pic.name_id    FROM users    INNER JOIN pic ON users.name_id=pic.name_id";
        //$sql="SELECT * FROM users WHERE test_data = '1' ORDER BY id DESC ";
        $sql="SELECT users.*,bib.* FROM users,bib
        WHERE users.name_id = bib.name_id AND users.news = 'ปกติ' ORDER BY bib.run_bib DESC ";
        $qr=select($sql); // select ข้อมูลในฐานข้อมูลมาแสดง
        $total=count($qr);  // จำนวนรายการทั้งหมด ที่ select
        $i=0; // จำเป็นต้องกำหนด
        while($i<count($qr)) // วนลูปแสดงข้อมูล 
        {
            $rs=$qr[$i]; // จำเป็นต้องกำหนด
            $i++;
            echo '<tr>';
            echo ' 
            <td class="center">
                <label class="pos-rel">
                    <input type="checkbox" class="ace" />
                    <span class="lbl">'.$rs['num_bib'].'</span>
                </label>
            </td>';
            echo '<td>'.$rs['name_id'].'</td>';
            echo '<td>'.$rs['first_name'].' '.$rs['last_name'].'</td>';
            echo '<td> ,โทร '.$rs['phone'].' ,เลือด '.$rs['blood'].' ,โรคประจำตัว '.$rs['congenital_disease'].' ,เสื้อ '.$rs['size'].' ,<br>ที่อยู่ '.$rs['address'].'</td>';
                    $strNewDate = date ("Y",  strtotime($rs['birthdate']));
                    if (($strNewDate-2000)>400) {
                        $strNewDate=date ("Y-m-d", strtotime("-543 year", strtotime($rs['birthdate'])));
                    }
                    $age=getAge($strNewDate);
                    if ($age<20) {
                        $retu="Under 20 ";
                    } else if ($age<=30) {
                        $retu="21-30";
                    } else if ($age<=40) {
                        $retu="30-40";
                    } else if ($age<=50) {
                        $retu="41-50";
                    }else if ($age<=60) {
                        $retu="51-60";
                    } else if ($age>=60) {
                        $retu="Over 60";
                    }  
            echo '<td>'.$rs['news'].' '.$rs['sex'].' '.$retu.'</td>';
            echo '<td class="hidden-480">'.$rs['emergency_contact'].' โทร '.$rs['emergency_phone'].'</td>';
            echo '<td>
            <div class="hidden-sm hidden-xs action-buttons">
                <a class="blue" href="#">
                    <i class="ace-icon fa fa-search-plus bigger-130"></i>
                </a>

                <a class="green" href="#">
                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                </a>

                <a class="red" href="#">
                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                </a>
            </div>
            </td>';            



            echo '</tr>';
        }
}

function TB_home_vip()
{
        //$sql="SELECT users.name_id,pic.name_id    FROM users    INNER JOIN pic ON users.name_id=pic.name_id";
        //$sql="SELECT * FROM users WHERE test_data = '1' ORDER BY id DESC ";
        $sql="SELECT users.*,bib.* FROM users,bib
        WHERE users.name_id = bib.name_id AND users.news = 'vip' ORDER BY bib.run_bib DESC ";
        $qr=select($sql); // select ข้อมูลในฐานข้อมูลมาแสดง
        $total=count($qr);  // จำนวนรายการทั้งหมด ที่ select
        $i=0; // จำเป็นต้องกำหนด
        while($i<count($qr)) // วนลูปแสดงข้อมูล 
        {
            $rs=$qr[$i]; // จำเป็นต้องกำหนด
            $i++;
            echo '<tr>';
            echo ' 
            <td class="center">
                <label class="pos-rel">
                    <input type="checkbox" class="ace" />
                    <span class="lbl">'.$rs['num_bib'].'</span>
                </label>
            </td>';
            echo '<td>'.$rs['name_id'].'</td>';
            echo '<td>'.$rs['first_name'].' '.$rs['last_name'].'</td>';
            echo '<td> ,โทร '.$rs['phone'].' ,เลือด '.$rs['blood'].' ,โรคประจำตัว '.$rs['congenital_disease'].' ,เสื้อ '.$rs['size'].' ,<br>ที่อยู่ '.$rs['address'].'</td>';
                    $strNewDate = date ("Y",  strtotime($rs['birthdate']));
                    if (($strNewDate-2000)>400) {
                        $strNewDate=date ("Y-m-d", strtotime("-543 year", strtotime($rs['birthdate'])));
                    }
                    $age=getAge($strNewDate);
                    if ($age<20) {
                        $retu="Under 20 ";
                    } else if ($age<=30) {
                        $retu="21-30";
                    } else if ($age<=40) {
                        $retu="30-40";
                    } else if ($age<=50) {
                        $retu="41-50";
                    }else if ($age<=60) {
                        $retu="51-60";
                    } else if ($age>=60) {
                        $retu="Over 60";
                    } 
            echo '<td>'.$rs['news'].' '.$rs['sex'].' '.$retu.'</td>';
            echo '<td class="hidden-480">'.$rs['emergency_contact'].' โทร '.$rs['emergency_phone'].'</td>';
            echo '<td>
            <div class="hidden-sm hidden-xs action-buttons">
                <a class="blue" href="#">
                    <i class="ace-icon fa fa-search-plus bigger-130"></i>
                </a>

                <a class="green" href="#">
                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                </a>

                <a class="red" href="#">
                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                </a>
            </div>
            </td>';            



            echo '</tr>';
        }
}



if ((isset($_POST["btn_submit_m"])) && ($_POST["btn_submit_m"] == "1")) {
    $idname_login=$_SESSION['name_login'];
    $idname=$_POST["name_id"];
    $run_bib=bib_num("bib");
    $run_bib+=1;
    if ($run_bib<10) {
        $num_bib="000".$run_bib;
    } else if($run_bib<100) {
        $num_bib="00".$run_bib;
    }else if($run_bib<1000) {
        $num_bib="0".$run_bib;
    }
    $data=array(
        "name_id"=>"$idname",
        "num_bib"=>$num_bib,
        "run_bib"=>$run_bib,
        "status"=>"1",
        "u_date"=>date("Y-m-d"),
        "u_time"=>date("H:i:s"),
    );
    insert("bib",$data);
    $data = array(
        "status"=>"2",
        "admin_name"=>$idname_login,
    );
    update("pic",$data,"name_id=".$idname);

    $text03="ชำระเงินเรียบร้อย BIB:".user_mysql("bib",$idname,"num_bib")."ประเภท:".user_mysql("users",$idname,"news")." 10km ".user_mysql("users",$idname,"sex")." ".age_type($idname)." วิ่ง 09-11-2019";
    $text04="ชำระเงินเรียบร้อย \n  BIB:".user_mysql("bib",$idname,"num_bib")." \n ลำดับ ID :".user_mysql("users",$idname,"name_id")." \n ชื่อ :".user_mysql("users",$idname,"first_name")." ".user_mysql("users",$idname,"last_name").
    " \n ประเภท:".user_mysql("users",$idname,"news")." 10km ".user_mysql("users",$idname,"sex")." ".age_type($idname);
    
    sen_sms(user_mysql("users",$idname,"phone"),$text03); 
    sen_notify_AP($text04);
}


if ((isset($_POST["btn_submit_login"])) && ($_POST["btn_submit_login"] == "1")) {
    $idname_login=$_POST["name_id"];
    $password=$_POST["password_1"];  
    echo $idname_login;
    echo "<br>";
    echo $password;
    $sql="SELECT * FROM login_u WHERE name_id = '$idname_login' and  password_1 = '$password'";
    $qr=select($sql); 
    $total=count($qr);
    $rs=$qr[0]; 
    $userMessage_login=$rs['name_id'];
  
      if ( $idname_login == $userMessage_login  ) {
      $_SESSION['name_login']="$idname_login";
      header("Location:home.php");
      echo "1";
      }else {
      echo "0";
    
        //header("Location:index.php");
       // header("Location:index.php");
      /// header("Location:cdfrom2.php");
      }
      
  };

  if ((isset($_POST["btn_sen_notify"])) && ($_POST["btn_sen_notify"] == "1")){
    $sql="SELECT * FROM users ORDER BY id DESC ";
        $qr=select($sql); 
        $total_all=count($qr);
    $sql="SELECT * FROM users WHERE test_data = '1' ORDER BY id DESC ";
        $qr=select($sql); 
        $total=count($qr);
    $sql="SELECT * FROM pic WHERE status = '1' ORDER BY id DESC ";
        $qr=select($sql); 
        $total2=count($qr);
    $sql="SELECT * FROM pic WHERE status = '2' ORDER BY id DESC ";
        $qr=select($sql); 
        $total3=count($qr);
    $sql="SELECT * FROM users WHERE test_data = '1' and news ='ปกติ' ORDER BY id DESC ";
        $qr=select($sql); 
        $total_no=count($qr);
    $sql="SELECT * FROM users WHERE test_data = '1' and news ='vip' ORDER BY id DESC ";
        $qr=select($sql); 
        $total_vip=count($qr);
        $total_nookey=$total_all-$total;
    //$sql="SELECT * FROM pic WHERE status = '1' ORDER BY id DESC ";
    $sql="SELECT users.*,pic.* FROM users,pic
        WHERE users.name_id = pic.name_id AND pic.status = '1' ";
        $qr=select($sql); 
        $total2=count($qr);
        $i=0; 
        while($i<count($qr)) 
        {
            $rs=$qr[$i]; 
            $total_noApprove_price+= $rs['price'];
            $i++; 
        }
    $sql="SELECT users.*,bib.* FROM users,bib
        WHERE users.name_id = bib.name_id AND users.news = 'vip' ORDER BY bib.run_bib DESC ";
        $qr=select($sql); 
        $total_vip_app=count($qr);
        $i=0; 
        while($i<count($qr)) 
        {
            $rs=$qr[$i]; 
            $total_vip_price+= $rs['price'];
            $i++; 
        }
    $sql="SELECT users.*,bib.* FROM users,bib
        WHERE users.name_id = bib.name_id AND users.news = 'ปกติ' ORDER BY bib.run_bib DESC ";
        $qr=select($sql); 
        $total_no_app=count($qr);
        $i=0; 
        while($i<count($qr)) 
        {
            $rs=$qr[$i]; 
            $total_no_price+= $rs['price'];
            $i++; 
        }
        $total_sumApprove_price=$total_vip_price +$total_no_price;
        $total_sumall_price=$total_sumApprove_price+$total_noApprove_price;

   $notify_Register=" \n ยอดผู้สมัครในระบบ : $total_all \n ยอดผู้สมัครที่คีย์ข้อมูลแล้ว : $total \n ประเภท ปกติ : $total_no \n ประเภท VIP : $total_vip \n สมัครยังไม่ได้คีย์ข้อมูล : $total_nookey \n ชำระแล้วไม่ได้ Approve  : $total2 \n Approve Run Bib : $total3 \n"
    ."VIP Approve Run Bib : $total_vip_app \n ปกติ Approve Run Bib : $total_no_app"
    ." \n ยอดเงินยังไม่ได้ Approve: $total_noApprove_price บาท"
    ." \n VIP Approve : $total_vip_price บาท"
    ." \n ปกติ Approve: $total_no_price บาท"
    ." \n Approve All : $total_sumApprove_price บาท"
    ." \n ยอดเงินในระบบทั้งหมด: $total_sumall_price บาท";
    sen_notify_Register($notify_Register);
    


  }
  
  $idname_login=$_SESSION['name_login'];
  $sql="SELECT * FROM login_u WHERE name_id = '$idname_login'  ";
  $qr=select($sql); 
  $total=count($qr);
  $rs=$qr[0]; 
  $userMessage=$rs['name_id'];
  if ( $userMessage == ""  ) {
   header("Location:index.php");
    //echo "-".$_SESSION['name'].$userMessage ;
    echo "10";
    }
  if ( $idname_login != $userMessage  ) {
    header("Location:index.php");
    //echo "-".$_SESSION['name'].$userMessage ;
    echo "11";
    }
    