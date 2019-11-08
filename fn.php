<?php
// กรณีต้องการตรวจสอบการแจ้ง error ให้เปิด 3 บรรทัดล่างนี้ให้ทำงาน กรณีไม่ ให้ comment ปิดไป
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
//example of sending an sms using an API key / secret
require_once 'vendor/autoload.php';
require_once 'db_connect.php';
$mysqli = connect();

//send message using simple api params
function sen_sms($to,$text)///ส่ง sms
{   //create client with api key and secret
    $rest = substr($to, 1);
    $client = new Nexmo\Client(new Nexmo\Client\Credentials\Basic('c21feb7d', 'yrxEwwXERXj8yv7L'));
    $message = $client->message()->send([
        'to' => '66'.$rest,
        'from' => 'RFLpang',
        'text' => $text,
        'type' => 'unicode'
    ]);
    //array access provides response data
    //echo "Sent message to " . $message['to'] . ". Balance is now " . $message['remaining-balance'] . PHP_EOL;

    return "Sent message to " . $message['to'] . ". Balance is now " . $message['remaining-balance'] . PHP_EOL;
};
//echo sen_sms("0644128568","test");

function user_mysql($db,$to,$text)//หาข้อความตามที่กำหนด
{
$sql="SELECT * FROM $db WHERE name_id = '$to'";
$qr=select($sql); 
$rs=$qr[0];
$status=$rs[$text];
    return $status;
}

