<?php
error_reporting(0);
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');

/***[ Color ]***/
$ngay=date("d/m");
$day=date("d/m");
$ngay = date("d");
$thang = date("m");
$nam = date("Y");
$loaitool="Tool Vip Nhiều Chế Độ";
$vienden="\033[100m"; 
$viendo="\033[101m"; 
$vienluc="\033[102m"; 
$vienvang="\033[103m"; 
$vienxduong="\033[104m"; 
$vienhong="\033[105m"; 
$vienxnhac="\033[106m"; 
$vientrang="\033[107m";
$maufulltrang= "\e1;47;33m"; 
$maufullxduong= "\e[1;47;34m"; 
$maufulldo= "\e[1;47;31m"; 
$maufullluc= "\e[1;47;32m"; 
$maufullxnhac= "\e[1;47;36m"; 
$maufullden= "\e[1;47;30m"; 
$maufullvang= "\e[1;47;33m"; 
$maufullhong= "\e[1;47;33m"; 
$denthui="\033[0;30m"; 
$res="\033[0m"; 
$do="\033[0;31m"; 
$grean="\033[1;32m"; 
$mit="\033[0;32m"; 
$vang="\033[0;33m"; 
$mti="\033[0;33m"; 
$test="\033[1;33m"; 
$tim="\033[1;36m"; 
$lam="\033[1;34m"; 
$tmi="\033[1;34m"; 
$hong="\033[1;35m"; 
$imt="\033[1;35m"; 
$blue="\033[1;36m"; 
$trang="\033[1;37m"; 
$ress="\033[0;32m"; 
$res="\033[0;33m"; 
$green="\033[0;37m"; 
$yellow="\033[0;33m"; 
$white= "\033[0;33m"; 
$xnhac= "\033[1;96m"; 
$den="\033[1;90m"; 
$do="\033[1;91m"; 
$luc="\033[1;92m"; 
$vang="\033[1;93m"; 
$xduong="\033[1;94m"; 
$hong="\033[1;95m"; 
$trang="\033[1;97m"; 
$banner="\r\n"; 
$ngay=date("d/m"); 
$day=date("d/m"); 
$BBlack="\033[1;30m"; 
$BRed="\033[1;31m"; 
$BGreen="\033[1;32m"; 
$BYellow="\033[1;33m"; 
$BBlue="\033[1;34m"; 
$BPurple="\033[1;35m";
$BPurpleb="\033[1;50m";  
$BCyan="\033[1;36m"; 
$BWhite="\033[1;37m"; 
$Blue="\033[0;34m"; 
$res="\033[0m"; 
$red="\033[1;31m"; 
$xanh="\033[1;32m"; 
$cyan="\033[1;36m"; 
$yellow="\033[1;33m"; 
$turquoise="\033[1;34m";
$maugi="\033[1;35m"; 
$white= "\033[1;37m";
$ngay = date("d"); 
$thang = date("m"); 
$nam = date("Y");
$a=date('d'); // 
	$b=date("m");
	$thoigian=date('d/m');
$day = [];
$day= date('d-m-y');
$today = date("d-m-y");  
$d = date("d-m"); 
$xx = "32121";   
$toantool = "\033[1;37m[\033[1;31m+\033[1;37m] \033[1;37m=> \033[1;32m"; 
$baotri = "\033[1;33m [Bảo Trì]";   
/***[ USERAGENT ]***/
$_SESSION['useragent'] = 'Mozilla/5.0 (Linux; Android 11; M2010J19SG) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.46 Mobile Safari/537.36';
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
$_SESSION['load'] = 200;
} else {
$_SESSION['load'] = 0;
}
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";

	//codekey
$a=date('d'); 
        $b=date("m");
        $thoigian=date('d/m');
$day = [];
$day= date('d-m-y');
$today = date("d-m-y");
$d = date("d-m");