function uppic_only($img,$imglocate,$multi=false,$limit_size=2000000,$limit_width=false,$limit_height=false){
    $allowed_types=array("jpg","jpeg","gif","png","JPG");   // กำหนดนามสกุลของไฟล์ที่อนุญาตให้อัพโหลด 
    $file_up=NULL; // กำหนดชื่อไฟล์เริ่มต้น เป็น NULL
    $i_num = (isset($multi))?count($img['name']):false; // ตรวจสอบว่ามีการอัพทีละหลายๆ ไฟล์หรือไม่
    if($img["name"]!="" || @implode("",$img["name"])!=""){ // มีการส่งไฟล์เข้ามาจริง
        if($i_num!=1){
            $file_up = array();
            for($i=0;$i<$i_num;$i++){     // วนลูปกรณีอัพที่ละหลายไฟล์           
                $fileupload1=$img["tmp_name"][$i]; // ข้อมูลไฟล์อัพโหลด
                $data_Img=@getimagesize($fileupload1); // หาความกว้าง ความสูงของรูป
                $g_img=explode(".",$img["name"][$i]); // แยกข้อมูลจากชื่อไฟล์ เพื่อหา ชื่อไฟล์ นามสกุลไฟล์
                $ext = strtolower(array_pop($g_img));  // แยกนามกุลไฟล์ออกมา แล้วปรับให้เป็นตัวพิมพ์เล็ก
                $file_up_arr=time()."-".$i.".".$ext;  // กำหนดชื่อไฟล์ใหม่ ในที่นี้จะเป็นในรูปแบบ เช่น 1234556789-1.jpg                     
                $canUpload=0; // กำหนดสถานะอัพโหลดเริ่มต้น
                if(isset($data_Img) && $data_Img[0]>0 && $data_Img[1]>0){ // ตรวงสอบว่ามีข้อมูลเกี่ยวกับรูปหรือไม่ เช่น ความกว้าง สูง
                    if($img["size"][$i]<=$limit_size){   // ขนาดของรูปที่อัพโหลด จะต้องไม่เกิน ค่าที่กำหนด           
                        if($limit_width && $limit_height){ // ถ้ามีการกำหนดให้ตรวจสอบ ขนาดความกว้างและสูง ของรูป
                            if($data_Img[0]<=$limit_width && $data_Img[1]<=$limit_height){
                                $canUpload=1;
                            }                   
                        }elseif($limit_width>0 && $limit_height==false){// ถ้ามีการกำหนดให้ตรวจสอบ เฉพาะขนาดความกว้าง ของรูป
                            if($data_Img[0]<=$limit_width){
                                $canUpload=1;
                            }       
                        }elseif($limit_width==false && $limit_height>0){// ถ้ามีการกำหนดให้ตรวจสอบ เฉพาะขนาดความสูง ของรูป
                            if($data_Img[1]<=$limit_height){
                                $canUpload=1;
                            }                                               
                        }else{ // ไม่มีการรวจสอบเพิ่มเติมใดๆ นอกจากขนาดไฟล์
                            $canUpload=1;                   
                        }           
                    }          
                }  
                // เมื่อมีข้อมูลไฟล์ที่อัพโหลด และเป็นไฟล์ที่อนุญาต และสามารถอัพโหลดได้โดยไม่ติดเงื่อนไขใดๆ     
                if($fileupload1!="" && @in_array($ext,$allowed_types) && $canUpload==1){ 
                    echo "04";
                        // ตรวจสอบว่าเป็นไฟล์อัพโหลด และทำการย้ายไฟล์ไปยัง path ที่กำหนด           
                        if(is_uploaded_file($fileupload1) && @move_uploaded_file($fileupload1,$imglocate.$file_up_arr)){
                            array_push($file_up,$file_up_arr);
                            @chmod($imglocate.$file_up_arr,0777); // เปลี่ยน permission ของไฟล์ ส่วนใหย๋ค่ำสั่ง chmod จะใช้ไม่ได้                               
                        }
                }
            }
            if(count($file_up)==0){
                $file_up=NULL; // อัพโหลดไม่ได้ ให้เป็น NULL    
            }
        }else{
            $fileupload1=$img["tmp_name"]; // ข้อมูลไฟล์อัพโหลด
            $data_Img=@getimagesize($fileupload1); // หาความกว้าง ความสูงของรูป
            $g_img=explode(".",$img["name"]); // แยกข้อมูลจากชื่อไฟล์ เพื่อหา ชื่อไฟล์ นามสกุลไฟล์
            $ext = strtolower(array_pop($g_img));  // แยกนามกุลไฟล์ออกมา แล้วปรับให้เป็นตัวพิมพ์เล็ก
            $file_up=time().".".$ext;  // กำหนดชื่อไฟล์ใหม่ ในที่นี้จะเป็นในรูปแบบ เช่น 1234556789.jpg                  
            $canUpload=0; // กำหนดสถานะอัพโหลดเริ่มต้น
            if(isset($data_Img) && $data_Img[0]>0 && $data_Img[1]>0){ // ตรวงสอบว่ามีข้อมูลเกี่ยวกับรูปหรือไม่ เช่น ความกว้าง สูง
                if($img["size"]<=$limit_size){   // ขนาดของรูปที่อัพโหลด จะต้องไม่เกิน ค่าที่กำหนด           
                    if($limit_width && $limit_height){ // ถ้ามีการกำหนดให้ตรวจสอบ ขนาดความกว้างและสูง ของรูป
                        if($data_Img[0]<=$limit_width && $data_Img[1]<=$limit_height){
                            $canUpload=1;
                        }                   
                    }elseif($limit_width>0 && $limit_height==false){// ถ้ามีการกำหนดให้ตรวจสอบ เฉพาะขนาดความกว้าง ของรูป
                        if($data_Img[0]<=$limit_width){
                            $canUpload=1;
                        }       
                    }elseif($limit_width==false && $limit_height>0){// ถ้ามีการกำหนดให้ตรวจสอบ เฉพาะขนาดความสูง ของรูป
                        if($data_Img[1]<=$limit_height){
                            $canUpload=1;
                        }                                               
                    }else{ // ไม่มีการรวจสอบเพิ่มเติมใดๆ นอกจากขนาดไฟล์
                        $canUpload=1;                   
                    }           
                }          
            }  
            // เมื่อมีข้อมูลไฟล์ที่อัพโหลด และเป็นไฟล์ที่อนุญาต และสามารถอัพโหลดได้โดยไม่ติดเงื่อนไขใดๆ     
            if($fileupload1!="" && @in_array($ext,$allowed_types) && $canUpload==1){ 
                //echo "--00--$fileupload1---$imglocate.$file_up--";

                    // ตรวจสอบว่าเป็นไฟล์อัพโหลด และทำการย้ายไฟล์ไปยัง path ที่กำหนด           
                    if(is_uploaded_file($fileupload1) && @move_uploaded_file($fileupload1,$imglocate.$file_up)){
                        //echo "*****111111**********";      
                        @chmod($imglocate.$file_up,0755); // เปลี่ยน permission ของไฟล์ ส่วนใหย๋ค่ำสั่ง chmod จะใช้ไม่ได้   
                                             
                    }else{
                        $file_up=NULL; // อัพโหลดไม่ได้ ให้เป็น NULL
                    } 
            }else{
                $file_up=NULL; // อัพโหลดไม่ได้ ให้เป็น NULL
            }           
        }
    }
    return $file_up; // ส่งกลับชื่อไฟล์
}

function sen_notify($text1)
{
    
    $accToken = "RHARrG0MyAbviJy43O0F3Q74CFPYHWMx2ZUXTTqHzdd";
    $notifyURL = "https://notify-api.line.me/api/notify";
    
    $headers = array(
        'Content-Type: application/x-www-form-urlencoded',
        'Authorization: Bearer '.$accToken
    );
    $data = array(
        'message' => $text1
    );
    
    // ส่วนของการส่งการแจ้งเตือนผ่านฟังก์ชั่น cURL
    $ch = curl_init();
    curl_setopt( $ch, CURLOPT_URL, $notifyURL);
    curl_setopt( $ch, CURLOPT_POST, 1);
    curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 2); // ถ้าเว็บเรามี ssl สามารถเปลี่ยนเป้น 2
    curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 1); // ถ้าเว็บเรามี ssl สามารถเปลี่ยนเป้น 1
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec( $ch );
    curl_close( $ch );
    
    // ตรวจสอบค่าข้อมูล ว่าเป็นตัวแปร ปรเภทไหน ข้อมูลอะไร
    var_dump($result);
    
    // การเช็คสถานะการทำงาน 
    $result = json_decode($result,TRUE);
    // ดูโครงสร้าง กรณีแปลงเป็น array แล้ว
    //echo "<pre>";
    //print_r($result);
    
    // ตรวจสอบข้อมูล ใช้เป็นเงื่อนไขในการทำงาน
    if(!is_null($result) && array_key_exists('status',$result)){
        if($result['status']==200){
           // echo "Pass";
        }
    }
}
function sen_notify_AP($text1)
{
    
    $accToken = "PUUmiJehzGFYzxUlsFPBYRja1cLgCLWWPLmMeAPziuS";
    $notifyURL = "https://notify-api.line.me/api/notify";
    
    $headers = array(
        'Content-Type: application/x-www-form-urlencoded',
        'Authorization: Bearer '.$accToken
    );
    $data = array(
        'message' => $text1
    );
    
    // ส่วนของการส่งการแจ้งเตือนผ่านฟังก์ชั่น cURL
    $ch = curl_init();
    curl_setopt( $ch, CURLOPT_URL, $notifyURL);
    curl_setopt( $ch, CURLOPT_POST, 1);
    curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 2); // ถ้าเว็บเรามี ssl สามารถเปลี่ยนเป้น 2
    curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 1); // ถ้าเว็บเรามี ssl สามารถเปลี่ยนเป้น 1
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec( $ch );
    curl_close( $ch );

}
function sen_notify_Register($text1)
{
    
    $accToken = "5zbwMwmkd7HUM4AWZevbeu9aLmRY4TkxpJySHLrcR0V";
    $notifyURL = "https://notify-api.line.me/api/notify";
    
    $headers = array(
        'Content-Type: application/x-www-form-urlencoded',
        'Authorization: Bearer '.$accToken
    );
    $data = array(
        'message' => $text1
    );
    
    // ส่วนของการส่งการแจ้งเตือนผ่านฟังก์ชั่น cURL
    $ch = curl_init();
    curl_setopt( $ch, CURLOPT_URL, $notifyURL);
    curl_setopt( $ch, CURLOPT_POST, 1);
    curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 2); // ถ้าเว็บเรามี ssl สามารถเปลี่ยนเป้น 2
    curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 1); // ถ้าเว็บเรามี ssl สามารถเปลี่ยนเป้น 1
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec( $ch );
    curl_close( $ch );

}
function getAge($birthday) { ///หาอายุ
    $then = strtotime($birthday);
    return(floor((time()-$then)/31556926));
}

function age_type($id) ///ประเภทอายุการสมัครวิ่ง
{
    $birthdate=user_mysql("users",$id,"birthdate");
$strNewDate = date ("Y",  strtotime($birthdate));
if (($strNewDate-2000)>400) {
    $birthdate=date ("Y-m-d", strtotime("-543 year", strtotime($birthdate)));
}
$age=getAge($birthdate);
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
return $retu;
}

function bib_num($db)///ดึกค่าเลข bib
{   $sql="SELECT * FROM $db ORDER BY run_bib DESC LIMIT 0,1";
    $qr=select($sql); 
    $rs=$qr[0];
    $status=$rs["run_bib"];

    return $status; 
}