@system('clear');
/***[ USERAGENT ]***/
$_SESSION['useragent'] = 'Mozilla/5.0 (Linux; Android 11; M2010J19SG) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.46 Mobile Safari/537.36';
/***[ Delay ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
	$_SESSION['load'] = 2000;
	$_SESSION['delay'] = 150000;
} else {
	$_SESSION['load'] = 0;
	$_SESSION['delay'] = 50000;
}
/***[ Đánh Dấu Bản Quyền ]***/
$thanh_xau= "\033[1;31m [\033[1;37m[".$luc."●".$do."]\033[1;31m]\033[1;37m => \033[1;32m";
$thanh_dep= "$Yellow  ➡  ";
$thanhs = $vang." --☢☢☢--                                                             ";
$thanhngang = $xanh."--------------------------------------------------------------------\n";
$thanhngang1 = $xanh."--------------------------------------------------------------------\n";
$daucau = "\n\033[1;31m [\033[1;37m[".$luc."●".$do."]\033[1;31m] \033[1;37m";
$daucauc = "\033[1;31m [\033[1;37m[".$luc."●".$do."]\033[1;31m]\033[1;37m => \033[1;32m";
$banner = "



\033[1;32m╔═════════════════════════════════════════════════════════════╗     
\033[1;32m║ \033[1;95m ██████╗ \033[0;34m  ██╗   ██╗     \033[1;32m   ║ ~                             ║
\033[1;32m║ \033[1;95m   ╚════██╗ \033[0;34m ██║  ██║     \033[1;32m  ║    Copyright: Ta Quang Huy    ║ 
\033[1;32m║ \033[1;95m      ███╔═  \033[0;34m  ███████║    \033[1;32m ║    Tool TDS - TTC             ║
\033[1;32m║ \033[1;95m     ███████  \033[0;34m   ██║  ██║   \033[1;32m║    Phiên Bản: Fast1.0         ║
\033[1;32m║ \033[1;95m       ╚══════╝\033[0;34m    ═╝  ╚═   \033[1;32m║                             ~ ║        
\033[1;32m╚═════════════════════════════════════════════════════════════╝
  \033[1;32m  - - - - - - - - - - - - - - - - - - - - - - - - - - - -
$Yellow  ➡ $luc TIME $vang ngày $trang $ngay $vang Tháng $trang $thang$vang Năm $trang $nam 
$Yellow  ➡ $luc TOOL VERSION 4.0
$Yellow  ➡ $luc Liên hệ hỗ trợ:$trang https://www.facebook.com/Taquanghuy.Andrew
$Yellow  ➡ $luc Mua Key:$trang 0345794645
$Yellow  ➡ $luc Website:$trang https://Dichvufast.com
  \033[1;32m  - - - - - - - - - - - - - - - - - - - - - - - - - - - -
";
/***[ Banner ]***/
/***[ Clear + Thông Số Admin ]***/
if (file_exists('luutim.txt')){
	fopen("luutim.txt", "a+");
}
if (file_exists('luusub.txt')){
	fopen("luusub.txt", "a+");
}

@system('clear');
echo $banner;
echo "\n                    \033[1;36m TOOl VERSION 4.0";

                                      echo "$thanhs\n";
while (true){
if (file_exists("token.txt")){
	$_SESSION['token'] = fread(fopen("token.txt", "r"), filesize("token.txt"));
	$login = logintoken();
	echo $thanh_dep.$luc."Nhập ".$vang."[".$trang."1".$vang."] ".$luc."Giữ Lại Tài Khoản ".$vang.$_SESSION['user']."\n";
	echo $thanh_dep.$luc."Nhập ".$vang."[".$trang."2".$vang."] ".$luc."Nhập Access_Token TTC Mới \n";
	echo $thanh_dep.$luc."Nhập ".$trang."===>: $vang";
    	$chon_tk = trim(fgets(STDIN));
    if ($chon_tk == "2") {
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
			@system("rm token.txt");
		} else {
			@system("del token.txt");
		}
        echo $thanhngang1;
	} else if ($chon_tk == "1") {
    } else {
		echo $do." Lựa chọn không xác định !!!\n"; 
		echo $thanhngang1; continue;
    }
}
if(!file_exists("token.txt")){
echo $thanh_dep.$luc."Nhập Token TTC: $vang";
	$tokenacc = trim(fgets(STDIN));
$file = fopen("token.txt", "a+");
fwrite($file, ''.$tokenacc);
fclose($file);
}
$_SESSION['token'] = fread(fopen("token.txt", "r"), filesize("token.txt"));
	$login = logintoken();
	if($login == true){
		echo $xnhac." Đăng Nhập Thành Công.       \n";
		break;
	} else {
		echo $do." Access_Token TTC Sai \n";
		if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
			@system("rm token.txt");
		} else {
			@system("del token.txt");
		}
		echo $thanhngang1;
	}
}
$xu = coin($thanh_dep);
@system('clear');
echo $thanhngang;


echo "\n                        \033[1;35m Website:DICHVUFAST.COM
      \033[1;38m              Hệ Thống Tăng Tương Tác Hàng Đầu Việt Nam\n";

echo $thanhngang;
echo $thanh_dep.$luc."Tên Tài Khoản: ".$vang.$_SESSION['user']."\n";
echo $thanh_dep.$luc."Xu hiện tại: ".$vang.$xu."\n";
echo $thanhngang1;
$dem = 0;
while (true){
echo $thanh_dep.$luc."Nhập ".$do."[".$vang."1".$do."]".$luc." Nhiệm Vụ Tim \n";
echo $thanh_dep.$luc."Nhập ".$do."[".$vang."2".$do."]".$luc." Nhiệm Vụ Follow\n";
echo $thanh_dep.$luc."Nhập ".$do."[".$vang."3".$do."]".$luc." Làm Lại Tim \n";
echo $thanh_dep.$luc."Nhập ".$do."[".$vang."4".$do."]".$luc." Làm Lại Follow \n";
echo $thanh_dep.$luc."Nhập Số Để Chạy Nhiệm Vụ: $vang";
	$nhiemvu = trim(fgets(STDIN));
echo $thanh_dep.$luc."Nhập Delay: $vang";
	$delay = trim(fgets(STDIN));
echo $thanhngang1;
while (true){
if($nhiemvu == 1){
    $listtim = get_tiktok("");
    if(count($listtim) == 0){
		echo $do." Đã Hết Nhiệm Vụ Tim             \r"; sleep (2); break;
	}
    for($lap = 0; $lap < count($listtim); $lap++){
    	$id = $listtim[$lap]["idpost"];
    	$link = $listtim[$lap]["link"];
    	if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
    	    @system('xdg-open '.$link);
    	} else {
        	@system('cmd /c start '.$link);
    	}
    	$xu = coin($thanh_dep);
    	$dem++;
    	$kl = "\e[1;32m⌠\e[1;33mFAST SERVICE\e[1;32m⌡\e[1;35m❯\e[1;36m❯\e[1;31m❯\033[1;34m[\033[1;33m".$dem."\033[1;34m]\033[91m| \033[1;36m".date("H:i:s")."\033[91m | \033[1;".rand(31,37)."m"." TIM \033[91m | \033[1;37m".$id." \n";
		for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(1500);}
		delay($delay);
    	$list = $list.$id.",";
    	if($dem % 10 == 0){
    		$list = substr($list, 0, (strlen($list) - 1));
    		$nhantien = nhantien($list, "");
    		if($nhantien["mess"]){
    			$xujob = $nhantien["sodu"];
    			$xu = $xu + $xujob;
    			$kl = "\e[1;32m⌠\e[1;33mFAST SERVICE\e[1;32m⌡\e[1;35m❯\e[1;36m❯\e[1;31m❯\033[1;36m Nhận Thành Công ".($xujob/500)." Nhiệm Vụ\033[91m | \033[1;32m+$xujob Xu \033[91m|\033[1;32m $xu \n";
				for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(500);}
				echo "\033[1;92m".str_repeat('- ', 35)."\n";
    		} else {
    			echo $do.$nhantien["error"]."          \n";
    			fwrite (fopen("luutim.txt", "a+"), $list.",");
    			sleep (1);
    		}
    		$list = '';
		}
    }
 } else if ($nhiemvu == 2){
    $listsub = get_tiktok("/subcheo");
    if(count($listsub) == 0){
		echo $do." Đã Hết Nhiệm Vụ Follow          \r"; sleep (2); break;
	}
    for($lap = 0; $lap < count($listsub); $lap++){
    	$id = $listsub[$lap]["idpost"];
    	$link = $listsub[$lap]["link"];
    	if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
    	    @system('xdg-open https://www.tiktok.com/@'.$link);
    	} else {
        	@system('cmd /c start https://www.tiktok.com/@'.$link);
    	}
    	$xu = coin($thanh_dep);
    	$dem++;
    	$kl = "\e[1;35m❯\e[1;36m❯\e[1;31m❯\033[1;34m[\033[1;33m".$dem."\033[1;34m]\033[91m| \033[1;36m".date("H:i:s")."\033[91m |  \033[1;37m".$id." \n";
		for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(1500);}
		delay($delay);
    	$list = $list.$id.",";
    	if($dem % 10 == 0){
    		$list = substr($list, 0, (strlen($list) - 1));
    		$nhantien = nhantien($list, "/subcheo");
    		if($nhantien["mess"]){
    			$xujob = $nhantien["sodu"];
    			$xu = $xu + $xujob;
    			$kl = "\e[1;32m⌠\e[1;33mFAST SERVICE\e[1;32m⌡\e[1;35m❯\e[1;36m❯\e[1;31m❯\033[1;36m Nhận Thành Công ".($xujob/1000)." Nhiệm Vụ\033[91m | \033[1;32m+$xujob Xu \033[91m|\033[1;32m $xu \n";
				for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(500);}
				echo "\033[1;92m".str_repeat('- ', 35)."\n";
    		} else {
    			sleep (1);
    			fwrite (fopen("luusub.txt", "a+"), $list.",");
    			echo $do.$nhantien["error"]."          \n";
    		}
    		$list = '';
    	}
    }


    
} else if ($nhiemvu == 3){
	$dem = 0;
	$list = explode (',', file_get_contents("luutim.txt"));
	for($lap = 0; $lap < (count($list) - 1); $lap++){
		$id = $list[$lap];
		echo $thanh_xau.$luc.$id."     \r"; usleep (10000);
		$nhantien = nhantien($id, "");
    	if($nhantien["mess"]){
    		$stt += 1;
    	}
	}
	$xu = coin($thanh_dep);
	$kl = "\e[1;32m⌠\e[1;33mFAST SERVICE\e[1;32m⌡\e[1;35m❯\e[1;36m❯\e[1;31m❯\033[1;36m Nhận Thành Công ".$stt." Nhiệm Vụ\033[91m | \033[1;32m+".($stt * 500)." Xu \033[91m|\033[1;32m $xu \n";
	for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(500);}
	if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
		system("rm luutim.txt");
	} else {
		system("del luutim.txt");
	}
	die;
} else if($nhiemvu == 4){
	$dem = 0;
	$list = explode (',', file_get_contents("luusub.txt"));
	for($lap = 0; $lap < (count($list) - 1); $lap++){
		$id = $list[$lap];
		echo $thanh_xau.$luc.$id."     \r"; usleep (10000);
		$nhantien = nhantien($id, "/subcheo");
    	if($nhantien["mess"]){
    		$stt += 1;
    	}
	}
	$xu = coin($thanh_dep);
	$kl = "\e[1;32m⌠\e[1;33mFAST SERVICE\e[1;32m⌡\e[1;35m❯\e[1;36m❯\e[1;31m❯\033[1;36m Nhận Thành Công ".$stt." Nhiệm Vụ\033[91m | \033[1;32m+".($stt * 1000)." Xu \033[91m|\033[1;32m $xu \n";
	for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(500);}
	if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
		system("rm luusub.txt");
	} else {
		system("del luusub.txt");
	}
	die;
} else {
	echo $do." Vui Lòng Chọn 1 Nhiệm Vụ (1 hoặc 2 hoặc 3 hoặc 4).     \n"; 
	echo $thanhngang1; break;
}
}
}
/***#####################[ FUNCTION ]#################### ***/
function logintoken(){
	$data = 'access_token='.$_SESSION['token'];
	$head[] = 'Content-type: application/x-www-form-urlencoded';
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => 'https://tuongtaccheo.com/logintoken.php',
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_COOKIEJAR => "TTC.txt",
		CURLOPT_COOKIEFILE => "TTC.txt",
        CURLOPT_USERAGENT => $_SESSION['useragent'],
        CURLOPT_ENCODING => TRUE
    ));
    $login = json_decode(curl_exec($ch));
if($login->status == 'success'){
	$xu = $login->data->sodu;
	$_SESSION['user'] = $login->data->user;
	$js = fopen($_SESSION['user'].".txt", "w+");
	file_put_contents($_SESSION['user'].".txt", file_get_contents("TTC.txt"));
	return $xu;
} else {
	return false;
}
}
function cauhinh($idtik){
    $data = "iddat[]=".$idtik."&loai=tt";
    $head = array(
"Host: tuongtaccheo.com",
"content-length: ".strlen($data),
"accept: */*",
"origin: https://tuongtaccheo.com",
"x-requested-with: XMLHttpRequest",
"user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.152 Mobile Safari/537.36",
"content-type: application/x-www-form-urlencoded; charset=UTF-8",
"referer: https://tuongtaccheo.com/cauhinh/index.php"
);
    $ch = curl_init();
    curl_setopt_array($ch, array(
	CURLOPT_URL => 'https://tuongtaccheo.com/cauhinh/datnick.php',
	CURLOPT_FOLLOWLOCATION => TRUE,
	CURLOPT_RETURNTRANSFER => 1,
	CURLOPT_POST => 1,
	CURLOPT_POSTFIELDS => $data,
	CURLOPT_SSL_VERIFYPEER => 0,
	CURLOPT_COOKIEFILE => $_SESSION['user'].".txt",
	CURLOPT_HTTPHEADER => $head,
	CURLOPT_ENCODING => TRUE
));
    $access = curl_exec($ch);
    if(strpos($access, 'Chưa đăng nhập !!!') !== false){
    	$login = logintoken();
    		if($login == true){
    			//echo $luc." COOKIE TUONGTACCHEO DIE, ĐĂNG NHẬP LẠI THÀNH CÔNG \n";
    		} else {
    			//echo $luc." COOKIE TUONGTACCHEO DIE, ĐĂNG NHẬP LẠI THẤT BẠI \n"; 
				die;	
    		}
	} else {
		return $access;
	}
}
function get_tiktok($type){
    $url  = "https://tuongtaccheo.com/tiktok/kiemtien".$type."/getpost.php";
    $head = array(
        "Host: tuongtaccheo.com",
        "accept: application/json, text/javascript, *" . "/" . "*; q=0.01",
        "x-requested-with: XMLHttpRequest",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
        "referer: https://tuongtaccheo.com/tiktok/kiemtien/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => $_SESSION['user'].".txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $data = json_decode(curl_exec($ch), true);
    return $data;
}
function nhantien($id,$type){
while (true){
    $url  = "https://tuongtaccheo.com/tiktok/kiemtien".$type."/nhantien.php";
    $data = "id=".$id;
    $head = array(
        "Host: tuongtaccheo.com",
        "content-length: " . strlen($data),
        "x-requested-with: XMLHttpRequest",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "origin: https://tuongtaccheo.com",
        "referer: https://tuongtaccheo.com/tiktok/kiemtien/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => $_SESSION['user'].".txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $data = curl_exec($ch);
    if($data == '0'){
    	$login = logintoken();
    	if($login == true){
    		//echo "\033[1;32m COOKIE TUONGTACCHEO DIE, ĐĂNG NHẬP LẠI THÀNH CÔNG \n";
             continue;
    	} else {
    		//echo "\033[1;31m COOKIE TUONGTACCHEO DIE, ĐĂNG NHẬP LẠI THẤT BẠI \n"; 
            die;
		}
	} else {
    	return json_decode($data, true);
    }
}
}
function coin($thanh_dep){
while (true){
	$ch = curl_init();
curl_setopt_array($ch, array(
	CURLOPT_URL => 'https://tuongtaccheo.com/home.php',
	CURLOPT_PORT => "443",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_SSL_VERIFYPEER => true,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_COOKIEFILE => $_SESSION['user'].".txt",
  ));
$access = curl_exec($ch);
curl_close($ch);
$xu = explode('"soduchinh">', explode('</strong>', $access)[0])[1];
if (strpos ($access, "Chào mừng") == false){
	$login = logintoken();
    if($login == true){
    	//echo "\033[1;32m COOKIE TUONGTACCHEO DIE, ĐĂNG NHẬP LẠI THÀNH CÔNG \n"; 
        continue;
    } else {
    	//echo "\033[1;31m COOKIE TUONGTACCHEO DIE, ĐĂNG NHẬP LẠI THẤT BẠI \n"; 
        die;	
    }
} else if ($xu !== ''){
	return $xu;
} else {
	echo "\033[1;31m Lỗi Không Xác Định                  \r";
}
}
}






function delay ($delay){
    
	for($tt = $delay ;$tt>= 1;$tt--){
        echo "\r\033[1;33m   TTC TIKTOK \033[1;31m ~>       \033[1;32m LO      \033[1;31m | $tt | "; usleep(150000);
        echo "\r\033[1;31m   TTC TIKTOK \033[0;33m   ~>     \033[0;37m LOA     \033[0;31m | $tt | "; usleep(150000);
        echo "\r\033[1;32m   TTC TIKTOK \033[0;33m     ~>   \033[0;37m LOAD    \033[0;31m | $tt | "; usleep(150000);
        echo "\r\033[1;34m   TTC TIKTOK \033[0;33m       ~> \033[0;37m LOADI   \033[0;31m | $tt | "; usleep(150000);
        echo "\r\033[1;35m   TTC TIKTOK \033[0;33m        ~>\033[0;37m LOADIN  \033[0;31m | $tt | "; usleep(150000);
        echo "\r\033[1;35m   TTC TIKTOK \033[0;33m        ~>\033[0;37m LOADING \033[0;31m | $tt | "; usleep(150000);
        echo "\r\033[1;35m   TTC TIKTOK \033[0;33m        ~>\033[0;37m LOADING.\033[0;31m | $tt | ";usleep(150000);} 
echo "\r\e[1;37m     📢 📢 📢   DICHVUFAST.COM                \r"; 
}
function hienthi($dem, $loai, $id, $xujob, $xu){
date_default_timezone_set( 'Asia/Ho_Chi_Minh' );
	$kl = "\e[1;32m⌠\e[1;33mLVB\e[1;32m⌡\e[1;35m❯\e[1;36m❯\e[1;31m❯\033[1;34m[\033[1;33m".$dem."\033[1;34m]\033[91m| \033[1;36m".date("H:i:s")."\033[91m | \033[1;".rand(31,37)."m".$loai."\033[91m | \033[1;37m".$id."\033[91m | \033[1;32m$xujob \033[91m|\033[1;32m $xu \n";
for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(500);}
}
function chay($t) { for ($x = 0; $x <= $t; $x++) { echo "\033[1;37m= ";usleep($_SESSION['load']); } echo"\n";}


?>